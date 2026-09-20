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
 * 加密云存事件数据
 *
 * @method string getEventId() 获取<p>事件id</p>
 * @method void setEventId(string $EventId) 设置<p>事件id</p>
 * @method string getThumbnailUrl() 获取<p>缩略图url</p>
 * @method void setThumbnailUrl(string $ThumbnailUrl) 设置<p>缩略图url</p>
 * @method integer getEventStartTime() 获取<p>事件开始时间</p>
 * @method void setEventStartTime(integer $EventStartTime) 设置<p>事件开始时间</p>
 * @method integer getEventEndTime() 获取<p>事件结束时间</p>
 * @method void setEventEndTime(integer $EventEndTime) 设置<p>事件结束时间</p>
 * @method array getVideoList() 获取<p>视频相关信息</p>
 * @method void setVideoList(array $VideoList) 设置<p>视频相关信息</p>
 * @method boolean getIsStaticEvent() 获取<p>是否为图片事件</p><p>枚举值：</p><ul><li>true： 图片事件</li><li>false： 视频事件</li></ul>
 * @method void setIsStaticEvent(boolean $IsStaticEvent) 设置<p>是否为图片事件</p><p>枚举值：</p><ul><li>true： 图片事件</li><li>false： 视频事件</li></ul>
 */
class VodCloudStorageEvent extends AbstractModel
{
    /**
     * @var string <p>事件id</p>
     */
    public $EventId;

    /**
     * @var string <p>缩略图url</p>
     */
    public $ThumbnailUrl;

    /**
     * @var integer <p>事件开始时间</p>
     */
    public $EventStartTime;

    /**
     * @var integer <p>事件结束时间</p>
     */
    public $EventEndTime;

    /**
     * @var array <p>视频相关信息</p>
     */
    public $VideoList;

    /**
     * @var boolean <p>是否为图片事件</p><p>枚举值：</p><ul><li>true： 图片事件</li><li>false： 视频事件</li></ul>
     */
    public $IsStaticEvent;

    /**
     * @param string $EventId <p>事件id</p>
     * @param string $ThumbnailUrl <p>缩略图url</p>
     * @param integer $EventStartTime <p>事件开始时间</p>
     * @param integer $EventEndTime <p>事件结束时间</p>
     * @param array $VideoList <p>视频相关信息</p>
     * @param boolean $IsStaticEvent <p>是否为图片事件</p><p>枚举值：</p><ul><li>true： 图片事件</li><li>false： 视频事件</li></ul>
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("ThumbnailUrl",$param) and $param["ThumbnailUrl"] !== null) {
            $this->ThumbnailUrl = $param["ThumbnailUrl"];
        }

        if (array_key_exists("EventStartTime",$param) and $param["EventStartTime"] !== null) {
            $this->EventStartTime = $param["EventStartTime"];
        }

        if (array_key_exists("EventEndTime",$param) and $param["EventEndTime"] !== null) {
            $this->EventEndTime = $param["EventEndTime"];
        }

        if (array_key_exists("VideoList",$param) and $param["VideoList"] !== null) {
            $this->VideoList = [];
            foreach ($param["VideoList"] as $key => $value){
                $obj = new VideoList();
                $obj->deserialize($value);
                array_push($this->VideoList, $obj);
            }
        }

        if (array_key_exists("IsStaticEvent",$param) and $param["IsStaticEvent"] !== null) {
            $this->IsStaticEvent = $param["IsStaticEvent"];
        }
    }
}
