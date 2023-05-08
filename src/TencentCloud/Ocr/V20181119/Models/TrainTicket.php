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
 * 火车票
 *
 * @method string getTitle() 获取发票名称
 * @method void setTitle(string $Title) 设置发票名称
 * @method string getNumber() 获取发票号码
 * @method void setNumber(string $Number) 设置发票号码
 * @method string getDateGetOn() 获取乘车日期
 * @method void setDateGetOn(string $DateGetOn) 设置乘车日期
 * @method string getTimeGetOn() 获取乘车时间
 * @method void setTimeGetOn(string $TimeGetOn) 设置乘车时间
 * @method string getName() 获取乘车人姓名
 * @method void setName(string $Name) 设置乘车人姓名
 * @method string getStationGetOn() 获取出发车站
 * @method void setStationGetOn(string $StationGetOn) 设置出发车站
 * @method string getStationGetOff() 获取到达车站
 * @method void setStationGetOff(string $StationGetOff) 设置到达车站
 * @method string getSeat() 获取座位类型
 * @method void setSeat(string $Seat) 设置座位类型
 * @method string getTotal() 获取总金额
 * @method void setTotal(string $Total) 设置总金额
 * @method string getKind() 获取发票消费类型
 * @method void setKind(string $Kind) 设置发票消费类型
 * @method string getSerialNumber() 获取序列号
 * @method void setSerialNumber(string $SerialNumber) 设置序列号
 * @method string getUserID() 获取身份证号
 * @method void setUserID(string $UserID) 设置身份证号
 * @method string getGateNumber() 获取检票口
 * @method void setGateNumber(string $GateNumber) 设置检票口
 * @method string getTrainNumber() 获取车次
 * @method void setTrainNumber(string $TrainNumber) 设置车次
 * @method string getHandlingFee() 获取手续费
 * @method void setHandlingFee(string $HandlingFee) 设置手续费
 * @method string getOriginalFare() 获取原票价
 * @method void setOriginalFare(string $OriginalFare) 设置原票价
 * @method string getTotalCn() 获取大写金额
 * @method void setTotalCn(string $TotalCn) 设置大写金额
 * @method string getSeatNumber() 获取座位号
 * @method void setSeatNumber(string $SeatNumber) 设置座位号
 * @method string getPickUpAddress() 获取取票地址
 * @method void setPickUpAddress(string $PickUpAddress) 设置取票地址
 * @method string getTicketChange() 获取是否始发改签
 * @method void setTicketChange(string $TicketChange) 设置是否始发改签
 * @method string getAdditionalFare() 获取加收票价
 * @method void setAdditionalFare(string $AdditionalFare) 设置加收票价
 * @method string getReceiptNumber() 获取收据号码
 * @method void setReceiptNumber(string $ReceiptNumber) 设置收据号码
 * @method integer getQRCodeMark() 获取是否存在二维码（1：有，0：无）
 * @method void setQRCodeMark(integer $QRCodeMark) 设置是否存在二维码（1：有，0：无）
 * @method integer getReimburseOnlyMark() 获取是否仅供报销使用（0：没有，1：有）
 * @method void setReimburseOnlyMark(integer $ReimburseOnlyMark) 设置是否仅供报销使用（0：没有，1：有）
 */
class TrainTicket extends AbstractModel
{
    /**
     * @var string 发票名称
     */
    public $Title;

    /**
     * @var string 发票号码
     */
    public $Number;

    /**
     * @var string 乘车日期
     */
    public $DateGetOn;

    /**
     * @var string 乘车时间
     */
    public $TimeGetOn;

    /**
     * @var string 乘车人姓名
     */
    public $Name;

    /**
     * @var string 出发车站
     */
    public $StationGetOn;

    /**
     * @var string 到达车站
     */
    public $StationGetOff;

    /**
     * @var string 座位类型
     */
    public $Seat;

    /**
     * @var string 总金额
     */
    public $Total;

    /**
     * @var string 发票消费类型
     */
    public $Kind;

    /**
     * @var string 序列号
     */
    public $SerialNumber;

    /**
     * @var string 身份证号
     */
    public $UserID;

    /**
     * @var string 检票口
     */
    public $GateNumber;

    /**
     * @var string 车次
     */
    public $TrainNumber;

    /**
     * @var string 手续费
     */
    public $HandlingFee;

    /**
     * @var string 原票价
     */
    public $OriginalFare;

    /**
     * @var string 大写金额
     */
    public $TotalCn;

    /**
     * @var string 座位号
     */
    public $SeatNumber;

    /**
     * @var string 取票地址
     */
    public $PickUpAddress;

