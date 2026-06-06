<template>
    <div class="central_container bor">
        <form>
            <h1>Войти</h1>
            <div class="mb-3">
                <input type="text" class="form_login_input" placeholder="Login:">
                <input type="password" class="form_login_input" placeholder="Password:">
                <button class="btn_form" type="submit">Войти</button>
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

</script>
