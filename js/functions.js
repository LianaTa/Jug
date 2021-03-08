const buyButton = document.querySelector(".btn--buy");
const subscribePopUp = document.querySelector(".modal-subscribe");
const refuseButton = document.querySelector(".btn--close");
const feedbackPopUp = document.querySelector(".modal-feedback");
const gobackLink = document.querySelector(".goback");
const gobackLink2 = document.querySelector(".goback2");


buyButton.addEventListener("click", function (evt) {
  subscribePopUp.classList.add("modal-show");

});

refuseButton.addEventListener("click", function (evt) {
  feedbackPopUp.classList.add("modal-show");

});

gobackLink.addEventListener("click", function (evt) {
  subscribePopUp.classList.remove("modal-show");
});

gobackLink2.addEventListener("click", function (evt) {
  feedbackPopUp.classList.remove("modal-show");
});
