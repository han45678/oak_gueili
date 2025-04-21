<template>
  <div id="order" class="order relative text-center">
    <div class="order-section">

      <div class="title">
        <img src="@/section/form/title.svg" alt="title">
        <!-- <img class="hidden md:hidden" src="@/section/form/title_m.svg" alt="title"> -->
      </div>

      <!-- Form -->
      <div class="form mx-auto relative flex justify-center">


        <div class="left h-full flex flex-col justify-between items-center">
          <label class="row name"><span>姓名<span>*</span></span>
            <input type="text" placeholder="姓名" class="input w-full rounded-none" :value="formData.name"
              @input="(event) => (formData.name = event.target.value)" /></label>
          <div class="gender">
            <label><input type="radio" name="gender" value="男"
                @input="(event) => (formData.gender = event.target.value)">先生</label>
            <label><input type="radio" name="gender" value="女"
                @input="(event) => (formData.gender = event.target.value)">女士</label>
          </div>
          <label class="row"><span>手機<span>*</span></span>
            <input type="text" placeholder="手機" class="input w-full rounded-none" :value="formData.phone"
              @input="(event) => (formData.phone = event.target.value)" /></label>
          <!--
          <label class="row"><span>性別</span>
            <select class="select w-full rounded-none bg-white" v-model="formData.gender">
            <option value="" selected disabled>請選擇性別</option>
            <option value="男">男</option>
            <option value="女">女</option>
          </select></label>  -->
          <label class="row" v-if="info.room_type"><span>需求房型</span>
            <select class="select w-full rounded-none bg-white" v-model="formData.room_type">
              <option value="" selected disabled>請選擇房型</option>
              <option v-for="room in info.room_type" :value="room" v-text="room" :key="room"></option>
            </select></label>
          <label class="row" v-if="info.use_type"><span>購屋用途</span>
            <select class="select w-full rounded-none bg-white" v-model="formData.use_type">
              <option value="" selected disabled>請選擇用途</option>
              <option v-for="use_type in info.use_type" :value="use_type" v-text="use_type" :key="use_type"></option>
            </select>
          </label>
          <label class="row" v-if="info.budget"><span>購屋預算</span>
            <select class="select w-full rounded-none bg-white" v-model="formData.budget">
              <option value="" selected disabled>請選擇區間</option>
              <option v-for="budget in info.budget" :value="budget" v-text="budget" :key="budget"></option>
            </select>
          </label>
          <label class="row"><span>居住縣市</span>
            <select class="select w-full rounded-none" v-model="formData.city">
              <option value="" selected disabled>請選擇城市</option>
              <option v-for="city in cityList" :value="city.value" :key="city">
                {{ city.label }}
              </option>
            </select></label>
          <label class="row"><span>居住地區</span>
            <select class="select w-full rounded-none" v-model="formData.area">
              <option value="" selected disabled>請選擇地區</option>
              <option v-for="area in areaList" :value="area.value" :key="area">
                {{ area.label }}
              </option>
            </select></label>
        </div>
        <div class="right">
          <textarea :value="formData.msg" @input="(event) => (formData.msg = event.target.value)"
            class="row textarea w-full h-full rounded-none" placeholder="請輸入您的留言"></textarea>
        </div>
      </div>

      <!-- Policy -->
      <div class="flex gap-2 items-center justify-center control">
        <input type="checkbox" v-model="formData.policyChecked" :checked="formData.policyChecked"
          class="checkbox bg-white rounded-md" />
        <p class="text-[#666]">
          本人知悉並同意<label for="policy-modal"
            class="modal-button text-[#EA5514] cursor-pointer hover:opacity-70">「個資告知事項聲明」</label>內容
        </p>
      </div>

      <Policy />
      <!-- Recaptcha -->

      <!-- Send -->
      <div class="send mt-8 mx-auto hover:scale-90 btn cursor-pointer" @click="send()">
        {{ sending ? '發送中..' : '立即預約' }}
      </div>
      <ContactInfo />
      <!-- Map -->

    <Map />
      <!-- <iframe
        class="gm"
        src=""
        allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe> -->
      
      <!-- Contact Info -->
      
    </div>


    

    <!-- HouseInfo -->
    <HouseInfo />
  </div>
</template>

<style lang="scss">
@import "@/assets/style/function.scss";


.order-section {
  background-image: url("@/section/s5/bg.webp");
  background-size: contain;
  background-position: center;
  background-repeat: repeat;

  position: relative;
  // padding-top: size(406);
  overflow: hidden;
  min-height: size(500);

  .bg-image {
    position: absolute;
    width: 100%;
    left: 0;
    bottom: size(50);
    vertical-align: middle;
  }

}

