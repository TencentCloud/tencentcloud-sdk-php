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
 * DescribeTDEMOverviewScores请求参数结构体
 *
 * @method array getAppIds() 获取<p>应用 ID 列表，1-200（必填）</p>
 * @method void setAppIds(array $AppIds) 设置<p>应用 ID 列表，1-200（必填）</p>
 * @method integer getStartTime() 获取<p>开始时间 Unix 毫秒（必填）</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间 Unix 毫秒（必填）</p>
 * @method integer getEndTime() 获取<p>结束时间 Unix 毫秒（必填）</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间 Unix 毫秒（必填）</p>
 * @method string getFilters() 获取<p>筛选条件 JSON 字符串，格式为 [{Key,Op,Values}]。可选。总览总分按环境筛选时传入。</p>
 * @method void setFilters(string $Filters) 设置<p>筛选条件 JSON 字符串，格式为 [{Key,Op,Values}]。可选。总览总分按环境筛选时传入。</p>
 */
class DescribeTDEMOverviewScoresRequest extends AbstractModel
{
    /**
     * @var array <p>应用 ID 列表，1-200（必填）</p>
     */
    public $AppIds;

    /**
     * @var integer <p>开始时间 Unix 毫秒（必填）</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间 Unix 毫秒（必填）</p>
     */
    public $EndTime;

    /**
     * @var string <p>筛选条件 JSON 字符串，格式为 [{Key,Op,Values}]。可选。总览总分按环境筛选时传入。</p>
     */
    public $Filters;

    /**
     * @param array $AppIds <p>应用 ID 列表，1-200（必填）</p>
     * @param integer $StartTime <p>开始时间 Unix 毫秒（必填）</p>
     * @param integer $EndTime <p>结束时间 Unix 毫秒（必填）</p>
     * @param string $Filters <p>筛选条件 JSON 字符串，格式为 [{Key,Op,Values}]。可选。总览总分按环境筛选时传入。</p>
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
        if (array_key_exists("AppIds",$param) and $param["AppIds"] !== null) {
            $this->AppIds = $param["AppIds"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = $param["Filters"];
        }
    }
}
