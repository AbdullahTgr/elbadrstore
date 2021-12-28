<div class="modal fade" id="addservice" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
          <form action="{{route('addservice')}}" method="post">
             @csrf
              <textarea class="form-control sec2" name="sec2" style="width: 100%"></textarea> 
              <textarea class="form-control sec3" name="sec3" style="width: 100%"></textarea> 

              <input class="form-control" type="submit" value="Add"> 
         </form>
    </div>
    <div class="modal-body">
    </div>
  </div>
</div>
