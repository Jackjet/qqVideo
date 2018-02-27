<?php
Route::get('/test', function(){
    $url = 'https://h5vv.video.qq.com/getinfo?callback=c&&otype=json&platform=11001&vid=k0024e4fiml';
    $client = new \GuzzleHttp\Client();
    $request = $client->get($url, [
        'verify' => false
    ]);
    $body = mb_substr($request->getBody()->getContents(), 2, -1);
    dd(json_decode($body));
});
Route::get('test3', function(\Illuminate\Http\Request $request){
    return view('test.video', ['url' => $request->input('url')]);
});