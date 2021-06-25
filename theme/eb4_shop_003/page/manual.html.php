<?php
/**
 * page file : /theme/THEME_NAME/page/manual.html.php
 */
if (!defined('_EYOOM_')) exit;
add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/plugins/magnific-popup/magnific-popup.min.css" type="text/css" media="screen">',0);
?>
<style>
.theme-manual p, .theme-manual li {color:#333}
.theme-manual .tab-std [class*="col-"]:first-child {padding-right:15px}
.theme-manual .tab-std [class*="col-"]:last-child {padding-left:15px}
/* 타이틀 */
.theme-manual h3 {position:relative;font-size:20px;line-height:26px;font-weight:bold;border-bottom:1px solid #656565;padding:0 0 10px 15px;margin:0 0 10px}
.theme-manual h3 .title-bar {position:absolute;top:0;left:0;display:inline-block;width:5px;height:26px;background:#6284F3}
/* 탭 네비 */
.theme-manual .tab-std .tab-nav-left {border-right:0 none;padding-right:0 !important}
.theme-manual .nav li a {background:#eee}
.theme-manual .nav li.active a {font-weight:700;color:#fff;background:#ababab}
/* 탭 콘텐츠 */
.theme-manual .tab-std .tab-content-right {border:2px solid #ababab}
.theme-manual .tab-std .tab-content {padding:30px 0}
/* 테마 다운로드 */
/* 테마 설치 */
.install-step {margin-bottom:30px}
.install-step {padding:15px;background:#f8f8f8;box-shadow:0 0 1px rgba(0,0,0,0.35)}
.install-step h5 {line-height:45px;margin:0 0 10px;font-size:16px;position:relative}
.install-step h5 small {display:inline-block;height:45px;padding:7px 9px;margin-right:10px;background:#314b52;color:#fff;font-size:11px;text-align:center;text-transform:uppercase;vertical-align:middle}
.install-step h5 small span {font-size:18px;display:block;margin-top:2px}
.install-step p {line-height:24px;color:#707070;margin:10px 0 0;padding-left:30px;position:relative;word-break:keep-all}
.install-step p span {display:inline-block;position:absolute;left:0;top:0;width:24px;height:24px;line-height:24px;text-align:center;margin-right:5px;color:#fff;background:#FA3008;border-radius:100% !important}
.full-img {box-shadow:0 0 1px rgba(0,0,0,0.8);max-width:600px;margin:0 auto}
@media (min-width:1200px){
    .theme-step-1 , .theme-step-2 {height:520px}
    .theme-step-3 , .theme-step-4 {height:350px}
    .theme-step-5 , .theme-step-6 {height:690px}
}
/* 테마 설명과 설정 */
.theme-setup ul li {position:relative;margin-bottom:10px;padding-left:20px}
.theme-setup ul li i {position:absolute;left:0;top:3px;color:#ccc}
.theme-setup ul li ul li {margin:5px 0 0;padding:0}
/* 테마 편집모드 */
.theme-editmode h5 {margin:0 0 10px;font-weight:700;font-size:14px}
.theme-editmode .theme-list > li {position:relative;margin-bottom:20px}
.theme-editmode .theme-list .img-responsive {padding:10px;margin-bottom:10px;border:1px solid #ddd}
/* 테마 패치내역 */
.patch-list h5 {margin:0 0 10px;padding:5px 10px;font-size:14px;border-left:2px solid #999;background:#eee;color:#c0392b}
.patch-list li {position:relative;padding-left:10px}
.patch-list li span {position:absolute;left:0;top:0}
@media (max-width:991px){
    .theme-manual .tab-std .tab-nav-left {padding:0 !important;margin-bottom:10px}
}
</style>
<div class="theme-manual">
    <div class="container">
        <div class="row tab-std tab-std-default">
            <div class="col-md-2 tab-nav-left">
                <?php /* 탭 네비 */ ?>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#tab-bg-default-1" data-toggle="tab">테마 다운로드</a></li>
                    <li><a href="#tab-bg-default-2" data-toggle="tab">테마 설치</a></li>
                    <li><a href="#tab-bg-default-3" data-toggle="tab">테마 설명과 설정</a></li>
                    <li><a href="#tab-bg-default-4" data-toggle="tab">테마 메인과 편집모드</a></li>
                    <li><a href="#tab-bg-default-5" data-toggle="tab">테마 패치내역</a></li>
                </ul>
            </div>

            <?php /* 탭 콘텐츠 */ ?>
            <div class="col-md-10 tab-content-right">
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab-bg-default-1">
                        <?php /* 테마 다운로드 */ ?>
                        <div class="theme-download">
                            <h3><span class="title-bar"></span> 테마 다운로드와 테마 키 확인(이윰넷에서 구매한 경우)</h3>
                            <p class="margin-bottom-30">이윰넷에서 <strong>유료 테마</strong>를 스킨상점에서 구매하며 구매가 완료됐다면 <strong>마이페이지 &gt; 다운로드 관리 &gt; <span class="color-red">테마관리</span></strong>에서 테마키 확인 및 다운로드가 가능합니다.</p>
                            <div class="margin-bottom-50">
                                <a class="image-popup-vertical-fit" href="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/theme_manage.jpg"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/theme_manage.jpg" alt="image" class="img-responsive"></a>
                            </div>

                            <h3><span class="title-bar"></span> 테마 다운로드와 주문번호 확인(sir.kr 콘텐츠몰에서 구매한 경우)</h3>
                            <p class="margin-bottom-30">sir.kr 콘텐츠몰에서 구매를 한 경우 sir.kr에서 테마 다운로드를 받을 수 있으며 주문번호를 확인합니다.<br>주문번호는 테마 설치시 입력 사항 입니다.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade in" id="tab-bg-default-2">
                        <?php /* 테마 설치 */ ?>
                        <div class="theme-install">
                            <div class="install-box">
                                <div class="sub-page-title" id="install_theme">
                                    <h3><span class="title-bar"></span> 유료 테마 설치</h3>
                                    <p class="margin-bottom-30">영카트5 + 빌더 + 베이직테마가 설치된 상태에서 구매한 <strong class="color-orange">유료 테마 설치</strong> 과정입니다.</p>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="install-step theme-step-1">
                                            <h5><small>step <span>01</span></small> 다운로드 파일 확인 및 압축 풀기</h5>
                                            <a class="image-popup-vertical-fit" href="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img01.jpg"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img01.jpg" alt="image" class="img-responsive"></a>
                                            <p><span>1</span> 압축 프로그램을 통해 해당 파일 압축을 풉니다.</p>
                                            <p><span class="bg-yellow"><i class="fa fa-exclamation"></i></span> <strong class="color-red font-size-20">[ 중요! ]</strong></p>
                                            <p><i><strong class="color-black font-size-14">'<strong class="color-red">알집</strong>'으로 압축해제시 파일이 정상적으로 해제가 안될 수 있으며, 정상설치가 되지 않아 에러가 발생합니다.<br>반드시 '<strong class="color-red">7-zip, 반디집</strong>' 등을 사용해 압축 해제하시기 바랍니다.</strong></i></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="install-step theme-step-2">
                                            <h5><small>step <span>02</span></small> 폴더와 파일 리스트</h5>
                                            <a class="image-popup-vertical-fit" href="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img02.jpg"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img02.jpg" alt="image" class="img-responsive"></a>
                                            <p><span style="background:#FF4549"><i class="fa fa-info"></i></span> 디자인된 테마와 데모 사이트 콘텐츠 설정등의 파일 목록 입니다.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="install-step theme-step-3">
                                            <h5><small>step <span>03</span></small> ftp 프로그램을 통해 테마 업로드</h5>
                                            <a class="image-popup-vertical-fit" href="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img03.jpg"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img03.jpg" alt="image" class="img-responsive"></a>
                                            <p><span>1</span> ftp 프로그램(파일질라, 알ftp등)을 통해 서버로 파일 업로드 합니다.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="install-step theme-step-4">
                                            <h5><small>step <span>04</span></small> 테마설치하기</h5>
                                            <a class="image-popup-vertical-fit" href="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img04.jpg"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img04.jpg" alt="image" class="img-responsive"></a>
                                            <p><span>1</span> 사이트 '<strong>관리자 모드 &gt; 테마설정관리 &gt; 테마관리</strong>' 로 이동해 업로드한 테마의 '<strong class="color-red">테마설치하기</strong>' 버튼을 클릭합니다.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="install-step theme-step-5">
                                            <h5><small>step <span>05</span></small> 테마키 또는 상품주문번호 입력하기</h5>
                                            <a class="image-popup-vertical-fit" href="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img05.jpg"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img05.jpg" alt="image" class="img-responsive"></a>
                                            <p><span>1</span> 이윰 라이선스를 확인 후 동의 체크합니다.</p>
                                            <p><span>2</span> 구매한 테마키 또는 상품주문번호를 입력 후 '설치하기'를 클릭합니다.<br>(<strong class="color-red">이윰넷</strong>에서 구매한 경우 <strong class="color-red">테마키</strong>를 <strong class="color-blue">sir.kr 콘텐츠몰</strong>에서 구매한 경우 <strong class="color-blue">상품주문번호</strong>를 입력)</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="install-step theme-step-6">
                                            <h5><small>step <span>06</span></small> tmp폴더 삭제</h5>
                                            <a class="image-popup-vertical-fit" href="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img06.jpg"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img06.jpg" alt="image" class="img-responsive"></a>
                                            <p><span>1</span> 테마설치 완료후 업로드한 <strong class="color-red">tmp폴더</strong>를 삭제합니다.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="install-step theme-step-7">
                                            <h5><small>step <span>07</span></small> 최초 메인 페이지</h5>
                                            <a class="image-popup-vertical-fit" href="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img07.jpg"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/install_theme_img07.jpg" alt="image" class="img-responsive"></a>

                                            <p><span>1</span> 설치된 테마를 <strong>홈페이지테마적용</strong>을 하면 해당 테마가 출력되며 우측 <strong>미리보기</strong>를 클릭하면 해당 테마를 미리 볼 수 있습니다.</p>
                                            <p><span>2</span> 관리자 로그인 후 <strong class="color-red">편집모드</strong>를 활성화 시키면 화면상에서 로고, 메뉴, EB슬라이더, EB콘텐츠, EB최신글 등의 설정을 불러와 설정할 수 있습니다.</p>
                                            <p><span><i class="fa fa-info"></i></span> <strong>[중요]</strong> 최초 설치 후 관리자로 로그인해 <strong class="color-red">관리자 모드 &lt; 환경설정 &lt; 기본환경설정</strong>에 접속해 <strong class="color-red">확인</strong>을 한번 클릭하기 바랍니다.<br>(모바일 관련 함수 설정을 위함이며 그래야 모바일에서 정상적인 레이아웃 출력됩니다.)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade in" id="tab-bg-default-3">
                        <?php /* 테마 설명과 설정 */ ?>
                        <div class="theme-setup">
                            <h3><span class="title-bar"></span> 테마 설명</h3>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-minus"></i> 쇼핑몰이 메인인 테마이며 쇼핑몰 레이아웃과 커뮤니티 레이아웃은 동일합니다.(출력 파일은 서로 다르며 <a href="http://eyoom.net/page/?pid=eb4_theme_skin" target="_blank" class="color-red">테마구조</a>를 참고하기 바랍니다.)</li>
                                <li><i class="fas fa-minus"></i> <span class="color-red">설치시 상품 등록은 지원하지 않기에 데모사이트와 같이 상품 출력 된 레이아웃은 출력되지 않습니다.</span>(직접 관리자모드에서 상품 입력 해야합니다.)</li>
                                <li><i class="fas fa-minus"></i> 쇼핑몰 설정 및 상품등록등과 관련해서는 sir.kr의 <strong class="color-red">영카트5 매뉴얼</strong>(<a href="https://sir.kr/manual/yc5" target="_blank">https://sir.kr/manual/yc5</a>)를 참고하기 바랍니다.</li>
                                <li><i class="fas fa-minus"></i> <span class="color-red">상품 등록시 이미지 비율을 동일하게 맞추기 바랍니다.</span> 예)1000x1200픽셀 이미지 파일</li>
                                <li><i class="fas fa-minus"></i> 해당 테마는 사이드 레이아웃을 사용하지 않는 디자인 입니다.</li>
                                <li><i class="fas fa-minus"></i> 메인에서 편집모드를 통해 내용 및 이미지 수정이 가능하며 상품 등록 후에도 개별상품 설정이 가능합니다.</li>
                                <li><i class="fas fa-minus"></i> 쇼핑몰 메인에 <strong>유형별 출력</strong>외에 <strong class="color-red">분류별(카테고리) 출력</strong> 스킨을 제공합니다.</li>
                                <li><i class="fas fa-minus"></i> 관리자 - 테마설정관리 - 테마환경설정에서 기본설정의 테마유형을 반응형 / 비반응형 으로 설정 가능합니다.</li>
                                <li><i class="fas fa-minus"></i> 해당 테마는 구글 웹폰트 중 Noto Sans KR 폰트를 사용했으며 사용을 원치 않을 시 아래의 소스 삭제합니다.
                                    <div class="inner-content">
                                        /theme/eb4_shop_003/shop/head.html.php, /theme/eb4_shop_003/head.html.php 파일 상단 구글폰트 링크 삭제<br>
                                        /theme/eb4_shop_003/skin/shop/basic/css/shop_style.css, /theme/eb4_shop_003/css/style.css 파일 다음 소스 삭제<br>
                                        body, h1, h2, h3, h4, h5, h6 {font-family:'Noto Sans KR',sans-serif;}
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade in" id="tab-bg-default-4">
                        <?php /* 테마 편집모드 */ ?>
                        <div class="theme-editmode">
                            <h3><span class="title-bar"></span> 테마 메인과 편집모드</h3>
                            <p class="margin-bottom-30">편집 모드를 통해 로고, 메뉴, 회사정보 입력은 물론 사이트 콘텐츠의 이미지와 텍스트를 보여지는 화면에서 바로 수정이 가능합니다.
                                <br><strong class="color-red">편집모드란?</strong> <a href="http://eyoom.net/page/?pid=eb4_editmode" target="_blank"><i class="fas fa-link"></i> 관련링크 바로가기</a>
                            </p>
                            
                            <ul class="list-unstyled theme-list">
                                <li>
                                    <h5>메인 페이지 로더</h5>
                                    <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/theme_main_00.jpg" class="img-responsive"></div>
                                    <ul class="list-unstyled">
                                        <li>&middot; 메인페이지 로딩 시간 동안 출력되는 화면입니다.</li>
                                        <li>&middot; /theme/eb4_shop_003/shop/index.html.php 파일 '페이지 로더' 부분에 각 소스가 있으며 시간 조정 및 스타일 수정을 합니다.</li>
                                        <li>&middot; 이미지는 /theme/eb4_shop_003/image/site_logo.png 파일이 출력되며 편집모드를 통해 로고를 등록하면 등록된 로고 이미지가 출력됩니다.</li>
                                    </ul>
                                </li>
                                <li>
                                    <h5>베너 슬라이더 상단(EB슬라이더)</h5>
                                    <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/theme_main_01.jpg" class="img-responsive"></div>
                                    <ul class="list-unstyled">
                                        <li>&middot; 이미지 비율 #1(pc) : 2560x90 / #2(mobile) : 780x90(모바일) 픽셀 사이즈 이미지를 등록합니다.</li>
                                        <li>&middot; 대표 타이틀 입력을 해야 하며 내용은 출력되지 않습니다.</li>
                                        <li>&middot; /theme/eb4_shop_003/skin/ebslider/shop003_banner_top/ebslider.skin.html.php</li>
                                    </ul>
                                </li>
                                <li>
                                    <h5>Header(상단 레이아웃)</h5>
                                    <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/theme_main_02.jpg" class="img-responsive"></div>
                                    <ul class="list-unstyled">
                                        <li>&middot; 로고, 메뉴, 로그인등 출력되며 편집모드 등을 통해 설정할 수 있습니다.</li>
                                        <li>&middot; 편집모드 외에 출력 부분은 /theme/eb4_shop_003/shop/shop.head.html.php 파일에서 수정합니다.</li>
                                    </ul>
                                </li>
                                <li>
                                    <h5>메인 슬라이더(EB슬라이더)</h5>
                                    <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/theme_main_03.jpg" class="img-responsive"></div>
                                    <ul class="list-unstyled">
                                        <li>&middot; 대표/서브 타이틀 입력, 연결주소 입력합니다.</li>
                                        <li>&middot; 이미지 비율 2000x1540 픽셀 이미지를 등록합니다.</li>
                                        <li>&middot; /theme/eb4_shop_003/skin/ebslider/shop003_main_slider/ebslider.skin.html.php</li>
                                    </ul>
                                </li>
                                <li>
                                    <h5>갤러리 배너 (EB콘텐츠)</h5>
                                    <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/theme_main_04.jpg" class="img-responsive"></div>
                                    <ul class="list-unstyled">
                                        <li>&middot; 이미지 비율 800x300 픽셀 이미지를 등록합니다.</li>
                                        <li>&middot; /theme/eb4_shop_003/skin/ebcontents/shop003_gallery_banner/ebcontents.skin.html.php</li>
                                    </ul>
                                </li>
                                <li>
                                    <h5>BRAND COLLECTION(EB상품)<br><small class="color-red">EB상품은 자동 설치가 되지 않으니 마스터 생성과 아이템 추가 후 /eb4_shop_003/shop/index.html.php 파일(60줄)에 치환코드를 교체하기 바랍니다.<br>EB상품 가이드 : <a href="http://eyoom.net/bbs/board.php?bo_table=eb4_theme_guide&wr_id=36">http://eyoom.net/bbs/board.php?bo_table=eb4_theme_guide&wr_id=36</a></small></h5>
                                    <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/theme_main_05.jpg" class="img-responsive"></div>
                                    <ul class="list-unstyled">
                                        <li>&middot; 이윰빌더에서 제공하는 분류 상품 출력 스킨입니다.</li>
                                        <li>&middot; 아이템에 출력할 분류(카테고리)등록하며 아이템별로 탭이 추가됩니다.</li>
                                        <li>&middot; 대표 연결주소 입력시 탭 하단에 'More show' 버튼 링크 출력됩니다.</li>
                                        <li>&middot; /theme/eb4_shop_003/skin/ebgoods/shop003_gallery_tabs/ebgoods.skin.html.php</li>
                                    </ul>
                                </li>
                                <li>
                                    <h5>Brand By Categories(EB콘텐츠)</h5>
                                    <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/theme_main_06.jpg" class="img-responsive"></div>
                                    <ul class="list-unstyled">
                                        <li>&middot; 배경이미지는 'EB콘텐츠 마스터 이미지'에서 등록합니다.</li>
                                        <li>&middot; 이미지 비율 600x800 픽셀 이미지를 등록합니다.</li>
                                        <li>&middot; /theme/eb4_shop_003/skin/ebcontents/shop003_category_banner/ebcontents.skin.html.php</li>
                                    </ul>
                                </li>
                                <li>
                                    <h5>MD's CHOICE(추천상품)</h5>
                                    <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/theme_main_07.jpg" class="img-responsive"></div>
                                    <ul class="list-unstyled">
                                        <li>&middot; 관리자 - 쇼핑몰설정 - 쇼핑몰 초기화면에서 설정합니다.</li>
                                        <li>&middot; 타이틀과 상품유형 변경은 /theme/eb4_shop_003/shop/index.html.php 파일에서 수정합니다.</li>
                                        <li>&middot; /theme/eb4_shop_003/skin/shop/basic/main.20.skin.html.php</li>
                                    </ul>
                                </li>
                                <li>
                                    <h5>슬라이더 배너(EB콘텐츠)</h5>
                                    <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/theme_main_08.jpg" class="img-responsive"></div>
                                    <ul class="list-unstyled">
                                        <li>&middot; 이미지 비율 #1(pc) : 2560x600 / #2(mobile) : 1200x600 픽셀 이미지 등록합니다.</li>
                                        <li>&middot; 텍스트 필드 #2에 span 태그 사용시 노란색 텍스트 출력됩니다.</li>
                                        <li>&middot; /theme/eb4_shop_003/skin/ebcontents/shop003_slider_banner/ebcontents.skin.html.php</li>
                                    </ul>
                                </li>
                                <li>
                                    <h5>NEW ARRIVALS(최신상품)</h5>
                                    <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/theme_main_09.jpg" class="img-responsive"></div>
                                    <ul class="list-unstyled">
                                        <li>&middot; 관리자 - 쇼핑몰설정 - 쇼핑몰 초기화면에서 설정합니다.</li>
                                        <li>&middot; 타이틀과 상품유형 변경은 /theme/eb4_shop_003/shop/index.html.php 파일에서 수정합니다.</li>
                                        <li>&middot; /theme/eb4_shop_003/skin/shop/basic/main.30.skin.html.php</li>
                                    </ul>
                                </li>
                                <li>
                                    <h5>Event By Categories(이벤트)</h5>
                                    <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/theme_main_10.jpg" class="img-responsive"></div>
                                    <ul class="list-unstyled">
                                        <li>&middot; 영카트5에서 제공하는 기본 콘텐츠 입니다. (sir  이벤트 가이드 참고 : <a href="https://sir.kr/manual/yc5/130" target="_blank">https://sir.kr/manual/yc5/130</a>)</li>
                                        <li>&middot; 관련상품 및 디자인에서 상품 등록하며 자세한 사항은 영카트5 매뉴얼 참고합니다.</li>
                                        <li>&middot; 출력이미지 폭(500) 높이(0) 설정합니다.</li>
                                        <li>&middot; 이벤트 제목 입력과 배너이미지 등록합니다.</li>
                                        <li>&middot; /theme/eb4_shop_003/skin/shop/basic/boxevent.skin.html.php</li>
                                    </ul>
                                </li>
                                <li>
                                    <h5>BARGAIN SALE(할인상품)</h5>
                                    <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/theme_main_11.jpg" class="img-responsive"></div>
                                    <ul class="list-unstyled">
                                        <li>&middot; 관리자 - 쇼핑몰설정 - 쇼핑몰 초기화면에서 설정합니다.</li>
                                        <li>&middot; 타이틀과 상품유형 변경은 /theme/eb4_shop_003/shop/index.html.php 파일에서 수정합니다.</li>
                                        <li>&middot; /theme/eb4_shop_003/skin/shop/basic/main.50.skin.html.php</li>
                                    </ul>
                                </li>
                                <li>
                                    <h5>Footer(하단 레이아웃)</h5>
                                    <div class="img-box"><img src="<?php echo EYOOM_THEME_PAGE_URL; ?>/img/manual/theme_main_12.jpg" class="img-responsive"></div>
                                    <ul class="list-unstyled">
                                        <li>&middot; Footer 배경 이미지는 /theme/eb4_shop_003/shop/shop.tail.html.php 파일 footer에서 수정하며 그외 편집모드 외 출력부분은 파일에서 수정합니다.</li>
                                        <li>&middot; 소셜 아이콘 스킨 /theme/eb4_shop_003/skin/ebcontents/shop003_sns_link/ebcontents.skin.html.php</li>
                                        <li>&middot; 패밀리 사이트 스킨 /theme/eb4_shop_003/skin/ebcontents/shop003_family_site/ebcontents.skin.html.php</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade in" id="tab-bg-default-5">
                        <?php /* 테마 패치내역 */ ?>
                        <div class="theme-patch">
                            <h3><span class="title-bar"></span> 테마 패치내역</h3>
                            <p class="margin-bottom-30">테마의 <strong class="color-red">패치내역</strong>을 통해 해당 파일을 업데이트를 합니다. 
                                <br>패치시 사용자가 직접 작업 및 수정한 내용에 대해서는 <strong class="color-red">백업</strong>을 한 후 진행하기 바랍니다.
                            </p>
                            
                            <div class="patch-list">
	                            <h5>버전 1.2.0 (2021.03.24)</h5>
	                            <ul class="list-unstyled margin-bottom-20">
	                                <li><span>&middot;</span> 이번 패치는 PHP8 관련 패치와 누적된 패치로 테마 전체적으로 작업이 되어 이번 버전은 파일 내역을 따로 제공하지 않습니다.</li>
	                                <li><span>&middot;</span> 테마를 수정하지 않았다면 테마를 덮어쓰기를 하기 바라며 수정한 내역이 있다면 패치 파일과 비교 후 수정하기 바랍니다.</li>
	                                <li><span>&middot;</span> 패치는 파일 백업 후 진행하기 바랍니다.</li>
	                            </ul>
	                            
	                            <h5>버전 1.1.6 (2021.01.28)</h5>
	                            <ul class="list-unstyled margin-bottom-20">
	                                <li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/event.skin.html.php</li>
	                            </ul>
	                            
	                            <h5>버전 1.1.5 </h5>
	                            <ul class="list-unstyled margin-bottom-20">
	                                <li><span>&middot;</span> 이 버전은 패치내역이 없습니다.</li>
	                            </ul>
	                            
                                <h5>버전 1.1.4 (2020.07.15)</h5>
                                <ul class="list-unstyled margin-bottom-20">
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/css/item_style.css</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/css/item_style_nr.css</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/cart.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/search.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/orderform.sub.mobile.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/orderform.sub.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/orderinquiryview.skin.html.php</li>
                                </ul>
                                
                                <h5>버전 1.1.3 (2020.04.06)</h5>
                                <ul class="list-unstyled margin-bottom-20">
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/board/스킨명/view_comment.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/board/스킨명/write.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/board/스킨명/sns.skin.html.php</li>
                                </ul>
                                
                                <h5>버전 1.1.2 (2020.04.03)</h5>
                                <ul class="list-unstyled margin-bottom-20">
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/board/스킨명/view_comment.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/board/스킨명/view.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/board/스킨명/list.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/css/item_style.css</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/css/item_style_nr.css</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/orderform.sub.mobile.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/orderform.sub.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/orderinquiryview.skin.html.php</li>
                                </ul>
                                
                                <h5>버전 1.1.1 (2020.03.17)</h5>
                                <ul class="list-unstyled margin-bottom-20">
									<li><span>&middot;</span> theme/eb4_shop_003/head.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/shop/shop.head.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/board/스킨명/view_comment.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/board/스킨명/write.skin.html.php</li>
                                </ul>
                                
                                <h5>버전 1.1.0 (2020.03.03)</h5>
                                <ul class="list-unstyled margin-bottom-20">
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/board/gallery/list.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/board/webzine/list.skin.html.php</li>
                                </ul>
                                
                                <h5>버전 1.0.7 (2020.03.02)</h5>
                                <ul class="list-unstyled margin-bottom-20">
									<li><span>&middot;</span> theme/eb4_shop_003/head.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/head.sub.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/tail.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/page/tagview.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/shop/index.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/shop/shop.head.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/shop/shop.tail.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/board/basic/list.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/board/basic/view_comment.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/board/basic/write.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/board/gallery/list.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/board/gallery/view_comment.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/board/gallery/write.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/board/webzine/list.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/board/webzine/view_comment.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/board/webzine/write.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/group/basic/group.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/member/basic/formmail.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/member/basic/login.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/member/basic/memo.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/member/basic/memo_form.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/member/basic/memo_view.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/member/basic/scrap_popin.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/move/basic/move.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/mypage/basic/activity.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/mypage/basic/tabmenu.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/new/basic/new.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/outlogin/basic/outlogin.skin.2.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/poll/basic/poll_result.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/qa/basic/answerform.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/qa/basic/list.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/search/basic/search.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/boxwish.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/cart.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/cartoption.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/item.form.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/itemqaform.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/itemrecommend.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/itemuseform.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/mypage.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/orderform.sub.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/orderinquiryview.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/wishlist.skin.html.php</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/css/item_style.css</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/css/item_style_nr.css</li>
									<li><span>&middot;</span> theme/eb4_shop_003/skin/tag/basic/index.skin.html.php</li>
                                </ul>
                                
                                <h5>버전 1.0.6 (2019.12.19)</h5>
                                <ul class="list-unstyled margin-bottom-20">
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/member/basic/register_form.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/boxtodayview.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/itemuse.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/css/item_style.css</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/css/item_style_nr.css</li>
                                </ul>
                                
                                <h5>버전 1.0.5 (2019.08.08)</h5>
                                <ul class="list-unstyled margin-bottom-20">
                                    <li><span>&middot;</span> theme/eb4_shop_003/css/shop-style.css</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/css/shop-style-nr.css</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/js/shop-app.js</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/shop/shop.head.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/shop/shop.tail.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/head.sub.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/head.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/tail.html.php</li>
                                </ul>
                                
                                <h5>버전 1.0.4 (2019.04.02)</h5>
                                <ul class="list-unstyled margin-bottom-20">
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/css/shop_style.css</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/css/style.css</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/shop/shop.head.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/head.html.php</li>
                                </ul>
                                
                                <h5>버전 1.0.3 (2019.03.27)</h5>
                                <ul class="list-unstyled margin-bottom-20">
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/search/basic/search.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/head.html.php</li>
                                </ul>

                                <h5>버전 1.0.2 (2019.03.11)</h5>
                                <ul class="list-unstyled margin-bottom-20">
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/item.info.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/board/basic(gallery,webzine)/write.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/member/basic/login.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/member/basic/social_login.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/member/basic/img/login_sidebar_img.jpg</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/outlogin/basic/social_outlogin.skin.1.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/member/basic/login.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/member/basic/img/login_bg_1.jpg</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/member/basic/img/login_bg_2.jpg</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/member/basic/img/login_sidebar_img.jpg</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/member/basic/social_login.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/member/basic/login.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/page/privacy.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/page/provision.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/member/basic/register.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/search/basic/search.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/css/item_style.css</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/css/item_style_nr.css</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/shop/basic/item.form.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/plugins/fontawesome5</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/search/basic/search.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/plugins/masonry/masonry.pkgd.min.js</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/plugins/perfect-scrollbar/perfect-scrollbar.jquery.min.js</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/plugins/venobox/venobox.css</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/plugins/venobox/venobox.min.js</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/plugins/typed/typed.min.js</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/ranking/basic/ranking.skin.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/signature/basic/signature.skin.html.php</li>
                                </ul>
                                
                                <h5>버전 1.0.1 (2019.3.4)</h5>
                                <ul class="list-unstyled margin-bottom-20">
                                    <li><span>&middot;</span> theme/eb4_shop_003/shop/shop.head.html.php</li>
                                    <li><span>&middot;</span> theme/eb4_shop_003/skin/ebgoods/basic/ebgoods.skin.html.php</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/magnific-popup/magnific-popup.min.js"></script>
<script>
    $(document).ready(function() {
        $('.image-popup-vertical-fit').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            mainClass: 'mfp-img-mobile',
            image: {
                verticalFit: true
            }
        });
        $('.title-tab a').on('click', function(e) {
            e.stopPropagation();
            var scrollTopSpace;
            if (window.innerWidth >= 992) {
                scrollTopSpace = 130;
            } else {
                scrollTopSpace = 130;
            }
            var tabLink = $(this).attr('href');
            var offset = $(tabLink).offset().top;
            $('html, body').animate({scrollTop : offset - scrollTopSpace}, 500);
            return false;
        });
    });
</script>