'use strict';

let familyClinic = document.querySelector('#familyClinic');
const color = '#FFDBE5';
familyClinic.style.setProperty('--background', color)
const colors = [
  '#FFD873',
  '#B1E2D3',
  '#B0D6F1',
  '#FFDBE5',
]
let mainPictureAbout = document.querySelector('#mainPictureAbout');
const url = 'url(/images/mainPictureAbout1.png)';
mainPictureAbout.style.setProperty('--background-image', url)
const urls = [
  'url(/images/mainPictureAbout2.png)',
  'url(/images/mainPictureAbout3.png)',
  'url(/images/mainPictureAbout4.png)',
  'url(/images/mainPictureAbout1.png)',
  'url(/images/mainPictureAbout5.jpg)',
]
setInterval(() => {
  const color = colors[Math.floor(Math.random()*colors.length)]
  const url = urls[Math.floor(Math.random()*urls.length)]
  familyClinic.style.setProperty('--background', color)
  mainPictureAbout.style.setProperty('--background-image', url)
}, 10000)

document.querySelector('.burger').addEventListener('click', function(){
    this.classList.toggle('active');
    document.querySelector('.main_menu').classList.toggle('open');
    // document.querySelector('.main_menu').innerHTML += '<div class="tel_header764"><div id="iconTel"></div> <a class="tel" href=”tel:+7911465-10-93”>+7 (911) 465-10-93</a></div>';
})
document.addEventListener('DOMContentLoaded', function() {
  let dropdownHeadings = document.querySelectorAll('.dropdown-heading');
    
    dropdownHeadings.forEach(function(heading) {
      heading.addEventListener('click', function() {
        let targetId = this.getAttribute('data-target');
        let targetMenu = document.querySelector('.' + targetId);
        
        if (targetMenu.classList.contains('active')) {
          targetMenu.classList.remove('active');
        } else {
          targetMenu.classList.add('active');
        }
      });
    });
  });



function scrollToBottom() {
  let start = window.pageYOffset || document.documentElement.scrollTop;
  let end = document.documentElement.scrollHeight - window.innerHeight;
  let distance = end - start;
  let duration = 3000; 

  let startTime;

  function animate(currentTime) {
      if (!startTime) startTime = currentTime;
      let elapsedTime = currentTime - startTime;
      let progress = Math.min(elapsedTime / duration, 1);
      let easeInOutQuad = progress < 0.5 ? 2 * progress * progress : 1 - Math.pow(-2 * progress + 2, 2) / 2;

      window.scrollTo(0, start + distance * easeInOutQuad);

      if (elapsedTime < duration) {
          requestAnimationFrame(animate);
      }
  }

  requestAnimationFrame(animate);
}

document.addEventListener("DOMContentLoaded", function() {
  let toothbottom = document.getElementById('tooth');
  toothbottom.addEventListener('click', function() {
      scrollToBottom();
      return false;
  });
});
function scrollToTop() {
  let start = window.pageYOffset || document.documentElement.scrollTop;
  let end = 0;
  let distance = start - end;
  let duration = 3000; 

  let startTime;

  function animate(currentTime) {
      if (!startTime) startTime = currentTime;
      let elapsedTime = currentTime - startTime;
      let progress = Math.min(elapsedTime / duration, 1);
      let easeInOutQuad = progress < 0.5 ? 2 * progress * progress : 1 - Math.pow(-2 * progress + 2, 2) / 2;

      window.scrollTo(0, start - distance * easeInOutQuad);

      if (elapsedTime < duration) {
          requestAnimationFrame(animate);
      }
  }

  requestAnimationFrame(animate);
}

document.addEventListener("DOMContentLoaded", function() {
  let tootup = document.getElementById('toothUp');
  tootup.addEventListener('click', function() {
      scrollToTop();
      return false;
  });
});

const countDownDate = new Date("Dec 31,2024 24:00:00").getTime();

