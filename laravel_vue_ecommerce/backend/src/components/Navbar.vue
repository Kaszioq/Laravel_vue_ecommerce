<template>
  <header class="flex items-center justify-between bg-white shadow h-14">
    <button @click="emit('toggle-sidebar')" class="p-4 transition-colors hover:bg-black/10"><img src="../assets/menu.svg" class="w-6 fill-gray-700 stroke-gray-700"/></button>
      <Menu as="div" class="relative inline-block text-left">
        <div>
          <MenuButton class="flex items-center">
            <img src="https://randomuser.me/api/portraits/men/1.jpg" class="w-8 mr-2 rounded-full">
            <small>John Smith</small>
            <ChevronDownIcon
              class="w-5 h-5 text-violet-200 hover:text-indigo-700"
              aria-hidden="true"
            />
          </MenuButton>
        </div>
  
        <transition
          enter-active-class="transition duration-100 ease-out"
          enter-from-class="transform scale-95 opacity-0"
          enter-to-class="transform scale-100 opacity-100"
          leave-active-class="transition duration-75 ease-in"
          leave-from-class="transform scale-100 opacity-100"
          leave-to-class="transform scale-95 opacity-0"
        >
          <MenuItems
            class="absolute right-0 mt-2 origin-top-right bg-white divide-y divide-gray-100 rounded-md shadow-lg w-36 ring-1 ring-black/5 focus:outline-none"
          >
            <div class="px-1 py-1">
              <MenuItem v-slot="{ active }">
                <button
                  :class="[
                    active ? 'bg-indigo-600 text-white' : 'text-gray-900',
                    'group flex w-full items-center rounded-md px-2 py-2 text-sm',
                  ]"
                >
                  <UserIcon
                    :active="active"
                    class="w-5 h-5 mr-2 text-indigo-400"
                    aria-hidden="true"
                  />
                  Profile
                </button>
              </MenuItem>
              <MenuItem v-slot="{ active }">
                <button
                  @click="logout"
                  :class="[
                    active ? 'bg-indigo-600 text-white' : 'text-gray-900',
                    'group flex w-full items-center rounded-md px-2 py-2 text-sm',
                  ]"
                >
                  <LogoutIcon
                    :active="active"
                    class="w-5 h-5 mr-2 text-indigo-400"
                    aria-hidden="true"
                  />
                  Logout
                </button>
              </MenuItem>
            </div>
          </MenuItems>
        </transition>
      </Menu>
  </header>
</template>

<script>
  export default {
    name: "Navbar",
    created() {},
    data() {
      return {};
    },
    props: {},
    methods: {},
  };
</script>
<script setup>
import { LogoutIcon, UserIcon } from '@heroicons/vue/outline'
import {Menu, MenuButton, MenuItems, MenuItem} from '@headlessui/vue'
import {ChevronDownIcon} from '@heroicons/vue/solid'
import store from "../store";
import router from "../router";
import {computed} from "vue";

const emit = defineEmits(['toggle-sidebar'])

const currentUser = computed(() => store.state.user.data);

function logout() {
  store.dispatch('logout')
    .then(() => {
      router.push({name: 'login'})
    })
}

</script>

<style scoped>
</style>