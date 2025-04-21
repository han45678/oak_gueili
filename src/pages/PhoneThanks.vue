<template>
    <div class="thanks">
        <img src="https://bcp.crwdcntrl.net/5/c=13578/b=78113418" width="1" height="1" />
        <a href="/oak_gueili/">
            <img src="@/assets/thank-img.png" alt="thank" class="img pc">
            <img src="@/assets/thank-img_m.png" alt="thank" class="img mobile">
        </a>
    </div>
</template>
<style lang="scss" scoped>
.thanks {
    width: 100vw;
    height: 100vh;
    background: url('@/assets/thank_bg.webp');
    background-size: cover;
    background-position: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

    a {
        .img {
            //position: absolute;
            opacity: 1;
        }

        
    }

    .mobile{
        display: none;
    }
}

@media screen and (max-width: 767px) {
    .thanks {
        a {

            .img {
                width: 80vw;
            }
        }
    }
    .mobile{
        display: block !important;
    }
    .pc{display: none;}
}
</style>

<script>
export default {
    name: 'phoneThanks',
    components: {},
    methods: {},
}
</script>