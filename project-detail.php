<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sumoualasalah</title>
  <link rel="icon" type="image/png" href="images/favicon.png" />
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link href="css/style.css" type="text/css" rel="stylesheet">
  <link href="css/aos.css" rel="stylesheet">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.4/css/lightgallery.css'>
  <style>
    .lg-toolbar-next:before {
      content: "";
    }

    .lg-toolbar-prev:before {
      content: "";
    }

    .lg-toolbar-zoom-in:before{
      content: '\e311';
    }
    .lg-toolbar-zoom-out:before{
      content: '\e312';
    }
    .lg-current .lg-img-wrap {
      overflow: hidden;
    }

    .lg-current .lg-img-wrap .lg-image {
      transition: transform 0.5s ease;
    }

    .lg-download, .lg-zoom-in{
      display: none;
    }

    .lg-toolbar-prev{
      margin-right: 55px;
    }

    .lg-close{
      position: absolute;
    right: 10px;
    }

    .lg-outer.lg-grab img.lg-object{
    cursor: default !important;
  }

    .zoomed {
      transform: scale(1.5); /* Adjust the scale factor as needed */
    }

  </style>
  <script>
    window.console = window.console || function (t) {};
  </script>
</head>

<body>

  <div class="spinnerContainer">
    <div class="spinner"></div>
  </div>
  <div class="bg-video-wrap">
    <img src="images/03/banner-image-ofpark-view.jpg" alt="" class="banner-img">


    <!-- navabr -->
    <nav class="navbar navbar-expand-lg navbar-dark main-navbar">
      <div class="container-fluid nav-width-container">

        <a class="navbar-brand nonsticky-logo" href="index.php"><img src="images/logo.png"></a>
        <a class="navbar-brand sticky-logo" href="index.php"><img src="images/logo1.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Homepage</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#service-section">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="project.php">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#about-section">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php">Blog</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>
          <div class="switch d-lg-none d-md-block">
            <input id="language-toggle1" class="check-toggle check-toggle-round-flat" type="checkbox">
            <label for="language-toggle1"></label>
            <span class="on">EN</span>
            <span class="off">ع</span>
          </div>
          <button type="button" class="btn-book d-lg-none d-md-block">BOOK YOUR APPOINTMENT</button>
        </div>

        <div class="switch d-lg-block d-md-none d-none">
          <input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox">
          <label for="language-toggle"></label>
          <span class="on">EN</span>
          <span class="off">ع</span>
        </div>
        <button type="button" class="btn-book d-lg-block d-md-none d-none">BOOK YOUR APPOINTMENT</button>


      </div>
    </nav>
    <!-- navabr close-->
  </div>



  <section class="project-detail-page">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="project-head" data-aos="fade-up" data-aos-duration="1000">
            <h2>PARK VIEW</h2>
            <div class="prjct-btns">

              <a href="#register-intrest-project"><button class="register-btn"><i
                    class="fa-regular fa-pen-to-square me-2"></i>Register Your Interest</button></a>
              <a class="download-br" href="images/03/Park-View-Oct20.pdf"><i
                  class="fa-solid fa-download me-2"></i>Download Brochure</a>
            </div>

          </div>
          <div class="project-details" data-aos="fade-up" data-aos-duration="1000">
            <div class="project-main">
              <img src="images/03/first-image.jpg" alt="" class="project-mainimg" data-aos="zoom-in"
                data-aos-duration="1000">
              <img src="images/03/park-view-logo@4x.png" alt="" class="project-logoimg" data-aos="zoom-in"
                data-aos-duration="2000">
            </div>
            <p>A safe and secure environment in Al Khobar City, characterized by total privacy and sparkle, in a
              terrific setting that encompasses all aspects of life quality. Park View is a strategically positioned
              residential development in Al Aziziyah, that allocates a staggering 54% of its area to accommodate its
              dwellers vital needs in green spaces and utilities. It adds more benefits to its competitive advantages,
              via modern designs, and various services, be it commercial, educational, or recreational, supported by an
              inclusive infra-structure network.</p>
          </div>
          <div class="project-head" data-aos="fade-up" data-aos-duration="1000">
            <h2>LIFE QUALITY</h2>
          </div>
          <div class="project-details" data-aos="fade-up" data-aos-duration="1000">
            <div class="project-main1" data-aos="zoom-in" data-aos-duration="1000">
              <img src="images/03/park-view.jpg" alt="">
              <img src="images/03/park-view-image.jpg" alt="">
            </div>
            <p>Park View design focuses on creating an attractive environment that adheres to the Life Quality Program
              Criteria - part of the national 2030 vision - through developing a healthy life style for citizens, by
              setting-up the necessary atmosphere and promoting their participations in cultural, recreational and sport
              activities.</p>

          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="project-number">
    <div class="container">
      <div class="row">
        <div class="col-md-4" data-aos="zoom-in" data-aos-duration="2000">
          <div class="pro-no">
            <h3>360.46</h3>
            <h6>BUILT UP AREA (SQM)</h6>
          </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-duration="2000">
          <div class="pro-no">
            <h3>350.78</h3>
            <h6>LAND AREA (SQM)</h6>
          </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-duration="2000">
          <div class="pro-no">
            <h3>4</h3>
            <h6>NO. OF TYPES</h6>
          </div>
        </div>

        <div class="col-md-4" data-aos="zoom-in" data-aos-duration="2000">
          <div class="pro-no">
            <h3>449-240</h3>
            <h6>DOWNLOAD PROJECT BROCHURE</h6>
          </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-duration="2000">
          <div class="pro-no">
            <h3>484</h3>
            <h6>Residential Units</h6>
          </div>
        </div>

        <div class="col-md-4" data-aos="zoom-in" data-aos-duration="2000">
          <div class="pro-no">
            <h3>280,000 ㎡</h3>
            <h6>TOTAL AREA</h6>
          </div>
        </div>
      </div>


    </div>
  </section>


  <section class="project-detail-page">
    <div class="container">
      <div class="row project-type-div">
        <div class="col-md-12">
          <div class="project-head mb-4" data-aos="fade-up" data-aos-duration="1000">
            <h2>PROJECT TYPE</h2>
          </div>
          <div class="project-tabs" data-aos="fade-up" data-aos-duration="1000">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-typea-tab" data-bs-toggle="pill" data-bs-target="#pills-typea"
                  type="button" role="tab" aria-controls="pills-typea" aria-selected="true">Type A</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-typeb-tab" data-bs-toggle="pill" data-bs-target="#pills-typeb"
                  type="button" role="tab" aria-controls="pills-typeb" aria-selected="false">Type B</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-typec-tab" data-bs-toggle="pill" data-bs-target="#pills-typec"
                  type="button" role="tab" aria-controls="pills-typec" aria-selected="false">Type C</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-typed-tab" data-bs-toggle="pill" data-bs-target="#pills-typed"
                  type="button" role="tab" aria-controls="pills-typed" aria-selected="false">Type D</button>
              </li>


            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-typea" role="tabpanel" aria-labelledby="pills-typea-tab">
                <div class="row">

                  <div class="col-xl-8 col-lg-12">
                    <div class="row gx-md-4 gx-2">
                      <div class="col-md-2 col-3">
                        <div id="thumbnailCarousel" class="carousel slide thumbnail-carousel" data-bs-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="images/05/plot1.jpeg" class="img-fluid thumbnail" onclick="changeMainImage(0)"
                                alt="Thumbnail 1">
                              <img src="images/05/plot2.jpeg" class="img-fluid thumbnail" onclick="changeMainImage(1)"
                                alt="Thumbnail 2">
                              <img src="images/05/plot3.jpeg" class="img-fluid thumbnail" onclick="changeMainImage(2)"
                                alt="Thumbnail 3">
                              <img src="images/05/plot4.jpeg" class="img-fluid thumbnail" onclick="changeMainImage(3)"
                                alt="Thumbnail 4">
                              <img src="images/05/plot1.jpeg" class="img-fluid thumbnail" onclick="changeMainImage(4)"
                                alt="Thumbnail 5">
                              <img src="images/05/plot2.jpeg" class="img-fluid thumbnail" onclick="changeMainImage(5)"
                                alt="Thumbnail 6">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#thumbnailCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"><i
                                class="fa-solid fa-angle-up"></i></span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#thumbnailCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"><i
                                class="fa-solid fa-angle-down"></i></span>
                          </button>
                        </div>
                      </div>
                      <div class="col-md-10 col-9">
                        <div id="mainCarousel" class="carousel slide main-carousel" data-bs-ride="carousel">
                          <div class="carousel-inner gallery-container">
                            <div class="carousel-item active gallery-item" data-src="images/05/plot1.jpeg" data-sub-html="">                        
                                <img src="images/05/plot1.jpeg" class="img-fluid main-image" alt="Main Image 1">                 
                            </div>
                            <div class="carousel-item gallery-item" data-src="images/05/plot2.jpeg" data-sub-html="">
                                <img src="images/05/plot2.jpeg" class="img-fluid main-image" alt="Main Image 2">
                            </div>
                            <div class="carousel-item gallery-item" data-src="images/05/plot3.jpeg" data-sub-html="">
                                <img src="images/05/plot3.jpeg" class="img-fluid main-image" alt="Main Image 3">
                            </div>
                            <div class="carousel-item gallery-item" data-src="images/05/plot4.jpeg" data-sub-html="">
                                <img src="images/05/plot4.jpeg" class="img-fluid main-image" alt="Main Image 4">
                            </div>
                            <div class="carousel-item gallery-item" data-src="images/05/plot1.jpeg" data-sub-html="">
                                <img src="images/05/plot1.jpeg" class="img-fluid main-image" alt="Main Image 5">
                            </div>
                            <div class="carousel-itemgallery-item" data-src="images/05/plot2.jpeg" data-sub-html="">
                                <img src="images/05/plot2.jpeg" class="img-fluid main-image" alt="Main Image 6">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"><i
                                class="fa-solid fa-angle-left"></i></span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"><i
                                class="fa-solid fa-angle-right"></i></span>
                          </button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="col-xl-4 plot-type-div">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="plot-type-bx">
                          <h3>452 SQM</h3>
                          <H6>PLOT AREA</H6>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="plot-type-bx">
                          <h3>466 SQM</h3>
                          <H6>BUILT UP AREA</H6>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="plot-type-bx">
                          <h3>15</h3>
                          <H6>FLOORS</H6>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="plot-type-bx">
                          <h3>4</h3>
                          <H6>NO OF BEDROOMS</H6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-typeb" role="tabpanel" aria-labelledby="pills-typeb-tab">
                <div class="row">

                  <div class="col-xl-8 col-lg-12">
                    <div class="row">
                      <div class="col-lg-2">
                        <div id="thumbnailCarousel1" class="carousel slide thumbnail-carousel" data-bs-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="images/05/plot1.jpeg" class="img-fluid thumbnail" onclick="changeMainImage1(0)"
                                alt="Thumbnail 1">
                              <img src="images/05/plot2.jpeg" class="img-fluid thumbnail" onclick="changeMainImage1(1)"
                                alt="Thumbnail 2">
                              <img src="images/05/plot3.jpeg" class="img-fluid thumbnail" onclick="changeMainImage1(2)"
                                alt="Thumbnail 3">
                              <img src="images/05/plot4.jpeg" class="img-fluid thumbnail" onclick="changeMainImage1(3)"
                                alt="Thumbnail 4">
                              <img src="images/05/plot1.jpeg" class="img-fluid thumbnail" onclick="changeMainImage1(4)"
                                alt="Thumbnail 5">
                              <img src="images/05/plot2.jpeg" class="img-fluid thumbnail" onclick="changeMainImage1(5)"
                                alt="Thumbnail 6">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#thumbnailCarousel1"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"><i
                                class="fa-solid fa-angle-up"></i></span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#thumbnailCarousel1"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"><i
                                class="fa-solid fa-angle-down"></i></span>
                          </button>
                        </div>
                      </div>
                      <div class="col-lg-10">
                        <div id="mainCarousel1" class="carousel slide main-carousel" data-bs-ride="carousel">
                          <div class="carousel-inner gallery-container">
                            <div class="carousel-item active gallery-item" data-src="images/05/plot1.jpeg" data-sub-html="">                        
                              <img src="images/05/plot1.jpeg" class="img-fluid main-image" alt="Main Image 1">                 
                            </div>
                            <div class="carousel-item gallery-item" data-src="images/05/plot2.jpeg" data-sub-html="">
                                <img src="images/05/plot2.jpeg" class="img-fluid main-image" alt="Main Image 2">
                            </div>
                            <div class="carousel-item gallery-item" data-src="images/05/plot3.jpeg" data-sub-html="">
                                <img src="images/05/plot3.jpeg" class="img-fluid main-image" alt="Main Image 3">
                            </div>
                            <div class="carousel-item gallery-item" data-src="images/05/plot4.jpeg" data-sub-html="">
                                <img src="images/05/plot4.jpeg" class="img-fluid main-image" alt="Main Image 4">
                            </div>
                            <div class="carousel-item gallery-item" data-src="images/05/plot1.jpeg" data-sub-html="">
                                <img src="images/05/plot1.jpeg" class="img-fluid main-image" alt="Main Image 5">
                            </div>
                            <div class="carousel-itemgallery-item" data-src="images/05/plot2.jpeg" data-sub-html="">
                                <img src="images/05/plot2.jpeg" class="img-fluid main-image" alt="Main Image 6">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel1"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"><i
                                class="fa-solid fa-angle-left"></i></span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel1"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"><i
                                class="fa-solid fa-angle-right"></i></span>
                          </button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="col-xl-4 plot-type-div">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="plot-type-bx">
                          <h3>452 SQM</h3>
                          <H6>PLOT AREA</H6>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="plot-type-bx">
                          <h3>466 SQM</h3>
                          <H6>BUILT UP AREA</H6>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="plot-type-bx">
                          <h3>15</h3>
                          <H6>FLOORS</H6>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="plot-type-bx">
                          <h3>4</h3>
                          <H6>NO OF BEDROOMS</H6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-typec" role="tabpanel" aria-labelledby="pills-typec-tab">
                <div class="row">

                  <div class="col-xl-8 col-lg-12">
                    <div class="row">
                      <div class="col-lg-2">
                        <div id="thumbnailCarousel2" class="carousel slide thumbnail-carousel" data-bs-ride="carousel">
                          <div class="carousel-inner gallery-container">
                            <div class="carousel-item active">
                              <img src="images/05/plot1.jpeg" class="img-fluid thumbnail" onclick="changeMainImage2(0)"
                                alt="Thumbnail 1">
                              <img src="images/05/plot2.jpeg" class="img-fluid thumbnail" onclick="changeMainImage2(1)"
                                alt="Thumbnail 2">
                              <img src="images/05/plot3.jpeg" class="img-fluid thumbnail" onclick="changeMainImage2(2)"
                                alt="Thumbnail 3">
                              <img src="images/05/plot4.jpeg" class="img-fluid thumbnail" onclick="changeMainImage2(3)"
                                alt="Thumbnail 4">
                              <img src="images/05/plot1.jpeg" class="img-fluid thumbnail" onclick="changeMainImage2(4)"
                                alt="Thumbnail 5">
                              <img src="images/05/plot2.jpeg" class="img-fluid thumbnail" onclick="changeMainImage2(5)"
                                alt="Thumbnail 6">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#thumbnailCarousel2"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"><i
                                class="fa-solid fa-angle-up"></i></span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#thumbnailCarousel2"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"><i
                                class="fa-solid fa-angle-down"></i></span>
                          </button>
                        </div>
                      </div>
                      <div class="col-lg-10">
                        <div id="mainCarousel2" class="carousel slide main-carousel" data-bs-ride="carousel">
                          <div class="carousel-inner gallery-container">
                            <div class="carousel-item active gallery-item" data-src="images/05/plot1.jpeg" data-sub-html="">                        
                              <img src="images/05/plot1.jpeg" class="img-fluid main-image" alt="Main Image 1">                 
                            </div>
                            <div class="carousel-item gallery-item" data-src="images/05/plot2.jpeg" data-sub-html="">
                                <img src="images/05/plot2.jpeg" class="img-fluid main-image" alt="Main Image 2">
                            </div>
                            <div class="carousel-item gallery-item" data-src="images/05/plot3.jpeg" data-sub-html="">
                                <img src="images/05/plot3.jpeg" class="img-fluid main-image" alt="Main Image 3">
                            </div>
                            <div class="carousel-item gallery-item" data-src="images/05/plot4.jpeg" data-sub-html="">
                                <img src="images/05/plot4.jpeg" class="img-fluid main-image" alt="Main Image 4">
                            </div>
                            <div class="carousel-item gallery-item" data-src="images/05/plot1.jpeg" data-sub-html="">
                                <img src="images/05/plot1.jpeg" class="img-fluid main-image" alt="Main Image 5">
                            </div>
                            <div class="carousel-itemgallery-item" data-src="images/05/plot2.jpeg" data-sub-html="">
                                <img src="images/05/plot2.jpeg" class="img-fluid main-image" alt="Main Image 6">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel2"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"><i
                                class="fa-solid fa-angle-left"></i></span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel2"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"><i
                                class="fa-solid fa-angle-right"></i></span>
                          </button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="col-xl-4 plot-type-div">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="plot-type-bx">
                          <h3>452 SQM</h3>
                          <H6>PLOT AREA</H6>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="plot-type-bx">
                          <h3>466 SQM</h3>
                          <H6>BUILT UP AREA</H6>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="plot-type-bx">
                          <h3>15</h3>
                          <H6>FLOORS</H6>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="plot-type-bx">
                          <h3>4</h3>
                          <H6>NO OF BEDROOMS</H6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-typed" role="tabpanel" aria-labelledby="pills-typed-tab">
                <div class="row">

                  <div class="col-xl-8 col-lg-12">
                    <div class="row">
                      <div class="col-lg-2">
                        <div id="thumbnailCarousel3" class="carousel slide thumbnail-carousel" data-bs-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="images/05/plot1.jpeg" class="img-fluid thumbnail" onclick="changeMainImage3(0)"
                                alt="Thumbnail 1">
                              <img src="images/05/plot2.jpeg" class="img-fluid thumbnail" onclick="changeMainImage3(1)"
                                alt="Thumbnail 2">
                              <img src="images/05/plot3.jpeg" class="img-fluid thumbnail" onclick="changeMainImage3(2)"
                                alt="Thumbnail 3">
                              <img src="images/05/plot4.jpeg" class="img-fluid thumbnail" onclick="changeMainImage3(3)"
                                alt="Thumbnail 4">
                              <img src="images/05/plot1.jpeg" class="img-fluid thumbnail" onclick="changeMainImage3(4)"
                                alt="Thumbnail 5">
                              <img src="images/05/plot2.jpeg" class="img-fluid thumbnail" onclick="changeMainImage3(5)"
                                alt="Thumbnail 6">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#thumbnailCarousel3"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"><i
                                class="fa-solid fa-angle-up"></i></span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#thumbnailCarousel3"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"><i
                                class="fa-solid fa-angle-down"></i></span>
                          </button>
                        </div>
                      </div>
                      <div class="col-lg-10">
                        <div id="mainCarousel3" class="carousel slide main-carousel" data-bs-ride="carousel">
                          <div class="carousel-inner gallery-container">
                            <div class="carousel-item active gallery-item" data-src="images/05/plot1.jpeg" data-sub-html="">                        
                              <img src="images/05/plot1.jpeg" class="img-fluid main-image" alt="Main Image 1">                 
                            </div>
                            <div class="carousel-item gallery-item" data-src="images/05/plot2.jpeg" data-sub-html="">
                                <img src="images/05/plot2.jpeg" class="img-fluid main-image" alt="Main Image 2">
                            </div>
                            <div class="carousel-item gallery-item" data-src="images/05/plot3.jpeg" data-sub-html="">
                                <img src="images/05/plot3.jpeg" class="img-fluid main-image" alt="Main Image 3">
                            </div>
                            <div class="carousel-item gallery-item" data-src="images/05/plot4.jpeg" data-sub-html="">
                                <img src="images/05/plot4.jpeg" class="img-fluid main-image" alt="Main Image 4">
                            </div>
                            <div class="carousel-item gallery-item" data-src="images/05/plot1.jpeg" data-sub-html="">
                                <img src="images/05/plot1.jpeg" class="img-fluid main-image" alt="Main Image 5">
                            </div>
                            <div class="carousel-itemgallery-item" data-src="images/05/plot2.jpeg" data-sub-html="">
                                <img src="images/05/plot2.jpeg" class="img-fluid main-image" alt="Main Image 6">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel3"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"><i
                                class="fa-solid fa-angle-left"></i></span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel3"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"><i
                                class="fa-solid fa-angle-right"></i></span>
                          </button>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="col-xl-4 plot-type-div">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="plot-type-bx">
                          <h3>452 SQM</h3>
                          <H6>PLOT AREA</H6>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="plot-type-bx">
                          <h3>466 SQM</h3>
                          <H6>BUILT UP AREA</H6>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="plot-type-bx">
                          <h3>15</h3>
                          <H6>FLOORS</H6>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="plot-type-bx">
                          <h3>4</h3>
                          <H6>NO OF BEDROOMS</H6>
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

      <div class="row">
        <div class="col-md-12">
          <div class="project-head" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-center-class">OUR PARTNERS</h2>
          </div>
          <div class="image-client-logo d-flex align-items-center">
            <ul>
              <li><img src="images/partner1.png"></li>
              <li><img src="images/partner2.png"></li>
              <li><img src="images/partner3.png"></li>
            </ul>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="register-intrest-project" class="project-register d-flex align-items-center">
    <div class="container">

      <div class="register-box">
        <h2>Register your interest</h2>
        <p>For all inquiries related to Retal projects, please call us at the toll-free number <span>1234567890</span>.
          If calling from outside of the KSA please contact on <span>966 1234567890</span></p>

        <div>
          <div class="row">
            <div class="col-lg-6">
              <input type="text" class="input-type-box" placeholder="First name">
            </div>
            <div class="col-lg-6">
              <input type="text" class="input-type-box" placeholder="Last name">
            </div>
            <div class="col-lg-12">
              <input type="text" class="input-type-box" placeholder="Email">
            </div>

            <div class="col-lg-12">
              <input type="text" class="input-type-box" placeholder="Mobile number">
            </div>

            <div class="col-lg-12">
              <select class="form-select input-type-box" aria-label="Default select example">
                <option selected>Request types</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>

            <div class="col-lg-12"><button type="button" class="send-button">Submit</button></div>
          </div>
        </div>
      </div>


    </div>
  </section>
  <section class="google-map project-map">
    <div class="container-fluid">
      <div class="row">



        <div class="col-xl-12 col-lg-12 project-map-sec">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3577.0270026281196!2d50.215920388696134!3d26.293224627202935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49e834405bf5ab%3A0x8ffbdb9d75ed40c5!2s7575%20Prince%20Turkey%20Street%2C%20Alkurnaish%2C%20Al%20Khobar%2034414%2C%20Saudi%20Arabia!5e0!3m2!1sen!2sin!4v1704711224318!5m2!1sen!2sin"
            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

      </div>
    </div>

  </section>



  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="footer-ads">
            <img src="images/logo-f.png" alt="" class="footer-logo">
            <h6>Kingdom of Saudi Arabia, <br>
              Al-Khobar Office: 7575 Prince Turki Road,<br>
              Corniche District, Postal Code: 34413 Al-Khobar</h6>
            <button class="footer-btn" type="button">
              Book Your Appointment
            </button>
            <h5><a href="tel:920022076"><img src="images/call.svg" alt=""><span>920022076</span></a></h5>
            <h5><a href="mailto:info@sumoualasalah.com"><img src="images/mail.svg"
                  alt=""><span>info@sumoualasalah.com</span></a></h5>
            <ul class="social-media">
              <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="quick-link">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="blog.php">Blog</a></li>
              <li><a href="project.php">Project</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-5">
          <form class="footer-form">
            <input type="text" placeholder="Name" class="form-control">
            <input type="email" placeholder="E-Mail" class="form-control">
            <input type="tel" placeholder="Phone" class="form-control">
            <textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Your Message Here"></textarea>
            <button class="ftr-btn" type="submit">
              Submit
            </button>

          </form>
        </div>
      </div>

    </div>
  </div>

  <div class="bottom-icons">
    <a href="#" data-bs-toggle="modal" data-bs-target="#mail-us">
      <div class="mail"><i class="fa-regular fa-envelope"></i></div>
    </a>
    <a href="https://wa.me/" target="_blank">
      <div class="whatspp"><i class="fa-brands fa-whatsapp"></i></div>
    </a>
  </div>

  <div class="modal fade modal-mailus" id="mail-us" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body p-0">
          <div class="row m-0">
            <div class="col-md-12 p-0">
              <div class="get-intouch" data-aos="fade-left" data-aos-duration="1000">
                <h3>Get In Touch</h3>
                <form action="" class="contact-form">
                  <input type="text" placeholder="Name" class="form-control">
                  <input type="email" placeholder="E-Mail" class="form-control">
                  <input type="tel" placeholder="Phone" class="form-control">
                  <textarea name="" id="" cols="30" rows="4" class="form-control"
                    placeholder="Your Message Here"></textarea>
                  <button class="submit-btn mt-2" type="submit">Submit</button>
                </form>
              </div>
            </div>

          </div>


        </div>

      </div>
    </div>
  </div>


  <script src="https://kit.fontawesome.com/16b0815225.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/aos.js"></script>

  <script>
    $(function () {
      setTimeout(function () {
        $(".spinnerContainer").hide();
      }, 1000)

    })
  </script>
  <script>
    $('.partner-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      autoplay: true,
      autoplayTimeout: 6000,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      responsive: {
        0: {
          items: 2,
        },
        700: {
          items: 3,
        },
        1220: {
          items: 5,
        },
      }
    });
  </script>
  <script>
    {
      const header = document.querySelector(".main-navbar");
      const toggleClass = "is-sticky";

      window.addEventListener("scroll", () => {
        const currentScroll = window.pageYOffset;
        if (currentScroll > 300) {
          header.classList.add(toggleClass);
        } else {
          header.classList.remove(toggleClass);
        }
      });
    }
  </script>
  <script>
    AOS.init({
      disable: 'mobile'
    });
  </script>
  <script>
    function changeMainImage(index) {
      document.querySelectorAll('#mainCarousel .carousel-inner .carousel-item').forEach(item => {
        item.classList.remove('active');
      });
      document.getElementById('mainCarousel').querySelectorAll('.carousel-inner .carousel-item')[index].classList.add(
        'active');
    }

    function changeMainImage1(index) {
      document.querySelectorAll('#mainCarousel1 .carousel-inner .carousel-item').forEach(item => {
        item.classList.remove('active');
      });
      document.getElementById('mainCarousel1').querySelectorAll('.carousel-inner .carousel-item')[index].classList.add(
        'active');
    }

    function changeMainImage2(index) {
      document.querySelectorAll('#mainCarousel2 .carousel-inner .carousel-item').forEach(item => {
        item.classList.remove('active');
      });
      document.getElementById('mainCarousel2').querySelectorAll('.carousel-inner .carousel-item')[index].classList.add(
        'active');
    }

    function changeMainImage3(index) {
      document.querySelectorAll('#mainCarousel3 .carousel-inner .carousel-item').forEach(item => {
        item.classList.remove('active');
      });
      document.getElementById('mainCarousel3').querySelectorAll('.carousel-inner .carousel-item')[index].classList.add(
        'active');
    }
  </script>

  <script>
    $(document).ready(function () {
      var isColumn = true;

      $('#thumbnailCarousel .carousel-control-prev').on('click', function () {
        isColumn = true;
        updateThumbnailCarouselDirection();
      });

      $('#thumbnailCarousel .carousel-control-next').on('click', function () {
        isColumn = false;
        updateThumbnailCarouselDirection();
      });

      $('#thumbnailCarousel1 .carousel-control-prev').on('click', function () {
        isColumn = true;
        updateThumbnailCarouselDirection();
      });

      $('#thumbnailCarousel1 .carousel-control-next').on('click', function () {
        isColumn = false;
        updateThumbnailCarouselDirection();
      });

      $('#thumbnailCarousel2 .carousel-control-prev').on('click', function () {
        isColumn = true;
        updateThumbnailCarouselDirection();
      });

      $('#thumbnailCarousel2 .carousel-control-next').on('click', function () {
        isColumn = false;
        updateThumbnailCarouselDirection();
      });

      $('#thumbnailCarousel3 .carousel-control-prev').on('click', function () {
        isColumn = true;
        updateThumbnailCarouselDirection();
      });

      $('#thumbnailCarousel3 .carousel-control-next').on('click', function () {
        isColumn = false;
        updateThumbnailCarouselDirection();
      });

      function updateThumbnailCarouselDirection() {
        var direction = isColumn ? 'column' : 'column-reverse';
        $('#thumbnailCarousel .carousel-inner').css('flex-direction', direction);
      }
    });
  </script>

  <script id="rendered-js" type="module">
    import lightGallery from "https://cdn.skypack.dev/lightgallery@2.0.0-beta.4";

