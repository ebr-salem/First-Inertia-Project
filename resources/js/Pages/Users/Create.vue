<template>
    <Head title="Create User" />

    <h1 class="text-4xl font-bold text-left ms-20 mb-10">Create New User</h1>

    <form
        @submit.prevent="submitData"
        action=""
        method="post"
        class="text-left p-10 bg-zinc-100 max-w-md mx-auto uppercase"
    >
        <label for="name">Name</label><br />
        <input
            v-model="form.name"
            name="name"
            id="name"
            placeholder="Name..."
            class="w-full mt-1"
        />
        <p
            class="text-xs text-red-500 mt-1 lowercase"
            v-if="errors.name"
            v-text="errors.name"
        ></p>
        <br /><br />

        <label for="email">Email</label><br />
        <input
            v-model="form.email"
            name="email"
            id="email"
            type="email"
            placeholder="Email..."
            class="w-full mt-1"
        />
        <p
            class="text-xs text-red-500 mt-1 lowercase"
            v-if="errors.email"
            v-text="errors.email"
        ></p>
        <br /><br />

        <label for="password">Password</label><br />
        <input
            v-model="form.password"
            name="password"
            id="password"
            type="password"
            placeholder="Password..."
            class="w-full mt-1"
        />
        <p
            class="text-xs text-red-500 mt-1 lowercase"
            v-if="errors.password"
            v-text="errors.password"
        ></p>
        <br /><br />

        <input
            type="submit"
            value="Create"
            class="px-3 py-1 cursor-pointer bg-black text-white rounded"
        />
    </form>
</template>

<script setup>
import { router } from "@inertiajs/vue3";
import { reactive } from "vue";

defineProps({
    errors: Object,
});

const form = reactive({
    name: "",
    email: "",
    password: "",
});

function submitData() {
    router.post("/users", form);
}
</script>
