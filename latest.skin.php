<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);

//출력배너너비
$thumb_width = 500;
//출력배너 높이
$thumb_height = 600;
?>
<style>
    .main_slider_baner_1 {
        padding: 20px 0;
        margin: 150px auto;
        width:500px;
        position: relative;
    }
    @media (max-width:767px){
      .main_slider_baner{
    
      }
    }
    @media(max-width:1295px){
        .main_slider_baner_1{
            margin:120px auto;
            width:500px;
            padding: 30px 0;
        }
    }
    .swiper-slide img {
        width: 100%;
    }
    .swiper-pagination{
      left: 50%;
      transform: translateX(-50%);
    }
    .event-slide-bg{
      width:100%;
      padding:227px 0;
      background:#edf1f4;
      position:absolute;
    }
    .event-slide-bg-contner{
      position:relative;
      padding-top: 5px;
    }
    .event-slide-bg-contner h1{
      text-align:center;
      position:absolute;
      left:50%;
      transform:translateX(-50%);
      top:80px;
      font-size:2.5em
    }
    @media (max-width:969px){
        .event-slide-bg-contner h1{
            font-size:1.8em
        } 
    }

</style>

<div class="event-slide-bg"></div>
<div class="event-slide-bg-contner">
  <h1>허리up재활의학과 소식</h1>
</div>
<div class="main_slider_baner_1">
    <link rel="stylesheet" href="<?php echo $latest_skin_url?>/swiper.min.css">
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
        <?php
    for ($i=0; $i<count($list); $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['src'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
    ?>
            <div class="swiper-slide">
                <a href="http://<?=$list[$i]['wr_link1']?>" target="_blank"><?=$img_content?></a>
            </div>

            <?php }  ?>
            <?php if (count($list) == 0) { //게시물이 없을 때  ?>
            <li class="swiper-slide">배너 구역입니다.</li>
            <?}?>

        </div>
        
    </div>
        <!-- 롤링점 -->
        <div class="swiper-pagination"></div>
        <!-- 좌우버튼 -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    <!-- Swiper JS -->
    <script src="<?php echo $latest_skin_url?>/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: {
                el: '.swiper-pagination',
                dynamicBullets: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            loop: true,
            autoplay: {
                delay: 4000, //롤링 시 정지타임
                stopOnLastSlide: false,
                disableOnInteraction: true, //롤링 여부false시 롤링끄기
            }
        });
    </script>
</div>