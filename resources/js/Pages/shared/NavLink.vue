<template>
    <li>
        <Link
            :href="href"
            :method="method"
            :as="as"
            :data="data"
            class="link"
            :class="{
                'active-link': isActive,
            }"
        >
            <slot />
        </Link>
    </li>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    href: String,
    isActive: Boolean,
    method: String,
    as: String,
    data: Object,
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
