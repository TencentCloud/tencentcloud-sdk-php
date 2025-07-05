<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * 结节
 *
 * @method BlockInfo getType() 获取类型
 * @method void setType(BlockInfo $Type) 设置类型
 * @method Part getPart() 获取部位
 * @method void setPart(Part $Part) 设置部位
 * @method array getSize() 获取大小
 * @method void setSize(array $Size) 设置大小
 * @method Multiple getMultiple() 获取多发
 * @method void setMultiple(Multiple $Multiple) 设置多发
 * @method AspectRatio getAspectRatio() 获取纵横比
 * @method void setAspectRatio(AspectRatio $AspectRatio) 设置纵横比
 * @method BlockInfo getEdge() 获取边缘
 * @method void setEdge(BlockInfo $Edge) 设置边缘
 * @method BlockInfo getInnerEcho() 获取内部回声
 * @method void setInnerEcho(BlockInfo $InnerEcho) 设置内部回声
 * @method BlockInfo getRearEcho() 获取外部回声
 * @method void setRearEcho(BlockInfo $RearEcho) 设置外部回声
 * @method Elastic getElastic() 获取弹性质地
 * @method void setElastic(Elastic $Elastic) 设置弹性质地
 * @method BlockInfo getShape() 获取形状
 * @method void setShape(BlockInfo $Shape) 设置形状
 * @method BlockInfo getShapeAttr() 获取形态
 * @method void setShapeAttr(BlockInfo $ShapeAttr) 设置形态
 * @method BlockInfo getSkinMedulla() 获取皮髓质信息
 * @method void setSkinMedulla(BlockInfo $SkinMedulla) 设置皮髓质信息
 * @method BlockInfo getTrend() 获取变化趋势
 * @method void setTrend(BlockInfo $Trend) 设置变化趋势
 * @method BlockInfo getCalcification() 获取钙化
 * @method void setCalcification(BlockInfo $Calcification) 设置钙化
 * @method BlockInfo getEnvelope() 获取包膜
 * @method void setEnvelope(BlockInfo $Envelope) 设置包膜
 * @method BlockInfo getEnhancement() 获取强化
 * @method void setEnhancement(BlockInfo $Enhancement) 设置强化
 * @method BlockInfo getLymphEnlargement() 获取淋巴结
 * @method void setLymphEnlargement(BlockInfo $LymphEnlargement) 设置淋巴结
 * @method BlockInfo getLymphDoor() 获取淋巴门
 * @method void setLymphDoor(BlockInfo $LymphDoor) 设置淋巴门
 * @method BlockInfo getActivity() 获取活动度
 * @method void setActivity(BlockInfo $Activity) 设置活动度
 * @method BlockInfo getOperation() 获取手术情况
 * @method void setOperation(BlockInfo $Operation) 设置手术情况
 * @method BlockInfo getCDFI() 获取血液cdfi
 * @method void setCDFI(BlockInfo $CDFI) 设置血液cdfi
 * @method array getIndex() 获取原文位置
 * @method void setIndex(array $Index) 设置原文位置
 * @method BlockInfo getSizeStatus() 获取大小状态
 * @method void setSizeStatus(BlockInfo $SizeStatus) 设置大小状态
 * @method BlockInfo getInnerEchoDistribution() 获取内部回声分布
 * @method void setInnerEchoDistribution(BlockInfo $InnerEchoDistribution) 设置内部回声分布
 * @method array getInnerEchoType() 获取内部回声类型
 * @method void setInnerEchoType(array $InnerEchoType) 设置内部回声类型
 * @method BlockInfo getOutline() 获取轮廓
 * @method void setOutline(BlockInfo $Outline) 设置轮廓
 * @method BlockInfo getStructure() 获取结构
 * @method void setStructure(BlockInfo $Structure) 设置结构
 * @method BlockInfo getDensity() 获取密度
 * @method void setDensity(BlockInfo $Density) 设置密度
 * @method BlockInfo getVas() 获取血管
 * @method void setVas(BlockInfo $Vas) 设置血管
 * @method BlockInfo getCysticwall() 获取囊壁
 * @method void setCysticwall(BlockInfo $Cysticwall) 设置囊壁
 * @method BlockInfo getCapsule() 获取被膜
 * @method void setCapsule(BlockInfo $Capsule) 设置被膜
 * @method Size getIsthmusThicknese() 获取峡部厚度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsthmusThicknese(Size $IsthmusThicknese) 设置峡部厚度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrc() 获取原文
 * @method void setSrc(string $Src) 设置原文
 * @method BlockInfo getTransparent() 获取透声度
 * @method void setTransparent(BlockInfo $Transparent) 设置透声度
 * @method BlockInfo getMriAdc() 获取MRI ADC
 * @method void setMriAdc(BlockInfo $MriAdc) 设置MRI ADC
 * @method BlockInfo getMriDwi() 获取MRI DWI
 * @method void setMriDwi(BlockInfo $MriDwi) 设置MRI DWI
 * @method BlockInfo getMriT1() 获取MRI T1信号
 * @method void setMriT1(BlockInfo $MriT1) 设置MRI T1信号
 * @method BlockInfo getMriT2() 获取MRI T2信号
 * @method void setMriT2(BlockInfo $MriT2) 设置MRI T2信号
 * @method BlockInfo getCtHu() 获取CT HU值
 * @method void setCtHu(BlockInfo $CtHu) 设置CT HU值
 * @method BlockInfo getSuvmax() 获取SUmax值
 * @method void setSuvmax(BlockInfo $Suvmax) 设置SUmax值
 * @method BlockInfo getMetabolism() 获取代谢情况
 * @method void setMetabolism(BlockInfo $Metabolism) 设置代谢情况
 * @method BlockInfo getRadioactiveUptake() 获取放射性摄取
 * @method void setRadioactiveUptake(BlockInfo $RadioactiveUptake) 设置放射性摄取
 * @method BlockInfo getSymDesc() 获取病变
 * @method void setSymDesc(BlockInfo $SymDesc) 设置病变
 * @method BlockInfo getImageFeature() 获取影像特征
 * @method void setImageFeature(BlockInfo $ImageFeature) 设置影像特征
 * @method array getCoords() 获取在报告图片中的坐标
 * @method void setCoords(array $Coords) 设置在报告图片中的坐标
 * @method Size getIsthmusThickness() 获取峡部厚度
 * @method void setIsthmusThickness(Size $IsthmusThickness) 设置峡部厚度
 */
