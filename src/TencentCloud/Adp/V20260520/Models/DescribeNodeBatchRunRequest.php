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
 * DescribeNodeBatchRun请求参数结构体
 *
 * @method string getAppId() 获取<p>应用ID</p>
 * @method void setAppId(string $AppId) 设置<p>应用ID</p>
 * @method integer getIndex() 获取<p>索引号</p>
 * @method void setIndex(integer $Index) 设置<p>索引号</p>
 * @method string getNodeId() 获取<p>工作流节点ID</p>
 * @method void setNodeId(string $NodeId) 设置<p>工作流节点ID</p>
 * @method string getSubWorkflowNodePath() 获取<p>子工作流所属节点</p><p>node_id_a.node_id_b[1]</p>
 * @method void setSubWorkflowNodePath(string $SubWorkflowNodePath) 设置<p>子工作流所属节点</p><p>node_id_a.node_id_b[1]</p>
 * @method string getWorkflowRunId() 获取<p>工作流运行ID</p>
 * @method void setWorkflowRunId(string $WorkflowRunId) 设置<p>工作流运行ID</p>
 */
class DescribeNodeBatchRunRequest extends AbstractModel
{
    /**
     * @var string <p>应用ID</p>
     */
    public $AppId;

    /**
     * @var integer <p>索引号</p>
     */
    public $Index;

    /**
     * @var string <p>工作流节点ID</p>
     */
    public $NodeId;

    /**
     * @var string <p>子工作流所属节点</p><p>node_id_a.node_id_b[1]</p>
     */
    public $SubWorkflowNodePath;

    /**
     * @var string <p>工作流运行ID</p>
     */
    public $WorkflowRunId;

    /**
     * @param string $AppId <p>应用ID</p>
     * @param integer $Index <p>索引号</p>
     * @param string $NodeId <p>工作流节点ID</p>
     * @param string $SubWorkflowNodePath <p>子工作流所属节点</p><p>node_id_a.node_id_b[1]</p>
     * @param string $WorkflowRunId <p>工作流运行ID</p>
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

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("SubWorkflowNodePath",$param) and $param["SubWorkflowNodePath"] !== null) {
            $this->SubWorkflowNodePath = $param["SubWorkflowNodePath"];
        }

        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }
    }
}
