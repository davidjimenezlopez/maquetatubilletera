$(document).ready(main);
// Menu Custom 
var contador = 1;
function main() {
 $('#sidebarToggleTop').click(function(){
     if (contador == 1){
        $('.sidebar').animate ({
            left: '0'
        });
        contador = 0;
     } else {
        contador = 1;
        $('.sidebar').animate ({
            left: '-100%'
        });
     }
 });
};
 $(".pre-footer, .close-foot").click(function(){
        var y = $(window).scrollTop();  //your current y position on the page      
        $("footer.sticky-footer").slideToggle("fast");
        $(".pre-footer").toggleClass("rotate");    
        $('html, body').animate({
          scrollTop: $("footer.sticky-footer").offset().top
      }, 200);

        
      });

$("#sidebarToggleTop").click(function() {
    $( this ).toggleClass( "open" );
    //$ ('.flex-column').toggleClass( "fixed" );
  });
 
var subsec = $(".subsec");
$(".links").on("click", function () {
    $(this).toggleClass('translate');
    $('.links').not(this).removeClass('translate');
    var target = $(this).next(".subsec");
    subsec.not(target).hide('fast')
    target.toggle("fast");
}); 

$(document).ready(function(){
    $(".view-credit").click(function(){
      $(".detail-credit-hide").slideToggle("fast");
    });
  });

  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

    $(function () {
        $('input[name="showthis"]').hide();

        //show it when the checkbox is clicked
        $('input[name="checkbox"]').on('click', function () {
            if ($(this).prop('checked')) {
                $('input[name="showthis"]').fadeIn();
            } else {
                $('input[name="showthis"]').hide();
            }
        });
    });

    var opts = {
      lines: 12,
      angle: 0.00, 
      lineWidth: 0.52,        
      pointer: {
        length: 0.55,
        strokeWidth: 0.04,       
        color: '#233976'
      },  
      limitMax: true,
      colorStart: '', 
      strokeColor: '#ffffff00',
      generateGradient: false
    };
    var target = document.getElementById('foo'); // your canvas element
    var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
    gauge.maxValue = 549; // set max gauge value
    gauge.animationSpeed = 45; // set animation speed (32 is default value)
    
    function chamar(valor){
      valor=document.getElementById("campo").value;
      gauge.set(480); // set actual value
    
    }
    
    
    