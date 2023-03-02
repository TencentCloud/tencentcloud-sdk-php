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
 * 孕产结论部分
 *
 * @method array getFetus() 获取胎儿数据结构
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFetus(array $Fetus) 设置胎儿数据结构
注意：此字段可能返回 null，表示取不到有效值。
 * @method FieldInfo getFetusNum() 获取胎儿数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFetusNum(FieldInfo $FetusNum) 设置胎儿数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSym() 获取病变
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSym(array $Sym) 设置病变
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getText() 获取原文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置原文
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCoords() 获取坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoords(array $Coords) 设置坐标
注意：此字段可能返回 null，表示取不到有效值。
 */
class MaternitySummary extends AbstractModel
{
    /**
     * @var array 胎儿数据结构
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Fetus;

    /**
     * @var FieldInfo 胎儿数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FetusNum;

    /**
     * @var array 病变
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sym;

    /**
     * @var string 原文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var array 坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Coords;

    /**
     * @param array $Fetus 胎儿数据结构
注意：此字段可能返回 null，表示取不到有效值。
     * @param FieldInfo $FetusNum 胎儿数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Sym 病变
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Text 原文
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Coords 坐标
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
        if (array_key_exists("Fetus",$param) and $param["Fetus"] !== null) {
            $this->Fetus = [];
            foreach ($param["Fetus"] as $key => $value){
                $obj = new Fetus();
                $obj->deserialize($value);
                array_push($this->Fetus, $obj);
            }
        }

        if (array_key_exists("FetusNum",$param) and $param["FetusNum"] !== null) {
            $this->FetusNum = new FieldInfo();
            $this->FetusNum->deserialize($param["FetusNum"]);
        }

        if (array_key_exists("Sym",$param) and $param["Sym"] !== null) {
            $this->Sym = [];
            foreach ($param["Sym"] as $key => $value){
                $obj = new FieldInfo();
                $obj->deserialize($value);
                array_push($this->Sym, $obj);
            }
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Coords",$param) and $param["Coords"] !== null) {
            $this->Coords = [];
            foreach ($param["Coords"] as $key => $value){
                $obj = new Coord();
                $obj->deserialize($value);
                array_push($this->Coords, $obj);
            }
        }
    }
}
