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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProbeMetricTagValues请求参数结构体
 *
 * @method string getAnalyzeTaskType() 获取分析任务类型，支持以下几种类型：
AnalyzeTaskType_Network：网络质量
AnalyzeTaskType_Browse：页面性能 
AnalyzeTaskType_Transport：端口性能
AnalyzeTaskType_UploadDownload：文件传输
AnalyzeTaskType_MediaStream：音视频体验

 * @method void setAnalyzeTaskType(string $AnalyzeTaskType) 设置分析任务类型，支持以下几种类型：
AnalyzeTaskType_Network：网络质量
AnalyzeTaskType_Browse：页面性能 
AnalyzeTaskType_Transport：端口性能
AnalyzeTaskType_UploadDownload：文件传输
AnalyzeTaskType_MediaStream：音视频体验

 * @method string getKey() 获取维度标签值，参考：
host：任务域名
errorInfo：状态类型
area：拨测点地区
operator：拨测点运营商
taskId：任务ID
 * @method void setKey(string $Key) 设置维度标签值，参考：
host：任务域名
errorInfo：状态类型
area：拨测点地区
operator：拨测点运营商
taskId：任务ID
 * @method string getFilter() 获取过滤条件，可以传单个过滤条件也可以拼接多个参数，支持正则匹配
 * @method void setFilter(string $Filter) 设置过滤条件，可以传单个过滤条件也可以拼接多个参数，支持正则匹配
 * @method array getFilters() 获取过滤条件数组
 * @method void setFilters(array $Filters) 设置过滤条件数组
 * @method string getTimeRange() 获取时间范围
 * @method void setTimeRange(string $TimeRange) 设置时间范围
 */
class DescribeProbeMetricTagValuesRequest extends AbstractModel
{
    /**
     * @var string 分析任务类型，支持以下几种类型：
AnalyzeTaskType_Network：网络质量
AnalyzeTaskType_Browse：页面性能 
AnalyzeTaskType_Transport：端口性能
AnalyzeTaskType_UploadDownload：文件传输
AnalyzeTaskType_MediaStream：音视频体验

     */
    public $AnalyzeTaskType;

    /**
     * @var string 维度标签值，参考：
host：任务域名
errorInfo：状态类型
area：拨测点地区
operator：拨测点运营商
taskId：任务ID
     */
    public $Key;

    /**
     * @var string 过滤条件，可以传单个过滤条件也可以拼接多个参数，支持正则匹配
     */
    public $Filter;

    /**
     * @var array 过滤条件数组
     */
    public $Filters;

    /**
     * @var string 时间范围
     */
    public $TimeRange;

    /**
     * @param string $AnalyzeTaskType 分析任务类型，支持以下几种类型：
AnalyzeTaskType_Network：网络质量
AnalyzeTaskType_Browse：页面性能 
AnalyzeTaskType_Transport：端口性能
AnalyzeTaskType_UploadDownload：文件传输
AnalyzeTaskType_MediaStream：音视频体验

     * @param string $Key 维度标签值，参考：
host：任务域名
errorInfo：状态类型
area：拨测点地区
operator：拨测点运营商
taskId：任务ID
     * @param string $Filter 过滤条件，可以传单个过滤条件也可以拼接多个参数，支持正则匹配
     * @param array $Filters 过滤条件数组
     * @param string $TimeRange 时间范围
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
        if (array_key_exists("AnalyzeTaskType",$param) and $param["AnalyzeTaskType"] !== null) {
            $this->AnalyzeTaskType = $param["AnalyzeTaskType"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = $param["Filters"];
        }

        if (array_key_exists("TimeRange",$param) and $param["TimeRange"] !== null) {
            $this->TimeRange = $param["TimeRange"];
        }
    }
}
