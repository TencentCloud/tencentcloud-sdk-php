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
 * 胎儿数据结构
 *
 * @method FieldInfo getBPD() 获取双顶径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBPD(FieldInfo $BPD) 设置双顶径
注意：此字段可能返回 null，表示取不到有效值。
 * @method FieldInfo getAPTD() 获取腹前后径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAPTD(FieldInfo $APTD) 设置腹前后径
注意：此字段可能返回 null，表示取不到有效值。
 * @method FieldInfo getTTD() 获取腹左右径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTTD(FieldInfo $TTD) 设置腹左右径
注意：此字段可能返回 null，表示取不到有效值。
 * @method FieldInfo getCRL() 获取头臀径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCRL(FieldInfo $CRL) 设置头臀径
注意：此字段可能返回 null，表示取不到有效值。
 * @method FieldInfo getHC() 获取头围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHC(FieldInfo $HC) 设置头围
注意：此字段可能返回 null，表示取不到有效值。
 * @method FieldInfo getAC() 获取腹围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAC(FieldInfo $AC) 设置腹围
注意：此字段可能返回 null，表示取不到有效值。
 * @method FieldInfo getFL() 获取股骨长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFL(FieldInfo $FL) 设置股骨长
注意：此字段可能返回 null，表示取不到有效值。
 * @method FieldInfo getHL() 获取肱骨长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHL(FieldInfo $HL) 设置肱骨长
注意：此字段可能返回 null，表示取不到有效值。
 * @method FieldInfo getWeight() 获取胎儿重量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(FieldInfo $Weight) 设置胎儿重量
注意：此字段可能返回 null，表示取不到有效值。
 * @method FieldInfo getNT() 获取颈项透明层
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNT(FieldInfo $NT) 设置颈项透明层
注意：此字段可能返回 null，表示取不到有效值。
 * @method FieldInfo getUmbilicalCord() 获取脐动脉血流
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUmbilicalCord(FieldInfo $UmbilicalCord) 设置脐动脉血流
注意：此字段可能返回 null，表示取不到有效值。
 * @method FieldInfo getWaterDeep() 获取羊水最大深度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaterDeep(FieldInfo $WaterDeep) 设置羊水最大深度
注意：此字段可能返回 null，表示取不到有效值。
 * @method FieldInfo getWaterQuad() 获取羊水四象限测量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaterQuad(FieldInfo $WaterQuad) 设置羊水四象限测量
注意：此字段可能返回 null，表示取不到有效值。
 * @method FieldInfo getAFI() 获取羊水指数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAFI(FieldInfo $AFI) 设置羊水指数
注意：此字段可能返回 null，表示取不到有效值。
 * @method FieldInfo getFHR() 获取胎心
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFHR(FieldInfo $FHR) 设置胎心
注意：此字段可能返回 null，表示取不到有效值。
 * @method FieldInfo getMovement() 获取胎动
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMovement(FieldInfo $Movement) 设置胎动
注意：此字段可能返回 null，表示取不到有效值。
 * @method FieldInfo getNum() 获取胎数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNum(FieldInfo $Num) 设置胎数
注意：此字段可能返回 null，表示取不到有效值。
 * @method FieldInfo getPosition() 获取胎位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPosition(FieldInfo $Position) 设置胎位
注意：此字段可能返回 null，表示取不到有效值。
 * @method FieldInfo getAlive() 获取是否活胎
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlive(FieldInfo $Alive) 设置是否活胎
注意：此字段可能返回 null，表示取不到有效值。
 * @method FieldInfo getPlacentaLocation() 获取胎盘位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlacentaLocation(FieldInfo $PlacentaLocation) 设置胎盘位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method FieldInfo getPlacentaThickness() 获取胎盘厚度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlacentaThickness(FieldInfo $PlacentaThickness) 设置胎盘厚度
注意：此字段可能返回 null，表示取不到有效值。
 * @method FieldInfo getPlacentaGrade() 获取胎盘成熟度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlacentaGrade(FieldInfo $PlacentaGrade) 设置胎盘成熟度
注意：此字段可能返回 null，表示取不到有效值。
 * @method FieldInfo getGestationTime() 获取妊娠时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGestationTime(FieldInfo $GestationTime) 设置妊娠时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method FieldInfo getGestationPeriod() 获取妊娠周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGestationPeriod(FieldInfo $GestationPeriod) 设置妊娠周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method FieldInfo getAroundNeck() 获取绕颈
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAroundNeck(FieldInfo $AroundNeck) 设置绕颈
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSym() 获取病变
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSym(array $Sym) 设置病变
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrc() 获取原文内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrc(string $Src) 设置原文内容
注意：此字段可能返回 null，表示取不到有效值。
 */
