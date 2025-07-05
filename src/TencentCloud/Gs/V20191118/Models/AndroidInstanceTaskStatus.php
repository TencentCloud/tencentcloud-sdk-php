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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安卓实例任务状态信息
 *
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getStatus() 获取任务状态：SUCCESS，FAILED，PROCESSING，PENDING,CANCELED
 * @method void setStatus(string $Status) 设置任务状态：SUCCESS，FAILED，PROCESSING，PENDING,CANCELED
 * @method string getAndroidInstanceId() 获取实例ID
 * @method void setAndroidInstanceId(string $AndroidInstanceId) 设置实例ID
 * @method string getTaskResult() 获取任务执行结果描述，针对某些任务，可以是可解析的 json
 * @method void setTaskResult(string $TaskResult) 设置任务执行结果描述，针对某些任务，可以是可解析的 json
 * @method string getTaskType() 获取任务类型
 * @method void setTaskType(string $TaskType) 设置任务类型
 * @method string getCreateTime() 获取任务创建时间
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间
 * @method string getCompleteTime() 获取任务完成时间
 * @method void setCompleteTime(string $CompleteTime) 设置任务完成时间
 */
class AndroidInstanceTaskStatus extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 任务状态：SUCCESS，FAILED，PROCESSING，PENDING,CANCELED
     */
    public $Status;

    /**
     * @var string 实例ID
     */
    public $AndroidInstanceId;

    /**
     * @var string 任务执行结果描述，针对某些任务，可以是可解析的 json
     */
    public $TaskResult;

    /**
     * @var string 任务类型
     */
    public $TaskType;

    /**
     * @var string 任务创建时间
     */
    public $CreateTime;

    /**
     * @var string 任务完成时间
     */
    public $CompleteTime;

    /**
     * @param string $TaskId 任务ID
     * @param string $Status 任务状态：SUCCESS，FAILED，PROCESSING，PENDING,CANCELED
     * @param string $AndroidInstanceId 实例ID
     * @param string $TaskResult 任务执行结果描述，针对某些任务，可以是可解析的 json
     * @param string $TaskType 任务类型
     * @param string $CreateTime 任务创建时间
     * @param string $CompleteTime 任务完成时间
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AndroidInstanceId",$param) and $param["AndroidInstanceId"] !== null) {
            $this->AndroidInstanceId = $param["AndroidInstanceId"];
        }

        if (array_key_exists("TaskResult",$param) and $param["TaskResult"] !== null) {
            $this->TaskResult = $param["TaskResult"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CompleteTime",$param) and $param["CompleteTime"] !== null) {
            $this->CompleteTime = $param["CompleteTime"];
        }
    }
}
