<template>
    <div class="container my-12 mx-auto px-4 md:px-12">
        <h1 class="text-lg font-bold text-black">
            Recent Posts
        </h1>
    <div class="flex flex-wrap -mx-1 lg:-mx-4">

        <!-- Column -->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3" v-for="post in post_datas" :key="post.id">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">
                <div class="img-wrapper">
                    <a :href="`post/${post.slug}`">
                        <img alt="Placeholder" class="block h-auto w-full inner-img" :src="post.image">
                    </a>
                </div>
                <div class="content">
                    <header class="flex items-center justify-between leading-tight p-3 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline font-bold text-black" :href="`post/${post.slug}`">
                                {{ post.title }}
                            </a>
                        </h1>
                        <p class="text-grey-darker text-sm">
                            {{ post.published_at | minsAgo }}
                            <i class="fa fa-clock"></i>
                        </p>
                    </header>
                    <p class="p-3 italic">
                        {{ post.body | shortDesc }}...
                        <a class="read-more hover:underline" :href="`/${post.slug}`">Read more</a>
                    </p>
    
                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                        <a class="flex items-center no-underline hover:underline text-black" :href="`user/${post.user.name}`">
                            <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                            <p class="ml-2 text-sm">
                                {{ post.user.name }}
                            </p>
                        </a>
                        <!-- <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                            <span class="hidden">Like</span>
                            <i class="fa fa-heart"></i>
                        </a> -->
                        <p class="ml-2 text-sm">
                            {{ post.views }}
                            <i class="fa fa-eye"></i>
                        </p>
                    </footer>
                    <div class="px-6 pt-4 pb-2">
                        <span class="badge-bg inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span class="badge-bg inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <!-- <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#fall</span> -->
                    </div>
                </div>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

        <!-- <ViewArticle
            :parent="post_datas"
        /> -->

    </div>
</div>
</template>

<script>
import {fetchPosts} from './mixins/mixin';
import ViewArticle from './ViewArticle.vue'
export default {
    name: 'BlogskieTestComponent',
    components: { ViewArticle },
    data() {
        return {
            post_datas: {}
        };
    },

    created() {
        // console.log(this.post_datas)
        this.getPosts()
    },

    methods: {
        getPosts()
        {
            fetchPosts()
            .then((resp) => {
            this.post_datas = resp.data;
            console.log(this.post_datas)
            })
            .catch((error) => console.log(error))
            .finally(() => {

            });
        }
    },

    filters: {
        shortDesc: function (value) {
            return value.substr(0, 200);
        }
    }
};
</script>

<style lang="scss" scoped>

body[light-mode="dark"] .content {
    background-color: #182747;
}

body[light-mode="dark"] .badge-bg {
  background-color: #8f93a3;
}

body[light-mode="dark"] .read-more {
    color: #bec0c7;
    font-weight: bold;
}

.img-wrapper {  
  overflow: hidden; 
}

.inner-img {
  transition: 0.3s;
}

.inner-img:hover {
  transform: scale(1.1);
}

.img-wrapper {
  box-sizing: border-box;
}
</style>