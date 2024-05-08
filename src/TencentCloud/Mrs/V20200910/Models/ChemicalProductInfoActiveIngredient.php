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
 * 活性成份消息定义，如果是复方制剂，可以不列出每个活性成份的详细信息
 *
 * @method string getText() 获取文本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置文本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChemicalName() 获取活性成份的化学名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChemicalName(string $ChemicalName) 设置活性成份的化学名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChemicalFormula() 获取活性成份的化学结构式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChemicalFormula(string $ChemicalFormula) 设置活性成份的化学结构式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMolecularFormula() 获取活性成份的分子式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMolecularFormula(string $MolecularFormula) 设置活性成份的分子式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMolecularWeight() 获取活性成份的分子量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMolecularWeight(string $MolecularWeight) 设置活性成份的分子量
注意：此字段可能返回 null，表示取不到有效值。
 */
class ChemicalProductInfoActiveIngredient extends AbstractModel
{
    /**
     * @var string 文本内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var string 活性成份的化学名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChemicalName;

    /**
     * @var string 活性成份的化学结构式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChemicalFormula;

    /**
     * @var string 活性成份的分子式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MolecularFormula;

    /**
     * @var string 活性成份的分子量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MolecularWeight;

    /**
     * @param string $Text 文本内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChemicalName 活性成份的化学名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChemicalFormula 活性成份的化学结构式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MolecularFormula 活性成份的分子式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MolecularWeight 活性成份的分子量
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("ChemicalName",$param) and $param["ChemicalName"] !== null) {
            $this->ChemicalName = $param["ChemicalName"];
        }

        if (array_key_exists("ChemicalFormula",$param) and $param["ChemicalFormula"] !== null) {
            $this->ChemicalFormula = $param["ChemicalFormula"];
        }

        if (array_key_exists("MolecularFormula",$param) and $param["MolecularFormula"] !== null) {
            $this->MolecularFormula = $param["MolecularFormula"];
        }

        if (array_key_exists("MolecularWeight",$param) and $param["MolecularWeight"] !== null) {
            $this->MolecularWeight = $param["MolecularWeight"];
        }
    }
}
