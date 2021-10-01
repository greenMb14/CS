$(()=>{

  
    // declaration des variable de verification

   
     
 
    // verfication du champ de saisie du titre
    $('#form_title').on('blur',function(){
      
        var titre = $('#form_title').val(); 
         if (/[A-Z]/.test(titre) && titre.length > 8){
            $('#form_title').css('border-color','#36b9cc');
            $('#titre').html("");
       
         }else if(titre.length <= 8){
            $('#form_title').css('border-color','red');
            $('#titre').html('votre champs doit contenir au moins 9 caracteres');
            $('#titre').css('color','red');
 
         }else{
            $('#form_title').css('border-color','red');
            $('#titre').html('votre titre doit etre en majuscule et ne doit pas comprendre des chiffires ou autre caracteres speciaux');
            $('#titre').css('color','red');
 
         }
    })



     // verfication du champ de saisie de la categorie
     $('#form_category').on('blur',function(){
      
        var category = $('#form_category').val(); 
         if (/[A-Z]/.test(category) && category.length > 8){
            $('#form_category').css('border-color','#36b9cc');
            $('#category').html('');
     
         }else if(category.length <= 8){
            $('#form_category').css('border-color','red');
            $('#category').html('votre champs doit contenir au moins 9 caracteres');
            $('#category').css('color','red');
         
         }else{
            $('#form_category').css('border-color','red');
            $('#category').html('votre categorie doit etre en majuscule et ne doit pas comprendre des chiffires ou autre caracteres speciaux');
            $('#category').css('color','red');
         
         }
    })





     // verfication du champ de saisie du resumer
     $('#form_resumer').on('blur',function(){
      
        var resumer = $('#form_resumer').val(); 
         if (/[a-zA-Z0-9]/.test(resumer) && resumer.length > 100){
            $('#form_resumer').css('border-color','#36b9cc');
            $('#resumer').html('');
         
         }else if(resumer.length <= 99){
            $('#form_resumer').css('border-color','red');
            $('#resumer').html('votre champs doit contenir au moins 100 caracteres');
            $('#resumer').css('color','red');
        
         }else{
            $('#form_resumer').css('border-color','red');
            $('#resumer').html('votre resumer ne doit pas comprendre de caracteres speciaux');
            $('#resumer').css('color','red');
       
         }
    })






      // verfication du champ de saisie du premier sous-titre
      $('#form_firstTitle').on('blur',function(){
      
        var firstTitle = $('#form_firstTitle').val(); 
         if (/[A-Z]/.test(firstTitle) && firstTitle.length > 8){
            $('#form_firstTitle').css('border-color','#36b9cc');
            $('#firstTitle').html('');
    
         }else if(firstTitle.length <= 8){
            $('#form_firstTitle').css('border-color','red');
            $('#firstTitle').html('votre champs doit contenir au moins 9 caracteres');
            $('#firstTitle').css('color','red');
 
         }else{
            $('#form_firstTitle').css('border-color','red');
            $('#firstTitle').html('votre titre doit etre en majuscule et ne doit pas comprendre des chiffires ou autre caracteres speciaux');
            $('#firstTitle').css('color','red');
      
         }
    })




    
      // verfication du champ de saisie du premier contenu
      $('#form_ContentA').on('blur',function(){
      
        var ContentA = $('#form_ContentA').val(); 
         if (/[a-zA-Z0-9]/.test(ContentA) &&  ContentA.length > 100){
            $('#form_ContentA').css('border-color','#36b9cc');
            $('#ContentA').html('');
    
         }else if(ContentA.length <= 99){
            $('#form_ContentA').css('border-color','red');
            $('#ContentA').html('votre champs doit contenir au moins 100 caracteres');
            $('#ContentA').css('color','red');
 
         }else{
            $('#form_ContentA').css('border-color','red');
            $('#ContentA').html('votre Contenu ne doit pas comprendre de caracteres speciaux');
            $('#ContentA').css('color','red');
 
         }
    })







      // verfication du champ de saisie du deuxieme sous-titre
      $('#form_secondTitle').on('blur',function(){
      
        var secondTitle = $('#form_secondTitle').val(); 
         if (/[A-Z]/.test(secondTitle) && secondTitle.length > 8){
            $('#form_secondTitle').css('border-color','#36b9cc');
            $('#secondTitle').html('');
         
         }else if(secondTitle.length <= 8){
            $('#form_secondTitle').css('border-color','red');
            $('#secondTitle').html('votre champs doit contenir au moins 9 caracteres');
            $('#secondTitle').css('color','red');
       
         }else{
            $('#form_secondTitle').css('border-color','red');
            $('#secondTitle').html('votre titre doit etre en majuscule et ne doit pas comprendre des chiffires ou autre caracteres speciaux');
            $('#secondTitle').css('color','red');
   
         }
    })





       // verfication du champ de saisie du Second contenu
       $('#form_ContentB').on('blur',function(){
      
        var ContentB = $('#form_ContentB').val(); 
         if (/[a-zA-Z0-9]/.test(ContentB) && ContentB.length > 100){
            $('#form_ContentB').css('border-color','#36b9cc');
            $('#ContentB').html('');
     
         }else if(ContentB.length <= 99){
            $('#form_ContentB').css('border-color','red');
            $('#ContentB').html('votre champs doit contenir au moins 100 caracteres');
            $('#ContentB').css('color','red');
 
         }else{
            $('#form_ContentB').css('border-color','red');
            $('#ContentB').html('votre Contenu ne doit pas comprendre de caracteres speciaux');
            $('#ContentB').css('color','red');
 
         }
    })








       // verfication du champ de saisie du troisieme sous-titre
       $('#form_thirtTitle').on('blur',function(){
      
        var thirtTitle = $('#form_thirtTitle').val(); 
         if (/[A-Z]/.test(thirtTitle) && thirtTitle.length > 8){
            $('#form_thirtTitle').css('border-color','#36b9cc');
            $('#thirtTitle').html('');
    
         }else if(thirtTitle.length <= 8){
            $('#form_thirtTitle').css('border-color','red');
            $('#thirtTitle').html('votre champs doit contenir au moins 9 caracteres');
            $('#thirtTitle').css('color','red');
      
         }else{
            $('#form_thirtTitle').css('border-color','red');
            $('#thirtTitle').html('votre titre doit etre en majuscule et ne doit pas comprendre des chiffires ou autre caracteres speciaux');
            $('#thirtTitle').css('color','red');
        
         }
    })


    
       // verfication du champ de saisie du Second contenu
       $('#form_ContentC').on('blur',function(){
      
        var ContentC = $('#form_ContentC').val(); 
         if (/[a-zA-Z0-9]/.test(ContentC) && ContentC.length > 100){
            $('#form_ContentC').css('border-color','#36b9cc');
            $('#ContentC').html('');
  
         }else if(ContentC.length <= 99){
            $('#form_ContentC').css('border-color','red');
            $('#ContentC').html('votre champs doit contenir au moins 100 caracteres');
            $('#ContentC').css('color','red');
     
         }else{
            $('#form_ContentC').css('border-color','red');
            $('#ContentC').html('votre Contenu ne doit pas comprendre de caracteres speciaux');
            $('#ContentC').css('color','red');
       
         }
    })



    // acceptation de la soumission du formulaire d'annomce

    
    
   


               
    setInterval(() => {

      if (
         /[A-Z]/.test($('#form_title').val())  &&  $('#form_title').val().length > 8 && 
         /[A-Z]/.test($('#form_category').val())  &&  $('#form_category').val().length > 8 && 
         /[a-zA-Z0-9]/.test($('#form_resumer').val()) && $('#form_resumer').val().length > 100 &&
         /[A-Z]/.test($('#form_firstTitle').val()) && $('#form_firstTitle').val().length > 8 &&
         /[a-zA-Z0-9]/.test($('#form_ContentA').val()) && $('#form_ContentA').val().length > 100
         ) {

         
            $('#form_Poster').attr('type','submit');
            $('#form_Poster').css('background','#0d6efd');
            $('#form_Poster').css('border-color','#0d6efd');

         
            
      
      }else{

         $('#form_Poster').attr('type','button');
         $('#form_Poster').css('background','LightGray');
         $('#form_Poster').css('border-color','LightGray');

      }
      
   }, 500);









});