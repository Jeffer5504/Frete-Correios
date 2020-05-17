$(document).ready(function () {
  // Função do botão seguinte
  $(".next").click(function () {
    $(".form")
      .find("section.ative")
      .removeClass("ative")
      .next("section")
      .addClass("ative");
  });

  // Função do botão anterior
  $(".prev").click(function () {
    $(".form")
      .find("section.ative")
      .removeClass("ative")
      .prev()
      .addClass("ative");
  });

  // Função para por mascaras nos inputs
  $("#cep-o").mask("99.999-999");
  $("#cep-d").mask("99.999-999");
  $(".decimal").mask("00,00", { reverse: true });

  //Função para só permitir entrada de números nos inputs númericos.
  $(document).on("keypress", ".number", function () {
    return event.charCode >= 48 && event.charCode <= 57;
  });
});
