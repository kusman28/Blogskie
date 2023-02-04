<template>
    <div class="container my-12 mx-auto px-4 md:px-12 flex justify-center items-center">
        <h1 class="text-4xl font-bold text-black">
            {{ this.article.title }}
        </h1>
    </div>
</template>

<script>
export default {
    props: ['article'],
    data() {
        return {

        }
    },


    mounted() {
        
    },

    methods: {

    },

    filters: {

    }
}
</script>

<style>

</style>
<style lang="scss" scoped>

</style>