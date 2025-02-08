<script setup>
import { ref } from 'vue';
import Close from 'vue-material-design-icons/CloseCircleOutline.vue';
import { debounce } from 'lodash';
import Table from '@/Components/Table.vue'
import DialogModal from '@/Components/DialogModal.vue'
import SecondaryButton from '@/Components/SecondaryButton.vue'
import { router, useForm } from '@inertiajs/vue3';

const showModal = ref(false)
const props = defineProps({
    services: Object,
    rendez_vous: Object,
    service: String,
    praticien: String,
    praticiens: Object
})

const isFocused = ref(false);

const searchQuery = ref(props.praticien || '');

const statuts = [
    { name: 'en attente', value: 'en attente' },
    { name: 'accepté', value: 'accepté' },
    { name: 'refusé', value: 'refusé' },
]

const rv_to_edit = useForm({
    statut: '',
    id: '',
    service_id: '',
    date: '',
    praticien: null,
});

const selected_service = ref(props.service ?? null)

const fetch_rendez_vous = () => {
    router.get(route('rendez-vous.index'), { service: selected_service.value, praticien: searchQuery.value, }, { preserveState: true, preserveScroll: true });
}

const searchPraticiens = debounce(() => {
    router.get(route('rendez-vous.index'), { praticien: searchQuery.value, service: selected_service.value }, { preserveState: true, preserveScroll: true });
}, 300);

const updateRv = () => {
    rv_to_edit.put(route('rendez-vous.update', rv_to_edit.id), {
        onSuccess: () => {
            showModal.value = false
        }
    })
}

const customActionClicked = (e) => {
    Object.assign(rv_to_edit, e)
    showModal.value = true
}

</script>
<template>
    <AppLayout>
        <Title content="Demande rendez-vous dans vos services" />
        <div class="mt-4 flex items-center gap-4">
            <Title size="sm" content="Filtrer par service" />
            <Select :options="services" v-model="selected_service" @change="fetch_rendez_vous" />
        </div>




        <Table :data="rendez_vous" :can_delete="true" :custom_action="true" custom_action_name="Traiter"
            @customActionClicked="customActionClicked" />





        <DialogModal :show="showModal" @close="showModal = false">
            <template #title>Traiter la demande</template>
            <template #content>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                    <div>
                        <InputLabel value="Changer la date" required />
                        <TextInput v-model="rv_to_edit.date" class="mt-1 block w-full" type="date" required />
                        <InputError class="mt-2" :message="rv_to_edit.errors.date" />
                    </div>

                    <div class="relative">
                        <div v-if="rv_to_edit.praticien != null">
                            <div class="flex items-center gap-3 mt-5">
                                <img :src="rv_to_edit.praticien.profile_photo_url ?? rv_to_edit.praticien.user.profile_photo_url"
                                    alt="Profile" class="w-10 h-10 rounded-full" />
                                <label>

                                    {{ rv_to_edit.praticien.name ?? rv_to_edit.praticien.user.name }} - {{
                                        rv_to_edit.praticien.specialite }}
                                </label>
                                <Close @click="rv_to_edit.praticien = null" fillColor="#89131b"
                                    class="cursor-pointer ml-auto" />
                            </div>
                        </div>
                        <div v-else>
                            <InputLabel value="Choisir un praticien" />
                            <TextInput @focus="isFocused = true" @blur="isFocused = false" type="text" v-model="searchQuery"
                                @input="searchPraticiens" placeholder="Nom ou spécialité du praticien"
                                class="w-full border rounded px-3 py-2 mt-1" />
                            <InputError class="mt-2" :message="rv_to_edit.errors.praticien" />

                        </div>
                        <div v-if="isFocused" class="custom-card absolute z-[9999] top-16 max-h-72 overflow-auto">
                            <div v-if="praticiens.length > 0" class="space-y-3">
                                <div v-for="praticien in praticiens" @mousedown="rv_to_edit.praticien = praticien"
                                    :key="praticien.id" class="flex justify-start items-center gap-3 cursor-pointer">
                                    <img :src="praticien.profile_photo_url" alt="Profile" class="w-10 h-10 rounded-full" />
                                    <div>
                                        {{ praticien.name }} - {{ praticien.specialite }}
                                    </div>
                                </div>
                            </div>
                            <div v-else-if="praticiens.length == []" class="text-center">
                                <Title content="Aucun praticien trouvé" size="xs" />
                            </div>
                        </div>

                    </div>

                    <div>
                        <InputLabel value="Statut" />
                        <Select :options="statuts" v-model="rv_to_edit.statut" class="w-full" />
                        <InputError class="mt-2" :message="rv_to_edit.errors.statut" />
                    </div>

                </div>

                <div class="mt-4">
                    <Title size="md" content="Résumé :" /> <br />
                    Rendez-vous <strong class="inline-block text-xs font-semibold px-3 py-1 rounded-full " :class="{
                        'bg-green-100 text-green-700': rv_to_edit.statut === 'accepté',
                        'bg-yellow-100 text-yellow-500': rv_to_edit.statut === 'en attente',
                        'bg-red-100 text-red-700': rv_to_edit.statut === 'refusé',
                    }">{{ rv_to_edit.statut }}</strong> pour <strong>{{ rv_to_edit.nom_patient }}</strong>
                    à la <strong>{{ rv_to_edit.nom_service
                    }}</strong> le <strong>{{
    new Date(rv_to_edit.date.split('T')[0]).toLocaleDateString("fr-FR", {
        day: 'numeric',
        month: 'long', year: 'numeric'
    }) }}</strong>
                </div>
            </template>
            <template #footer>
                <div class="flex justify-between w-full">
                    <!-- <SecondaryButton @click="deleteCreneau" class="text-red-500">
                        Supprimer
                    </SecondaryButton> -->
                    <div class="flex">
                        <SecondaryButton @click="showModal = false">
                            Annuler
                        </SecondaryButton>
                        <PrimaryButton class="ml-2" @click="updateRv">
                            Enregistrer
                        </PrimaryButton>
                    </div>
                </div>
            </template>
        </DialogModal>
    </AppLayout>
</template>