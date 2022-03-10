$(document).ready(function () {
    handleHeader();
});

function handleHeader() {
  if ($("#header").length > 0) {
      handleTransparency("#header", "#header-spacer");
      $(window).scroll(function () {
        handleTransparency("#header", "#header-spacer");
      });
  }
}

function handleTransparency(checkId, spacer) {
    if ($(window).scrollTop() > 200) {
        $(checkId).css({"position": "fixed"});
        $(checkId).attr("data-is-transparent", false);
        $(spacer).attr("data-is-transparent", false);
    } else if ($(window).scrollTop() < 10) {
        $(checkId).css({"position": "absolute"});
        $(checkId).attr("data-is-transparent", true);
        $(spacer).attr("data-is-transparent", true);
    } else {
        $(checkId).attr("data-is-transparent", true);
        $(spacer).attr("data-is-transparent", true);
    }
}