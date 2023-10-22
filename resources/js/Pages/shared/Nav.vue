<template>
    <ul class="nav">
        <li>
            <Link
                href="/"
                class="link"
                :class="{
                    'active-link': $page.component == 'HomeView',
                }"
            >
                Home
            </Link>
        </li>

        <li>
            <Link
                href="/setings?age=20"
                class="link"
                :class="{
                    'active-link': $page.component == 'SetingsView',
                }"
            >
                Setings
            </Link>
        </li>

        <li>
            <Link
                href="/help"
                class="link"
                :class="{
                    'active-link': $page.component == 'HelpView',
                }"
            >
                Help
            </Link>
        </li>

        <li>
            <Link
                href="/salem"
                class="link"
                method="post"
                :data="{ myName: 'salem' }"
                as="button"
            >
                Salem
            </Link>
        </li>
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
