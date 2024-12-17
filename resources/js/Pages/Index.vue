<template>
    <DefaultTemplate>
        <h1>{{ seoParams.h1Header }}</h1>
        
    </DefaultTemplate>
</template>

<script setup lang="ts">
import SeoDefaultParams from '@/Interfaces/default-params';

    withDefaults(
        defineProps<{
        seoParams: SeoDefaultParams
    }>(), {
        seoParams: () => ({
            appName: 'Laravel Blog',
            h1Header: 'Laravel Application Monitoring & Debugging with Sentry',
        })
    });
    
</script>