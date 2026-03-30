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
 * @method string getType() 获取<p>证件类型（护照信息页识别结果）</p>
 * @method void setType(string $Type) 设置<p>证件类型（护照信息页识别结果）</p>
 * @method string getIssuingCountry() 获取<p>发行国家（护照信息页识别结果）</p>
 * @method void setIssuingCountry(string $IssuingCountry) 设置<p>发行国家（护照信息页识别结果）</p>
 * @method string getPassportID() 获取<p>护照号码（护照信息页识别结果）</p>
 * @method void setPassportID(string $PassportID) 设置<p>护照号码（护照信息页识别结果）</p>
 * @method string getSurname() 获取<p>姓（护照信息页识别结果）</p>
 * @method void setSurname(string $Surname) 设置<p>姓（护照信息页识别结果）</p>
 * @method string getGivenName() 获取<p>名（护照信息页识别结果）</p>
 * @method void setGivenName(string $GivenName) 设置<p>名（护照信息页识别结果）</p>
 * @method string getName() 获取<p>姓名（护照信息页识别结果）</p>
 * @method void setName(string $Name) 设置<p>姓名（护照信息页识别结果）</p>
 * @method string getNationality() 获取<p>国籍信息（护照信息页识别结果）</p>
 * @method void setNationality(string $Nationality) 设置<p>国籍信息（护照信息页识别结果）</p>
 * @method string getDateOfBirth() 获取<p>出生日期（护照信息页识别结果）</p>
 * @method void setDateOfBirth(string $DateOfBirth) 设置<p>出生日期（护照信息页识别结果）</p>
 * @method string getSex() 获取<p>性别（护照信息页识别结果）</p>
 * @method void setSex(string $Sex) 设置<p>性别（护照信息页识别结果）</p>
 * @method string getDateOfIssuance() 获取<p>发行日期（护照信息页识别结果）</p>
 * @method void setDateOfIssuance(string $DateOfIssuance) 设置<p>发行日期（护照信息页识别结果）</p>
 * @method string getDateOfExpiration() 获取<p>截止日期（护照信息页识别结果）</p>
 * @method void setDateOfExpiration(string $DateOfExpiration) 设置<p>截止日期（护照信息页识别结果）</p>
 * @method string getSignature() 获取<p>持证人签名（护照信息页识别结果）</p><p>仅中国大陆护照支持返回此字段，港澳台及境外护照不支持</p>
 * @method void setSignature(string $Signature) 设置<p>持证人签名（护照信息页识别结果）</p><p>仅中国大陆护照支持返回此字段，港澳台及境外护照不支持</p>
 * @method string getIssuePlace() 获取<p>签发地点（护照信息页识别结果）</p><p>仅中国大陆护照支持返回此字段，港澳台及境外护照不支持</p>
 * @method void setIssuePlace(string $IssuePlace) 设置<p>签发地点（护照信息页识别结果）</p><p>仅中国大陆护照支持返回此字段，港澳台及境外护照不支持</p>
 * @method string getIssuingAuthority() 获取<p>签发机关（护照信息页识别结果）</p><p>仅中国大陆护照支持返回此字段，港澳台及境外护照不支持</p>
 * @method void setIssuingAuthority(string $IssuingAuthority) 设置<p>签发机关（护照信息页识别结果）</p><p>仅中国大陆护照支持返回此字段，港澳台及境外护照不支持</p>
 * @method string getBirthPlace() 获取<p>出生地（护照信息页识别结果）</p>
 * @method void setBirthPlace(string $BirthPlace) 设置<p>出生地（护照信息页识别结果）</p>
 */
class PassportRecognizeInfos extends AbstractModel
{
    /**
     * @var string <p>证件类型（护照信息页识别结果）</p>
     */
    public $Type;

    /**
     * @var string <p>发行国家（护照信息页识别结果）</p>
     */
    public $IssuingCountry;

    /**
     * @var string <p>护照号码（护照信息页识别结果）</p>
     */
    public $PassportID;

    /**
     * @var string <p>姓（护照信息页识别结果）</p>
     */
    public $Surname;

    /**
     * @var string <p>名（护照信息页识别结果）</p>
     */
    public $GivenName;

    /**
     * @var string <p>姓名（护照信息页识别结果）</p>
     */
    public $Name;

    /**
     * @var string <p>国籍信息（护照信息页识别结果）</p>
     */
    public $Nationality;

    /**
     * @var string <p>出生日期（护照信息页识别结果）</p>
     */
    public $DateOfBirth;

    /**
     * @var string <p>性别（护照信息页识别结果）</p>
     */
    public $Sex;

    /**
     * @var string <p>发行日期（护照信息页识别结果）</p>
     */
    public $DateOfIssuance;

    /**
     * @var string <p>截止日期（护照信息页识别结果）</p>
     */
    public $DateOfExpiration;

    /**
     * @var string <p>持证人签名（护照信息页识别结果）</p><p>仅中国大陆护照支持返回此字段，港澳台及境外护照不支持</p>
     */
    public $Signature;

    /**
     * @var string <p>签发地点（护照信息页识别结果）</p><p>仅中国大陆护照支持返回此字段，港澳台及境外护照不支持</p>
     */
    public $IssuePlace;

    /**
     * @var string <p>签发机关（护照信息页识别结果）</p><p>仅中国大陆护照支持返回此字段，港澳台及境外护照不支持</p>
     */
    public $IssuingAuthority;

    /**
     * @var string <p>出生地（护照信息页识别结果）</p>
     */
    public $BirthPlace;

    /**
     * @param string $Type <p>证件类型（护照信息页识别结果）</p>
     * @param string $IssuingCountry <p>发行国家（护照信息页识别结果）</p>
     * @param string $PassportID <p>护照号码（护照信息页识别结果）</p>
     * @param string $Surname <p>姓（护照信息页识别结果）</p>
     * @param string $GivenName <p>名（护照信息页识别结果）</p>
     * @param string $Name <p>姓名（护照信息页识别结果）</p>
     * @param string $Nationality <p>国籍信息（护照信息页识别结果）</p>
     * @param string $DateOfBirth <p>出生日期（护照信息页识别结果）</p>
     * @param string $Sex <p>性别（护照信息页识别结果）</p>
     * @param string $DateOfIssuance <p>发行日期（护照信息页识别结果）</p>
     * @param string $DateOfExpiration <p>截止日期（护照信息页识别结果）</p>
     * @param string $Signature <p>持证人签名（护照信息页识别结果）</p><p>仅中国大陆护照支持返回此字段，港澳台及境外护照不支持</p>
     * @param string $IssuePlace <p>签发地点（护照信息页识别结果）</p><p>仅中国大陆护照支持返回此字段，港澳台及境外护照不支持</p>
     * @param string $IssuingAuthority <p>签发机关（护照信息页识别结果）</p><p>仅中国大陆护照支持返回此字段，港澳台及境外护照不支持</p>
     * @param string $BirthPlace <p>出生地（护照信息页识别结果）</p>
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

        if (array_key_exists("BirthPlace",$param) and $param["BirthPlace"] !== null) {
            $this->BirthPlace = $param["BirthPlace"];
        }
    }
}
