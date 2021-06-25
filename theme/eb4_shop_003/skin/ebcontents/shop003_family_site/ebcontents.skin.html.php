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
            <button type="button" class="btn-e btn-e-xs btn-e-red popovers" data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-content="
            <span class='font-size-11'>
            <strong class='color-indigo'>좌측 [EB컨텐츠 설정하기 버튼] 클릭 후 아래 설명 참고</strong><br>
            <div class='margin-hr-5'></div>
            <span class='color-indigo'>[설정정보]</span><br>
            1. 컨텐츠 마스터 제목 : 패밀리 사이트<br>
            2. 스킨선택 : shop003_family_site<br>
            3. 컨텐츠 아이템에서 사용할 링크수 : 1개<br>
            4. 컨텐츠 아이템에서 사용할 이미지수 : 0개<br>
            5. 컨텐츠 아이템에서 사용할 필드수 : 1개<br>
            <span class='color-indigo'>[EB 컨텐츠 - 아이템 관리]</span><br>
            1. EB컨텐츠 아이템 추가 클릭<br>
            2. 텍스트 필드 #1 입력<br>
            3. 연결주소 [링크] #1 입력
            <div class='margin-hr-5'></div>
            </span>
        "><i class="fas fa-question-circle"></i>
            </button>
        </div>
    </div>
</div>
<?php } ?>

<?php if (isset($ec_master) && $ec_master['ec_state'] == '1') { // 보이기 상태에서만 출력 ? ?>
<style>
.family-site {position:relative;margin-bottom:0}
.family-site dt {position:relative}
.family-site dt a {font-size:14px;line-height:15px;padding:15px;font-weight:400;color:#eee;display:block;background:#999}
.family-site dt a:hover {color:#fff}
.family-site dt i {color:#ddd;float:right;display:inline-block;padding-top:5px}
.family-site dd {position:absolute;bottom:45px;width:100%;z-index:2;display:none}
.family-site dd ul {margin-bottom:0;background:#ddd}
.family-site ul li {border-top:1px solid #bbb}
.family-site ul li a {color:#707070;font-size:13px;display:block;padding:10px}
.family-site ul li a:hover {color:#bb0a30}
</style>

<div class="family-site-wrap">
    <dl class="family-site">
        <dt><a href="" class="hte-font-hover">Family site<i class="fas fa-sort-up"></i></a></dt>

        <?php /* ebcontents item */?>
        <dd>
            <ul class="list-unstyled">
            <?php if (is_array($contents)) { ?>
                <?php foreach ($contents as $k => $item) { ?>
                <li><a href="<?php echo $item['href_1']; ?>" target="<?php echo $item['target_1']; ?>"><?php echo $item['ci_subject_1']; ?></a></li>
                <?php } ?>
            <?php } ?>
            <?php if ($ec_default) { ?>
                <li><a href="">패밀리 사이트 1</a></li>
                <li><a href="">패밀리 사이트 2</a></li>
                <li><a href="">패밀리 사이트 3</a></li>
            <?php } ?>
            </ul>
        </dd>
    </dl>
</div>

<script>
$(document).ready(function(){
    $(".family-site dt a").click(function(){
        $(".family-site dd").slideToggle(300);
        return false;
    });
});
</script>
<?php } ?>