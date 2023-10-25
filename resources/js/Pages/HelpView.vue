<template>
    <h1>This is help page</h1>
    <h1 style="margin-top: 500px">The current time is: {{ time }}</h1>
    <Link href="/help" as="button" preserve-scroll>Refresh</Link>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    time: String,
});
</script>

<style>
h1 {
    font: 52px;
}
</style>
