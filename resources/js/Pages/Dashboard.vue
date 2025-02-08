<template>
    <AppLayout>
        <div class="text-gray-600 dark:text-gray-300 min-h-screen transition-all">
            <!-- En-tête du tableau de bord -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold">Tableau de bord (données fictives)</h1>

            </div>

            <!-- Widgets Statistiques -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold">Total Patients</h2>
                    <p class="text-3xl font-bold">2 450</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold">Rendez-vous aujourd'hui</h2>
                    <p class="text-3xl font-bold">120</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold">Services actifs</h2>
                    <p class="text-3xl font-bold">34</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold">Praticiens disponibles</h2>
                    <p class="text-3xl font-bold">78</p>
                </div>
            </div>

            <!-- Section des Graphiques -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Graphique en barres : Rendez-vous par hôpital -->
                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold mb-4">Rendez-vous par hôpital</h2>
                    <Bar :options="chartOptions" :data="dataAppointmentsByHospital" />
                </div>

                <!-- Graphique en lignes : Croissance des patients -->
                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold mb-4">Croissance des patients</h2>
                    <Line :options="chartOptions" :data="dataPatientGrowth" />
                </div>

                <!-- Graphique en camembert : Répartition des praticiens par service -->
                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold mb-4">Répartition des praticiens par service</h2>
                    <Pie :options="chartOptions" :data="dataDoctorsByService" />
                </div>

                <!-- Graphique en barres : Rendez-vous par jour de la semaine -->
                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold mb-4">Rendez-vous par jour</h2>
                    <Bar :options="chartOptions" :data="dataAppointmentsByDay" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import { Bar, Line, Pie } from 'vue-chartjs';
import {
    Chart as ChartJS,
    Title,
    Tooltip,
    Legend,
    BarElement,
    CategoryScale,
    LinearScale,
    LineElement,
    PointElement,
    ArcElement
} from 'chart.js';
import AppLayout from '@/Layouts/AppLayout.vue';

ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale, LineElement, PointElement, ArcElement);

export default {
    components: { Bar, Line, Pie, AppLayout },
    data() {
        return {
            isDarkMode: false, // Mode clair par défaut
            chartOptions: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            color: this.isDarkMode ? 'white' : 'black' // Ajuste les couleurs du texte
                        }
                    }
                },
                scales: {
                    x: {
                        ticks: {
                            color: this.isDarkMode ? 'white' : 'black'
                        }
                    },
                    y: {
                        ticks: {
                            color: this.isDarkMode ? 'white' : 'black'
                        }
                    }
                }
            },
            // Données des rendez-vous par hôpital
            dataAppointmentsByHospital: {
                labels: ['Hôpital Saint-Paul', 'Clinique des Lilas', 'Hôpital Central', 'Hôpital Nord'],
                datasets: [
                    {
                        label: 'Rendez-vous',
                        data: [150, 200, 175, 220],
                        backgroundColor: 'rgba(54, 162, 235, 0.5)'
                    }
                ]
            },
            // Croissance des patients
            dataPatientGrowth: {
                labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin'],
                datasets: [
                    {
                        label: 'Nombre de patients',
                        data: [500, 800, 1200, 1500, 1900, 2450],
                        borderColor: 'rgb(75, 192, 192)',
                        fill: false
                    }
                ]
            },
            // Répartition des praticiens par service
            dataDoctorsByService: {
                labels: ['Cardiologie', 'Dermatologie', 'Gynécologie', 'Orthopédie', 'Pédiatrie'],
                datasets: [
                    {
                        label: 'Nombre de praticiens',
                        data: [10, 8, 12, 7, 15],
                        backgroundColor: ['#ff6384', '#36a2eb', '#ffce56', '#4bc0c0', '#9966ff']
                    }
                ]
            },
            // Nombre de rendez-vous par jour
            dataAppointmentsByDay: {
                labels: ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
                datasets: [
                    {
                        label: 'Rendez-vous',
                        data: [50, 65, 80, 75, 95, 30],
                        backgroundColor: 'rgba(255, 99, 132, 0.5)'
                    }
                ]
            }
        };
    },
    methods: {
        toggleDarkMode() {
            this.isDarkMode = !this.isDarkMode;
        }
    }
};
</script>

