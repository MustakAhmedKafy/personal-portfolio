<script setup>
import Navbar from "../components/Navbar.vue";
import Breadcrumb from "../components/Breadcrumb.vue";

const banner = "/img/banner.svg";
</script>

<template>
  <!-- banner -->
  <section class="banner py-5">
    <div class="container-xxl">
      <div class="row align-items-center">
        <div class="col-md-7 col-12 text-center text-lg-start">
          <h1 class="display-4 fw-bold lh-1 mb-3">
            Transforming IT Solutions for Tomorrow's Challenges
          </h1>
          <p class="col-lg-10 fs-4">
            At Team Oreo, we are dedicated to delivering cutting-edge IT
            services and solutions that drive your business forward.
          </p>
        </div>
        <div class="col-12 col-md-5 mt-lg-0 mt-5">
          <div class="text-lg-end text-center">
            <img class="w-100" :src="banner" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
