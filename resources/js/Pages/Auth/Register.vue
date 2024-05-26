<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
import TheNav from "@/Pages/Components/TheNav.vue";

let form = useForm({
    name: "",
    email: "",
    password: "",
    employer: "",
});

let submit = () => {
    form.post("/register");
};
</script>

<template>
    <TheNav />
    <section class="text-center pt-6 mt-10">
        <h1 class="font-bold text-4xl">Register</h1>

        <form
            @submit.prevent="submit"
            action="/register"
            class="mt-6 max-w-2xl mx-auto space-y-6"
        >
            <input
                class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                name="name"
                placeholder="Name"
                type="text"
                v-model="form.name"
            />

            <input
                class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                name="email"
                placeholder="Email"
                type="email"
                v-model="form.email"
            />

            <input
                class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                name="password"
                placeholder="Password"
                type="password"
                v-model="form.password"
            />

            <input
                class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                name="password_confirmation"
                placeholder="Password confirmation"
                type="password"
            />

            <div class="bg-white/10 my-10 h-px w-full"></div>

            <input
                class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                name="employer"
                placeholder="Employer"
                type="text"
                v-model="form.employer"
            />

            <button class="bg-blue-800 rounded py-2 px-6 font-bold">
                Register
            </button>
        </form>
    </section>
</template>

<style scoped></style>
