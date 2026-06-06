<template>
    <Header />
    <div class="container">
        <h1 class="portfolio_title">Мои работы</h1>
        <div class="row">
            <div class="col">
                <ProjectBlock title="Project 1" description="Project 1 description"
                project_link="https://project.com" github_link="https://gitgub.com" date="06.06.2026"/>
            </div>
            <div class="col">
                <ProjectBlock title="Project 2" description="Project 2 description"
                project_link="https://project.com" github_link="https://gitgub.com" date="06.06.2026"/>
            </div>
            <div class="col">
                <ProjectBlock title="Project 3" description="Project 3 description"
                project_link="https://project.com" github_link="https://gitgub.com" date="06.06.2026"/>
            </div>
            <div class="col">
                <ProjectBlock title="Project 4" description="Project 4 description"
                project_link="https://project.com" github_link="https://gitgub.com" date="06.06.2026"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <ProjectBlock title="Project 5" description="Project 5 description"
                project_link="https://project.com" github_link="https://gitgub.com" date="06.06.2026"/>
            </div>
            <div class="col">
                <ProjectBlock title="Project 6" description="Project 6 description"
                project_link="https://project.com" github_link="https://gitgub.com" date="06.06.2026"/>
            </div>
            <div class="col">
                <ProjectBlock title="Project 7" description="Project 7 description"
                project_link="https://project.com" github_link="https://gitgub.com" date="06.06.2026"/>
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
