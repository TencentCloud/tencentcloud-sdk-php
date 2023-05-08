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
 * 机票行程卡条目
 *
 * @method string getTerminalGetOn() 获取出发航站楼
 * @method void setTerminalGetOn(string $TerminalGetOn) 设置出发航站楼
 * @method string getTerminalGetOff() 获取到达航站楼
 * @method void setTerminalGetOff(string $TerminalGetOff) 设置到达航站楼
 * @method string getCarrier() 获取承运人
 * @method void setCarrier(string $Carrier) 设置承运人
 * @method string getFlightNumber() 获取航班号
 * @method void setFlightNumber(string $FlightNumber) 设置航班号
 * @method string getSeat() 获取座位等级
 * @method void setSeat(string $Seat) 设置座位等级
 * @method string getDateGetOn() 获取乘机日期
 * @method void setDateGetOn(string $DateGetOn) 设置乘机日期
 * @method string getTimeGetOn() 获取乘机时间
 * @method void setTimeGetOn(string $TimeGetOn) 设置乘机时间
 * @method string getStationGetOn() 获取出发站
 * @method void setStationGetOn(string $StationGetOn) 设置出发站
 * @method string getStationGetOff() 获取到达站
 * @method void setStationGetOff(string $StationGetOff) 设置到达站
 * @method string getAllow() 获取免费行李
 * @method void setAllow(string $Allow) 设置免费行李
 * @method string getFareBasis() 获取客票级别/客票类别
 * @method void setFareBasis(string $FareBasis) 设置客票级别/客票类别
 */
class FlightItem extends AbstractModel
{
    /**
     * @var string 出发航站楼
     */
    public $TerminalGetOn;

    /**
     * @var string 到达航站楼
     */
    public $TerminalGetOff;

    /**
     * @var string 承运人
     */
    public $Carrier;

    /**
     * @var string 航班号
     */
    public $FlightNumber;

    /**
     * @var string 座位等级
     */
    public $Seat;

    /**
     * @var string 乘机日期
     */
    public $DateGetOn;

    /**
     * @var string 乘机时间
     */
    public $TimeGetOn;

    /**
     * @var string 出发站
     */
    public $StationGetOn;

    /**
     * @var string 到达站
     */
    public $StationGetOff;

    /**
     * @var string 免费行李
     */
    public $Allow;

    /**
     * @var string 客票级别/客票类别
     */
    public $FareBasis;

    /**
     * @param string $TerminalGetOn 出发航站楼
     * @param string $TerminalGetOff 到达航站楼
     * @param string $Carrier 承运人
     * @param string $FlightNumber 航班号
     * @param string $Seat 座位等级
     * @param string $DateGetOn 乘机日期
     * @param string $TimeGetOn 乘机时间
     * @param string $StationGetOn 出发站
     * @param string $StationGetOff 到达站
     * @param string $Allow 免费行李
     * @param string $FareBasis 客票级别/客票类别
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
        if (array_key_exists("TerminalGetOn",$param) and $param["TerminalGetOn"] !== null) {
            $this->TerminalGetOn = $param["TerminalGetOn"];
        }

        if (array_key_exists("TerminalGetOff",$param) and $param["TerminalGetOff"] !== null) {
            $this->TerminalGetOff = $param["TerminalGetOff"];
        }

        if (array_key_exists("Carrier",$param) and $param["Carrier"] !== null) {
            $this->Carrier = $param["Carrier"];
        }

        if (array_key_exists("FlightNumber",$param) and $param["FlightNumber"] !== null) {
            $this->FlightNumber = $param["FlightNumber"];
        }

        if (array_key_exists("Seat",$param) and $param["Seat"] !== null) {
            $this->Seat = $param["Seat"];
        }

        if (array_key_exists("DateGetOn",$param) and $param["DateGetOn"] !== null) {
            $this->DateGetOn = $param["DateGetOn"];
        }

        if (array_key_exists("TimeGetOn",$param) and $param["TimeGetOn"] !== null) {
            $this->TimeGetOn = $param["TimeGetOn"];
        }

        if (array_key_exists("StationGetOn",$param) and $param["StationGetOn"] !== null) {
            $this->StationGetOn = $param["StationGetOn"];
        }

        if (array_key_exists("StationGetOff",$param) and $param["StationGetOff"] !== null) {
            $this->StationGetOff = $param["StationGetOff"];
        }

        if (array_key_exists("Allow",$param) and $param["Allow"] !== null) {
            $this->Allow = $param["Allow"];
        }

        if (array_key_exists("FareBasis",$param) and $param["FareBasis"] !== null) {
            $this->FareBasis = $param["FareBasis"];
        }
    }
}
