<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart App</title>

    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo _FOLDER_ROOT_; ?>web/public/assets/clients/css/style.css">
    <!-- <link rel="stylesheet" href="<?php echo _FOLDER_ROOT_; ?>web/public/assets/clients/css/cart.css"> -->
</head>
<body>
<aside class="site-off desktop-hide">
        <div class="off-canvas">
          <div class="canvas-head flexitem">
            <div class="logo">
              <a href="/bubblethemeshop"
                ><span class="circle"></span>&nbsp;BubbleShop</a
              >
            </div>
            <a class="t-close flexcenter"><i class="ri-close-line"></i></a>
          </div>
          <div class="departments"></div>
          <div class="thetop-nav"></div>
        </div>
      </aside>

      <!-- Header -->
      <header>
        <div class="header-top mobile-hide">
          <div class="container">
            <div class="wrapper flexitem">
              <div class="left">
                <ul class="flexitem main-links">
                  <li><a href="#">Bantuan</a></li>
                  <li><a href="#">Promo</a></li>
                  <li><a href="#">Tentang BubbleShop</a></li>
                </ul>
              </div>
              <div class="right">
                <ul class="flexitem main-links">
                  <li><a href="#">Daftar</a></li>
                  <li><a href="#">Masuk</a></li>
                  <li><a href="#">Lacak Pesanan</a></li>
                  <li>
                    <a href="#"
                      >Bahasa Indonesia
                      <span class="icon-small"
                        ><i class="ri-arrow-down-s-line"></i></span
                    ></a>
                    <ul>
                      <li class="current"><a href="#">Bahasa Indonesia</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- header top -->

        <div class="header-nav">
          <div class="container">
            <div class="wrapper flexitem">
              <a class="trigger desktop-hide"><i class="ri-menu-2-line"></i></a>
              <div class="left flexitem">
                <div class="logo">
                  <a href="/bubblethemeshop"
                    ><span class="circle"></span>&nbsp;BubbleShop</a
                  >
                </div>
                <nav class="mobile-hide">
                  <ul class="flexitem second-links">
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Spesial Diskon</a></li>
                    <li><a href="#">Handphone & Tablet</a></li>

                    <li class="has-child">
                      <a href="#"
                        >Kecantikan
                        <div class="icon-small">
                          <i class="ri-arrow-down-s-line"></i>
                        </div>
                      </a>
                      <div class="mega">
                        <div class="container">
                          <div class="wrapper">
                            <div class="flexcol">
                              <div class="row">
                                <h4>Pakaian Wanita</h4>
                                <ul>
                                  <li><a href="#">Dress</a></li>
                                  <li><a href="#">Kemeja</a></li>
                                  <li><a href="#">Jaket</a></li>
                                  <li><a href="#">Celana</a></li>
                                  <li><a href="#">Sweeter</a></li>
                                  <li><a href="#">Cardigan</a></li>
                                  <li><a href="#">Hoodie & Sweetshirt</a></li>
                                  <li><a href="#">Piyama & Jubah</a></li>
                                  <li><a href="#">T-shirt</a></li>
                                  <li><a href="#">Pakaian Renang</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="flexcol">
                              <div class="row">
                                <h4>Perhiasan</h4>
                                <ul>
                                  <li><a href="#">Anting-Anting</a></li>
                                  <li><a href="#">Bros</a></li>
                                  <li><a href="#">Cincin</a></li>
                                  <li><a href="#">Kalung</a></li>
                                  <li><a href="#">Gelang</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="flexcol">
                              <div class="row">
                                <h4>Kecantikan</h4>
                                <ul>
                                  <li><a href="#">Makeup & Kosmetik</a></li>
                                  <li><a href="#">Aksesoris Mandi</a></li>
                                  <li><a href="#">Skin Care</a></li>
                                  <li><a href="#">Hair Care</a></li>
                                  <li>
                                    <a href="#">Parfum dan Aromaterapi</a>
                                  </li>
                                  <li>
                                    <a href="#">Masker & Penutup Wajah</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <div class="flexcol">
                              <div class="row">
                                <h4>Kosmetik dan Tata Rias</h4>
                                <ul>
                                  <li><a href="#">Bedak</a></li>
                                  <li><a href="#">Lipstik</a></li>
                                  <li><a href="#">Pensil Mata</a></li>
                                  <li><a href="#">Pensil Alis</a></li>
                                  <li><a href="#">Pemerah Pipi</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="flexcol products">
                              <div class="row">
                                <div class="media">
                                  <div class="thumbnail object-cover">
                                    <a href="#">
                                      <img
                                        src="<?php echo _FOLDER_ROOT_; ?>web/public/assets/clients/img/products/apparel4.jpg"
                                        alt="Produk Paling Laris"
                                      />
                                    </a>
                                  </div>
                                </div>
                                <div class="text-content">
                                  <h4>Paling Laris!</h4>
                                  <a href="#" class="primary-button"
                                    >Beli Sekarang</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </nav>
              </div>
              <div class="right">
                <ul class="flexitem second-links">
                  <li class="mobile-hide">
                    <a href="#">
                      <div class="icon-large">
                        <i class="ri-heart-line"></i>
                      </div>
                      <div class="fly-item">
                        <span class="item-number">0</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="iscart">
                      <div class="icon-large">
                        <i class="ri-shopping-cart-line"></i>
                        <div class="fly-item">
                          <span class="item-number">0</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="header-main mobile-hide" style="background-color: white">
          <div class="container">
            <div class="wrapper flexitem">
              <div class="left">
              <h3 style="">Shopping Cart</h3>
              </div>
              <div class="right">
               
              </div>
            </div>
          </div>
        </div>
      </header>

