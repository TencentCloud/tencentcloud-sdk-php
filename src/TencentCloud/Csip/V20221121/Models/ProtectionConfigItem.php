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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 推荐防护配置项
 *
 * @method string getConfigId() 获取配置项ID
 * @method void setConfigId(string $ConfigId) 设置配置项ID
 * @method string getConfigName() 获取配置项名称
 * @method void setConfigName(string $ConfigName) 设置配置项名称
 * @method string getConfigDescription() 获取配置项描述
 * @method void setConfigDescription(string $ConfigDescription) 设置配置项描述
 * @method string getConfigGroup() 获取配置分组
枚举值：
auto_risk_discovery：自动风险发现
auto_defense：自动防御
client_hardening：客户端强化
 * @method void setConfigGroup(string $ConfigGroup) 设置配置分组
枚举值：
auto_risk_discovery：自动风险发现
auto_defense：自动防御
client_hardening：客户端强化
 * @method boolean getEnabled() 获取是否已开启
 * @method void setEnabled(boolean $Enabled) 设置是否已开启
 */
class ProtectionConfigItem extends AbstractModel
{
    /**
     * @var string 配置项ID
     */
    public $ConfigId;

    /**
     * @var string 配置项名称
     */
    public $ConfigName;

    /**
     * @var string 配置项描述
     */
    public $ConfigDescription;

    /**
     * @var string 配置分组
枚举值：
auto_risk_discovery：自动风险发现
auto_defense：自动防御
client_hardening：客户端强化
     */
    public $ConfigGroup;

    /**
     * @var boolean 是否已开启
     */
    public $Enabled;

    /**
     * @param string $ConfigId 配置项ID
     * @param string $ConfigName 配置项名称
     * @param string $ConfigDescription 配置项描述
     * @param string $ConfigGroup 配置分组
枚举值：
auto_risk_discovery：自动风险发现
auto_defense：自动防御
client_hardening：客户端强化
     * @param boolean $Enabled 是否已开启
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("ConfigDescription",$param) and $param["ConfigDescription"] !== null) {
            $this->ConfigDescription = $param["ConfigDescription"];
        }

        if (array_key_exists("ConfigGroup",$param) and $param["ConfigGroup"] !== null) {
            $this->ConfigGroup = $param["ConfigGroup"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
