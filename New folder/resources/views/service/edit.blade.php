<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
          <form action="{{route('editservices')}}" method="post">
             @csrf
             Services Description Under Head Line 
             <textarea class="form-control" name="sec1" style="width: 100%">{{ $setups[1]->sec1 }}</textarea> 
             Head Line Call To Action
              <textarea class="form-control" name="sec4" style="width: 100%">{{ $setups[1]->sec4 }}</textarea> 
              Description Call To Action
              <textarea class="form-control" name="sec5" style="width: 100%">{{ $setups[1]->sec5 }}</textarea> 
              Button URL Call To Action 
              <textarea class="form-control" name="sec6" style="width: 100%">{{ $setups[1]->sec6 }}</textarea>  
              
              <input class="form-control" type="submit" value="Edit"> 
         </form>
    </div>
    <div class="modal-body">
    </div>
  </div>
</div>
