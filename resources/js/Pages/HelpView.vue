<template>
    <h1>This is help page</h1>
    <h1 style="margin-top: 500px">The current time is: {{ time }}</h1>
    <Link href="/help" as="button" preserve-scroll>Refresh</Link>
</template>

<script>
import Layout from "./shared/Layout.vue";
import { Link } from "@inertiajs/vue3";

export default {
    components: {
        Link,
    },

    layout: Layout,

    props: {
        time: String,
    },
};
</script>

<style>
h1 {
    font: 52px;
}
</style>
