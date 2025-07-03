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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDedicatedClusterHostStatistics请求参数结构体
 *
 * @method string getDedicatedClusterId() 获取查询的专用集群id
 * @method void setDedicatedClusterId(string $DedicatedClusterId) 设置查询的专用集群id
 * @method string getHostId() 获取宿主机id
 * @method void setHostId(string $HostId) 设置宿主机id
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getPeriod() 获取时间范围精度，1分钟(ONE_MINUTE)/5分钟(FIVE_MINUTE)
 * @method void setPeriod(string $Period) 设置时间范围精度，1分钟(ONE_MINUTE)/5分钟(FIVE_MINUTE)
 */
class DescribeDedicatedClusterHostStatisticsRequest extends AbstractModel
{
    /**
     * @var string 查询的专用集群id
     */
    public $DedicatedClusterId;

    /**
     * @var string 宿主机id
     */
    public $HostId;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 时间范围精度，1分钟(ONE_MINUTE)/5分钟(FIVE_MINUTE)
     */
    public $Period;

    /**
     * @param string $DedicatedClusterId 查询的专用集群id
     * @param string $HostId 宿主机id
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $Period 时间范围精度，1分钟(ONE_MINUTE)/5分钟(FIVE_MINUTE)
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
        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }

        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }
    }
}
