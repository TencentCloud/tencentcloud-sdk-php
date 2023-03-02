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
 * 婚育史
 *
 * @method string getName() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrc() 获取原文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrc(string $Src) 设置原文
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getState() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(string $State) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNorm() 获取归一化值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNorm(string $Norm) 设置归一化值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取对外输出值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置对外输出值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPregCount() 获取妊娠次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPregCount(string $PregCount) 设置妊娠次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProduCount() 获取生产次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProduCount(string $ProduCount) 设置生产次数
注意：此字段可能返回 null，表示取不到有效值。
 */
class FertilityHistoryBlock extends AbstractModel
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
     * @var string 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var string 归一化值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Norm;

    /**
     * @var string 对外输出值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var string 妊娠次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PregCount;

    /**
     * @var string 生产次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProduCount;

    /**
     * @param string $Name 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Src 原文
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $State 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Norm 归一化值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 对外输出值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PregCount 妊娠次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProduCount 生产次数
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

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Norm",$param) and $param["Norm"] !== null) {
            $this->Norm = $param["Norm"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("PregCount",$param) and $param["PregCount"] !== null) {
            $this->PregCount = $param["PregCount"];
        }

        if (array_key_exists("ProduCount",$param) and $param["ProduCount"] !== null) {
            $this->ProduCount = $param["ProduCount"];
        }
    }
}
