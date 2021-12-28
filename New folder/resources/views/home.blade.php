@extends('layouts.apphome')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>{{ $hme->sec1 }}</h1>
          <h2>{{ $hme->sec2 }}</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a target="_blank" href="{{ $hme->sec3 }}" class="btn-get-started scrollto">Get Started</a>
            <a target="_blank" href="{{ $hme->sec4 }}" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ asset('sty/assets/img/logo2.png') }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main" >

    <!-- ======= Cliens Section ======= -->
    <section id="cliens" class="cliens section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="sty/assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="sty/assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="sty/assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="sty/assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="sty/assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="sty/assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>{{ $about->sec1 }}</p>
            <ul>
              <li><i class="ri-check-double-line"></i> {{ $about->sec2 }}</li>
              <li><i class="ri-check-double-line"></i> {{ $about->sec3 }}</li>
              <li><i class="ri-check-double-line"></i> {{ $about->sec4 }}</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>{{ $about->sec5 }}</p>
            <a target="_blank" href="{{ asset($about->sec6) }}" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>{{ $about->sec7 }}<strong>{{ $about->sec8 }}</strong></h3>
              <p>{{ $about->sec9 }}</p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> {{ $about->sec10 }} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>{{ $about->sec11 }}</p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> {{ $about->sec12 }} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>{{ $about->sec13 }}</p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> {{ $about->sec14 }} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>{{ $about->sec15 }}</p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("{{ $about->sec16 }}");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

     

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>{{ $setups[1]->sec1 }}</p>
        </div>

    
        <div class="row">
        
@forelse ($service as $service_)
    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" style="margin-top: 10px;" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a target="_blank" href="">{{ $service_->sec2 }}</a></h4>
              <p>{{ $service_->sec3 }}</p>
            </div>
          </div>  
@empty
No Services
@endforelse

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>{{ $setups[1]->sec4 }}</h3>
            <p>{{ $setups[1]->sec5 }}</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="{{ $setups[1]->sec6 }}">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>{{ $service_t->sec10 }}</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
<li data-filter="*" class="filter-active">All</li>
@forelse ($portfoliocats as $portfoliocat)

<li data-filter=".{{ $portfoliocat->direct }}">{{ $portfoliocat->name }}</li>
@empty
    No Prev History
@endforelse
        </ul>
        
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
@forelse ($portfolio as $portfolio)
    <div class="col-lg-4 col-md-6 portfolio-item {{ $portfolio->sec5 }}">
            <div class="portfolio-img"><img src="{{ $portfolio->sec1 }}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>{{ $portfolio->sec2 }}</h4>
              <p>{{ $portfolio->sec3 }}</p>
              <a target="_blank" href="{{ $portfolio->sec1 }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a target="_blank" href="{{ $portfolio->sec4 }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
@empty
    No Prev Hist
@endforelse
          

       

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>{{ $team_t->sec1 }}</p>
        </div>

        <div class="row">
@forelse ($team as $team)
<div class="col-lg-6" style="margin-top:15px;">
  <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
    <div class="pic"><img src="{{ $team->sec9 }}" class="img-fluid" alt=""></div>
    <div class="member-info">
      <h4>{{ $team->sec2 }}</h4>
      <span>{{ $team->sec3 }}</span>
      <p>{{ $team->sec4 }}</p>
      <div class="social">
        <a target="_blank" href="{{ $team->sec5 }}"><i class="ri-twitter-fill"></i></a>
        <a target="_blank" href="{{ $team->sec6 }}"><i class="ri-facebook-fill"></i></a>
        <a target="_blank" href="{{ $team->sec7 }}"><i class="ri-instagram-fill"></i></a>
        <a target="_blank" href="{{ $team->sec8 }}"> <i class="ri-linkedin-box-fill"></i> </a>
      </div>
    </div>
  </div>
</div>
@empty
    No Team Founded Yet
@endforelse
         

        </div>

      </div>
    </section><!-- End Team Section -->

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>CONTACT US</h2>
          <p>{{ $contactus->sec1 }}</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>{{ $contactus->sec2 }}</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>{{ $contactus->sec3 }}</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>{{ $contactus->sec4 }}</p>
              </div>
              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>{{ $contactus->sec5 }}</p>
              </div>

              <iframe src="{{ $contactus->sec6 }}" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection
 