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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckNewMfaCode请求参数结构体
 *
 * @method string getSkey() 获取登录态Skey
 * @method void setSkey(string $Skey) 设置登录态Skey
 * @method string getInterface() 获取接口名
 * @method void setInterface(string $Interface) 设置接口名
 * @method string getClientIP() 获取IP
 * @method void setClientIP(string $ClientIP) 设置IP
 * @method string getClientUA() 获取浏览器UA
 * @method void setClientUA(string $ClientUA) 设置浏览器UA
 * @method integer getAuthType() 获取验证类型
 * @method void setAuthType(integer $AuthType) 设置验证类型
 * @method integer getOwnerUin() 获取主账号uin
 * @method void setOwnerUin(integer $OwnerUin) 设置主账号uin
 * @method integer getPhoneCode() 获取手机验证码
 * @method void setPhoneCode(integer $PhoneCode) 设置手机验证码
 * @method integer getPhoneNumber() 获取手机号码
 * @method void setPhoneNumber(integer $PhoneNumber) 设置手机号码
 * @method integer getMailCode() 获取邮箱验证码
 * @method void setMailCode(integer $MailCode) 设置邮箱验证码
 * @method string getMail() 获取邮箱
 * @method void setMail(string $Mail) 设置邮箱
 * @method integer getCountryCode() 获取手机国码
 * @method void setCountryCode(integer $CountryCode) 设置手机国码
 */
class CheckNewMfaCodeRequest extends AbstractModel
{
    /**
     * @var string 登录态Skey
     */
    public $Skey;

    /**
     * @var string 接口名
     */
    public $Interface;

    /**
     * @var string IP
     */
    public $ClientIP;

    /**
     * @var string 浏览器UA
     */
    public $ClientUA;

    /**
     * @var integer 验证类型
     */
    public $AuthType;

    /**
     * @var integer 主账号uin
     */
    public $OwnerUin;

    /**
     * @var integer 手机验证码
     */
    public $PhoneCode;

    /**
     * @var integer 手机号码
     */
    public $PhoneNumber;

    /**
     * @var integer 邮箱验证码
     */
    public $MailCode;

    /**
     * @var string 邮箱
     */
    public $Mail;

    /**
     * @var integer 手机国码
     */
    public $CountryCode;

    /**
     * @param string $Skey 登录态Skey
     * @param string $Interface 接口名
     * @param string $ClientIP IP
     * @param string $ClientUA 浏览器UA
     * @param integer $AuthType 验证类型
     * @param integer $OwnerUin 主账号uin
     * @param integer $PhoneCode 手机验证码
     * @param integer $PhoneNumber 手机号码
     * @param integer $MailCode 邮箱验证码
     * @param string $Mail 邮箱
     * @param integer $CountryCode 手机国码
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
        if (array_key_exists("Skey",$param) and $param["Skey"] !== null) {
            $this->Skey = $param["Skey"];
        }

        if (array_key_exists("Interface",$param) and $param["Interface"] !== null) {
            $this->Interface = $param["Interface"];
        }

        if (array_key_exists("ClientIP",$param) and $param["ClientIP"] !== null) {
            $this->ClientIP = $param["ClientIP"];
        }

        if (array_key_exists("ClientUA",$param) and $param["ClientUA"] !== null) {
            $this->ClientUA = $param["ClientUA"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("PhoneCode",$param) and $param["PhoneCode"] !== null) {
            $this->PhoneCode = $param["PhoneCode"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("MailCode",$param) and $param["MailCode"] !== null) {
            $this->MailCode = $param["MailCode"];
        }

        if (array_key_exists("Mail",$param) and $param["Mail"] !== null) {
            $this->Mail = $param["Mail"];
        }

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }
    }
}
