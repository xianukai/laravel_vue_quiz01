<?php
Route::group(['middleware' => ['api']], function () {
  Route::get('information', 'Api\InformationController@index');
  Route::get('category', 'Api\CategoryController@index');
  Route::get('quiz', 'Api\QuizController@index');
  Route::get('ranking', 'Api\RankingController@index');
  Route::get('keyword', 'Api\KeywordController@index');
  Route::middleware('auth:api')->get('/mypage', 'Api\MypageController@index');
});
