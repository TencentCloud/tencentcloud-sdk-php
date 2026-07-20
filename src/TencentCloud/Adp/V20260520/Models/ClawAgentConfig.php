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
 * @method ClawAgentCustomConfig getCustomConfig() 获取调用方自定义配置(控制C端用户在对话时可动态传入哪些自定义配置)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomConfig(ClawAgentCustomConfig $CustomConfig) 设置调用方自定义配置(控制C端用户在对话时可动态传入哪些自定义配置)
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClawAgentAgentTeamConfig getAgentTeamConfig() 获取Agent团队协作配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentTeamConfig(ClawAgentAgentTeamConfig $AgentTeamConfig) 设置Agent团队协作配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClawAgentLongMemoryConfig getLongMemoryConfig() 获取长期记忆配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLongMemoryConfig(ClawAgentLongMemoryConfig $LongMemoryConfig) 设置长期记忆配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClawAgentConfig extends AbstractModel
{
    /**
     * @var ClawAgentCustomConfig 调用方自定义配置(控制C端用户在对话时可动态传入哪些自定义配置)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomConfig;

    /**
     * @var ClawAgentAgentTeamConfig Agent团队协作配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentTeamConfig;

    /**
     * @var ClawAgentLongMemoryConfig 长期记忆配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LongMemoryConfig;

    /**
     * @param ClawAgentCustomConfig $CustomConfig 调用方自定义配置(控制C端用户在对话时可动态传入哪些自定义配置)
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClawAgentAgentTeamConfig $AgentTeamConfig Agent团队协作配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClawAgentLongMemoryConfig $LongMemoryConfig 长期记忆配置
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
        if (array_key_exists("CustomConfig",$param) and $param["CustomConfig"] !== null) {
            $this->CustomConfig = new ClawAgentCustomConfig();
            $this->CustomConfig->deserialize($param["CustomConfig"]);
        }

        if (array_key_exists("AgentTeamConfig",$param) and $param["AgentTeamConfig"] !== null) {
            $this->AgentTeamConfig = new ClawAgentAgentTeamConfig();
            $this->AgentTeamConfig->deserialize($param["AgentTeamConfig"]);
        }

        if (array_key_exists("LongMemoryConfig",$param) and $param["LongMemoryConfig"] !== null) {
            $this->LongMemoryConfig = new ClawAgentLongMemoryConfig();
            $this->LongMemoryConfig->deserialize($param["LongMemoryConfig"]);
        }
    }
}
