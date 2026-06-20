<template>
    <nav class="navbar-default head_btn_line">
        <div class="container ">
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item"><a href="/manager" class="nav-link link-color">Проекты</a></li>
                <li class="nav-item"><a href="/manager/socials" class="nav-link link-color">Соц.сети</a></li>
                <li class="nav-item"><a href="/manager/messages" class="nav-link link-color">Сообщения</a></li>
                <li class="nav-element"><button @click="Quit()" class="nav-link">Выход</button></li>
            </ul>
        </div>
    </nav>
</template>

<style scoped>
    .head_btn_line {
        border-bottom: 1px solid rgb(33, 2, 57);
        padding: 2px 0;
        background: -webkit-linear-gradient(90deg, #090f30,#000000,#190631);background: linear-gradient(90deg, #090f30,#000000,#190631);
    }

    .link-color {
        color: rgb(180, 166, 249);
        font-size: 16px;
        transition: all 500ms ease;
    }
    .link-color:hover {
        color: rgb(230, 223, 255);
        font-size: 18px;
    }
</style>

<script>
    import { useRouter } from 'vue-router';
    import Cookies from 'js-cookie';

    const router = useRouter();
    export default {
        methods: {
            goToPage(path)
            {
                this.$router.replace(path);
            },
            Quit()
            {
                Cookies.remove('token');
                this.goToPage('/manager/login');
            },
        },
    }
</script>