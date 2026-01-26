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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AuthorizePrivileges请求参数结构体
 *
 * @method array getResources() 获取资源数组
ResourceType：来源于TCCATALOG模块的GetGrantPrivilegesSTD接口中返回的ResourceType，并改为首字母大写，例如METALAKE对应Metalake
ResourceUri，取决于 ResourceType，Metalake时固定为default，其他类别采用catalog的三段式结构，例如
- Metalake，固定为default
- Catalog，取catalogName
- Schema，取catalogName.SchemaName
- Table,，取catalogName.SchemaName.TableName

 * @method void setResources(array $Resources) 设置资源数组
ResourceType：来源于TCCATALOG模块的GetGrantPrivilegesSTD接口中返回的ResourceType，并改为首字母大写，例如METALAKE对应Metalake
ResourceUri，取决于 ResourceType，Metalake时固定为default，其他类别采用catalog的三段式结构，例如
- Metalake，固定为default
- Catalog，取catalogName
- Schema，取catalogName.SchemaName
- Table,，取catalogName.SchemaName.TableName

 * @method array getSubjects() 获取授权主体数组，SubjectType及对应SubjectValue取值规则
- User 用户
    - 取自DescribeTenantUserList中的UserId
- Project 项目
    - 取自DescribeUserProjects中的ProjectId
- Role 角色（项目级角色）
    - 先调用DescribeUserProjects获取项目ID（ProjectId），再调用DescribeRoleList中的角色ID（RoleId），拼装为$ProjectId.$ProjectId. RoleId，例如"3085649716411588608.308335260274237440"
- GlobalRole （平台级角色）
    - AllAccountUsers 全部用户
    - 其他ID，取自DescribeTenantRole中的RoleId
 * @method void setSubjects(array $Subjects) 设置授权主体数组，SubjectType及对应SubjectValue取值规则
- User 用户
    - 取自DescribeTenantUserList中的UserId
- Project 项目
    - 取自DescribeUserProjects中的ProjectId
- Role 角色（项目级角色）
    - 先调用DescribeUserProjects获取项目ID（ProjectId），再调用DescribeRoleList中的角色ID（RoleId），拼装为$ProjectId.$ProjectId. RoleId，例如"3085649716411588608.308335260274237440"
- GlobalRole （平台级角色）
    - AllAccountUsers 全部用户
    - 其他ID，取自DescribeTenantRole中的RoleId
 * @method array getPrivileges() 获取权限点，来源于TCCATALOG模块的GetGrantPrivilegesSTD接口中返回的各类Privileges中的NAME
 * @method void setPrivileges(array $Privileges) 设置权限点，来源于TCCATALOG模块的GetGrantPrivilegesSTD接口中返回的各类Privileges中的NAME
 */
class AuthorizePrivilegesRequest extends AbstractModel
{
    /**
     * @var array 资源数组
ResourceType：来源于TCCATALOG模块的GetGrantPrivilegesSTD接口中返回的ResourceType，并改为首字母大写，例如METALAKE对应Metalake
ResourceUri，取决于 ResourceType，Metalake时固定为default，其他类别采用catalog的三段式结构，例如
- Metalake，固定为default
- Catalog，取catalogName
- Schema，取catalogName.SchemaName
- Table,，取catalogName.SchemaName.TableName

     */
    public $Resources;

    /**
     * @var array 授权主体数组，SubjectType及对应SubjectValue取值规则
- User 用户
    - 取自DescribeTenantUserList中的UserId
- Project 项目
    - 取自DescribeUserProjects中的ProjectId
- Role 角色（项目级角色）
    - 先调用DescribeUserProjects获取项目ID（ProjectId），再调用DescribeRoleList中的角色ID（RoleId），拼装为$ProjectId.$ProjectId. RoleId，例如"3085649716411588608.308335260274237440"
- GlobalRole （平台级角色）
    - AllAccountUsers 全部用户
    - 其他ID，取自DescribeTenantRole中的RoleId
     */
    public $Subjects;

    /**
     * @var array 权限点，来源于TCCATALOG模块的GetGrantPrivilegesSTD接口中返回的各类Privileges中的NAME
     */
    public $Privileges;

    /**
     * @param array $Resources 资源数组
ResourceType：来源于TCCATALOG模块的GetGrantPrivilegesSTD接口中返回的ResourceType，并改为首字母大写，例如METALAKE对应Metalake
ResourceUri，取决于 ResourceType，Metalake时固定为default，其他类别采用catalog的三段式结构，例如
- Metalake，固定为default
- Catalog，取catalogName
- Schema，取catalogName.SchemaName
- Table,，取catalogName.SchemaName.TableName

     * @param array $Subjects 授权主体数组，SubjectType及对应SubjectValue取值规则
- User 用户
    - 取自DescribeTenantUserList中的UserId
- Project 项目
    - 取自DescribeUserProjects中的ProjectId
- Role 角色（项目级角色）
    - 先调用DescribeUserProjects获取项目ID（ProjectId），再调用DescribeRoleList中的角色ID（RoleId），拼装为$ProjectId.$ProjectId. RoleId，例如"3085649716411588608.308335260274237440"
- GlobalRole （平台级角色）
    - AllAccountUsers 全部用户
    - 其他ID，取自DescribeTenantRole中的RoleId
     * @param array $Privileges 权限点，来源于TCCATALOG模块的GetGrantPrivilegesSTD接口中返回的各类Privileges中的NAME
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
        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = [];
            foreach ($param["Resources"] as $key => $value){
                $obj = new PrivilegeResource();
                $obj->deserialize($value);
                array_push($this->Resources, $obj);
            }
        }

        if (array_key_exists("Subjects",$param) and $param["Subjects"] !== null) {
            $this->Subjects = [];
            foreach ($param["Subjects"] as $key => $value){
                $obj = new Subject();
                $obj->deserialize($value);
                array_push($this->Subjects, $obj);
            }
        }

        if (array_key_exists("Privileges",$param) and $param["Privileges"] !== null) {
            $this->Privileges = [];
            foreach ($param["Privileges"] as $key => $value){
                $obj = new PrivilegeInfo();
                $obj->deserialize($value);
                array_push($this->Privileges, $obj);
            }
        }
    }
}
