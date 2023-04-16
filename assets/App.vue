<template>
  <div class="body-wrapper">
  <HeaderSection/>
  <MainSection/>
<!--  <HeroSection/>-->
<!--  <AboutSection/>-->
<!--  <ProductSection/>-->
<!--  <NewsletterSection/>-->
  <router-view> </router-view>
  <FooterSection/>
<!--  <router-view> </router-view >-->
  </div>
</template>

<script>

import FooterSection from "./components/FooterSection";
import HeaderSection from "./components/HeaderSection";
import HeroSection from "./components/HeroSection";
import AboutSection from "./components/AboutSection";
import NewsletterSection from "./components/NewsletterSection";
import ProductSection from "./components/ProductSection";
import MainSection from "./components/MainSection/Main";

export default {
  name: "App",
  components: {
    HeaderSection,
    FooterSection,
    HeroSection,
    AboutSection,
    NewsletterSection,
    ProductSection,
    MainSection
  },
  mounted() {
    const recaptchaScript = document.createElement("script");
    recaptchaScript.setAttribute(
        "src",
        "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    );

    const recaptchaScript2 = document.createElement("script");
    recaptchaScript.setAttribute(
        "src",
        "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    );
    document.head.appendChild(recaptchaScript);
    document.head.appendChild(recaptchaScript2);
  },
};
</script>

<style>


@import url('https://fonts.googleapis.com/css?family=Exo+2');
@import url('https://fonts.googleapis.com');
@import url('https://fonts.gstatic.com');
@import url('https://fonts.googleapis.com/css2?family=Mr+De+Haviland&family=Roboto:wght@400;500;700&display=swap');

</style>