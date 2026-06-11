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
 * 视频语义搜索结果
 *
 * @method string getId() 获取<p>视频唯一ID</p>
 * @method void setId(string $Id) 设置<p>视频唯一ID</p>
 * @method string getProductId() 获取<p>产品ID</p>
 * @method void setProductId(string $ProductId) 设置<p>产品ID</p>
 * @method string getDeviceName() 获取<p>设备名称</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备名称</p>
 * @method integer getStartTimeMs() 获取<p>视频起始时间（毫秒级Unix时间戳）</p>
 * @method void setStartTimeMs(integer $StartTimeMs) 设置<p>视频起始时间（毫秒级Unix时间戳）</p>
 * @method integer getEndTimeMs() 获取<p>视频结束时间（毫秒级Unix时间戳）</p>
 * @method void setEndTimeMs(integer $EndTimeMs) 设置<p>视频结束时间（毫秒级Unix时间戳）</p>
 * @method string getEventId() 获取<p>用户自定义事件ID，后续扩展使用</p>
 * @method void setEventId(string $EventId) 设置<p>用户自定义事件ID，后续扩展使用</p>
 * @method string getSummary() 获取<p>视频内容摘要</p>
 * @method void setSummary(string $Summary) 设置<p>视频内容摘要</p>
 * @method integer getChannelId() 获取<p>通道ID</p>
 * @method void setChannelId(integer $ChannelId) 设置<p>通道ID</p>
 * @method string getThumbnail() 获取<p>缩略图路径</p>
 * @method void setThumbnail(string $Thumbnail) 设置<p>缩略图路径</p>
 */
class TargetInfo extends AbstractModel
{
    /**
     * @var string <p>视频唯一ID</p>
     */
    public $Id;

    /**
     * @var string <p>产品ID</p>
     */
    public $ProductId;

    /**
     * @var string <p>设备名称</p>
     */
    public $DeviceName;

    /**
     * @var integer <p>视频起始时间（毫秒级Unix时间戳）</p>
     */
    public $StartTimeMs;

    /**
     * @var integer <p>视频结束时间（毫秒级Unix时间戳）</p>
     */
    public $EndTimeMs;

    /**
     * @var string <p>用户自定义事件ID，后续扩展使用</p>
     */
    public $EventId;

    /**
     * @var string <p>视频内容摘要</p>
     */
    public $Summary;

    /**
     * @var integer <p>通道ID</p>
     */
    public $ChannelId;

    /**
     * @var string <p>缩略图路径</p>
     */
    public $Thumbnail;

    /**
     * @param string $Id <p>视频唯一ID</p>
     * @param string $ProductId <p>产品ID</p>
     * @param string $DeviceName <p>设备名称</p>
     * @param integer $StartTimeMs <p>视频起始时间（毫秒级Unix时间戳）</p>
     * @param integer $EndTimeMs <p>视频结束时间（毫秒级Unix时间戳）</p>
     * @param string $EventId <p>用户自定义事件ID，后续扩展使用</p>
     * @param string $Summary <p>视频内容摘要</p>
     * @param integer $ChannelId <p>通道ID</p>
     * @param string $Thumbnail <p>缩略图路径</p>
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
