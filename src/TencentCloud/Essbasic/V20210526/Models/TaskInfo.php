<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 复杂文档合成任务的任务信息
 *
 * @method string getTaskId() 获取合成任务Id，可以通过 ChannelGetTaskResultApi 接口获取任务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置合成任务Id，可以通过 ChannelGetTaskResultApi 接口获取任务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskStatus() 获取任务状态：READY - 任务已完成；NOTREADY - 任务未完成；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskStatus(string $TaskStatus) 设置任务状态：READY - 任务已完成；NOTREADY - 任务未完成；
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskInfo extends AbstractModel
{
    /**
     * @var string 合成任务Id，可以通过 ChannelGetTaskResultApi 接口获取任务信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 任务状态：READY - 任务已完成；NOTREADY - 任务未完成；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskStatus;

    /**
     * @param string $TaskId 合成任务Id，可以通过 ChannelGetTaskResultApi 接口获取任务信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskStatus 任务状态：READY - 任务已完成；NOTREADY - 任务未完成；
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }
    }
}
