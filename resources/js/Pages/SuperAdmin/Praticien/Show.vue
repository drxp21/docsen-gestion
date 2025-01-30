<script setup>
import { ref } from 'vue';

defineProps({
    praticien: Object, // Praticien details passed as a prop
});
</script>

<template>
    <AppLayout>

        <Head title="Détails praticien" />

        <div class="max-w-4xl mx-auto p-6 bg-white dark:bg-gray-800 rounded-lg shadow-md">
            <!-- Header with Profile Picture and Name -->
            <div class="flex items-center space-x-6">
                <img :src="praticien.profile_photo_url" alt="Profile Photo" class="w-24 h-24 rounded-full shadow-md" />
                <div class="ml-3">
                    <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100">
                        {{ praticien.name }}
                    </h1>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        {{ praticien.specialite }}
                    </p>
                </div>
            </div>

            <!-- Description -->
            <div class="mt-6" v-if="praticien.description">
                <Title content="Description" />
                <p class="text-gray-700 dark:text-gray-300 mt-2">
                    {{ praticien.description }}
                </p>
            </div>

            <!-- Contact Details -->
            <div class="mt-6">
                <Title content="Contact" />
                <p class="text-gray-700 dark:text-gray-300 mt-2">
                    <strong>Email:</strong> {{ praticien.email }}
                </p>
            </div>

            <div class="mt-6 rounded-lg shadow-lg" v-if="praticien.latitude && praticien.longitude">
                <Title content="Localisation" />

                <iframe
                    :src="`https://www.google.com/maps?q=${praticien.latitude},${praticien.longitude}&hl=fr_FR;z=14&output=embed`"
                    style="width: 100%;height:100% ;border-radius: 10px;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </AppLayout>
</template>
