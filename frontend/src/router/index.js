import { createRouter, createWebHistory } from "vue-router";
import MainPage from "@/views/MainPage.vue";
import About from "@/views/About.vue";
import Skills from "@/views/Skills.vue";
import Contacts from "@/views/Contacts.vue";
import Portfolio from "@/views/Portfolio.vue";

import LoginPage from "@/views/LoginPage.vue";
import NotFound from "@/views/NotFound.vue";


const routes = [
    { path: "/", component: MainPage },
    { path: "/about", component: About },
    { path: "/skills", component: Skills },
    { path: "/contacts", component: Contacts },
    { path: "/portfolio", component: Portfolio },
    { path: "/manager/login", component: LoginPage },

    
    { path: "/:pathMatch(.*)*",
        name: "NotFound",
        component: NotFound
     }
]


const router = createRouter({
    history: createWebHistory(),
    routes,
})


export default router