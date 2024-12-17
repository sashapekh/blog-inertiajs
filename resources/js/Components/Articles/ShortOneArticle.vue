<template>
    <a class="no-underline transition block border border-lighter w-full mb-10 p-5 rounded post-card"
                :href="article.url">
               
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
</template>

<script setup lang="ts">
    import { Article } from '@/Interfaces/articles';
    defineProps<{ article: Article }>();
</script>