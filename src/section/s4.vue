<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';

const splideRef1 = ref(null)
const no1 = ref(0);

const goPrev1 = () => {
  splideRef1.value?.splide.go('-1')
  no1.value = splideRef1.value?.splide.index;
}

const goNext1 = () => {
  splideRef1.value?.splide.go('+1')
  no1.value = splideRef1.value?.splide.index;
}

const switch_splide1 = (data) => {
  splideRef1.value?.splide.go(data)
  no1.value = data;
}

onMounted(() => {
  if (splideRef1.value) {
    splideRef1.value.splide.on('moved', () => {
      no1.value = splideRef1.value?.splide.index;
    });
  }
});

onBeforeUnmount(() => {
  if (splideRef1.value) {
    splideRef1.value.splide.off('moved');
  }
});

const splideRef2 = ref(null)
const no2 = ref(0);
const goPrev2 = () => {
  splideRef2.value?.splide.go('-1')
  no2.value = splideRef2.value?.splide.index;
}

const goNext2 = () => {
  splideRef2.value?.splide.go('+1')
  no2.value = splideRef2.value?.splide.index;
}

const switch_splide2 = (data) => {
  splideRef2.value?.splide.go(data)
  no2.value = data;
}

onMounted(() => {
  if (splideRef2.value) {
    splideRef2.value.splide.on('moved', () => {
      no2.value = splideRef2.value?.splide.index;
    });
  }
});

onBeforeUnmount(() => {
  if (splideRef2.value) {
    splideRef2.value.splide.off('moved');
  }
});

const splideRef3 = ref(null)
const no3 = ref(0);

const goPrev3 = () => {
  splideRef3.value?.splide.go('-1');
  no3.value = splideRef3.value?.splide.index;
}

const goNext3 = () => {
  splideRef3.value?.splide.go('+1')
  no3.value = splideRef3.value?.splide.index;
}

const switch_splide3 = (data) => {
  splideRef3.value?.splide.go(data)
  no3.value = data;
}

onMounted(() => {
  if (splideRef3.value) {
    splideRef3.value.splide.on('moved', () => {
      no3.value = splideRef3.value?.splide.index;
    });
  }
});

onBeforeUnmount(() => {
  if (splideRef3.value) {
    splideRef3.value.splide.off('moved');
  }
});

const splideRef4 = ref(null)
const no4 = ref(0);

const goPrev4 = () => {
  splideRef4.value?.splide.go('-1');
  no4.value = splideRef4.value?.splide.index;
}

const goNext4 = () => {
  splideRef4.value?.splide.go('+1');
  no4.value = splideRef4.value?.splide.index;
}

const switch_splide4 = (data) => {
  splideRef4.value?.splide.go(data)
  no4.value = data;
}

onMounted(() => {
  if (splideRef4.value) {
    splideRef4.value.splide.on('moved', () => {
      no4.value = splideRef4.value?.splide.index;
    });
  }
});

onBeforeUnmount(() => {
  if (splideRef4.value) {
    splideRef4.value.splide.off('moved');
  }
});

const splideRef5 = ref(null)
const no5 = ref(0);

const goPrev5 = () => {
  splideRef5.value?.splide.go('-1');
  no5.value = splideRef5.value?.splide.index;
}

const goNext5 = () => {
  splideRef5.value?.splide.go('+1');
  no5.value = splideRef5.value?.splide.index;
}


const switch_splide5 = (data) => {
  splideRef5.value?.splide.go(data)
  no5.value = data;
}

onMounted(() => {
  if (splideRef5.value) {
    splideRef5.value.splide.on('moved', () => {
      no5.value = splideRef5.value?.splide.index;
    });
  }
});

onBeforeUnmount(() => {
  if (splideRef5.value) {
    splideRef5.value.splide.off('moved');
  }
});

const splideRef6 = ref(null)
const no6 = ref(0);

const goPrev6 = () => {
  splideRef6.value?.splide.go('-1');
  no6.value = splideRef6.value?.splide.index;
}

const goNext6 = () => {
  splideRef6.value?.splide.go('+1');
  no6.value = splideRef6.value?.splide.index;
}


const switch_splide6 = (data) => {
  splideRef6.value?.splide.go(data)
  no6.value = data;
}

onMounted(() => {
  if (splideRef6.value) {
    splideRef6.value.splide.on('moved', () => {
      no6.value = splideRef6.value?.splide.index;
    });
  }
});

