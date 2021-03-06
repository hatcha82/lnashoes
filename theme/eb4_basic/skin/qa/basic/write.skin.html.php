<?php
/**
 * skin file : /theme/THEME_NAME/skin/qa/basic/write.skin.html.php
 */
if (!defined('_EYOOM_')) exit;

add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/plugins/sweetalert/sweetalert.min.css" type="text/css" media="screen">',0);
?>

<style>
.board-write textarea {min-height:250px}
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
</style>

<div class="board-write">
    <form name="fwrite" id="fwrite" action="<?php echo $action_url; ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" class="eyoom-form">
    <input type="hidden" name="w" value="<?php echo $w; ?>">
    <input type="hidden" name="qa_id" value="<?php echo $qa_id; ?>">
    <input type="hidden" name="sca" value="<?php echo $sca; ?>">
    <input type="hidden" name="stx" value="<?php echo $stx; ?>">
    <input type="hidden" name="page" value="<?php echo $page; ?>">
    <input type="hidden" name="token" value="<?php echo $token ?>">
    <?php if ($is_dhtml_editor) { ?>
    <input type="hidden" name="qa_html" value="1">
    <?php } ?>
    <?php if ($category_option) { ?>
    <section class="row">
        <div class="col col-4">
            <label class="select">
                <select name="qa_category" id="qa_category" required class="form-control">
                    <option value="">??????????????? - ??????</option>
                    <?php echo $category_option; ?>
                </select>
                <i></i>
            </label>
        </div>
    </section>
    <div class="margin-hr-10"></div>
    <?php } ?>
    <?php if ($is_email) { ?>
    <section>
        <div class="row">
            <div class="col col-6">
                <label class="input">
                    <i class="icon-append far fa-envelope"></i>
                    <input type="text" name="qa_email" value="<?php echo $write['qa_email']; ?>" id="qa_email" <?php echo $req_email; ?> size="50" maxlength="100" placeholder="<?php if ($write['qa_email']) { echo $write['qa_email']; } else { ?>?????????<?php } ?>">
                </label>
            </div>
            <div class="col col-6">
                <label for="qa_email_recv" class="checkbox"><input type="checkbox" name="qa_email_recv" id="qa_email_recv" value="1" <?php if ($write['qa_email_recv']) { ?>checked="checked"<?php } ?>><i></i>????????????</label>
            </div>
        </div>
    </section>
    <div class="margin-hr-10"></div>
    <?php } ?>
    <?php if ($is_hp) { ?>
    <section>
        <div class="row">
            <div class="col col-6">
                <label class="input">
                    <i class="icon-append fas fa-mobile-alt"></i>
                    <input type="text" name="qa_hp" value="<?php echo $write['qa_hp']; ?>" id="qa_hp" <?php echo $req_hp; ?> size="30" placeholder="<?php if ($write['qa_hp']) { echo $write['qa_hp']; } else { ?>?????????<?php } ?>">
                </label>
            </div>
            <?php if ($qaconfig['qa_use_sms']) { ?>
            <div class="col col-6">
                <label class="checkbox"><input type="checkbox" name="qa_sms_recv" value="1" <?php if ($write['qa_sms_recv']) { ?>checked="checked"<?php } ?>><i></i>???????????? SMS?????? ??????</label>
            </div>
            <?php } ?>
        </div>
    </section>
    <div class="margin-hr-10"></div>
    <?php } ?>
    <section>
        <label for="qa_subject" class="label">??????<strong class="sound_only"> ??????</strong></label>
        <label class="input required-mark">
            <input type="text" name="qa_subject" value="<?php echo $write['qa_subject']; ?>" id="qa_subject" required size="50" maxlength="255">
        </label>
    </section>
    <div class="margin-hr-15"></div>
    <?php if (!$is_dhtml_editor) { ?>
    <section>
        <div class="row">
            <div class="col col-4">
                <label for="qa_html" class="checkbox"><input type="checkbox" id="qa_html" name="qa_html" onclick="html_auto_br(this);" value="<?php echo $html_value; ?>" <?php echo $html_checked; ?>><i></i>HTML</label>
            </div>
        </div>
    </section>
    <div class="margin-hr-10"></div>
    <?php } ?>
    <section>
        <label class="label">?????? ??????</label>
        <label class="textarea textarea-resizable">
            <?php echo $editor_html; ?>
        </label>
    </section>
    <div class="margin-hr-10"></div>
    <section>
        <div class="row">
            <div class="col col-12">
                <label for="file" class="input input-file">
                    <div class="button bg-color-light-grey"><input type="file" name="bf_file[1]" title="???????????? 1 :  ?????? <?php echo $upload_max_filesize; ?> ????????? ????????? ??????" onchange="this.parentNode.nextSibling.value = this.value">?????? 1 ??????</div><input type="text" readonly>
                </label>
            </div>
            <div class="col col-12">
                <?php if ($w=='u' && $write['qa_file1']) { ?>
                <label for="bf_file_del1" class="checkbox"><input type="checkbox" id="bf_file_del1" name="bf_file_del[1]" value="1"><i></i><?php echo $write['qa_source1']; ?> ?????? ??????</label>
                <?php } ?>
            </div>
        </div>
    </section>
    <div class="margin-hr-10"></div>
    <section>
        <div class="row">
            <div class="col col-12">
                <label for="file" class="input input-file">
                    <div class="button bg-color-light-grey"><input type="file" name="bf_file[2]" title="???????????? 2 :  ?????? <?php echo $upload_max_filesize; ?> ????????? ????????? ??????" onchange="this.parentNode.nextSibling.value = this.value">?????? 2 ??????</div><input type="text" readonly>
                </label>
            </div>
            <div class="col col-12">
                <?php if ($w=='u' && $write['qa_file2']) { ?>
                <label for="bf_file_del2" class="checkbox"><input type="checkbox" id="bf_file_del2" name="bf_file_del[2]" value="1"><i></i><?php echo $write['qa_source2']; ?> ?????? ??????</label>
                <?php } ?>
            </div>
        </div>
    </section>
    <div class="margin-hr-10"></div>
    <div class="text-center">
        <input type="submit" value="????????????" id="btn_submit" accesskey="s" class="btn-e btn-e-xlg btn-e-red">
        <a href="<?php echo $list_href; ?>" class="btn-e btn-e-xlg btn-e-dark">??????</a>
    </div>
    </form>
