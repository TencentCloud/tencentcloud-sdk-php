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
namespace TencentCloud\Eis\V20210601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetRuntimeResourceMonitorMetricMC请求参数结构体
 *
 * @method integer getRuntimeId() 获取运行时id
 * @method void setRuntimeId(integer $RuntimeId) 设置运行时id
 * @method integer getStartTime() 获取起始时间
 * @method void setStartTime(integer $StartTime) 设置起始时间
 * @method integer getEndTime() 获取结束时间
 * @method void setEndTime(integer $EndTime) 设置结束时间
 * @method integer getMetricType() 获取指标类型：0:CPU, 1:MemUsageBytes, 2:K8sWorkloadNetworkReceiveBytesBw, 3:K8sWorkloadNetworkTransmitBytesBw
 * @method void setMetricType(integer $MetricType) 设置指标类型：0:CPU, 1:MemUsageBytes, 2:K8sWorkloadNetworkReceiveBytesBw, 3:K8sWorkloadNetworkTransmitBytesBw
 * @method boolean getRateType() 获取是否返回百分比数值，仅支持CPU，Memory
 * @method void setRateType(boolean $RateType) 设置是否返回百分比数值，仅支持CPU，Memory
 * @method integer getInterval() 获取采样粒度：60(s), 300(s), 3600(s), 86400(s)
 * @method void setInterval(integer $Interval) 设置采样粒度：60(s), 300(s), 3600(s), 86400(s)
 * @method integer getRuntimeClass() 获取环境运行类型：0:运行时类型、1:api类型
 * @method void setRuntimeClass(integer $RuntimeClass) 设置环境运行类型：0:运行时类型、1:api类型
 */
class GetRuntimeResourceMonitorMetricMCRequest extends AbstractModel
{
    /**
     * @var integer 运行时id
     */
    public $RuntimeId;

    /**
     * @var integer 起始时间
     */
    public $StartTime;

    /**
     * @var integer 结束时间
     */
    public $EndTime;

    /**
     * @var integer 指标类型：0:CPU, 1:MemUsageBytes, 2:K8sWorkloadNetworkReceiveBytesBw, 3:K8sWorkloadNetworkTransmitBytesBw
     */
    public $MetricType;

    /**
     * @var boolean 是否返回百分比数值，仅支持CPU，Memory
     */
    public $RateType;

    /**
     * @var integer 采样粒度：60(s), 300(s), 3600(s), 86400(s)
     */
    public $Interval;

    /**
     * @var integer 环境运行类型：0:运行时类型、1:api类型
     */
    public $RuntimeClass;

    /**
     * @param integer $RuntimeId 运行时id
     * @param integer $StartTime 起始时间
     * @param integer $EndTime 结束时间
     * @param integer $MetricType 指标类型：0:CPU, 1:MemUsageBytes, 2:K8sWorkloadNetworkReceiveBytesBw, 3:K8sWorkloadNetworkTransmitBytesBw
     * @param boolean $RateType 是否返回百分比数值，仅支持CPU，Memory
     * @param integer $Interval 采样粒度：60(s), 300(s), 3600(s), 86400(s)
     * @param integer $RuntimeClass 环境运行类型：0:运行时类型、1:api类型
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
        if (array_key_exists("RuntimeId",$param) and $param["RuntimeId"] !== null) {
            $this->RuntimeId = $param["RuntimeId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MetricType",$param) and $param["MetricType"] !== null) {
            $this->MetricType = $param["MetricType"];
        }

        if (array_key_exists("RateType",$param) and $param["RateType"] !== null) {
            $this->RateType = $param["RateType"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("RuntimeClass",$param) and $param["RuntimeClass"] !== null) {
            $this->RuntimeClass = $param["RuntimeClass"];
        }
    }
}
