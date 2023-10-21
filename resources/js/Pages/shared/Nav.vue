<template>
    <ul class="nav">
        <li><Link href="/">Home</Link></li>
        <li><Link href="/setings">Setings</Link></li>
        <li><Link href="/help">Help</Link></li>
        <li><Link href="/salem" method="post" :data="{ myName: 'salem' }" as="button">Salem</Link></li>
    </ul>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<style scoped>
ul {
    list-style-type: circle;
    padding-left: 30px;
}
</style>
