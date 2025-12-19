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
namespace TencentCloud\Evt\V20250217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteRoleUser请求参数结构体
 *
 * @method integer getRoleSystemId() 获取<p>自定义角色体系的ID</p>
 * @method void setRoleSystemId(integer $RoleSystemId) 设置<p>自定义角色体系的ID</p>
 * @method string getUserId() 获取<p>需要删除的自定义用户ID</p>
 * @method void setUserId(string $UserId) 设置<p>需要删除的自定义用户ID</p>
 */
class DeleteRoleUserRequest extends AbstractModel
{
    /**
     * @var integer <p>自定义角色体系的ID</p>
     */
    public $RoleSystemId;

    /**
     * @var string <p>需要删除的自定义用户ID</p>
     */
    public $UserId;

    /**
     * @param integer $RoleSystemId <p>自定义角色体系的ID</p>
     * @param string $UserId <p>需要删除的自定义用户ID</p>
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
        if (array_key_exists("RoleSystemId",$param) and $param["RoleSystemId"] !== null) {
            $this->RoleSystemId = $param["RoleSystemId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
