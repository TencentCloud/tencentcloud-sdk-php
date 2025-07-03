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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDDoSTrend返回参数结构体
 *
 * @method integer getCount() 获取值个数
 * @method void setCount(integer $Count) 设置值个数
 * @method string getBusiness() 获取DDoS防护子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版；basic表示DDoS基础防护）
 * @method void setBusiness(string $Business) 设置DDoS防护子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版；basic表示DDoS基础防护）
 * @method string getIp() 获取资源的IP
 * @method void setIp(string $Ip) 设置资源的IP
 * @method integer getPeriod() 获取统计粒度，取值[300(5分钟)，3600(小时)，86400(天)]
 * @method void setPeriod(integer $Period) 设置统计粒度，取值[300(5分钟)，3600(小时)，86400(天)]
 * @method string getStartTime() 获取统计开始时间
 * @method void setStartTime(string $StartTime) 设置统计开始时间
 * @method string getEndTime() 获取统计结束时间
 * @method void setEndTime(string $EndTime) 设置统计结束时间
 * @method array getData() 获取值数组，攻击流量带宽单位为Mbps，包速率单位为pps
 * @method void setData(array $Data) 设置值数组，攻击流量带宽单位为Mbps，包速率单位为pps
 * @method string getId() 获取资源ID
 * @method void setId(string $Id) 设置资源ID
 * @method string getMetricName() 获取指标，取值[bps(攻击流量带宽，pps(攻击包速率))]
 * @method void setMetricName(string $MetricName) 设置指标，取值[bps(攻击流量带宽，pps(攻击包速率))]
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDDoSTrendResponse extends AbstractModel
{
    /**
     * @var integer 值个数
     */
    public $Count;

    /**
     * @var string DDoS防护子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版；basic表示DDoS基础防护）
     */
    public $Business;

    /**
     * @var string 资源的IP
     */
    public $Ip;

    /**
     * @var integer 统计粒度，取值[300(5分钟)，3600(小时)，86400(天)]
     */
    public $Period;

    /**
     * @var string 统计开始时间
     */
    public $StartTime;

    /**
     * @var string 统计结束时间
     */
    public $EndTime;

    /**
     * @var array 值数组，攻击流量带宽单位为Mbps，包速率单位为pps
     */
    public $Data;

    /**
     * @var string 资源ID
     */
    public $Id;

    /**
     * @var string 指标，取值[bps(攻击流量带宽，pps(攻击包速率))]
     */
    public $MetricName;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Count 值个数
     * @param string $Business DDoS防护子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版；basic表示DDoS基础防护）
     * @param string $Ip 资源的IP
     * @param integer $Period 统计粒度，取值[300(5分钟)，3600(小时)，86400(天)]
     * @param string $StartTime 统计开始时间
     * @param string $EndTime 统计结束时间
     * @param array $Data 值数组，攻击流量带宽单位为Mbps，包速率单位为pps
     * @param string $Id 资源ID
     * @param string $MetricName 指标，取值[bps(攻击流量带宽，pps(攻击包速率))]
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
