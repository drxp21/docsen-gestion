<script setup>
import { ref, computed } from 'vue'
import Pagination from '@/Components/Pagination.vue'
import SecondaryButton from '@/Components/SecondaryButton.vue'
import { router } from '@inertiajs/vue3';
import Close from 'vue-material-design-icons/CloseCircleOutline.vue'
import Alert from 'vue-material-design-icons/AlertOctagonOutline.vue'
import DialogModal from './DialogModal.vue';

const props = defineProps({
    data: Object,
    route_prefix: {
        required: false
    },
    can_update: {
        default: false
    },
    can_delete: {
        default: false
    },
    can_show: {
        default: false
    }
})

const showDelete = ref(false)

const emit = defineEmits(['delete', 'update'])

const id_to_delete = ref(null)


const tableKeys = computed(() => {
    if (!props.data.data.length) {
        return [];
    }
    const keys = Object.keys(props.data.data[0]);
    return keys;
})

const attribute_names_map = {
    'secretaire': 'secrétaire',
    'profile photo url': 'Photo de Profil',
    'name': 'Nom',
    'unite': 'unité',
    'specialite': 'Spécialité',
    'email': 'Email',
    'id': 'ID'
}

const deleteRecord = () => {
    router.delete(route(`${props.route_prefix}.destroy`, id_to_delete.value), {
        onSuccess: () => {
            showDelete.value = false
        }
    });

}

const getHeader = (t) => {
    const formatted = t.replace(/_/g, " ");
    return attribute_names_map[formatted] ?? formatted;
};
</script>

<template>
    <div class="w-full mt-5 overflow-x-auto ">
        <table v-if="data.data.length" class="w-full text-gray-600 dark:text-gray-300 text-sm custom-card">
            <thead>
                <tr class="bg-white dark:bg-gray-800 font-bold rounded-t-lg">
                    <th v-for="(key, index) in tableKeys" :key="index" :class="{ hidden: key === 'id' }"
                        class="text-start capitalize px-6 py-3">
                        {{ getHeader(key) }}
                    </th>
                    <th v-if="(can_update || can_delete || can_show) && route_prefix" class="text-end px-6 py-3">
                        Actions</th>
                </tr>
            </thead>

            <tbody>
                <tr v-for="(row, rowIndex) in  data.data " :key="rowIndex" :class="{
                    'bg-slate-100 dark:bg-gray-900': rowIndex % 2 === 0,
                    'bg-white dark:bg-gray-800': rowIndex % 2 !== 0
                }">
                    <td v-for="(key, colIndex) in  tableKeys " :key="colIndex"
                        :class="{ hidden: key === 'id', 'w-1 whitespace-nowrap overflow-hidden text-ellipsis': key === 'description' }"
                        class="text-start px-6 py-3">
                        <template v-if="key === 'profile_photo_url'">
                            <img :src="row[key]" alt="Profile" class="w-10 h-10 rounded-full mx-auto" />
                        </template>
                        <template v-else>
                            {{ row[key] }}
                        </template>
                    </td>
                    <td v-if="(can_update || can_delete || can_show) && route_prefix"
                        class="flex justify-end  space-x-2 px-6 py-3">
                        <Link v-if="can_show" :href="route(`${route_prefix}.show`, row['id'])">
                        <PrimaryButton class="!bg-indigo-400 !text-white flex items-center gap-3">
                            Détails
                        </PrimaryButton>
                        </Link>
                        <Link v-if="can_update" :href="route(`${route_prefix}.edit`, row['id'])">
                        <PrimaryButton @click="$emit('update', row['id'])"
                            class="!bg-blue-500 !text-white flex items-center gap-3">
                            Modifier
                        </PrimaryButton>
                        </Link>
                        <PrimaryButton v-if="can_delete" @click="() => (showDelete = true, id_to_delete = row['id'])"
                            class="!bg-red-500 !text-white flex items-center gap-3">
                            Supprimer
                        </PrimaryButton>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Empty State -->
        <div v-if="!data.data.length" class="custom-card flex items-center gap-1 justify-center text-center">
            Aucun élément
            <Close />
        </div>

        <!-- Pagination -->
    </div>
    <div v-if="data.data.length"
        class="custom-card rounded-b-lg text-sm font-medium py-3 px-10 flex justify-end items-center">
        <Pagination :links="data.links" />
    </div>
    <DialogModal :show="showDelete" @close="showDelete = false">
        <template #content>
            <div class="flex flex-col items-center justify-center text-red-500 gap-4">
                <Title content="Supprimer l'élément" class="text-red-500 dark:text-red-500" />
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


