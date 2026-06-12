<template>
    <tbody class="tbody">
        <tr>
            <td scope="row">{{ ID_Project }}</td>
            <td>{{ Title }}</td>
            <td>{{ Description }}</td>
            <td><a href="#">{{ Link }}</a></td>
            <td><a href="#">{{ Gitlink }}</a></td>
            <td>{{ date }}</td>

            <td>
                <a href="#" class="btn btn-danger">Delete</a>
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
            Link: {
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
            }
        }
    }
</script>