class TuberInfo extends AbstractModel
{
    /**
     * @var BlockInfo 类型
     */
    public $Type;

    /**
     * @var Part 部位
     */
    public $Part;

    /**
     * @var array 大小
     */
    public $Size;

    /**
     * @var Multiple 多发
     */
    public $Multiple;

    /**
     * @var AspectRatio 纵横比
     */
    public $AspectRatio;

    /**
     * @var BlockInfo 边缘
     */
    public $Edge;

    /**
     * @var BlockInfo 内部回声
     */
    public $InnerEcho;

    /**
     * @var BlockInfo 外部回声
     */
    public $RearEcho;

    /**
     * @var Elastic 弹性质地
     */
    public $Elastic;

    /**
     * @var BlockInfo 形状
     */
    public $Shape;

    /**
     * @var BlockInfo 形态
     */
    public $ShapeAttr;

    /**
     * @var BlockInfo 皮髓质信息
     */
    public $SkinMedulla;

    /**
     * @var BlockInfo 变化趋势
     */
    public $Trend;

    /**
     * @var BlockInfo 钙化
     */
    public $Calcification;

    /**
     * @var BlockInfo 包膜
     */
    public $Envelope;

    /**
     * @var BlockInfo 强化
     */
    public $Enhancement;

    /**
     * @var BlockInfo 淋巴结
     */
    public $LymphEnlargement;

    /**
     * @var BlockInfo 淋巴门
     */
    public $LymphDoor;

