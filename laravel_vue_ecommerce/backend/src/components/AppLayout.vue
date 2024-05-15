<template>
  <div class="flex min-h-full bg-gray-200">
    <Sidebar :class="{'-ml-[200px]': !sidebarOpened}"/>
    <div class="flex-1">
      <Navbar @toggle-sidebar="toggleSidebar"/>
      <main class="p-6">
        <div class="p-4 bg-white rounded">
          <router-view></router-view> 
        </div>
      </main>
    </div>
  </div>
</template>
<script>
export default {
  name: "AppLayout",
  created() {},
components: [ Sidebar, Navbar ],
  data() {
    return {};
  },
  props: {},
  methods: {},
};
</script>
<script setup>
  import { ref, onMounted, onUnmounted } from 'vue'
  import Sidebar from './Sidebar.vue'
  import Navbar from './Navbar.vue'
  
  const sidebarOpened = ref(true)
  
  function toggleSidebar(){
    sidebarOpened.value = !sidebarOpened.value
  }

  onMounted(() => {
    handleSidebarOpened()
    window.addEventListener('resize', handleSidebarOpened)
  })

  onUnmounted(() => {
    window.removeEventListener('resize', handleSidebarOpened)
  })
  
  function handleSidebarOpened(){
    sidebarOpened.value = window.outerWidth > 768
  }
</script>

<style scoped>
</style>