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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器状态
 *
 * @method string getStartTime() 获取容器运行开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置容器运行开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getState() 获取容器状态：created, running, exited, unknown
 * @method void setState(string $State) 设置容器状态：created, running, exited, unknown
 * @method string getFinishTime() 获取容器运行结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinishTime(string $FinishTime) 设置容器运行结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExitCode() 获取容器运行退出码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExitCode(integer $ExitCode) 设置容器运行退出码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReason() 获取容器状态 Reason
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReason(string $Reason) 设置容器状态 Reason
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取容器状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置容器状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRestartCount() 获取容器重启次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRestartCount(integer $RestartCount) 设置容器重启次数
注意：此字段可能返回 null，表示取不到有效值。
 */
class ContainerState extends AbstractModel
{
    /**
     * @var string 容器运行开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 容器状态：created, running, exited, unknown
     */
    public $State;

    /**
     * @var string 容器运行结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinishTime;

    /**
     * @var integer 容器运行退出码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExitCode;

    /**
     * @var string 容器状态 Reason
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reason;

    /**
     * @var string 容器状态信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var integer 容器重启次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RestartCount;

    /**
     * @param string $StartTime 容器运行开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $State 容器状态：created, running, exited, unknown
     * @param string $FinishTime 容器运行结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExitCode 容器运行退出码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Reason 容器状态 Reason
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 容器状态信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RestartCount 容器重启次数
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("ExitCode",$param) and $param["ExitCode"] !== null) {
            $this->ExitCode = $param["ExitCode"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("RestartCount",$param) and $param["RestartCount"] !== null) {
            $this->RestartCount = $param["RestartCount"];
        }
    }
}
