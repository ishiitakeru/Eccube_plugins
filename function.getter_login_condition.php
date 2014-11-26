<?php

/**
 * ログイン状態を取得するクラス。
 * 
 * @author ISHII Takeru
 */
function smarty_function_getter_login_condition($params, &$smarty){

	// transactionid取得
	$transactionId = SC_Helper_Session_Ex::getToken();

	// ログイン判定
	$objCustomer = new SC_Customer();
	if($objCustomer->isLoginSuccess()){
		//ログイン済み
		//テンプレート側で使える変数作成
		$smarty->assign("is_logged_in", true);
	}else{
		//非ログイン
		//テンプレート側で使える変数作成
		$smarty->assign("is_logged_in", false);
	}//if
}//function

/*
//tpl側の書き方の想定
//まず、ログイン状態を示す変数 $is_logged_in の作成のために一行の命令が必要。
<!--ログイン状態の取得（$is_logged_inの作成）-->
<!--{getter_login_condition}-->

//しかるのち、$is_logged_in がif文判定で使える
<!--{if $is_logged_in}-->
	<!--ログイン時の処理-->
<!--{else}-->
	<!--非ログイン時の処理-->
<!--{/if}-->
*/
