<?php
if (!defined('_EYOOM_')) exit;
add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/plugins/slick/slick.min.css" type="text/css" media="screen">',0);
?>

<?php /* eb슬라이더 편집 버튼 */ ?>
<?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
<div class="btn-edit-mode-wrap <?php if ($es_master['es_state'] == '2') { ?>hidden-message<?php } ?>">
    <div class="btn-edit-mode text-center hidden-xs hidden-sm" style="top:80px">
        <div class="btn-group">
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=ebslider_form&thema=<?php echo $theme; ?>&es_code=<?php echo $es_code; ?>&w=u&wmode=1" onclick="eb_admset_modal(this.href); return false;" class="btn-e btn-e-xs btn-e-red btn-e-split"><i class="far fa-edit"></i> EB슬라이더 마스터 설정</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=ebslider_form&thema=<?php echo $theme; ?>&es_code=<?php echo $es_code; ?>&w=u" target="_blank" class="btn-e btn-e-xs btn-e-red btn-e-split-red dropdown-toggle" title="새창 열기">
                <i class="far fa-window-maximize"></i>
            </a>
            <button type="button" class="btn-e btn-e-xs btn-e-red popovers" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" data-content="
            <span class='font-size-11'>
            <strong class='color-indigo'>좌측 [EB슬라이더 설정하기] 버튼 클릭 후 아래 설명 참고</strong><br>
            <div class='margin-hr-5'></div>
            <span class='color-indigo'>[설정정보]</span><br>
            1. 슬라이더 마스터 제목 : 메인 슬라이더<br>
            2. 스킨선택 : shop003_main_slider<br>
            <span class='color-indigo'>[EB 슬라이더 - 아이템 관리]</span><br>
            1. EB 슬라이더 아이템 추가 클릭<br>
            2. 대표 타이틀 입력<br>
            3. 서브 타이틀 입력<br>
            4. 연결주소 [링크] 입력 (자세히보기 버튼 출력)<br>
            5. 이미지 #1업로드 - 이미지 출력<br>
            <div class='margin-hr-5'></div>
            이미지 비율 2000x1540 픽셀 이미지 사용<br>
            </span>
        "><i class="fas fa-question-circle"></i>
            </button>
        </div>
    </div>
</div>
<?php } ?>

