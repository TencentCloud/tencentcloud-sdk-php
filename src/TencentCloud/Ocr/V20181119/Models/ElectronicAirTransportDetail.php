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
 * 全电发票（航空运输电子客票行程单）详细信息
 *
 * @method string getFlightSegment() 获取航段序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlightSegment(string $FlightSegment) 设置航段序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStationGetOn() 获取始发站
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStationGetOn(string $StationGetOn) 设置始发站
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStationGetOff() 获取目的站
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStationGetOff(string $StationGetOff) 设置目的站
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCarrier() 获取承运人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCarrier(string $Carrier) 设置承运人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlightNumber() 获取航班号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlightNumber(string $FlightNumber) 设置航班号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSeatLevel() 获取座位等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeatLevel(string $SeatLevel) 设置座位等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlightDate() 获取承运日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlightDate(string $FlightDate) 设置承运日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDepartureTime() 获取起飞时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDepartureTime(string $DepartureTime) 设置起飞时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFareBasis() 获取客票级别/客票类别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFareBasis(string $FareBasis) 设置客票级别/客票类别
注意：此字段可能返回 null，表示取不到有效值。
 */
class ElectronicAirTransportDetail extends AbstractModel
{
    /**
     * @var string 航段序号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlightSegment;

    /**
     * @var string 始发站
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StationGetOn;

    /**
     * @var string 目的站
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StationGetOff;

    /**
     * @var string 承运人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Carrier;

    /**
     * @var string 航班号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlightNumber;

    /**
     * @var string 座位等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SeatLevel;

    /**
     * @var string 承运日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlightDate;

    /**
     * @var string 起飞时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DepartureTime;

    /**
     * @var string 客票级别/客票类别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FareBasis;

    /**
     * @param string $FlightSegment 航段序号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StationGetOn 始发站
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StationGetOff 目的站
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Carrier 承运人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlightNumber 航班号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SeatLevel 座位等级
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlightDate 承运日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DepartureTime 起飞时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FareBasis 客票级别/客票类别
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("FlightSegment",$param) and $param["FlightSegment"] !== null) {
            $this->FlightSegment = $param["FlightSegment"];
        }

        if (array_key_exists("StationGetOn",$param) and $param["StationGetOn"] !== null) {
            $this->StationGetOn = $param["StationGetOn"];
        }

        if (array_key_exists("StationGetOff",$param) and $param["StationGetOff"] !== null) {
            $this->StationGetOff = $param["StationGetOff"];
        }

        if (array_key_exists("Carrier",$param) and $param["Carrier"] !== null) {
            $this->Carrier = $param["Carrier"];
        }

        if (array_key_exists("FlightNumber",$param) and $param["FlightNumber"] !== null) {
            $this->FlightNumber = $param["FlightNumber"];
        }

        if (array_key_exists("SeatLevel",$param) and $param["SeatLevel"] !== null) {
            $this->SeatLevel = $param["SeatLevel"];
        }

        if (array_key_exists("FlightDate",$param) and $param["FlightDate"] !== null) {
            $this->FlightDate = $param["FlightDate"];
        }

        if (array_key_exists("DepartureTime",$param) and $param["DepartureTime"] !== null) {
            $this->DepartureTime = $param["DepartureTime"];
        }

        if (array_key_exists("FareBasis",$param) and $param["FareBasis"] !== null) {
            $this->FareBasis = $param["FareBasis"];
        }
    }
}
