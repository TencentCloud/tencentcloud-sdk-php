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
 * DescribeWorkflowRun请求参数结构体
 *
 * @method string getAppBizId() 获取应用ID, 获取方法参看如何获取   [BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)。
 * @method void setAppBizId(string $AppBizId) 设置应用ID, 获取方法参看如何获取   [BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)。
 * @method string getWorkflowRunId() 获取工作流运行实例ID
 * @method void setWorkflowRunId(string $WorkflowRunId) 设置工作流运行实例ID
 * @method string getSubWorkflowNodePath() 获取指定的子工作流对应的NodePath。
格式：`[<node_id>[<index>].]*<node_id>[<index>]`
- 此路径用于定位一个具体的工作流实例（Workflow Run），可以是主工作流实例或某个子工作流节点产生的子实例。
- 路径由点号（.）分隔的节点标识符组成，每个节点标识符格式为 `节点ID[实例索引]`。
- **节点ID (node_id)**：子工作流所属的节点的ID。
- **实例索引 (index)**：“实例索引” 在工作流节点的时候为空，循环、批处理节点非空，从1开始。
示例：
- "" 或 不设置 -> 查询主工作流实例 (父工作流)
- "node_id_a" -> 查询由主工作流中工作流节点`node_id_a`对应的子工作流实例
- "node_id_a.node_id_b[1]" -> 查询工作流节点`node_id_a`对应的子工作流的循环节点node_id_b的第1轮循环的子工作流运行状态
 * @method void setSubWorkflowNodePath(string $SubWorkflowNodePath) 设置指定的子工作流对应的NodePath。
格式：`[<node_id>[<index>].]*<node_id>[<index>]`
- 此路径用于定位一个具体的工作流实例（Workflow Run），可以是主工作流实例或某个子工作流节点产生的子实例。
- 路径由点号（.）分隔的节点标识符组成，每个节点标识符格式为 `节点ID[实例索引]`。
- **节点ID (node_id)**：子工作流所属的节点的ID。
- **实例索引 (index)**：“实例索引” 在工作流节点的时候为空，循环、批处理节点非空，从1开始。
示例：
- "" 或 不设置 -> 查询主工作流实例 (父工作流)
- "node_id_a" -> 查询由主工作流中工作流节点`node_id_a`对应的子工作流实例
- "node_id_a.node_id_b[1]" -> 查询工作流节点`node_id_a`对应的子工作流的循环节点node_id_b的第1轮循环的子工作流运行状态
 * @method boolean getIncludeWorkflowGraph() 获取是否需要返回工作流的流程图配置
 * @method void setIncludeWorkflowGraph(boolean $IncludeWorkflowGraph) 设置是否需要返回工作流的流程图配置
 */
class DescribeWorkflowRunRequest extends AbstractModel
{
    /**
     * @var string 应用ID, 获取方法参看如何获取   [BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)。
     */
    public $AppBizId;

    /**
     * @var string 工作流运行实例ID
     */
    public $WorkflowRunId;

    /**
     * @var string 指定的子工作流对应的NodePath。
格式：`[<node_id>[<index>].]*<node_id>[<index>]`
- 此路径用于定位一个具体的工作流实例（Workflow Run），可以是主工作流实例或某个子工作流节点产生的子实例。
- 路径由点号（.）分隔的节点标识符组成，每个节点标识符格式为 `节点ID[实例索引]`。
- **节点ID (node_id)**：子工作流所属的节点的ID。
- **实例索引 (index)**：“实例索引” 在工作流节点的时候为空，循环、批处理节点非空，从1开始。
示例：
- "" 或 不设置 -> 查询主工作流实例 (父工作流)
- "node_id_a" -> 查询由主工作流中工作流节点`node_id_a`对应的子工作流实例
- "node_id_a.node_id_b[1]" -> 查询工作流节点`node_id_a`对应的子工作流的循环节点node_id_b的第1轮循环的子工作流运行状态
     */
    public $SubWorkflowNodePath;

    /**
     * @var boolean 是否需要返回工作流的流程图配置
     */
    public $IncludeWorkflowGraph;

    /**
     * @param string $AppBizId 应用ID, 获取方法参看如何获取   [BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)。
     * @param string $WorkflowRunId 工作流运行实例ID
     * @param string $SubWorkflowNodePath 指定的子工作流对应的NodePath。
格式：`[<node_id>[<index>].]*<node_id>[<index>]`
- 此路径用于定位一个具体的工作流实例（Workflow Run），可以是主工作流实例或某个子工作流节点产生的子实例。
- 路径由点号（.）分隔的节点标识符组成，每个节点标识符格式为 `节点ID[实例索引]`。
- **节点ID (node_id)**：子工作流所属的节点的ID。
- **实例索引 (index)**：“实例索引” 在工作流节点的时候为空，循环、批处理节点非空，从1开始。
示例：
- "" 或 不设置 -> 查询主工作流实例 (父工作流)
- "node_id_a" -> 查询由主工作流中工作流节点`node_id_a`对应的子工作流实例
- "node_id_a.node_id_b[1]" -> 查询工作流节点`node_id_a`对应的子工作流的循环节点node_id_b的第1轮循环的子工作流运行状态
     * @param boolean $IncludeWorkflowGraph 是否需要返回工作流的流程图配置
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
        if (array_key_exists("AppBizId",$param) and $param["AppBizId"] !== null) {
            $this->AppBizId = $param["AppBizId"];
        }

        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }

        if (array_key_exists("SubWorkflowNodePath",$param) and $param["SubWorkflowNodePath"] !== null) {
            $this->SubWorkflowNodePath = $param["SubWorkflowNodePath"];
        }

        if (array_key_exists("IncludeWorkflowGraph",$param) and $param["IncludeWorkflowGraph"] !== null) {
            $this->IncludeWorkflowGraph = $param["IncludeWorkflowGraph"];
        }
    }
}
