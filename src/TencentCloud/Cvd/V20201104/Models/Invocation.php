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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 脚本执行情况。
 *
 * @method string getInvokeId() 获取<p>脚本执行ID。</p>
 * @method void setInvokeId(string $InvokeId) 设置<p>脚本执行ID。</p>
 * @method string getStatus() 获取<p>运行状态。<li> Running：正在执行</li> <li>Finished：已经完成</li> <li>Failed：失败</li>  <li> Stopped：已停止</li></p>
 * @method void setStatus(string $Status) 设置<p>运行状态。<li> Running：正在执行</li> <li>Finished：已经完成</li> <li>Failed：失败</li>  <li> Stopped：已停止</li></p>
 * @method InvocationOutput getOutput() 获取<p>任务输出。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutput(InvocationOutput $Output) 设置<p>任务输出。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorCode() 获取<p>任务失败时的错误码。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCode(string $ErrorCode) 设置<p>任务失败时的错误码。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorInfo() 获取<p>任务失败时的错误信息描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorInfo(string $ErrorInfo) 设置<p>任务失败时的错误信息描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExitCode() 获取<p>任务退出状态码</p>
 * @method void setExitCode(integer $ExitCode) 设置<p>任务退出状态码</p>
 */
class Invocation extends AbstractModel
{
    /**
     * @var string <p>脚本执行ID。</p>
     */
    public $InvokeId;

    /**
     * @var string <p>运行状态。<li> Running：正在执行</li> <li>Finished：已经完成</li> <li>Failed：失败</li>  <li> Stopped：已停止</li></p>
     */
    public $Status;

    /**
     * @var InvocationOutput <p>任务输出。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Output;

    /**
     * @var string <p>任务失败时的错误码。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCode;

    /**
     * @var string <p>任务失败时的错误信息描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorInfo;

    /**
     * @var integer <p>任务退出状态码</p>
     */
    public $ExitCode;

    /**
     * @param string $InvokeId <p>脚本执行ID。</p>
     * @param string $Status <p>运行状态。<li> Running：正在执行</li> <li>Finished：已经完成</li> <li>Failed：失败</li>  <li> Stopped：已停止</li></p>
     * @param InvocationOutput $Output <p>任务输出。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorCode <p>任务失败时的错误码。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorInfo <p>任务失败时的错误信息描述。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExitCode <p>任务退出状态码</p>
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
        if (array_key_exists("InvokeId",$param) and $param["InvokeId"] !== null) {
            $this->InvokeId = $param["InvokeId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new InvocationOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorInfo",$param) and $param["ErrorInfo"] !== null) {
            $this->ErrorInfo = $param["ErrorInfo"];
        }

        if (array_key_exists("ExitCode",$param) and $param["ExitCode"] !== null) {
            $this->ExitCode = $param["ExitCode"];
        }
    }
}
