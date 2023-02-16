<template>
<div>
  <!-- header-default start -->
  <header class="header-style-3">
    <!-- Start Desktop Menu -->
    <div class="menubox">
      <div class="container-fluid">
        <div class="row d-lg-none d-block">
          <div class="mobile-menu ">
            <div class="mobile-menu__menu-top border-bottom-0">
              <div class="container">
                <div class="row">
                  <div class="menu-info d-flex justify-content-between align-items-center">
                    <div class="menubar"> <span></span> <span></span> <span></span> </div> <a
                      href="index" class="logo"> <img src="assets/images/logo/mine-logo4.jpg"
                                                           alt=""> </a>
                    <div class="cart-holder">
                      <a  href="#0"  @click.prevent="getCartList()"  class="cart cart-icon position-relative">
                        <i class="flaticon-shopping-cart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="menu-closer"></div>
            <div class="mobile-menu__sidebar-menu">
              <div class="menu-closer two"> <span>Закрыть</span> <span class="cross"><i
                  class="flaticon-cross"></i></span> </div>
              <ul class="page-dropdown-menu">
                <li class="dropdown-list"> <router-link to="/"><span>Главная </span> </router-link></li>
                <li v-if="token" class="dropdown-list"> <router-link to="/account"><span>Профиль</span> </router-link> </li>
                <li v-if="adminName" class="dropdown-list"><a href="admin" >Админ панель</a></li>
                <li v-if="token" class="dropdown-list" @click.prevent="logout()"><a class="dropdown-item" href="#">Выйти</a></li>
                <li class="dropdown-list"> <router-link to="/wishlist"><span>Избраное</span> </router-link> </li>
                <li class="dropdown-list"> <router-link to="/compare"><span>Сравнить</span> </router-link> </li>
                <li class="dropdown-list"> <router-link to="/products"><span>IP Камеры </span> </router-link> </li>
                <li class="dropdown-list"> <router-link to="/recorder"><span>Видеорегистраторы </span> </router-link> </li>
                <li class="dropdown-list"> <router-link to="/products"><span>Услуги</span> </router-link> </li>
                <li class="dropdown-list"> <router-link to="/intercom"><span>Домофоны</span> </router-link> </li>
                <li class="dropdown-list"> <router-link to="/hdd"><span>HDD Накопители</span> </router-link> </li>
                <li class="dropdown-list"> <router-link to="/pppoe"><span>PPPOE Коммутаторы</span> </router-link> </li>
                <li class="dropdown-list"> <router-link to="/cable"><span>Кабель </span> </router-link> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="d-lg-block d-none">
          <div class="row g-0 position-relative">
            <div class="col-lg-3 d-flex align-items-center justify-content-center border-rit ">
              <div class="logo"> <a href="index"> <img src="assets/images/logo/mine-logo4.jpg" alt=""> </a>
              </div>
            </div>
            <div class="col-lg-9 g-0 p-0">
              <div class="row g-0 holder">
                <div class="col-12">
                  <div class="some-info">
                    <p class="d-flex align-items-center"> <span class="icon"> <i
                        class="flaticon-power"></i> </span> Добро пожаловать в Сam King Online Shop</p>
                    <div class="right d-flex align-items-center ">

                      <router-link v-if="!token" :to="{name:'login.index'}" >Войти </router-link>
                      <router-link v-if="!token" :to="{name:'registration.index'}"> /Регситрация</router-link>
                        <li   v-if="token" class="nav-item dropdown">
                            <a style="font-size: 14px" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i  class="flaticon-user" >  </i> {{getUserName()}}
                            </a>

                            <ul class="dropdown-menu">
                                <li  v-if="token" ><a class="dropdown-item" href="#">Профиль</a></li>
                                <li v-if="adminName" ><a class="dropdown-item" href="admin">Админ панель</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li v-if="token"  @click.prevent="logout()" ><a class="dropdown-item" href="#">Выйти</a></li>
                            </ul>
                        </li>
                    </div>
                  </div>
                </div>
              </div>
              <div class="border-one"> </div>
              <div class="row g-0 holder">
                <div class="col-12">
                  <div class="mega-menu-default mega-menu d-lg-block d-none">
                    <div class=" d-flex align-items-center justify-content-between ">
                      <nav>
                        <ul class="page-dropdown-menu d-flex align-items-center justify-content-center">
                          <li class="dropdown-list"> <router-link to="/"><span style="font-size: 13px"  >Главная </span> </router-link></li>
                          <li class="dropdown-list"> <router-link to="/products"><span style="font-size: 13px"    >IPC Камеры</span> </router-link> </li>
                          <li class="dropdown-list"> <router-link to="/recorder"><span style="font-size: 13px" >Видеорегистраторы </span> </router-link> </li>
                          <li class="dropdown-list"> <router-link to="/service"><span style="font-size: 13px">Услуги</span> </router-link> </li>
                          <li class="dropdown-list"> <router-link to="/intercom"><span style="font-size: 13px"  >Домофоны</span> </router-link> </li>
                          <li class="dropdown-list"> <router-link to="/hdd"><span style="font-size: 13px"  >HDD Накопители</span> </router-link> </li>
                          <li class="dropdown-list"> <router-link to="/pppoe"><span style="font-size: 13px"  >PPPOE Коммутаторы</span> </router-link> </li>
                          <li class="dropdown-list"> <router-link to="/cable"><span style="font-size: 13px"  >Кабель </span> </router-link> </li>
                        </ul>
                      </nav>
                      <div   class="right d-flex align-items-center justify-content-end">
                        <ul class="main-menu__widge-box d-flex align-items-center ">
                          <li class="cartm">  <a href="compare"  class="number cart-icon"> <i
                              class="flaticon-left-and-right-arrows"></i><span
                              class="count">({{countingCompareList()}})</span> </a>
                          </li>
                          <li class="d-lg-block d-none"><a href="wishlist"
                              class="number"><i class="flaticon-heart"></i> <span
                              class="count">({{countingWishlist()}})</span> </a>
                          </li>
                          <li class="cartm">  <a  @click.prevent="getCartList()"  class="number cart-icon"> <i
                              class="flaticon-shopping-cart"></i><span
                              class="count">({{countingCart()}})</span> </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sticy-header">
      <div class="mobile-menu d-lg-none d-block">
        <div class="mobile-menu__menu-top border-bottom-0">
          <div class="container">
            <div class="row">
              <div class="menu-info d-flex justify-content-between align-items-center">
                <div class="menubar"> <span></span> <span></span> <span></span> </div> <a
                  href="index" class="logo"> <img src="assets/images/logo/mine-logo4.jpg" alt=""> </a>
                <div class="cart-holder">
                  <a href="#0"  @click.prevent="getCartList()"  class="cart cart-icon position-relative">
                    <i class="flaticon-shopping-cart"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container position-relative d-lg-block d-none">
        <div class="d-flex align-items-center justify-content-between"> <a href="index" class="logo me-2">
          <img src="assets/images/logo/mine-logo4.jpg" alt=""> </a>
          <div class="mega-menu-default mega-menu d-lg-block d-none">
            <div class="container ">
              <div class="row">
                <nav>
                    <ul
                        class="page-dropdown-menu d-flex align-items-center justify-content-center">
                      <li class="dropdown-list"> <router-link to="/"><span>Главная</span></router-link></li>
                    </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="side-cart-closer"></div>
    <div   class="side-cart d-flex flex-column justify-content-between">
      <div   class="top">
        <div class="content d-flex justify-content-between align-items-center">
          <h6 class="text-uppercase">Корзина ({{countingCart()}})</h6> <span class="cart-close text-uppercase">X</span>
        </div>
        <div class="cart_items">
          <div v-for="cartItem in cartList"  :id="cartItem.id" class="items d-flex justify-content-between align-items-center">
            <div class="left d-flex align-items-center"> <a href="shop-details-1.html" class="thumb d-flex justify-content-between align-items-center"> <img :src="cartItem.image_url" alt=""> </a>
              <div class="text"> <a href="shop-details-1.html">
                <h6>{{cartItem ? cartItem.title:'123'}}</h6>
              </a>
                <p style="font-weight: bold" >{{cartItem.qty}}x <span>₽{{cartItem.price}} </span> </p>
              </div>
            </div>
            <div  class="right"><div @click.prevent="removeProduct(cartItem.title)"   class="item-remove"> <i class="flaticon-cross"></i> </div></div>
          </div>
        </div>
      </div>
      <div class="bottom">
        <div  class="total-ammount d-flex justify-content-between align-items-center">
          <h6 class="text-uppercase">ИТОГО:</h6>
          <h6  class="ammount text-uppercase"> {{getCartTotal()}}₽</h6>
        </div>
        <div class="button-box d-flex justify-content-between">
            <a href="http://127.0.0.1:8000/cart" class="btn_black"> Просмотреть</a>
            <a @click.prevent="clearCart()"  href="" class="button-2 btn_theme">   Очистить </a>
        </div>
      </div>
    </div>



  </header>


    <router-view :key="$route.fullPath" ></router-view>


    <!--  Footer Three start -->
  <footer class="footer-default footer-3 ">
    <div class="footer-default__shap_1 position-absolute "> <img src="assets/images/shape/footer-shape-1.png"
                                                                 alt=""> </div>
    <!--Start Footer-->
    <div class="footer-default__main-footer position-relative">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
            <div class="footer-default__single-box">
              <div class="company-info">
                <div class="footer-title">
                  <h4> Office</h4>
                </div>
                <div class="text1">
                  <p>29 Holles Place, Dublin 2 D02 YY46</p>
                </div>
                <div class="text2">
                  <p>68 Jay Street, Suite 902 New Side <br> Brooklyn, NY 11201</p>
                </div>
                <div class="text3">
                  <p>New York, United States</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
            <div class="footer-default__single-box">
              <div class="footer-title">
                <h4> Useful Links </h4>
              </div>
              <ul class="footer-links">
                <li><a href="my-account.html">Account</a></li>
                <li><a href="login.html">Sign In</a></li>
                <li><a href="cart.html">View Cart</a></li>
                <li><a href="wishlist.html">My WishList</a></li>
                <li><a href="compare.html">Compare Products</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
            <div class="footer-default__single-box">
              <div class="footer-title">
                <h4> Information </h4>
              </div>
              <ul class="footer-links">
                <li><a href="about-us.html">About us</a></li>

                <li><a href="contact.html">Contact Us </a></li>
                <li><a href="faq.html">Faq</a></li>
                <li><a href="blog.html">Latest Posts</a></li>
                <li><a href="order-track.html">Order Track</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
            <div class="footer-default__single-box">
              <div class="footer-title">
                <h4> Newsletter </h4>
              </div>
              <div class="footer-newsletter">
                <p class="text">Enter your email to receive our latest updates about our products &
                  promotions. </p>
                <form action="#0" class="footer-default__subscrib-form">
                  <div class="footer-input-box"> <input type="email" placeholder="Email address"
                                                        name="email"> <button type="submit" class="subscribe_btn"> Subscribe
                  </button> </div>
                </form>
                <div class="newsletter-bottom d-flex align-items-center">
                  <div class="footer-title-box">
                    <p>Follow Us:</p>
                  </div>
                  <div class="footer__medio-boxx  medio-boxx  d-flex align-items-center">
                    <ul>
                      <li><a href="https://www.facebook.com/" target="_blank" class="active"><i
                          class="flaticon-facebook-app-symbol"></i></a></li>
                      <li><a href="https://www.youtube.com/" target="_blank"><i
                          class="flaticon-youtube"></i></a></li>
                      <li><a href="https://twitter.com/"><i class="flaticon-twitter"
                                                            target="_blank"></i></a></li>
                      <li><a href="https://www.instagram.com/"><i class="flaticon-instagram"
                                                                  target="_blank"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- footer-bottom Footer-->
    <div class="footer_bottom position-relative">
      <div class="container">
        <div class="footer_bottom_content">
          <div class="copyright wow fadeInUp animated">
            <p>© 2022 <a href="/">Karte.</a> All Rights Reserved.</p>
          </div>
          <div class="footer-payment wow fadeInUp animated">
            <a href="#0"> <img src="assets/images/home-four/method-1.jpg" alt="payment"> </a>
            <a href="#0"> <img src="assets/images/home-four/method-2.jpg" alt="payment"> </a>
            <a href="#0"> <img src="assets/images/home-four/method-3.jpg" alt="payment"> </a>
            <a href="#0"> <img src="assets/images/home-four/method-4.jpg" alt="payment"> </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--==== Js Scripts Start ====-->
