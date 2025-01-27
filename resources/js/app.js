import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp, Link, Head } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import Close from 'vue-material-design-icons/Close.vue'
import Plus from 'vue-material-design-icons/Plus.vue'
import Check from 'vue-material-design-icons/Check.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue';
import Select from '@/Components/Select.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import Badge from '@/Components/Badge.vue';
import TextInput from '@/Components/TextInput.vue';
import TextArea from '@/Components/TextArea.vue';
import { i18nVue } from 'laravel-vue-i18n'
import AppLayout from '@/Layouts/AppLayout.vue';
import Title from '@/Components/Title.vue';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';



createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .component('Close', Close)
            .component('Plus', Plus)
            .component('Check', Check)
            .component('PrimaryButton', PrimaryButton)
            .component('AppLayout', AppLayout)
            .component('Title', Title)
            .component('Head', Head)
            .component('Link', Link)
            .component('InputError', InputError)
            .component('Badge', Badge)
            .component('InputLabel', InputLabel)
            .component('TextInput', TextInput)
            .component('TextArea', TextArea)
            .component('Select', Select)
            .use(i18nVue, {
                lang: 'fr',
                resolve: async lang => {
                    const langs = import.meta.glob('../../lang/*.json');
                    return await langs[`../../lang/${lang}.json`]();
                }
            })
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: "#4A90E2",
        showSpinner: true,
    },
});
