<template>
    <ManagerHeader />
    <div class="container">
        <div class="row">
            <div class="col-11">
                <h3 style="color: white">Панель администратора</h3>
            </div>
            <div class="project_table">
                <div class="row" style="margin: 20px auto;">
                    <div class="col-10">
                        <h4 style="color: white">Соц.сети</h4>
                    </div>
                    <div class="col">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-success">Добавить соц.сеть</button>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Link</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <TableSocial ID_Social="1" Title="test" link_social="https://vk.com"/>

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
                        <input v-model="title_social" class="add_project" placeholder="Название соц.сети">
                        <input v-model="link_social" class="add_project" placeholder="Ссылка">
                        <input type="file" class="add_project" placeholder="Ссылка на код проекта">
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
    import ManagerHeader from '@/components/ManagerHeader.vue';


    import TableSocial from '@/components/TableSocial.vue';

    export default {
        components: { ManagerHeader, TableSocial }
    }

</script>
