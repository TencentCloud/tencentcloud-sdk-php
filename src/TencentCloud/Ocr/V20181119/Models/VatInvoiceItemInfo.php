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
 * 增值税发票项目信息
 *
 * @method string getName() 获取项目名称
 * @method void setName(string $Name) 设置项目名称
 * @method string getSpecification() 获取规格型号
 * @method void setSpecification(string $Specification) 设置规格型号
 * @method string getUnit() 获取单位
 * @method void setUnit(string $Unit) 设置单位
 * @method string getQuantity() 获取数量
 * @method void setQuantity(string $Quantity) 设置数量
 * @method string getPrice() 获取单价
 * @method void setPrice(string $Price) 设置单价
 * @method string getTotal() 获取金额
 * @method void setTotal(string $Total) 设置金额
 * @method string getTaxRate() 获取税率
 * @method void setTaxRate(string $TaxRate) 设置税率
 * @method string getTax() 获取税额
 * @method void setTax(string $Tax) 设置税额
 * @method string getDateStart() 获取通行日期起
 * @method void setDateStart(string $DateStart) 设置通行日期起
 * @method string getDateEnd() 获取通行日期止
 * @method void setDateEnd(string $DateEnd) 设置通行日期止
 * @method string getLicensePlate() 获取车牌号
 * @method void setLicensePlate(string $LicensePlate) 设置车牌号
 * @method string getVehicleType() 获取车辆类型
 * @method void setVehicleType(string $VehicleType) 设置车辆类型
 */
class VatInvoiceItemInfo extends AbstractModel
{
    /**
     * @var string 项目名称
     */
    public $Name;

    /**
     * @var string 规格型号
     */
    public $Specification;

    /**
     * @var string 单位
     */
    public $Unit;

    /**
     * @var string 数量
     */
    public $Quantity;

    /**
     * @var string 单价
     */
    public $Price;

    /**
     * @var string 金额
     */
    public $Total;

    /**
     * @var string 税率
     */
    public $TaxRate;

    /**
     * @var string 税额
     */
    public $Tax;

    /**
     * @var string 通行日期起
     */
    public $DateStart;

    /**
     * @var string 通行日期止
     */
    public $DateEnd;

    /**
     * @var string 车牌号
     */
    public $LicensePlate;

    /**
     * @var string 车辆类型
     */
    public $VehicleType;

    /**
     * @param string $Name 项目名称
     * @param string $Specification 规格型号
     * @param string $Unit 单位
     * @param string $Quantity 数量
     * @param string $Price 单价
     * @param string $Total 金额
     * @param string $TaxRate 税率
     * @param string $Tax 税额
     * @param string $DateStart 通行日期起
     * @param string $DateEnd 通行日期止
     * @param string $LicensePlate 车牌号
     * @param string $VehicleType 车辆类型
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
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Specification",$param) and $param["Specification"] !== null) {
            $this->Specification = $param["Specification"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Quantity",$param) and $param["Quantity"] !== null) {
            $this->Quantity = $param["Quantity"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("TaxRate",$param) and $param["TaxRate"] !== null) {
            $this->TaxRate = $param["TaxRate"];
        }

        if (array_key_exists("Tax",$param) and $param["Tax"] !== null) {
            $this->Tax = $param["Tax"];
        }

        if (array_key_exists("DateStart",$param) and $param["DateStart"] !== null) {
            $this->DateStart = $param["DateStart"];
        }

        if (array_key_exists("DateEnd",$param) and $param["DateEnd"] !== null) {
            $this->DateEnd = $param["DateEnd"];
        }

        if (array_key_exists("LicensePlate",$param) and $param["LicensePlate"] !== null) {
            $this->LicensePlate = $param["LicensePlate"];
        }

        if (array_key_exists("VehicleType",$param) and $param["VehicleType"] !== null) {
            $this->VehicleType = $param["VehicleType"];
        }
    }
}
