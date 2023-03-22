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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务作业详情。
 *
 * @method string getRunType() 获取任务类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunType(string $RunType) 设置任务类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunId() 获取任务ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunId(string $RunId) 设置任务ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentId() 获取父层ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentId(string $ParentId) 设置父层ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobId() 获取作业ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(string $JobId) 设置作业ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCallName() 获取作业名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCallName(string $CallName) 设置作业名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScatterIndex() 获取Scatter索引。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScatterIndex(string $ScatterIndex) 设置Scatter索引。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInput() 获取输入。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInput(string $Input) 设置输入。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutput() 获取输出。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutput(string $Output) 设置输出。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMessage() 获取错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(string $ErrorMessage) 设置错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubmitTime() 获取提交时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmitTime(string $SubmitTime) 设置提交时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取结束时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置结束时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCommand() 获取命令行。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCommand(string $Command) 设置命令行。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuntime() 获取运行时。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuntime(string $Runtime) 设置运行时。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPreprocess() 获取预处理。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPreprocess(boolean $Preprocess) 设置预处理。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPostProcess() 获取后处理。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostProcess(boolean $PostProcess) 设置后处理。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCallCached() 获取Cache命中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCallCached(boolean $CallCached) 设置Cache命中
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStdout() 获取标准输出。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStdout(string $Stdout) 设置标准输出。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStderr() 获取错误输出。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStderr(string $Stderr) 设置错误输出。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RunMetadata extends AbstractModel
{
    /**
     * @var string 任务类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunType;

    /**
     * @var string 任务ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunId;

    /**
     * @var string 父层ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentId;

    /**
     * @var string 作业ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @var string 作业名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CallName;

    /**
     * @var string Scatter索引。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScatterIndex;

    /**
     * @var string 输入。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Input;

    /**
     * @var string 输出。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Output;

    /**
     * @var string 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @var string 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 提交时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubmitTime;

    /**
     * @var string 结束时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 命令行。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Command;

    /**
     * @var string 运行时。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Runtime;

    /**
     * @var boolean 预处理。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Preprocess;

    /**
     * @var boolean 后处理。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostProcess;

    /**
     * @var boolean Cache命中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CallCached;

    /**
     * @var string 标准输出。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Stdout;

    /**
     * @var string 错误输出。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Stderr;

    /**
     * @param string $RunType 任务类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunId 任务ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentId 父层ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobId 作业ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CallName 作业名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScatterIndex Scatter索引。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Input 输入。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Output 输出。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMessage 错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubmitTime 提交时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 结束时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Command 命令行。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Runtime 运行时。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Preprocess 预处理。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $PostProcess 后处理。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CallCached Cache命中
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Stdout 标准输出。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Stderr 错误输出。
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
        if (array_key_exists("RunType",$param) and $param["RunType"] !== null) {
            $this->RunType = $param["RunType"];
        }

        if (array_key_exists("RunId",$param) and $param["RunId"] !== null) {
            $this->RunId = $param["RunId"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("CallName",$param) and $param["CallName"] !== null) {
            $this->CallName = $param["CallName"];
        }

        if (array_key_exists("ScatterIndex",$param) and $param["ScatterIndex"] !== null) {
            $this->ScatterIndex = $param["ScatterIndex"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("SubmitTime",$param) and $param["SubmitTime"] !== null) {
            $this->SubmitTime = $param["SubmitTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("Preprocess",$param) and $param["Preprocess"] !== null) {
            $this->Preprocess = $param["Preprocess"];
        }

        if (array_key_exists("PostProcess",$param) and $param["PostProcess"] !== null) {
            $this->PostProcess = $param["PostProcess"];
        }

        if (array_key_exists("CallCached",$param) and $param["CallCached"] !== null) {
            $this->CallCached = $param["CallCached"];
        }

        if (array_key_exists("Stdout",$param) and $param["Stdout"] !== null) {
            $this->Stdout = $param["Stdout"];
        }

        if (array_key_exists("Stderr",$param) and $param["Stderr"] !== null) {
            $this->Stderr = $param["Stderr"];
        }
    }
}
