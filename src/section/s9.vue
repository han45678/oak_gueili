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
  <article class="s9 relative" id="s9">
    <div class="text">

      <div class="magazine_text_m block md:hidden">
        <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
          這是一棟可以榮登<br>Wallpaper雜誌封面的建築
        </h2>
        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
          跨越12,500公里的頂奢精品血統<br>
          曾任紐約KPF建築師事務所的Edwin Lau<br>
          參與規劃國際瑰麗酒店、四季酒店等世界傳奇酒店<br>
          經典作品遍及歐、美、亞三大洲<br>
          極具原創性、高度美學價值與藝術品味深度<br>
          回應地景文脈與場域精神<br>
          將建築獨特故事說得淋漓盡致<br>
          當人們置身其間，空前的感官體驗啟程<br>
          <b>由外向心靈層次遞進，樹立奢華的嶄新層級</b>
        </p>
      </div>

      <div class="author">
        <div class="title hidden md:block">
          <img src="@/section/s9/title.svg" alt="title">
        </div>

        <div class="author_main hidden md:block">
          <div class="author_pic" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            <img src="@/section/s9/author.webp" alt="author">
          </div>
          <div class="list" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            <img src="@/section/s9/works.svg" alt="title">
          </div>
        </div>

        <div class="author_main block md:hidden">
          <img class="author_m" src="@/section/s9/author_m.svg" alt="author">
        </div>

      </div>

      <div class="magazine">
        <div class="magazine_text hidden md:block">
          <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            這是一棟可以榮登<br>Wallpaper雜誌封面的建築
          </h2>
          <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" class="hidden md:block">
            跨越12,500公里的頂奢精品血統<br>
            曾任紐約KPF建築師事務所的Edwin Lau<br>
            參與規劃國際瑰麗酒店、四季酒店等世界傳奇酒店<br>
            經典作品遍及歐、美、亞三大洲<br>
            極具原創性、高度美學價值與藝術品味深度<br>
            回應地景文脈與場域精神<br>
            將建築獨特故事說得淋漓盡致<br>
            當人們置身其間，空前的感官體驗啟程<br>
            <b>由外向心靈層次遞進，樹立奢華的嶄新層級</b>
          </p>

          <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" class="block md:hidden">
            跨越12,500公里的頂奢精品血統<br>
            曾任紐約KPF建築師事務所的Edwin Lau<br>
            參與規劃國際瑰麗酒店<br>
            四季酒店等世界傳奇酒店<br>
            經典作品遍及歐、美、亞三大洲<br>
            極具原創性、高度美學價值與藝術品味深度<br>
            回應地景文脈與場域精神<br>
            將建築獨特故事說得淋漓盡致<br>
            當人們置身其間，空前的感官體驗啟程<br>
            <b>由外向心靈層次遞進，樹立奢華的嶄新層級</b>
          </p>
        </div>

        <div class="splide">
          <div class="text_m block md:hidden">
            <div class="text_m_content">
              <img src="@/section/s9/text_m.svg" alt="text_m">
              <div class="line" />
            </div>
          </div>


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
                <div class="item_pic"><img src="@/section/s9/pic01.webp" alt="pic">
                  <span class="font-['Noto_Sans_TC'] text-[#fff] block md:hidden">
                    信義區 琢格77<br>
                    3D外觀透視圖
                  </span>
                  <span class="font-['Noto_Sans_TC'] text-[#fff] hidden md:block">
                    信義區 琢格77<br>
                    3D外觀透視圖
                  </span>
                </div>

              </div>
            </SplideSlide>
            <SplideSlide class="slide">
              <div class="slide_item">
                <div class="item_pic"><img src="@/section/s9/pic02.webp" alt="pic">
                  <span class="font-['Noto_Sans_TC'] text-[#fff] block md:hidden">Riverside 66</span>
                  <span class="font-['Noto_Sans_TC'] text-[#fff] hidden md:block">Riverside 66</span>
                </div>

              </div>
            </SplideSlide>
            <SplideSlide class="slide">
              <div class="slide_item">
                <div class="item_pic"><img src="@/section/s9/pic03.webp" alt="pic">
                  <span class="font-['Noto_Sans_TC'] text-[#fff] block md:hidden">New World Hotel</span>
                  <span class="font-['Noto_Sans_TC'] text-[#fff] hidden md:block">New World Hotel</span>
                </div>
              </div>
            </SplideSlide>
            <SplideSlide class="slide">
              <div class="slide_item">
                <div class="item_pic"><img src="@/section/s9/pic04.webp" alt="pic">
                  <span class="font-['Noto_Sans_TC'] text-[#fff] block md:hidden">Four Seasons</span>
                  <span class="font-['Noto_Sans_TC'] text-[#fff] hidden md:block">Four Seasons</span>
                </div>
              </div>
            </SplideSlide>
          </Splide>

          <div class="splide_btn prev" @click="goPrev">
            <img class="block md:hidden" src="@/section/s4/next_w.svg" />
          </div>
          <div class="splide_btn next" @click="goNext">
            <img class="block md:hidden" src="@/section/s4/prev_w.svg" />
          </div>

          <div class="dots block md:hidden">
            <ul>
              <li :class="{ active: no === 0 }" @click="switch_splide(0)" />
              <li :class="{ active: no === 1 }" @click="switch_splide(1)" />
              <li :class="{ active: no === 2 }" @click="switch_splide(2)" />
            </ul>
          </div>

        </div>
      </div>
      <img class="text hidden md:block" src="@/section/s9/text.svg" alt="text" data-aos="fade-up"
        data-aos-duration="1000" data-aos-delay="500">

      <div class="line hidden md:block" />
    </div>
  </article>
