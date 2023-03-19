$(function() {
  $('.sidebarCollapseDefault').on('click', function() {
    $('.sidebar').toggleClass('active');
    $('.content').toggleClass('active');
  });
});

$(function () {
  $('.has-tree').on('click', function () {
    $(this).next('.child').toggleClass('open');
    $(this).toggleClass('arrow-down');
  });
});

document.addEventListener('DOMContentLoaded', function () {
  $('#dark-mode').on('click', function () {
    $('html').attr('data-bs-theme', (_, attr) => attr == "light" ? "dark" : "light");
    $(this).toggleClass('btn-outline-secondary btn-primary');
    $(this).find('i').toggleClass('fa-moon fa-sun');
  });
});