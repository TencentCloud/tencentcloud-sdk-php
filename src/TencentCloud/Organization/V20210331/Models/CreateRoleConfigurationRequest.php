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
 * CreateRoleConfiguration请求参数结构体
 *
 * @method string getZoneId() 获取空间 ID。
 * @method void setZoneId(string $ZoneId) 设置空间 ID。
 * @method string getRoleConfigurationName() 获取访问配置名称。格式：包含英文字母、数字或短划线（-）。 长度：最大 128 个字符。
 * @method void setRoleConfigurationName(string $RoleConfigurationName) 设置访问配置名称。格式：包含英文字母、数字或短划线（-）。 长度：最大 128 个字符。
 * @method string getDescription() 获取访问配置的描述。 长度：最大 1024 个字符。
 * @method void setDescription(string $Description) 设置访问配置的描述。 长度：最大 1024 个字符。
 * @method integer getSessionDuration() 获取会话持续时间。 CIC用户使用访问配置访问集团账号目标账号时，会话最多保持的时间。 单位：秒。 取值范围：900~43200（15 分钟~12 小时）。 默认值：3600（1 小时）。
 * @method void setSessionDuration(integer $SessionDuration) 设置会话持续时间。 CIC用户使用访问配置访问集团账号目标账号时，会话最多保持的时间。 单位：秒。 取值范围：900~43200（15 分钟~12 小时）。 默认值：3600（1 小时）。
 * @method string getRelayState() 获取初始访问页面。 CIC用户使用访问配置访问集团账号目标账号时，初始访问的页面地址。 该页面必须是腾讯云控制台页面。默认为空，表示跳转到腾讯云控制台首页。
 * @method void setRelayState(string $RelayState) 设置初始访问页面。 CIC用户使用访问配置访问集团账号目标账号时，初始访问的页面地址。 该页面必须是腾讯云控制台页面。默认为空，表示跳转到腾讯云控制台首页。
 */
class CreateRoleConfigurationRequest extends AbstractModel
{
    /**
     * @var string 空间 ID。
     */
    public $ZoneId;

    /**
     * @var string 访问配置名称。格式：包含英文字母、数字或短划线（-）。 长度：最大 128 个字符。
     */
    public $RoleConfigurationName;

    /**
     * @var string 访问配置的描述。 长度：最大 1024 个字符。
     */
    public $Description;

    /**
     * @var integer 会话持续时间。 CIC用户使用访问配置访问集团账号目标账号时，会话最多保持的时间。 单位：秒。 取值范围：900~43200（15 分钟~12 小时）。 默认值：3600（1 小时）。
     */
    public $SessionDuration;

    /**
     * @var string 初始访问页面。 CIC用户使用访问配置访问集团账号目标账号时，初始访问的页面地址。 该页面必须是腾讯云控制台页面。默认为空，表示跳转到腾讯云控制台首页。
     */
    public $RelayState;

    /**
     * @param string $ZoneId 空间 ID。
     * @param string $RoleConfigurationName 访问配置名称。格式：包含英文字母、数字或短划线（-）。 长度：最大 128 个字符。
     * @param string $Description 访问配置的描述。 长度：最大 1024 个字符。
     * @param integer $SessionDuration 会话持续时间。 CIC用户使用访问配置访问集团账号目标账号时，会话最多保持的时间。 单位：秒。 取值范围：900~43200（15 分钟~12 小时）。 默认值：3600（1 小时）。
     * @param string $RelayState 初始访问页面。 CIC用户使用访问配置访问集团账号目标账号时，初始访问的页面地址。 该页面必须是腾讯云控制台页面。默认为空，表示跳转到腾讯云控制台首页。
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

        if (array_key_exists("RoleConfigurationName",$param) and $param["RoleConfigurationName"] !== null) {
            $this->RoleConfigurationName = $param["RoleConfigurationName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SessionDuration",$param) and $param["SessionDuration"] !== null) {
            $this->SessionDuration = $param["SessionDuration"];
        }

        if (array_key_exists("RelayState",$param) and $param["RelayState"] !== null) {
            $this->RelayState = $param["RelayState"];
        }
    }
}
