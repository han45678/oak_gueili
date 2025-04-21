<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';

const splideRef = ref(null)
const no = ref(0);

const goPrev = () => {
  splideRef.value?.splide.go('-1')
  no.value = splideRef.value?.splide.index;
}

const goNext = () => {
  splideRef.value?.splide.go('+1')
  no.value = splideRef.value?.splide.index;
}

const switch_splide = (data) => {
  splideRef.value?.splide.go(data)
  no.value = data;
}

onMounted(() => {
  if (splideRef.value) {
    splideRef.value.splide.on('moved', () => {
      no.value = splideRef.value?.splide.index;
    });
  }
});

onBeforeUnmount(() => {
  if (splideRef.value) {
    splideRef.value.splide.off('moved');
  }
});
</script>

<template>
  <article class="s6 relative" id="s6">
    <div class="wrapper">
      <div class="pic">

        <div class="splide">

          <Splide ref="splideRef" :options="{
            type: 'slide',       // 使用 slide 模式而非 fade
            autoplay: false,     // 不自動播放
            interval: 5000,      // 可省略，因為 autoplay 是 false
            speed: 1000,         // 切換速度
            arrows: false,        // 顯示左右箭頭 ✅
            pagination: false,    // 顯示下方小點 ✅
            drag: true,          // 可拖曳
            perPage: 1,          // 每頁一張
            rewind: true         // 可循環播放
          }">
            <SplideSlide class="slide">
              <div class="slide_item">
                <div class="item_pic"><img src="@/section/s6/pic01.webp" alt="pic">
                  <span class="font-['Noto_Sans_TC'] text-[#fff]">3D透視示意圖</span>
                </div>

              </div>
            </SplideSlide>
            <SplideSlide class="slide">
              <div class="slide_item">
                <div class="item_pic"><img src="@/section/s6/pic02.webp" alt="pic">
                  <span class="font-['Noto_Sans_TC'] text-[#fff]">3D透視示意圖</span>
                </div>

              </div>
            </SplideSlide>
            <SplideSlide class="slide">
              <div class="slide_item">
                <div class="item_pic"><img src="@/section/s6/pic03.webp" alt="pic">
                  <span class="font-['Noto_Sans_TC'] text-[#fff]">3D透視示意圖</span>
                </div>

              </div>
            </SplideSlide>
          </Splide>

          <div class="splide_btn prev" @click="goPrev">
            <img class="block md:hidden" src="@/section/s4/next.svg" />
          </div>
          <div class="splide_btn next" @click="goNext">
            <img class="block md:hidden" src="@/section/s4/prev.svg" />
          </div>

          <div class="dots block md:hidden">
            <ul>
              <li :class="{ active: no === 0 }" @click="switch_splide(0)" />
              <li :class="{ active: no === 1 }" @click="switch_splide(1)" />
              <li :class="{ active: no === 2 }" @click="switch_splide(2)" />
            </ul>
          </div>

        </div>
        <img class="pic_text" src="@/section/s6/pic_text.svg" alt="text">
      </div>
      <div class="text">
        <div class="line" />
        <h2 class="font-['Noto_Sans_TC'] text-[#000]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
          建築會留下名字<br>成為口耳相傳的記憶
        </h2>
        <p class="font-['Noto_Sans_TC'] text-[#000]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
          如果不是三宅一生<br>
          摺皺的美感都會被熨斗剷平<br>
          如果不是柯布西耶<br>
          鋼鐵與混凝土恐怕從此與美的神韻絕緣<br>
          對未來理解太晚的人<br>
          不久就要嚐到落後的苦澀<br>
          有一副看遠的眼光<br>
          未來的視界才會掌握在你的手上<br>
          橡樹建設看向建築未來觀<br>
          引領高品味的流行感度<br>
          <br>
          橡樹建設攜手國際頂尖建築團隊<br>
          捎來瑰麗飯店、四季酒店、新世界酒店等全球一線建築的美學氣場<br>
          將自然的鬼斧神工融入建築設計，在百年西區核心鐫鑄當代地景雕塑<br>
          建築切分的上下量體降低整體尺度以尊重周遭涵構<br>
          各層樓漸次向上退縮則有助提升空間開放感<br>
          上部臨摹瀑布波動起伏，並在轉角處階梯狀傾瀉而下<br>
          如同山壁的岩石包裹流淌之飛瀑<br>
          矗於地表，鐫上天際
        </p>
        <img class="text_pic hidden md:block" src="@/section/s6/text.svg" alt="text">
      </div>
    </div>
  </article>
