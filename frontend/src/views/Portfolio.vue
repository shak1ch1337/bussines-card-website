<template>
    <Header />
    <div class="container">
        <h1 class="portfolio_title">Мои работы</h1>
        <div class="row">
            <div class="col" v-for="project in projects">
                <ProjectBlock :title=project.title :description=project.description
                :project_link=project.link_project :github_link=project.link_github :date=project.created_at />
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

    import axios from 'axios';
    


    export default {
        data() {
            return {
                projects: []
            }
        },
        mounted() {
            axios.get('http://localhost:8000/api/projects').then(response => {
                this.projects = response.data;
            });
        },
        components: { Header, ProjectBlock }
    }
</script>
