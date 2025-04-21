<template>
  <article class="s2 relative" id="s2">
    <img class="decorations hidden md:block" src="@/section/s2/decorations.webp" alt="decorations">
    <div class="wrapper">
      <div class="text">

        <div class="title">
          <img src="@/section/s2/title.svg" alt="title" data-aos="fade-up" data-aos-duration="1000"
            data-aos-delay="500">
        </div>
        <div class="content">
          <img class="woman" src="@/section/s2/woman.webp" alt="woman" data-aos="fade-right" data-aos-duration="1000"
            data-aos-delay="500">
          <img class="text" src="@/section/s2/text.svg" alt="text" data-aos="fade-up" data-aos-duration="1000"
            data-aos-delay="500">
        </div>

        <img class="decorations block md:hidden" src="@/section/s2/decorations_m.svg" alt="decorations">

        <img class="smallText hidden md:block" src="@/section/s2/smallText.svg" alt="smallText">

      </div>
      <div class="pic">

        <div class="pic_content">
          <img src="@/section/s2/pic_main.webp" alt="pic_main">
          <div class="trText">瑰麗美學御所</div>
          <div class="brText">3D外觀透視圖</div>
        </div>
        <div class="pic_bottom">
          <img class="pic_logo_text" src="@/section/s2/pic_logo_text.svg" alt="pic" data-aos="fade-up"
            data-aos-duration="1000" data-aos-delay="500">
          <img class="pic_logo" src="@/section/s2/pic_logo.webp" alt="pic">
        </div>
      </div>
    </div>
  </article>
</template>

<style lang="scss" scoped>
@import '@/assets/style/function.scss';

.s2 {
  position: relative;
  background: url("@/section/s2/bg.webp");

  @media screen and (min-width:768px) {
    height: size(1188);
    overflow: hidden;
    background-size: cover;
    padding: size(145) size(115);
  }

  .decorations {
    @media screen and (min-width:768px) {
      position: absolute;
      bottom: 0;
      left: 0;
      width: size(895);
    }
  }

  .wrapper {
    display: flex;
    flex-wrap: wrap;

    .text {
      position: relative;
      width: 100%;

      @media screen and (min-width:768px) {
        width: 45%;
      }


      .title {
        width: size-m(190);
        margin: size-m(90) auto size-m(30) auto;

        @media screen and (min-width:768px) {
          width: size(340);
          margin: size(60) 0 size(75) 0;
        }

        text-align: center;

        img {
          width: 100%;
        }
      }

      .content {
        .woman {
          width: size-m(175);
          margin-left: size-m(-45);

          @media screen and (min-width:768px) {
            width: size(325);
            margin-left: 0;
          }
        }

        .text {
          width: size-m(190);
          @media screen and (min-width:768px) {
            width: size(340);
            margin-top: size(90);
            margin-left: size(-50);
          }
        }
      }

      .smallText {
        @media screen and (min-width:768px) {
          position: absolute;
          right: size(10);
          top: 0;
        }
      }

      .decorations{
        width: size-m(385);
        position: absolute;
        bottom: size-m(-140);
        left: size-m(-10);
      }
    }

    .pic {
      width: 100%;

      @media screen and (min-width:768px) {
        width: 55%;
      }

      .pic_content {
        position: relative;

        img {
          width: 100%;
        }

        .trText {
          position: absolute;
          color: #fff;
          font-weight: 400;
          line-height: 1.4;
          writing-mode: vertical-lr;
          font-size: size-m(14);
          top: size-m(10);
            right: size-m(10);
          @media screen and (min-width:768px) {
            font-size: size(30);
            right: size(10);
            top: size(10);
            text-shadow: 0 size(2) size(10) rgba(0, 0, 0, 0.5);
            letter-spacing: 0.4em;
          }
        }

        .brText {
          position: absolute;
          color: #fff;
          font-weight: 500;
          line-height: 1.7;
          font-size: size-m(9);
          bottom: size-m(10);
            right: size-m(10);
          @media screen and (min-width:768px) {
            bottom: size(10);
            right: size(10);
            font-size: size(15);
            text-shadow: 0 size(4) size(4) rgba(0, 0, 0, 0.25);
          }
        }
      }

      .pic_bottom {
        position: relative;
        margin-top: size-m(15);
        margin-bottom: size-m(45);
        @media screen and (min-width:768px) {
          margin-top: size(10);
          margin-bottom:0
        }

        .pic_logo_text {
          position: relative;
          z-index: 1;
          width: size-m(250);
          padding-left: size-m(10);
          @media screen and (min-width:768px) {
            width: size(635);
          }

          
        }

        .pic_logo {
          position: absolute;
          top: 0;
          width: size-m(120);
          right: size-(-15);
          @media screen and (min-width:768px) {
            width: size(310);
            right: 0;
          }

          
        }
      }
    }

  }

}
</style>
<script setup>
import { computed, getCurrentInstance, ref, inject } from 'vue';
const globals = getCurrentInstance().appContext.config.globalProperties;

const isMobile = computed(() => globals.$isMobile());

const smoothScroll = inject('smoothScroll')
const scrollTo = (el) => {
  smoothScroll({
    scrollTo: document.querySelector(el)
  })
}
</script>