const ykienBtn = document.querySelector(".ykien_btn");


const ykienList = document.querySelector(".ykien_list");

const icon_arrow = document.querySelector(".icon_arrow");

ykienBtn.addEventListener("click", function() {
    ykienList.classList.toggle("ykien_show");
    icon_arrow.classList.toggle("rotate");
});


// select all li in ul
// jquery
$('nav ul li').click(function() {
    // console.log($(this));
    $(this).addClass("active").siblings().removeClass("active");
}); 

//menu btn

const menuBtn = document.querySelector(".btn");
const sidebar = document.querySelector(".sidebar");
menuBtn.addEventListener("click", function() {
   menuBtn.classList.toggle("click"); 
   sidebar.classList.toggle("sidebar_show");
});