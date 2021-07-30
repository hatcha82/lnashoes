<?php
if (!defined('_EYOOM_')) exit;

add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/plugins/slick/slick.min.css" type="text/css" media="screen">',0);
?>

<?php /* eb슬라이더 편집 버튼 */ ?>
<?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
<div class="btn-edit-mode-wrap <?php if ($ec_master['ec_state'] == '2') { ?>hidden-message<?php } ?>">
    <div class="btn-edit-mode text-center hidden-xs hidden-sm">
        <div class="btn-group">
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=ebcontents_form&amp;thema=<?php echo $theme; ?>&amp;ec_code=<?php echo $ec_master['ec_code']; ?>&amp;w=u&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="btn-e btn-e-xs btn-e-red btn-e-split"><i class="far fa-edit"></i> EB컨텐츠 마스터 설정</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=ebcontents_form&amp;thema=<?php echo $theme; ?>&amp;ec_code=<?php echo $ec_master['ec_code']; ?>&amp;w=u" target="_blank" class="btn-e btn-e-xs btn-e-red btn-e-split-red dropdown-toggle" title="새창 열기">
                <i class="far fa-window-maximize"></i>
            </a>
            <button type="button" class="btn-e btn-e-xs btn-e-red popovers" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-content="
                <span class='font-size-11'>
            <strong class='color-indigo'>좌측 [EB컨텐츠 설정하기 버튼] 클릭 후 아래 설명 참고</strong><br>
            <div class='margin-hr-5'></div>
            <span class='color-indigo'>[설정정보]</span><br>
            1. 컨텐츠 마스터 제목 : 슬라이더 배너<br>
            2. 스킨선택 : shop003_slider_banner<br>
            3. 컨텐츠 아이템에서 사용할 링크수 : 1개<br>
            4. 컨텐츠 아이템에서 사용할 이미지수 : 2개<br>
            5. 컨텐츠 아이템에서 사용할 필드수 : 2개<br>
            <span class='color-indigo'>[EB 컨텐츠 - 아이템 관리]</span><br>
            1. EB컨텐츠 아이템 추가 클릭<br>
            2. 텍스트 필드 #1,#2 입력<br>
            3. 이미지 #1, #2 업로드<br>
            <div class='margin-hr-5'></div>
            이미지 비율 #1(pc) : 2560x600 픽셀 / #2(mobile) : 1200x600 이미지 사용 <br>
            텍스트 필드 #2에 span 태그 사용시 노란색 텍스트 출력<br>
            </span>
            "><i class="fas fa-question-circle"></i></button>
        </div>
    </div>
</div>
<?php } ?>

