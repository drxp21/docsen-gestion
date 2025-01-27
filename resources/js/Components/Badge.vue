<script setup>
defineProps({
    content: '',
    size: { required: false, default: 'sm' },
    color: { required: false, defult: 'indigo' },
    closeable: { defult: false },
})

const emit = defineEmits(['close'])

</script>
<template>
    <span
        :class="`bg-${color}-300  !text-${color}-800 text-${size} font-medium px-2.5 py-0.5 rounded dark:bg-${color}-900 dark:text-${color}-300`">{{
            content }}
        <button v-if="closeable" @click="emit('close')">
            &times;
        </button>
    </span>
</template>