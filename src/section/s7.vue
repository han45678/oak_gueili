<script setup>
</script>

<template>
  <article class="s7 relative" id="s7">
      <div class="text">
        <h2 class="font-['Noto_Sans_TC'] text-[#000]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
          橡樹建設
        </h2>
        <h3 class="font-['Noto_Sans_TC'] text-[#000]">
          為地標而生<br>台灣建築需要橡樹的國際觀
        </h3>
        <div class="line" />
        <p class="font-['Noto_Sans_TC'] text-[#000]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
          美的極致，就是永無止盡，不斷追求的進行式<br>
          這過程不斷提升再提升的美感進化<br>
          以台北市中心為起點，從信義區再到今日西區<br>
          持續一步一履不求快速<br>
          只為了讓台北市更美而存在<br>
          正是橡樹建築的文化精髓，也是他最迷人的魅力<br>
          不僅引進世界最尖端建築工法技術<br>
          挑戰業界最高建材品質<br>
          甚至時常率領建築團隊在國內外實地觀摩考察<br>
          我們不做老生常談的事<br>
          而是站在未來世代的角度談願景<br>
          不單盡力而為，更是全力以赴
        </p>
        <div class="text_bottom" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
          <span class="font-['Noto_Sans_TC'] text-[#000]">這是橡樹建築的使命，更是動力</span>
          <img class="hidden md:block" src="@/section/s7/text_bottom_pic.png" alt="text_bottom_pic">
          <img class="block md:hidden" src="@/section/s7/text_bottom_pic_m.png" alt="text_bottom_pic">
        </div>
      </div>
  </article>
</template>


<style lang="scss" scoped>
@import '@/assets/style/function.scss';

.s7 {
  width: 100%;
  // height: size(1080);
  background-image:
    linear-gradient(45deg, rgba(255, 255, 255, 0.5), rgba(200, 200, 200, 0.5), rgba(255, 255, 255, 0.5)),
    url("@/section/s5/bg.webp");
    background-size: contain;
  background-position: center;
  background-repeat: repeat;

  .text {
      text-align: center;
      width: 100%;
        padding: size-m(90) size-m(30);
      @media screen and (min-width:768px) {
        width: size(670);
        margin-left: auto;
        margin-right: auto;
        padding: size(120) 0;
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
        font-weight: 700;
        line-height: 1.4;
        letter-spacing: 0.06em;
        font-size: size-m(34);
        padding-bottom: size-m(30);
        @media screen and (min-width:768px) {
          font-size: size(50);
          padding-bottom: size(30);
        }
      }
      h3 {
        font-weight: 500;
        line-height: 1.4;
        letter-spacing: 0.06em;
        font-size: size-m(24);
        padding-bottom: size-(30);
        @media screen and (min-width:768px) {
          font-size: size(40);
          padding-bottom: size(30);
        }
      }
      .line {
          margin-bottom: size-m(30);
          width: 100%;
          height: size-m(10);
          background: linear-gradient(to right,
              #F0D178,
              #F7E28B,
              #FFDD7E,
              #FCD97A,
              #F3CD70,
              #E4BB60,
              #CFA049,
              #C2903B);
              @media screen and (min-width:768px) {
                margin-bottom: size(30);
                height: size(10);
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
      .text_bottom{
        display: flex;
        align-items: self-end;
        margin-top: size-m(10);
        @media screen and (min-width:768px) {
          gap: size(10);
          margin-top: size(10);
        }
        span{
          line-height: 1.7;
          font-size: size-m(14); 
          font-weight: 500;
          @media screen and (min-width:768px) {
            font-size: size(14);
            line-height: 1.9;
            stroke-linecap: 0.03em;
          }
        }
        img{
          width: size-m(108);
          @media screen and (min-width:768px) {
            width: size(394);
          }
        }
      }
    }
}
</style>
