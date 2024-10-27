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
