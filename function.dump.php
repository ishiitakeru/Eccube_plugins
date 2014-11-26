<?php

/**
 * 引数の配列をvar_dump()する。
 * 
 * @author ISHII Takeru
 */
function smarty_function_dump($params, &$smarty){
	//引数は連想配列「$params」で受け取っている
	$target_array = $params["target_array"];
	var_dump($target_array);

}//function

/*
//tpl側の書き方の想定
<!--{dump target_array=$array}-->

//このファイルの置き場所
//\data\module\Smarty\libs\plugins
*/
