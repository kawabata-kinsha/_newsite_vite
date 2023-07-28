<?php
ini_set('display_errors', "On");
/* ------------------------------------------------
テンプレートフォルダのパス
--------------------------------------------------- */
$path = dirname(__FILE__).'/';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);


/* ------------------------------------------------
メタ情報
--------------------------------------------------- */
//サイト名
$siteTitle = "";

//サイト説明文
$siteDescription = "";

//キーワード
$siteKeywords = "";


/* ------------------------------------------------
ルートフォルダ設定
--------------------------------------------------- */
$root = ""; // rootフォルダを設定する場合は先頭に/をつける ex) /root


/* ------------------------------------------------
vite設定
--------------------------------------------------- */
//dev環境のパス
$vite_dev_path = 'http://127.0.0.1:5173';

//inputのパス
$vite_input_ts = 'src/ts/main.ts';
$vite_input_scss = 'src/scss/style.scss';

//manifest.jsonの取得
$vite_manifest_url = $path . "../assets/dist/manifest.json";
$vite_manifest_json = file_get_contents($vite_manifest_url);
$vite_manifest_ary = json_decode($vite_manifest_json,TRUE);

//dev環境の判定
$vite_dev_context = stream_context_create(array(
    'http' => array('ignore_errors' => true)
));
$vite_dev_standing = @fopen($vite_dev_path . '/@vite/client', 'r');



?>