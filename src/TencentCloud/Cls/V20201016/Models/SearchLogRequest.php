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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchLog请求参数结构体
 *
 * @method string getTopicId() 获取要查询的日志主题ID
 * @method void setTopicId(string $TopicId) 设置要查询的日志主题ID
 * @method integer getFrom() 获取要查询的日志的起始时间，Unix时间戳，单位ms
 * @method void setFrom(integer $From) 设置要查询的日志的起始时间，Unix时间戳，单位ms
 * @method integer getTo() 获取要查询的日志的结束时间，Unix时间戳，单位ms
 * @method void setTo(integer $To) 设置要查询的日志的结束时间，Unix时间戳，单位ms
 * @method string getQuery() 获取查询语句，语句长度最大为12KB
查询语句由 <a href="https://cloud.tencent.com/document/product/614/47044" target="_blank">[检索条件]</a> | <a href="https://cloud.tencent.com/document/product/614/44061" target="_blank">[SQL语句]</a>构成，无需对日志进行统计分析时，可省略其中的管道符<code>|</code>及SQL语句
 * @method void setQuery(string $Query) 设置查询语句，语句长度最大为12KB
查询语句由 <a href="https://cloud.tencent.com/document/product/614/47044" target="_blank">[检索条件]</a> | <a href="https://cloud.tencent.com/document/product/614/44061" target="_blank">[SQL语句]</a>构成，无需对日志进行统计分析时，可省略其中的管道符<code>|</code>及SQL语句
 * @method integer getLimit() 获取仅当查询语句(Query)不包含SQL时有效
表示单次查询返回的原始日志条数，最大值为1000，获取后续日志需使用Context参数
SQL结果条数指定方式参考<a href="https://cloud.tencent.com/document/product/614/58977" target="_blank">SQL LIMIT语法</a>
 * @method void setLimit(integer $Limit) 设置仅当查询语句(Query)不包含SQL时有效
表示单次查询返回的原始日志条数，最大值为1000，获取后续日志需使用Context参数
SQL结果条数指定方式参考<a href="https://cloud.tencent.com/document/product/614/58977" target="_blank">SQL LIMIT语法</a>
 * @method string getContext() 获取仅当查询语句(Query)不包含SQL时有效
透传上次接口返回的Context值，可获取后续日志，总计最多可获取1万条原始日志。过期时间1小时
SQL获取后续结果参考<a href="https://cloud.tencent.com/document/product/614/58977" target="_blank">SQL LIMIT语法</a>
 * @method void setContext(string $Context) 设置仅当查询语句(Query)不包含SQL时有效
透传上次接口返回的Context值，可获取后续日志，总计最多可获取1万条原始日志。过期时间1小时
SQL获取后续结果参考<a href="https://cloud.tencent.com/document/product/614/58977" target="_blank">SQL LIMIT语法</a>
 * @method string getSort() 获取仅当查询语句(Query)不包含SQL时有效。
原始日志是否按时间排序返回；可选值：asc(升序)、desc(降序)，默认为 desc
SQL结果排序方式参考<a href="https://cloud.tencent.com/document/product/614/58978" target="_blank">SQL ORDER BY 语法</a>
 * @method void setSort(string $Sort) 设置仅当查询语句(Query)不包含SQL时有效。
原始日志是否按时间排序返回；可选值：asc(升序)、desc(降序)，默认为 desc
SQL结果排序方式参考<a href="https://cloud.tencent.com/document/product/614/58978" target="_blank">SQL ORDER BY 语法</a>
 * @method boolean getUseNewAnalysis() 获取为true代表使用新的检索结果返回方式，响应参数AnalysisRecords和Columns有效；为false时代表使用老检索结果返回方式, AnalysisResults和ColNames有效
 * @method void setUseNewAnalysis(boolean $UseNewAnalysis) 设置为true代表使用新的检索结果返回方式，响应参数AnalysisRecords和Columns有效；为false时代表使用老检索结果返回方式, AnalysisResults和ColNames有效
 */
