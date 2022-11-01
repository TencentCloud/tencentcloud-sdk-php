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
 * 实例状况
 *
 * @method string getMessage() 获取信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReason() 获取原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReason(string $Reason) 设置原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取Status of the condition, one of True, False, Unknown.
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置Status of the condition, one of True, False, Unknown.
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastTransitionTime() 获取上次更新的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastTransitionTime(string $LastTransitionTime) 设置上次更新的时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class StatefulSetCondition extends AbstractModel
{
    /**
     * @var string 信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var string 原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reason;

    /**
     * @var string Status of the condition, one of True, False, Unknown.
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 上次更新的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastTransitionTime;

    /**
     * @param string $Message 信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Reason 原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status Status of the condition, one of True, False, Unknown.
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastTransitionTime 上次更新的时间
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
        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("LastTransitionTime",$param) and $param["LastTransitionTime"] !== null) {
            $this->LastTransitionTime = $param["LastTransitionTime"];
        }
    }
}
