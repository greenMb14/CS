$(()=>{



     //  verification des champs du formulaire d'inscription d'un utilisateur



 



       // verfication du champ de saisie du Username
       $('#form_username').on('blur',function(){
      
         var username = $('#form_username').val(); 
          if (/[a-zA-Z]/.test(username) && username.length > 8 ){
             $('#form_username').css('border-color','#36b9cc');
             $('#username').html('');
      
          }else if(username.length <= 8){
             $('#form_username').css('border-color','red');
             $('#username').html('votre champs doit contenir au moins 9 caracteres');
             $('#username').css('color','red');
   
          }else{
             $('#username').css('border-color','red');
             $('#username').html('votre Pseudo ne doit pas comprendre des chiffires ou autre caracteres speciaux');
             $('#username').css('color','red');
     
          }
     })











     
       // verfication du champ de saisie du Password
       $('#form_Password').on('blur',function(){
      
         var password = $('#form_Password').val(); 
          if (/[a-zA-Z0-9]/.test(password) && password.length > 8 ){
             $('#form_Password').css('border-color','#36b9cc');
             $('#password').html('');
 
          }else if(password.length <= 8){
             $('#form_Password').css('border-color','red');
             $('#password').html('votre champs doit contenir au moins 9 caracteres');
             $('#password').css('color','red');
     
          }else{
             $('#password').css('border-color','red');
             $('#password').html('votre Mot de pass ne doit pas comprendre des caracteres speciaux');
             $('#password').css('color','red');
         
          }
     })






    


       // verfication du champ de saisie du ComfirmPassword
       $('#ComfirmPassword').on('blur',function(){
      
         var ComfirmPassword = $('#ComfirmPassword').val(); 
         var pass = $('#form_Password').val(); 
          if (ComfirmPassword === pass ){
             $('#ComfirmPassword').css('border-color','#36b9cc');
             $('#Comfirm').html('');
         
          }else{
             $('#Comfirm').css('border-color','red');
             $('#Comfirm').html('Vos mot de pass ne sont pas synchronise');
             $('#Comfirm').css('color','red');
      
          }
     })
     


   setInterval(() => {

          if (
            /[a-zA-Z]/.test($('#form_username').val()) && $('#form_username').val().length > 8  &&
            /[a-zA-Z0-9]/.test($('#form_Password').val()) && $('#form_Password').val().length > 8  &&
             $('#ComfirmPassword').val() === $('#form_Password').val()
            ) {
               $('#form_Inscris').attr('type','submit');
               $('#form_Inscris').css('background','#0d6efd');
               $('#form_Inscris').css('border-color','#0d6efd');
            
             
          }else{

            $('#form_Inscris').attr('type','button');
            $('#form_Inscris').css('background','LightGray');
            $('#form_Inscris').css('border-color','LightGray');
          }
        
     }, 700);









     setInterval(() => {
 

        if (
           /[a-zA-Z]/.test($('#form_username').val()) && $('#form_username').val().length > 8  &&
           /[a-zA-Z0-9]/.test($('#form_Password').val()) && $('#form_Password').val().length > 8  &&
            $('#ComfirmPassword').val() === $('#form_Password').val()
          ) {
             $('#modifier').attr('type','submit');
             $('#modifier').css('background','#0d6efd');
             $('#modifier').css('border-color','#0d6efd');
          
           
        }else{

          $('#modifier').attr('type','button');
          $('#modifier').css('background','LightGray');
          $('#modifier').css('border-color','LightGray');
        }
      
   }, 700);





});