</div>

<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/sweetalert/sweetalert.min.js"></script>
<script>
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
                obj.value = "2";
            } else {
                obj.value = "1";
            }
        });
    }
    else
        obj.value = "";
}

function fwrite_submit(f) {
    <?php echo $editor_js; ?>

    var subject = "";
    var content = "";
    $.ajax({
        url: g5_bbs_url+"/ajax.filter.php",
        type: "POST",
        data: {
            "subject": f.qa_subject.value,
            "content": f.qa_content.value
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
        f.qa_subject.focus();
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
        if (typeof(ed_qa_content) != "undefined")
            ed_qa_content.returnFalse();
        else
            f.qa_content.focus();
        return false;
    }

    <?php if ($is_hp) { ?>
    var hp = f.qa_hp.value.replace(/[0-9\-]/g, "");
    if (hp.length > 0) {
        swal({
            html: true,
            title: "??????!",
            text: "?????????????????? <strong class='color-red'>??????, -</strong> ????????? ????????? ????????????",
            confirmButtonColor: "#FDAB29",
            type: "warning",
            confirmButtonText: "??????"
        });
        return false;
    }
    <?php } ?>

    $.ajax({
        type: "POST",
        url: g5_bbs_url+"/ajax.write.token.php",
        data: { 'token_case' : 'qa_write' },
        cache: false,
        async: false,
        dataType: "json",
        success: function(data) {
            if (typeof data.token !== "undefined") {
                token = data.token;

                if(typeof f.token === "undefined")
                    $(f).prepend('<input type="hidden" name="token" value="">');

                $(f).find("input[name=token]").val(token);
            }
        }
    });

    document.getElementById("btn_submit").disabled = "disabled";

    return true;
}
</script>