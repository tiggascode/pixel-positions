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
        class="p-4 bg-white/5 rounded-xl border border-transparent hover:border-blue-800 group transition-colors duration-300 flex flex-col text-center"
    >
        <div class="self-start text-sm">{{ job.name }}</div>

        <div class="py-8">
            <h3
                class="font-bold group-hover:text-blue-800 text-xl transition-colors duration-300"
            >
                <Link :href="'/jobs/' + job.id" target="_blank"
                    >{{ job.title }}
                </Link>
            </h3>
            <p class="text-sm mt-4">{{ job.salary }}</p>
        </div>

        <div class="flex justify-between items-center mt-auto">
            <Tag class="px-3 py-1 text-2xs" v-for="tag in tags" :tag="tag" />

            <!--      logo-->
        </div>
    </div>
</template>

<style scoped></style>
