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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 步骤信息
 *
 * @method integer getStepNo() 获取<p>步骤序列</p>
 * @method void setStepNo(integer $StepNo) 设置<p>步骤序列</p>
 * @method string getStepName() 获取<p>步骤展现名称</p>
 * @method void setStepName(string $StepName) 设置<p>步骤展现名称</p>
 * @method string getStepId() 获取<p>步骤英文标识</p>
 * @method void setStepId(string $StepId) 设置<p>步骤英文标识</p>
 * @method string getStatus() 获取<p>步骤状态:success(成功)、failed(失败)、running(执行中)、notStarted(未执行)、默认为notStarted</p>
 * @method void setStatus(string $Status) 设置<p>步骤状态:success(成功)、failed(失败)、running(执行中)、notStarted(未执行)、默认为notStarted</p>
 * @method string getStartTime() 获取<p>当前步骤开始的时间，格式为&quot;yyyy-mm-dd hh:mm:ss&quot;，该字段不存在或者为空是无意义 注意：此字段可能返回 null，表示取不到有效值。</p>
 * @method void setStartTime(string $StartTime) 设置<p>当前步骤开始的时间，格式为&quot;yyyy-mm-dd hh:mm:ss&quot;，该字段不存在或者为空是无意义 注意：此字段可能返回 null，表示取不到有效值。</p>
 * @method string getFinishTime() 获取<p>完成时间</p>
 * @method void setFinishTime(string $FinishTime) 设置<p>完成时间</p>
 * @method string getStepMessage() 获取<p>步骤错误信息</p>
 * @method void setStepMessage(string $StepMessage) 设置<p>步骤错误信息</p>
 * @method integer getPercent() 获取<p>执行进度</p>
 * @method void setPercent(integer $Percent) 设置<p>执行进度</p>
 * @method array getErrors() 获取<p>错误信息</p>
 * @method void setErrors(array $Errors) 设置<p>错误信息</p>
 * @method array getWarnings() 获取<p>告警提示</p>
 * @method void setWarnings(array $Warnings) 设置<p>告警提示</p>
 */
class StepDetailInfo extends AbstractModel
{
    /**
     * @var integer <p>步骤序列</p>
     */
    public $StepNo;

    /**
     * @var string <p>步骤展现名称</p>
     */
    public $StepName;

    /**
     * @var string <p>步骤英文标识</p>
     */
    public $StepId;

    /**
     * @var string <p>步骤状态:success(成功)、failed(失败)、running(执行中)、notStarted(未执行)、默认为notStarted</p>
     */
    public $Status;

    /**
     * @var string <p>当前步骤开始的时间，格式为&quot;yyyy-mm-dd hh:mm:ss&quot;，该字段不存在或者为空是无意义 注意：此字段可能返回 null，表示取不到有效值。</p>
     */
    public $StartTime;

    /**
     * @var string <p>完成时间</p>
     */
    public $FinishTime;

    /**
     * @var string <p>步骤错误信息</p>
     */
    public $StepMessage;

    /**
     * @var integer <p>执行进度</p>
     */
    public $Percent;

    /**
     * @var array <p>错误信息</p>
     */
    public $Errors;

    /**
     * @var array <p>告警提示</p>
     */
    public $Warnings;

    /**
     * @param integer $StepNo <p>步骤序列</p>
     * @param string $StepName <p>步骤展现名称</p>
     * @param string $StepId <p>步骤英文标识</p>
     * @param string $Status <p>步骤状态:success(成功)、failed(失败)、running(执行中)、notStarted(未执行)、默认为notStarted</p>
     * @param string $StartTime <p>当前步骤开始的时间，格式为&quot;yyyy-mm-dd hh:mm:ss&quot;，该字段不存在或者为空是无意义 注意：此字段可能返回 null，表示取不到有效值。</p>
     * @param string $FinishTime <p>完成时间</p>
     * @param string $StepMessage <p>步骤错误信息</p>
     * @param integer $Percent <p>执行进度</p>
     * @param array $Errors <p>错误信息</p>
     * @param array $Warnings <p>告警提示</p>
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

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("StepMessage",$param) and $param["StepMessage"] !== null) {
            $this->StepMessage = $param["StepMessage"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("Errors",$param) and $param["Errors"] !== null) {
            $this->Errors = [];
            foreach ($param["Errors"] as $key => $value){
                $obj = new ProcessStepTip();
                $obj->deserialize($value);
                array_push($this->Errors, $obj);
            }
        }

        if (array_key_exists("Warnings",$param) and $param["Warnings"] !== null) {
            $this->Warnings = [];
            foreach ($param["Warnings"] as $key => $value){
                $obj = new ProcessStepTip();
                $obj->deserialize($value);
                array_push($this->Warnings, $obj);
            }
        }
    }
}
