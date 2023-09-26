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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccessFastAnalysis请求参数结构体
 *
 * @method string getTopicId() 获取客户要查询的日志主题ID，每个客户都有对应的一个主题
 * @method void setTopicId(string $TopicId) 设置客户要查询的日志主题ID，每个客户都有对应的一个主题
 * @method integer getFrom() 获取要查询的日志的起始时间，Unix时间戳，单位ms
 * @method void setFrom(integer $From) 设置要查询的日志的起始时间，Unix时间戳，单位ms
 * @method integer getTo() 获取要查询的日志的结束时间，Unix时间戳，单位ms
 * @method void setTo(integer $To) 设置要查询的日志的结束时间，Unix时间戳，单位ms
 * @method string getQuery() 获取查询语句，语句长度最大为4096，由于本接口是分析接口，如果无过滤条件，必须传 * 表示匹配所有，参考CLS的分析统计语句的文档
 * @method void setQuery(string $Query) 设置查询语句，语句长度最大为4096，由于本接口是分析接口，如果无过滤条件，必须传 * 表示匹配所有，参考CLS的分析统计语句的文档
 * @method string getFieldName() 获取需要分析统计的字段名
 * @method void setFieldName(string $FieldName) 设置需要分析统计的字段名
 * @method string getSort() 获取排序字段,升序asc,降序desc，默认降序desc 
 * @method void setSort(string $Sort) 设置排序字段,升序asc,降序desc，默认降序desc 
 * @method integer getCount() 获取返回的top数，默认返回top5
 * @method void setCount(integer $Count) 设置返回的top数，默认返回top5
 */
class DescribeAccessFastAnalysisRequest extends AbstractModel
{
    /**
     * @var string 客户要查询的日志主题ID，每个客户都有对应的一个主题
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
     * @var string 查询语句，语句长度最大为4096，由于本接口是分析接口，如果无过滤条件，必须传 * 表示匹配所有，参考CLS的分析统计语句的文档
     */
    public $Query;

    /**
     * @var string 需要分析统计的字段名
     */
    public $FieldName;

    /**
     * @var string 排序字段,升序asc,降序desc，默认降序desc 
     */
    public $Sort;

    /**
     * @var integer 返回的top数，默认返回top5
     */
    public $Count;

    /**
     * @param string $TopicId 客户要查询的日志主题ID，每个客户都有对应的一个主题
     * @param integer $From 要查询的日志的起始时间，Unix时间戳，单位ms
     * @param integer $To 要查询的日志的结束时间，Unix时间戳，单位ms
     * @param string $Query 查询语句，语句长度最大为4096，由于本接口是分析接口，如果无过滤条件，必须传 * 表示匹配所有，参考CLS的分析统计语句的文档
     * @param string $FieldName 需要分析统计的字段名
     * @param string $Sort 排序字段,升序asc,降序desc，默认降序desc 
     * @param integer $Count 返回的top数，默认返回top5
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

        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
