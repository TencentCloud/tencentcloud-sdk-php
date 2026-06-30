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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户ID和用户名
 *
 * @method string getUserId() 获取<p>用户ID</p>
 * @method void setUserId(string $UserId) 设置<p>用户ID</p>
 * @method string getUserName() 获取<p>用户名</p>
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
 * @method string getCorpId() 获取<p>企业ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCorpId(string $CorpId) 设置<p>企业ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEmail() 获取<p>电子邮箱</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmail(string $Email) 设置<p>电子邮箱</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastLogin() 获取<p>最后一次登录时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastLogin(string $LastLogin) 设置<p>最后一次登录时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>用户状态</p><p>枚举值：</p><ul><li>1： 启用</li><li>0： 停用</li></ul><p>默认值：1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置<p>用户状态</p><p>枚举值：</p><ul><li>1： 启用</li><li>0： 停用</li></ul><p>默认值：1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFirstModify() 获取<p>首次登录是否修改密码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstModify(integer $FirstModify) 设置<p>首次登录是否修改密码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhoneNumber() 获取<p>手机号码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneNumber(string $PhoneNumber) 设置<p>手机号码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAreaCode() 获取<p>手机区号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAreaCode(string $AreaCode) 设置<p>手机区号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedUser() 获取<p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedUser(string $CreatedUser) 设置<p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedUser() 获取<p>修改人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedUser(string $UpdatedUser) 设置<p>修改人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取<p>更改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置<p>更改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGlobalUserName() 获取<p>系统全局角色</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGlobalUserName(string $GlobalUserName) 设置<p>系统全局角色</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGlobalUserCode() 获取<p>系统全局角色编码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGlobalUserCode(string $GlobalUserCode) 设置<p>系统全局角色编码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMobile() 获取<p>手机号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMobile(string $Mobile) 设置<p>手机号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取<p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置<p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppUserId() 获取<p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppUserId(string $AppUserId) 设置<p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppUserAliasName() 获取<p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppUserAliasName(string $AppUserAliasName) 设置<p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppUserName() 获取<p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppUserName(string $AppUserName) 设置<p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getInValidateAppRange() 获取<p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInValidateAppRange(boolean $InValidateAppRange) 设置<p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEmailActivationStatus() 获取<p>-1 免激活  0 未激活  1 已激活 空代表待绑定</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmailActivationStatus(integer $EmailActivationStatus) 设置<p>-1 免激活  0 未激活  1 已激活 空代表待绑定</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getId() 获取<p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置<p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLarkAppId() 获取<p>飞书应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLarkAppId(string $LarkAppId) 设置<p>飞书应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLarkUserId() 获取<p>飞书UserId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLarkUserId(string $LarkUserId) 设置<p>飞书UserId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLarkOpenId() 获取<p>飞书OpenId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLarkOpenId(string $LarkOpenId) 设置<p>飞书OpenId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLarkUserName() 获取<p>飞书UserName</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLarkUserName(string $LarkUserName) 设置<p>飞书UserName</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserIdAndUserName extends AbstractModel
{
    /**
     * @var string <p>用户ID</p>
     */
    public $UserId;

    /**
     * @var string <p>用户名</p>
     */
    public $UserName;

    /**
     * @var string <p>企业ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CorpId;

    /**
     * @var string <p>电子邮箱</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Email;

    /**
     * @var string <p>最后一次登录时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastLogin;

    /**
     * @var integer <p>用户状态</p><p>枚举值：</p><ul><li>1： 启用</li><li>0： 停用</li></ul><p>默认值：1</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer <p>首次登录是否修改密码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstModify;

    /**
     * @var string <p>手机号码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneNumber;

    /**
     * @var string <p>手机区号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AreaCode;

    /**
     * @var string <p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedUser;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string <p>修改人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedUser;

    /**
     * @var string <p>更改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var string <p>系统全局角色</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GlobalUserName;

    /**
     * @var string <p>系统全局角色编码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GlobalUserCode;

    /**
     * @var string <p>手机号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mobile;

    /**
     * @var string <p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string <p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppUserId;

    /**
     * @var string <p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppUserAliasName;

    /**
     * @var string <p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppUserName;

    /**
     * @var boolean <p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InValidateAppRange;

    /**
     * @var integer <p>-1 免激活  0 未激活  1 已激活 空代表待绑定</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EmailActivationStatus;

    /**
     * @var integer <p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string <p>飞书应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LarkAppId;

    /**
     * @var string <p>飞书UserId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LarkUserId;

    /**
     * @var string <p>飞书OpenId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LarkOpenId;

    /**
     * @var string <p>飞书UserName</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LarkUserName;

    /**
     * @param string $UserId <p>用户ID</p>
     * @param string $UserName <p>用户名</p>
     * @param string $CorpId <p>企业ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Email <p>电子邮箱</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastLogin <p>最后一次登录时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>用户状态</p><p>枚举值：</p><ul><li>1： 启用</li><li>0： 停用</li></ul><p>默认值：1</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FirstModify <p>首次登录是否修改密码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PhoneNumber <p>手机号码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AreaCode <p>手机区号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedUser <p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedUser <p>修改人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt <p>更改时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GlobalUserName <p>系统全局角色</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GlobalUserCode <p>系统全局角色编码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mobile <p>手机号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId <p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppUserId <p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppUserAliasName <p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppUserName <p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $InValidateAppRange <p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EmailActivationStatus <p>-1 免激活  0 未激活  1 已激活 空代表待绑定</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Id <p>1</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LarkAppId <p>飞书应用ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LarkUserId <p>飞书UserId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LarkOpenId <p>飞书OpenId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LarkUserName <p>飞书UserName</p>
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

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("LastLogin",$param) and $param["LastLogin"] !== null) {
            $this->LastLogin = $param["LastLogin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FirstModify",$param) and $param["FirstModify"] !== null) {
            $this->FirstModify = $param["FirstModify"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("AreaCode",$param) and $param["AreaCode"] !== null) {
            $this->AreaCode = $param["AreaCode"];
        }

        if (array_key_exists("CreatedUser",$param) and $param["CreatedUser"] !== null) {
            $this->CreatedUser = $param["CreatedUser"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedUser",$param) and $param["UpdatedUser"] !== null) {
            $this->UpdatedUser = $param["UpdatedUser"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("GlobalUserName",$param) and $param["GlobalUserName"] !== null) {
            $this->GlobalUserName = $param["GlobalUserName"];
        }

        if (array_key_exists("GlobalUserCode",$param) and $param["GlobalUserCode"] !== null) {
            $this->GlobalUserCode = $param["GlobalUserCode"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AppUserId",$param) and $param["AppUserId"] !== null) {
            $this->AppUserId = $param["AppUserId"];
        }

        if (array_key_exists("AppUserAliasName",$param) and $param["AppUserAliasName"] !== null) {
            $this->AppUserAliasName = $param["AppUserAliasName"];
        }

        if (array_key_exists("AppUserName",$param) and $param["AppUserName"] !== null) {
            $this->AppUserName = $param["AppUserName"];
        }

        if (array_key_exists("InValidateAppRange",$param) and $param["InValidateAppRange"] !== null) {
            $this->InValidateAppRange = $param["InValidateAppRange"];
        }

        if (array_key_exists("EmailActivationStatus",$param) and $param["EmailActivationStatus"] !== null) {
            $this->EmailActivationStatus = $param["EmailActivationStatus"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("LarkAppId",$param) and $param["LarkAppId"] !== null) {
            $this->LarkAppId = $param["LarkAppId"];
        }

        if (array_key_exists("LarkUserId",$param) and $param["LarkUserId"] !== null) {
            $this->LarkUserId = $param["LarkUserId"];
        }

        if (array_key_exists("LarkOpenId",$param) and $param["LarkOpenId"] !== null) {
            $this->LarkOpenId = $param["LarkOpenId"];
        }

        if (array_key_exists("LarkUserName",$param) and $param["LarkUserName"] !== null) {
            $this->LarkUserName = $param["LarkUserName"];
        }
    }
}
