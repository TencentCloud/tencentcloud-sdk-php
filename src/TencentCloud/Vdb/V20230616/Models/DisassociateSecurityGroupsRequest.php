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
namespace TencentCloud\Vdb\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DisassociateSecurityGroups请求参数结构体
 *
 * @method string getSecurityGroupIds() 获取要绑定的安全组 ID，类似sg-efil****。
 * @method void setSecurityGroupIds(string $SecurityGroupIds) 设置要绑定的安全组 ID，类似sg-efil****。
 * @method array getInstanceIds() 获取实例 ID，格式如：vdb-c1nl****，支持指定多个实例。
 * @method void setInstanceIds(array $InstanceIds) 设置实例 ID，格式如：vdb-c1nl****，支持指定多个实例。
 */
class DisassociateSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string 要绑定的安全组 ID，类似sg-efil****。
     */
    public $SecurityGroupIds;

    /**
     * @var array 实例 ID，格式如：vdb-c1nl****，支持指定多个实例。
     */
    public $InstanceIds;

    /**
     * @param string $SecurityGroupIds 要绑定的安全组 ID，类似sg-efil****。
     * @param array $InstanceIds 实例 ID，格式如：vdb-c1nl****，支持指定多个实例。
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
        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
