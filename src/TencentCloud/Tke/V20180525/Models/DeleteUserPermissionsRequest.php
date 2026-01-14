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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteUserPermissions请求参数结构体
 *
 * @method string getTargetUin() 获取要授权的用户的唯一标识符（支持子账号 UIN和角色UIN）
 * @method void setTargetUin(string $TargetUin) 设置要授权的用户的唯一标识符（支持子账号 UIN和角色UIN）
 * @method array getPermissions() 获取用户最终应拥有的完整权限列表。采用声明式语义，传入的列表代表用户最终应该拥有的全部权限，系统会自动计算差异并执行必要的创建/删除操作。为空或不提供时将清除该用户的所有权限。最大支持 100 个权限项。
 * @method void setPermissions(array $Permissions) 设置用户最终应拥有的完整权限列表。采用声明式语义，传入的列表代表用户最终应该拥有的全部权限，系统会自动计算差异并执行必要的创建/删除操作。为空或不提供时将清除该用户的所有权限。最大支持 100 个权限项。
 */
class DeleteUserPermissionsRequest extends AbstractModel
{
    /**
     * @var string 要授权的用户的唯一标识符（支持子账号 UIN和角色UIN）
     */
    public $TargetUin;

    /**
     * @var array 用户最终应拥有的完整权限列表。采用声明式语义，传入的列表代表用户最终应该拥有的全部权限，系统会自动计算差异并执行必要的创建/删除操作。为空或不提供时将清除该用户的所有权限。最大支持 100 个权限项。
     */
    public $Permissions;

    /**
     * @param string $TargetUin 要授权的用户的唯一标识符（支持子账号 UIN和角色UIN）
     * @param array $Permissions 用户最终应拥有的完整权限列表。采用声明式语义，传入的列表代表用户最终应该拥有的全部权限，系统会自动计算差异并执行必要的创建/删除操作。为空或不提供时将清除该用户的所有权限。最大支持 100 个权限项。
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
        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }

        if (array_key_exists("Permissions",$param) and $param["Permissions"] !== null) {
            $this->Permissions = [];
            foreach ($param["Permissions"] as $key => $value){
                $obj = new PermissionItem();
                $obj->deserialize($value);
                array_push($this->Permissions, $obj);
            }
        }
    }
}