    /**
     * @var BlockInfo 活动度
     */
    public $Activity;

    /**
     * @var BlockInfo 手术情况
     */
    public $Operation;

    /**
     * @var BlockInfo 血液cdfi
     */
    public $CDFI;

    /**
     * @var array 原文位置
     */
    public $Index;

    /**
     * @var BlockInfo 大小状态
     */
    public $SizeStatus;

    /**
     * @var BlockInfo 内部回声分布
     */
    public $InnerEchoDistribution;

    /**
     * @var array 内部回声类型
     */
    public $InnerEchoType;

    /**
     * @var BlockInfo 轮廓
     */
    public $Outline;

    /**
     * @var BlockInfo 结构
     */
    public $Structure;

    /**
     * @var BlockInfo 密度
     */
    public $Density;

    /**
     * @var BlockInfo 血管
     */
    public $Vas;

    /**
     * @var BlockInfo 囊壁
     */
    public $Cysticwall;

    /**
     * @var BlockInfo 被膜
     */
    public $Capsule;

    /**
     * @var Size 峡部厚度
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $IsthmusThicknese;

    /**
     * @var string 原文
     */
    public $Src;

    /**
     * @var BlockInfo 透声度
     */
    public $Transparent;

    /**
     * @var BlockInfo MRI ADC
     */
    public $MriAdc;

    /**
     * @var BlockInfo MRI DWI
     */
    public $MriDwi;

    /**
     * @var BlockInfo MRI T1信号
     */
    public $MriT1;

    /**
     * @var BlockInfo MRI T2信号
     */
    public $MriT2;

    /**
     * @var BlockInfo CT HU值
     */
    public $CtHu;

    /**
     * @var BlockInfo SUmax值
     */
    public $Suvmax;

    /**
     * @var BlockInfo 代谢情况
     */
    public $Metabolism;

    /**
     * @var BlockInfo 放射性摄取
     */
    public $RadioactiveUptake;

    /**
     * @var BlockInfo 病变
     */
    public $SymDesc;

    /**
     * @var BlockInfo 影像特征
     */
    public $ImageFeature;

    /**
     * @var array 在报告图片中的坐标
     */
    public $Coords;

    /**
     * @var Size 峡部厚度
     */
    public $IsthmusThickness;

