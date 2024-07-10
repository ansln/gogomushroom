//image reveal 
ScrollReveal({
    reset: false,
    distance: '60px',
    duration: 1500,
    delay: 400
});

//scroll reveal function
ScrollReveal().reveal('#r-img', { delay: 100, origin: 'top' });
ScrollReveal().reveal('#r-top1', { delay: 100, origin: 'top' });
ScrollReveal().reveal('#r-top2', { delay: 200, origin: 'top' });
ScrollReveal().reveal('#r-top3', { delay: 300, origin: 'top' });
ScrollReveal().reveal('#r-top4', { delay: 400, origin: 'top' });

ScrollReveal().reveal('#ts-h1', { delay: 200, origin: 'left' });
ScrollReveal().reveal('#ts-h3', { delay: 300, origin: 'left' });
ScrollReveal().reveal('#r-left3', { delay: 400, origin: 'left' });
ScrollReveal().reveal('#r-left4', { delay: 500, origin: 'left' });
ScrollReveal().reveal('#r-left5', { delay: 600, origin: 'left' });
ScrollReveal().reveal('#r-left6', { delay: 1000, origin: 'left' });

ScrollReveal().reveal('#r-right3', { delay: 400, origin: 'right' });
ScrollReveal().reveal('#r-right4', { delay: 800, origin: 'right' });
ScrollReveal().reveal('#r-right5', { delay: 1000, origin: 'right' });

ScrollReveal().reveal('#c-ab-s1', { delay: 200, origin: 'bottom'});
ScrollReveal().reveal('#c-ab-s2', { delay: 300, origin: 'bottom' });
ScrollReveal().reveal('#c-ab-s3', { delay: 400, origin: 'bottom' });
ScrollReveal().reveal('#c-ab-s4', { delay: 500, origin: 'bottom' });
ScrollReveal().reveal('#c-ab-s5', { delay: 600, origin: 'bottom' });
ScrollReveal().reveal('#c-ab-s6', { delay: 800, origin: 'bottom' });
ScrollReveal().reveal('#c-ab-s7', { delay: 700, origin: 'bottom' });
ScrollReveal().reveal('#ts-bt', { delay: 400, origin: 'bottom' });

//slide for mobile 
var swiper = new Swiper(".mySwiper", {
  lazy: true,
  spaceBetween: 30,
  centeredSlides: true,
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false
  },
    pagination: {
    el: ".swiper-pagination",
    clickable: true
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  }
});

var swiper = new Swiper(".productSwipe", {
  lazy: true, 
  autoplay: {
      delay: 7000,
      disableOnInteraction: false
  },
  pagination: {
      el: ".swiper-pagination",
  },
});

// scroll to top function
var mybutton = document.getElementById("myBtn");

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

var swiper = new Swiper(".slide-desktop", {
  cssMode: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});

function clickCopy() {
    var copyText = document.getElementById("phone");

    copyText.select();
    copyText.setSelectionRange(0, 99999);
    navigator.clipboard.writeText(copyText.value);

    Swal.fire({
        toast: true,
        icon: 'success',
        title: 'You copy this number',
        timer: 2000,
        position: 'top-end',
        showConfirmButton: false
    })
}
function sendMsg() {
    var sendBtn = document.getElementById("sendMsgBtn");

    Swal.fire({
        toast: true,
        icon: 'success',
        title: 'Thanks for contacting us!',
        timer: 4000,
        position: 'top-end',
        showConfirmButton: false
    });
    
    setTimeout(reloadPage, 4000);
    function reloadPage() {window.location.replace("/")}
}
