<script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'

const blogs = ref([])
const newBlog = ref({ title: '', content: '' })
const selectedBlog = ref(null)

onMounted(async () => {
  fetchBlogs()
})

const fetchBlogs = async () => {
  const response = await axios.get('http://localhost:8000/api/contents?type=blog')
  blogs.value = response.data
}

const createBlog = async () => {
  try {
    await axios.post('http://localhost:8000/api/create.php', {
      title: newBlog.value.title,
      type: 'blog',
      content: newBlog.value.content,
      status: 'published'
    })
    fetchBlogs()
    newBlog.value = { title: '', content: '' }
  } catch (error) {
    console.error('Error creating blog:', error)
  }
}

const selectBlog = (blog) => {
  selectedBlog.value = { ...blog }
}

const updateBlog = async () => {
  try {
    await axios.put('http://localhost:8000/api/update.php', selectedBlog.value)
    fetchBlogs()
    selectedBlog.value = null
  } catch (error) {
    console.error('Error updating blog:', error)
  }
}

const deleteBlog = async (id) => {
  try {
    await axios.delete(`http://localhost:8000/api/delete.php?id=${id}`)
    fetchBlogs()
  } catch (error) {
    console.error('Error deleting blog:', error)
  }
}
</script>



<template>
  <div class="container mt-5">
    <h1>Blog</h1>
    
    <!-- Create Blog Form -->
    <div class="mb-4">
      <h2>Create Blog Post</h2>
      <form @submit.prevent="createBlog">
        <div class="mb-3">
          <label for="createTitle" class="form-label">Title</label>
          <input v-model="newBlog.title" type="text" id="createTitle" class="form-control" required />
        </div>
        <div class="mb-3">
          <label for="createContent" class="form-label">Content</label>
          <textarea v-model="newBlog.content" id="createContent" class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Blog Post</button>
      </form>
    </div>

    <!-- Update Blog Form -->
    <div v-if="selectedBlog" class="mb-4">
      <h2>Update Blog Post</h2>
      <form @submit.prevent="updateBlog">
        <div class="mb-3">
          <label for="updateTitle" class="form-label">Title</label>
          <input v-model="selectedBlog.title" type="text" id="updateTitle" class="form-control" required />
        </div>
        <div class="mb-3">
          <label for="updateContent" class="form-label">Content</label>
          <textarea v-model="selectedBlog.content" id="updateContent" class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Blog Post</button>
      </form>
    </div>

    <!-- Blog List -->
    <div v-if="blogs.length">
      <div class="list-group">
        <router-link
          v-for="blog in blogs"
          :key="blog.id"
          :to="`/blog/${blog.title}`"
          class="list-group-item list-group-item-action"
        >
          <h5 class="mb-1">{{ blog.title }}</h5>
          <p class="mb-1">{{ blog.excerpt }}</p>
          <button @click="selectBlog(blog)" class="btn btn-info btn-sm">Edit</button>
          <button @click="deleteBlog(blog.id)" class="btn btn-danger btn-sm">Delete</button>
        </router-link>
      </div>
    </div>
    <div v-else>
      <p>No blog posts available.</p>
    </div>
  </div>
</template>
