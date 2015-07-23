<?php

error_reporting(E_ALL);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
date_default_timezone_set('Asia/Shanghai');

define('ROOT', dirname(__FILE__));

require(ROOT . '/libs/smarty/Smarty.class.php');

$MIMEType = array(
    'bmp' => 'image/bmp',
    'css' => 'text/css',
    'doc' => 'application/msword',
    'dtd' => 'text/xml',
    'gif' => 'image/gif',
    'hta' => 'application/hta',
    'htc' => 'text/x-component',
    'htm' => 'text/html',
    'html' => 'text/html',
    'xhtml' => 'text/html',
    'ico' => 'image/x-icon',
    'jpe' => 'image/jpeg',
    'jpeg' => 'image/jpeg',
    'jpg' => 'image/jpeg',
    'js' => 'text/javascript',
    'json' => 'application/json',
    'mocha' => 'text/javascript',
    'mp3' => 'audio/mp3',
    'mp4' => 'video/mpeg4',
    'mpeg' => 'video/mpg',
    'mpg' => 'video/mpg',
    'manifest' => 'text/cache-manifest',
    'pdf' => 'application/pdf',
    'png' => 'image/png',
    'ppt' => 'application/vnd.ms-powerpoint',
    'rmvb' => 'application/vnd.rn-realmedia-vbr',
    'rm' => 'application/vnd.rn-realmedia',
    'rtf' => 'application/msword',
    'svg' => 'image/svg+xml',
    'swf' => 'application/x-shockwave-flash',
    'tif' => 'image/tiff',
    'tiff' => 'image/tiff',
    'txt' => 'text/plain',
    'vml' => 'text/xml',
    'vxml' => 'text/xml',
    'wav' => 'audio/wav',
    'wma' => 'audio/x-ms-wma',
    'wmv' => 'video/x-ms-wmv',
    'woff' => 'image/woff',
    'xml' => 'text/xml',
    'xls' => 'application/vnd.ms-excel',
    'xq' => 'text/xml',
    'xql' => 'text/xml',
    'xquery' => 'text/xml',
    'xsd' => 'text/xml',
    'xsl' => 'text/xml',
    'xslt' => 'text/xml'
);

$uri = $_SERVER['REQUEST_URI'];

$script = preg_replace('@\?.*@', '', $uri);

if ((preg_match('@\.([a-z]+)@i', $script, $m))) {
    $ext = $m[1];
    if (isset($MIMEType[$ext])) {
        header('Content-Type: ' . $MIMEType[$ext]);
    }
    if (file_exists(ROOT . $script)) {
        echo file_get_contents(ROOT . $script);
        exit(0);
    }
}
$smarty = new Smarty();
$smarty->setPluginsDir(array(
    ROOT . '/libs/smarty/plugins',
    ROOT . '/libs/smarty/fis-plus-smarty-plugin'
));
$smarty->setTemplateDir(ROOT . '/view/template');
$smarty->setCompileDir(ROOT . '/view/templates_c');
$smarty->setConfigDir(ROOT . '/libs/smarty/config');
$smarty->left_delimiter = "{%";
$smarty->right_delimiter = "%}";

$data = array();
$data['name'] = 'kenny';
$data['id'] = '123';
$data['title'] = 'haha';

$smarty->assign('data',$data);

$smarty->display('index/page/index.tpl');


