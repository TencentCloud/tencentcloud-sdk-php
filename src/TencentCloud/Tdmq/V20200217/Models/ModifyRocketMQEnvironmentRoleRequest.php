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
 * ModifyRocketMQEnvironmentRole请求参数结构体
 *
 * @method string getEnvironmentId() 获取命名空间，4.x 通用集群命名空间固定为: tdmq_default
 * @method void setEnvironmentId(string $EnvironmentId) 设置命名空间，4.x 通用集群命名空间固定为: tdmq_default
 * @method string getRoleName() 获取角色名称。
 * @method void setRoleName(string $RoleName) 设置角色名称。
 * @method array getPermissions() 获取授权项，最多只能包含produce、consume两项的非空字符串数组。
 * @method void setPermissions(array $Permissions) 设置授权项，最多只能包含produce、consume两项的非空字符串数组。
 * @method string getClusterId() 获取必填字段，集群的ID
 * @method void setClusterId(string $ClusterId) 设置必填字段，集群的ID
 * @method array getDetailedPerms() 获取Topic&Group维度权限配置
 * @method void setDetailedPerms(array $DetailedPerms) 设置Topic&Group维度权限配置
 */
class ModifyRocketMQEnvironmentRoleRequest extends AbstractModel
{
    /**
     * @var string 命名空间，4.x 通用集群命名空间固定为: tdmq_default
     */
    public $EnvironmentId;

    /**
     * @var string 角色名称。
     */
    public $RoleName;

    /**
     * @var array 授权项，最多只能包含produce、consume两项的非空字符串数组。
     */
    public $Permissions;

    /**
     * @var string 必填字段，集群的ID
     */
    public $ClusterId;

    /**
     * @var array Topic&Group维度权限配置
     */
    public $DetailedPerms;

    /**
     * @param string $EnvironmentId 命名空间，4.x 通用集群命名空间固定为: tdmq_default
     * @param string $RoleName 角色名称。
     * @param array $Permissions 授权项，最多只能包含produce、consume两项的非空字符串数组。
     * @param string $ClusterId 必填字段，集群的ID
     * @param array $DetailedPerms Topic&Group维度权限配置
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

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("Permissions",$param) and $param["Permissions"] !== null) {
            $this->Permissions = $param["Permissions"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("DetailedPerms",$param) and $param["DetailedPerms"] !== null) {
            $this->DetailedPerms = [];
            foreach ($param["DetailedPerms"] as $key => $value){
                $obj = new DetailedRolePerm();
                $obj->deserialize($value);
                array_push($this->DetailedPerms, $obj);
            }
        }
    }
}
