<?php
/**
 * skin file : /theme/THEME_NAME/skin/ebslider/shop003_banner_top/ebslider.skin.html.php
 */
if (!defined('_EYOOM_')) exit;
?>

<?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
<div class="adm-edit-btn btn-edit-mode hidden-xs hidden-sm" style="top:0;z-index:10">
    <div class="btn-group">
        <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=ebslider_form&thema=<?php echo $theme; ?>&es_code=<?php echo $es_code; ?>&w=u&wmode=1" onclick="eb_admset_modal(this.href); return false;" class="btn-e btn-e-xs btn-e-red btn-e-split"><i class="far fa-edit"></i> EB슬라이더 마스터 설정</a>
        <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=ebslider_form&thema=<?php echo $theme; ?>&es_code=<?php echo $es_code; ?>&w=u" target="_blank" class="btn-e btn-e-xs btn-e-red btn-e-split-red dropdown-toggle" title="새창 열기">
            <i class="far fa-window-maximize"></i>
        </a>
        <button type="button" class="btn-e btn-e-xs btn-e-red btn-e-split-red popovers" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" data-content="
        <span class='font-size-11'>
        <strong class='color-indigo'>좌측 [EB슬라이더 마스터 설정 버튼] 클릭 후 아래 설명 참고</strong><br>
        <div class='margin-hr-5'></div>
        <span class='color-indigo'>[설정정보]</span><br>
        1. 슬라이더마스터 제목 : 베너 슬라이더 상단<br>
        2. 슬라이더마스터 스킨 : shop003_banner_top<br>
        <span class='color-indigo'>[EB 슬라이더 - 아이템 관리]</span><br>
        1. EB슬라이더 아이템 추가 클릭<br>
        2. 대표 타이틀 입력 - 미출력 됨<br>
        3. 연결주소 [링크] #1 입력<br>
        4. 이미지 #1, #2 업로드 (배너 이미지)<br>
        <div class='margin-hr-5'></div>
        이미지 비율 2560x90(pc), 780x90(모바일) 픽셀 사이즈 사용.
        </span>
        "><i class="fas fa-question-circle"></i></button>
    </div>
</div>
<?php } ?>

