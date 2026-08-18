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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJobMonitorData请求参数结构体
 *
 * @method string getJobId() 获取<p>作业ID；JobId详见<a href="https://cloud.tencent.com/document/product/599/15909">作业列表</a></p>
 * @method void setJobId(string $JobId) 设置<p>作业ID；JobId详见<a href="https://cloud.tencent.com/document/product/599/15909">作业列表</a></p>
 * @method string getTaskName() 获取<p>作业的Task名称，详见<a href="https://cloud.tencent.com/document/product/599/15904">作业详情</a>。</p>
 * @method void setTaskName(string $TaskName) 设置<p>作业的Task名称，详见<a href="https://cloud.tencent.com/document/product/599/15904">作业详情</a>。</p>
 * @method integer getTaskInstanceIndex() 获取<p>作业任务实例的序号，详见<a href="https://cloud.tencent.com/document/product/599/15905">任务详情</a></p>
 * @method void setTaskInstanceIndex(integer $TaskInstanceIndex) 设置<p>作业任务实例的序号，详见<a href="https://cloud.tencent.com/document/product/599/15905">任务详情</a></p>
 * @method string getMetricName() 获取<p>支持查询的指标；当前支持查询的任务指标；</p><ul><li>CpuUsage：cpu利用率，单位：%</li><li>MemUsage：内存利用率，单位：%</li><li>LanOuttraffic：内网出带宽，单位：Bytes/s</li><li>LanIntraffic：内网入带宽，单位：Bytes/s</li><li>MaxDiskUsage：所有磁盘中的使用率最高的磁盘使用率，单位：%</li><li>TargetDiskUsage：指定磁盘的使用率，单位：%；配合Dimensions参数使用</li></ul>
 * @method void setMetricName(string $MetricName) 设置<p>支持查询的指标；当前支持查询的任务指标；</p><ul><li>CpuUsage：cpu利用率，单位：%</li><li>MemUsage：内存利用率，单位：%</li><li>LanOuttraffic：内网出带宽，单位：Bytes/s</li><li>LanIntraffic：内网入带宽，单位：Bytes/s</li><li>MaxDiskUsage：所有磁盘中的使用率最高的磁盘使用率，单位：%</li><li>TargetDiskUsage：指定磁盘的使用率，单位：%；配合Dimensions参数使用</li></ul>
 * @method string getStartTime() 获取<p>查询任务实例的起始时间；如果未传入查询起始时间或传入的时间小于任务实例的创建时间（任务实例创建时间详见<a href="https://cloud.tencent.com/document/product/599/15905">任务详情</a>），会自动将查询时间调整到任务实例的创建时间。传入时间格式只支持零时区格式。</p>
 * @method void setStartTime(string $StartTime) 设置<p>查询任务实例的起始时间；如果未传入查询起始时间或传入的时间小于任务实例的创建时间（任务实例创建时间详见<a href="https://cloud.tencent.com/document/product/599/15905">任务详情</a>），会自动将查询时间调整到任务实例的创建时间。传入时间格式只支持零时区格式。</p>
 * @method string getEndTime() 获取<p>查询任务实例的终止时间；如果未传入查询终止时间或传入的时间大于任务实例的终止时间（任务实例终止时间详见<a href="https://cloud.tencent.com/document/product/599/15905">任务详情</a>），并且任务实例已经结束，会自动将查询终止时间调整到任务实例的终止时间；如果任务实例未结束，会自动将查询终止时间调整到当前时间。传入时间格式只支持零时区格式。</p>
 * @method void setEndTime(string $EndTime) 设置<p>查询任务实例的终止时间；如果未传入查询终止时间或传入的时间大于任务实例的终止时间（任务实例终止时间详见<a href="https://cloud.tencent.com/document/product/599/15905">任务详情</a>），并且任务实例已经结束，会自动将查询终止时间调整到任务实例的终止时间；如果任务实例未结束，会自动将查询终止时间调整到当前时间。传入时间格式只支持零时区格式。</p>
 * @method array getDimensions() 获取<p>查询指标的扩展参数；当前只支持TargetDiskUsage;</p><ul><li>TargetDiskUsage<br>  -支持的查询维度diskname, 维度值为磁盘挂载名，例如vdb；如果不传此参数，默认查询vdb磁盘的使用率。<br>  样例：[{&quot;Name&quot;:&quot;diskname&quot;, &quot;Value&quot;:&quot;vdb&quot;}]</li></ul>
 * @method void setDimensions(array $Dimensions) 设置<p>查询指标的扩展参数；当前只支持TargetDiskUsage;</p><ul><li>TargetDiskUsage<br>  -支持的查询维度diskname, 维度值为磁盘挂载名，例如vdb；如果不传此参数，默认查询vdb磁盘的使用率。<br>  样例：[{&quot;Name&quot;:&quot;diskname&quot;, &quot;Value&quot;:&quot;vdb&quot;}]</li></ul>
 */
