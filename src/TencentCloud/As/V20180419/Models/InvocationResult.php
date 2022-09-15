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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 执行命令结果。
 *
 * @method string getInstanceId() 获取实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInvocationId() 获取执行活动ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvocationId(string $InvocationId) 设置执行活动ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInvocationTaskId() 获取执行任务ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvocationTaskId(string $InvocationTaskId) 设置执行任务ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCommandId() 获取命令ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCommandId(string $CommandId) 设置命令ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskStatus() 获取执行任务状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskStatus(string $TaskStatus) 设置执行任务状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMessage() 获取执行异常信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(string $ErrorMessage) 设置执行异常信息。
注意：此字段可能返回 null，表示取不到有效值。
 */
class InvocationResult extends AbstractModel
{
    /**
     * @var string 实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 执行活动ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvocationId;

    /**
     * @var string 执行任务ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvocationTaskId;

    /**
     * @var string 命令ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CommandId;

    /**
     * @var string 执行任务状态。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskStatus;

    /**
     * @var string 执行异常信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @param string $InstanceId 实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InvocationId 执行活动ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InvocationTaskId 执行任务ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CommandId 命令ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskStatus 执行任务状态。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMessage 执行异常信息。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InvocationId",$param) and $param["InvocationId"] !== null) {
            $this->InvocationId = $param["InvocationId"];
        }

        if (array_key_exists("InvocationTaskId",$param) and $param["InvocationTaskId"] !== null) {
            $this->InvocationTaskId = $param["InvocationTaskId"];
        }

        if (array_key_exists("CommandId",$param) and $param["CommandId"] !== null) {
            $this->CommandId = $param["CommandId"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }
    }
}
