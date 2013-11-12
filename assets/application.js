$(function() {

  $("form.fade-on-submit").on('submit', function(e) {
    var $fadeElement = $(".fade-on-submit");
    if (!$fadeElement) return;

    e.preventDefault();
    $fadeElement.fadeOut(400, function() {
      var $hidden = $(".hidden");
      $hidden.fadeIn(400);
      $hidden.removeClass("hidden");
    });
  });
});