$(document).ready(function() {

  $("form.fade-on-submit").on("submit", function(e) {
    var $fadeElement = $(".fade-on-submit");
    if (!$fadeElement) return;

    e.preventDefault();
    $fadeElement.fadeOut(400, function() {
      var $hidden = $(".hidden");
      $hidden.fadeIn(400);
      $hidden.removeClass("hidden");
    });
  });

  var imageId = 1;
  $("img.replaceable").on("click", function() {
    var image = $(this);

    imageId++;
    if (imageId > 3) imageId = 1;

    image.attr("src", "assets/timeline_images/" + imageId + ".jpg");
  });
});