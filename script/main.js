const searchEl = document.querySelector('.search');
const searchInputEl = searchEl.querySelector('input');

searchEl.addEventListener('click', function(){
    searchInputEl.focus();
})

searchInputEl.addEventListener('focus',function(){
    searchEl.classList.add('focused');
    searchInputEl.setAttribute('placeholder','통합검색');
});
searchInputEl.addEventListener('blur',function(){
    searchEl.classList.remove('focused');
    searchInputEl.setAttribute('placeholder','');
});




// 비주얼 영상
 // Audio 객체 설정
 const myAudio = document.querySelector('.movie-video');

 // 오디오 재생: 크롬브라우저에서 작동 안함
 myAudio.play();

 // 버튼 취득
 const btnPlay = document.getElementById("btnPlay");
 const btnPause = document.getElementById("btnPause");
 const btnStop = document.getElementById("btnStop");

 // 재생 버튼
 btnPlay.onclick = function () {
     myAudio.play();
 }

 // 일시정지 버튼
 btnPause.onclick = function () {
     myAudio.pause();
 }


new Swiper('.notice .swiper',{
    direction:'vertical',
    autoplay:true,
    loop:true
});

new Swiper('.promotion .swiper',{
    autoplay:true,
    loop:true,
    slidesPerView:3,
    spaceBetween:10,
    centeredSlides:true,
    pagination: {
        el:'.promotion .swiper-pagination',
        clickable:true
    },
    navigation: {
        prevEl: '.promotion .swiper-button-prev',
        nextEl: '.promotion .swiper-button-next'
    }


});
// //커피프로모션 토글아이콘 클릭시 박스 숨기고 나타내기

const promotionEl = document.querySelector('section.promotion');

const toggleBtnEl = document.querySelector('.toggle-promotion');

//토글버튼을 클릭하면 프로모션에 크기가 변한다.

toggleBtnEl.addEventListener('click', function(){

    if(promotionEl.classList.contains('hide')) {//만약 promotion클래스에 hide서식이 있다면 
        //높이가 663이 되어야 한다
        promotionEl.classList.remove('hide');//
    }else{//그렇지 않으면
        //높이가 0이 되어야한다.
        promotionEl.classList.add('hide');
    }
});


// 위아래
gsap.to('.floating1', 2, {
    delay :.5,
    y: 15,
    repeat: -1,
    yoyo: true,
    ease: Power1.easeInOut
});
gsap.to('.floating2', 2.5, {
    delay :1.5,
    y: 20,
    repeat: -1,
    yoyo: true,
    ease: Power1.easeInOut
});
new Swiper('.awards .swiper', {
    autoplay: true,
    loop: true,
    spaceBetween: 10,
    slidesPerView:5,
    navigation: {
        prevEl: '.awards .swiper-button-prev',
        nextEl: '.awards .swiper-button-next'
    }
})

const spyEls = document.querySelectorAll('section.scroll-spy');
spyEls.forEach(function(spyEl){
    new ScrollMagic
    .Scene({
        triggerElement: spyEl,
        triggerHook: .8
    })
    .setClassToggle(spyEl, 'show')
    .addTo(new ScrollMagic.Controller());
})

// top button

const toTopEl = document.querySelector('#to-top');
const toTopEl2 = document.querySelector('#reserve')
window.addEventListener('scroll', function (){
    console.log(window.scrollY);
    if(window.scrollY > 500){
        gsap.to(toTopEl2, .6, {
            opacity:1,
            x:0
        });
        gsap.to(toTopEl, .6, {
            opacity:1,
            x:0
        });
       
    }else{
        gsap.to(toTopEl2, .6, {
            opacity:0,
            x:140
        })
        gsap.to(toTopEl, .6, {
            opacity:0,
            x:100
        })
    }
   
    })
    toTopEl.addEventListener('click',function(){
        gsap.to(window, .6, {
            scrollTo: 0
        })
});