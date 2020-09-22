<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>

<!-- 배너 최신글 -->
<?php
// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
echo latest('theme/banner', 'banner', 10, 300);
?>

<div class="idx_rs">
   <h2><i class="fa fa-calendar"></i> 진료예약</h2>
   <p class="tel">01-234-5678</p>
   <div class="online-btn">
       <p>홈페이지에서 빠르고 쉽게 진료예약을 하실 수 있습니다.</p>
       <a href="#">온라인예약</a>
   </div>
</div>

<div class="idx_con">
    <h1>척추·관절통증클리닉</h1>
    <ul>
        <li>
            <h2><img src="img/clinic_icon1.png" alt="허리아이콘"><span>척추통증 클리닉 </span></h2>
            <p>비수술적 시술을 통한 정직하고 효과적인 치료</p>
            <a href="">목·허리·등/골반·시술법</a>
        </li>
        <li>
            <h2><img src="img/clinic_icon2.png" alt="관절아이콘"><span>관절통증 클리닉 </span></h2>
            <p>비수술적 시술을 통한 정직하고 효과적인 치료</p>
            <a href="">어깨/손목/고관절/무릎/발목 시술법</a>
        </li>   
         <li>
            <h2><img src="img/clinic_icon3.png" alt="도수치료 아이콘"><span>도수치료 </span></h2>
            <p>비수술적 시술을 통한 정직하고 효과적인 치료</p>
            <a href="">정형도수치료·교정도수치료·운동치료</a>
        </li>   
    </ul>
</div>


<!-- event  -->  
<div class="slider_pc">
    <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('theme/slider_baner', 'slider_baner', 6, 24);
    ?>
</div>
<div class="slider_mobile">
<?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('theme/slider_baner_m', 'slider_baner_m', 6, 24);
    ?>
</div>


<!-- 진료과목  -->   
<?php
// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
echo latest('theme/service', 'service', 8, 33);
?>


<!-- 의료진  -->   
<?php
// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
echo latest('theme/team', 'team', 6, 10);
?>

<!-- 후기  -->   
<?php
// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
echo latest('theme/review', 'review', 4, 33);
?>

<!--  최신글 -->
<div class="idx_lt">
    <div class="bg"><span></span><span></span><span></span></div>
    <div class="lt_wr">
        <h2>진료예약</h2>
        <strong class="tel">01-234-5678</strong>
        <p>홈페이지에서 빠르고 쉽게 진료예약을 하실 수 있습니다.</p>
        <a href="" class="btn_m btn_b02">온라인예약</a>
    </div>

    <div class="lt_wr time">
        <h2>진료시간안내</h2>
        <ul>
            <li><strong><i class="fa fa-clock-o"></i> 진료시간</strong> 09:00 ~ 18:00</li>
            <li><strong><i class="fa fa-clock-o"></i> 점심시간</strong> 12:00 ~ 13:00</li>
            <li><strong><i class="fa fa-clock-o"></i> 토요일</strong> 09:00 ~ 13:00</li>
        </ul>
    </div>

    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('theme/basic', 'notice', 4, 33);
    ?>

</div>

<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>