<template>
    <div class="message">
        <h5>{{ Email }}</h5>
        <p>{{ Message }}</p>
        <span class="date">{{ Date }}</span>
        <button @click="deleteMessages(ID_Message)" class="btn btn-primary">Delete</button>
    </div>

</template>

<style scoped>
    .message {
        outline: 2px solid rgb(69, 24, 90);
        padding: 15px 20px;
        border-radius: 20px;
        background-color: rgb(54, 21, 85);
        margin: 20px auto;
    }
    .message h5 {
        color: rgb(186, 142, 243);
    }
    .message p {
        color: rgb(151, 114, 199);
    }
    .date {
        color: white;
        margin-right: 30px;
    }
</style>

<script>
    export default {
        props: {
            ID_Message: {
                type: String,
                required: true
            },
            Email: {
                type: String,
                required: true
            },
            Message: {
                type: String,
                required: true
            },
            Date: {
                type: String,
                required: true
            },
            deleteMessages: {
                type: Function,
                required: true
            }
        }
    }
</script>
