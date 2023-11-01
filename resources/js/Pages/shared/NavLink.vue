<template>
    <Link
        class="link text-black"
        :class="{
            'active-link': isActive,
        }"
    >
        <slot />
    </Link>
</template>

<script setup>
defineProps({
    isActive: Boolean,
});
</script>

<style scoped>
.link:hover {
    text-decoration: underline;
}

.active-link {
    text-decoration: underline;
}
</style>
