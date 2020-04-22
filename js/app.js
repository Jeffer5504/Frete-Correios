// Função do botão seguinte
$(document).ready(function(){
    $('.next').click(function(){
       $('.form').find('section.ative').next('section').
       addClass('ative').prev().
       removeClass('ative');
    })
 });
 
 // Função do botão anterior
 $(document).ready(function(){
    $('.prev').click(function(){
       $('.form').find('section.ative').prev().
       addClass('ative').next().
       removeClass('ative');
    })
 });

 // Função para por mascaras nos inputs
$(document).ready(function(){
    $("#cep-o").mask('99.999-999');
    $("#cep-d").mask('99.999-999');

    $('.decimal').mask("00,00", {reverse: true});
    
    //Função para só permitir entrada de números nos inputs númericos.
    $(document).on('keypress','.number',function(){
       return event.charCode >= 48 && event.charCode <= 57;	
    });
    
 });