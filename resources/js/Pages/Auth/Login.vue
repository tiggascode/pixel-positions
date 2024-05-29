<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
import TheNav from "@/Pages/Components/TheNav.vue";

let form = useForm({
    email: "",
    password: "",
});

let submit = () => {
    form.post("/login");
};
</script>

<template>
    <TheNav />
    <section class="text-center pt-6 mt-10">
        <h1 class="font-bold text-4xl">Login</h1>

        <form @submit.prevent="submit" class="mt-6 max-w-2xl mx-auto space-y-6">
            <input
                class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                placeholder="Email"
                type="email"
                v-model="form.email"
            />
            <input
                class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                placeholder="Password"
                type="password"
                v-model="form.password"
            />
            <div>{{}}</div>
            <button
                type="submit"
                class="bg-blue-800 rounded py-2 px-6 font-bold'"
            >
                Login
            </button>
        </form>
    </section>
</template>

<style scoped></style>
