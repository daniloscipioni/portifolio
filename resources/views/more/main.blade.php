@extends('layout.principal')
@section('content')

<div class="nav-content expanded">

    <div id="main">
        <div id="teste" data-toggle="tooltip" style="width: 250px;height: 90px;background-color: blue;"></div>  
          <div id="toll" style="width: 70px;height: 70px;background-color: red;display: none;font: 12px;">
          Peças Prozidas: <b>380</b><br>
          Meta: <b>400</b>
          </div>

        <div id="footer">
        </div>
    </div>

    <script>
        $(function () {

            $('#teste').mouseover( function(event){
                $('#toll').css("display", "block");

            }).mousemove(
                function(event){
                 $('#toll').css("margin-left", event.pageX - 20);
                 $('#toll').css("margin-top", event.pageY - 180);
               
            });
           
            $('#teste').mouseleave(
                function(event){
                $('#toll').css("display", "none");
                

            });


})
    </script>
</div>

@stop