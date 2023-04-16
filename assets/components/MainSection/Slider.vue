<template>
  <div class="slider-with-banner">
    <div class="container">
      <div class="row">
        <!-- Begin Slider Area -->
        <div class="col-lg-8 col-md-8">
          <div class="slider-area">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1000">
                  <img src="../../img/banner/2_2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="../../img/banner/2_3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../../img/banner/2_4.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                      data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                      data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>

        <!-- Slider Area End Here -->
        <!-- Begin Li Banner Area -->
        <div class="col-lg-4 col-md-4 text-center pt-xs-30">
          <div class="li-banner mt-15 mt-sm-30 mt-xs-30">
            <a href="#">
              <img src="../../img/banner/1_2.jpg" alt="">
            </a>
          </div>
        </div>

        <!-- Li Banner Area End Here -->
      </div>

      <!-- Gallery -->
      <div class="row">
        <div class="col-lg-4 col-md-4 text-center pt-xs-30">
          <div class="li-banner mt-15 mt-sm-30 mt-xs-30">
            <a href="#">
              <img src="../../img/banner/1_3.jpg" alt="">
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 text-center pt-xs-30">
          <div class="li-banner mt-15 mt-sm-30 mt-xs-30">
            <a href="#">
              <img src="../../img/banner/1_4.jpg" alt="">
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 text-center pt-xs-30">
          <div class="li-banner mt-15 mt-sm-30 mt-xs-30">
            <a href="#">
              <img src="../../img/banner/1_5.jpg" alt="">
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>


</template>

<script>

export default {
  name: "Slider",
  data() {
    return {
      slide: 0,
      sliding: null
    }
  },
  methods: {
    onSlideStart(slide) {
      this.sliding = true
    },
    onSlideEnd(slide) {
      this.sliding = false
    }
  }
}
</script>

<style scoped>

</style>