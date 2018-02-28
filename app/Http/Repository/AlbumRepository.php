<?php
/**
 * Created by IntelliJ IDEA.
 * User: tingfeng
 * Date: 2018/2/27
 * Time: 20:47
 */

namespace App\Http\Repository;


use App\Models\Album;

class AlbumRepository extends BaseRepository
{
    public $id;
    public $title;
    public $subTitle;
    public $typeId;
    public $parseTypeId;
    public $totalNum;
    public $year;
    public $aera;
    public $language;
    public $descript;
    public $remark;
    public $updateTimeStr;
    public $hit;
    public $grade;
    public $sort;
    public $updateStatus;
    public $status;

    const Update_Status_Serial = 1;
    const Update_Status_Finish = 2;
    const Update_Status_Trailer = 3;

    const Status_Yes = 1;
    const Status_No = 2;

    public function __construct(Album $model)
    {
        parent::__construct($model);
    }

    /**
     * 创建数据
     * @return mixed
     */
    public function create()
    {
        $result = $this->getModel()->create([
            'title' => $this->title,
            'sub_title' => $this->subTitle,
            'type_id' => $this->typeId,
            'parse_type_id' => $this->parseTypeId,
            'total_num' => $this->totalNum,
            'year' => $this->year,
            'aera' => $this->aera,
            'language' => $this->language,
            'descript' => $this->descript,
            'remark' => $this->remark,
            'update_time_str' => $this->updateTimeStr,
            'hit' => 0,
            'grade' => $this->grade,
            'sort' => $this->sort,
            'update_status' => $this->updateStatus,
            'status' => $this->status,
        ]);
        return $result;
    }

    /**
     * 获取数据
     * @return mixed
     */
    public function getList()
    {
        $result = $this->getModel()->where(function ($query){
            if(!is_null($this->title)){
                $query->where('title', $this->title);
            }
            if(!is_null($this->typeId)){
                $query->where('type_id', $this->typeId);
            }
            if(!is_null($this->parseTypeId)){
                $query->where('parse_type_id', $this->parseTypeId);
            }
            if(!is_null($this->updateStatus)){
                $query->where('update_status', $this->updateStatus);
            }
            if(!is_null($this->updateStatus)){
                $query->where('update_status', $this->updateStatus);
            }
        })->orderBy('id', 'desc');
        return $result;
    }

    /**
     * 查找数据
     * @return mixed
     */
    public function find()
    {
        $result = $this->getModel()->where(function ($query){
            if(!is_null($this->id)){
                $query->where('id', $this->id);
            }
            if(!is_null($this->title)){
                $query->where('title', $this->title);
            }
            if(!is_null($this->typeId)){
                $query->where('type_id', $this->typeId);
            }
            if(!is_null($this->parseTypeId)){
                $query->where('parse_type_id', $this->parseTypeId);
            }
            if(!is_null($this->updateStatus)){
                $query->where('update_status', $this->updateStatus);
            }
            if(!is_null($this->updateStatus)){
                $query->where('update_status', $this->updateStatus);
            }
        })->first();
        return $result;
    }

    /**
     * 更新数据
     * @return mixed
     */
    public function save()
    {
        $album = $this->getModel()->find($this->id);
        $album->title = $this->title;
        $album->sub_title = $this->subTitle;
        $album->type_id = $this->typeId;
        $album->parse_type_id = $this->parseTypeId;
        $album->total_num = $this->totalNum;
        $album->year = $this->year;
        $album->aera = $this->aera;
        $album->language = $this->language;
        $album->descript = $this->descript;
        $album->remark = $this->remark;
        $album->update_time_str = $this->updateTimeStr;
        //$album->hit = $this->hit;
        $album->grade = $this->grade;
        $album->sort = $this->sort;
        $album->update_status = $this->updateStatus;
        $album->status = $this->status;
        return $album->save();
    }
}