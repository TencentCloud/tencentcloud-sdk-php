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
 * DescribeRumStatsLogList请求参数结构体
 *
 * @method string getStartTime() 获取<p>查询开始时间（必填）。</p><p>参数格式：支持旧 Unix 毫秒字符串或新 RFC3339（需带时区）。</p><p>入参限制：RFC3339 最多 3 位小数秒，须对应非负毫秒。</p><p>等价时间范围的查询结果和返回字段一致。</p>
 * @method void setStartTime(string $StartTime) 设置<p>查询开始时间（必填）。</p><p>参数格式：支持旧 Unix 毫秒字符串或新 RFC3339（需带时区）。</p><p>入参限制：RFC3339 最多 3 位小数秒，须对应非负毫秒。</p><p>等价时间范围的查询结果和返回字段一致。</p>
 * @method integer getLimit() 获取<p>单次查询返回的原始日志条数，最大值为100（必填）</p>
 * @method void setLimit(integer $Limit) 设置<p>单次查询返回的原始日志条数，最大值为100（必填）</p>
 * @method string getQuery() 获取<p>查询语句，参考控制台请求参数，语句长度最大为4096（必填）</p>
 * @method void setQuery(string $Query) 设置<p>查询语句，参考控制台请求参数，语句长度最大为4096（必填）</p>
 * @method string getEndTime() 获取<p>查询结束时间（必填）。</p><p>参数格式：支持旧 Unix 毫秒字符串或新 RFC3339（需带时区）。</p><p>入参限制：RFC3339 最多 3 位小数秒，须对应非负毫秒。</p><p>等价时间范围的查询结果和返回字段一致。</p>
 * @method void setEndTime(string $EndTime) 设置<p>查询结束时间（必填）。</p><p>参数格式：支持旧 Unix 毫秒字符串或新 RFC3339（需带时区）。</p><p>入参限制：RFC3339 最多 3 位小数秒，须对应非负毫秒。</p><p>等价时间范围的查询结果和返回字段一致。</p>
 * @method integer getID() 获取<p>项目ID（必填）</p>
 * @method void setID(integer $ID) 设置<p>项目ID（必填）</p>
 */
class DescribeRumStatsLogListRequest extends AbstractModel
{
    /**
     * @var string <p>查询开始时间（必填）。</p><p>参数格式：支持旧 Unix 毫秒字符串或新 RFC3339（需带时区）。</p><p>入参限制：RFC3339 最多 3 位小数秒，须对应非负毫秒。</p><p>等价时间范围的查询结果和返回字段一致。</p>
     */
    public $StartTime;

    /**
     * @var integer <p>单次查询返回的原始日志条数，最大值为100（必填）</p>
     */
    public $Limit;

    /**
     * @var string <p>查询语句，参考控制台请求参数，语句长度最大为4096（必填）</p>
     */
    public $Query;

    /**
     * @var string <p>查询结束时间（必填）。</p><p>参数格式：支持旧 Unix 毫秒字符串或新 RFC3339（需带时区）。</p><p>入参限制：RFC3339 最多 3 位小数秒，须对应非负毫秒。</p><p>等价时间范围的查询结果和返回字段一致。</p>
     */
    public $EndTime;

    /**
     * @var integer <p>项目ID（必填）</p>
     */
    public $ID;

    /**
     * @param string $StartTime <p>查询开始时间（必填）。</p><p>参数格式：支持旧 Unix 毫秒字符串或新 RFC3339（需带时区）。</p><p>入参限制：RFC3339 最多 3 位小数秒，须对应非负毫秒。</p><p>等价时间范围的查询结果和返回字段一致。</p>
     * @param integer $Limit <p>单次查询返回的原始日志条数，最大值为100（必填）</p>
     * @param string $Query <p>查询语句，参考控制台请求参数，语句长度最大为4096（必填）</p>
     * @param string $EndTime <p>查询结束时间（必填）。</p><p>参数格式：支持旧 Unix 毫秒字符串或新 RFC3339（需带时区）。</p><p>入参限制：RFC3339 最多 3 位小数秒，须对应非负毫秒。</p><p>等价时间范围的查询结果和返回字段一致。</p>
     * @param integer $ID <p>项目ID（必填）</p>
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }
    }
}
