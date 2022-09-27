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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 导入用户信息
1、UserName，PhoneNumber ，Email ，WechatOpenId ，WechatUnionId ，AlipayUserId ，QqOpenId ，QqUnionId 八个属性中，导入时必须包含其中一个属性并遵守初始化自定义属性的正则表达式规则。UserName，PhoneNumber，Email的正则表达式在控制台的自定义属性中可以查询到。
2、对于密码的导入，导入的密码支持明文导入，MD5密文导入，SHA1密文导入，BCRYPT密文导入 ，这个需要在PasswordEncryptTypeEnum 字段中指定。
3、IdentityVerified，IdentityVerificationMethod 支持导入，
IdentityVerified 为true，IdentityVerificationMethod必传；
IdentityVerificationMethod 为nameAndIdCard，Name,ResidentIdentityCard必传
IdentityVerificationMethod 为nameIdCardAndPhone，Name,PhoneNumber,ResidentIdentityCard必传;
 *
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getPhoneNumber() 获取手机号
 * @method void setPhoneNumber(string $PhoneNumber) 设置手机号
 * @method string getEmail() 获取邮箱
 * @method void setEmail(string $Email) 设置邮箱
 * @method string getResidentIdentityCard() 获取身份证号
 * @method void setResidentIdentityCard(string $ResidentIdentityCard) 设置身份证号
 * @method string getNickname() 获取昵称
 * @method void setNickname(string $Nickname) 设置昵称
 * @method string getAddress() 获取地址
 * @method void setAddress(string $Address) 设置地址
 * @method array getUserGroup() 获取用户组ID
 * @method void setUserGroup(array $UserGroup) 设置用户组ID
 * @method string getQqOpenId() 获取QQ qqOpenId
 * @method void setQqOpenId(string $QqOpenId) 设置QQ qqOpenId
 * @method string getQqUnionId() 获取QQ qqUnionId
 * @method void setQqUnionId(string $QqUnionId) 设置QQ qqUnionId
 * @method string getWechatOpenId() 获取微信wechatOpenId
 * @method void setWechatOpenId(string $WechatOpenId) 设置微信wechatOpenId
 * @method string getWechatUnionId() 获取微信wechatUnionId
 * @method void setWechatUnionId(string $WechatUnionId) 设置微信wechatUnionId
 * @method string getAlipayUserId() 获取支付宝alipayUserId
 * @method void setAlipayUserId(string $AlipayUserId) 设置支付宝alipayUserId
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getBirthdate() 获取生日
 * @method void setBirthdate(string $Birthdate) 设置生日
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method string getLocale() 获取坐标
 * @method void setLocale(string $Locale) 设置坐标
 * @method string getGender() 获取性别（MALE;FEMALE;UNKNOWN）
 * @method void setGender(string $Gender) 设置性别（MALE;FEMALE;UNKNOWN）
 * @method string getIdentityVerificationMethod() 获取实名核验方式
 * @method void setIdentityVerificationMethod(string $IdentityVerificationMethod) 设置实名核验方式
 * @method boolean getIdentityVerified() 获取是否已实名核验
 * @method void setIdentityVerified(boolean $IdentityVerified) 设置是否已实名核验
 * @method string getJob() 获取工作
 * @method void setJob(string $Job) 设置工作
 * @method string getNationality() 获取国家
 * @method void setNationality(string $Nationality) 设置国家
 * @method string getZone() 获取时区
 * @method void setZone(string $Zone) 设置时区
 * @method string getPassword() 获取密码密文
 * @method void setPassword(string $Password) 设置密码密文
 * @method array getCustomizationAttributes() 获取自定义属性
 * @method void setCustomizationAttributes(array $CustomizationAttributes) 设置自定义属性
 * @method Salt getSalt() 获取密码盐
 * @method void setSalt(Salt $Salt) 设置密码盐
 * @method string getPasswordEncryptTypeEnum() 获取密码加密方式（SHA1;BCRYPT）
 * @method void setPasswordEncryptTypeEnum(string $PasswordEncryptTypeEnum) 设置密码加密方式（SHA1;BCRYPT）
 * @method string getIndexedAttribute1() 获取索引字段1
 * @method void setIndexedAttribute1(string $IndexedAttribute1) 设置索引字段1
 * @method string getIndexedAttribute2() 获取索引字段2
 * @method void setIndexedAttribute2(string $IndexedAttribute2) 设置索引字段2
 * @method string getIndexedAttribute3() 获取索引字段3
 * @method void setIndexedAttribute3(string $IndexedAttribute3) 设置索引字段3
 * @method string getIndexedAttribute4() 获取索引字段4
 * @method void setIndexedAttribute4(string $IndexedAttribute4) 设置索引字段4
 * @method string getIndexedAttribute5() 获取索引字段5
 * @method void setIndexedAttribute5(string $IndexedAttribute5) 设置索引字段5
 */
