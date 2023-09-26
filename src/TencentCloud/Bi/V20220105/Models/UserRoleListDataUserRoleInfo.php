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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户角色信息
 *
 * @method integer getId() 获取业务ID
 * @method void setId(integer $Id) 设置业务ID
 * @method array getRoleList() 获取角色列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleList(array $RoleList) 设置角色列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRoleIdList() 获取角色ID列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRoleIdList(array $RoleIdList) 设置角色ID列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserId() 获取用户ID
 * @method void setUserId(string $UserId) 设置用户ID
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getCorpId() 获取企业ID
 * @method void setCorpId(string $CorpId) 设置企业ID
 * @method string getEmail() 获取邮箱
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmail(string $Email) 设置邮箱
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedUser() 获取创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedUser(string $CreatedUser) 设置创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedUser() 获取更新人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedUser(string $UpdatedUser) 设置更新人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastLogin() 获取最后一次登录时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastLogin(string $LastLogin) 设置最后一次登录时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取账号状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置账号状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhoneNumber() 获取手机号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneNumber(string $PhoneNumber) 设置手机号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAreaCode() 获取手机号区号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAreaCode(string $AreaCode) 设置手机号区号
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getRootAccount() 获取是否为主账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRootAccount(boolean $RootAccount) 设置是否为主账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCorpAdmin() 获取是否为企业管理员
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCorpAdmin(boolean $CorpAdmin) 设置是否为企业管理员
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserRoleListDataUserRoleInfo extends AbstractModel
{
    /**
     * @var integer 业务ID
     */
    public $Id;

    /**
     * @var array 角色列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleList;

    /**
     * @var array 角色ID列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RoleIdList;

    /**
     * @var string 用户ID
     */
    public $UserId;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 企业ID
     */
    public $CorpId;

    /**
     * @var string 邮箱
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Email;

    /**
     * @var string 创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedUser;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string 更新人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedUser;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var string 最后一次登录时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastLogin;

    /**
     * @var integer 账号状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 手机号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneNumber;

    /**
     * @var string 手机号区号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AreaCode;

    /**
     * @var boolean 是否为主账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RootAccount;

    /**
     * @var boolean 是否为企业管理员
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CorpAdmin;

    /**
     * @param integer $Id 业务ID
     * @param array $RoleList 角色列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RoleIdList 角色ID列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserId 用户ID
     * @param string $UserName 用户名
     * @param string $CorpId 企业ID
     * @param string $Email 邮箱
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedUser 创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedUser 更新人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastLogin 最后一次登录时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 账号状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PhoneNumber 手机号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AreaCode 手机号区号
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $RootAccount 是否为主账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CorpAdmin 是否为企业管理员
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
    }
}
