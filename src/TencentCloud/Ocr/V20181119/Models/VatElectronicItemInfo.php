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
 * 电子发票详细条目信息
 *
 * @method string getName() 获取<p>项目名称</p>
 * @method void setName(string $Name) 设置<p>项目名称</p>
 * @method string getQuantity() 获取<p>数量</p>
 * @method void setQuantity(string $Quantity) 设置<p>数量</p>
 * @method string getSpecification() 获取<p>规格型号</p>
 * @method void setSpecification(string $Specification) 设置<p>规格型号</p>
 * @method string getPrice() 获取<p>单价</p>
 * @method void setPrice(string $Price) 设置<p>单价</p>
 * @method string getTotal() 获取<p>金额</p>
 * @method void setTotal(string $Total) 设置<p>金额</p>
 * @method string getTaxRate() 获取<p>税率</p>
 * @method void setTaxRate(string $TaxRate) 设置<p>税率</p>
 * @method string getTax() 获取<p>税额</p>
 * @method void setTax(string $Tax) 设置<p>税额</p>
 * @method string getUnit() 获取<p>单位</p>
 * @method void setUnit(string $Unit) 设置<p>单位</p>
 * @method string getVehicleType() 获取<p>运输工具类型</p>
 * @method void setVehicleType(string $VehicleType) 设置<p>运输工具类型</p>
 * @method string getVehicleBrand() 获取<p>运输工具牌号</p>
 * @method void setVehicleBrand(string $VehicleBrand) 设置<p>运输工具牌号</p>
 * @method string getDeparturePlace() 获取<p>起始地</p>
 * @method void setDeparturePlace(string $DeparturePlace) 设置<p>起始地</p>
 * @method string getArrivalPlace() 获取<p>到达地</p>
 * @method void setArrivalPlace(string $ArrivalPlace) 设置<p>到达地</p>
 * @method string getTransportItemsName() 获取<p>运输货物名称，仅货物运输服务发票返回</p>
 * @method void setTransportItemsName(string $TransportItemsName) 设置<p>运输货物名称，仅货物运输服务发票返回</p>
 * @method string getPlaceOfBuildingService() 获取<p>建筑服务发生地，仅建筑发票返回</p>
 * @method void setPlaceOfBuildingService(string $PlaceOfBuildingService) 设置<p>建筑服务发生地，仅建筑发票返回</p>
 * @method string getBuildingName() 获取<p>建筑项目名称，仅建筑发票返回</p>
 * @method void setBuildingName(string $BuildingName) 设置<p>建筑项目名称，仅建筑发票返回</p>
 * @method string getEstateNumber() 获取<p>产权证书/不动产权证号，仅不动产经营租赁服务发票返回</p>
 * @method void setEstateNumber(string $EstateNumber) 设置<p>产权证书/不动产权证号，仅不动产经营租赁服务发票返回</p>
 * @method string getAreaUnit() 获取<p>面积单位，仅不动产经营租赁服务发票返回</p>
 * @method void setAreaUnit(string $AreaUnit) 设置<p>面积单位，仅不动产经营租赁服务发票返回</p>
 * @method string getTraveler() 获取<p>出行人，仅旅客运输服务发票返回</p>
 * @method void setTraveler(string $Traveler) 设置<p>出行人，仅旅客运输服务发票返回</p>
 * @method string getTravelerID() 获取<p>有效身份证件号，仅旅客运输服务发票返回</p>
 * @method void setTravelerID(string $TravelerID) 设置<p>有效身份证件号，仅旅客运输服务发票返回</p>
 * @method string getTravelDate() 获取<p>出行日期，仅旅客运输服务发票返回</p>
 * @method void setTravelDate(string $TravelDate) 设置<p>出行日期，仅旅客运输服务发票返回</p>
 * @method string getTravelLevel() 获取<p>等级，仅旅客运输服务发票返回</p>
 * @method void setTravelLevel(string $TravelLevel) 设置<p>等级，仅旅客运输服务发票返回</p>
 * @method string getDateStart() 获取<p>通行日期起</p>
 * @method void setDateStart(string $DateStart) 设置<p>通行日期起</p>
 * @method string getDateEnd() 获取<p>通行日期止</p>
 * @method void setDateEnd(string $DateEnd) 设置<p>通行日期止</p>
 */
class VatElectronicItemInfo extends AbstractModel
{
    /**
     * @var string <p>项目名称</p>
     */
    public $Name;

    /**
     * @var string <p>数量</p>
     */
    public $Quantity;

    /**
     * @var string <p>规格型号</p>
     */
    public $Specification;

