<template>
    <Header />

    <!--<div class="container">
        <div class="row marg">
            <h1 class="title_page">Какие технологии я применяю</h1>
            <div class="col">
                <AboutBlock title="Телеграм Боты"
                content="Разработка телеграм ботов для различных задач, от простой автоматизации до продажи товаров"
                icon="images/tg-bots.png"/>
            </div>
            <div class="col">
                <AboutBlock title="Лендинги" 
                content="Разработка лендингов для визиток и портфолио в веб-формате, в которых есть обратнрая связь и контакты"
                icon="images/internet-banking.png"/>
            </div>
            <div class="col">
                <AboutBlock title="Несложные сайты"
                content="Разработка несложных многостраничных сайтов и веб-приложений с базой данных"
                icon="images/app-development.png"/>
            </div>
        </div>
    </div>-->

    <div class="container">
        <h1 class="title_page">Какие технологии я использую</h1>
    </div>

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row marg">

                        <div class="col">
                            <AboutBlock title="Python"
                            content="С использованием различных библиотек, к примеру aiogram, я могу создавать телеграм ботов различной сложности"
                            icon="images/python.png"/>
                        </div>
                        <div class="col">
                            <AboutBlock title="PHP" 
                            content="С PHP я разрабатываю серверную часть сайтов, в которыхиспользуется база данных, а также API с использованием фреймворка Laravel"
                            icon="images/php.png"/>
                        </div>
                        <div class="col">
                            <AboutBlock title="VueJS"
                            content="VueJS - это фреймворк языка JavaScript, который я использую в основнои для написания лендингов и клиентской части сайтов"
                            icon="images/document.png"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row marg">

                        <div class="col">
                            <AboutBlock title="Docker"
                            content="Docker я использую для удобного деплоя на сервер, а также для того, чтобы заказчику было проще развернуть тестовый проект"
                            icon="images/docker.png"/>
                        </div>
                        <div class="col">
                            <AboutBlock title="MySQL" 
                            content="Из основных СУБД я чаще всего использую MySQL или же MariaDB из-за ее удобности, гибкости и стабильности"
                            icon="images/mysql.png"/>
                        </div>
                        <div class="col">
                            <AboutBlock title="Github"
                            content="Github я использую для хранения кода, чтобы в любой момент кто-либо смог увидеть открытый код"
                            icon="images/github.png"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
        </button>
    </div>

</template>

<style scoped>
    .marg {
            margin: 25% auto;
    }
    .title_page {
        text-align: center;
        position: relative;
        top: 230px;
        color: rgb(223, 176, 250);
        margin: 0 auto;
    }

    @media (max-width: 960px) {
        .title_page {
            top: 130px;
        }
    }
    @media (max-width: 720px) {
        .title_page {
            top: 80px;
        }
    }
    @media (max-width: 540px) {
        .title_page {
            top: 50px;
        }
    }
</style>

<script>
    import Header from '@/components/Header.vue';
    import AboutBlock from '@/components/AboutBlock.vue';


    export default {
        components: { Header, AboutBlock }
    }
</script>