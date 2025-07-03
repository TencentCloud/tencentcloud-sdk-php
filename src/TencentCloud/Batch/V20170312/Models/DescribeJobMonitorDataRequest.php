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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJobMonitorData请求参数结构体
 *
 * @method string getJobId() 获取作业ID；JobId详见[作业列表](https://cloud.tencent.com/document/product/599/15909)
 * @method void setJobId(string $JobId) 设置作业ID；JobId详见[作业列表](https://cloud.tencent.com/document/product/599/15909)
 * @method string getTaskName() 获取作业的Task名称，详见[作业详情](https://cloud.tencent.com/document/product/599/15904)。
 * @method void setTaskName(string $TaskName) 设置作业的Task名称，详见[作业详情](https://cloud.tencent.com/document/product/599/15904)。
 * @method integer getTaskInstanceIndex() 获取作业任务实例的序号，详见[任务详情](https://cloud.tencent.com/document/product/599/15905)
 * @method void setTaskInstanceIndex(integer $TaskInstanceIndex) 设置作业任务实例的序号，详见[任务详情](https://cloud.tencent.com/document/product/599/15905)
 * @method string getMetricName() 获取支持查询的指标；当前支持查询的任务指标；

- CpuUsage：cpu利用率，单位：%
- MemUsage：内存利用率，单位：%
- LanOuttraffic：内网出带宽，单位：Bytes/s
- LanIntraffic：内网入带宽，单位：Bytes/s
 * @method void setMetricName(string $MetricName) 设置支持查询的指标；当前支持查询的任务指标；

- CpuUsage：cpu利用率，单位：%
- MemUsage：内存利用率，单位：%
- LanOuttraffic：内网出带宽，单位：Bytes/s
- LanIntraffic：内网入带宽，单位：Bytes/s
 * @method string getStartTime() 获取查询任务实例的起始时间；如果未传入查询起始时间或传入的时间小于任务实例的创建时间（任务实例创建时间详见[任务详情](https://cloud.tencent.com/document/product/599/15905)），会自动将查询时间调整到任务实例的创建时间。传入时间格式只支持零时区格式。
 * @method void setStartTime(string $StartTime) 设置查询任务实例的起始时间；如果未传入查询起始时间或传入的时间小于任务实例的创建时间（任务实例创建时间详见[任务详情](https://cloud.tencent.com/document/product/599/15905)），会自动将查询时间调整到任务实例的创建时间。传入时间格式只支持零时区格式。
 * @method string getEndTime() 获取查询任务实例的终止时间；如果未传入查询终止时间或传入的时间大于任务实例的终止时间（任务实例终止时间详见[任务详情](https://cloud.tencent.com/document/product/599/15905)），并且任务实例已经结束，会自动将查询终止时间调整到任务实例的终止时间；如果任务实例未结束，会自动将查询终止时间调整到当前时间。传入时间格式只支持零时区格式。
 * @method void setEndTime(string $EndTime) 设置查询任务实例的终止时间；如果未传入查询终止时间或传入的时间大于任务实例的终止时间（任务实例终止时间详见[任务详情](https://cloud.tencent.com/document/product/599/15905)），并且任务实例已经结束，会自动将查询终止时间调整到任务实例的终止时间；如果任务实例未结束，会自动将查询终止时间调整到当前时间。传入时间格式只支持零时区格式。
 */
class DescribeJobMonitorDataRequest extends AbstractModel
{
    /**
     * @var string 作业ID；JobId详见[作业列表](https://cloud.tencent.com/document/product/599/15909)
     */
    public $JobId;

    /**
     * @var string 作业的Task名称，详见[作业详情](https://cloud.tencent.com/document/product/599/15904)。
     */
    public $TaskName;

    /**
     * @var integer 作业任务实例的序号，详见[任务详情](https://cloud.tencent.com/document/product/599/15905)
     */
    public $TaskInstanceIndex;

    /**
     * @var string 支持查询的指标；当前支持查询的任务指标；

- CpuUsage：cpu利用率，单位：%
- MemUsage：内存利用率，单位：%
- LanOuttraffic：内网出带宽，单位：Bytes/s
- LanIntraffic：内网入带宽，单位：Bytes/s
     */
    public $MetricName;

    /**
     * @var string 查询任务实例的起始时间；如果未传入查询起始时间或传入的时间小于任务实例的创建时间（任务实例创建时间详见[任务详情](https://cloud.tencent.com/document/product/599/15905)），会自动将查询时间调整到任务实例的创建时间。传入时间格式只支持零时区格式。
     */
    public $StartTime;

    /**
     * @var string 查询任务实例的终止时间；如果未传入查询终止时间或传入的时间大于任务实例的终止时间（任务实例终止时间详见[任务详情](https://cloud.tencent.com/document/product/599/15905)），并且任务实例已经结束，会自动将查询终止时间调整到任务实例的终止时间；如果任务实例未结束，会自动将查询终止时间调整到当前时间。传入时间格式只支持零时区格式。
     */
    public $EndTime;

    /**
     * @param string $JobId 作业ID；JobId详见[作业列表](https://cloud.tencent.com/document/product/599/15909)
     * @param string $TaskName 作业的Task名称，详见[作业详情](https://cloud.tencent.com/document/product/599/15904)。
     * @param integer $TaskInstanceIndex 作业任务实例的序号，详见[任务详情](https://cloud.tencent.com/document/product/599/15905)
     * @param string $MetricName 支持查询的指标；当前支持查询的任务指标；

- CpuUsage：cpu利用率，单位：%
- MemUsage：内存利用率，单位：%
- LanOuttraffic：内网出带宽，单位：Bytes/s
- LanIntraffic：内网入带宽，单位：Bytes/s
     * @param string $StartTime 查询任务实例的起始时间；如果未传入查询起始时间或传入的时间小于任务实例的创建时间（任务实例创建时间详见[任务详情](https://cloud.tencent.com/document/product/599/15905)），会自动将查询时间调整到任务实例的创建时间。传入时间格式只支持零时区格式。
     * @param string $EndTime 查询任务实例的终止时间；如果未传入查询终止时间或传入的时间大于任务实例的终止时间（任务实例终止时间详见[任务详情](https://cloud.tencent.com/document/product/599/15905)），并且任务实例已经结束，会自动将查询终止时间调整到任务实例的终止时间；如果任务实例未结束，会自动将查询终止时间调整到当前时间。传入时间格式只支持零时区格式。
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskInstanceIndex",$param) and $param["TaskInstanceIndex"] !== null) {
            $this->TaskInstanceIndex = $param["TaskInstanceIndex"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
