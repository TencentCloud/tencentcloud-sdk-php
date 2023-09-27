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
     * @param string $UserId 用户ID
     * @param array $RoleIdList 角色ID 列表
     * @param string $Email 邮箱
     * @param string $UserName 用户名
     * @param string $PhoneNumber 手机号
     * @param string $AreaCode 手机区号
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
    }
}
