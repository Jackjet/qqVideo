<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as' => 'video.index', 'uses' => 'Video@index']);
Route::get('/g/{id}/{page?}', ['as' => 'video.category', 'uses' => 'Video@category']);
Route::get('/v/{id}/{infoId?}', ['as' => 'video.info', 'uses' => 'Video@info']);
Route::get('/s/{title?}/{page?}', ['as' => 'video.search', 'uses' => 'Video@search']);
Route::get('/t/{id}', ['as' => 'video.getThumb', 'uses' => 'Video@getThumb']);

Auth::routes();
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function (){
    Route::get('index', ['as' => 'Index.index', 'uses' => 'Index@index']);
    Route::post('saveVideo', ['as' => 'Album.saveVideo', 'uses' => 'Album@saveVideo']);
    Route::get('deleteVideo/{id?}', ['as' => 'Album.deleteVideo', 'uses' => 'Album@deleteVideo']);
    Route::get('queue/{id}', ['as' => 'Album.queue', 'uses' => 'Album@queue']);
    Route::resource('Album', 'Album');
});
Route::get('/test', function(){
    $url = 'https://h5vv.video.qq.com/getinfo?callback=c&&otype=json&platform=11001&vid=k0024e4fiml';
    $client = new \GuzzleHttp\Client();
    $request = $client->get($url, [
        'verify' => false
    ]);
    $body = mb_substr($request->getBody()->getContents(), 2, -1);
    dd(json_decode($body));
});
Route::get('/test1', function(){
    $url = 'http://list.iqiyi.com/www/2/-------------11-30-1-iqiyi--.html';
    $dom = phpQuery::newDocumentFile($url);
    $list = $dom->find('.site-piclist li');
    $lastPage = $dom->find('.mod-page span:eq(1)')->text();
    foreach ($list as $item){
        $map = pq($item);
        $status = \App\Models\SpAlbum::StatusEd;
        $albumsStatus = $map->find('p.viedo_rb span')->text();
        if(strpos($albumsStatus, '更新至') !== false){
            $status = \App\Models\SpAlbum::StatusIng;
        }
        $data[] = [
            'title' => $map->find('a')->attr('title'),
            'source_url' => $map->find('a')->attr('href'),
            'type_id' => 1,
            'parse_type' => 'iqiyi',
            'status' => $status
        ];
    }
    dd($lastPage,$data);
});
Route::get('test2', function(){
    $url = 'http://www.iqiyi.com/v_19rrn8nkc4.html';
    $dom = phpQuery::newDocumentFile($url);
    $list = $dom->find('li[data-videolist-tvid]');
    dd($list->length);
});
Route::get('test3', function(\Illuminate\Http\Request $request){
    return view('test.video', ['url' => $request->input('url')]);
});