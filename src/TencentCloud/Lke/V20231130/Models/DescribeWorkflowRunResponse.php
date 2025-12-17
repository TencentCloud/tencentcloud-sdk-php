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
 * DescribeWorkflowRun返回参数结构体
 *
 * @method WorkflowRunDetail getWorkflowRun() 获取工作流运行实例详情
 * @method void setWorkflowRun(WorkflowRunDetail $WorkflowRun) 设置工作流运行实例详情
 * @method array getNodeRuns() 获取节点列表
 * @method void setNodeRuns(array $NodeRuns) 设置节点列表
 * @method string getSubWorkflowNodePath() 获取子工作流对应的NodePath
 * @method void setSubWorkflowNodePath(string $SubWorkflowNodePath) 设置子工作流对应的NodePath
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeWorkflowRunResponse extends AbstractModel
{
    /**
     * @var WorkflowRunDetail 工作流运行实例详情
     */
    public $WorkflowRun;

    /**
     * @var array 节点列表
     */
    public $NodeRuns;

    /**
     * @var string 子工作流对应的NodePath
     */
    public $SubWorkflowNodePath;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param WorkflowRunDetail $WorkflowRun 工作流运行实例详情
     * @param array $NodeRuns 节点列表
     * @param string $SubWorkflowNodePath 子工作流对应的NodePath
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("WorkflowRun",$param) and $param["WorkflowRun"] !== null) {
            $this->WorkflowRun = new WorkflowRunDetail();
            $this->WorkflowRun->deserialize($param["WorkflowRun"]);
        }

        if (array_key_exists("NodeRuns",$param) and $param["NodeRuns"] !== null) {
            $this->NodeRuns = [];
            foreach ($param["NodeRuns"] as $key => $value){
                $obj = new NodeRunBase();
                $obj->deserialize($value);
                array_push($this->NodeRuns, $obj);
            }
        }

        if (array_key_exists("SubWorkflowNodePath",$param) and $param["SubWorkflowNodePath"] !== null) {
            $this->SubWorkflowNodePath = $param["SubWorkflowNodePath"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
