// Menu Makanan
$(() => {
    $(".new-card").slice(0,4).show()
    $(".load-more").click(function(e){
        e.preventDefault()
        $(".new-card:hidden").slice(0, 4).slideDown()
    })
})

// // Menu Minuman
// $(() => {
//     $(".new-card2").slice(0,4).show()
//     $(".load-more2").click(function(a){
//         a.preventDefault()
//         $(".new-card2:hidden").slice(0, 4).slideDown()
//     })
// })

// Nav-link Active
$(document).ready(function () {
    $(".nav-link").click(function () {
        $(".nav-link").removeClass("active")
        $(this).addClass("active")
    })
})
//Populer Categories
var swiper = new Swiper(".mySwiperPopuler", {
    grabCursor: true,
    spaceBetween: 20,
    centeredSlides: false,
    slidesPerView: "auto",
    navigation: {
        nextEl: ".bxs-chevron-right-circle",
        prevEl: ".bxs-chevron-left-circle",
    },
});
// Tempat
var swiper2 = new Swiper(".mySwiperBlog", {
    grabCursor: true,
    spaceBetween: 20,
    centeredSlides: false,
    slidesPerView: "auto",
    pagination: {
      el: ".swiper-pagination",
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
});