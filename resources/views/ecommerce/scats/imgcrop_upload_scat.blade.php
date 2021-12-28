<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="_token" content="{{ csrf_token() }}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>
</head>
<style type="text/css">
img {
display: block;
max-width: 100%;
}
.preview {
overflow: hidden;
width: 400px; 
height: 400px;
margin: 10px;
border: 1px solid red;
}
.modal-lg{
max-width: 1000px !important;
}
</style>
<body>
<div class="container">
<input id="it_f" type="file" name="imag_e" style="display: none" class="imag_e tt_t">



</div>
<div class="modal fade" id="moda_l" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="modalLabel"></h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<div class="img-container">
<div class="row">
<div class="col-md-8">
<img id="imag_e" src="https://avatars0.githubusercontent.com/u/3456749">
</div>
<div class="col-md-4">
<div class="preview"></div>
</div>
</div>
</div>

<div class="port_inputs">
    
    
    Category Name
    <textarea class="form-control sec2" name="sec2" style="width: 100%"></textarea> 
    
    Category Description
    <textarea class="form-control sec3" name="sec3" style="width: 100%"></textarea> 
    
    اسم الفئة
    <textarea class="form-control sec2_ar" name="sec2_ar" style="width: 100%"></textarea> 
    
    تفاصيل
    <textarea class="form-control sec3_ar" name="sec3_ar" style="width: 100%"></textarea> 
    <input type="hidden" id="sec9_ar" value="@if(count($mcats)!=0){{ $mcats[0]->id }}@endif" class="sec9_ar">
   <select id="mySelect"  onchange="myFunction()"  >
       @forelse ($mcats as $mcat)
           <option value="{{ $mcat->id }}">{{ $mcat->sec2 }}</option>
       @empty
       <option value="">No Sub categories Please <a href="{{ route('mcats') }}"> Add</a></option>
       @endforelse
   </select>

<script> 
    function myFunction() {
  var x = document.getElementById("mySelect").value;
  document.getElementById("sec9_ar").value =  x;
}
</script>


</div>
  
  
</div>

<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
<button type="button" class="btn btn-primary" id="crop_">Crop</button>
<button type="button" class="btn btn-primary" id="uwc_">Upload Without Crop</button>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
var $moda_l = $('#moda_l');
var imag_e = document.getElementById('imag_e');
var cropper;
$("body").on("change", ".imag_e", function(e){
var files = e.target.files;
var done = function (url) {
imag_e.src = url;
$moda_l.modal('show');
};
var reader;
var file;
var url;
if (files && files.length > 0) {
file = files[0];
if (URL) {
done(URL.createObjectURL(file));
} else if (FileReader) {
reader = new FileReader();
reader.onload = function (e) {
done(reader.result);
};
reader.readAsDataURL(file);
}
}
});


$moda_l.on('shown.bs.modal', function () {
cropper = new Cropper(imag_e, {
aspectRatio: 1,
viewMode: 3,
preview: '.preview'
});
}).on('hidden.bs.modal', function () {
cropper.destroy();
cropper = null;
});

var sec1,sec2,sec3, sec4,sec2_ar,sec3_ar, sec4_ar, sec5,sec6,sec7, sec8, sec9,sec9_ar;

$("#crop_").click(function(){
    canvas = cropper.getCroppedCanvas({
    width: 400,
    height: 400,
    });
getdata();
crp_();
})

$("#uwc_").click(function(){ 
getdata();
nocrp_();
})

function getdata(){
    sec2=$(".port_inputs").children(".sec2").val();
    sec3=$(".port_inputs").children(".sec3").val();
    sec4=$(".port_inputs").children(".sec4").val();
    sec2_ar=$(".port_inputs").children(".sec2_ar").val();
    sec3_ar=$(".port_inputs").children(".sec3_ar").val();
    sec4_ar=$(".port_inputs").children(".sec4_ar").val();
    sec5=$(".port_inputs").children(".sec5").val();
    sec6=$(".port_inputs").children(".sec6").val();
    sec7=$(".port_inputs").children(".sec7").val();
    sec8=$(".port_inputs").children(".sec8").val();
    sec9_ar=$(".port_inputs").children(".sec9_ar").val();
}


function crp_(){
    canvas.toBlob(function(blob) {
url = URL.createObjectURL(blob);
var reader = new FileReader();
reader.readAsDataURL(blob); 

reader.onloadend = function() {
var base64data = reader.result; 
$.ajax({
type: "POST",
dataType: "json",
url: "crop-image-upload_scat",
data: {'_token': $('meta[name="_token"]').attr('content'), 'image': base64data,'url':$('.img_dest').val(),'sec2':sec2,'sec3':sec3,'sec4':sec4,'sec2_ar':sec2_ar,'sec3_ar':sec3_ar,'sec4_ar':sec4_ar,'sec5':sec5,'sec6':sec6,'sec7':sec7,'sec8':sec8,'sec9_ar':sec9_ar}, 
success: function(data){
    $(".b_b").attr('src',base64data);
    $moda_l.modal('hide');
}
});
}
});


}


 



function nocrp_(){
    
var base64=$('.full_img').val(); 
$('.imgport_upload').val(base64);


$.ajax({
type: "POST",
dataType: "json",
url: "crop-image-upload_scat",
data: {'_token': $('meta[name="_token"]').attr('content'),'nocrop':'nocrop','image':base64,'url':$('.img_dest').val(),'sec1':sec1,'sec2':sec2,'sec3':sec3,'sec4':sec4,'sec2_ar':sec2_ar,'sec3_ar':sec3_ar,'sec4_ar':sec4_ar,'sec5':sec5,'sec6':sec6,'sec7':sec7,'sec8':sec8,'sec9_ar':sec9_ar}, 
success: function(data){
    $(".b_b").attr('src',base64);
    $moda_l.modal('hide');
}

});


}



</script>
</body>
</html> 