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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Content
 *
 * @method string getTaskId() 获取任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDiagnose() 获取诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiagnose(string $Diagnose) 设置诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReason() 获取理由
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReason(string $Reason) 设置理由
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperation() 获取操作
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperation(string $Operation) 设置操作
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置链接
注意：此字段可能返回 null，表示取不到有效值。
 */
class Content extends AbstractModel
{
    /**
     * @var string 任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string 诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Diagnose;

    /**
     * @var string 理由
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reason;

    /**
     * @var string 操作
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operation;

    /**
     * @var string 链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @param string $TaskId 任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Diagnose 诊断
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Reason 理由
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Operation 操作
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 链接
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("Diagnose",$param) and $param["Diagnose"] !== null) {
            $this->Diagnose = $param["Diagnose"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
