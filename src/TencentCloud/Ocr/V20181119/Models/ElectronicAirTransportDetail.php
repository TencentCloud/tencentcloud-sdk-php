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
 * @method string getFlightSegment() 获取<p>航段序号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlightSegment(string $FlightSegment) 设置<p>航段序号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStationGetOn() 获取<p>始发站</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStationGetOn(string $StationGetOn) 设置<p>始发站</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStationGetOff() 获取<p>目的站</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStationGetOff(string $StationGetOff) 设置<p>目的站</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCarrier() 获取<p>承运人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCarrier(string $Carrier) 设置<p>承运人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlightNumber() 获取<p>航班号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlightNumber(string $FlightNumber) 设置<p>航班号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSeatLevel() 获取<p>座位等级</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeatLevel(string $SeatLevel) 设置<p>座位等级</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlightDate() 获取<p>承运日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlightDate(string $FlightDate) 设置<p>承运日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDepartureTime() 获取<p>起飞时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDepartureTime(string $DepartureTime) 设置<p>起飞时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFareBasis() 获取<p>客票级别/客票类别</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFareBasis(string $FareBasis) 设置<p>客票级别/客票类别</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ElectronicAirTransportDetail extends AbstractModel
{
    /**
     * @var string <p>航段序号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlightSegment;

    /**
     * @var string <p>始发站</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StationGetOn;

    /**
     * @var string <p>目的站</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StationGetOff;

    /**
     * @var string <p>承运人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Carrier;

    /**
     * @var string <p>航班号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlightNumber;

    /**
     * @var string <p>座位等级</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SeatLevel;

    /**
     * @var string <p>承运日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlightDate;

    /**
     * @var string <p>起飞时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DepartureTime;

    /**
     * @var string <p>客票级别/客票类别</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FareBasis;

    /**
     * @param string $FlightSegment <p>航段序号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StationGetOn <p>始发站</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StationGetOff <p>目的站</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Carrier <p>承运人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlightNumber <p>航班号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SeatLevel <p>座位等级</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlightDate <p>承运日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DepartureTime <p>起飞时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FareBasis <p>客票级别/客票类别</p>
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
