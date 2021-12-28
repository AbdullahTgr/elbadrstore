<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
          <form action="{{route('editcontactus')}}" method="post">
             @csrf
             Contact Us Description
             <textarea class="form-control" name="sec1" style="width: 100%">{{ $contactus->sec1 }}</textarea> 
             Location
              <textarea class="form-control" name="sec2" style="width: 100%">{{ $contactus->sec2 }}</textarea> 
             Email
               <textarea class="form-control" name="sec3" style="width: 100%">{{ $contactus->sec3 }}</textarea> 
             Phone 1
                <textarea class="form-control" name="sec4" style="width: 100%">{{ $contactus->sec4 }}</textarea>  
            Phone 2
                 <textarea class="form-control" name="sec5" style="width: 100%">{{ $contactus->sec5 }}</textarea> 
              <input class="form-control" type="submit" value="Edit"> 
         </form>
    </div>
    <div class="modal-body">
    </div>
  </div>
</div>






