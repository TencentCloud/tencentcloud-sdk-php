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
 * 单个步骤的详细信息
 *
 * @method integer getStepNo() 获取步骤编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStepNo(integer $StepNo) 设置步骤编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStepName() 获取步骤名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStepName(string $StepName) 设置步骤名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStepId() 获取步骤标号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStepId(string $StepId) 设置步骤标号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取当前状态，是否完成
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置当前状态，是否完成
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取步骤开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置步骤开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getErrors() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrors(array $Errors) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWarnings() 获取警告信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarnings(array $Warnings) 设置警告信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProgress() 获取当前步骤进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgress(integer $Progress) 设置当前步骤进度
注意：此字段可能返回 null，表示取不到有效值。
 */
class StepInfo extends AbstractModel
{
    /**
     * @var integer 步骤编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StepNo;

    /**
     * @var string 步骤名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StepName;

    /**
     * @var string 步骤标号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StepId;

    /**
     * @var string 当前状态，是否完成
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 步骤开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var array 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Errors;

    /**
     * @var array 警告信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Warnings;

    /**
     * @var integer 当前步骤进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Progress;

    /**
     * @param integer $StepNo 步骤编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StepName 步骤名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StepId 步骤标号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 当前状态，是否完成
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 步骤开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Errors 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Warnings 警告信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Progress 当前步骤进度
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
        if (array_key_exists("StepNo",$param) and $param["StepNo"] !== null) {
            $this->StepNo = $param["StepNo"];
        }

        if (array_key_exists("StepName",$param) and $param["StepName"] !== null) {
            $this->StepName = $param["StepName"];
        }

        if (array_key_exists("StepId",$param) and $param["StepId"] !== null) {
            $this->StepId = $param["StepId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Errors",$param) and $param["Errors"] !== null) {
            $this->Errors = [];
            foreach ($param["Errors"] as $key => $value){
                $obj = new StepTip();
                $obj->deserialize($value);
                array_push($this->Errors, $obj);
            }
        }

        if (array_key_exists("Warnings",$param) and $param["Warnings"] !== null) {
            $this->Warnings = [];
            foreach ($param["Warnings"] as $key => $value){
                $obj = new StepTip();
                $obj->deserialize($value);
                array_push($this->Warnings, $obj);
            }
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }
    }
}
