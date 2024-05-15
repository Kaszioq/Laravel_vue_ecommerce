<script setup>
import GuestLayout from "../components/GuestLayout.vue";
</script>

<template>
  <div class="flex items-center justify-center h-full">
    <div class="flex">
      <div class="self-start px-8 pb-8 text-6xl font-bold text-indigo-600 border-r leading-11">
        404
      </div>
      <div class="px-8">
        <h1 class="mb-2 text-5xl font-bold ">
          Page not found
        </h1>
        <p class="mb-10 text-gray-400">
          Please check the url in addres bar and try again
        </p>
        <div>
          <router-link :to="{name: 'app.dashboard'}" class="px-4 py-2 text-sm font-semibold leading-6 text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Go back home
          </router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>

</style>