let time = setInterval(function(){
  let now = new Date().getTime();

  let distance = countDownDate - now;

  let days = Math.floor(distance / (1000*60*60*24));
  let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  let seconds = Math.floor((distance % (1000 * 60)) / 1000);

  if(days < 10){
    document.getElementById('days').textContent = '0'+days
  } else{
    document.getElementById('days').textContent = days;
  }
  if(hours < 10){
    document.getElementById('hours').textContent = '0'+hours
  } else{
    document.getElementById('hours').textContent = hours;
  }
  if(minutes < 10){
    document.getElementById('minutes').textContent = '0'+minutes
  } else{
    document.getElementById('minutes').textContent = minutes;
  }
  if(seconds < 10){
    document.getElementById('seconds').textContent = '0'+seconds
  } else{
    document.getElementById('seconds').textContent = seconds;
  }
 

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);


document.getElementById("iconTel").addEventListener("click", function() {
  window.location.href = "tel:+79114651093";
});

// window.addEventListener('scroll', function() {
//   let header = document.getElementById('header');
//   if (window.scrollY > 0) {
//     header.classList.add('scrolling');
//   } else {
//     header.classList.remove('scrolling');
//   }
// });





var swiper = new Swiper(".slide-content", {
  slidesPerView: 3,
  spaceBetween: 20,
  slidesPerGroup: 1,
  loop: true,
  loopFillGroupWithBlank: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    425: {
      slidesPerView: 1,
      slidesPerGroup: 1,
    },
    768: {
      slidesPerView: 1.02,
      slidesPerGroup: 1,
    },
    1024: {
      slidesPerView: 2,
      spaceBetween: 20,
      slidesPerGroup: 1,
    },
    1440: {
      slidesPerView: 3,
      spaceBetween: 20,
      slidesPerGroup: 1,
    },
    1640: {
      slidesPerView: 3,
      spaceBetween: 20,
      slidesPerGroup: 1,
    },
    1920: {
      slidesPerView: 3,
      spaceBetween: 20,
      slidesPerGroup: 1,
    },
  }
});
document.querySelectorAll(".swiper-container").forEach(function (swiperContainer, index) {
  swiperContainer.classList.add("swiper-slider-" + index);

  var dragSize = swiperContainer.dataset.dragSize ? parseInt(swiperContainer.dataset.dragSize) : 50;
  var freeMode = swiperContainer.dataset.freeMode ? JSON.parse(swiperContainer.dataset.freeMode) : false;
  var loop = swiperContainer.dataset.loop ? JSON.parse(swiperContainer.dataset.loop) : false;
  var slidesDesktop = swiperContainer.dataset.slidesDesktop ? parseInt(swiperContainer.dataset.slidesDesktop) : 2;
  var slidesTablet = swiperContainer.dataset.slidesTablet ? parseInt(swiperContainer.dataset.slidesTablet) : 2;
  var slidesMobile = swiperContainer.dataset.slidesMobile ? parseFloat(swiperContainer.dataset.slidesMobile) : 1;
  var spaceBetween = swiperContainer.dataset.spaceBetween ? parseInt(swiperContainer.dataset.spaceBetween) : 20;

  var swiper = new Swiper(".swiper-slider-" + index, {
    direction: "horizontal",
    loop: loop,
    freeMode: freeMode,
    spaceBetween: spaceBetween,
    breakpoints: {
      1920: {
        slidesPerView: slidesDesktop
      },
      992: {
        slidesPerView: slidesTablet
      },
      320: {
        slidesPerView: slidesMobile
      }
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
      dragSize: dragSize
    }
  });
});

let doctorBlocks = document.querySelectorAll('.doctors_block')
for (const doctorBlock of doctorBlocks) {
  let doctorTextBlocks = doctorBlock.querySelectorAll(".content_doctors_block");
  for (const doctorTextBlock of doctorTextBlocks) {
    let spans = doctorTextBlock.querySelectorAll('.DoctorsformPodrobnee');
    let doctorsBlockTextHover = doctorBlock.querySelector('.doctors_block_text--hover');
    spans.forEach(element => {
        element.addEventListener('click', function(e){
        doctorTextBlock.style.display = 'none';
        doctorsBlockTextHover.style.display = 'flex';

        doctorsBlockTextHover.querySelector('.DoctorsformBack').addEventListener('click', function(){
            doctorTextBlock.style.display = 'block';
            doctorsBlockTextHover.style.display = 'none';
        });
        
       });
    });
  }
}

