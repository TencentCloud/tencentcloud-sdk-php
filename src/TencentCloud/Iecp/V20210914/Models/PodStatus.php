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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pod状态信息
 *
 * @method string getName() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNameSpace() 获取命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNameSpace(string $NameSpace) 设置命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIP() 获取IP地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIP(string $IP) 设置IP地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunSec() 获取运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunSec(integer $RunSec) 设置运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRestartCount() 获取重启次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRestartCount(integer $RestartCount) 设置重启次数
注意：此字段可能返回 null，表示取不到有效值。
 */
class PodStatus extends AbstractModel
{
    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 命名空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NameSpace;

    /**
     * @var string 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string IP地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IP;

    /**
     * @var string 启动时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var integer 运行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunSec;

    /**
     * @var integer 重启次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RestartCount;

    /**
     * @param string $Name 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NameSpace 命名空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IP IP地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 启动时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunSec 运行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RestartCount 重启次数
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NameSpace",$param) and $param["NameSpace"] !== null) {
            $this->NameSpace = $param["NameSpace"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("RunSec",$param) and $param["RunSec"] !== null) {
            $this->RunSec = $param["RunSec"];
        }

        if (array_key_exists("RestartCount",$param) and $param["RestartCount"] !== null) {
            $this->RestartCount = $param["RestartCount"];
        }
    }
}
