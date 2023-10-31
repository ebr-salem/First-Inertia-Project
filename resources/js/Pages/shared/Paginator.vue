<template>
    <div>
        <!-- To use the Link in is prop, I should make it as a global component -->
        <Component
            :is="link.url ? 'Link' : 'span'"
            v-for="(link, index) in links"
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
defineProps({
    links: Array,
});
</script>
