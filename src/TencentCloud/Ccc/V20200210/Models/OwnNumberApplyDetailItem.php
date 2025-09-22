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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户自带号码审批明细数据类型
 *
 * @method integer getCallType() 获取号码类型：0-呼入|1-呼出|2-呼入呼出
 * @method void setCallType(integer $CallType) 设置号码类型：0-呼入|1-呼出|2-呼入呼出
 * @method string getPhoneNumber() 获取线路号码
 * @method void setPhoneNumber(string $PhoneNumber) 设置线路号码
 * @method integer getMaxCallCount() 获取最大并发呼叫数
 * @method void setMaxCallCount(integer $MaxCallCount) 设置最大并发呼叫数
 * @method integer getMaxCallPSec() 获取每秒最大并发数
 * @method void setMaxCallPSec(integer $MaxCallPSec) 设置每秒最大并发数
 * @method string getOutboundCalleeFormat() 获取呼出被叫格式，使用 {+E.164} 或 {E.164}, 
 * @method void setOutboundCalleeFormat(string $OutboundCalleeFormat) 设置呼出被叫格式，使用 {+E.164} 或 {E.164}, 
 * @method string getCarrierPhoneNumber() 获取运营商号码
 * @method void setCarrierPhoneNumber(string $CarrierPhoneNumber) 设置运营商号码
 */
class OwnNumberApplyDetailItem extends AbstractModel
{
    /**
     * @var integer 号码类型：0-呼入|1-呼出|2-呼入呼出
     */
    public $CallType;

    /**
     * @var string 线路号码
     */
    public $PhoneNumber;

    /**
     * @var integer 最大并发呼叫数
     */
    public $MaxCallCount;

    /**
     * @var integer 每秒最大并发数
     */
    public $MaxCallPSec;

    /**
     * @var string 呼出被叫格式，使用 {+E.164} 或 {E.164}, 
     */
    public $OutboundCalleeFormat;

    /**
     * @var string 运营商号码
     */
    public $CarrierPhoneNumber;

    /**
     * @param integer $CallType 号码类型：0-呼入|1-呼出|2-呼入呼出
     * @param string $PhoneNumber 线路号码
     * @param integer $MaxCallCount 最大并发呼叫数
     * @param integer $MaxCallPSec 每秒最大并发数
     * @param string $OutboundCalleeFormat 呼出被叫格式，使用 {+E.164} 或 {E.164}, 
     * @param string $CarrierPhoneNumber 运营商号码
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
        if (array_key_exists("CallType",$param) and $param["CallType"] !== null) {
            $this->CallType = $param["CallType"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("MaxCallCount",$param) and $param["MaxCallCount"] !== null) {
            $this->MaxCallCount = $param["MaxCallCount"];
        }

        if (array_key_exists("MaxCallPSec",$param) and $param["MaxCallPSec"] !== null) {
            $this->MaxCallPSec = $param["MaxCallPSec"];
        }

        if (array_key_exists("OutboundCalleeFormat",$param) and $param["OutboundCalleeFormat"] !== null) {
            $this->OutboundCalleeFormat = $param["OutboundCalleeFormat"];
        }

        if (array_key_exists("CarrierPhoneNumber",$param) and $param["CarrierPhoneNumber"] !== null) {
            $this->CarrierPhoneNumber = $param["CarrierPhoneNumber"];
        }
    }
}
