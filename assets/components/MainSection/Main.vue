<template>
  <Slider/>
  <TrendingProduct/>
</template>

<script>
import Slider from "./Slider";
import TrendingProduct from "../Products/TrendingProduct";

export default {
  name: "Main",
  components: {
    Slider,
    TrendingProduct,
  }
}
</script>

<style scoped>

</style>