<template>
    <div class="flex justify-between items-center m-auto px-40 mb-10">
        <h1 class="text-left font-bold text-4xl">Users</h1>

        <Link
            href="/users/create"
            class="bg-black text-white px-3 py-1 rounded text-xl"
        >
            Create New User
        </Link>

        <input placeholder="Search..." v-model="search" class="rounded" />
    </div>

    <ul class="users text-left ps-60">
        <li class="text-lg mb-2" v-for="user in users.data" :key="user.id">
            {{ user.id }} -- {{ user.name }}
        </li>
    </ul>

    <!-- Paginator -->
    <Paginator class="mt-10" :links="users.links" />
</template>

<script setup>
import { router } from "@inertiajs/vue3";
import { ref, watch } from "vue";
import Paginator from "../shared/Paginator.vue";
import debounce from "lodash/debounce.js";

const props = defineProps({
    users: Object,
    filters: Object,
});

const search = ref(props.filters.search);

watch(
    search,
    debounce((value) => {
        router.get(
            "/users",
            {
                search: value,
            },
            {
                preserveState: true,
                replace: true,
            }
        );
    }, 500)
);
</script>
