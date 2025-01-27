<script setup>
import { ref } from 'vue';
import Monitor from 'vue-material-design-icons/Monitor.vue'
import Moon from 'vue-material-design-icons/WeatherNight.vue'

defineProps({
    isLanding: {
        required: false,
        default: false
    }
})

// Reactive state to track the theme
const currentTheme = ref(localStorage.getItem('theme') || 'system'); // 'light', 'dark', or 'system'

// Apply the theme on page load
function applyTheme() {
    if (currentTheme.value === 'light') {
        document.documentElement.classList.add('light');
        document.documentElement.classList.remove('dark');
    } else if (currentTheme.value === 'dark') {
        document.documentElement.classList.add('dark');
        document.documentElement.classList.remove('light');
    } else {
        // System preference
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        document.documentElement.classList.toggle('dark', prefersDark);
        document.documentElement.classList.toggle('light', !prefersDark);
    }
}

// Toggle theme based on user selection
function toggleTheme(theme) {
    currentTheme.value = theme;
    localStorage.setItem('theme', theme);
    applyTheme();
}

// Apply the initial theme
applyTheme();
</script>

<template>
    <div>
        <div v-if="isLanding">
            <button @click="toggleTheme('light')" v-if="currentTheme === 'dark'"
                class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none dark:text-slate-300"
                :class="{ '!text-yellow-500': currentTheme === 'light' }">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="5" />
                    <line x1="12" y1="1" x2="12" y2="3" />
                    <line x1="12" y1="21" x2="12" y2="23" />
                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64" />
                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78" />
                    <line x1="1" y1="12" x2="3" y2="12" />
                    <line x1="21" y1="12" x2="23" y2="12" />
                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36" />
                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22" />
                </svg>
            </button>

            <!-- Moon Icon for Dark Mode -->
            <button @click="toggleTheme('dark')" v-else
                class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none dark:text-slate-300"
                :class="{ '!text-blue-500': currentTheme === 'dark' }">
                <Moon />
            </button>
        </div>
        <div v-else class="flex items-center justify-between gap-2">
            <button @click="toggleTheme('light')"
                class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none dark:text-slate-300"
                :class="{ '!text-yellow-500': currentTheme === 'light' }">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="5" />
                    <line x1="12" y1="1" x2="12" y2="3" />
                    <line x1="12" y1="21" x2="12" y2="23" />
                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64" />
                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78" />
                    <line x1="1" y1="12" x2="3" y2="12" />
                    <line x1="21" y1="12" x2="23" y2="12" />
                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36" />
                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22" />
                </svg>
            </button>

            <!-- Moon Icon for Dark Mode -->
            <button @click="toggleTheme('dark')"
                class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none dark:text-slate-300"
                :class="{ '!text-blue-500': currentTheme === 'dark' }">
                <Moon />
            </button>

            <!-- Laptop Icon for System Preference -->
            <button @click="toggleTheme('system')"
                class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none dark:text-slate-300"
                :class="{ '!text-green-500': currentTheme === 'system' }">
                <Monitor />
            </button>
        </div>
    </div>
</template>

<style>
/* Optional styles for active icons */
button {
    transition: all 0.2s;
}

button.text-yellow-500 svg,
button.text-blue-500 svg,
button.text-green-500 svg {
    transform: scale(1.2);
}
</style>
