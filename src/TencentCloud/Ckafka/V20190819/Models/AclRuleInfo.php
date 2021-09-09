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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表示ACL 规则的四元组信息
 *
 * @method string getOperation() 获取Acl操作方式，枚举值(所有操作: All, 读：Read，写：Write)
 * @method void setOperation(string $Operation) 设置Acl操作方式，枚举值(所有操作: All, 读：Read，写：Write)
 * @method string getPermissionType() 获取权限类型，(Deny，Allow)
 * @method void setPermissionType(string $PermissionType) 设置权限类型，(Deny，Allow)
 * @method string getHost() 获取默认为*，表示任何host都可以访问，当前ckafka不支持host为*和ip网段
 * @method void setHost(string $Host) 设置默认为*，表示任何host都可以访问，当前ckafka不支持host为*和ip网段
 * @method string getPrincipal() 获取用户列表，默认为User:*，表示任何user都可以访问，当前用户只能是用户列表中包含的用户。传入格式需要带【User:】前缀。例如用户A，传入为User:A。
 * @method void setPrincipal(string $Principal) 设置用户列表，默认为User:*，表示任何user都可以访问，当前用户只能是用户列表中包含的用户。传入格式需要带【User:】前缀。例如用户A，传入为User:A。
 */
class AclRuleInfo extends AbstractModel
{
    /**
     * @var string Acl操作方式，枚举值(所有操作: All, 读：Read，写：Write)
     */
    public $Operation;

    /**
     * @var string 权限类型，(Deny，Allow)
     */
    public $PermissionType;

    /**
     * @var string 默认为*，表示任何host都可以访问，当前ckafka不支持host为*和ip网段
     */
    public $Host;

    /**
     * @var string 用户列表，默认为User:*，表示任何user都可以访问，当前用户只能是用户列表中包含的用户。传入格式需要带【User:】前缀。例如用户A，传入为User:A。
     */
    public $Principal;

    /**
     * @param string $Operation Acl操作方式，枚举值(所有操作: All, 读：Read，写：Write)
     * @param string $PermissionType 权限类型，(Deny，Allow)
     * @param string $Host 默认为*，表示任何host都可以访问，当前ckafka不支持host为*和ip网段
     * @param string $Principal 用户列表，默认为User:*，表示任何user都可以访问，当前用户只能是用户列表中包含的用户。传入格式需要带【User:】前缀。例如用户A，传入为User:A。
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
        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("PermissionType",$param) and $param["PermissionType"] !== null) {
            $this->PermissionType = $param["PermissionType"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Principal",$param) and $param["Principal"] !== null) {
            $this->Principal = $param["Principal"];
        }
    }
}
