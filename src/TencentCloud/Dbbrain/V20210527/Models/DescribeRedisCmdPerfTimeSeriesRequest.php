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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRedisCmdPerfTimeSeries请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
 * @method string getProduct() 获取服务产品类型，仅仅支持值 "redis" - 云数据库 Redis。
 * @method void setProduct(string $Product) 设置服务产品类型，仅仅支持值 "redis" - 云数据库 Redis。
 * @method string getStartTime() 获取开始时间，如“2025-03-17T00:00:00+00:00”。0天 < 当前服务器时间 - 开始时间 <= 10天。
 * @method void setStartTime(string $StartTime) 设置开始时间，如“2025-03-17T00:00:00+00:00”。0天 < 当前服务器时间 - 开始时间 <= 10天。
 * @method string getEndTime() 获取结束时间，如“2025-03-17T01:00:00+00:00”，0天 < 结束时间 - 开始时间 <= 10天。
 * @method void setEndTime(string $EndTime) 设置结束时间，如“2025-03-17T01:00:00+00:00”，0天 < 结束时间 - 开始时间 <= 10天。
 * @method array getCommandList() 获取需要分析的redis命令
 * @method void setCommandList(array $CommandList) 设置需要分析的redis命令
 * @method string getMetric() 获取监控指标，包括：qps,latency_p99,latency_avg,latency_max，以逗号分隔
其中：
qps          - 每秒查询率  
latency_p99  - 99分位延迟  
latency_avg  - 平均延迟  
latency_max  - 最大延迟  

 * @method void setMetric(string $Metric) 设置监控指标，包括：qps,latency_p99,latency_avg,latency_max，以逗号分隔
其中：
qps          - 每秒查询率  
latency_p99  - 99分位延迟  
latency_avg  - 平均延迟  
latency_max  - 最大延迟  

 * @method integer getPeriod() 获取Period，监控指标时间粒度，单位秒，若不提供则根据开始时间和结束时间取默认值
 * @method void setPeriod(integer $Period) 设置Period，监控指标时间粒度，单位秒，若不提供则根据开始时间和结束时间取默认值
 */
class DescribeRedisCmdPerfTimeSeriesRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
     */
    public $InstanceId;

    /**
     * @var string 服务产品类型，仅仅支持值 "redis" - 云数据库 Redis。
     */
    public $Product;

    /**
     * @var string 开始时间，如“2025-03-17T00:00:00+00:00”。0天 < 当前服务器时间 - 开始时间 <= 10天。
     */
    public $StartTime;

    /**
     * @var string 结束时间，如“2025-03-17T01:00:00+00:00”，0天 < 结束时间 - 开始时间 <= 10天。
     */
    public $EndTime;

    /**
     * @var array 需要分析的redis命令
     */
    public $CommandList;

    /**
     * @var string 监控指标，包括：qps,latency_p99,latency_avg,latency_max，以逗号分隔
其中：
qps          - 每秒查询率  
latency_p99  - 99分位延迟  
latency_avg  - 平均延迟  
latency_max  - 最大延迟  

     */
    public $Metric;

    /**
     * @var integer Period，监控指标时间粒度，单位秒，若不提供则根据开始时间和结束时间取默认值
     */
    public $Period;

    /**
     * @param string $InstanceId 实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
     * @param string $Product 服务产品类型，仅仅支持值 "redis" - 云数据库 Redis。
     * @param string $StartTime 开始时间，如“2025-03-17T00:00:00+00:00”。0天 < 当前服务器时间 - 开始时间 <= 10天。
     * @param string $EndTime 结束时间，如“2025-03-17T01:00:00+00:00”，0天 < 结束时间 - 开始时间 <= 10天。
     * @param array $CommandList 需要分析的redis命令
     * @param string $Metric 监控指标，包括：qps,latency_p99,latency_avg,latency_max，以逗号分隔
其中：
qps          - 每秒查询率  
latency_p99  - 99分位延迟  
latency_avg  - 平均延迟  
latency_max  - 最大延迟  

     * @param integer $Period Period，监控指标时间粒度，单位秒，若不提供则根据开始时间和结束时间取默认值
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CommandList",$param) and $param["CommandList"] !== null) {
            $this->CommandList = $param["CommandList"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }
    }
}
