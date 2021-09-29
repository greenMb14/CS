$(()=>{
  
var verifEmail = false;
var verifCommentaire = false;

  $("#email").on("blur",function(){

    if (/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test($("#email").val())) {
        
        $("#notifCommentaire").html(""); 
        $("#email").css("border-color","#36b9cc");
        verifEmail = true;
    
        }else{
    
         $("#email").css("border-color","red");
         $("#notifCommentaire").html("votre adresse email est incorect"); 
         $("#notifCommentaire").css("color","red");
         verifEmail = false;
        }
       

  });



  $("#commentairesContent").on("blur",function(){

    if (/[a-zA-Z0-9]/.test($("#commentairesContent").val())) {
        
        $("#notifCommentaire").html(""); 
        $("#commentairesContent").css("border-color","#36b9cc");
        verifCommentaire = true;
    
        }else{
    
         $("#commentairesContent").css("border-color","red");
         $("#notifCommentaire").html("votre commentaire ne doit pas comprendre de caractere speciaux"); 
         $("#notifCommentaire").css("color","red");
         verifCommentaire = false;
        }
       

  });

var validation = false;


 setInterval(() => {

    if ( verifCommentaire == true && verifEmail == true) {

        $("#submit").css('background','#0d6efd');
        validation = true;
         
     
    }else{  
              
        $("#submit").css("background","LightGray"); 
        validation = false;
    }
      
  }, 1000);






  
  $('#submit').on('click',function(){ 

    if (validation == true) {
       
    $("#notifCommentaire").html("");
    var path = $('#path_commentaireAnnonce').val();
    var annonce = $('#Annonce').val();
     $.ajax({
      url:path,
      method:"post",
      data:{
      commentaire:$('#commentairesContent').val(),
       email:$('#email').val(),
       id:annonce,
      },success:function(e){

        $("#notifCommentaire").html(e);
         $("#notifCommentaire").css("color","green");
        
      },error:function(e){  
      }
    }); 

    $('#commentairesContent').val(null);
    $('#email').val(null);

        
    }
    
    
  });

});