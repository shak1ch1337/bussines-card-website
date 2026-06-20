<template>

    <Header />

    <div class="container">
        <div class="row align-items-center marg">
            <div class="col-xs-12 col-sm-7 col-md-6 col-lg-6" >
                <span class="my-name">I am Daniil</span>
                <h1 class="position">Backend&Software<br>Developer</h1>
                <p class="description">
                    Меня зовут Даниил и я занимаюсь программированием на протяжении 8 лет. 
                    На данный момент я развиваюсь в сфере написания Телеграм-ботов, разработки Лендингов и 
                    небольших сайтов и веб-приложений. Вы можете найти и посмотреть мое портфолио на данном сайте.
                </p>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-6 col-lg-6" >
                <!--<img src="../images/img.jpg" class="img-fluid photo">-->
                <img src="../../public/storage/img.jpg" class="img-fluid photo">
            </div>
        </div>
    </div>
</template>

<style scoped>
    .my-name {
        color: #b654b8;
        font-weight: bold;
        font-size: 22px;
        text-shadow: 0 0 10px #bf05f8;
    }
    .position {
        background-image: linear-gradient(90deg, #f9b1fc, #522f8f);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 36px;
        font-weight: bold;
        padding: 10px 0;
    }

    @media (max-width: 576px)
    {
        .position {
            font-size: 23px;
        }
    }
    .description {
        font-size: 19px;
        background-image: linear-gradient(90deg, #efb7ef, #7ebff9);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .photo {
        width: 400px;
        border: none;
        border-radius: 100%;
        outline: none;
        float: right;
    }

    .ots {
        margin: 100px;
    }
    .marg {
        margin: 17% auto;
        
    }
    .vert-center {
        align-items: center;
        
    }
</style>

<script>
    import Header from '@/components/Header.vue';


    export default {
        components: { Header }
    }
</script>
