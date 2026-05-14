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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户信息
 *
 * @method string getUserId() 获取<p>用户ID</p>
 * @method void setUserId(string $UserId) 设置<p>用户ID</p>
 * @method string getUserName() 获取<p>用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhoneNumber() 获取<p>手机号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneNumber(string $PhoneNumber) 设置<p>手机号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEmail() 获取<p>邮箱</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmail(string $Email) 设置<p>邮箱</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastSignOn() 获取<p>上次登录时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastSignOn(integer $LastSignOn) 设置<p>上次登录时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreatedDate() 获取<p>创建时间</p>
 * @method void setCreatedDate(integer $CreatedDate) 设置<p>创建时间</p>
 * @method string getStatus() 获取<p>状态</p>
 * @method void setStatus(string $Status) 设置<p>状态</p>
 * @method string getUserDataSourceEnum() 获取<p>用户来源</p>
 * @method void setUserDataSourceEnum(string $UserDataSourceEnum) 设置<p>用户来源</p>
 * @method string getNickname() 获取<p>昵称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNickname(string $Nickname) 设置<p>昵称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddress() 获取<p>地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(string $Address) 设置<p>地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBirthdate() 获取<p>生日</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBirthdate(integer $Birthdate) 设置<p>生日</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUserGroups() 获取<p>用户组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserGroups(array $UserGroups) 设置<p>用户组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUserGroupNames() 获取<p>用户组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserGroupNames(array $UserGroupNames) 设置<p>用户组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastModifiedDate() 获取<p>上次修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastModifiedDate(integer $LastModifiedDate) 设置<p>上次修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCustomAttributes() 获取<p>自定义属性</p>
 * @method void setCustomAttributes(array $CustomAttributes) 设置<p>自定义属性</p>
 * @method string getResidentIdentityCard() 获取<p>身份证号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResidentIdentityCard(string $ResidentIdentityCard) 设置<p>身份证号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQqOpenId() 获取<p>QQ的OpenId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQqOpenId(string $QqOpenId) 设置<p>QQ的OpenId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQqUnionId() 获取<p>QQ的UnionId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQqUnionId(string $QqUnionId) 设置<p>QQ的UnionId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWechatOpenId() 获取<p>微信的WechatOpenId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWechatOpenId(string $WechatOpenId) 设置<p>微信的WechatOpenId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWechatUnionId() 获取<p>微信的WechatUnionId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWechatUnionId(string $WechatUnionId) 设置<p>微信的WechatUnionId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlipayUserId() 获取<p>支付宝的AlipayUserId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlipayUserId(string $AlipayUserId) 设置<p>支付宝的AlipayUserId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWeComUserId() 获取<p>企业微信的WeComUserId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeComUserId(string $WeComUserId) 设置<p>企业微信的WeComUserId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>姓名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>姓名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLocale() 获取<p>坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocale(string $Locale) 设置<p>坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGender() 获取<p>性别</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGender(string $Gender) 设置<p>性别</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdentityVerificationMethod() 获取<p>实名核验方式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentityVerificationMethod(string $IdentityVerificationMethod) 设置<p>实名核验方式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIdentityVerified() 获取<p>是否已经实名核验</p>
 * @method void setIdentityVerified(boolean $IdentityVerified) 设置<p>是否已经实名核验</p>
 * @method string getJob() 获取<p>工作</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJob(string $Job) 设置<p>工作</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNationality() 获取<p>国家</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNationality(string $Nationality) 设置<p>国家</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPrimary() 获取<p>是否主账号（进行过账号融合后，主账号为true，从账号为false）</p>
 * @method void setPrimary(boolean $Primary) 设置<p>是否主账号（进行过账号融合后，主账号为true，从账号为false）</p>
 * @method string getZone() 获取<p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置<p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAlreadyFirstLogin() 获取<p>是否已经首次登录</p>
 * @method void setAlreadyFirstLogin(boolean $AlreadyFirstLogin) 设置<p>是否已经首次登录</p>
 * @method string getTenantId() 获取<p>租户id</p>
 * @method void setTenantId(string $TenantId) 设置<p>租户id</p>
 * @method string getUserStoreId() 获取<p>用户目录id</p>
 * @method void setUserStoreId(string $UserStoreId) 设置<p>用户目录id</p>
 * @method integer getVersion() 获取<p>版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(integer $Version) 设置<p>版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLockType() 获取<p>锁定类型（分为管理员锁定，和登录策略锁定）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLockType(string $LockType) 设置<p>锁定类型（分为管理员锁定，和登录策略锁定）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLockTime() 获取<p>锁定时间点</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLockTime(integer $LockTime) 设置<p>锁定时间点</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexedAttribute1() 获取<p>索引字段1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexedAttribute1(string $IndexedAttribute1) 设置<p>索引字段1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexedAttribute2() 获取<p>索引字段2</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexedAttribute2(string $IndexedAttribute2) 设置<p>索引字段2</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexedAttribute3() 获取<p>索引字段3</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexedAttribute3(string $IndexedAttribute3) 设置<p>索引字段3</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexedAttribute4() 获取<p>索引字段4</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexedAttribute4(string $IndexedAttribute4) 设置<p>索引字段4</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexedAttribute5() 获取<p>索引字段5</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexedAttribute5(string $IndexedAttribute5) 设置<p>索引字段5</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUserOrgs() 获取<p>用户所属组织机构ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserOrgs(array $UserOrgs) 设置<p>用户所属组织机构ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWeComUserOrgs() 获取<p>用户所属企业微信组织机构</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeComUserOrgs(array $WeComUserOrgs) 设置<p>用户所属企业微信组织机构</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class User extends AbstractModel
{
    /**
     * @var string <p>用户ID</p>
     */
    public $UserId;

    /**
     * @var string <p>用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string <p>手机号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneNumber;

    /**
     * @var string <p>邮箱</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Email;

    /**
     * @var integer <p>上次登录时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastSignOn;

    /**
     * @var integer <p>创建时间</p>
     */
    public $CreatedDate;

    /**
     * @var string <p>状态</p>
     */
    public $Status;

    /**
     * @var string <p>用户来源</p>
     */
    public $UserDataSourceEnum;

    /**
     * @var string <p>昵称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nickname;

    /**
     * @var string <p>地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var integer <p>生日</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Birthdate;

    /**
     * @var array <p>用户组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserGroups;

    /**
     * @var array <p>用户组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserGroupNames;

    /**
     * @var integer <p>上次修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastModifiedDate;

    /**
     * @var array <p>自定义属性</p>
     */
    public $CustomAttributes;

    /**
     * @var string <p>身份证号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResidentIdentityCard;

    /**
     * @var string <p>QQ的OpenId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QqOpenId;

    /**
     * @var string <p>QQ的UnionId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QqUnionId;

    /**
     * @var string <p>微信的WechatOpenId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WechatOpenId;

    /**
     * @var string <p>微信的WechatUnionId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WechatUnionId;

    /**
     * @var string <p>支付宝的AlipayUserId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlipayUserId;

    /**
     * @var string <p>企业微信的WeComUserId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WeComUserId;

    /**
     * @var string <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>姓名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Locale;

    /**
     * @var string <p>性别</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Gender;

    /**
     * @var string <p>实名核验方式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdentityVerificationMethod;

    /**
     * @var boolean <p>是否已经实名核验</p>
     */
    public $IdentityVerified;

    /**
     * @var string <p>工作</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Job;

    /**
     * @var string <p>国家</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nationality;

    /**
     * @var boolean <p>是否主账号（进行过账号融合后，主账号为true，从账号为false）</p>
     */
    public $Primary;

    /**
     * @var string <p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var boolean <p>是否已经首次登录</p>
     */
    public $AlreadyFirstLogin;

    /**
     * @var string <p>租户id</p>
     */
    public $TenantId;

    /**
     * @var string <p>用户目录id</p>
     */
    public $UserStoreId;

    /**
     * @var integer <p>版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string <p>锁定类型（分为管理员锁定，和登录策略锁定）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LockType;

    /**
     * @var integer <p>锁定时间点</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LockTime;

    /**
     * @var string <p>索引字段1</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexedAttribute1;

    /**
     * @var string <p>索引字段2</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexedAttribute2;

    /**
     * @var string <p>索引字段3</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexedAttribute3;

    /**
     * @var string <p>索引字段4</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexedAttribute4;

    /**
     * @var string <p>索引字段5</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexedAttribute5;

    /**
     * @var array <p>用户所属组织机构ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserOrgs;

    /**
     * @var array <p>用户所属企业微信组织机构</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WeComUserOrgs;

    /**
     * @param string $UserId <p>用户ID</p>
     * @param string $UserName <p>用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PhoneNumber <p>手机号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Email <p>邮箱</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastSignOn <p>上次登录时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreatedDate <p>创建时间</p>
     * @param string $Status <p>状态</p>
     * @param string $UserDataSourceEnum <p>用户来源</p>
     * @param string $Nickname <p>昵称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Address <p>地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Birthdate <p>生日</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UserGroups <p>用户组ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UserGroupNames <p>用户组名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastModifiedDate <p>上次修改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CustomAttributes <p>自定义属性</p>
     * @param string $ResidentIdentityCard <p>身份证号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QqOpenId <p>QQ的OpenId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QqUnionId <p>QQ的UnionId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WechatOpenId <p>微信的WechatOpenId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WechatUnionId <p>微信的WechatUnionId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlipayUserId <p>支付宝的AlipayUserId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WeComUserId <p>企业微信的WeComUserId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>姓名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Locale <p>坐标</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Gender <p>性别</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdentityVerificationMethod <p>实名核验方式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IdentityVerified <p>是否已经实名核验</p>
     * @param string $Job <p>工作</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Nationality <p>国家</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Primary <p>是否主账号（进行过账号融合后，主账号为true，从账号为false）</p>
     * @param string $Zone <p>时区</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AlreadyFirstLogin <p>是否已经首次登录</p>
     * @param string $TenantId <p>租户id</p>
     * @param string $UserStoreId <p>用户目录id</p>
     * @param integer $Version <p>版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LockType <p>锁定类型（分为管理员锁定，和登录策略锁定）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LockTime <p>锁定时间点</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexedAttribute1 <p>索引字段1</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexedAttribute2 <p>索引字段2</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexedAttribute3 <p>索引字段3</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexedAttribute4 <p>索引字段4</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexedAttribute5 <p>索引字段5</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UserOrgs <p>用户所属组织机构ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $WeComUserOrgs <p>用户所属企业微信组织机构</p>
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

        if (array_key_exists("UserGroupNames",$param) and $param["UserGroupNames"] !== null) {
            $this->UserGroupNames = $param["UserGroupNames"];
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

        if (array_key_exists("WeComUserId",$param) and $param["WeComUserId"] !== null) {
            $this->WeComUserId = $param["WeComUserId"];
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

        if (array_key_exists("UserOrgs",$param) and $param["UserOrgs"] !== null) {
            $this->UserOrgs = $param["UserOrgs"];
        }

        if (array_key_exists("WeComUserOrgs",$param) and $param["WeComUserOrgs"] !== null) {
            $this->WeComUserOrgs = $param["WeComUserOrgs"];
        }
    }
}
