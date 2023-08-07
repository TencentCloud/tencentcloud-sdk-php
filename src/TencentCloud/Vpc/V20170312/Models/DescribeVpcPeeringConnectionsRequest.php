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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVpcPeeringConnections请求参数结构体
 *
 * @method array getPeeringConnectionIds() 获取对等连接唯一ID数组。
 * @method void setPeeringConnectionIds(array $PeeringConnectionIds) 设置对等连接唯一ID数组。
 * @method array getFilters() 获取过滤条件，参数不支持同时指定PeeringConnectionIds和Filters。
<li>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。</li>
<li>state String - （过滤条件）对等连接状态，可选值有：PENDING，投放中；ACTIVE，使用中；EXPIRED，已过期；REJECTED，拒绝。</li>
<li>peering-connection-name - String - （过滤条件）对等连接名称。</li>
 * @method void setFilters(array $Filters) 设置过滤条件，参数不支持同时指定PeeringConnectionIds和Filters。
<li>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。</li>
<li>state String - （过滤条件）对等连接状态，可选值有：PENDING，投放中；ACTIVE，使用中；EXPIRED，已过期；REJECTED，拒绝。</li>
<li>peering-connection-name - String - （过滤条件）对等连接名称。</li>
 * @method integer getOffset() 获取偏移量。
 * @method void setOffset(integer $Offset) 设置偏移量。
 * @method integer getLimit() 获取请求对象个数。
 * @method void setLimit(integer $Limit) 设置请求对象个数。
 * @method string getOrderField() 获取排序字段，可选值有：CreatedTime，PeeringConnectionName。
 * @method void setOrderField(string $OrderField) 设置排序字段，可选值有：CreatedTime，PeeringConnectionName。
 * @method string getOrderDirection() 获取排序方式：DESC，降序；ASC，升序。
 * @method void setOrderDirection(string $OrderDirection) 设置排序方式：DESC，降序；ASC，升序。
 */
class DescribeVpcPeeringConnectionsRequest extends AbstractModel
{
    /**
     * @var array 对等连接唯一ID数组。
     */
    public $PeeringConnectionIds;

    /**
     * @var array 过滤条件，参数不支持同时指定PeeringConnectionIds和Filters。
<li>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。</li>
<li>state String - （过滤条件）对等连接状态，可选值有：PENDING，投放中；ACTIVE，使用中；EXPIRED，已过期；REJECTED，拒绝。</li>
<li>peering-connection-name - String - （过滤条件）对等连接名称。</li>
     */
    public $Filters;

    /**
     * @var integer 偏移量。
     */
    public $Offset;

    /**
     * @var integer 请求对象个数。
     */
    public $Limit;

    /**
     * @var string 排序字段，可选值有：CreatedTime，PeeringConnectionName。
     */
    public $OrderField;

    /**
     * @var string 排序方式：DESC，降序；ASC，升序。
     */
    public $OrderDirection;

    /**
     * @param array $PeeringConnectionIds 对等连接唯一ID数组。
     * @param array $Filters 过滤条件，参数不支持同时指定PeeringConnectionIds和Filters。
<li>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。</li>
<li>state String - （过滤条件）对等连接状态，可选值有：PENDING，投放中；ACTIVE，使用中；EXPIRED，已过期；REJECTED，拒绝。</li>
<li>peering-connection-name - String - （过滤条件）对等连接名称。</li>
     * @param integer $Offset 偏移量。
     * @param integer $Limit 请求对象个数。
     * @param string $OrderField 排序字段，可选值有：CreatedTime，PeeringConnectionName。
     * @param string $OrderDirection 排序方式：DESC，降序；ASC，升序。
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
        if (array_key_exists("PeeringConnectionIds",$param) and $param["PeeringConnectionIds"] !== null) {
            $this->PeeringConnectionIds = $param["PeeringConnectionIds"];
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }
    }
}
