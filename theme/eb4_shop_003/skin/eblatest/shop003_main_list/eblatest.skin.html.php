<?php
if (!defined('_EYOOM_')) exit;
?>
<div class="btn-edit-mode-wrap">
    <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
    <div class="headline-btn text-center btn-edit-mode hidden-xs hidden-sm">
        <div class="btn-group">
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=eblatest_form&amp;thema=<?php echo $theme; ?>&amp;el_code=<?php echo $el_master['el_code']; ?>&amp;w=u&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="btn-e btn-e-xs btn-e-red btn-e-split"><i class="far fa-edit"></i> EB최신글 마스터 설정</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=eblatest_form&amp;thema=<?php echo $theme; ?>&amp;el_code=<?php echo $el_master['el_code']; ?>&amp;w=u" target="_blank" class="btn-e btn-e-xs btn-e-red btn-e-split-red dropdown-toggle" title="새창 열기">
                <i class="far fa-window-maximize"></i>
            </a>
        </div>
    </div>
    <?php } ?>
</div>

<?php if (isset($el_master) && $el_master['el_state'] == '1') { // 보이기 상태에서만 출력 ? ?>
<style>
.list-latest {position:relative;background:#fff}
/* 최신글 타이틀 */
.list-latest .latest-title {position:relative;margin:0 0 30px;padding-bottom:15px;border-bottom:3px solid #eee}
.list-latest .latest-title:before {content:"";position:absolute;bottom:-3px;left:0;width:20px;height:3px;background:#F2A23A}
.list-latest .latest-title h2 {margin:0;font-size:30px;line-height:40px;font-weight:100}
/* 최신글 리스트 */
.list-latest ul {overflow:hidden;margin:0}
.list-latest ul li {padding:10px 0}
.list-latest ul li h4 {margin:0}
.list-latest ul li h4 a {position:relative;display:block;padding:2px 100px 2px 0;font-size:15px;line-height:15px;color:#555}
.list-latest ul li:last-child h4 a {border-bottom:0 none}
.list-latest ul li h4 a:hover {text-decoration:underline}
.list-latest ul li h4 a .latest-date {position:absolute;top:2px;right:0;color:#909090;font-size:12px}
/* 더보기 버튼 */
.list-latest .btn-more {text-align:right}
.list-latest .btn-more a {display:inline-block;width:60px;height:60px;margin:0;line-height:60px;font-size:26px;text-align:center;color:#fff;background:#fe424d;-webkit-transition: all .5s ease;-moz-transition: all .5s ease;-o-transition: all .5s ease;-ms-transition: all .5s ease;transition: all .5s ease}
.list-latest .btn-more a:hover {background:#1b1b1b}
<?php if ($eyoom['is_responsive'] == '1' || G5_IS_MOBILE) { // 반응형 또는 모바일일때 ?>
@media (max-width:767px){
    .list-latest .latest-title h2 {font-size:20px;line-height:30px}
}
<?php } ?>
</style>

<div class="list-latest">
    <div class="latest-title">
        <h2><a href="<?php echo $eb_latest['li_link']; ?>"><?php echo $el_master['el_subject']; ?></a></h2>
    </div>
    <?php if (is_array($el_item)) { foreach ($el_item as $k => $eb_latest) { ?>
    <ul class="list-unstyled">
        <?php if (count((array)$eb_latest['list']) > 0) { foreach ($eb_latest['list'] as $data) { ?>
        <li>
            <h4>
                <a href="<?php echo $data['href']; ?>" class="ellipsis">
                    &middot; <?php echo $data['wr_subject']; ?>
                    <span class="latest-date"><?php echo $eb_latest['li_date_type'] == '1' ? $eb->date_time("{$eb_latest['li_date_kind']}",$data['wr_datetime']):  $eb->date_format("{$eb_latest['li_date_kind']}",$data['wr_datetime']); ?></span>
                </a>
            </h4>
        </li>
        <?php }} else { ?>
        <li><p class="text-center color-dark font-size-13 margin-top-30">최신글이 없습니다.</p></li>
        <?php } ?>
    </ul>

    <div class="btn-edit-mode-wrap">
        <?php /* eb최신글 아이템 편집 버튼 */ ?>
        <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
        <div class="text-center margin-top-10 btn-edit-mode hidden-xs hidden-sm">
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=eblatest_itemform&amp;thema=<?php echo $theme; ?>&amp;el_code=<?php echo $el_master['el_code']; ?>&amp;li_no=<?php echo $eb_latest['li_no']; ?>&amp;w=u&amp;iw=u&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="btn-e btn-e-xs btn-e-dark"><i class="far fa-edit"></i> EB최신글 아이템 설정</a>
        </div>
        <?php } ?>
    </div>
    <?php }} ?>

    <?php if ($el_default) { ?>
    <ul class="list-unstyled"><li><p class="text-center color-dark font-size-13 margin-top-30">최신글이 없습니다.</p></li></ul>
    <?php } ?>
</div>

<?php } ?>