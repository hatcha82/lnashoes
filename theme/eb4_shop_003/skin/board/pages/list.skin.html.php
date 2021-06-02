<?php
/**
 * skin file : /theme/THEME_NAME/skin/board/basic/list.skin.html.php
 */
if (!defined('_EYOOM_')) exit;

add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/plugins/sly/tab_scroll_category.css" type="text/css" media="screen">',0);
add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/plugins/sweetalert/sweetalert.min.css" type="text/css" media="screen">',0);
?>

<style>
.board-list .board-setup {position:relative;border:1px solid #d5d5d5;height:30px;margin-bottom:20px}
.board-list .board-setup .select {position:absolute;top:-1px;left:-1px;display:inline-block;width:200px}
.board-list .board-setup-btn-box {position:absolute;top:-1px;right:-1px;display:inline-block;width:420px}
.board-list .board-setup-btn {float:left;width:25%;height:30px;line-height:30px;color:#fff;text-align:center;font-size:12px}
.board-list .board-setup-btn:nth-child(odd) {background:#59595B}
.board-list .board-setup-btn:nth-child(even) {background:#676769}
.board-list .board-setup-btn:hover {opacity:0.8}
.board-list .eyoom-form .checkbox {padding-left:15px}
.board-list .eyoom-form .checkbox i {top:2px}
.board-list .table-list-eb .table thead > tr > th {border-bottom:1px solid #959595;text-align:center;padding:10px 5px}
.board-list .table-list-eb .table tbody > tr > td {border-top:1px solid #ededed;padding:7px 5px}
.board-list .table-list-eb thead {border-top:2px solid #757575;border-bottom:1px solid #959595}
.board-list .table-list-eb th {color:#000;font-weight:bold;white-space:nowrap;font-size:13px}
.board-list .table-list-eb .td-comment {display:inline-block;white-space:nowrap;vertical-align:baseline;text-align:center;min-width:35px;padding:1px;font-size:10px;line-height:1;color:#fff;background-color:#757575;margin-right:5px}
.board-list .table-list-eb .td-comment .cnt_cmt {margin:0;font-weight:normal}
.board-list .table-list-eb .td-subject {width:300px}
.board-list .table-list-eb .td-subject a {color:#000}
.board-list .table-list-eb .td-subject a:hover {color:#FF4848;text-decoration:underline}
.board-list .table-list-eb .td-subject .fas {color:#FF4848}
.board-list .table-list-eb .td-subject .reply-indication {display:inline-block;width:7px;height:10px;border-left:1px dotted #b5b5b5;border-bottom:1px dotted #b5b5b5}
.board-list .table-list-eb .td-photo {display:inline-block;width:26px;height:26px;margin-right:2px;border:1px solid #e5e5e5;padding:1px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;-webkit-border-radius:50% !important;-moz-border-radius:50% !important;border-radius:50% !important}
.board-list .table-list-eb .td-photo img {width:100%;height:auto;-webkit-border-radius:50% !important;-moz-border-radius:50% !important;border-radius:50% !important}
.board-list .table-list-eb .td-photo .td-user-icon {width:22px;height:22px;font-size:12px;line-height:22px;text-align:center;background:#959595;color:#fff;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;display:inline-block;white-space:nowrap;vertical-align:baseline;-webkit-border-radius:50% !important;-moz-border-radius:50% !important;border-radius:50% !important}
.board-list .table-list-eb .td-lv-icon {display:inline-block;margin-right:2px}
.board-list .table-list-eb .td-star-icon {display:inline-block;margin-right:2px;margin-bottom:-4px}
.board-list .table-list-eb .td-name b {font-weight:normal;font-size:12px}
.board-list .table-list-eb .td-date {text-align:center;color:#959595;font-size:12px}
.board-list .table-list-eb .td-num {text-align:center;font-size:12px}
.board-list .table-list-eb .table tbody > tr.td-mobile > td {border-top:1px solid #fff;padding:0 0 5px !important;font-size:11px;color:#959595}
.board-list .table-list-eb .td-mobile td {position:relative}
.board-list .table-list-eb .td-mobile td > span {margin-right:5px}
.board-list .table-list-eb .td-mobile td .td-mobile-name b {font-weight:normal}
.board-list .table-list-eb .td-mobile td .td-mobile-time {position:absolute;top:5px;right:0;margin-right:0}
.board-list .star-ratings-list {width:60px;margin:0 auto}
.board-list .star-ratings-list li {padding:0;float:left;margin-right:0}
.board-list .star-ratings-list li .rating {color:#a5a5a5;font-size:10px;line-height:normal}
.board-list .star-ratings-list li .rating-selected {color:#FF4848;font-size:10px}
.board-list .bo_current {color:#FF4848}
.board-list .board-notice {background:#FFF8EC}
.board-list .board-notice .td-subject a {color:#AA3510}
.board-list .board-notice .td-subject a:hover {color:#AA3510}
.board-list .board-btn-adm li {float:left;margin-right:5px}
.board-list .favorite-setup {display:inline-block;width:100px;margin-left:15px}
.board-list .favorite-setup .toggle {padding-right:37px}
<?php if ($eyoom['is_responsive'] == '1' || G5_IS_MOBILE) { // 반응형 또는 모바일일때 ?>
@media (max-width:1199px) {
    .board-list .table-list-eb .td-subject {width:240px}
}
@media (max-width:767px) {
    .board-list .table-list-eb .table tbody > tr > td {padding:10px 0}
    .board-list .table-list-eb .table tbody > tr > td.td-subj-wrap {padding:10px 0}
    .board-list .table-list-eb .td-subject {width:300px}
    .board-list .table-list-eb .td-subject .subject {font-size:13px;font-weight:bold}
}
<?php } ?>
</style>

<div class="board-list">
    <?php if ($is_admin && !G5_IS_MOBILE && !$wmode) { ?>
    <div class="board-setup btn-edit-mode hidden-xs hidden-sm">
        <span class="eyoom-form">
            <label class="select">
                <select name="set_bo_skin" class="set_bo_skin">
                    <option value="">::스킨선택::</option>
                    <?php foreach ($bo_skin as $skin) { ?>
                    <option value="<?php echo $skin; ?>" <?php echo $skin == $eyoom_board['bo_skin'] ? 'selected': ''; ?>><?php echo $skin; ?></option>
                    <?php }?>
                </select><i></i>
            </label>
        </span>
        <span class="board-setup-btn-box">
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=board&amp;pid=board_copy&amp;bo_table=<?php echo $bo_table; ?>&amp;wmode=1"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="far fa-clone"></i> 복제하기</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=board&amp;pid=board_form&amp;w=u&amp;bo_table=<?php echo $bo_table; ?>&amp;wmode=1"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="fas fa-list-alt"></i> 기본설정</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=board_form&amp;w=u&amp;bo_table=<?php echo $bo_table; ?>&amp;wmode=1"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="far fa-list-alt"></i> 추가기능</a>
            <a href="<?php echo G5_ADMIN_URL; ?>/?dir=board&amp;pid=board_extend&amp;w=u&amp;bo_table=<?php echo $bo_table; ?>&amp;wmode=1"  onclick="eb_admset_modal(this.href); return false;" class="board-setup-btn"><i class="far fa-plus-square"></i> 확장필드 (<?php echo number_format($board['bo_ex_cnt']); ?>)</a>
        </span>
    </div>
    <?php } ?>

    

    

    <?php if ($is_admin) { ?>
    <form name="fboardlist" id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post" class="eyoom-form">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table; ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl; ?>">
    <input type="hidden" name="stx" value="<?php echo $stx; ?>">
    <input type="hidden" name="spt" value="<?php echo $spt; ?>">
    <input type="hidden" name="sca" value="<?php echo $sca; ?>">
    <input type="hidden" name="page" value="<?php echo $page; ?>">
    <input type="hidden" name="sw" value="">
    <?php } ?>
    <div class="table-list-eb margin-bottom-20">
        
    </div>
    

<?php if ($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>



<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/sweetalert/sweetalert.min.js"></script>
<?php if ($is_category) { ?>
<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/sly/vendor_plugins.min.js"></script>
<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/sly/sly.min.js"></script>
<script>
$(function() {
    var $frame = $('#tab-category');
    var $wrap  = $frame.parent();
    $frame.sly({
        horizontal: 1,
        itemNav: 'centered',
        smart: 1,
        activateOn: 'click',
        mouseDragging: 1,
        touchDragging: 1,
        releaseSwing: 1,
        scrollBar: $wrap.find('.scrollbar'),
        scrollBy: 1,
        startAt: $frame.find('.active'),
        speed: 300,
        elasticBounds: 1,
        easing: 'easeOutExpo',
        dragHandle: 1,
        dynamicHandle: 1,
        clickBar: 1,
        prev: $wrap.find('.prev'),
        next: $wrap.find('.next')
    });
    var tabWidth = $('#tab-category').width();
    var categoryWidth = $('.category-list').width();
    if (tabWidth < categoryWidth) {
        $('.controls').show();
    }
});
</script>
<?php } ?>

<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;
    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;
    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }
    if (!chk_count) {
        swal({
            html: true,
            title: "중요!",
            text: "<strong class='color-red'>" + document.pressed + "</strong> 할 게시물을 하나 이상 선택하세요.",
            confirmButtonColor: "#FF4848",
            type: "error",
            confirmButtonText: "확인"
        });
        return false;
    }
    if (document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }
    if (document.pressed == "선택이동") {
        select_copy("move");
        return;
    }
    if (document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;
        f.removeAttribute("target");
        f.action = g5_bbs_url+"/board_list_update.php";
    }
    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;
    if (sw == "copy")
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");
    f.sw.value = sw;
    f.target = "move";
    f.action = "./move.php";
    f.submit();
}
</script>
<?php } ?>

<?php if ($is_admin) { ?>
<script>
$(function() {
    $(".set_bo_skin").change(function() {
        var skin = $(this).val();
        if (!skin) {
            swal({
                title: "알림",
                text: '스킨을 선택해 주세요.',
                confirmButtonColor: "#FF4848",
                type: "warning",
                confirmButtonText: "확인"
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
</script>
<?php } ?>

<?php if ($is_member) { ?>
<script>
$(function() {
    $(".btn_favorite_toggle").change(function() {
        var favorite = $("#favorite_board").val();

        $.post('<?php echo EYOOM_CORE_URL; ?>/board/favorite_board.php', { bo_table: "<?php echo $bo_table; ?>", favorite: favorite });
        if (favorite == 'y') {
            $("#favorite_board").val('n');
            swal({
                title: "알림",
                text: '관심게시판에서 해제하였습니다.',
                confirmButtonColor: "#FF4848",
                type: "warning",
                confirmButtonText: "확인"
            });
        } else if (favorite == 'n') {
            $("#favorite_board").val('y');
            swal({
                title: "알림",
                text: '관심게시판으로 등록하였습니다.',
                confirmButtonColor: "#FF4848",
                type: "warning",
                confirmButtonText: "확인"
            });
        }
    });
});
</script>
<?php } ?>