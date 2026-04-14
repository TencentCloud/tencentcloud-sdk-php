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
 * RocketMQ角色配置信息
 *
 * @method string getRoleName() 获取角色名，对应SecretKey
 * @method void setRoleName(string $RoleName) 设置角色名，对应SecretKey
 * @method string getRoleToken() 获取accessKey
 * @method void setRoleToken(string $RoleToken) 设置accessKey
 * @method string getEnvironmentId() 获取命名空间
 * @method void setEnvironmentId(string $EnvironmentId) 设置命名空间
 * @method array getPermissions() 获取角色权限
 * @method void setPermissions(array $Permissions) 设置角色权限
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getPermType() 获取权限类型，默认按集群授权（Cluster：集群级别；TopicAndGroup：主题&消费组级别）
 * @method void setPermType(string $PermType) 设置权限类型，默认按集群授权（Cluster：集群级别；TopicAndGroup：主题&消费组级别）
 * @method array getDetailedRolePerms() 获取Topic和Group维度权限配置
 * @method void setDetailedRolePerms(array $DetailedRolePerms) 设置Topic和Group维度权限配置
 */
class RocketMQRoleConfig extends AbstractModel
{
    /**
     * @var string 角色名，对应SecretKey
     */
    public $RoleName;

    /**
     * @var string accessKey
     */
    public $RoleToken;

    /**
     * @var string 命名空间
     */
    public $EnvironmentId;

    /**
     * @var array 角色权限
     */
    public $Permissions;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 权限类型，默认按集群授权（Cluster：集群级别；TopicAndGroup：主题&消费组级别）
     */
    public $PermType;

    /**
     * @var array Topic和Group维度权限配置
     */
    public $DetailedRolePerms;

    /**
     * @param string $RoleName 角色名，对应SecretKey
     * @param string $RoleToken accessKey
     * @param string $EnvironmentId 命名空间
     * @param array $Permissions 角色权限
     * @param string $Remark 备注
     * @param string $PermType 权限类型，默认按集群授权（Cluster：集群级别；TopicAndGroup：主题&消费组级别）
     * @param array $DetailedRolePerms Topic和Group维度权限配置
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
        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("RoleToken",$param) and $param["RoleToken"] !== null) {
            $this->RoleToken = $param["RoleToken"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("Permissions",$param) and $param["Permissions"] !== null) {
            $this->Permissions = $param["Permissions"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PermType",$param) and $param["PermType"] !== null) {
            $this->PermType = $param["PermType"];
        }

        if (array_key_exists("DetailedRolePerms",$param) and $param["DetailedRolePerms"] !== null) {
            $this->DetailedRolePerms = [];
            foreach ($param["DetailedRolePerms"] as $key => $value){
                $obj = new DetailedRolePerm();
                $obj->deserialize($value);
                array_push($this->DetailedRolePerms, $obj);
            }
        }
    }
}
