<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getSecurityGroupId() 获取安全组Id。
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置安全组Id。
 * @method array getInstanceIds() 获取实例ID列表，一个或者多个实例Id组成的数组。
 * @method void setInstanceIds(array $InstanceIds) 设置实例ID列表，一个或者多个实例Id组成的数组。
 */

/**
 *AssociateSecurityGroups请求参数结构体
 */
class AssociateSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string 安全组Id。
     */
    public $SecurityGroupId;

    /**
     * @var array 实例ID列表，一个或者多个实例Id组成的数组。
     */
    public $InstanceIds;
    /**
     * @param string $SecurityGroupId 安全组Id。
     * @param array $InstanceIds 实例ID列表，一个或者多个实例Id组成的数组。
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
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
