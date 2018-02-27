<?php

namespace App\Jobs;

use App\Models\Album;
use App\Models\Video;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class YoukuOne implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $tries = 2;
    public $map;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($map)
    {
        $this->map = $map;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try{
            $dom = \phpQuery::newDocumentFile($this->map['source_url']);
        }catch (\Exception $e){
            Log::info("请求出错, title:".$this->map['title'].",id:".$this->map['id'].",url:".$this->map['source_url']);
            self::dispatch($this->map);
            return false;
        }
        $find = Album::find($this->map['id']);
        if(is_null($find)){
            return false;
        }
        $keywords = $dom->find('meta[name="keywords"]')->attr("content");
        $description = $dom->find('meta[name="description"]')->attr("content");
        $find->tags = $keywords;
        $find->descript = Album::trimall($description);
        $find->save();
        if($this->map['type_id'] == Album::TypeMovie){
            $map = [
                'source_url' => $this->map['source_url'],
                'albums_id' => $find->id
            ];
            $info = Video::where($map)->first();
            if(is_null($info)){
                Video::create($map);
                $find->total_num += 1;
                $find->save();
                Log::info("id:".$find->id.",total_num:".$find->total_num);
            }
        }else if($this->map['type_id'] == Album::TypeTv){
            $listDom = $dom->find('div[name="tvlist"]');
            $count = $listDom->count();
            for($i = 1; $i <= $count; $i++){
                $map = pq($listDom->eq($count-$i));
                $isPre = $map->find('a .sn_ispreview');
                if($isPre->length == 0){
                    $href = $map->find('a')->attr('href');
                    $url = (strpos($href, 'http') === false)?('http:'.$href):$href;
                    $map = [
                        'source_url' => $url,
                        'title' => $map->find('a')->text(),
                        'albums_id' => $find->id
                    ];
                    $info = Video::where($map)->first();
                    if(is_null($info)){
                        Video::create($map);
                        $find->total_num += 1;
                        $find->save();
                        Log::info("id:".$find->id.",total_num:".$find->total_num);
                    }
                }
            }
        }else if($this->map['type_id'] == Album::TypeDm){
            $listDom = $dom->find('div.lists>div.items>li');
            $count = $listDom->count();
            for($i = 1; $i <= $count; $i++){
                $map = pq($listDom->eq($count-$i));
                $isPre = $map->find('a .sn_ispreview');
                if($isPre->length == 0){
                    $href = $map->find('a')->attr('href');
                    $url = (strpos($href, 'http') === false)?('http:'.$href):$href;
                    $subTitle = $map->find('a .l_serial label')->text();
                    $title = ($subTitle < 10)?('0'.$subTitle):$subTitle;
                    $map = [
                        'source_url' => $url,
                        'title' => $title,
                        'albums_id' => $find->id
                    ];
                    $info = Video::where($map)->first();
                    if(is_null($info)){
                        Video::create($map);
                        $find->total_num += 1;
                        $find->save();
                        Log::info("id:".$find->id.",total_num:".$find->total_num);
                    }
                }
            }
        }
    }
}
