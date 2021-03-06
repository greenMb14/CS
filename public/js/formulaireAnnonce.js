$(()=>{
 

    // declaration des variable de verification
 
    $('#annonce_title').val(null);
    $('#annonce_category').val(null);
    $('#annonce_resumer').val(null); 
    $('#annonce_firstTitle').val(null); 
    $('#annonce_ContentA').val(null);
    $('#annonce_secondTitle').val(null); 
    $('#annonce_ContentC').val(null);
    $('#annonce_thirtTitle').val(null); 
    $('#annonce_ContentB').val(null);
 
    // verfication du champ de saisie du titre
    $('#annonce_title').on('blur',function(){
      
        var titre = $('#annonce_title').val(); 
         if (/[A-Z]/.test(titre) && titre.length > 8){
            $('#annonce_title').css('border-color','#36b9cc');
            $('#titre').html("");
 
         }else if(titre.length <= 8){
            $('#annonce_title').css('border-color','red');
            $('#titre').html('votre champs doit contenir au moins 9 caracteres');
            $('#titre').css('color','red');
 
         }else{
            $('#annonce_title').css('border-color','red');
            $('#titre').html('votre titre doit etre en majuscule et ne doit pas comprendre des chiffires ou autre caracteres speciaux');
            $('#titre').css('color','red');
 
         }
    })



     // verfication du champ de saisie de la categorie
     $('#annonce_category').on('blur',function(){
      
        var category = $('#annonce_category').val(); 
         if (/[A-Z]/.test(category) && category.length > 8){
            $('#annonce_category').css('border-color','#36b9cc');
            $('#category').html('');
 
         }else if(category.length <= 8){
            $('#annonce_category').css('border-color','red');
            $('#category').html('votre champs doit contenir au moins 9 caracteres');
            $('#category').css('color','red');
 
         }else{
            $('#annonce_category').css('border-color','red');
            $('#category').html('votre categorie doit etre en majuscule et ne doit pas comprendre des chiffires ou autre caracteres speciaux');
            $('#category').css('color','red');
 
         }
    })





     // verfication du champ de saisie du resumer
     $('#annonce_resumer').on('blur',function(){
      
        var resumer = $('#annonce_resumer').val(); 
         if (/[a-zA-Z0-9]/.test(resumer) && resumer.length > 99){
            $('#annonce_resumer').css('border-color','#36b9cc');
            $('#resumer').html('');
 
         }else if(resumer.length <= 99){
            $('#annonce_resumer').css('border-color','red');
            $('#resumer').html('votre champs doit contenir au moins 100 caracteres');
            $('#resumer').css('color','red');
 
         }else{
            $('#annonce_resumer').css('border-color','red');
            $('#resumer').html('votre resumer ne doit pas comprendre de caracteres speciaux');
            $('#resumer').css('color','red');
 
         }
    })






      // verfication du champ de saisie du premier sous-titre
      $('#annonce_firstTitle').on('blur',function(){
      
        var firstTitle = $('#annonce_firstTitle').val(); 
         if (/[A-Z]/.test(firstTitle) && firstTitle.length > 8){
            $('#annonce_firstTitle').css('border-color','#36b9cc');
            $('#firstTitle').html('');
 
         }else if(firstTitle.length <= 8){
            $('#annonce_firstTitle').css('border-color','red');
            $('#firstTitle').html('votre champs doit contenir au moins 9 caracteres');
            $('#firstTitle').css('color','red');
 
         }else{
            $('#annonce_firstTitle').css('border-color','red');
            $('#firstTitle').html('votre titre doit etre en majuscule et ne doit pas comprendre des chiffires ou autre caracteres speciaux');
            $('#firstTitle').css('color','red');
  
         }
    })




    
      // verfication du champ de saisie du premier contenu
      $('#annonce_ContentA').on('blur',function(){
      
        var ContentA = $('#annonce_ContentA').val(); 
         if (/[a-zA-Z0-9]/.test(ContentA) && ContentA.length > 99){
            $('#annonce_ContentA').css('border-color','#36b9cc');
            $('#ContentA').html('');
    
         }else if(ContentA.length <= 99){
            $('#annonce_ContentA').css('border-color','red');
            $('#ContentA').html('votre champs doit contenir au moins 100 caracteres');
            $('#ContentA').css('color','red');
     
         }else{
            $('#annonce_ContentA').css('border-color','red');
            $('#ContentA').html('votre Contenu ne doit pas comprendre de caracteres speciaux');
            $('#ContentA').css('color','red');
       
         }
    })







      // verfication du champ de saisie du deuxieme sous-titre
      $('#annonce_secondTitle').on('blur',function(){
      
        var secondTitle = $('#annonce_secondTitle').val(); 
         if (/[A-Z]/.test(secondTitle) && secondTitle.length > 8){
            $('#annonce_secondTitle').css('border-color','#36b9cc');
            $('#secondTitle').html('');
     
         }else if(secondTitle.length <= 8){
            $('#annonce_secondTitle').css('border-color','red');
            $('#secondTitle').html('votre champs doit contenir au moins 9 caracteres');
            $('#secondTitle').css('color','red');
       
         }else{
            $('#annonce_secondTitle').css('border-color','red');
            $('#secondTitle').html('votre titre doit etre en majuscule et ne doit pas comprendre des chiffires ou autre caracteres speciaux');
            $('#secondTitle').css('color','red');
     
         }
    })





       // verfication du champ de saisie du Second contenu
       $('#annonce_ContentB').on('blur',function(){
      
        var ContentB = $('#annonce_ContentB').val(); 
         if (/[a-zA-Z0-9]/.test(ContentB) && ContentB.length > 99){
            $('#annonce_ContentB').css('border-color','#36b9cc');
            $('#ContentB').html('');
       
         }else if(ContentB.length <= 99){
            $('#annonce_ContentB').css('border-color','red');
            $('#ContentB').html('votre champs doit contenir au moins 100 caracteres');
            $('#ContentB').css('color','red');
 
         }else{
            $('#annonce_ContentB').css('border-color','red');
            $('#ContentB').html('votre Contenu ne doit pas comprendre de caracteres speciaux');
            $('#ContentB').css('color','red');
  
         }
    })








       // verfication du champ de saisie du troisieme sous-titre
       $('#annonce_thirtTitle').on('blur',function(){
      
        var thirtTitle = $('#annonce_thirtTitle').val(); 
         if (/[A-Z]/.test(thirtTitle) && thirtTitle.length > 8){
            $('#annonce_thirtTitle').css('border-color','#36b9cc');
            $('#thirtTitle').html('');
  
         }else if(thirtTitle.length <= 8){
            $('#annonce_thirtTitle').css('border-color','red');
            $('#thirtTitle').html('votre champs doit contenir au moins 9 caracteres');
            $('#thirtTitle').css('color','red');
         
         }else{
            $('#annonce_thirtTitle').css('border-color','red');
            $('#thirtTitle').html('votre titre doit etre en majuscule et ne doit pas comprendre des chiffires ou autre caracteres speciaux');
            $('#thirtTitle').css('color','red');
        
         }
    })


    
       // verfication du champ de saisie du Second contenu
       $('#annonce_ContentC').on('blur',function(){
      
        var ContentC = $('#annonce_ContentC').val(); 
         if (/[a-zA-Z0-9]/.test(ContentC) && ContentC.length > 99){
            $('#annonce_ContentC').css('border-color','#36b9cc');
            $('#ContentC').html('');
             
         }else if(ContentC.length <= 99){
            $('#annonce_ContentC').css('border-color','red');
            $('#ContentC').html('votre champs doit contenir au moins 100 caracteres');
            $('#ContentC').css('color','red');
       
         }else{
            $('#annonce_ContentC').css('border-color','red');
            $('#ContentC').html('votre Contenu ne doit pas comprendre de caracteres speciaux');
            $('#ContentC').css('color','red');
        
         }
    })



    // acceptation de la soumission du formulaire d'annomce

 setInterval(() => {
  if (
   /[A-Z]/.test($('#annonce_title').val())  &&  $('#annonce_title').val().length > 8 && 
   /[A-Z]/.test($('#annonce_category').val())  &&  $('#annonce_category').val().length > 8 && 
   /[a-zA-Z0-9]/.test($('#annonce_resumer').val()) && $('#annonce_resumer').val().length > 100 &&
   /[A-Z]/.test($('#annonce_firstTitle').val()) && $('#annonce_firstTitle').val().length > 8 &&
   /[a-zA-Z0-9]/.test($('#annonce_ContentA').val()) && $('#annonce_ContentA').val().length > 100) {
         
            $('#annonce_Poster').attr('type','submit');
            $('#annonce_Poster').css('background','#0d6efd');
            $('#annonce_Poster').css('border-color','#0d6efd');      
      
    }
        else{

            $('#annonce_Poster').attr('type','button');
            $('#annonce_Poster').css('background','LightGray');
            $('#annonce_Poster').css('border-color','LightGray');

        }
        
    }, 500);






});