onBeforeUnmount(() => {
  if (splideRef6.value) {
    splideRef6.value.splide.off('moved');
  }
});
</script>

<template>
  <article class="s4 relative" id="s4">

    <div class="item item1">
      <div class="wrapper">
        <div class="text">
          <img class="icon block md:hidden " src="@/section/s4/building_icon01.webp" alt="icon">
          <h2 class="font-['Noto_Sans_TC'] text-[#000]" data-aos="fade-up" data-aos-duration="1000"
            data-aos-delay="500">對坐博愛特區</h2>
          <h3 class="font-['Noto_Sans_TC'] text-[#000]" data-aos="fade-up" data-aos-duration="1000"
            data-aos-delay="500">國家級百年政經中心，尊榮冠絕全台</h3>
          <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            台北市中心大面積素地取得不易<br>
            與博愛特區對席更是百年一遇<br>
            國家府院政經中樞，百年國都京畿重地<br>
            匯集總統府、立法院、司法院、監察院、外交部<br class="block md:hidden">
            …等政府機關<br>
            臺灣博物館、臺銀總行⋯等古蹟林立<br>
            商業、金融、醫學、學區、綠地、公教機關<br class="block md:hidden">
            全方位機能<br>
            國家級建設、國家級中樞、國家級維安<br class="block md:hidden"><span class="hidden md:inline-block ">，</span>
            無法複製的珍稀地段<br class="block md:hidden"><span class="hidden md:inline-block ">，</span>
            市中心就是市中心，難以再有下一塊
          </p>
        </div>
        <div class="pic px">
          <div class="splide">
            <img class="slogan_text block md:hidden" src="@/section/s4/slogan_text.svg" />

            <img class="icon hidden md:block" src="@/section/s4/building_icon01_pc.webp" alt="icon">
            <img class="icon_text hidden md:block" src="@/section/s4/building_icon01_pc_text.svg" alt="icon">

            <Splide ref="splideRef1" :options="{
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
                <div class="slide_item px">
                  <div class="item_pic"><img src="@/section/s4/pic01.webp" alt="pic">
                    <span class="font-['Noto_Sans_TC'] text-[#fff]">總統府</span>
                  </div>

                </div>
              </SplideSlide>
              <SplideSlide class="slide">
                <div class="slide_item px">
                  <div class="item_pic"><img src="@/section/s4/pic02.webp" alt="pic">
                    <span class="font-['Noto_Sans_TC'] text-[#fff]">台大醫院</span>
                  </div>

                </div>
              </SplideSlide>
              <SplideSlide class="slide">
                <div class="slide_item px">
                  <div class="item_pic"><img src="@/section/s4/pic03.webp" alt="pic">
                    <span class="font-['Noto_Sans_TC'] text-[#fff]">二二八公園</span>
                  </div>

                </div>
              </SplideSlide>
            </Splide>

            <div class="splide_btn prev" @click="goPrev1">
              <img class="block md:hidden" src="@/section/s4/next.svg" />
            </div>
            <div class="splide_btn next" @click="goNext1">
              <img class="block md:hidden" src="@/section/s4/prev.svg" />
            </div>

            <div class="dots block md:hidden">
              <ul>
                <li :class="{ active: no1 === 0 }" @click="switch_splide1(0)" />
                <li :class="{ active: no1 === 1 }" @click="switch_splide1(1)" />
                <li :class="{ active: no1 === 2 }" @click="switch_splide1(2)" />
              </ul>
            </div>

          </div>

          <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            <img class="slogan_text_pc hidden md:block" src="@/section/s4/slogan_text_pc.svg" alt="slogan_text_pc">
          </div>

          <div class="line" />
        </div>
      </div>
    </div>

    <div class="item item2">
      <div class="wrapper">
        <div class="text">
          <img class="icon ml block md:hidden" src="@/section/s4/building_icon02.webp" alt="icon">
          <img class="icon ml hidden md:block" src="@/section/s4/building_icon02_pc.webp" alt="icon">
          <h2 class="font-['Noto_Sans_TC'] text-[#000]" data-aos="fade-up" data-aos-duration="1000"
            data-aos-delay="500">台北雙子星繁花勝景</h2>
          <h3 class="font-['Noto_Sans_TC'] text-[#000]" data-aos="fade-up" data-aos-duration="1000"
            data-aos-delay="500">千億建設贏接西區國門榮華</h3>
          <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            <strong>眼前，就是勝景</strong><br>
            台北東軸西轉，首都國門百年榮華再起<br>
            家門通國門，對坐首都心臟核心台北雙子星<br>
            和家中坐對望的，將是您自己的耀眼未來<br>
            <br>
            車站是城市大門，也是精神地標<br class="block md:hidden"><span class="hidden md:inline-block">，</span>
            更是商業核心發跡地<br>
            一如紐約中央車站、倫敦國王十字車站、東京車站<br>
            六鐵共構台北車站、北門與周邊歷史建築為核心<br>
            台汽北站、舊市議會、中華郵政塔、<br class="block md:hidden">
            北車E1、E2都更案<br>
            千億建設啟動西區國門巨大能量<br class="block md:hidden"><span class="hidden md:inline-block">，</span>
            再次贏接榮光璀璨
          </p>
          <img class="slogan_text hidden md:block" src="@/section/s4/slogan_text02.svg" alt="slogan_text"
            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
        </div>
        <div class="pic">
          <div class="splide">
            <Splide ref="splideRef2" :options="{
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
                  <div class="item_pic"><img src="@/section/s4/pic04.webp" alt="pic">
                    <span class="font-['Noto_Sans_TC'] text-[#fff]">北門</span>
                  </div>

                </div>
              </SplideSlide>
              <SplideSlide class="slide">
                <div class="slide_item">
                  <div class="item_pic"><img src="@/section/s4/pic05.webp" alt="pic">
                    <span class="font-['Noto_Sans_TC'] text-[#fff]">台北車站</span>
                  </div>

                </div>
              </SplideSlide>
            </Splide>

            <div class="splide_btn top55 prev" @click="goPrev2">
              <img class="block md:hidden" src="@/section/s4/next_w.svg" />
            </div>
            <div class="splide_btn top55 next" @click="goNext2">
              <img class="block md:hidden" src="@/section/s4/prev_w.svg" />
            </div>

            <div class="dots block md:hidden">
              <ul>
                <li :class="{ active: no2 === 0 }" @click="switch_splide2(0)" />
                <li :class="{ active: no2 === 1 }" @click="switch_splide2(1)" />
              </ul>
            </div>

          </div>

          <!-- <div class="line" /> -->
        </div>
      </div>
    </div>

    <div class="item item3">
      <div class="wrapper">
        <div class="text">
          <img class="icon block md:hidden " src="@/section/s4/building_icon03.webp" alt="icon">
          <h2 class="font-['Noto_Sans_TC'] text-[#000]" data-aos="fade-up" data-aos-duration="1000"
            data-aos-delay="500">中華大道，西門潮派</h2>
          <h3 class="font-['Noto_Sans_TC'] text-[#000]" data-aos="fade-up" data-aos-duration="1000"
            data-aos-delay="500">都會時尚指標圈粉國際</h3>
          <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" class="hidden md:block">
            每個世代青春的記憶都從西門町開始<br>
            真善美戲院、中華商場、國賓戲院、<br class="block md:hidden">
            萬年大樓…<br>
            在老台北的記憶裡，中華路是最繁華的大道<br>
            一邊是全台最大商業娛樂中心西門町<br>
            一邊是全台政經重鎮的博愛特區<br>
            正前方則是軸線翻轉的西區門戶計畫<br>
            <br>
            時至今日西門商圈仍引領時代潮流<br>
            誠品書店、意舍酒店、唐吉訶德…各式潮牌名品<br>
            到市井小民最愛的家樂福、麥當勞、口碑傳頌的美食料理<br>
            流行個性與藝術能量讓這裡日夜精彩<br>
            散發出令人著迷的文化魅力<br>
            2024年更打敗台北101，狂吸221萬人，成為北市最強景點 <br>
            「橡樹貴麗」信手捻來繁華與便捷
          </p>

          <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" class="block md:hidden">
            每個世代青春的記憶都從西門町開始<br>
            真善美戲院、中華商場、國賓戲院、<br>
            萬年大樓…<br>
            在老台北的記憶裡，中華路是最繁華的大道<br>
            一邊是全台最大商業娛樂中心西門町<br>
            一邊是全台政經重鎮的博愛特區<br>
            正前方則是軸線翻轉的西區門戶計畫<br>
            <br>
            時至今日西門商圈仍引領時代潮流<br>
            誠品書店、意舍酒店、唐吉訶德<br>
            …各式潮牌名品<br>
            到市井小民最愛的家樂福、麥當勞<br>
            、口碑傳頌的美食料理<br>
            流行個性與藝術能量讓這裡日夜精彩<br>
            散發出令人著迷的文化魅力<br>
            2024年更打敗台北101，狂吸221萬人<br>
            成為北市最強景點 <br>
            「橡樹貴麗」信手捻來繁華與便捷
          </p>
          <img class="icon hidden md:block " src="@/section/s4/building_icon03_pc.webp" alt="icon">
        </div>
        <div class="pic">
          <div class="splide">

            <Splide ref="splideRef3" :options="{
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
                <div class="slide_item pr">
                  <div class="item_pic"><img src="@/section/s4/pic06.webp" alt="pic">
                    <span class="font-['Noto_Sans_TC'] text-[#fff]">西門商圈</span>
                  </div>

                </div>
              </SplideSlide>
              <SplideSlide class="slide">
                <div class="slide_item pl">
                  <div class="item_pic"><img src="@/section/s4/pic07.webp" alt="pic">
                    <span class="font-['Noto_Sans_TC'] text-[#fff]">中華大道</span>
                  </div>
                </div>
              </SplideSlide>
            </Splide>

            <div class="splide_btn top55 prev" @click="goPrev3">
              <img class="block md:hidden" src="@/section/s4/next_w.svg" />
            </div>
            <div class="splide_btn top55 next" @click="goNext3">
              <img class="block md:hidden" src="@/section/s4/prev_w.svg" />
            </div>

            <div class="dots block md:hidden">
              <ul>
                <li :class="{ active: no3 === 0 }" @click="switch_splide3(0)" />
                <li :class="{ active: no3 === 1 }" @click="switch_splide3(1)" />
              </ul>
            </div>
            <img class="icon_text hidden md:block" src="@/section/s4/building_icon03_pc_text.svg" alt="icon">
          </div>

          <!-- <div class="line" /> -->
        </div>
      </div>
    </div>

    <div class="item item4">
      <div class="wrapper">
        <div class="text">
          <!-- <img class="icon block md:hidden " src="@/section/s4/building_icon03.webp" alt="icon"> -->
          <h2 class="font-['Noto_Sans_TC'] text-[#000]" data-aos="fade-up" data-aos-duration="1000"
            data-aos-delay="500">含金量最高板南線</h2>
          <h3 class="font-['Noto_Sans_TC'] text-[#000]" data-aos="fade-up" data-aos-duration="1000"
            data-aos-delay="500">雙捷運西門站350米，一線直抵雙北CBD</h3>
          <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            雙捷運西門站散步350米<br>
            收納含金量最高的兩條動脈<br class="block md:hidden">
            –捷運板南線與松山新店線<br>
            一站到北車，一線直抵雙北CBD<br>
            市政府、信義計畫區、華山藝文特區、<br class="block md:hidden">
            五鐵共構南港車站與新板特區<br>
            南西商圈、公館商圈、松山車站、<br class="block md:hidden">
            碧潭風景區信手捻來<br>
            微距600米還有小南門站<br>
            雙捷運連線最佳宜居點，有遠見的起漲點<br>
            在時間就是金錢的年代，卡位軌道經濟致勝先機
          </p>
          <div class="line hidden md:block" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" />
          <img class="icon_text hidden md:block" src="@/section/s4/building_icon03_pc_text.svg" alt="icon"
            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
        </div>
        <div class="pic">
          <div class="splide">
            <Splide ref="splideRef4" :options="{
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
                  <div class="item_pic"><img src="@/section/s4/pic08.webp" alt="pic">
                    <span class="font-['Noto_Sans_TC'] text-[#fff]">台北車站</span>
                  </div>

                </div>
              </SplideSlide>
              <SplideSlide class="slide">
                <div class="slide_item">
                  <div class="item_pic"><img src="@/section/s4/pic09.webp" alt="pic">
                    <span class="font-['Noto_Sans_TC'] text-[#fff]">捷運西門站</span>
                  </div>
                </div>
              </SplideSlide>
              <SplideSlide class="slide">
                <div class="slide_item">
                  <div class="item_pic"><img src="@/section/s4/pic10.webp" alt="pic">
                    <span class="font-['Noto_Sans_TC'] text-[#fff]">捷運北門站</span>
                  </div>
                </div>
              </SplideSlide>
            </Splide>

            <div class="splide_btn top55 prev" @click="goPrev4">
              <img class="block md:hidden" src="@/section/s4/next_w.svg" />
            </div>
            <div class="splide_btn top55 next" @click="goNext4">
              <img class="block md:hidden" src="@/section/s4/prev_w.svg" />
            </div>

            <div class="dots block md:hidden">
              <ul>
                <li :class="{ active: no4 === 0 }" @click="switch_splide4(0)" />
                <li :class="{ active: no4 === 1 }" @click="switch_splide4(1)" />
                <li :class="{ active: no4 === 2 }" @click="switch_splide4(2)" />
              </ul>
            </div>

          </div>

          <div class="train block md:hidden">
            <img class="train_text" src="@/section/s4/train_text.webp" />
            <img class="train_pic" src="@/section/s4/train.webp" />
          </div>
        </div>
      </div>
      <div class="train hidden md:block" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500">
        <img class="train_pic" src="@/section/s4/train_pic_pc.webp" />
        <img class="train_text" src="@/section/s4/train_text_pc.webp" />
        <img class="slogan_text" src="@/section/s4/slogan_text04_pc.svg" />
      </div>
    </div>

    <div class="item item5">
      <div class="wrapper">
        <div class="text">
          <img class="icon block md:hidden" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500"
            src="@/section/s4/building_icon04.webp" alt="icon">
          <img class="icon hidden md:block" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500"
            src="@/section/s4/building_icon04_pc.webp" alt="icon">
          <h2 class="font-['Noto_Sans_TC'] text-[#000]" data-aos="fade-up" data-aos-duration="1000"
            data-aos-delay="500">建中北一雙首學</h2>
          <h3 class="font-['Noto_Sans_TC'] text-[#000]" data-aos="fade-up" data-aos-duration="1000"
            data-aos-delay="500">從企業菁英到權貴名流都是校友</h3>
          <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" class="hidden md:block">
            <strong>青青子衿，朗朗書聲</strong><br>
            建國中學、北一女中，頂級學區、頂尖名校<br>
            培育菁英無數<br>
            傑出校友從企業領袖到權貴名流<br>
            政商學、醫療、人文藝術遍及各行各業<br>
            區域內還有雙園國小、西園國小、南海實幼<br>
            從小學到大學為小小菁英鋪設人生坦途<br>
            用書香涵養一座城市的氣質<br>
            為孩子贏得自己的未來
          </p>

          <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" class="block md:hidden">
            青青子衿，朗朗書聲<br>
            建國中學、北一女中，頂級學區、頂尖名校<br>
            培育菁英無數<br>
            傑出校友從企業領袖到權貴名流<br>
            政商學、醫療、人文藝術遍及各行各業<br>
            區域內還有雙園國小、西園國小、南海實幼<br>
            從小學到大學為小小菁英鋪設人生坦途<br>
            用書香涵養一座城市的氣質<br>
            為孩子贏得自己的未來
          </p>
          <img class="slogan_text hidden md:block" src="@/section/s4/slogan_text02.svg" alt="slogan_text"
            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
        </div>
        <div class="pic">
          <div class="splide">
            <Splide ref="splideRef5" :options="{
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
                  <div class="item_pic"><img src="@/section/s4/pic11.webp" alt="pic">
                    <span class="font-['Noto_Sans_TC'] text-[#fff]">建國中學</span>
                  </div>

                </div>
              </SplideSlide>
              <SplideSlide class="slide">
                <div class="slide_item">
                  <div class="item_pic"><img src="@/section/s4/pic12.webp" alt="pic">
                    <span class="font-['Noto_Sans_TC'] text-[#fff]">南門國小</span>
                  </div>
                </div>
              </SplideSlide>
              <SplideSlide class="slide">
                <div class="slide_item">
                  <div class="item_pic"><img src="@/section/s4/pic13.webp" alt="pic">
                    <span class="font-['Noto_Sans_TC'] text-[#fff]">北一女中</span>
                  </div>
                </div>
              </SplideSlide>
            </Splide>

            <div class="splide_btn top55 prev" @click="goPrev5">
              <img class="block md:hidden" src="@/section/s4/next_w.svg" />
            </div>
            <div class="splide_btn top55 next" @click="goNext5">
              <img class="block md:hidden" src="@/section/s4/prev_w.svg" />
            </div>

            <div class="dots block md:hidden">
              <ul>
                <li :class="{ active: no5 === 0 }" @click="switch_splide5(0)" />
                <li :class="{ active: no5 === 1 }" @click="switch_splide5(1)" />
                <li :class="{ active: no5 === 2 }" @click="switch_splide5(2)" />
              </ul>
            </div>

          </div>
        </div>

      </div>
    </div>

    <div class="item item6">
      <div class="wrapper">
        <div class="text">
          <img class="icon block md:hidden" src="@/section/s4/building_icon05.webp" alt="icon">
          <h2 class="font-['Noto_Sans_TC'] text-[#000]" data-aos="fade-up" data-aos-duration="1000"
            data-aos-delay="500">
            時光豐釀<br class="block md:hidden">
            百年西本願寺、紅樓
          </h2>
          <h3 class="font-['Noto_Sans_TC'] text-[#000]" data-aos="fade-up" data-aos-duration="1000"
            data-aos-delay="500">8.2 公頃台北植物園逸趣更濃</h3>
          <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" class="hidden md:block">
            日式老屋的寧靜氛圍，如同京都的雅緻風情凝聚<br>
            緊鄰百年古蹟西本願寺、西門紅樓透過活化再生<br>
            蛻變成為人文薈萃的藝術匯聚地<br>
            成為首都文化圈的都市廣場<br>
            散步950米台北植物園8.2公頃自然森境、綠域風光<br>
            氣定神閒的從容街廓，一手繁華、一手文華<br>
            <strong>交織永遠經典的博愛特區，注定不凡的價值核心</strong>
          </p>

          <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" class="block md:hidden">
            日式老屋的寧靜氛圍，如同京都的雅緻風情凝聚<br>
            緊鄰百年古蹟西本願寺、西門紅樓透過活化再生<br>
            蛻變成為人文薈萃的藝術匯聚地<br>
            成為首都文化圈的都市廣場<br>
            散步950米台北植物園8.2公頃自然森境、綠域風光<br>
            氣定神閒的從容街廓，一手繁華、一手文華<br>
            交織永遠經典的博愛特區<br>
            注定不凡的價值核心
          </p>
          <img class="icon hidden md:block  " src="@/section/s4/building_icon05_pc.webp" alt="icon">
        </div>
        <div class="pic">
          <div class="splide">
            <Splide ref="splideRef6" :options="{
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
                  <div class="item_pic"><img src="@/section/s4/pic14.webp" alt="pic">
                    <span class="font-['Noto_Sans_TC'] text-[#fff]">植物園</span>
                  </div>

                </div>
              </SplideSlide>
              <SplideSlide class="slide">
                <div class="slide_item">
                  <div class="item_pic"><img src="@/section/s4/pic15.webp" alt="pic">
                    <span class="font-['Noto_Sans_TC'] text-[#fff]">西門紅樓</span>
                  </div>
                </div>
              </SplideSlide>
              <SplideSlide class="slide">
                <div class="slide_item">
                  <div class="item_pic"><img src="@/section/s4/pic16.webp" alt="pic">
                    <span class="font-['Noto_Sans_TC'] text-[#fff]">西本願寺</span>
                  </div>
                </div>
              </SplideSlide>
              <SplideSlide class="slide">
                <div class="slide_item">
                  <div class="item_pic"><img src="@/section/s4/pic17.webp" alt="pic">
                    <span class="font-['Noto_Sans_TC'] text-[#fff]">龍山河濱公園</span>
                  </div>
                </div>
              </SplideSlide>
            </Splide>

            <div class="splide_btn prev" @click="goPrev6">
              <img class="block md:hidden" src="@/section/s4/next_w.svg" />
            </div>
            <div class="splide_btn next" @click="goNext6">
              <img class="block md:hidden" src="@/section/s4/prev_w.svg" />
            </div>

            <div class="dots block md:hidden">
              <ul>
                <li :class="{ active: no6 === 0 }" @click="switch_splide6(0)" />
                <li :class="{ active: no6 === 1 }" @click="switch_splide6(1)" />
                <li :class="{ active: no6 === 2 }" @click="switch_splide6(2)" />
                <li :class="{ active: no6 === 3 }" @click="switch_splide6(3)" />
              </ul>
            </div>

          </div>
          <div class="line hidden md:block" />
        </div>
      </div>
    </div>

  </article>
