<script setup>
import { ref, computed, onMounted } from 'vue';
import { debounce } from 'lodash';
import { router, useForm } from '@inertiajs/vue3';
import Close from 'vue-material-design-icons/CloseCircleOutline.vue';

const props = defineProps({
    praticiens: Object,
    search: String,
    current_praticiens: ''
});

const isFocused = ref(false);

const searchQuery = ref(props.search || '');

const form = useForm({
    praticiens: [],
});

const searchPraticiens = debounce(() => {
    router.get(route('praticiens.search'), { q: searchQuery.value }, { preserveState: true, preserveScroll: true });
}, 300);

const filteredPraticiens = computed(() => {
    return props.praticiens.filter(
        (praticien) => !form.praticiens.some((selected) => selected.id === praticien.id)
    );
});

const highlight = (text, term) => {
    if (!term) return text;
    const regex = new RegExp(`(${term})`, 'gi');
    return text.replace(regex, '<mark>$1</mark>');
};

onMounted(() => {
    form.praticiens = props.current_praticiens
})

const addPraticien = (p) => {
    form.praticiens.push(p);
};

const submit = () => {
    form.post(route('praticiens.store'));
};
</script>

<template>
    <AppLayout>
        <div class="flex items-center justify-between">
            <Title content="Ajouter des praticiens à mon établissement" />
            <PrimaryButton class="!bg-green-500 !text-white disabled:grayscale-100 disabled:cursor-not-allowed"
                :disabled="form.processing" @click="submit">
                Enrigistrer la séléction
                <Check :size="18" />
            </PrimaryButton>
        </div>

        <form @submit.prevent="submit" class="grid grid-cols-1 md:grid-cols-2 gap-3 mt-5">
            <!-- Search Input and Results -->
            <div class="relative custom-card mb-auto">
                <div v-if="isFocused" class="custom-card absolute top-24 max-h-72 overflow-auto">
                    <div v-if="filteredPraticiens.length" class="space-y-3">
                        <div v-for="praticien in filteredPraticiens" @mousedown="addPraticien(praticien)"
                            :key="praticien.id" class="flex justify-start items-center gap-3 cursor-pointer">
                            <img :src="praticien.profile_photo_url" alt="Profile" class="w-10 h-10 rounded-full" />
                            <div>
                                {{ praticien.name }} - {{ praticien.specialite }}
                            </div>
                        </div>
                    </div>
                    <div v-else class="text-center">
                        <Title content="Aucun praticien trouvé" size="xs" />
                    </div>
                </div>
                <InputLabel value="Rechercher un praticien" />
                <TextInput @focus="isFocused = true" @blur="isFocused = false" type="text" v-model="searchQuery"
                    @input="searchPraticiens" placeholder="Nom ou spécialité du praticien"
                    class="w-full border rounded px-3 py-2 mt-2" />
            </div>

            <!-- Selected Practitioners -->
            <div class="flex flex-col custom-card gap-3">
                <InputLabel value="Praticien(s) à enregistrer" />
                <div v-for="(praticien, index) in form.praticiens" :key="praticien.id" class="flex items-center gap-3">
                    <img :src="praticien.profile_photo_url" alt="Profile" class="w-10 h-10 rounded-full" />
                    <label>
                        {{ praticien.name }} - {{ praticien.specialite }}
                    </label>
                    <Close @click="form.praticiens.splice(index, 1)" fillColor="#89131b" class="cursor-pointer ml-auto" />
                </div>
                <div v-if="!form.praticiens.length" class="text-center">
                    <Title content="Aucun praticien séléctionné" size="xs" />
                </div>
            </div>
        </form>
    </AppLayout>
</template>
