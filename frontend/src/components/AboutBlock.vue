<template>

    <div class="block">
        <div class="row lev">
            <div class="col">
                <img class="icon" :src="icon">
            </div>
            <div class="col">
                <h1 class="title_block">{{ title }}</h1>
                
            </div>
        </div>
        <div class="row">
            <p class="content_block">{{ content }}</p>
        </div>
    </div>
</template>

<style scoped>
    .block {
        margin: 10px 15px;
        outline: 1px solid #1d0c3a;
        background-color: #110327;
        padding: 20px;
        border-radius: 20px;
        min-height: 200px;
        transition: all 500ms ease;
        opacity: 0.8;
    }
    .block:hover {
        margin: 0;
        background-color: #1c0e33;
        outline: 2px solid #522f8f;
        opacity: 1;
    }
    .lev {
        text-align: center;
        align-items: center;
    }
    .icon {
        width: 70px;
        margin: 15px 0;
        vertical-align: middle;
    }
    .title_block {
        background-image: linear-gradient(90deg, #efb7ef, #7ebff9);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 32px;
    }
    .content_block {
        background-image: linear-gradient(90deg, #f9b1fc, #522f8f);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 18px;
    }
</style>

<script>
export default {
    props: {
        title: {
            type: String,
            required: true
        },
        content: {
            type: String,
            required: true
        },
        icon: {
            type: String,
            required: true
        }
    }
}
</script>
