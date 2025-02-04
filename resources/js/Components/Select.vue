<script setup>
import { onMounted, ref } from 'vue';
import { defineProps, defineEmits, defineExpose } from 'vue';

const props = defineProps({
    modelValue: {
        type: [String, Number],
        default: '',
    },
    options: {
        type: Array,
        required: true,


    },
    required: {
        required: false,
        default: false
    },
    autofocus: {
        type: Boolean,
        default: false,
    },
});

const emit = defineEmits(['update:modelValue', 'selected']);

const selectRef = ref(null);

onMounted(() => {
    if (props.autofocus && selectRef.value) {
        selectRef.value.focus();
    }
});

defineExpose({
    focus: () => {
        if (selectRef.value) {
            selectRef.value.focus();
        }
    },
});

const onChange = (event) => {
    emit('selected', event.target.value)
    emit('update:modelValue', event.target.value);
};
</script>

<template>
    <select ref="selectRef" :required="required"
        class="disabled:cursor-not-allowed border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-500 focus:ring-indigo-500 dark:focus:ring-indigo-500 rounded-md shadow-sm"
        :value="modelValue" @change="onChange">
        <option disabled value="">Veuillez choisir une option</option>
        <option v-for="option in options" :key="option.value" :value="option.value">
            {{ option.name }}
        </option>
    </select>
</template>
