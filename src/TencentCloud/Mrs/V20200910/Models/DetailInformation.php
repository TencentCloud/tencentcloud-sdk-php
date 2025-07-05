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
 * 详情
 *
 * @method Part getPart() 获取部位
 * @method void setPart(Part $Part) 设置部位
 * @method array getTissueSizes() 获取组织大小
 * @method void setTissueSizes(array $TissueSizes) 设置组织大小
 * @method array getTuberSizes() 获取结节大小
 * @method void setTuberSizes(array $TuberSizes) 设置结节大小
 * @method array getCancerSizes() 获取肿瘤大小
 * @method void setCancerSizes(array $CancerSizes) 设置肿瘤大小
 * @method BaseInfo getHistologyLevel() 获取组织学等级
 * @method void setHistologyLevel(BaseInfo $HistologyLevel) 设置组织学等级
 * @method HistologyTypeV2 getHistologyType() 获取组织学类型
 * @method void setHistologyType(HistologyTypeV2 $HistologyType) 设置组织学类型
 * @method array getInvasive() 获取侵犯
 * @method void setInvasive(array $Invasive) 设置侵犯
 * @method PTNM getPTNM() 获取pTNM
 * @method void setPTNM(PTNM $PTNM) 设置pTNM
 * @method BaseInfo getInfiltrationDepth() 获取浸润深度
 * @method void setInfiltrationDepth(BaseInfo $InfiltrationDepth) 设置浸润深度
 * @method BaseInfo getTuberNum() 获取结节数量
 * @method void setTuberNum(BaseInfo $TuberNum) 设置结节数量
 * @method BaseInfo getCalcification() 获取钙化
 * @method void setCalcification(BaseInfo $Calcification) 设置钙化
 * @method BaseInfo getNecrosis() 获取坏死
 * @method void setNecrosis(BaseInfo $Necrosis) 设置坏死
 * @method BaseInfo getAbnormity() 获取异形
 * @method void setAbnormity(BaseInfo $Abnormity) 设置异形
 * @method BaseInfo getBreaked() 获取断链
 * @method void setBreaked(BaseInfo $Breaked) 设置断链
 */
class DetailInformation extends AbstractModel
{
    /**
     * @var Part 部位
     */
    public $Part;

    /**
     * @var array 组织大小
     */
    public $TissueSizes;

    /**
     * @var array 结节大小
     */
    public $TuberSizes;

    /**
     * @var array 肿瘤大小
     */
    public $CancerSizes;

    /**
     * @var BaseInfo 组织学等级
     */
    public $HistologyLevel;

    /**
     * @var HistologyTypeV2 组织学类型
     */
    public $HistologyType;

    /**
     * @var array 侵犯
     */
    public $Invasive;

    /**
     * @var PTNM pTNM
     */
    public $PTNM;

    /**
     * @var BaseInfo 浸润深度
     */
    public $InfiltrationDepth;

    /**
     * @var BaseInfo 结节数量
     */
    public $TuberNum;

    /**
     * @var BaseInfo 钙化
     */
    public $Calcification;

    /**
     * @var BaseInfo 坏死
     */
    public $Necrosis;

    /**
     * @var BaseInfo 异形
     */
    public $Abnormity;

    /**
     * @var BaseInfo 断链
     */
    public $Breaked;

    /**
     * @param Part $Part 部位
     * @param array $TissueSizes 组织大小
     * @param array $TuberSizes 结节大小
     * @param array $CancerSizes 肿瘤大小
     * @param BaseInfo $HistologyLevel 组织学等级
     * @param HistologyTypeV2 $HistologyType 组织学类型
     * @param array $Invasive 侵犯
     * @param PTNM $PTNM pTNM
     * @param BaseInfo $InfiltrationDepth 浸润深度
     * @param BaseInfo $TuberNum 结节数量
     * @param BaseInfo $Calcification 钙化
     * @param BaseInfo $Necrosis 坏死
     * @param BaseInfo $Abnormity 异形
     * @param BaseInfo $Breaked 断链
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

        if (array_key_exists("TissueSizes",$param) and $param["TissueSizes"] !== null) {
            $this->TissueSizes = [];
            foreach ($param["TissueSizes"] as $key => $value){
                $obj = new Size();
                $obj->deserialize($value);
                array_push($this->TissueSizes, $obj);
            }
        }

        if (array_key_exists("TuberSizes",$param) and $param["TuberSizes"] !== null) {
            $this->TuberSizes = [];
            foreach ($param["TuberSizes"] as $key => $value){
                $obj = new Size();
                $obj->deserialize($value);
                array_push($this->TuberSizes, $obj);
            }
        }

        if (array_key_exists("CancerSizes",$param) and $param["CancerSizes"] !== null) {
            $this->CancerSizes = [];
            foreach ($param["CancerSizes"] as $key => $value){
                $obj = new Size();
                $obj->deserialize($value);
                array_push($this->CancerSizes, $obj);
            }
        }

        if (array_key_exists("HistologyLevel",$param) and $param["HistologyLevel"] !== null) {
            $this->HistologyLevel = new BaseInfo();
            $this->HistologyLevel->deserialize($param["HistologyLevel"]);
        }

        if (array_key_exists("HistologyType",$param) and $param["HistologyType"] !== null) {
            $this->HistologyType = new HistologyTypeV2();
            $this->HistologyType->deserialize($param["HistologyType"]);
        }

        if (array_key_exists("Invasive",$param) and $param["Invasive"] !== null) {
            $this->Invasive = [];
            foreach ($param["Invasive"] as $key => $value){
                $obj = new InvasiveV2();
                $obj->deserialize($value);
                array_push($this->Invasive, $obj);
            }
        }

        if (array_key_exists("PTNM",$param) and $param["PTNM"] !== null) {
            $this->PTNM = new PTNM();
            $this->PTNM->deserialize($param["PTNM"]);
        }

        if (array_key_exists("InfiltrationDepth",$param) and $param["InfiltrationDepth"] !== null) {
            $this->InfiltrationDepth = new BaseInfo();
            $this->InfiltrationDepth->deserialize($param["InfiltrationDepth"]);
        }

        if (array_key_exists("TuberNum",$param) and $param["TuberNum"] !== null) {
            $this->TuberNum = new BaseInfo();
            $this->TuberNum->deserialize($param["TuberNum"]);
        }

        if (array_key_exists("Calcification",$param) and $param["Calcification"] !== null) {
            $this->Calcification = new BaseInfo();
            $this->Calcification->deserialize($param["Calcification"]);
        }

        if (array_key_exists("Necrosis",$param) and $param["Necrosis"] !== null) {
            $this->Necrosis = new BaseInfo();
            $this->Necrosis->deserialize($param["Necrosis"]);
        }

        if (array_key_exists("Abnormity",$param) and $param["Abnormity"] !== null) {
            $this->Abnormity = new BaseInfo();
            $this->Abnormity->deserialize($param["Abnormity"]);
        }

        if (array_key_exists("Breaked",$param) and $param["Breaked"] !== null) {
            $this->Breaked = new BaseInfo();
            $this->Breaked->deserialize($param["Breaked"]);
        }
    }
}
