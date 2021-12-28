@extends('layouts.app')

@section('content')


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
<a style="margin-top:15px;"   data-toggle="modal" data-target="#addservice" class="btn btn-success btn-get-started scrollto">Add Service</a>
      
          <p>{{ $setups[1]->sec1 }}</p>
        </div>

    
        <div class="row"> 
        
@forelse ($service as $service_)
    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" style="margin-top: 10px;" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-service"></i></div>
              <h4><a target="_blank" href="">{{ $service_->sec2 }}</a></h4>
              <p>{{ $service_->sec3 }}</p>
            
            <a style="margin-top:15px;"   data-toggle="modal" data-target="#editservice" class="edits btn btn-success btn-get-started scrollto">
              
              <input class="id" type="hidden" value="{{ $service_->id }}">
              <input class="sec2" type="hidden" value="{{ $service_->sec2 }}">
              <input class="sec3" type="hidden" value="{{ $service_->sec3 }}">
              Edit
            </a>
           <a style="margin-top:15px;"   data-toggle="modal" data-target="#dele" class="del btn btn-danger btn-get-started scrollto"><input class="id" type="hidden" value="{{ $service_->id }}">Delete</a>
      
            </div>   
          </div>    
       
@empty
No Services
@endforelse

        </div>

        <a style="margin-top:15px;"   data-toggle="modal" data-target="#edit" class="btn btn-success btn-get-started scrollto">Edit Page Text</a>
        {{-- <a style="margin-top:15px;"   data-toggle="modal" data-target="#uploadCropImage" class="btn btn-success btn-get-started scrollto">crop</a> --}}
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


@endsection

@include('service.edit')
@include('service.add')
@include('service.editservice')
@include('service.delete')
@include('imgcrop')

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