import lgZoom from "https://cdn.skypack.dev/lightgallery@2.0.0-beta.4/plugins/zoom";

const $galleryContainer = document.querySelector(".gallery-container");

const customButtons = `
        <button type="button" id="lg-toolbar-prev" aria-label="Previous slide" class="lg-toolbar-prev lg-icon"></button>
        <button type="button" id="lg-toolbar-next" aria-label="Next slide" class="lg-toolbar-next lg-icon"></button>
        <button type="button" id="lg-toolbar-zoom-in" aria-label="Zoom in" class="lg-toolbar-zoom-in lg-icon" onclick="zoom()"></button>
        <button type="button" id="lg-toolbar-zoom-out" aria-label="Zoom out" class="lg-toolbar-zoom-out lg-icon" onclick="zoomout()"></button>
      `;
$galleryContainer.addEventListener("lgInit", event => {
  const pluginInstance = event.detail.instance;

  const $toolbar = pluginInstance.outer.find(".lg-toolbar");
  $toolbar.prepend(customButtons);
  document.getElementById("lg-toolbar-prev").addEventListener("click", () => {
    pluginInstance.goToNextSlide();
  });
  document.getElementById("lg-toolbar-next").addEventListener("click", () => {

    pluginInstance.goToPrevSlide();
  });

});



lightGallery($galleryContainer, {
  speed: 500,
  controls: false,
  enableDrag: false,

});

    </script>

<script>
  function zoom() {
    const img = document.querySelector('.lg-current .lg-img-wrap .lg-image');
    const currentHeight = img.clientHeight;
    const newHeight = currentHeight + 30;

    if (newHeight <= 1400) {
      img.style.height = `${newHeight}px`;
    }
  }

  function zoomout() {
    const img = document.querySelector('.lg-current .lg-img-wrap .lg-image');
    const currentHeight = img.clientHeight;
    const newHeight = currentHeight - 30;

    if (newHeight >= 400) {
      img.style.height = `${newHeight}px`;
    }
  }
</script>

</body>

</html>