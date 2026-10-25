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
 * DescribeIssueDetail请求参数结构体
 *
 * @method string getAppId() 获取<p>应用 ID</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID</p>
 * @method string getIssueId() 获取<p>Issue ID</p>
 * @method void setIssueId(string $IssueId) 设置<p>Issue ID</p>
 * @method integer getStartTime() 获取<p>开始时间，Unix 毫秒时间戳。可选。与 EndTime 必须成对传入；都不传时按全保留期统计。</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间，Unix 毫秒时间戳。可选。与 EndTime 必须成对传入；都不传时按全保留期统计。</p>
 * @method integer getEndTime() 获取<p>结束时间，Unix 毫秒时间戳。可选。与 StartTime 必须成对传入。</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间，Unix 毫秒时间戳。可选。与 StartTime 必须成对传入。</p>
 * @method string getEnv() 获取<p>环境。可选。为空表示全部环境。</p>
 * @method void setEnv(string $Env) 设置<p>环境。可选。为空表示全部环境。</p>
 * @method string getFilters() 获取<p>筛选条件 JSON 字符串，格式为 [{Key,Op,Values}]。可选。不传表示不附加这组筛选。</p>
 * @method void setFilters(string $Filters) 设置<p>筛选条件 JSON 字符串，格式为 [{Key,Op,Values}]。可选。不传表示不附加这组筛选。</p>
 */
class DescribeIssueDetailRequest extends AbstractModel
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
     * @var integer <p>开始时间，Unix 毫秒时间戳。可选。与 EndTime 必须成对传入；都不传时按全保留期统计。</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间，Unix 毫秒时间戳。可选。与 StartTime 必须成对传入。</p>
     */
    public $EndTime;

    /**
     * @var string <p>环境。可选。为空表示全部环境。</p>
     */
    public $Env;

    /**
     * @var string <p>筛选条件 JSON 字符串，格式为 [{Key,Op,Values}]。可选。不传表示不附加这组筛选。</p>
     */
    public $Filters;

    /**
     * @param string $AppId <p>应用 ID</p>
     * @param string $IssueId <p>Issue ID</p>
     * @param integer $StartTime <p>开始时间，Unix 毫秒时间戳。可选。与 EndTime 必须成对传入；都不传时按全保留期统计。</p>
     * @param integer $EndTime <p>结束时间，Unix 毫秒时间戳。可选。与 StartTime 必须成对传入。</p>
     * @param string $Env <p>环境。可选。为空表示全部环境。</p>
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

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = $param["Filters"];
        }
    }
}
