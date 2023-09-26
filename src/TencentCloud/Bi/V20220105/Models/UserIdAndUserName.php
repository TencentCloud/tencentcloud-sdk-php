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
 * 用户ID和用户名
 *
 * @method string getUserId() 获取用户ID
 * @method void setUserId(string $UserId) 设置用户ID
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getCorpId() 获取企业ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCorpId(string $CorpId) 设置企业ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEmail() 获取电子邮箱
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmail(string $Email) 设置电子邮箱
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastLogin() 获取最后一次登录时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastLogin(string $LastLogin) 设置最后一次登录时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取停启用状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置停启用状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFirstModify() 获取首次登陆是否修改密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstModify(integer $FirstModify) 设置首次登陆是否修改密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhoneNumber() 获取手机号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneNumber(string $PhoneNumber) 设置手机号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAreaCode() 获取手机区号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAreaCode(string $AreaCode) 设置手机区号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedUser() 获取创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedUser(string $CreatedUser) 设置创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedUser() 获取更改人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedUser(string $UpdatedUser) 设置更改人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取更改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置更改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGlobalUserName() 获取全局角色
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGlobalUserName(string $GlobalUserName) 设置全局角色
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMobile() 获取手机号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMobile(string $Mobile) 设置手机号
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserIdAndUserName extends AbstractModel
{
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
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CorpId;

    /**
     * @var string 电子邮箱
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Email;

    /**
     * @var string 最后一次登录时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastLogin;

    /**
     * @var integer 停启用状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 首次登陆是否修改密码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstModify;

    /**
     * @var string 手机号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneNumber;

    /**
     * @var string 手机区号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AreaCode;

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
     * @var string 更改人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedUser;

    /**
     * @var string 更改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var string 全局角色
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GlobalUserName;

    /**
     * @var string 手机号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mobile;

    /**
     * @param string $UserId 用户ID
     * @param string $UserName 用户名
     * @param string $CorpId 企业ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Email 电子邮箱
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastLogin 最后一次登录时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 停启用状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FirstModify 首次登陆是否修改密码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PhoneNumber 手机号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AreaCode 手机区号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedUser 创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedUser 更改人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt 更改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GlobalUserName 全局角色
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mobile 手机号
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

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }
    }
}
