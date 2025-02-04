<script setup>
import { Head, Link } from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';


</script>

<template>
    <Head title="Welcome" />
    <div
        class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50 flex items-center justify-center min-h-screen flex-col">
        <ApplicationMark width="300" />
        <Link :href="route('dashboard')">
        <PrimaryButton class="!bg-indigo-500 !text-white mt-5">
            Interface d'administration
        </PrimaryButton>
        </Link>
    </div>
</template>
