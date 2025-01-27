<template>
    <div v-for="(link, key) in processedLinks" :key="key" class="py-2">
        <div v-if="link.url === null" class="mr-1 mb-1 px-4 py-3 text-sm leading-4 whitespace-nowrap rounded"
            v-html="link.label" />
        <Link v-else class="mr-1 mb-1 px-4 py-3 text-sm leading-4 rounded primary whitespace-nowrap custom-card"
            :class="{ '!bg-gray-400': link.active }" :href="mergeQueryParams(link.url)" v-html="link.label" />
    </div>
</template>

<script>
import { defineComponent } from "vue";
import { Link } from '@inertiajs/vue3';

export default defineComponent({
    components: {
        Link,
    },
    props: {
        links: Array,
    },
    computed: {
        processedLinks() {
            const totalPages = this.links.length;
            const currentPage = this.links.findIndex(link => link.active);
            const displayPages = [];

            if (totalPages <= 7) {
                return this.links;
            }

            // Always show the first page
            displayPages.push(this.links[0]);

            if (currentPage > 3) {
                displayPages.push({ url: null, label: '...' });
            }

            for (let i = Math.max(currentPage - 1, 1); i <= Math.min(currentPage + 1, totalPages - 2); i++) {
                displayPages.push(this.links[i]);
            }

            if (currentPage < totalPages - 4) {
                displayPages.push({ url: null, label: '...' });
            }

            // Always show the last page
            displayPages.push(this.links[totalPages - 1]);

            // Ensure dots are not duplicated
            return displayPages.filter((link, index, self) =>
                index === 0 || link.label !== '...' || self[index - 1].label !== '...'
            );
        }
    },
    methods: {
        mergeQueryParams(url) {
            const currentQueryParams = new URLSearchParams(window.location.search);
            const linkUrl = new URL(url, window.location.origin);
            const linkQueryParams = new URLSearchParams(linkUrl.search);

            // Merge current query params with link's query params
            linkQueryParams.forEach((value, key) => {
                currentQueryParams.set(key, value);
            });

            linkUrl.search = currentQueryParams.toString();

            return linkUrl.toString();
        }
    }
});
</script>
 