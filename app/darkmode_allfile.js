//start register file
const darkmode__icon = document.querySelector(".darkmode__icon");
const login__container = document.querySelector(".login__container");
const login__title = document.querySelector(".login__title");
const username = document.querySelector(".username");
const password = document.querySelector(".password");
const cpassword = document.querySelector(".cpassword");
// console.log(input);


darkmode__icon.addEventListener("click", function() {
    // darkmode__icon.src = 
    document.body.style.background = "#444444";
    login__container.style.background = "#000000";
    login__title.style.color = "#fff";
    username.style.background = "#000";
    username.style.color = "#fff";
    password.style.background = "#000";
    password.style.color = "#fff";
    cpassword.style.background = "#000";
    cpassword.style.color = "#fff";
})
// end register file