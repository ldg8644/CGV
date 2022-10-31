<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGV cultureplex</title>
    <link rel="icon" href="./icons/favicon.ico">
    <!-- 리셋 -->
    <link rel="stylesheet" href="./css/reset.css" type="text/css">
    <link rel="stylesheet" href="./css/main.css" type="text/css">
    <link rel="stylesheet" href="./css/base.css" type="text/css">
    <!-- 구글 아이콘 -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- gsap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js" integrity="sha512-gmwBmiTVER57N3jYS3LinA9eb8aHrJua5iQD7yqYCKa5x6Jjc7VDVaEA0je0Lu0bP9j7tEjV3+1qUm6loO99Kw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- 슬릭 슬라이더 -->
        <link rel="stylesheet" href="./css/slick.css">
        <link rel="stylesheet" href="./css/slick-theme.css">
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <!-- swiepr js -->
        <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

      <!-- 벤더프리픽스 -->
      <script src="./script/prefixfree.min.js"></script>
      <!-- 스크롤 매직 -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js" integrity="sha512-8E3KZoPoZCD+1dgfqhPbejQBnQfBXe8FuwL4z/c8sTrgeDMFEnoyTlH3obB4/fV+6Sg0a0XF+L/6xS4Xx1fUEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!-- 메인 javascript -->
      <script defer src="./script/main.js"></script>
      <!-- 제이쿼리 라이브러리 -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
      <script src="./script/slick.js"></script>
      <!-- 랩퍼 -->
      <script>
        $(document).ready(function(){


            $('.contents').hide();

          
            $('.main-menu').mouseenter(function(){
             $('.contents').stop().slideDown(280);


      
            });

        $('.main-menu').mouseleave(function(){
            $('.contents').stop().slideUp();


        });
        $('.contents').mouseenter(function(){
            $(this).stop().show();
        })
        $('.contents').mouseleave(function(){
            $(this).slideUp();
        })

        $('.m_slide').slick({
  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 5
    });
   
   


  });
  

       
      </script>
</head>
<body>
    <!-- 헤더영역 -->
<header>
<div class="inner">
    <div class="sub-wrapper">
    <a href="index.html" class="logo">
        <img src="./img/logo.png" alt="cgv">
    </a>
    <div class="sub-menu">
        <ul class="menu">
            <li>
                <a href="/login">
                    <img src="./icons/login.png" alt="" class="icons">
                    로그인
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <img src="./icons/signup.png" alt="" class="icons">
                   회원가입
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <img src="./icons/Mycgv.png" alt="" class="icons">
                    MY CGV
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <img src="./icons/Customer.png" alt="" class="icons">
                    고객센터
                </a>
            </li>
        </ul>
        <div class="search">
            <input type="text">
            <i class="material-icons">search</i>
        </div>
    </div>
    </div>
    <!-- 메인메뉴 -->


    <div class="gnb">
    <div class="gnb_inner">
        <ul class="main-menu">
            <li><a href=""> 영화</a></li>
            <li><a href="">극장</a></li>
            <li><a href="">예매</a></li>
            <li><a href="">스토어</a></li>
            <li><a href="">이벤트</a></li>
            <li><a href="">혜택</a></li>
       
        </ul>
    </div>
        <div class="contents">
            <div>
                <ul>
                    <li id="list-wrapper">
                        <ul class="list">
                            <li>영화</li>
                            <li>무비차트</li>
                            <li>아트하우스</li>
                            <li>ICECON</li>
                            
                        </ul>
                        <ul class="list">
                            <li>극장</li>
                            <li>CGV 극장</li>
                            <li>특별관</li>
                        </ul>
                        <ul class="list">
                            <li>예매</li>
                            <li>빠른예매</li>
                            <li>상영스케줄</li>
                            <li>English Ticketing</li>
                            <li>English Schedule</li>
                        </ul>
                        <ul class="list">
                            <li>스토어</li>
                            <li>영화관람권</li>
                            <li>기프트카드</li>
                            <li>콤보</li>
                            <li>팝콘</li>
                            <li>음료</li>
                            <li>스낵</li>
                            <li>플레이존</li>
                            <li>씨네샵</li>
                        </ul>
                        <ul class="list">
                            <li>이벤트</li>
                            <li>SPECIAL</li>
                            <li>영화/예매</li>
                            <li>멤버십/CLUB</li>
                            <li>CGV 극장별</li>
                            <li>제휴할인</li>
                            <li>당첨자 발표</li>
                            <li>종료된 이벤트</li>
                        </ul>
                        <ul class="list">
                            <li>혜택</li>
                            <li>CGV 할인정보</li>
                            <li>CLUB 서비스</li>
                            <li>VIP 라운지</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</header>