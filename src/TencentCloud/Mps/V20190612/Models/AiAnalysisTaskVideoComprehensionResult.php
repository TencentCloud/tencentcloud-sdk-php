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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频（音频）理解结果
 *
 * @method string getStatus() 获取任务状态，有 `PROCESSING`，`SUCCESS` 和 `FAIL` 三种。
 * @method void setStatus(string $Status) 设置任务状态，有 `PROCESSING`，`SUCCESS` 和 `FAIL` 三种。
 * @method integer getErrCode() 获取错误码，0：成功，其他值：失败
 * @method void setErrCode(integer $ErrCode) 设置错误码，0：成功，其他值：失败
 * @method string getMessage() 获取错误信息
 * @method void setMessage(string $Message) 设置错误信息
 * @method AiAnalysisTaskVideoComprehensionInput getInput() 获取视频（音频）理解输入
 * @method void setInput(AiAnalysisTaskVideoComprehensionInput $Input) 设置视频（音频）理解输入
 * @method AiAnalysisTaskVideoComprehensionOutput getOutput() 获取视频（音频）理解输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutput(AiAnalysisTaskVideoComprehensionOutput $Output) 设置视频（音频）理解输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrCodeExt() 获取错误码，空字符串表示成功，其他值表示失败，取值请参考 媒体处理类错误码 列表
 * @method void setErrCodeExt(string $ErrCodeExt) 设置错误码，空字符串表示成功，其他值表示失败，取值请参考 媒体处理类错误码 列表
 * @method integer getProgress() 获取任务进度
 * @method void setProgress(integer $Progress) 设置任务进度
 * @method string getBeginProcessTime() 获取任务开始执行的时间，采用 ISO 日期格式。
 * @method void setBeginProcessTime(string $BeginProcessTime) 设置任务开始执行的时间，采用 ISO 日期格式。
 * @method string getFinishTime() 获取任务执行完毕时间，采用 ISO 日期格式。
 * @method void setFinishTime(string $FinishTime) 设置任务执行完毕时间，采用 ISO 日期格式。
 */
class AiAnalysisTaskVideoComprehensionResult extends AbstractModel
{
    /**
     * @var string 任务状态，有 `PROCESSING`，`SUCCESS` 和 `FAIL` 三种。
     */
    public $Status;

    /**
     * @var integer 错误码，0：成功，其他值：失败
     */
    public $ErrCode;

    /**
     * @var string 错误信息
     */
    public $Message;

    /**
     * @var AiAnalysisTaskVideoComprehensionInput 视频（音频）理解输入
     */
    public $Input;

    /**
     * @var AiAnalysisTaskVideoComprehensionOutput 视频（音频）理解输出
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Output;

    /**
     * @var string 错误码，空字符串表示成功，其他值表示失败，取值请参考 媒体处理类错误码 列表
     */
    public $ErrCodeExt;

    /**
     * @var integer 任务进度
     */
    public $Progress;

    /**
     * @var string 任务开始执行的时间，采用 ISO 日期格式。
     */
    public $BeginProcessTime;

    /**
     * @var string 任务执行完毕时间，采用 ISO 日期格式。
     */
    public $FinishTime;

    /**
     * @param string $Status 任务状态，有 `PROCESSING`，`SUCCESS` 和 `FAIL` 三种。
     * @param integer $ErrCode 错误码，0：成功，其他值：失败
     * @param string $Message 错误信息
     * @param AiAnalysisTaskVideoComprehensionInput $Input 视频（音频）理解输入
     * @param AiAnalysisTaskVideoComprehensionOutput $Output 视频（音频）理解输出
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrCodeExt 错误码，空字符串表示成功，其他值表示失败，取值请参考 媒体处理类错误码 列表
     * @param integer $Progress 任务进度
     * @param string $BeginProcessTime 任务开始执行的时间，采用 ISO 日期格式。
     * @param string $FinishTime 任务执行完毕时间，采用 ISO 日期格式。
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

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new AiAnalysisTaskVideoComprehensionInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new AiAnalysisTaskVideoComprehensionOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("ErrCodeExt",$param) and $param["ErrCodeExt"] !== null) {
            $this->ErrCodeExt = $param["ErrCodeExt"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("BeginProcessTime",$param) and $param["BeginProcessTime"] !== null) {
            $this->BeginProcessTime = $param["BeginProcessTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }
    }
}
