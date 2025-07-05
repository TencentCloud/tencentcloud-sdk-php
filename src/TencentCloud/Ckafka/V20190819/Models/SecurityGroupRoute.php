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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全组路由信息
 *
 * @method InstanceRoute getInstanceRoute() 获取路由信息
 * @method void setInstanceRoute(InstanceRoute $InstanceRoute) 设置路由信息
 * @method array getSecurityGroupIds() 获取关联的安全组列表
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置关联的安全组列表
 * @method string getInstanceName() 获取ckafka集群实例名称
 * @method void setInstanceName(string $InstanceName) 设置ckafka集群实例名称
 * @method string getVpcId() 获取路由vpcId
 * @method void setVpcId(string $VpcId) 设置路由vpcId
 * @method string getVip() 获取路由vip
 * @method void setVip(string $Vip) 设置路由vip
 */
class SecurityGroupRoute extends AbstractModel
{
    /**
     * @var InstanceRoute 路由信息
     */
    public $InstanceRoute;

    /**
     * @var array 关联的安全组列表
     */
    public $SecurityGroupIds;

    /**
     * @var string ckafka集群实例名称
     */
    public $InstanceName;

    /**
     * @var string 路由vpcId
     */
    public $VpcId;

    /**
     * @var string 路由vip
     */
    public $Vip;

    /**
     * @param InstanceRoute $InstanceRoute 路由信息
     * @param array $SecurityGroupIds 关联的安全组列表
     * @param string $InstanceName ckafka集群实例名称
     * @param string $VpcId 路由vpcId
     * @param string $Vip 路由vip
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
        if (array_key_exists("InstanceRoute",$param) and $param["InstanceRoute"] !== null) {
            $this->InstanceRoute = new InstanceRoute();
            $this->InstanceRoute->deserialize($param["InstanceRoute"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }
    }
}
