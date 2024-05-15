<template>
  <div class="w-[200px] transition-all bg-indigo-700 text-white py-4 px-2">
    <router-link :to="{name: 'app.dashboard'}" class="flex items-center p-2 transition-colors rounded hover:bg-black/30">
      <span class="mr-2">
        <HomeIcon class="w-5 stroke-gray-300"/>
      </span>
      <span class="text-md">
        Dashboard
      </span>
    </router-link>
    <router-link :to="{name: 'app.products'}" class="flex items-center p-2 transition-colors rounded hover:bg-black/30">
      <span class="mr-2">
        <ViewListIcon class="w-5 stroke-gray-300" />
      </span>
      <span class="text-md">
        Products
      </span>
    </router-link>
    <router-link :to="{name: 'app.dashboard'}" class="flex items-center p-2 transition-colors rounded hover:bg-black/30">
      <span class="mr-2">
        <UsersIcon class="w-5 stroke-gray-300"/>
      </span>
      <span class="text-md">
        Users
      </span>
    </router-link>
    <router-link :to="{name: 'app.dashboard'}" class="flex items-center p-2 transition-colors rounded hover:bg-black/30">
      <span class="mr-2">
        <ChartBarIcon class="w-5 stroke-gray-300"/>
      </span>
      <span class="text-md">
        Reports
      </span>
    </router-link>
  </div>
</template>

<script>
export default {
  name: "SideBar",
  created() {},
  data() {
    return {};
  },
  props: {},
  methods: {},
};
</script>
<script setup>
  import { ChartBarIcon, UsersIcon, ViewListIcon, HomeIcon } from '@heroicons/vue/outline'
</script>

<style scoped>
</style>