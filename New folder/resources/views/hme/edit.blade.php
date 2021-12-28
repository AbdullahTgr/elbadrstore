<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
            <form action="{{route('edithme')}}" method="post">
               @csrf
               The Big Headline
               <textarea class="form-control" name="sec1" style="width: 100%">{{ $hme->sec1 }}</textarea> 
               Under Big Headline Description
                <textarea class="form-control" name="sec2" style="width: 100%">{{ $hme->sec2 }}</textarea> 
                Get Started Button URL
                <textarea class="form-control" name="sec3" style="width: 100%">{{ $hme->sec3 }}</textarea> 
                Video Link
                 <textarea class="form-control" name="sec4" style="width: 100%">{{ $hme->sec4 }}</textarea>  
                <input class="form-control" type="submit" value="Edit"> 
           </form>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
  