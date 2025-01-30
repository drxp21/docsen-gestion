<script setup>
import DialogModal from '@/Components/DialogModal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';
import Check from 'vue-material-design-icons/CheckCircleOutline.vue';


const show = ref(false)
const is_selected = (l) => {
    return form.services_to_link.findIndex(s => s.id == l.id) != -1
}

const handleClick = (l) => {
    if (!is_selected(l)) {
        form.services_to_link.push(l)
    }
    else {
        let index = form.services_to_link.findIndex(s => s.id == l.id)
        form.services_to_link.splice(index, 1)
    }
}

const assign = () => {
    if (form.services_to_link.length < 1) {
        alert("Veuillez choisir au moins un service")
        return
    }
    form.post(route('assigner.secretaire'), {
        onSuccess: () => {
            show.value = false
        }
    })
}

const props = defineProps({
    secretaire: Object,
    services: Object,
    hopital_services: Object
});

const form = useForm({
    secretaire_id: props.secretaire.id,
    services_to_link: props.services
})
</script>

<template>
    <AppLayout>
        <Head title="Détails secrétaire" />

        <div class="max-w-4xl mx-auto p-6 bg-white dark:bg-gray-800 rounded-lg shadow-md">
            <!-- Header with Profile Picture and Name -->
            <div class="flex items-center space-x-6">
                <img :src="secretaire.profile_photo_url" alt="Profile Photo" class="w-24 h-24 rounded-full shadow-md" />
                <div class="ml-3">
                    <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100">
                        {{ secretaire.name }}
                    </h1>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        {{ secretaire.specialite }}
                    </p>
                </div>
            </div>

            <!-- Description -->
            <div class="mt-6" v-if="secretaire.description">
                <Title content="Description" />
                <p class="text-gray-700 dark:text-gray-300 mt-2">
                    {{ secretaire.description }}
                </p>
            </div>

            <!-- Contact Details -->
            <div class="mt-6">
                <Title content="Contact" />
                <p class="text-gray-700 dark:text-gray-300 mt-2">
                    <strong>Email:</strong> {{ secretaire.email }}
                </p>
            </div>
            <div class="mt-6">
                <Title content="Responsable des services : " />
                <p class="text-gray-700 dark:text-gray-300 mt-2 flex gap-4">
                    <span v-for="(b, index) in services" :key="b.value"
                        class="bg-indigo-300 !text-indigo-800 font-medium px-2.5 py-2 rounded dark:bg-indigo-100 dark:text-indigo-300">
                        {{ b.nom }}

                    </span>
                    <span v-if="!services.length" class="flex items-center gap-4 cutom-card text-sm italic">
                        Aucun service pour le moment
                    </span>
                    <PrimaryButton class="!bg-green-500 !text-white" @click="show = true">
                        Assigner un service
                    </PrimaryButton>
                </p>
            </div>
            <DialogModal :show="show" @close="show = false">
                <template #title>
                    Assigner un service à ce secrétaire
                </template>
                <template #content>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="custom-card cursor-pointer flex items-center justify-between"
                            v-for="s in hopital_services" @click="handleClick(s)">
                            {{ s.nom }}
                            <Check fill-color="#22c55e" v-if="is_selected(s)" />
                        </div>
                    </div>
                </template>
                <template #footer>
                    <SecondaryButton @click="show = false" class="mr-2">
                        annuler
                    </SecondaryButton>
                    <PrimaryButton class="!bg-green-500 !text-white" @click="assign">
                        Enregistrer
                    </PrimaryButton>
                </template>
            </DialogModal>
        </div>
    </AppLayout>
</template>
