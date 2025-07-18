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
 * ModifyClusterEndpointSP请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method array getSecurityPolicies() 获取安全策略放通单个IP或CIDR(例如: "192.168.1.0/24",默认为拒绝所有)
 * @method void setSecurityPolicies(array $SecurityPolicies) 设置安全策略放通单个IP或CIDR(例如: "192.168.1.0/24",默认为拒绝所有)
 * @method string getSecurityGroup() 获取修改外网访问安全组
 * @method void setSecurityGroup(string $SecurityGroup) 设置修改外网访问安全组
 */
class ModifyClusterEndpointSPRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var array 安全策略放通单个IP或CIDR(例如: "192.168.1.0/24",默认为拒绝所有)
     */
    public $SecurityPolicies;

    /**
     * @var string 修改外网访问安全组
     */
    public $SecurityGroup;

    /**
     * @param string $ClusterId 集群ID
     * @param array $SecurityPolicies 安全策略放通单个IP或CIDR(例如: "192.168.1.0/24",默认为拒绝所有)
     * @param string $SecurityGroup 修改外网访问安全组
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("SecurityPolicies",$param) and $param["SecurityPolicies"] !== null) {
            $this->SecurityPolicies = $param["SecurityPolicies"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }
    }
}
