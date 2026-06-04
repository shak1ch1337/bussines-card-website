<template>
        <nav class="navbar-default head_btn_line">
        <div class="container ">
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item"><a href="/" class="nav-link link-color">Главная</a></li>
                <li class="nav-item"><a href="/about" class="nav-link link-color">О проектах</a></li>
                <li class="nav-item"><a href="/portfolio" class="nav-link link-color">Портфолио</a></li>
                <li class="nav-item"><a href="/skills" class="nav-link link-color">Навыки</a></li>
                <li class="nav-item"><a href="/contacts" class="nav-link link-color">Контакты</a></li>
            </ul>
        </div>
    </nav>

</template>

<style scoped>
    .head_btn_line {
        border-bottom: 1px solid rgb(33, 2, 57);
        padding: 10px 0;
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

</script>