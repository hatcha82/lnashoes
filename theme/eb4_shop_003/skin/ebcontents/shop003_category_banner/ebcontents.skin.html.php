<?php
if (!defined('_EYOOM_')) exit;
?>
<?php /* eb콘텐츠 편집 버튼 */ ?>
<?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
<div class="btn-edit-mode-wrap <?php if ($ec_master['ec_state'] == '2') { ?>hidden-message<?php } ?>">
    <div class="btn-edit-mode text-center hidden-xs hidden-sm">
        <div class="btn-group">
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=ebcontents_form&amp;thema=<?php echo $theme; ?>&amp;ec_code=<?php echo $ec_master['ec_code']; ?>&amp;w=u&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="btn-e btn-e-xs btn-e-red btn-e-split"><i class="far fa-edit"></i> EB컨텐츠 마스터 설정</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=ebcontents_form&amp;thema=<?php echo $theme; ?>&amp;ec_code=<?php echo $ec_master['ec_code']; ?>&amp;w=u" target="_blank" class="btn-e btn-e-xs btn-e-red btn-e-split-red dropdown-toggle" title="새창 열기">
                <i class="far fa-window-maximize"></i>
            </a>
            <button type="button" class="btn-e btn-e-xs btn-e-red popovers" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" data-content="
            <span class='font-size-11'>
            <strong class='color-indigo'>좌측 [EB컨텐츠 설정하기 버튼] 클릭 후 아래 설명 참고</strong><br>
            <div class='margin-hr-5'></div>
            <span class='color-indigo'>[설정정보]</span><br>
            1. 컨텐츠 마스터 제목 : Brand By Categories<br>
            2. 스킨선택 : shop003_category_banner<br>
            3. EB콘텐츠 마스터 타이틀 #1, #2 입력<br>
            4. 컨텐츠 아이템에서 사용할 링크수 : 1개<br>
            5. 컨텐츠 아이템에서 사용할 이미지수 : 1개<br>
            6. 컨텐츠 아이템에서 사용할 필드수 : 2개<br>
            7. EB콘텐츠 마스터 이미지 : 배경이미지(2560x600 픽셀) 등록<br>
            <span class='color-indigo'>[EB 컨텐츠 - 아이템 관리]</span><br>
            1. EB컨텐츠 아이템 추가 클릭<br>
            2. 텍스트 필드 #1~2 입력<br>
            3. 연결주소 [링크] #1 입력<br>
            4. 이미지 #1 업로드 [아이콘]<br>
            5. 연결주소 [링크] #1 입력
            <div class='margin-hr-5'></div>
            이미지 비율 600x800 픽셀 이미지 사용.<br>
            배경이미지는 마스터에서 등록.
            </span>
        "><i class="fas fa-question-circle"></i>
            </button>
        </div>
    </div>
</div>
<?php } ?>