    /**
     * @var string 是否始发改签
     */
    public $TicketChange;

    /**
     * @var string 加收票价
     */
    public $AdditionalFare;

    /**
     * @var string 收据号码
     */
    public $ReceiptNumber;

    /**
     * @var integer 是否存在二维码（1：有，0：无）
     */
    public $QRCodeMark;

    /**
     * @var integer 是否仅供报销使用（0：没有，1：有）
     */
    public $ReimburseOnlyMark;

    /**
     * @param string $Title 发票名称
     * @param string $Number 发票号码
     * @param string $DateGetOn 乘车日期
     * @param string $TimeGetOn 乘车时间
     * @param string $Name 乘车人姓名
     * @param string $StationGetOn 出发车站
     * @param string $StationGetOff 到达车站
     * @param string $Seat 座位类型
     * @param string $Total 总金额
     * @param string $Kind 发票消费类型
     * @param string $SerialNumber 序列号
     * @param string $UserID 身份证号
     * @param string $GateNumber 检票口
     * @param string $TrainNumber 车次
     * @param string $HandlingFee 手续费
     * @param string $OriginalFare 原票价
     * @param string $TotalCn 大写金额
     * @param string $SeatNumber 座位号
     * @param string $PickUpAddress 取票地址
     * @param string $TicketChange 是否始发改签
     * @param string $AdditionalFare 加收票价
     * @param string $ReceiptNumber 收据号码
     * @param integer $QRCodeMark 是否存在二维码（1：有，0：无）
     * @param integer $ReimburseOnlyMark 是否仅供报销使用（0：没有，1：有）
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

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("DateGetOn",$param) and $param["DateGetOn"] !== null) {
            $this->DateGetOn = $param["DateGetOn"];
        }

        if (array_key_exists("TimeGetOn",$param) and $param["TimeGetOn"] !== null) {
            $this->TimeGetOn = $param["TimeGetOn"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("StationGetOn",$param) and $param["StationGetOn"] !== null) {
            $this->StationGetOn = $param["StationGetOn"];
        }

        if (array_key_exists("StationGetOff",$param) and $param["StationGetOff"] !== null) {
            $this->StationGetOff = $param["StationGetOff"];
        }

        if (array_key_exists("Seat",$param) and $param["Seat"] !== null) {
            $this->Seat = $param["Seat"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("SerialNumber",$param) and $param["SerialNumber"] !== null) {
            $this->SerialNumber = $param["SerialNumber"];
        }

        if (array_key_exists("UserID",$param) and $param["UserID"] !== null) {
            $this->UserID = $param["UserID"];
        }

        if (array_key_exists("GateNumber",$param) and $param["GateNumber"] !== null) {
            $this->GateNumber = $param["GateNumber"];
        }

        if (array_key_exists("TrainNumber",$param) and $param["TrainNumber"] !== null) {
            $this->TrainNumber = $param["TrainNumber"];
        }

        if (array_key_exists("HandlingFee",$param) and $param["HandlingFee"] !== null) {
            $this->HandlingFee = $param["HandlingFee"];
        }

        if (array_key_exists("OriginalFare",$param) and $param["OriginalFare"] !== null) {
            $this->OriginalFare = $param["OriginalFare"];
        }

        if (array_key_exists("TotalCn",$param) and $param["TotalCn"] !== null) {
            $this->TotalCn = $param["TotalCn"];
        }

        if (array_key_exists("SeatNumber",$param) and $param["SeatNumber"] !== null) {
            $this->SeatNumber = $param["SeatNumber"];
        }

        if (array_key_exists("PickUpAddress",$param) and $param["PickUpAddress"] !== null) {
            $this->PickUpAddress = $param["PickUpAddress"];
        }

        if (array_key_exists("TicketChange",$param) and $param["TicketChange"] !== null) {
            $this->TicketChange = $param["TicketChange"];
        }

        if (array_key_exists("AdditionalFare",$param) and $param["AdditionalFare"] !== null) {
            $this->AdditionalFare = $param["AdditionalFare"];
        }

        if (array_key_exists("ReceiptNumber",$param) and $param["ReceiptNumber"] !== null) {
            $this->ReceiptNumber = $param["ReceiptNumber"];
        }

        if (array_key_exists("QRCodeMark",$param) and $param["QRCodeMark"] !== null) {
            $this->QRCodeMark = $param["QRCodeMark"];
        }

        if (array_key_exists("ReimburseOnlyMark",$param) and $param["ReimburseOnlyMark"] !== null) {
            $this->ReimburseOnlyMark = $param["ReimburseOnlyMark"];
        }
    }
}
