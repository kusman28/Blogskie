<template>
    <div class="flex flex-col justify-around h-full">
        <h1 class="pt-3 font-body text-4xl font-semibold text-primary md:text-3xl lg:text-2xl mb-4">Latest Posts</h1>
        <!-- <div>
            <select class="block bg-gray-300 text-gray-700 py-2 px-2 rounded-lg focus:outline-none md:py-3">
            <option>Latest</option><option>Last Week</option>
            </select>
        </div> -->
            
        <div class="max-w-2xl overflow-hidden bg-white rounded-lg shadow-md mt-4">
            <img class="object-cover w-full h-64" src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Article">

            <div class="p-6">
                <div>
                    <!-- <span class="text-xs font-medium text-blue-600 uppercase dark:text-blue-400">Product</span> -->
                    <a href="#" class="rounded-full px-2 py-1 bg-blue-500 text-gray-100 font-bold round">Profession</a>
                    <a href="#" class="block mt-6 text-xl font-semibold text-gray-800 transition-colors duration-300 transform" tabindex="0" role="link">I Built A Successful Blog In One Year</a>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Molestie parturient et sem ipsum volutpat vel. Natoque sem et aliquam mauris egestas quam volutpat viverra. In pretium nec senectus erat. Et malesuada lobortis.</p>
                </div>

                <div class="mt-4">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <img class="object-cover h-10 rounded-full" src="https://images.unsplash.com/photo-1586287011575-a23134f797f9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=48&q=60" alt="Avatar">
                            <a href="#" class="mx-2 font-semibold text-gray-700" tabindex="0" role="link">K. Usman</a>
                        </div>
                        <span class="mx-1 text-xs text-gray-600">21 SEP 2015</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'BlogskieTestComponent',

    data() {
        return {
            
        };
    },

    mounted() {
        
    },

    methods: {
        
    },
};
</script>

<style lang="scss" scoped>

</style>