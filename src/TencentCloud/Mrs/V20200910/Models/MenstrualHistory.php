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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 月经史
 *
 * @method string getIsOrNot() 获取是否来月经
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsOrNot(string $IsOrNot) 设置是否来月经
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMenarcheAge() 获取月经初潮年龄
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMenarcheAge(string $MenarcheAge) 设置月经初潮年龄
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastTime() 获取末次月经时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastTime(string $LastTime) 设置末次月经时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlow() 获取经量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlow(string $Flow) 设置经量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCycles() 获取月经周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycles(string $Cycles) 设置月经周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDuration() 获取行经天数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(string $Duration) 设置行经天数
注意：此字段可能返回 null，表示取不到有效值。
 */
class MenstrualHistory extends AbstractModel
{
    /**
     * @var string 是否来月经
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsOrNot;

    /**
     * @var string 月经初潮年龄
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MenarcheAge;

    /**
     * @var string 末次月经时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastTime;

    /**
     * @var string 经量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Flow;

    /**
     * @var string 月经周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cycles;

    /**
     * @var string 行经天数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @param string $IsOrNot 是否来月经
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MenarcheAge 月经初潮年龄
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastTime 末次月经时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Flow 经量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Cycles 月经周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Duration 行经天数
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
        if (array_key_exists("IsOrNot",$param) and $param["IsOrNot"] !== null) {
            $this->IsOrNot = $param["IsOrNot"];
        }

        if (array_key_exists("MenarcheAge",$param) and $param["MenarcheAge"] !== null) {
            $this->MenarcheAge = $param["MenarcheAge"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("Flow",$param) and $param["Flow"] !== null) {
            $this->Flow = $param["Flow"];
        }

        if (array_key_exists("Cycles",$param) and $param["Cycles"] !== null) {
            $this->Cycles = $param["Cycles"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
