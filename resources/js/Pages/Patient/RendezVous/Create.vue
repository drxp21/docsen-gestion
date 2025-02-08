<script setup>
import { ref, computed, onMounted } from 'vue';
import { debounce } from 'lodash';
import { router, useForm } from '@inertiajs/vue3';
import Close from 'vue-material-design-icons/CloseCircleOutline.vue';

const props = defineProps({
    hopitals: Object,
    search: String,
});

const isFocused = ref(false);

const searchQuery = ref(props.search || '');

const form = useForm({
    hopital: null,
    service: null,
    date: ''
});

const tomorrow = new Date();
tomorrow.setDate(tomorrow.getDate() + 1);
const formattedTomorrow = tomorrow.toISOString().split('T')[0];

const searchhopitals = debounce(() => {
    router.get(route('hopitals.search'), { q: searchQuery.value }, { preserveState: true, preserveScroll: true });
}, 300);

const filteredhopitals = computed(() => {
    return props.hopitals.filter(
        (hopital) => form.hopital?.id != hopital.id
    );
});

const options = computed(() => {
    if (form.hopital) {
        return form.hopital.services.map(s => ({ name: s.nom, value: s.id }))
    }
})


const submit = () => {
    form.post(route('rendez-vous.store'));
};
</script>

<template>
    <AppLayout>

        <Head title="Prendre rendez-vous" />

        <div class="flex items-center justify-between">

            <Title content="Prendre rendez-vous dans un établissement" />

        </div>

        <form @submit.prevent="submit" class="grid grid-cols-1 md:grid-cols-2 gap-3 mt-5">
            <div class="relative custom-card mb-auto h-full flex flex-col justify-center">
                <div v-if="isFocused && searchQuery != ''" class="custom-card absolute top-24 max-h-72 overflow-auto">
                    <div v-if="filteredhopitals.length > 0" class="space-y-3">
                        <div v-for="hopital in filteredhopitals" @mousedown="form.hopital = hopital" :key="hopital.id"
                            class="flex justify-start items-center gap-3 cursor-pointer">
                            <img :src="hopital.profile_photo_url" alt="Profile" class="w-10 h-10 rounded-full" />
                            <div>
                                {{ hopital.name }}
                            </div>
                        </div>
                    </div>
                    <div v-else class="text-center">
                        <Title content="Aucun hôpital trouvé" size="xs" />
                    </div>
                </div>
                <div v-if="!form.hopital">
                    <InputLabel value="Rechercher un hôpital" required />
                    <TextInput @focus="isFocused = true" @blur="isFocused = false" type="text" v-model="searchQuery"
                        @input="searchhopitals" placeholder="Nom de l'hôpital"
                        class="w-full border rounded px-3 py-2 mt-2" />
                    <InputError class="mt-2" :message="form.errors['hopital.id']" />
                </div>
                <div v-else class="flex items-center gap-3 mt-3">
                    <img :src="form.hopital?.profile_photo_url" alt="Profile" class="w-10 h-10 rounded-full" />
                    <label>
                        {{ form.hopital?.name }}
                    </label>
                    <Close @click="() => (form.hopital = null, form.service = null)" fillColor="#89131b"
                        class="cursor-pointer ml-auto" />
                </div>

            </div>

            <div class="flex flex-col custom-card gap-2">
                <InputLabel value="Service à consulter" required />
                <Select :disabled="form.hopital == null" :options="options ?? []" v-model="form.service" />
                <InputError class="mt-2" :message="form.errors.service" />

            </div>
            <div class="flex flex-col custom-card gap-3">
                <InputLabel value="Date de la consultation" />
                <TextInput type="date" v-model="form.date" :min="formattedTomorrow"
                    class="w-full border rounded px-3 py-2 mt-2" />
                <InputError class="mt-2" :message="form.errors.date" />

            </div>

        </form>
        <div class="col-span-2 mt-4">
            <PrimaryButton class="!bg-green-500 !text-white disabled:grayscale-100 disabled:cursor-not-allowed"
                :disabled="form.processing" @click="submit">
                Demander le rendez-vous
            </PrimaryButton>
        </div>
    </AppLayout>
</template>
