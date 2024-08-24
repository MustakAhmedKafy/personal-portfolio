<script setup></script>

<template>
  <section class="py-5 contact-us">
    <div class="container-xxl pt-5">
      <div class="row">
        <div class="col-md-6">
          <h2 class="display-5 fw-bold">GET IN TOUCH</h2>
          <p class="lead">We want to hear from you!</p>
          <p class="lead">
            Do you have an exciting project which you’re itching to get started
            on? Maybe you’re looking for digital support on your new project? Or
            perhaps you just need ongoing technical support for your
            organization?
          </p>
          <p class="lead">
            Whatever you're looking for, our team is ready to help.
          </p>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6 mb-3">
              <input type="text" class="form-control" placeholder="Name" />
            </div>
            <div class="col-md-6 mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="Company Name"
              />
            </div>
            <div class="col-md-6 mb-3">
              <input type="email" class="form-control" placeholder="Email" />
            </div>
            <div class="col-md-6 mb-3">
              <input type="number" class="form-control" placeholder="Phone" />
            </div>
            <div class="col-md-12 mb-3">
              <textarea
                rows="4"
                class="form-control"
                placeholder="Message"
              ></textarea>
            </div>
            <div class="col-md-4">
              <a href="" class="btn">Send Message</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
.btn {
  background-color: #6c63ff;
  color: #fff;
}

.btn:hover {
  background-color: #4c44e9;
  color: #fff;
}
.contact-us {
  border-radius: 15px;
}

.contact-us .form-check-input:checked {
  background-color: #6c63ff;
  border-color: #6c63ff;
  box-shadow: 0 0 0 0.25rem rgba(228, 65, 165, 0.25);
}

.contact-us .form-control {
  box-shadow: none;
  outline: none;
  border: 0;
  background-color: #f9f9f9;
  padding: 6px 12px;
}

.contact-us #formFile {
  display: inline-block;
  width: auto;
  margin: 0;
  padding: 6px 12px;
}
</style>
