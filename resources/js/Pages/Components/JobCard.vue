<script setup>


defineProps({
  job: {
    required: true,
    type: Object
  }
})
</script>

<template>
  <div class="p-4 bg-white/5 rounded-xl border border-transparent
  hover:border-blue-800 group    transition-colors duration-300 flex flex-col text-center">
    <div class="self-start text-sm">{{job.name}}</div>

    <div class="py-8 ">
      <h3 class="font-bold group-hover:text-blue-800 text-xl transition-colors duration-300">
        <a href="#" target="_blank">{{job.title}}</a>
      </h3>
      <p class="text-sm mt-4">{{job.salary}}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">


<!--      logo-->
    </div>
  </div>
</template>

<style scoped>

</style>
