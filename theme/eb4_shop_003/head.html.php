<?php
/**
 * theme file : /theme/THEME_NAME/head.html.php
 */
if (!defined('_EYOOM_')) exit;

add_stylesheet('<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,400,700&amp;subset=korean" rel="stylesheet">',0);

if ($eyoom['is_responsive'] == '1' || G5_IS_MOBILE) { // 반응형 또는 모바일일때
    add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/css/style.css?ver='.G5_CSS_VER.'">',0);
} else if ($eyoom['is_responsive'] == '0' && !G5_IS_MOBILE) { // 비반응형이면서 PC버전일때
    add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/css/style-nr.css?ver='.G5_CSS_VER.'">',0);
}
add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/css/custom.css?ver='.G5_CSS_VER.'">',0);

/**
 * 로고 타입 : 'image' || 'text'
 */
$logo = 'image';

/**
 * 상품 이미지 미리보기 종류 : zoom or slider
 */
$item_view = 'zoom';
?>

<?php if (!$wmode) { ?>
<div class="wrapper">
    <?php
    // 팝업창
    if(defined('_INDEX_') && $newwin_contents) { // index에서만 실행
        echo $newwin_contents;
    }
    ?>
    <?php /* 편집버튼 */ ?>
	<?php if ($is_admin) { // 관리자일 경우 ?>
	<div class="btn-edit-admin eyoom-form visible-lg">
        <input type="hidden" name="edit_mode" id="edit_mode" value="<?php echo $eyoom_default['edit_mode']; ?>">
		<label class="toggle red-toggle">
			<input type="checkbox" id="btn_edit_mode" <?php echo $eyoom_default['edit_mode'] == 'on' ? 'checked':''; ?>><i></i><span class="color-grey font-size-12">편집모드</span>
		</label>
	</div>
	<?php } ?>

    <?php /* wrapper-inner */ ?>
    <?php if ($eyoom['layout'] == 'wide') { ?>
    <div class="wrapper-inner">
    <?php } else if ($eyoom['layout'] == 'boxed') { ?>
    <div class="wrapper-inner box-layout">
    <?php } ?>
        <?php if (defined('_INDEX_')) { ?>
        <?php /* banner top */ ?>
        <?php echo eb_slider('1547172668'); ?>
        <?php } ?>

        <?php /* header */ ?>
        <header class="header" <?php if ($eyoom['sticky'] == 'y') echo 'id="header-fixed"'; ?>>
            <div class="header-top-bar clear-after">
                <div class="topbar-left">
                    <ul class="list-unstyled theme-link">
                        <li class="<?php if (defined('_SHOP_')) { ?>active<?php } ?>"><a href="<?php echo G5_SHOP_URL; ?>">쇼핑몰</a></li>
                        <li class="<?php if (!defined('_SHOP_')) { ?>active<?php } ?>"><a href="<?php echo G5_URL; ?>/community.php">커뮤니티</a></li>
                        <!-- <li class=""><a href="/bbs/board.php?bo_table=contest">공모전</a></li> -->
                    </ul>
                </div>
                <div class="topbar-center">
                    <!-- <ul class="list-unstyled goods-list">
                        <li><a href="<?php echo shop_type_url(1); ?>">히트상품</a></li>
                        <li><a href="<?php echo shop_type_url(2); ?>">추천상품</a></li>
                        <li><a href="<?php echo shop_type_url(3); ?>">최신상품</a></li>
                        <li><a href="<?php echo shop_type_url(4); ?>">인기상품</a></li>
                        <li><a href="<?php echo shop_type_url(5); ?>">할인상품</a></li>
                    </ul> -->
                </div>
                <div class="topbar-right">
                    <ul class="list-unstyled login-list">
                        <?php if ($is_admin == 'super' || $is_auth) { // 관리자일 경우 ?>
                        <li><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>"><i class="fas fa-cog"></i> 관리자</a></li>
                        <?php } ?>
                        <?php if ($is_member) { // 회원일 경우 ?>
                        <li><a href="<?php echo G5_BBS_URL; ?>/logout.php"><i class="far fa-far fa-user"></i> 로그아웃</a></li>
                        <li><a href="<?php echo G5_BBS_URL; ?>/member_confirm.php?url=register_form.php"><i class="far fa-far fa-keyboard"></i> 정보수정</a></li>
                        <?php } else { ?>
                        <li><a href="<?php echo G5_BBS_URL; ?>/login.php"><i class="far fa-far fa-user"></i> 로그인</a></li>
                        <li><a href="<?php echo G5_BBS_URL; ?>/register.php"><i class="far fa-far fa-keyboard"></i> 회원가입</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="header-inner header-sticky clear-after">
                <div class="header-left">
                    <div class="logo-header">
                        <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
                        <div class="adm-edit-btn btn-edit-mode hidden-xs hidden-sm" style="top:-2px;left:15px;text-align:left">
                            <div class="btn-group">
                                <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=biz_info&amp;amode=logo&amp;thema=<?php echo $theme; ?>&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="btn-e btn-e-xs btn-e-red btn-e-split"><i class="far fa-edit"></i> 로고 설정</a>
                                <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=biz_info&amp;amode=logo&amp;thema=<?php echo $theme; ?>" target="_blank" class="btn-e btn-e-xs btn-e-red btn-e-split-red dropdown-toggle" title="새창 열기">
                                    <i class="far fa-window-maximize"></i>
                                </a>
                            </div>
                        </div>
                        <?php } ?>
                        <h1>
                            <a href="<?php echo G5_URL; ?>">
                            <?php if ($logo == 'text') { ?>
                                <span class="title-logo-text"><?php echo $config['cf_title']; ?></span>
                            <?php } else if ($logo == 'image') { ?>
                                <?php if (!G5_IS_MOBILE) { ?>
                                <?php if (file_exists($top_logo) && !is_dir($top_logo)) { ?>
                                <img src="<?php echo $logo_src['top']; ?>" class="title-logo-image" alt="<?php echo $config['cf_title']; ?>">
                                <?php } else { ?>
                                <img src="<?php echo EYOOM_THEME_URL; ?>/image/site_logo.png" class="title-logo-image" alt="<?php echo $config['cf_title']; ?>">
                                <?php } ?>
                                <?php } else { ?>
                                <?php if (file_exists($top_mobile_logo) && !is_dir($top_mobile_logo)) { ?>
                                <img src="<?php echo $logo_src['mobile_top']; ?>" class="title-logo-image" alt="<?php echo $config['cf_title']; ?>">
                                <?php } else { ?>
                                <img src="<?php echo EYOOM_THEME_URL; ?>/image/site_logo.png" class="title-logo-image" alt="<?php echo $config['cf_title']; ?>">
                                <?php } ?>
                                <?php } ?>
                            <?php } ?>
                            </a>
                        </h1>
                    </div>
                </div>
                <div class="header-center">
                    <?php /* 모바일 메뉴 호출 버튼 - 폭 992px 이하에서 출력 */ ?>
                    <nav class="header-nav sidebar left">
                        <div class="sidebar-left-content">
                            <?php /* 메뉴 편집 버튼 */ ?>
                            <?php if ($is_admin == 'super' && !G5_IS_MOBILE) { ?>
                            <div class="adm-edit-btn btn-edit-mode hidden-xs hidden-sm" style="top:-2px">
                                <div class="btn-group">
                                    <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=menu_list&amp;wmode=1" onclick="eb_admset_modal(this.href); return false;" class="btn-e btn-e-xs btn-e-red btn-e-split"><i class="far fa-edit"></i> 메뉴 설정</a>
                                    <a href="<?php echo G5_ADMIN_URL; ?>/?dir=theme&amp;pid=menu_list" target="_blank" class="btn-e btn-e-xs btn-e-red btn-e-split-red dropdown-toggle" title="새창 열기">
                                        <i class="far fa-window-maximize"></i>
                                    </a>
                                </div>
                            </div>
                            <?php } ?>
                            <h5 class="mobile-nav-title">메인 메뉴</h5>
                            <?php /* Header Nav - 메인메뉴 */ ?>
                            <ul class="nav navbar-nav">
                                <?php if (isset($menu) && is_array($menu)) { ?>
                                <?php foreach ($menu as $key => $menu_1) { ?>
                                <li class="<?php if (isset($menu_1['active']) && $menu_1['active']) echo 'active'; ?> <?php if (isset($menu_1['submenu']) && $menu_1['submenu']) echo 'dropdown'; ?> division">
                                    <a href="<?php echo $menu_1['me_link']; ?>" target="_<?php echo $menu_1['me_target']; ?>" class="dropdown-toggle disabled" <?php echo G5_IS_MOBILE && isset($menu_1['submenu']) && $menu_1['submenu'] ? 'data-toggle="dropdown"' : 'data-hover="dropdown"';?>>
                                        <?php if ($menu_1['me_icon']) { ?><i class="<?php echo $menu_1['me_icon']; ?>"></i><?php } ?>
                                        <?php echo $menu_1['me_name']?>
                                    </a>
                                    <?php if (isset($menu_1['submenu']) && is_array($menu_1['submenu'])) { ?>
                                    <a href="#" class="cate-dropdown-open dorpdown-toggle hidden-lg hidden-md" data-toggle="dropdown"></a>
                                    <?php } ?>
                                    <?php $index2 = 0; $size2 = count((array)$menu_1['submenu']); ?>
                                    <?php if (isset($menu_1['submenu']) && is_array($menu_1['submenu'])) { ?>
                                    <?php foreach ($menu_1['submenu'] as $subkey => $menu_2) { ?>
                                    <?php if ($index2 == 0) { ?>
                                    <ul class="dropdown-menu">
                                    <?php } ?>
                                        <li class="dropdown-submenu <?php if (isset($menu_2['active']) && $menu_2['active']) echo 'active';?>">
                                            <a href="<?php echo $menu_2['me_link']; ?>" target="_<?php echo $menu_2['me_target']; ?>">
                                                <?php if (isset($menu_2['me_icon']) && $menu_2['me_icon']) { ?>
                                                <i class="<?php echo $menu_2['me_icon']; ?>"></i>
                                                <?php } ?>
                                                <?php echo $menu_2['me_name']; ?>
                                                <?php if (isset($menu_2['sub']) && $menu_2['sub'] == 'on') { ?>
                                                <i class="far fa-circle sub-caret"></i>
                                                <?php } ?>
                                            </a>
                                            <?php $index3 = 0; $size3 = count((array)$menu_2['subsub']); ?>
                                            <?php if (isset($menu_2['subsub']) && is_array($menu_2['subsub'])) { ?>
                                            <?php foreach ($menu_2['subsub'] as $ssubkey => $menu_3) { ?>
                                            <?php if ($index3 == 0) { ?>
                                            <ul class="dropdown-menu">
                                            <?php } ?>
                                                <li class="dropdown-submenu <?php if (isset($menu_3['active']) && $menu_3['active']) echo 'active';?>">
                                                    <a href="<?php echo $menu_3['me_link']; ?>" target="_<?php echo $menu_3['me_target']; ?>">
                                                        <?php if (isset($menu_3['me_icon']) && $menu_3['me_icon']) { ?>
                                                        <i class="<?php echo $menu_3['me_icon']; ?>"></i>
                                                        <?php } ?>
                                                        <span class="hidden-md hidden-lg">-</span> <?php echo $menu_3['me_name']; ?>
                                                        <?php if (isset($menu_3['sub']) && $menu_3['sub'] == 'on') { ?>
                                                        <i class="fas fa-angle-right sub-caret hidden-sm hidden-xs"></i><i class="fas fa-angle-down sub-caret hidden-md hidden-lg"></i>
                                                        <?php } ?>
                                                    </a>
                                                </li>
                                            <?php if ($index3 == $size3 - 1) { ?>
                                            </ul>
                                            <?php } ?>
                                            <?php $index3++; } ?>
                                            <?php } ?>
                                        </li>
                                    <?php if ($index2 == $size2 - 1) { ?>
                                    </ul>
                                    <?php } ?>
                                    <?php $index2++; } ?>
                                    <?php } ?>
                                </li>
                                <?php } ?>
                                <?php } ?>
                            </ul>

                            <!-- <div class="goods-list">
                                <h5>상품 유형</h5>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo shop_type_url(1); ?>">히트상품</a></li>
                                    <li><a href="<?php echo shop_type_url(2); ?>">추천상품</a></li>
                                    <li><a href="<?php echo shop_type_url(3); ?>">최신상품</a></li>
                                    <li><a href="<?php echo shop_type_url(4); ?>">인기상품</a></li>
                                    <li><a href="<?php echo shop_type_url(5); ?>">할인상품</a></li>
                                </ul>
                            </div> -->
                        </div>
                    </nav>
                </div>
                <div class="header-right">
                    <div class="shop-icon-menu dropdown">
                        <div class="btn-more" id="btnShopList" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a href=""><i class="fas fa-th-large"></i></a></div>
                        <div class="shop-icon-menu-wrap dropdown-menu" role="menu" aria-labelledby="btnShopList">
                            <h5>Store Menu</h5>
                            <ul class="shop-icon-list list-unstyled clear-after">
                                <li><a href="<?php echo G5_SHOP_URL; ?>/cart.php"><i class="fas fa-shopping-basket"></i> 장바구니</a></li>
                                <li><a href="<?php echo G5_SHOP_URL; ?>/wishlist.php"><i class="far fa-heart"></i> 위시리스트</a></li>
                                <li><a href="<?php echo G5_SHOP_URL; ?>/orderinquiry.php"><i class="fas fa-truck"></i> 주문조회</a></li>
                                <li><a href="<?php echo G5_SHOP_URL; ?>/couponzone.php"><i class="fas fa-ticket-alt"></i> 쿠폰존</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="shop-search dropdown">
                        <div class="btn-more" id="btnShopSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a href=""><i class="fas fa-search"></i></a></div>
                        <div class="shop-search-wrap dropdown-menu" role="menu" aria-labelledby="btnShopSearch">
                            <h5>Store Search</h5>
                            <form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL; ?>/search.php" onsubmit="return fsearchbox_submit(this);" class="eyoom-form">
                                <input type="hidden" name="sfl" value="wr_subject||wr_content">
                                <input type="hidden" name="sop" value="and">
                                <label for="head_sch_stx" class="sound_only"><strong>검색어 입력 필수</strong></label>
                                <div class="input input-button">
                                    <input type="text" name="stx" id="head_sch_stx" maxlength="20" class="sch_stx" placeholder="검색어 입력">
                                    <div class="button"><input type="submit"><i class="fas fa-search"></i></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="btn-mobile">
                        <div class="btn-more">
                            <a href="#" class="sidebar-left-trigger" data-action="toggle" data-side="left" title="메뉴 버튼">
                                <span class="sr-only">Toggle navigation</span>
                                <i class="fas fa-bars"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div><?php /* End header-inner */ ?>

            <?php /* header-sticky-space */ ?>
            <div class="header-sticky-space"></div>
        </header><?php /* End header */ ?>

        <?php if (!defined('_INDEX_')) { ?>
        <div class="page-title-wrap">
            <div class="container">
            <?php if (!defined('_EYOOM_MYPAGE_')) { ?>
                <h2 class="pull-left">
                    <i class="fas fa-map-marker-alt"></i> <?php echo $subinfo['title']; ?>
                </h2>
                <?php if (!$it_id) { ?>
                <ul class="breadcrumb pull-right hidden-xs">
                    <?php echo $subinfo['path']; ?>
                </ul>
                <?php } ?>
                <div class="clearfix"></div>
            <?php } else { ?>
                <h2><i class="fas fa-map-marker-alt"></i> 마이페이지</h2>
            <?php } ?>
            </div>
        </div>
        <?php } ?>

        <?php /* Basic Body */ ?>
        <div class="basic-body <?php if (!defined('_INDEX_')) { ?>sub-basic-body<?php } ?>">
            <?php if (!defined('_INDEX_')) { ?>
            <div class="basic-body-page">
                <?php /* 페이지 카테고리 시작, 서브페이지 사이드 레이아웃 사용 + 991px 이하에서만 출력 */ ?>
                <?php if ($side_layout['use'] == 'yes') { ?>
                <div class="category-mobile-area">
                    <?php if ($sidemenu) { ?>
                    <div class="tab-scroll-page-category">
                        <div class="scrollbar">
                            <div class="handle">
                                <div class="mousearea"></div>
                            </div>
                        </div>
                        <div id="tab-page-category">
                            <div class="page-category-list">
                                <?php foreach ($sidemenu as $smenu) { ?>
                                <span <?php if ($smenu['active']) echo 'active'; ?>><a href="<?php echo $smenu['me_link']; ?>" target="_<?php echo $smenu['me_target']; ?>"><?php echo $smenu['me_name']; ?></a></span>
                                <?php } ?>
                                <span class="fake-span"></span>
                            </div>
                            <div class="controls">
                                <button class="btn prev"><i class="fas fa-caret-left"></i></button>
                                <button class="btn next"><i class="fas fa-caret-right"></i></button>
                            </div>
                        </div>
                        <div class="tab-page-category-divider"></div>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
                <?php /* 페이지 카테고리 끝 */ ?>
            </div>
            <?php } ?>

            <?php if (!defined('_INDEX_') || $side_layout['use'] == 'yes') { ?>
            <div class="container">
                <div class="row">
            <?php } ?>

            <?php if ($side_layout['use'] == 'yes') { ?>
                <?php
                if ($side_layout['pos'] == 'left') {
                    /* 사이드영역 시작 */
                    include_once(EYOOM_THEME_PATH . '/side.html.php');
                    /* 사이드영역 끝 */
                }
                ?>
                <section class="basic-body-main <?php if ($side_layout['pos'] == 'left') { echo 'right'; } else { echo 'left'; }?>-main col-md-9">
            <?php } else { ?>
                <section class="basic-body-main <?php if (!defined('_INDEX_')) { ?>col-xs-12<?php } ?>">
            <?php } ?>

<?php } ?>