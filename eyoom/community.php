<?php
/**
 * file : /eyoom/index.php
 */
define('_INDEX_', true);

/**
 * 개별페이지 접근 불가
 */
if (!defined('_EYOOM_')) exit;


/**
 * 헤더 디자인 출력
 */
include_once(EYOOM_PATH . '/head.php');

/**
 * 메인 디자인 출력
 */
$eb->print_mainpage();

/**
 * 이윰 테마파일 출력
 */
include_once(EYOOM_PATH . '/tail.php');