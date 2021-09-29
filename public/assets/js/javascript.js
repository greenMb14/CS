
/**
 * fonction ajax pour envoyer les messages en dase de donnée */ 

$(document).ready(function(){
    $('#envoyer').on('click',function(e){

        e.preventDefault();

        var valeur = $("#pathenvois").val();


        if ($("#message").val() != "envoyer votre message ici" && /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test($("#email").val()) &&  $("#message").val() != "") {
        
         
        $.ajax({
            method:'post',
            url:valeur,
            encreType:'multipart/data-from',
            data:{
                email:$('#email').val(),
                message:$('#message').val(),      
            },success:function(data){
                $('#articletchat').append(data);
                // alert(data);
                
            },error:function(){
                $('#reponse').html('votre message a échouer');
            }
        });

        $("#message").val(null); 

    }else{

        
        $("#email").css("bordercolor:red");
    }
    });
 
})



// disparution de l input de email apres insertion de l`email

$("#email").on("blur",function(){

    if (/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test($("#email").val())) {
        
    $("#email").attr("type","hidden"); 

    }else{

     $("#email").css("border-color","red");
    }
   
}); 








//  initialiation du formulaire

$("#message").on("focus",function(){
        
    $("#message").val(null); 
   
}); 


 

 





// recuperation des messages du client 

var load = setInterval(function(){

   var id =  $("#articletchat i:last").attr("id");
   var valeur = $("#pathrecois").val();
   var email = $('#email').val();
 
  

   if (id > 0) {
       
   
    $.ajax({
        method:'post',
        url:valeur,
        data:{
            id:id,
            email:email,
        },
        success:function(donnes){
                $('#articletchat').append(donnes);
                // alert(donnes);
        },erreur:function(donne){
               
        }   
    })  

}

 
 
},8000);
