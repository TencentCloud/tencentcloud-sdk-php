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
 * DescribeTDEMEventSearchSummary请求参数结构体
 *
 * @method string getAppId() 获取<p>应用 ID（必填）</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID（必填）</p>
 * @method integer getStartTime() 获取<p>开始时间 Unix 毫秒（必填）</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间 Unix 毫秒（必填）</p>
 * @method integer getEndTime() 获取<p>结束时间 Unix 毫秒（必填）</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间 Unix 毫秒（必填）</p>
 * @method string getCategory() 获取<p>事件分类（必填，可含 session）</p>
 * @method void setCategory(string $Category) 设置<p>事件分类（必填，可含 session）</p>
 * @method string getFilters() 获取<p>筛选条件 JSON 字符串：[{Key,Op,Values}]</p>
 * @method void setFilters(string $Filters) 设置<p>筛选条件 JSON 字符串：[{Key,Op,Values}]</p>
 * @method integer getIntervalSec() 获取<p>分桶秒数，正整数；缺省由服务端按窗口选取</p>
 * @method void setIntervalSec(integer $IntervalSec) 设置<p>分桶秒数，正整数；缺省由服务端按窗口选取</p>
 * @method boolean getHasError() 获取<p>是否只看有错误的会话。可选。不传表示不过滤。Category 为 session 的汇总查询会使用该条件。</p>
 * @method void setHasError(boolean $HasError) 设置<p>是否只看有错误的会话。可选。不传表示不过滤。Category 为 session 的汇总查询会使用该条件。</p>
 * @method integer getMinDuration() 获取<p>会话最短时长，单位毫秒。可选。0 或不传表示不限制。Category 为 session 的汇总查询会使用该条件。</p>
 * @method void setMinDuration(integer $MinDuration) 设置<p>会话最短时长，单位毫秒。可选。0 或不传表示不限制。Category 为 session 的汇总查询会使用该条件。</p>
 * @method integer getMaxDuration() 获取<p>会话最长时长，单位毫秒。可选。0 或不传表示不限制。Category 为 session 的汇总查询会使用该条件。</p>
 * @method void setMaxDuration(integer $MaxDuration) 设置<p>会话最长时长，单位毫秒。可选。0 或不传表示不限制。Category 为 session 的汇总查询会使用该条件。</p>
 */
class DescribeTDEMEventSearchSummaryRequest extends AbstractModel
{
    /**
     * @var string <p>应用 ID（必填）</p>
     */
    public $AppId;

    /**
     * @var integer <p>开始时间 Unix 毫秒（必填）</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间 Unix 毫秒（必填）</p>
     */
    public $EndTime;

    /**
     * @var string <p>事件分类（必填，可含 session）</p>
     */
    public $Category;

    /**
     * @var string <p>筛选条件 JSON 字符串：[{Key,Op,Values}]</p>
     */
    public $Filters;

    /**
     * @var integer <p>分桶秒数，正整数；缺省由服务端按窗口选取</p>
     */
    public $IntervalSec;

    /**
     * @var boolean <p>是否只看有错误的会话。可选。不传表示不过滤。Category 为 session 的汇总查询会使用该条件。</p>
     */
    public $HasError;

    /**
     * @var integer <p>会话最短时长，单位毫秒。可选。0 或不传表示不限制。Category 为 session 的汇总查询会使用该条件。</p>
     */
    public $MinDuration;

    /**
     * @var integer <p>会话最长时长，单位毫秒。可选。0 或不传表示不限制。Category 为 session 的汇总查询会使用该条件。</p>
     */
    public $MaxDuration;

    /**
     * @param string $AppId <p>应用 ID（必填）</p>
     * @param integer $StartTime <p>开始时间 Unix 毫秒（必填）</p>
     * @param integer $EndTime <p>结束时间 Unix 毫秒（必填）</p>
     * @param string $Category <p>事件分类（必填，可含 session）</p>
     * @param string $Filters <p>筛选条件 JSON 字符串：[{Key,Op,Values}]</p>
     * @param integer $IntervalSec <p>分桶秒数，正整数；缺省由服务端按窗口选取</p>
     * @param boolean $HasError <p>是否只看有错误的会话。可选。不传表示不过滤。Category 为 session 的汇总查询会使用该条件。</p>
     * @param integer $MinDuration <p>会话最短时长，单位毫秒。可选。0 或不传表示不限制。Category 为 session 的汇总查询会使用该条件。</p>
     * @param integer $MaxDuration <p>会话最长时长，单位毫秒。可选。0 或不传表示不限制。Category 为 session 的汇总查询会使用该条件。</p>
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = $param["Filters"];
        }

        if (array_key_exists("IntervalSec",$param) and $param["IntervalSec"] !== null) {
            $this->IntervalSec = $param["IntervalSec"];
        }

        if (array_key_exists("HasError",$param) and $param["HasError"] !== null) {
            $this->HasError = $param["HasError"];
        }

        if (array_key_exists("MinDuration",$param) and $param["MinDuration"] !== null) {
            $this->MinDuration = $param["MinDuration"];
        }

        if (array_key_exists("MaxDuration",$param) and $param["MaxDuration"] !== null) {
            $this->MaxDuration = $param["MaxDuration"];
        }
    }
}
