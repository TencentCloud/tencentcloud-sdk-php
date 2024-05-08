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
 * 预防用生物制品说明书
 *
 * @method BiologicalProductInfoName getName() 获取药品名称，包括通用名和商品名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(BiologicalProductInfoName $Name) 设置药品名称，包括通用名和商品名
注意：此字段可能返回 null，表示取不到有效值。
 * @method BiologicalProductInfoIngredientAndAppearance getIngredientAndAppearance() 获取成份和性状
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIngredientAndAppearance(BiologicalProductInfoIngredientAndAppearance $IngredientAndAppearance) 设置成份和性状
注意：此字段可能返回 null，表示取不到有效值。
 * @method BiologicalProductInfoVaccinationTarget getVaccinationTarget() 获取接种对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVaccinationTarget(BiologicalProductInfoVaccinationTarget $VaccinationTarget) 设置接种对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method BiologicalProductInfoIndications getIndications() 获取作用与用途
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndications(BiologicalProductInfoIndications $Indications) 设置作用与用途
注意：此字段可能返回 null，表示取不到有效值。
 * @method BiologicalProductInfoBrochure getBrochure() 获取规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBrochure(BiologicalProductInfoBrochure $Brochure) 设置规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method BiologicalProductInfoDosage getDosage() 获取免疫程序和剂量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDosage(BiologicalProductInfoDosage $Dosage) 设置免疫程序和剂量
注意：此字段可能返回 null，表示取不到有效值。
 * @method BiologicalProductInfoAdverseReaction getAdverseReaction() 获取不良反应
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdverseReaction(BiologicalProductInfoAdverseReaction $AdverseReaction) 设置不良反应
注意：此字段可能返回 null，表示取不到有效值。
 * @method BiologicalProductInfoContraindications getContraindications() 获取禁忌情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContraindications(BiologicalProductInfoContraindications $Contraindications) 设置禁忌情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method BiologicalProductInfoPrecautions getPrecautions() 获取注意事项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrecautions(BiologicalProductInfoPrecautions $Precautions) 设置注意事项
注意：此字段可能返回 null，表示取不到有效值。
 * @method BiologicalProductInfoStorage getStorage() 获取储存条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorage(BiologicalProductInfoStorage $Storage) 设置储存条件
注意：此字段可能返回 null，表示取不到有效值。
 * @method BiologicalProductInfoPackaging getPackaging() 获取包装信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackaging(BiologicalProductInfoPackaging $Packaging) 设置包装信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method BiologicalProductInfoValidityPeriod getValidityPeriod() 获取有效期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValidityPeriod(BiologicalProductInfoValidityPeriod $ValidityPeriod) 设置有效期
注意：此字段可能返回 null，表示取不到有效值。
 * @method BiologicalProductInfoExecutiveStandards getExecutiveStandards() 获取执行标准
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutiveStandards(BiologicalProductInfoExecutiveStandards $ExecutiveStandards) 设置执行标准
注意：此字段可能返回 null，表示取不到有效值。
 * @method BiologicalProductInfoApproval getApproval() 获取批准文号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproval(BiologicalProductInfoApproval $Approval) 设置批准文号
