
<script setup>
import {
    LMap,
    LTileLayer,
    LMarker,
    LTooltip
} from "@vue-leaflet/vue-leaflet";
import "leaflet/dist/leaflet.css";
import { ref, computed, onMounted, defineEmits } from 'vue';


const props = defineProps({
    lat: {
        required: false,
        default: 14.736183564776496
    },
    lng: {
        required: false,
        default: -17.47287989104854
    },

})

const zoom = ref(14);
const center = ref([props.lat, props.lng]);
const markerPosition = ref([props.lat, props.lng]);

const emits = defineEmits(['location-selected']);

onMounted(() => {

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            (position) => {
                center.value = [position.coords.latitude, position.coords.longitude];
                markerPosition.value = [position.coords.latitude, position.coords.longitude];
                emits('location-selected', position.coords.latitude, position.coords.longitude);
            },
            (error) => {
                console.error('Error getting location:', error);
                emits('location-selected', props.lat, props.lng);
            }
        );
    } else {
        console.error('Geolocation is not supported by this browser.');
    }
});
const onMapClick = (event) => {
    markerPosition.value = [event.latlng.lat, event.latlng.lng];
    emits('location-selected', event.latlng.lat, event.latlng.lng);

};

const onMarkerMoveEnd = (event) => {
    markerPosition.value = [event.target.getLatLng().lat, event.target.getLatLng().lng];
    emits('location-selected', event.target.getLatLng().lat, event.target.getLatLng().lng);
};
</script>
<template>
    <div style="height: 40vh;">
        <l-map v-model:zoom="zoom" :center="center" :use-global-leaflet="false" @click="onMapClick">
            <l-tile-layer url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"></l-tile-layer>
            <l-marker :lat-lng="markerPosition" draggable @moveend="onMarkerMoveEnd">
                <l-tooltip>
                    Déplacer pour choisir une localisation
                </l-tooltip>
            </l-marker>
        </l-map>
    </div>
</template>
  
  