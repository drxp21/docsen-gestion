<script setup>
import Close from 'vue-material-design-icons/CloseCircleOutline.vue'
import MagnifierIcon from "vue-material-design-icons/Magnify.vue";
import Calendar from "vue-material-design-icons/CalendarRange.vue";
import { ref } from 'vue'
import RVCard from '@/Components/RVCard.vue';

const keyword = ref('')

defineProps({
    rendez_vous: Object
})

const search = () => {
    router.visit(route('service.index') + '?keyword=' + keyword.value, { only: ['service'], preserveState: true })
}
</script>
<template>
    <AppLayout>

        <Head title="Rendez-vous" />
        <div class="flex items-center justify-between">
            <Title content="Mes rendez-vous" />
            <Link class="ml-auto" :href="route('rendez-vous.create')">
            <PrimaryButton class="!bg-green-500 !text-white ">
                Prendre rendez-vous
                <Calendar :size="18" />
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

        <div class="mt-2 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-3">
            <RVCard v-for="rv in rendez_vous" :rv="rv" :key="rv.id" />
        </div>
        <div v-if="!rendez_vous.length" class="custom-card flex items-center gap-1 justify-center text-center">
            Aucun rendez-vous pour le moment.
            <Close />
        </div>
    </AppLayout>
</template>