注意：此字段可能返回 null，表示取不到有效值。
 * @method BiologicalProductInfoManufacturer getManufacturer() 获取生产企业名称和地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManufacturer(BiologicalProductInfoManufacturer $Manufacturer) 设置生产企业名称和地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class BiologicalProductInfo extends AbstractModel
{
    /**
     * @var BiologicalProductInfoName 药品名称，包括通用名和商品名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var BiologicalProductInfoIngredientAndAppearance 成份和性状
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IngredientAndAppearance;

    /**
     * @var BiologicalProductInfoVaccinationTarget 接种对象
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VaccinationTarget;

    /**
     * @var BiologicalProductInfoIndications 作用与用途
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Indications;

    /**
     * @var BiologicalProductInfoBrochure 规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Brochure;

    /**
     * @var BiologicalProductInfoDosage 免疫程序和剂量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Dosage;

    /**
     * @var BiologicalProductInfoAdverseReaction 不良反应
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdverseReaction;

    /**
     * @var BiologicalProductInfoContraindications 禁忌情况
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Contraindications;

    /**
     * @var BiologicalProductInfoPrecautions 注意事项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Precautions;

    /**
     * @var BiologicalProductInfoStorage 储存条件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Storage;

    /**
     * @var BiologicalProductInfoPackaging 包装信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Packaging;

    /**
     * @var BiologicalProductInfoValidityPeriod 有效期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValidityPeriod;

    /**
     * @var BiologicalProductInfoExecutiveStandards 执行标准
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutiveStandards;

    /**
     * @var BiologicalProductInfoApproval 批准文号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Approval;

    /**
     * @var BiologicalProductInfoManufacturer 生产企业名称和地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Manufacturer;

    /**
     * @param BiologicalProductInfoName $Name 药品名称，包括通用名和商品名
注意：此字段可能返回 null，表示取不到有效值。
     * @param BiologicalProductInfoIngredientAndAppearance $IngredientAndAppearance 成份和性状
注意：此字段可能返回 null，表示取不到有效值。
     * @param BiologicalProductInfoVaccinationTarget $VaccinationTarget 接种对象
注意：此字段可能返回 null，表示取不到有效值。
     * @param BiologicalProductInfoIndications $Indications 作用与用途
注意：此字段可能返回 null，表示取不到有效值。
     * @param BiologicalProductInfoBrochure $Brochure 规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param BiologicalProductInfoDosage $Dosage 免疫程序和剂量
注意：此字段可能返回 null，表示取不到有效值。
     * @param BiologicalProductInfoAdverseReaction $AdverseReaction 不良反应
注意：此字段可能返回 null，表示取不到有效值。
     * @param BiologicalProductInfoContraindications $Contraindications 禁忌情况
注意：此字段可能返回 null，表示取不到有效值。
     * @param BiologicalProductInfoPrecautions $Precautions 注意事项
注意：此字段可能返回 null，表示取不到有效值。
     * @param BiologicalProductInfoStorage $Storage 储存条件
注意：此字段可能返回 null，表示取不到有效值。
     * @param BiologicalProductInfoPackaging $Packaging 包装信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param BiologicalProductInfoValidityPeriod $ValidityPeriod 有效期
注意：此字段可能返回 null，表示取不到有效值。
     * @param BiologicalProductInfoExecutiveStandards $ExecutiveStandards 执行标准
注意：此字段可能返回 null，表示取不到有效值。
     * @param BiologicalProductInfoApproval $Approval 批准文号
注意：此字段可能返回 null，表示取不到有效值。
     * @param BiologicalProductInfoManufacturer $Manufacturer 生产企业名称和地址
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
            $this->Name = new BiologicalProductInfoName();
            $this->Name->deserialize($param["Name"]);
        }

        if (array_key_exists("IngredientAndAppearance",$param) and $param["IngredientAndAppearance"] !== null) {
            $this->IngredientAndAppearance = new BiologicalProductInfoIngredientAndAppearance();
            $this->IngredientAndAppearance->deserialize($param["IngredientAndAppearance"]);
        }

        if (array_key_exists("VaccinationTarget",$param) and $param["VaccinationTarget"] !== null) {
            $this->VaccinationTarget = new BiologicalProductInfoVaccinationTarget();
            $this->VaccinationTarget->deserialize($param["VaccinationTarget"]);
        }

        if (array_key_exists("Indications",$param) and $param["Indications"] !== null) {
            $this->Indications = new BiologicalProductInfoIndications();
            $this->Indications->deserialize($param["Indications"]);
        }

        if (array_key_exists("Brochure",$param) and $param["Brochure"] !== null) {
            $this->Brochure = new BiologicalProductInfoBrochure();
            $this->Brochure->deserialize($param["Brochure"]);
        }

        if (array_key_exists("Dosage",$param) and $param["Dosage"] !== null) {
            $this->Dosage = new BiologicalProductInfoDosage();
            $this->Dosage->deserialize($param["Dosage"]);
        }

        if (array_key_exists("AdverseReaction",$param) and $param["AdverseReaction"] !== null) {
            $this->AdverseReaction = new BiologicalProductInfoAdverseReaction();
            $this->AdverseReaction->deserialize($param["AdverseReaction"]);
        }

        if (array_key_exists("Contraindications",$param) and $param["Contraindications"] !== null) {
            $this->Contraindications = new BiologicalProductInfoContraindications();
            $this->Contraindications->deserialize($param["Contraindications"]);
        }

        if (array_key_exists("Precautions",$param) and $param["Precautions"] !== null) {
            $this->Precautions = new BiologicalProductInfoPrecautions();
            $this->Precautions->deserialize($param["Precautions"]);
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = new BiologicalProductInfoStorage();
            $this->Storage->deserialize($param["Storage"]);
        }

        if (array_key_exists("Packaging",$param) and $param["Packaging"] !== null) {
            $this->Packaging = new BiologicalProductInfoPackaging();
            $this->Packaging->deserialize($param["Packaging"]);
        }

        if (array_key_exists("ValidityPeriod",$param) and $param["ValidityPeriod"] !== null) {
            $this->ValidityPeriod = new BiologicalProductInfoValidityPeriod();
            $this->ValidityPeriod->deserialize($param["ValidityPeriod"]);
        }

        if (array_key_exists("ExecutiveStandards",$param) and $param["ExecutiveStandards"] !== null) {
            $this->ExecutiveStandards = new BiologicalProductInfoExecutiveStandards();
            $this->ExecutiveStandards->deserialize($param["ExecutiveStandards"]);
        }

        if (array_key_exists("Approval",$param) and $param["Approval"] !== null) {
            $this->Approval = new BiologicalProductInfoApproval();
            $this->Approval->deserialize($param["Approval"]);
        }

        if (array_key_exists("Manufacturer",$param) and $param["Manufacturer"] !== null) {
            $this->Manufacturer = new BiologicalProductInfoManufacturer();
            $this->Manufacturer->deserialize($param["Manufacturer"]);
        }
    }
}
