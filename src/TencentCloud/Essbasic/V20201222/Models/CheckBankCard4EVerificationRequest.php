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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckBankCard4EVerification请求参数结构体
 *
 * @method Caller getCaller() 获取调用方信息; 必选
 * @method void setCaller(Caller $Caller) 设置调用方信息; 必选
 * @method string getBankCard() 获取银行卡号
 * @method void setBankCard(string $BankCard) 设置银行卡号
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method string getIdCardNumber() 获取身份证件号码
 * @method void setIdCardNumber(string $IdCardNumber) 设置身份证件号码
 * @method string getMobile() 获取手机号
 * @method void setMobile(string $Mobile) 设置手机号
 * @method string getIdCardType() 获取身份证件类型; ID_CARD
 * @method void setIdCardType(string $IdCardType) 设置身份证件类型; ID_CARD
 */
class CheckBankCard4EVerificationRequest extends AbstractModel
{
    /**
     * @var Caller 调用方信息; 必选
     */
    public $Caller;

    /**
     * @var string 银行卡号
     */
    public $BankCard;

    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var string 身份证件号码
     */
    public $IdCardNumber;

    /**
     * @var string 手机号
     */
    public $Mobile;

    /**
     * @var string 身份证件类型; ID_CARD
     */
    public $IdCardType;

    /**
     * @param Caller $Caller 调用方信息; 必选
     * @param string $BankCard 银行卡号
     * @param string $Name 姓名
     * @param string $IdCardNumber 身份证件号码
     * @param string $Mobile 手机号
     * @param string $IdCardType 身份证件类型; ID_CARD
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
        if (array_key_exists("Caller",$param) and $param["Caller"] !== null) {
            $this->Caller = new Caller();
            $this->Caller->deserialize($param["Caller"]);
        }

        if (array_key_exists("BankCard",$param) and $param["BankCard"] !== null) {
            $this->BankCard = $param["BankCard"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("IdCardType",$param) and $param["IdCardType"] !== null) {
            $this->IdCardType = $param["IdCardType"];
        }
    }
}
