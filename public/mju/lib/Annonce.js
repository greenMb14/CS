
$(()=>{

    
    $("#message").css("display","none");
    $("#file").css("color","red");
    $("#file").css("font-size","13px");
    $("#upload_submit").css("display","none");
    $("#upload_titre").val(null);
    $("#upload_content").val(null);

 

     $("#verification").on("click",function(e){
           $("#message").css("display","block");
           $("#accepter").css("color","green");
           $("#refuser").css("color","red");

                    
     });


     $("#accepter").on("click",function(e){
   

        $("#upload_submit").css("display","block");
        $("#upload_submit").css("margin","auto");
        $("#message").css("display","none");
        $("#verification").css("visibility","hidden");
                
    });


    
    $("#refuser").on("click",function(e){
        e.preventDefault();
        $("#message").css("display","none");
                
 });


     

});