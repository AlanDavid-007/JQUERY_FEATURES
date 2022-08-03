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
  $('.button-teste-texto').click(function() {
    var nome = $(this).attr('name');
    $('.teste').text(nome);
  })
  $(".button-teste-fadein").click(function () {
    $('.teste').fadeIn();
  });
  $(".button-teste-fadeout").click(function () {
    $('.teste').fadeOut();
  });
  $(".button-fade1").click(function () {
    $('.img1').fadeToggle();
  });
  $(".button-fade2").click(function () {
    $('.img2').fadeToggle();
  });
  $(".button-fade3").click(function () {
    $('.img3').fadeToggle();
  });
});

