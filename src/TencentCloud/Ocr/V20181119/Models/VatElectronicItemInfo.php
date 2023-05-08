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
 * 电子发票详细条目信息
 *
 * @method string getName() 获取项目名称
 * @method void setName(string $Name) 设置项目名称
 * @method string getQuantity() 获取数量
 * @method void setQuantity(string $Quantity) 设置数量
 * @method string getSpecification() 获取规格型号
 * @method void setSpecification(string $Specification) 设置规格型号
 * @method string getPrice() 获取单价
 * @method void setPrice(string $Price) 设置单价
 * @method string getTotal() 获取金额
 * @method void setTotal(string $Total) 设置金额
 * @method string getTaxRate() 获取税率
 * @method void setTaxRate(string $TaxRate) 设置税率
 * @method string getTax() 获取税额
 * @method void setTax(string $Tax) 设置税额
 * @method string getUnit() 获取单位
 * @method void setUnit(string $Unit) 设置单位
 * @method string getVehicleType() 获取运输工具类型
 * @method void setVehicleType(string $VehicleType) 设置运输工具类型
 * @method string getVehicleBrand() 获取运输工具牌号
 * @method void setVehicleBrand(string $VehicleBrand) 设置运输工具牌号
 * @method string getDeparturePlace() 获取起始地
 * @method void setDeparturePlace(string $DeparturePlace) 设置起始地
 * @method string getArrivalPlace() 获取到达地
 * @method void setArrivalPlace(string $ArrivalPlace) 设置到达地
 * @method string getTransportItemsName() 获取运输货物名称，仅货物运输服务发票返回
 * @method void setTransportItemsName(string $TransportItemsName) 设置运输货物名称，仅货物运输服务发票返回
 * @method string getPlaceOfBuildingService() 获取建筑服务发生地，仅建筑发票返回
 * @method void setPlaceOfBuildingService(string $PlaceOfBuildingService) 设置建筑服务发生地，仅建筑发票返回
 * @method string getBuildingName() 获取建筑项目名称，仅建筑发票返回
 * @method void setBuildingName(string $BuildingName) 设置建筑项目名称，仅建筑发票返回
 * @method string getEstateNumber() 获取产权证书/不动产权证号，仅不动产经营租赁服务发票返回
 * @method void setEstateNumber(string $EstateNumber) 设置产权证书/不动产权证号，仅不动产经营租赁服务发票返回
 * @method string getAreaUnit() 获取面积单位，仅不动产经营租赁服务发票返回
 * @method void setAreaUnit(string $AreaUnit) 设置面积单位，仅不动产经营租赁服务发票返回
 */
class VatElectronicItemInfo extends AbstractModel
{
    /**
     * @var string 项目名称
     */
    public $Name;

    /**
     * @var string 数量
     */
    public $Quantity;

    /**
     * @var string 规格型号
     */
    public $Specification;

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
     * @var string 单位
     */
    public $Unit;

    /**
     * @var string 运输工具类型
     */
    public $VehicleType;

    /**
     * @var string 运输工具牌号
     */
    public $VehicleBrand;

    /**
     * @var string 起始地
     */
    public $DeparturePlace;

    /**
     * @var string 到达地
     */
    public $ArrivalPlace;

    /**
     * @var string 运输货物名称，仅货物运输服务发票返回
     */
    public $TransportItemsName;

    /**
     * @var string 建筑服务发生地，仅建筑发票返回
     */
    public $PlaceOfBuildingService;

    /**
     * @var string 建筑项目名称，仅建筑发票返回
     */
    public $BuildingName;

    /**
     * @var string 产权证书/不动产权证号，仅不动产经营租赁服务发票返回
     */
    public $EstateNumber;

    /**
     * @var string 面积单位，仅不动产经营租赁服务发票返回
     */
    public $AreaUnit;

    /**
     * @param string $Name 项目名称
     * @param string $Quantity 数量
     * @param string $Specification 规格型号
     * @param string $Price 单价
     * @param string $Total 金额
     * @param string $TaxRate 税率
     * @param string $Tax 税额
     * @param string $Unit 单位
     * @param string $VehicleType 运输工具类型
     * @param string $VehicleBrand 运输工具牌号
     * @param string $DeparturePlace 起始地
     * @param string $ArrivalPlace 到达地
     * @param string $TransportItemsName 运输货物名称，仅货物运输服务发票返回
     * @param string $PlaceOfBuildingService 建筑服务发生地，仅建筑发票返回
     * @param string $BuildingName 建筑项目名称，仅建筑发票返回
     * @param string $EstateNumber 产权证书/不动产权证号，仅不动产经营租赁服务发票返回
     * @param string $AreaUnit 面积单位，仅不动产经营租赁服务发票返回
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

        if (array_key_exists("Quantity",$param) and $param["Quantity"] !== null) {
            $this->Quantity = $param["Quantity"];
        }

        if (array_key_exists("Specification",$param) and $param["Specification"] !== null) {
            $this->Specification = $param["Specification"];
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

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("VehicleType",$param) and $param["VehicleType"] !== null) {
            $this->VehicleType = $param["VehicleType"];
        }

        if (array_key_exists("VehicleBrand",$param) and $param["VehicleBrand"] !== null) {
            $this->VehicleBrand = $param["VehicleBrand"];
        }

        if (array_key_exists("DeparturePlace",$param) and $param["DeparturePlace"] !== null) {
            $this->DeparturePlace = $param["DeparturePlace"];
        }

        if (array_key_exists("ArrivalPlace",$param) and $param["ArrivalPlace"] !== null) {
            $this->ArrivalPlace = $param["ArrivalPlace"];
        }

        if (array_key_exists("TransportItemsName",$param) and $param["TransportItemsName"] !== null) {
            $this->TransportItemsName = $param["TransportItemsName"];
        }

        if (array_key_exists("PlaceOfBuildingService",$param) and $param["PlaceOfBuildingService"] !== null) {
            $this->PlaceOfBuildingService = $param["PlaceOfBuildingService"];
        }

        if (array_key_exists("BuildingName",$param) and $param["BuildingName"] !== null) {
            $this->BuildingName = $param["BuildingName"];
        }

        if (array_key_exists("EstateNumber",$param) and $param["EstateNumber"] !== null) {
            $this->EstateNumber = $param["EstateNumber"];
        }

        if (array_key_exists("AreaUnit",$param) and $param["AreaUnit"] !== null) {
            $this->AreaUnit = $param["AreaUnit"];
        }
    }
}
