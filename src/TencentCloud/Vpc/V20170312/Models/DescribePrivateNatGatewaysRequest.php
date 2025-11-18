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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrivateNatGateways请求参数结构体
 *
 * @method array getNatGatewayIds() 获取私网网关唯一`ID`，形如：`intranat-0g3blj80`。
注意：NatGatewayIds和Filters参数互斥，不能同时传入。
 * @method void setNatGatewayIds(array $NatGatewayIds) 设置私网网关唯一`ID`，形如：`intranat-0g3blj80`。
注意：NatGatewayIds和Filters参数互斥，不能同时传入。
 * @method array getFilters() 获取过滤条件。<li>NatGatewayId - String - 私网网关唯一`ID`，形如：`intranat-0g3blj80`。</li><li>NatGatewayName - String - 专线网关名称，默认模糊查询。</li><li>VpcId - String - 私网网关所在`VpcId`。</li><li>TagKey - Tag数组 - 私网网关标签键值对数组</li><li>intranat-status - String - （过滤条件）NAT实例当前状态，形如：`AVAILABLE`。</li>
 * @method void setFilters(array $Filters) 设置过滤条件。<li>NatGatewayId - String - 私网网关唯一`ID`，形如：`intranat-0g3blj80`。</li><li>NatGatewayName - String - 专线网关名称，默认模糊查询。</li><li>VpcId - String - 私网网关所在`VpcId`。</li><li>TagKey - Tag数组 - 私网网关标签键值对数组</li><li>intranat-status - String - （过滤条件）NAT实例当前状态，形如：`AVAILABLE`。</li>
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取返回数量，默认为20。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20。
 * @method string getOrderField() 获取排序字段。可选值：NatGatewayId、NatGatewayName、CreatedTime。
 * @method void setOrderField(string $OrderField) 设置排序字段。可选值：NatGatewayId、NatGatewayName、CreatedTime。
 * @method string getOrderDirection() 获取排序方式。可选值：ASC、DESC。分别表示升序、降序。
 * @method void setOrderDirection(string $OrderDirection) 设置排序方式。可选值：ASC、DESC。分别表示升序、降序。
 */
class DescribePrivateNatGatewaysRequest extends AbstractModel
{
    /**
     * @var array 私网网关唯一`ID`，形如：`intranat-0g3blj80`。
注意：NatGatewayIds和Filters参数互斥，不能同时传入。
     */
    public $NatGatewayIds;

    /**
     * @var array 过滤条件。<li>NatGatewayId - String - 私网网关唯一`ID`，形如：`intranat-0g3blj80`。</li><li>NatGatewayName - String - 专线网关名称，默认模糊查询。</li><li>VpcId - String - 私网网关所在`VpcId`。</li><li>TagKey - Tag数组 - 私网网关标签键值对数组</li><li>intranat-status - String - （过滤条件）NAT实例当前状态，形如：`AVAILABLE`。</li>
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20。
     */
    public $Limit;

    /**
     * @var string 排序字段。可选值：NatGatewayId、NatGatewayName、CreatedTime。
     */
    public $OrderField;

    /**
     * @var string 排序方式。可选值：ASC、DESC。分别表示升序、降序。
     */
    public $OrderDirection;

    /**
     * @param array $NatGatewayIds 私网网关唯一`ID`，形如：`intranat-0g3blj80`。
注意：NatGatewayIds和Filters参数互斥，不能同时传入。
     * @param array $Filters 过滤条件。<li>NatGatewayId - String - 私网网关唯一`ID`，形如：`intranat-0g3blj80`。</li><li>NatGatewayName - String - 专线网关名称，默认模糊查询。</li><li>VpcId - String - 私网网关所在`VpcId`。</li><li>TagKey - Tag数组 - 私网网关标签键值对数组</li><li>intranat-status - String - （过滤条件）NAT实例当前状态，形如：`AVAILABLE`。</li>
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 返回数量，默认为20。
     * @param string $OrderField 排序字段。可选值：NatGatewayId、NatGatewayName、CreatedTime。
     * @param string $OrderDirection 排序方式。可选值：ASC、DESC。分别表示升序、降序。
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
        if (array_key_exists("NatGatewayIds",$param) and $param["NatGatewayIds"] !== null) {
            $this->NatGatewayIds = $param["NatGatewayIds"];
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
