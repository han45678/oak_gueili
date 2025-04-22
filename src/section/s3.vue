<script setup>
import { ref, onMounted } from 'vue';

const m_hint = ref(false);

onMounted(() => {
  if (window.innerWidth < 767) {
    m_hint.value = true;
  }
});
</script>

<template>
  <article class="s3 relative" id="s3">
    <transition name="fade">
      <div class="m_hint" v-if="m_hint" @click="m_hint = false">
        <div class="m_hint_content">
          <span class="font-['Noto_Serif_TC'] text-[#fff]">左右滑動觀看</span>
          <hr>
          <img src="@/section/s3/finger.webp" alt="finger">
        </div>
      </div>
    </transition>
    <div class="title">
      <h2 class="font-['Noto_Serif_TC'] text-[#fff]">大開西城天際線新眼界</h2>
      <h3 class="font-['Noto_Sans_TC'] text-[#fff]">對坐百年博愛政經特區，權掌西門雙捷運站</h3>
    </div>
    <div class="scroll-container">
      <img src="@/section/s3/bg.webp" alt="pic" />
    </div>
  </article>
</template>


<style lang="scss" scoped>
@import '@/assets/style/function.scss';

.s3 {
  position: relative;

  .m_hint {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: auto;
    background-color: rgba(0, 57, 138, 0.5);
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;

    .m_hint_content {
      width: 100%;
      max-width: 290px;

      span {
        width: 100%;
        display: block;
        color: #fff;
        text-align: center;
        font-size: 12;
        margin-bottom: size-m(5);
      }

      hr {
        width: 100%;

        height: 1px;
        background-color: #fff;
      }

      img {
        display: block;
        animation: slideX 5s ease-in-out infinite;
      }
    }

    @media screen and (min-width: 767px) {
      display: none;
    }
  }

  .title {
    text-align: center;
    position: absolute;
    top: size-m(45);
    left: 0;
    right: 0;
    margin: auto;
    text-shadow: 0px 0px 3px rgba(255, 255, 255, 0.50);

    @media screen and (min-width: 767px) {
      top: size(75);
    }

    h2 {
      font-weight: 700;
      font-size: size-m(28);
      line-height: 1.5;

      @media screen and (min-width: 767px) {
        font-size: size(40);
        font-weight: 500;
        line-height: 1.4;
        letter-spacing: 0.03;
      }
    }

    h3 {
      margin-top: size-m(10);
      font-size: size-m(15);
      font-weight: 400;
      line-height: 1.5;

      @media screen and (min-width: 767px) {
        margin-top: size(10);
        font-size: size(28);
        line-height: 1.4;
      }
    }
  }

  .scroll-container {
    overflow-x: auto;

    @media screen and (min-width: 767px) {
      overflow-x: unset;
      width: 100%;
    }

    img {
      height: calc(100vh - 16.8vw);
      width: auto;

      @media screen and (min-width: 767px) {

        width: 100%;
        height: auto;
      }
    }
  }
}

@keyframes slideX {
  0% {
    transform: translateX(0px);
  }
  33% {
    transform: translateX(-115px);
    
  }
  66% {
    transform: translateX(115px);
  }

  100% {
    transform: translateX(0);
  }
}

// 淡入淡出動畫
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>