</template>


<style lang="scss" scoped>
@import '@/assets/style/function.scss';

.s4 {
  .item {
    padding-top: size-m(40);
    background-image: url("@/section/s4/bg.webp");
    background-size: contain;
    background-position: center;
    background-repeat: repeat;

    .wrapper {
      @media screen and (min-width:768px) {
        display: flex;
      }

      .text {
        text-align: center;
        padding-left: size-m(30);
        padding-right: size-m(30);
        padding-bottom: size-m(60);

        @media screen and (min-width:768px) {
          text-align: left;
        }

        .icon {
          // display: block;

          &.ml {
            margin-left: 0;
          }
        }

        h2 {
          margin-top: size-m(20);
          font-size: size-m(25);
          font-weight: 500;
          line-height: 1.4;
          letter-spacing: 0.05em;

          @media screen and (min-width:768px) {
            font-size: size(39);
            letter-spacing: 0.1em;
          }
        }

        h3 {
          font-size: size-m(16);
          font-weight: 600;
          line-height: 1.4;
          margin-top: size-m(10);
          margin-bottom: size-m(10);

          @media screen and (min-width:768px) {
            font-size: size(28);
            margin-top: size(10);
            margin-bottom: size(10);
            font-weight: 400;
          }
        }

        p {
          font-size: size-m(14);
          font-weight: 400;
          line-height: 1.7;

          @media screen and (min-width:768px) {
            font-size: size(18);
            line-height: 1.9;
            letter-spacing: 0.03em;
          }
        }
      }

      .pic {
        position: relative;

        .splide {
          position: relative;
          visibility: unset;

          .slogan_text {
            position: absolute;
            left: 0;
            right: 0;
            top: size-m(50);
          }

          .slide_item {
            &.px {
              padding-left: size-m(30);
              padding-right: size-m(30);
            }

            &.pr {
              padding-right: size-m(0);
            }

            &.pl {
              padding-left: size-m(0);
            }

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
                  bottom: size(8);
                  right: size-m(3);
                }
              }
            }
          }

          .splide_btn {
            position: absolute;
            top: 65%;
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
              left: size-m(7.5);

              @media screen and (min-width:768px) {
                width: 30%;
                height: 100%;
                left: 0;
              }
            }

            &.next {
              right: size-m(7.5);

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


        .item {
          img {
            width: 100%;
          }
        }

        .line {
          margin-top: size-m(10);
          width: calc(100% - size-m(30) - size-m(30));
          margin-left: size-m(30);
          margin-right: size-m(30);
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
        }

        .train {
          position: relative;

          .train_text {
            position: absolute;
            top: size-m(-30);
            width: size-m(385);
          }

          .train_pic {
            margin-left: auto;
            margin-right: 0;
            margin-top: size-m(10);
            height: size-m(50);
            display: block;
          }
        }
      }
    }

    &.item6 {
      .wrapper {
        .text {
          padding-bottom: size-m(0);
        }
      }
    }

    @media screen and (min-width:768px) {
      &.item1 {
        .wrapper {
          padding-left: size(170);
          padding-right: size(100);
          gap: size(100);

          .text {
            width: 50%;
            max-width: size(545);
            padding: 0;
            margin-top: size(125);
          }

          .pic {
            width: 50%;
            max-width: size(975);

            .splide {
              .icon {
                position: absolute;
                right: 0;
                top: size(30);
                z-index: 1;
                width: size(255);
              }

              .icon_text {
                position: absolute;
                left: 0;
                top: size(175);
                z-index: 1;
                width: size(255);
              }

              .slide_item {
                &.px {
                  padding: 0;
                }
              }
            }

            .slogan_text_pc {
              position: absolute;
              width: size(830);
              left: calc(-100% + size(170));
              bottom: size(0);
            }

            .line {
              margin-top: size(20);
              margin-left: auto;
              margin-right: 0;
              max-width: size(630);
              height: size(18);
            }
          }
        }
      }

      &.item2 {
        .wrapper {
          padding-left: size(0);
          padding-right: size(100);
          gap: size(100);
          position: relative;

          .text {
            width: 50%;
            max-width: size(545);
            padding: 0;
            margin-top: size(45);
            order: 2;

            .icon {
              width: 290px;
            }

            h2 {
              margin-top: size(50);
            }

            .slogan_text {
              position: absolute;
              right: size(100);
              top: size(150);
            }
          }

          .pic {
            width: 50%;
            max-width: size(975);
            order: 1;
          }
        }
      }

      &.item3 {
        padding-top: size(270);

        .wrapper {
          padding-left: size(170);
          padding-right: size(100);
          gap: size(100);

          .text {
            width: 50%;
            max-width: size(570);
            padding: 0;
            margin-top: size(0);

            h2 {
              margin-top: size(0);
            }

            .icon {
              margin-top: size(50);
            }
          }

          .pic {
            width: 57%;
            max-width: size(975);

            .splide {
              .icon {
                position: absolute;
                right: 0;
                top: size(30);
                z-index: 1;
                width: size(255);
              }

              .icon_text {
                margin-left: 0;
                margin-top: size(30);
                width: size(375);
              }

              .slide_item {
                padding-top: 0;

                &.pr {
                  padding: 0;
                }
              }
            }


            .line {
              margin-top: size(20);
              margin-left: auto;
              max-width: size(630);
              height: size(18);
            }
          }
        }
      }

      &.item4 {
        padding-top: size(270);

        .wrapper {
          padding-left: size(170);
          padding-right: size(100);
          gap: size(100);
          justify-content: center;

          .text {
            width: 50%;
            max-width: size(570);
            padding: 0;
            margin-top: size(0);

            h2 {
              margin-top: size(0);
            }

            .line {
              background: linear-gradient(to right,
                  #F0D178,
                  #F7E28B,
                  #FFDD7E,
                  #FCD97A,
                  #F3CD70,
                  #E4BB60,
                  #CFA049,
                  #C2903B);

              margin-top: size(20);
              margin-left: auto;
              max-width: size(630);
              height: size(18);
            }

            .icon_text {
              width: size(375);
              margin-top: size(70);
              margin-left: 0;
            }
          }

          .pic {
            width: 50%;
            max-width: size(975);

            .splide {
              .icon {
                position: absolute;
                right: 0;
                top: size(30);
                z-index: 1;
                width: size(255);
              }

              .icon_text {
                position: absolute;
                left: 0;
                top: size(175);
                z-index: 1;
                width: size(255);
              }

              .slide_item {
                padding-top: 0;

                &.pr {
                  padding: 0;
                }
              }
            }


            .line {
              margin-top: size(20);
              margin-left: auto;
              max-width: size(630);
              height: size(18);
            }
          }

        }

        .train {
          width: 100%;
          position: relative;

          .train_pic {
            position: absolute;
            right: size(170);
            max-width: size(1710);
          }

          .train_text {
            position: absolute;
            left: size(150);
            bottom: size(-100);
            max-width: size(757);
          }

          .slogan_text {
            position: absolute;
            left: size(125);
            bottom: 100%;
            max-width: size(830);
          }
        }
      }

      &.item5 {
        .wrapper {
          padding-left: size(0);
          padding-right: size(100);
          gap: size(100);
          position: relative;

          .text {
            width: 50%;
            max-width: size(545);
            padding: 0;
            margin-top: size(70);
            order: 2;

            .icon {
              width: 290px;
            }

            h2 {
              margin-top: size(50);
            }

            .slogan_text {
              position: absolute;
              right: size(100);
              top: size(100);
            }
          }

          .pic {
            width: 50%;
            max-width: size(975);
            order: 1;
          }
        }
      }

      &.item6 {
        padding-top: size(275);
        padding-bottom: size(150);

        .wrapper {
          padding-left: size(170);
          padding-right: size(100);
          gap: size(100);
          justify-content: center;


          .text {
            width: 50%;
            max-width: size(575);
            padding: 0;
            margin-top: 0;

            .icon {
              margin-top: size(100);
            }
          }

          .pic {
            width: 50%;
            max-width: size(975);

            .splide {
              .icon {
                position: absolute;
                right: 0;
                top: size(30);
                z-index: 1;
                width: size(255);
              }

              .icon_text {
                position: absolute;
                left: 0;
                top: size(175);
                z-index: 1;
                width: size(255);
              }

              .slide_item {
                padding-top: 0;

                &.px {
                  padding: 0;
                }
              }
            }


            .line {
              margin-top: size(20);
              margin-right: auto;
              margin-left: 0;
              max-width: size(630);
              height: size(18);
            }
          }
        }
      }
    }

  }

}
</style>
