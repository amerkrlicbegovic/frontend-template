<?php
// Classes
include_once 'MobileDetect.php';

// Uri
$type = isset($_GET['type']) ? $_GET['type'] : 'none';
$pager = isset($_GET['pager']) ? $_GET['pager'] : 1;

// Vars
$body_class = '';

// Switch
switch ($page) {
    case 'homepage':
        $body_class = 'homepage';
        break;
    case 'contact':
        $body_class = 'contact-page';
        break;
    case 'news-list':
        $body_class = 'news-page';
    case 'about-us':
        $body_class = 'static-page';
        break;
    case 'locations':
        $body_class = 'locations-page';
        break;
}

/**
 * Now.
 *
 * @return \DateTime
 * @throws \Exception
 */
function now() {
    return new DateTime('now', new DateTimeZone('Europe/Sarajevo'));
}

/**
 * Add days
 * @param int $days
 * @return \DateTime
 * @throws \Exception
 */
function add_days($days = 1) {
    $date = now();
    
    return $date->add(new DateInterval("P{$days}D"));
}

/**
 * Check is device mobile device.
 *
 * @return boolean
 */
function isMobile()
{
    return (new MobileDetect())->isMobile();
}

/**
 * Check is device tablet device.
 *
 * @return boolean
 */
function isTablet()
{
    return (new MobileDetect())->isTablet();
}

/**
 * Check is device mobile or tablet device.
 *
 * @return boolean
 */
function isMobileOrTablet()
{
    return isMobile() || isTablet();
}