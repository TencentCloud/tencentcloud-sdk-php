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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安装应用，任务详情
 *
 * @method integer getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStep() 获取当前步骤
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStep(integer $Step) 设置当前步骤
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getId() 获取任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalStep() 获取任务总共步骤数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalStep(integer $TotalStep) 设置任务总共步骤数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStepDesc() 获取当前步骤详情
 * @method void setStepDesc(string $StepDesc) 设置当前步骤详情
 * @method string getErrMsg() 获取错误信息
 * @method void setErrMsg(string $ErrMsg) 设置错误信息
 */
class AppJobInfo extends AbstractModel
{
    /**
     * @var integer 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 当前步骤
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Step;

    /**
     * @var integer 任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer 任务总共步骤数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalStep;

    /**
     * @var string 当前步骤详情
     */
    public $StepDesc;

    /**
     * @var string 错误信息
     */
    public $ErrMsg;

    /**
     * @param integer $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Step 当前步骤
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Id 任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalStep 任务总共步骤数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StepDesc 当前步骤详情
     * @param string $ErrMsg 错误信息
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Step",$param) and $param["Step"] !== null) {
            $this->Step = $param["Step"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TotalStep",$param) and $param["TotalStep"] !== null) {
            $this->TotalStep = $param["TotalStep"];
        }

        if (array_key_exists("StepDesc",$param) and $param["StepDesc"] !== null) {
            $this->StepDesc = $param["StepDesc"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}
