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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合理用药信息
 *
 * @method boolean getHit() 获取是否有风险
 * @method void setHit(boolean $Hit) 设置是否有风险
 * @method array getDrugUsages() 获取药品用量风险
 * @method void setDrugUsages(array $DrugUsages) 设置药品用量风险
 * @method array getDrugRepeats() 获取重复用药风险
 * @method void setDrugRepeats(array $DrugRepeats) 设置重复用药风险
 * @method array getDrugRoutes() 获取用药途径风险
 * @method void setDrugRoutes(array $DrugRoutes) 设置用药途径风险
 * @method array getSpecialPopulations() 获取特殊人群风险
 * @method void setSpecialPopulations(array $SpecialPopulations) 设置特殊人群风险
 * @method array getDrugTaboos() 获取禁忌症风险
 * @method void setDrugTaboos(array $DrugTaboos) 设置禁忌症风险
 * @method array getDrugInteractions() 获取相互作用风险
 * @method void setDrugInteractions(array $DrugInteractions) 设置相互作用风险
 * @method array getDrugIncompatibility() 获取配伍禁忌风险
 * @method void setDrugIncompatibility(array $DrugIncompatibility) 设置配伍禁忌风险
 * @method array getDrugAllergys() 获取过敏风险
 * @method void setDrugAllergys(array $DrugAllergys) 设置过敏风险
 * @method array getDrugIndications() 获取适应症风险
 * @method void setDrugIndications(array $DrugIndications) 设置适应症风险
 * @method array getAbnormals() 获取异常提醒
 * @method void setAbnormals(array $Abnormals) 设置异常提醒
 * @method array getDrugList() 获取药品列表
 * @method void setDrugList(array $DrugList) 设置药品列表
 */
class RationalDrugInfo extends AbstractModel
{
    /**
     * @var boolean 是否有风险
     */
    public $Hit;

    /**
     * @var array 药品用量风险
     */
    public $DrugUsages;

    /**
     * @var array 重复用药风险
     */
    public $DrugRepeats;

    /**
     * @var array 用药途径风险
     */
    public $DrugRoutes;

    /**
     * @var array 特殊人群风险
     */
    public $SpecialPopulations;

    /**
     * @var array 禁忌症风险
     */
    public $DrugTaboos;

    /**
     * @var array 相互作用风险
     */
    public $DrugInteractions;

    /**
     * @var array 配伍禁忌风险
     */
    public $DrugIncompatibility;

    /**
     * @var array 过敏风险
     */
    public $DrugAllergys;

    /**
     * @var array 适应症风险
     */
    public $DrugIndications;

    /**
     * @var array 异常提醒
     */
    public $Abnormals;

    /**
     * @var array 药品列表
     */
    public $DrugList;

    /**
     * @param boolean $Hit 是否有风险
     * @param array $DrugUsages 药品用量风险
     * @param array $DrugRepeats 重复用药风险
     * @param array $DrugRoutes 用药途径风险
     * @param array $SpecialPopulations 特殊人群风险
     * @param array $DrugTaboos 禁忌症风险
     * @param array $DrugInteractions 相互作用风险
     * @param array $DrugIncompatibility 配伍禁忌风险
     * @param array $DrugAllergys 过敏风险
     * @param array $DrugIndications 适应症风险
     * @param array $Abnormals 异常提醒
     * @param array $DrugList 药品列表
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
        if (array_key_exists("Hit",$param) and $param["Hit"] !== null) {
            $this->Hit = $param["Hit"];
        }

        if (array_key_exists("DrugUsages",$param) and $param["DrugUsages"] !== null) {
            $this->DrugUsages = [];
            foreach ($param["DrugUsages"] as $key => $value){
                $obj = new RiskInfo();
                $obj->deserialize($value);
                array_push($this->DrugUsages, $obj);
            }
        }

        if (array_key_exists("DrugRepeats",$param) and $param["DrugRepeats"] !== null) {
            $this->DrugRepeats = [];
            foreach ($param["DrugRepeats"] as $key => $value){
                $obj = new RiskInfo();
                $obj->deserialize($value);
                array_push($this->DrugRepeats, $obj);
            }
        }

        if (array_key_exists("DrugRoutes",$param) and $param["DrugRoutes"] !== null) {
            $this->DrugRoutes = [];
            foreach ($param["DrugRoutes"] as $key => $value){
                $obj = new RiskInfo();
                $obj->deserialize($value);
                array_push($this->DrugRoutes, $obj);
            }
        }

        if (array_key_exists("SpecialPopulations",$param) and $param["SpecialPopulations"] !== null) {
            $this->SpecialPopulations = [];
            foreach ($param["SpecialPopulations"] as $key => $value){
                $obj = new RiskInfo();
                $obj->deserialize($value);
                array_push($this->SpecialPopulations, $obj);
            }
        }

        if (array_key_exists("DrugTaboos",$param) and $param["DrugTaboos"] !== null) {
            $this->DrugTaboos = [];
            foreach ($param["DrugTaboos"] as $key => $value){
                $obj = new RiskInfo();
                $obj->deserialize($value);
                array_push($this->DrugTaboos, $obj);
            }
        }

        if (array_key_exists("DrugInteractions",$param) and $param["DrugInteractions"] !== null) {
            $this->DrugInteractions = [];
            foreach ($param["DrugInteractions"] as $key => $value){
                $obj = new RiskInfo();
                $obj->deserialize($value);
                array_push($this->DrugInteractions, $obj);
            }
        }

        if (array_key_exists("DrugIncompatibility",$param) and $param["DrugIncompatibility"] !== null) {
            $this->DrugIncompatibility = [];
            foreach ($param["DrugIncompatibility"] as $key => $value){
                $obj = new RiskInfo();
                $obj->deserialize($value);
                array_push($this->DrugIncompatibility, $obj);
            }
        }

        if (array_key_exists("DrugAllergys",$param) and $param["DrugAllergys"] !== null) {
            $this->DrugAllergys = [];
            foreach ($param["DrugAllergys"] as $key => $value){
                $obj = new RiskInfo();
                $obj->deserialize($value);
                array_push($this->DrugAllergys, $obj);
            }
        }

        if (array_key_exists("DrugIndications",$param) and $param["DrugIndications"] !== null) {
            $this->DrugIndications = [];
            foreach ($param["DrugIndications"] as $key => $value){
                $obj = new RiskInfo();
                $obj->deserialize($value);
                array_push($this->DrugIndications, $obj);
            }
        }

        if (array_key_exists("Abnormals",$param) and $param["Abnormals"] !== null) {
            $this->Abnormals = [];
            foreach ($param["Abnormals"] as $key => $value){
                $obj = new Abnormals();
                $obj->deserialize($value);
                array_push($this->Abnormals, $obj);
            }
        }

        if (array_key_exists("DrugList",$param) and $param["DrugList"] !== null) {
            $this->DrugList = [];
            foreach ($param["DrugList"] as $key => $value){
                $obj = new DrugList();
                $obj->deserialize($value);
                array_push($this->DrugList, $obj);
            }
        }
    }
}
