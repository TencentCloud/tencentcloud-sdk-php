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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 健康检测策略和节点池的绑定关系
 *
 * @method string getName() 获取健康检测策略名称
 * @method void setName(string $Name) 设置健康检测策略名称
 * @method string getCreatedAt() 获取规则创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置规则创建时间
 * @method array getNodePools() 获取关联节点池数组
 * @method void setNodePools(array $NodePools) 设置关联节点池数组
 */
class HealthCheckPolicyBinding extends AbstractModel
{
    /**
     * @var string 健康检测策略名称
     */
    public $Name;

    /**
     * @var string 规则创建时间
     */
    public $CreatedAt;

    /**
     * @var array 关联节点池数组
     */
    public $NodePools;

    /**
     * @param string $Name 健康检测策略名称
     * @param string $CreatedAt 规则创建时间
     * @param array $NodePools 关联节点池数组
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("NodePools",$param) and $param["NodePools"] !== null) {
            $this->NodePools = $param["NodePools"];
        }
    }
}
