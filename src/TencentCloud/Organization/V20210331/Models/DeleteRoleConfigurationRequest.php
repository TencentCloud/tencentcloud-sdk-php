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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteRoleConfiguration请求参数结构体
 *
 * @method string getZoneId() 获取空间 ID
 * @method void setZoneId(string $ZoneId) 设置空间 ID
 * @method string getRoleConfigurationId() 获取权限配置 ID
 * @method void setRoleConfigurationId(string $RoleConfigurationId) 设置权限配置 ID
 */
class DeleteRoleConfigurationRequest extends AbstractModel
{
    /**
     * @var string 空间 ID
     */
    public $ZoneId;

    /**
     * @var string 权限配置 ID
     */
    public $RoleConfigurationId;

    /**
     * @param string $ZoneId 空间 ID
     * @param string $RoleConfigurationId 权限配置 ID
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("RoleConfigurationId",$param) and $param["RoleConfigurationId"] !== null) {
            $this->RoleConfigurationId = $param["RoleConfigurationId"];
        }
    }
}
