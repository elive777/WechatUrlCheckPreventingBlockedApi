<?php
include_once 'src/businiao.lib/businiao.lib.php';
$appid='12345678';
$appkey='GetAppKeyAtThe:https://www.v94.cn';

/**
 * 返回code代码汇总：http://api.v94.cn/web/#/1?page_id=1
 * 本案例做了3个功能
 * 1.微信url检测状态
 * 2.获取微信短网址
 * 3.获取微博短网址
 * */
$url='https://www.baidu.com';
/**微信url检测状态
 * api详细帮助：http://api.v94.cn/web/#/1?page_id=2
 * 
 * */
$UrlCheck_result=(new UrlCheck($appid,$appkey))->get($url);
print_r(json_decode($UrlCheck_result,true));

/**获取微信短网址
 * http://api.v94.cn/web/#/1?page_id=9
 * */
$GetWechatShortUrl_result=(new GetWechatShortUrl($appid,$appkey))->get($url);
print_r(json_decode($GetWechatShortUrl_result,true));

/**获取微博短网址
 * 
 * http://api.v94.cn/web/#/1?page_id=8
 * **/
$GetWeiboShortUrl_result=(new GetWeiboShortUrl($appid,$appkey))->get($url);
print_r(json_decode($GetWeiboShortUrl_result,true));