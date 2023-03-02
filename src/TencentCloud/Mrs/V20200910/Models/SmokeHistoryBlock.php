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
 * 吸烟史
 *
 * @method string getName() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrc() 获取原文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrc(string $Src) 设置原文
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeUnit() 获取时间单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeUnit(string $TimeUnit) 设置时间单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeNorm() 获取时间归一化
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeNorm(string $TimeNorm) 设置时间归一化
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAmount() 获取吸烟量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAmount(string $Amount) 设置吸烟量
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getQuitState() 获取戒烟状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuitState(boolean $QuitState) 设置戒烟状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getState() 获取是否吸烟
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(boolean $State) 设置是否吸烟
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取对外输出值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置对外输出值
注意：此字段可能返回 null，表示取不到有效值。
 */
class SmokeHistoryBlock extends AbstractModel
{
    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 原文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Src;

    /**
     * @var string 时间单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeUnit;

    /**
     * @var string 时间归一化
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeNorm;

    /**
     * @var string 吸烟量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Amount;

    /**
     * @var boolean 戒烟状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuitState;

    /**
     * @var boolean 是否吸烟
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var string 对外输出值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param string $Name 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Src 原文
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeUnit 时间单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeNorm 时间归一化
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Amount 吸烟量
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $QuitState 戒烟状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $State 是否吸烟
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 对外输出值
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

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeNorm",$param) and $param["TimeNorm"] !== null) {
            $this->TimeNorm = $param["TimeNorm"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }

        if (array_key_exists("QuitState",$param) and $param["QuitState"] !== null) {
            $this->QuitState = $param["QuitState"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
