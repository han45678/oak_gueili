<template>
  <div>
    <div class="contact-info mx-auto  flex flex-col items-center justify-between">
      <div class="logo">
        <img src="@/section/form/logo.svg" alt="" data-aos="zoom-out" data-aos-delay="300" data-aos-duration="1000"/>
      </div> 
      <div class="flex justify-between w-full contact-item-box">
        <div class="flex contact-item justify-center items-center" @click="modalOpen = true; modalType = 'phone'"
          v-if="info.phone">
          <img src="@/section/form/phone.svg" alt="電話" srcset="" />
          <div>{{ info.phone }}</div>
        </div>
        <div class="flex contact-item justify-center items-center" @click="modalOpen = true; modalType = 'fb'">
          <img src="@/section/form/messenger.svg" alt="Facebook 諮詢" srcset="" />
          <div>Facebook 諮詢</div>
        </div>
        <div class="flex contact-item justify-center items-center btfanpage" @click="open()">
          <img src="@/section/form/fb.svg" alt="前往粉絲專頁" srcset="" />
          <div>前往粉絲專頁</div>
        </div>
        <div class="flex contact-item justify-center items-center btfanpage" @click="open1()">
          <img src="@/section/form/line.svg" alt="Line諮詢" srcset="" />
          <div>Line諮詢</div>
        </div>
      </div>
      <div class="flex justify-between w-full contact-item-box no-gap">
        <div class="flex contact-item justify-center items-center address">
          <div><span v-if="info.address1">{{ info.address1 }}：</span>{{ info.address }}</div>
        </div>
        <div class="flex contact-item justify-center items-center googlemap"
          @click="modalOpen = true; modalType = 'gmap'">
          <img src="@/section/form/gmap.svg" alt="導航 GoogleMap" srcset="" />
          <div>導航 GoogleMap</div>
        </div>
      </div>

    </div>
  </div>

  <!-- Mobile contact info -->
  <div v-if="$isMobile()" class="bg-white mo-contact-info flex justify-between w-full contact-item-box items-center">
    <div class="flex flex-1 flex-col contact-item justify-center items-center"
      @click="modalOpen = true; modalType = 'phone'" v-if="info.phone">
      <img src="@/section/form/phone.svg" alt="撥打電話" srcset="" />
      <div>撥打電話</div>
    </div>
    <div class="flex flex-1 flex-col contact-item justify-center items-center"
      @click="modalOpen = true; modalType = 'fb'">
      <img src="@/section/form/messenger.svg" alt="FB 諮詢" srcset="" />
      <div>FB 諮詢</div>
    </div>
    <div class="flex flex-1 flex-col contact-item justify-center items-center" @click="scrollTo('.order')">
      <img src="@/section/form/pen.svg" alt="預約賞屋" srcset="" />
      <div>預約賞屋</div>
    </div>
    <div class="flex flex-1 flex-col contact-item justify-center items-center" @click="open1()">
      <img src="@/section/form/line.svg" alt="預約賞屋" srcset="" />
      <div>Line諮詢</div>
    </div>
    <div class="flex flex-1 flex-col contact-item justify-center items-center"
      @click="modalOpen = true; modalType = 'gmap'">
      <img src="@/section/form/gmap.svg" alt="地圖導航" srcset="" />
      <div>地圖導航</div>
    </div>
  </div>

  <!-- Modal -->
  <input type="checkbox" v-model="modalOpen" id="contact-modal" class="modal-toggle" />
  <div class="modal -mt-20 md:-mt-72">
    <div class="modal-box py-12 relative flex flex-col items-center justify-center">
      <label for="contact-modal" class="btn btn-sm btn-circle absolute right-4 top-4">✕</label>
      <!-- icon -->
      <img class="h-12" v-if="modalType == 'phone'" src="@/section/form/phone.svg" alt="phone" srcset="" />
      <img class="h-12" v-else-if="modalType == 'fb'" src="@/section/form/messenger.svg" alt="fb" srcset="" />
      <img class="h-12" v-else-if="modalType == 'gmap'" src="@/section/form/gmap.svg" alt="gmap" srcset="" />
      <!-- title -->
      <div class="text-xl mt-4 font-bold">{{ modalType == 'phone' ? '賞屋專線' : modalType == 'fb' ? 'Facebook Messenger' :
        `${info.address2 ? info.address2 : '導航地址'}`
        }}</div>
      <!-- content -->
      <div class="text-md mt-4">{{ modalType == 'phone' ? info.phone : modalType == 'fb' ? '線上諮詢' :
        `${info.address}`
        }}</div>
      <!-- btn -->
      <div class="btn btn-lg bg-color1 border-0 text-white mt-12 hover:bg-color2" @click="go()"
        v-if="modalType != 'phone'" v-bind:class="{
          'hidden': modalType == 'phone' && !$isMobile(),
          'btlead': modalType == 'fb',
          'btsearch': modalType == 'gmap',
          'btcontac': modalType == 'phone'
        }">
        {{ modalType == 'phone' ? '撥打電話' : modalType == 'fb' ? '立即諮詢' :
          '開啟導航'
        }}</div>
      <!-- btn phone -->
      <div class="btn btn-lg bg-color1 border-0 text-white mt-12 hover:bg-color2" @click="go()" id="phonegtm" v-else
        v-bind:class="{
          'hidden': modalType == 'phone' && !$isMobile(),
          'btlead': modalType == 'fb',
          'btsearch': modalType == 'gmap',
          'btcontac': modalType == 'phone'
        }">
        {{ modalType == 'phone' ? '撥打電話' : modalType == 'fb' ? '立即諮詢' :
          '開啟導航'
        }}</div>
    </div>
  </div>


