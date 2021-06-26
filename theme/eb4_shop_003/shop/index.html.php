<?php
/**
 * theme file : /theme/THEME_NAME/shop/index.html.php
 */
if (!defined('_EYOOM_')) exit;
?>
<style>
/*---------- 페이지 로더 ----------*/
.page-loader {position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background: #fff;}
/* background: -moz-radial-gradient(center, ellipse cover, rgba(252,255,244,1) 0%, rgba(223,229,215,1) 40%, rgba(179,190,173,1) 100%);
background: -webkit-radial-gradient(center, ellipse cover, rgba(252,255,244,1) 0%,rgba(223,229,215,1) 40%,rgba(179,190,173,1) 100%);
background: radial-gradient(ellipse at center, rgba(252,255,244,1) 0%,rgba(223,229,215,1) 40%,rgba(179,190,173,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcfff4', endColorstr='#b3bead',GradientType=1 );} */
.page-loader .logo-loader {position:absolute;top:50%;left:50%;transform:translate(-50%, -50%)}
.page-loader .logo-loader img {max-height:70px;width:auto}
.page-loader .logo-loader:before, .page-loader .logo-loader:after {content:"";position:absolute;bottom:-20px;left:0;height:1px}
.page-loader .logo-loader:before {width:100%;background:rgba(0,0,0,.2)}
.page-loader .logo-loader:after {width:0;background:#2C2828;-webkit-transition:all 1s linear;-moz-transition:all 1s linear;-o-transition:all 1s linear;transition:all 1s linear}
.page-loader .logo-loader.active:after {width:100%}

/* 쇼핑몰 메인 타이틀 */
.shop-main-title {position:relative;margin:0 0 30px;padding-bottom:15px;border-bottom:3px solid #eee}
.shop-main-title:before {content:"";position:absolute;bottom:-3px;left:0;width:20px;height:3px;background:#F2A23A}
.shop-main-title h2 {margin:0;font-size:30px;line-height:40px;font-weight:100}
@media (max-width:767px){
    .shop-main-title h2 {font-size:20px;line-height:30px}
}

/*---------- 섹션 ----------*/
.section {margin-bottom:50px}
/* 이벤트 섹션 */
.shop-section-event {padding:80px 0;margin-bottom:50px;background-color:#e8ded0;background-image:url(<?php echo EYOOM_THEME_URL; ?>/image/bg_dot.png)}
<?php if ($eyoom['is_responsive'] == '1' || G5_IS_MOBILE) { // 반응형 또는 모바일일때 ?>
@media (max-width:991px){
    .section {margin-bottom:30px}
    .shop-section-event {padding:50px 0}
}
<?php } ?>
</style>

<?php /* 페이지 로더 */ ?>

<?php if (   defined('_INDEX_')  ) {  /*  첫 페이지만 실행 */ ?>     
    <?php if ( !$is_member) {  /*  로그인안한경우만 */ ?>    
    <div class="page-loader">
        <div class="logo-loader">
            <?php if (file_exists($top_logo) && !is_dir($top_logo)) { ?>
            <img src="<?php echo $logo_src['top']; ?>" class="title-logo-image" alt="<?php echo $config['cf_title']; ?>">
            <?php } else { ?>
            <img src="<?php echo EYOOM_THEME_URL; ?>/image/site_logo.jpg" class="title-logo-image" alt="<?php echo $config['cf_title']; ?>">
            <?php } ?>
        </div>
    </div>    
    <?php }?>
<?php }?>

<?php /* ---------- EB Slider - 메인 슬라이더 ---------- */ ?>
<section class="section section-01">
    <?php echo eb_slider('1548224900'); ?>
</section>

<?php /* ---------- EB Contents - 갤러리 배너 2개 ---------- */ ?>
<section class="section section-02">
    <?php /* ---------- Banner 시작 ---------- */ ?>
    <?php echo eb_contents('1549852140'); ?>
</section>

<?php /* ---------- EB Goods 스킨 -  BRAND COLLECTION ---------- */ ?>
<section class="section section-03">
    <div class="container">
        <?php echo eb_goods('1549603919'); ?>
    </div>
</section>




<?php /* ---------- EB Contents 스킨 - Brand By Categories ---------- */ ?>
<section class="section section-04">
    <?php echo eb_contents('1550123008'); ?>
</section>

<?php /* ---------- 추천상품 - MD's CHOICE ---------- */ ?>
<section class="section section-05">
    <div class="container">
        <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
        <div class="adm-edit-btn btn-edit-mode hidden-xs hidden-sm" style="margin-top:-20px;">
            <div class="btn-group">
                <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shop&amp;pid=configform&amp;amode=ittype&amp;thema=<?php echo $theme; ?>&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="btn-e btn-e-xs btn-e-red btn-e-split"><i class="far fa-edit"></i> 유형별 상품진열 설정</a>
                <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shop&amp;pid=configform&amp;thema=<?php echo $theme; ?>#anc_scf_index" target="_blank" class="btn-e btn-e-xs btn-e-red btn-e-split-red dropdown-toggle" title="새창 열기">
                    <i class="far fa-window-maximize"></i>
                </a>
            </div>
        </div>
        <?php } ?>
        
        <?php if($default['de_type2_list_use']) { ?>
            <div class="shop-main-title">
                <h2><a href="<?php echo shop_type_url(2); ?>">MD's CHOICE</a></h2>
            </div>
            <?php
            $list = new item_list($skin_dir.'/'.$default['de_type2_list_skin']);
            $list->set_type(2);
            $list->set_view('it_id', false);
            $list->set_view('it_name', true);
            $list->set_view('it_basic', true);
            $list->set_view('it_cust_price', true);
            $list->set_view('it_price', true);
            $list->set_view('it_icon', true);
            $list->set_view('sns', true);
            echo $list->run();
            ?>
        <?php } ?>
    </div>
</section>

<?php /* ---------- EB Contents 스킨 - banner slider ---------- */ ?>
<section class="section section-06">
    <?php echo eb_contents('1550457476'); ?>

</section>

<section class="section section-06">
    <?php echo eb_contents('1624676602'); ?>    
</section>


<?php /* ---------- 최신상품 시작 - NEW ARRIVALS ---------- */ ?>
<section class="section section-07">
    <div class="container">
        <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
        <div class="adm-edit-btn btn-edit-mode hidden-xs hidden-sm" style="margin-top:-20px;">
            <div class="btn-group">
                <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shop&amp;pid=configform&amp;amode=ittype&amp;thema=<?php echo $theme; ?>&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="btn-e btn-e-xs btn-e-red btn-e-split"><i class="far fa-edit"></i> 유형별 상품진열 설정</a>
                <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shop&amp;pid=configform&amp;thema=<?php echo $theme; ?>#anc_scf_index" target="_blank" class="btn-e btn-e-xs btn-e-red btn-e-split-red dropdown-toggle" title="새창 열기">
                    <i class="far fa-window-maximize"></i>
                </a>
            </div>
        </div>
        <?php } ?>
        
        <?php if($default['de_type3_list_use']) { ?>
        <div class="shop-main-title">
            <h2><a href="<?php echo shop_type_url(3); ?>">NEW ARRIVALS</a></h2>
        </div>
        <?php
        $list = new item_list($skin_dir.'/'.$default['de_type3_list_skin']);
        $list->set_type(3);
        $list->set_view('it_id', false);
        $list->set_view('it_name', true);
        $list->set_view('it_basic', true);
        $list->set_view('it_cust_price', true);
        $list->set_view('it_price', true);
        $list->set_view('it_icon', true);
        $list->set_view('sns', true);
        echo $list->run();
        ?>
        <?php } ?>
    </div>
</section>

<?php    
    // echo "<div class='lt list_01' >
    //         <div class='bo_name'>
    //             <div style='width:100%;padding:0px;margin:0 auto;'>
    //             <div id='youtube_area' style='width:100%;border:1px solid #444'>
    //                 <div style='position: relative; padding-bottom: 56.25%;'>
    //                 <iframe style='position: absolute; top: 0; left: 0; width: 100%; height: 100%;' 
    //                     src='https://www.youtube.com/embed/ja6dKMqgPRE?autoplay=0&playsinline=1'
    //                     frameborder='0' gesture='media' allow='autoplay;encrypted-media' allowfullscreen='allowfullscreen'></iframe
    //                 </div>
    //             </div>
    //         </div> 
    //     </div>"
?>

<?php /* ---------- 이벤트 - 게시판 > 이벤트게시판에서 글을 등록합니다. ---------- */ ?>
<section class="section section-08">
    <div class="container">
    <?php echo eb_latest('1623652859'); ?>
    </div>
</section>

<?php /* ---------- 이벤트 - 쇼핑몰현황/기타 > 이벤트관리에서 상품 등록합니다. ---------- */ ?>
<section class="section section-08 shop-section-event">
    <div class="container">
        <?php include_once(EYOOM_THEME_SHOP_SKIN_PATH.'/boxevent.skin.html.php'); // 이벤트 ?>
    </div>
</section>
<?php /* ---------- 이벤트박스 끝 ---------- */ ?>

<?php /* ---------- 할인상품 - BARGAIN SALE ---------- */ ?>
<section class="section section-09">
    <div class="container">
        <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
        <div class="adm-edit-btn btn-edit-mode hidden-xs hidden-sm" style="margin-top:-20px;">
            <div class="btn-group">
                <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shop&amp;pid=configform&amp;amode=ittype&amp;thema=<?php echo $theme; ?>&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="btn-e btn-e-xs btn-e-red btn-e-split"><i class="far fa-edit"></i> 유형별 상품진열 설정</a>
                <a href="<?php echo G5_ADMIN_URL; ?>/?dir=shop&amp;pid=configform&amp;thema=<?php echo $theme; ?>#anc_scf_index" target="_blank" class="btn-e btn-e-xs btn-e-red btn-e-split-red dropdown-toggle" title="새창 열기">
                    <i class="far fa-window-maximize"></i>
                </a>
            </div>
        </div>
        <?php } ?>
        
        <?php if($default['de_type5_list_use']) { ?>
            <div class="shop-main-title">
                <h2><a href="<?php echo shop_type_url(5); ?>">BARGAIN SALE</a></h2>
            </div>
            <?php
            $list = new item_list($skin_dir.'/'.$default['de_type5_list_skin']);
            $list->set_type(5);
            $list->set_view('it_id', false);
            $list->set_view('it_name', true);
            $list->set_view('it_basic', true);
            $list->set_view('it_cust_price', true);
            $list->set_view('it_price', true);
            $list->set_view('it_icon', true);
            $list->set_view('sns', true);
            echo $list->run();
            ?>
        <?php } ?>
    </div>
</section>

<script>
/* 페이지 로더 */
$(window).load(function(){
    $(".logo-loader").addClass("active");
    setTimeout(function(){
        $(".page-loader").fadeOut();
    }, 1000);
});
</script>