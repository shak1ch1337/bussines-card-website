import { createRouter, createWebHistory } from "vue-router";
import MainPage from "@/views/MainPage.vue";
import About from "@/views/About.vue";
import Skills from "@/views/Skills.vue";
import Contacts from "@/views/Contacts.vue";
import Portfolio from "@/views/Portfolio.vue";
import ManagerSocials from "@/views/ManagerSocials.vue";
import ManagerMessages from "@/views/ManagerMessages.vue";

//import Cookies from 'js-cookie';
import Cookies from 'js-cookie';
import axios from 'axios';

import Manager from "@/views/Manager.vue";
import LoginPage from "@/views/LoginPage.vue";

import NotFound from "@/views/NotFound.vue";




const routes = [
    { path: "/", component: MainPage },
    { path: "/about", component: About },
    { path: "/skills", component: Skills },
    { path: "/contacts", component: Contacts },
    { path: "/portfolio", component: Portfolio },
    { path: "/manager/login", component: LoginPage },
    {
        path: "/manager",
        component: Manager,
        beforeEnter: (to, from) => {
            const token = Cookies.get("token");

            if (!token) return { path: "/manager/login" }
        }
    },
    {
        path: "/manager/socials",
        component: ManagerSocials,
        beforeEnter: (to, from) => {
            const token = Cookies.get('token');

            if (!token) return { path: "/manager/login" }
        }
    },
    {
        path: "/manager/messages",
        component: ManagerMessages,
        beforeEnter: (to, from) => {
            const token = Cookies.get('token');

            if (!token) return { path: "/manager/login" }
        }
    },
    
    
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