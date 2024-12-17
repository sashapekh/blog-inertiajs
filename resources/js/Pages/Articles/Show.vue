<template>
    <FullArticle :article="article" />
</template>

<script setup lang="ts">

import { Article } from '@/Interfaces/articles';
import FullArticle from '@/Components/Articles/FullArticle.vue';

defineProps<{ article: Article }>();
</script>