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
 * 思考事件过程信息
 *
 * @method integer getIndex() 获取索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndex(integer $Index) 设置索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取执行过程英语名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置执行过程英语名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTitle() 获取中文名, 用于展示
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTitle(string $Title) 设置中文名, 用于展示
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态常量: 使用中: processing, 成功: success, 失败: failed
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态常量: 使用中: processing, 成功: success, 失败: failed
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIcon() 获取图标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIcon(string $Icon) 设置图标
注意：此字段可能返回 null，表示取不到有效值。
 * @method AgentProcedureDebugging getDebugging() 获取Agent调试信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDebugging(AgentProcedureDebugging $Debugging) 设置Agent调试信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSwitch() 获取是否切换Agent，取值为"main"或者"workflow",不切换为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置是否切换Agent，取值为"main"或者"workflow",不切换为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkflowName() 获取工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowName(string $WorkflowName) 设置工作流名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getElapsed() 获取当前请求执行时间, 单位 ms
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElapsed(integer $Elapsed) 设置当前请求执行时间, 单位 ms
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeName() 获取工作流节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeName(string $NodeName) 设置工作流节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReplyIndex() 获取用于展示思考放在哪个回复气泡中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplyIndex(integer $ReplyIndex) 设置用于展示思考放在哪个回复气泡中
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceAgentName() 获取主agent
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceAgentName(string $SourceAgentName) 设置主agent
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetAgentName() 获取挂号agent
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetAgentName(string $TargetAgentName) 设置挂号agent
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentIcon() 获取Agent的图标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentIcon(string $AgentIcon) 设置Agent的图标
注意：此字段可能返回 null，表示取不到有效值。
 */
class AgentProcedure extends AbstractModel
{
    /**
     * @var integer 索引
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Index;

    /**
     * @var string 执行过程英语名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 中文名, 用于展示
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Title;

    /**
     * @var string 状态常量: 使用中: processing, 成功: success, 失败: failed
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 图标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Icon;

    /**
     * @var AgentProcedureDebugging Agent调试信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Debugging;

    /**
     * @var string 是否切换Agent，取值为"main"或者"workflow",不切换为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @var string 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowName;

    /**
     * @var integer 当前请求执行时间, 单位 ms
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Elapsed;

    /**
     * @var string 工作流节点名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeName;

    /**
     * @var integer 用于展示思考放在哪个回复气泡中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplyIndex;

    /**
     * @var string 主agent
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceAgentName;

    /**
     * @var string 挂号agent
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetAgentName;

    /**
     * @var string Agent的图标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentIcon;

    /**
     * @param integer $Index 索引
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 执行过程英语名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Title 中文名, 用于展示
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态常量: 使用中: processing, 成功: success, 失败: failed
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Icon 图标
注意：此字段可能返回 null，表示取不到有效值。
     * @param AgentProcedureDebugging $Debugging Agent调试信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Switch 是否切换Agent，取值为"main"或者"workflow",不切换为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkflowName 工作流名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Elapsed 当前请求执行时间, 单位 ms
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeName 工作流节点名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReplyIndex 用于展示思考放在哪个回复气泡中
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceAgentName 主agent
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetAgentName 挂号agent
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentIcon Agent的图标
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Icon",$param) and $param["Icon"] !== null) {
            $this->Icon = $param["Icon"];
        }

        if (array_key_exists("Debugging",$param) and $param["Debugging"] !== null) {
            $this->Debugging = new AgentProcedureDebugging();
            $this->Debugging->deserialize($param["Debugging"]);
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("Elapsed",$param) and $param["Elapsed"] !== null) {
            $this->Elapsed = $param["Elapsed"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("ReplyIndex",$param) and $param["ReplyIndex"] !== null) {
            $this->ReplyIndex = $param["ReplyIndex"];
        }

        if (array_key_exists("SourceAgentName",$param) and $param["SourceAgentName"] !== null) {
            $this->SourceAgentName = $param["SourceAgentName"];
        }

        if (array_key_exists("TargetAgentName",$param) and $param["TargetAgentName"] !== null) {
            $this->TargetAgentName = $param["TargetAgentName"];
        }

        if (array_key_exists("AgentIcon",$param) and $param["AgentIcon"] !== null) {
            $this->AgentIcon = $param["AgentIcon"];
        }
    }
}
