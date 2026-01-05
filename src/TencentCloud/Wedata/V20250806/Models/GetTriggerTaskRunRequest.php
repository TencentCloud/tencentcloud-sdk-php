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
 * GetTriggerTaskRun请求参数结构体
 *
 * @method string getProjectId() 获取工作空间 ID
 * @method void setProjectId(string $ProjectId) 设置工作空间 ID
 * @method string getTaskExecutionId() 获取任务运行 ID
 * @method void setTaskExecutionId(string $TaskExecutionId) 设置任务运行 ID
 */
class GetTriggerTaskRunRequest extends AbstractModel
{
    /**
     * @var string 工作空间 ID
     */
    public $ProjectId;

    /**
     * @var string 任务运行 ID
     */
    public $TaskExecutionId;

    /**
     * @param string $ProjectId 工作空间 ID
     * @param string $TaskExecutionId 任务运行 ID
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

        if (array_key_exists("TaskExecutionId",$param) and $param["TaskExecutionId"] !== null) {
            $this->TaskExecutionId = $param["TaskExecutionId"];
        }
    }
}
