<template>
    <ul class="nav">
        <li>
            <NavLink href="/" :isActive="$page.component == 'HomeView'">
                Home
            </NavLink>
        </li>

        <li>
            <NavLink
                href="/setings?age=20"
                :isActive="$page.component == 'SetingsView'"
            >
                Setings
            </NavLink>
        </li>

        <li>
            <NavLink href="/help" :isActive="$page.component == 'HelpView'">
                Help
            </NavLink>
        </li>

        <li>
            <NavLink
                href="/salem?myName=Salem&myAge=20.5"
                method="post"
                as="button"
            >
                Salem
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
