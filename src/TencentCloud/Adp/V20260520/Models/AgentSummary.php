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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Agent摘要信息
 *
 * @method string getAgentId() 获取<p>AgentId</p>
 * @method void setAgentId(string $AgentId) 设置<p>AgentId</p>
 * @method AgentProfile getProfile() 获取<p>Agent 身份画像</p>
 * @method void setProfile(AgentProfile $Profile) 设置<p>Agent 身份画像</p>
 * @method AgentAdvancedConfig getAdvancedConfig() 获取<p>高级设置;scope=0 时返回</p>
 * @method void setAdvancedConfig(AgentAdvancedConfig $AdvancedConfig) 设置<p>高级设置;scope=0 时返回</p>
 * @method integer getProviderType() 获取<p>子 Agent 执行来源</p><p>枚举值：</p><ul><li>0： 应用内子 Agent</li><li>1： 引用已发布的应用</li></ul>
 * @method void setProviderType(integer $ProviderType) 设置<p>子 Agent 执行来源</p><p>枚举值：</p><ul><li>0： 应用内子 Agent</li><li>1： 引用已发布的应用</li></ul>
 * @method integer getReferenceAppStatus() 获取<p>引用应用状态，ProviderType=1 时有效</p><p>枚举值：</p><ul><li>0： 来源应用可用</li><li>1： 来源应用不可用</li><li>2： 无权限</li><li>3： 嵌套引用: 来源应用线上生效配置中已含应用类子 Agent</li></ul>
 * @method void setReferenceAppStatus(integer $ReferenceAppStatus) 设置<p>引用应用状态，ProviderType=1 时有效</p><p>枚举值：</p><ul><li>0： 来源应用可用</li><li>1： 来源应用不可用</li><li>2： 无权限</li><li>3： 嵌套引用: 来源应用线上生效配置中已含应用类子 Agent</li></ul>
 */
class AgentSummary extends AbstractModel
{
    /**
     * @var string <p>AgentId</p>
     */
    public $AgentId;

    /**
     * @var AgentProfile <p>Agent 身份画像</p>
     */
    public $Profile;

    /**
     * @var AgentAdvancedConfig <p>高级设置;scope=0 时返回</p>
     */
    public $AdvancedConfig;

    /**
     * @var integer <p>子 Agent 执行来源</p><p>枚举值：</p><ul><li>0： 应用内子 Agent</li><li>1： 引用已发布的应用</li></ul>
     */
    public $ProviderType;

    /**
     * @var integer <p>引用应用状态，ProviderType=1 时有效</p><p>枚举值：</p><ul><li>0： 来源应用可用</li><li>1： 来源应用不可用</li><li>2： 无权限</li><li>3： 嵌套引用: 来源应用线上生效配置中已含应用类子 Agent</li></ul>
     */
    public $ReferenceAppStatus;

    /**
     * @param string $AgentId <p>AgentId</p>
     * @param AgentProfile $Profile <p>Agent 身份画像</p>
     * @param AgentAdvancedConfig $AdvancedConfig <p>高级设置;scope=0 时返回</p>
     * @param integer $ProviderType <p>子 Agent 执行来源</p><p>枚举值：</p><ul><li>0： 应用内子 Agent</li><li>1： 引用已发布的应用</li></ul>
     * @param integer $ReferenceAppStatus <p>引用应用状态，ProviderType=1 时有效</p><p>枚举值：</p><ul><li>0： 来源应用可用</li><li>1： 来源应用不可用</li><li>2： 无权限</li><li>3： 嵌套引用: 来源应用线上生效配置中已含应用类子 Agent</li></ul>
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
        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = new AgentProfile();
            $this->Profile->deserialize($param["Profile"]);
        }

        if (array_key_exists("AdvancedConfig",$param) and $param["AdvancedConfig"] !== null) {
            $this->AdvancedConfig = new AgentAdvancedConfig();
            $this->AdvancedConfig->deserialize($param["AdvancedConfig"]);
        }

        if (array_key_exists("ProviderType",$param) and $param["ProviderType"] !== null) {
            $this->ProviderType = $param["ProviderType"];
        }

        if (array_key_exists("ReferenceAppStatus",$param) and $param["ReferenceAppStatus"] !== null) {
            $this->ReferenceAppStatus = $param["ReferenceAppStatus"];
        }
    }
}
