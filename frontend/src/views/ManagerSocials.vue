<template>
    <ManagerHeader />
    <div class="container">
        <div class="row">
            <div class="col-11">
                <h3>Панель администратора</h3>
            </div>
            <div class="project_table">
                <div class="row" style="margin: 20px auto;">
                    <div class="col-10">
                        <h4>Соц.сети</h4>
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
</template>

<style scoped>

</style>

<script>
    import ManagerHeader from '@/components/ManagerHeader.vue';


    import TableSocial from '@/components/TableSocial.vue';

    export default {
        components: { ManagerHeader, TableSocial }
    }

</script>
