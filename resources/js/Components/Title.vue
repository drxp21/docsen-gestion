<script setup>
defineProps({
    content: '',
    size:{
        required:false,
        default:'xl'
    }
})
</script>
<template>
    <h2 class="text-gray-600 dark:text-gray-400 font-semibold" :class="`text-${size}`">
        {{ content }}
    </h2>
</template>