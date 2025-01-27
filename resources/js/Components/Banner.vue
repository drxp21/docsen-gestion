<script setup>
import { ref, watchEffect } from 'vue';
import { usePage } from '@inertiajs/vue3';
import Alert from 'vue-material-design-icons/AlertCircleOutline.vue'

const page = usePage();
const show = ref(true);
const style = ref('success');
const message = ref('');

watchEffect(async () => {
    style.value = page.props.jetstream.flash?.bannerStyle || 'success';
    message.value = page.props.jetstream.flash?.banner || '';
    show.value = true;
    setTimeout(() => {
        show.value = false;
    }, 2500);
});
</script>
<template>
    <div>
        <transition enter-active-class="ease-out duration-300"
            enter-from-class="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            enter-to-class="opacity-100 translate-y-0 sm:scale-100" leave-active-class="ease-in duration-200"
            leave-from-class="opacity-100 translate-y-0 sm:scale-100"
            leave-to-class="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
            <div v-if="show && message" class="z-[9999] fixed bottom-5 right-5 border custom-card !p-0" :class="{
                'border-green-600/90': style === 'success',
                'border-red-700/90': style === 'danger',
                'shadow-md rounded-lg': true
            }">
                <div class="max-w-screen-xl mx-auto py-2 px-3">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <span class="flex items-center justify-center w-5 h-5 rounded-full shadow-inner" :class="{
                                'bg-green-700': style === 'success',
                                'bg-red-800': style === 'danger'
                            }">
                                <svg v-if="style === 'success'" class="w-6 h-6 text-white"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <Alert fillColor="#fff" v-if="style === 'danger'" />

                            </span>
                            <p class="ml-4 text-sm font-medium ">
                                {{ message }}
                            </p>
                        </div>

                        <div>

                            <svg @click.prevent="show = false" class="w-5 h-5 text-slate-500 cursor-pointer ml-4"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>

