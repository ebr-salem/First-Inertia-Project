<template>
    <h1 class="text-left font-bold text-4xl ms-10 mb-10">Users</h1>

    <ul class="users text-left ps-40">
        <li class="text-lg mb-2" v-for="user in users.data" :key="user.id">
            {{ user.id }} -- {{ user.name }}
        </li>
    </ul>

    <!-- Paginator -->
    <Paginator class="mt-10" :links="users.links" />
</template>

<script setup>
import Paginator from "./shared/Paginator.vue";

defineProps({
    users: Object,
});
</script>
