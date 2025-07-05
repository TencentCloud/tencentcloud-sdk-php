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
 * 智能用药响应
 *
 * @method string getDrugId() 获取药品ID
 * @method void setDrugId(string $DrugId) 设置药品ID
 * @method integer getSequenceId() 获取序列ID
 * @method void setSequenceId(integer $SequenceId) 设置序列ID
 * @method string getDrugHashId() 获取药品哈希ID
 * @method void setDrugHashId(string $DrugHashId) 设置药品哈希ID
 * @method string getImgUrl() 获取图片URL
 * @method void setImgUrl(string $ImgUrl) 设置图片URL
 * @method string getDrugName() 获取药品名称
 * @method void setDrugName(string $DrugName) 设置药品名称
 * @method string getTradeName() 获取商品名
 * @method void setTradeName(string $TradeName) 设置商品名
 * @method string getEnglishName() 获取英文名称
 * @method void setEnglishName(string $EnglishName) 设置英文名称
 * @method string getEnglishTradeName() 获取英文商品名
 * @method void setEnglishTradeName(string $EnglishTradeName) 设置英文商品名
 * @method string getPinyin() 获取拼音
 * @method void setPinyin(string $Pinyin) 设置拼音
 * @method string getOtherNames() 获取其他名称
 * @method void setOtherNames(string $OtherNames) 设置其他名称
 * @method string getChemicalName() 获取化学名称
 * @method void setChemicalName(string $ChemicalName) 设置化学名称
 * @method string getEnglishChemicalName() 获取英文化学名称
 * @method void setEnglishChemicalName(string $EnglishChemicalName) 设置英文化学名称
 * @method string getApprovalNumber() 获取批准文号
 * @method void setApprovalNumber(string $ApprovalNumber) 设置批准文号
 * @method string getProperty() 获取药品属性标签 多个标签时 | 分隔，如抗菌药|抗生素|贵重药品
 * @method void setProperty(string $Property) 设置药品属性标签 多个标签时 | 分隔，如抗菌药|抗生素|贵重药品
 * @method string getIngredients() 获取药品成分
 * @method void setIngredients(string $Ingredients) 设置药品成分
 * @method string getPhenotypicTrait() 获取药品性状
 * @method void setPhenotypicTrait(string $PhenotypicTrait) 设置药品性状
 * @method string getIndications() 获取适应症
 * @method void setIndications(string $Indications) 设置适应症
 * @method string getSpecifications() 获取规格
 * @method void setSpecifications(string $Specifications) 设置规格
 * @method string getUsageAndDosage() 获取用法用量
 * @method void setUsageAndDosage(string $UsageAndDosage) 设置用法用量
 * @method RecommendedUsage getRecommendedUsage() 获取推荐用法
 * @method void setRecommendedUsage(RecommendedUsage $RecommendedUsage) 设置推荐用法
 * @method string getAdverseReaction() 获取不良反应
 * @method void setAdverseReaction(string $AdverseReaction) 设置不良反应
 * @method string getContraindication() 获取禁忌
 * @method void setContraindication(string $Contraindication) 设置禁忌
 * @method string getAttentions() 获取注意事项
 * @method void setAttentions(string $Attentions) 设置注意事项
 * @method string getOverdose() 获取药物过量
 * @method void setOverdose(string $Overdose) 设置药物过量
 * @method string getPregnantAndLactatingWomen() 获取孕妇及哺乳期妇女用药
 * @method void setPregnantAndLactatingWomen(string $PregnantAndLactatingWomen) 设置孕妇及哺乳期妇女用药
 * @method string getElderlyPatients() 获取老年患者用药
 * @method void setElderlyPatients(string $ElderlyPatients) 设置老年患者用药
 * @method string getPediatricDrugs() 获取儿童用药
 * @method void setPediatricDrugs(string $PediatricDrugs) 设置儿童用药
 * @method string getInteractions() 获取药物相互作用
 * @method void setInteractions(string $Interactions) 设置药物相互作用
 * @method string getClinicalResearch() 获取临床研究
 * @method void setClinicalResearch(string $ClinicalResearch) 设置临床研究
 * @method string getPharmacologyToxicology() 获取药理毒理
 * @method void setPharmacologyToxicology(string $PharmacologyToxicology) 设置药理毒理
 * @method string getPharmacokinetics() 获取药代动力学
 * @method void setPharmacokinetics(string $Pharmacokinetics) 设置药代动力学
 * @method string getWarning() 获取警告
 * @method void setWarning(string $Warning) 设置警告
 * @method string getExpireDate() 获取有效期
 * @method void setExpireDate(string $ExpireDate) 设置有效期
 * @method string getStorage() 获取贮藏
 * @method void setStorage(string $Storage) 设置贮藏
 * @method string getPack() 获取包装
 * @method void setPack(string $Pack) 设置包装
 * @method string getManufacturer() 获取生产企业
 * @method void setManufacturer(string $Manufacturer) 设置生产企业
 * @method string getManufacturerAddress() 获取生产企业地址
 * @method void setManufacturerAddress(string $ManufacturerAddress) 设置生产企业地址
 * @method string getManufacturerPhone() 获取生产企业电话
 * @method void setManufacturerPhone(string $ManufacturerPhone) 设置生产企业电话
 * @method string getManufacturerEmail() 获取生产企业邮箱
 * @method void setManufacturerEmail(string $ManufacturerEmail) 设置生产企业邮箱
 * @method string getManufacturerWebsite() 获取生产企业网站
 * @method void setManufacturerWebsite(string $ManufacturerWebsite) 设置生产企业网站
 * @method string getDocRevisionTime() 获取说明书制定和修订时间
 * @method void setDocRevisionTime(string $DocRevisionTime) 设置说明书制定和修订时间
 * @method string getReferences() 获取参考文献
 * @method void setReferences(string $References) 设置参考文献
 * @method string getDrugDosageForm() 获取剂型
 * @method void setDrugDosageForm(string $DrugDosageForm) 设置剂型
 * @method string getDrugRoute() 获取给药途径
 * @method void setDrugRoute(string $DrugRoute) 设置给药途径
 * @method string getDrugBasicCode() 获取药品本位码
 * @method void setDrugBasicCode(string $DrugBasicCode) 设置药品本位码
 * @method string getOctTag() 获取OTC标签
 * @method void setOctTag(string $OctTag) 设置OTC标签
 */
