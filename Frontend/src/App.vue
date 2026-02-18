<template>
  <div class="app">
    <Sidebar v-if="isAuth" />
    <div class="page">
      <Header v-if="isAuth" />
      <router-view />
    </div>
  </div>
</template>

<script setup>
import Sidebar from './components/Sidebar.vue'
import Header from './components/Header.vue'
import { isAuth } from './auth'

</script>

<style scoped>
  .app {
  height: 100vh;
}

</style>