class SearchLogRequest extends AbstractModel
{
    /**
     * @var string 要查询的日志主题ID
     */
    public $TopicId;

    /**
     * @var integer 要查询的日志的起始时间，Unix时间戳，单位ms
     */
    public $From;

    /**
     * @var integer 要查询的日志的结束时间，Unix时间戳，单位ms
     */
    public $To;

    /**
     * @var string 查询语句，语句长度最大为12KB
查询语句由 <a href="https://cloud.tencent.com/document/product/614/47044" target="_blank">[检索条件]</a> | <a href="https://cloud.tencent.com/document/product/614/44061" target="_blank">[SQL语句]</a>构成，无需对日志进行统计分析时，可省略其中的管道符<code>|</code>及SQL语句
     */
    public $Query;

    /**
     * @var integer 仅当查询语句(Query)不包含SQL时有效
表示单次查询返回的原始日志条数，最大值为1000，获取后续日志需使用Context参数
SQL结果条数指定方式参考<a href="https://cloud.tencent.com/document/product/614/58977" target="_blank">SQL LIMIT语法</a>
     */
    public $Limit;

    /**
     * @var string 仅当查询语句(Query)不包含SQL时有效
透传上次接口返回的Context值，可获取后续日志，总计最多可获取1万条原始日志。过期时间1小时
SQL获取后续结果参考<a href="https://cloud.tencent.com/document/product/614/58977" target="_blank">SQL LIMIT语法</a>
     */
    public $Context;

    /**
     * @var string 仅当查询语句(Query)不包含SQL时有效。
原始日志是否按时间排序返回；可选值：asc(升序)、desc(降序)，默认为 desc
SQL结果排序方式参考<a href="https://cloud.tencent.com/document/product/614/58978" target="_blank">SQL ORDER BY 语法</a>
     */
    public $Sort;

    /**
     * @var boolean 为true代表使用新的检索结果返回方式，响应参数AnalysisRecords和Columns有效；为false时代表使用老检索结果返回方式, AnalysisResults和ColNames有效
     */
    public $UseNewAnalysis;

    /**
     * @param string $TopicId 要查询的日志主题ID
     * @param integer $From 要查询的日志的起始时间，Unix时间戳，单位ms
     * @param integer $To 要查询的日志的结束时间，Unix时间戳，单位ms
     * @param string $Query 查询语句，语句长度最大为12KB
查询语句由 <a href="https://cloud.tencent.com/document/product/614/47044" target="_blank">[检索条件]</a> | <a href="https://cloud.tencent.com/document/product/614/44061" target="_blank">[SQL语句]</a>构成，无需对日志进行统计分析时，可省略其中的管道符<code>|</code>及SQL语句
     * @param integer $Limit 仅当查询语句(Query)不包含SQL时有效
表示单次查询返回的原始日志条数，最大值为1000，获取后续日志需使用Context参数
SQL结果条数指定方式参考<a href="https://cloud.tencent.com/document/product/614/58977" target="_blank">SQL LIMIT语法</a>
     * @param string $Context 仅当查询语句(Query)不包含SQL时有效
透传上次接口返回的Context值，可获取后续日志，总计最多可获取1万条原始日志。过期时间1小时
SQL获取后续结果参考<a href="https://cloud.tencent.com/document/product/614/58977" target="_blank">SQL LIMIT语法</a>
     * @param string $Sort 仅当查询语句(Query)不包含SQL时有效。
原始日志是否按时间排序返回；可选值：asc(升序)、desc(降序)，默认为 desc
SQL结果排序方式参考<a href="https://cloud.tencent.com/document/product/614/58978" target="_blank">SQL ORDER BY 语法</a>
     * @param boolean $UseNewAnalysis 为true代表使用新的检索结果返回方式，响应参数AnalysisRecords和Columns有效；为false时代表使用老检索结果返回方式, AnalysisResults和ColNames有效
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("UseNewAnalysis",$param) and $param["UseNewAnalysis"] !== null) {
            $this->UseNewAnalysis = $param["UseNewAnalysis"];
        }
    }
}
