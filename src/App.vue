<template>
  <div id="app">
    <Navbar />
    <Carousel />
  </div>
</template>

<script>
import Navbar from "./components/Navbar";
import Carousel from "./components/Carousel";

export default {
  name: "App",
  components: {
    Navbar,
    Carousel
  }
};
</script>
