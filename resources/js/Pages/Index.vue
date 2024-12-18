<template>
    <h1 class="mb-5 font-sans text-center">
        {{ seoParams.h1Header }}
    </h1>
</template>

<script setup lang="ts">
    import SeoDefaultParams from '@/Interfaces/default-params';
    
    withDefaults(
        defineProps<{
        seoParams: SeoDefaultParams
    }>(), {
        seoParams: () => ({
            h1Header: 'Laravel Application Monitoring & Debugging with Sentry',
        })
    });
    
</script>