class ImportUser extends AbstractModel
{
    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 手机号
     */
    public $PhoneNumber;

    /**
     * @var string 邮箱
     */
    public $Email;

    /**
     * @var string 身份证号
     */
    public $ResidentIdentityCard;

    /**
     * @var string 昵称
     */
    public $Nickname;

    /**
     * @var string 地址
     */
    public $Address;

    /**
     * @var array 用户组ID
     */
    public $UserGroup;

    /**
     * @var string QQ qqOpenId
     */
    public $QqOpenId;

    /**
     * @var string QQ qqUnionId
     */
    public $QqUnionId;

    /**
     * @var string 微信wechatOpenId
     */
    public $WechatOpenId;

    /**
     * @var string 微信wechatUnionId
     */
    public $WechatUnionId;

    /**
     * @var string 支付宝alipayUserId
     */
    public $AlipayUserId;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 生日
     */
    public $Birthdate;

    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var string 坐标
     */
    public $Locale;

    /**
     * @var string 性别（MALE;FEMALE;UNKNOWN）
     */
    public $Gender;

    /**
     * @var string 实名核验方式
     */
    public $IdentityVerificationMethod;

    /**
     * @var boolean 是否已实名核验
     */
    public $IdentityVerified;

    /**
     * @var string 工作
     */
    public $Job;

    /**
     * @var string 国家
     */
    public $Nationality;

    /**
     * @var string 时区
     */
    public $Zone;

    /**
     * @var string 密码密文
     */
    public $Password;

    /**
     * @var array 自定义属性
     */
    public $CustomizationAttributes;

    /**
     * @var Salt 密码盐
     */
    public $Salt;

    /**
     * @var string 密码加密方式（SHA1;BCRYPT）
     */
    public $PasswordEncryptTypeEnum;

    /**
     * @var string 索引字段1
     */
    public $IndexedAttribute1;

    /**
     * @var string 索引字段2
     */
    public $IndexedAttribute2;

    /**
     * @var string 索引字段3
     */
    public $IndexedAttribute3;

    /**
     * @var string 索引字段4
     */
    public $IndexedAttribute4;

    /**
     * @var string 索引字段5
     */
    public $IndexedAttribute5;

