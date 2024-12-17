<template>
    <div>
       <Header seoParams="seoParams" ></Header>

        <div class="container mx-auto px-5 lg:max-w-screen-sm">
            <slot/>
        </div>

        <div class="border-t border-lighter mt-20">
            <div class="container mx-auto px-5 lg:max-w-screen">
                <div class="text-muted py-10 text-center">
                    All rights reserved © {{ new Date().getFullYear() }} My Persional Blog
                </div>
            </div>
        </div>
    </div>
</template>


<script setup>
import Header from '@/Components/Header.vue';
</script>