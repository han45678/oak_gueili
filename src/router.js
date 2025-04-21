import { createRouter, createWebHistory } from "vue-router"
import Home from "@/pages/Home.vue"
const routes = [{
        path: "/oak_gueili/",
        name: "Home",
        component: Home,
    },
    {
        path: "/oak_gueili/formThanks",
        name: "formThanks",
        component: () =>
            import ("@/pages/FormThanks.vue"),
    },
    {
        path: "/oak_gueili/phoneThanks",
        name: "phoneThanks",
        component: () =>
            import ("@/pages/PhoneThanks.vue"),
    },
    {
        name: "404",
        path: "/oak_gueili/404",
        component: () =>
            import ("@/pages/404.vue"),
    },
    {
        name: "404",
        path: "/oak_gueili/404",
        component: () =>
            import ("@/pages/404.vue"),
    },
    {
        path: "/oak_gueili/:catchAll(.*)", // 此处需特别注意至于最底部
        redirect: "404",
    },
]
const router = createRouter({
    history: createWebHistory(),
    routes,
})
export default router