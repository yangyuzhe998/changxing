<?php
/**
 * 百度链接自动推送脚本
 */

// 配置信息
$site = 'https://www.kaijuyuan.xin';
$token = 'f0v0BH6GTRfh1nGH';
$api = "http://data.zz.baidu.com/urls?site={$site}&token={$token}";

// 待推送的链接
$urls = [
    'https://www.kaijuyuan.xin/',
    'https://www.kaijuyuan.xin/index.html',
    'https://kaijuyuan.xin/',
    'https://kaijuyuan.xin/index.html'
];

// 将链接组成字符串，每行一条
$urls_data = implode("\n", $urls);

// 执行推送
$ch = curl_init();
$options = array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
    CURLOPT_POSTFIELDS => $urls_data,
    CURLOPT_CONNECTTIMEOUT => 30,
    CURLOPT_TIMEOUT => 30
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
curl_close($ch);

// 输出结果
echo "推送结果：\n";
echo $result;
?> 