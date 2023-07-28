<?php

/* ------------------------------------------------
フォルダショートカット
--------------------------------------------------- */
$rootImg = $root . "/assets/img";
$commonImg = $rootImg . "/common";

$categoryImg = $rootImg . '/' . $categoryName;
$categoryCommonImg = $rootImg . '/' . $categoryName . '/common';
$pageImg = $rootImg . '/' . $categoryName . '/' . $pageName;


/* ------------------------------------------------
vite設定用
--------------------------------------------------- */
//manifest.jsonの取得
$vite_manifest_json = file_get_contents($vite_manifest_url);
$vite_manifest_ary = json_decode($vite_manifest_json,TRUE);

//dev環境の判定
$vite_dev_standing = @fopen($vite_dev_path . '/@vite/client', 'r');


/* ------------------------------------------------
その他
--------------------------------------------------- */
$isCommon = true;

?>