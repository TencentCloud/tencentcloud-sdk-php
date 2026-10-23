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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateRoleConfiguration请求参数结构体
 *
 * @method string getZoneId() 获取<p>空间 ID</p>
 * @method void setZoneId(string $ZoneId) 设置<p>空间 ID</p>
 * @method string getRoleConfigurationId() 获取<p>权限配置 ID</p>
 * @method void setRoleConfigurationId(string $RoleConfigurationId) 设置<p>权限配置 ID</p>
 * @method string getNewDescription() 获取<p>新的权限配置描述。  长度：最大 1024 个字符。</p>
 * @method void setNewDescription(string $NewDescription) 设置<p>新的权限配置描述。  长度：最大 1024 个字符。</p>
 * @method integer getNewSessionDuration() 获取<p>新的会话持续时间。  CIC 用户使用权限配置访问集团账号目标账号时，会话最多保持的时间。  单位：秒。  取值范围：900-43200（15 分钟-12 小时）。</p>
 * @method void setNewSessionDuration(integer $NewSessionDuration) 设置<p>新的会话持续时间。  CIC 用户使用权限配置访问集团账号目标账号时，会话最多保持的时间。  单位：秒。  取值范围：900-43200（15 分钟-12 小时）。</p>
 * @method string getNewRelayState() 获取<p>新的初始访问页面。  CIC 用户使用权限配置访问集团账号目标账号时，初始访问的页面地址。  该页面必须是腾讯云控制台页面。</p>
 * @method void setNewRelayState(string $NewRelayState) 设置<p>新的初始访问页面。  CIC 用户使用权限配置访问集团账号目标账号时，初始访问的页面地址。  该页面必须是腾讯云控制台页面。</p>
 * @method boolean getIsApply() 获取<p>true=保存并应用（立即下发）；false/缺省=仅保存</p>
 * @method void setIsApply(boolean $IsApply) 设置<p>true=保存并应用（立即下发）；false/缺省=仅保存</p>
 */
class UpdateRoleConfigurationRequest extends AbstractModel
{
    /**
     * @var string <p>空间 ID</p>
     */
    public $ZoneId;

    /**
     * @var string <p>权限配置 ID</p>
     */
    public $RoleConfigurationId;

    /**
     * @var string <p>新的权限配置描述。  长度：最大 1024 个字符。</p>
     */
    public $NewDescription;

    /**
     * @var integer <p>新的会话持续时间。  CIC 用户使用权限配置访问集团账号目标账号时，会话最多保持的时间。  单位：秒。  取值范围：900-43200（15 分钟-12 小时）。</p>
     */
    public $NewSessionDuration;

    /**
     * @var string <p>新的初始访问页面。  CIC 用户使用权限配置访问集团账号目标账号时，初始访问的页面地址。  该页面必须是腾讯云控制台页面。</p>
     */
    public $NewRelayState;

    /**
     * @var boolean <p>true=保存并应用（立即下发）；false/缺省=仅保存</p>
     */
    public $IsApply;

    /**
     * @param string $ZoneId <p>空间 ID</p>
     * @param string $RoleConfigurationId <p>权限配置 ID</p>
     * @param string $NewDescription <p>新的权限配置描述。  长度：最大 1024 个字符。</p>
     * @param integer $NewSessionDuration <p>新的会话持续时间。  CIC 用户使用权限配置访问集团账号目标账号时，会话最多保持的时间。  单位：秒。  取值范围：900-43200（15 分钟-12 小时）。</p>
     * @param string $NewRelayState <p>新的初始访问页面。  CIC 用户使用权限配置访问集团账号目标账号时，初始访问的页面地址。  该页面必须是腾讯云控制台页面。</p>
     * @param boolean $IsApply <p>true=保存并应用（立即下发）；false/缺省=仅保存</p>
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

        if (array_key_exists("IsApply",$param) and $param["IsApply"] !== null) {
            $this->IsApply = $param["IsApply"];
        }
    }
}
