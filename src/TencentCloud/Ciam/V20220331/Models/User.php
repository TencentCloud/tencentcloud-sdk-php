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
 * 用户信息
 *
 * @method string getUserId() 获取用户ID
 * @method void setUserId(string $UserId) 设置用户ID
 * @method string getUserName() 获取用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhoneNumber() 获取手机号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneNumber(string $PhoneNumber) 设置手机号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEmail() 获取邮箱
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmail(string $Email) 设置邮箱
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastSignOn() 获取上次登录时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastSignOn(integer $LastSignOn) 设置上次登录时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreatedDate() 获取创建时间
 * @method void setCreatedDate(integer $CreatedDate) 设置创建时间
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getUserDataSourceEnum() 获取用户来源
 * @method void setUserDataSourceEnum(string $UserDataSourceEnum) 设置用户来源
 * @method string getNickname() 获取昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNickname(string $Nickname) 设置昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddress() 获取地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(string $Address) 设置地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBirthdate() 获取生日
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBirthdate(integer $Birthdate) 设置生日
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUserGroups() 获取用户组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserGroups(array $UserGroups) 设置用户组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastModifiedDate() 获取上次修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastModifiedDate(integer $LastModifiedDate) 设置上次修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCustomAttributes() 获取自定义属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomAttributes(array $CustomAttributes) 设置自定义属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResidentIdentityCard() 获取身份证号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResidentIdentityCard(string $ResidentIdentityCard) 设置身份证号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQqOpenId() 获取QQ的OpenId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQqOpenId(string $QqOpenId) 设置QQ的OpenId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQqUnionId() 获取QQ的UnionId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQqUnionId(string $QqUnionId) 设置QQ的UnionId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWechatOpenId() 获取微信的WechatOpenId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWechatOpenId(string $WechatOpenId) 设置微信的WechatOpenId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWechatUnionId() 获取微信的WechatUnionId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWechatUnionId(string $WechatUnionId) 设置微信的WechatUnionId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlipayUserId() 获取支付宝的AlipayUserId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlipayUserId(string $AlipayUserId) 设置支付宝的AlipayUserId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLocale() 获取坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocale(string $Locale) 设置坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGender() 获取性别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGender(string $Gender) 设置性别
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdentityVerificationMethod() 获取实名核验方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentityVerificationMethod(string $IdentityVerificationMethod) 设置实名核验方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIdentityVerified() 获取是否已经实名核验
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentityVerified(boolean $IdentityVerified) 设置是否已经实名核验
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJob() 获取工作
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJob(string $Job) 设置工作
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNationality() 获取国家
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNationality(string $Nationality) 设置国家
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPrimary() 获取是否主账号（进行过账号融合后，主账号为true，从账号为false）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrimary(boolean $Primary) 设置是否主账号（进行过账号融合后，主账号为true，从账号为false）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取时区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置时区
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAlreadyFirstLogin() 获取是否已经首次登录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlreadyFirstLogin(boolean $AlreadyFirstLogin) 设置是否已经首次登录
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTenantId() 获取租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTenantId(string $TenantId) 设置租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserStoreId() 获取用户目录id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserStoreId(string $UserStoreId) 设置用户目录id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVersion() 获取版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(integer $Version) 设置版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLockType() 获取锁定类型（分为管理员锁定，和登录策略锁定）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLockType(string $LockType) 设置锁定类型（分为管理员锁定，和登录策略锁定）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLockTime() 获取锁定时间点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLockTime(integer $LockTime) 设置锁定时间点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexedAttribute1() 获取索引字段1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexedAttribute1(string $IndexedAttribute1) 设置索引字段1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexedAttribute2() 获取索引字段2
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexedAttribute2(string $IndexedAttribute2) 设置索引字段2
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexedAttribute3() 获取索引字段3
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexedAttribute3(string $IndexedAttribute3) 设置索引字段3
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexedAttribute4() 获取索引字段4
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexedAttribute4(string $IndexedAttribute4) 设置索引字段4
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexedAttribute5() 获取索引字段5
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexedAttribute5(string $IndexedAttribute5) 设置索引字段5
注意：此字段可能返回 null，表示取不到有效值。
 */
class User extends AbstractModel
{
    /**
     * @var string 用户ID
     */
    public $UserId;

    /**
     * @var string 用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string 手机号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneNumber;

    /**
     * @var string 邮箱
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Email;

    /**
     * @var integer 上次登录时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastSignOn;

    /**
     * @var integer 创建时间
     */
    public $CreatedDate;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 用户来源
     */
    public $UserDataSourceEnum;

