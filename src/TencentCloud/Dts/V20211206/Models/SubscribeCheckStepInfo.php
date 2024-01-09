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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 订阅校验任务的各步骤信息。
 *
 * @method string getStepName() 获取步骤名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStepName(string $StepName) 设置步骤名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStepId() 获取步骤Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStepId(string $StepId) 设置步骤Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStepNo() 获取步骤编号，从 1 开始
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStepNo(integer $StepNo) 设置步骤编号，从 1 开始
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取当前步骤状态，可能值为 notStarted,running,finished,failed
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置当前步骤状态，可能值为 notStarted,running,finished,failed
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPercent() 获取当前步骤进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPercent(integer $Percent) 设置当前步骤进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getErrors() 获取错误提示
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrors(array $Errors) 设置错误提示
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWarnings() 获取告警提示
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarnings(array $Warnings) 设置告警提示
注意：此字段可能返回 null，表示取不到有效值。
 */
class SubscribeCheckStepInfo extends AbstractModel
{
    /**
     * @var string 步骤名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StepName;

    /**
     * @var string 步骤Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StepId;

    /**
     * @var integer 步骤编号，从 1 开始
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StepNo;

    /**
     * @var string 当前步骤状态，可能值为 notStarted,running,finished,failed
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 当前步骤进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Percent;

    /**
     * @var array 错误提示
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Errors;

    /**
     * @var array 告警提示
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Warnings;

    /**
     * @param string $StepName 步骤名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StepId 步骤Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StepNo 步骤编号，从 1 开始
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 当前步骤状态，可能值为 notStarted,running,finished,failed
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Percent 当前步骤进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Errors 错误提示
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Warnings 告警提示
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
        if (array_key_exists("StepName",$param) and $param["StepName"] !== null) {
            $this->StepName = $param["StepName"];
        }

        if (array_key_exists("StepId",$param) and $param["StepId"] !== null) {
            $this->StepId = $param["StepId"];
        }

        if (array_key_exists("StepNo",$param) and $param["StepNo"] !== null) {
            $this->StepNo = $param["StepNo"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("Errors",$param) and $param["Errors"] !== null) {
            $this->Errors = [];
            foreach ($param["Errors"] as $key => $value){
                $obj = new SubscribeCheckStepTip();
                $obj->deserialize($value);
                array_push($this->Errors, $obj);
            }
        }

        if (array_key_exists("Warnings",$param) and $param["Warnings"] !== null) {
            $this->Warnings = [];
            foreach ($param["Warnings"] as $key => $value){
                $obj = new SubscribeCheckStepTip();
                $obj->deserialize($value);
                array_push($this->Warnings, $obj);
            }
        }
    }
}
