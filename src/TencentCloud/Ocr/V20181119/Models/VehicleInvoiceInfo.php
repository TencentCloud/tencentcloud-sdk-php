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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机动车销售统一发票信息
 *
 * @method string getCarType() 获取车辆类型
 * @method void setCarType(string $CarType) 设置车辆类型
 * @method string getPlateModel() 获取厂牌型号
 * @method void setPlateModel(string $PlateModel) 设置厂牌型号
 * @method string getProduceAddress() 获取产地
 * @method void setProduceAddress(string $ProduceAddress) 设置产地
 * @method string getCertificateNo() 获取合格证号
 * @method void setCertificateNo(string $CertificateNo) 设置合格证号
 * @method string getImportNo() 获取进口证明书号
 * @method void setImportNo(string $ImportNo) 设置进口证明书号
 * @method string getVinNo() 获取LSVCA2NP9HN0xxxxx
 * @method void setVinNo(string $VinNo) 设置LSVCA2NP9HN0xxxxx
 * @method string getPayTaxesNo() 获取完税证书号
 * @method void setPayTaxesNo(string $PayTaxesNo) 设置完税证书号
 * @method string getTonnage() 获取吨位
 * @method void setTonnage(string $Tonnage) 设置吨位
 * @method string getLimitCount() 获取限乘人数
 * @method void setLimitCount(string $LimitCount) 设置限乘人数
 * @method string getEngineNo() 获取发动机号码
 * @method void setEngineNo(string $EngineNo) 设置发动机号码
 * @method string getBizCheckFormNo() 获取商检单号
 * @method void setBizCheckFormNo(string $BizCheckFormNo) 设置商检单号
 * @method string getTaxtationOrgCode() 获取主管税务机关代码
 * @method void setTaxtationOrgCode(string $TaxtationOrgCode) 设置主管税务机关代码
 * @method string getTaxtationOrgName() 获取主管税务机关名称
 * @method void setTaxtationOrgName(string $TaxtationOrgName) 设置主管税务机关名称
 * @method string getMotorTaxRate() 获取税率
 * @method void setMotorTaxRate(string $MotorTaxRate) 设置税率
 * @method string getMotorBankName() 获取开户行
 * @method void setMotorBankName(string $MotorBankName) 设置开户行
 * @method string getMotorBankAccount() 获取账号
 * @method void setMotorBankAccount(string $MotorBankAccount) 设置账号
 * @method string getSellerAddress() 获取销售地址
 * @method void setSellerAddress(string $SellerAddress) 设置销售地址
 * @method string getSellerTel() 获取销售电话
 * @method void setSellerTel(string $SellerTel) 设置销售电话
 * @method string getBuyerNo() 获取购方身份证
 * @method void setBuyerNo(string $BuyerNo) 设置购方身份证
 */
class VehicleInvoiceInfo extends AbstractModel
{
    /**
     * @var string 车辆类型
     */
    public $CarType;

    /**
     * @var string 厂牌型号
     */
    public $PlateModel;

    /**
     * @var string 产地
     */
    public $ProduceAddress;

    /**
     * @var string 合格证号
     */
    public $CertificateNo;

    /**
     * @var string 进口证明书号
     */
    public $ImportNo;

    /**
     * @var string LSVCA2NP9HN0xxxxx
     */
    public $VinNo;

    /**
     * @var string 完税证书号
     */
    public $PayTaxesNo;

    /**
     * @var string 吨位
     */
    public $Tonnage;

    /**
     * @var string 限乘人数
     */
    public $LimitCount;

    /**
     * @var string 发动机号码
     */
    public $EngineNo;

    /**
     * @var string 商检单号
     */
    public $BizCheckFormNo;

    /**
     * @var string 主管税务机关代码
     */
    public $TaxtationOrgCode;

    /**
     * @var string 主管税务机关名称
     */
    public $TaxtationOrgName;

    /**
     * @var string 税率
     */
    public $MotorTaxRate;

    /**
     * @var string 开户行
     */
    public $MotorBankName;

    /**
     * @var string 账号
     */
    public $MotorBankAccount;

    /**
     * @var string 销售地址
     */
    public $SellerAddress;