    /**
     * @var string <p>单价</p>
     */
    public $Price;

    /**
     * @var string <p>金额</p>
     */
    public $Total;

    /**
     * @var string <p>税率</p>
     */
    public $TaxRate;

    /**
     * @var string <p>税额</p>
     */
    public $Tax;

    /**
     * @var string <p>单位</p>
     */
    public $Unit;

    /**
     * @var string <p>运输工具类型</p>
     */
    public $VehicleType;

    /**
     * @var string <p>运输工具牌号</p>
     */
    public $VehicleBrand;

    /**
     * @var string <p>起始地</p>
     */
    public $DeparturePlace;

    /**
     * @var string <p>到达地</p>
     */
    public $ArrivalPlace;

    /**
     * @var string <p>运输货物名称，仅货物运输服务发票返回</p>
     */
    public $TransportItemsName;

    /**
     * @var string <p>建筑服务发生地，仅建筑发票返回</p>
     */
    public $PlaceOfBuildingService;

    /**
     * @var string <p>建筑项目名称，仅建筑发票返回</p>
     */
    public $BuildingName;

    /**
     * @var string <p>产权证书/不动产权证号，仅不动产经营租赁服务发票返回</p>
     */
    public $EstateNumber;

    /**
     * @var string <p>面积单位，仅不动产经营租赁服务发票返回</p>
     */
    public $AreaUnit;

    /**
     * @var string <p>出行人，仅旅客运输服务发票返回</p>
     */
    public $Traveler;

    /**
     * @var string <p>有效身份证件号，仅旅客运输服务发票返回</p>
     */
    public $TravelerID;

    /**
     * @var string <p>出行日期，仅旅客运输服务发票返回</p>
     */
    public $TravelDate;

    /**
     * @var string <p>等级，仅旅客运输服务发票返回</p>
     */
    public $TravelLevel;

    /**
     * @var string <p>通行日期起</p>
     */
    public $DateStart;

    /**
     * @var string <p>通行日期止</p>
     */
    public $DateEnd;

    /**
     * @param string $Name <p>项目名称</p>
     * @param string $Quantity <p>数量</p>
     * @param string $Specification <p>规格型号</p>
     * @param string $Price <p>单价</p>
     * @param string $Total <p>金额</p>
     * @param string $TaxRate <p>税率</p>
     * @param string $Tax <p>税额</p>
     * @param string $Unit <p>单位</p>
     * @param string $VehicleType <p>运输工具类型</p>
     * @param string $VehicleBrand <p>运输工具牌号</p>
     * @param string $DeparturePlace <p>起始地</p>
     * @param string $ArrivalPlace <p>到达地</p>
     * @param string $TransportItemsName <p>运输货物名称，仅货物运输服务发票返回</p>
     * @param string $PlaceOfBuildingService <p>建筑服务发生地，仅建筑发票返回</p>
     * @param string $BuildingName <p>建筑项目名称，仅建筑发票返回</p>
     * @param string $EstateNumber <p>产权证书/不动产权证号，仅不动产经营租赁服务发票返回</p>
     * @param string $AreaUnit <p>面积单位，仅不动产经营租赁服务发票返回</p>
     * @param string $Traveler <p>出行人，仅旅客运输服务发票返回</p>
     * @param string $TravelerID <p>有效身份证件号，仅旅客运输服务发票返回</p>
     * @param string $TravelDate <p>出行日期，仅旅客运输服务发票返回</p>
     * @param string $TravelLevel <p>等级，仅旅客运输服务发票返回</p>
     * @param string $DateStart <p>通行日期起</p>
     * @param string $DateEnd <p>通行日期止</p>
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

        if (array_key_exists("Traveler",$param) and $param["Traveler"] !== null) {
            $this->Traveler = $param["Traveler"];
        }

        if (array_key_exists("TravelerID",$param) and $param["TravelerID"] !== null) {
            $this->TravelerID = $param["TravelerID"];
        }

        if (array_key_exists("TravelDate",$param) and $param["TravelDate"] !== null) {
            $this->TravelDate = $param["TravelDate"];
        }

        if (array_key_exists("TravelLevel",$param) and $param["TravelLevel"] !== null) {
            $this->TravelLevel = $param["TravelLevel"];
        }

        if (array_key_exists("DateStart",$param) and $param["DateStart"] !== null) {
            $this->DateStart = $param["DateStart"];
        }

        if (array_key_exists("DateEnd",$param) and $param["DateEnd"] !== null) {
            $this->DateEnd = $param["DateEnd"];
        }
    }
}