</template>

<style lang="scss">
@import "@/assets/style/function.scss";

.bg-color1 {
  background-color: #9e773c;
}

.hover\:bg-color2:hover {
  background-color: #573f1c;
}


.contact-info-img {
  height: 0;
  z-index: 52;
}

.contact-info {
  background:url("@/section/form/bg.webp");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  padding: size(55) size(0) size(55) size(0);
  width: size(1440);
  min-width: 680px;
  position: relative;
  z-index: 50;
  margin-top: size(50);
  margin-bottom: size(20);
  // background: #045147;

  .logo {
    position: relative;
    width: size(367);
    // height: size(172);
    // background-image: url("@/section/s1/logo.svg");
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    margin: size(30) auto 0;

    img {
      width: 100%;
    }

    .logot {
      position: absolute;
      top: 31%;
      left: 0;
      right: 0;
      margin: auto;
      width: 85%;
    }
  }

  .contact-item-box {
    position: relative;
    margin-top: size(20);
    gap: size(20);
    width: size(920);
    // min-width: 680px;

    .contact-item {
      background: #fff;
      color: #9e773c;
      width: 100%;
      flex: 1;
      padding: 1.1em 0;
      border-radius: .5em;
      font-size: size(16);
      line-height: 1.6; //3.8
      letter-spacing: 0em;
      // max-width: size(280);
      z-index: 1;
      transition: all .3s;
      cursor: pointer;
      //border: 1px solid #C29267;
      gap: 1em;

      &:hover {
        background: #967038;
        color: #fff;

        img {
          filter: brightness(0) invert(1);
        }
      }

      img {
        max-width: size(27);
        height: auto;
        max-height: size(27);
        filter: invert(44%) sepia(99%) saturate(269%) hue-rotate(357deg) brightness(90%) contrast(87%);
        transition: all .5s;
        margin: 0;
      }

      &.address {
        background-color: #eee;
        background-image: none;
        color: #000;
        z-index: 0;
        position: relative;
        flex: 2.17;
        // border-radius: 999px 0 0 999px;
        //  max-width: 9999px;
        justify-content: center;

        &::before {
          content: "";
          position: absolute;
          width: 8em;
          height: 100%;
          background-color: transparent;
          left: calc(100% - 4em);
          z-index: -1;
        }

        div {
          text-indent: 0em;
          white-space: normal;
          padding: 0 1em;
        }
      }


      &.googlemap {
        flex: 1;
        //    background-color: #9B1E44;
        border-left-width: 0;
        //  color: #fff;
        /*
        img {
          filter: brightness(0) invert(0);
        }

        &:hover {
   //     background-color: #C29267;
          color: #000;
          img {
            filter: brightness(0) invert(0);
          }
        }
          */
      }
    }

    &.no-gap {
      gap: 0 !important;
    }
  }
}

