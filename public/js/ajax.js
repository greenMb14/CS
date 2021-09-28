 
/**
 * fonction ajax pour envoyer les messages en dase de donnée */ 

$(document).ready(function(){

    $('#envoyer').on('click',function(e){

        e.preventDefault();

        var valeur = $("#path").val();

        var email = $("#articletchat input:last").val();

 


        if ($("#message").val() != "envoyer votre message ici" && $("#message").val() != "") {
        
         
        $.ajax({
            method:'post',
            url:valeur,
            encreType:'multipart/data-from',
            data:{
                email:email,
                message:$("#message").val(), 

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
 
});








//  initialiation du formulaire

$("#message").on("focus",function(){
        
    $("#message").val(null); 
   
}); 


 

 





// recuperation des messages du client 

 var load = setInterval(function(){

   var id =  $("#articletchat i:last").attr("id");
   var valeur = $("#pathloadNewmessage").val();
   var email = $("#articletchat input:last").val();

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
        },erreur:function(donne){
               
        }   
    })  

}

 
 
},8000);

























// fonction de recherche des notfifictions de messages envoyer par les clients






// recuperation des messages du client 

var notif = setInterval(function(){

    var valeurPath = $("#pathnotification").val();  
        
    
     $.ajax({
         method:'post',
         url:valeurPath,
         success:function(donnes){

                 $('#profil').html(donnes);

         },erreur:function(donne){
                
         }   
     })  
 
 
 
 
 },5000);