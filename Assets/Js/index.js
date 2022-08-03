// A $( document ).ready() block.
$(document).ready(function () {
  $(".button-teste-numero").click(function () {
    $(".button-teste-numero").css('color', 'white');
    $(".teste").css('color', 'white');
    // $(this).text('Processing…');
    var valor = $(this).val();
    $('.teste').text(valor);
    //   $( ".button-teste-numero" ).click(function() {   
    //     $( '.teste' ).css('color', 'red');    
    //     $('.teste').text('Urubu');        
    // });                  
  });

  // Take buttons's attr
  $('.button-teste-texto').click(function () {
    var nome = $(this).attr('name');
    $('.teste').text(nome);
  })

  // Fade buttons
  $(".button-teste-fadein").click(function () {
    $('.teste').fadeIn();
  });
  $(".button-teste-fadeout").click(function () {
    $('.teste').fadeOut();
  });

  // FadeToggle Imgs
  $(".button-fade1").click(function () {
    $('.img1').fadeToggle();
  });
  $(".button-fade2").click(function () {
    $('.img2').fadeToggle();
  });
  $(".button-fade3").click(function () {
    $('.img3').fadeToggle();
  });

  // Button switch img
  $(".button-troca").click(function () {
    $('.img-troca').attr('src', 'Assets/Img/aranha.jfif');
  });

});

