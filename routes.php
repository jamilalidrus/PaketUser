<?php

	Route::get("form-login","LoginController@form");
	Route::post("proses-login","LoginController@proses");

	Route::group(array("middleware"=>"auth"),function(){
		Route::get("keluar","LoginController@keluar");

	});
?>