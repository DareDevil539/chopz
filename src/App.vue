<template>
  <div id="app">
    <Navbar />
    <router-view class="content"></router-view>
    <Footer />
  </div>
</template>

<script>
import Navbar from "./components/Navbar";
import Footer from "./components/Footer";
export default {
  name: "App",
  components: {
    Navbar,
    Footer
  }
};
</script>

<style lang="scss">
.content {
  min-height: 90vh;
}
</style>
