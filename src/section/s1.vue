<template>
  <article class="s1 relative" id="s1">

    <video autoplay muted playsinline disablePictureInPicture controlslist="nodownload nofullscreen noremoteplay"
      controls="false">
      <!-- <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4"> -->
    </video>
    <!-- <img src="./s1/logo.webp" class="logo" data-aos="zoom-in" data-aos-delay="0">
    <img src="./s1/txt.svg" class="txt" data-aos="zoom-in" data-aos-delay="200"> -->
  </article>
</template>

<style lang="scss" scoped>
@import '@/assets/style/function.scss';

.s1 {
  width: 100%;
  min-height: size(900);
  max-height: size(1080);
  height: 100vh;
  background-color: #ccc;

  @media screen and (min-width:768px) {
    min-height: size(600);
    height: 100vh;
  }

  video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    pointer-events: none;
  }

  // .logo {
  //   width: size(518);
  //   position: relative;
  //   z-index: 3;
  // }

  // .txt {
  //   width: size(728);
  //   position: relative;
  //   z-index: 3;
  // }

}


/* 螢幕尺寸標準 */
/* 平板尺寸 */
@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {}

@media screen and (max-width: 767px) {



  .s1 {
    height: calc(100vh - 63px);
    min-height: size-m(604);
    max-height: size-m(667);
    height: size-m(604);
    font-size: size-m(16);
    flex-direction: column;
    padding: 0;
    gap: size-m(50);
    background: url("@/section/s1/bgm.webp");
    background-size: cover;

    .logo {
      width: size-m(215);
    }

    .txt {
      width: size-m(268);
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