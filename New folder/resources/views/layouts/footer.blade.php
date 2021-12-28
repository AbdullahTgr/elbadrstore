
  <!-- ======= Footer ======= -->
  <footer id="footer">

   
 
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Span</h3>
            <p>
              {{ $contactus->sec2 }}<br>
              <strong>Phone:</strong> {{ $contactus->sec4 }}<br>
              <strong>Email:</strong> {{ $contactus->sec3 }}<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>

              @forelse ($service->slice(0, 5) as $service)
              <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="{{ $service->id }}">{{ $service->sec2 }}</a></li>
              @empty
              No Services
              @endforelse
            </ul>
          </div>

          

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Span</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a target="_blank" href="https://www.facebook.com/spansoftware">Span Software</a>
      </div>

    
    
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a target="_blank" href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>