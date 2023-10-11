$(window).scroll(function () {
  if ($(this).scrollTop() > 50) {
    $("#toFade").addClass("fadeOut");
    console.log("hello");
  } else {
    $("#toFade").removeClass("fadeOut");
  }
});

//get current time
2;
const today = new Date();
const time =
  today.getHours() +
  "h:" +
  today.getMinutes() +
  "m:" +
  today.getSeconds() +
  "s";
document.querySelector(".time").textContent = time;
