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
 * UpdateRoleConfiguration请求参数结构体
 *
 * @method string getZoneId() 获取空间 ID
 * @method void setZoneId(string $ZoneId) 设置空间 ID
 * @method string getRoleConfigurationId() 获取权限配置 ID
 * @method void setRoleConfigurationId(string $RoleConfigurationId) 设置权限配置 ID
 * @method string getNewDescription() 获取新的权限配置描述。  长度：最大 1024 个字符。
 * @method void setNewDescription(string $NewDescription) 设置新的权限配置描述。  长度：最大 1024 个字符。
 * @method integer getNewSessionDuration() 获取新的会话持续时间。  CIC 用户使用权限配置访问集团账号目标账号时，会话最多保持的时间。  单位：秒。  取值范围：900-43200（15 分钟-12 小时）。
 * @method void setNewSessionDuration(integer $NewSessionDuration) 设置新的会话持续时间。  CIC 用户使用权限配置访问集团账号目标账号时，会话最多保持的时间。  单位：秒。  取值范围：900-43200（15 分钟-12 小时）。
 * @method string getNewRelayState() 获取新的初始访问页面。  CIC 用户使用权限配置访问集团账号目标账号时，初始访问的页面地址。  该页面必须是腾讯云控制台页面。
 * @method void setNewRelayState(string $NewRelayState) 设置新的初始访问页面。  CIC 用户使用权限配置访问集团账号目标账号时，初始访问的页面地址。  该页面必须是腾讯云控制台页面。
 */
class UpdateRoleConfigurationRequest extends AbstractModel
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
     * @var string 新的权限配置描述。  长度：最大 1024 个字符。
     */
    public $NewDescription;

    /**
     * @var integer 新的会话持续时间。  CIC 用户使用权限配置访问集团账号目标账号时，会话最多保持的时间。  单位：秒。  取值范围：900-43200（15 分钟-12 小时）。
     */
    public $NewSessionDuration;

    /**
     * @var string 新的初始访问页面。  CIC 用户使用权限配置访问集团账号目标账号时，初始访问的页面地址。  该页面必须是腾讯云控制台页面。
     */
    public $NewRelayState;

    /**
     * @param string $ZoneId 空间 ID
     * @param string $RoleConfigurationId 权限配置 ID
     * @param string $NewDescription 新的权限配置描述。  长度：最大 1024 个字符。
     * @param integer $NewSessionDuration 新的会话持续时间。  CIC 用户使用权限配置访问集团账号目标账号时，会话最多保持的时间。  单位：秒。  取值范围：900-43200（15 分钟-12 小时）。
     * @param string $NewRelayState 新的初始访问页面。  CIC 用户使用权限配置访问集团账号目标账号时，初始访问的页面地址。  该页面必须是腾讯云控制台页面。
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

        if (array_key_exists("NewDescription",$param) and $param["NewDescription"] !== null) {
            $this->NewDescription = $param["NewDescription"];
        }

        if (array_key_exists("NewSessionDuration",$param) and $param["NewSessionDuration"] !== null) {
            $this->NewSessionDuration = $param["NewSessionDuration"];
        }

        if (array_key_exists("NewRelayState",$param) and $param["NewRelayState"] !== null) {
            $this->NewRelayState = $param["NewRelayState"];
        }
    }
}
