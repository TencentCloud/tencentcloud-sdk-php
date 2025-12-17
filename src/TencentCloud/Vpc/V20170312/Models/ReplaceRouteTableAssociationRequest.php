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
 * ReplaceRouteTableAssociation请求参数结构体
 *
 * @method string getRouteTableId() 获取路由表实例ID，例如：rtb-azd4dt1c。
 * @method void setRouteTableId(string $RouteTableId) 设置路由表实例ID，例如：rtb-azd4dt1c。
 * @method string getSubnetId() 获取子网实例ID，例如：subnet-3x5lf5q0。可通过DescribeSubnets接口查询。对于存在子网唯一ID的子网，该参数为必选；否则， SubnetId和CidrBlock必选二选一。
 * @method void setSubnetId(string $SubnetId) 设置子网实例ID，例如：subnet-3x5lf5q0。可通过DescribeSubnets接口查询。对于存在子网唯一ID的子网，该参数为必选；否则， SubnetId和CidrBlock必选二选一。
 */
class ReplaceRouteTableAssociationRequest extends AbstractModel
{
    /**
     * @var string 路由表实例ID，例如：rtb-azd4dt1c。
     */
    public $RouteTableId;

    /**
     * @var string 子网实例ID，例如：subnet-3x5lf5q0。可通过DescribeSubnets接口查询。对于存在子网唯一ID的子网，该参数为必选；否则， SubnetId和CidrBlock必选二选一。
     */
    public $SubnetId;

    /**
     * @param string $RouteTableId 路由表实例ID，例如：rtb-azd4dt1c。
     * @param string $SubnetId 子网实例ID，例如：subnet-3x5lf5q0。可通过DescribeSubnets接口查询。对于存在子网唯一ID的子网，该参数为必选；否则， SubnetId和CidrBlock必选二选一。
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
        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }
    }
}
