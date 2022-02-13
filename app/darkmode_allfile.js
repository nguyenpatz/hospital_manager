//start register file
const darkmode__icon = document.querySelector(".darkmode__icon");
const login__container = document.querySelector(".login__container");
const login__title = document.querySelector(".login__title");
// const username = document.querySelector(".username");
// const password = document.querySelector(".password");
// const cpassword = document.querySelector(".cpassword");
const input_field = document.getElementsByTagName("input");
// console.log(input);


darkmode__icon.addEventListener("click", function() {
    document.body.style.background = "#444444";

    login__container.style.background = "#000000";
    login__title.style.color = "#fff";
    // username.style.background = "#000";
    // username.style.color = "#fff";
    // password.style.background = "#000";
    // password.style.color = "#fff";
    // cpassword.style.background = "#000";
    // cpassword.style.color = "#fff";
    // input_field.classList.toggle("change_input");

    
    for(let i = 0; i < input_field.length; i++) {
        input_field[i].classList.toggle("change_input");
    }
});
// end register file