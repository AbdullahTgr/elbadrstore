@extends('layouts.app')

@section('content')
 <!-- ======= Cliens Section ======= -->
 <section id="cliens" class="cliens section-bg">
  <div class="container">
    <input type="hidden" value="" class="imgdest">
    <input type="hidden" value="" class="fullimg">
    <div class="row">
<label for="itf" class="imgl col-lg-2 col-md-4 col-6 d-flex">
  <div class=" align-items-center justify-content-center">
        <img src="sty/assets/img/clients/client-1.png" class="img-fluid " alt="">
      </div>
</label>
      

<label for="itf" class="imgl col-lg-2 col-md-4 col-6 d-flex ">
   <div class="align-items-center justify-content-center">
        <img src="sty/assets/img/clients/client-2.png" class="img-fluid" alt="">
      </div>
</label>
      
<label for="itf" class="imgl col-lg-2 col-md-4 col-6 d-flex ">
   <div class="align-items-center justify-content-center">
        <img src="sty/assets/img/clients/client-3.png" class="img-fluid" alt="">
      </div>
</label>

<label for="itf" class="imgl col-lg-2 col-md-4 col-6 d-flex ">
   <div class="align-items-center justify-content-center">
        <img src="sty/assets/img/clients/client-4.png" class="img-fluid" alt="">
      </div>
</label>
      
<label for="itf" class="imgl col-lg-2 col-md-4 col-6 d-flex ">
  <div class="align-items-center justify-content-center">
        <img src="sty/assets/img/clients/client-5.png" class="img-fluid" alt="">
      </div>
</label>

<label for="itf" class="imgl col-lg-2 col-md-4 col-6 d-flex ">
  <div class="align-items-center justify-content-center">
        <img src="sty/assets/img/clients/client-6.png" class="img-fluid" alt="">
      </div>
</label>

     

     

     

      

      

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
<a href=""  data-toggle="modal" data-target="#edit_l" >Edit</a>
          </div>
          
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>{{ $about->sec5 }}</p>
            <a target="_blank" href="{{ asset($about->sec6) }}" class="btn-learn-more">Learn More</a>
            
<a href=""  data-toggle="modal" data-target="#edit_r" >Edit</a>
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
              <a href=""  data-toggle="modal" data-target="#editabout_bottom" >Edit</a>
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
              <a href=""  data-toggle="modal" data-target="#editabout_bottom_questions" >Edit</a>
            </div>

          </div>
          <label for="itf" class="imgl  ">
            Change Image
            <div class="align-items-center justify-content-center" style="width: 100px">
                  <img src="{{ $about->sec16 }}" class="img-fluid" alt="">
                </div>
          </label>
          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("{{ $about->sec16 }}");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

@endsection


@section('scripts')
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js" integrity="sha512-h9kKZlwV1xrIcr2LwAPZhjlkx+x62mNwuQK5PAu9d3D+JXMNlGx8akZbqpXvp0vA54rz+DrqYVrzUGDMhwKmwQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>
<script type="text/javascript" src="{{asset('js/tasks.js')}}"></script>
<script>
     
     $(document).on('keyup', '#discount', function(){
      $(this).parent().find('#after_salary').val(Number( $(this).parent().find('#current_salary').val()) - Number($(this).val()));
     });

      $('.dataTable').DataTable();
      setInterval(function(){
        
        $('.previous a').html('<i class="bi bi-skip-backward"></i>');
      $('.next a').html('<i class="bi bi-skip-forward"></i>');
      },500);
    
</script>
@endsection

@include('imgcrop')
@include('about.edit')

