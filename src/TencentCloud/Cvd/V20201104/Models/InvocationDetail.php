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
 * 实例执行脚本任务结果详情
 *
 * @method string getInstanceId() 获取实例 id
 * @method void setInstanceId(string $InstanceId) 设置实例 id
 * @method string getInstanceName() 获取实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取实例所在区域，目前支持的区域有：ap-beijing、ap-shanghai、ap-guangzhou、ap-shanghai-adc
 * @method void setRegion(string $Region) 设置实例所在区域，目前支持的区域有：ap-beijing、ap-shanghai、ap-guangzhou、ap-shanghai-adc
 * @method string getStatus() 获取脚本任务执行状态，取值有：
Running-执行中
Finished-完成
Failed-失败
Stopped-终止
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置脚本任务执行状态，取值有：
Running-执行中
Finished-完成
Failed-失败
Stopped-终止
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInvokeId() 获取实例上任务唯一 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvokeId(string $InvokeId) 设置实例上任务唯一 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutput() 获取脚本任务输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutput(string $Output) 设置脚本任务输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExitCode() 获取任务退出码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExitCode(integer $ExitCode) 设置任务退出码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorCode() 获取任务错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCode(string $ErrorCode) 设置任务错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorInfo() 获取执行任务错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorInfo(string $ErrorInfo) 设置执行任务错误信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class InvocationDetail extends AbstractModel
{
    /**
     * @var string 实例 id
     */
    public $InstanceId;

    /**
     * @var string 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 实例所在区域，目前支持的区域有：ap-beijing、ap-shanghai、ap-guangzhou、ap-shanghai-adc
     */
    public $Region;

    /**
     * @var string 脚本任务执行状态，取值有：
Running-执行中
Finished-完成
Failed-失败
Stopped-终止
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 实例上任务唯一 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvokeId;

    /**
     * @var string 脚本任务输出
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Output;

    /**
     * @var integer 任务退出码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExitCode;

    /**
     * @var string 任务错误码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCode;

    /**
     * @var string 执行任务错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorInfo;

    /**
     * @param string $InstanceId 实例 id
     * @param string $InstanceName 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 实例所在区域，目前支持的区域有：ap-beijing、ap-shanghai、ap-guangzhou、ap-shanghai-adc
     * @param string $Status 脚本任务执行状态，取值有：
Running-执行中
Finished-完成
Failed-失败
Stopped-终止
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InvokeId 实例上任务唯一 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Output 脚本任务输出
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExitCode 任务退出码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorCode 任务错误码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorInfo 执行任务错误信息
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InvokeId",$param) and $param["InvokeId"] !== null) {
            $this->InvokeId = $param["InvokeId"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }

        if (array_key_exists("ExitCode",$param) and $param["ExitCode"] !== null) {
            $this->ExitCode = $param["ExitCode"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorInfo",$param) and $param["ErrorInfo"] !== null) {
            $this->ErrorInfo = $param["ErrorInfo"];
        }
    }
}
