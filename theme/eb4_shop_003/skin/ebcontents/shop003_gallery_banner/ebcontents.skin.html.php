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
            1. 컨텐츠 마스터 제목 : 갤러리 배너<br>
            2. 스킨선택 : shop003_gallery_banner<br>
            3. 컨텐츠 아이템에서 사용할 링크수 : 1개<br>
            4. 컨텐츠 아이템에서 사용할 이미지수 : 1개<br>
            5. 컨텐츠 아이템에서 사용할 필드수 : 2개<br>
            <span class='color-indigo'>[EB 컨텐츠 - 아이템 관리]</span><br>
            1. EB컨텐츠 아이템 추가 클릭<br>
            2. 텍스트 필드 #1, #2 입력<br>
            3. 연결주소 [링크] #1 입력<br>
            4. 이미지 #1 업로드<br>
            <div class='margin-hr-5'></div>
            이미지 비율 800x300 픽셀 이미지 사용. <br>
            EB컨텐츠 아이템 2개로 설정.
            </span>
            "><i class="fas fa-question-circle"></i></button>
        </div>
    </div>
</div>
<?php } ?>

<?php if (isset($ec_master) && $ec_master['ec_state'] == '1') { // 보이기 상태에서만 출력 ? ?>
<style>
.ebcontents-gallery-banner .row {margin:0 -25px}
.ebcontents-gallery-banner .row > div {padding:0 25px}
/* ebcontents master */
.ebcontents-gallery-banner .ebcontents-master {margin-bottom:60px;padding:0 15px;text-align:center}
.ebcontents-gallery-banner .ebcontents-master h2 {margin:0 0 20px;font-size:42px;line-height:42px;font-weight:800}
.ebcontents-gallery-banner .ebcontents-master p {margin-bottom:0;font-size:16px}
/* ebcontents item */
.ebcontents-gallery-banner .item-box {position:relative}
.ebcontents-gallery-banner .item-image {overflow:hidden}
.ebcontents-gallery-banner .item-image img {max-width:100%;height:auto}
.ebcontents-gallery-banner .item-content {position:absolute;top:50%;left:30px;transform:translateY(-50%)}
.ebcontents-gallery-banner .item-content h4 {margin:0 0 10px;font-size:20px;font-weight:700}
.ebcontents-gallery-banner .item-content h5 {margin-bottom:20px;color:#707070}
/* 더보기 버튼 */
.ebcontents-gallery-banner .ebcontents-item .btn-more {position:relative;display:inline-block;background:#333}
.ebcontents-gallery-banner .ebcontents-item .btn-more a {position:relative;display:inline-block;padding:8px 20px;font-size:13px;color:#fff}
.ebcontents-gallery-banner .ebcontents-item .btn-more:before {content:"";position:absolute;top:0;left:0;width:0;height:100%;background:#F2A23A;-webkit-transition:all .35s ease-in-out;-moz-transition:all .35s ease-in-out;-o-transition:all .35s ease-in-out;-ms-transition:all .35s ease-in-out;transition:all .35s ease-in-out}
.ebcontents-gallery-banner .ebcontents-item .btn-more:hover:before {width:100%}

<?php if ($eyoom['is_responsive'] == '1' || G5_IS_MOBILE) { // 반응형 또는 모바일일때 ?>
@media (min-width:992px) and (max-width:1199px){
}
@media (max-width:991px){
    .ebcontents-gallery-banner .row {margin:0 -15px}
    .ebcontents-gallery-banner .row > div {padding:0 15px}
    .ebcontents-gallery-banner .item-box {height:220px;overflow:hidden}
    .ebcontents-gallery-banner .item-box-1 {margin-bottom:30px}
}
@media (max-width:767px){
    .ebcontents-gallery-banner .item-box {height:auto}
    .ebcontents-gallery-banner .item-content {left:20px}
    .ebcontents-gallery-banner .item-content h4 {font-size:16px}
    .ebcontents-gallery-banner .item-content h5 {margin-bottom:10px;font-size:13px}
    .ebcontents-gallery-banner .ebcontents-item .btn-more a {padding:5px 15px;font-size:11px}
}
<?php } ?>
</style>
<div class="ebcontents ebcontents-gallery-banner">
    <?php /* ebcontents item */?>
    <div class="ebcontents-item">
        <div class="container">
            <div class="row">
            <?php if (is_array($contents)) { ?>
                <?php foreach ($contents as $k => $item) { ?>
                <div class="col-md-6">
                    <div class="item-box item-box-<?php echo $k + 1 ?>">
                        <div class="item-image"><img src="<?php echo $item['src_1']?>" alt="image"></div>
                        <div class="item-content">
                            <?php if ($item['ci_subject_1']) { ?>
                            <h4><?php echo $item['ci_subject_1']; ?></h4>
                            <?php } ?>
                            <?php if ($item['ci_subject_2']) { ?>
                            <h5><?php echo $item['ci_subject_2']; ?></h5>
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
                <div class="col-md-6">
                    <div class="item-box item-box-1">
                        <div class="item-image"><img src="<?php echo $ebcontents_skin_url; ?>/image/01.jpg" alt="image"></div>
                        <div class="item-content">
                            <h4>Iconic Style</h4>
                            <h5>New Wordrobe</h5>
                            <div class="btn-more"><a href="">Show Item</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item-box item-box-2">
                        <div class="item-image"><img src="<?php echo $ebcontents_skin_url; ?>/image/02.jpg" alt="image"></div>
                        <div class="item-content">
                            <h4>To Impress</h4>
                            <h5>New Wordrobe</h5>
                            <div class="btn-more"><a href="">Show Item</a></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>