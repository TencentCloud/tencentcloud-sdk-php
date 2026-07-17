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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 沙箱工具VPC相关配置
 *
 * @method array getSubnetIds() 获取<p>VPC子网ID列表</p>
 * @method void setSubnetIds(array $SubnetIds) 设置<p>VPC子网ID列表</p>
 * @method array getSecurityGroupIds() 获取<p>安全组ID列表</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>安全组ID列表</p>
 */
class VPCConfig extends AbstractModel
{
    /**
     * @var array <p>VPC子网ID列表</p>
     */
    public $SubnetIds;

    /**
     * @var array <p>安全组ID列表</p>
     */
    public $SecurityGroupIds;

    /**
     * @param array $SubnetIds <p>VPC子网ID列表</p>
     * @param array $SecurityGroupIds <p>安全组ID列表</p>
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
        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
