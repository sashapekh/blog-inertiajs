<template>
   <header class="py-5 mb-10">
            <div class="container mx-auto px-5 lg:max-w-screen">
                <div class="flex items-center justify-center flex-col lg:flex-row">
                    <div class="mt-10 lg:mt-0 flex items-center justify-center">
                        <Link :href="route('index')" class="mx-5 no-underline hover:underline uppercase">Main</Link>
                        <Link :href="route('articles.list')" class="mx-5 no-underline hover:underline uppercase">Articles</Link>
                    </div>
                </div>
            </div>
    </header>
</template>


<script setup>
import { Link } from '@inertiajs/vue3';
const props = defineProps(['seoParams']);

</script>