<template>
    <ul class="list-group list-group-horizontal soc_spisok">
        <li class="list-group-item soc_spisok_element"><img  :src="social_photo" width="50px"></li>
        <li class="list-group-item soc_spisok_element"><a :href="link">{{ social_name }}</a></li>
    </ul>
</template>

<style scoped>
    .soc_spisok {
        border: 0;
        align-items: center;        
        
    }
    .soc_spisok_element {
        background: transparent;
        border: 0;
    }
    .soc_spisok_element a {
        text-decoration: none;
        color: silver;
        font-size: 18px;
        transition: all 500ms ease;
    }
    .soc_spisok_element a:hover {
        font-size: 21px;
        color: white;
        border-bottom: 1px solid white;
    }
</style>

<script>
    export default {
        props: {
            social_photo: {
                type: String,
                required: true
            },
            social_name: {
                type: String,
                required: true
            },
            link: {
                type: String,
                required: true
            }
        }
    }
</script>