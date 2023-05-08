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
 * 出租车发票
 *
 * @method string getTitle() 获取发票名称
 * @method void setTitle(string $Title) 设置发票名称
 * @method integer getQRCodeMark() 获取是否存在二维码（1：有，0：无）
 * @method void setQRCodeMark(integer $QRCodeMark) 设置是否存在二维码（1：有，0：无）
 * @method string getCode() 获取发票代码
 * @method void setCode(string $Code) 设置发票代码
 * @method string getNumber() 获取发票号码
 * @method void setNumber(string $Number) 设置发票号码
 * @method string getDate() 获取开票日期
 * @method void setDate(string $Date) 设置开票日期
 * @method string getTimeGetOn() 获取上车时间
 * @method void setTimeGetOn(string $TimeGetOn) 设置上车时间
 * @method string getTimeGetOff() 获取下车时间
 * @method void setTimeGetOff(string $TimeGetOff) 设置下车时间
 * @method string getPrice() 获取单价
 * @method void setPrice(string $Price) 设置单价
 * @method string getMileage() 获取里程
 * @method void setMileage(string $Mileage) 设置里程
 * @method string getTotal() 获取总金额
 * @method void setTotal(string $Total) 设置总金额
 * @method string getPlace() 获取发票所在地
 * @method void setPlace(string $Place) 设置发票所在地
 * @method string getProvince() 获取省
 * @method void setProvince(string $Province) 设置省
 * @method string getCity() 获取市
 * @method void setCity(string $City) 设置市
 * @method string getKind() 获取发票消费类型
 * @method void setKind(string $Kind) 设置发票消费类型
 * @method string getLicensePlate() 获取车牌号
 * @method void setLicensePlate(string $LicensePlate) 设置车牌号
 * @method string getFuelFee() 获取燃油附加费
 * @method void setFuelFee(string $FuelFee) 设置燃油附加费
 * @method string getBookingCallFee() 获取预约叫车服务费
 * @method void setBookingCallFee(string $BookingCallFee) 设置预约叫车服务费
 * @method integer getCompanySealMark() 获取是否有公司印章（0：没有，1：有）
 * @method void setCompanySealMark(integer $CompanySealMark) 设置是否有公司印章（0：没有，1：有）
 */
class TaxiTicket extends AbstractModel
{
    /**
     * @var string 发票名称
     */
    public $Title;

    /**
     * @var integer 是否存在二维码（1：有，0：无）
     */
    public $QRCodeMark;

    /**
     * @var string 发票代码
     */
    public $Code;

    /**
     * @var string 发票号码
     */
    public $Number;

    /**
     * @var string 开票日期
     */
    public $Date;

    /**
     * @var string 上车时间
     */
    public $TimeGetOn;

    /**
     * @var string 下车时间
     */
    public $TimeGetOff;

    /**
     * @var string 单价
     */
    public $Price;

    /**
     * @var string 里程
     */
    public $Mileage;

    /**
     * @var string 总金额
     */
    public $Total;

    /**
     * @var string 发票所在地
     */
    public $Place;

    /**
     * @var string 省
     */
    public $Province;

    /**
     * @var string 市
     */
    public $City;

    /**
     * @var string 发票消费类型
     */
    public $Kind;

    /**
     * @var string 车牌号
     */
    public $LicensePlate;

    /**
     * @var string 燃油附加费
     */
    public $FuelFee;

    /**
     * @var string 预约叫车服务费
     */
    public $BookingCallFee;

    /**
     * @var integer 是否有公司印章（0：没有，1：有）
     */
    public $CompanySealMark;

    /**
     * @param string $Title 发票名称
     * @param integer $QRCodeMark 是否存在二维码（1：有，0：无）
     * @param string $Code 发票代码
     * @param string $Number 发票号码
     * @param string $Date 开票日期
     * @param string $TimeGetOn 上车时间
     * @param string $TimeGetOff 下车时间
     * @param string $Price 单价
     * @param string $Mileage 里程
     * @param string $Total 总金额
     * @param string $Place 发票所在地
     * @param string $Province 省
     * @param string $City 市
     * @param string $Kind 发票消费类型
     * @param string $LicensePlate 车牌号
     * @param string $FuelFee 燃油附加费
     * @param string $BookingCallFee 预约叫车服务费
     * @param integer $CompanySealMark 是否有公司印章（0：没有，1：有）
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("QRCodeMark",$param) and $param["QRCodeMark"] !== null) {
            $this->QRCodeMark = $param["QRCodeMark"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("TimeGetOn",$param) and $param["TimeGetOn"] !== null) {
            $this->TimeGetOn = $param["TimeGetOn"];
        }

        if (array_key_exists("TimeGetOff",$param) and $param["TimeGetOff"] !== null) {
            $this->TimeGetOff = $param["TimeGetOff"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("Mileage",$param) and $param["Mileage"] !== null) {
            $this->Mileage = $param["Mileage"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Place",$param) and $param["Place"] !== null) {
            $this->Place = $param["Place"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("LicensePlate",$param) and $param["LicensePlate"] !== null) {
            $this->LicensePlate = $param["LicensePlate"];
        }

        if (array_key_exists("FuelFee",$param) and $param["FuelFee"] !== null) {
            $this->FuelFee = $param["FuelFee"];
        }

        if (array_key_exists("BookingCallFee",$param) and $param["BookingCallFee"] !== null) {
            $this->BookingCallFee = $param["BookingCallFee"];
        }

        if (array_key_exists("CompanySealMark",$param) and $param["CompanySealMark"] !== null) {
            $this->CompanySealMark = $param["CompanySealMark"];
        }
    }
}
