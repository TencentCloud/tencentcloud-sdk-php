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
 * 自然人信息
 *
 * @method string getPersonType() 获取自然人类型 
2：商户负责人 
3：授权经办人
4：业务联系人 
5：实际控制人 
6：控股股东 
7：受益人 
8：结算人
注意：HELIPAY渠道必传业务联系人
 * @method void setPersonType(string $PersonType) 设置自然人类型 
2：商户负责人 
3：授权经办人
4：业务联系人 
5：实际控制人 
6：控股股东 
7：受益人 
8：结算人
注意：HELIPAY渠道必传业务联系人
 * @method string getIdType() 获取证件类型 
IDCARD：身份证 
PASSPORT：护照 SOLDIERSCERTIFICATE：士兵证 OFFICERSCERTIFICATE：军官证 GATXCERTIFICATE：香港居民来往内地通行证 TWNDCERTIFICATE：台湾同胞来往内地通行证 MACAOCERTIFICATE：澳门来往内地通行证
 * @method void setIdType(string $IdType) 设置证件类型 
IDCARD：身份证 
PASSPORT：护照 SOLDIERSCERTIFICATE：士兵证 OFFICERSCERTIFICATE：军官证 GATXCERTIFICATE：香港居民来往内地通行证 TWNDCERTIFICATE：台湾同胞来往内地通行证 MACAOCERTIFICATE：澳门来往内地通行证
 * @method string getIdNumber() 获取证件号码
 * @method void setIdNumber(string $IdNumber) 设置证件号码
 * @method string getPersonName() 获取姓名
 * @method void setPersonName(string $PersonName) 设置姓名
 * @method string getIdValidityType() 获取证件有效期类型 
LONGTERM：长期有效 
OTHER：非长期有效
 * @method void setIdValidityType(string $IdValidityType) 设置证件有效期类型 
LONGTERM：长期有效 
OTHER：非长期有效
 * @method string getIdEffectiveDate() 获取证件生效日期，yyyy-MM-dd
 * @method void setIdEffectiveDate(string $IdEffectiveDate) 设置证件生效日期，yyyy-MM-dd
 * @method string getIdExpireDate() 获取证件失效日期，yyyy-MM-dd
 * @method void setIdExpireDate(string $IdExpireDate) 设置证件失效日期，yyyy-MM-dd
 * @method string getContactPhone() 获取联系电话，HELIPAY渠道业务联系人必传
 * @method void setContactPhone(string $ContactPhone) 设置联系电话，HELIPAY渠道业务联系人必传
 * @method string getContactAddress() 获取联系地址
 * @method void setContactAddress(string $ContactAddress) 设置联系地址
 * @method string getEmailAddress() 获取邮箱地址
 * @method void setEmailAddress(string $EmailAddress) 设置邮箱地址
 */
class NaturalPersonInfo extends AbstractModel
{
    /**
     * @var string 自然人类型 
2：商户负责人 
3：授权经办人
4：业务联系人 
5：实际控制人 
6：控股股东 
7：受益人 
8：结算人
注意：HELIPAY渠道必传业务联系人
     */
    public $PersonType;

    /**
     * @var string 证件类型 
IDCARD：身份证 
PASSPORT：护照 SOLDIERSCERTIFICATE：士兵证 OFFICERSCERTIFICATE：军官证 GATXCERTIFICATE：香港居民来往内地通行证 TWNDCERTIFICATE：台湾同胞来往内地通行证 MACAOCERTIFICATE：澳门来往内地通行证
     */
    public $IdType;

    /**
     * @var string 证件号码
     */
    public $IdNumber;

    /**
     * @var string 姓名
     */
    public $PersonName;

    /**
     * @var string 证件有效期类型 
LONGTERM：长期有效 
OTHER：非长期有效
     */
    public $IdValidityType;

    /**
     * @var string 证件生效日期，yyyy-MM-dd
     */
    public $IdEffectiveDate;

    /**
     * @var string 证件失效日期，yyyy-MM-dd
     */
    public $IdExpireDate;

    /**
     * @var string 联系电话，HELIPAY渠道业务联系人必传
     */
    public $ContactPhone;

    /**
     * @var string 联系地址
     */
    public $ContactAddress;

    /**
     * @var string 邮箱地址
     */
    public $EmailAddress;

    /**
     * @param string $PersonType 自然人类型 
2：商户负责人 
3：授权经办人
4：业务联系人 
5：实际控制人 
6：控股股东 
7：受益人 
8：结算人
注意：HELIPAY渠道必传业务联系人
     * @param string $IdType 证件类型 
IDCARD：身份证 
PASSPORT：护照 SOLDIERSCERTIFICATE：士兵证 OFFICERSCERTIFICATE：军官证 GATXCERTIFICATE：香港居民来往内地通行证 TWNDCERTIFICATE：台湾同胞来往内地通行证 MACAOCERTIFICATE：澳门来往内地通行证
     * @param string $IdNumber 证件号码
     * @param string $PersonName 姓名
     * @param string $IdValidityType 证件有效期类型 
LONGTERM：长期有效 
OTHER：非长期有效
     * @param string $IdEffectiveDate 证件生效日期，yyyy-MM-dd
     * @param string $IdExpireDate 证件失效日期，yyyy-MM-dd
     * @param string $ContactPhone 联系电话，HELIPAY渠道业务联系人必传
     * @param string $ContactAddress 联系地址
     * @param string $EmailAddress 邮箱地址
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
        if (array_key_exists("PersonType",$param) and $param["PersonType"] !== null) {
            $this->PersonType = $param["PersonType"];
        }

        if (array_key_exists("IdType",$param) and $param["IdType"] !== null) {
            $this->IdType = $param["IdType"];
        }

        if (array_key_exists("IdNumber",$param) and $param["IdNumber"] !== null) {
            $this->IdNumber = $param["IdNumber"];
        }

        if (array_key_exists("PersonName",$param) and $param["PersonName"] !== null) {
            $this->PersonName = $param["PersonName"];
        }

        if (array_key_exists("IdValidityType",$param) and $param["IdValidityType"] !== null) {
            $this->IdValidityType = $param["IdValidityType"];
        }

        if (array_key_exists("IdEffectiveDate",$param) and $param["IdEffectiveDate"] !== null) {
            $this->IdEffectiveDate = $param["IdEffectiveDate"];
        }

        if (array_key_exists("IdExpireDate",$param) and $param["IdExpireDate"] !== null) {
            $this->IdExpireDate = $param["IdExpireDate"];
        }

        if (array_key_exists("ContactPhone",$param) and $param["ContactPhone"] !== null) {
            $this->ContactPhone = $param["ContactPhone"];
        }

        if (array_key_exists("ContactAddress",$param) and $param["ContactAddress"] !== null) {
            $this->ContactAddress = $param["ContactAddress"];
        }

        if (array_key_exists("EmailAddress",$param) and $param["EmailAddress"] !== null) {
            $this->EmailAddress = $param["EmailAddress"];
        }
    }
}
