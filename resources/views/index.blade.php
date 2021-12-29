@extends('layouts.appecom')

@section('content')
  

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                
               @include('departments')
                
                

                <div class="col-lg-9">
                   
               @include('search')


               
    @if (isset($s_cats))
    @include('subcats')
@else
<div class="hero__item set-bg" data-setbg="/img/hero/banner.jpg">
    <div class="hero__text">
        <span>FRUIT FRESH</span>
        <h2>Vegetable <br />100% Organic</h2>
        <p>Free Pickup and Delivery Available</p>
        <a href="#" class="primary-btn">SHOP NOW</a>
    </div>
</div>
@endif
                   

                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->


    @if (isset($s_cats))
    
    @else
        @include('product_s')
    @endif
 
    
@endsection




@section('scripts')
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>
<script>
    

    ///////////////////////////////////////////////////////////////////////////////

    $(document).on("click", ".loadmore", function(e){
        loadmore($(this).attr('data-id'));
        
    });
    
    function loadmore($id){
        
       // $(".load").append($id);
       
    $.ajax({
    type: "POST",
    url: "load_products",
    data: {'_token': $('meta[name="_token"]').attr('content'), 'id':$id }, 
        success: function(data){
            console.log(data);
            $('.loadmore').attr('data-id',data[0]);
            $(".load").append(data['1']);
        }
    });
    
    
    
    }

    ///////////////////////////////////////////////////////////////////////////////

</script>

@endsection