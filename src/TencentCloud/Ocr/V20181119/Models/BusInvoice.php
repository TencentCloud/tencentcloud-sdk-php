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
 * 汽车票
 *
 * @method string getTitle() 获取发票名称
 * @method void setTitle(string $Title) 设置发票名称
 * @method integer getQRCodeMark() 获取是否存在二维码（1：有，0：无）
 * @method void setQRCodeMark(integer $QRCodeMark) 设置是否存在二维码（1：有，0：无）
 * @method string getNumber() 获取发票号码
 * @method void setNumber(string $Number) 设置发票号码
 * @method string getCode() 获取发票代码
 * @method void setCode(string $Code) 设置发票代码
 * @method string getDate() 获取开票日期
 * @method void setDate(string $Date) 设置开票日期
 * @method string getTimeGetOn() 获取乘车时间
 * @method void setTimeGetOn(string $TimeGetOn) 设置乘车时间
 * @method string getDateGetOn() 获取乘车日期
 * @method void setDateGetOn(string $DateGetOn) 设置乘车日期
 * @method string getStationGetOn() 获取出发车站
 * @method void setStationGetOn(string $StationGetOn) 设置出发车站
 * @method string getStationGetOff() 获取到达车站
 * @method void setStationGetOff(string $StationGetOff) 设置到达车站
 * @method string getTotal() 获取票价
 * @method void setTotal(string $Total) 设置票价
 * @method string getUserName() 获取姓名
 * @method void setUserName(string $UserName) 设置姓名
 * @method string getKind() 获取消费类型
 * @method void setKind(string $Kind) 设置消费类型
 * @method string getUserID() 获取身份证号
 * @method void setUserID(string $UserID) 设置身份证号
 * @method string getProvince() 获取省
 * @method void setProvince(string $Province) 设置省
 * @method string getCity() 获取市
 * @method void setCity(string $City) 设置市
 * @method string getPlaceGetOn() 获取乘车地点
 * @method void setPlaceGetOn(string $PlaceGetOn) 设置乘车地点
 * @method string getGateNumber() 获取检票口
 * @method void setGateNumber(string $GateNumber) 设置检票口
 * @method string getTicketType() 获取客票类型
 * @method void setTicketType(string $TicketType) 设置客票类型
 * @method string getVehicleType() 获取车型
 * @method void setVehicleType(string $VehicleType) 设置车型
 * @method string getSeatNumber() 获取座位号
 * @method void setSeatNumber(string $SeatNumber) 设置座位号
 * @method string getTrainNumber() 获取车次
 * @method void setTrainNumber(string $TrainNumber) 设置车次
 */
class BusInvoice extends AbstractModel
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
     * @var string 发票号码
     */
    public $Number;

    /**
     * @var string 发票代码
     */
    public $Code;

    /**
     * @var string 开票日期
     */
    public $Date;

    /**
     * @var string 乘车时间
     */
    public $TimeGetOn;

    /**
     * @var string 乘车日期
     */
    public $DateGetOn;

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
     * @var string 姓名
     */
    public $UserName;

    /**
     * @var string 消费类型
     */
    public $Kind;

    /**
     * @var string 身份证号
     */
    public $UserID;

    /**
     * @var string 省
     */
    public $Province;

    /**
     * @var string 市
     */
    public $City;

    /**
     * @var string 乘车地点
     */
    public $PlaceGetOn;

    /**
     * @var string 检票口
     */
    public $GateNumber;

    /**
     * @var string 客票类型
     */
    public $TicketType;

    /**
     * @var string 车型
     */
    public $VehicleType;

    /**
     * @var string 座位号
     */
    public $SeatNumber;

    /**
     * @var string 车次
     */
    public $TrainNumber;

    /**
     * @param string $Title 发票名称
     * @param integer $QRCodeMark 是否存在二维码（1：有，0：无）
     * @param string $Number 发票号码
     * @param string $Code 发票代码
     * @param string $Date 开票日期
     * @param string $TimeGetOn 乘车时间
     * @param string $DateGetOn 乘车日期
     * @param string $StationGetOn 出发车站
     * @param string $StationGetOff 到达车站
     * @param string $Total 票价
     * @param string $UserName 姓名
     * @param string $Kind 消费类型
     * @param string $UserID 身份证号
     * @param string $Province 省
     * @param string $City 市
     * @param string $PlaceGetOn 乘车地点
     * @param string $GateNumber 检票口
     * @param string $TicketType 客票类型
     * @param string $VehicleType 车型
     * @param string $SeatNumber 座位号
     * @param string $TrainNumber 车次
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

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("TimeGetOn",$param) and $param["TimeGetOn"] !== null) {
            $this->TimeGetOn = $param["TimeGetOn"];
        }

        if (array_key_exists("DateGetOn",$param) and $param["DateGetOn"] !== null) {
            $this->DateGetOn = $param["DateGetOn"];
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

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("UserID",$param) and $param["UserID"] !== null) {
            $this->UserID = $param["UserID"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("PlaceGetOn",$param) and $param["PlaceGetOn"] !== null) {
            $this->PlaceGetOn = $param["PlaceGetOn"];
        }

        if (array_key_exists("GateNumber",$param) and $param["GateNumber"] !== null) {
            $this->GateNumber = $param["GateNumber"];
        }

        if (array_key_exists("TicketType",$param) and $param["TicketType"] !== null) {
            $this->TicketType = $param["TicketType"];
        }

        if (array_key_exists("VehicleType",$param) and $param["VehicleType"] !== null) {
            $this->VehicleType = $param["VehicleType"];
        }

        if (array_key_exists("SeatNumber",$param) and $param["SeatNumber"] !== null) {
            $this->SeatNumber = $param["SeatNumber"];
        }

        if (array_key_exists("TrainNumber",$param) and $param["TrainNumber"] !== null) {
            $this->TrainNumber = $param["TrainNumber"];
        }
    }
}
