/*
  Creación de una función personalizada para jQuery que detecta cuando se detiene el scroll en la página
*/
$.fn.scrollEnd = function(callback, timeout) {
  $(this).scroll(function(){
    var $this = $(this);
    if ($this.data('scrollTimeout')) {
      clearTimeout($this.data('scrollTimeout'));
    }
    $this.data('scrollTimeout', setTimeout(callback,timeout));
  });
};
/*
  Función que inicializa el elemento Slider
*/

function inicializarSlider(){
  $("#rangoPrecio").ionRangeSlider({
    type: "double",
    grid: false,
    min: 0,
    max: 100000,
    from: 200,
    to: 80000,
    prefix: "$"
  });
}
/*
  Función que reproduce el video de fondo al hacer scroll, y deteiene la reproducción al detener el scroll
*/
function playVideoOnScroll(){
  var ultimoScroll = 0,
      intervalRewind;
  var video = document.getElementById('vidFondo');
  $(window)
    .scroll((event)=>{
      var scrollActual = $(window).scrollTop();
      if (scrollActual > ultimoScroll){
       video.play();
     } else {
        //this.rewind(1.0, video, intervalRewind);
        video.play();
     }
     ultimoScroll = scrollActual;
    })
    .scrollEnd(()=>{
      video.pause();
    }, 10)
}
inicializarSlider()
playVideoOnScroll()
filtroTipo()
filtroCiudad()
$('#mostrarTodos').click(function(){

  $.ajax({
    url: './todos.php',
    type: 'GET',
    success: function (data) {

      $('.colContenido').html(data);
    }
  })
})
function filtroCiudad(){
  $.ajax({
    url: './filtroCiudad.php',
    type: 'GET',
    success: function (data) {

      $('#selectCiudad').append(data);
    }
  })
}
function filtroTipo(){
  $.ajax({
    url: './filtroTipo.php',
    type: 'GET',
    success: function (data) {

      $('#selectTipo').append(data);
    }
  })
}



$(document).ready(function() {
  $('select').material_select();
}) ;

$('#submitButton').click(function btnFiltro(){
  var ciudad = document.getElementById("selectCiudad").value;
  var tipo = document.getElementById("selectTipo").value;
  var precio = document.getElementById("rangoPrecio").value;

  $.ajax({
    url: './buscador.php',
    type: 'get',
    data: {'ciudad': ciudad, 'tipo': tipo, 'precio': precio},

    success: function (data) {
        $('.colContenido').html(data);
    }
  })
});