<!-- <h1 style="">Shopping Cart</h1> -->
 <main>
    <div class="container">
        <div class="wrapper">
            <div class="myslider swiper">
                <div class="shopping-cart">
  
   <div class="column-labels">
     <label class="product-image">Image</label>
     <label class="product-details">Product</label>
     <label class="product-price">Price</label>
     <label class="product-quantity">Quantity</label>
     <label class="product-removal">Remove</label>
     <label class="product-line-price">Total</label>
   </div>
  
   <div class="product">
     <div class="product-image">
       <img src="images/nike.jpg">
     </div>
     <div class="product-details">
       <div class="product-title">Nike Flex Form TR Women's Sneaker</div>
       <p class="product-description"> It has a lightweight, breathable mesh upper with forefoot cables for a locked-down fit.</p>
     </div>
     <div class="product-price">12.99</div>
     <div class="product-quantity">
       <input type="number" value="2" min="1">
     </div>
     <div class="product-removal">
       <button class="remove-product">
         Remove
       </button>
     </div>
     <div class="product-line-price">25.98</div>
   </div>
  
   <div class="product">
     <div class="product-image">
       <img src="images/adidas.jpg">
     </div>
     <div class="product-details">
       <div class="product-title">ULTRABOOST UNCAGED SHOES</div>
       <p class="product-description">Born from running culture, these men's shoes deliver the freedom of a cage-free design</p>
     </div>
     <div class="product-price">45.99</div>
     <div class="product-quantity">
       <input type="number" value="1" min="1">
     </div>
     <div class="product-removal">
       <button class="remove-product">
         Remove
       </button>
     </div>
     <div class="product-line-price">45.99</div>
   </div>
  
   <div class="totals">
     <div class="totals-item">
       <label>Subtotal</label>
       <div class="totals-value" id="cart-subtotal">71.97</div>
     </div>
     <div class="totals-item">
       <label>Tax (5%)</label>
       <div class="totals-value" id="cart-tax">3.60</div>
     </div>
     <div class="totals-item">
       <label>Shipping</label>
       <div class="totals-value" id="cart-shipping">15.00</div>
     </div>
     <div class="totals-item totals-item-total">
       <label>Grand Total</label>
       <div class="totals-value" id="cart-total">90.57</div>
     </div>
   </div>
        
       <button class="checkout">Checkout</button>
  
                </div>
            </div>
        </div>
    </div>
 </main>
    <!-- Script JS -->
    <!-- <script src="<?php echo _FOLDER_ROOT_; ?>/public/assets/clients/cart.js"></script> -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script type="text/javascript">
 
</script>   
</body>
</html>