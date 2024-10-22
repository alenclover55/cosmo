// function showPopup(e) {
//     let event = new Event("modalshow")
//     window.dispatchEvent(event)
//     setTimeout(() => {
//         $(".popup").is(".active") && $(".popup").removeClass("active"),
//         $(".overlayed").removeClass("opacity-0 invisible"),
//         $("body").addClass("overflow-hidden"),
//         $(".popup." + e).removeClass("hidden invisible"),
//         setTimeout(()=>{
//             $(".popup." + e).addClass("active")
//         }
//         , 100)
//     }, 300)
// }
// function closePopup(e) {
//     $(".popup").is(".active") && $(".popup").removeClass("active"),
//     $(".popup." + e).addClass("closed"),
//     $(".overlayed").addClass("opacity-0 invisible"),
//     $("body").removeClass("overflow-hidden"),
//     $(".popup." + e).addClass("hidden invisible").removeClass("closed")
// }
// $(document).ready(function() {
//     $(".popup__close").click(function(e) {
//         return $(".popup").addClass("closed"),
//         setTimeout(()=>{
//             $(".overlayed").addClass("opacity-0 invisible"),
//             $("body").removeClass("overflow-hidden"),
//             $(".popup").addClass("hidden invisible").removeClass("closed active")
//         }
//         , 300),
//         !1
//     }),
//     $(".overlayed").click(function(e) {
//         (e.target || e.srcElement).className.search("overlay") || ($(".popup").addClass("closed"),
//         setTimeout(()=>{
//             $(".overlayed").addClass("opacity-0 invisible"),
//             $("body").removeClass("overflow-hidden"),
//             $(".popup").addClass("hidden invisible").removeClass("closed active")
//         }
//         , 300))
//     }),
//     $("[rel=popup]").click(function(e) {
//         return showPopup($(this).attr("data-popup")),
//         !1
//     })
// });
