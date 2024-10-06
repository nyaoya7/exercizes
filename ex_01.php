<?php
/*** 課題1 */
$var1 = 'Hello'; // 課題1-1
$var2 = 100;     // 課題1-2
$var3 = $var1;   // 課題1-3
echo $var3;      // 'Hello' と出力される

$var1 = 'World'; // 課題1-4
echo $var3;      // 値を渡しているため、'Hello'と出力される

/*** 課題2
大文字と小文字を区別する
*/

$var4 = 'small character';
$VAR4 = 'big character';
echo $var4, $VAR4;

/*** 課題3
 * $123a および $123A のみ定義不可
 * 数字で始まっているため
 * 下記変数は、'syntax error' にならない
 */
$ABC  = 1;
$a123 = 2;
$A123 = 3;
$_abc = 6;
$abc_ = 7;
$abc_123 = 8;

// 以上、根拠
// https://www.php.net/manual/ja/language.variables.basics.php

/*** 課題4
 * 年齢　$user_age
 * 住所　$user_address
 * [理由]
 * 小文字で単語を '_'　で接続する
 * PHPでは、スネークケースを使用するため
 * https://terakoya.sejuku.net/programs/76/chapters/904
 */

$user_age = 50;
$user_address = '京都府';

?>

