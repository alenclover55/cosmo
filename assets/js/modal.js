function showPopup(selector) {
  $(".overlayed").addClass("!opacity-100 !visible pointer-events-auto");
  $(selector).addClass("!block !visible");
}

$(".popup__close").click(() => {
  $(".overlayed").removeClass("!opacity-100 !visible pointer-events-auto");
  $(".popup").removeClass("!block !visible");
});

$("#sign-in-btn").click(function () {
  showPopup(".popup--sign-in");
});

$("#sign-up-btn").click(function () {
  showPopup(".popup--sign-up");
});

$("#wallet-modal").click(function () {
  showPopup(".popup--wallet");
});

$("#level-popup-btn").click(function () {
  showPopup(".levels_popup");
});

$("#cashback-modal-btn").click(function () {
  showPopup(".popup--cashback");
});

$("#support-btn").click(function () {
  showPopup(".popup--support");
});

let isActive = false;
$("#toggle-animation").click(function () {
  $("#toggle-animation").toggleClass("active");
  isActive = !isActive;
  if (!isActive) {
    $(this).find("span").text("Выкл.");
  } else {
    $(this).find("span").text("Вкл.");
  }
});

new Swiper("#swiper-levels", {
  slidesPerView: 1.5,
  spaceBetween: 12,
  speed: 600,
  navigation: {
    prevEl: "#swiper-levels-prev",
    nextEl: "#swiper-levels-next",
  },
  breakpoints: {
    414: {
      slidesPerView: 1.5,
    },
    355: {
      slidesPerView: 1.2,
    },
    0: {
      slidesPerView: 1.05,
    },
  },
});

new Swiper(".mines-history", {
  slidesPerView: 10,
  speed: 600,
});

$(".menu-full-btn").click(function () {
  if ($(this).hasClass("active")) {
    $(this).removeClass("active");
    $(this).parent().removeClass("active");
  } else {
    $(this).addClass("active");
    $(this).parent().addClass("active");
  }
});
