//scroll animation that fades images in
const checkpoint = 630;

window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll <= checkpoint) {
    opacity = 0 - currentScroll / checkpoint;
  } else {
    opacity = 1;
  }
  document.querySelector("#band-animation").style.opacity = opacity;
});

//form validation checks