class SmartDrugInfoResp extends AbstractModel
{
    /**
     * @var string 药品ID
     */
    public $DrugId;

    /**
     * @var integer 序列ID
     */
    public $SequenceId;

    /**
     * @var string 药品哈希ID
     */
    public $DrugHashId;

    /**
     * @var string 图片URL
     */
    public $ImgUrl;

    /**
     * @var string 药品名称
     */
    public $DrugName;

    /**
     * @var string 商品名
     */
    public $TradeName;

    /**
     * @var string 英文名称
     */
    public $EnglishName;

    /**
     * @var string 英文商品名
     */
    public $EnglishTradeName;

    /**
     * @var string 拼音
     */
    public $Pinyin;

    /**
     * @var string 其他名称
     */
    public $OtherNames;

    /**
     * @var string 化学名称
     */
    public $ChemicalName;

    /**
     * @var string 英文化学名称
     */
    public $EnglishChemicalName;

    /**
     * @var string 批准文号
     */
    public $ApprovalNumber;

    /**
     * @var string 药品属性标签 多个标签时 | 分隔，如抗菌药|抗生素|贵重药品
     */
    public $Property;

    /**
     * @var string 药品成分
     */
    public $Ingredients;

    /**
     * @var string 药品性状
     */
    public $PhenotypicTrait;

    /**
     * @var string 适应症
     */
    public $Indications;

    /**
     * @var string 规格
     */
    public $Specifications;

