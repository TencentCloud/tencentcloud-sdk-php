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
 * 器官
 *
 * @method Part getPart() 获取部位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPart(Part $Part) 设置部位
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSize() 获取大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(array $Size) 设置大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getEnvelope() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvelope(BlockInfo $Envelope) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getEdge() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEdge(BlockInfo $Edge) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getInnerEcho() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInnerEcho(BlockInfo $InnerEcho) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getGland() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGland(BlockInfo $Gland) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getShape() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShape(BlockInfo $Shape) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getThickness() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThickness(BlockInfo $Thickness) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getShapeAttr() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShapeAttr(BlockInfo $ShapeAttr) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getCDFI() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCDFI(BlockInfo $CDFI) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getSymDesc() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSymDesc(BlockInfo $SymDesc) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getSizeStatus() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSizeStatus(BlockInfo $SizeStatus) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getOutline() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutline(BlockInfo $Outline) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getStructure() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStructure(BlockInfo $Structure) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getDensity() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDensity(BlockInfo $Density) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getVas() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVas(BlockInfo $Vas) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getCysticwall() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCysticwall(BlockInfo $Cysticwall) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getCapsule() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCapsule(BlockInfo $Capsule) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method Size getIsthmusThicknese() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsthmusThicknese(Size $IsthmusThicknese) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method BlockInfo getInnerEchoDistribution() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInnerEchoDistribution(BlockInfo $InnerEchoDistribution) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrc() 获取原文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrc(string $Src) 设置原文
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIndex() 获取原文位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndex(array $Index) 设置原文位置
注意：此字段可能返回 null，表示取不到有效值。
 */
class Organ extends AbstractModel
{
    /**
     * @var Part 部位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Part;

    /**
     * @var array 大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

    /**
     * @var BlockInfo ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Envelope;

    /**
     * @var BlockInfo ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Edge;

    /**
     * @var BlockInfo ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InnerEcho;

    /**
     * @var BlockInfo ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Gland;

    /**
     * @var BlockInfo ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Shape;

    /**
     * @var BlockInfo ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Thickness;

    /**
     * @var BlockInfo ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShapeAttr;

    /**
     * @var BlockInfo ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CDFI;

    /**
     * @var BlockInfo ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SymDesc;

    /**
     * @var BlockInfo ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SizeStatus;

    /**
     * @var BlockInfo ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Outline;

    /**
     * @var BlockInfo ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Structure;

    /**
     * @var BlockInfo ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Density;

    /**
     * @var BlockInfo ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vas;

    /**
     * @var BlockInfo ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cysticwall;

    /**
     * @var BlockInfo ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Capsule;

    /**
     * @var Size ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsthmusThicknese;

    /**
     * @var BlockInfo ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InnerEchoDistribution;

    /**
     * @var string 原文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Src;

    /**
     * @var array 原文位置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Index;

    /**
     * @param Part $Part 部位
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Size 大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Envelope ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Edge ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $InnerEcho ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Gland ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Shape ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Thickness ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $ShapeAttr ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $CDFI ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $SymDesc ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $SizeStatus ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Outline ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Structure ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Density ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Vas ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Cysticwall ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $Capsule ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param Size $IsthmusThicknese ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param BlockInfo $InnerEchoDistribution ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Src 原文
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Index 原文位置
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
        if (array_key_exists("Part",$param) and $param["Part"] !== null) {
            $this->Part = new Part();
            $this->Part->deserialize($param["Part"]);
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = [];
            foreach ($param["Size"] as $key => $value){
                $obj = new Size();
                $obj->deserialize($value);
                array_push($this->Size, $obj);
            }
        }

        if (array_key_exists("Envelope",$param) and $param["Envelope"] !== null) {
            $this->Envelope = new BlockInfo();
            $this->Envelope->deserialize($param["Envelope"]);
        }

        if (array_key_exists("Edge",$param) and $param["Edge"] !== null) {
            $this->Edge = new BlockInfo();
            $this->Edge->deserialize($param["Edge"]);
        }

        if (array_key_exists("InnerEcho",$param) and $param["InnerEcho"] !== null) {
            $this->InnerEcho = new BlockInfo();
            $this->InnerEcho->deserialize($param["InnerEcho"]);
        }

        if (array_key_exists("Gland",$param) and $param["Gland"] !== null) {
            $this->Gland = new BlockInfo();
            $this->Gland->deserialize($param["Gland"]);
        }

        if (array_key_exists("Shape",$param) and $param["Shape"] !== null) {
            $this->Shape = new BlockInfo();
            $this->Shape->deserialize($param["Shape"]);
        }

        if (array_key_exists("Thickness",$param) and $param["Thickness"] !== null) {
            $this->Thickness = new BlockInfo();
            $this->Thickness->deserialize($param["Thickness"]);
        }

        if (array_key_exists("ShapeAttr",$param) and $param["ShapeAttr"] !== null) {
            $this->ShapeAttr = new BlockInfo();
            $this->ShapeAttr->deserialize($param["ShapeAttr"]);
        }

        if (array_key_exists("CDFI",$param) and $param["CDFI"] !== null) {
            $this->CDFI = new BlockInfo();
            $this->CDFI->deserialize($param["CDFI"]);
        }

        if (array_key_exists("SymDesc",$param) and $param["SymDesc"] !== null) {
            $this->SymDesc = new BlockInfo();
            $this->SymDesc->deserialize($param["SymDesc"]);
        }

        if (array_key_exists("SizeStatus",$param) and $param["SizeStatus"] !== null) {
            $this->SizeStatus = new BlockInfo();
            $this->SizeStatus->deserialize($param["SizeStatus"]);
        }

        if (array_key_exists("Outline",$param) and $param["Outline"] !== null) {
            $this->Outline = new BlockInfo();
            $this->Outline->deserialize($param["Outline"]);
        }

        if (array_key_exists("Structure",$param) and $param["Structure"] !== null) {
            $this->Structure = new BlockInfo();
            $this->Structure->deserialize($param["Structure"]);
        }

        if (array_key_exists("Density",$param) and $param["Density"] !== null) {
            $this->Density = new BlockInfo();
            $this->Density->deserialize($param["Density"]);
        }

        if (array_key_exists("Vas",$param) and $param["Vas"] !== null) {
            $this->Vas = new BlockInfo();
            $this->Vas->deserialize($param["Vas"]);
        }

        if (array_key_exists("Cysticwall",$param) and $param["Cysticwall"] !== null) {
            $this->Cysticwall = new BlockInfo();
            $this->Cysticwall->deserialize($param["Cysticwall"]);
        }

        if (array_key_exists("Capsule",$param) and $param["Capsule"] !== null) {
            $this->Capsule = new BlockInfo();
            $this->Capsule->deserialize($param["Capsule"]);
        }

        if (array_key_exists("IsthmusThicknese",$param) and $param["IsthmusThicknese"] !== null) {
            $this->IsthmusThicknese = new Size();
            $this->IsthmusThicknese->deserialize($param["IsthmusThicknese"]);
        }

        if (array_key_exists("InnerEchoDistribution",$param) and $param["InnerEchoDistribution"] !== null) {
            $this->InnerEchoDistribution = new BlockInfo();
            $this->InnerEchoDistribution->deserialize($param["InnerEchoDistribution"]);
        }

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}
