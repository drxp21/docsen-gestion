<script setup>
import { ref, onMounted, computed } from 'vue'
import DialogModal from '@/Components/DialogModal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
const props = defineProps({
    creneaus: Object,
    hopitals: Object
})
const jours = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche']
const selectedCreneau = ref(null)
const current_hopital = ref(null)
const creneausByDays = ref({})
const has_hospitals = ref(true)
const showModal = ref(false)

const colorClasses = [
    '!bg-blue-500 !text-white',
    '!bg-green-500 !text-white',
    '!bg-red-500 !text-white',
    '!bg-purple-500 !text-white',
    '!bg-yellow-500 !text-black',
    '!bg-indigo-500 !text-white',
    '!bg-pink-500 !text-white'
]

const hospitalColorMap = computed(() => {
    const map = {}
    props.hopitals.forEach((h, i) => {
        map[h.value] = colorClasses[i % colorClasses.length]
    })
    return map
})
const hospitalInitialsMap = computed(() => {
    const map = {}
    props.hopitals.forEach(h => {
        map[h.value] = h.name?.split(' ').map(w => w.charAt(0).toUpperCase()).join('') || ''
    })
    return map
})

const openModal = (creneau) => {
    selectedCreneau.value = { ...creneau }
    current_hopital.value = creneau.hopital_id || null
    showModal.value = true
}

// const isTimeSlotAvailable = (existingSlots, newSlot) => {
//     const newStart = new Date(`1970-01-01T${newSlot.heure_debut}:00`);
//     const newEnd = new Date(`1970-01-01T${newSlot.heure_fin}:00`);

//     return !existingSlots.some(slot => {
//         const slotStart = new Date(`1970-01-01T${slot.heure_debut}:00`);
//         const slotEnd = new Date(`1970-01-01T${slot.heure_fin}:00`);

//         return (
//             (newStart >= slotStart && newStart < slotEnd) || // New start inside existing slot
//             (newEnd > slotStart && newEnd <= slotEnd) || // New end inside existing slot
//             (newStart <= slotStart && newEnd >= slotEnd) // New slot fully covers an existing slot
//         );
//     });
// };

const saveCreneau = () => {
    // if (!isTimeSlotAvailable(creneausByDays.value[selectedCreneau.value.jour].data, selectedCreneau.value)) {
    //     alert('Cette heure est deja occupee par un auter creneau')
    // }
    if (!selectedCreneau.value) return

    const index = creneausByDays.value[selectedCreneau.value.jour].data.findIndex(c => c.id === selectedCreneau.value.id)
    if (index !== -1) {
        creneausByDays.value[selectedCreneau.value.jour].data[index] = {
            ...selectedCreneau.value,
            hopital_id: current_hopital.value
        }
        creneausByDays.value[selectedCreneau.value.jour].data.push({
            id: null,
            jour: selectedCreneau.value.jour,
            heure_debut: null,
            heure_fin: null,
            reserve: false,
            praticien_id: selectedCreneau.value.praticien_id,
            hopital_id: null
        })
    }
    showModal.value = false
}

const saveSchedule = () => {
    router.post(route('praticien.disponibilite.save'), {
        creneaus: creneausData.value
    })
}


onMounted(() => {
    has_hospitals.value = props.hopitals.length
    jours.forEach(jour => {
        creneausByDays.value[jour] = { data: props.creneaus.filter(s => s?.jour == jour) };
    });

})
</script>
<template>
    <AppLayout>
        <div class="flex items-center justify-between flex-wrap">
            <Title content="Gestion des créneaux par établissement (à terminer)" />
            <PrimaryButton @click="saveSchedule" class="mt-2 !bg-green-500 !text-white">
                Enregistrer les modifications
                <Check />
            </PrimaryButton>
        </div>
        <div class="w-full mt-5 overflow-x-auto relative">
            <div v-if="!has_hospitals" class="flex items-center justify-center absolute bg-black opacity-90 h-full w-full">
            </div>
            <table class="w-full text-sm border-separate border-spacing-2">
                <thead>
                    <tr class="bg-white dark:bg-gray-800 font-bold rounded-t-lg">
                        <th v-for="jour in jours" :key="jour" style="width: 80px;"
                            class="capitalize text-center text-gray-600 dark:text-gray-300 bg-white dark:bg-gray-800 shadow-md p-2">
                            {{ jour }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td v-for="jour in jours" :key="jour" class="space-y-2 align-top">

                            <template v-for="c in creneausByDays[jour]?.data" :key="c.id">
                                <div class="custom-card cursor-pointer flex flex-col items-center justify-center mb-auto"
                                    style="height:100px" :class="hospitalColorMap[c.hopital_id] || 'bg-gray-300'"
                                    @click="openModal(c)">
                                    <div v-if="c.hopital_id" class="flex flex-col h-22 text-center">
                                        {{ hospitalInitialsMap[c.hopital_id] }}
                                        <div class="text-[0.6rem]">
                                            {{ c.heure_debut }} - {{ c.heure_fin }}
                                        </div>
                                    </div>
                                    <div v-else
                                        class="flex flex-col items-center justify-center text-[0.6rem] min-h-22 text-center">
                                        Ajouter un créneau
                                        <Plus />
                                    </div>
                                </div>
                            </template>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <DialogModal :show="showModal" @close="showModal = false">
            <template #title>Modifier le créneau</template>
            <template #content>
                <div class="mb-4">
                    <p><strong class="capitalize">Jour :</strong> {{ selectedCreneau?.jour }}</p>
                    <p class="flex gap-2 items-center">
                        <strong>Heure :</strong>
                        <TextInput v-model="selectedCreneau.heure_debut" type="time" class="mt-1 block" required />
                        -
                        <TextInput v-model="selectedCreneau.heure_fin" type="time" class="mt-1 block" required />
                    </p>
                </div>
                <div>
                    <InputLabel value="Affecter à un établissement" />
                    <Select :options="hopitals" v-model="current_hopital" class="mt-1" />
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
                        <PrimaryButton class="ml-2" @click="saveCreneau">
                            Enregistrer
                        </PrimaryButton>
                    </div>
                </div>
            </template>
        </DialogModal>
    </AppLayout>
</template>
