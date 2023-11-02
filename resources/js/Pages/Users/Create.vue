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
            v-if="form.errors.name"
            v-text="form.errors.name"
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
            v-if="form.errors.email"
            v-text="form.errors.email"
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
            v-if="form.errors.password"
            v-text="form.errors.password"
        ></p>
        <br /><br />

        <input
            type="submit"
            value="Create"
            class="px-3 py-1 cursor-pointer bg-black text-white rounded disabled:bg-slate-400"
            :disabled="form.processing"
        />
    </form>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    name: "",
    email: "",
    password: "",
});

function submitData() {
    form.post("/users", form);
}
</script>
