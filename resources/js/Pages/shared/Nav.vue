<template>
    <ul class="nav">
        <NavLink href="/" :isActive="$page.component == 'HomeView'">
            Home
        </NavLink>

        <NavLink
            href="/setings?age=20"
            :isActive="$page.component == 'SetingsView'"
        >
            Setings
        </NavLink>

        <NavLink href="/help" :isActive="$page.component == 'HelpView'">
            Help
        </NavLink>

        <NavLink
            href="/salem"
            method="post"
            as="button"
            :data="{ myName: 'salem' }"
        >
            Salem
        </NavLink>
    </ul>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import NavLink from "./NavLink.vue";
</script>

<style scoped>
ul {
    list-style-type: circle;
    padding-left: 30px;
}
</style>
