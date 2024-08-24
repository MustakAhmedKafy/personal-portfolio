<template>
  <div class="container mt-5">
    <h1>{{ blog.title }}</h1>
    <p>{{ blog.content }}</p>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import { useRoute } from 'vue-router'

const route = useRoute()
const blog = ref({
  title: route.params.blogTitle,
  content: 'Full content of the blog will be fetched from the backend.'
})
</script>

<style scoped>
</style>
