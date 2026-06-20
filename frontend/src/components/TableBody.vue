<template>
    <tbody class="tbody">
        <tr>
            <td scope="row">{{ ID_Project }}</td>
            <td>{{ Title }}</td>
            <td>{{ Description }}</td>
            <td><a :href=project_link>Проект</a></td>
            <td><a :href=Gitlink>Код</a></td>
            <td>{{ date }}</td>

            <td>
                <button class="btn btn-danger" @click="deleteProject(ID_Project)">Delete</button>
            </td>
        </tr>
    </tbody>
</template>

<style scoped>
    .tbody td{
        background-color: #190b31;
        outline: 1px solid #bf05f8;
        color: white;

    }
</style>

<script>
    import axios from 'axios';
    import Cookie from 'js-cookie';
    export default {
        props: {
            ID_Project: {
                type: String,
                required: true
            },
            Title: {
                type: String,
                required: true
            },
            Description: {
                type: String,
                required: true
            },
            Gitlink: {
                type: String,
                required: true
            },
            date: {
                type: String,
                required: true
            },
            project_link: {
                type: String,
                required: true
            }
        },
        methods: {
            deleteProject(id)
            {
                console.log(id);
                axios.delete(`http://localhost:8000/api/projects/${id}`, { headers:{ Authorization: `Bearer ${Cookie.get('token')}` } });
                alert("Проект удвлен");
                window.location.reload();
            }
        },
    }
</script>
