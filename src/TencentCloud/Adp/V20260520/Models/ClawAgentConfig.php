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
 * ClawAgent配置
 *
 * @method ClawAgentAgentTeamConfig getAgentTeamConfig() 获取<p>Agent团队协作配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentTeamConfig(ClawAgentAgentTeamConfig $AgentTeamConfig) 设置<p>Agent团队协作配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClawAgentLongMemoryConfig getLongMemoryConfig() 获取<p>长期记忆配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLongMemoryConfig(ClawAgentLongMemoryConfig $LongMemoryConfig) 设置<p>长期记忆配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClawAgentChannelContextTimeoutConfig getChannelContextTimeoutConfig() 获取<p>渠道上下文超时清空配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelContextTimeoutConfig(ClawAgentChannelContextTimeoutConfig $ChannelContextTimeoutConfig) 设置<p>渠道上下文超时清空配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClawAgentConfig extends AbstractModel
{
    /**
     * @var ClawAgentAgentTeamConfig <p>Agent团队协作配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentTeamConfig;

    /**
     * @var ClawAgentLongMemoryConfig <p>长期记忆配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LongMemoryConfig;

    /**
     * @var ClawAgentChannelContextTimeoutConfig <p>渠道上下文超时清空配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelContextTimeoutConfig;

    /**
     * @param ClawAgentAgentTeamConfig $AgentTeamConfig <p>Agent团队协作配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClawAgentLongMemoryConfig $LongMemoryConfig <p>长期记忆配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClawAgentChannelContextTimeoutConfig $ChannelContextTimeoutConfig <p>渠道上下文超时清空配置</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("AgentTeamConfig",$param) and $param["AgentTeamConfig"] !== null) {
            $this->AgentTeamConfig = new ClawAgentAgentTeamConfig();
            $this->AgentTeamConfig->deserialize($param["AgentTeamConfig"]);
        }

        if (array_key_exists("LongMemoryConfig",$param) and $param["LongMemoryConfig"] !== null) {
            $this->LongMemoryConfig = new ClawAgentLongMemoryConfig();
            $this->LongMemoryConfig->deserialize($param["LongMemoryConfig"]);
        }

        if (array_key_exists("ChannelContextTimeoutConfig",$param) and $param["ChannelContextTimeoutConfig"] !== null) {
            $this->ChannelContextTimeoutConfig = new ClawAgentChannelContextTimeoutConfig();
            $this->ChannelContextTimeoutConfig->deserialize($param["ChannelContextTimeoutConfig"]);
        }
    }
}
