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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 到访人员
 *
 * @method string getIDCardNumber() 获取证件号码
 * @method void setIDCardNumber(string $IDCardNumber) 设置证件号码
 * @method string getIDCardType() 获取证件类型。对应关系如下：IDENTITY_CARD: 身份证,
HONG_KONG_AND_MACAO_PASS: 港澳通行证',
PASSPORT: 护照,
DRIVING_LICENSE: 驾照,
OTHER: 其他
 * @method void setIDCardType(string $IDCardType) 设置证件类型。对应关系如下：IDENTITY_CARD: 身份证,
HONG_KONG_AND_MACAO_PASS: 港澳通行证',
PASSPORT: 护照,
DRIVING_LICENSE: 驾照,
OTHER: 其他
 * @method string getCompany() 获取公司名称
 * @method void setCompany(string $Company) 设置公司名称
 * @method string getLanguageType() 获取语言。对应关系：ENGLISH: 英文, CHINESE: 中文
 * @method void setLanguageType(string $LanguageType) 设置语言。对应关系：ENGLISH: 英文, CHINESE: 中文
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method string getTelNumber() 获取电话
 * @method void setTelNumber(string $TelNumber) 设置电话
 * @method string getPosition() 获取职位
 * @method void setPosition(string $Position) 设置职位
 * @method string getWechat() 获取微信
 * @method void setWechat(string $Wechat) 设置微信
 * @method string getEmail() 获取邮箱
 * @method void setEmail(string $Email) 设置邮箱
 */
class Personnel extends AbstractModel
{
    /**
     * @var string 证件号码
     */
    public $IDCardNumber;

    /**
     * @var string 证件类型。对应关系如下：IDENTITY_CARD: 身份证,
HONG_KONG_AND_MACAO_PASS: 港澳通行证',
PASSPORT: 护照,
DRIVING_LICENSE: 驾照,
OTHER: 其他
     */
    public $IDCardType;

    /**
     * @var string 公司名称
     */
    public $Company;

    /**
     * @var string 语言。对应关系：ENGLISH: 英文, CHINESE: 中文
     */
    public $LanguageType;

    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var string 电话
     */
    public $TelNumber;

    /**
     * @var string 职位
     */
    public $Position;

    /**
     * @var string 微信
     */
    public $Wechat;

    /**
     * @var string 邮箱
     */
    public $Email;

    /**
     * @param string $IDCardNumber 证件号码
     * @param string $IDCardType 证件类型。对应关系如下：IDENTITY_CARD: 身份证,
HONG_KONG_AND_MACAO_PASS: 港澳通行证',
PASSPORT: 护照,
DRIVING_LICENSE: 驾照,
OTHER: 其他
     * @param string $Company 公司名称
     * @param string $LanguageType 语言。对应关系：ENGLISH: 英文, CHINESE: 中文
     * @param string $Name 姓名
     * @param string $TelNumber 电话
     * @param string $Position 职位
     * @param string $Wechat 微信
     * @param string $Email 邮箱
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
        if (array_key_exists("IDCardNumber",$param) and $param["IDCardNumber"] !== null) {
            $this->IDCardNumber = $param["IDCardNumber"];
        }

        if (array_key_exists("IDCardType",$param) and $param["IDCardType"] !== null) {
            $this->IDCardType = $param["IDCardType"];
        }

        if (array_key_exists("Company",$param) and $param["Company"] !== null) {
            $this->Company = $param["Company"];
        }

        if (array_key_exists("LanguageType",$param) and $param["LanguageType"] !== null) {
            $this->LanguageType = $param["LanguageType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TelNumber",$param) and $param["TelNumber"] !== null) {
            $this->TelNumber = $param["TelNumber"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("Wechat",$param) and $param["Wechat"] !== null) {
            $this->Wechat = $param["Wechat"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }
    }
}
