<script setup>
import { useForm } from '@inertiajs/vue3';
import Badge from '@/Components/Badge.vue';
import { ref } from 'vue';

const props = defineProps({
    services: Object
});

const options = ref(props.services.map(s => ({ name: s.nom, value: s.id })));

const form = useForm({
    name: '',
    email: '',
    phone: '',
    services: [],
});

const handleSelect = (e) => {
    form.services.push(options.value.find(s => parseInt(s.value) === parseInt(e)));
    options.value.splice(options.value.findIndex(s => parseInt(s.value) === parseInt(e)), 1);
};



const submit = () => {
    form.post(route('secretaire.store'));
};
</script>

<template>
    <AppLayout>
        <Head title="Ajouter un nouveau secrétaire" />
        <Title content="Ajouter un nouveau secrétaire" />
        <form @submit.prevent="submit" class="custom-card grid grid-cols-1 md:grid-cols-2 gap-3 mt-5">
            <div>
                <InputLabel for="name" value="Nom" required />
                <TextInput id="name" v-model="form.name" type="text" class="mt-1 block w-full" required autofocus
                    autocomplete="name" />
                <InputError class="mt-2" :message="form.errors.name" />
            </div>
            <div>
                <InputLabel for="email" value="Email de connexion" required />
                <TextInput id="email" v-model="form.email" type="email" class="mt-1 block w-full" required
                    autocomplete="email" />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>
            <div>
                <InputLabel for="phone" value="Numéro de téléphone" />
                <TextInput id="phone" v-model="form.phone" type="text" class="mt-1 block w-full" autocomplete="phone" />
                <InputError class="mt-2" :message="form.errors.phone" />
            </div>
            <div>
                <InputLabel for="Services" value="Services" />
                <Select class="mt-1" :options="options" @selected="handleSelect" />
                <InputError class="mt-2" :message="form.errors.services" />
                <div class="flex flex-wrap gap-2 items-center my-2">
                    <span v-for="(b, index) in form.services" :key="b.value"
                        class="bg-indigo-300 !text-indigo-800 text-sm font-medium px-2.5 py-0.5 rounded dark:bg-indigo-100 dark:text-indigo-300">
                        {{ b.name }}
                        <button @click="form.services.splice(index, 1)">
                            &times;
                        </button>
                    </span>
                </div>

            </div>
            <div>
                <InputLabel value="Mot de passe" />
                <div class="flex items-center h-10">
                    <Title content="Un mot de passe sera généré automatiquement" class="italic" size="xs" />
                </div>
            </div>

            <div class="col-span-1 md:col-span-2">
                <PrimaryButton class="!bg-green-500 !text-white disabled:grayscale-100 disabled:cursor-not-allowed"
                    :disabled="form.processing">
                    Ajouter
                    <Plus :size="18" />
                </PrimaryButton>
            </div>
        </form>
    </AppLayout>
</template>