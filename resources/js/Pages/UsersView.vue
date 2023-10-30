<template>
    <h1>Users:</h1>

    <ul class="users">
        <li v-for="user in users" :key="user.id">
            {{ user.name }}
        </li>
    </ul>
</template>

<script setup>
defineProps({
    users: Array,
});
</script>
