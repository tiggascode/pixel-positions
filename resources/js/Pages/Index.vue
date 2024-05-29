<script setup>
import JobCard from "@/Pages/Components/JobCard.vue";
import JobCardWide from "@/Pages/Components/JobCardWide.vue";
import TheNav from "@/Pages/Components/TheNav.vue";
import TheSearch from "@/Pages/Components/TheSearch.vue";
import TheSectionHeading from "@/Pages/Components/TheSectionHeading.vue";

defineProps({
    jobsFeatured: {
        type: Array,
    },
    jobsRecent: {
        type: Array,
    },
    isAuth: {
        type: Boolean,
    },
    tags: {
        type: Array,
    },
});
</script>

<template>
    <TheNav :isAuth="isAuth" />
    <TheSearch />
    <main class="mx-auto max-w-[986px]">
        <section class="pt-10">
            <TheSectionHeading>Featurged Jobs</TheSectionHeading>

            <div class="grid lg:grid-cols-3 gap-8 mt-9">
                <JobCard v-for="job in jobsFeatured" :job="job" :tags="tags" />
            </div>
        </section>

        <section>
            <TheSectionHeading class="mt-9">Recent Jobs</TheSectionHeading>
            <div class="mt-6 space-y-6">
                <JobCardWide
                    v-for="job in jobsRecent"
                    :job="job"
                    :tags="tags"
                />
            </div>
        </section>
    </main>
</template>

<style scoped></style>
