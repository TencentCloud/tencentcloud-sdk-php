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
 * 用户角色信息
 *
 * @method integer getId() 获取<p>业务ID</p>
 * @method void setId(integer $Id) 设置<p>业务ID</p>
 * @method array getRoleList() 获取<p>角色列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleList(array $RoleList) 设置<p>角色列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRoleIdList() 获取<p>角色ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleIdList(array $RoleIdList) 设置<p>角色ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserId() 获取<p>用户ID</p>
 * @method void setUserId(string $UserId) 设置<p>用户ID</p>
 * @method string getUserName() 获取<p>用户名</p>
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
 * @method string getCorpId() 获取<p>企业ID</p>
 * @method void setCorpId(string $CorpId) 设置<p>企业ID</p>
 * @method string getEmail() 获取<p>邮箱</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmail(string $Email) 设置<p>邮箱</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedUser() 获取<p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedUser(string $CreatedUser) 设置<p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedUser() 获取<p>更新人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedUser(string $UpdatedUser) 设置<p>更新人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastLogin() 获取<p>最后一次登录时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastLogin(string $LastLogin) 设置<p>最后一次登录时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>账号状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置<p>账号状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhoneNumber() 获取<p>手机号码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneNumber(string $PhoneNumber) 设置<p>手机号码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAreaCode() 获取<p>手机号区号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAreaCode(string $AreaCode) 设置<p>手机号区号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getRootAccount() 获取<p>是否为主账号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRootAccount(boolean $RootAccount) 设置<p>是否为主账号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCorpAdmin() 获取<p>是否为企业管理员</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCorpAdmin(boolean $CorpAdmin) 设置<p>是否为企业管理员</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppUserId() 获取<p>企微用户id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppUserId(string $AppUserId) 设置<p>企微用户id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppUserAliasName() 获取<p>昵称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppUserAliasName(string $AppUserAliasName) 设置<p>昵称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppUserName() 获取<p>应用用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppUserName(string $AppUserName) 设置<p>应用用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getInValidateAppRange() 获取<p>是否在可见范围内</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInValidateAppRange(boolean $InValidateAppRange) 设置<p>是否在可见范围内</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppOpenUserId() 获取<p>用户openid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppOpenUserId(string $AppOpenUserId) 设置<p>用户openid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEmailActivationStatus() 获取<p>邮箱激活状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmailActivationStatus(integer $EmailActivationStatus) 设置<p>邮箱激活状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUserGroupList() 获取<p>用户组信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserGroupList(array $UserGroupList) 设置<p>用户组信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdentityType() 获取<p>用户类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentityType(string $IdentityType) 设置<p>用户类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserRoleListDataUserRoleInfo extends AbstractModel
{
    /**
     * @var integer <p>业务ID</p>
     */
    public $Id;

    /**
     * @var array <p>角色列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleList;

    /**
     * @var array <p>角色ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleIdList;

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
     */
    public $CorpId;

    /**
     * @var string <p>邮箱</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Email;

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
     * @var string <p>更新人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedUser;

    /**
     * @var string <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var string <p>最后一次登录时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastLogin;

    /**
     * @var integer <p>账号状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>手机号码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneNumber;

    /**
     * @var string <p>手机号区号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AreaCode;

    /**
     * @var boolean <p>是否为主账号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RootAccount;

    /**
     * @var boolean <p>是否为企业管理员</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CorpAdmin;

    /**
     * @var string <p>企微用户id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppUserId;

    /**
     * @var string <p>昵称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppUserAliasName;

    /**
     * @var string <p>应用用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppUserName;

    /**
     * @var boolean <p>是否在可见范围内</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InValidateAppRange;

    /**
     * @var string <p>用户openid</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppOpenUserId;

    /**
     * @var integer <p>邮箱激活状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EmailActivationStatus;

    /**
     * @var array <p>用户组信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserGroupList;

    /**
     * @var string <p>用户类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdentityType;

    /**
     * @param integer $Id <p>业务ID</p>
     * @param array $RoleList <p>角色列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RoleIdList <p>角色ID列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserId <p>用户ID</p>
     * @param string $UserName <p>用户名</p>
     * @param string $CorpId <p>企业ID</p>
     * @param string $Email <p>邮箱</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedUser <p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedUser <p>更新人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastLogin <p>最后一次登录时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>账号状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PhoneNumber <p>手机号码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AreaCode <p>手机号区号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $RootAccount <p>是否为主账号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CorpAdmin <p>是否为企业管理员</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppUserId <p>企微用户id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppUserAliasName <p>昵称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppUserName <p>应用用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $InValidateAppRange <p>是否在可见范围内</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppOpenUserId <p>用户openid</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EmailActivationStatus <p>邮箱激活状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UserGroupList <p>用户组信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdentityType <p>用户类型</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RoleList",$param) and $param["RoleList"] !== null) {
            $this->RoleList = [];
            foreach ($param["RoleList"] as $key => $value){
                $obj = new UserRoleListDataRoleInfo();
                $obj->deserialize($value);
                array_push($this->RoleList, $obj);
            }
        }

        if (array_key_exists("RoleIdList",$param) and $param["RoleIdList"] !== null) {
            $this->RoleIdList = $param["RoleIdList"];
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

        if (array_key_exists("LastLogin",$param) and $param["LastLogin"] !== null) {
            $this->LastLogin = $param["LastLogin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("AreaCode",$param) and $param["AreaCode"] !== null) {
            $this->AreaCode = $param["AreaCode"];
        }

        if (array_key_exists("RootAccount",$param) and $param["RootAccount"] !== null) {
            $this->RootAccount = $param["RootAccount"];
        }

        if (array_key_exists("CorpAdmin",$param) and $param["CorpAdmin"] !== null) {
            $this->CorpAdmin = $param["CorpAdmin"];
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

        if (array_key_exists("AppOpenUserId",$param) and $param["AppOpenUserId"] !== null) {
            $this->AppOpenUserId = $param["AppOpenUserId"];
        }

        if (array_key_exists("EmailActivationStatus",$param) and $param["EmailActivationStatus"] !== null) {
            $this->EmailActivationStatus = $param["EmailActivationStatus"];
        }

        if (array_key_exists("UserGroupList",$param) and $param["UserGroupList"] !== null) {
            $this->UserGroupList = [];
            foreach ($param["UserGroupList"] as $key => $value){
                $obj = new UserGroupDTO();
                $obj->deserialize($value);
                array_push($this->UserGroupList, $obj);
            }
        }

        if (array_key_exists("IdentityType",$param) and $param["IdentityType"] !== null) {
            $this->IdentityType = $param["IdentityType"];
        }
    }
}
