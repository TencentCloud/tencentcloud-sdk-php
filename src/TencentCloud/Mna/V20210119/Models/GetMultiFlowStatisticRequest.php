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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetMultiFlowStatistic请求参数结构体
 *
 * @method array getDeviceIds() 获取设备id列表，单次最多请求10个设备
 * @method void setDeviceIds(array $DeviceIds) 设置设备id列表，单次最多请求10个设备
 * @method integer getBeginTime() 获取1659514436
 * @method void setBeginTime(integer $BeginTime) 设置1659514436
 * @method integer getEndTime() 获取1659515000
 * @method void setEndTime(integer $EndTime) 设置1659515000
 * @method integer getType() 获取统计流量类型（1：上行流量，2：下行流量）
 * @method void setType(integer $Type) 设置统计流量类型（1：上行流量，2：下行流量）
 * @method integer getTimeGranularity() 获取统计时间粒度（1：按小时统计，2：按天统计）
 * @method void setTimeGranularity(integer $TimeGranularity) 设置统计时间粒度（1：按小时统计，2：按天统计）
 */
class GetMultiFlowStatisticRequest extends AbstractModel
{
    /**
     * @var array 设备id列表，单次最多请求10个设备
     */
    public $DeviceIds;

    /**
     * @var integer 1659514436
     */
    public $BeginTime;

    /**
     * @var integer 1659515000
     */
    public $EndTime;

    /**
     * @var integer 统计流量类型（1：上行流量，2：下行流量）
     */
    public $Type;

    /**
     * @var integer 统计时间粒度（1：按小时统计，2：按天统计）
     */
    public $TimeGranularity;

    /**
     * @param array $DeviceIds 设备id列表，单次最多请求10个设备
     * @param integer $BeginTime 1659514436
     * @param integer $EndTime 1659515000
     * @param integer $Type 统计流量类型（1：上行流量，2：下行流量）
     * @param integer $TimeGranularity 统计时间粒度（1：按小时统计，2：按天统计）
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
        if (array_key_exists("DeviceIds",$param) and $param["DeviceIds"] !== null) {
            $this->DeviceIds = $param["DeviceIds"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TimeGranularity",$param) and $param["TimeGranularity"] !== null) {
            $this->TimeGranularity = $param["TimeGranularity"];
        }
    }
}
