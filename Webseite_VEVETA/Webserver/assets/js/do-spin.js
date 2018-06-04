function addspinn(element) {
  $(element).children().addClass("fa-spin");
  $(element).children().css( "color", "red" );

  location.reload();
}
