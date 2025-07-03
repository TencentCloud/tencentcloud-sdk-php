<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 视频语义搜索结果
 *
 * @method string getId() 获取视频唯一ID
 * @method void setId(string $Id) 设置视频唯一ID
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method integer getStartTimeMs() 获取视频起始时间（毫秒级Unix时间戳）
 * @method void setStartTimeMs(integer $StartTimeMs) 设置视频起始时间（毫秒级Unix时间戳）
 * @method integer getEndTimeMs() 获取视频结束时间（毫秒级Unix时间戳）
 * @method void setEndTimeMs(integer $EndTimeMs) 设置视频结束时间（毫秒级Unix时间戳）
 * @method string getEventId() 获取用户自定义事件ID，后续扩展使用
 * @method void setEventId(string $EventId) 设置用户自定义事件ID，后续扩展使用
 * @method string getSummary() 获取视频内容摘要
 * @method void setSummary(string $Summary) 设置视频内容摘要
 * @method integer getChannelId() 获取通道ID
 * @method void setChannelId(integer $ChannelId) 设置通道ID
 * @method string getThumbnail() 获取缩略图路径
 * @method void setThumbnail(string $Thumbnail) 设置缩略图路径
 */
class TargetInfo extends AbstractModel
{
    /**
     * @var string 视频唯一ID
     */
    public $Id;

    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var integer 视频起始时间（毫秒级Unix时间戳）
     */
    public $StartTimeMs;

    /**
     * @var integer 视频结束时间（毫秒级Unix时间戳）
     */
    public $EndTimeMs;

    /**
     * @var string 用户自定义事件ID，后续扩展使用
     */
    public $EventId;

    /**
     * @var string 视频内容摘要
     */
    public $Summary;

    /**
     * @var integer 通道ID
     */
    public $ChannelId;

    /**
     * @var string 缩略图路径
     */
    public $Thumbnail;

    /**
     * @param string $Id 视频唯一ID
     * @param string $ProductId 产品ID
     * @param string $DeviceName 设备名称
     * @param integer $StartTimeMs 视频起始时间（毫秒级Unix时间戳）
     * @param integer $EndTimeMs 视频结束时间（毫秒级Unix时间戳）
     * @param string $EventId 用户自定义事件ID，后续扩展使用
     * @param string $Summary 视频内容摘要
     * @param integer $ChannelId 通道ID
     * @param string $Thumbnail 缩略图路径
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("StartTimeMs",$param) and $param["StartTimeMs"] !== null) {
            $this->StartTimeMs = $param["StartTimeMs"];
        }

        if (array_key_exists("EndTimeMs",$param) and $param["EndTimeMs"] !== null) {
            $this->EndTimeMs = $param["EndTimeMs"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("Thumbnail",$param) and $param["Thumbnail"] !== null) {
            $this->Thumbnail = $param["Thumbnail"];
        }
    }
}
