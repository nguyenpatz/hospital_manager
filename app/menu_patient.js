const ykien = document.querySelector(".ykien");
const show_menu__more = document.querySelector(".sidebar__menu-more");

ykien.addEventListener("click", function() {
    show_menu__more.classList.toggle("show__menu-more");
});

const btn__sidebar = document.querySelector(".btn__sidebar");
//di chuyển sidebar
const sidebar = document.querySelector(".sidebar");


btn__sidebar.addEventListener("click", function() {
    btn__sidebar.classList.toggle("click");
    sidebar.classList.toggle("sidebar__move");
});