<template>
    <div class="gmap relative z-10">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.7781008900497!2d121.5068008!3d25.0416035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a909bc27b907%3A0x371f0d0b27efaf89!2zMTA45Y-w5YyX5biC6JCs6I-v5Y2A5YWn5rGf6KGXM-iZnw!5e0!3m2!1szh-TW!2stw!4v1745220745675!5m2!1szh-TW!2stw" frameborder="0"></iframe>
    </div>
</template>

<style lang="scss">
@import "@/assets/style/function.scss";

.gmap {
    width: 100%;
    height: size(500);

    iframe {
        width: 100%;
        height: 100%;
    }
}

@media screen and (max-width:768px) {
    .gmap {
        height: size-m(500);
        margin-top: 0;
    }
}
</style>

<script setup>
import info from "@/info"


</script>