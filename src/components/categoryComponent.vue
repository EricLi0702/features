<template>
    <div class="category-con">
        <img :src="data.img_url" alt="" class="category-img">
        <h2 class="text-white">{{data.name}}</h2>
    </div>
</template>

<script>
export default {
    props: {
        data : {
            type : Object,
            required : true
        }
    }
}
</script>