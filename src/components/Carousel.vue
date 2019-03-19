<template>
  <div id="carousel">
    <div class="bd-example">
      <div
        id="carouselExampleCaptions"
        class="carousel slide"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#carouselExampleCaptions"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../assets/img/slide1.jpg" class="d-block w-100" alt="" />
            <div class="carousel-caption d-none d-md-block">
              <h5>Заголовок</h5>
              <p>Короткий текст</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../assets/img/slide2.jpg" class="d-block w-100" alt="" />
            <div class="carousel-caption d-none d-md-block">
              <h5>Інший заголовок</h5>
              <p>Інший текст</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../assets/img/slide3.jpg" class="d-block w-100" alt="" />
            <div class="carousel-caption d-none d-md-block">
              <h5>Ще один заголовок</h5>
              <p>Ще один текст</p>
            </div>
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleCaptions"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleCaptions"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Carousel"
};
</script>

<style lang="scss">
#carousel {
  height: 500px;
  img {
    height: 500px;
  }
}

.carousel-caption {
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 20px;
  background-color: rgba(0, 0, 0, 0.75);
}
</style>
