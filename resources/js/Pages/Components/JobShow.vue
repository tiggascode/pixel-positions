<script setup>
import TheNav from "@/Pages/Components/TheNav.vue";

defineProps({
    job: {
        type: String,
    },
});
</script>

<template>
    <TheNav />

    <section class="text-center pt-6 mt-10">
        <h1 class="font-bold text-4xl">{{ job.title }}</h1>

        <div class="flex justify-between items-center mt-auto">
            <Tag
                class="px-3 py-1 text-2xs"
                v-for="tag in job.tags"
                :tag="tag"
            />

            <!--      logo-->
        </div>
    </section>
</template>
