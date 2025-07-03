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
 * DescribeCsReportCountDataInfo请求参数结构体
 *
 * @method string getProductId() 获取产品id
 * @method void setProductId(string $ProductId) 设置产品id
 * @method string getDeviceName() 获取设备名
 * @method void setDeviceName(string $DeviceName) 设置设备名
 * @method integer getStartTime() 获取统计开始时间戳
 * @method void setStartTime(integer $StartTime) 设置统计开始时间戳
 * @method integer getEndTime() 获取统计结束时间戳
 * @method void setEndTime(integer $EndTime) 设置统计结束时间戳
 * @method integer getChannelId() 获取设备通道
 * @method void setChannelId(integer $ChannelId) 设置设备通道
 */
class DescribeCsReportCountDataInfoRequest extends AbstractModel
{
    /**
     * @var string 产品id
     */
    public $ProductId;

    /**
     * @var string 设备名
     */
    public $DeviceName;

    /**
     * @var integer 统计开始时间戳
     */
    public $StartTime;

    /**
     * @var integer 统计结束时间戳
     */
    public $EndTime;

    /**
     * @var integer 设备通道
     */
    public $ChannelId;

    /**
     * @param string $ProductId 产品id
     * @param string $DeviceName 设备名
     * @param integer $StartTime 统计开始时间戳
     * @param integer $EndTime 统计结束时间戳
     * @param integer $ChannelId 设备通道
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }
    }
}
