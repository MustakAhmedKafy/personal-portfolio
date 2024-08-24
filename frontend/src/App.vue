<template>
  <div id="app">
    <Navbar />
    <div class="container mt-4">
      <!-- Only show the breadcrumb if the current route is not the home page -->
      <Breadcrumb v-if="$route.path !== '/'" />
      <router-view />
    </div>
  </div>
</template>

<script setup>
import Navbar from './components/Navbar.vue';
import Breadcrumb from './components/Breadcrumb.vue';
</script>
