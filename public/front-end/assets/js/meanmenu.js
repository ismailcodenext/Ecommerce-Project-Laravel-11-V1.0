(function ($) {
  "use strict";

  var windowOn = $(window);

  // Mobile Menu Initialization
  $("#mobile-menu").meanmenu({
    meanMenuContainer: ".mobile-menu",
    meanScreenWidth: "991",
    meanExpand: '<i class="fal fa-plus"></i>',
  });

  $("#mobile-menu-2").meanmenu({
    meanMenuContainer: ".mobile-menu-2",
    meanScreenWidth: "1199",
    meanExpand: '<i class="fal fa-plus"></i>',
  });

  // Sidebar Toggle
  $(".sidebar-toggle-btn").on("click", function () {
    $(".mobile-sidebar-area").addClass("sidebar-opened");
    $(".body-overlay").addClass("opened");
  });

  $(".sidebar__close-btn, .body-overlay").on("click", function () {
    $(".mobile-sidebar-area").removeClass("sidebar-opened");
    $(".body-overlay").removeClass("opened");
  });

  // Search Toggle
  $(".search-toggle").on("click", function () {
    $(".search__area").addClass("opened");
  });

  $(".search-close-btn").on("click", function () {
    $(".search__area").removeClass("opened");
  });

  // Sticky Header
  windowOn.on("scroll", function () {
    var scroll = $(window).scrollTop();
    if (scroll < 100) {
      $("#header-sticky").removeClass("header__sticky");
    } else {
      $("#header-sticky").addClass("header__sticky");
    }
  });

  // Data Attribute CSS
  $("[data-background]").each(function () {
    $(this).css("background-image", "url(" + $(this).attr("data-background") + ")");
  });

  $("[data-width]").each(function () {
    $(this).css("width", $(this).attr("data-width"));
  });

  $("[data-bg-color]").each(function () {
    $(this).css("background-color", $(this).attr("data-bg-color"));
  });

  // Nice Select
  $("select").niceSelect();

  // Scrollbox Initialization
  $("#topHeader").scrollbox();
  $("#clientBrand").scrollbox();

  // Jquery Tabs Initialization
  $(".tabs-inner").jQueryTab({
    activeClass: "active",
    responsive: true,
    collapsible: true,
  });
})(jQuery);
