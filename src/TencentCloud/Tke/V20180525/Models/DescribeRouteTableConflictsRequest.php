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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getRouteTableCidrBlock() 获取路由表CIDR
 * @method void setRouteTableCidrBlock(string $RouteTableCidrBlock) 设置路由表CIDR
 * @method string getVpcId() 获取路由表绑定的VPC
 * @method void setVpcId(string $VpcId) 设置路由表绑定的VPC
 */

/**
 *DescribeRouteTableConflicts请求参数结构体
 */
class DescribeRouteTableConflictsRequest extends AbstractModel
{
    /**
     * @var string 路由表CIDR
     */
    public $RouteTableCidrBlock;

    /**
     * @var string 路由表绑定的VPC
     */
    public $VpcId;
    /**
     * @param string $RouteTableCidrBlock 路由表CIDR
     * @param string $VpcId 路由表绑定的VPC
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("RouteTableCidrBlock",$param) and $param["RouteTableCidrBlock"] !== null) {
            $this->RouteTableCidrBlock = $param["RouteTableCidrBlock"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }
    }
}
