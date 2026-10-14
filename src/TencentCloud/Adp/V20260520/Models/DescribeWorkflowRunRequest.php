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
 * DescribeWorkflowRun请求参数结构体
 *
 * @method string getAppId() 获取<p>应用ID, 获取方法参看如何获取 <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">AppId</a></p>
 * @method void setAppId(string $AppId) 设置<p>应用ID, 获取方法参看如何获取 <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">AppId</a></p>
 * @method string getWorkflowRunId() 获取<p>工作流运行实例ID</p>
 * @method void setWorkflowRunId(string $WorkflowRunId) 设置<p>工作流运行实例ID</p>
 * @method string getSubWorkflowNodePath() 获取<p>指定的子工作流对应的NodePath。 格式：[&lt;node_id&gt;[&lt;index&gt;].]*&lt;node_id&gt;[&lt;index&gt;]  此路径用于定位一个具体的工作流实例（Workflow Run），可以是主工作流实例或某个子工作流节点产生的子实例。 路径由点号（.）分隔的节点标识符组成，每个节点标识符格式为 节点ID[实例索引]。 节点ID (node_id)：子工作流所属的节点的ID。 实例索引 (index)：“实例索引” 在工作流节点的时候为空，循环、批处理节点非空，从1开始。 示例： &quot;&quot; 或 不设置 -&gt; 查询主工作流实例 (父工作流) &quot;node_id_a&quot; -&gt; 查询由主工作流中工作流节点node_id_a对应的子工作流实例 &quot;node_id_a.node_id_b[1]&quot; -&gt; 查询工作流节点node_id_a对应的子工作流的循环节点node_id_b的第1轮循环的子工作流运行状态</p>
 * @method void setSubWorkflowNodePath(string $SubWorkflowNodePath) 设置<p>指定的子工作流对应的NodePath。 格式：[&lt;node_id&gt;[&lt;index&gt;].]*&lt;node_id&gt;[&lt;index&gt;]  此路径用于定位一个具体的工作流实例（Workflow Run），可以是主工作流实例或某个子工作流节点产生的子实例。 路径由点号（.）分隔的节点标识符组成，每个节点标识符格式为 节点ID[实例索引]。 节点ID (node_id)：子工作流所属的节点的ID。 实例索引 (index)：“实例索引” 在工作流节点的时候为空，循环、批处理节点非空，从1开始。 示例： &quot;&quot; 或 不设置 -&gt; 查询主工作流实例 (父工作流) &quot;node_id_a&quot; -&gt; 查询由主工作流中工作流节点node_id_a对应的子工作流实例 &quot;node_id_a.node_id_b[1]&quot; -&gt; 查询工作流节点node_id_a对应的子工作流的循环节点node_id_b的第1轮循环的子工作流运行状态</p>
 * @method boolean getIncludeWorkflowGraph() 获取<p>是否需要返回工作流的流程图配置</p>
 * @method void setIncludeWorkflowGraph(boolean $IncludeWorkflowGraph) 设置<p>是否需要返回工作流的流程图配置</p>
 */
class DescribeWorkflowRunRequest extends AbstractModel
{
    /**
     * @var string <p>应用ID, 获取方法参看如何获取 <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">AppId</a></p>
     */
    public $AppId;

    /**
     * @var string <p>工作流运行实例ID</p>
     */
    public $WorkflowRunId;

    /**
     * @var string <p>指定的子工作流对应的NodePath。 格式：[&lt;node_id&gt;[&lt;index&gt;].]*&lt;node_id&gt;[&lt;index&gt;]  此路径用于定位一个具体的工作流实例（Workflow Run），可以是主工作流实例或某个子工作流节点产生的子实例。 路径由点号（.）分隔的节点标识符组成，每个节点标识符格式为 节点ID[实例索引]。 节点ID (node_id)：子工作流所属的节点的ID。 实例索引 (index)：“实例索引” 在工作流节点的时候为空，循环、批处理节点非空，从1开始。 示例： &quot;&quot; 或 不设置 -&gt; 查询主工作流实例 (父工作流) &quot;node_id_a&quot; -&gt; 查询由主工作流中工作流节点node_id_a对应的子工作流实例 &quot;node_id_a.node_id_b[1]&quot; -&gt; 查询工作流节点node_id_a对应的子工作流的循环节点node_id_b的第1轮循环的子工作流运行状态</p>
     */
    public $SubWorkflowNodePath;

    /**
     * @var boolean <p>是否需要返回工作流的流程图配置</p>
     */
    public $IncludeWorkflowGraph;

    /**
     * @param string $AppId <p>应用ID, 获取方法参看如何获取 <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">AppId</a></p>
     * @param string $WorkflowRunId <p>工作流运行实例ID</p>
     * @param string $SubWorkflowNodePath <p>指定的子工作流对应的NodePath。 格式：[&lt;node_id&gt;[&lt;index&gt;].]*&lt;node_id&gt;[&lt;index&gt;]  此路径用于定位一个具体的工作流实例（Workflow Run），可以是主工作流实例或某个子工作流节点产生的子实例。 路径由点号（.）分隔的节点标识符组成，每个节点标识符格式为 节点ID[实例索引]。 节点ID (node_id)：子工作流所属的节点的ID。 实例索引 (index)：“实例索引” 在工作流节点的时候为空，循环、批处理节点非空，从1开始。 示例： &quot;&quot; 或 不设置 -&gt; 查询主工作流实例 (父工作流) &quot;node_id_a&quot; -&gt; 查询由主工作流中工作流节点node_id_a对应的子工作流实例 &quot;node_id_a.node_id_b[1]&quot; -&gt; 查询工作流节点node_id_a对应的子工作流的循环节点node_id_b的第1轮循环的子工作流运行状态</p>
     * @param boolean $IncludeWorkflowGraph <p>是否需要返回工作流的流程图配置</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
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
