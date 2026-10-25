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
 * DescribeFieldValues请求参数结构体
 *
 * @method string getAppId() 获取<p>应用id</p>
 * @method void setAppId(string $AppId) 设置<p>应用id</p>
 * @method integer getStartTime() 获取<p>开始时间</p><p>单位：毫秒</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间</p><p>单位：毫秒</p>
 * @method integer getEndTime() 获取<p>结束时间</p><p>单位：毫秒</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间</p><p>单位：毫秒</p>
 * @method string getFieldName() 获取<p>字段名</p>
 * @method void setFieldName(string $FieldName) 设置<p>字段名</p>
 * @method integer getLimit() 获取<p>数量限制</p>
 * @method void setLimit(integer $Limit) 设置<p>数量限制</p>
 * @method string getFilters() 获取<p>过滤条件</p>
 * @method void setFilters(string $Filters) 设置<p>过滤条件</p>
 * @method string getCategory() 获取<p>事件分类</p>
 * @method void setCategory(string $Category) 设置<p>事件分类</p>
 * @method string getPrefix() 获取<p>可选。按前缀过滤字段去重结果。查询 user_id 或 device_id 且开启 StrictPiiPrefix 时必填，去除首尾空格后长度须不少于 2。</p>
 * @method void setPrefix(string $Prefix) 设置<p>可选。按前缀过滤字段去重结果。查询 user_id 或 device_id 且开启 StrictPiiPrefix 时必填，去除首尾空格后长度须不少于 2。</p>
 * @method boolean getStrictPiiPrefix() 获取<p>用于采样配置，是否对 user_id、device_id 强制前缀匹配。为 true 时必须同时传入合法 Prefix，否则返回 InvalidParameter，且不会返回无前缀的全量去重列表。为 false 或不传时，按字段返回热门去重值，行为与历史接口一致。</p><p>默认值：false</p>
 * @method void setStrictPiiPrefix(boolean $StrictPiiPrefix) 设置<p>用于采样配置，是否对 user_id、device_id 强制前缀匹配。为 true 时必须同时传入合法 Prefix，否则返回 InvalidParameter，且不会返回无前缀的全量去重列表。为 false 或不传时，按字段返回热门去重值，行为与历史接口一致。</p><p>默认值：false</p>
 * @method string getScope() 获取<p>查询口径。可选。只允许空或 event。Issue 标签分布传 event。为 event 时不能同时传 HasError、MinDuration、MaxDuration，也不能把 Category 设为 session。</p>
 * @method void setScope(string $Scope) 设置<p>查询口径。可选。只允许空或 event。Issue 标签分布传 event。为 event 时不能同时传 HasError、MinDuration、MaxDuration，也不能把 Category 设为 session。</p>
 * @method boolean getHasError() 获取<p>是否只看有错误的会话。可选。不传表示不过滤。Scope 为 event 时不能传。</p>
 * @method void setHasError(boolean $HasError) 设置<p>是否只看有错误的会话。可选。不传表示不过滤。Scope 为 event 时不能传。</p>
 * @method integer getMinDuration() 获取<p>会话最短时长，单位毫秒。可选。0 或不传表示不限制。Scope 为 event 时不能传。</p>
 * @method void setMinDuration(integer $MinDuration) 设置<p>会话最短时长，单位毫秒。可选。0 或不传表示不限制。Scope 为 event 时不能传。</p>
 * @method integer getMaxDuration() 获取<p>会话最长时长，单位毫秒。可选。0 或不传表示不限制。Scope 为 event 时不能传。</p>
 * @method void setMaxDuration(integer $MaxDuration) 设置<p>会话最长时长，单位毫秒。可选。0 或不传表示不限制。Scope 为 event 时不能传。</p>
 */
class DescribeFieldValuesRequest extends AbstractModel
{
    /**
     * @var string <p>应用id</p>
     */
    public $AppId;

    /**
     * @var integer <p>开始时间</p><p>单位：毫秒</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间</p><p>单位：毫秒</p>
     */
    public $EndTime;

    /**
     * @var string <p>字段名</p>
     */
    public $FieldName;

    /**
     * @var integer <p>数量限制</p>
     */
    public $Limit;

    /**
     * @var string <p>过滤条件</p>
     */
    public $Filters;

    /**
     * @var string <p>事件分类</p>
     */
    public $Category;

    /**
     * @var string <p>可选。按前缀过滤字段去重结果。查询 user_id 或 device_id 且开启 StrictPiiPrefix 时必填，去除首尾空格后长度须不少于 2。</p>
     */
    public $Prefix;

    /**
     * @var boolean <p>用于采样配置，是否对 user_id、device_id 强制前缀匹配。为 true 时必须同时传入合法 Prefix，否则返回 InvalidParameter，且不会返回无前缀的全量去重列表。为 false 或不传时，按字段返回热门去重值，行为与历史接口一致。</p><p>默认值：false</p>
     */
    public $StrictPiiPrefix;

    /**
     * @var string <p>查询口径。可选。只允许空或 event。Issue 标签分布传 event。为 event 时不能同时传 HasError、MinDuration、MaxDuration，也不能把 Category 设为 session。</p>
     */
    public $Scope;

    /**
     * @var boolean <p>是否只看有错误的会话。可选。不传表示不过滤。Scope 为 event 时不能传。</p>
     */
    public $HasError;

    /**
     * @var integer <p>会话最短时长，单位毫秒。可选。0 或不传表示不限制。Scope 为 event 时不能传。</p>
     */
    public $MinDuration;

    /**
     * @var integer <p>会话最长时长，单位毫秒。可选。0 或不传表示不限制。Scope 为 event 时不能传。</p>
     */
    public $MaxDuration;

    /**
     * @param string $AppId <p>应用id</p>
     * @param integer $StartTime <p>开始时间</p><p>单位：毫秒</p>
     * @param integer $EndTime <p>结束时间</p><p>单位：毫秒</p>
     * @param string $FieldName <p>字段名</p>
     * @param integer $Limit <p>数量限制</p>
     * @param string $Filters <p>过滤条件</p>
     * @param string $Category <p>事件分类</p>
     * @param string $Prefix <p>可选。按前缀过滤字段去重结果。查询 user_id 或 device_id 且开启 StrictPiiPrefix 时必填，去除首尾空格后长度须不少于 2。</p>
     * @param boolean $StrictPiiPrefix <p>用于采样配置，是否对 user_id、device_id 强制前缀匹配。为 true 时必须同时传入合法 Prefix，否则返回 InvalidParameter，且不会返回无前缀的全量去重列表。为 false 或不传时，按字段返回热门去重值，行为与历史接口一致。</p><p>默认值：false</p>
     * @param string $Scope <p>查询口径。可选。只允许空或 event。Issue 标签分布传 event。为 event 时不能同时传 HasError、MinDuration、MaxDuration，也不能把 Category 设为 session。</p>
     * @param boolean $HasError <p>是否只看有错误的会话。可选。不传表示不过滤。Scope 为 event 时不能传。</p>
     * @param integer $MinDuration <p>会话最短时长，单位毫秒。可选。0 或不传表示不限制。Scope 为 event 时不能传。</p>
     * @param integer $MaxDuration <p>会话最长时长，单位毫秒。可选。0 或不传表示不限制。Scope 为 event 时不能传。</p>
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

        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = $param["Filters"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Prefix",$param) and $param["Prefix"] !== null) {
            $this->Prefix = $param["Prefix"];
        }

        if (array_key_exists("StrictPiiPrefix",$param) and $param["StrictPiiPrefix"] !== null) {
            $this->StrictPiiPrefix = $param["StrictPiiPrefix"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
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
