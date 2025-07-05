<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云存事件及其关联的云存 AI 任务
 *
 * @method integer getStartTime() 获取事件起始时间（Unix 时间戳，秒级
 * @method void setStartTime(integer $StartTime) 设置事件起始时间（Unix 时间戳，秒级
 * @method integer getEndTime() 获取事件结束时间（Unix 时间戳，秒级
 * @method void setEndTime(integer $EndTime) 设置事件结束时间（Unix 时间戳，秒级
 * @method string getThumbnail() 获取事件缩略图
 * @method void setThumbnail(string $Thumbnail) 设置事件缩略图
 * @method string getEventId() 获取事件ID
 * @method void setEventId(string $EventId) 设置事件ID
 * @method string getUploadStatus() 获取事件录像上传状态，Finished: 全部上传成功 Partial: 部分上传成功 Failed: 上传失败	
 * @method void setUploadStatus(string $UploadStatus) 设置事件录像上传状态，Finished: 全部上传成功 Partial: 部分上传成功 Failed: 上传失败	
 * @method string getData() 获取事件自定义数据	
 * @method void setData(string $Data) 设置事件自定义数据	
 * @method array getAITasks() 获取事件关联的云存 AI 任务列表
 * @method void setAITasks(array $AITasks) 设置事件关联的云存 AI 任务列表
 */
class CloudStorageEventWithAITasks extends AbstractModel
{
    /**
     * @var integer 事件起始时间（Unix 时间戳，秒级
     */
    public $StartTime;

    /**
     * @var integer 事件结束时间（Unix 时间戳，秒级
     */
    public $EndTime;

    /**
     * @var string 事件缩略图
     */
    public $Thumbnail;

    /**
     * @var string 事件ID
     */
    public $EventId;

    /**
     * @var string 事件录像上传状态，Finished: 全部上传成功 Partial: 部分上传成功 Failed: 上传失败	
     */
    public $UploadStatus;

    /**
     * @var string 事件自定义数据	
     */
    public $Data;

    /**
     * @var array 事件关联的云存 AI 任务列表
     */
    public $AITasks;

    /**
     * @param integer $StartTime 事件起始时间（Unix 时间戳，秒级
     * @param integer $EndTime 事件结束时间（Unix 时间戳，秒级
     * @param string $Thumbnail 事件缩略图
     * @param string $EventId 事件ID
     * @param string $UploadStatus 事件录像上传状态，Finished: 全部上传成功 Partial: 部分上传成功 Failed: 上传失败	
     * @param string $Data 事件自定义数据	
     * @param array $AITasks 事件关联的云存 AI 任务列表
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Thumbnail",$param) and $param["Thumbnail"] !== null) {
            $this->Thumbnail = $param["Thumbnail"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("UploadStatus",$param) and $param["UploadStatus"] !== null) {
            $this->UploadStatus = $param["UploadStatus"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("AITasks",$param) and $param["AITasks"] !== null) {
            $this->AITasks = [];
            foreach ($param["AITasks"] as $key => $value){
                $obj = new CloudStorageAIServiceTask();
                $obj->deserialize($value);
                array_push($this->AITasks, $obj);
            }
        }
    }
}
