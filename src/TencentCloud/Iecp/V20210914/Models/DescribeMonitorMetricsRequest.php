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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMonitorMetrics请求参数结构体
 *
 * @method integer getEdgeUnitId() 获取IECP边缘单元ID
 * @method void setEdgeUnitId(integer $EdgeUnitId) 设置IECP边缘单元ID
 * @method string getQueryType() 获取查询维度
 * @method void setQueryType(string $QueryType) 设置查询维度
 * @method integer getStartTime() 获取起始时间Unix秒时间戳
 * @method void setStartTime(integer $StartTime) 设置起始时间Unix秒时间戳
 * @method integer getEndTime() 获取终止时间Unix秒时间戳
 * @method void setEndTime(integer $EndTime) 设置终止时间Unix秒时间戳
 * @method integer getInterval() 获取步长（分钟）
 * @method void setInterval(integer $Interval) 设置步长（分钟）
 * @method string getNodeName() 获取节点名称，查询节点监控时必填
 * @method void setNodeName(string $NodeName) 设置节点名称，查询节点监控时必填
 * @method string getNamespace() 获取命名空间，不填则默认为default
 * @method void setNamespace(string $Namespace) 设置命名空间，不填则默认为default
 * @method string getPodName() 获取Pod名称，查询Pod监控时必填
 * @method void setPodName(string $PodName) 设置Pod名称，查询Pod监控时必填
 * @method string getWorkloadName() 获取Workload名称，查询Workload监控时必填
 * @method void setWorkloadName(string $WorkloadName) 设置Workload名称，查询Workload监控时必填
 */
class DescribeMonitorMetricsRequest extends AbstractModel
{
    /**
     * @var integer IECP边缘单元ID
     */
    public $EdgeUnitId;

    /**
     * @var string 查询维度
     */
    public $QueryType;

    /**
     * @var integer 起始时间Unix秒时间戳
     */
    public $StartTime;

    /**
     * @var integer 终止时间Unix秒时间戳
     */
    public $EndTime;

    /**
     * @var integer 步长（分钟）
     */
    public $Interval;

    /**
     * @var string 节点名称，查询节点监控时必填
     */
    public $NodeName;

    /**
     * @var string 命名空间，不填则默认为default
     */
    public $Namespace;

    /**
     * @var string Pod名称，查询Pod监控时必填
     */
    public $PodName;

    /**
     * @var string Workload名称，查询Workload监控时必填
     */
    public $WorkloadName;

    /**
     * @param integer $EdgeUnitId IECP边缘单元ID
     * @param string $QueryType 查询维度
     * @param integer $StartTime 起始时间Unix秒时间戳
     * @param integer $EndTime 终止时间Unix秒时间戳
     * @param integer $Interval 步长（分钟）
     * @param string $NodeName 节点名称，查询节点监控时必填
     * @param string $Namespace 命名空间，不填则默认为default
     * @param string $PodName Pod名称，查询Pod监控时必填
     * @param string $WorkloadName Workload名称，查询Workload监控时必填
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
        if (array_key_exists("EdgeUnitId",$param) and $param["EdgeUnitId"] !== null) {
            $this->EdgeUnitId = $param["EdgeUnitId"];
        }

        if (array_key_exists("QueryType",$param) and $param["QueryType"] !== null) {
            $this->QueryType = $param["QueryType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("WorkloadName",$param) and $param["WorkloadName"] !== null) {
            $this->WorkloadName = $param["WorkloadName"];
        }
    }
}
