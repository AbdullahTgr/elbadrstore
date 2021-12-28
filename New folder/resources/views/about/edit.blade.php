<div class="modal fade" id="edit_l" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
          <form action="{{route('editabout_l')}}" method="post">
             @csrf
             Line 1
             <textarea class="form-control" name="sec1" style="width: 100%">{{ $about->sec1 }}</textarea> 
             Line 2
              <textarea class="form-control" name="sec2" style="width: 100%">{{ $about->sec2 }}</textarea> 
             Line 3
              <textarea class="form-control" name="sec3" style="width: 100%">{{ $about->sec3 }}</textarea> 
             Line 4
               <textarea class="form-control" name="sec4" style="width: 100%">{{ $about->sec4 }}</textarea>  
              <input class="form-control" type="submit" value="Edit"> 
         </form>
    </div>
    <div class="modal-body">
    </div>
  </div>
</div>

<div class="modal fade" id="edit_r" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
          <form action="{{route('editabout_r')}}" method="post">
            @csrf
            Line 1
            <textarea class="form-control" name="sec5" style="width: 100%">{{ $about->sec5 }}</textarea> 
            Button Link 
             <textarea class="form-control" name="sec6" style="width: 100%">{{ $about->sec6 }}</textarea> 
             <input class="form-control" type="submit" value="Edit"> 
         </form>
    </div>
    <div class="modal-body">
    </div>
  </div>
</div>

<div class="modal fade" id="editabout_bottom" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
          <form action="{{route('editabout_bottom')}}" method="post">
            @csrf
            Heading
            <textarea class="form-control" name="sec7" style="width: 100%">{{ $about->sec7 }}</textarea> 
            Bold Heading 
            <textarea class="form-control" name="sec8" style="width: 100%">{{ $about->sec8 }}</textarea> 
            Under Heading Description
            <textarea class="form-control" name="sec9" style="width: 100%">{{ $about->sec9 }}</textarea> 
             <input class="form-control" type="submit" value="Edit"> 
         </form>
    </div>
    <div class="modal-body">
    </div>
  </div>
</div>


<div class="modal fade" id="editabout_bottom_questions" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
          <form action="{{route('editabout_bottom_questions')}}" method="post">
            @csrf
            Question 1
            <textarea class="form-control" name="sec10" style="width: 100%">{{ $about->sec10 }}</textarea> 
            Answer 1 
            <textarea class="form-control" name="sec11" style="width: 100%">{{ $about->sec11 }}</textarea> 
            
            Question 2
            <textarea class="form-control" name="sec12" style="width: 100%">{{ $about->sec12 }}</textarea> 
            Answer 2
            <textarea class="form-control" name="sec13" style="width: 100%">{{ $about->sec13 }}</textarea> 
            
            Question 3
            <textarea class="form-control" name="sec14" style="width: 100%">{{ $about->sec14 }}</textarea> 
           Answer 3
            <textarea class="form-control" name="sec15" style="width: 100%">{{ $about->sec15 }}</textarea> 
             <input class="form-control" type="submit" value="Edit"> 
         </form>
    </div>
    <div class="modal-body">
    </div>
  </div>
</div>
