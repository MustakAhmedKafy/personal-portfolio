<!-- src/components/Breadcrumb.vue -->
<template>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <router-link to="/">Home</router-link>
      </li>
      <li v-if="$route.path !== '/'" class="breadcrumb-item active" aria-current="page">
        {{ getPageName }}
      </li>
    </ol>
  </nav>
</template>

<script setup>
import { computed } from 'vue';
import { useRoute } from 'vue-router';

const route = useRoute();

const getPageName = computed(() => {
  if (route.path.includes('about')) return 'About';
  if (route.path.includes('contact')) return 'Contact';
  if (route.path.includes('blog')) return route.path.includes(':title') ? 'Blog Details' : 'Blog';
  return 'Home';
});
</script>
