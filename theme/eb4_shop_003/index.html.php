<?php
/**
 * theme file : /theme/THEME_NAME/index.html.php
 */
if (!defined('_EYOOM_')) exit;
?>
<style>
/*---------- 페이지 로더 ----------*/
.page-loader {position:fixed;top:0;left:0;z-index:9999;width:100%;height:100%;background: #fff;}
/* background: -moz-radial-gradient(center, ellipse cover, rgba(252,255,244,1) 0%, rgba(223,229,215,1) 40%, rgba(179,190,173,1) 100%);
background: -webkit-radial-gradient(center, ellipse cover, rgba(252,255,244,1) 0%,rgba(223,229,215,1) 40%,rgba(179,190,173,1) 100%);
background: radial-gradient(ellipse at center, rgba(252,255,244,1) 0%,rgba(223,229,215,1) 40%,rgba(179,190,173,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcfff4', endColorstr='#b3bead',GradientType=1 ) */
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

<?php if ($eyoom['is_responsive'] == '1' || G5_IS_MOBILE) { // 반응형 또는 모바일일때 ?>
@media (max-width:991px){
    .section {margin-bottom:30px}
    .section-02 {margin-bottom:0}
}
<?php } ?>
</style>

<?php /* 페이지 로더 */ ?>
<div class="page-loader">
    <div class="logo-loader">
        <?php if (file_exists($top_logo) && !is_dir($top_logo)) { ?>
        <img src="<?php echo $logo_src['top']; ?>" class="title-logo-image" alt="<?php echo $config['cf_title']; ?>">
        <?php } else { ?>
        <img src="<?php echo EYOOM_THEME_URL; ?>/image/site_logo.jpg" class="title-logo-image" alt="<?php echo $config['cf_title']; ?>">
        <?php } ?>
    </div>
</div>

<?php /* ---------- 메인 슬라이더 ---------- */ ?>
<section class="section section-01">
    <?php echo eb_slider('1548224900'); ?>
</section>

<section class="section section-02">
    <div class="container">
        <?php echo eb_latest('1551067837'); ?>
    </div>
</section>

<section class="section section-03">
    <div class="container">
        <div class="row">
            <div class="col-md-6 md-margin-bottom-30">
                <?php echo eb_latest('1551068799'); ?>
            </div>
            <div class="col-md-6">
                <?php echo eb_latest('1551069284'); ?>
            </div>
        </div>
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