.order {
  width: 100%;
  // padding-top: size(40);
  // background:url("@/section/form/bg.webp");
  background-size: cover;
  background-repeat: no-repeat;
  // background: linear-gradient(to bottom, #195c45, #000704);



  .order-title {
    font-size: size(30);
    font-weight: 700;
    color: #000;
    padding-top: 1.5em;

    //filter: drop-shadow(5px 5px 5px rgba(0, 0, 0, 0.8))
    .line {
      width: size(439);
    }
  }

  .order-title-img {
    width: size(1008);
    margin-bottom: size(155);
  }

  .order-subTitle {
    font-size: size(17);
    // color: #fff;
    padding-top: .8em;
    letter-spacing: .1em;
    //font-weight: 500;filter: drop-shadow(5px 5px 5px rgba(0, 0, 0, 0.8))
  }

  .cus-divider {
    margin: 0 auto;
    width: size(300);
    height: size(2);
    margin-bottom: size(50);
    //  background-color: #055F76;
  }
  .title{
    width: size(920);
    // min-width: 750px;
    margin-left: auto;
    margin-right: auto;
    img{
      max-width: 100%;
    }
  }
  .form {
    width: size(920);
    // min-width: 750px;
    //  height: 350px;
    gap: size(80);
    margin-top: size(45);
    margin-bottom: size(50);
    z-index: 50;
    align-items: stretch;

    .left {
      position: relative;
      flex: 1;
      gap: size(20);
      align-items: flex-start;
      //   width: size(419);
    }

    .right {
      flex: 1;
      height: auto;
      //  width: size(419);
    }

    &::after {
      content: "";
      width: size(1);
      height: 100%;
      background-color: #0003;
      position: absolute;
    }

    .row {
      background: #fff;
      border: 1px solid #999;
      color: #000;
      display: flex;
      width: 100%;
      align-items: center;

      >span {
        width: 5.5em;
        text-align: left;
        padding-left: 1em;

        >span {
          color: #F00; //font-size: 12px;
        }
      }

      input,
      select {
        background: inherit;
        flex: 1;
      }

      option {
        color: #666;
      }

      select {
        background: url("//h65.tw/img/select.svg") no-repeat calc(100% - .5em) 100%;
        background-size: auto 200%;
        transition: background .3s;

        &:focus {
          background-position: calc(100% - .5em) 0%;
        }
      }

      &.name {
        width: calc(100% - 3.8em);
        // .input{height: 5em;}
      }
    }

    .gender {
      display: flex;
      position: absolute;
      right: 0;
      flex-direction: column;

      label:first-child {
        margin-bottom: .3em;
      }

      input {
        margin-right: .3em;
      }
    }
  }

  .send {
    font-size: 20px;
    letter-spacing: 0.9em;
    text-indent: 0.9em;
    color: #fff;
    background-color: #443c2c;
    //border: 1px solid #FFF9;
    border: 0;
    border-radius: .5em;
    margin-bottom: size(65);
    width: 308px;
    height: 3.3em;
    line-height: 3.3;
    z-index: 10;
    font-weight: 400;
    position: relative;
  }
  .gm{
    width: 100%;
    height: size(500);
    border:none
  }
  .control {
    font-size: size(16);
    color: #000;
    position: relative;
  }
}

@media screen and (max-width:768px) {
  .order-section {
    min-height: size-m(800);
    position: relative;
    // overflow: hidden;
    // padding-top: size-m(200);

    .bg-image {
      position: absolute;
      width: 100%;
      left: -#{size-m(30)};
      bottom: size-m(590);
    }

  }

  .order {
    width: 100%;
    padding-bottom: size-m(63);
    padding-top: size-m(40);

    .cus-divider {
      margin: 0 auto;
      width: size-m(117);
      height: size-m(2);
      margin-bottom: size-m(25);
      background-color: #055F76;
    }

    .order-title {
      font-size: size-m(20);
      padding-top: 1.5em;

      .line {
        width: size-m(258);
      }
    }

    .order-subTitle {
      font-size: size-m(13);
      padding-top: 0;
    }
    .title{
    width: size-m(310);
    margin-left: auto;
    margin-right: auto;
  }

    .form {
      width: size-m(310);
      min-width: 0;
      height: auto;
      gap: size-m(15);
      margin-bottom: size-m(20);
      flex-direction: column;
      margin-top: size-m(20);

      .left {
        width: 100%;
        gap: size-m(15);
      }

      .right {
        width: 100%;
        height: size-m(100);

        .row {
          height: 7em;
        }
      }

      &::after {
        display: none;
      }
    }

    .send {
      font-size: size-m(21);
      width: size-m(310);
      height: size-m(72);
      margin-bottom: size-m(65);
    }

    .control {
      font-size: size-m(14.6);
    }
  }
}
</style>

