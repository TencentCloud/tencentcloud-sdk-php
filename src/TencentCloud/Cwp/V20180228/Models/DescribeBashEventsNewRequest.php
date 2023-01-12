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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBashEventsNew请求参数结构体
 *
 * @method integer getLimit() 获取返回数量，默认为10，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为10，最大值为100。
 * @method array getFilters() 获取过滤条件。
<li>HostName - String - 是否必填：否 - 主机名</li>
<li>Hostip - String - 是否必填：否 - 主机内网IP</li>
<li>HostIp - String - 是否必填：否 - 主机内网IP</li>
<li>RuleCategory - Int - 是否必填：否 - 策略类型,全部或者单选(0:系统 1:用户)</li>
<li>RuleName - String - 是否必填：否 - 策略名称</li>
<li>RuleLevel - Int - 是否必填：否 - 威胁等级,可以多选</li>
<li>Status - Int - 是否必填：否 - 处理状态,可多选(0:待处理 1:已处理 2:已加白  3:已忽略 4:已删除 5:已拦截)</li>
<li>DetectBy - Int - 是否必填：否 - 数据来源,可多选(0:bash日志 1:实时监控)</li>
<li>StartTime - String - 是否必填：否 - 开始时间</li>
<li>EndTime - String - 是否必填：否 - 结束时间</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>HostName - String - 是否必填：否 - 主机名</li>
<li>Hostip - String - 是否必填：否 - 主机内网IP</li>
<li>HostIp - String - 是否必填：否 - 主机内网IP</li>
<li>RuleCategory - Int - 是否必填：否 - 策略类型,全部或者单选(0:系统 1:用户)</li>
<li>RuleName - String - 是否必填：否 - 策略名称</li>
<li>RuleLevel - Int - 是否必填：否 - 威胁等级,可以多选</li>
<li>Status - Int - 是否必填：否 - 处理状态,可多选(0:待处理 1:已处理 2:已加白  3:已忽略 4:已删除 5:已拦截)</li>
<li>DetectBy - Int - 是否必填：否 - 数据来源,可多选(0:bash日志 1:实时监控)</li>
<li>StartTime - String - 是否必填：否 - 开始时间</li>
<li>EndTime - String - 是否必填：否 - 结束时间</li>
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method string getOrder() 获取排序方式：根据请求次数排序：asc-升序/desc-降序
 * @method void setOrder(string $Order) 设置排序方式：根据请求次数排序：asc-升序/desc-降序
 * @method string getBy() 获取排序字段：CreateTime-发生时间。ModifyTime-处理时间
 * @method void setBy(string $By) 设置排序字段：CreateTime-发生时间。ModifyTime-处理时间
 */
class DescribeBashEventsNewRequest extends AbstractModel
{
    /**
     * @var integer 返回数量，默认为10，最大值为100。
     */
    public $Limit;

    /**
     * @var array 过滤条件。
<li>HostName - String - 是否必填：否 - 主机名</li>
<li>Hostip - String - 是否必填：否 - 主机内网IP</li>
<li>HostIp - String - 是否必填：否 - 主机内网IP</li>
<li>RuleCategory - Int - 是否必填：否 - 策略类型,全部或者单选(0:系统 1:用户)</li>
<li>RuleName - String - 是否必填：否 - 策略名称</li>
<li>RuleLevel - Int - 是否必填：否 - 威胁等级,可以多选</li>
<li>Status - Int - 是否必填：否 - 处理状态,可多选(0:待处理 1:已处理 2:已加白  3:已忽略 4:已删除 5:已拦截)</li>
<li>DetectBy - Int - 是否必填：否 - 数据来源,可多选(0:bash日志 1:实时监控)</li>
<li>StartTime - String - 是否必填：否 - 开始时间</li>
<li>EndTime - String - 是否必填：否 - 结束时间</li>
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var string 排序方式：根据请求次数排序：asc-升序/desc-降序
     */
    public $Order;

    /**
     * @var string 排序字段：CreateTime-发生时间。ModifyTime-处理时间
     */
    public $By;

    /**
     * @param integer $Limit 返回数量，默认为10，最大值为100。
     * @param array $Filters 过滤条件。
<li>HostName - String - 是否必填：否 - 主机名</li>
<li>Hostip - String - 是否必填：否 - 主机内网IP</li>
<li>HostIp - String - 是否必填：否 - 主机内网IP</li>
<li>RuleCategory - Int - 是否必填：否 - 策略类型,全部或者单选(0:系统 1:用户)</li>
<li>RuleName - String - 是否必填：否 - 策略名称</li>
<li>RuleLevel - Int - 是否必填：否 - 威胁等级,可以多选</li>
<li>Status - Int - 是否必填：否 - 处理状态,可多选(0:待处理 1:已处理 2:已加白  3:已忽略 4:已删除 5:已拦截)</li>
<li>DetectBy - Int - 是否必填：否 - 数据来源,可多选(0:bash日志 1:实时监控)</li>
<li>StartTime - String - 是否必填：否 - 开始时间</li>
<li>EndTime - String - 是否必填：否 - 结束时间</li>
     * @param integer $Offset 偏移量，默认为0。
     * @param string $Order 排序方式：根据请求次数排序：asc-升序/desc-降序
     * @param string $By 排序字段：CreateTime-发生时间。ModifyTime-处理时间
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
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
