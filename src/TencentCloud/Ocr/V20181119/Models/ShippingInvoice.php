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
 * 轮船票
 *
 * @method string getTitle() 获取发票名称
 * @method void setTitle(string $Title) 设置发票名称
 * @method integer getQRCodeMark() 获取是否存在二维码（1：有，0：无）
 * @method void setQRCodeMark(integer $QRCodeMark) 设置是否存在二维码（1：有，0：无）
 * @method string getCode() 获取发票代码
 * @method void setCode(string $Code) 设置发票代码
 * @method string getNumber() 获取发票号码
 * @method void setNumber(string $Number) 设置发票号码
 * @method string getUserName() 获取姓名
 * @method void setUserName(string $UserName) 设置姓名
 * @method string getDate() 获取日期
 * @method void setDate(string $Date) 设置日期
 * @method string getTime() 获取时间
 * @method void setTime(string $Time) 设置时间
 * @method string getStationGetOn() 获取出发车站
 * @method void setStationGetOn(string $StationGetOn) 设置出发车站
 * @method string getStationGetOff() 获取到达车站
 * @method void setStationGetOff(string $StationGetOff) 设置到达车站
 * @method string getTotal() 获取票价
 * @method void setTotal(string $Total) 设置票价
 * @method string getKind() 获取发票消费类型
 * @method void setKind(string $Kind) 设置发票消费类型
 * @method string getProvince() 获取省
 * @method void setProvince(string $Province) 设置省
 * @method string getCity() 获取市
 * @method void setCity(string $City) 设置市
 * @method string getCurrencyCode() 获取币种
 * @method void setCurrencyCode(string $CurrencyCode) 设置币种
 */
class ShippingInvoice extends AbstractModel
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
     * @var string 姓名
     */
    public $UserName;

    /**
     * @var string 日期
     */
    public $Date;

    /**
     * @var string 时间
     */
    public $Time;

    /**
     * @var string 出发车站
     */
    public $StationGetOn;

    /**
     * @var string 到达车站
     */
    public $StationGetOff;

    /**
     * @var string 票价
     */
    public $Total;

    /**
     * @var string 发票消费类型
     */
    public $Kind;

    /**
     * @var string 省
     */
    public $Province;

    /**
     * @var string 市
     */
    public $City;

    /**
     * @var string 币种
     */
    public $CurrencyCode;

    /**
     * @param string $Title 发票名称
     * @param integer $QRCodeMark 是否存在二维码（1：有，0：无）
     * @param string $Code 发票代码
     * @param string $Number 发票号码
     * @param string $UserName 姓名
     * @param string $Date 日期
     * @param string $Time 时间
     * @param string $StationGetOn 出发车站
     * @param string $StationGetOff 到达车站
     * @param string $Total 票价
     * @param string $Kind 发票消费类型
     * @param string $Province 省
     * @param string $City 市
     * @param string $CurrencyCode 币种
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

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("StationGetOn",$param) and $param["StationGetOn"] !== null) {
            $this->StationGetOn = $param["StationGetOn"];
        }

        if (array_key_exists("StationGetOff",$param) and $param["StationGetOff"] !== null) {
            $this->StationGetOff = $param["StationGetOff"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("CurrencyCode",$param) and $param["CurrencyCode"] !== null) {
            $this->CurrencyCode = $param["CurrencyCode"];
        }
    }
}
