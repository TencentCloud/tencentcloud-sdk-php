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
 * TWeSee 任务元数据
 *
 * @method string getProductId() 获取产品 ID
 * @method void setProductId(string $ProductId) 设置产品 ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method integer getChannelId() 获取通道 ID
 * @method void setChannelId(integer $ChannelId) 设置通道 ID
 * @method integer getStartTimeMs() 获取事件起始时间（毫秒级时间戳）
 * @method void setStartTimeMs(integer $StartTimeMs) 设置事件起始时间（毫秒级时间戳）
 * @method integer getEndTimeMs() 获取事件结束时间（毫秒级时间戳）
 * @method void setEndTimeMs(integer $EndTimeMs) 设置事件结束时间（毫秒级时间戳）
 * @method string getCustomId() 获取自定义事件 ID
 * @method void setCustomId(string $CustomId) 设置自定义事件 ID
 */
class SeeTaskMetadata extends AbstractModel
{
    /**
     * @var string 产品 ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var integer 通道 ID
     */
    public $ChannelId;

    /**
     * @var integer 事件起始时间（毫秒级时间戳）
     */
    public $StartTimeMs;

    /**
     * @var integer 事件结束时间（毫秒级时间戳）
     */
    public $EndTimeMs;

    /**
     * @var string 自定义事件 ID
     */
    public $CustomId;

    /**
     * @param string $ProductId 产品 ID
     * @param string $DeviceName 设备名称
     * @param integer $ChannelId 通道 ID
     * @param integer $StartTimeMs 事件起始时间（毫秒级时间戳）
     * @param integer $EndTimeMs 事件结束时间（毫秒级时间戳）
     * @param string $CustomId 自定义事件 ID
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("StartTimeMs",$param) and $param["StartTimeMs"] !== null) {
            $this->StartTimeMs = $param["StartTimeMs"];
        }

        if (array_key_exists("EndTimeMs",$param) and $param["EndTimeMs"] !== null) {
            $this->EndTimeMs = $param["EndTimeMs"];
        }

        if (array_key_exists("CustomId",$param) and $param["CustomId"] !== null) {
            $this->CustomId = $param["CustomId"];
        }
    }
}
