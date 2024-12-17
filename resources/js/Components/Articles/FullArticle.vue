<template>
<div class="container mx-auto px-5 lg:max-w-screen-sm mt-20">
        <h1 class="mb-5 font-sans">{{ article.title }}</h1>

        <div class="flex items-center text-sm text-light">
            <span>{{ article.created_at }}</span>        
        </div>

                             
        <div v-html="article.content"></div>
    </div>
</template>

<script setup lang="ts">
import { Article } from '@/Interfaces/articles';

defineProps<{
    article: Article
}>();
</script>