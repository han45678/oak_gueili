<script setup>
</script>

<template>
  <article class="s8 relative" id="s8">
      <div class="text">
        <h2 class="font-['Noto_Sans_TC'] text-[#fff]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
          人間建築如繁星<br>與眾不同的才值得收藏
        </h2>
        <div class="line" />
        <p class="font-['Noto_Sans_TC'] text-[#fff]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
          建築界最精彩的壯遊<br>
          橡樹建設定格台灣最美眼界<br>
          以經典，對應土地美好<br>
          以極致視野，共鳴頂尖人士的世界身段<br>
          融合國際的建築趨勢與潮流<br>
          為台灣開創全新的房地產視野<br>
          坐擁最具增值優勢的土地資源<br>
          在大台北的核心地段，大展鴻鵠之志<br>
          <br>
          出手就擲地有聲，譜寫建築感動人心的主旋律
        </p>
      </div>
  </article>
</template>


<style lang="scss" scoped>
@import '@/assets/style/function.scss';

.s8 {
  width: 100%;
  height: size-m(698);
  background-image:url("@/section/s8/bg.webp");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  @media screen and (min-width:768px) {
    height: size(1080);
  }
  .text {
      text-align: center;
      width: 100%;
        padding: size-m(60) size-m(30) 0 size-m(30);
      @media screen and (min-width:768px) {
        width: size(590);
        margin-left: auto;
        margin-right: auto;
        padding: size(70) 0 0 0;
      }
      h2 {
        font-weight: 500;
        line-height: 1.4;
        letter-spacing: 0.06em;

        font-size: size-m(24);
        padding-bottom: size-m(15);
        @media screen and (min-width:768px) {
          font-size: size(40);
          padding-bottom: size(15);
        }
      }
      p {
        font-weight: 400;
        line-height: 1.9;
        font-size: size-m(14);
        letter-spacing: 0.03em;
        @media screen and (min-width:768px) {
          font-size: size(18);
        }
      }

    }
}
</style>