</template>


<style lang="scss" scoped>
@import '@/assets/style/function.scss';

.s6 {
  width: 100%;
  // height: size(1080);
  background-image: url("@/section/s5/bg.webp");
  background-size: contain;
  background-position: center;
  background-repeat: repeat;


  .wrapper {
    display: flex;
    flex-wrap: wrap;
    padding: size-m(60) size-m(30) 0 size-m(30);

    @media screen and (min-width:768px) {
      justify-content: center;
      gap: size(100);
      padding: size(150) size(230) size(150) size(200);
    }

    .pic {
      order: 2;


      @media screen and (min-width:768px) {
        order: 1;
        width: size(775);
      }

      .splide {
        position: relative;
        visibility: unset;

        .slogan_text {
          position: absolute;
          left: 0;
          right: 0;
          top: size-m(95);
        }

        .slide_item {

          .item_pic {
            position: relative;

            img {
              width: 100%;
            }

            span {
              position: absolute;
              bottom: size-m(5);
              right: size-m(5);
              font-weight: 500;
              font-size: 15px;
              line-height: 1.7;
            }
          }
        }

        .splide_btn {
          position: absolute;
          top: 50%;
          width: size-m(10);
          z-index: 1;
          cursor: pointer;

          @media screen and (min-width:768px) {
            top: 0;
          }

          &.top55 {
            top: 55%;

            @media screen and (min-width:768px) {
              top: 0;
            }
          }

          &.prev {
            left: size-m(-20);

            @media screen and (min-width:768px) {
              width: 30%;
              height: 100%;
              left: 0;
            }
          }

          &.next {
            right: size-m(-20);

            @media screen and (min-width:768px) {
              width: 30%;
              height: 100%;
              right: 0;
            }
          }

          img {
            width: 100%;
          }
        }

        .dots {
          position: absolute;
          bottom: size-m(10);
          display: flex;
          left: 0;
          right: 0;
          margin: auto;
          justify-content: center;

          @media screen and (min-width:768px) {
            bottom: size(10);
          }

          ul {
            display: flex;
            gap: size-m(5);

            @media screen and (min-width:768px) {
              gap: size(5);
            }

            li {
              width: size-m(7);
              height: size-m(7);
              border-radius: 100%;
              background-color: #fff;
              opacity: 0.5;

              @media screen and (min-width:768px) {
                width: size(7);
                height: size(7);
              }

              &.active {
                opacity: 1;
              }
            }
          }
        }
      }

      .pic_text {
        margin-top: size-m(10);
        width: size-m(300);
        @media screen and (min-width:768px) {
        margin-top: size(10);
        width: size(775)
        }
      }
    }

    .text {
      order: 1;
      text-align: center;
      margin-bottom: size-m(30);
      @media screen and (min-width:768px) {
        order: 2;
        width: size(570);
        text-align: left;
        margin-bottom: size(0);
      }

      .line {
        width: 100%;
        height: size-m(10);
        margin-bottom: size-m(30);
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
          width: size(560);
          height: size(18);
          margin-bottom: size(50);
        }
      }

      h2 {
        font-weight: 500;
        line-height: 1.4;
        letter-spacing: 0.05em;
        font-size: size-m(24);
        margin-bottom: size-m(15);
        font-size: size-m(24);

        @media screen and (min-width:768px) {
          margin-bottom: 0;
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

      .text_pic {
        @media screen and (min-width:768px) {
          margin-top: size(100);
        }
      }
    }
  }
}
</style>
