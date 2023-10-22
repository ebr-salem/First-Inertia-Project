<template>
    <Link
        class="link"
        :class="{
            'active-link': isActive,
        }"
    >
        <slot />
    </Link>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    isActive: Boolean,
});
</script>

<style scoped>
.link {
    color: blue;
}

.link:hover {
    text-decoration: underline;
}

.active-link {
    text-decoration: underline;
}
</style>
