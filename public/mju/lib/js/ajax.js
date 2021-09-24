$(()=>{
       var path= $('#path').val();
       $.ajax({
           method:'post',
           url:path,
           data:{
            path:path,
           },success:function(data){
               $('#profil').append(data);
           }
       })
})