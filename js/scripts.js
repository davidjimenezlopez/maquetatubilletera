// Header //

$(document).ready(function(){
    // Menu mobile
      $(".icon-menu").click(function(){
        $(".icon-menu").toggleClass("open-menu");
        $(".menu-list").slideToggle("fast");
      });
    // Submenu mobile 
    $(".user-ds").click(function(){
        $(".submenu").slideToggle("fast");
      }); 
    // Animated scroll 
        AOS.init();   
    // Menu footermobile 

    var subsec = $(".subsec");
    $(".links").on("click", function(){
      $(this).toggleClass('translate');
      $('.links').not(this).removeClass('translate');
      var target = $(this).next(".subsec");
      subsec.not(target).hide('fast')
      target.toggle("fast");      
     }); 
    
     // thumb slide range cunstom
    var slider = document.getElementById("pricemin");
    var selector = document.getElementById("selector"); 

    slider.oninput = function () {
      selector.style.left = this.value + "%";
    }
  });




$(window).on('load', function() { 
    // makes sure the whole site is loaded    
    var alto_producto=$('.producto_div').height()
    $('.detalle_plataforma').css("height",alto_producto)
    $('#preloader').delay(2000).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(2000).css({'overflow':'visible'}); 
  })

  

$( document ).ready(function() {         

        var width = $(window).width();   
        if (width > 768){    
            $("#slide1").attr("src","img/slider/1920-foto01.png");
            $("#slide2").attr("src","img/slider/1920-foto02.png");
            $("#slide3").attr("src","img/slider/1920-foto03.png");       
            $("#fondo_tramite").attr("src","img/1920-foto05.png");            
        }

        $('.center_aliados').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
                  infinite: true,
                  dots: true
                }
              },
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2
                }
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
              // You can unslick at a given breakpoint now by adding:
              // settings: "unslick"
              // instead of a settings object
            ]
          });

        $('.carousel').carousel({
            interval: 100000
        })

        $('.input_class_checkbox').each(function(){
                $(this).hide().after('<div class="class_checkbox" />');
        });
        
        $('.class_checkbox').on('click',function(){
                $(this).toggleClass('checked').prev().prop('checked',$(this).is('.checked'))
         });
    
});



$(".sonar-wave").on("webkitAnimationIteration oanimationiteration animationiteration", function(){
    $(this).css("background-color", '#233976');
})

$(window).scroll(function (event) {
    var width = $(window).width();   
    if (width > 768){
        $('.calculadora_desktop').hide(); 
        $('#activa_calculadora > img').attr("src","img/calculadora_inactivo.svg");
        var scroll = $(window).scrollTop();
        if(scroll > 350){
            $(".calculadora_desktop").css("background-color", "#FFF");
        }else{
            $(".calculadora_desktop").css("background-color", "#ffffff5e");
            $('.calculadora_desktop').show(); 
            $('#activa_calculadora > img').attr("src","img/calculadora_activo.svg");
        }
    }
    
});
/*
$( window ).resize(function() {
  var width = $(window).width();
  if (width < 400){
    $('#calculadoraModaDesktop').modal('hide'); 
    $('#calculadoraModal').modal('show')
  }else{
    $('#calculadoraModaDesktop').modal('show');
    $('#calculadoraModal').modal('hide')
  }
  console.log(width)
});
*/
$('#activa_calculadora').click(function() {

    var width = $(window).width();   
    var scroll = $(window).scrollTop();
    
    if (scroll < 350 && $(".calculadora_desktop").length >0 && width > 768){      
        if($(".calculadora_desktop").is(":visible")  ){
            $('#activa_calculadora > img').attr("src","img/calculadora_inactivo.svg");
            $('.calculadora_desktop').hide();   
            
        }else{
            $('.calculadora_desktop').show();                 
            $('#activa_calculadora > img').attr("src","img/calculadora_activo.svg"); 
        }
    }else if(width < 768){
      $('#calculadoraModal').modal('show')
    }else{
      $('#calculadoraModaDesktop').modal('show')
    }  
           
    
   
});

$('.producto_div').click(function() {

    var width = $(window).width();   
    
    if (width<768){ 
        console.log(width)
        var id = $(this).attr('id');    
        $('#detalle_producto').empty()
        var producto_1 =  '<li>Sin impresión de los formatos.</li>'+
                    '<li>Sin autenticación de documentos con firma y huella..</li>' + 
                    '<li>Sin envío de documentos correo certificado</li>'+
                    '<li>Sin desplazamientos.</li>'+
                    '<li>Sin días de espera.</li>'+
                    '<li>Sin diligenciar documentos a mano.</li>'+
                    '<li>Sin costos en caso de ser rechazada o de ser rechazada</li>'
        var producto_2 =    '<li>Sin impresión de los formatos.</li>'+
                            '<li>Sin autenticación de documentos con firma y huella..</li>' + 
                            '<li>Sin envío de documentos correo certificado</li>'+
                            '<li>Sin desplazamientos.</li>'+
                            '<li class="list-x">Con días de espera.</li>'+
                            '<li>Sin diligenciar documentos a mano.</li>'+
                            '<li>Sin costos en caso de ser rechazada o de ser rechazada</li>'

        var producto_3 =    '<li class="list-x">Con impresión de los formatos.</li>'+
                            '<li class="list-x">Con autenticación de documentos con firma y huella..</li>' + 
                            '<li class="list-x">Con envío de documentos correo certificado</li>'+
                            '<li class="list-x">Con desplazamientos.</li>'+
                            '<li >Sin días de espera.</li>'+
                            '<li class="list-x">Con diligenciar documentos a mano.</li>'+
                            '<li class="list-x">Con costos en caso de ser rechazada o de ser rechazada</li>'
        var producto_4 =    '<li class="list-x">Con impresión de los formatos.</li>'+
                            '<li class="list-x">Con autenticación de documentos con firma y huella..</li>' + 
                            '<li class="list-x">Con envío de documentos correo certificado</li>'+
                            '<li class="list-x">Con desplazamientos.</li>'+
                            '<li class="list-x">Con días de espera.</li>'+
                            '<li class="list-x">Con diligenciar documentos a mano.</li>'+
                            '<li class="list-x">Con costos en caso de ser rechazada o de ser rechazada</li>'

        switch ($(this).attr('id')) {
            case 'producto_1' :$('#detalle_producto').append(producto_1)
                    break; 
            case 'producto_2' :$('#detalle_producto').append(producto_2)
                    break; 
            case 'producto_3' :$('#detalle_producto').append(producto_3)
                    break; 
            case 'producto_4' :$('#detalle_producto').append(producto_4)
                    break; 
        }
        
        $('#productosModal').modal('show')
        
        
    }
  });

  $(".tol_tip_cal").hover(function(){
    $( this ).attr( "src","img/tooltip2.svg" );
  }, function() {
    $( this ).attr( "src","img/tooltip.svg" );
  })


  $(function () {
    $('[data-toggle="tooltip"]').tooltip(
        {
            html: true,    
            template:'<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',       
          }
    )
  })

  $('#solicita_credito').hover(function(){      
        $( this ).attr( "src","img/solicitud_con_icono_estado_azul_2.png" );
    }, function() {
        $( this ).attr( "src","img/solicitud_con_icono_estado_2.png" );
  })



