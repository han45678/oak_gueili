<script setup>
</script>

<template>
  <article class="s5 relative" id="s5">
    <div class="wrapper">
      <div class="pic">
        <div class="line hidden md:block" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="500" />
        <img class="pic_text hidden md:block" src="@/section/s5/text.svg" alt="text" data-aos="fade-right" data-aos-duration="1000"
          data-aos-delay="500">
        <img class="main_pic" src="@/section/s5/pic.webp" alt="pic" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
      </div>
      <div class="text">
        <img class="title_pic" src="@/section/s5/title.svg" alt="title" data-aos="fade-up" data-aos-duration="1000"
          data-aos-delay="500">
        <h2 class="font-['Noto_Sans_TC'] text-[#000]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
          獻給台北的世界封面<br>致以頂尖最臻稀的款待
        </h2>
        <p class="font-['Noto_Sans_TC'] text-[#000]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
          稱紐約瑰麗酒店為傳奇並不為過<br>
          從三○年代至今，就是名流貴族聚集的場所<br>
          不僅受到多任美國總統和賈姬的喜愛<br>
          英國皇室如威爾斯親王、黛安娜王妃、威廉王子與凱特王妃都曾下榻此處<br>
          這裡是一方可以窺見紐約層峰頂端生活的視窗<br>
          濃縮了曼哈頓上東城的所有美好<br>
          <br>
          把瑰麗酒店美學地標的精神帶進台灣<br>
          打造台北最美的奢居經典，締造住宅雍雅氣度<br>
          創造華貴生活價值典範，致以最臻稀的款待
        </p>
      </div>
    </div>
  </article>
</template>


<style lang="scss" scoped>
@import '@/assets/style/function.scss';

.s5 {
  width: 100%;
  // height: size(1080);
  background-image:
    linear-gradient(45deg, rgba(255, 255, 255, 0.8), rgba(200, 200, 200, 0.8), rgba(255, 255, 255, 0.8)),
    url("@/section/s5/bg.webp");
  background-size: contain;
  background-position: center;
  background-repeat: repeat;


  .wrapper {
    display: flex;
    flex-wrap: wrap;
    padding: size-m(60) size-m(15) 0 size-m(15);
    @media screen and (min-width:768px) {
      justify-content: center;
      padding: size(150) 0 0 0;
    }

    .pic {
      order: 2;
      position: relative;
      width: 100%;

      @media screen and (min-width:768px) {
        width: unset;
        padding-top: size(150);
        order: 1;
      }

      .pic_text {
        @media screen and (min-width:768px) {
          position: absolute;
          left: size(18);
          top: size(-75);
        }
      }

      .line {
        @media screen and (min-width:768px) {
          position: absolute;
          left: 0;
          top: size(-150);
          height: size(530);
          width: size(18);
        }

        background: linear-gradient(to bottom,
          #F0D178,
          #F7E28B,
          #FFDD7E,
          #FCD97A,
          #F3CD70,
          #E4BB60,
          #CFA049,
          #C2903B);
      }

      .main_pic{
        width: size-m(370);
        @media screen and (min-width:768px) {
          width: size(950);
        }
      }
    }

    .text {
      order: 1;
      text-align: center;
      width: 100%;
      margin-bottom: size-m(30);
      @media screen and (min-width:768px) {
        width: unset;
        order: 2;
        margin-bottom:0
      }
      .title_pic {
        width: size-m(290);
        margin-bottom:size-m(15);
        @media screen and (min-width:768px) {
          width: size(600);
          margin-bottom:0;
        }
      }
      h2 {
        font-weight: 500;
        line-height: 1.4;
        letter-spacing: 0.05em;
        font-size: size-m(24);
        margin-bottom: size-m(15);
        @media screen and (min-width:768px) {
          margin-bottom:0;
          padding-top: size(30);
          font-size: size(40);
          padding-bottom: size(30);
          letter-spacing: 0.1em;
        }
      }

      p {
        font-weight: 400;
        line-height: 1.7;
        font-size: size-m(14);
        @media screen and (min-width:768px) {
          font-size: size(18);
          line-height: 1.9;
          letter-spacing: 0.03em;
        }
      }
    }
  }
}
</style>
