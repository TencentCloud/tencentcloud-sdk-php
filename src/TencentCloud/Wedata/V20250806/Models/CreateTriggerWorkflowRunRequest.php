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
 * CreateTriggerWorkflowRun请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getWorkflowId() 获取工作流ID
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
 * @method array getAdvancedParams() 获取自定义运行参数，如果为空或者null则使用工作流最新配置
 * @method void setAdvancedParams(array $AdvancedParams) 设置自定义运行参数，如果为空或者null则使用工作流最新配置
 * @method array getTaskIds() 获取本次需要运行指定的任务ID集合，如果为null或为空则运行全部
 * @method void setTaskIds(array $TaskIds) 设置本次需要运行指定的任务ID集合，如果为null或为空则运行全部
 * @method string getSchedulingResourceGroupId() 获取指定的调度资源组id，为空默认原资源组
 * @method void setSchedulingResourceGroupId(string $SchedulingResourceGroupId) 设置指定的调度资源组id，为空默认原资源组
 * @method string getIntegrationResourceGroupId() 获取指定的集成资源组id，为空默认原资源组
 * @method void setIntegrationResourceGroupId(string $IntegrationResourceGroupId) 设置指定的集成资源组id，为空默认原资源组
 */
class CreateTriggerWorkflowRunRequest extends AbstractModel
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
     * @var array 自定义运行参数，如果为空或者null则使用工作流最新配置
     */
    public $AdvancedParams;

    /**
     * @var array 本次需要运行指定的任务ID集合，如果为null或为空则运行全部
     */
    public $TaskIds;

    /**
     * @var string 指定的调度资源组id，为空默认原资源组
     */
    public $SchedulingResourceGroupId;

    /**
     * @var string 指定的集成资源组id，为空默认原资源组
     */
    public $IntegrationResourceGroupId;

    /**
     * @param string $ProjectId 项目ID
     * @param string $WorkflowId 工作流ID
     * @param array $AdvancedParams 自定义运行参数，如果为空或者null则使用工作流最新配置
     * @param array $TaskIds 本次需要运行指定的任务ID集合，如果为null或为空则运行全部
     * @param string $SchedulingResourceGroupId 指定的调度资源组id，为空默认原资源组
     * @param string $IntegrationResourceGroupId 指定的集成资源组id，为空默认原资源组
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

        if (array_key_exists("SchedulingResourceGroupId",$param) and $param["SchedulingResourceGroupId"] !== null) {
            $this->SchedulingResourceGroupId = $param["SchedulingResourceGroupId"];
        }

        if (array_key_exists("IntegrationResourceGroupId",$param) and $param["IntegrationResourceGroupId"] !== null) {
            $this->IntegrationResourceGroupId = $param["IntegrationResourceGroupId"];
        }
    }
}