</template>


<style lang="scss" scoped>
@import '@/assets/style/function.scss';

.s9 {
  width: 100%;
  // height: size-m(698);
  // background-image: url("@/section/s8/bg.png");
  background-image: url("@/section/s5/bg.webp");
  background-size: contain;
  background-position: center;
  background-repeat: repeat;

  @media screen and (min-width:768px) {
    // height: size(1080);
    padding: size(150) size(275) size(150) size(335);
  }

  .text {
    position: relative;

    @media screen and (min-width:768px) {
      display: flex;
      gap: size(50);
    }

    .magazine_text_m {
      text-align: center;
      padding-top: size-m(60);
      padding-left: size-m(30);
      padding-right: size-m(30);

      h2 {
        font-weight: 500;
        line-height: 1.4;
        letter-spacing: 0.03;
        font-size: size-m(24);
        margin-bottom: size-m(15);
      }

      p {
        font-weight: 400;
        line-height: 1.7;
        font-size: size-m(14);

        b {
          margin-top: size-m(15);
          display: block;
          font-weight: 500;

        }
      }
    }

    .author {
      display: flex;
      gap: size(20);

      .title {
        @media screen and (min-width:768px) {
          width: size(45);
          padding-top: size(120);
        }
      }

      .author_main {
        @media screen and (min-width:768px) {
          width: size(434);
        }

        .author_pic {
          img{
            width: 100%;
          }
          @media screen and (min-width:768px) {}
        }

        .list {
          padding-top: size-m(30);
          @media screen and (min-width:768px) {
            padding-top: size(30);
          }
          img{
            width: 100%;
          }
        }

        .author_m {
          margin-top: size-m(50);
          margin-bottom: size-m(50);
          width: 100%;
          max-width: size-m(336);
        }
      }
    }

    .magazine {
      margin-left: size-m(45);

      @media screen and (min-width:768px) {
        margin-left: 0;
      }

      .magazine_text {
        @media screen and (min-width:768px) {
          margin-bottom: size(65);
        }

        h2 {
          font-weight: 500;
          line-height: 1.4;
          letter-spacing: 0.06;

          @media screen and (min-width:768px) {
            font-size: size(40);
          }
        }

        p {
          font-weight: 400;
          line-height: 1.9;
          letter-spacing: 0.03;

          @media screen and (min-width:768px) {
            font-size: size(18);
          }

          b {
            @media screen and (min-width:768px) {
              margin-top: size(15);
            }

            display: block;
            font-weight: 500;

          }
        }
      }

      .splide {
        position: relative;
        visibility: unset;

        .text_m {
          position: absolute;
          left: size-m(-40);
          top: 0;

          .text_m_content {

            display: flex;
            gap: size-m(5);

            img {
              width: size-m(26);
              margin-top: size-m(15);
            }

            .line {
              position: static;
              width: size-m(3);
              height: size-m(220);
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
          }


        }

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

              @media screen and (min-width:768px) {
              bottom: size(5);
              right: size(10);  
              }
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
            left: size-m(15);

            @media screen and (min-width:768px) {
              width: 30%;
              height: 100%;
              left: 0;
            }
          }

          &.next {
            right: size-m(15);

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
    }

    .text {
      position: absolute;
      bottom: 0;
      left: size(-240);
    }
  }

  .line {
    position: absolute;
    background: linear-gradient(to bottom,
        #F0D178,
        #F7E28B,
        #FFDD7E,
        #FCD97A,
        #F3CD70,
        #E4BB60,
        #CFA049,
        #C2903B);

    @media screen and (min-width:768px) {
      width: size(6);
      height: size(625);
      bottom: 0;
      right: size(-45);
    }
  }
}
</style>
