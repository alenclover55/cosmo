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

new Swiper("#coinflip-history", {
  slidesPerView: 15,
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

$(".provider-btn").click(function () {
  if ($(".providers__wrapper").hasClass("hidden")) {
    $(".provider-btn-text").text("Отменить выбор");
    $(".providers__wrapper").removeClass("hidden").addClass("flex");
    $(".games__wrapper").addClass("hidden").removeClass("flex");
    $(".provider-btn-arrow")
      .removeClass("rotate-45")
      .addClass("rotate-[225deg]");
  } else {
    $(".provider-btn-arrow")
      .removeClass("rotate-[225deg]")
      .addClass("rotate-45");
    $(".provider-btn-text").text("Выбрать провайдера");
    $(".providers__wrapper").addClass("hidden").removeClass("flex");
    $(".games__wrapper").removeClass("hidden").addClass("flex");
  }
});

$(document).ready(function () {
  $(".tab-page").hide();

  $(".tab-page").first().show();

  $(".tab-button").on("click", function () {
    $(".tab-button").removeClass("active");

    $(this).addClass("active");

    var index = $(".tab-button").index(this);
    $(".tab-page").hide();

    $(".tab-page").eq(index).show();
  });
});

$(document).ready(function () {
  function defaultState() {
    $(".icon-close").hide();
    $(".search-sidebar").hide();
    $(".search-btn-text").text("Поиск");
    $(".icon-search").show();
  }

  $(".search-btn-open").click(() => {
    if ($(".search-sidebar").is(":visible")) {
      defaultState();
    } else {
      $(".icon-search").hide();
      $(".icon-close").show();
      $(".search-sidebar").show();
      $(".search-btn-text").text("Отмена");
    }
  });

  $("#search-close-btn").click(() => {
    if ($(".search-sidebar").is(":visible")) {
      defaultState();
    }
  });
});
