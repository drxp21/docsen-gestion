<script setup>
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
    service: Object,
    secretaires: Object
});

const form = useForm({
    nom: props.service.nom,
    secretaire: props.service.secretaire_id
});

const submit = () => {
    form.put(route('service.update', props.service.id))
};
</script>

<template>
    <AppLayout>
        <Head title="Modifier un service" />
        <Title content="Modifier un service" />
        <form @submit.prevent="submit" class="custom-card grid grid-cols-1 md:grid-cols-2 gap-3 mt-5">
            <!-- Nom -->
            <div>
                <InputLabel for="nom" value="Nom du service" required />
                <TextInput id="nom" v-model="form.nom" type="text" class="mt-1 block w-full" required autofocus />
                <InputError class="mt-2" :message="form.errors.nom" />
            </div>
            <div>
                <InputLabel for="secretaire" value="Secrétaire" />
                <Select v-model="form.secretaire" class="mt-1" :options="secretaires" />
                <InputError class="mt-2" :message="form.errors.nom" />
            </div>



            <div class="col-span-1 md:col-span-2">
                <PrimaryButton class="!bg-blue-500 !text-white disabled:grayscale-100 disabled:cursor-not-allowed"
                    :disabled="form.processing">
                    Enregistrer
                    <Check :size="18" />
                </PrimaryButton>
            </div>
        </form>
    </AppLayout>
</template>