class Fetus extends AbstractModel
{
    /**
     * @var FieldInfo 双顶径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BPD;

    /**
     * @var FieldInfo 腹前后径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $APTD;

    /**
     * @var FieldInfo 腹左右径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TTD;

    /**
     * @var FieldInfo 头臀径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CRL;

    /**
     * @var FieldInfo 头围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HC;

    /**
     * @var FieldInfo 腹围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AC;

    /**
     * @var FieldInfo 股骨长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FL;

    /**
     * @var FieldInfo 肱骨长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HL;

    /**
     * @var FieldInfo 胎儿重量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @var FieldInfo 颈项透明层
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NT;

    /**
     * @var FieldInfo 脐动脉血流
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UmbilicalCord;

    /**
     * @var FieldInfo 羊水最大深度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WaterDeep;

    /**
     * @var FieldInfo 羊水四象限测量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WaterQuad;

    /**
     * @var FieldInfo 羊水指数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AFI;

    /**
     * @var FieldInfo 胎心
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FHR;

    /**
     * @var FieldInfo 胎动
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Movement;

    /**
     * @var FieldInfo 胎数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Num;

    /**
     * @var FieldInfo 胎位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Position;

    /**
     * @var FieldInfo 是否活胎
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Alive;

    /**
     * @var FieldInfo 胎盘位置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlacentaLocation;

    /**
     * @var FieldInfo 胎盘厚度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlacentaThickness;

    /**
     * @var FieldInfo 胎盘成熟度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlacentaGrade;

    /**
     * @var FieldInfo 妊娠时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GestationTime;

    /**
     * @var FieldInfo 妊娠周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GestationPeriod;

    /**
     * @var FieldInfo 绕颈
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AroundNeck;

    /**
     * @var array 病变
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sym;

    /**
     * @var string 原文内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Src;

    /**
     * @param FieldInfo $BPD 双顶径
注意：此字段可能返回 null，表示取不到有效值。
     * @param FieldInfo $APTD 腹前后径
注意：此字段可能返回 null，表示取不到有效值。
     * @param FieldInfo $TTD 腹左右径
注意：此字段可能返回 null，表示取不到有效值。
     * @param FieldInfo $CRL 头臀径
注意：此字段可能返回 null，表示取不到有效值。
     * @param FieldInfo $HC 头围
注意：此字段可能返回 null，表示取不到有效值。
     * @param FieldInfo $AC 腹围
注意：此字段可能返回 null，表示取不到有效值。
     * @param FieldInfo $FL 股骨长
注意：此字段可能返回 null，表示取不到有效值。
     * @param FieldInfo $HL 肱骨长
注意：此字段可能返回 null，表示取不到有效值。
     * @param FieldInfo $Weight 胎儿重量
注意：此字段可能返回 null，表示取不到有效值。
     * @param FieldInfo $NT 颈项透明层
注意：此字段可能返回 null，表示取不到有效值。
     * @param FieldInfo $UmbilicalCord 脐动脉血流
注意：此字段可能返回 null，表示取不到有效值。
     * @param FieldInfo $WaterDeep 羊水最大深度
注意：此字段可能返回 null，表示取不到有效值。
     * @param FieldInfo $WaterQuad 羊水四象限测量
注意：此字段可能返回 null，表示取不到有效值。
     * @param FieldInfo $AFI 羊水指数
注意：此字段可能返回 null，表示取不到有效值。
     * @param FieldInfo $FHR 胎心
注意：此字段可能返回 null，表示取不到有效值。
     * @param FieldInfo $Movement 胎动
注意：此字段可能返回 null，表示取不到有效值。
     * @param FieldInfo $Num 胎数
注意：此字段可能返回 null，表示取不到有效值。
     * @param FieldInfo $Position 胎位
注意：此字段可能返回 null，表示取不到有效值。
     * @param FieldInfo $Alive 是否活胎
注意：此字段可能返回 null，表示取不到有效值。
     * @param FieldInfo $PlacentaLocation 胎盘位置
注意：此字段可能返回 null，表示取不到有效值。
     * @param FieldInfo $PlacentaThickness 胎盘厚度
注意：此字段可能返回 null，表示取不到有效值。
     * @param FieldInfo $PlacentaGrade 胎盘成熟度
注意：此字段可能返回 null，表示取不到有效值。
     * @param FieldInfo $GestationTime 妊娠时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param FieldInfo $GestationPeriod 妊娠周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param FieldInfo $AroundNeck 绕颈
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Sym 病变
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Src 原文内容
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
        if (array_key_exists("BPD",$param) and $param["BPD"] !== null) {
            $this->BPD = new FieldInfo();
            $this->BPD->deserialize($param["BPD"]);
        }

        if (array_key_exists("APTD",$param) and $param["APTD"] !== null) {
            $this->APTD = new FieldInfo();
            $this->APTD->deserialize($param["APTD"]);
        }

        if (array_key_exists("TTD",$param) and $param["TTD"] !== null) {
            $this->TTD = new FieldInfo();
            $this->TTD->deserialize($param["TTD"]);
        }

        if (array_key_exists("CRL",$param) and $param["CRL"] !== null) {
            $this->CRL = new FieldInfo();
            $this->CRL->deserialize($param["CRL"]);
        }

        if (array_key_exists("HC",$param) and $param["HC"] !== null) {
            $this->HC = new FieldInfo();
            $this->HC->deserialize($param["HC"]);
        }

        if (array_key_exists("AC",$param) and $param["AC"] !== null) {
            $this->AC = new FieldInfo();
            $this->AC->deserialize($param["AC"]);
        }

        if (array_key_exists("FL",$param) and $param["FL"] !== null) {
            $this->FL = new FieldInfo();
            $this->FL->deserialize($param["FL"]);
        }

        if (array_key_exists("HL",$param) and $param["HL"] !== null) {
            $this->HL = new FieldInfo();
            $this->HL->deserialize($param["HL"]);
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = new FieldInfo();
            $this->Weight->deserialize($param["Weight"]);
        }

        if (array_key_exists("NT",$param) and $param["NT"] !== null) {
            $this->NT = new FieldInfo();
            $this->NT->deserialize($param["NT"]);
        }

        if (array_key_exists("UmbilicalCord",$param) and $param["UmbilicalCord"] !== null) {
            $this->UmbilicalCord = new FieldInfo();
            $this->UmbilicalCord->deserialize($param["UmbilicalCord"]);
        }

        if (array_key_exists("WaterDeep",$param) and $param["WaterDeep"] !== null) {
            $this->WaterDeep = new FieldInfo();
            $this->WaterDeep->deserialize($param["WaterDeep"]);
        }

        if (array_key_exists("WaterQuad",$param) and $param["WaterQuad"] !== null) {
            $this->WaterQuad = new FieldInfo();
            $this->WaterQuad->deserialize($param["WaterQuad"]);
        }

        if (array_key_exists("AFI",$param) and $param["AFI"] !== null) {
            $this->AFI = new FieldInfo();
            $this->AFI->deserialize($param["AFI"]);
        }

        if (array_key_exists("FHR",$param) and $param["FHR"] !== null) {
            $this->FHR = new FieldInfo();
            $this->FHR->deserialize($param["FHR"]);
        }

        if (array_key_exists("Movement",$param) and $param["Movement"] !== null) {
            $this->Movement = new FieldInfo();
            $this->Movement->deserialize($param["Movement"]);
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = new FieldInfo();
            $this->Num->deserialize($param["Num"]);
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = new FieldInfo();
            $this->Position->deserialize($param["Position"]);
        }

        if (array_key_exists("Alive",$param) and $param["Alive"] !== null) {
            $this->Alive = new FieldInfo();
            $this->Alive->deserialize($param["Alive"]);
        }

        if (array_key_exists("PlacentaLocation",$param) and $param["PlacentaLocation"] !== null) {
            $this->PlacentaLocation = new FieldInfo();
            $this->PlacentaLocation->deserialize($param["PlacentaLocation"]);
        }

        if (array_key_exists("PlacentaThickness",$param) and $param["PlacentaThickness"] !== null) {
            $this->PlacentaThickness = new FieldInfo();
            $this->PlacentaThickness->deserialize($param["PlacentaThickness"]);
        }

        if (array_key_exists("PlacentaGrade",$param) and $param["PlacentaGrade"] !== null) {
            $this->PlacentaGrade = new FieldInfo();
            $this->PlacentaGrade->deserialize($param["PlacentaGrade"]);
        }

        if (array_key_exists("GestationTime",$param) and $param["GestationTime"] !== null) {
            $this->GestationTime = new FieldInfo();
            $this->GestationTime->deserialize($param["GestationTime"]);
        }

        if (array_key_exists("GestationPeriod",$param) and $param["GestationPeriod"] !== null) {
            $this->GestationPeriod = new FieldInfo();
            $this->GestationPeriod->deserialize($param["GestationPeriod"]);
        }

        if (array_key_exists("AroundNeck",$param) and $param["AroundNeck"] !== null) {
            $this->AroundNeck = new FieldInfo();
            $this->AroundNeck->deserialize($param["AroundNeck"]);
        }

        if (array_key_exists("Sym",$param) and $param["Sym"] !== null) {
            $this->Sym = [];
            foreach ($param["Sym"] as $key => $value){
                $obj = new FieldInfo();
                $obj->deserialize($value);
                array_push($this->Sym, $obj);
            }
        }

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }
    }
}
