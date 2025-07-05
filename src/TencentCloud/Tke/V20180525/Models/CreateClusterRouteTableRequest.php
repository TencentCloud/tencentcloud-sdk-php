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
 * CreateClusterRouteTable请求参数结构体
 *
 * @method string getRouteTableName() 获取路由表名称，一般为集群ID
 * @method void setRouteTableName(string $RouteTableName) 设置路由表名称，一般为集群ID
 * @method string getRouteTableCidrBlock() 获取路由表CIDR
 * @method void setRouteTableCidrBlock(string $RouteTableCidrBlock) 设置路由表CIDR
 * @method string getVpcId() 获取路由表绑定的VPC
 * @method void setVpcId(string $VpcId) 设置路由表绑定的VPC
 * @method integer getIgnoreClusterCidrConflict() 获取是否忽略CIDR与 vpc 路由表的冲突， 0 表示不忽略，1表示忽略。默认不忽略
 * @method void setIgnoreClusterCidrConflict(integer $IgnoreClusterCidrConflict) 设置是否忽略CIDR与 vpc 路由表的冲突， 0 表示不忽略，1表示忽略。默认不忽略
 */
class CreateClusterRouteTableRequest extends AbstractModel
{
    /**
     * @var string 路由表名称，一般为集群ID
     */
    public $RouteTableName;

    /**
     * @var string 路由表CIDR
     */
    public $RouteTableCidrBlock;

    /**
     * @var string 路由表绑定的VPC
     */
    public $VpcId;

    /**
     * @var integer 是否忽略CIDR与 vpc 路由表的冲突， 0 表示不忽略，1表示忽略。默认不忽略
     */
    public $IgnoreClusterCidrConflict;

    /**
     * @param string $RouteTableName 路由表名称，一般为集群ID
     * @param string $RouteTableCidrBlock 路由表CIDR
     * @param string $VpcId 路由表绑定的VPC
     * @param integer $IgnoreClusterCidrConflict 是否忽略CIDR与 vpc 路由表的冲突， 0 表示不忽略，1表示忽略。默认不忽略
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
        if (array_key_exists("RouteTableName",$param) and $param["RouteTableName"] !== null) {
            $this->RouteTableName = $param["RouteTableName"];
        }

        if (array_key_exists("RouteTableCidrBlock",$param) and $param["RouteTableCidrBlock"] !== null) {
            $this->RouteTableCidrBlock = $param["RouteTableCidrBlock"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("IgnoreClusterCidrConflict",$param) and $param["IgnoreClusterCidrConflict"] !== null) {
            $this->IgnoreClusterCidrConflict = $param["IgnoreClusterCidrConflict"];
        }
    }
}
