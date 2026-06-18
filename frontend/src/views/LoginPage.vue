<template>
    <div class="central_container bor">
        <form method="post">
            <h1>Войти</h1>
            <div class="mb-3">
                <input type="text" v-model="login" class="form_login_input" placeholder="Login:">
                <input type="password" v-model="password" class="form_login_input" placeholder="Password:">
                <button @click="Auth()" class="btn_form" type="button">Войти</button>
                <p style="color: darkred" v-if="info != null">{{ errorMessage }}</p>
            </div>
        </form>
    </div>
</template>

<style scoped>
    form {
        text-align: center;
        border: 1px solid white;
        padding: 20px;
        border-radius: 20px;
        background-image: linear-gradient(90deg, #210f30, #0e0738);
    }
    form h1 {
        color: white;
        text-align: center;
    }
    .form_login_input {
        background: transparent;
        border: none;
        color: rgb(196, 69, 255);
        border-bottom: 2px solid rgb(196, 69, 255);
        font-size: 18px;
        transition: all 300ms ease;
        display: block;
        margin: 50px auto;
    }
    .form_login_input:focus {
        outline: none;
        padding: 10px;
        color: white;
        border-bottom: 3px solid white;
        font-size: 21px;
    }
    .btn_form {
        border: none;
        background-color: #6528aa;
        padding: 10px 25px;
        border-radius: 20px;
        color: #f9b1fc;
        margin-bottom: 25px;
        transition: all 300ms ease;
        font-size: 20px;
    }
    .btn_form:hover {
        background-color: #8937e7;
        font-size: 18px;
        color: #ffffff;
        font-weight: 600;
        font-size: 22px;
    }
</style>

<script>
    import axios from 'axios';
    import Cookie from "js-cookie";
    import { useRouter } from 'vue-router';
    const router = useRouter();

    

    export default {
        data()
        {
            return {
                login: '',
                password: '',
                errorMessage: '',
                info: null,
                data: '',
                code: '',
                token: '',
                startData: null
            }
        },
        async mounted() {
            const token = Cookie.get('token');
            console.log(token);
            if (token)
            {
                await axios.get("http://localhost:8000/api/me", {
                    headers: {
                        Authorization: `Bearer ${token}`
                    }
                }).then(response => {
                    this.startData = response.data.message;
                });
                
                if (this.startData === "Токен действителен!")
                {
                    this.goToPage('/manager');
                }
            }
        },
        methods: {
            goToPage(path)
            {
                this.$router.replace(path);
            },
            async getToken()
            {
                let data;
                await axios.post('http://localhost:8000/api/login', {
                    login: this.login,
                    password: this.password
                }).then(result => (data = result.data.access_token)).catch(error => (this.code = error.response.status));
                Cookie.set('token', data.split('|')[1], { expires: 3 });
                this.token = data;
                console.log(`Eto v cookie ${this.token}`);
                this.goToPage('/manager');
            },
            Auth() {
                const router = useRouter();
                if (this.login.trim().length < 3)
                {
                    this.info = "error";
                    this.errorMessage = "Логин не может быть короче 4 символов."
                    return false;
                }

                if (this.password.trim().length < 4)
                {
                    this.info = "error";
                    this.errorMessage = "Пароль должен быть длиннее 4-х символов";
                    return false;
                }

                this.info = null;
                this.errorMessage = "";

                if (this.code == "401")
                {
                    this.info = "error";
                    this.errorMessage = "Логин или пароль неверные!";
                    return false;
                }
                else
                {
                    this.getToken();
                    
                }

            }
        }
    }
</script>