    /**
     * @var string 昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nickname;

    /**
     * @var string 地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var integer 生日
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Birthdate;

    /**
     * @var array 用户组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserGroups;

    /**
     * @var integer 上次修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastModifiedDate;

    /**
     * @var array 自定义属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomAttributes;

    /**
     * @var string 身份证号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResidentIdentityCard;

    /**
     * @var string QQ的OpenId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QqOpenId;

    /**
     * @var string QQ的UnionId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QqUnionId;

    /**
     * @var string 微信的WechatOpenId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WechatOpenId;

    /**
     * @var string 微信的WechatUnionId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WechatUnionId;

    /**
     * @var string 支付宝的AlipayUserId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlipayUserId;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Locale;

    /**
     * @var string 性别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Gender;

    /**
     * @var string 实名核验方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdentityVerificationMethod;

    /**
     * @var boolean 是否已经实名核验
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdentityVerified;

    /**
     * @var string 工作
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Job;

    /**
     * @var string 国家
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nationality;

    /**
     * @var boolean 是否主账号（进行过账号融合后，主账号为true，从账号为false）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Primary;

    /**
     * @var string 时区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var boolean 是否已经首次登录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlreadyFirstLogin;

    /**
     * @var string 租户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TenantId;

    /**
     * @var string 用户目录id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserStoreId;

    /**
     * @var integer 版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string 锁定类型（分为管理员锁定，和登录策略锁定）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LockType;

    /**
     * @var integer 锁定时间点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LockTime;

    /**
     * @var string 索引字段1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexedAttribute1;

    /**
     * @var string 索引字段2
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexedAttribute2;

    /**
     * @var string 索引字段3
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexedAttribute3;

    /**
     * @var string 索引字段4
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexedAttribute4;

    /**
     * @var string 索引字段5
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexedAttribute5;

    /**
     * @param string $UserId 用户ID
     * @param string $UserName 用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PhoneNumber 手机号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Email 邮箱
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastSignOn 上次登录时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreatedDate 创建时间
     * @param string $Status 状态
     * @param string $UserDataSourceEnum 用户来源
     * @param string $Nickname 昵称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Address 地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Birthdate 生日
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UserGroups 用户组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastModifiedDate 上次修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CustomAttributes 自定义属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResidentIdentityCard 身份证号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QqOpenId QQ的OpenId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QqUnionId QQ的UnionId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WechatOpenId 微信的WechatOpenId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WechatUnionId 微信的WechatUnionId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlipayUserId 支付宝的AlipayUserId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Locale 坐标
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Gender 性别
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdentityVerificationMethod 实名核验方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IdentityVerified 是否已经实名核验
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Job 工作
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Nationality 国家
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Primary 是否主账号（进行过账号融合后，主账号为true，从账号为false）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 时区
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AlreadyFirstLogin 是否已经首次登录
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TenantId 租户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserStoreId 用户目录id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Version 版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LockType 锁定类型（分为管理员锁定，和登录策略锁定）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LockTime 锁定时间点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexedAttribute1 索引字段1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexedAttribute2 索引字段2
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexedAttribute3 索引字段3
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexedAttribute4 索引字段4
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexedAttribute5 索引字段5
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
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

        if (array_key_exists("LastSignOn",$param) and $param["LastSignOn"] !== null) {
            $this->LastSignOn = $param["LastSignOn"];
        }

        if (array_key_exists("CreatedDate",$param) and $param["CreatedDate"] !== null) {
            $this->CreatedDate = $param["CreatedDate"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UserDataSourceEnum",$param) and $param["UserDataSourceEnum"] !== null) {
            $this->UserDataSourceEnum = $param["UserDataSourceEnum"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Birthdate",$param) and $param["Birthdate"] !== null) {
            $this->Birthdate = $param["Birthdate"];
        }

        if (array_key_exists("UserGroups",$param) and $param["UserGroups"] !== null) {
            $this->UserGroups = $param["UserGroups"];
        }

        if (array_key_exists("LastModifiedDate",$param) and $param["LastModifiedDate"] !== null) {
            $this->LastModifiedDate = $param["LastModifiedDate"];
        }

        if (array_key_exists("CustomAttributes",$param) and $param["CustomAttributes"] !== null) {
            $this->CustomAttributes = [];
            foreach ($param["CustomAttributes"] as $key => $value){
                $obj = new MemberMap();
                $obj->deserialize($value);
                array_push($this->CustomAttributes, $obj);
            }
        }

        if (array_key_exists("ResidentIdentityCard",$param) and $param["ResidentIdentityCard"] !== null) {
            $this->ResidentIdentityCard = $param["ResidentIdentityCard"];
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

        if (array_key_exists("Primary",$param) and $param["Primary"] !== null) {
            $this->Primary = $param["Primary"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("AlreadyFirstLogin",$param) and $param["AlreadyFirstLogin"] !== null) {
            $this->AlreadyFirstLogin = $param["AlreadyFirstLogin"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("UserStoreId",$param) and $param["UserStoreId"] !== null) {
            $this->UserStoreId = $param["UserStoreId"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("LockType",$param) and $param["LockType"] !== null) {
            $this->LockType = $param["LockType"];
        }

        if (array_key_exists("LockTime",$param) and $param["LockTime"] !== null) {
            $this->LockTime = $param["LockTime"];
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
