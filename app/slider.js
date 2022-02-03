const btnLeft = document.querySelector(".btn__left");
const btnRight = document.querySelector(".btn__right");
const slider = document.querySelector(".slider__image");
const data_image = [
    {
        img: "./person/doctor1.jpg"
    },
    {
        img: "./person/doctor2.jpg"
    },
    {
        img: "./person/doctor3.jpg"
    },
    {
        img: "./person/doctor5.jpg"
    }
];

let currentTarget = 0;

// window.addEventListener("click", function(){
//     showPerson();
// });
console.log(window);
btnLeft.addEventListener("click", function() {
    currentTarget--;
    if(currentTarget < 0) {
        currentTarget = data_image.length-1;
    }
    showPerson();
});

btnRight.addEventListener("click", function() {
    // console.log(btnRight);
    currentTarget++;
    if(currentTarget >= data_image.length) {
        currentTarget = 0;
    }
    showPerson();
});

function showPerson() {
    let infor = data_image[currentTarget];
    slider.src = infor.img;
}