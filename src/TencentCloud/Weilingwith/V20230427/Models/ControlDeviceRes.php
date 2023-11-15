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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备控制结果
 *
 * @method string getWID() 获取设备Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWID(string $WID) 设置设备Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCode() 获取指令接受, 0表示成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(integer $Code) 设置指令接受, 0表示成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResult() 获取控制结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(string $Result) 设置控制结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSeq() 获取批量大于1时，可用此seq进行链路追踪
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeq(string $Seq) 设置批量大于1时，可用此seq进行链路追踪
注意：此字段可能返回 null，表示取不到有效值。
 */
class ControlDeviceRes extends AbstractModel
{
    /**
     * @var string 设备Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WID;

    /**
     * @var integer 指令接受, 0表示成功
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var string 控制结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var string 批量大于1时，可用此seq进行链路追踪
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Seq;

    /**
     * @param string $WID 设备Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Code 指令接受, 0表示成功
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Result 控制结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Seq 批量大于1时，可用此seq进行链路追踪
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
        if (array_key_exists("WID",$param) and $param["WID"] !== null) {
            $this->WID = $param["WID"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Seq",$param) and $param["Seq"] !== null) {
            $this->Seq = $param["Seq"];
        }
    }
}
