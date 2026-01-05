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
 * CreateTriggerTask请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method CreateTriggerTaskBaseAttribute getTriggerTaskBaseAttribute() 获取任务基本属性
 * @method void setTriggerTaskBaseAttribute(CreateTriggerTaskBaseAttribute $TriggerTaskBaseAttribute) 设置任务基本属性
 * @method CreateTriggerTaskConfiguration getTriggerTaskConfiguration() 获取任务配置
 * @method void setTriggerTaskConfiguration(CreateTriggerTaskConfiguration $TriggerTaskConfiguration) 设置任务配置
 * @method CreateTriggerTaskSchedulerConfiguration getTriggerTaskSchedulerConfiguration() 获取任务调度配置
 * @method void setTriggerTaskSchedulerConfiguration(CreateTriggerTaskSchedulerConfiguration $TriggerTaskSchedulerConfiguration) 设置任务调度配置
 */
class CreateTriggerTaskRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var CreateTriggerTaskBaseAttribute 任务基本属性
     */
    public $TriggerTaskBaseAttribute;

    /**
     * @var CreateTriggerTaskConfiguration 任务配置
     */
    public $TriggerTaskConfiguration;

    /**
     * @var CreateTriggerTaskSchedulerConfiguration 任务调度配置
     */
    public $TriggerTaskSchedulerConfiguration;

    /**
     * @param string $ProjectId 项目ID
     * @param CreateTriggerTaskBaseAttribute $TriggerTaskBaseAttribute 任务基本属性
     * @param CreateTriggerTaskConfiguration $TriggerTaskConfiguration 任务配置
     * @param CreateTriggerTaskSchedulerConfiguration $TriggerTaskSchedulerConfiguration 任务调度配置
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

        if (array_key_exists("TriggerTaskBaseAttribute",$param) and $param["TriggerTaskBaseAttribute"] !== null) {
            $this->TriggerTaskBaseAttribute = new CreateTriggerTaskBaseAttribute();
            $this->TriggerTaskBaseAttribute->deserialize($param["TriggerTaskBaseAttribute"]);
        }

        if (array_key_exists("TriggerTaskConfiguration",$param) and $param["TriggerTaskConfiguration"] !== null) {
            $this->TriggerTaskConfiguration = new CreateTriggerTaskConfiguration();
            $this->TriggerTaskConfiguration->deserialize($param["TriggerTaskConfiguration"]);
        }

        if (array_key_exists("TriggerTaskSchedulerConfiguration",$param) and $param["TriggerTaskSchedulerConfiguration"] !== null) {
            $this->TriggerTaskSchedulerConfiguration = new CreateTriggerTaskSchedulerConfiguration();
            $this->TriggerTaskSchedulerConfiguration->deserialize($param["TriggerTaskSchedulerConfiguration"]);
        }
    }
}
