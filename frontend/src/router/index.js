import { createRouter, createWebHistory } from "vue-router";
import MainPage from "@/views/MainPage.vue";
import About from "@/views/About.vue";
import Skills from "@/views/Skills.vue";
import Contacts from "@/views/Contacts.vue";


const routes = [
    { path: "/", component: MainPage },
    { path: "/about", component: About },
    { path: "/skills", component: Skills },
    { path: "/contacts", component: Contacts }
]


const router = createRouter({
    history: createWebHistory(),
    routes,
})


export default router