    /**
     * @param string $UserName 用户名
     * @param string $PhoneNumber 手机号
     * @param string $Email 邮箱
     * @param string $ResidentIdentityCard 身份证号
     * @param string $Nickname 昵称
     * @param string $Address 地址
     * @param array $UserGroup 用户组ID
     * @param string $QqOpenId QQ qqOpenId
     * @param string $QqUnionId QQ qqUnionId
     * @param string $WechatOpenId 微信wechatOpenId
     * @param string $WechatUnionId 微信wechatUnionId
     * @param string $AlipayUserId 支付宝alipayUserId
     * @param string $Description 描述
     * @param string $Birthdate 生日
     * @param string $Name 姓名
     * @param string $Locale 坐标
     * @param string $Gender 性别（MALE;FEMALE;UNKNOWN）
     * @param string $IdentityVerificationMethod 实名核验方式
     * @param boolean $IdentityVerified 是否已实名核验
     * @param string $Job 工作
     * @param string $Nationality 国家
     * @param string $Zone 时区
     * @param string $Password 密码密文
     * @param array $CustomizationAttributes 自定义属性
     * @param Salt $Salt 密码盐
     * @param string $PasswordEncryptTypeEnum 密码加密方式（SHA1;BCRYPT）
     * @param string $IndexedAttribute1 索引字段1
     * @param string $IndexedAttribute2 索引字段2
     * @param string $IndexedAttribute3 索引字段3
     * @param string $IndexedAttribute4 索引字段4
     * @param string $IndexedAttribute5 索引字段5
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("ResidentIdentityCard",$param) and $param["ResidentIdentityCard"] !== null) {
            $this->ResidentIdentityCard = $param["ResidentIdentityCard"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("UserGroup",$param) and $param["UserGroup"] !== null) {
            $this->UserGroup = $param["UserGroup"];
        }

        if (array_key_exists("QqOpenId",$param) and $param["QqOpenId"] !== null) {
            $this->QqOpenId = $param["QqOpenId"];
        }

        if (array_key_exists("QqUnionId",$param) and $param["QqUnionId"] !== null) {
            $this->QqUnionId = $param["QqUnionId"];
        }

        if (array_key_exists("WechatOpenId",$param) and $param["WechatOpenId"] !== null) {
            $this->WechatOpenId = $param["WechatOpenId"];
        }

        if (array_key_exists("WechatUnionId",$param) and $param["WechatUnionId"] !== null) {
            $this->WechatUnionId = $param["WechatUnionId"];
        }

        if (array_key_exists("AlipayUserId",$param) and $param["AlipayUserId"] !== null) {
            $this->AlipayUserId = $param["AlipayUserId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Birthdate",$param) and $param["Birthdate"] !== null) {
            $this->Birthdate = $param["Birthdate"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Locale",$param) and $param["Locale"] !== null) {
            $this->Locale = $param["Locale"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("IdentityVerificationMethod",$param) and $param["IdentityVerificationMethod"] !== null) {
            $this->IdentityVerificationMethod = $param["IdentityVerificationMethod"];
        }

        if (array_key_exists("IdentityVerified",$param) and $param["IdentityVerified"] !== null) {
            $this->IdentityVerified = $param["IdentityVerified"];
        }

        if (array_key_exists("Job",$param) and $param["Job"] !== null) {
            $this->Job = $param["Job"];
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("CustomizationAttributes",$param) and $param["CustomizationAttributes"] !== null) {
            $this->CustomizationAttributes = [];
            foreach ($param["CustomizationAttributes"] as $key => $value){
                $obj = new MemberMap();
                $obj->deserialize($value);
                array_push($this->CustomizationAttributes, $obj);
            }
        }

        if (array_key_exists("Salt",$param) and $param["Salt"] !== null) {
            $this->Salt = new Salt();
            $this->Salt->deserialize($param["Salt"]);
        }

        if (array_key_exists("PasswordEncryptTypeEnum",$param) and $param["PasswordEncryptTypeEnum"] !== null) {
            $this->PasswordEncryptTypeEnum = $param["PasswordEncryptTypeEnum"];
        }

        if (array_key_exists("IndexedAttribute1",$param) and $param["IndexedAttribute1"] !== null) {
            $this->IndexedAttribute1 = $param["IndexedAttribute1"];
        }

        if (array_key_exists("IndexedAttribute2",$param) and $param["IndexedAttribute2"] !== null) {
            $this->IndexedAttribute2 = $param["IndexedAttribute2"];
        }

        if (array_key_exists("IndexedAttribute3",$param) and $param["IndexedAttribute3"] !== null) {
            $this->IndexedAttribute3 = $param["IndexedAttribute3"];
        }

        if (array_key_exists("IndexedAttribute4",$param) and $param["IndexedAttribute4"] !== null) {
            $this->IndexedAttribute4 = $param["IndexedAttribute4"];
        }

        if (array_key_exists("IndexedAttribute5",$param) and $param["IndexedAttribute5"] !== null) {
            $this->IndexedAttribute5 = $param["IndexedAttribute5"];
        }
    }
}