<?php if (isset($es_master) && $es_master['es_state'] == '1') { // 보이기 상태에서만 출력 ?>
<style>
.ebslider-main-wrap {position:relative;overflow:hidden}
.ebslider-main-wrap .slick-dotted.slick-slider {margin-bottom:0}
.ebslider-main-inner {position:relative;overflow:hidden;display:none}
.ebslider-main .ebslider-main-item {position:relative;overflow:hidden;background-color:#f6ecde;background-image:url(<?php echo $ebslider_skin_url; ?>/image/bg_dot.png)}
/* 이미지 */
.ebslider-main .ebslider-main-item .ebslider-main-image {float:right;width:65%}
.ebslider-main .ebslider-main-item .ebslider-main-image img {max-width:100%;height:auto}
/* 내용 */
.ebslider-main .ebslider-main-caption {float:left;width:35%;height:100%}
.ebslider-main .ebslider-main-caption-inner {position:absolute;top:50%;transform:translateY(-50%);width:35%;padding:0 50px}
.ebslider-main .ebslider-main-caption h4, .ebslider-main .ebslider-main-caption p, .ebslider-main .ebslider-main-caption .btn-more {-webkit-transition:all 1s ease-in-out;-moz-transition:all 1s ease-in-out;-o-transition:all 1s ease-in-out;-ms-transition:all 1s ease-in-out;transition:all 1s ease-in-out}
.ebslider-main .ebslider-main-caption h4 {position:relative;margin:0 0 30px;font-weight:100;font-size:50px;line-height:50px}
.ebslider-main .ebslider-main-caption h4:before {content:"";position:absolute;bottom:-20px;left:0;display:block;width:0%;height:1px;background:#F2A23A}
.ebslider-main .ebslider-main-caption p {margin:0 0 20px;font-size:20px;line-height:30px;font-weight:100;color:#333}
.ebslider-main .ebslider-main-caption p span {color:#CF6E60}
/* 더보기 버튼 */
.ebslider-main .ebslider-main-caption .btn-more {position:relative;display:inline-block;background:#333}
.ebslider-main .ebslider-main-caption .btn-more a {position:relative;display:inline-block;padding:10px 20px;color:#fff}
.ebslider-main .ebslider-main-caption .btn-more:before {content:"";position:absolute;top:0;left:0;width:0;height:100%;background:#F2A23A;-webkit-transition:all .35s ease-in-out;-moz-transition:all .35s ease-in-out;-o-transition:all .35s ease-in-out;-ms-transition:all .35s ease-in-out;transition:all .35s ease-in-out}
.ebslider-main .ebslider-main-caption .btn-more:hover:before {width:100%}
/* 컨트롤 점 - 숫자 */
.ebslider-main .slick-dots {bottom:50px;padding:0 50px;text-align:left}
.ebslider-main .slick-dots li {display:inline-block;margin:0;width:50px;height:50px;line-height:50px;text-align:center;font-size:18px;border-bottom:1px solid #999;color:#999;transition:all .3s ease}
.ebslider-main .slick-dots li:hover {background:rgba(200,200,200,.2)}
.ebslider-main .slick-dots li.slick-active {color:#333;border-color:#333}
/* 애니메이션 - 텍스트 */
.ebslider-main .ebslider-main-caption h4, .ebslider-main .ebslider-main-caption p, .ebslider-main .ebslider-main-caption .btn-more {opacity:0;-webkit-transform:translate3d(-25px,0,0);-moz-transform:translate3d(-25px,0,0);-o-transform:translate3d(-25px,0,0);-ms-transform:translate3d(-25px,0,0);transform:translate3d(-25px,0,0)}
.ebslider-main .ebslider-main-caption h4 {-webkit-transition-delay:1.5s;-moz-transition-delay:1.5s;-o-transition-delay:1.5s;-ms-transition-delay:1.5s;transition-delay:1.5s}
.ebslider-main .ebslider-main-caption p {-webkit-transition-delay:2s;-moz-transition-delay:2s;-o-transition-delay:2s;-ms-transition-delay:2s;transition-delay:2s}
.ebslider-main .ebslider-main-caption .btn-more {-webkit-transition-delay:2.5s;-moz-transition-delay:2.5s;-o-transition-delay:2.5s;-ms-transition-delay:2.5s;transition-delay:2.5s}
/* 애니메이션 - 노란색 바 */
.ebslider-main .ebslider-main-caption h4:before {-webkit-transition:all 1.5s ease-in-out;-moz-transition:all 1.5s ease-in-out;-o-transition:all 1.5s ease-in-out;-ms-transition:all 1.5s ease-in-out;transition:all 1.5s ease-in-out;-webkit-transition-delay:3s;-moz-transition-delay:3s;-o-transition-delay:3s;-ms-transition-delay:3s;transition-delay:3s}
.ebslider-main .slick-current .item-animation .ebslider-main-caption h4, .ebslider-main  .slick-current .item-animation .ebslider-main-caption p, .ebslider-main .slick-current .item-animation .ebslider-main-caption .btn-more {opacity:1;-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}
.ebslider-main .slick-current .item-animation .ebslider-main-caption h4:before {width:120px}

<?php if ($eyoom['is_responsive'] == '1' || G5_IS_MOBILE) { // 반응형 또는 모바일일때 ?>
@media (max-width:1399px){
}
@media (max-width:1199px){
}
@media (max-width:991px){
    .ebslider-main .ebslider-main-caption-inner {padding:0 30px}
    .ebslider-main .ebslider-main-caption h4 {font-size:30px;line-height:30px}
    .ebslider-main .ebslider-main-caption p {font-size:16px;line-height:26px}
    .ebslider-main .slick-dots {bottom:30px;padding:0 30px}
    .ebslider-main .slick-dots li {width:35px;height:35px;line-height:35px;font-size:16px}
}
@media (max-width:767px){
    .ebslider-main .ebslider-main-item .ebslider-main-image, .ebslider-main .ebslider-main-caption {float:none;width:100%}
    .ebslider-main .ebslider-main-caption-inner {position:relative;top:inherit;transform:translateY(0);width:100%;padding:20px 20px 70px}
    .ebslider-main .ebslider-main-caption h4 {font-size:24px;line-height:24px}
    .ebslider-main .ebslider-main-caption p {font-size:14px;line-height:24px}
    .ebslider-main .ebslider-main-caption .btn-more a {padding:5px 15px;font-size:11px}
    .ebslider-main .slick-dots {padding:0 20px}
}
<?php } ?>
</style>

<div class="ebslider-main-wrap">
    <?php /* eb슬라이더 */ ?>
    <div class="ebslider-main-inner">
        <div class="ebslider-main">
        <?php if (is_array($slider)) { ?>
            <?php foreach ($slider as $k => $item) { ?>            
            <div class="ebslider-main-item">
                <div class="ebslider-main-image">
                    <img src="<?php echo $item['src_1']?>">
                </div>
                <div class="ebslider-main-caption">
                    <div class="ebslider-main-caption-inner">
                        <?php if ($item['ei_title']) { ?>
                        <h4><?php echo $item['ei_title']?></h4>
                        <?php } ?>
                        <?php if ($item['ei_subtitle']) { ?>
                        <p><?php echo $item['ei_subtitle']?></p>
                        <?php } ?>
                        <?php if ($item['href_1']) { ?>
                        <div class="btn-more"><a href="<?php echo $item['href_1']; ?>" target="<?php echo $item['target_1']; ?>">Show Item</a></div>
                        <?php } ?>
                    </div>
                </div>
                <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
                <div class="adm-edit-btn btn-edit-mode hidden-xs hidden-sm" style="bottom:180px">
                    <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&pid=ebslider_itemform&thema=<?php echo $theme; ?>&es_code=<?php echo $es_code; ?>&ei_no=<?php echo $item['ei_no']; ?>&w=u&iw=u&wmode=1" onclick="eb_admset_modal(this.href); return false;" class="btn-e btn-e-xs btn-e-dark"><i class="far fa-edit"></i> EB슬라이더 아이템 수정</a>
                </div>
                <?php } ?>
            </div>
            <?php } ?>
        <?php } ?>

        <?php if ($es_default) { ?>
            <div class="ebslider-main-item">
                <div class="ebslider-main-image">
                    <img src="<?php echo $ebslider_skin_url; ?>/image/01.jpg">
                </div>
                <div class="ebslider-main-caption">
                    <div class="ebslider-main-caption-inner">
                        <h4>NEW ARRIVALS</h4>
                        <p>나만의 스타일 나만의 개성을 가질 수 있는 신제품을 바로 만나보세요.</p>
                        <div class="btn-more"><a href="#">Show Item</a></div>
                    </div>
                </div>
            </div>
            <div class="ebslider-main-item">
                <div class="ebslider-main-image">
                    <img src="<?php echo $ebslider_skin_url; ?>/image/02.jpg">
                </div>
                <div class="ebslider-main-caption">
                    <div class="ebslider-main-caption-inner">
                        <h4>NEW SEASON</h4>
                        <p>따뜻한 감성의 계절에 드디어 에가뤼시 포가누 콜렉션이 다가옵니다.</p>
                        <div class="btn-more"><a href="#">Show Item</a></div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</div>

<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/slick/slick.min.js"></script>
<script>
$(window).load(function(){// 첫 로딩 후 텍스트 애니메이션 추가
    setTimeout(function() {
        $(".ebslider-main-wrap .ebslider-main-item").addClass("item-animation");
    }, 500);

    $('.ebslider-main-inner').show();
    $('.ebslider-main').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        speed: 500,
        cssEase: 'ease-in-out',
        autoplaySpeed: 15000,//15초
        arrows: false,
        dots: true
    });
    
    // 컨트롤 점에 숫자 입력
    var sliderItem = $('.ebslider-main .ebslider-main-item').length;
    for(var i=0;i<sliderItem;i++) {
        var itemNum = "0"+(i+1);
        $(".ebslider-main-inner .slick-dots li").eq(i).text(itemNum);
    }
    //alert(sliderItem);
});
</script>
<?php } ?>