.modal-box {
  img {
    filter: invert(33%) sepia(97%) saturate(322%) hue-rotate(2deg) brightness(93%) contrast(89%);
  }
}

@media screen and (max-width:768px) {


  .mo-contact-info {
    z-index: 99;
    position: fixed;
    bottom: 0;
    left: 0;
    width: size-m(375);
    height: size-m(63);
    gap: size-m(1);
    box-shadow: 0 0 size-m(50) rgba(0, 0, 0, 0.501);
    background: #7e6025;

    .contact-item {
      height: 100%;
      font-size: size-m(16);
      font-weight: 400;
      color: #fff;
      border-left: 1px solid #fff9;

      img {
        margin-bottom: size-m(5);
        max-width: size-m(16.5);
        height: auto;
        max-height: size-m(16.5);
        filter: brightness(0) invert(1);
      }

      &:first-child {
        border-left: 0;
      }

    }
  }

  .contact-info {
    width: 100%;
    min-width: 0;
    // height: size-m(400);
    // border-radius: size-m(68);
    //padding: size-m(0) size-m(0);
    padding: size-m(80) 0 size-m(80) 0;
    margin-top: size-m(0);
    position: relative;
    justify-content: space-between;
    // background-size: size-m(450) auto;

    .logo {
      width: size-m(257);
      margin: size-m(40) auto size-m(30) auto;
      // margin-bottom: size-m(47);
    }

    .contact-item-box {
      position: relative;
      margin-top: size-m(0);
      gap: size-m(15);
      flex-direction: column;
      width: size-m(310);

      .contact-item {
        padding: 1.1em size-m(80);
        font-size: size-m(16);
        max-width: 100%;
        white-space: nowrap;
        margin: 0;

        img {
          max-width: size-m(27);
          height: auto;
          max-height: size-m(27);
          margin: unset;
          position: absolute;
          left: calc(50% - 5em);
          transform: translateX(-50%);
        }

        div {
          text-indent: 2em;
        }

        &.address {
          font-size: size-m(15);
          border-radius: size-m(0) size-m(0) 0 0;
          padding: 1.1em 0;
          margin-top: size-m(25);
          //font-size: .9em;

          &::before {
            width: 100%;
            height: 100%;
            bottom: -50%;
            left: 0;
          }
        }

        &.address+div {
          border-radius: 0 0 size-m(0) size-m(0);
        }

        &.googlemap {
          border-top-width: 0;
          border-left-width: 0;
        }
      }

      &.no-gap {
        gap: 0 !important;
      }
    }
  }
}
</style>

<script setup>
import info from "@/info"
import { inject, ref } from "vue";
const modalOpen = ref(false);
const modalType = ref('');

const go = () => {
  if (modalType.value == 'phone') {
    window.location.href = `tel:${info.phone.replace("-", "")}`;
    setTimeout(() => {
      window.location.href = "phoneThanks";
    }, 1000);
  } else if (modalType.value == 'fb') {
    window.open(info.fbMessage);
  } else if (modalType.value == 'gmap') {
    window.open(info.googleLink);

  }
}

const open = () => {
  window.open(info.fbLink);
}
const open1 = () => {
  window.open(info.lineLink);
}


const smoothScroll = inject('smoothScroll')
const scrollTo = (el) => {
  smoothScroll({
    scrollTo: document.querySelector(el)
  })
}

</script>
