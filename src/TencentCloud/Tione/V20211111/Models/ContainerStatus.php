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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器状态
 *
 * @method integer getRestartCount() 获取重启次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRestartCount(integer $RestartCount) 设置重启次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getState() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(string $State) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getReady() 获取是否就绪
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReady(boolean $Ready) 设置是否就绪
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReason() 获取状态原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReason(string $Reason) 设置状态原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取容器的错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置容器的错误信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ContainerStatus extends AbstractModel
{
    /**
     * @var integer 重启次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RestartCount;

    /**
     * @var string 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var boolean 是否就绪
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ready;

    /**
     * @var string 状态原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reason;

    /**
     * @var string 容器的错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @param integer $RestartCount 重启次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $State 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Ready 是否就绪
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Reason 状态原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 容器的错误信息
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
        if (array_key_exists("RestartCount",$param) and $param["RestartCount"] !== null) {
            $this->RestartCount = $param["RestartCount"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Ready",$param) and $param["Ready"] !== null) {
            $this->Ready = $param["Ready"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
