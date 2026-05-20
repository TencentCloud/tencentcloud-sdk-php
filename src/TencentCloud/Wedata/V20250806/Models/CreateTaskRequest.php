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
 * @method string getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
 * @method CreateTaskBaseAttribute getTaskBaseAttribute() 获取<p>任务基本属性</p>
 * @method void setTaskBaseAttribute(CreateTaskBaseAttribute $TaskBaseAttribute) 设置<p>任务基本属性</p>
 * @method CreateTaskConfiguration getTaskConfiguration() 获取<p>任务配置</p>
 * @method void setTaskConfiguration(CreateTaskConfiguration $TaskConfiguration) 设置<p>任务配置</p>
 * @method CreateTaskSchedulerConfiguration getTaskSchedulerConfiguration() 获取<p>任务调度配置</p>
 * @method void setTaskSchedulerConfiguration(CreateTaskSchedulerConfiguration $TaskSchedulerConfiguration) 设置<p>任务调度配置</p>
 */
class CreateTaskRequest extends AbstractModel
{
    /**
     * @var string <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var CreateTaskBaseAttribute <p>任务基本属性</p>
     */
    public $TaskBaseAttribute;

    /**
     * @var CreateTaskConfiguration <p>任务配置</p>
     */
    public $TaskConfiguration;

    /**
     * @var CreateTaskSchedulerConfiguration <p>任务调度配置</p>
     */
    public $TaskSchedulerConfiguration;

    /**
     * @param string $ProjectId <p>项目ID</p>
     * @param CreateTaskBaseAttribute $TaskBaseAttribute <p>任务基本属性</p>
     * @param CreateTaskConfiguration $TaskConfiguration <p>任务配置</p>
     * @param CreateTaskSchedulerConfiguration $TaskSchedulerConfiguration <p>任务调度配置</p>
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
