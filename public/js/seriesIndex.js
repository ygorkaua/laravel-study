// var responsiveSlider = function () {
//     var slider = document.getElementsByClassName("banner");
//     var sliderWidth = slider.offsetWidth;
//     var slideList = document.getElementsByClassName("slider");
//     var count = 1;
//     var items = document.querySelectorAll(".slider li").length;
//     var prev = document.getElementsByClassName("prev");
//     var next = document.getElementsByClassName("next");

//     window.addEventListener("resize", function () {
//         sliderWidth = slider.offsetWidth;
//     });

//     var prevSlide = function () {
//         if (count > 1) {
//             count = count - 2;
//             slideList.style.left = "-" + count * sliderWidth + "px";
//             count++;
//         } else if ((count = 1)) {
//             count = items - 1;
//             slideList.style.left = "-" + count * sliderWidth + "px";
//             count++;
//         }
//     };

//     var nextSlide = function () {
//         if (count < items) {
//             slideList.style.left = "-" + count * sliderWidth + "px";
//             count++;
//         } else if ((count = items)) {
//             slideList.style.left = "0px";
//             count = 1;
//         }
//     };

//     next.addEventListener("click", function () {
//         nextSlide();
//     });

//     prev.addEventListener("click", function () {
//         prevSlide();
//     });

//     setInterval(function () {
//         nextSlide();
//     }, 5000);
// };

// window.onload = function () {
//     responsiveSlider();
// };

// // let slideIndex = 0;
// // showSlides();

// // function showSlides() {
// //     let i;
// //     let slides = document.getElementsByClassName("my-slides");
// //     let dots = document.getElementsByClassName("slide-dot");
// //     for (i = 0; i < slides.length; i++) {
// //         slides[i].style.display = "none";
// //     }
// //     slideIndex++;
// //     if (slideIndex > slides.length) {
// //         slideIndex = 1;
// //     }
// //     for (i = 0; i < dots.length; i++) {
// //         dots[i].className = dots[i].className.replace(" active", "");
// //     }
// //     console.log(slideIndex);
// //     slides[slideIndex - 1].style.display = "block";
// //     dots[slideIndex - 1].className += " active";
// //     setTimeout(showSlides, 4000);
// // }
