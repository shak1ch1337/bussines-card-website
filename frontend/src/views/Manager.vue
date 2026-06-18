<template>
    <div class="container">
        <dic class="row">
            <div class="col-11">
                <h3>Панель администратора</h3>
            </div>
            <div class="col-1">
                <button @click="Quit()" class="btn btn-primary">Выход</button>
            </div>
        </dic>
        
        <div class="row project_table">
            
            <div class="row" style="margin: 20px auto;">
                <div class="col-10">
                    <h4>Проекты</h4>
                </div>
                <div class="col">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-success">Добавить проект</button>
                </div>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Link</th>
                            <th scope="col">Github</th>
                            <th scope="col">Date</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                     <TableBody v-for="project in projects" :key="project.id" :ID_Project= project.id :Title=project.title
                     :Description=project.description :project_link=project.link_project
                     :Gitlink=project.link_github :date=project.created_at />
                </table>
            </div>
        </div>
    </div>




    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Добавить новый проект</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <input v-model="title" class="add_project" placeholder="Название проекта">
                        <textarea v-model="description" class="add_project" placeholder="Краткое описание проекта"></textarea>
                        <input v-model="link" class="add_project" placeholder="Ссылка на проект">
                        <input v-model="gitlink" class="add_project" placeholder="Ссылка на код проекта">
                        <button @click="createProject()" class="form_btn" type="button">Отправить</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                </div>
            </div>
        </div>
    </div>

</template>

<style scoped>
    h3, h4 {
        color: white;
    }
    .project_table {
        margin: 60px auto;
    }

    .table th{
        background-color: #280b58;
        text-align: center;
        outline: 1px solid #bf05f8;
        color: white;
    }
    .add_project {
        display: block;
        width: 300px;
        padding: 10px;
        margin: 15px auto;
        border: 0;
        border-bottom: 1px solid black;
    }
    .form_btn {
        border-radius: 10px;
        border: 1px solid black;
        background-color: #280b58;
        color: white;
        padding: 5px 10px;
        transition: all 500ms ease;
    }
    .form_btn:hover {

        font-size: 19px;
        background-color: #bf05f8;
        color: white;
        padding: 5px 10px;
    }

</style>

<script>
    import TableBody from '@/components/TableBody.vue';
    import Cookie from "js-cookie";
    import axios from 'axios';

    import { useRouter } from 'vue-router';
    const router = useRouter();

    export default {
        data()
        {
            return {
                title: '',
                description: '',
                link: '',
                gitlink: '',
                projects: []
            }
        },
        components: { TableBody },
        mounted() {
            this.getProjects();
        },
        methods: {
            goToPage(path)
            {
                this.$router.replace(path);
            },
            Quit()
            {
                Cookie.remove('token');
                this.goToPage('/manager/login');
            },
            createProject()
            {
                let answer;
                console.log(Cookie.get('token'));
                axios.post('http://localhost:8000/api/projects', {
                        title: this.title,
                        description: this.description,
                        link_project: this.link,
                        link_github: this.gitlink
                    
                }, {
                    headers: {
                        Authorization: `Bearer ${Cookie.get('token')}`
                    }
                }).then(response => {answer = response});
                alert("Проект добавлен!");
                window.location.reload();
            },
            getProjects()
            {
                axios.get('http://localhost:8000/api/projects').then(response => {
                    this.projects = response.data
                });
            }
        }
    }
</script>
