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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMySQLTaskStatus请求参数结构体
 *
 * @method string getEnvId() 获取云开发环境ID
 * @method void setEnvId(string $EnvId) 设置云开发环境ID
 * @method string getTaskId() 获取任务Id
 * @method void setTaskId(string $TaskId) 设置任务Id
 * @method string getTaskName() 获取任务名
 * @method void setTaskName(string $TaskName) 设置任务名
 */
class DescribeMySQLTaskStatusRequest extends AbstractModel
{
    /**
     * @var string 云开发环境ID
     */
    public $EnvId;

    /**
     * @var string 任务Id
     */
    public $TaskId;

    /**
     * @var string 任务名
     */
    public $TaskName;

    /**
     * @param string $EnvId 云开发环境ID
     * @param string $TaskId 任务Id
     * @param string $TaskName 任务名
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }
    }
}
