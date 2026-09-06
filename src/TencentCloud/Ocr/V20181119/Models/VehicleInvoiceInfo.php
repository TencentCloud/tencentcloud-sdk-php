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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机动车销售统一发票信息
 *
 * @method string getCarType() 获取<p>车辆类型</p>
 * @method void setCarType(string $CarType) 设置<p>车辆类型</p>
 * @method string getPlateModel() 获取<p>厂牌型号</p>
 * @method void setPlateModel(string $PlateModel) 设置<p>厂牌型号</p>
 * @method string getProduceAddress() 获取<p>产地</p>
 * @method void setProduceAddress(string $ProduceAddress) 设置<p>产地</p>
 * @method string getCertificateNo() 获取<p>合格证号</p>
 * @method void setCertificateNo(string $CertificateNo) 设置<p>合格证号</p>
 * @method string getImportNo() 获取<p>进口证明书号</p>
 * @method void setImportNo(string $ImportNo) 设置<p>进口证明书号</p>
 * @method string getVinNo() 获取<p>LSVCA2NP9HN0xxxxx</p>
 * @method void setVinNo(string $VinNo) 设置<p>LSVCA2NP9HN0xxxxx</p>
 * @method string getPayTaxesNo() 获取<p>完税证书号</p>
 * @method void setPayTaxesNo(string $PayTaxesNo) 设置<p>完税证书号</p>
 * @method string getTonnage() 获取<p>吨位</p>
 * @method void setTonnage(string $Tonnage) 设置<p>吨位</p>
 * @method string getLimitCount() 获取<p>限乘人数</p>
 * @method void setLimitCount(string $LimitCount) 设置<p>限乘人数</p>
 * @method string getEngineNo() 获取<p>发动机号码</p>
 * @method void setEngineNo(string $EngineNo) 设置<p>发动机号码</p>
 * @method string getBizCheckFormNo() 获取<p>商检单号</p>
 * @method void setBizCheckFormNo(string $BizCheckFormNo) 设置<p>商检单号</p>
 * @method string getTaxtationOrgCode() 获取<p>主管税务机关代码</p>
 * @method void setTaxtationOrgCode(string $TaxtationOrgCode) 设置<p>主管税务机关代码</p>
 * @method string getTaxtationOrgName() 获取<p>主管税务机关名称</p>
 * @method void setTaxtationOrgName(string $TaxtationOrgName) 设置<p>主管税务机关名称</p>
 * @method string getMotorTaxRate() 获取<p>税率</p>
 * @method void setMotorTaxRate(string $MotorTaxRate) 设置<p>税率</p>
 * @method string getMotorBankName() 获取<p>银行账号</p>
 * @method void setMotorBankName(string $MotorBankName) 设置<p>银行账号</p>
 * @method string getMotorBankAccount() 获取<p>开户行</p>
 * @method void setMotorBankAccount(string $MotorBankAccount) 设置<p>开户行</p>
 * @method string getSellerAddress() 获取<p>销售地址</p>
 * @method void setSellerAddress(string $SellerAddress) 设置<p>销售地址</p>
 * @method string getSellerTel() 获取<p>销售电话</p>
 * @method void setSellerTel(string $SellerTel) 设置<p>销售电话</p>
 * @method string getBuyerNo() 获取<p>购方身份证</p>
 * @method void setBuyerNo(string $BuyerNo) 设置<p>购方身份证</p>
 */
class VehicleInvoiceInfo extends AbstractModel
{
    /**
     * @var string <p>车辆类型</p>
     */
    public $CarType;

    /**
     * @var string <p>厂牌型号</p>
     */
    public $PlateModel;

    /**
     * @var string <p>产地</p>
     */
    public $ProduceAddress;

    /**
     * @var string <p>合格证号</p>
     */
    public $CertificateNo;

    /**
     * @var string <p>进口证明书号</p>
     */
    public $ImportNo;

    /**
     * @var string <p>LSVCA2NP9HN0xxxxx</p>
     */
    public $VinNo;

    /**
     * @var string <p>完税证书号</p>
     */
    public $PayTaxesNo;

    /**
     * @var string <p>吨位</p>
     */
    public $Tonnage;

    /**
     * @var string <p>限乘人数</p>
     */
    public $LimitCount;

    /**
     * @var string <p>发动机号码</p>
     */
    public $EngineNo;

    /**
     * @var string <p>商检单号</p>
     */
    public $BizCheckFormNo;

    /**
     * @var string <p>主管税务机关代码</p>
     */
    public $TaxtationOrgCode;

    /**
     * @var string <p>主管税务机关名称</p>
     */
    public $TaxtationOrgName;

    /**
     * @var string <p>税率</p>
     */
    public $MotorTaxRate;

    /**
     * @var string <p>银行账号</p>
     */
    public $MotorBankName;

    /**
     * @var string <p>开户行</p>
     */
    public $MotorBankAccount;

    /**
     * @var string <p>销售地址</p>
     */
    public $SellerAddress;

    /**
     * @var string <p>销售电话</p>
     */
    public $SellerTel;

    /**
     * @var string <p>购方身份证</p>
     */
    public $BuyerNo;

    /**
     * @param string $CarType <p>车辆类型</p>
     * @param string $PlateModel <p>厂牌型号</p>
     * @param string $ProduceAddress <p>产地</p>
     * @param string $CertificateNo <p>合格证号</p>
     * @param string $ImportNo <p>进口证明书号</p>
     * @param string $VinNo <p>LSVCA2NP9HN0xxxxx</p>
     * @param string $PayTaxesNo <p>完税证书号</p>
     * @param string $Tonnage <p>吨位</p>
     * @param string $LimitCount <p>限乘人数</p>
     * @param string $EngineNo <p>发动机号码</p>
     * @param string $BizCheckFormNo <p>商检单号</p>
     * @param string $TaxtationOrgCode <p>主管税务机关代码</p>
     * @param string $TaxtationOrgName <p>主管税务机关名称</p>
     * @param string $MotorTaxRate <p>税率</p>
     * @param string $MotorBankName <p>银行账号</p>
     * @param string $MotorBankAccount <p>开户行</p>
     * @param string $SellerAddress <p>销售地址</p>
     * @param string $SellerTel <p>销售电话</p>
     * @param string $BuyerNo <p>购方身份证</p>
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
