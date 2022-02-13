const ykien = document.querySelector(".ykien");
const show_menu__more = document.querySelector(".sidebar__menu-more");

ykien.addEventListener("click", function() {
    show_menu__more.classList.toggle("show__menu-more");
});

const btn__sidebar = document.querySelector(".btn__sidebar");
//di chuyển sidebar và ẩn đi nút menu
const sidebar = document.querySelector(".sidebar");



btn__sidebar.addEventListener("click", function() {
    btn__sidebar.classList.add("remove__btn__sidebar");
    sidebar.classList.add("sidebar__move");
});

//tắt sidebar và hiện nút menu 

const close__btn = document.querySelector(".close__btn");

close__btn.addEventListener("click", function() {
    btn__sidebar.classList.remove("remove__btn__sidebar");
    sidebar.classList.remove("sidebar__move");
});