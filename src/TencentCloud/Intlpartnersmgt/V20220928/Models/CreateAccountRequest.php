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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAccount请求参数结构体
 *
 * @method string getAccountType() 获取新建客户的账户类型标识。本接口取值为：personal或company
 * @method void setAccountType(string $AccountType) 设置新建客户的账户类型标识。本接口取值为：personal或company
 * @method string getMail() 获取注册邮件地址。需要调用方保证邮件地址的有效性和正确性。
需要满足邮件的格式。如：account@qq.com
 * @method void setMail(string $Mail) 设置注册邮件地址。需要调用方保证邮件地址的有效性和正确性。
需要满足邮件的格式。如：account@qq.com
 * @method string getPassword() 获取账户密码。
长度限制：[8,20]。
需同时包含数字、字母以及特殊符号（!@#$%^&*()等非空格）
 * @method void setPassword(string $Password) 设置账户密码。
长度限制：[8,20]。
需同时包含数字、字母以及特殊符号（!@#$%^&*()等非空格）
 * @method string getConfirmPassword() 获取二次确认密码。必须和Password值相同
 * @method void setConfirmPassword(string $ConfirmPassword) 设置二次确认密码。必须和Password值相同
 * @method string getPhoneNum() 获取客户手机号码。需要调用方保证手机号码的有效性和正确性。
长度限制：[1,32]。支持全球手机号。如18888888888
 * @method void setPhoneNum(string $PhoneNum) 设置客户手机号码。需要调用方保证手机号码的有效性和正确性。
长度限制：[1,32]。支持全球手机号。如18888888888
 * @method string getCountryCode() 获取客户的国家/地区代码。取值参考获取国家/地区码接口GetCountryCodes。如852
 * @method void setCountryCode(string $CountryCode) 设置客户的国家/地区代码。取值参考获取国家/地区码接口GetCountryCodes。如852
 * @method string getArea() 获取客户的IOS2标准国家/地区代码。参考获取国家/地区码接口GetCountryCodes。需要与CountryCode值对应。如HK
 * @method void setArea(string $Area) 设置客户的IOS2标准国家/地区代码。参考获取国家/地区码接口GetCountryCodes。需要与CountryCode值对应。如HK
 * @method string getExtended() 获取拓展字段，默认为空
 * @method void setExtended(string $Extended) 设置拓展字段，默认为空
 */
class CreateAccountRequest extends AbstractModel
{
    /**
     * @var string 新建客户的账户类型标识。本接口取值为：personal或company
     */
    public $AccountType;

    /**
     * @var string 注册邮件地址。需要调用方保证邮件地址的有效性和正确性。
需要满足邮件的格式。如：account@qq.com
     */
    public $Mail;

    /**
     * @var string 账户密码。
长度限制：[8,20]。
需同时包含数字、字母以及特殊符号（!@#$%^&*()等非空格）
     */
    public $Password;

    /**
     * @var string 二次确认密码。必须和Password值相同
     */
    public $ConfirmPassword;

    /**
     * @var string 客户手机号码。需要调用方保证手机号码的有效性和正确性。
长度限制：[1,32]。支持全球手机号。如18888888888
     */
    public $PhoneNum;

    /**
     * @var string 客户的国家/地区代码。取值参考获取国家/地区码接口GetCountryCodes。如852
     */
    public $CountryCode;

    /**
     * @var string 客户的IOS2标准国家/地区代码。参考获取国家/地区码接口GetCountryCodes。需要与CountryCode值对应。如HK
     */
    public $Area;

    /**
     * @var string 拓展字段，默认为空
     */
    public $Extended;

    /**
     * @param string $AccountType 新建客户的账户类型标识。本接口取值为：personal或company
     * @param string $Mail 注册邮件地址。需要调用方保证邮件地址的有效性和正确性。
需要满足邮件的格式。如：account@qq.com
     * @param string $Password 账户密码。
长度限制：[8,20]。
需同时包含数字、字母以及特殊符号（!@#$%^&*()等非空格）
     * @param string $ConfirmPassword 二次确认密码。必须和Password值相同
     * @param string $PhoneNum 客户手机号码。需要调用方保证手机号码的有效性和正确性。
长度限制：[1,32]。支持全球手机号。如18888888888
     * @param string $CountryCode 客户的国家/地区代码。取值参考获取国家/地区码接口GetCountryCodes。如852
     * @param string $Area 客户的IOS2标准国家/地区代码。参考获取国家/地区码接口GetCountryCodes。需要与CountryCode值对应。如HK
     * @param string $Extended 拓展字段，默认为空
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
        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("Mail",$param) and $param["Mail"] !== null) {
            $this->Mail = $param["Mail"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ConfirmPassword",$param) and $param["ConfirmPassword"] !== null) {
            $this->ConfirmPassword = $param["ConfirmPassword"];
        }

        if (array_key_exists("PhoneNum",$param) and $param["PhoneNum"] !== null) {
            $this->PhoneNum = $param["PhoneNum"];
        }

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Extended",$param) and $param["Extended"] !== null) {
            $this->Extended = $param["Extended"];
        }
    }
}