    /**
     * @param BlockInfo $Type 类型
     * @param Part $Part 部位
     * @param array $Size 大小
     * @param Multiple $Multiple 多发
     * @param AspectRatio $AspectRatio 纵横比
     * @param BlockInfo $Edge 边缘
     * @param BlockInfo $InnerEcho 内部回声
     * @param BlockInfo $RearEcho 外部回声
     * @param Elastic $Elastic 弹性质地
     * @param BlockInfo $Shape 形状
     * @param BlockInfo $ShapeAttr 形态
     * @param BlockInfo $SkinMedulla 皮髓质信息
     * @param BlockInfo $Trend 变化趋势
     * @param BlockInfo $Calcification 钙化
     * @param BlockInfo $Envelope 包膜
     * @param BlockInfo $Enhancement 强化
     * @param BlockInfo $LymphEnlargement 淋巴结
     * @param BlockInfo $LymphDoor 淋巴门
     * @param BlockInfo $Activity 活动度
     * @param BlockInfo $Operation 手术情况
     * @param BlockInfo $CDFI 血液cdfi
     * @param array $Index 原文位置
     * @param BlockInfo $SizeStatus 大小状态
     * @param BlockInfo $InnerEchoDistribution 内部回声分布
     * @param array $InnerEchoType 内部回声类型
     * @param BlockInfo $Outline 轮廓
     * @param BlockInfo $Structure 结构
     * @param BlockInfo $Density 密度
     * @param BlockInfo $Vas 血管
     * @param BlockInfo $Cysticwall 囊壁
     * @param BlockInfo $Capsule 被膜
     * @param Size $IsthmusThicknese 峡部厚度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Src 原文
     * @param BlockInfo $Transparent 透声度
     * @param BlockInfo $MriAdc MRI ADC
     * @param BlockInfo $MriDwi MRI DWI
     * @param BlockInfo $MriT1 MRI T1信号
     * @param BlockInfo $MriT2 MRI T2信号
     * @param BlockInfo $CtHu CT HU值
     * @param BlockInfo $Suvmax SUmax值
     * @param BlockInfo $Metabolism 代谢情况
     * @param BlockInfo $RadioactiveUptake 放射性摄取
     * @param BlockInfo $SymDesc 病变
     * @param BlockInfo $ImageFeature 影像特征
     * @param array $Coords 在报告图片中的坐标
     * @param Size $IsthmusThickness 峡部厚度
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = new BlockInfo();
            $this->Type->deserialize($param["Type"]);
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

        if (array_key_exists("Multiple",$param) and $param["Multiple"] !== null) {
            $this->Multiple = new Multiple();
            $this->Multiple->deserialize($param["Multiple"]);
        }

        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = new AspectRatio();
            $this->AspectRatio->deserialize($param["AspectRatio"]);
        }

        if (array_key_exists("Edge",$param) and $param["Edge"] !== null) {
            $this->Edge = new BlockInfo();
            $this->Edge->deserialize($param["Edge"]);
        }

        if (array_key_exists("InnerEcho",$param) and $param["InnerEcho"] !== null) {
            $this->InnerEcho = new BlockInfo();
            $this->InnerEcho->deserialize($param["InnerEcho"]);
        }

        if (array_key_exists("RearEcho",$param) and $param["RearEcho"] !== null) {
            $this->RearEcho = new BlockInfo();
            $this->RearEcho->deserialize($param["RearEcho"]);
        }

        if (array_key_exists("Elastic",$param) and $param["Elastic"] !== null) {
            $this->Elastic = new Elastic();
            $this->Elastic->deserialize($param["Elastic"]);
        }

        if (array_key_exists("Shape",$param) and $param["Shape"] !== null) {
            $this->Shape = new BlockInfo();
            $this->Shape->deserialize($param["Shape"]);
        }

        if (array_key_exists("ShapeAttr",$param) and $param["ShapeAttr"] !== null) {
            $this->ShapeAttr = new BlockInfo();
            $this->ShapeAttr->deserialize($param["ShapeAttr"]);
        }

        if (array_key_exists("SkinMedulla",$param) and $param["SkinMedulla"] !== null) {
            $this->SkinMedulla = new BlockInfo();
            $this->SkinMedulla->deserialize($param["SkinMedulla"]);
        }

        if (array_key_exists("Trend",$param) and $param["Trend"] !== null) {
            $this->Trend = new BlockInfo();
            $this->Trend->deserialize($param["Trend"]);
        }

        if (array_key_exists("Calcification",$param) and $param["Calcification"] !== null) {
            $this->Calcification = new BlockInfo();
            $this->Calcification->deserialize($param["Calcification"]);
        }

        if (array_key_exists("Envelope",$param) and $param["Envelope"] !== null) {
            $this->Envelope = new BlockInfo();
            $this->Envelope->deserialize($param["Envelope"]);
        }

        if (array_key_exists("Enhancement",$param) and $param["Enhancement"] !== null) {
            $this->Enhancement = new BlockInfo();
            $this->Enhancement->deserialize($param["Enhancement"]);
        }

        if (array_key_exists("LymphEnlargement",$param) and $param["LymphEnlargement"] !== null) {
            $this->LymphEnlargement = new BlockInfo();
            $this->LymphEnlargement->deserialize($param["LymphEnlargement"]);
        }

        if (array_key_exists("LymphDoor",$param) and $param["LymphDoor"] !== null) {
            $this->LymphDoor = new BlockInfo();
            $this->LymphDoor->deserialize($param["LymphDoor"]);
        }

        if (array_key_exists("Activity",$param) and $param["Activity"] !== null) {
            $this->Activity = new BlockInfo();
            $this->Activity->deserialize($param["Activity"]);
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = new BlockInfo();
            $this->Operation->deserialize($param["Operation"]);
        }

        if (array_key_exists("CDFI",$param) and $param["CDFI"] !== null) {
            $this->CDFI = new BlockInfo();
            $this->CDFI->deserialize($param["CDFI"]);
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("SizeStatus",$param) and $param["SizeStatus"] !== null) {
            $this->SizeStatus = new BlockInfo();
            $this->SizeStatus->deserialize($param["SizeStatus"]);
        }

        if (array_key_exists("InnerEchoDistribution",$param) and $param["InnerEchoDistribution"] !== null) {
            $this->InnerEchoDistribution = new BlockInfo();
            $this->InnerEchoDistribution->deserialize($param["InnerEchoDistribution"]);
        }

        if (array_key_exists("InnerEchoType",$param) and $param["InnerEchoType"] !== null) {
            $this->InnerEchoType = [];
            foreach ($param["InnerEchoType"] as $key => $value){
                $obj = new BlockInfo();
                $obj->deserialize($value);
                array_push($this->InnerEchoType, $obj);
            }
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

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }

        if (array_key_exists("Transparent",$param) and $param["Transparent"] !== null) {
            $this->Transparent = new BlockInfo();
            $this->Transparent->deserialize($param["Transparent"]);
        }

        if (array_key_exists("MriAdc",$param) and $param["MriAdc"] !== null) {
            $this->MriAdc = new BlockInfo();
            $this->MriAdc->deserialize($param["MriAdc"]);
        }

        if (array_key_exists("MriDwi",$param) and $param["MriDwi"] !== null) {
            $this->MriDwi = new BlockInfo();
            $this->MriDwi->deserialize($param["MriDwi"]);
        }

        if (array_key_exists("MriT1",$param) and $param["MriT1"] !== null) {
            $this->MriT1 = new BlockInfo();
            $this->MriT1->deserialize($param["MriT1"]);
        }

        if (array_key_exists("MriT2",$param) and $param["MriT2"] !== null) {
            $this->MriT2 = new BlockInfo();
            $this->MriT2->deserialize($param["MriT2"]);
        }

        if (array_key_exists("CtHu",$param) and $param["CtHu"] !== null) {
            $this->CtHu = new BlockInfo();
            $this->CtHu->deserialize($param["CtHu"]);
        }

        if (array_key_exists("Suvmax",$param) and $param["Suvmax"] !== null) {
            $this->Suvmax = new BlockInfo();
            $this->Suvmax->deserialize($param["Suvmax"]);
        }

        if (array_key_exists("Metabolism",$param) and $param["Metabolism"] !== null) {
            $this->Metabolism = new BlockInfo();
            $this->Metabolism->deserialize($param["Metabolism"]);
        }

        if (array_key_exists("RadioactiveUptake",$param) and $param["RadioactiveUptake"] !== null) {
            $this->RadioactiveUptake = new BlockInfo();
            $this->RadioactiveUptake->deserialize($param["RadioactiveUptake"]);
        }

        if (array_key_exists("SymDesc",$param) and $param["SymDesc"] !== null) {
            $this->SymDesc = new BlockInfo();
            $this->SymDesc->deserialize($param["SymDesc"]);
        }

        if (array_key_exists("ImageFeature",$param) and $param["ImageFeature"] !== null) {
            $this->ImageFeature = new BlockInfo();
            $this->ImageFeature->deserialize($param["ImageFeature"]);
        }

        if (array_key_exists("Coords",$param) and $param["Coords"] !== null) {
            $this->Coords = [];
            foreach ($param["Coords"] as $key => $value){
                $obj = new Coord();
                $obj->deserialize($value);
                array_push($this->Coords, $obj);
            }
        }

        if (array_key_exists("IsthmusThickness",$param) and $param["IsthmusThickness"] !== null) {
            $this->IsthmusThickness = new Size();
            $this->IsthmusThickness->deserialize($param["IsthmusThickness"]);
        }
    }
}
