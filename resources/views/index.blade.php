<!DOCTYPE html>

  @include("layouts/head")
<body>
  <div class="hero_area">
     @include("layouts/header")
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="detail-box">
                    <div>
                      <h1>
                        The World’s Leading 
                        <br>
                        <span>
                          ATS-compliant resume writing service
                        </span>
                      </h1>
                      <p>
                        An effective ATS-compliant resume <br>
                        A highly effective modern resume that tells your career story<br>
                        We’ll craft your resume that gets more job interviews, guaranteed!<br>
                      </p>
                      <div class="btn-box">
                        <a href="{{ route('register.perform') }}" class="btn-1">
                          Get started
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <
      </div>
    </section>
    <!-- end slider section -->
  </div>
  
   <!-- services -->
  <div class="services reveal fade-right" style="background: white;">
      <h1>TRUSTED BY PROFESSIONALS FROM</h1>
      <div class="cen">
        <div class="service">
          <img src="{{ asset('front/images/linkedin.png') }}" width="30%" height="30%" alt="">
        </div>
        <div class="service">
          <img src="{{ asset('front/images/yahoo.png') }}" width="30%" height="30%" alt="">
        </div>
        <div class="service">
          <img src="{{ asset('front/images/instagram.png') }}" width="30%" height="30%" alt="">
        </div>

        <div class="service">
          <img src="{{ asset('front/images/tesla.png') }}" width="30%" height="30%" alt="">
        </div>
        <div class="service">
          <img src="{{ asset('front/images/upwork.png') }}" width="30%" height="30%" alt="">
        </div>
      </div>
    </div>
  <!-- end services -->
  <!-- ats section -->
  <section class="about_section layout_padding"  style="background:#f1f1f1">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box reveal">
            <div class="heading_container">
              <h2>
                ATS-compliant Resume Writing
              </h2>
            </div>
            <p>
              Nearly 99 percent of Fortune 500 companies utilize ATS software to optimize their recruiting processes today. However, what started as a recruiting solution for major employers has evolved into a tool used by businesses of all sizes<br>
              <h5>Develop a powerful accomplishment statement</h5><br>
              <h5>Write knowledge rich executive summary</h5><br>
              <h5>An optimal ATS friendly resume format</h5><br>
              <h5>Polish resume to attain maximum ATS Score</h5><br>
            </p>
            <a href="{{ route('register.perform') }}" >
              Get Started
            </a>
          </div>
        </div>
        <div class="col-md-6 reveal fade-right">
          <div class="img-box">
            <img src="{{ asset('front/images/ats-resume.JPEG') }}">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end ats section -->
   <!-- ats section -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="row reveal fade-left">
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{ asset('front/images/resume-writers.JPEG') }}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Our Writers
              </h2>
            </div>
            <p>
              Our team consists of highly professional certified writer across United States and UK with extensive experience in Human resources, Recruiting, Carrier Coaching, and job Search strategy.
            </p>
            <a href="{{ route('register.perform') }}">
              Get Started
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end ats section -->
  <!-- services -->
  <div class="services reveal fade-right">
      <h1>Our Services</h1>
      <div class="cen">
        <div class="service">
          <img src="{{ asset('front/images/basic.png') }}" width="30%" height="30%" alt="">
          
          <h2><b>Basic</b></h2>
          <h5>An ATS-optimized and keywords-rich resume that sets you apart.</h5>
        </div>

        <div class="service">
          <img src="{{ asset('front/images/standard.png') }}" width="30%" height="30%" alt="">
          
          <h2><b>Standard</b></h2>
          <h5>An ATS-optimized and keywords-rich resume and cover letter.</h5>
        </div>

        <div class="service">
          <img src="{{ asset('front/images/premium.png') }}" width="30%" height="30%" alt="">
          <h2><b>Premium</b></h2>
          <h5>An ATS-optimized resume, cover letter and keyword-rich LinkedIn.</h5>
        </div>
      </div>
    </div>
  <!-- end services -->
 
  <!--pricing -->