let commentsBlocks = document.querySelectorAll('.comments_block')
for (const commentsBlock of commentsBlocks) {
  let commentsContentBlocks = commentsBlock.querySelectorAll(".content_comments_block_front");
  for (const commentsContentBlock of commentsContentBlocks) {
    let spans = commentsContentBlock.querySelectorAll('.CommentsformPodrobnee');
    let commentsBlockBehind = commentsBlock.querySelector('.comments_block_behind');
    spans.forEach(element => {
        element.addEventListener('click', function(e){
        commentsContentBlock.style.display = 'none';
        commentsBlockBehind.style.display = 'flex';

        commentsBlockBehind.querySelector('.CommentsformBack').addEventListener('click', function(){
          commentsContentBlock.style.display = 'flex';
          commentsBlockBehind.style.display = 'none';
        });
        
       });
    });
  }
}


document.addEventListener("DOMContentLoaded", function() {
  let clinicServices = document.querySelector('#clinic_services');
  let toothAppear = document.querySelector('#toothAppearClinicServices');
  let timeoutId;

  function showToothAppear() {
    toothAppear.style.display = "block";
  }

  function handleScroll() {
    clearTimeout(timeoutId);
    let clinicServicesRect = clinicServices.getBoundingClientRect();

    if ((clinicServicesRect.top >= 0 && clinicServicesRect.top <= window.innerHeight) ||
        (clinicServicesRect.bottom >= 0 && clinicServicesRect.bottom <= window.innerHeight)) {
     
      timeoutId = setTimeout(showToothAppear, 5000); 
    } else {
      toothAppear.style.display = "none";
    }
  }

  window.addEventListener('scroll', handleScroll);
});

document.addEventListener("DOMContentLoaded", function() {
  let doctors = document.querySelector('#doctors');
  let toothAppear = document.querySelector('#toothAppearDoctors');
  let timeoutId;

  function showToothAppear() {
    toothAppear.style.display = "block";
  }

  function handleScroll() {
    clearTimeout(timeoutId);
    let doctorsRect = doctors.getBoundingClientRect();

    if ((doctorsRect.top >= 0 && doctorsRect.top <= window.innerHeight) ||
        (doctorsRect.bottom >= 0 && doctorsRect.bottom <= window.innerHeight)) {
     
      timeoutId = setTimeout(showToothAppear, 6000); 
    } else {
      toothAppear.style.display = "none";
    }
  }

  window.addEventListener('scroll', handleScroll);
});

document.addEventListener("DOMContentLoaded", function() {
  let aboutUs = document.querySelector('#aboutUs');
  let toothAppear = document.querySelector('#toothAppearAboutUs');
  let timeoutId;

  function showToothAppear() {
    toothAppear.style.display = "block";
  }

  function handleScroll() {
    clearTimeout(timeoutId);
    let aboutUsRect = aboutUs.getBoundingClientRect();

    if ((aboutUsRect.top >= 0 && aboutUsRect.top <= window.innerHeight) ||
        (aboutUsRect.bottom >= 0 && aboutUsRect.bottom <= window.innerHeight)) {
     
      timeoutId = setTimeout(showToothAppear, 3500); 
    } else {
      toothAppear.style.display = "none";
    }
  }

  window.addEventListener('scroll', handleScroll);
});

document.addEventListener("DOMContentLoaded", function() {
  let comments = document.querySelector('#comments');
  let toothAppear = document.querySelector('#toothAppearComments');
  let timeoutId;

  function showToothAppear() {
    toothAppear.style.display = "block";
  }

  function handleScroll() {
    clearTimeout(timeoutId);
    let commentsRect = comments.getBoundingClientRect();

    if ((commentsRect.top >= 0 && commentsRect.top <= window.innerHeight) ||
        (commentsRect.bottom >= 0 && commentsRect.bottom <= window.innerHeight)) {
     
      timeoutId = setTimeout(showToothAppear, 3500); 
    } else {
      toothAppear.style.display = "none";
    }
  }

  window.addEventListener('scroll', handleScroll);
});


