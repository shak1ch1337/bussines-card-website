<template>
    <ManagerHeader />
    <div class="container">
        <div class="row">
            <div class="col-11">
                <h3 style="color: white">Панель администратора</h3>
            </div>
            <div class="messages_block">
                <h4 style="color: silver">Сообщения</h4>
                <div class="messages">
                    <MessageBlock v-for="message in messages" :Email=message.address :Message=message.message :Date=message.created_at
                    :deleteMessages="deleteMessages" :ID_Message="message.id"/>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
    .messages_block {
        margin-top: 50px;
    }
</style>

<script>
    import ManagerHeader from '@/components/ManagerHeader.vue';
    import MessageBlock from '@/components/MessageBlock.vue';
    import axios from 'axios';
    import Cookies from 'js-cookie';

    export default {
        components: { ManagerHeader, MessageBlock },
        data() {
            return {
                messages: []
            }
           
        },
        mounted() {
            this.getMessages();
        },
        methods: {
            getMessages()
            {
                axios.get('http://localhost:8000/api/messages', {headers: {
                        Authorization: `Bearer ${Cookies.get('token')}`
                    }}).then(result => (this.messages = result.data));
            },
            deleteMessages(id)
            {
                axios.delete(`http://localhost:8000/api/messages/${id}`, { headers: {
                     Authorization: `Bearer ${Cookies.get('token')}`
                } });
                alert("Сообщение удалено!");
                window.location.reload();
            }
        }
    }
</script>