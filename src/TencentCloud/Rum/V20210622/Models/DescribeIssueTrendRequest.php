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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIssueTrend请求参数结构体
 *
 * @method string getAppId() 获取<p>应用 ID</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID</p>
 * @method string getIssueId() 获取<p>Issue ID</p>
 * @method void setIssueId(string $IssueId) 设置<p>Issue ID</p>
 * @method integer getStartTime() 获取<p>开始时间，Unix 毫秒时间戳</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间，Unix 毫秒时间戳</p>
 * @method integer getEndTime() 获取<p>结束时间，Unix 毫秒时间戳</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间，Unix 毫秒时间戳</p>
 * @method string getBucket() 获取<p>趋势分桶，可选值：auto、1m、10m、1h、1d</p>
 * @method void setBucket(string $Bucket) 设置<p>趋势分桶，可选值：auto、1m、10m、1h、1d</p>
 * @method string getEnv() 获取<p>环境。可选。为空表示全部环境。</p>
 * @method void setEnv(string $Env) 设置<p>环境。可选。为空表示全部环境。</p>
 * @method string getKeyword() 获取<p>关键字。可选。不传表示不过滤。</p>
 * @method void setKeyword(string $Keyword) 设置<p>关键字。可选。不传表示不过滤。</p>
 * @method string getFilters() 获取<p>筛选条件 JSON 字符串，格式为 [{Key,Op,Values}]。可选。不传表示不附加这组筛选。</p>
 * @method void setFilters(string $Filters) 设置<p>筛选条件 JSON 字符串，格式为 [{Key,Op,Values}]。可选。不传表示不附加这组筛选。</p>
 */
class DescribeIssueTrendRequest extends AbstractModel
{
    /**
     * @var string <p>应用 ID</p>
     */
    public $AppId;

    /**
     * @var string <p>Issue ID</p>
     */
    public $IssueId;

    /**
     * @var integer <p>开始时间，Unix 毫秒时间戳</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间，Unix 毫秒时间戳</p>
     */
    public $EndTime;

    /**
     * @var string <p>趋势分桶，可选值：auto、1m、10m、1h、1d</p>
     */
    public $Bucket;

    /**
     * @var string <p>环境。可选。为空表示全部环境。</p>
     */
    public $Env;

    /**
     * @var string <p>关键字。可选。不传表示不过滤。</p>
     */
    public $Keyword;

    /**
     * @var string <p>筛选条件 JSON 字符串，格式为 [{Key,Op,Values}]。可选。不传表示不附加这组筛选。</p>
     */
    public $Filters;

    /**
     * @param string $AppId <p>应用 ID</p>
     * @param string $IssueId <p>Issue ID</p>
     * @param integer $StartTime <p>开始时间，Unix 毫秒时间戳</p>
     * @param integer $EndTime <p>结束时间，Unix 毫秒时间戳</p>
     * @param string $Bucket <p>趋势分桶，可选值：auto、1m、10m、1h、1d</p>
     * @param string $Env <p>环境。可选。为空表示全部环境。</p>
     * @param string $Keyword <p>关键字。可选。不传表示不过滤。</p>
     * @param string $Filters <p>筛选条件 JSON 字符串，格式为 [{Key,Op,Values}]。可选。不传表示不附加这组筛选。</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("IssueId",$param) and $param["IssueId"] !== null) {
            $this->IssueId = $param["IssueId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = $param["Filters"];
        }
    }
}
