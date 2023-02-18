<template>
    <div class="container my-12 mx-auto px-4 md:px-12 flex justify-center items-center">
        <!-- <h1 class="text-4xl font-bold text-black">
            {{ this.article.title }}
        </h1>
        <div class="content">
            <div class="flex flex-wrap -mx-1 lg:-mx-4">
                <div class="flex items-center justify-between leading-none p-2 md:p-4">
                    <img class="block rounded-full" src="https://picsum.photos/32/32/?random"> <br>
                    <p class="ml-2 text-sm">
                        {{ this.article.name }}
                    </p>
                </div>
            </div>
        </div> -->
        <div class="container px-8 py-5 lg:py-8 mx-auto xl:px-5 max-w-screen-lg !pt-0">
            <div class="max-w-screen-md mx-auto">
                <!-- <div class="text-center">
                    <div class="flex gap-3"><a href="/post/5-effective-brain-recharging-activities-no-one-is-talking-about#"><span class="inline-block mt-5 text-xs font-medium tracking-wider uppercase  text-purple-600">Lifestyle</span></a></div>
                </div> -->
                <h1 class="mt-2 mb-3 text-3xl font-semibold tracking-tight text-center lg:leading-snug text-brand-primary lg:text-4xl dark:text-white"> {{ this.article.title }} </h1>
                <div class="flex justify-center mt-3 space-x-3 text-gray-500 ">
                    <div class="flex items-center gap-3">
                        <div class="relative flex-shrink-0 w-10 h-10">
                        <!-- <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;">
                            <img sizes="100vw" :src="`${this.article.image}`" decoding="async" data-nimg="fill" class="rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover;">
                            <noscript></noscript>
                        </span> -->
                        </div>
                        <div>
                        <p class="text-gray-800 dark:text-gray-400">{{ this.article.user.name }}</p>
                            <div class="flex items-center space-x-2 text-sm">
                                <time class="text-gray-500 dark:text-gray-400" datetime="2022-10-21T10:50:00.000Z">
                                    {{ this.article.published_at | myDate }}
                                </time>
                                <span>
                                    <i class="fa fa-eye"></i>
                                    {{ this.article.views }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center mt-4">
                    <img :src="`${this.article.image}`" class="w-full border-none rounded shadow"/>
                </div>
            </div>
            <article class="max-w-screen-md mx-auto text-lg">
                <div class="mx-auto my-3 prose prose-base dark:prose-invert prose-a:text-blue-500">
                    <blockquote>“ {{ this.article.body }}”</blockquote>
                </div>
                <div class="flex justify-center mt-7 mb-7"><a class="px-5 py-2 text-sm text-blue-600 rounded-full dark:text-blue-500 bg-brand-secondary/20 " href="/">← View all posts</a></div>
                <!-- <div class="px-8 py-8 mt-3 text-gray-500 rounded-2xl bg-gray-50 dark:bg-gray-900 dark:text-gray-400">
                    <div class="flex flex-wrap items-start sm:space-x-6 sm:flex-nowrap">
                        <div class="relative flex-shrink-0 w-24 h-24 mt-1 ">
                            <span style="box-sizing:border-box;display:block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:absolute;top:0;left:0;bottom:0;right:0">
                            <img alt="Joshua Wood" src="https://cdn.sanity.io/images/cijrdavx/production/cd477178ed12f28ef668adaf9fcae6b8fc351a08-4480x6415.jpg?rect=0,0,4480,3760&amp;w=3840&amp;q=75&amp;fit=clip&amp;auto=format" decoding="async" data-nimg="fill" class="rounded-full" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover;" sizes="100vw" srcset="https://cdn.sanity.io/images/cijrdavx/production/cd477178ed12f28ef668adaf9fcae6b8fc351a08-4480x6415.jpg?rect=0,0,4480,3760&amp;w=640&amp;q=75&amp;fit=clip&amp;auto=format 640w, https://cdn.sanity.io/images/cijrdavx/production/cd477178ed12f28ef668adaf9fcae6b8fc351a08-4480x6415.jpg?rect=0,0,4480,3760&amp;w=750&amp;q=75&amp;fit=clip&amp;auto=format 750w, https://cdn.sanity.io/images/cijrdavx/production/cd477178ed12f28ef668adaf9fcae6b8fc351a08-4480x6415.jpg?rect=0,0,4480,3760&amp;w=828&amp;q=75&amp;fit=clip&amp;auto=format 828w, https://cdn.sanity.io/images/cijrdavx/production/cd477178ed12f28ef668adaf9fcae6b8fc351a08-4480x6415.jpg?rect=0,0,4480,3760&amp;w=1080&amp;q=75&amp;fit=clip&amp;auto=format 1080w, https://cdn.sanity.io/images/cijrdavx/production/cd477178ed12f28ef668adaf9fcae6b8fc351a08-4480x6415.jpg?rect=0,0,4480,3760&amp;w=1200&amp;q=75&amp;fit=clip&amp;auto=format 1200w, https://cdn.sanity.io/images/cijrdavx/production/cd477178ed12f28ef668adaf9fcae6b8fc351a08-4480x6415.jpg?rect=0,0,4480,3760&amp;w=1920&amp;q=75&amp;fit=clip&amp;auto=format 1920w, https://cdn.sanity.io/images/cijrdavx/production/cd477178ed12f28ef668adaf9fcae6b8fc351a08-4480x6415.jpg?rect=0,0,4480,3760&amp;w=2048&amp;q=75&amp;fit=clip&amp;auto=format 2048w, https://cdn.sanity.io/images/cijrdavx/production/cd477178ed12f28ef668adaf9fcae6b8fc351a08-4480x6415.jpg?rect=0,0,4480,3760&amp;w=3840&amp;q=75&amp;fit=clip&amp;auto=format 3840w">
                            <noscript><img alt="Joshua Wood" sizes="100vw" srcSet="https://cdn.sanity.io/images/cijrdavx/production/cd477178ed12f28ef668adaf9fcae6b8fc351a08-4480x6415.jpg?rect=0,0,4480,3760&amp;w=640&amp;q=75&amp;fit=clip&amp;auto=format 640w, https://cdn.sanity.io/images/cijrdavx/production/cd477178ed12f28ef668adaf9fcae6b8fc351a08-4480x6415.jpg?rect=0,0,4480,3760&amp;w=750&amp;q=75&amp;fit=clip&amp;auto=format 750w, https://cdn.sanity.io/images/cijrdavx/production/cd477178ed12f28ef668adaf9fcae6b8fc351a08-4480x6415.jpg?rect=0,0,4480,3760&amp;w=828&amp;q=75&amp;fit=clip&amp;auto=format 828w, https://cdn.sanity.io/images/cijrdavx/production/cd477178ed12f28ef668adaf9fcae6b8fc351a08-4480x6415.jpg?rect=0,0,4480,3760&amp;w=1080&amp;q=75&amp;fit=clip&amp;auto=format 1080w, https://cdn.sanity.io/images/cijrdavx/production/cd477178ed12f28ef668adaf9fcae6b8fc351a08-4480x6415.jpg?rect=0,0,4480,3760&amp;w=1200&amp;q=75&amp;fit=clip&amp;auto=format 1200w, https://cdn.sanity.io/images/cijrdavx/production/cd477178ed12f28ef668adaf9fcae6b8fc351a08-4480x6415.jpg?rect=0,0,4480,3760&amp;w=1920&amp;q=75&amp;fit=clip&amp;auto=format 1920w, https://cdn.sanity.io/images/cijrdavx/production/cd477178ed12f28ef668adaf9fcae6b8fc351a08-4480x6415.jpg?rect=0,0,4480,3760&amp;w=2048&amp;q=75&amp;fit=clip&amp;auto=format 2048w, https://cdn.sanity.io/images/cijrdavx/production/cd477178ed12f28ef668adaf9fcae6b8fc351a08-4480x6415.jpg?rect=0,0,4480,3760&amp;w=3840&amp;q=75&amp;fit=clip&amp;auto=format 3840w" src="https://cdn.sanity.io/images/cijrdavx/production/cd477178ed12f28ef668adaf9fcae6b8fc351a08-4480x6415.jpg?rect=0,0,4480,3760&amp;w=3840&amp;q=75&amp;fit=clip&amp;auto=format" decoding="async" data-nimg="fill" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:100%;max-height:100%;object-fit:cover" class="rounded-full" loading="lazy"/></noscript>
                            </span>
                        </div>
                        <div>
                            <div class="mb-3">
                            <h4 class="text-lg font-medium text-gray-800 dark:text-gray-300">
                                About Joshua Wood
                            </h4>
                            </div>
                            <div>
                            <p>Joshua is a Microsoft Azure Certified Cloud Professional and a Google Certified Associate Cloud Engineer. A Data Analytics at Acme, specializing in the use of cloud infrastructure for Machine Learning and Deep Learning operation at scale.</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </article>
        </div>
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