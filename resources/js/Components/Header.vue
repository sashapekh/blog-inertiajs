<template>
   <header class="py-5 mb-10">
            <div class="container mx-auto px-5 lg:max-w-screen">
                <div class="flex items-center flex-col lg:flex-row">
                    <a href="/" class="flex items-center no-underline text-brand">
                        <h1 class="text-3xl font-bold">{{ seoParams.appName}}</h1>
                    </a>
                    <div class="lg:ml-auto mt-10 lg:mt-0 flex items-center">
                        <Link class="ml-5 no-underline hover:underline uppercase" href="/">Main</Link>
                        <Link class="ml-5 no-underline hover:underline uppercase" href="/about">About Us</Link>
                        <Link class="ml-5 no-underline hover:underline uppercase" href="/articles">Articles</Link>
                        <!-- <a href="/" class="ml-5" >Home</a>
                        <a href="/envoyer" class="ml-5 no-underline hover:underline uppercase">Blog Articles</a>
                        <a href="/releases" class="ml-5 no-underline hover:underline uppercase">About Me</a>
                        <a href="/releases" class="ml-5 no-underline hover:underline uppercase">Contacts</a> -->
                    </div>
                </div>
            </div>
    </header>
</template>


<script setup>
import { Link } from '@inertiajs/vue3';
const props = defineProps(['seoParams']);

</script>