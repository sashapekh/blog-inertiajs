<template>
    <template v-if="articles" >
        <div v-for="article in articles.data" :key="article.id">
            <ShortOneArticle :article="article" />
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
import ShortOneArticle from '@/Components/Articles/ShortOneArticle.vue';
import { ArticlesList } from '@/Interfaces/articles';
    defineProps<{
        articles : ArticlesList
    }>(); 

</script>