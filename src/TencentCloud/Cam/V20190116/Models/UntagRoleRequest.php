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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UntagRole请求参数结构体
 *
 * @method array getTagKeys() 获取标签键
 * @method void setTagKeys(array $TagKeys) 设置标签键
 * @method string getRoleName() 获取角色名，与角色ID至少输入一个
 * @method void setRoleName(string $RoleName) 设置角色名，与角色ID至少输入一个
 * @method string getRoleId() 获取角色ID，与角色名至少输入一个
 * @method void setRoleId(string $RoleId) 设置角色ID，与角色名至少输入一个
 */
class UntagRoleRequest extends AbstractModel
{
    /**
     * @var array 标签键
     */
    public $TagKeys;

    /**
     * @var string 角色名，与角色ID至少输入一个
     */
    public $RoleName;

    /**
     * @var string 角色ID，与角色名至少输入一个
     */
    public $RoleId;

    /**
     * @param array $TagKeys 标签键
     * @param string $RoleName 角色名，与角色ID至少输入一个
     * @param string $RoleId 角色ID，与角色名至少输入一个
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
        if (array_key_exists("TagKeys",$param) and $param["TagKeys"] !== null) {
            $this->TagKeys = $param["TagKeys"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }
    }
}
