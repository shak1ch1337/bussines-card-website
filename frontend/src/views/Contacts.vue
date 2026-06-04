<template>
    <Header />

    <div class="container ">
        <div class="container-fluid ">
            <div class="row form form_line">
                <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 " >
                    <h1 class="title_form">Форма для связи</h1>
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form_label">Адрес эл. почты</label>
                            <input type="email" class=" form_control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form_label">Ваше сообщение</label>
                            <textarea class="form_control_area" aria-label="С текстовым полем"></textarea>
                        </div>
                        <button type="submit" class="btn_form">Отправить</button>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6" >
                    <div style="text-align: center;" class="row">
                        <h2 class="soc_title">Социальные сети</h2>
                        <div class="col">
                            <a class="ling_soc" href="#"><img  src="../../public/images/telegram.png"></a>
                        </div>
                        <div class="col">
                            <a class="ling_soc" href="#"><img  src="../../public/images/instagram.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</template>

<style scoped>
    .form {
        display: flex;
        justify-content: center; /* Центрирует по горизонтали */
        align-items: center;      /* Центрирует по вертикали */
        height: 70vh;
        background-image: linear-gradient(90deg, #210f30, #0e0738);
        box-shadow: 2px 3px 20px rgba(109, 3, 248, 0.5);
        border-radius: 50px;
        opacity: 0.8;
        padding: 20px;
    }
    .form_line {
        margin: 200px auto;
        
    }
    .title_form {
         background-image: linear-gradient(90deg, #f9b1fc, #522f8f);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        
    }
    .form_label {
        color: #ba93bb;
        margin: 15px 0;
    }

    .form_control_area {
        height: 140px;
        
    }

    .form_control, .form_control_area {
        background-color: transparent;
        opacity: 0.7;
        display: block;
        color: gray;
        width: 60%;
        border: 0;
        border-bottom: 2px solid #6528aa;
        font-size: 16px;
        
        padding: 5px 20px;
    }
    .form_control:focus, .form_control_area:focus {
        outline: none;
        box-shadow: 3px 3px 30px rgba(183, 0, 255, 0.5);
        border-bottom: 2px solid #b310ff;
        color: white;
        border-radius: 20px;
    }

    .btn_form {
        border: none;
        background-color: #6528aa;
        padding: 10px 25px;
        border-radius: 20px;
        color: #f9b1fc;
        margin-bottom: 25px;
        transition: all 300ms ease;
    }
    .btn_form:hover {
        background-color: #8937e7;
        font-size: 18px;
        color: #ffffff;
        font-weight: 600;
    }
    .ling_soc img {
        margin-top: 25px;
        width: 80px;
        transition: all 500ms ease;
    }
    .ling_soc:hover img {
        width: 100px;
    }
    .soc_title {
        background-image: linear-gradient(90deg, #efb7ef, #7ebff9);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>

<script>
    import Header from '@/components/Header.vue';


    export default {
        components: { Header }
    }
</script>
