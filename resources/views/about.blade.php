@include('layouts/head');

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    @include('layouts/header');
    <!-- end header section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page when
              looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
              letters, as opposed to using 'Content here, content here', making it look like readable English. Many
              desktop publishing packages and web page editors now use Lorem Ipsum as their
            </p>
            <a href="">
              Get Started
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{ asset('front/images/about-img.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->

  <!-- info section -->


  <!-- end info section -->

  <!-- footer section -->
  @include('layouts/footer');
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>