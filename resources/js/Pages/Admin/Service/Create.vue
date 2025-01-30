<script setup>
import { ref, computed, onMounted } from 'vue';
import { router, useForm } from '@inertiajs/vue3';
import Close from 'vue-material-design-icons/CloseCircleOutline.vue';
import Check from 'vue-material-design-icons/CheckCircleOutline.vue';

const props = defineProps({
    secretaires: '',
});

const form = useForm({
    name: '',
    nom_secretaire: '',
    email_secretaire: '',
    phone: '',
    secretaire_id: '',
})

const activeTab = ref(0);
const transitionName = ref('slide-left');
const tabs = [
    { name: "Assigner" },
    { name: "Créer un nouveau" },
];
const changeTab = (index) => {
    transitionName.value = index > activeTab.value ? 'slide-left' : 'slide-right';
    activeTab.value = index;
    form.secretaire_id = ''
};

const submit = () => {
    form.post(route('service.store'))
}


</script>

<template>
    <AppLayout>
        <Head  title="Ajouter un nouveau service" />
        <Title content="Ajouter un nouveau service" />

        <form class="grid grid-cols-1 md:grid-cols-2 gap-10 custom-card mt-5" @submit.prevent="submit">
            <div>
                <InputLabel for="name" value="Nom du service" required />
                <TextInput id="name" v-model="form.name" type="text" class="mt-1 block w-full" autofocus autocomplete="name"
                    required />
                <InputError class="mt-2" :message="form.errors.name" />
            </div>
            <div>
                <Title content="Assigner à un secrétaire" size="sm" />
                <div class="flex border-b border-gray-200 dark:border-gray-700 mt-1">
                    <button v-for="(tab, index) in tabs" :key="index" @click="changeTab(index)" type="button" :class="[
                        'px-4 py-2 transition-colors duration-300 text-sm',
                        activeTab === index
                            ? 'border-b-2 border-indigo-500 dark:border-indigo-500 text-indigo-500 dark:text-indigo-500'
                            : 'text-gray-500 dark:text-gray-300',
                    ]">
                        {{ tab.name }}
                    </button>
                </div>
                <div class="mt-4 relative overflow-v-hidden w-full h-[20rem]">
                    <div class="absolute w-full overflow-auto h-[20rem]" v-if="activeTab == 0">
                        Choisir parmi les secrétaire existant
                        <div class="divide-y-2">
                            <div class="custom-card !shadow-none flex justify-between items-center cursor-pointer"
                                v-for="s in secretaires" @click="form.secretaire_id = s.id">
                                <Title :content="s.name" size="md" />
                                <Check fill-color="#22c55e" v-if="s.id == form.secretaire_id" />
                            </div>
                        </div>
                        <div v-if="!secretaires.length"
                            class="custom-card flex items-center gap-1 justify-center text-center mt-4">
                            Aucun élément
                            <Close />
                        </div>
                    </div>


                    <div class="absolute w-full px-1 rounded-md flex flex-col items-start gap-2" v-if="activeTab == 1">
                        <div>
                            <InputLabel for="name" value="Nom" required />
                            <TextInput id="name" v-model="form.nom_secretaire" type="text" class="mt-1 block w-full"
                                required />
                            <InputError class="mt-2" :message="form.errors.nom_secretaire" />
                        </div>
                        <div>
                            <InputLabel for="email" value="Email de connexion" required />
                            <TextInput id="email" v-model="form.email_secretaire" type="email" class="mt-1 block w-full"
                                required />
                            <InputError class="mt-2" :message="form.errors.email_secretaire" />
                        </div>
                        <div>
                            <InputLabel for="phone" value="Numéro de téléphone" />
                            <TextInput id="phone" v-model="form.phone" type="text" class="mt-1 block w-full" />
                            <InputError class="mt-2" :message="form.errors.phone" />
                        </div>
                        <div>
                            <InputLabel value="Mot de passe" />
                            <div class="flex items-center h-10">
                                <Title content="Un mot de passe sera généré automatiquement" class="italic" size="xs" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-span-1 md:col-span-2">
                <PrimaryButton class="!bg-green-500 !text-white disabled:grayscale-100 disabled:cursor-not-allowed"
                    :disabled="form.processing">
                    ajouter
                    <Plus :size="18" />
                </PrimaryButton>
            </div>
        </form>
    </AppLayout>
</template>
