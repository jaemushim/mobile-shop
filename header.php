<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    

    <!-- Bootstrap CDN -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />

    <!-- Owl Carousel CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous"
    />

    <!-- Font Awesome CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
      integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
      crossorigin="anonymous"
    />

    <!-- style Css -->
    <link rel="stylesheet" href="style.css" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="custom.css" />

    <?php
    // require function.php file
    require ('function.php');
    ?>
 

  </head>
  <body>
    <!-- Header -->
    <header>
      <!-- stript -->
      <div class="stript bg-light py-2 d-none d-md-block">
        <div class="container-lg">
          <div class="d-flex justify-content-end ml-auto color-333">
            <span class="border-right px-3 font-size-12"
              ><a href="">로그인</a></span
            >
            <span class="border-right px-3 font-size-12"
              ><a href="">회원가입</a></span
            >
            <span class="border-right px-3 font-size-12"
              ><a href="">배송조회</a></span
            >
            <span class="px-3 font-size-12 position-relative">
              <a href="cart.php">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                &nbsp;장바구니&nbsp;
                <span
                  class="rounded-pill color-primary-bg text-white position-absolute"
                  style="padding: 0.04rem 0.4rem"
                  >  <?php echo count($cart->getData()) ;
                  ?></span
                >
              </a>
            </span>
          </div>
        </div>
      </div>

      <!-- search area -->
      <div class="search-area p-2 d-none d-md-block">
        <div class="container-lg">
          <div class="row justify-content-between align-items-center px-3">
            <!-- logo -->
            <a href="index.php">
              <img
                src="img/logo.png"
                class=""
                style="width: 160px; height: 50px"
                alt=""
              />
            </a>

            <!-- search form -->
            <form
              class="form-inline position-relative d-none d-md-inline-block justify-content-between align-items-center md-form form-sm border rounded-pill"
              style="
                width: 30%;
                height: 30px;
                border: 1px solid #aaa !important;
              "
            >
              <input
                class="ml-3 border-0 font-size-12"
                style="line-height: 17px; width: 80%"
                type="text"
                placeholder="검색어를 입력해주세요."
                aria-label="Search"
              />
              <i
                class="fas fa-search p-1 color-777 mr-2 font-size-14"
                style="position: absolute; right: 0; top: 3px"
                aria-hidden="true"
              ></i>
            </form>
            <!-- banner-mini -->
            <img
              src="img/banner-mini.png"
              class="img-fluid d-none d-md-block"
              style="width: 160px; height: 50px"
              alt=""
            />
          </div>
        </div>
      </div>

      <!-- Main Nav -->
      <nav class="navbar navbar-expand-md p-0 px-2">
        <div class="container-lg">
          <button
            class="navbar-toggler p-0 align-self-center"
            type="button"
            data-toggle=""
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon d-md-none">
              <div id="nav-icon3">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </span>
          </button>
          <a class="navbar-brand m-auto pr-4 d-md-none" href="#"
            ><img src="img/logo.png" style="height: 50px" alt=""
          /></a>

          <!-- Mobile Nav -->
          <div class="mobile-nav d-md-none" id="navbarSupportedContent">
            <ul
              class="navbar-nav justify-content-between md-w-100 font-weight-bold p-3"
            >
              <li class="nav-item">
                <a class="nav-link color-555 font-nanumgothic" href="#"
                  >통신사별</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link color-555 font-nanumgothic" href="#"
                  >제조사별</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link color-555 font-nanumgothic" href="#"
                  >사전예약</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link color-555 font-nanumgothic" href="#"
                  >이용방법</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link color-555 font-nanumgothic" href="#"
                  >구매후기</a
                >
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle color-555 font-nanumgothic outline-0"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  고객센터
                </a>
                <div
                  class="dropdown-menu border-0"
                  aria-labelledby="navbarDropdown"
                >
                  <a class="dropdown-item" href="#">Q & A</a>
                  <a class="dropdown-item" href="#">문의게시판</a>
                  <a class="dropdown-item" href="#">공지사항</a>
                </div>
              </li>
            </ul>
            <div class="mobile-bottom p-3 text-muted">
              <h6 class="font-weight-normal">Login</h6>
              <h6 class="font-weight-normal mt-3">Cart</h6>
              <h6 class="font-weight-normal mt-3">Order</h6>
              <h6 class="font-weight-normal mt-3">Mypage</h6>
            </div>
            <div class="social-icon p-3">
              <img src="img/facebook.png" alt="" />
              <img src="img/instagram.png" alt="" />
              <img src="img/youtube.png" alt="" />
              <img src="img/kakaostory.png" alt="" />
            </div>
          </div>

          <div
            class="collapse navbar-collapse"
            style="border-top: 1px solid #f2f2f2"
          >
            <ul
              class="navbar-nav justify-content-between md-w-100 font-weight-bold"
            >
              <li class="nav-item">
                <a class="nav-link color-555" href="#">통신사별</a>
              </li>
              <li class="nav-item">
                <a class="nav-link color-555" href="#">제조사별</a>
              </li>
              <li class="nav-item">
                <a class="nav-link color-555" href="#">사전예약</a>
              </li>
              <li class="nav-item">
                <a class="nav-link color-555" href="#">이용방법</a>
              </li>
              <li class="nav-item">
                <a class="nav-link color-555" href="#">구매후기</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle color-555"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  고객센터
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Q & A</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">문의게시판</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">공지사항</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

       <!-- Main -->
   <main>