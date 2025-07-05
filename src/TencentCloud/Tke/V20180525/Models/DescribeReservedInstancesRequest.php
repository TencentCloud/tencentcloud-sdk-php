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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReservedInstances请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，默认0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认0。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。
 * @method array getFilters() 获取status
按照**【状态**】进行过滤。状态：Creating、Active、Expired、Refunded。
类型：String
必选：否

resource-type
按照**【资源类型**】进行过滤。资源类型：common、amd、v100、t4、a10\*gnv4、a10\*gnv4v等，common表示通用类型。
类型：String
必选：否

cpu
按照**【核数**】进行过滤。
类型：String
必选：否

memory
按照**【内存**】进行过滤。
类型：String
必选：否

gpu
按照**【GPU卡数**】进行过滤，取值有0.25、0.5、1、2、4等。
类型：String
必选：否

cluster-id
按照**【集群ID**】进行过滤。
类型：String
必选：否

node-name
按照**【节点名称**】进行过滤。
类型：String
必选：否

scope
按照**【可用区**】进行过滤。比如：ap-guangzhou-2，为空字符串表示地域抵扣范围。如果只过滤可用区抵扣范围，需要同时将cluster-id、node-name设置为空字符串。
类型：String
必选：否

reserved-instance-id
按照**【预留实例ID**】进行过滤。预留实例ID形如：eksri-xxxxxxxx。
类型：String
必选：否

reserved-instance-name
按照**【预留实例名称**】进行过滤。
类型：String
必选：否

reserved-instance-deduct
按照**【上个周期抵扣的预留券**】进行过滤。Values可不设置。
必选：否

reserved-instance-not-deduct
按照**【上个周期未抵扣的预留券**】进行过滤。Values可不设置。
必选：否
 * @method void setFilters(array $Filters) 设置status
按照**【状态**】进行过滤。状态：Creating、Active、Expired、Refunded。
类型：String
必选：否

resource-type
按照**【资源类型**】进行过滤。资源类型：common、amd、v100、t4、a10\*gnv4、a10\*gnv4v等，common表示通用类型。
类型：String
必选：否

cpu
按照**【核数**】进行过滤。
类型：String
必选：否

memory
按照**【内存**】进行过滤。
类型：String
必选：否

gpu
按照**【GPU卡数**】进行过滤，取值有0.25、0.5、1、2、4等。
类型：String
必选：否

cluster-id
按照**【集群ID**】进行过滤。
类型：String
必选：否

node-name
按照**【节点名称**】进行过滤。
类型：String
必选：否

scope
按照**【可用区**】进行过滤。比如：ap-guangzhou-2，为空字符串表示地域抵扣范围。如果只过滤可用区抵扣范围，需要同时将cluster-id、node-name设置为空字符串。
类型：String
必选：否

reserved-instance-id
按照**【预留实例ID**】进行过滤。预留实例ID形如：eksri-xxxxxxxx。
类型：String
必选：否

reserved-instance-name
按照**【预留实例名称**】进行过滤。
类型：String
必选：否

reserved-instance-deduct
按照**【上个周期抵扣的预留券**】进行过滤。Values可不设置。
必选：否

reserved-instance-not-deduct
按照**【上个周期未抵扣的预留券**】进行过滤。Values可不设置。
必选：否
 * @method string getOrderField() 获取排序字段。支持CreatedAt、ActiveAt、ExpireAt。默认值CreatedAt。
 * @method void setOrderField(string $OrderField) 设置排序字段。支持CreatedAt、ActiveAt、ExpireAt。默认值CreatedAt。
 * @method string getOrderDirection() 获取排序方法。顺序：ASC，倒序：DESC。默认值DESC。
 * @method void setOrderDirection(string $OrderDirection) 设置排序方法。顺序：ASC，倒序：DESC。默认值DESC。
 */
class DescribeReservedInstancesRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，默认0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var array status
按照**【状态**】进行过滤。状态：Creating、Active、Expired、Refunded。
类型：String
必选：否

resource-type
按照**【资源类型**】进行过滤。资源类型：common、amd、v100、t4、a10\*gnv4、a10\*gnv4v等，common表示通用类型。
类型：String
必选：否

cpu
按照**【核数**】进行过滤。
类型：String
必选：否

memory
按照**【内存**】进行过滤。
类型：String
必选：否

gpu
按照**【GPU卡数**】进行过滤，取值有0.25、0.5、1、2、4等。
类型：String
必选：否

cluster-id
按照**【集群ID**】进行过滤。
类型：String
必选：否

node-name
按照**【节点名称**】进行过滤。
类型：String
必选：否

scope
按照**【可用区**】进行过滤。比如：ap-guangzhou-2，为空字符串表示地域抵扣范围。如果只过滤可用区抵扣范围，需要同时将cluster-id、node-name设置为空字符串。
类型：String
必选：否

reserved-instance-id
按照**【预留实例ID**】进行过滤。预留实例ID形如：eksri-xxxxxxxx。
类型：String
必选：否

reserved-instance-name
按照**【预留实例名称**】进行过滤。
类型：String
必选：否

reserved-instance-deduct
按照**【上个周期抵扣的预留券**】进行过滤。Values可不设置。
必选：否

reserved-instance-not-deduct
按照**【上个周期未抵扣的预留券**】进行过滤。Values可不设置。
必选：否
     */
    public $Filters;

    /**
     * @var string 排序字段。支持CreatedAt、ActiveAt、ExpireAt。默认值CreatedAt。
     */
    public $OrderField;

    /**
     * @var string 排序方法。顺序：ASC，倒序：DESC。默认值DESC。
     */
    public $OrderDirection;

    /**
     * @param integer $Offset 偏移量，默认0。
     * @param integer $Limit 返回数量，默认为20，最大值为100。
     * @param array $Filters status
按照**【状态**】进行过滤。状态：Creating、Active、Expired、Refunded。
类型：String
必选：否

resource-type
按照**【资源类型**】进行过滤。资源类型：common、amd、v100、t4、a10\*gnv4、a10\*gnv4v等，common表示通用类型。
类型：String
必选：否

cpu
按照**【核数**】进行过滤。
类型：String
必选：否

memory
按照**【内存**】进行过滤。
类型：String
必选：否

gpu
按照**【GPU卡数**】进行过滤，取值有0.25、0.5、1、2、4等。
类型：String
必选：否

cluster-id
按照**【集群ID**】进行过滤。
类型：String
必选：否

node-name
按照**【节点名称**】进行过滤。
类型：String
必选：否

scope
按照**【可用区**】进行过滤。比如：ap-guangzhou-2，为空字符串表示地域抵扣范围。如果只过滤可用区抵扣范围，需要同时将cluster-id、node-name设置为空字符串。
类型：String
必选：否

reserved-instance-id
按照**【预留实例ID**】进行过滤。预留实例ID形如：eksri-xxxxxxxx。
类型：String
必选：否

reserved-instance-name
按照**【预留实例名称**】进行过滤。
类型：String
必选：否

reserved-instance-deduct
按照**【上个周期抵扣的预留券**】进行过滤。Values可不设置。
必选：否

reserved-instance-not-deduct
按照**【上个周期未抵扣的预留券**】进行过滤。Values可不设置。
必选：否
     * @param string $OrderField 排序字段。支持CreatedAt、ActiveAt、ExpireAt。默认值CreatedAt。
     * @param string $OrderDirection 排序方法。顺序：ASC，倒序：DESC。默认值DESC。
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
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

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }
    }
}
