<template>
  <header>
    <!-- Begin Header Top Area -->
    <div class="header-top">
      <div class="container">
        <div class="row">
          <!-- Begin Header Top Left Area -->
          <div class="col-lg-3 col-md-4">
            <div class="header-top-left">
              <ul class="phone-wrap">
                <li><span>Telephone Enquiry:</span><a href="#">(+123) 123 321 345</a></li>
              </ul>
            </div>
          </div>
          <!-- Header Top Left Area End Here -->
          <!-- Begin Header Top Right Area -->
          <div class="col-lg-9 col-md-8">
            <div class="header-top-right">
              <ul class="ht-menu">
                <!-- Begin Setting Area -->
                <li>
                  <div class="ht-setting-trigger"><span>Setting</span></div>
                  <div class="setting ht-setting">
                    <ul class="ht-setting-list">
                      <li><a href="/">My Account</a></li>
                      <li><a href="/">Checkout</a></li>
                      <li><a href="/">Sign In</a></li>
                    </ul>
                  </div>
                </li>
                <!-- Setting Area End Here -->
                <!-- Begin Currency Area -->
                <li>
                  <span class="currency-selector-wrapper">Currency :</span>
                  <div class="ht-currency-trigger"><span>USD $</span></div>
                  <div class="currency ht-currency">
                    <ul class="ht-setting-list">
                      <li><a href="#">EUR €</a></li>
                      <li class="active"><a href="#">USD $</a></li>
                    </ul>
                  </div>
                </li>
                <!-- Currency Area End Here -->
                <!-- Begin Language Area -->
                <li>
                  <span class="language-selector-wrapper">Language :</span>
                  <div class="ht-language-trigger"><span>English</span></div>
                  <div class="language ht-language">
                    <ul class="ht-setting-list">
                      <li class="active"><a href="#"><img src="/" alt="">English</a></li>
                      <li><a href="#"><img src="/" alt="">Français</a></li>
                    </ul>
                  </div>
                </li>
                <!-- Language Area End Here -->
              </ul>
            </div>
          </div>
          <!-- Header Top Right Area End Here -->
        </div>
      </div>
    </div>
    <!-- Header Top Area End Here -->
    <!-- Begin Header Middle Area -->
    <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
      <div class="container">
        <div class="row">
          <!-- Begin Header Logo Area -->
          <div class="col-lg-3">
            <div class="logo pb-sm-30 pb-xs-30">
              <a href="/">
                <img src="../img/menu/logo/1.jpg" alt="">
              </a>
            </div>
          </div>
          <!-- Header Logo Area End Here -->
          <!-- Begin Header Middle Right Area -->
          <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
            <!-- Begin Header Middle Searchbox Area -->
            <form action="#" class="hm-searchbox">
              <select class="nice-select select-search-category">
                <option value="0">All</option>
                <option value="10">Laptops</option>
                <option value="17">- -  Prime Video</option>
                <option value="20">- - - -  All Videos</option>
                <option value="21">- - - -  Blouses</option>
                <option value="11">TV &amp; Audio</option>
                <option value="42">- -  Chamcham</option>
                <option value="51">- - - -  Ultrabooks</option>
                <option value="52">- - - -  Blouses</option>
                <option value="13">Cameras</option>
                <option value="14">headphone</option>
                <option value="15">Smartwatch</option>
                <option value="16">Accessories</option>
              </select>
              <input type="text" placeholder="Enter your search key ...">
              <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
            </form>
            <!-- Header Middle Searchbox Area End Here -->
            <!-- Begin Header Middle Right Area -->
            <div class="header-middle-right">
              <ul class="hm-menu">
                <!-- Begin Header Middle Wishlist Area -->
                <li class="hm-wishlist">
                  <a href="/">
                    <span class="cart-item-count wishlist-item-count">0</span>
                    <i class="fa fa-heart-o"></i>
                  </a>
                </li>
                <!-- Header Middle Wishlist Area End Here -->
                <!-- Begin Header Mini Cart Area -->
                <li class="hm-minicart">
                  <div class="hm-minicart-trigger">
                    <span class="item-icon"></span>
                    <span class="item-text">£80.00
                                                    <span class="cart-item-count">2</span>
                                                </span>
                  </div>
                  <span></span>
                  <div class="minicart">
                    <ul class="minicart-product-list">
                      <li>
                        <a href="/" class="minicart-product-image">
                          <img src="/" alt="cart products">
                        </a>
                        <div class="minicart-product-details">
                          <h6><a href="/">Aenean eu tristique</a></h6>
                          <span>£40 x 1</span>
                        </div>
                        <button class="close" title="Remove">
                          <i class="fa fa-close"></i>
                        </button>
                      </li>
                      <li>
                        <a href="/" class="minicart-product-image">
                          <img src="/" alt="cart products">
                        </a>
                        <div class="minicart-product-details">
                          <h6><a href="/">Aenean eu tristique</a></h6>
                          <span>£40 x 1</span>
                        </div>
                        <button class="close" title="Remove">
                          <i class="fa fa-close"></i>
                        </button>
                      </li>
                    </ul>
                    <p class="minicart-total">SUBTOTAL: <span>£80.00</span></p>
                    <div class="minicart-button">
                      <a href="/" class="li-button li-button-fullwidth li-button-dark">
                        <span>View Full Cart</span>
                      </a>
                      <a href="/" class="li-button li-button-fullwidth">
                        <span>Checkout</span>
                      </a>
                    </div>
                  </div>
                </li>
                <!-- Header Mini Cart Area End Here -->
              </ul>
            </div>
            <!-- Header Middle Right Area End Here -->
          </div>
          <!-- Header Middle Right Area End Here -->
        </div>
      </div>
    </div>
    <!-- Header Middle Area End Here -->
    <!-- Begin Header Bottom Area -->


<!--    test-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
      <div class="container-fluid">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarsExample08" aria-controls="navbarsExample08"
                aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse justify-content-md-center collapse" id="navbarsExample08" style="">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="#">MAIN</a>
            </li>
            <li class="nav-item megamenu-holder"><a class="nav-link" href="main">Shop</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown08">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

</template>

<script>
import main from '../components/Products/Main'
export default {
  data() {
    return {
      items: [
        {link: '/home', name: 'Electronic'},
        {link: '/123', name: 'Fashion'},
      ]
    };
  },
};
</script>

<style scoped>

</style>
