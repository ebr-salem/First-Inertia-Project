<template>
    <header>
        <h1>Logo</h1>
        <Nav />
    </header>

    <main>
        <slot />
    </main>
</template>

<script setup>
import Nav from "./Nav.vue";
</script>

<style scoped>
header {
    background-color: #ccc;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 50px;
}

header h1 {
    font-size: 32px;
}

main {
    text-align: center;
    padding: 30px;
}
</style>
