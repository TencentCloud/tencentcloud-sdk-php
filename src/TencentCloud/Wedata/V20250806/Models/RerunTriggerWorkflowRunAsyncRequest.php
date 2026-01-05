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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RerunTriggerWorkflowRunAsync请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getWorkflowId() 获取工作流ID
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
 * @method string getWorkflowExecutionId() 获取工作流运行ID
 * @method void setWorkflowExecutionId(string $WorkflowExecutionId) 设置工作流运行ID
 * @method string getExecuteType() 获取运行方式：普通运行默认所有参数：1，高级运行可选任务范围和运行参数：2
 * @method void setExecuteType(string $ExecuteType) 设置运行方式：普通运行默认所有参数：1，高级运行可选任务范围和运行参数：2
 * @method array getAdvancedParams() 获取运行类型为高级运行时填写的自定义运行参数
 * @method void setAdvancedParams(array $AdvancedParams) 设置运行类型为高级运行时填写的自定义运行参数
 * @method array getTaskIds() 获取高级运行模式下本次需要运行指定的任务ID集合
 * @method void setTaskIds(array $TaskIds) 设置高级运行模式下本次需要运行指定的任务ID集合
 * @method string getSchedulingResourceGroup() 获取指定调度资源组,为空时默认使用配置的原调度资源组
 * @method void setSchedulingResourceGroup(string $SchedulingResourceGroup) 设置指定调度资源组,为空时默认使用配置的原调度资源组
 * @method string getIntegrationResourceGroup() 获取指定集成资源组,为空时默认使用配置的原集成资源组
 * @method void setIntegrationResourceGroup(string $IntegrationResourceGroup) 设置指定集成资源组,为空时默认使用配置的原集成资源组
 */
class RerunTriggerWorkflowRunAsyncRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 工作流ID
     */
    public $WorkflowId;

    /**
     * @var string 工作流运行ID
     */
    public $WorkflowExecutionId;

    /**
     * @var string 运行方式：普通运行默认所有参数：1，高级运行可选任务范围和运行参数：2
     */
    public $ExecuteType;

    /**
     * @var array 运行类型为高级运行时填写的自定义运行参数
     */
    public $AdvancedParams;

    /**
     * @var array 高级运行模式下本次需要运行指定的任务ID集合
     */
    public $TaskIds;

    /**
     * @var string 指定调度资源组,为空时默认使用配置的原调度资源组
     */
    public $SchedulingResourceGroup;

    /**
     * @var string 指定集成资源组,为空时默认使用配置的原集成资源组
     */
    public $IntegrationResourceGroup;

    /**
     * @param string $ProjectId 项目ID
     * @param string $WorkflowId 工作流ID
     * @param string $WorkflowExecutionId 工作流运行ID
     * @param string $ExecuteType 运行方式：普通运行默认所有参数：1，高级运行可选任务范围和运行参数：2
     * @param array $AdvancedParams 运行类型为高级运行时填写的自定义运行参数
     * @param array $TaskIds 高级运行模式下本次需要运行指定的任务ID集合
     * @param string $SchedulingResourceGroup 指定调度资源组,为空时默认使用配置的原调度资源组
     * @param string $IntegrationResourceGroup 指定集成资源组,为空时默认使用配置的原集成资源组
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowExecutionId",$param) and $param["WorkflowExecutionId"] !== null) {
            $this->WorkflowExecutionId = $param["WorkflowExecutionId"];
        }

        if (array_key_exists("ExecuteType",$param) and $param["ExecuteType"] !== null) {
            $this->ExecuteType = $param["ExecuteType"];
        }

        if (array_key_exists("AdvancedParams",$param) and $param["AdvancedParams"] !== null) {
            $this->AdvancedParams = [];
            foreach ($param["AdvancedParams"] as $key => $value){
                $obj = new SchedulingParameter();
                $obj->deserialize($value);
                array_push($this->AdvancedParams, $obj);
            }
        }

        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("SchedulingResourceGroup",$param) and $param["SchedulingResourceGroup"] !== null) {
            $this->SchedulingResourceGroup = $param["SchedulingResourceGroup"];
        }

        if (array_key_exists("IntegrationResourceGroup",$param) and $param["IntegrationResourceGroup"] !== null) {
            $this->IntegrationResourceGroup = $param["IntegrationResourceGroup"];
        }
    }
}
