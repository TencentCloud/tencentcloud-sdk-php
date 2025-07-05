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
 * @method string getNodeRunId() 获取节点运行的ID
 * @method void setNodeRunId(string $NodeRunId) 设置节点运行的ID
 * @method string getNodeId() 获取节点ID
 * @method void setNodeId(string $NodeId) 设置节点ID
 * @method string getWorkflowRunId() 获取工作流运行实例的ID
 * @method void setWorkflowRunId(string $WorkflowRunId) 设置工作流运行实例的ID
 * @method string getNodeName() 获取节点名称
 * @method void setNodeName(string $NodeName) 设置节点名称
 * @method integer getNodeType() 获取节点类型。
1： 开始节点
2：参数提取节点
3：大模型节点
4：知识问答节点
5：知识检索节点
6：标签提取节点
7：代码执行节点
8：工具节点
9：逻辑判断节点
10：回复节点
11：选项卡节点
12：循环节点
13：意图识别节点
14：工作流节点
15：插件节点
16：结束节点
17: 变量聚合节点数据
18: 批处理节点
19: 消息队列节点
 * @method void setNodeType(integer $NodeType) 设置节点类型。
1： 开始节点
2：参数提取节点
3：大模型节点
4：知识问答节点
5：知识检索节点
6：标签提取节点
7：代码执行节点
8：工具节点
9：逻辑判断节点
10：回复节点
11：选项卡节点
12：循环节点
13：意图识别节点
14：工作流节点
15：插件节点
16：结束节点
17: 变量聚合节点数据
18: 批处理节点
19: 消息队列节点
 * @method integer getState() 获取运行状态。0: 初始状态；1: 运行中；2: 运行成功； 3: 运行失败； 4: 已取消
 * @method void setState(integer $State) 设置运行状态。0: 初始状态；1: 运行中；2: 运行成功； 3: 运行失败； 4: 已取消
 * @method string getFailCode() 获取错误码
 * @method void setFailCode(string $FailCode) 设置错误码
 * @method string getFailMessage() 获取错误信息
 * @method void setFailMessage(string $FailMessage) 设置错误信息
 * @method integer getCostMilliseconds() 获取消耗时间（毫秒）
 * @method void setCostMilliseconds(integer $CostMilliseconds) 设置消耗时间（毫秒）
 * @method integer getTotalTokens() 获取消耗的token总数
 * @method void setTotalTokens(integer $TotalTokens) 设置消耗的token总数
 */
class NodeRunBase extends AbstractModel
{
    /**
     * @var string 节点运行的ID
     */
    public $NodeRunId;

    /**
     * @var string 节点ID
     */
    public $NodeId;

    /**
     * @var string 工作流运行实例的ID
     */
    public $WorkflowRunId;

    /**
     * @var string 节点名称
     */
    public $NodeName;

    /**
     * @var integer 节点类型。
1： 开始节点
2：参数提取节点
3：大模型节点
4：知识问答节点
5：知识检索节点
6：标签提取节点
7：代码执行节点
8：工具节点
9：逻辑判断节点
10：回复节点
11：选项卡节点
12：循环节点
13：意图识别节点
14：工作流节点
15：插件节点
16：结束节点
17: 变量聚合节点数据
18: 批处理节点
19: 消息队列节点
     */
    public $NodeType;

    /**
     * @var integer 运行状态。0: 初始状态；1: 运行中；2: 运行成功； 3: 运行失败； 4: 已取消
     */
    public $State;

    /**
     * @var string 错误码
     */
    public $FailCode;

    /**
     * @var string 错误信息
     */
    public $FailMessage;

    /**
     * @var integer 消耗时间（毫秒）
     */
    public $CostMilliseconds;

    /**
     * @var integer 消耗的token总数
     */
    public $TotalTokens;

    /**
     * @param string $NodeRunId 节点运行的ID
     * @param string $NodeId 节点ID
     * @param string $WorkflowRunId 工作流运行实例的ID
     * @param string $NodeName 节点名称
     * @param integer $NodeType 节点类型。
1： 开始节点
2：参数提取节点
3：大模型节点
4：知识问答节点
5：知识检索节点
6：标签提取节点
7：代码执行节点
8：工具节点
9：逻辑判断节点
10：回复节点
11：选项卡节点
12：循环节点
13：意图识别节点
14：工作流节点
15：插件节点
16：结束节点
17: 变量聚合节点数据
18: 批处理节点
19: 消息队列节点
     * @param integer $State 运行状态。0: 初始状态；1: 运行中；2: 运行成功； 3: 运行失败； 4: 已取消
     * @param string $FailCode 错误码
     * @param string $FailMessage 错误信息
     * @param integer $CostMilliseconds 消耗时间（毫秒）
     * @param integer $TotalTokens 消耗的token总数
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
    }
}
