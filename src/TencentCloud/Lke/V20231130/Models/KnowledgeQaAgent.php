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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用配置关联的agent信息
 *
 * @method integer getAgentCollaboration() 获取协同方式，1：自由转交，2：工作流编排，3：Plan-and-Execute
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentCollaboration(integer $AgentCollaboration) 设置协同方式，1：自由转交，2：工作流编排，3：Plan-and-Execute
注意：此字段可能返回 null，表示取不到有效值。
 * @method KnowledgeQaWorkflowInfo getWorkflow() 获取应用配置agent关联的工作流
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflow(KnowledgeQaWorkflowInfo $Workflow) 设置应用配置agent关联的工作流
注意：此字段可能返回 null，表示取不到有效值。
 */
class KnowledgeQaAgent extends AbstractModel
{
    /**
     * @var integer 协同方式，1：自由转交，2：工作流编排，3：Plan-and-Execute
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentCollaboration;

    /**
     * @var KnowledgeQaWorkflowInfo 应用配置agent关联的工作流
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Workflow;

    /**
     * @param integer $AgentCollaboration 协同方式，1：自由转交，2：工作流编排，3：Plan-and-Execute
注意：此字段可能返回 null，表示取不到有效值。
     * @param KnowledgeQaWorkflowInfo $Workflow 应用配置agent关联的工作流
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
        if (array_key_exists("AgentCollaboration",$param) and $param["AgentCollaboration"] !== null) {
            $this->AgentCollaboration = $param["AgentCollaboration"];
        }

        if (array_key_exists("Workflow",$param) and $param["Workflow"] !== null) {
            $this->Workflow = new KnowledgeQaWorkflowInfo();
            $this->Workflow->deserialize($param["Workflow"]);
        }
    }
}
