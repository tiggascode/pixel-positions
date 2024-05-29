<script setup>
import Tag from "@/Pages/Components/Tag.vue";

defineProps({
    job: {
        required: true,
        type: Object,
    },
    tags: {
        type: Array,
    },
});
</script>

<template>
    <div
        class="p-4 bg-white/5 rounded-xl border border-transparent hover:border-blue-800 group transition-colors duration-300 flex gap-6"
    >
        <div class="flex-1 flex flex-col">
            <a href="#" class="self-start text-sm text-gray-400">{{
                job.name
            }}</a>

            <h3
                class="font-bold text-xl mt-3 group-hover:text-blue-800 transition-colors duration-300"
            >
                <a href="#" target="_blank">{{ job.title }}</a>
            </h3>
            <p class="text-sm text-gray-400 mt-auto">{{ job.salary }}</p>
        </div>

        <Tag class="px-5 py-1 text-sm" v-for="tag in tags" :tag="tag" />
    </div>
</template>

<style scoped></style>
