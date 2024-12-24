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
 * 药品信息
 *
 * @method string getDrugOrgId() 获取医院药品id
 * @method void setDrugOrgId(string $DrugOrgId) 设置医院药品id
 * @method string getDrugName() 获取医院药品通用名
 * @method void setDrugName(string $DrugName) 设置医院药品通用名
 * @method string getDrugCommodityName() 获取医院药品商品名
 * @method void setDrugCommodityName(string $DrugCommodityName) 设置医院药品商品名
 * @method string getSpecifications() 获取医院药品规格
 * @method void setSpecifications(string $Specifications) 设置医院药品规格
 * @method string getApprovalNumber() 获取医院药品批准文号
 * @method void setApprovalNumber(string $ApprovalNumber) 设置医院药品批准文号
 * @method string getManufacturer() 获取生产厂商
 * @method void setManufacturer(string $Manufacturer) 设置生产厂商
 * @method string getDosageForm() 获取剂型
 * @method void setDosageForm(string $DosageForm) 设置剂型
 * @method integer getUnuse() 获取使用状态 0:启用 1:停用
 * @method void setUnuse(integer $Unuse) 设置使用状态 0:启用 1:停用
 * @method string getDosageFormCode() 获取剂型编码
 * @method void setDosageFormCode(string $DosageFormCode) 设置剂型编码
 * @method string getDefinedDailyDose() 获取抗菌药DDD值
 * @method void setDefinedDailyDose(string $DefinedDailyDose) 设置抗菌药DDD值
 * @method string getAmount() 获取药品单价
 * @method void setAmount(string $Amount) 设置药品单价
 * @method string getYbCode() 获取国家医保编码
 * @method void setYbCode(string $YbCode) 设置国家医保编码
 * @method string getDrugBasicCode() 获取药品本位码
 * @method void setDrugBasicCode(string $DrugBasicCode) 设置药品本位码
 * @method DurgPropertyInfo getPropertyInfo() 获取药品属性
 * @method void setPropertyInfo(DurgPropertyInfo $PropertyInfo) 设置药品属性
 */
class Drug extends AbstractModel
{
    /**
     * @var string 医院药品id
     */
    public $DrugOrgId;

    /**
     * @var string 医院药品通用名
     */
    public $DrugName;

    /**
     * @var string 医院药品商品名
     */
    public $DrugCommodityName;

    /**
     * @var string 医院药品规格
     */
    public $Specifications;

    /**
     * @var string 医院药品批准文号
     */
    public $ApprovalNumber;

    /**
     * @var string 生产厂商
     */
    public $Manufacturer;

    /**
     * @var string 剂型
     */
    public $DosageForm;

    /**
     * @var integer 使用状态 0:启用 1:停用
     */
    public $Unuse;

    /**
     * @var string 剂型编码
     */
    public $DosageFormCode;

    /**
     * @var string 抗菌药DDD值
     */
    public $DefinedDailyDose;

    /**
     * @var string 药品单价
     */
    public $Amount;

    /**
     * @var string 国家医保编码
     */
    public $YbCode;

    /**
     * @var string 药品本位码
     */
    public $DrugBasicCode;

    /**
     * @var DurgPropertyInfo 药品属性
     */
    public $PropertyInfo;

    /**
     * @param string $DrugOrgId 医院药品id
     * @param string $DrugName 医院药品通用名
     * @param string $DrugCommodityName 医院药品商品名
     * @param string $Specifications 医院药品规格
     * @param string $ApprovalNumber 医院药品批准文号
     * @param string $Manufacturer 生产厂商
     * @param string $DosageForm 剂型
     * @param integer $Unuse 使用状态 0:启用 1:停用
     * @param string $DosageFormCode 剂型编码
     * @param string $DefinedDailyDose 抗菌药DDD值
     * @param string $Amount 药品单价
     * @param string $YbCode 国家医保编码
     * @param string $DrugBasicCode 药品本位码
     * @param DurgPropertyInfo $PropertyInfo 药品属性
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
        if (array_key_exists("DrugOrgId",$param) and $param["DrugOrgId"] !== null) {
            $this->DrugOrgId = $param["DrugOrgId"];
        }

        if (array_key_exists("DrugName",$param) and $param["DrugName"] !== null) {
            $this->DrugName = $param["DrugName"];
        }

        if (array_key_exists("DrugCommodityName",$param) and $param["DrugCommodityName"] !== null) {
            $this->DrugCommodityName = $param["DrugCommodityName"];
        }

        if (array_key_exists("Specifications",$param) and $param["Specifications"] !== null) {
            $this->Specifications = $param["Specifications"];
        }

        if (array_key_exists("ApprovalNumber",$param) and $param["ApprovalNumber"] !== null) {
            $this->ApprovalNumber = $param["ApprovalNumber"];
        }

        if (array_key_exists("Manufacturer",$param) and $param["Manufacturer"] !== null) {
            $this->Manufacturer = $param["Manufacturer"];
        }

        if (array_key_exists("DosageForm",$param) and $param["DosageForm"] !== null) {
            $this->DosageForm = $param["DosageForm"];
        }

        if (array_key_exists("Unuse",$param) and $param["Unuse"] !== null) {
            $this->Unuse = $param["Unuse"];
        }

        if (array_key_exists("DosageFormCode",$param) and $param["DosageFormCode"] !== null) {
            $this->DosageFormCode = $param["DosageFormCode"];
        }

        if (array_key_exists("DefinedDailyDose",$param) and $param["DefinedDailyDose"] !== null) {
            $this->DefinedDailyDose = $param["DefinedDailyDose"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }

        if (array_key_exists("YbCode",$param) and $param["YbCode"] !== null) {
            $this->YbCode = $param["YbCode"];
        }

        if (array_key_exists("DrugBasicCode",$param) and $param["DrugBasicCode"] !== null) {
            $this->DrugBasicCode = $param["DrugBasicCode"];
        }

        if (array_key_exists("PropertyInfo",$param) and $param["PropertyInfo"] !== null) {
            $this->PropertyInfo = new DurgPropertyInfo();
            $this->PropertyInfo->deserialize($param["PropertyInfo"]);
        }
    }
}