    /**
     * @var string 用法用量
     */
    public $UsageAndDosage;

    /**
     * @var RecommendedUsage 推荐用法
     */
    public $RecommendedUsage;

    /**
     * @var string 不良反应
     */
    public $AdverseReaction;

    /**
     * @var string 禁忌
     */
    public $Contraindication;

    /**
     * @var string 注意事项
     */
    public $Attentions;

    /**
     * @var string 药物过量
     */
    public $Overdose;

    /**
     * @var string 孕妇及哺乳期妇女用药
     */
    public $PregnantAndLactatingWomen;

    /**
     * @var string 老年患者用药
     */
    public $ElderlyPatients;

    /**
     * @var string 儿童用药
     */
    public $PediatricDrugs;

    /**
     * @var string 药物相互作用
     */
    public $Interactions;

    /**
     * @var string 临床研究
     */
    public $ClinicalResearch;

    /**
     * @var string 药理毒理
     */
    public $PharmacologyToxicology;

    /**
     * @var string 药代动力学
     */
    public $Pharmacokinetics;

    /**
     * @var string 警告
     */
    public $Warning;

    /**
     * @var string 有效期
     */
    public $ExpireDate;

    /**
     * @var string 贮藏
     */
    public $Storage;

    /**
     * @var string 包装
     */
    public $Pack;

    /**
     * @var string 生产企业
     */
    public $Manufacturer;

    /**
     * @var string 生产企业地址
     */
    public $ManufacturerAddress;

    /**
     * @var string 生产企业电话
     */
    public $ManufacturerPhone;

    /**
     * @var string 生产企业邮箱
     */
    public $ManufacturerEmail;

    /**
     * @var string 生产企业网站
     */
    public $ManufacturerWebsite;

    /**
     * @var string 说明书制定和修订时间
     */
    public $DocRevisionTime;

    /**
     * @var string 参考文献
     */
    public $References;

    /**
     * @var string 剂型
     */
    public $DrugDosageForm;

    /**
     * @var string 给药途径
     */
    public $DrugRoute;

    /**
     * @var string 药品本位码
     */
    public $DrugBasicCode;

    /**
     * @var string OTC标签
     */
    public $OctTag;

