<?php
if (!defined('_EYOOM_')) exit;
?>
<?php /* eb콘텐츠 편집 버튼 */ ?>
<?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
<div class="btn-edit-mode-wrap <?php if ($ec_master['ec_state'] == '2') { ?>hidden-message<?php } ?>">
    <div class="adm-edit-btn btn-edit-mode hidden-xs hidden-sm" style="top:inherit;bottom:0;text-align:right">
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
                1. 컨텐츠 마스터 제목 : 소셜링크 아이콘<br>
                2. 스킨선택 : shop003_sns_link<br>
                3. 컨텐츠 아이템에서 사용할 링크수 : 1개<br>
                3. 컨텐츠 아이템에서 사용할 필드수 : 1개<br>
                <span class='color-indigo'>[EB 컨텐츠 - 아이템 관리]</span><br>
                1. EB컨텐츠 아이템 추가 클릭<br>
                2. 텍스트 필드 #1 입력 (소셜아이콘 명칭 입력 - 아래 참고)<br>
                <div class='margin-hr-5'></div>
                페이스북 : facebook<br>
                트위터 : twitter<br>
                인스타그램 : instagram<br>
                네이버 라인 : line<br>
                유튜브 : youtube<br>
                <div class='margin-hr-5'></div>
                3. 연결주소 [링크] #1 입력<br>
                <div class='margin-hr-5'></div>
                SNS 아이콘 링크 연결 <br>
                </span>
            "><i class="fas fa-question-circle"></i></button>
        </div>
    </div>
</div>
<?php } ?>

<?php if (isset($ec_master) && $ec_master['ec_state'] == '1') { // 보이기 상태에서만 출력 ? ?>
<style>
.social-link-wrap {position:relative}
.social-link-wrap .social-link-list {display:flex;justify-content:start;margin:0 0 20px 0;padding:0;list-style:none}
.social-link-wrap .social-link-list li {margin:0 10px 0 0}
.social-link-wrap .social-link-list li a {display:block;width:40px;height;40px;line-height:40px;text-align:center;font-size:22px;background:#bbb;color:#707070}
.social-link-wrap .social-link-list li a:hover {color:#fff;background:#1b1b1b}
.social-link-wrap .social-link-list li.social-link-facebook a:hover {background:#4A68AD}
.social-link-wrap .social-link-list li.social-link-twitter a:hover {background:#4CA0EB}
.social-link-wrap .social-link-list li.social-link-instagram a:hover {background:#AF41A3}
.social-link-wrap .social-link-list li.social-link-line a:hover {background:#53B535}
.social-link-wrap .social-link-list li.social-link-youtube a:hover {background:#EA3323}
.fa-naver:before {
    font-family: Arial; /* your font family here! */
    font-weight: bold;    
    content: 'N';
}
.fa-kakako:before {
    font-family: Arial; /* your font family here! */
    font-weight: bold;    
    content: "'";
}

</style>

<div class="social-link-wrap">
    <?php /* ebcontents item */?>
    <?php if (is_array($contents)) { ?>
    <ul class="social-icons">
    <?php foreach ($contents as $k => $item) { ?>
        <?php if ($item['ci_subject_1']) { ?>
        <li class="social-link-<?php echo $item['ci_subject_1']; ?>">11<a href="<?php echo $item['href_1']; ?>" target="<?php echo $item['target_1']; ?>"><i class="fab fa-<?php echo $item['ci_subject_1']; ?>"></i></a></li>
        <?php } ?>
    <?php } ?>
    </ul>
    <?php } ?>

    <?php if ($ec_default) { ?>
    <ul class="social-link-list">
        <a href="https://www.facebook.com/lnakorea"><img src="/img/sns/facebook.jpg"/></a>
        <a href="https://www.youtube.com/channel/UCAZ7C379vpprYba6CMHbviw"><img src="/img/sns/youtube.jpg"/></a>
        <a href="https://www.instagram.com/lnakorea/"><img src="/img/sns/instar.jpg"/></a>
        <a href="https://blog.naver.com/lnamall"><img src="/img/sns/naver.jpg"/></a>
        <!-- <li class="social-link-kakao"><a href="https://story.kakao.com/ch/lnakorea"><i class="fab fa-kakako"></i></a></li> -->
        <!-- <li class="social-link-youtube"><a href=""><i class="fab fa-youtube"></i></a></li> -->
    </ul>
    <?php } ?>
</div>
<?php } ?>