<?php if (isset($ec_master) && $ec_master['ec_state'] == '1') { // 보이기 상태에서만 출력 ? ?>
<style>
.ebcontents-slider-banner-wrap {position:relative;margin-bottom:50px}
/* 콘텐츠 마스터 */
.ebcontents-slider-banner-wrap .master-title {}
.ebcontents-slider-banner-wrap .master-title h2 {margin:0 0 40px;font-size:30px;line-height:30px;text-align:center}
/* 아이템 */
.ebcontents-slider-banner-item {position:relative}
.ebcontents-slider-banner-item:after {content:"";display:block;position:absolute;bottom:0;left:0;width:0;height:3px;background:#F2A23A;transition:all 0s linear}
.slick-active .item-progress.ebcontents-slider-banner-item:after {width:100%;-webkit-transition:all 15s linear;-moz-transition:all 15s linear;-o-transition:all 15s linear;transition:all 15s linear}
.ebcontents-slider-banner-image {}
.ebcontents-slider-banner-image:after {content:"";display:block;position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,.2)}
.ebcontents-slider-banner-caption {position:absolute;top:50%;left:50%;transform:translateY(-50%);width:580px}
.ebcontents-slider-banner-caption .catiopn-1 {margin-bottom:5px;font-size:30px;line-height:30px;font-weight:100;color:#fff}
.ebcontents-slider-banner-caption .catiopn-2 {margin-bottom:30px;font-size:70px;line-height:70px;font-weight:700;color:#fff}
.ebcontents-slider-banner-caption .catiopn-2 span {color:#F2A23A}
.ebcontents-slider-banner-caption .btn-more {}
.ebcontents-slider-banner-caption .btn-more a {display:inline-block;padding:8px 25px;font-size:14px;border:1px solid #eee;color:#eee;-webkit-transition:all 0.4s ease-in-out;-moz-transition:all 0.4s ease-in-out;-o-transition:all 0.4s ease-in-out;transition:all 0.4s ease-in-out}
.ebcontents-slider-banner-caption .btn-more a:hover {border-color:#F2A23A;background:#F2A23A}
/* 컨트롤 */
.ebcontents-slider-banner .slick-next, .ebcontents-slider-banner .slick-prev {width:40px;height:80px;-webkit-transition: all .3s ease;-moz-transition: all .3s ease;-o-transition: all .3s ease;-ms-transition: all .3s ease;transition: all .3s ease}
.ebcontents-slider-banner .slick-next {right:20px;z-index:1}
.ebcontents-slider-banner .slick-prev {left:20px;z-index:1}
.ebcontents-slider-banner .slick-next:before, .ebcontents-slider-banner .slick-prev:before {content:"";display:block;position:absolute;top:50%;width:40px;height:40px;margin-top:-20px;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-o-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg)}
.ebcontents-slider-banner .slick-next:before {right:10px;border-right:1px solid #fff;border-top:1px solid #fff}
.ebcontents-slider-banner .slick-prev:before {left:10px;border-left:1px solid #fff;border-bottom:1px solid #fff}
.ebcontents-slider-banner .slick-next:after, .ebcontents-slider-banner .slick-prev:after {content:"";display:block;position:absolute;top:50%;width:0;height:1px;;background:#fff;-webkit-transition:all 0.4s ease-in-out;-moz-transition:all 0.4s ease-in-out;-o-transition:all 0.4s ease-in-out;transition:all 0.4s ease-in-out}
.ebcontents-slider-banner .slick-next:after {right:3px}
.ebcontents-slider-banner .slick-prev:after {left:3px}
.ebcontents-slider-banner .slick-next:hover:after, .ebcontents-slider-banner .slick-prev:hover:after {width:52px}
<?php if ($eyoom['is_responsive'] == '1' || G5_IS_MOBILE) { // 반응형 또는 모바일일때 ?>
@media (max-width:1199px){
    .ebcontents-slider-banner-caption {width:45%}
    .ebcontents-slider-banner-caption .catiopn-1 {font-size:20px;line-height:20px}
    .ebcontents-slider-banner-caption .catiopn-2 {font-size:50px;line-height:50px}
}
@media (max-width:991px){
    .ebcontents-slider-banner-caption .catiopn-1 {font-size:16px;line-height:20px}
    .ebcontents-slider-banner-caption .catiopn-2 {margin-bottom:15px;font-size:30px;line-height:30px}
    .ebcontents-slider-banner-caption .btn-more a {padding:5px 15px;font-size:11px}
}
@media (max-width:767px){
    .ebcontents-slider-banner-caption {left:0;width:100%;padding:0 50px 0 0;text-align:right}
    .ebcontents-slider-banner-caption .catiopn-2 {font-size:20px;line-height:20px}
    .ebcontents-slider-banner .slick-next {right:1px}
    .ebcontents-slider-banner .slick-prev {left:1px}
    .ebcontents-slider-banner .slick-next:after, .ebcontents-slider-banner .slick-prev:after {display:none}
}
<?php } ?>
</style>

<div class="ebcontents-slider-banner-wrap">
    <?php /* ebcontents item */ ?>
    <div class="ebcontents-slider-banner">
    <?php if (is_array($contents)) { ?>
        <?php foreach ($contents as $k => $item) { ?>
        <div class="ebcontents-slider-banner-item banner-item-<?php echo $k + 1 ?>">
            <div class="ebcontents-slider-banner-image">
                <img src="<?php echo $item['src_1']?>" alt="" class="img-responsive hidden-xs">
                <img src="<?php echo $item['src_2']?>" alt="" class="img-responsive visible-xs">
            </div>
            <div class="ebcontents-slider-banner-caption">
                <div class="caption-inner">
                    <?php if ($item['ci_subject_1']) { ?>
                    <div class="catiopn-1"><?php echo $item['ci_subject_1']; ?></div>
                    <?php } ?>
                    <?php if ($item['ci_subject_2']) { ?>
                    <div class="catiopn-2"><?php echo $item['ci_subject_2']; ?></div>
                    <?php } ?>
                    <?php if ($item['href_1']) { ?>
                    <div class="btn-more"><a href="<?php echo $item['href_1']; ?>" target="<?php echo $item['target_1']; ?>">Show Item</a></div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>
    <?php } ?>

    <?php if ($ec_default) { ?>
        <div class="ebcontents-slider-banner-item">
            <div class="ebcontents-slider-banner-image">
                <img src="<?php echo $ebcontents_skin_url; ?>/image/01.jpg" alt="" class="img-responsive hidden-xs">
                <img src="<?php echo $ebcontents_skin_url; ?>/image/01_mo.jpg" alt="" class="img-responsive visible-xs">
            </div>
            <div class="ebcontents-slider-banner-caption">
                <div class="caption-inner">
                    <div class="catiopn-1">데일리 웨어는 베이직 스타일로</div>
                    <div class="catiopn-2">BASIC SHIRTS</div>
                    <div class="btn-more"><a href="">바로가기</a></div>
                </div>
            </div>
        </div>
        <div class="ebcontents-slider-banner-item">
            <div class="ebcontents-slider-banner-image">
                <img src="<?php echo $ebcontents_skin_url; ?>/image/02.jpg" alt="" class="img-responsive hidden-xs">
                <img src="<?php echo $ebcontents_skin_url; ?>/image/02_mo.jpg" alt="" class="img-responsive visible-xs">
            </div>
            <div class="ebcontents-slider-banner-caption">
                <div class="caption-inner">
                    <div class="catiopn-1">따사로운 봄을 맞이하는</div>
                    <div class="catiopn-2">SEASON OFF <span>70%</span></div>
                    <div class="btn-more"><a href="">바로가기</a></div>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</div>

<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/slick/slick.min.js"></script>
<script>
$(window).load(function(){
    $('.ebcontents-slider-banner-inner').show();
    // $('.ebcontents-slider-banner').slick({
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     autoplay: true,
    //     autoplaySpeed: 15000,//15초
    //     arrows: true,
    //     dots: false,
    //     pauseOnHover: false,
    // });
    
    $('.ebcontents-slider-banner-item').addClass('item-progress');
});
</script>
<?php } ?>