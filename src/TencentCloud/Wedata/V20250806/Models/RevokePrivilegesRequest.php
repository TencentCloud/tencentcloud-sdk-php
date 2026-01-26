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
 * RevokePrivileges请求参数结构体
 *
 * @method array getResources() 获取资源数组，数据来源于ListPermissions接口返回的Resource中的ResourceType和ResourceUri
 * @method void setResources(array $Resources) 设置资源数组，数据来源于ListPermissions接口返回的Resource中的ResourceType和ResourceUri
 * @method array getSubjects() 获取授权回收主体数组，参数组装需要注意：
1.SubjectType 和SubjectValues的取值参考ListPermissions接口中返回SubjectDetails中的SubjectType和SubjectValue
2.批量回收时，Subjects数组长度需要与权限点Privileges长度一致，并且数据一一对应
 * @method void setSubjects(array $Subjects) 设置授权回收主体数组，参数组装需要注意：
1.SubjectType 和SubjectValues的取值参考ListPermissions接口中返回SubjectDetails中的SubjectType和SubjectValue
2.批量回收时，Subjects数组长度需要与权限点Privileges长度一致，并且数据一一对应
 * @method array getPrivileges() 获取权限点，Name来源于ListPermissions接口返回的PermissionDetails中的Name，例如：BROWSE 、GRANT_PRIVILEGES
 * @method void setPrivileges(array $Privileges) 设置权限点，Name来源于ListPermissions接口返回的PermissionDetails中的Name，例如：BROWSE 、GRANT_PRIVILEGES
 */
class RevokePrivilegesRequest extends AbstractModel
{
    /**
     * @var array 资源数组，数据来源于ListPermissions接口返回的Resource中的ResourceType和ResourceUri
     */
    public $Resources;

    /**
     * @var array 授权回收主体数组，参数组装需要注意：
1.SubjectType 和SubjectValues的取值参考ListPermissions接口中返回SubjectDetails中的SubjectType和SubjectValue
2.批量回收时，Subjects数组长度需要与权限点Privileges长度一致，并且数据一一对应
     */
    public $Subjects;

    /**
     * @var array 权限点，Name来源于ListPermissions接口返回的PermissionDetails中的Name，例如：BROWSE 、GRANT_PRIVILEGES
     */
    public $Privileges;

    /**
     * @param array $Resources 资源数组，数据来源于ListPermissions接口返回的Resource中的ResourceType和ResourceUri
     * @param array $Subjects 授权回收主体数组，参数组装需要注意：
1.SubjectType 和SubjectValues的取值参考ListPermissions接口中返回SubjectDetails中的SubjectType和SubjectValue
2.批量回收时，Subjects数组长度需要与权限点Privileges长度一致，并且数据一一对应
     * @param array $Privileges 权限点，Name来源于ListPermissions接口返回的PermissionDetails中的Name，例如：BROWSE 、GRANT_PRIVILEGES
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
