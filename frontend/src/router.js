// src/router.js
import { createRouter, createWebHistory } from "vue-router";
import Home from "./views/Home.vue";
import About from "./views/About.vue";
import Contact from "./views/Contact.vue";
import Blog from "./views/Blog.vue";
import BlogDetails from "./views/BlogDetails.vue";

const routes = [
  { path: "/", component: Home },
  { path: "/about", component: About },
  { path: "/contact", component: Contact },
  { path: "/blog", component: Blog },
  { path: "/blog/:title", component: BlogDetails, props: true }, // Dynamic route for blog details
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
