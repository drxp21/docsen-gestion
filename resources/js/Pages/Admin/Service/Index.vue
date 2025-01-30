<script setup>
import Table from '@/Components/Table.vue'
import MagnifierIcon from "vue-material-design-icons/Magnify.vue";
import { ref } from 'vue'

const keyword = ref('')

defineProps({
    services: Object
})

const search = () => {
    router.visit(route('service.index') + '?keyword=' + keyword.value, { only: ['service'], preserveState: true })
}
</script>
<template>
    <AppLayout>
        <Head title="Services" />
        <div class="flex items-center justify-between">
            <Title content="Liste des services" />
            <Link class="ml-auto" :href="route('service.create')">
            <PrimaryButton class="!bg-green-500 !text-white ">
                ajouter un service
                <Plus :size="18" />
            </PrimaryButton>
            </Link>
        </div>
        <!-- search
        <div>
            <form class="flex gap-2" @submit.prevent="search">
                <Link :href="route('service.index')" v-if="keyword != ''">
                <button type="button" class="p-2 bg-red-500 rounded-lg" title="Supprimer le filtre">
                    <Close />
                </button>
                </Link>
                <input type="text" class="px-3 py-2 rounded-lg text-slate-600 font-medium text-sm"
                    placeholder="Chercher un service..." required v-model="keyword" />
                <button type="submit" class="p-2 bg-teal-500 rounded-lg text-white">
                    <MagnifierIcon />
                </button>
            </form>
        </div> -->

        <div class="mt-2">
            <Table :data="services" route_prefix="service" :can_update="true" :can_delete="true" />
        </div>
    </AppLayout>
</template>