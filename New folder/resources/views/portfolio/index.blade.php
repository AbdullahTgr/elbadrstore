@extends('layouts.app')

@section('content')
<input type="hidden" value="" class="img_dest">
    <input type="hidden" value="" class="full_img">
    
<label for="it_f" class="img_l col-lg-2 col-md-4 col-6 d-flex btn btn-primary">
  Add Item
  <div class="align-items-center justify-content-center">
       <img src="" style="display: none" class="img-fluid base64data_" alt="">
     </div>
</label>


{{-- {{ public_path('port_imgs/1.png') }} --}}
 <section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">
    
    <input type="hidden" value="" class="imgdest">
    <input type="hidden" value="" class="fullimg">


 
    <div class="section-title">
      <h2>Portfolio</h2>
      <p>{{ $service_t->sec10 }}</p>
    </div>

    <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
<li data-filter="*" class="filter-active">All</li>
@forelse ($portfoliocats as $portfoliocat)

<li data-filter=".{{ $portfoliocat->direct }}">{{ $portfoliocat->name }}</li>
@empty
No Prev Hist
@endforelse
    </ul>
    
    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
@forelse ($portfolio as $portfolio)
<div class="col-lg-4 col-md-6 portfolio-item {{ $portfolio->sec5 }}">
        <div class="portfolio-img">
<label for="itf" class="imgl ">
  <div class=" align-items-center justify-content-center">
      <img src="{{ $portfolio->sec1 }}" class="img-fluid base64data" alt="">
  </div>          
</label> 
        </div>
        <div class="portfolio-info">
          <h4>{{ $portfolio->sec2 }}</h4>
          <p>{{ $portfolio->sec3 }}</p>
          <a target="_blank" href="{{ url($portfolio->sec1) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
          <a target="_blank" href="{{ url($portfolio->sec4) }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>

 <a style="margin-top:15px;"   data-toggle="modal" data-target="#editportfolio" class="editportfolio btn btn-success btn-get-started scrollto">
              
              <input class="id" type="hidden" value="{{ $portfolio->id }}">
              <input class="sec2" type="hidden" value="{{ $portfolio->sec2 }}">
              <input class="sec3" type="hidden" value="{{ $portfolio->sec3 }}">
              <input class="sec4" type="hidden" value="{{ $portfolio->sec4 }}">
              Edit
 </a>
<a style="margin-top:15px;"   data-toggle="modal" data-target="#dele" class="del btn btn-danger btn-get-started scrollto"><input class="id" type="hidden" value="{{ $portfolio->id }}">Delete</a>
      
        </div>
      </div>
@empty
No Prev Hist
@endforelse
       

   

    </div>

  </div>
</section><!-- End Portfolio Section -->


@include('portfolio.delete')
@include('portfolio.edit')
{{-- @include('portfolio.add') --}}


@include('imgcrop')
@include('imgcrop_upload')


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