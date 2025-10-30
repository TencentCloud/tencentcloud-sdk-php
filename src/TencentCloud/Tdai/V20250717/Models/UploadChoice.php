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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流式输出消息数据体
 *
 * @method integer getIndex() 获取消息索引
 * @method void setIndex(integer $Index) 设置消息索引
 * @method integer getStepNo() 获取当前消息步骤
 * @method void setStepNo(integer $StepNo) 设置当前消息步骤
 * @method string getCurrentStep() 获取当前步骤
 * @method void setCurrentStep(string $CurrentStep) 设置当前步骤
 * @method UploadDelta getDelta() 获取增量信息
 * @method void setDelta(UploadDelta $Delta) 设置增量信息
 * @method string getFinishReason() 获取结束原因
 * @method void setFinishReason(string $FinishReason) 设置结束原因
 * @method string getErrorMessage() 获取错误信息，FinishReason为error时有效
 * @method void setErrorMessage(string $ErrorMessage) 设置错误信息，FinishReason为error时有效
 */
class UploadChoice extends AbstractModel
{
    /**
     * @var integer 消息索引
     */
    public $Index;

    /**
     * @var integer 当前消息步骤
     */
    public $StepNo;

    /**
     * @var string 当前步骤
     */
    public $CurrentStep;

    /**
     * @var UploadDelta 增量信息
     */
    public $Delta;

    /**
     * @var string 结束原因
     */
    public $FinishReason;

    /**
     * @var string 错误信息，FinishReason为error时有效
     */
    public $ErrorMessage;

    /**
     * @param integer $Index 消息索引
     * @param integer $StepNo 当前消息步骤
     * @param string $CurrentStep 当前步骤
     * @param UploadDelta $Delta 增量信息
     * @param string $FinishReason 结束原因
     * @param string $ErrorMessage 错误信息，FinishReason为error时有效
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("StepNo",$param) and $param["StepNo"] !== null) {
            $this->StepNo = $param["StepNo"];
        }

        if (array_key_exists("CurrentStep",$param) and $param["CurrentStep"] !== null) {
            $this->CurrentStep = $param["CurrentStep"];
        }

        if (array_key_exists("Delta",$param) and $param["Delta"] !== null) {
            $this->Delta = new UploadDelta();
            $this->Delta->deserialize($param["Delta"]);
        }

        if (array_key_exists("FinishReason",$param) and $param["FinishReason"] !== null) {
            $this->FinishReason = $param["FinishReason"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }
    }
}
