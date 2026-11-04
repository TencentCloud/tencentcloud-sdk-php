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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 角色信息
 *
 * @method string getRoleId() 获取<p>角色ID</p>
 * @method void setRoleId(string $RoleId) 设置<p>角色ID</p>
 * @method string getRoleName() 获取<p>名称</p>
 * @method void setRoleName(string $RoleName) 设置<p>名称</p>
 * @method string getRoleType() 获取<p>角色类型。&quot;SYSTEM&quot; 内置角色，&quot;CUSTOMER&quot; 自定义角色</p>
 * @method void setRoleType(string $RoleType) 设置<p>角色类型。&quot;SYSTEM&quot; 内置角色，&quot;CUSTOMER&quot; 自定义角色</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method integer getUserCount() 获取<p>绑定的用户数</p>
 * @method void setUserCount(integer $UserCount) 设置<p>绑定的用户数</p>
 */
class RoleInfo extends AbstractModel
{
    /**
     * @var string <p>角色ID</p>
     */
    public $RoleId;

    /**
     * @var string <p>名称</p>
     */
    public $RoleName;

    /**
     * @var string <p>角色类型。&quot;SYSTEM&quot; 内置角色，&quot;CUSTOMER&quot; 自定义角色</p>
     */
    public $RoleType;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>绑定的用户数</p>
     */
    public $UserCount;

    /**
     * @param string $RoleId <p>角色ID</p>
     * @param string $RoleName <p>名称</p>
     * @param string $RoleType <p>角色类型。&quot;SYSTEM&quot; 内置角色，&quot;CUSTOMER&quot; 自定义角色</p>
     * @param string $Description <p>描述</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param integer $UserCount <p>绑定的用户数</p>
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
        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("RoleType",$param) and $param["RoleType"] !== null) {
            $this->RoleType = $param["RoleType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UserCount",$param) and $param["UserCount"] !== null) {
            $this->UserCount = $param["UserCount"];
        }
    }
}
