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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TimeSignalInfo。
 *
 * @method string getEventID() 获取EventID。
 * @method void setEventID(string $EventID) 设置EventID。
 * @method string getUPIDType() 获取UPIDType。
 * @method void setUPIDType(string $UPIDType) 设置UPIDType。
 * @method string getUPID() 获取UPID。
 * @method void setUPID(string $UPID) 设置UPID。
 * @method string getTypeID() 获取TypeID。
 * @method void setTypeID(string $TypeID) 设置TypeID。
 * @method string getNum() 获取Num。
 * @method void setNum(string $Num) 设置Num。
 * @method string getExpected() 获取Expected。
 * @method void setExpected(string $Expected) 设置Expected。
 * @method string getSubsegmentNum() 获取SubsegmentNum。
 * @method void setSubsegmentNum(string $SubsegmentNum) 设置SubsegmentNum。
 * @method string getSubsegmentsExpected() 获取SubsegmentsExpected。
 * @method void setSubsegmentsExpected(string $SubsegmentsExpected) 设置SubsegmentsExpected。
 */
class TimeSignalInfo extends AbstractModel
{
    /**
     * @var string EventID。
     */
    public $EventID;

    /**
     * @var string UPIDType。
     */
    public $UPIDType;

    /**
     * @var string UPID。
     */
    public $UPID;

    /**
     * @var string TypeID。
     */
    public $TypeID;

    /**
     * @var string Num。
     */
    public $Num;

    /**
     * @var string Expected。
     */
    public $Expected;

    /**
     * @var string SubsegmentNum。
     */
    public $SubsegmentNum;

    /**
     * @var string SubsegmentsExpected。
     */
    public $SubsegmentsExpected;

    /**
     * @param string $EventID EventID。
     * @param string $UPIDType UPIDType。
     * @param string $UPID UPID。
     * @param string $TypeID TypeID。
     * @param string $Num Num。
     * @param string $Expected Expected。
     * @param string $SubsegmentNum SubsegmentNum。
     * @param string $SubsegmentsExpected SubsegmentsExpected。
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
        if (array_key_exists("EventID",$param) and $param["EventID"] !== null) {
            $this->EventID = $param["EventID"];
        }

        if (array_key_exists("UPIDType",$param) and $param["UPIDType"] !== null) {
            $this->UPIDType = $param["UPIDType"];
        }

        if (array_key_exists("UPID",$param) and $param["UPID"] !== null) {
            $this->UPID = $param["UPID"];
        }

        if (array_key_exists("TypeID",$param) and $param["TypeID"] !== null) {
            $this->TypeID = $param["TypeID"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("Expected",$param) and $param["Expected"] !== null) {
            $this->Expected = $param["Expected"];
        }

        if (array_key_exists("SubsegmentNum",$param) and $param["SubsegmentNum"] !== null) {
            $this->SubsegmentNum = $param["SubsegmentNum"];
        }

        if (array_key_exists("SubsegmentsExpected",$param) and $param["SubsegmentsExpected"] !== null) {
            $this->SubsegmentsExpected = $param["SubsegmentsExpected"];
        }
    }
}
