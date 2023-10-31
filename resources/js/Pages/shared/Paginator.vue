<template>
    <div>
        <Link
            v-for="(link, index) in links"
            :as="link.url ? 'a' : 'span'"
            :key="index"
            :href="link.url"
            v-html="link.label"
            class="one px-5 py-3"
            :class="{
                'bg-gray-900 text-white': link.active,
                'text-slate-400': !link.url,
            }"
            preserve-scroll
        />
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    links: Array,
});
</script>
