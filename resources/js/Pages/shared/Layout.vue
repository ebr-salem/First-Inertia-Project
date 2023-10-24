<template>
    <header>
        <div class="logo">
            <h1>Logo</h1>
            <p>Welcome back {{ username }} !</p>
        </div>
        <Nav />
    </header>

    <main>
        <slot />
    </main>
</template>

<script>
import Nav from "./Nav.vue";

export default {
    components: {
        Nav,
    },

    computed: {
        username() {
            // Or you can use it directly [ without (this) keyword ]
            return this.$page.props.auth.username;
        },
    },
};
</script>

<style scoped>
header {
    background-color: #ccc;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 50px;
}

header .logo {
    display: flex;
    align-items: center;
}

header .logo p {
    margin-left: 40px;
}

header h1 {
    font-size: 32px;
}

main {
    text-align: center;
    padding: 30px;
}
</style>
