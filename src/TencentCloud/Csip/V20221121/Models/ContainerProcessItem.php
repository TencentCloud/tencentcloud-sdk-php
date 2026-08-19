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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器进程信息
 *
 * @method string getProcessName() 获取进程名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessName(string $ProcessName) 设置进程名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPID() 获取宿主机进程ID
 * @method void setPID(integer $PID) 设置宿主机进程ID
 * @method integer getContainerPID() 获取容器内进程ID
 * @method void setContainerPID(integer $ContainerPID) 设置容器内进程ID
 * @method string getProcessPath() 获取进程可执行文件路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessPath(string $ProcessPath) 设置进程可执行文件路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunAs() 获取进程运行用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunAs(string $RunAs) 设置进程运行用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取进程启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置进程启动时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class ContainerProcessItem extends AbstractModel
{
    /**
     * @var string 进程名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessName;

    /**
     * @var integer 宿主机进程ID
     */
    public $PID;

    /**
     * @var integer 容器内进程ID
     */
    public $ContainerPID;

    /**
     * @var string 进程可执行文件路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessPath;

    /**
     * @var string 进程运行用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunAs;

    /**
     * @var string 进程启动时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @param string $ProcessName 进程名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PID 宿主机进程ID
     * @param integer $ContainerPID 容器内进程ID
     * @param string $ProcessPath 进程可执行文件路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunAs 进程运行用户
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 进程启动时间
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
        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("PID",$param) and $param["PID"] !== null) {
            $this->PID = $param["PID"];
        }

        if (array_key_exists("ContainerPID",$param) and $param["ContainerPID"] !== null) {
            $this->ContainerPID = $param["ContainerPID"];
        }

        if (array_key_exists("ProcessPath",$param) and $param["ProcessPath"] !== null) {
            $this->ProcessPath = $param["ProcessPath"];
        }

        if (array_key_exists("RunAs",$param) and $param["RunAs"] !== null) {
            $this->RunAs = $param["RunAs"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}