////лайки

let likes = document.querySelectorAll('.heartComments')
let count = document.querySelectorAll('.countLike')
let localLikes = []
if (localStorage.getItem('localStoredLikes') != undefined) {
  localLikes = JSON.parse(localStorage.getItem('localStoredLikes'))
  for (let i = 0; i < count.length; i++) {
    if (localLikes[i] === true) {
      count[i].textContent = +count[i].textContent + 1
      likes[i].alt = '0'
    }
  }
}
for (let i = 0; i < likes.length; i++) {
  likes[i].id = `#like${i}`;
}
for (let elem of likes) {
  elem.addEventListener('click', function () {
    if (this.alt != '1') {
      this.alt = '1'
      let num = this.id.replace(/#like/, '')
      count[num].textContent = +count[num].textContent + 1
      localLikes[num] = true
      localLikes.toLocaleString()
      localStorage.setItem('localStoredLikes', JSON.stringify(localLikes))
    } else {
      let num = this.id.replace(/#like/, '')
      count[num].textContent = +count[num].textContent - 1
      this.alt = ''
      localLikes[num] = ''
      localLikes.toLocaleString()
      localStorage.setItem('localStoredLikes', JSON.stringify(localLikes))
    }
  })
}


let modalWindow = document.querySelector('#modalWindow');

document.querySelector('#closeModal').addEventListener('click', function(){
    modalWindow.style.display = "none";
});
document.querySelector('#avtorPhp').addEventListener('click', function(){
  document.querySelector('.avtorizacia').style.display = "flex";
  document.querySelector('.modalButtons').style.display = "none";
});
document.querySelector('.login_header').addEventListener('click', function(){
  modalWindow.style.display = "flex";
});
document.querySelector('#regPhp').addEventListener('click', function(){
  document.querySelector('.modalButtons').style.display = "none";
  document.querySelector('.registracia').style.display = "flex";
});


let closeForms = document.querySelectorAll('.closeForm')
for (const closeForm of closeForms) {
  closeForm.addEventListener('click', function(){
    document.querySelector('.registracia').style.display = "none";
    document.querySelector('.avtorizacia').style.display = "none";
    document.querySelector('.modalButtons').style.display = "flex";
  });
}
function checkUsername() {
  let login = document.getElementById("login").value;

  if (login.length >= 3) {
    fetch("reg.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: "login=" + encodeURIComponent(login),
    })
      .then((response) => response.text())
      .then((data) => {
        document.getElementById("usernameAvailability").innerHTML = data;
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  } else {
    document.getElementById("usernameAvailability").innerHTML = "";
  }
}
const EMAIL_REGEXP =
  /^(([^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*)|(".+"))@(([^<>()[\].,;:\s@"]+\.)+[^<>()[\].,;:\s@"]{2,})$/iu;
function checkEmail() {
  let email = document.getElementById("email").value;
  if (isEmailValid(email)) {
    fetch("reg.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: "email=" + encodeURIComponent(email),
    })
      .then((response) => response.text())
      .then((data) => {
        document.getElementById("emailAvailability").innerHTML = data;
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  } else {
    document.getElementById("emailAvailability").innerHTML = "";
  }
}
function isEmailValid(value) {
  return EMAIL_REGEXP.test(value);
}

function checkLoginAvtor() {
  let login_avtor = document.getElementById("login_avtor").value;

  if (login_avtor.length >= 3) {
    fetch("login.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: "login_avtor=" + encodeURIComponent(login_avtor),
    })
      .then((response) => response.text())
      .then((data) => {
        document.getElementById("loginAvailability").innerHTML = data;
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  } else {
    document.getElementById("loginAvailability").innerHTML = "";
  }
}

