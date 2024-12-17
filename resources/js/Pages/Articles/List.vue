<template>
    <template v-if="articles" >
        <div v-for="article in articles.data" :key="article.id">
            <a class="no-underline transition block border border-lighter w-full mb-10 p-5 rounded post-card"
                href="https://blog.laravel.com/laravel-application-monitoring-debugging-with-sentry">
                <!-- <div class="block h-post-card-image bg-cover bg-center bg-no-repeat w-full h-48 mb-5"
                    style="background-image: url('https://laravel-blog-assets.s3.amazonaws.com/3WWa6XTReTLYMQi4FtkuJJUltocCKlirJ42YgpJ4.png')"> -->
                <!-- </div> -->
                <div class="flex flex-col justify-between flex-1">
                    <div>
                        <h2 class="font-sans leading-normal block mb-6">{{ article.title }}</h2>
                        <p class="leading-normal mb-6 font-serif leading-loose">
                           {{ article.content }}
                        </p>
                    </div>
                    <div class="flex items-center text-sm text-light">
                        <span class="ml-auto">{{ article.created_at }}</span>
                    </div>
                </div>
            </a>
        </div>
    </template>

    <!-- Pagination Links -->
    <template v-if="articles && articles.links">
        <nav class="flex justify-center mt-10">
            <ul class="flex list-reset">
                <li v-for="(link, index) in articles.links" :key="index" class="mx-1">
                    <!-- Active Page -->
                    <a
                        v-if="link.url"
                        :href="link.url"
                        v-html="link.label"
                        :class="[
                            'px-4 py-2 rounded border border-lighter text-light hover:bg-light hover:text-white transition',
                            { 'bg-brand text-white font-bold': link.active }
                        ]"
                    ></a>
                    <!-- Disabled Page -->
                    <span
                        v-else
                        v-html="link.label"
                        class="px-4 py-2 rounded border border-lighter text-lighter cursor-not-allowed"
                    ></span>
                </li>
            </ul>
        </nav>
    </template>
</template>


<script setup lang="ts">
import { ArticlesList } from '@/Interfaces/articles';
    defineProps<{
        articles : ArticlesList
    }>(); 

</script>