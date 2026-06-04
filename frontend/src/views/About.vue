<template>
    <Header />

    <div class="container">
        <div class="row marg">
            <h1 class="title_page">Какие проекты я выполняю</h1>
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
    </div>

</template>

<style scoped>

    .marg {
            margin: 25% auto;
    }
    .title_page {
        text-align: center;
        position: relative;
        bottom: 50px;
        color: rgb(223, 176, 250);
        margin: 0 auto;
    }

</style>

<script>
import Header from '@/components/Header.vue';
import AboutBlock from '@/components/AboutBlock.vue';


export default {
    components: { Header, AboutBlock }

}
</script>