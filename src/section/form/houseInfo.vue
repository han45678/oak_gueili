<template>
    <!--  -->
    <div class="house">
        <div class="flex h-full flex-col md:flex-row items-center justify-between">

            <div class="flex-1 items-center justify-center py-10 font-['Noto_Sans_TC']">
                <div class="h-full info-box mx-auto flex flex-col items-center justify-center">
                    <div class="title">建案資訊</div>
                    <div class="info-items mt-4 w-full grid grid-cols-1 md:grid-cols-2 ">

                        <div v-for="(item, index) in data" :key="index"
                            class="item font-bold flex items-center w-full whitespace-nowrap">
                            <p class="sub mr-5 pl-2 text-[#fff]">{{ item.title }}</p>
                            <p class="whitespace-pre-line leading-normal text-left font-normal">
                                {{ item.content }}
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="scss">
@import "@/assets/style/function.scss";

$house-c1: #AC7F41;
$house-c2: #000;

.displaynone {
    display: none;
}

.house {
    // height: auto;
    color: $house-c2;
    font-size: size(22);

    // height:4em;
    img {
        height: 1.3em;
        vertical-align: middle;
    }
}

.info-box {
    width: size(800);

    .title {
        font-size: size(40);
        font-weight: 700;
        color: $house-c1;
        margin: 0 auto 1em auto;
    }

    .info-items {
        row-gap: size(20);
        column-gap: size(20);

        .item {
            line-height: size(17);
            font-size: size(16);
            align-items: flex-start;
            line-height: 1.5;
            text-align: left;
            border-left: 2px solid $house-c1;

            .sub {
                color: $house-c1;
                // min-width: 4.5em;
            }
        }
    }
}

@media screen and (max-width:768px) {
    .house {
        // background:#fff;
        //  height: size-m(400);
        font-size: size-m(13);
    }

    .footer {
        margin-bottom: size-m(0);
        //margin-bottom: size-m(63);
    }

    .info-box {
        width: size-m(313);
        padding: 0;

        .title {
            font-size: size-m(29);
            width: auto;
        }

        .info-items {
            row-gap: size-m(20);

            .item {
                font-size: size-m(13);
            }
        }
    }

}
</style>

<script setup>
import { ref } from 'vue';
import info from "@/info"

const data = ref([
    {
        title: "投資興建",
        content: "XXX"
    },
    {
        title: "建築設計",
        content: "XXX"
    },
    {
        title: "建照號碼",
        content: "XXX"
    },
    {
        title: "行銷企劃",
        content: "XXX"
    },
    {
        title: "經紀人",
        content: "XXX"
    },
    {
        title: "使用執照",
        content: "以上項目皆可自由增減調整 區塊也可隱藏"
    },
])
</script>