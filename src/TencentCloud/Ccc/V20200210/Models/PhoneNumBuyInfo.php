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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 号码购买信息
 *
 * @method string getPhoneNum() 获取电话号码
 * @method void setPhoneNum(string $PhoneNum) 设置电话号码
 * @method integer getType() 获取号码类型，0-固话|1-虚商号码|2-运营商号码|3-400号码
 * @method void setType(integer $Type) 设置号码类型，0-固话|1-虚商号码|2-运营商号码|3-400号码
 * @method integer getCallType() 获取号码呼叫类型，1-呼入|2-呼出|3-呼入呼出
 * @method void setCallType(integer $CallType) 设置号码呼叫类型，1-呼入|2-呼出|3-呼入呼出
 * @method integer getBuyTime() 获取购买时间戳
 * @method void setBuyTime(integer $BuyTime) 设置购买时间戳
 * @method integer getEndTime() 获取截至时间戳
 * @method void setEndTime(integer $EndTime) 设置截至时间戳
 * @method integer getState() 获取号码状态，1正常|2欠费停用|4管理员停用|5违规停用
 * @method void setState(integer $State) 设置号码状态，1正常|2欠费停用|4管理员停用|5违规停用
 */
class PhoneNumBuyInfo extends AbstractModel
{
    /**
     * @var string 电话号码
     */
    public $PhoneNum;

    /**
     * @var integer 号码类型，0-固话|1-虚商号码|2-运营商号码|3-400号码
     */
    public $Type;

    /**
     * @var integer 号码呼叫类型，1-呼入|2-呼出|3-呼入呼出
     */
    public $CallType;

    /**
     * @var integer 购买时间戳
     */
    public $BuyTime;

    /**
     * @var integer 截至时间戳
     */
    public $EndTime;

    /**
     * @var integer 号码状态，1正常|2欠费停用|4管理员停用|5违规停用
     */
    public $State;

    /**
     * @param string $PhoneNum 电话号码
     * @param integer $Type 号码类型，0-固话|1-虚商号码|2-运营商号码|3-400号码
     * @param integer $CallType 号码呼叫类型，1-呼入|2-呼出|3-呼入呼出
     * @param integer $BuyTime 购买时间戳
     * @param integer $EndTime 截至时间戳
     * @param integer $State 号码状态，1正常|2欠费停用|4管理员停用|5违规停用
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
        if (array_key_exists("PhoneNum",$param) and $param["PhoneNum"] !== null) {
            $this->PhoneNum = $param["PhoneNum"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CallType",$param) and $param["CallType"] !== null) {
            $this->CallType = $param["CallType"];
        }

        if (array_key_exists("BuyTime",$param) and $param["BuyTime"] !== null) {
            $this->BuyTime = $param["BuyTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
