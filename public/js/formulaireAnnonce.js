$(()=>{
 

    // declaration des variable de verification

    var verifTitle = false;
    var  verifcategory = false;
    var verifResumer = false;
    var  verifFirstTitle = false;
    var  verifContentA = false;
    var  verifSecondTitle = false;
    var verifThirtTitle = false;
    var verifContentC = false;
    var verifContentB = false;
 
    // verfication du champ de saisie du titre
    $('#annonce_title').on('blur',function(){
      
        var titre = $('#annonce_title').val(); 
         if (/[A-Z]/.test(titre)){
            $('#annonce_title').css('border-color','#36b9cc');
            $('#titre').html("");
            verifTitle = true;
         }else if(titre.length < 8){
            $('#annonce_title').css('border-color','red');
            $('#titre').html('votre champs doit contenir au moins 8 caracteres');
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
         if (/[A-Z]/.test(category)){
            $('#annonce_category').css('border-color','#36b9cc');
            $('#category').html('');
            verifcategory = true;
         }else if(category.length < 8){
            $('#annonce_category').css('border-color','red');
            $('#category').html('votre champs doit contenir au moins 8 caracteres');
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
         if (/[a-zA-Z0-9]/.test(resumer)){
            $('#annonce_resumer').css('border-color','#36b9cc');
            $('#resumer').html('');
            verifResumer = true;
         }else if(resumer.length < 100){
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
         if (/[A-Z]/.test(firstTitle)){
            $('#annonce_firstTitle').css('border-color','#36b9cc');
            $('#firstTitle').html('');
            verifFirstTitle = true;
         }else if(firstTitle.length < 8){
            $('#annonce_firstTitle').css('border-color','red');
            $('#firstTitle').html('votre champs doit contenir au moins 8 caracteres');
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
         if (/[a-zA-Z0-9]/.test(ContentA)){
            $('#annonce_ContentA').css('border-color','#36b9cc');
            $('#ContentA').html('');
            verifContentA = true;
         }else if(ContentA.length < 100){
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
         if (/[A-Z]/.test(secondTitle)){
            $('#annonce_secondTitle').css('border-color','#36b9cc');
            $('#secondTitle').html('');
            verifSecondTitle = true;
         }else if(secondTitle.length < 8){
            $('#annonce_secondTitle').css('border-color','red');
            $('#secondTitle').html('votre champs doit contenir au moins 8 caracteres');
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
         if (/[a-zA-Z0-9]/.test(ContentB)){
            $('#annonce_ContentB').css('border-color','#36b9cc');
            $('#ContentB').html('');
            verifContentB = true;
         }else if(ContentB.length < 100){
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
         if (/[A-Z]/.test(thirtTitle)){
            $('#annonce_thirtTitle').css('border-color','#36b9cc');
            $('#thirtTitle').html('');
            verifThirtTitle = true;
         }else if(thirtTitle.length < 8){
            $('#annonce_thirtTitle').css('border-color','red');
            $('#thirtTitle').html('votre champs doit contenir au moins 8 caracteres');
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
         if (/[a-zA-Z0-9]/.test(ContentC)){
            $('#annonce_ContentC').css('border-color','#36b9cc');
            $('#ContentC').html('');
            verifContentC = true;
         }else if(ContentC.length < 100){
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

  var accepterA =  setInterval(() => {

        if (
             verifTitle == true && verifcategory == true && 
             verifResumer == true && verifFirstTitle == true &&
             verifContentA == true ) {
   
               clearInterval(accepterA);
                $('#annonce_Poster').attr('type','submit');
                $('#annonce_Poster').css('background','#0d6efd');
                $('#annonce_Poster').css('border-color','#0d6efd');

            
               
          
        }else{

            $('#annonce_Poster').attr('type','button');
            $('#annonce_Poster').css('background','LightGray');
            $('#annonce_Poster').css('border-color','LightGray');

        }
        
    }, 500);






});