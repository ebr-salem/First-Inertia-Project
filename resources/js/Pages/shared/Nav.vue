<template>
    <ul class="nav">
        <li>
            <NavLink href="/" :isActive="$page.component == 'HomeView'">
                Home
            </NavLink>
        </li>

        <li>
            <NavLink
                href="/settings?age=20"
                :isActive="$page.component == 'SettingsView'"
            >
                Settings
            </NavLink>
        </li>

        <li>
            <NavLink href="/help" :isActive="$page.component == 'HelpView'">
                Help
            </NavLink>
        </li>

        <li>
            <NavLink href="/users" :isActive="$page.component == 'Users/Index'">
                Users
            </NavLink>
        </li>
    </ul>
</template>

<script setup>
import NavLink from "./NavLink.vue";
</script>

<style scoped>
ul {
    display: flex;
}

ul li {
    margin: 0 10px;
}
</style>
