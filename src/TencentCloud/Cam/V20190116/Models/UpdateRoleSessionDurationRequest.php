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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateRoleSessionDuration请求参数结构体
 *
 * @method integer getSessionDuration() 获取时长(秒)
 * @method void setSessionDuration(integer $SessionDuration) 设置时长(秒)
 * @method string getRoleName() 获取角色名(与角色ID必填一个)
 * @method void setRoleName(string $RoleName) 设置角色名(与角色ID必填一个)
 * @method integer getRoleId() 获取角色ID(与角色名必填一个)
 * @method void setRoleId(integer $RoleId) 设置角色ID(与角色名必填一个)
 */
class UpdateRoleSessionDurationRequest extends AbstractModel
{
    /**
     * @var integer 时长(秒)
     */
    public $SessionDuration;

    /**
     * @var string 角色名(与角色ID必填一个)
     */
    public $RoleName;

    /**
     * @var integer 角色ID(与角色名必填一个)
     */
    public $RoleId;

    /**
     * @param integer $SessionDuration 时长(秒)
     * @param string $RoleName 角色名(与角色ID必填一个)
     * @param integer $RoleId 角色ID(与角色名必填一个)
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
        if (array_key_exists("SessionDuration",$param) and $param["SessionDuration"] !== null) {
            $this->SessionDuration = $param["SessionDuration"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }
    }
}
