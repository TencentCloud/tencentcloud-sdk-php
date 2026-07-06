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
     * @param string $AgentId <p>AgentId</p>
     * @param AgentProfile $Profile <p>Agent 身份画像</p>
     * @param AgentAdvancedConfig $AdvancedConfig <p>高级设置;scope=0 时返回</p>
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
    }
}
