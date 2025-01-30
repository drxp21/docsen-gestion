<script setup>
import Table from '@/Components/Table.vue'
import MagnifierIcon from "vue-material-design-icons/Magnify.vue";
import { ref } from 'vue'

const keyword = ref('')

defineProps({
    praticiens: Object
})

const handleDelete = (id) => {
    alert(`do sum with ${id}`)
}
const handleUpdate = (id) => {
    alert(`do sum with ${id}`)
}
const search = () => {
    router.visit(route('cars.index') + '?keyword=' + keyword.value, { only: ['cars'], preserveState: true })
}
</script>
<template>
    <AppLayout>

        <Head title="Praticiens" />

        <div class="flex items-center justify-between">
            <Title content="Praticiens dans mon établissement" />
            <Link class="ml-auto" :href="route('praticiens.create')">
            <PrimaryButton class="!bg-green-500 !text-white ">
                ajouter un praticien
                <Plus :size="18" />
            </PrimaryButton>
            </Link>
        </div>
        <!-- search
        <div>
            <form class="flex gap-2" @submit.prevent="search">
                <Link :href="route('praticiens.index')" v-if="keyword != ''">
                <button type="button" class="p-2 bg-red-500 rounded-lg" title="Supprimer le filtre">
                    <Close />
                </button>
                </Link>
                <input type="text" class="px-3 py-2 rounded-lg text-slate-600 font-medium text-sm"
                    placeholder="Chercher un praticiens..." required v-model="keyword" />
                <button type="submit" class="p-2 bg-teal-500 rounded-lg text-white">
                    <MagnifierIcon />
                </button>
            </form>
        </div> -->

        <div class="mt-2">
            <Table :data="praticiens" route_prefix="praticiens" :can_search="true" :can_delete="true" @delete="handleDelete"
                @update="handleUpdate" />
        </div>
    </AppLayout>
</template>