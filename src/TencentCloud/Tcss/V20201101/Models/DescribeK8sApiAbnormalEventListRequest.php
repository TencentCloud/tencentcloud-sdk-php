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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeK8sApiAbnormalEventList请求参数结构体
 *
 * @method array getFilters() 获取过滤条件。
<li>TimeRange - string -是否必填: 否 - 时间范围筛选 ["2022-03-31 16:55:00", "2022-03-31 17:00:00"]</li>
<li>MatchRules - string  - 是否必填: 否 -命中规则筛选</li>
<li>RiskLevel - string  - 是否必填: 否 -威胁等级筛选</li>
<li>Status - string  - 是否必填: 否 -事件状态筛选</li>
<li>MatchRuleType - string  - 是否必填: 否 -命中规则类型筛选</li>
<li>ClusterRunningStatus - string  - 是否必填: 否 -集群运行状态</li>
<li>ClusterName - string  - 是否必填: 否 -集群名称</li>
<li>ClusterID - string  - 是否必填: 否 -集群ID</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>TimeRange - string -是否必填: 否 - 时间范围筛选 ["2022-03-31 16:55:00", "2022-03-31 17:00:00"]</li>
<li>MatchRules - string  - 是否必填: 否 -命中规则筛选</li>
<li>RiskLevel - string  - 是否必填: 否 -威胁等级筛选</li>
<li>Status - string  - 是否必填: 否 -事件状态筛选</li>
<li>MatchRuleType - string  - 是否必填: 否 -命中规则类型筛选</li>
<li>ClusterRunningStatus - string  - 是否必填: 否 -集群运行状态</li>
<li>ClusterName - string  - 是否必填: 否 -集群名称</li>
<li>ClusterID - string  - 是否必填: 否 -集群ID</li>
 * @method integer getLimit() 获取需要返回的数量，默认为10，最大值为100
 * @method void setLimit(integer $Limit) 设置需要返回的数量，默认为10，最大值为100
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method string getOrder() 获取排序方式
 * @method void setOrder(string $Order) 设置排序方式
 * @method string getBy() 获取排序字段
LatestFoundTime: 最近生成时间
AlarmCount: 告警数量
 * @method void setBy(string $By) 设置排序字段
LatestFoundTime: 最近生成时间
AlarmCount: 告警数量
 */
class DescribeK8sApiAbnormalEventListRequest extends AbstractModel
{
    /**
     * @var array 过滤条件。
<li>TimeRange - string -是否必填: 否 - 时间范围筛选 ["2022-03-31 16:55:00", "2022-03-31 17:00:00"]</li>
<li>MatchRules - string  - 是否必填: 否 -命中规则筛选</li>
<li>RiskLevel - string  - 是否必填: 否 -威胁等级筛选</li>
<li>Status - string  - 是否必填: 否 -事件状态筛选</li>
<li>MatchRuleType - string  - 是否必填: 否 -命中规则类型筛选</li>
<li>ClusterRunningStatus - string  - 是否必填: 否 -集群运行状态</li>
<li>ClusterName - string  - 是否必填: 否 -集群名称</li>
<li>ClusterID - string  - 是否必填: 否 -集群ID</li>
     */
    public $Filters;

    /**
     * @var integer 需要返回的数量，默认为10，最大值为100
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var string 排序方式
     */
    public $Order;

    /**
     * @var string 排序字段
LatestFoundTime: 最近生成时间
AlarmCount: 告警数量
     */
    public $By;

    /**
     * @param array $Filters 过滤条件。
<li>TimeRange - string -是否必填: 否 - 时间范围筛选 ["2022-03-31 16:55:00", "2022-03-31 17:00:00"]</li>
<li>MatchRules - string  - 是否必填: 否 -命中规则筛选</li>
<li>RiskLevel - string  - 是否必填: 否 -威胁等级筛选</li>
<li>Status - string  - 是否必填: 否 -事件状态筛选</li>
<li>MatchRuleType - string  - 是否必填: 否 -命中规则类型筛选</li>
<li>ClusterRunningStatus - string  - 是否必填: 否 -集群运行状态</li>
<li>ClusterName - string  - 是否必填: 否 -集群名称</li>
<li>ClusterID - string  - 是否必填: 否 -集群ID</li>
     * @param integer $Limit 需要返回的数量，默认为10，最大值为100
     * @param integer $Offset 偏移量，默认为0。
     * @param string $Order 排序方式
     * @param string $By 排序字段
LatestFoundTime: 最近生成时间
AlarmCount: 告警数量
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new RunTimeFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
