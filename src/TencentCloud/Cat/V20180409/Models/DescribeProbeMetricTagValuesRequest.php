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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProbeMetricTagValues请求参数结构体
 *
 * @method string getAnalyzeTaskType() 获取<p>分析任务类型，支持以下几种类型：<br>AnalyzeTaskType_Network：网络质量<br>AnalyzeTaskType_Browse：页面性能<br>AnalyzeTaskType_Transport：端口性能<br>AnalyzeTaskType_UploadDownload：文件传输<br>AnalyzeTaskType_MediaStream：音视频体验</p>
 * @method void setAnalyzeTaskType(string $AnalyzeTaskType) 设置<p>分析任务类型，支持以下几种类型：<br>AnalyzeTaskType_Network：网络质量<br>AnalyzeTaskType_Browse：页面性能<br>AnalyzeTaskType_Transport：端口性能<br>AnalyzeTaskType_UploadDownload：文件传输<br>AnalyzeTaskType_MediaStream：音视频体验</p>
 * @method string getKey() 获取<p>维度标签值，参考：<br>host：任务域名<br>errorInfo：状态类型<br>area：拨测点地区<br>operator：拨测点运营商<br>taskId：任务ID</p>
 * @method void setKey(string $Key) 设置<p>维度标签值，参考：<br>host：任务域名<br>errorInfo：状态类型<br>area：拨测点地区<br>operator：拨测点运营商<br>taskId：任务ID</p>
 * @method string getFilter() 获取<p>过滤条件，可以传单个过滤条件也可以拼接多个参数，支持正则匹配</p>
 * @method void setFilter(string $Filter) 设置<p>过滤条件，可以传单个过滤条件也可以拼接多个参数，支持正则匹配</p>
 * @method array getFilters() 获取<p>过滤条件数组</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件数组</p>
 * @method string getTimeRange() 获取<p>时间范围</p>
 * @method void setTimeRange(string $TimeRange) 设置<p>时间范围</p>
 */
class DescribeProbeMetricTagValuesRequest extends AbstractModel
{
    /**
     * @var string <p>分析任务类型，支持以下几种类型：<br>AnalyzeTaskType_Network：网络质量<br>AnalyzeTaskType_Browse：页面性能<br>AnalyzeTaskType_Transport：端口性能<br>AnalyzeTaskType_UploadDownload：文件传输<br>AnalyzeTaskType_MediaStream：音视频体验</p>
     */
    public $AnalyzeTaskType;

    /**
     * @var string <p>维度标签值，参考：<br>host：任务域名<br>errorInfo：状态类型<br>area：拨测点地区<br>operator：拨测点运营商<br>taskId：任务ID</p>
     */
    public $Key;

    /**
     * @var string <p>过滤条件，可以传单个过滤条件也可以拼接多个参数，支持正则匹配</p>
     */
    public $Filter;

    /**
     * @var array <p>过滤条件数组</p>
     */
    public $Filters;

    /**
     * @var string <p>时间范围</p>
     */
    public $TimeRange;

    /**
     * @param string $AnalyzeTaskType <p>分析任务类型，支持以下几种类型：<br>AnalyzeTaskType_Network：网络质量<br>AnalyzeTaskType_Browse：页面性能<br>AnalyzeTaskType_Transport：端口性能<br>AnalyzeTaskType_UploadDownload：文件传输<br>AnalyzeTaskType_MediaStream：音视频体验</p>
     * @param string $Key <p>维度标签值，参考：<br>host：任务域名<br>errorInfo：状态类型<br>area：拨测点地区<br>operator：拨测点运营商<br>taskId：任务ID</p>
     * @param string $Filter <p>过滤条件，可以传单个过滤条件也可以拼接多个参数，支持正则匹配</p>
     * @param array $Filters <p>过滤条件数组</p>
     * @param string $TimeRange <p>时间范围</p>
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
