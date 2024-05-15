<template>
  <div class="flex flex-col items-center justify-center flex-1 min-h-full px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h2 class="mt-10 text-2xl font-bold leading-9 tracking-tight text-center text-gray-900">{{ title }}</h2>
    </div>

    <slot></slot>
  </div>
</template>

<script>
export default {
  name: "GuestLayout",
  created() {},
  data() {
    return {};
  },
  props: {},
  methods: {},
};
</script>
<script setup>
  const {title} = defineProps({
    title: String,
  })
</script>

<style scoped>
</style>