class DescribeJobMonitorDataRequest extends AbstractModel
{
    /**
     * @var string <p>作业ID；JobId详见<a href="https://cloud.tencent.com/document/product/599/15909">作业列表</a></p>
     */
    public $JobId;

    /**
     * @var string <p>作业的Task名称，详见<a href="https://cloud.tencent.com/document/product/599/15904">作业详情</a>。</p>
     */
    public $TaskName;

    /**
     * @var integer <p>作业任务实例的序号，详见<a href="https://cloud.tencent.com/document/product/599/15905">任务详情</a></p>
     */
    public $TaskInstanceIndex;

    /**
     * @var string <p>支持查询的指标；当前支持查询的任务指标；</p><ul><li>CpuUsage：cpu利用率，单位：%</li><li>MemUsage：内存利用率，单位：%</li><li>LanOuttraffic：内网出带宽，单位：Bytes/s</li><li>LanIntraffic：内网入带宽，单位：Bytes/s</li><li>MaxDiskUsage：所有磁盘中的使用率最高的磁盘使用率，单位：%</li><li>TargetDiskUsage：指定磁盘的使用率，单位：%；配合Dimensions参数使用</li></ul>
     */
    public $MetricName;

    /**
     * @var string <p>查询任务实例的起始时间；如果未传入查询起始时间或传入的时间小于任务实例的创建时间（任务实例创建时间详见<a href="https://cloud.tencent.com/document/product/599/15905">任务详情</a>），会自动将查询时间调整到任务实例的创建时间。传入时间格式只支持零时区格式。</p>
     */
    public $StartTime;

    /**
     * @var string <p>查询任务实例的终止时间；如果未传入查询终止时间或传入的时间大于任务实例的终止时间（任务实例终止时间详见<a href="https://cloud.tencent.com/document/product/599/15905">任务详情</a>），并且任务实例已经结束，会自动将查询终止时间调整到任务实例的终止时间；如果任务实例未结束，会自动将查询终止时间调整到当前时间。传入时间格式只支持零时区格式。</p>
     */
    public $EndTime;

    /**
     * @var array <p>查询指标的扩展参数；当前只支持TargetDiskUsage;</p><ul><li>TargetDiskUsage<br>  -支持的查询维度diskname, 维度值为磁盘挂载名，例如vdb；如果不传此参数，默认查询vdb磁盘的使用率。<br>  样例：[{&quot;Name&quot;:&quot;diskname&quot;, &quot;Value&quot;:&quot;vdb&quot;}]</li></ul>
     */
    public $Dimensions;

    /**
     * @param string $JobId <p>作业ID；JobId详见<a href="https://cloud.tencent.com/document/product/599/15909">作业列表</a></p>
     * @param string $TaskName <p>作业的Task名称，详见<a href="https://cloud.tencent.com/document/product/599/15904">作业详情</a>。</p>
     * @param integer $TaskInstanceIndex <p>作业任务实例的序号，详见<a href="https://cloud.tencent.com/document/product/599/15905">任务详情</a></p>
     * @param string $MetricName <p>支持查询的指标；当前支持查询的任务指标；</p><ul><li>CpuUsage：cpu利用率，单位：%</li><li>MemUsage：内存利用率，单位：%</li><li>LanOuttraffic：内网出带宽，单位：Bytes/s</li><li>LanIntraffic：内网入带宽，单位：Bytes/s</li><li>MaxDiskUsage：所有磁盘中的使用率最高的磁盘使用率，单位：%</li><li>TargetDiskUsage：指定磁盘的使用率，单位：%；配合Dimensions参数使用</li></ul>
     * @param string $StartTime <p>查询任务实例的起始时间；如果未传入查询起始时间或传入的时间小于任务实例的创建时间（任务实例创建时间详见<a href="https://cloud.tencent.com/document/product/599/15905">任务详情</a>），会自动将查询时间调整到任务实例的创建时间。传入时间格式只支持零时区格式。</p>
     * @param string $EndTime <p>查询任务实例的终止时间；如果未传入查询终止时间或传入的时间大于任务实例的终止时间（任务实例终止时间详见<a href="https://cloud.tencent.com/document/product/599/15905">任务详情</a>），并且任务实例已经结束，会自动将查询终止时间调整到任务实例的终止时间；如果任务实例未结束，会自动将查询终止时间调整到当前时间。传入时间格式只支持零时区格式。</p>
     * @param array $Dimensions <p>查询指标的扩展参数；当前只支持TargetDiskUsage;</p><ul><li>TargetDiskUsage<br>  -支持的查询维度diskname, 维度值为磁盘挂载名，例如vdb；如果不传此参数，默认查询vdb磁盘的使用率。<br>  样例：[{&quot;Name&quot;:&quot;diskname&quot;, &quot;Value&quot;:&quot;vdb&quot;}]</li></ul>
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

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = [];
            foreach ($param["Dimensions"] as $key => $value){
                $obj = new Dimension();
                $obj->deserialize($value);
                array_push($this->Dimensions, $obj);
            }
        }
    }
}
