<div class="modal fade" id="editproduct" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
          <form action="{{route('editproduct')}}" method="post">
             @csrf
              
             Product Name
             <textarea class="form-control sec2" name="sec2" style="width: 100%"></textarea> 
             
             Product Description
             <textarea class="form-control sec3" name="sec3" style="width: 100%"></textarea> 
             
             Unit
             <textarea class="form-control sec4" name="sec4" style="width: 100%"></textarea> 
         
             Price Per Unit
             <textarea class="form-control sec5" name="sec5" style="width: 100%"></textarea> 
             
             <input type="hidden" value="@if(count($scats)!=0){{ $scats[0]->id }}@endif" id="sec9_ar_ep" class="sec9_ar_ep">
             <select id="mySelect_ep" onchange="myFunction_ep()"  >
                 @forelse ($scats as $scat)
                     <option value="{{ $scat->id }}">{{ $scat->sec2 }}</option>
                 @empty
                 <option value="">No Sub categories Please <a href="{{ route('scats') }}"> Add</a></option>
                     
                 @endforelse
             </select>

              <input  type="hidden" class="modaledel_id" name="modaledel_id" value="0"> 
              <input class="form-control" type="submit" value="Edit"> 
         </form>
    </div>
    <div class="modal-body">
    </div>
  </div>
</div>
 
<script>
  function myFunction_ep() {
var x = document.getElementById("mySelect_ep").value;
document.getElementById("sec9_ar_ep").value =  x;
}
</script>