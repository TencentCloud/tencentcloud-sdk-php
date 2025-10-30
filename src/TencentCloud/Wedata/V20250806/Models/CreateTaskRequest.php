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
 * CreateTask请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method CreateTaskBaseAttribute getTaskBaseAttribute() 获取任务基本属性
 * @method void setTaskBaseAttribute(CreateTaskBaseAttribute $TaskBaseAttribute) 设置任务基本属性
 * @method CreateTaskConfiguration getTaskConfiguration() 获取任务配置
 * @method void setTaskConfiguration(CreateTaskConfiguration $TaskConfiguration) 设置任务配置
 * @method CreateTaskSchedulerConfiguration getTaskSchedulerConfiguration() 获取任务调度配置
 * @method void setTaskSchedulerConfiguration(CreateTaskSchedulerConfiguration $TaskSchedulerConfiguration) 设置任务调度配置
 */
class CreateTaskRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var CreateTaskBaseAttribute 任务基本属性
     */
    public $TaskBaseAttribute;

    /**
     * @var CreateTaskConfiguration 任务配置
     */
    public $TaskConfiguration;

    /**
     * @var CreateTaskSchedulerConfiguration 任务调度配置
     */
    public $TaskSchedulerConfiguration;

    /**
     * @param string $ProjectId 项目ID
     * @param CreateTaskBaseAttribute $TaskBaseAttribute 任务基本属性
     * @param CreateTaskConfiguration $TaskConfiguration 任务配置
     * @param CreateTaskSchedulerConfiguration $TaskSchedulerConfiguration 任务调度配置
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

        if (array_key_exists("TaskBaseAttribute",$param) and $param["TaskBaseAttribute"] !== null) {
            $this->TaskBaseAttribute = new CreateTaskBaseAttribute();
            $this->TaskBaseAttribute->deserialize($param["TaskBaseAttribute"]);
        }

        if (array_key_exists("TaskConfiguration",$param) and $param["TaskConfiguration"] !== null) {
            $this->TaskConfiguration = new CreateTaskConfiguration();
            $this->TaskConfiguration->deserialize($param["TaskConfiguration"]);
        }

        if (array_key_exists("TaskSchedulerConfiguration",$param) and $param["TaskSchedulerConfiguration"] !== null) {
            $this->TaskSchedulerConfiguration = new CreateTaskSchedulerConfiguration();
            $this->TaskSchedulerConfiguration->deserialize($param["TaskSchedulerConfiguration"]);
        }
    }
}
