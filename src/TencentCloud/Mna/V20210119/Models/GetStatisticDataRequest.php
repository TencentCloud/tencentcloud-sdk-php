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
 * GetStatisticData请求参数结构体
 *
 * @method string getDeviceId() 获取设备ID
 * @method void setDeviceId(string $DeviceId) 设置设备ID
 * @method integer getBeginTime() 获取统计开始时间，单位：s
 * @method void setBeginTime(integer $BeginTime) 设置统计开始时间，单位：s
 * @method integer getEndTime() 获取统计结束时间，单位：s
 * @method void setEndTime(integer $EndTime) 设置统计结束时间，单位：s
 * @method integer getTimeGranularity() 获取聚合粒度：
1:按小时统计
2:按天统计
 * @method void setTimeGranularity(integer $TimeGranularity) 设置聚合粒度：
1:按小时统计
2:按天统计
 */
class GetStatisticDataRequest extends AbstractModel
{
    /**
     * @var string 设备ID
     */
    public $DeviceId;

    /**
     * @var integer 统计开始时间，单位：s
     */
    public $BeginTime;

    /**
     * @var integer 统计结束时间，单位：s
     */
    public $EndTime;

    /**
     * @var integer 聚合粒度：
1:按小时统计
2:按天统计
     */
    public $TimeGranularity;

    /**
     * @param string $DeviceId 设备ID
     * @param integer $BeginTime 统计开始时间，单位：s
     * @param integer $EndTime 统计结束时间，单位：s
     * @param integer $TimeGranularity 聚合粒度：
1:按小时统计
2:按天统计
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TimeGranularity",$param) and $param["TimeGranularity"] !== null) {
            $this->TimeGranularity = $param["TimeGranularity"];
        }
    }
}
