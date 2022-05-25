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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUser请求参数结构体
 *
 * @method string getUserName() 获取用户名，最大长度32字符，不能为空
 * @method void setUserName(string $UserName) 设置用户名，最大长度32字符，不能为空
 * @method string getRealName() 获取用户姓名，最大长度32字符，不能为空
 * @method void setRealName(string $RealName) 设置用户姓名，最大长度32字符，不能为空
 * @method string getPhone() 获取手机号
 * @method void setPhone(string $Phone) 设置手机号
 * @method string getEmail() 获取电子邮件
 * @method void setEmail(string $Email) 设置电子邮件
 * @method string getValidateFrom() 获取生效起始时间,不设置则为1970-01-01T08:00:01+08:00
 * @method void setValidateFrom(string $ValidateFrom) 设置生效起始时间,不设置则为1970-01-01T08:00:01+08:00
 * @method string getValidateTo() 获取生效结束时间,不设置则为1970-01-01T08:00:01+08:00
 * @method void setValidateTo(string $ValidateTo) 设置生效结束时间,不设置则为1970-01-01T08:00:01+08:00
 * @method array getGroupIdSet() 获取所属用户组ID集合
 * @method void setGroupIdSet(array $GroupIdSet) 设置所属用户组ID集合
 * @method integer getAuthType() 获取认证方式，0-本地 1-ldap 2-oauth,不传则默认为0
 * @method void setAuthType(integer $AuthType) 设置认证方式，0-本地 1-ldap 2-oauth,不传则默认为0
 * @method string getValidateTime() 获取生效时间段, 0、1组成的字符串，长度168(7*24), 代表该用户的生效时间. 0 - 未生效，1 - 生效
 * @method void setValidateTime(string $ValidateTime) 设置生效时间段, 0、1组成的字符串，长度168(7*24), 代表该用户的生效时间. 0 - 未生效，1 - 生效
 */
class CreateUserRequest extends AbstractModel
{
    /**
     * @var string 用户名，最大长度32字符，不能为空
     */
    public $UserName;

    /**
     * @var string 用户姓名，最大长度32字符，不能为空
     */
    public $RealName;

    /**
     * @var string 手机号
     */
    public $Phone;

    /**
     * @var string 电子邮件
     */
    public $Email;

    /**
     * @var string 生效起始时间,不设置则为1970-01-01T08:00:01+08:00
     */
    public $ValidateFrom;

    /**
     * @var string 生效结束时间,不设置则为1970-01-01T08:00:01+08:00
     */
    public $ValidateTo;

    /**
     * @var array 所属用户组ID集合
     */
    public $GroupIdSet;

    /**
     * @var integer 认证方式，0-本地 1-ldap 2-oauth,不传则默认为0
     */
    public $AuthType;

    /**
     * @var string 生效时间段, 0、1组成的字符串，长度168(7*24), 代表该用户的生效时间. 0 - 未生效，1 - 生效
     */
    public $ValidateTime;

    /**
     * @param string $UserName 用户名，最大长度32字符，不能为空
     * @param string $RealName 用户姓名，最大长度32字符，不能为空
     * @param string $Phone 手机号
     * @param string $Email 电子邮件
     * @param string $ValidateFrom 生效起始时间,不设置则为1970-01-01T08:00:01+08:00
     * @param string $ValidateTo 生效结束时间,不设置则为1970-01-01T08:00:01+08:00
     * @param array $GroupIdSet 所属用户组ID集合
     * @param integer $AuthType 认证方式，0-本地 1-ldap 2-oauth,不传则默认为0
     * @param string $ValidateTime 生效时间段, 0、1组成的字符串，长度168(7*24), 代表该用户的生效时间. 0 - 未生效，1 - 生效
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

        if (array_key_exists("RealName",$param) and $param["RealName"] !== null) {
            $this->RealName = $param["RealName"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("ValidateFrom",$param) and $param["ValidateFrom"] !== null) {
            $this->ValidateFrom = $param["ValidateFrom"];
        }

        if (array_key_exists("ValidateTo",$param) and $param["ValidateTo"] !== null) {
            $this->ValidateTo = $param["ValidateTo"];
        }

        if (array_key_exists("GroupIdSet",$param) and $param["GroupIdSet"] !== null) {
            $this->GroupIdSet = $param["GroupIdSet"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("ValidateTime",$param) and $param["ValidateTime"] !== null) {
            $this->ValidateTime = $param["ValidateTime"];
        }
    }
}
