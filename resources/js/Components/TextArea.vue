<script setup>
import { onMounted, ref, computed, watch } from 'vue';

const props = defineProps({
    modelValue: {
        type: String,
        default: '',
    },
    limit: {
        type: Number,
        default: 0,
    },
    cols: {
        required: false,
        default: 2,
    },
    rows: {
        required: false,
        default: 2,
    },
});

const emit = defineEmits(['update:modelValue']);

const textarea = ref(null);

const characterCount = computed(() => props.modelValue.length);
const isOverLimit = computed(() => characterCount.value >= props.limit);

const handleInput = (event) => {
    emit('update:modelValue', event.target.value)
    // isOverLimit.value ? emit('update:modelValue', event.target.value.slice(0, props.limit - 1)) : null
}

onMounted(() => {
    if (textarea.value.hasAttribute('autofocus')) {
        textarea.value.focus();
    }
});

defineExpose({ focus: () => textarea.value.focus() });
</script>

<template>
    <div class="relative">
        <textarea ref="textarea" :cols="cols" :rows="rows"
            class="w-full h-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-[#4A90E2] dark:focus:border-[#4A90E2] focus:ring-[#4A90E2] dark:focus:ring-[#4A90E2] rounded-md shadow-sm p-2 resize-none"
            :value="modelValue" @input="handleInput"></textarea>
        <p v-if="limit!=0" :class="{ 'text-red-500': isOverLimit, 'text-gray-500': !isOverLimit }"
            class="text-sm absolute bottom-3 right-3">
            {{ characterCount }} / {{ limit }}
        </p>
    </div>
</template>
