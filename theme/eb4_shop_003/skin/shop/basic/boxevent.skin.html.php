<?php
/**
 * skin file : /theme/THEME_NAME/skin/shop/basic/boxevent.skin.html.php
 */
if (!defined('_EYOOM_')) exit;
?>

<?php if ($ev_count > 0) { ?>
<style>
.shop-boxevent-wrap {position:relative}
/* 타이틀 */
.shop-boxevent-wrap .event-title {margin-bottom:40px;text-align:center}
.shop-boxevent-wrap .event-title h2 {position:relative;margin:0 0 30px;font-size:40px;font-weight:100}
.shop-boxevent-wrap .event-title h2:after {content:"";display:block;position:absolute;left:50%;bottom:-15px;transform:translateX(-50%);width:50px;height:1px;background:#F2A23A}
.shop-boxevent-wrap .event-title h3 {margin:0;font-size:17px;color:#707070}

/* 상품 아이템 */
.shop-boxevent-inner {position:relative;margin:0 -15px}
.shop-boxevent-inner:after {content:"";display:block;clear:both}
.shop-boxevent .boxevent-box {position:relative;float:left;width:33.333%;padding:0 15px}
.shop-boxevent .boxevent-box-inner {padding:20px;background:#fff;box-shadow:5px 5px 10px 0 rgba(0, 0, 0, 0.35)}
.shop-boxevent .boxevent-box-title {margin-bottom:20px}
.shop-boxevent .boxevent-box-title .box-title-txt h3 {margin:10px 0;text-align:center;font-size:18px}
.shop-boxevent .boxevent-item-wrap {position:relative}
.shop-boxevent .boxevent-item:after {display:block;visibility:hidden;clear:both;content:""}
.shop-boxevent .boxevent-item-box {margin-top:15px;padding-top:15px;border-top:1px solid #eee}
.shop-boxevent .boxevent-item-box-in {position:relative}
.shop-boxevent .boxevent-item-box-in:after {content:"";display:block;clear:both}
.shop-boxevent .boxevent-item-box-in .boxevent-item-img {position:relative;float:left;width:35%}
.shop-boxevent .boxevent-item-box-in .boxevent-item-img img {display:block;width:100% \9;max-width:100%;height:auto}
.shop-boxevent .boxevent-item-box-in .boxevent-item-desc {float:right;width:60%}
.shop-boxevent .boxevent-item-box-in .boxevent-item-desc h5 {position:relative;overflow:hidden;height:38px;margin:0 0 5px;font-size:14px;line-height:1.5}
.shop-boxevent .boxevent-item-box-in .boxevent-item-desc span {color:#E52700;font-weight:bold}
.shop-boxevent .boxevent-item-box-in:hover h5 {text-decoration:underline}
.shop-boxevent .boxevent-no-item {text-align:center;height:250px;line-height:250px;color:#959595}
<?php if ($eyoom['is_responsive'] == '1' || G5_IS_MOBILE) { // 반응형 또는 모바일일때 ?>
@media (max-width:991px) {
    .shop-boxevent .boxevent-box {width:100%;margin-bottom:20px}
    .shop-boxevent .boxevent-box:last-child {margin-bottom:0}
    .shop-boxevent .boxevent-item-box {float:left;width:50%}
    .shop-boxevent-wrap .event-title h2 {margin-bottom:20px;font-size:30px;line-height:30px}
    .shop-boxevent-wrap .event-title h3 {font-size:15px;line-height:25px}
}
@media (max-width:767px) {
    .shop-boxevent .boxevent-item-box {float:none;width:100%}
    .shop-boxevent-wrap .event-title {margin-bottom:20px}
    .shop-boxevent-wrap .event-title h2 {font-size:24px;line-height:24px}
}
<?php } ?>
</style>

<section id="sev" class="shop-boxevent-wrap">
    <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
    <div class="adm-edit-btn btn-edit-mode hidden-xs hidden-sm" style="top:-20px">
        <div class="btn-group">
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shopetc&amp;pid=itemevent&amp;thema=<?php echo $theme; ?>&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="btn-e btn-e-xs btn-e-red btn-e-split"><i class="far fa-edit"></i> 이벤트 설정</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shopetc&amp;pid=itemevent&amp;thema=<?php echo $theme; ?>" target="_blank" class="btn-e btn-e-xs btn-e-red btn-e-split-red dropdown-toggle" title="새창 열기">
                <i class="far fa-window-maximize"></i>
            </a>
            <button type="button" class="btn-e btn-e-xs btn-e-red btn-e-split-red popovers" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" data-content="
                <span class='font-size-11'>
                <strong class='color-indigo'>이미지 권장 사이즈</strong><br>
                <div class='margin-hr-5'></div>
                영카트5 '이벤트 관리' 기본 기능을 사용.<br>
                이벤트 타이틀은 해당 파일(boxevent.skin.html.php)을 열어 직접 수정.<br>
                배너 이미지 1000 x 550 픽셀 사이즈 사용.<br>
                '관리자 > 쇼핑몰현황/기타 > 이벤트관리'에서 상품 등록.<br>
                <span class='color-indigo'>[이벤트 관리]</span><br>
                1. 출력이미지 폭(500) 높이(0) 설정<br>
                2. 이벤트 제목 입력<br>
                3. 배너이미지 등록<br>
                4. 관련상품 및 디자인에서 상품 등록<br>
                5. 자세한 사항은 영카트5 매뉴얼 참고
                </span>
            "><i class="fas fa-question-circle"></i></button>
        </div>
    </div>
    <?php } ?>

    <div class="event-title">
        <h2>Event By Categories</h2>
        <h3>Daily casual maker</h3>
    </div>
    <div class="shop-boxevent-inner">
        <div class="shop-boxevent">
            <?php for ($i=0; $i<$ev_count; $i++) { ?>
            <div class="boxevent-box">
                <div class="boxevent-box-inner">
                    <div class="boxevent-box-title">
                        <a href="<?php echo $ev_list[$i]['href']; ?>">
                        <?php if (file_exists($ev_list[$i]['event_img'])) { // 이벤트 이미지가 있다면 이미지 출력 ?>
                            <img src="<?php echo G5_DATA_URL; ?>/event/<?php echo $ev_list[$i]['ev_id']; ?>_m" class="img-responsive" alt="<?php echo $ev_list[$i]['ev_subject']; ?>">
                        <?php } ?>
                        <div class="box-title-txt">
                            <?php if ($ev_list[$i]['ev_subject']) { ?>
                            <h3><?php echo $ev_list[$i]['ev_subject']; ?></h3>
                            <?php } ?>
                        </div>
                        </a>
                        <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
                        <div class="adm-edit-btn btn-edit-mode hidden-xs hidden-sm" style="bottom:20px">
                            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shopetc&pid=itemeventform&thema=<?php echo $theme; ?>&ev_id=<?php echo $ev_list[$i]['ev_id']; ?>&w=u&iw=u&wmode=1" onclick="eb_admset_modal(this.href); return false;" class="btn-e btn-e-xs btn-e-dark btn-e-split"><i class="far fa-edit"></i> 개별이벤트 설정</a>
                            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shopetc&pid=itemeventform&thema=<?php echo $theme; ?>&ev_id=<?php echo $ev_list[$i]['ev_id']; ?>&w=u&iw=u" target="_blank" class="btn-e btn-e-xs btn-e-dark btn-e-split-dark dropdown-toggle" title="새창 열기">
                                <i class="far fa-window-maximize"></i>
                            </a>
                        </div>
                        <?php } ?>
                    </div>

                    <div class="boxevent-item-wrap">
                        <?php if (is_array($ev_list[$i]['ev_prd'])) { ?>
                        <div class="boxevent-item">
                            <?php foreach ($ev_list[$i]['ev_prd'] as $k => $ev_prd) { ?>
                            <div class="boxevent-item-box">
                                <div class="boxevent-item-box-in">
                                    <div class="boxevent-item-img">
                                        <?php echo get_it_image($ev_prd['it_id'], 400, 0, get_text($ev_prd['it_name'])); ?>
                                    </div>
                                    <div class="boxevent-item-desc">
                                        <a href="<?php echo $ev_prd['item_href']; ?>" class="ev_prd_tit">
                                            <h5><strong><?php echo get_text(cut_str($ev_prd['it_name'], 30)); ?></strong></h5>
                                        </a>
                                        <span><?php echo $ev_prd['it_price']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <?php } ?>

                        <?php if (count((array)$ev_list[$i]['ev_prd']) == 0) { ?>
                        <div class="boxevent-no-item">
                            <i class="fas fa-exclamation-circle"></i> 등록된 상품이 없습니다.
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php } if ($ev_count == 0) { ?>
<div class="position-relative">
    <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
    <div class="adm-edit-btn btn-edit-mode hidden-xs hidden-sm" style="top:-20px">
        <div class="btn-group">
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shopetc&amp;pid=itemevent&amp;thema=<?php echo $theme; ?>&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="btn-e btn-e-xs btn-e-red btn-e-split"><i class="far fa-edit"></i> 이벤트 설정</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shopetc&amp;pid=itemevent&amp;thema=<?php echo $theme; ?>" target="_blank" class="btn-e btn-e-xs btn-e-red btn-e-split-red dropdown-toggle" title="새창 열기">
                <i class="far fa-window-maximize"></i>
            </a>
        </div>
    </div>
    <?php } ?>
    <!-- <p class="text-center font-size-13 color-grey margin-top-10"><i class="fas fa-exclamation-circle"></i> 등록된 이벤트가 없습니다.</p> -->
</div>
<?php } ?>