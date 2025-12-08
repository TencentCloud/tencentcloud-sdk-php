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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteRocketMQEnvironmentRoles请求参数结构体
 *
 * @method string getEnvironmentId() 获取命名空间，4.x 通用集群命名空间固定为: tdmq_default
 * @method void setEnvironmentId(string $EnvironmentId) 设置命名空间，4.x 通用集群命名空间固定为: tdmq_default
 * @method array getRoleNames() 获取角色名称数组。
 * @method void setRoleNames(array $RoleNames) 设置角色名称数组。
 * @method string getClusterId() 获取集群的ID
 * @method void setClusterId(string $ClusterId) 设置集群的ID
 */
class DeleteRocketMQEnvironmentRolesRequest extends AbstractModel
{
    /**
     * @var string 命名空间，4.x 通用集群命名空间固定为: tdmq_default
     */
    public $EnvironmentId;

    /**
     * @var array 角色名称数组。
     */
    public $RoleNames;

    /**
     * @var string 集群的ID
     */
    public $ClusterId;

    /**
     * @param string $EnvironmentId 命名空间，4.x 通用集群命名空间固定为: tdmq_default
     * @param array $RoleNames 角色名称数组。
     * @param string $ClusterId 集群的ID
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("RoleNames",$param) and $param["RoleNames"] !== null) {
            $this->RoleNames = $param["RoleNames"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
