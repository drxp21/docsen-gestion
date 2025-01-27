<script setup>
import { useForm } from '@inertiajs/vue3';
import LocationPicker from '@/Components/LocationPicker.vue'


const form = useForm({
    name: '',
    email: '',
    phone: '',
    longitude: '',
    latitude: '',
})
const submit = () => {
    form.post(route('hopital.store'))
}
</script>
<template>
    <AppLayout>
        <Title content="Inscrire un nouveau hôpital" />
        <form @submit.prevent="submit" class="custom-card grid grid-cols-1 md:grid-cols-2 gap-3 mt-5">
            <div>
                <InputLabel for="name" value="Nom" required />
                <TextInput id="name" v-model="form.name" type="text" class="mt-1 block w-full" required autofocus
                    autocomplete="username" />
                <InputError class="mt-2" :message="form.errors.name" />
            </div>
            <div>
                <InputLabel for="email" value="Email de connexion" required />
                <TextInput id="email" v-model="form.email" type="email" class="mt-1 block w-full" required
                    autocomplete="username" />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>
            <div>
                <InputLabel for="phone" value="Numéro de téléphone" />
                <TextInput id="phone" v-model="form.phone" type="text" class="mt-1 block w-full" autocomplete="username" />
                <InputError class="mt-2" :message="form.errors.phone" />
            </div>
            <div>
                <InputLabel value="Mot de passe" />
                <div class="flex items-center h-10">
                    <Title content="Un mot de passe sera généré automatiquement" class="italic" size="xs" />
                </div>
            </div>
            <div class="col-span-1 md:col-span-2">
                <InputLabel value="Localisation" />
                <LocationPicker @location-selected="(lat, long) => (form.latitude = lat, form.longitude = long)" />
                <InputError :message="form.errors.latitude" class="mt-2" />
                <InputError :message="form.errors.longitude" class="mt-2" />

            </div>
            <div class="col-span-1 md:col-span-2">
                <PrimaryButton class="!bg-green-500 !text-white disabled:grayscale-100 disabled:cursor-not-allowed"
                    :disabled="form.processing">
                    inscrire
                    <Plus :size="18" />
                </PrimaryButton>
            </div>
        </form>
    </AppLayout>
</template>