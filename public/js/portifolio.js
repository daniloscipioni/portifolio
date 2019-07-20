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