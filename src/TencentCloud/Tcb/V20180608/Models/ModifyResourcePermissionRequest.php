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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyResourcePermission请求参数结构体
 *
 * @method string getEnvId() 获取环境 ID
 * @method void setEnvId(string $EnvId) 设置环境 ID
 * @method string getResourceType() 获取资源类型：`function`-云函数、`storage`-云存储、`table`-SQL型数据库表、`collection`-文档型数据库表。
 * @method void setResourceType(string $ResourceType) 设置资源类型：`function`-云函数、`storage`-云存储、`table`-SQL型数据库表、`collection`-文档型数据库表。
 * @method string getPermission() 获取权限级别。可选值：- SQL型数据库表：`READONLY`-读取全部数据，修改本人数据；`PRIVATE`-读取和修改本人数据；`ADMINWRITE`-读取全部数据，不可修改数据；`ADMINONLY`-无权限 。- 文档型数据库表：`READONLY`-读取全部数据，修改本人数据；`PRIVATE`-读取和修改本人数据；`ADMINWRITE`-读取全部数据，不可修改数据；`ADMINONLY`-无权限；`CUSTOM`-自定义安全规则 。- 云函数：`CUSTOM`-自定义安全规则 。- 云存储（权限标签）：`READONLY`-所有用户可读，仅创建者和管理员可写；`PRIVATE`-仅创建者及管理员可读写；`ADMINWRITE`-所有用户可读，仅管理员可写；`ADMINONLY`-仅管理员可读写；`CUSTOM`-自定义安全规则。
 * @method void setPermission(string $Permission) 设置权限级别。可选值：- SQL型数据库表：`READONLY`-读取全部数据，修改本人数据；`PRIVATE`-读取和修改本人数据；`ADMINWRITE`-读取全部数据，不可修改数据；`ADMINONLY`-无权限 。- 文档型数据库表：`READONLY`-读取全部数据，修改本人数据；`PRIVATE`-读取和修改本人数据；`ADMINWRITE`-读取全部数据，不可修改数据；`ADMINONLY`-无权限；`CUSTOM`-自定义安全规则 。- 云函数：`CUSTOM`-自定义安全规则 。- 云存储（权限标签）：`READONLY`-所有用户可读，仅创建者和管理员可写；`PRIVATE`-仅创建者及管理员可读写；`ADMINWRITE`-所有用户可读，仅管理员可写；`ADMINONLY`-仅管理员可读写；`CUSTOM`-自定义安全规则。
 * @method string getResource() 获取资源标识。云函数可不传、云存储传存储桶名、数据库表传表名。
 * @method void setResource(string $Resource) 设置资源标识。云函数可不传、云存储传存储桶名、数据库表传表名。
 * @method string getSecurityRule() 获取自定义安全规则配置，当Permission为 `CUSTOM`时必传。JSON字符串格式的规则表达式。配置参考：[云函数安全规则](https://docs.cloudbase.net/cloud-function/security-rules)、[云存储安全规则](https://docs.cloudbase.net/storage/security-rules)、[文档型数据库安全规则](https://docs.cloudbase.net/database/security-rules)。
 * @method void setSecurityRule(string $SecurityRule) 设置自定义安全规则配置，当Permission为 `CUSTOM`时必传。JSON字符串格式的规则表达式。配置参考：[云函数安全规则](https://docs.cloudbase.net/cloud-function/security-rules)、[云存储安全规则](https://docs.cloudbase.net/storage/security-rules)、[文档型数据库安全规则](https://docs.cloudbase.net/database/security-rules)。
 */
class ModifyResourcePermissionRequest extends AbstractModel
{
    /**
     * @var string 环境 ID
     */
    public $EnvId;

    /**
     * @var string 资源类型：`function`-云函数、`storage`-云存储、`table`-SQL型数据库表、`collection`-文档型数据库表。
     */
    public $ResourceType;

    /**
     * @var string 权限级别。可选值：- SQL型数据库表：`READONLY`-读取全部数据，修改本人数据；`PRIVATE`-读取和修改本人数据；`ADMINWRITE`-读取全部数据，不可修改数据；`ADMINONLY`-无权限 。- 文档型数据库表：`READONLY`-读取全部数据，修改本人数据；`PRIVATE`-读取和修改本人数据；`ADMINWRITE`-读取全部数据，不可修改数据；`ADMINONLY`-无权限；`CUSTOM`-自定义安全规则 。- 云函数：`CUSTOM`-自定义安全规则 。- 云存储（权限标签）：`READONLY`-所有用户可读，仅创建者和管理员可写；`PRIVATE`-仅创建者及管理员可读写；`ADMINWRITE`-所有用户可读，仅管理员可写；`ADMINONLY`-仅管理员可读写；`CUSTOM`-自定义安全规则。
     */
    public $Permission;

    /**
     * @var string 资源标识。云函数可不传、云存储传存储桶名、数据库表传表名。
     */
    public $Resource;

    /**
     * @var string 自定义安全规则配置，当Permission为 `CUSTOM`时必传。JSON字符串格式的规则表达式。配置参考：[云函数安全规则](https://docs.cloudbase.net/cloud-function/security-rules)、[云存储安全规则](https://docs.cloudbase.net/storage/security-rules)、[文档型数据库安全规则](https://docs.cloudbase.net/database/security-rules)。
     */
    public $SecurityRule;

    /**
     * @param string $EnvId 环境 ID
     * @param string $ResourceType 资源类型：`function`-云函数、`storage`-云存储、`table`-SQL型数据库表、`collection`-文档型数据库表。
     * @param string $Permission 权限级别。可选值：- SQL型数据库表：`READONLY`-读取全部数据，修改本人数据；`PRIVATE`-读取和修改本人数据；`ADMINWRITE`-读取全部数据，不可修改数据；`ADMINONLY`-无权限 。- 文档型数据库表：`READONLY`-读取全部数据，修改本人数据；`PRIVATE`-读取和修改本人数据；`ADMINWRITE`-读取全部数据，不可修改数据；`ADMINONLY`-无权限；`CUSTOM`-自定义安全规则 。- 云函数：`CUSTOM`-自定义安全规则 。- 云存储（权限标签）：`READONLY`-所有用户可读，仅创建者和管理员可写；`PRIVATE`-仅创建者及管理员可读写；`ADMINWRITE`-所有用户可读，仅管理员可写；`ADMINONLY`-仅管理员可读写；`CUSTOM`-自定义安全规则。
     * @param string $Resource 资源标识。云函数可不传、云存储传存储桶名、数据库表传表名。
     * @param string $SecurityRule 自定义安全规则配置，当Permission为 `CUSTOM`时必传。JSON字符串格式的规则表达式。配置参考：[云函数安全规则](https://docs.cloudbase.net/cloud-function/security-rules)、[云存储安全规则](https://docs.cloudbase.net/storage/security-rules)、[文档型数据库安全规则](https://docs.cloudbase.net/database/security-rules)。
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("SecurityRule",$param) and $param["SecurityRule"] !== null) {
            $this->SecurityRule = $param["SecurityRule"];
        }
    }
}
