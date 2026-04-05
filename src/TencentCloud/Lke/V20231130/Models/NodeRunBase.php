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
 * 节点运行的基本信息
 *
 * @method string getNodeRunId() 获取<p>节点运行的ID</p>
 * @method void setNodeRunId(string $NodeRunId) 设置<p>节点运行的ID</p>
 * @method string getNodeId() 获取<p>节点ID</p>
 * @method void setNodeId(string $NodeId) 设置<p>节点ID</p>
 * @method string getWorkflowRunId() 获取<p>工作流运行实例的ID</p>
 * @method void setWorkflowRunId(string $WorkflowRunId) 设置<p>工作流运行实例的ID</p>
 * @method string getNodeName() 获取<p>节点名称</p>
 * @method void setNodeName(string $NodeName) 设置<p>节点名称</p>
 * @method integer getNodeType() 获取<p>节点类型。<br>1： 开始节点<br>2：参数提取节点<br>3：大模型节点<br>4：知识问答节点<br>5：知识检索节点<br>6：标签提取节点<br>7：代码执行节点<br>8：工具节点<br>9：逻辑判断节点<br>10：回复节点<br>11：选项卡节点<br>12：循环节点<br>13：意图识别节点<br>14：工作流节点<br>15：插件节点<br>16：结束节点<br>17: 变量聚合节点数据<br>18: 批处理节点<br>19: 消息队列节点</p>
 * @method void setNodeType(integer $NodeType) 设置<p>节点类型。<br>1： 开始节点<br>2：参数提取节点<br>3：大模型节点<br>4：知识问答节点<br>5：知识检索节点<br>6：标签提取节点<br>7：代码执行节点<br>8：工具节点<br>9：逻辑判断节点<br>10：回复节点<br>11：选项卡节点<br>12：循环节点<br>13：意图识别节点<br>14：工作流节点<br>15：插件节点<br>16：结束节点<br>17: 变量聚合节点数据<br>18: 批处理节点<br>19: 消息队列节点</p>
 * @method integer getState() 获取<p>运行状态。0: 初始状态；1: 运行中；2: 运行成功； 3: 运行失败； 4: 已取消</p>
 * @method void setState(integer $State) 设置<p>运行状态。0: 初始状态；1: 运行中；2: 运行成功； 3: 运行失败； 4: 已取消</p>
 * @method string getFailCode() 获取<p>错误码</p>
 * @method void setFailCode(string $FailCode) 设置<p>错误码</p>
 * @method string getFailMessage() 获取<p>错误信息</p>
 * @method void setFailMessage(string $FailMessage) 设置<p>错误信息</p>
 * @method integer getCostMilliseconds() 获取<p>消耗时间（毫秒）</p>
 * @method void setCostMilliseconds(integer $CostMilliseconds) 设置<p>消耗时间（毫秒）</p>
 * @method integer getTotalTokens() 获取<p>消耗的token总数</p>
 * @method void setTotalTokens(integer $TotalTokens) 设置<p>消耗的token总数</p>
 * @method array getBranchIndexList() 获取<p>分支下标列表</p><p>单位：无</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBranchIndexList(array $BranchIndexList) 设置<p>分支下标列表</p><p>单位：无</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class NodeRunBase extends AbstractModel
{
    /**
     * @var string <p>节点运行的ID</p>
     */
    public $NodeRunId;

    /**
     * @var string <p>节点ID</p>
     */
    public $NodeId;

    /**
     * @var string <p>工作流运行实例的ID</p>
     */
    public $WorkflowRunId;

    /**
     * @var string <p>节点名称</p>
     */
    public $NodeName;

    /**
     * @var integer <p>节点类型。<br>1： 开始节点<br>2：参数提取节点<br>3：大模型节点<br>4：知识问答节点<br>5：知识检索节点<br>6：标签提取节点<br>7：代码执行节点<br>8：工具节点<br>9：逻辑判断节点<br>10：回复节点<br>11：选项卡节点<br>12：循环节点<br>13：意图识别节点<br>14：工作流节点<br>15：插件节点<br>16：结束节点<br>17: 变量聚合节点数据<br>18: 批处理节点<br>19: 消息队列节点</p>
     */
    public $NodeType;

    /**
     * @var integer <p>运行状态。0: 初始状态；1: 运行中；2: 运行成功； 3: 运行失败； 4: 已取消</p>
     */
    public $State;

    /**
     * @var string <p>错误码</p>
     */
    public $FailCode;

    /**
     * @var string <p>错误信息</p>
     */
    public $FailMessage;

    /**
     * @var integer <p>消耗时间（毫秒）</p>
     */
    public $CostMilliseconds;

    /**
     * @var integer <p>消耗的token总数</p>
     */
    public $TotalTokens;

    /**
     * @var array <p>分支下标列表</p><p>单位：无</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BranchIndexList;

    /**
     * @param string $NodeRunId <p>节点运行的ID</p>
     * @param string $NodeId <p>节点ID</p>
     * @param string $WorkflowRunId <p>工作流运行实例的ID</p>
     * @param string $NodeName <p>节点名称</p>
     * @param integer $NodeType <p>节点类型。<br>1： 开始节点<br>2：参数提取节点<br>3：大模型节点<br>4：知识问答节点<br>5：知识检索节点<br>6：标签提取节点<br>7：代码执行节点<br>8：工具节点<br>9：逻辑判断节点<br>10：回复节点<br>11：选项卡节点<br>12：循环节点<br>13：意图识别节点<br>14：工作流节点<br>15：插件节点<br>16：结束节点<br>17: 变量聚合节点数据<br>18: 批处理节点<br>19: 消息队列节点</p>
     * @param integer $State <p>运行状态。0: 初始状态；1: 运行中；2: 运行成功； 3: 运行失败； 4: 已取消</p>
     * @param string $FailCode <p>错误码</p>
     * @param string $FailMessage <p>错误信息</p>
     * @param integer $CostMilliseconds <p>消耗时间（毫秒）</p>
     * @param integer $TotalTokens <p>消耗的token总数</p>
     * @param array $BranchIndexList <p>分支下标列表</p><p>单位：无</p>
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
        if (array_key_exists("NodeRunId",$param) and $param["NodeRunId"] !== null) {
            $this->NodeRunId = $param["NodeRunId"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("FailCode",$param) and $param["FailCode"] !== null) {
            $this->FailCode = $param["FailCode"];
        }

        if (array_key_exists("FailMessage",$param) and $param["FailMessage"] !== null) {
            $this->FailMessage = $param["FailMessage"];
        }

        if (array_key_exists("CostMilliseconds",$param) and $param["CostMilliseconds"] !== null) {
            $this->CostMilliseconds = $param["CostMilliseconds"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }

        if (array_key_exists("BranchIndexList",$param) and $param["BranchIndexList"] !== null) {
            $this->BranchIndexList = $param["BranchIndexList"];
        }
    }
}
