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
 * 肿瘤结节
 *
 * @method Attribute getPart() 获取部位信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPart(Attribute $Part) 设置部位信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method Attribute getType() 获取类型信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(Attribute $Type) 设置类型信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSizeList() 获取大小信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSizeList(array $SizeList) 设置大小信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method Attribute getShape() 获取形态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShape(Attribute $Shape) 设置形态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method Attribute getEdge() 获取边缘信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEdge(Attribute $Edge) 设置边缘信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method Attribute getCDFI() 获取CDFI信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCDFI(Attribute $CDFI) 设置CDFI信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method Attribute getMetabolism() 获取代谢信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetabolism(Attribute $Metabolism) 设置代谢信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method Attribute getLymphGland() 获取淋巴结信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLymphGland(Attribute $LymphGland) 设置淋巴结信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method Attribute getLymphDoor() 获取淋巴门信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLymphDoor(Attribute $LymphDoor) 设置淋巴门信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method Attribute getSkinMedulla() 获取皮髓质信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSkinMedulla(Attribute $SkinMedulla) 设置皮髓质信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method Attribute getInnerEcho() 获取内部回声信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInnerEcho(Attribute $InnerEcho) 设置内部回声信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method Attribute getRearEcho() 获取外部回声信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRearEcho(Attribute $RearEcho) 设置外部回声信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method Attribute getEnvelope() 获取包膜信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvelope(Attribute $Envelope) 设置包膜信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method Attribute getCalcification() 获取钙化信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalcification(Attribute $Calcification) 设置钙化信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method Attribute getEnhancement() 获取强化信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnhancement(Attribute $Enhancement) 设置强化信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method Attribute getAspectRatio() 获取纵横比信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAspectRatio(Attribute $AspectRatio) 设置纵横比信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class Tuber extends AbstractModel
{
    /**
     * @var Attribute 部位信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Part;

    /**
     * @var Attribute 类型信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var array 大小信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SizeList;

    /**
     * @var Attribute 形态信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Shape;

    /**
     * @var Attribute 边缘信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Edge;

    /**
     * @var Attribute CDFI信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CDFI;

    /**
     * @var Attribute 代谢信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Metabolism;

    /**
     * @var Attribute 淋巴结信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LymphGland;

    /**
     * @var Attribute 淋巴门信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LymphDoor;

    /**
     * @var Attribute 皮髓质信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SkinMedulla;

    /**
     * @var Attribute 内部回声信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InnerEcho;

    /**
     * @var Attribute 外部回声信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RearEcho;

    /**
     * @var Attribute 包膜信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Envelope;

    /**
     * @var Attribute 钙化信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Calcification;

    /**
     * @var Attribute 强化信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enhancement;

    /**
     * @var Attribute 纵横比信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AspectRatio;

    /**
     * @param Attribute $Part 部位信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param Attribute $Type 类型信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SizeList 大小信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param Attribute $Shape 形态信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param Attribute $Edge 边缘信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param Attribute $CDFI CDFI信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param Attribute $Metabolism 代谢信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param Attribute $LymphGland 淋巴结信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param Attribute $LymphDoor 淋巴门信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param Attribute $SkinMedulla 皮髓质信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param Attribute $InnerEcho 内部回声信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param Attribute $RearEcho 外部回声信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param Attribute $Envelope 包膜信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param Attribute $Calcification 钙化信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param Attribute $Enhancement 强化信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param Attribute $AspectRatio 纵横比信息
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
            $this->Part = new Attribute();
            $this->Part->deserialize($param["Part"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = new Attribute();
            $this->Type->deserialize($param["Type"]);
        }

        if (array_key_exists("SizeList",$param) and $param["SizeList"] !== null) {
            $this->SizeList = [];
            foreach ($param["SizeList"] as $key => $value){
                $obj = new Attribute();
                $obj->deserialize($value);
                array_push($this->SizeList, $obj);
            }
        }

        if (array_key_exists("Shape",$param) and $param["Shape"] !== null) {
            $this->Shape = new Attribute();
            $this->Shape->deserialize($param["Shape"]);
        }

        if (array_key_exists("Edge",$param) and $param["Edge"] !== null) {
            $this->Edge = new Attribute();
            $this->Edge->deserialize($param["Edge"]);
        }

        if (array_key_exists("CDFI",$param) and $param["CDFI"] !== null) {
            $this->CDFI = new Attribute();
            $this->CDFI->deserialize($param["CDFI"]);
        }

        if (array_key_exists("Metabolism",$param) and $param["Metabolism"] !== null) {
            $this->Metabolism = new Attribute();
            $this->Metabolism->deserialize($param["Metabolism"]);
        }

        if (array_key_exists("LymphGland",$param) and $param["LymphGland"] !== null) {
            $this->LymphGland = new Attribute();
            $this->LymphGland->deserialize($param["LymphGland"]);
        }

        if (array_key_exists("LymphDoor",$param) and $param["LymphDoor"] !== null) {
            $this->LymphDoor = new Attribute();
            $this->LymphDoor->deserialize($param["LymphDoor"]);
        }

        if (array_key_exists("SkinMedulla",$param) and $param["SkinMedulla"] !== null) {
            $this->SkinMedulla = new Attribute();
            $this->SkinMedulla->deserialize($param["SkinMedulla"]);
        }

        if (array_key_exists("InnerEcho",$param) and $param["InnerEcho"] !== null) {
            $this->InnerEcho = new Attribute();
            $this->InnerEcho->deserialize($param["InnerEcho"]);
        }

        if (array_key_exists("RearEcho",$param) and $param["RearEcho"] !== null) {
            $this->RearEcho = new Attribute();
            $this->RearEcho->deserialize($param["RearEcho"]);
        }

        if (array_key_exists("Envelope",$param) and $param["Envelope"] !== null) {
            $this->Envelope = new Attribute();
            $this->Envelope->deserialize($param["Envelope"]);
        }

        if (array_key_exists("Calcification",$param) and $param["Calcification"] !== null) {
            $this->Calcification = new Attribute();
            $this->Calcification->deserialize($param["Calcification"]);
        }

        if (array_key_exists("Enhancement",$param) and $param["Enhancement"] !== null) {
            $this->Enhancement = new Attribute();
            $this->Enhancement->deserialize($param["Enhancement"]);
        }

        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = new Attribute();
            $this->AspectRatio->deserialize($param["AspectRatio"]);
        }
    }
}
