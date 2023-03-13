// var toggler = document.getElementsByClassName('has-tree');
// var i;

// for (i = 0; i < toggler.length; i++) {
//   toggler[i].addEventListener('click', function () {
//     this.parentElement.querySelector('.child').classList.toggle('open');
//     this.classList.toggle('arrow-down');
//   });
// }

$(document).ready(function () {
  $('.has-tree').click(function () {
    $(this).next('.child').toggleClass('open');
    $(this).toggleClass('arrow-down');
  });
});

document.addEventListener('DOMContentLoaded', function () {
  $('#dark-mode').on('click', function () {
    $('body').attr('data-bs-theme', (_, attr) => attr == "light" ? "dark" : "light");
    $(this).toggleClass('btn-outline-secondary btn-primary');
    $(this).find('i').toggleClass('fa-moon fa-sun');
  });
});