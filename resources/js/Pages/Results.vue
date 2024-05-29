<script setup>
import JobCardWide from "@/Pages/Components/JobCardWide.vue";
import TheNav from "@/Pages/Components/TheNav.vue";
import TheSearch from "@/Pages/Components/TheSearch.vue";

defineProps({
    jobs: {
        type: Array,
    },
});
</script>

<template>
    <TheNav />
    <TheSearch />
    <main class="mx-auto max-w-[986px]">
        <section>
            <h1>Results</h1>
            <div class="mt-6 space-y-6">
                <JobCardWide v-for="job in jobs" :job="job" />
            </div>
        </section>
    </main>
</template>

<style scoped></style>