<?php if (isset($es_master) && $es_master['es_state'] == '1') { // 보이기 상태에서만 출력 ?>
<style>
/* master */
.shop003-banner-contest {position:relative}
/* 컨트롤 */
.shop003-banner-contest .carousel-control {left:inherit;top:10px;right:0;width:65px;text-shadow:0 0 0 #fff;opacity:1}
.shop003-banner-contest .carousel-control a {position:relative;z-index:1;display:block;width:30px;height:30px;background:rgba(0,0,0,.5)}
.shop003-banner-contest .carousel-control a:hover {background:rgba(0,0,0,.9)}
.shop003-banner-contest .carousel-control a.control-down {margin-top:10px}
.shop003-banner-contest .carousel-control a.control-up:after, .shop003-banner-contest .carousel-control a.control-down:after {content:"";display:block;position:absolute;left:7px;width:16px;height:16px;transform:rotate(-45deg)}
.shop003-banner-contest .carousel-control a.control-up:after {top:12px;border-top:1px solid #ddd;border-right:1px solid #ddd}
.shop003-banner-contest .carousel-control a.control-down:after {top:2px;border-bottom:1px solid #ddd;border-left:1px solid #ddd}
/* 아이템 */
.shop003-banner-contest .item a {display:block;cursor:pointer}
.shop003-banner-contest .item a:hover {}
.shop003-banner-contest .item a > div {height:90px;background-size:cover;background-repeat:no-repeat;background-position:center;margin-bottom:20px;}
.shop003-banner-contest .item a .shop003-img-mo {display:none}
/* header slider 위아래로 이동하는 소스 */
.shop003-banner-contest .vertical .carousel-inner {height:100%}
.shop003-banner-contest .carousel.vertical .item {-webkit-transition:0.6s ease-in-out top;-moz-transition:0.6s ease-in-out top;-ms-transition:0.6s ease-in-out top;-o-transition:0.6s ease-in-out top;transition:0.6s ease-in-out top}
.shop003-banner-contest .carousel.vertical .active {top:0}
.shop003-banner-contest .carousel.vertical .next {top:90px}
.shop003-banner-contest .carousel.vertical .prev {top:-90px}
.shop003-banner-contest .carousel.vertical .next.left, .shop003-banner-contest  .carousel.vertical .prev.right {top:0}
.shop003-banner-contest .carousel.vertical .active.left {top:-90px}
.shop003-banner-contest .carousel.vertical .active.right {top:90px}
.shop003-banner-contest .carousel.vertical .item {left:0}
/* 닫기버튼 */
.shop003-banner-contest .shop003-close {position:absolute;top:0;left:30px}
.shop003-banner-contest .shop003-close label {color:#ddd}
.shop003-banner-contest .shop003-close #sbt_close {display:inline-block;width:20px;height:20px;line-height:20px;text-align:center;color:#ddd;border:1px solid #ddd;font-size:12px;text-shadow:0 1px 0 rgba(0, 0, 0, 0.5);cursor:pointer}

@media (max-width:1199px) {
    .shop003-banner-contest .shop003-close {top:0}
    .shop003-banner-contest .shop003-close .eyoom-form .checkbox {margin-bottom:0}
    .shop003-banner-contest .shop003-close .fa-times {width:14px;height:14px;line-height:14px;font-size:11px}
}
@media (max-width:767px) {
    .shop003-banner-contest .carousel-control {width:45px}
    .shop003-banner-contest .shop003-close {left:15px}
}

</style>

<div class="shop003-banner-contest">
	<div id="carouselBannerTop" class="carousel slide carousel-roll-left vertical" data-ride="carousel">
	    <?php /* 콘트롤 */ ?>
	   
	   

		<?php /* 아이템 */ ?>
		<div class="carousel-inner" role="listbox">
    		<?php if (is_array($slider)) { ?>
                <?php foreach ($slider as $k => $item) { ?>
                <div class="item item-<?php echo $k + 1 ?>">
                    <?php if ($item['href_1']) { ?>
                    <a href="<?php echo $item['href_1']; ?>" target="<?php echo $item['target_1']; ?>">
                    <?php } ?>
                        <div class="shop003-img-pc hidden-xs" style="background-image:url(<?php echo $item['src_1']?>)"></div>
                        <div class="shop003-img-mo visible-xs" style="background-image:url(<?php echo $item['src_2']?>)"></div>
                    <?php if ($item['href_1']) { ?>
                    </a>
                    <?php } ?>

                    <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
                    <div class="adm-edit-btn btn-edit-mode hidden-xs hidden-sm" style="bottom:5px">
                        <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&pid=ebslider_itemform&thema=<?php echo $theme; ?>&es_code=<?php echo $es_code; ?>&ei_no=<?php echo $item['ei_no']; ?>&w=u&iw=u&wmode=1" onclick="eb_admset_modal(this.href); return false;" class="btn-e btn-e-xs btn-e-dark btn-e-split"><i class="far fa-edit"></i> EB슬라이더 아이템 수정</a>
                        <button type="button" class="btn-e btn-e-xs btn-e-dark btn-e-split-dark popovers" data-container="body" data-toggle="popover" data-placement="bottom" data-html="true" data-content="
                        <span class='font-size-11'>
                        <span class='color-indigo'>[EB 슬라이더 - 아이템 관리]</span><br>
                        1. 대표 타이틀 입력<br>
                        2. 서브 타이틀 입력<br>
                        4. 연결주소 [링크] #1 입력<br>
                        4. 이미지 #1 업로드 (배너 이미지)<br>
                        <div class='margin-hr-5'></div>
                        이미지 비율 1400x96 픽셀 사이즈 권장
                        </span>
                        "><i class="fas fa-question-circle"></i></button>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
            <?php } ?>

            <?php if ($es_default) { ?>
            <div class="item item-1">
                <a href="">
                    <div class="shop003-img-pc hidden-xs" style="background-image:url(<?php echo $ebslider_skin_url; ?>/image/01.jpg)"></div>
                    <div class="shop003-img-mo visible-xs" style="background-image:url(<?php echo $ebslider_skin_url; ?>/image/01_mo.jpg)"></div>
                </a>
            </div>
            <div class="item item-2">
                <a href="">
                    <div class="shop003-img-pc hidden-xs" style="background-image:url(<?php echo $ebslider_skin_url; ?>/image/01.jpg)"></div>
                    <div class="shop003-img-mo visible-xs" style="background-image:url(<?php echo $ebslider_skin_url; ?>/image/01_mo.jpg)"></div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<script>
// 슬라이더 시간 설정
$(document).ready(function(){
	$(".shop003-banner-contest .item").eq(0).addClass("active");
	$("#carouselBannerTop").carousel({
        interval: 10000,
        pause: 'hover'
    });
});

// 쿠키를 통해 배너를 하루동안 열지 않기
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) != -1) return c.substring(name.length,c.length);
    }
    return "";
}

function setCookie(cname, cvalue, exdays) {
    var date = new Date();
    date.setTime(date.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+date.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function bannerTopClose(){
    if($("#check_close").is(":checked") == true){
        setCookie("close","Y",1);
    }
    $(".shop003-banner-contest").hide();
}

$(document).ready(function(){
    cookiedata = document.cookie;
    if(cookiedata.indexOf("close=Y")<0){
        $(".shop003-banner-contest").show();
    }else{
        $(".shop003-banner-contest").hide();
    }
    $("#sbt_close").click(function(){
        bannerTopClose();
    });
});
</script>
<?php } ?>