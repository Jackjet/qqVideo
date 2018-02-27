<?php
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => 'authGuest:user,admin'], function () {
    Route::get('login', 'LoginController@login')->name('login');
    Route::post('loginVerify', 'LoginController@loginVerify')->name('loginVerify');
});
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => 'authGuard:user,admin'], function (){
    //首页
    Route::group(['as' => 'index.'], function (){
        Route::get('index', 'IndexController@index')->name('index');
        Route::get('getLeftMenu', 'IndexController@getLeftMenu')->name('getLeftMenu');
        Route::get('welcome', 'IndexController@welcome')->name('welcome');
        Route::get('outLogin', 'IndexController@outLogin')->name('outLogin');
    });
    //专辑
    Route::group(['prefix' => 'album', 'as' => 'album.'], function (){
        Route::post('submitQuery', 'AlbumController@submitQuery')->name('submitQuery');
    });
    Route::resource('album', 'AlbumController');
    //视频
    Route::group(['prefix' => 'video', 'as' => 'video.'], function (){
        Route::post('submitQuery', 'VideoController@submitQuery')->name('submitQuery');
    });
    Route::resource('video', 'VideoController');
    //会员
    Route::group(['prefix' => 'member', 'as' => 'member.'], function (){
        Route::post('submitQuery', 'MemberController@submitQuery')->name('submitQuery');
    });
    Route::resource('member', 'MemberController');
    //类型
    Route::group(['prefix' => 'type', 'as' => 'type.'], function (){
        Route::post('submitQuery', 'TypeController@submitQuery')->name('submitQuery');
    });
    Route::resource('type', 'TypeController');
    //缩略图
    Route::group(['prefix' => 'thumb', 'as' => 'thumb.'], function (){
        Route::post('submitQuery', 'ThumbController@submitQuery')->name('submitQuery');
    });
    Route::resource('thumb', 'ThumbController');
    //解析类型
    Route::group(['prefix' => 'parseType', 'as' => 'parseType.'], function (){
        Route::post('submitQuery', 'ParseTypeController@submitQuery')->name('submitQuery');
    });
    Route::resource('parseType', 'ParseTypeController');
    //视频标签
    Route::group(['prefix' => 'videoTag', 'as' => 'videoTag.'], function (){
        Route::post('submitQuery', 'VideoTagController@submitQuery')->name('submitQuery');
    });
    Route::resource('videoTag', 'VideoTagController');
    //标签
    Route::group(['prefix' => 'tag', 'as' => 'tag.'], function (){
        Route::post('submitQuery', 'TagController@submitQuery')->name('submitQuery');
    });
    Route::resource('tag', 'TagController');
    //演员、导演
    Route::group(['prefix' => 'actor', 'as' => 'actor.'], function (){
        Route::post('submitQuery', 'ActorController@submitQuery')->name('submitQuery');
    });
    Route::resource('actor', 'ActorController');
    //会员观看记录
    Route::group(['prefix' => 'memberWatchRecord', 'as' => 'memberWatchRecord.'], function (){
        Route::post('submitQuery', 'MemberWatchRecordController@submitQuery')->name('submitQuery');
    });
    Route::resource('memberWatchRecord', 'MemberWatchRecordController');
    //文章
    Route::group(['prefix' => 'article', 'as' => 'article.'], function (){
        Route::post('submitQuery', 'ArticleController@submitQuery')->name('submitQuery');
    });
    Route::resource('article', 'ArticleController');
});