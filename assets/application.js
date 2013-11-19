$(document).ready(function() {

  $("form.contact").on("submit", function(e) {
    var $fadeElement = $(".fade-on-submit");
    if (!$fadeElement) return;

    e.preventDefault();
    fadeOutAndRevealBeneath($fadeElement);
  });

  var imageId = 1;
  $("img.replaceable").on("click", function() {
    var image = $(this);

    imageId++;
    if (imageId > 3) imageId = 1;

    image.attr("src", "assets/timeline_images/" + imageId + ".jpg");
  });

  $(".switch-on-click").on("click", function() {
    fadeOutAndRevealBeneath($(this), 200, function() {
      $("#searchField").focus();
    });
  });

  function fadeOutAndRevealBeneath(element, speed, completionFunction) {
    if (!speed) speed = 400;

    var hidden = element.siblings(".hidden");
    element.fadeOut(speed, function() {
      hidden.fadeIn(speed, function() {
        hidden.removeClass("hidden");
        completionFunction();
      });
    });
  }
});