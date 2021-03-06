<?php
/**
 * skin file : /theme/THEME_NAME/skin/board/webzine/write.skin.html.php
 */
if (!defined('_EYOOM_')) exit;

add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/plugins/sweetalert/sweetalert.min.css" type="text/css" media="screen">',0);
add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/plugins/venobox/venobox.css" type="text/css" media="screen">',0);
?>

<style>
.board-write .board-setup {position:relative;border:1px solid #d5d5d5;height:30px;margin-bottom:20px}
.board-write .board-setup .select {position:absolute;top:-1px;left:-1px;display:inline-block;width:200px}
.board-write .board-setup-btn-box {position:absolute;top:-1px;right:-1px;display:inline-block;width:420px}
.board-write .board-setup-btn {float:left;width:25%;height:30px;line-height:30px;color:#fff;text-align:center;font-size:12px}
.board-write .board-setup-btn:nth-child(odd) {background:#59595B}
.board-write .board-setup-btn:nth-child(even) {background:#676769}
.board-write .board-setup-btn:hover {opacity:0.8}
.board-write .board-write-title {position:relative;border-bottom:1px solid #b5b5b5;padding-bottom:15px}
.board-write .blind {position:absolute;top:-10px;left:-100000px;display:none}
.board-write .write-edit-wrap #wr_content {display:block;box-sizing:border-box;-moz-box-sizing:border-box;width:100%;min-height:200px;padding:6px 10px;outline:none;border-width:1px;border-style:solid;border-radius:0;background:#FFF;color:#353535;appearance:normal;-moz-appearance:none;-webkit-appearance:none;resize:vertical}
.board-write .write-option-btn {float:left;padding:0 15px;margin-bottom:3px;height:24px;line-height:24px;color:#fff;text-align:center;font-size:11px}
.board-write .write-option-btn:nth-child(odd) {background:#59595B}
.board-write .write-option-btn:nth-child(even) {background:#676769}
.board-write .write-option-btn:hover {color:#fff;opacity:0.8}
.board-write .write-collapse-box {margin-top:10px;background:#f8f8f8;border:1px solid #d5d5d5;padding:15px 10px}
.board-write #modal_video_note .table-list-eb .table thead>tr>th {text-align:left}
/* Auto Save */
.autosave-btn {position:absolute;top:0;right:0}
#autosave_wrapper {position:relative}
#autosave_pop {display:none;z-index:10;position:absolute;top:0;right:0;padding:8px;width:320px;height:auto !important;height:180px;max-height:250px;border:2px solid #959595;background:#fff;box-shadow:0 1px 8px rgba(0, 0, 0, 0.2);overflow-y:scroll}
html.no-overflowscrolling #autosave_pop {height:auto;max-height:10000px !important}
#autosave_pop div {text-align:right}
#autosave_pop button {margin:0;padding:0;border:0;background:transparent;margin-left:10px}
#autosave_pop ul {margin:10px 0;padding:0;border-top:1px solid #e9e9e9;list-style:none}
#autosave_pop li {padding:7px 0;border-bottom:1px solid #e9e9e9;zoom:1;font-size:12px}
#autosave_pop li:after {display:block;visibility:hidden;clear:both;content:""}
#autosave_pop a {display:block;float:left}
#autosave_pop span {display:block;float:right}
#autosave_pop .autosave_heading {text-align:left}
#autosave_pop strong {font-size:13px}
#autosave_pop .fa-times {position:absolute;top:10px;right:15px}
.autosave_close {cursor:pointer}
.autosave_content {display:none}
/* Tag */
#tag-box {border:1px dashed #c5c5c5;min-height:20px;padding:5px;background:#fff;margin-top:15px}
#tag-cloud div {display:inline-block;line-height:1;background:#676769;padding:3px 7px;margin:2px 3px;font-size:11px;color:#fff;border-radius:2px !important}
#tag-cloud div i {cursor:pointer}
/* Ckeditor */
.board-write a.cke_button {padding:2px 5px}
.board-write a.cke_button_on {padding:1px 4px}
.board-write a.cke_button_off:hover, .board-write a.cke_button_off:focus, .board-write a.cke_button_off:active {padding:1px 4px}
/* Smart Editor */
.cke_sc {margin-bottom:10px}
.btn_cke_sc {padding:0 10px}
.cke_sc_def {padding:10px;margin-bottom:10px;margin-top:10px}
.cke_sc_def button {padding:3px 15px;background:#555555;color:#fff;border:none}
/* Summernote */
.eyoom-form .note-editor *, .eyoom-form .note-editor *:after, .eyoom-form .note-editor *:before {box-sizing:border-box;-moz-box-sizing:border-box}
.eyoom-form .note-editor.panel-default>.panel-heading {background-color:#eaecee;border:0;border-bottom:1px solid #A9A9A9}
.panel-heading.note-toolbar .note-color .dropdown-menu {padding-top:6px;padding-bottom:6px;padding-left:1px}
/* Map */
#map_canvas {width:1000px;height:400px;display:none}
<?php if ($wmode) { ?>
.board-write {width:100%;overflow:hidden}
<?php } ?>
</style>

<div class="board-write">
    <?php if ($is_admin && !G5_IS_MOBILE && !$wmode) { ?>
    <div class="board-setup btn-edit-mode hidden-xs hidden-sm">
        <span class="eyoom-form">
            <label class="select">
                <select name="set_bo_skin" class="set_bo_skin">
                    <option value="">::????????????::</option>
                    <?php foreach ($bo_skin as $skin) { ?>
                    <option value="<?php echo $skin; ?>" <?php echo $skin == $eyoom_board['bo_skin'] ? 'selected': ''; ?>><?php echo $skin; ?></option>
                    <?php }?>
                </select><i></i>
            </label>
        </span>
        <span class="board-setup-btn-box">
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=board&amp;pid=board_copy&amp;bo_table=<?php echo $bo_table; ?>&amp;wmode=1"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="far fa-clone"></i> ????????????</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=board&amp;pid=board_form&amp;w=u&amp;bo_table=<?php echo $bo_table; ?>&amp;wmode=1"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="fas fa-list-alt"></i> ????????????</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=board_form&amp;w=u&amp;bo_table=<?php echo $bo_table; ?>&amp;wmode=1"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="far fa-list-alt"></i> ????????????</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=board&amp;pid=board_extend&amp;w=u&amp;bo_table=<?php echo $bo_table; ?>&amp;wmode=1"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="far fa-plus-square"></i> ???????????? (<?php echo number_format($board['bo_ex_cnt']); ?>)</a>
        </span>
    </div>
    <?php } ?>

    <h4 class="board-write-title">
        <strong><?php echo $g5['title']; ?></strong>
    </h4>

    <form name="fwrite" id="fwrite" action="<?php echo $action_url; ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" class="eyoom-form">
    <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
    <input type="hidden" name="w" value="<?php echo $w; ?>">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table; ?>">
    <input type="hidden" name="wr_id" value="<?php echo $wr_id; ?>">
    <input type="hidden" name="sca" value="<?php echo $sca; ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl; ?>">
    <input type="hidden" name="stx" value="<?php echo $stx; ?>">
    <input type="hidden" name="spt" value="<?php echo $spt; ?>">
    <input type="hidden" name="sst" value="<?php echo $sst; ?>">
    <input type="hidden" name="sod" value="<?php echo $sod; ?>">
    <input type="hidden" name="page" value="<?php echo $page; ?>">
    <input type="hidden" name="board_skin_path" value="<?php echo EYOOM_CORE_PATH;?>/board">
    <input type="hidden" name="wmode" id="wmode" value="<?php echo $wmode; ?>">
    <input type="hidden" name="eb_1" id="eb_1" value="<?php echo $eb_1; ?>">
    <input type="hidden" name="eb_2" id="eb_2" value="<?php echo $eb_2; ?>">
    <input type="hidden" name="eb_3" id="eb_3" value="<?php echo $eb_3; ?>">
    <input type="hidden" name="eb_4" id="eb_4" value="<?php echo $eb_4; ?>">
    <input type="hidden" name="eb_5" id="eb_5" value="<?php echo $eb_5; ?>">
    <input type="hidden" name="eb_6" id="eb_6" value="<?php echo $eb_6; ?>">
    <input type="hidden" name="eb_7" id="eb_7" value="<?php echo $eb_7; ?>">
    <input type="hidden" name="eb_8" id="eb_8" value="<?php echo $eb_8; ?>">
    <input type="hidden" name="eb_9" id="eb_9" value="<?php echo $eb_9; ?>">
    <input type="hidden" name="eb_10" id="eb_10" value="<?php echo $eb_10; ?>">

    <?php if (($is_name) || ($is_password && !$is_admin) || ($is_email) || ($is_homepage)) { ?>
    <section class="margin-top-20">
        <div class="row">
            <?php if ($is_name) { ?>
            <div class="col col-3">
                <label for="wr_name" class="label">??????<strong class="sound_only">??????</strong></label>
                <label class="input required-mark margin-bottom-10">
                    <i class="icon-append fas fa-user"></i>
                    <input type="text" name="wr_name" value="<?php echo $name; ?>" id="wr_name" required size="10" maxlength="20">
                </label>
            </div>
            <?php } ?>
            <?php if ($is_password && !$is_admin) { ?>
            <div class="col col-3">
                <label for="wr_password" class="label">????????????<strong class="sound_only">??????</strong></label>
                <label class="input required-mark margin-bottom-10">
                    <i class="icon-append fas fa-lock"></i>
                    <input type="password" name="wr_password" id="wr_password" required maxlength="20">
                </label>
            </div>
            <?php } ?>
            <?php if ($is_email) { ?>
            <div class="col col-3">
                <label for="wr_email" class="label">?????????</label>
                <label class="input margin-bottom-10">
                    <i class="icon-append fas fa-envelope"></i>
                    <input type="text" name="wr_email" value="<?php echo $email; ?>" id="wr_email" size="50" maxlength="100">
                </label>
            </div>
            <?php } ?>
            <?php if ($is_homepage) { ?>
            <div class="col col-3">
                <label for="wr_homepage" class="label">????????????</label>
                <label class="input margin-bottom-10">
                    <i class="icon-append fas fa-home"></i>
                    <input type="text" name="wr_homepage" value="<?php echo $homepage; ?>" id="wr_homepage" size="50">
                </label>
            </div>
            <?php } ?>
        </div>
    </section>
    <div class="margin-hr-10"></div>
    <?php } ?>
    <section>
        <div class="row">
            <?php if ($is_category) { ?>
            <div class="col col-4">
                <label class="select">
                    <select name="ca_name" id="ca_name" required class="form-control">
                        <option value="">??????????????? - ??????</option>
                        <?php echo $category_option; ?>
                    </select>
                    <i></i>
                </label>
            </div>
            <?php } ?>
            <div class="col col-8">
            <?php if ($is_notice || $is_html || $is_secret || $is_mail || $bo_use_anonymous == '1') { ?>
                <div class="inline-group">
                    <?php if ($is_notice) { ?>
                    <label for="notice" class="checkbox"><input type="checkbox" id="notice" name="notice" value="1" <?php echo $notice_checked; ?>><i></i>??????</label>
                    <?php } ?>

                    <?php if ($is_html) { ?>
                    <?php if ($is_dhtml_editor) { ?>
                    <input type="hidden" value="html1" name="html">
                    <?php } else { ?>
                    <label for="html" class="checkbox"><input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" value="<?php echo $html_value; ?>" <?php echo $html_checked; ?>><i></i>HTML</label>
                    <?php } ?>
                    <?php } ?>

                    <?php if ($is_secret) { ?>
                    <?php if ($is_admin || $is_secret == 1) { ?>
                    <label for="secret" class="checkbox"><input type="checkbox" id="secret" name="secret" value="secret" <?php echo $secret_checked; ?>><i></i>?????????</label>
                    <?php } else { ?>
                    <input type="hidden" name="secret" value="secret">
                    <?php } ?>
                    <?php } ?>

                    <?php if ($bo_use_anonymous == '1') { ?>
                    <label for="wr_anonymous" class="checkbox"><input type="checkbox" id="wr_anonymous" name="wr_anonymous" value="1" <?php echo $wr_anonymous_checked; ?>><i></i>?????????</label>
                    <?php } ?>

                    <?php if ($is_mail) { ?>
                    <label for="mail" class="checkbox"><input type="checkbox" id="mail" name="mail" value="mail" <?php echo $recv_email_checked; ?>><i></i>??????????????????</label>
                    <?php } ?>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>
    <div class="margin-hr-10"></div>
    <section>
        <div class="row">
            <div class="col col-12 md-margin-bottom-10">
                <div class="position-relative">
                    <label for="wr_subject" class="label">
                        ??????<strong class="sound_only"> ??????</strong>
                    </label>
                    <label class="input required-mark">
                        <input type="text" name="wr_subject" value="<?php echo $subject; ?>" id="wr_subject" required size="50" maxlength="255" placeholder="????????? ????????? ?????????.">
                    </label>
                    <?php if ($is_member) { //?????? ????????? ??? ?????? ?>
                    <span class="autosave-btn">
                        <script src="<?php echo G5_URL; ?>/js/autosave.js"></script>
                        <button type="button" id="btn_autosave" class="btn-e btn-e-xs btn-e-dark position-relative">?????? ????????? ??? <span id="autosave_count" class="badge badge-red rounded"><?php echo $autosave_count; ?></span></button>
                        <div id="autosave_pop">
                            <div class="autosave_heading">
                                <strong>?????? ????????? ??? ??????</strong>
                                <span class="autosave_close"><i class="fas fa-times"></i></span>
                            </div>
                            <div class="clearfix"></div>
                            <ul></ul>
                            <div><span class="autosave_close btn-e btn-e-dark btn-e-sm">??????</span></div>
                        </div>
                    </span>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <div class="margin-hr-10"></div>
    <?php if ($eyoom['use_tag'] == 'y' && $eyoom_board['bo_use_tag'] == '1' && $member['mb_level'] >= $eyoom_board['bo_tag_level']) { ?>
    <section>
        <label class="label">?????? ??????</label>
        <div class="input input-button">
            <i class="icon-prepend fas fa-tags"></i>
            <input type="text" name="tmp_tag" id="tmp_tag" size="50" maxlength="255">
            <b class="tooltip tooltip-top-left">?????? ????????? ?????? ???, TAB?????? ???????????? ?????? ????????? ????????? ??? ????????????.</b>
            <div class="button"><input type="button" class="add_tags"><i class="fas fa-plus"></i> ????????????</div>
        </div>
        <div id="tag-box">
            <div id="tag-cloud">
            <?php if (is_array($wr_tags)) { ?>
            <?php foreach ($wr_tags as $key => $value) { ?>
                <div id="tag_box_<?php echo $key; ?>"><?php echo $value; ?> <i class="fas fa-times" onclick="del_tags('<?php echo $value; ?>','<?php echo $key; ?>');"></i></div>
            <?php } ?>
            <?php } ?>
            </div>
        </div>
        <input type="hidden" name="wr_tag" id="wr_tag" value="<?php echo $write['wr_tag']; ?>">
        <input type="hidden" name="del_tag" id="del_tag" value="">
    </section>
    <div class="margin-hr-10"></div>
    <?php } ?>
    <section>
        <div class="wr_content">
            <div id="write-option">
                <div class="panel panel-default">
                    <?php if ($eyoom_board['bo_use_addon_video'] == '1') { ?>
                    <a class="write-option-btn" data-toggle="collapse" data-parent="#write-option" href="#collapse-video-wr"><i class="fas fa-play-circle"></i> ?????????</a>
                    <?php } ?>
                    <?php if ($eyoom_board['bo_use_addon_soundcloud'] == '1') { ?>
                    <a class="write-option-btn" data-toggle="collapse" data-parent="#write-option" href="#collapse-sound-wr"><i class="fab fa-soundcloud"></i> ?????????????????????</a>
                    <?php } ?>
                    <?php if ($eyoom_board['bo_use_addon_map'] == '1') { ?>
                    <a class="write-option-btn" data-toggle="collapse" data-parent="#write-option" href="#collapse-map-wr"><i class="fas fa-map-marker-alt"></i> ??????</a>
                    <?php } ?>
                    <?php if ($eyoom_board['bo_use_addon_emoticon'] == '1') { ?>
                    <a class="write-option-btn pull-right emoticon" data-vbtype="iframe" title="????????????" href="<?php echo EYOOM_CORE_URL;?>/board/emoticon.php"><i class="far fa-smile"></i> ????????????</a>
                    <?php } ?>
                    <div class="clearfix"></div>
                    <?php if ($eyoom_board['bo_use_addon_video'] == '1') { ?>
                    <div id="collapse-video-wr" class="panel-collapse collapse">
                        <div class="write-collapse-box">
                            <div class="input input-button">
                                <input type="text" id="video_url" placeholder="??????????????? ??????">
                                <div class="button"><input type="button" id="btn_video" onclick="return false;">????????????</div>
                            </div>
                            <div class="note">
                                <span class="color-red">*</span> <a href="#" data-toggle="modal" data-target="#modal_video_note"><u>?????? ????????? ????????? ?????? ??????</u></a>
                            </div>
                            <div id="modal_video_note" class="modal fade">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">??</button>
                                            <h4 class="modal-title"><i class="fas fa-play-circle color-grey"></i> <strong>?????? ????????? ????????? ??????</strong></h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="table-list-eb">
                                                <table class="table font-size-12">
                                                    <thead>
                                                        <tr><th>????????????</th><th>URL ??????</th></tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr><th>?????????</th><td><a href="https://www.youtube.com" target="_blank">https://www.youtube.com</a></td></tr>
                                                        <tr><th>?????????</th><td><a href="https://vimeo.com" target="_blank">https://vimeo.com</a></td></tr>
                                                        <tr><th>????????? TV</th><td><a href="http://tv.naver.com" target="_blank">http://tv.naver.com</a></td></tr>
                                                        <tr><th>????????? TV</th><td><a href="https://tv.kakao.com" target="_blank">https://tv.kakao.com</a></td></tr>
                                                        <tr><th>??????</th><td><a href="https://www.ted.com" target="_blank">https://www.ted.com</a></td></tr>
                                                        <tr><th>?????????</th><td><a href="http://www.pandora.tv" target="_blank">http://www.pandora.tv</a></td></tr>
                                                        <tr><th>???????????????</th><td><a href="https://www.dailymotion.com" target="_blank">https://www.dailymotion.com</a></td></tr>
                                                        <tr><th>??????????????????</th><td><a href="https://www.slideshare.net" target="_blank">https://www.slideshare.net</a></td></tr>
                                                        <tr><th>??????</th><td><a href="http://www.youku.com" target="_blank">http://www.youku.com</a></td></tr>
                                                        <tr><th>iQiyi</th><td><a href="http://www.iqiyi.com" target="_blank">http://www.iqiyi.com</a></td></tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button data-dismiss="modal" class="btn-e btn-e-lg btn-e-dark" type="button"><i class="fas fa-times"></i> ??????</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if ($eyoom_board['bo_use_addon_soundcloud'] == '1') { ?>
                    <div id="collapse-sound-wr" class="panel-collapse collapse">
                        <div class="write-collapse-box">
                            <div class="input input-button">
                                <input type="text" id="scloud_url" placeholder="????????????????????? ???????????? ??????">
                                <div class="button"><input type="button" id="btn_scloud" onclick="return false;">????????????</div>
                            </div>
                            <div class="note">????????????????????? ???????????? : <a href="https://soundcloud.com/" target="_blank">https://soundcloud.com/</a></div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if ($eyoom_board['bo_use_addon_map'] == '1') { ?>
                    <div id="collapse-map-wr" class="panel-collapse collapse">
                        <?php if ($config['cf_map_google_id'] || $config['cf_map_naver_id'] || $config['cf_map_daum_id']) { ?>
                        <div class="write-collapse-box">
                            <div class="row">
                                <div class="col col-6 md-margin-bottom-10">
                                    <div class="input input-button">
                                        <i class="icon-prepend fas fa-question-circle"></i>
                                        <input type="text" name="map_zip" id="map_zip" size="5" maxlength="6" readonly>
                                        <b class="tooltip tooltip-top-left">???????????? - ?????? <span class="color-yellow">????????????</span> ???????????? ??????</b>
                                        <div class="button"><input type="button" onclick="win_zip('fwrite', 'map_zip', 'map_addr1', 'map_addr2', 'map_addr3', 'map_addr_jibeon');"><i class="fas fa-search"></i> ????????????</div>
                                    </div>
                                </div>
                                <div class="col col-6 inline-group">
                                    <?php if ($config['cf_map_google_id']) { ?>
                                    <label class="radio" for="map_type_1">
                                        <input type="radio" name="map_type" id="map_type_1" value="1" checked><i class="rounded-x"></i> Google??????
                                    </label>
                                    <?php } ?>
                                    <?php if ($config['cf_map_naver_id']) { ?>
                                    <label class="radio" for="map_type_2">
                                        <input type="radio" name="map_type" id="map_type_2" value="2" <?php echo !$config['cf_map_google_id'] ? 'checked':''; ?>><i class="rounded-x"></i> ???????????????
                                    </label>
                                    <?php } ?>
                                    <?php if ($config['cf_map_daum_id']) { ?>
                                    <label class="radio" for="map_type_3">
                                        <input type="radio" name="map_type" id="map_type_3" value="3" <?php echo !$config['cf_map_google_id'] && !$config['cf_map_naver_id'] ? 'checked':''; ?>><i class="rounded-x"></i> ????????????
                                    </label>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="margin-bottom-10"></div>
                            <div class="row">
                                <div class="col col-12">
                                    <label class="input">
                                        <input type="text" name="map_addr1" id="map_addr1" size="50">
                                    </label>
                                    <div class="note margin-bottom-10"><strong>Note:</strong> ????????????</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-6">
                                    <label class="input">
                                        <input type="text" name="map_addr2" id="map_addr2" size="50">
                                    </label>
                                    <div class="note margin-bottom-10"><strong>Note:</strong> ????????????</div>
                                </div>
                                <div class="col col-6">
                                    <label class="input">
                                        <input type="text" name="map_name" id="map_name" size="50">
                                    </label>
                                    <div class="note margin-bottom-10"><strong>Note:</strong> ?????????</div>
                                </div>
                            </div>
                            <div class="margin-hr-10"></div>
                            <div class="row">
                                <div class="col col-12">
                                    <input type="hidden" name="map_addr3" id="map_addr3" value="">
                                    <input type="hidden" name="map_addr_jibeon" value="">
                                    <div class="text-center">
                                        <button type="button" class="btn-e btn-e-lg btn-e-red" id="btn_map" onclick="return false;">????????????</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } else if ($is_admin) { ?>
                        <div class="write-collapse-box text-center">
                            <p><i class="fas fa-exclamation-circle"></i> ?????? ?????? API ID??? ?????? ??? ????????? ????????? ?????????.</p>
                            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=config&amp;pid=config_form#anc_cf_map" class="btn-e btn-e-xs btn-e-dark margin-left-5">?????? API ?????? ????????????</a>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="margin-bottom-15"></div>
            <label class="label" for="wr_content">?????? ??????</label>
            <div class="wr_content  <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
                <?php if($write_min || $write_max) { ?>
                <!-- ??????/?????? ?????? ??? ?????? ??? -->
                <p id="char_count_desc">??? ???????????? ?????? <strong><?php echo $write_min; ?></strong>?????? ??????, ?????? <strong><?php echo $write_max; ?></strong>?????? ???????????? ?????? ?????? ??? ????????????.</p>
                <?php } ?>
                <div class="write-edit-wrap">
                    <?php /* ????????? ???????????? ????????????, ????????? textarea ??? ?????? */ ?>
                    <?php echo $editor_html; ?>
                </div>
                <?php if($write_min || $write_max) { ?>
                <!-- ??????/?????? ?????? ??? ?????? ??? -->
                <div id="char_count_wrap"><span id="char_count"></span>??????</div>
                <?php } ?>
            </div>
        </div>
    </section>
    <div class="margin-hr-10"></div>
    <section>
        <?php $wl_cnt = count((array)$wr_link); ?>
        <?php for ($i=1; $i<=$wl_cnt; $i++) { ?>
        <div class="row">
            <div class="col col-12">
                <label class="label">?????? ?????? <?php echo $i; ?></label>
                <label class="input">
                    <i class="icon-append fas fa-link"></i>
                    <input type="text" name="wr_link<?php echo $i; ?>" value="<?php if ($w == 'u') echo $wr_link[$i]['link_val']; ?>" id="wr_link<?php echo $i; ?>" class="form-control" size="50">
                    <b class="tooltip tooltip-top-right">??????????????? ?????? ??? ?????????.</b>
                </label>
            </div>
        </div>
        <div class="margin-hr-10"></div>
        <?php } ?>
    </section>
    <section>
        <?php $wf_cnt = count((array)$wr_file); ?>
        <?php for ($i=0; $i<$wf_cnt; $i++) { ?>
        <div class="row">
            <div class="col col-12">
                <label class="label">?????? <?php echo $i+1; ?> ?????????</label>
                <label for="file" class="input input-file">
                    <div class="button bg-color-light-grey"><input type="file" id="bf_file_<?php echo $i+1 ?>" name="bf_file[]" value="????????????" title="???????????? <?php echo $i+1; ?> : ?????? <?php echo $upload_max_filesize; ?> ????????? ????????? ??????" onchange="this.parentNode.nextSibling.value = this.value">??????<?php echo $i+1; ?> ??????</div><input type="text" readonly>
                </label>
            </div>
            <?php if ($is_file_content) { ?>
            <div class="col col-12 margin-top-10">
                <label class="input">
                    <i class="icon-append fas fa-question-circle"></i>
                    <input type="text" name="bf_content[]" value="<?php if ($w == 'u') echo $wr_file[$i]['bf_content']; ?>" class="form-control" size="50" placeholder="??????<?php echo $i+1; ?> ??????">
                    <b class="tooltip tooltip-top-right">?????? <?php echo $i+1; ?> ????????? ?????? ??? ?????????.</b>
                </label>
            </div>
            <div class="clearfix"></div>
            <?php } ?>
            <?php if ($w=='u' && $wr_file[$i]['file']) { ?>
            <div class="col col-6">
                <label for="bf_file_del<?php echo $i; ?>" class="checkbox"><input type="checkbox" id="bf_file_del<?php echo $i; ?>" name="bf_file_del[<?php echo $i; ?>]" value="1"><i></i><?php echo $wr_file[$i]['source'];?> (<?php echo $wr_file[$i]['size']; ?>) ????????????</label>
            </div>
            <?php } ?>
        </div>
        <div class="margin-hr-10"></div>
        <?php } ?>
    </section>
    <?php if ($is_use_captcha) { ?>
    <section>
        <label class="label">??????????????????</label>
        <div class="vc-captcha"><?php echo $captcha_html; ?></div>
        <div class="margin-bottom-20"></div>
    </section>
    <?php } ?>

    <div class="text-center">
        <input type="submit" value="????????????" id="btn_submit" accesskey="s" class="btn-e btn-e-xlg btn-e-red">
        <a href="<?php echo $infinite_wmode ? "javascript:history.go(-1)": get_eyoom_pretty_url($bo_table, '', $qstr); ?>" class="btn-e btn-e-xlg btn-e-dark">??????</a>
    </div>
    </form>
</div>
<div id="map_canvas"></div>

<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/sweetalert/sweetalert.min.js"></script>
<?php if ($eyoom_board['bo_use_addon_emoticon'] == '1') { ?>
<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/venobox/venobox.min.js"></script>
<?php } ?>
<?php if ($eyoom_board['bo_use_addon_map'] == '1' && ($config['cf_map_google_id'] || $config['cf_map_naver_id'] || $config['cf_map_daum_id'])) { ?>
<?php if ($config['cf_map_google_id']) { ?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $config['cf_map_google_id']; ?>" async defer></script>
<?php } ?>
<?php if ($config['cf_map_naver_id']) { ?>
<script src="https://openapi.map.naver.com/openapi/v3/maps.js?clientId=<?php echo $config['cf_map_naver_id']; ?>&submodules=geocoder"></script>
<?php } ?>
<?php if ($config['cf_map_daum_id']) { ?>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=<?php echo $config['cf_map_daum_id']; ?>&libraries=services"></script>
<?php } ?>
<?php } ?>
<script>
$(document).ready(function(){
    <?php if ($eyoom_board['bo_use_addon_emoticon'] == '1') { ?>
    $(".emoticon").venobox();
    <?php } ?>

    <?php if ($eyoom_board['bo_use_addon_video'] == '1') { ?>
    // ????????? ??????
    $("#btn_video").click(function(){
        var v_url = $("#video_url").val();
        if (!v_url){
            swal({
                title: "??????!",
                text: "????????? ????????? ????????? ?????????.",
                confirmButtonColor: "#FF4848",
                type: "error",
                confirmButtonText: "??????"
            });
        } else {
            set_textarea_contents('video',v_url);
        }
        $("#video_url").val('');
    });
    <?php } ?>

    <?php if ($eyoom_board['bo_use_addon_soundcloud'] == '1') { ?>
    // ????????????????????? ??????
    $("#btn_scloud").click(function(){
        var s_url = $("#scloud_url").val();
        if (!s_url){
            swal({
                title: "??????!",
                text: "????????????????????? ????????? ????????? ?????????.",
                confirmButtonColor: "#FF4848",
                type: "error",
                confirmButtonText: "??????"
            });
        } else {
            set_textarea_contents('sound',s_url);
        }
    });
    $("#scloud_url").val('');
    <?php } ?>

    <?php if ($eyoom_board['bo_use_addon_map'] == '1') { ?>
    // ?????? ??????
    $("#btn_map").click(function(){
        var map_type = $("input[name='map_type']:checked").val();
        var map_addr1 = $("#map_addr1").val();
        var map_addr2 = $("#map_addr2").val();
        var map_name = $("#map_name").val();
        set_map_address(map_type, map_addr1, map_addr2, map_name);
    });
    <?php } ?>
});

<?php if ($eyoom_board['bo_use_addon_emoticon'] == '1') { ?>
function set_emoticon(emoticon) {
    var type='emoticon';
    set_textarea_contents(type,emoticon);
}
<?php } ?>

<?php if ($eyoom_board['bo_use_addon_map'] == '1' && ($config['cf_map_google_id'] || $config['cf_map_naver_id'] || $config['cf_map_daum_id'])) { ?>
function set_map_address(map_type, map_addr1, map_addr2, map_name) {
    switch(map_type) {
        case '1':
            <?php if ($config['cf_map_google_id']) { ?>
            set_map_google_address(map_type, map_addr1, map_addr2, map_name);
            <?php } ?>
            break;
        case '2':
            <?php if ($config['cf_map_naver_id']) { ?>
            set_map_naver_address(map_type, map_addr1, map_addr2, map_name);
            <?php } ?>
            break;
        case '3':
            <?php if ($config['cf_map_daum_id']) { ?>
            set_map_daum_address(map_type, map_addr1, map_addr2, map_name);
            <?php } ?>
            break;
    }
}

<?php if ($config['cf_map_google_id']) { ?>
function set_map_google_address(map_type, map_addr1, map_addr2, map_name) {
    var map = new google.maps.Map(document.getElementById('map_canvas'), {
        zoom: 8,
        center: {lat: -34.397, lng: 150.644}
    });
    var geocoder = new google.maps.Geocoder();

    var address = map_addr1 + " " + map_addr2;
    geocoder.geocode({'address': map_addr1}, function(results, status) {
        if (status === 'OK') {
            map.setCenter(results[0].geometry.location);
            var latlng = map.getCenter();
            set_textarea_contents('map', map_type+'^|^'+address+'^|^'+map_name+'^|^'+latlng);
        } else {
            swal({
                title: "??????!",
                text: "????????? ???????????????.",
                confirmButtonColor: "#FF4848",
                type: "error",
                confirmButtonText: "??????"
            });
        }
    });
}
<?php }?>

<?php if ($config['cf_map_naver_id']) { ?>
function set_map_naver_address(map_type, map_addr1, map_addr2, map_name) {
    var address = map_addr1 + " " + map_addr2;

    naver.maps.Service.geocode({
        address: map_addr1
    }, function(status, response) {
        if (status !== naver.maps.Service.Status.OK) {
            swal({
                title: "??????!",
                text: "????????? ???????????????.",
                confirmButtonColor: "#FF4848",
                type: "error",
                confirmButtonText: "??????"
            });
        }

        var item = response.result.items[0],
            point = new naver.maps.Point(item.point.x, item.point.y);

        var latlng = '('+point.y+', '+point.x+')';
        set_textarea_contents('map', map_type+'^|^'+address+'^|^'+map_name+'^|^'+latlng);
    });
}
<?php }?>

<?php if ($config['cf_map_daum_id']) { ?>
function set_map_daum_address(map_type, map_addr1, map_addr2, map_name) {
    var address = map_addr1 + " " + map_addr2;

    var mapContainer = document.getElementById('map_canvas'), // ????????? ????????? div
        mapOption = {
            center: new daum.maps.LatLng(33.450701, 126.570667), // ????????? ????????????
            level: 3 // ????????? ?????? ??????
        };

    // ????????? ???????????????
    var map = new daum.maps.Map(mapContainer, mapOption);

    // ??????-?????? ?????? ????????? ???????????????
    var geocoder = new daum.maps.services.Geocoder();

    // ????????? ????????? ???????????????
    geocoder.addressSearch(map_addr1, function(result, status) {
        // ??????????????? ????????? ???????????????
        if (status === daum.maps.services.Status.OK) {
            var latlng = new daum.maps.LatLng(result[0].y, result[0].x);
            set_textarea_contents('map', map_type+'^|^'+address+'^|^'+map_name+'^|^'+latlng);
        }
    });
}
<?php }?>

<?php } ?>

function set_textarea_contents(type,value) {
    var type_text = '';
    var content = '';
    switch(type) {
        case 'emoticon': type_text = '????????????'; break;
        case 'video': type_text = '?????????'; break;
        case 'code': type_text = 'code'; break;
        case 'sound': type_text = 'soundcloud'; break;
        case 'map': type_text = '??????'; break;
    }
    if (type_text != 'code') {
        content = '{'+type_text+':'+value+'}';
    } else {
        content = '{code:'+value+'}<br><br>{/code}<br>'
    }
    if (g5_editor.indexOf('ckeditor')!=-1 && !g5_is_mobile) {
        CKEDITOR.instances.wr_content.insertHtml(content);
    } else if (g5_editor.indexOf('smarteditor')!=-1 && !g5_is_mobile) {
        oEditors.getById["wr_content"].exec("PASTE_HTML", [content]);
    } else {
        var wr_html = $("#wr_content").val();
        var wr_emo = content;
        wr_html += wr_emo;
        $("#wr_content").val(wr_html);
    }
}

<?php if ($write_min || $write_max) { ?>
// ????????? ??????
var char_min = parseInt(<?php echo $write_min; ?>); // ??????
var char_max = parseInt(<?php echo $write_max; ?>); // ??????
check_byte("wr_content", "char_count");

$(function() {
    $("#wr_content").on("keyup", function() {
        check_byte("wr_content", "char_count");
    });
});
<?php } ?>

function html_auto_br(obj) {
    if (obj.checked) {
        swal({
            title: "?????? ?????????",
            text: "?????? ???????????? ???????????????????\n?????? ???????????? ????????? ?????? ??? ????????? ?????? <br>????????? ???????????? ???????????????.",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FDAB29",
            confirmButtonText: "??????",
            cancelButtonText: "??????",
            closeOnConfirm: true,
            closeOnCancel: true
        },
        function(isConfirm){
            if (isConfirm) {
                obj.value = "html2";
            } else {
                obj.value = "html1";
            }
        });
    }
    else
        obj.value = "";
}

function fwrite_submit(f) {
    <?php echo $editor_js; ?> // ????????? ????????? ???????????????????????? ????????? ???????????? ???????????? ????????? ?????????????????? ?????????

    var subject = "";
    var content = "";
    $.ajax({
        url: g5_bbs_url+"/ajax.filter.php",
        type: "POST",
        data: {
            "subject": f.wr_subject.value,
            "content": f.wr_content.value
        },
        dataType: "json",
        async: false,
        cache: false,
        success: function(data, textStatus) {
            subject = data.subject;
            content = data.content;
        }
    });

    if (subject) {
        swal({
            html: true,
            title: "??????!",
            text: "????????? ???????????? '<strong class='color-red'>"+subject+"</strong>' ????????? ????????????????????????.",
            confirmButtonColor: "#FDAB29",
            type: "warning",
            confirmButtonText: "??????"
        });
        f.wr_subject.focus();
        return false;
    }

    if (content) {
        swal({
            html: true,
            title: "??????!",
            text: "????????? ???????????? '<strong class='color-red'>"+content+"</strong>' ????????? ????????????????????????.",
            confirmButtonColor: "#FDAB29",
            type: "warning",
            confirmButtonText: "??????"
        });
        if (typeof(ed_wr_content) != "undefined")
            ed_wr_content.returnFalse();
        else
            f.wr_content.focus();
        return false;
    }

    if (document.getElementById("char_count")) {
        if (char_min > 0 || char_max > 0) {
            var cnt = parseInt(check_byte("wr_content", "char_count"));
            if (char_min > 0 && char_min > cnt) {
                swal({
                    html: true,
                    title: "??????!",
                    text: "????????? <strong class='color-red'>"+char_min+"</strong> ?????? ?????? ????????? ?????????.",
                    confirmButtonColor: "#FDAB29",
                    type: "warning",
                    confirmButtonText: "??????"
                });
                return false;
            }
            else if (char_max > 0 && char_max < cnt) {
                swal({
                    html: true,
                    title: "??????!",
                    text: "????????? <strong class='color-red'>"+char_max+"</strong> ?????? ????????? ????????? ?????????.",
                    confirmButtonColor: "#FDAB29",
                    type: "warning",
                    confirmButtonText: "??????"
                });
                return false;
            }
        }
    }

    <?php echo $captcha_js; ?> // ?????? ????????? ???????????????????????? ????????? ????????? ?????????

    document.getElementById("btn_submit").disabled = "disabled";

    return true;
}

<?php if ($eyoom['use_tag'] == 'y' && $eyoom_board['bo_use_tag'] == '1' && $member['mb_level'] >= $eyoom_board['bo_tag_level']) { ?>
var tag_size = '<?php echo (count((array)$wr_tags) > 0)? count((array)$wr_tags):0; ?>';
$(function(){
    $(".add_tags").click(function(){
        add_tags();
    });
    $("#tmp_tag").blur(function(){
        var tag = $('#tmp_tag').val();
        if (tag) add_tags();
    });

    var add_tags = function() {
        var obj = $('#tmp_tag');
        var tag = obj.val();
        if (!tag) {
            obj.focus();
        } else {
            <?php if (!$is_admin) { ?>
            var count = $('#tag-cloud > div:not(.blind)').length;
            var limit = '<?php echo $eyoom_board['bo_tag_limit'];?>';
            var max = parseInt(limit)-1;
            if (count > max) {
                swal({
                    html: true,
                    title: "??????!",
                    text: "????????? <strong class='color-red'>"+limit+"</strong> ????????? ?????????????????????.",
                    confirmButtonColor: "#FDAB29",
                    type: "warning",
                    confirmButtonText: "??????"
                });
                obj.val('');
                obj.focus();
                return;
            }
            <?php } ?>
            var duplicate = false;
            $('#tag-cloud > div:not(.blind)').each(function(){
                if ($(this).text().trim() == tag) {
                    duplicate = true;
                }
            });
            if (duplicate) {
                swal({
                    title: "??????!",
                    text: "????????? ???????????????.",
                    confirmButtonColor: "#FDAB29",
                    type: "warning",
                    confirmButtonText: "??????"
                });
                obj.val('');
                obj.focus();
                return;
            }
            var tag_html = $('#tag-cloud').html();
            tag_html += '<div id="tag_box_'+tag_size+'">'+tag+' <i class="fas fa-close" onclick="del_tags(\''+tag+'\',\''+tag_size+'\');"></i></div>';
            $('#tag-cloud').html(tag_html);

            var add_tags = $('#wr_tag').val();
            if (add_tags) {
                add_tags += ',';
            }
            add_tags += tag;
            $('#wr_tag').val(add_tags);

            tag_size++;
            obj.val('');
            obj.focus();
        }
    }
});

function del_tags(tag, num) {
    var del_tags = $('#del_tag').val();
    if (del_tags) {
        del_tags += ',';
    }
    del_tags += tag;
    $('#del_tag').val(del_tags);
    $('#tag_box_'+num).addClass('blind');
}
<?php } ?>

<?php if ($is_admin) { ?>
$(function() {
    $(".set_bo_skin").change(function() {
        var skin = $(this).val();
        if (!skin) {
            swal({
                title: "??????",
                text: '????????? ????????? ?????????.',
                confirmButtonColor: "#FF4848",
                type: "warning",
                confirmButtonText: "??????"
            });
        } else {
            var bo_table = '<?php echo $bo_table; ?>';
            var url = '<?php echo EYOOM_CORE_URL; ?>/board/set_bo_skin.php';
            $.post(url, { bo_table: bo_table, skin: skin }, function() {
                document.location.href = '<?php echo str_replace('&amp;','&', get_pretty_url($bo_table));?>';
            });
        }
    });
});
<?php } ?>
</script>