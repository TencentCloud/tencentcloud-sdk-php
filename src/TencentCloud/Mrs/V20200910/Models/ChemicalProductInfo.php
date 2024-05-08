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
 * 药品说明书消息定义
 *
 * @method ChemicalProductInfoName getName() 获取药品名称，包括通用名和商品名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(ChemicalProductInfoName $Name) 设置药品名称，包括通用名和商品名
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChemicalProductInfoActiveIngredient getActiveIngredient() 获取活性成份消息定义，如果是复方制剂，可以不列出每个活性成份的详细信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActiveIngredient(ChemicalProductInfoActiveIngredient $ActiveIngredient) 设置活性成份消息定义，如果是复方制剂，可以不列出每个活性成份的详细信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChemicalProductInfoAppearance getAppearance() 获取性状
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppearance(ChemicalProductInfoAppearance $Appearance) 设置性状
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChemicalProductInfoIndications getIndications() 获取适应症描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndications(ChemicalProductInfoIndications $Indications) 设置适应症描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChemicalProductInfoBrochure getBrochure() 获取规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBrochure(ChemicalProductInfoBrochure $Brochure) 设置规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChemicalProductInfoDosage getDosage() 获取用法用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDosage(ChemicalProductInfoDosage $Dosage) 设置用法用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChemicalProductInfoAdverseReaction getAdverseReaction() 获取不良反应
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdverseReaction(ChemicalProductInfoAdverseReaction $AdverseReaction) 设置不良反应
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChemicalProductInfoContraindications getContraindications() 获取禁忌情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContraindications(ChemicalProductInfoContraindications $Contraindications) 设置禁忌情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChemicalProductInfoPrecautions getPrecautions() 获取注意事项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrecautions(ChemicalProductInfoPrecautions $Precautions) 设置注意事项
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChemicalProductInfoPregnancyLactationUse getPregnancyLactationUse() 获取孕妇及哺乳期妇女用药
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPregnancyLactationUse(ChemicalProductInfoPregnancyLactationUse $PregnancyLactationUse) 设置孕妇及哺乳期妇女用药
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChemicalProductInfoPediatricUse getPediatricUse() 获取儿童用药
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPediatricUse(ChemicalProductInfoPediatricUse $PediatricUse) 设置儿童用药
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChemicalProductInfoGeriatricUse getGeriatricUse() 获取老年用药
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGeriatricUse(ChemicalProductInfoGeriatricUse $GeriatricUse) 设置老年用药
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChemicalProductInfoInteractions getInteractions() 获取药品的药物相互作用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInteractions(ChemicalProductInfoInteractions $Interactions) 设置药品的药物相互作用
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChemicalProductInfoOverdose getOverdose() 获取药物过量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOverdose(ChemicalProductInfoOverdose $Overdose) 设置药物过量
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChemicalProductInfoClinicalTrial getClinicalTrial() 获取临床试验
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClinicalTrial(ChemicalProductInfoClinicalTrial $ClinicalTrial) 设置临床试验
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChemicalProductInfoPharmacologyToxicology getPharmacologyToxicology() 获取药理毒理
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPharmacologyToxicology(ChemicalProductInfoPharmacologyToxicology $PharmacologyToxicology) 设置药理毒理
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChemicalProductInfoPharmacokinetics getPharmacokinetics() 获取药代动力学
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPharmacokinetics(ChemicalProductInfoPharmacokinetics $Pharmacokinetics) 设置药代动力学
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChemicalProductInfoStorage getStorage() 获取储存条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorage(ChemicalProductInfoStorage $Storage) 设置储存条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChemicalProductInfoPackaging getPackaging() 获取包装信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackaging(ChemicalProductInfoPackaging $Packaging) 设置包装信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChemicalProductInfoValidityPeriod getValidityPeriod() 获取有效期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValidityPeriod(ChemicalProductInfoValidityPeriod $ValidityPeriod) 设置有效期
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChemicalProductInfoExecutiveStandards getExecutiveStandards() 获取执行标准
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutiveStandards(ChemicalProductInfoExecutiveStandards $ExecutiveStandards) 设置执行标准
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChemicalProductInfoApproval getApproval() 获取批准文号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproval(ChemicalProductInfoApproval $Approval) 设置批准文号
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChemicalProductInfoManufacturer getManufacturer() 获取生产企业名称和地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManufacturer(ChemicalProductInfoManufacturer $Manufacturer) 设置生产企业名称和地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class ChemicalProductInfo extends AbstractModel
{
    /**
     * @var ChemicalProductInfoName 药品名称，包括通用名和商品名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var ChemicalProductInfoActiveIngredient 活性成份消息定义，如果是复方制剂，可以不列出每个活性成份的详细信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActiveIngredient;

    /**
     * @var ChemicalProductInfoAppearance 性状
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Appearance;

    /**
     * @var ChemicalProductInfoIndications 适应症描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Indications;

    /**
     * @var ChemicalProductInfoBrochure 规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Brochure;

    /**
     * @var ChemicalProductInfoDosage 用法用量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Dosage;

    /**
     * @var ChemicalProductInfoAdverseReaction 不良反应
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdverseReaction;

    /**
     * @var ChemicalProductInfoContraindications 禁忌情况
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Contraindications;

    /**
     * @var ChemicalProductInfoPrecautions 注意事项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Precautions;

    /**
     * @var ChemicalProductInfoPregnancyLactationUse 孕妇及哺乳期妇女用药
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PregnancyLactationUse;

    /**
     * @var ChemicalProductInfoPediatricUse 儿童用药
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PediatricUse;

    /**
     * @var ChemicalProductInfoGeriatricUse 老年用药
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GeriatricUse;

    /**
     * @var ChemicalProductInfoInteractions 药品的药物相互作用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Interactions;

    /**
     * @var ChemicalProductInfoOverdose 药物过量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Overdose;

    /**
     * @var ChemicalProductInfoClinicalTrial 临床试验
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClinicalTrial;

    /**
     * @var ChemicalProductInfoPharmacologyToxicology 药理毒理
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PharmacologyToxicology;

    /**
     * @var ChemicalProductInfoPharmacokinetics 药代动力学
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pharmacokinetics;

    /**
     * @var ChemicalProductInfoStorage 储存条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Storage;

    /**
     * @var ChemicalProductInfoPackaging 包装信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Packaging;

    /**
     * @var ChemicalProductInfoValidityPeriod 有效期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValidityPeriod;

    /**
     * @var ChemicalProductInfoExecutiveStandards 执行标准
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutiveStandards;

    /**
     * @var ChemicalProductInfoApproval 批准文号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Approval;

    /**
     * @var ChemicalProductInfoManufacturer 生产企业名称和地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Manufacturer;

    /**
     * @param ChemicalProductInfoName $Name 药品名称，包括通用名和商品名
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChemicalProductInfoActiveIngredient $ActiveIngredient 活性成份消息定义，如果是复方制剂，可以不列出每个活性成份的详细信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChemicalProductInfoAppearance $Appearance 性状
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChemicalProductInfoIndications $Indications 适应症描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChemicalProductInfoBrochure $Brochure 规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChemicalProductInfoDosage $Dosage 用法用量
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChemicalProductInfoAdverseReaction $AdverseReaction 不良反应
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChemicalProductInfoContraindications $Contraindications 禁忌情况
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChemicalProductInfoPrecautions $Precautions 注意事项
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChemicalProductInfoPregnancyLactationUse $PregnancyLactationUse 孕妇及哺乳期妇女用药
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChemicalProductInfoPediatricUse $PediatricUse 儿童用药
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChemicalProductInfoGeriatricUse $GeriatricUse 老年用药
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChemicalProductInfoInteractions $Interactions 药品的药物相互作用
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChemicalProductInfoOverdose $Overdose 药物过量
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChemicalProductInfoClinicalTrial $ClinicalTrial 临床试验
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChemicalProductInfoPharmacologyToxicology $PharmacologyToxicology 药理毒理
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChemicalProductInfoPharmacokinetics $Pharmacokinetics 药代动力学
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChemicalProductInfoStorage $Storage 储存条件
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChemicalProductInfoPackaging $Packaging 包装信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChemicalProductInfoValidityPeriod $ValidityPeriod 有效期
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChemicalProductInfoExecutiveStandards $ExecutiveStandards 执行标准
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChemicalProductInfoApproval $Approval 批准文号
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChemicalProductInfoManufacturer $Manufacturer 生产企业名称和地址
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = new ChemicalProductInfoName();
            $this->Name->deserialize($param["Name"]);
        }

        if (array_key_exists("ActiveIngredient",$param) and $param["ActiveIngredient"] !== null) {
            $this->ActiveIngredient = new ChemicalProductInfoActiveIngredient();
            $this->ActiveIngredient->deserialize($param["ActiveIngredient"]);
        }

        if (array_key_exists("Appearance",$param) and $param["Appearance"] !== null) {
            $this->Appearance = new ChemicalProductInfoAppearance();
            $this->Appearance->deserialize($param["Appearance"]);
        }

        if (array_key_exists("Indications",$param) and $param["Indications"] !== null) {
            $this->Indications = new ChemicalProductInfoIndications();
            $this->Indications->deserialize($param["Indications"]);
        }

        if (array_key_exists("Brochure",$param) and $param["Brochure"] !== null) {
            $this->Brochure = new ChemicalProductInfoBrochure();
            $this->Brochure->deserialize($param["Brochure"]);
        }

        if (array_key_exists("Dosage",$param) and $param["Dosage"] !== null) {
            $this->Dosage = new ChemicalProductInfoDosage();
            $this->Dosage->deserialize($param["Dosage"]);
        }

        if (array_key_exists("AdverseReaction",$param) and $param["AdverseReaction"] !== null) {
            $this->AdverseReaction = new ChemicalProductInfoAdverseReaction();
            $this->AdverseReaction->deserialize($param["AdverseReaction"]);
        }

        if (array_key_exists("Contraindications",$param) and $param["Contraindications"] !== null) {
            $this->Contraindications = new ChemicalProductInfoContraindications();
            $this->Contraindications->deserialize($param["Contraindications"]);
        }

        if (array_key_exists("Precautions",$param) and $param["Precautions"] !== null) {
            $this->Precautions = new ChemicalProductInfoPrecautions();
            $this->Precautions->deserialize($param["Precautions"]);
        }

        if (array_key_exists("PregnancyLactationUse",$param) and $param["PregnancyLactationUse"] !== null) {
            $this->PregnancyLactationUse = new ChemicalProductInfoPregnancyLactationUse();
            $this->PregnancyLactationUse->deserialize($param["PregnancyLactationUse"]);
        }

        if (array_key_exists("PediatricUse",$param) and $param["PediatricUse"] !== null) {
            $this->PediatricUse = new ChemicalProductInfoPediatricUse();
            $this->PediatricUse->deserialize($param["PediatricUse"]);
        }

        if (array_key_exists("GeriatricUse",$param) and $param["GeriatricUse"] !== null) {
            $this->GeriatricUse = new ChemicalProductInfoGeriatricUse();
            $this->GeriatricUse->deserialize($param["GeriatricUse"]);
        }

        if (array_key_exists("Interactions",$param) and $param["Interactions"] !== null) {
            $this->Interactions = new ChemicalProductInfoInteractions();
            $this->Interactions->deserialize($param["Interactions"]);
        }

        if (array_key_exists("Overdose",$param) and $param["Overdose"] !== null) {
            $this->Overdose = new ChemicalProductInfoOverdose();
            $this->Overdose->deserialize($param["Overdose"]);
        }

        if (array_key_exists("ClinicalTrial",$param) and $param["ClinicalTrial"] !== null) {
            $this->ClinicalTrial = new ChemicalProductInfoClinicalTrial();
            $this->ClinicalTrial->deserialize($param["ClinicalTrial"]);
        }

        if (array_key_exists("PharmacologyToxicology",$param) and $param["PharmacologyToxicology"] !== null) {
            $this->PharmacologyToxicology = new ChemicalProductInfoPharmacologyToxicology();
            $this->PharmacologyToxicology->deserialize($param["PharmacologyToxicology"]);
        }

        if (array_key_exists("Pharmacokinetics",$param) and $param["Pharmacokinetics"] !== null) {
            $this->Pharmacokinetics = new ChemicalProductInfoPharmacokinetics();
            $this->Pharmacokinetics->deserialize($param["Pharmacokinetics"]);
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = new ChemicalProductInfoStorage();
            $this->Storage->deserialize($param["Storage"]);
        }

        if (array_key_exists("Packaging",$param) and $param["Packaging"] !== null) {
            $this->Packaging = new ChemicalProductInfoPackaging();
            $this->Packaging->deserialize($param["Packaging"]);
        }

        if (array_key_exists("ValidityPeriod",$param) and $param["ValidityPeriod"] !== null) {
            $this->ValidityPeriod = new ChemicalProductInfoValidityPeriod();
            $this->ValidityPeriod->deserialize($param["ValidityPeriod"]);
        }

        if (array_key_exists("ExecutiveStandards",$param) and $param["ExecutiveStandards"] !== null) {
            $this->ExecutiveStandards = new ChemicalProductInfoExecutiveStandards();
            $this->ExecutiveStandards->deserialize($param["ExecutiveStandards"]);
        }

        if (array_key_exists("Approval",$param) and $param["Approval"] !== null) {
            $this->Approval = new ChemicalProductInfoApproval();
            $this->Approval->deserialize($param["Approval"]);
        }

        if (array_key_exists("Manufacturer",$param) and $param["Manufacturer"] !== null) {
            $this->Manufacturer = new ChemicalProductInfoManufacturer();
            $this->Manufacturer->deserialize($param["Manufacturer"]);
        }
    }
}
