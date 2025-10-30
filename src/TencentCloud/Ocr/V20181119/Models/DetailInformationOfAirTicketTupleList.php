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
 * 机票详细信息元组
 *
 * @method string getDepartureStation() 获取出发站（自）
 * @method void setDepartureStation(string $DepartureStation) 设置出发站（自）
 * @method string getDestinationStation() 获取目的地（至）
 * @method void setDestinationStation(string $DestinationStation) 设置目的地（至）
 * @method string getFlightSegment() 获取航班
 * @method void setFlightSegment(string $FlightSegment) 设置航班
 * @method string getCarrier() 获取航班
 * @method void setCarrier(string $Carrier) 设置航班
 * @method string getFlight() 获取航班号
 * @method void setFlight(string $Flight) 设置航班号
 * @method string getSeatClass() 获取座位等级
 * @method void setSeatClass(string $SeatClass) 设置座位等级
 * @method string getCarrierDate() 获取日期
 * @method void setCarrierDate(string $CarrierDate) 设置日期
 * @method string getDepartureTime() 获取时间
 * @method void setDepartureTime(string $DepartureTime) 设置时间
 * @method string getFareBasis() 获取客票级别/客票类别
 * @method void setFareBasis(string $FareBasis) 设置客票级别/客票类别
 * @method string getEffectiveDate() 获取客票生效日期
 * @method void setEffectiveDate(string $EffectiveDate) 设置客票生效日期
 * @method string getExpirationDate() 获取有效截止日期
 * @method void setExpirationDate(string $ExpirationDate) 设置有效截止日期
 * @method string getFreeBaggageAllowance() 获取免费行李
 * @method void setFreeBaggageAllowance(string $FreeBaggageAllowance) 设置免费行李
 */
class DetailInformationOfAirTicketTupleList extends AbstractModel
{
    /**
     * @var string 出发站（自）
     */
    public $DepartureStation;

    /**
     * @var string 目的地（至）
     */
    public $DestinationStation;

    /**
     * @var string 航班
     */
    public $FlightSegment;

    /**
     * @var string 航班
     */
    public $Carrier;

    /**
     * @var string 航班号
     */
    public $Flight;

    /**
     * @var string 座位等级
     */
    public $SeatClass;

    /**
     * @var string 日期
     */
    public $CarrierDate;

    /**
     * @var string 时间
     */
    public $DepartureTime;

    /**
     * @var string 客票级别/客票类别
     */
    public $FareBasis;

    /**
     * @var string 客票生效日期
     */
    public $EffectiveDate;

    /**
     * @var string 有效截止日期
     */
    public $ExpirationDate;

    /**
     * @var string 免费行李
     */
    public $FreeBaggageAllowance;

    /**
     * @param string $DepartureStation 出发站（自）
     * @param string $DestinationStation 目的地（至）
     * @param string $FlightSegment 航班
     * @param string $Carrier 航班
     * @param string $Flight 航班号
     * @param string $SeatClass 座位等级
     * @param string $CarrierDate 日期
     * @param string $DepartureTime 时间
     * @param string $FareBasis 客票级别/客票类别
     * @param string $EffectiveDate 客票生效日期
     * @param string $ExpirationDate 有效截止日期
     * @param string $FreeBaggageAllowance 免费行李
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
        if (array_key_exists("DepartureStation",$param) and $param["DepartureStation"] !== null) {
            $this->DepartureStation = $param["DepartureStation"];
        }

        if (array_key_exists("DestinationStation",$param) and $param["DestinationStation"] !== null) {
            $this->DestinationStation = $param["DestinationStation"];
        }

        if (array_key_exists("FlightSegment",$param) and $param["FlightSegment"] !== null) {
            $this->FlightSegment = $param["FlightSegment"];
        }

        if (array_key_exists("Carrier",$param) and $param["Carrier"] !== null) {
            $this->Carrier = $param["Carrier"];
        }

        if (array_key_exists("Flight",$param) and $param["Flight"] !== null) {
            $this->Flight = $param["Flight"];
        }

        if (array_key_exists("SeatClass",$param) and $param["SeatClass"] !== null) {
            $this->SeatClass = $param["SeatClass"];
        }

        if (array_key_exists("CarrierDate",$param) and $param["CarrierDate"] !== null) {
            $this->CarrierDate = $param["CarrierDate"];
        }

        if (array_key_exists("DepartureTime",$param) and $param["DepartureTime"] !== null) {
            $this->DepartureTime = $param["DepartureTime"];
        }

        if (array_key_exists("FareBasis",$param) and $param["FareBasis"] !== null) {
            $this->FareBasis = $param["FareBasis"];
        }

        if (array_key_exists("EffectiveDate",$param) and $param["EffectiveDate"] !== null) {
            $this->EffectiveDate = $param["EffectiveDate"];
        }

        if (array_key_exists("ExpirationDate",$param) and $param["ExpirationDate"] !== null) {
            $this->ExpirationDate = $param["ExpirationDate"];
        }

        if (array_key_exists("FreeBaggageAllowance",$param) and $param["FreeBaggageAllowance"] !== null) {
            $this->FreeBaggageAllowance = $param["FreeBaggageAllowance"];
        }
    }
}
