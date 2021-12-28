$( document ).ready(function() {
    
    "use strict";
    
    var todo = function() { 
        $('.todo-list .todo-item input').click(function() {
        if($(this).is(':checked')) {
            $(this).parent().parent().parent().toggleClass('complete');
        } else {
            $(this).parent().parent().parent().toggleClass('complete');
        }
    });
    
    $('.todo-nav .all-task').click(function() {
        $('.todo-list').removeClass('only-active');
        $('.todo-list').removeClass('only-complete');
        $('.todo-nav li.active').removeClass('active');
        $(this).addClass('active');
    });
    
    $('.todo-nav .active-task').click(function() {
        $('.todo-list').removeClass('only-complete');
        $('.todo-list').addClass('only-active');
        $('.todo-nav li.active').removeClass('active');
        $(this).addClass('active');
    });
    
    $('.todo-nav .completed-task').click(function() {
        $('.todo-list').removeClass('only-active');
        $('.todo-list').addClass('only-complete');
        $('.todo-nav li.active').removeClass('active');
        $(this).addClass('active');
    });
    
    $('#uniform-all-complete input').click(function() {
        if($(this).is(':checked')) {
            $('.todo-item .checker span:not(.checked) input').click();
        } else {
            $('.todo-item .checker span.checked input').click();
        }
    });
    
    $('.remove-todo-item').click(function() {
        $(this).parent().remove();
    });
    };
    
    todo();
    
    $(".add-task").keypress(function (e) {
        if ((e.which == 13)&&(!$(this).val().length == 0)) {
            $('<div class="todo-item"><div class="checker"><span class=""><input type="checkbox"></span></div> <span>' + $(this).val() + '</span> <a href="javascript:void(0);" class="float-right remove-todo-item"><i class="icon-close"></i></a></div>').insertAfter('.todo-list .todo-item:last-child');
            $(this).val('');
        } else if(e.which == 13) {
            alert('Please enter new task');
        }
        $(document).on('.todo-list .todo-item.added input').click(function() {
            if($(this).is(':checked')) {
                $(this).parent().parent().parent().toggleClass('complete');
            } else {
                $(this).parent().parent().parent().toggleClass('complete');
            }
        });
        $('.todo-list .todo-item.added .remove-todo-item').click(function() {
            $(this).parent().remove();
        });
    });


    $(document).on("click",".user_click",function(){
        var userid=$(this).children(".userid").val();
        var username=$(this).children(".username").val();

        $(".box_users").html('<button type="button" class="btn btn-default btn-lg btn3d col-2" ><input type="hidden"  value="'+userid+'" name="userid">'+username+'</button>');

        $(".validate").val("1");
    $(".add-task").fadeIn();

    });
    
    $(document).on("click",".btn3d",function(){
        $(this).remove();
        $(".validate").val("");
    });

    $(document).on("click",".getid",function(){
        var id=$(this).children(".id").val();
        var name=$(this).children(".name").val();

        $(".modaledit_id").val(id);
        $(".modaledit_name").val(name);
        
    });

    $(document).on("click",".del",function(){
        var id=$(this).children(".id").val();
        $(".modaledel_id").val(id);
        
    });
    $(document).on("click",".edits",function(){
        var id=$(this).children(".id").val();
        var sec2=$(this).children(".sec2").val();
        var sec3=$(this).children(".sec3").val();
        console.log(sec2);
        $(".modaledel_id").val(id);
        $("form .sec2").val(sec2);
        $("form .sec3").val(sec3);
        
    });
    $(document).on("click",".editportfolio",function(){
        var id=$(this).children(".id").val();
        var sec2=$(this).children(".sec2").val();
        var sec3=$(this).children(".sec3").val();
        var sec4=$(this).children(".sec4").val();
        
        $(".modaledel_id").val(id);
        $("form .sec2").val(sec2);
        $("form .sec3").val(sec3); 
        $("form .sec4").val(sec4);
        
    });
    $(document).on("click",".editteam",function(){
        var id=$(this).children(".id").val();
        var sec2=$(this).children(".sec2").val();
        var sec3=$(this).children(".sec3").val();
        var sec4=$(this).children(".sec4").val();
        var sec5=$(this).children(".sec5").val();
        var sec6=$(this).children(".sec6").val();
        var sec7=$(this).children(".sec7").val();
        var sec8=$(this).children(".sec8").val();
        
        $(".modaledel_id").val(id);
        $("form .sec2").val(sec2);
        $("form .sec3").val(sec3); 
        $("form .sec4").val(sec4);
        $("form .sec5").val(sec5);
        $("form .sec6").val(sec6); 
        $("form .sec7").val(sec7);
        $("form .sec8").val(sec8);
        
    });
////////////////////////////////// UPLOAD IMG //////////////////////////////////////////////
    $(document).on("click",".img_l",function(){
        $('.img_dest').val($(this).children('div').children('img').attr('src'));
        $('.img_l').children('div').children('img').removeClass('b_b');
        $(this).children('div').children('img').addClass('b_b');
    });

    
    var _URL = window.URL || window.webkitURL;
    $(document).on("change",".tt_t",function(){
        
            if (this.files && this.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
                  
        $('.full_img').val(e.target.result);
        $('.b_b').attr('src',e.target.result);
              };
              reader.readAsDataURL(this.files[0]);
            }
          
    });

    ////////////////////////////////// Edit Img //////////////////////////////////////////////

  
    $(document).on("click",".imgl",function(){
        $('.imgdest').val($(this).children('div').children('img').attr('src'));
        $('.imgl').children('div').children('img').removeClass('bb');
        $(this).children('div').children('img').addClass('bb');
    });

    
    var _URL = window.URL || window.webkitURL;
    $(document).on("change",".ttt",function(){
        
            if (this.files && this.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
                  
        $('.fullimg').val(e.target.result);
        $('.bb').attr('src',e.target.result);
              };
              reader.readAsDataURL(this.files[0]);
            }
          
    });
 


});