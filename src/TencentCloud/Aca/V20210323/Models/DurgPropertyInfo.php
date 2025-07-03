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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 药品属性
 *
 * @method integer getDrugType() 获取药品类型 1:西药,2:中成药,3:中药,4:化学药品,5:生物制药
 * @method void setDrugType(integer $DrugType) 设置药品类型 1:西药,2:中成药,3:中药,4:化学药品,5:生物制药
 * @method integer getAntibacterialType() 获取抗菌药分类 1:抗真菌药物, 2:抗细菌药物, 3:抗结核药物, 4:其他抗菌药, 0:普通药品
 * @method void setAntibacterialType(integer $AntibacterialType) 设置抗菌药分类 1:抗真菌药物, 2:抗细菌药物, 3:抗结核药物, 4:其他抗菌药, 0:普通药品
 * @method integer getAntibacterialClass() 获取抗菌药级别 1:非限制级, 2:限制级, 3:特殊使用级 
 * @method void setAntibacterialClass(integer $AntibacterialClass) 设置抗菌药级别 1:非限制级, 2:限制级, 3:特殊使用级 
 * @method integer getSpeciallyDrugType() 获取特殊药品类型 1:毒性药品, 2:麻醉药品, 3:放射药品, 4:精神一类药品, 5:精神二类药品, 6:其他特管药品， 7:贵重药品
 * @method void setSpeciallyDrugType(integer $SpeciallyDrugType) 设置特殊药品类型 1:毒性药品, 2:麻醉药品, 3:放射药品, 4:精神一类药品, 5:精神二类药品, 6:其他特管药品， 7:贵重药品
 * @method integer getIsBasicDrug() 获取是否为基本药物 1:是, 2:否, 0:未知
 * @method void setIsBasicDrug(integer $IsBasicDrug) 设置是否为基本药物 1:是, 2:否, 0:未知
 * @method integer getChargeType() 获取社保药品 1:甲类药品, 2:乙类药品, 3:双跨药品, 4:自费药品, 0:未知
 * @method void setChargeType(integer $ChargeType) 设置社保药品 1:甲类药品, 2:乙类药品, 3:双跨药品, 4:自费药品, 0:未知
 */
class DurgPropertyInfo extends AbstractModel
{
    /**
     * @var integer 药品类型 1:西药,2:中成药,3:中药,4:化学药品,5:生物制药
     */
    public $DrugType;

    /**
     * @var integer 抗菌药分类 1:抗真菌药物, 2:抗细菌药物, 3:抗结核药物, 4:其他抗菌药, 0:普通药品
     */
    public $AntibacterialType;

    /**
     * @var integer 抗菌药级别 1:非限制级, 2:限制级, 3:特殊使用级 
     */
    public $AntibacterialClass;

    /**
     * @var integer 特殊药品类型 1:毒性药品, 2:麻醉药品, 3:放射药品, 4:精神一类药品, 5:精神二类药品, 6:其他特管药品， 7:贵重药品
     */
    public $SpeciallyDrugType;

    /**
     * @var integer 是否为基本药物 1:是, 2:否, 0:未知
     */
    public $IsBasicDrug;

    /**
     * @var integer 社保药品 1:甲类药品, 2:乙类药品, 3:双跨药品, 4:自费药品, 0:未知
     */
    public $ChargeType;

    /**
     * @param integer $DrugType 药品类型 1:西药,2:中成药,3:中药,4:化学药品,5:生物制药
     * @param integer $AntibacterialType 抗菌药分类 1:抗真菌药物, 2:抗细菌药物, 3:抗结核药物, 4:其他抗菌药, 0:普通药品
     * @param integer $AntibacterialClass 抗菌药级别 1:非限制级, 2:限制级, 3:特殊使用级 
     * @param integer $SpeciallyDrugType 特殊药品类型 1:毒性药品, 2:麻醉药品, 3:放射药品, 4:精神一类药品, 5:精神二类药品, 6:其他特管药品， 7:贵重药品
     * @param integer $IsBasicDrug 是否为基本药物 1:是, 2:否, 0:未知
     * @param integer $ChargeType 社保药品 1:甲类药品, 2:乙类药品, 3:双跨药品, 4:自费药品, 0:未知
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
        if (array_key_exists("DrugType",$param) and $param["DrugType"] !== null) {
            $this->DrugType = $param["DrugType"];
        }

        if (array_key_exists("AntibacterialType",$param) and $param["AntibacterialType"] !== null) {
            $this->AntibacterialType = $param["AntibacterialType"];
        }

        if (array_key_exists("AntibacterialClass",$param) and $param["AntibacterialClass"] !== null) {
            $this->AntibacterialClass = $param["AntibacterialClass"];
        }

        if (array_key_exists("SpeciallyDrugType",$param) and $param["SpeciallyDrugType"] !== null) {
            $this->SpeciallyDrugType = $param["SpeciallyDrugType"];
        }

        if (array_key_exists("IsBasicDrug",$param) and $param["IsBasicDrug"] !== null) {
            $this->IsBasicDrug = $param["IsBasicDrug"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }
    }
}
