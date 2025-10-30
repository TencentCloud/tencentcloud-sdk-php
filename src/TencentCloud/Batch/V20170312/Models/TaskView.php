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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务视图信息
 *
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getTaskState() 获取任务状态:
- PENDING：等待中；
- RUNNABLE：可运行；
- STARTING：启动中；
- RUNNING：运行中；
- SUCCEED：成功；
- FAILED：失败；
- FAILED_INTERRUPTED：失败后保留实例。
 * @method void setTaskState(string $TaskState) 设置任务状态:
- PENDING：等待中；
- RUNNABLE：可运行；
- STARTING：启动中；
- RUNNING：运行中；
- SUCCEED：成功；
- FAILED：失败；
- FAILED_INTERRUPTED：失败后保留实例。
 * @method string getCreateTime() 获取开始时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。
 * @method void setCreateTime(string $CreateTime) 设置开始时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。
 * @method string getEndTime() 获取结束时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置结束时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskView extends AbstractModel
{
    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 任务状态:
- PENDING：等待中；
- RUNNABLE：可运行；
- STARTING：启动中；
- RUNNING：运行中；
- SUCCEED：成功；
- FAILED：失败；
- FAILED_INTERRUPTED：失败后保留实例。
     */
    public $TaskState;

    /**
     * @var string 开始时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。
     */
    public $CreateTime;

    /**
     * @var string 结束时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @param string $TaskName 任务名称
     * @param string $TaskState 任务状态:
- PENDING：等待中；
- RUNNABLE：可运行；
- STARTING：启动中；
- RUNNING：运行中；
- SUCCEED：成功；
- FAILED：失败；
- FAILED_INTERRUPTED：失败后保留实例。
     * @param string $CreateTime 开始时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。
     * @param string $EndTime 结束时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskState",$param) and $param["TaskState"] !== null) {
            $this->TaskState = $param["TaskState"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
