<template>
    <Header />
    <div class="container">
        <h1 class="portfolio_title">Мои работы</h1>
        <div class="row">
            <div class="col">
                <ProjectBlock />
            </div>
            <div class="col">
                <ProjectBlock />
            </div>
            <div class="col">
                <ProjectBlock />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <ProjectBlock />
            </div>
            <div class="col">
                <ProjectBlock />
            </div>
            <div class="col">
                <ProjectBlock />
            </div>
        </div>
        
    </div>
</template>

<style scoped>
    .portfolio_title {
        text-align: center;
        margin-top: 50px;
        color: rgb(223, 176, 250);
    }
</style>

<script>
    import Header from '@/components/Header.vue';
    import ProjectBlock from '@/components/ProjectBlock.vue';


    export default {
        components: { Header, ProjectBlock }
    }
</script>
