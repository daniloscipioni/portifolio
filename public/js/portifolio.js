 function insertPost() {

     var testData = {
         firstName: 'Roberto da Silva',
         lastName: 'Cunha'
     }


     $.ajax({
         headers: {
             'Content-Type': 'application/json'
         },
         url: 'http://localhost:8080/WebRestSchott/rest/helloWorld/teste',
         type: 'POST',
         data: JSON.stringify(testData),

         beforeSend: function() {
             console.log('Carregando...');
         },
         success: function(retorno) {
             alert(retorno);
         },
         error: function(a, b, c) {
             alert('Erro: ' + a['status'] + ' ' + c);
         }
     });

 }

  $( document ).ready(function() {



    var mainScreen = $( '#main' ),
        height = $( '#main' ).height(),
        width = $( '#main' ).width()
        
        
        $('<div>', {
            id: 'bar',
            width:'50px',
            height:'150px',
            class: 'bars'
        }).appendTo(mainScreen);

   alert(width + " x " + height);

  // mainScreen.css({"background-color": "#ffe"});
  
});
