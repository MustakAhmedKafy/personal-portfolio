<script setup></script>
<template>
  <section class="about-us">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-8">
          <h2 class="hero-title text-end text-uppercase">Innovative</h2>
          <h2 class="hero-title with-text-title text-uppercase">
            Collaborative <span class="with-text">WITH</span>
          </h2>
          <h2 class="hero-title text-center text-uppercase">Reliable</h2>
          <h2 class="hero-title text-end text-uppercase">Agile</h2>
        </div>
        <div class="col-md-4">
          <div class="hero-card mb-md-0 mb-3">
            <div class="hero-card-header">
              <span class="welcome-text">Welcome</span>
              <span class="star-icon">*</span>
            </div>
            <p class="hero-card-text">
              At Team Oero, we're dedicated to pushing the boundaries of
              innovation and excellence in the IT industry. Together, we'll
              create solutions that redefine possibilities and deliver
              exceptional results.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
.hero-card {
  background: rgba(0, 0, 0, 0) url(/img/black-bg.jpg) repeat scroll 0 0 /
    cover;
  position: relative;
  width: 100%;
  z-index: 1;
  background-position: center;
  background-repeat: no-repeat;
  background-color: #000;
  color: #fff;
  border-radius: 15px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  text-align: center;
  height: 300px;
}

.about-us {
  background-color: #fff;
}

.about-us .hero-title {
  font-size: 4rem;
  font-weight: bold;
  color: #000;
}

.about-us .with-text-title {
  display: flex;
  align-items: center;
  gap: 10px;
}

.about-us .with-text {
  display: inline-block;
  padding: 5px 12px;
  border: 1px solid #000;
  border-radius: 25px;
  font-weight: normal;
  font-size: 2rem;
}

.about-us .hero-card-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 10px;
  padding: 0px 20px;
}

.about-us .welcome-text {
  font-size: 1.5rem;
  padding: 3px 10px;
  border: 1px solid #fff;
  border-radius: 20px;
}

.about-us .star-icon {
  font-size: 4rem;
  font-weight: bold;
}

.about-us .hero-card-text {
  font-size: 1rem;
  position: absolute;
  bottom: 0;
  padding: 0px 20px 15px 20px;
}
</style>
