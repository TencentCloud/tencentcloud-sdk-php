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
 * ModifyUserRole请求参数结构体
 *
 * @method string getUserId() 获取用户ID
 * @method void setUserId(string $UserId) 设置用户ID
 * @method array getRoleIdList() 获取角色ID 列表
 * @method void setRoleIdList(array $RoleIdList) 设置角色ID 列表
 * @method string getEmail() 获取邮箱
 * @method void setEmail(string $Email) 设置邮箱
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getPhoneNumber() 获取手机号
 * @method void setPhoneNumber(string $PhoneNumber) 设置手机号
 * @method string getAreaCode() 获取手机区号
 * @method void setAreaCode(string $AreaCode) 设置手机区号
 * @method string getAppUserId() 获取企业微信应用用户id
 * @method void setAppUserId(string $AppUserId) 设置企业微信应用用户id
 * @method integer getLoginSecurityStatus() 获取是否开启手机验证码登录（0 关闭，1 开启）
 * @method void setLoginSecurityStatus(integer $LoginSecurityStatus) 设置是否开启手机验证码登录（0 关闭，1 开启）
 * @method integer getResetPassWordTip() 获取是否开启密码过期提醒（0 关闭，1 开启
 * @method void setResetPassWordTip(integer $ResetPassWordTip) 设置是否开启密码过期提醒（0 关闭，1 开启
 * @method integer getForceResetPassWord() 获取强制修改密码（0 关闭，1 开启）
 * @method void setForceResetPassWord(integer $ForceResetPassWord) 设置强制修改密码（0 关闭，1 开启）
 * @method integer getPasswordExpired() 获取密码过期提醒时间，30、60、90（默认）、180天
 * @method void setPasswordExpired(integer $PasswordExpired) 设置密码过期提醒时间，30、60、90（默认）、180天
 */
class ModifyUserRoleRequest extends AbstractModel
{
    /**
     * @var string 用户ID
     */
    public $UserId;

    /**
     * @var array 角色ID 列表
     */
    public $RoleIdList;

    /**
     * @var string 邮箱
     */
    public $Email;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 手机号
     */
    public $PhoneNumber;

    /**
     * @var string 手机区号
     */
    public $AreaCode;

    /**
     * @var string 企业微信应用用户id
     */
    public $AppUserId;

    /**
     * @var integer 是否开启手机验证码登录（0 关闭，1 开启）
     */
    public $LoginSecurityStatus;

    /**
     * @var integer 是否开启密码过期提醒（0 关闭，1 开启
     */
    public $ResetPassWordTip;

    /**
     * @var integer 强制修改密码（0 关闭，1 开启）
     */
    public $ForceResetPassWord;

    /**
     * @var integer 密码过期提醒时间，30、60、90（默认）、180天
     */
    public $PasswordExpired;

    /**
     * @param string $UserId 用户ID
     * @param array $RoleIdList 角色ID 列表
     * @param string $Email 邮箱
     * @param string $UserName 用户名
     * @param string $PhoneNumber 手机号
     * @param string $AreaCode 手机区号
     * @param string $AppUserId 企业微信应用用户id
     * @param integer $LoginSecurityStatus 是否开启手机验证码登录（0 关闭，1 开启）
     * @param integer $ResetPassWordTip 是否开启密码过期提醒（0 关闭，1 开启
     * @param integer $ForceResetPassWord 强制修改密码（0 关闭，1 开启）
     * @param integer $PasswordExpired 密码过期提醒时间，30、60、90（默认）、180天
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

        if (array_key_exists("RoleIdList",$param) and $param["RoleIdList"] !== null) {
            $this->RoleIdList = $param["RoleIdList"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("AreaCode",$param) and $param["AreaCode"] !== null) {
            $this->AreaCode = $param["AreaCode"];
        }

        if (array_key_exists("AppUserId",$param) and $param["AppUserId"] !== null) {
            $this->AppUserId = $param["AppUserId"];
        }

        if (array_key_exists("LoginSecurityStatus",$param) and $param["LoginSecurityStatus"] !== null) {
            $this->LoginSecurityStatus = $param["LoginSecurityStatus"];
        }

        if (array_key_exists("ResetPassWordTip",$param) and $param["ResetPassWordTip"] !== null) {
            $this->ResetPassWordTip = $param["ResetPassWordTip"];
        }

        if (array_key_exists("ForceResetPassWord",$param) and $param["ForceResetPassWord"] !== null) {
            $this->ForceResetPassWord = $param["ForceResetPassWord"];
        }

        if (array_key_exists("PasswordExpired",$param) and $param["PasswordExpired"] !== null) {
            $this->PasswordExpired = $param["PasswordExpired"];
        }
    }
}
