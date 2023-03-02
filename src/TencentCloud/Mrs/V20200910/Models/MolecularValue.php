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
 * 分子病理详细信息
 *
 * @method string getExon() 获取外显子
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExon(string $Exon) 设置外显子
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPosition() 获取点位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPosition(string $Position) 设置点位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPositive() 获取阳性或阴性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPositive(string $Positive) 设置阳性或阴性
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrc() 获取基因名称原文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrc(string $Src) 设置基因名称原文
注意：此字段可能返回 null，表示取不到有效值。
 */
class MolecularValue extends AbstractModel
{
    /**
     * @var string 外显子
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Exon;

    /**
     * @var string 点位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Position;

    /**
     * @var string 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 阳性或阴性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Positive;

    /**
     * @var string 基因名称原文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Src;

    /**
     * @param string $Exon 外显子
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Position 点位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Positive 阳性或阴性
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Src 基因名称原文
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
        if (array_key_exists("Exon",$param) and $param["Exon"] !== null) {
            $this->Exon = $param["Exon"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Positive",$param) and $param["Positive"] !== null) {
            $this->Positive = $param["Positive"];
        }

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }
    }
}