    /**
     * @param string $DrugId 药品ID
     * @param integer $SequenceId 序列ID
     * @param string $DrugHashId 药品哈希ID
     * @param string $ImgUrl 图片URL
     * @param string $DrugName 药品名称
     * @param string $TradeName 商品名
     * @param string $EnglishName 英文名称
     * @param string $EnglishTradeName 英文商品名
     * @param string $Pinyin 拼音
     * @param string $OtherNames 其他名称
     * @param string $ChemicalName 化学名称
     * @param string $EnglishChemicalName 英文化学名称
     * @param string $ApprovalNumber 批准文号
     * @param string $Property 药品属性标签 多个标签时 | 分隔，如抗菌药|抗生素|贵重药品
     * @param string $Ingredients 药品成分
     * @param string $PhenotypicTrait 药品性状
     * @param string $Indications 适应症
     * @param string $Specifications 规格
     * @param string $UsageAndDosage 用法用量
     * @param RecommendedUsage $RecommendedUsage 推荐用法
     * @param string $AdverseReaction 不良反应
     * @param string $Contraindication 禁忌
     * @param string $Attentions 注意事项
     * @param string $Overdose 药物过量
     * @param string $PregnantAndLactatingWomen 孕妇及哺乳期妇女用药
     * @param string $ElderlyPatients 老年患者用药
     * @param string $PediatricDrugs 儿童用药
     * @param string $Interactions 药物相互作用
     * @param string $ClinicalResearch 临床研究
     * @param string $PharmacologyToxicology 药理毒理
     * @param string $Pharmacokinetics 药代动力学
     * @param string $Warning 警告
     * @param string $ExpireDate 有效期
     * @param string $Storage 贮藏
     * @param string $Pack 包装
     * @param string $Manufacturer 生产企业
     * @param string $ManufacturerAddress 生产企业地址
     * @param string $ManufacturerPhone 生产企业电话
     * @param string $ManufacturerEmail 生产企业邮箱
     * @param string $ManufacturerWebsite 生产企业网站
     * @param string $DocRevisionTime 说明书制定和修订时间
     * @param string $References 参考文献
     * @param string $DrugDosageForm 剂型
     * @param string $DrugRoute 给药途径
     * @param string $DrugBasicCode 药品本位码
     * @param string $OctTag OTC标签
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
        if (array_key_exists("DrugId",$param) and $param["DrugId"] !== null) {
            $this->DrugId = $param["DrugId"];
        }

        if (array_key_exists("SequenceId",$param) and $param["SequenceId"] !== null) {
            $this->SequenceId = $param["SequenceId"];
        }

        if (array_key_exists("DrugHashId",$param) and $param["DrugHashId"] !== null) {
            $this->DrugHashId = $param["DrugHashId"];
        }

        if (array_key_exists("ImgUrl",$param) and $param["ImgUrl"] !== null) {
            $this->ImgUrl = $param["ImgUrl"];
        }

        if (array_key_exists("DrugName",$param) and $param["DrugName"] !== null) {
            $this->DrugName = $param["DrugName"];
        }

        if (array_key_exists("TradeName",$param) and $param["TradeName"] !== null) {
            $this->TradeName = $param["TradeName"];
        }

        if (array_key_exists("EnglishName",$param) and $param["EnglishName"] !== null) {
            $this->EnglishName = $param["EnglishName"];
        }

        if (array_key_exists("EnglishTradeName",$param) and $param["EnglishTradeName"] !== null) {
            $this->EnglishTradeName = $param["EnglishTradeName"];
        }

        if (array_key_exists("Pinyin",$param) and $param["Pinyin"] !== null) {
            $this->Pinyin = $param["Pinyin"];
        }

        if (array_key_exists("OtherNames",$param) and $param["OtherNames"] !== null) {
            $this->OtherNames = $param["OtherNames"];
        }

        if (array_key_exists("ChemicalName",$param) and $param["ChemicalName"] !== null) {
            $this->ChemicalName = $param["ChemicalName"];
        }

        if (array_key_exists("EnglishChemicalName",$param) and $param["EnglishChemicalName"] !== null) {
            $this->EnglishChemicalName = $param["EnglishChemicalName"];
        }

        if (array_key_exists("ApprovalNumber",$param) and $param["ApprovalNumber"] !== null) {
            $this->ApprovalNumber = $param["ApprovalNumber"];
        }

        if (array_key_exists("Property",$param) and $param["Property"] !== null) {
            $this->Property = $param["Property"];
        }

        if (array_key_exists("Ingredients",$param) and $param["Ingredients"] !== null) {
            $this->Ingredients = $param["Ingredients"];
        }

        if (array_key_exists("PhenotypicTrait",$param) and $param["PhenotypicTrait"] !== null) {
            $this->PhenotypicTrait = $param["PhenotypicTrait"];
        }

        if (array_key_exists("Indications",$param) and $param["Indications"] !== null) {
            $this->Indications = $param["Indications"];
        }

        if (array_key_exists("Specifications",$param) and $param["Specifications"] !== null) {
            $this->Specifications = $param["Specifications"];
        }

        if (array_key_exists("UsageAndDosage",$param) and $param["UsageAndDosage"] !== null) {
            $this->UsageAndDosage = $param["UsageAndDosage"];
        }

        if (array_key_exists("RecommendedUsage",$param) and $param["RecommendedUsage"] !== null) {
            $this->RecommendedUsage = new RecommendedUsage();
            $this->RecommendedUsage->deserialize($param["RecommendedUsage"]);
        }

        if (array_key_exists("AdverseReaction",$param) and $param["AdverseReaction"] !== null) {
            $this->AdverseReaction = $param["AdverseReaction"];
        }

        if (array_key_exists("Contraindication",$param) and $param["Contraindication"] !== null) {
            $this->Contraindication = $param["Contraindication"];
        }

        if (array_key_exists("Attentions",$param) and $param["Attentions"] !== null) {
            $this->Attentions = $param["Attentions"];
        }

        if (array_key_exists("Overdose",$param) and $param["Overdose"] !== null) {
            $this->Overdose = $param["Overdose"];
        }

        if (array_key_exists("PregnantAndLactatingWomen",$param) and $param["PregnantAndLactatingWomen"] !== null) {
            $this->PregnantAndLactatingWomen = $param["PregnantAndLactatingWomen"];
        }

        if (array_key_exists("ElderlyPatients",$param) and $param["ElderlyPatients"] !== null) {
            $this->ElderlyPatients = $param["ElderlyPatients"];
        }

        if (array_key_exists("PediatricDrugs",$param) and $param["PediatricDrugs"] !== null) {
            $this->PediatricDrugs = $param["PediatricDrugs"];
        }

        if (array_key_exists("Interactions",$param) and $param["Interactions"] !== null) {
            $this->Interactions = $param["Interactions"];
        }

        if (array_key_exists("ClinicalResearch",$param) and $param["ClinicalResearch"] !== null) {
            $this->ClinicalResearch = $param["ClinicalResearch"];
        }

        if (array_key_exists("PharmacologyToxicology",$param) and $param["PharmacologyToxicology"] !== null) {
            $this->PharmacologyToxicology = $param["PharmacologyToxicology"];
        }

        if (array_key_exists("Pharmacokinetics",$param) and $param["Pharmacokinetics"] !== null) {
            $this->Pharmacokinetics = $param["Pharmacokinetics"];
        }

        if (array_key_exists("Warning",$param) and $param["Warning"] !== null) {
            $this->Warning = $param["Warning"];
        }

        if (array_key_exists("ExpireDate",$param) and $param["ExpireDate"] !== null) {
            $this->ExpireDate = $param["ExpireDate"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("Pack",$param) and $param["Pack"] !== null) {
            $this->Pack = $param["Pack"];
        }

        if (array_key_exists("Manufacturer",$param) and $param["Manufacturer"] !== null) {
            $this->Manufacturer = $param["Manufacturer"];
        }

        if (array_key_exists("ManufacturerAddress",$param) and $param["ManufacturerAddress"] !== null) {
            $this->ManufacturerAddress = $param["ManufacturerAddress"];
        }

        if (array_key_exists("ManufacturerPhone",$param) and $param["ManufacturerPhone"] !== null) {
            $this->ManufacturerPhone = $param["ManufacturerPhone"];
        }

        if (array_key_exists("ManufacturerEmail",$param) and $param["ManufacturerEmail"] !== null) {
            $this->ManufacturerEmail = $param["ManufacturerEmail"];
        }

        if (array_key_exists("ManufacturerWebsite",$param) and $param["ManufacturerWebsite"] !== null) {
            $this->ManufacturerWebsite = $param["ManufacturerWebsite"];
        }

        if (array_key_exists("DocRevisionTime",$param) and $param["DocRevisionTime"] !== null) {
            $this->DocRevisionTime = $param["DocRevisionTime"];
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = $param["References"];
        }

        if (array_key_exists("DrugDosageForm",$param) and $param["DrugDosageForm"] !== null) {
            $this->DrugDosageForm = $param["DrugDosageForm"];
        }

        if (array_key_exists("DrugRoute",$param) and $param["DrugRoute"] !== null) {
            $this->DrugRoute = $param["DrugRoute"];
        }

        if (array_key_exists("DrugBasicCode",$param) and $param["DrugBasicCode"] !== null) {
            $this->DrugBasicCode = $param["DrugBasicCode"];
        }

        if (array_key_exists("OctTag",$param) and $param["OctTag"] !== null) {
            $this->OctTag = $param["OctTag"];
        }
    }
}