<script setup>
import Policy from "@/section/form/policy.vue"
import ContactInfo from "@/section/form/contactInfo.vue"
import Map from "@/section/form/map.vue"
import HouseInfo from "@/section/form/houseInfo.vue"

import info from "@/info"

import { cityList, renderAreaList } from "@/info/address.js"
import { computed, getCurrentInstance, ref, reactive, watch, onMounted } from "vue"
import { VueRecaptcha } from "vue-recaptcha"

const globals = getCurrentInstance().appContext.config.globalProperties;
const isMobile = computed(() => globals.$isMobile());



import { useToast } from "vue-toastification"
const toast = useToast()

const sending = ref(false)


const formData = reactive({
  name: "",
  phone: "",
  room_type: "",
  budget: "",
  use_type: "",
  gender: "",
  project: "",
  email: "",
  city: "",
  area: "",
  msg: "",
  policyChecked: false,
  r_verify: true,
})

//非必填
const bypass = ["project", "msg", "email", "gender", "use_type", "budget", "room_type", "city", "area", "r_verify"]

//中文對照
const formDataRef = ref([
  "姓名", //name
  "手機", //phone
  "房型", //room_type
  "預算", //budget
  "用途", //use_type
  "性別", //gender
  "建案", //project
  "信箱", //email
  "居住縣市", //city
  "居住地區", //area
  "備註訊息", //msg
  "個資告知事項聲明", //policyChecked
  "機器人驗證", //r_verify
])

const areaList = ref([])

watch(
  () => formData.city,
  (newVal, oldVal) => {
    areaList.value = renderAreaList(newVal)
    formData.area = areaList.value[0].value
  }
)

const onRecaptchaVerify = () => {
  formData.r_verify = true
}
const onRecaptchaUnVerify = () => {
  formData.r_verify = false
}

const send = () => {
  const urlParams = new URLSearchParams(window.location.search);
  const utmSource = urlParams.get("utm_source");
  const utmMedium = urlParams.get("utm_medium");
  const utmContent = urlParams.get("utm_content");
  const utmCampaign = urlParams.get("utm_campaign");
  const time = new Date();
  const year = time.getFullYear();
  const month = time.getMonth() + 1;
  const day = time.getDate();
  const hour = time.getHours();
  const min = time.getMinutes();
  const sec = time.getSeconds();
  const date = `${year}-${month}-${day} ${hour}:${min}:${sec}`;

  const presend = new FormData();
  let pass = true
  let unfill = []
  let idx = 0

  //驗證
  for (const [key, value] of Object.entries(formData)) {
    if (!bypass.includes(key)) {
      if (value == "" || value == false) {
        unfill.push(formDataRef.value[idx])
      }

    }

    idx++;

    presend.append(key, value);
  }

  presend.append("utm_source", utmSource);
  presend.append("utm_medium", utmMedium);
  presend.append("utm_content", utmContent);
  presend.append("utm_campaign", utmCampaign);

  //有未填寫
  if (unfill.length > 0) {
    pass = false
    toast.error(`「${unfill.join(", ")}」為必填或必選`)
    return
  }

  //手機驗證
  const MobileReg = /^(09)[0-9]{8}$/
  if (!formData.phone.match(MobileReg)) {
    pass = false
    toast.error(`手機格式錯誤 ( 09開頭10位數字 )`)
    return
  }

  if (pass && !sending.value) {
    sending.value = true
    fetch(
      `https://script.google.com/macros/s/AKfycbyQKCOhxPqCrLXWdxsAaAH06Zwz_p6mZ5swK80USQ/exec?name=${formData.name}(${formData.gender})
      &phone=${formData.phone}
      &email=${formData.email}
      &cityarea=${formData.city}${formData.area}
      &msg=${formData.room_type}；${formData.budget}；${formData.msg}
      &utm_source=${utmSource}
      &utm_medium=${utmMedium}
      &utm_content=${utmContent}
      &utm_campaign=${utmCampaign}
      &date=${date}
      &campaign_name=${info.caseName}`,
      {
        method: "GET"
      }
    );

    fetch("email.php", {
      method: "POST",
      body: presend,
    }).then((response) => {
      if (response.status === 200) {
        window.location.href = "formThanks";
      }
      sending.value = false
    });


    // toast.success(`表單已送出，感謝您的填寫`)
  }
}
</script>