</div>
</template>
<script>
import axios from 'axios';
export default {
  name:'App',
  mounted() {
    $(document).trigger('changed')
    this.countingCart();
    this.countingWishlist();
    this.countingCompareList()
    this.getCartList()
    this.getToken();
    this.getUserName()
    this.checkAdmin();

  },

  data(){
    return{
      cartList:[],
      token:null,
      adminName:null,

    }
  },
    updated() {
        this.getToken()
    },


    methods:{
      checkAdmin(){
          // let name ='';
          // let user =JSON.parse(localStorage.getItem('userData'))
          // if(user){
          //     user.forEach((function (item){
          //         name += item.name
          //     }))
          //     return name
          // }
          // this.axios.get(`/api/admin/${name}`)
          //     .then(res=>{
          //         this.adminData = res.data.data
          //         console.log(name);
          //     })
          //     .finally(v=>{
          //         $(document).trigger('changed')
          //     })

          if(this.getUserName()==='Тагир'){
              this.adminName=this.getUserName()

          }
          else {
              this.adminName =null;
          }
          console.log(this.adminName);
      },
      getUserName(){
          let name ='';
          let user =JSON.parse(localStorage.getItem('userData'))
          if(user){
              user.forEach((function (item){
                  name += item.name
              }))
                return name
          }
      },

      getToken(){
          this.token = localStorage.getItem('userData')
          $(document).trigger('changed')
      },
      logout(){
          axios.post('/logout')
              .then(res=>{
                  localStorage.removeItem ('userData')
                  window.location.href = 'http://127.0.0.1:8000/login';
              })
      },
    clearCart(){
      localStorage.removeItem('cart');
      $(document).trigger('changed')
    },
    countingWishlist(){
      this.wishlistCount = JSON.parse(localStorage.getItem('wishlist'))
      if(this.wishlistCount!==null){
        return this.wishlistCount.length
      }
    },
    countingCompareList(){
      this.compareListCount = JSON.parse(localStorage.getItem('compareList'))
      if(this.compareListCount!==null){
        return this.compareListCount.length
      }
    }
    ,
    countingCart(){
      this.cartCount = JSON.parse(localStorage.getItem('cart'))
      if(this.cartCount!==null){
        return this.cartCount.length
      }
    },
    getCartTotal(){
      this.cartList = JSON.parse(localStorage.getItem('cart'));
      let total_sum = 0
      if(this.cartList!==null)
      this.cartList.forEach((function(item){
          total_sum += item.subtotal
        }))
      return total_sum
    },

    getCartList(){
      this.cartList = JSON.parse(localStorage.getItem('cart'));
    },
    updateCart() {
      localStorage.setItem('cart', JSON.stringify(this.cartList))
    },

    removeProduct(title){
      this.cartList = this.cartList.filter(product =>{
        return product.title!==title
      })
      this.updateCart()
    }
  }
}
</script>
<style>

</style>
