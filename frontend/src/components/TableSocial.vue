<template>
    <tbody class="tbody">
        <tr>
            <td scope="row">{{ ID_Social }}</td>
            <td>{{ Title }}</td>
            <td><a :href=link_social>Ссылка</a></td>
            <td><img src="../../public//storage/image.jpg" width="50px"></td>


            <td>
                <button class="btn btn-danger" @click="deleteSocial(ID_Social)">Delete</button>
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
    export default {
        props: {
            ID_Social: {
                type: String,
                required: true
            },
            Title: {
                type: String,
                required: true
            },
            link_social: {
                type: String,
                required: true
            },
            image_address: {
                type: String,
                required: true
            }
        },
        methods: {
            deleteSocial(id)
            {
                console.log(id);
                axios.delete(`http://localhost:8000/api/socials/${id}`, { headers:{ Authorization: `Bearer ${Cookie.get('token')}` } });
                alert("Проект удвлен");
                window.location.reload();
            }
        }
    }
</script>