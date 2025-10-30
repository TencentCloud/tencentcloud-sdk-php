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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchLog请求参数结构体
 *
 * @method integer getStartTime() 获取要检索分析的日志的起始时间，Unix时间戳（毫秒）
 * @method void setStartTime(integer $StartTime) 设置要检索分析的日志的起始时间，Unix时间戳（毫秒）
 * @method integer getEndTime() 获取要检索分析的日志的结束时间，Unix时间戳（毫秒）
 * @method void setEndTime(integer $EndTime) 设置要检索分析的日志的结束时间，Unix时间戳（毫秒）
 * @method string getQueryString() 获取检索分析语句，最大长度为12KB，查询语法可参考文档 https://cloud.tencent.com/document/product/296/50508
 * @method void setQueryString(string $QueryString) 设置检索分析语句，最大长度为12KB，查询语法可参考文档 https://cloud.tencent.com/document/product/296/50508
 * @method integer getCount() 获取表示单次查询返回的原始日志条数，最大值为1000，获取后续日志需使用Context参数
 * @method void setCount(integer $Count) 设置表示单次查询返回的原始日志条数，最大值为1000，获取后续日志需使用Context参数
 * @method string getSort() 获取原始日志是否按时间排序返回；可选值：asc(升序)、desc(降序)，默认为 desc
 * @method void setSort(string $Sort) 设置原始日志是否按时间排序返回；可选值：asc(升序)、desc(降序)，默认为 desc
 * @method string getContext() 获取透传上次接口返回的Context值，可获取后续更多日志，总计最多可获取1万条原始日志，过期时间1小时
 * @method void setContext(string $Context) 设置透传上次接口返回的Context值，可获取后续更多日志，总计最多可获取1万条原始日志，过期时间1小时
 */
class SearchLogRequest extends AbstractModel
{
    /**
     * @var integer 要检索分析的日志的起始时间，Unix时间戳（毫秒）
     */
    public $StartTime;

    /**
     * @var integer 要检索分析的日志的结束时间，Unix时间戳（毫秒）
     */
    public $EndTime;

    /**
     * @var string 检索分析语句，最大长度为12KB，查询语法可参考文档 https://cloud.tencent.com/document/product/296/50508
     */
    public $QueryString;

    /**
     * @var integer 表示单次查询返回的原始日志条数，最大值为1000，获取后续日志需使用Context参数
     */
    public $Count;

    /**
     * @var string 原始日志是否按时间排序返回；可选值：asc(升序)、desc(降序)，默认为 desc
     */
    public $Sort;

    /**
     * @var string 透传上次接口返回的Context值，可获取后续更多日志，总计最多可获取1万条原始日志，过期时间1小时
     */
    public $Context;

    /**
     * @param integer $StartTime 要检索分析的日志的起始时间，Unix时间戳（毫秒）
     * @param integer $EndTime 要检索分析的日志的结束时间，Unix时间戳（毫秒）
     * @param string $QueryString 检索分析语句，最大长度为12KB，查询语法可参考文档 https://cloud.tencent.com/document/product/296/50508
     * @param integer $Count 表示单次查询返回的原始日志条数，最大值为1000，获取后续日志需使用Context参数
     * @param string $Sort 原始日志是否按时间排序返回；可选值：asc(升序)、desc(降序)，默认为 desc
     * @param string $Context 透传上次接口返回的Context值，可获取后续更多日志，总计最多可获取1万条原始日志，过期时间1小时
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

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = $param["QueryString"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }
    }
}
