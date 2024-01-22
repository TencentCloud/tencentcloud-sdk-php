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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 原生节点池信息
 *
 * @method array getSubnetIds() 获取子网列表
 * @method void setSubnetIds(array $SubnetIds) 设置子网列表
 * @method array getSecurityGroupIds() 获取安全组列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class NativeNodePoolInfo extends AbstractModel
{
    /**
     * @var array 子网列表
     */
    public $SubnetIds;

    /**
     * @var array 安全组列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityGroupIds;

    /**
     * @param array $SubnetIds 子网列表
     * @param array $SecurityGroupIds 安全组列表
注意：此字段可能返回 null，表示取不到有效值。
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
