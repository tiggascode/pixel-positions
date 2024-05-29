<script setup>
defineProps({
    tag: {
        type: String,
    },
});
</script>

<template>
    <a
        href="#"
        :class="'bg-white/10 hover:bg-white/25 rounded-xl font-bold transition-colors duration-300'"
        >{{ tag.name }}</a
    >
</template>

<style scoped></style>
