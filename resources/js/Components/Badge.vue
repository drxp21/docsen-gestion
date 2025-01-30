<script setup>
defineProps({
    content: '',
    size: { required: false, default: 'sm' },
    color: { required: false, default: 'indigo' },
    closeable: { defult: false },
})

const emit = defineEmits(['close'])

</script>
<template>
    <span>{{
        content }}
        <button v-if="closeable" @click="emit('close')">
            &times;
        </button>
    </span>
</template>