<?php if (isset($ec_master) && $ec_master['ec_state'] == '1') { // 보이기 상태에서만 출력 ? ?>
<style>
.ebcontents-category-banner {position:relative;padding:60px 0;margin-bottom:50px;background-image:url("<?php echo $ec_master['ec_img_url'] ? $ec_master['ec_img_url']: $ebcontents_skin_url.'/image/bg_category.jpg'; ?>");background-repeat:no-repeat;background-size:cover;background-position:center}
.ebcontents-category-banner-inner {padding:0 15% 0 30%}
/* master title */
.ebcontents-category-banner .master-title {margin-bottom:40px;text-align:center}
.ebcontents-category-banner .master-title h2 {position:relative;margin:0 0 30px;font-size:40px;font-weight:100}
.ebcontents-category-banner .master-title h2:after {content:"";display:block;position:absolute;left:50%;bottom:-15px;transform:translateX(-50%);width:50px;height:1px;background:#F2A23A}
.ebcontents-category-banner .master-title h3 {margin:0;font-size:17px;color:#707070}
/* item */
.category-banner-ebslider {margin:0 -15px}
.category-banner-ebslider .slick-list {padding:10px 0}
.category-banner-ebslider .category-banner-item {padding:0 15px}
.category-banner-ebslider .category-banner-item a {position:relative;display:block;box-shadow:5px 5px 10px 0 rgba(0, 0, 0, 0.5)}
.category-banner-ebslider .category-banner-item-content {position:absolute;top:0;left:0;width:100%;height:100%;padding:10px}
.category-banner-ebslider .category-banner-item-content h4 {width:100%;height:100%;padding:5px 10px;margin:0;font-size:16px;line-height:26px;color:#fff;border:1px solid #fff;background:rgba(0,0,0,.15);-webkit-transition:all 0.4s ease-in-out;-moz-transition:all 0.4s ease-in-out;-o-transition:all 0.4s ease-in-out;transition:all 0.4s ease-in-out}
.category-banner-ebslider .category-banner-item-content h4 i {font-weight:100}
.category-banner-ebslider a:hover .category-banner-item-content h4 {border-color:#F2A23A}
/* 컨트롤 좌우 */
.category-banner-ebslider .slick-next, .category-banner-ebslider .slick-prev {width:40px;height:80px;-webkit-transition: all .3s ease;-moz-transition: all .3s ease;-o-transition: all .3s ease;-ms-transition: all .3s ease;transition: all .3s ease}
.category-banner-ebslider .slick-next {right:-40px;z-index:1}
.category-banner-ebslider .slick-prev {left:-40px;z-index:1}
.category-banner-ebslider .slick-next:before, .category-banner-ebslider .slick-prev:before {content:"";display:block;position:absolute;top:50%;width:40px;height:40px;margin-top:-20px;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-o-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg)}
.category-banner-ebslider .slick-next:before {right:10px;border-right:1px solid #707070;border-top:1px solid #707070}
.category-banner-ebslider .slick-prev:before {left:10px;border-left:1px solid #707070;border-bottom:1px solid #707070}
.category-banner-ebslider .slick-next:after, .category-banner-ebslider .slick-prev:after {content:"";display:block;position:absolute;top:50%;width:0;height:1px;background:#707070;-webkit-transition:all 0.4s ease-in-out;-moz-transition:all 0.4s ease-in-out;-o-transition:all 0.4s ease-in-out;transition:all 0.4s ease-in-out}
.category-banner-ebslider .slick-next:after {right:3px}
.category-banner-ebslider .slick-prev:after {left:3px}
.category-banner-ebslider .slick-next:hover:after, .category-banner-ebslider .slick-prev:hover:after {width:35px}
<?php if ($eyoom['is_responsive'] == '1' || G5_IS_MOBILE) { // 반응형 또는 모바일일때 ?>
@media (max-width:1199px){
.ebcontents-category-banner-inner {padding:0 10% 0 25%}
}
@media (max-width:991px){
    .ebcontents-category-banner-inner {padding:0 70px}
    .ebcontents-category-banner .master-title h2 {margin-bottom:20px;font-size:30px;line-height:30px}
    .ebcontents-category-banner .master-title h3 {font-size:15px;line-height:25px}
}
@media (max-width:767px){
    .ebcontents-category-banner .master-title {margin-bottom:20px}
    .ebcontents-category-banner .master-title h2 {font-size:24px;line-height:24px}
    .category-banner-ebslider .slick-next:after, .category-banner-ebslider .slick-prev:after {display:none}
}
<?php } ?>
</style>
<div class="ebcontents ebcontents-category-banner">
    <?php /* ebcontents master */?>
    <div class="master-title">
        <?php if ($ec_master['ec_subject_1']) { ?>
        <h2><?php echo $ec_master['ec_subject_1']; ?></h2>
        <?php } ?>
        <?php if ($ec_master['ec_subject_2']) { ?>
        <h3><?php echo $ec_master['ec_subject_2']; ?></h3>
        <?php } ?>
    </div>

    <div class="ebcontents-category-banner-inner">
        <div class="category-banner-ebslider">
            <?php /* ebcontents item */?>
            <?php if (is_array($contents)) { ?>
                <?php foreach ($contents as $k => $item) { ?>
                <div class="category-banner-item banner-item-<?php echo $k + 1 ?>">
                    <a href="<?php echo $item['href_1']; ?>">
                        <div class="category-banner-item-image">
                            <img src="<?php echo $item['src_1']?>" alt="image" class="img-responsive">
                        </div>
                        <div class="category-banner-item-content">
                            <h4><i><?php echo $item['ci_subject_1']; ?></i> <?php echo $item['ci_subject_2']; ?></h4>
                        </div>
                    </a>
                </div>
                <?php } ?>
            <?php } ?>

            <?php if ($ec_default) { ?>
            <div class="category-banner-item">
                <a href="">
                    <div class="category-banner-item-image">
                        <img src="<?php echo $ebcontents_skin_url; ?>/image/01.jpg" alt="image" class="img-responsive">
                    </div>
                    <div class="category-banner-item-content">
                        <h4><i>Shoes by</i> ADADAS</h4>
                    </div>
                </a>
            </div>
            <div class="category-banner-item tilt-box" data-tilt-axis="x">
                <a href="">
                    <div class="category-banner-item-image">
                        <img src="<?php echo $ebcontents_skin_url; ?>/image/02.jpg" alt="image" class="img-responsive">
                    </div>
                    <div class="category-banner-item-content">
                        <h4><i>Blouse by</i> TROPICAL</h4>
                    </div>
                </a>
            </div>
            <div class="category-banner-item tilt-box" data-tilt-axis="x">
                <a href="">
                    <div class="category-banner-item-image">
                        <img src="<?php echo $ebcontents_skin_url; ?>/image/03.jpg" alt="image" class="img-responsive">
                    </div>
                    <div class="category-banner-item-content">
                        <h4><i>Jeans by</i> LEAVES</h4>
                    </div>
                </a>
            </div>
            <div class="category-banner-item tilt-box" data-tilt-axis="x">
                <a href="">
                    <div class="category-banner-item-image">
                        <img src="<?php echo $ebcontents_skin_url; ?>/image/04.jpg" alt="image" class="img-responsive">
                    </div>
                    <div class="category-banner-item-content">
                        <h4><i>Acc by</i> BETTER</h4>
                    </div>
                </a>
            </div>
            <div class="category-banner-item tilt-box" data-tilt-axis="x">
                <a href="">
                    <div class="category-banner-item-image">
                        <img src="<?php echo $ebcontents_skin_url; ?>/image/05.jpg" alt="image" class="img-responsive">
                    </div>
                    <div class="category-banner-item-content">
                        <h4><i>Jacket by</i> QUEST</h4>
                    </div>
                </a>
            </div>
            <div class="category-banner-item tilt-box" data-tilt-axis="x">
                <a href="">
                    <div class="category-banner-item-image">
                        <img src="<?php echo $ebcontents_skin_url; ?>/image/06.jpg" alt="image" class="img-responsive">
                    </div>
                    <div class="category-banner-item-content">
                        <h4><i>Shirts by</i> NUNUBO</h4>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/slick/slick.min.js"></script>
<script>
$(window).load(function(){
    $('.category-banner-ebslider').slick({
        slidesToShow: 1,
        arrows: true,
        dots: false,
        autoplay: true,
        autoplaySpeed: 15000, //15초
        slidesToShow: 3,
        slidesToScroll: 1,
        <?php if ($eyoom['is_responsive'] == '1' || G5_IS_MOBILE) { // 반응형 또는 모바일일때 ?>
        responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            dots: true
          }
        }
        ]
        <?php } ?>
    });
});
</script>
<?php } ?>