<div id="generic_price_table">   
<section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--PRICE HEADING START-->
                    <div class="price-heading clearfix">
                        <h1>Choose your package</h1>
                    </div>
                    <!--//PRICE HEADING END-->
                </div>
            </div>
        </div>
        <div class="container">
            
            <!--BLOCK ROW START-->
            <div class="row">
                <div class="col-md-4">
                <form method="post" action="{{ route('order.perform') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" name="plan" value="basic" />
                    <input type="hidden" name="price" value="50" />
                  <!--PRICE CONTENT START-->
                    <div class="generic_content clearfix">
                        
                        <!--HEAD PRICE DETAIL START-->
                        <div class="generic_head_price clearfix">
                        
                            <!--HEAD CONTENT START-->
                            <div class="generic_head_content clearfix">
                            
                              <!--HEAD START-->
                                <div class="head_bg"></div>
                                <div class="head">
                                    <span>Basic</span>
                                </div>
                                <!--//HEAD END-->
                                
                            </div>
                            <!--//HEAD CONTENT END-->
                            
                            <!--PRICE START-->
                            <div class="generic_price_tag clearfix">  
                                <span class="price">
                                    <span class="sign">$</span>
                                    <span class="currency">49</span>
                                    <span class="cent">.99</span>
                                </span>
                            </div>
                            <!--//PRICE END-->
                            
                        </div>                            
                        <!--//HEAD PRICE DETAIL END-->
                        
                        <!--FEATURE LIST START-->
                        <div class="generic_feature_list">
                          <ul>
                              <li><span><b>Professional resume </b></span>By your industry expert</li>
                                <li><span><b>Strategic Formatting </b></span>ATS-friendly formatting that grabs the recruiter’s attention</li>
                                <li><span><b>Keywords Optimized </b></span>Your resume will be ATS-optimized to be smashed by any recruiter’s software program</li>
                            </ul>
                        </div>
                        <!--//FEATURE LIST END-->
                        
                        <!--BUTTON START-->
                        <div class="generic_price_btn clearfix">
                          <a class="" href="{{ route('login.perform') }}">Order Now</a>
                        </div>
                        <!--//BUTTON END-->
                        
                    </div>
                    <!--//PRICE CONTENT END-->
                  </form>    
                </div>
                
                <div class="col-md-4">
                
                  <!--PRICE CONTENT START-->
                    <div class="generic_content active clearfix">
                        
                        <!--HEAD PRICE DETAIL START-->
                        <div class="generic_head_price clearfix">
                        
                            <!--HEAD CONTENT START-->
                            <div class="generic_head_content clearfix">
                            
                              <!--HEAD START-->
                                <div class="head_bg"></div>
                                <div class="head">
                                    <span>Standard</span>
                                </div>
                                <!--//HEAD END-->
                                
                            </div>
                            <!--//HEAD CONTENT END-->
                            
                            <!--PRICE START-->
                            <div class="generic_price_tag clearfix">  
                                <span class="price">
                                    <span class="sign">$</span>
                                    <span class="currency">79</span>
                                    <span class="cent">.99</span>
                                </span>
                            </div>
                            <!--//PRICE END-->
                            
                        </div>                            
                        <!--//HEAD PRICE DETAIL END-->
                        
                        <!--FEATURE LIST START-->
                        <div class="generic_feature_list">
                          <ul>
                              <li><span><b>Professional resume</b> </span>By your industry expert</li>
                                <li><span><b>Strategic Formatting</b> </span>ATS-friendly formatting that grabs the recruiter’s attention</li>
                                <li><span><b>Keywords Optimized</b> </span>Your resume will be ATS-optimized to be smashed by any recruiter’s software program</li>
                                <li><span><b>Cover Letter</b></span> 50% of recruiters are more interested to read resumes with cover letters</li>
                                <li><span><b>60-day interview guarantee</b></span></li>
                            </ul>
                        </div>
                        <!--//FEATURE LIST END-->
                        
                        <!--BUTTON START-->
                        <div class="generic_price_btn clearfix">
                          <a class="" href="{{ route('login.perform') }}">Order Now</a>
                        </div>
                        <!--//BUTTON END-->
                        
                    </div>
                    <!--//PRICE CONTENT END-->
                        
                </div>
                <div class="col-md-4" style="margin-bottom: 30px;">
                
                  <!--PRICE CONTENT START-->
                    <div class="generic_content clearfix">
                        
                        <!--HEAD PRICE DETAIL START-->
                        <div class="generic_head_price clearfix">
                        
                            <!--HEAD CONTENT START-->
                            <div class="generic_head_content clearfix">
                            
                              <!--HEAD START-->
                                <div class="head_bg"></div>
                                <div class="head">
                                    <span>PREMIUM</span>
                                </div>
                                <!--//HEAD END-->
                                
                            </div>
                            <!--//HEAD CONTENT END-->
                            
                            <!--PRICE START-->
                            <div class="generic_price_tag clearfix">  
                                <span class="price">
                                    <span class="sign">$</span>
                                    <span class="currency">99</span>
                                    <span class="cent">.99</span>
                                </span>
                            </div>
                            <!--//PRICE END-->
                            
                        </div>                            
                        <!--//HEAD PRICE DETAIL END-->
                        
                        <!--FEATURE LIST START-->
                        <div class="generic_feature_list">
                          <ul>
                              <li><span><b>Professional resume</b> </span>By your industry expert</li>
                                <li><span><b>Strategic Formatting</b> </span>ATS-friendly formatting that grabs the recruiter’s attention</li>
                                <li><span><b>Keywords Optimized </b></span>Your resume will be ATS-optimized to be smashed by any recruiter’s software program</li>
                                <li><span><b>Cover Letter</b></span> 50% of recruiters are more interested to read resumes with cover letters</li>
                                <li><span>60-day interview guarantee</span></li>
                                <li><span><b>LinkedIn profile </b></span>More than 90% of recruiters use Linkedin: we will rewrite it professionally</li>
                                <li><span><b>24/7</b></span> Support</li>
                            </ul>
                        </div>
                        <!--//FEATURE LIST END-->
                        
                        <!--BUTTON START-->
                        <div class="generic_price_btn clearfix">
                          <a class="" href="{{ route('login.perform') }}">Order Now</a>
                        </div>
                        <!--//BUTTON END-->
                        
                    </div>
                    <!--//PRICE CONTENT END-->
                        
                </div>
            </div>  
            <!--//BLOCK ROW END-->
            
        </div>
    </section>             
</div>
 <!--end pricing -->

  <!-- footer section -->
  @include("layouts/footer")
  
  <!-- footer section -->
    <link href="{{ asset('/front/js/jquery-3.4.1.min.js') }}" rel="stylesheet">  
    <link href="{{ asset('/front/js/bootstrap.js') }}" rel="stylesheet">
    <script type="text/javascript">
      function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 20;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);
    </script>
</body>

</html>