    /**
     * @var string 销售电话
     */
    public $SellerTel;

    /**
     * @var string 购方身份证
     */
    public $BuyerNo;

    /**
     * @param string $CarType 车辆类型
     * @param string $PlateModel 厂牌型号
     * @param string $ProduceAddress 产地
     * @param string $CertificateNo 合格证号
     * @param string $ImportNo 进口证明书号
     * @param string $VinNo LSVCA2NP9HN0xxxxx
     * @param string $PayTaxesNo 完税证书号
     * @param string $Tonnage 吨位
     * @param string $LimitCount 限乘人数
     * @param string $EngineNo 发动机号码
     * @param string $BizCheckFormNo 商检单号
     * @param string $TaxtationOrgCode 主管税务机关代码
     * @param string $TaxtationOrgName 主管税务机关名称
     * @param string $MotorTaxRate 税率
     * @param string $MotorBankName 开户行
     * @param string $MotorBankAccount 账号
     * @param string $SellerAddress 销售地址
     * @param string $SellerTel 销售电话
     * @param string $BuyerNo 购方身份证
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
        if (array_key_exists("CarType",$param) and $param["CarType"] !== null) {
            $this->CarType = $param["CarType"];
        }

        if (array_key_exists("PlateModel",$param) and $param["PlateModel"] !== null) {
            $this->PlateModel = $param["PlateModel"];
        }

        if (array_key_exists("ProduceAddress",$param) and $param["ProduceAddress"] !== null) {
            $this->ProduceAddress = $param["ProduceAddress"];
        }

        if (array_key_exists("CertificateNo",$param) and $param["CertificateNo"] !== null) {
            $this->CertificateNo = $param["CertificateNo"];
        }

        if (array_key_exists("ImportNo",$param) and $param["ImportNo"] !== null) {
            $this->ImportNo = $param["ImportNo"];
        }

        if (array_key_exists("VinNo",$param) and $param["VinNo"] !== null) {
            $this->VinNo = $param["VinNo"];
        }

        if (array_key_exists("PayTaxesNo",$param) and $param["PayTaxesNo"] !== null) {
            $this->PayTaxesNo = $param["PayTaxesNo"];
        }

        if (array_key_exists("Tonnage",$param) and $param["Tonnage"] !== null) {
            $this->Tonnage = $param["Tonnage"];
        }

        if (array_key_exists("LimitCount",$param) and $param["LimitCount"] !== null) {
            $this->LimitCount = $param["LimitCount"];
        }

        if (array_key_exists("EngineNo",$param) and $param["EngineNo"] !== null) {
            $this->EngineNo = $param["EngineNo"];
        }

        if (array_key_exists("BizCheckFormNo",$param) and $param["BizCheckFormNo"] !== null) {
            $this->BizCheckFormNo = $param["BizCheckFormNo"];
        }

        if (array_key_exists("TaxtationOrgCode",$param) and $param["TaxtationOrgCode"] !== null) {
            $this->TaxtationOrgCode = $param["TaxtationOrgCode"];
        }

        if (array_key_exists("TaxtationOrgName",$param) and $param["TaxtationOrgName"] !== null) {
            $this->TaxtationOrgName = $param["TaxtationOrgName"];
        }

        if (array_key_exists("MotorTaxRate",$param) and $param["MotorTaxRate"] !== null) {
            $this->MotorTaxRate = $param["MotorTaxRate"];
        }

        if (array_key_exists("MotorBankName",$param) and $param["MotorBankName"] !== null) {
            $this->MotorBankName = $param["MotorBankName"];
        }

        if (array_key_exists("MotorBankAccount",$param) and $param["MotorBankAccount"] !== null) {
            $this->MotorBankAccount = $param["MotorBankAccount"];
        }

        if (array_key_exists("SellerAddress",$param) and $param["SellerAddress"] !== null) {
            $this->SellerAddress = $param["SellerAddress"];
        }

        if (array_key_exists("SellerTel",$param) and $param["SellerTel"] !== null) {
            $this->SellerTel = $param["SellerTel"];
        }

        if (array_key_exists("BuyerNo",$param) and $param["BuyerNo"] !== null) {
            $this->BuyerNo = $param["BuyerNo"];
        }
    }
}
