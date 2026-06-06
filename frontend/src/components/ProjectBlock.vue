<template>
    <div class="container">
        <div class="block">
            <div class="row">
            <h2>{{ title }}</h2>
            <div class="row">
                <p>{{ description }}</p>
            </div>
            <div class="row links">
                <div class="col-5">
                    <span>Link: </span>
                </div>
                <div class="col-7">
                    <a href="#">{{ project_link }}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                    <span>Link Git: </span>
                </div>
                <div class="col-7">
                    <a href="#">{{ github_link }}</a>
                </div>
            </div>
            <div class="row">
                <span>{{ date }}</span>
            </div>
        </div>
        </div>
        
    </div>
</template>

<style scoped>
    .block {
        outline: 1px solid red;
        text-align: left;
        margin: 20px auto;
        padding: 20px;
        outline: 1px solid #1d0c3a;
        background-color: #110327;
        border-radius: 20px;
        color: #efb7ef;
        transition: all 500ms ease;
        opacity: 0.8;
    }
    .block:hover {
        background-color: #1c0e33;
        outline: 2px solid #522f8f;
        opacity: 1;
    }
    .links {
        text-align: left;
    }
</style>

<script>
    export default {
        props: {
            title: {
                type: String,
                required: true
            },
            description: {
                type: String,
                required: true
            },
            project_link: {
                type: String,
                required: true
            },
            github_link: {
                type: String,
                required: true
            },
            date: {
                type: Date,
                required: true
            }
        }
    }
</script>