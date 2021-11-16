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
 * 药品
 *
 * @method string getName() 获取药品名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置药品名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTradeName() 获取商品名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTradeName(string $TradeName) 设置商品名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFirm() 获取厂商
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirm(string $Firm) 设置厂商
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCategory() 获取医保类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategory(string $Category) 设置医保类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpecification() 获取规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecification(string $Specification) 设置规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMinQuantity() 获取最小包装数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinQuantity(string $MinQuantity) 设置最小包装数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDosageUnit() 获取最小制剂单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDosageUnit(string $DosageUnit) 设置最小制剂单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackingUnit() 获取最小包装单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackingUnit(string $PackingUnit) 设置最小包装单位
注意：此字段可能返回 null，表示取不到有效值。
 */
class Medicine extends AbstractModel
{
    /**
     * @var string 药品名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 商品名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TradeName;

    /**
     * @var string 厂商
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Firm;

    /**
     * @var string 医保类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Category;

    /**
     * @var string 规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Specification;

    /**
     * @var string 最小包装数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinQuantity;

    /**
     * @var string 最小制剂单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DosageUnit;

    /**
     * @var string 最小包装单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackingUnit;

    /**
     * @param string $Name 药品名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TradeName 商品名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Firm 厂商
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Category 医保类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Specification 规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MinQuantity 最小包装数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DosageUnit 最小制剂单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackingUnit 最小包装单位
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

        if (array_key_exists("TradeName",$param) and $param["TradeName"] !== null) {
            $this->TradeName = $param["TradeName"];
        }

        if (array_key_exists("Firm",$param) and $param["Firm"] !== null) {
            $this->Firm = $param["Firm"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Specification",$param) and $param["Specification"] !== null) {
            $this->Specification = $param["Specification"];
        }

        if (array_key_exists("MinQuantity",$param) and $param["MinQuantity"] !== null) {
            $this->MinQuantity = $param["MinQuantity"];
        }

        if (array_key_exists("DosageUnit",$param) and $param["DosageUnit"] !== null) {
            $this->DosageUnit = $param["DosageUnit"];
        }

        if (array_key_exists("PackingUnit",$param) and $param["PackingUnit"] !== null) {
            $this->PackingUnit = $param["PackingUnit"];
        }
    }
}
