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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务执行结果
 *
 * @method string getTaskId() 获取任务 ID
 * @method void setTaskId(string $TaskId) 设置任务 ID
 * @method boolean getSuccess() 获取是否成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccess(boolean $Success) 设置是否成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMessage() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(string $ErrorMessage) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskResult extends AbstractModel
{
    /**
     * @var string 任务 ID
     */
    public $TaskId;

    /**
     * @var boolean 是否成功
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Success;

    /**
     * @var string 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @param string $TaskId 任务 ID
     * @param boolean $Success 是否成功
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMessage 错误信息
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

        if (array_key_exists("Success",$param) and $param["Success"] !== null) {
            $this->Success = $param["Success"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }
    }
}
