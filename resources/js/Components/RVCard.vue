<script setup>
import { ref } from 'vue';
import SecondaryButton from './SecondaryButton.vue';
import DialogModal from './DialogModal.vue';
import Alert from 'vue-material-design-icons/AlertOctagonOutline.vue'
import { router } from '@inertiajs/vue3';



const deleteRecord = () => {
    router.delete(route('rendez-vous.destroy', props.rv.id), {
        onSuccess: () => {
            showDelete.value = false
        }
    });

}

const showDelete = ref(false)
const isHover = ref(false)
const props = defineProps({
    rv: Object
})
</script>
<template>
    <div class="cursor-pointer p-4 transition-transform custom-card flex flex-col gap-2 items-start pb-10 relative"
        @mouseover="isHover = true" @mouseleave="isHover = false">
        <Title size="md" :content="rv.nom_hopital" />
        <p>{{ rv.nom_service }}</p>
        <p class="text-sm text-gray-500">
            📅 {{ new Date(rv.date).toLocaleDateString() }}
        </p>
        <span class="mt-2 inline-block text-xs font-semibold px-3 py-1 rounded-full capitalize" :class="{
            'bg-green-100 text-green-700': rv.statut === 'accepté',
            'bg-yellow-100 text-yellow-500': rv.statut === 'en attente',
            'bg-red-100 text-red-700': rv.statut === 'refusé',
        }">
            {{ rv.statut }}
        </span>
        <transition enter-active-class="ease-out duration-200" enter-from-class="opacity-0" enter-to-class="opacity-100"
            leave-active-class="ease-in duration-100" leave-from-class="opacity-100" leave-to-class="opacity-0">
            <SecondaryButton v-show="isHover" class="absolute bottom-3 left-4" @click="showDelete = true">
                Annuler le rendez-vous
            </SecondaryButton>
        </transition>
    </div>
    <DialogModal :show="showDelete" @close="showDelete = false">
        <template #content>
            <div class="flex flex-col items-center justify-center text-red-500 gap-4">
                <Title content="Annuler le rendez-vous" class="text-red-500 dark:text-red-500" />
                <div class="bg-red-400/50  p-2 rounded-full">
                    <Alert :size="50" />
                </div>
                <Title class="text-red-500 dark:text-red-500" content="Attention cette action est irréversible" size="sm" />

            </div>
        </template>

        <template #footer>
            <div class="flex items-center justify-center">
                <SecondaryButton @click="showDelete = false">
                    Annuler
                </SecondaryButton>
                <PrimaryButton class="ms-3 !bg-red-500" @click="deleteRecord">
                    Confirmer
                </PrimaryButton>
            </div>
        </template>
    </DialogModal>
</template>