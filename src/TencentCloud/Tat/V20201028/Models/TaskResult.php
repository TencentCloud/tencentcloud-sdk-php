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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务结果。
 *
 * @method integer getExitCode() 获取命令执行ExitCode。
 * @method void setExitCode(integer $ExitCode) 设置命令执行ExitCode。
 * @method string getOutput() 获取Base64编码后的命令输出。最大长度24KB。
 * @method void setOutput(string $Output) 设置Base64编码后的命令输出。最大长度24KB。
 * @method string getExecStartTime() 获取命令执行开始时间。格式为：YYYY-MM-DDThh:mm:ssZ
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecStartTime(string $ExecStartTime) 设置命令执行开始时间。格式为：YYYY-MM-DDThh:mm:ssZ
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecEndTime() 获取命令执行结束时间。格式为：YYYY-MM-DDThh:mm:ssZ
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecEndTime(string $ExecEndTime) 设置命令执行结束时间。格式为：YYYY-MM-DDThh:mm:ssZ
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDropped() 获取命令最终输出被截断的字节数。
 * @method void setDropped(integer $Dropped) 设置命令最终输出被截断的字节数。
 * @method string getOutputUrl() 获取日志在cos中的地址
 * @method void setOutputUrl(string $OutputUrl) 设置日志在cos中的地址
 * @method string getOutputUploadCOSErrorInfo() 获取日志上传cos的错误信息。
 * @method void setOutputUploadCOSErrorInfo(string $OutputUploadCOSErrorInfo) 设置日志上传cos的错误信息。
 */
class TaskResult extends AbstractModel
{
    /**
     * @var integer 命令执行ExitCode。
     */
    public $ExitCode;

    /**
     * @var string Base64编码后的命令输出。最大长度24KB。
     */
    public $Output;

    /**
     * @var string 命令执行开始时间。格式为：YYYY-MM-DDThh:mm:ssZ
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecStartTime;

    /**
     * @var string 命令执行结束时间。格式为：YYYY-MM-DDThh:mm:ssZ
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecEndTime;

    /**
     * @var integer 命令最终输出被截断的字节数。
     */
    public $Dropped;

    /**
     * @var string 日志在cos中的地址
     */
    public $OutputUrl;

    /**
     * @var string 日志上传cos的错误信息。
     */
    public $OutputUploadCOSErrorInfo;

    /**
     * @param integer $ExitCode 命令执行ExitCode。
     * @param string $Output Base64编码后的命令输出。最大长度24KB。
     * @param string $ExecStartTime 命令执行开始时间。格式为：YYYY-MM-DDThh:mm:ssZ
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecEndTime 命令执行结束时间。格式为：YYYY-MM-DDThh:mm:ssZ
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Dropped 命令最终输出被截断的字节数。
     * @param string $OutputUrl 日志在cos中的地址
     * @param string $OutputUploadCOSErrorInfo 日志上传cos的错误信息。
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
        if (array_key_exists("ExitCode",$param) and $param["ExitCode"] !== null) {
            $this->ExitCode = $param["ExitCode"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }

        if (array_key_exists("ExecStartTime",$param) and $param["ExecStartTime"] !== null) {
            $this->ExecStartTime = $param["ExecStartTime"];
        }

        if (array_key_exists("ExecEndTime",$param) and $param["ExecEndTime"] !== null) {
            $this->ExecEndTime = $param["ExecEndTime"];
        }

        if (array_key_exists("Dropped",$param) and $param["Dropped"] !== null) {
            $this->Dropped = $param["Dropped"];
        }

        if (array_key_exists("OutputUrl",$param) and $param["OutputUrl"] !== null) {
            $this->OutputUrl = $param["OutputUrl"];
        }

        if (array_key_exists("OutputUploadCOSErrorInfo",$param) and $param["OutputUploadCOSErrorInfo"] !== null) {
            $this->OutputUploadCOSErrorInfo = $param["OutputUploadCOSErrorInfo"];
        }
    }
}
