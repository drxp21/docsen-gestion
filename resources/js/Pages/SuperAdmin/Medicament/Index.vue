<script setup>
import Table from '@/Components/Table.vue'
import MagnifierIcon from "vue-material-design-icons/Magnify.vue";
import { ref } from 'vue'

const keyword = ref('')

defineProps({
    medicaments: Object
})

const search = () => {
    router.visit(route('medicament.index') + '?keyword=' + keyword.value, { only: ['medicament'], preserveState: true })
}
</script>
<template>
    <AppLayout>
        <div class="flex items-center justify-between">
            <Title content="Liste des médicaments" />
            <Link class="ml-auto" :href="route('medicament.create')">
            <PrimaryButton class="!bg-green-500 !text-white ">
                ajouter un médicament
                <Plus :size="18" />
            </PrimaryButton>
            </Link>
        </div>
        <!-- search
        <div>
            <form class="flex gap-2" @submit.prevent="search">
                <Link :href="route('medicament.index')" v-if="keyword != ''">
                <button type="button" class="p-2 bg-red-500 rounded-lg" title="Supprimer le filtre">
                    <Close />
                </button>
                </Link>
                <input type="text" class="px-3 py-2 rounded-lg text-slate-600 font-medium text-sm"
                    placeholder="Chercher un medicament..." required v-model="keyword" />
                <button type="submit" class="p-2 bg-teal-500 rounded-lg text-white">
                    <MagnifierIcon />
                </button>
            </form>
        </div> -->

        <div class="mt-2">
            <Table :data="medicaments" route_prefix="medicament" :can_update="true" :can_delete="true"
                @update="handleUpdate" />
        </div>
    </AppLayout>
</template>