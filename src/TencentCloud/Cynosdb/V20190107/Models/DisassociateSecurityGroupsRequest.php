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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DisassociateSecurityGroups请求参数结构体
 *
 * @method array getInstanceIds() 获取实例组ID数组
 * @method void setInstanceIds(array $InstanceIds) 设置实例组ID数组
 * @method array getSecurityGroupIds() 获取要修改的安全组ID列表，一个或者多个安全组ID组成的数组。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置要修改的安全组ID列表，一个或者多个安全组ID组成的数组。
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 */
class DisassociateSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var array 实例组ID数组
     */
    public $InstanceIds;

    /**
     * @var array 要修改的安全组ID列表，一个或者多个安全组ID组成的数组。
     */
    public $SecurityGroupIds;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @param array $InstanceIds 实例组ID数组
     * @param array $SecurityGroupIds 要修改的安全组ID列表，一个或者多个安全组ID组成的数组。
     * @param string $Zone 可用区
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
