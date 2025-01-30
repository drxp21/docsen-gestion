<script setup>
import { useForm } from '@inertiajs/vue3';

const formes = [
    { name: 'comprimé', value: 'comprime' },
    { name: 'capsule', value: 'capsule' },
    { name: 'sirop', value: 'sirop' },
    { name: 'pommade', value: 'pommade' },
    { name: 'gel', value: 'gel' },
    { name: 'injection', value: 'injection' },
    { name: 'suppositoire', value: 'suppositoire' },
    { name: 'goutte', value: 'goutte' },
    { name: 'poudre', value: 'poudre' },
    { name: 'crème', value: 'creme' }
];

const unitesDosage = [
    { name: 'mg', value: 'mg' },
    { name: 'g', value: 'g' },
    { name: 'mcg', value: 'mcg' },
    { name: 'ml', value: 'ml' },
    { name: 'l', value: 'l' },
    { name: 'UI', value: 'ui' },
    { name: 'mg/ml', value: 'mg_ml' },
    { name: 'g/l', value: 'g_l' }
];


// Populate form with existing medicament data passed via props
const props = defineProps({
    medicament: Object, // Example: { id: 1, nom: 'Paracétamol', description: '', forme: 'comprimé', dosage: '', prix: '' }
});

const form = useForm({
    nom: props.medicament.nom || '',
    description: props.medicament.description || '',
    forme: props.medicament.forme || '',
    dosage: props.medicament.dosage || '',
    unite_dosage: props.medicament.unite_dosage || '',
    prix: props.medicament.prix || '',
});

const submit = () => {
    form.put(route('medicament.update', props.medicament.id)); // Update route
};
</script>

<template>
    <AppLayout>

        <Head title="Modifier un médicament" />
        <Title content="Modifier un médicament" />
        <form @submit.prevent="submit" class="custom-card grid grid-cols-1 md:grid-cols-2 gap-3 mt-5">
            <!-- Nom -->
            <div>
                <InputLabel for="nom" value="Nom du médicament" required />
                <TextInput id="nom" v-model="form.nom" type="text" class="mt-1 block w-full" required autofocus />
                <InputError class="mt-2" :message="form.errors.nom" />
            </div>

            <div>
                <InputLabel for="forme" value="Forme" />
                <Select :options="formes" class="w-full mt-1" v-model="form.forme" />
                <InputError class="mt-2" :message="form.errors.forme" />
            </div>

            <div class="flex items-start gap-1">
                <div>
                    <InputLabel for="dosage" value="Dosage" />
                    <TextInput id="dosage" v-model="form.dosage" type="text" class="mt-1 block w-full" />
                    <InputError class="mt-2" :message="form.errors.dosage" />
                </div>

                <div>
                    <InputLabel for="unite_dosage" value="Unité de Dosage" />
                    <Select :options="unitesDosage" class="w-full mt-1" v-model="form.unite_dosage"
                        :required="form.dosage != ''" />
                    <InputError class="mt-2" :message="form.errors.unite_dosage" />
                </div>
            </div>

            <div>
                <InputLabel for="prix" value="Prix (en CFA)" />
                <TextInput id="prix" v-model="form.prix" type="text" class="mt-1 block w-full" />
                <InputError class="mt-2" :message="form.errors.prix" />
            </div>

            <div class="col-span-1 md:col-span-2">
                <InputLabel for="description" value="Description" />
                <TextArea id="description" v-model="form.description" class="mt-1 block w-full" rows="4" />
                <InputError class="mt-2" :message="form.errors.description" />
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
