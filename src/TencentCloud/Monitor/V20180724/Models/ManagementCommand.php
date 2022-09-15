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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Prometheus Agent 管理命令行
 *
 * @method string getInstall() 获取Agent 安装命令
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstall(string $Install) 设置Agent 安装命令
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRestart() 获取Agent 重启命令
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRestart(string $Restart) 设置Agent 重启命令
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStop() 获取Agent 停止命令
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStop(string $Stop) 设置Agent 停止命令
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusCheck() 获取Agent 状态检测命令
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusCheck(string $StatusCheck) 设置Agent 状态检测命令
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogCheck() 获取Agent 日志检测命令
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogCheck(string $LogCheck) 设置Agent 日志检测命令
注意：此字段可能返回 null，表示取不到有效值。
 */
class ManagementCommand extends AbstractModel
{
    /**
     * @var string Agent 安装命令
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Install;

    /**
     * @var string Agent 重启命令
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Restart;

    /**
     * @var string Agent 停止命令
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Stop;

    /**
     * @var string Agent 状态检测命令
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusCheck;

    /**
     * @var string Agent 日志检测命令
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogCheck;

    /**
     * @param string $Install Agent 安装命令
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Restart Agent 重启命令
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Stop Agent 停止命令
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusCheck Agent 状态检测命令
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogCheck Agent 日志检测命令
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
        if (array_key_exists("Install",$param) and $param["Install"] !== null) {
            $this->Install = $param["Install"];
        }

        if (array_key_exists("Restart",$param) and $param["Restart"] !== null) {
            $this->Restart = $param["Restart"];
        }

        if (array_key_exists("Stop",$param) and $param["Stop"] !== null) {
            $this->Stop = $param["Stop"];
        }

        if (array_key_exists("StatusCheck",$param) and $param["StatusCheck"] !== null) {
            $this->StatusCheck = $param["StatusCheck"];
        }

        if (array_key_exists("LogCheck",$param) and $param["LogCheck"] !== null) {
            $this->LogCheck = $param["LogCheck"];
        }
    }
}
