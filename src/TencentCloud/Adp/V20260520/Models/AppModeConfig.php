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
 * 模式配置 - 包含不同模式的独有配置
 *
 * @method MultiAgentConfig getMultiAgentConfig() 获取多智能体配置(Agent模式)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMultiAgentConfig(MultiAgentConfig $MultiAgentConfig) 设置多智能体配置(Agent模式)
注意：此字段可能返回 null，表示取不到有效值。
 * @method SingleWorkflowConfig getSingleWorkflowConfig() 获取单工作流配置(单工作流模式)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSingleWorkflowConfig(SingleWorkflowConfig $SingleWorkflowConfig) 设置单工作流配置(单工作流模式)
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClawAgentConfig getClawAgentConfig() 获取ClawAgent配置(ClawAgent模式)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClawAgentConfig(ClawAgentConfig $ClawAgentConfig) 设置ClawAgent配置(ClawAgent模式)
注意：此字段可能返回 null，表示取不到有效值。
 */
class AppModeConfig extends AbstractModel
{
    /**
     * @var MultiAgentConfig 多智能体配置(Agent模式)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MultiAgentConfig;

    /**
     * @var SingleWorkflowConfig 单工作流配置(单工作流模式)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SingleWorkflowConfig;

    /**
     * @var ClawAgentConfig ClawAgent配置(ClawAgent模式)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClawAgentConfig;

    /**
     * @param MultiAgentConfig $MultiAgentConfig 多智能体配置(Agent模式)
注意：此字段可能返回 null，表示取不到有效值。
     * @param SingleWorkflowConfig $SingleWorkflowConfig 单工作流配置(单工作流模式)
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClawAgentConfig $ClawAgentConfig ClawAgent配置(ClawAgent模式)
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
        if (array_key_exists("MultiAgentConfig",$param) and $param["MultiAgentConfig"] !== null) {
            $this->MultiAgentConfig = new MultiAgentConfig();
            $this->MultiAgentConfig->deserialize($param["MultiAgentConfig"]);
        }

        if (array_key_exists("SingleWorkflowConfig",$param) and $param["SingleWorkflowConfig"] !== null) {
            $this->SingleWorkflowConfig = new SingleWorkflowConfig();
            $this->SingleWorkflowConfig->deserialize($param["SingleWorkflowConfig"]);
        }

        if (array_key_exists("ClawAgentConfig",$param) and $param["ClawAgentConfig"] !== null) {
            $this->ClawAgentConfig = new ClawAgentConfig();
            $this->ClawAgentConfig->deserialize($param["ClawAgentConfig"]);
        }
    }
}
