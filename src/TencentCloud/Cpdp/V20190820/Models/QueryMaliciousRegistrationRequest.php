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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryMaliciousRegistration请求参数结构体
 *
 * @method string getMerchantId() 获取商户ID，调用方使用的商户号信息，与商户主体一一对应
 * @method void setMerchantId(string $MerchantId) 设置商户ID，调用方使用的商户号信息，与商户主体一一对应
 * @method string getMerchantName() 获取商户名称
 * @method void setMerchantName(string $MerchantName) 设置商户名称
 * @method string getCompanyName() 获取企业工商注册标准名称
 * @method void setCompanyName(string $CompanyName) 设置企业工商注册标准名称
 * @method string getRegAddress() 获取注册地址
 * @method void setRegAddress(string $RegAddress) 设置注册地址
 * @method integer getRegTime() 获取商户进件Unix时间，单位秒（非企业注册工商时间)
 * @method void setRegTime(integer $RegTime) 设置商户进件Unix时间，单位秒（非企业注册工商时间)
 * @method string getUSCI() 获取统一社会信用代码
 * @method void setUSCI(string $USCI) 设置统一社会信用代码
 * @method string getRegNumber() 获取工商注册码，匹配优先级为Usci>RegNumber>CompanyName
 * @method void setRegNumber(string $RegNumber) 设置工商注册码，匹配优先级为Usci>RegNumber>CompanyName
 * @method string getEncryptedPhoneNumber() 获取手机号码32位MD5加密结果，全大写，格式为0086-13812345678
 * @method void setEncryptedPhoneNumber(string $EncryptedPhoneNumber) 设置手机号码32位MD5加密结果，全大写，格式为0086-13812345678
 * @method string getEncryptedEmailAddress() 获取邮箱32位MD5加密结果，全大写
 * @method void setEncryptedEmailAddress(string $EncryptedEmailAddress) 设置邮箱32位MD5加密结果，全大写
 * @method string getEncryptedPersonId() 获取身份证MD5加密结果，最后一位x大写
 * @method void setEncryptedPersonId(string $EncryptedPersonId) 设置身份证MD5加密结果，最后一位x大写
 * @method string getIp() 获取填写信息设备的IP地址
 * @method void setIp(string $Ip) 设置填写信息设备的IP地址
 * @method string getChannel() 获取进件渠道号，客户自行编码即可
 * @method void setChannel(string $Channel) 设置进件渠道号，客户自行编码即可
 */
class QueryMaliciousRegistrationRequest extends AbstractModel
{
    /**
     * @var string 商户ID，调用方使用的商户号信息，与商户主体一一对应
     */
    public $MerchantId;

    /**
     * @var string 商户名称
     */
    public $MerchantName;

    /**
     * @var string 企业工商注册标准名称
     */
    public $CompanyName;

    /**
     * @var string 注册地址
     */
    public $RegAddress;

    /**
     * @var integer 商户进件Unix时间，单位秒（非企业注册工商时间)
     */
    public $RegTime;

    /**
     * @var string 统一社会信用代码
     */
    public $USCI;

    /**
     * @var string 工商注册码，匹配优先级为Usci>RegNumber>CompanyName
     */
    public $RegNumber;

    /**
     * @var string 手机号码32位MD5加密结果，全大写，格式为0086-13812345678
     */
    public $EncryptedPhoneNumber;

    /**
     * @var string 邮箱32位MD5加密结果，全大写
     */
    public $EncryptedEmailAddress;

    /**
     * @var string 身份证MD5加密结果，最后一位x大写
     */
    public $EncryptedPersonId;

    /**
     * @var string 填写信息设备的IP地址
     */
    public $Ip;

    /**
     * @var string 进件渠道号，客户自行编码即可
     */
    public $Channel;

    /**
     * @param string $MerchantId 商户ID，调用方使用的商户号信息，与商户主体一一对应
     * @param string $MerchantName 商户名称
     * @param string $CompanyName 企业工商注册标准名称
     * @param string $RegAddress 注册地址
     * @param integer $RegTime 商户进件Unix时间，单位秒（非企业注册工商时间)
     * @param string $USCI 统一社会信用代码
     * @param string $RegNumber 工商注册码，匹配优先级为Usci>RegNumber>CompanyName
     * @param string $EncryptedPhoneNumber 手机号码32位MD5加密结果，全大写，格式为0086-13812345678
     * @param string $EncryptedEmailAddress 邮箱32位MD5加密结果，全大写
     * @param string $EncryptedPersonId 身份证MD5加密结果，最后一位x大写
     * @param string $Ip 填写信息设备的IP地址
     * @param string $Channel 进件渠道号，客户自行编码即可
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
        if (array_key_exists("MerchantId",$param) and $param["MerchantId"] !== null) {
            $this->MerchantId = $param["MerchantId"];
        }

        if (array_key_exists("MerchantName",$param) and $param["MerchantName"] !== null) {
            $this->MerchantName = $param["MerchantName"];
        }

        if (array_key_exists("CompanyName",$param) and $param["CompanyName"] !== null) {
            $this->CompanyName = $param["CompanyName"];
        }

        if (array_key_exists("RegAddress",$param) and $param["RegAddress"] !== null) {
            $this->RegAddress = $param["RegAddress"];
        }

        if (array_key_exists("RegTime",$param) and $param["RegTime"] !== null) {
            $this->RegTime = $param["RegTime"];
        }

        if (array_key_exists("USCI",$param) and $param["USCI"] !== null) {
            $this->USCI = $param["USCI"];
        }

        if (array_key_exists("RegNumber",$param) and $param["RegNumber"] !== null) {
            $this->RegNumber = $param["RegNumber"];
        }

        if (array_key_exists("EncryptedPhoneNumber",$param) and $param["EncryptedPhoneNumber"] !== null) {
            $this->EncryptedPhoneNumber = $param["EncryptedPhoneNumber"];
        }

        if (array_key_exists("EncryptedEmailAddress",$param) and $param["EncryptedEmailAddress"] !== null) {
            $this->EncryptedEmailAddress = $param["EncryptedEmailAddress"];
        }

        if (array_key_exists("EncryptedPersonId",$param) and $param["EncryptedPersonId"] !== null) {
            $this->EncryptedPersonId = $param["EncryptedPersonId"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }
    }
}
