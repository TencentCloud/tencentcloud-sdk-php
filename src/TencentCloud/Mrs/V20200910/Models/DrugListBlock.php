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
 * 药物史
 *
 * @method string getCommonName() 获取通用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCommonName(string $CommonName) 设置通用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTradeName() 获取商品名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTradeName(string $TradeName) 设置商品名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method DosageBlock getDosage() 获取用法用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDosage(DosageBlock $Dosage) 设置用法用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置值
注意：此字段可能返回 null，表示取不到有效值。
 */
class DrugListBlock extends AbstractModel
{
    /**
     * @var string 通用名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CommonName;

    /**
     * @var string 商品名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TradeName;

    /**
     * @var DosageBlock 用法用量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Dosage;

    /**
     * @var string 值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param string $CommonName 通用名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TradeName 商品名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param DosageBlock $Dosage 用法用量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 值
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
        if (array_key_exists("CommonName",$param) and $param["CommonName"] !== null) {
            $this->CommonName = $param["CommonName"];
        }

        if (array_key_exists("TradeName",$param) and $param["TradeName"] !== null) {
            $this->TradeName = $param["TradeName"];
        }

        if (array_key_exists("Dosage",$param) and $param["Dosage"] !== null) {
            $this->Dosage = new DosageBlock();
            $this->Dosage->deserialize($param["Dosage"]);
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
