<script setup>

import TheSearch from "@/Pages/Components/TheSearch.vue";
import JobCard from "@/Pages/Components/JobCard.vue";
import JobCardWide from "@/Pages/Components/JobCardWide.vue";
import TheNav from "@/Pages/Components/TheNav.vue";

defineProps({
    jobs: {
        type: Array,
    }
})
</script>

<template>
    <TheNav/>
    <main class=" mx-auto max-w-[986px]">
        <TheSearch/>
        <section class="pt-10">
            <h1>Featurged Jobs</h1>

            <div class="grid lg:grid-cols-3 gap-8 mt-9">
                <JobCard v-for="job in jobs[0]" :job="job"/>
            </div>
        </section>

        <section>
            <h1>Recent Jobs</h1>
            <div class="mt-6 space-y-6">
                <JobCardWide v-for="job in jobs[1]" :job="job"/>
            </div>
        </section>
    </main>
</template>

<style scoped>

</style>
