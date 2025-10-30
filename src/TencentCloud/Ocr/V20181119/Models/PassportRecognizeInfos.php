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
 * 信息区证件内容
 *
 * @method string getType() 获取证件类型（护照信息页识别结果）
 * @method void setType(string $Type) 设置证件类型（护照信息页识别结果）
 * @method string getIssuingCountry() 获取发行国家（护照信息页识别结果）
 * @method void setIssuingCountry(string $IssuingCountry) 设置发行国家（护照信息页识别结果）
 * @method string getPassportID() 获取护照号码（护照信息页识别结果）
 * @method void setPassportID(string $PassportID) 设置护照号码（护照信息页识别结果）
 * @method string getSurname() 获取姓（护照信息页识别结果）
 * @method void setSurname(string $Surname) 设置姓（护照信息页识别结果）
 * @method string getGivenName() 获取名（护照信息页识别结果）
 * @method void setGivenName(string $GivenName) 设置名（护照信息页识别结果）
 * @method string getName() 获取姓名（护照信息页识别结果）
 * @method void setName(string $Name) 设置姓名（护照信息页识别结果）
 * @method string getNationality() 获取国籍信息（护照信息页识别结果）
 * @method void setNationality(string $Nationality) 设置国籍信息（护照信息页识别结果）
 * @method string getDateOfBirth() 获取出生日期（护照信息页识别结果）
 * @method void setDateOfBirth(string $DateOfBirth) 设置出生日期（护照信息页识别结果）
 * @method string getSex() 获取性别（护照信息页识别结果）
 * @method void setSex(string $Sex) 设置性别（护照信息页识别结果）
 * @method string getDateOfIssuance() 获取发行日期（护照信息页识别结果）
 * @method void setDateOfIssuance(string $DateOfIssuance) 设置发行日期（护照信息页识别结果）
 * @method string getDateOfExpiration() 获取截止日期（护照信息页识别结果）
 * @method void setDateOfExpiration(string $DateOfExpiration) 设置截止日期（护照信息页识别结果）
 * @method string getSignature() 获取持证人签名（护照信息页识别结果）

仅中国大陆护照支持返回此字段，港澳台及境外护照不支持
 * @method void setSignature(string $Signature) 设置持证人签名（护照信息页识别结果）

仅中国大陆护照支持返回此字段，港澳台及境外护照不支持
 * @method string getIssuePlace() 获取签发地点（护照信息页识别结果）

仅中国大陆护照支持返回此字段，港澳台及境外护照不支持
 * @method void setIssuePlace(string $IssuePlace) 设置签发地点（护照信息页识别结果）

仅中国大陆护照支持返回此字段，港澳台及境外护照不支持
 * @method string getIssuingAuthority() 获取签发机关（护照信息页识别结果）

仅中国大陆护照支持返回此字段，港澳台及境外护照不支持
 * @method void setIssuingAuthority(string $IssuingAuthority) 设置签发机关（护照信息页识别结果）

仅中国大陆护照支持返回此字段，港澳台及境外护照不支持
 */
class PassportRecognizeInfos extends AbstractModel
{
    /**
     * @var string 证件类型（护照信息页识别结果）
     */
    public $Type;

    /**
     * @var string 发行国家（护照信息页识别结果）
     */
    public $IssuingCountry;

    /**
     * @var string 护照号码（护照信息页识别结果）
     */
    public $PassportID;

    /**
     * @var string 姓（护照信息页识别结果）
     */
    public $Surname;

    /**
     * @var string 名（护照信息页识别结果）
     */
    public $GivenName;

    /**
     * @var string 姓名（护照信息页识别结果）
     */
    public $Name;

    /**
     * @var string 国籍信息（护照信息页识别结果）
     */
    public $Nationality;

    /**
     * @var string 出生日期（护照信息页识别结果）
     */
    public $DateOfBirth;

    /**
     * @var string 性别（护照信息页识别结果）
     */
    public $Sex;

    /**
     * @var string 发行日期（护照信息页识别结果）
     */
    public $DateOfIssuance;

    /**
     * @var string 截止日期（护照信息页识别结果）
     */
    public $DateOfExpiration;

    /**
     * @var string 持证人签名（护照信息页识别结果）

仅中国大陆护照支持返回此字段，港澳台及境外护照不支持
     */
    public $Signature;

    /**
     * @var string 签发地点（护照信息页识别结果）

仅中国大陆护照支持返回此字段，港澳台及境外护照不支持
     */
    public $IssuePlace;

    /**
     * @var string 签发机关（护照信息页识别结果）

仅中国大陆护照支持返回此字段，港澳台及境外护照不支持
     */
    public $IssuingAuthority;

    /**
     * @param string $Type 证件类型（护照信息页识别结果）
     * @param string $IssuingCountry 发行国家（护照信息页识别结果）
     * @param string $PassportID 护照号码（护照信息页识别结果）
     * @param string $Surname 姓（护照信息页识别结果）
     * @param string $GivenName 名（护照信息页识别结果）
     * @param string $Name 姓名（护照信息页识别结果）
     * @param string $Nationality 国籍信息（护照信息页识别结果）
     * @param string $DateOfBirth 出生日期（护照信息页识别结果）
     * @param string $Sex 性别（护照信息页识别结果）
     * @param string $DateOfIssuance 发行日期（护照信息页识别结果）
     * @param string $DateOfExpiration 截止日期（护照信息页识别结果）
     * @param string $Signature 持证人签名（护照信息页识别结果）

仅中国大陆护照支持返回此字段，港澳台及境外护照不支持
     * @param string $IssuePlace 签发地点（护照信息页识别结果）

仅中国大陆护照支持返回此字段，港澳台及境外护照不支持
     * @param string $IssuingAuthority 签发机关（护照信息页识别结果）

仅中国大陆护照支持返回此字段，港澳台及境外护照不支持
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("IssuingCountry",$param) and $param["IssuingCountry"] !== null) {
            $this->IssuingCountry = $param["IssuingCountry"];
        }

        if (array_key_exists("PassportID",$param) and $param["PassportID"] !== null) {
            $this->PassportID = $param["PassportID"];
        }

        if (array_key_exists("Surname",$param) and $param["Surname"] !== null) {
            $this->Surname = $param["Surname"];
        }

        if (array_key_exists("GivenName",$param) and $param["GivenName"] !== null) {
            $this->GivenName = $param["GivenName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("DateOfBirth",$param) and $param["DateOfBirth"] !== null) {
            $this->DateOfBirth = $param["DateOfBirth"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("DateOfIssuance",$param) and $param["DateOfIssuance"] !== null) {
            $this->DateOfIssuance = $param["DateOfIssuance"];
        }

        if (array_key_exists("DateOfExpiration",$param) and $param["DateOfExpiration"] !== null) {
            $this->DateOfExpiration = $param["DateOfExpiration"];
        }

        if (array_key_exists("Signature",$param) and $param["Signature"] !== null) {
            $this->Signature = $param["Signature"];
        }

        if (array_key_exists("IssuePlace",$param) and $param["IssuePlace"] !== null) {
            $this->IssuePlace = $param["IssuePlace"];
        }

        if (array_key_exists("IssuingAuthority",$param) and $param["IssuingAuthority"] !== null) {
            $this->IssuingAuthority = $param["IssuingAuthority"];
        }
    }
}
