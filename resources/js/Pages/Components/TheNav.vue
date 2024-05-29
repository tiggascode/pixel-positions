<script setup>
import logo from "../../../images/logo.svg";

defineProps({
    isAuth: {
        type: Boolean,
    },
});
</script>

<template>
    <nav
        class="flex justify-between items-center mb-10 py-4 border-b border-white/10"
    >
        <div>
            <Link href="/">
                <img :src="logo" />
            </Link>
        </div>

        <div class="space-x-6 font-bold">
            <a href="#">Jobs</a>
            <a href="#">Careers</a>
            <a href="#">Salaries</a>
            <a href="#">Companies</a>
        </div>

        <div v-if="!isAuth" class="space-x-6 font-bold">
            <Link href="/register">Sing Up</Link>
            <Link href="/login">Login</Link>
        </div>
        <div v-if="isAuth" class="space-x-6 font-bold">
            <Link href="/logout" method="post">LogOut</Link>
        </div>
    </nav>
</template>
