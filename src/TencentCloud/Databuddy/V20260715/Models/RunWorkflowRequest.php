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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RunWorkflow请求参数结构体
 *
 * @method string getWorkspaceId() 获取<p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
 * @method string getWorkflowId() 获取<p>工作流ID，可通过 ListWorkflows 获取。必填</p>
 * @method void setWorkflowId(string $WorkflowId) 设置<p>工作流ID，可通过 ListWorkflows 获取。必填</p>
 * @method integer getRunType() 获取<p>运行类型。必填。取值：1 普通运行，2 高级运行</p>
 * @method void setRunType(integer $RunType) 设置<p>运行类型。必填。取值：1 普通运行，2 高级运行</p>
 * @method array getAdvancedParams() 获取<p>运行类型为高级运行时填写的自定义运行参数</p>
 * @method void setAdvancedParams(array $AdvancedParams) 设置<p>运行类型为高级运行时填写的自定义运行参数</p>
 * @method array getTaskIds() 获取<p>本次需要运行指定的任务ID集合，可通过 ListWorkflowTasks 获取，不传默认运行该工作流下所有任务</p>
 * @method void setTaskIds(array $TaskIds) 设置<p>本次需要运行指定的任务ID集合，可通过 ListWorkflowTasks 获取，不传默认运行该工作流下所有任务</p>
 * @method string getIdempotencyToken() 获取<p>幂等令牌。非必填，相同令牌的重复请求只会触发一次运行</p>
 * @method void setIdempotencyToken(string $IdempotencyToken) 设置<p>幂等令牌。非必填，相同令牌的重复请求只会触发一次运行</p>
 * @method ScheduledTimeConfig getScheduledTimeConfig() 获取<p>计划调度时间列表配置</p>
 * @method void setScheduledTimeConfig(ScheduledTimeConfig $ScheduledTimeConfig) 设置<p>计划调度时间列表配置</p>
 */
class RunWorkflowRequest extends AbstractModel
{
    /**
     * @var string <p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>工作流ID，可通过 ListWorkflows 获取。必填</p>
     */
    public $WorkflowId;

    /**
     * @var integer <p>运行类型。必填。取值：1 普通运行，2 高级运行</p>
     */
    public $RunType;

    /**
     * @var array <p>运行类型为高级运行时填写的自定义运行参数</p>
     */
    public $AdvancedParams;

    /**
     * @var array <p>本次需要运行指定的任务ID集合，可通过 ListWorkflowTasks 获取，不传默认运行该工作流下所有任务</p>
     */
    public $TaskIds;

    /**
     * @var string <p>幂等令牌。非必填，相同令牌的重复请求只会触发一次运行</p>
     */
    public $IdempotencyToken;

    /**
     * @var ScheduledTimeConfig <p>计划调度时间列表配置</p>
     */
    public $ScheduledTimeConfig;

    /**
     * @param string $WorkspaceId <p>工作空间ID，可通过 ListWorkspaces 获取。必填</p>
     * @param string $WorkflowId <p>工作流ID，可通过 ListWorkflows 获取。必填</p>
     * @param integer $RunType <p>运行类型。必填。取值：1 普通运行，2 高级运行</p>
     * @param array $AdvancedParams <p>运行类型为高级运行时填写的自定义运行参数</p>
     * @param array $TaskIds <p>本次需要运行指定的任务ID集合，可通过 ListWorkflowTasks 获取，不传默认运行该工作流下所有任务</p>
     * @param string $IdempotencyToken <p>幂等令牌。非必填，相同令牌的重复请求只会触发一次运行</p>
     * @param ScheduledTimeConfig $ScheduledTimeConfig <p>计划调度时间列表配置</p>
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("RunType",$param) and $param["RunType"] !== null) {
            $this->RunType = $param["RunType"];
        }

        if (array_key_exists("AdvancedParams",$param) and $param["AdvancedParams"] !== null) {
            $this->AdvancedParams = [];
            foreach ($param["AdvancedParams"] as $key => $value){
                $obj = new TaskSchedulingParameterBrief();
                $obj->deserialize($value);
                array_push($this->AdvancedParams, $obj);
            }
        }

        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("IdempotencyToken",$param) and $param["IdempotencyToken"] !== null) {
            $this->IdempotencyToken = $param["IdempotencyToken"];
        }

        if (array_key_exists("ScheduledTimeConfig",$param) and $param["ScheduledTimeConfig"] !== null) {
            $this->ScheduledTimeConfig = new ScheduledTimeConfig();
            $this->ScheduledTimeConfig->deserialize($param["ScheduledTimeConfig"]);
        }
    }
}
