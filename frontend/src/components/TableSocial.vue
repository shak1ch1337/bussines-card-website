<template>
    <tbody class="tbody">
        <tr>
            <td scope="row">{{ ID_Social }}</td>
            <td>{{ Title }}</td>
            <td><a :href=v>Ссылка</a></td>
            <td><img src="../../public//storage/image.jpg" width="50px"></td>


            <td>
                <button class="btn btn-danger" @click="deleteProject(ID_Social)">Delete</button>
            </td>
        </tr>
    </tbody>
</template>

<style scoped>

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

        }
    }
</script>