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
 * 用户信息
 *
 * @method string getUserName() 获取用户名, 3-20个字符 必须以英文字母开头，且不能包含字母、数字、.、_、-以外的字符
 * @method void setUserName(string $UserName) 设置用户名, 3-20个字符 必须以英文字母开头，且不能包含字母、数字、.、_、-以外的字符
 * @method string getRealName() 获取用户姓名， 最大20个字符，不能包含空白字符
 * @method void setRealName(string $RealName) 设置用户姓名， 最大20个字符，不能包含空白字符
 * @method integer getId() 获取用户ID
 * @method void setId(integer $Id) 设置用户ID
 * @method string getPhone() 获取手机号码， 大陆手机号直接填写，如果是其他国家、地区号码,按照"国家地区代码|手机号"的格式输入。如: "+852|xxxxxxxx"
 * @method void setPhone(string $Phone) 设置手机号码， 大陆手机号直接填写，如果是其他国家、地区号码,按照"国家地区代码|手机号"的格式输入。如: "+852|xxxxxxxx"
 * @method string getEmail() 获取电子邮件
 * @method void setEmail(string $Email) 设置电子邮件
 * @method string getValidateFrom() 获取用户生效时间，如:"2021-09-22T00:00:00+00:00"
生效、失效时间不填则用户长期有效
 * @method void setValidateFrom(string $ValidateFrom) 设置用户生效时间，如:"2021-09-22T00:00:00+00:00"
生效、失效时间不填则用户长期有效
 * @method string getValidateTo() 获取用户失效时间，如:"2021-09-22T00:00:00+00:00"
生效、失效时间不填则用户长期有效
 * @method void setValidateTo(string $ValidateTo) 设置用户失效时间，如:"2021-09-22T00:00:00+00:00"
生效、失效时间不填则用户长期有效
 * @method array getGroupSet() 获取所属用户组列表
 * @method void setGroupSet(array $GroupSet) 设置所属用户组列表
 * @method integer getAuthType() 获取认证方式，0 - 本地，1 - LDAP，2 - OAuth
 * @method void setAuthType(integer $AuthType) 设置认证方式，0 - 本地，1 - LDAP，2 - OAuth
 * @method string getValidateTime() 获取访问时间段限制， 由0、1组成的字符串，长度168(7 × 24)，代表该用户在一周中允许访问的时间段。字符串中第N个字符代表在一周中的第N个小时， 0 - 代表不允许访问，1 - 代表允许访问
 * @method void setValidateTime(string $ValidateTime) 设置访问时间段限制， 由0、1组成的字符串，长度168(7 × 24)，代表该用户在一周中允许访问的时间段。字符串中第N个字符代表在一周中的第N个小时， 0 - 代表不允许访问，1 - 代表允许访问
 * @method Department getDepartment() 获取用户所属部门（用于出参）
 * @method void setDepartment(Department $Department) 设置用户所属部门（用于出参）
 * @method string getDepartmentId() 获取用户所属部门（用于入参）
 * @method void setDepartmentId(string $DepartmentId) 设置用户所属部门（用于入参）
 * @method integer getActiveStatus() 获取激活状态 0 - 未激活 1 - 激活
 * @method void setActiveStatus(integer $ActiveStatus) 设置激活状态 0 - 未激活 1 - 激活
 * @method integer getLockStatus() 获取锁定状态 0 - 未锁定 1 - 锁定
 * @method void setLockStatus(integer $LockStatus) 设置锁定状态 0 - 未锁定 1 - 锁定
 * @method integer getUKeyStatus() 获取ukey绑定状态 0 - 未绑定 1 - 已绑定
 * @method void setUKeyStatus(integer $UKeyStatus) 设置ukey绑定状态 0 - 未绑定 1 - 已绑定
 * @method string getStatus() 获取状态 与Filter中一致
 * @method void setStatus(string $Status) 设置状态 与Filter中一致
 * @method integer getAclVersion() 获取权限版本
 * @method void setAclVersion(integer $AclVersion) 设置权限版本
 */
class User extends AbstractModel
{
    /**
     * @var string 用户名, 3-20个字符 必须以英文字母开头，且不能包含字母、数字、.、_、-以外的字符
     */
    public $UserName;

    /**
     * @var string 用户姓名， 最大20个字符，不能包含空白字符
     */
    public $RealName;

    /**
     * @var integer 用户ID
     */
    public $Id;

    /**
     * @var string 手机号码， 大陆手机号直接填写，如果是其他国家、地区号码,按照"国家地区代码|手机号"的格式输入。如: "+852|xxxxxxxx"
     */
    public $Phone;

    /**
     * @var string 电子邮件
     */
    public $Email;

    /**
     * @var string 用户生效时间，如:"2021-09-22T00:00:00+00:00"
生效、失效时间不填则用户长期有效
     */
    public $ValidateFrom;

    /**
     * @var string 用户失效时间，如:"2021-09-22T00:00:00+00:00"
生效、失效时间不填则用户长期有效
     */
    public $ValidateTo;

    /**
     * @var array 所属用户组列表
     */
    public $GroupSet;

    /**
     * @var integer 认证方式，0 - 本地，1 - LDAP，2 - OAuth
     */
    public $AuthType;

    /**
     * @var string 访问时间段限制， 由0、1组成的字符串，长度168(7 × 24)，代表该用户在一周中允许访问的时间段。字符串中第N个字符代表在一周中的第N个小时， 0 - 代表不允许访问，1 - 代表允许访问
     */
    public $ValidateTime;

    /**
     * @var Department 用户所属部门（用于出参）
     */
    public $Department;

    /**
     * @var string 用户所属部门（用于入参）
     */
    public $DepartmentId;

    /**
     * @var integer 激活状态 0 - 未激活 1 - 激活
     */
    public $ActiveStatus;

    /**
     * @var integer 锁定状态 0 - 未锁定 1 - 锁定
     */
    public $LockStatus;

    /**
     * @var integer ukey绑定状态 0 - 未绑定 1 - 已绑定
     */
    public $UKeyStatus;

    /**
     * @var string 状态 与Filter中一致
     */
    public $Status;

    /**
     * @var integer 权限版本
     */
    public $AclVersion;

    /**
     * @param string $UserName 用户名, 3-20个字符 必须以英文字母开头，且不能包含字母、数字、.、_、-以外的字符
     * @param string $RealName 用户姓名， 最大20个字符，不能包含空白字符
     * @param integer $Id 用户ID
     * @param string $Phone 手机号码， 大陆手机号直接填写，如果是其他国家、地区号码,按照"国家地区代码|手机号"的格式输入。如: "+852|xxxxxxxx"
     * @param string $Email 电子邮件
     * @param string $ValidateFrom 用户生效时间，如:"2021-09-22T00:00:00+00:00"
生效、失效时间不填则用户长期有效
     * @param string $ValidateTo 用户失效时间，如:"2021-09-22T00:00:00+00:00"
生效、失效时间不填则用户长期有效
     * @param array $GroupSet 所属用户组列表
     * @param integer $AuthType 认证方式，0 - 本地，1 - LDAP，2 - OAuth
     * @param string $ValidateTime 访问时间段限制， 由0、1组成的字符串，长度168(7 × 24)，代表该用户在一周中允许访问的时间段。字符串中第N个字符代表在一周中的第N个小时， 0 - 代表不允许访问，1 - 代表允许访问
     * @param Department $Department 用户所属部门（用于出参）
     * @param string $DepartmentId 用户所属部门（用于入参）
     * @param integer $ActiveStatus 激活状态 0 - 未激活 1 - 激活
     * @param integer $LockStatus 锁定状态 0 - 未锁定 1 - 锁定
     * @param integer $UKeyStatus ukey绑定状态 0 - 未绑定 1 - 已绑定
     * @param string $Status 状态 与Filter中一致
     * @param integer $AclVersion 权限版本
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
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

        if (array_key_exists("GroupSet",$param) and $param["GroupSet"] !== null) {
            $this->GroupSet = [];
            foreach ($param["GroupSet"] as $key => $value){
                $obj = new Group();
                $obj->deserialize($value);
                array_push($this->GroupSet, $obj);
            }
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("ValidateTime",$param) and $param["ValidateTime"] !== null) {
            $this->ValidateTime = $param["ValidateTime"];
        }

        if (array_key_exists("Department",$param) and $param["Department"] !== null) {
            $this->Department = new Department();
            $this->Department->deserialize($param["Department"]);
        }

        if (array_key_exists("DepartmentId",$param) and $param["DepartmentId"] !== null) {
            $this->DepartmentId = $param["DepartmentId"];
        }

        if (array_key_exists("ActiveStatus",$param) and $param["ActiveStatus"] !== null) {
            $this->ActiveStatus = $param["ActiveStatus"];
        }

        if (array_key_exists("LockStatus",$param) and $param["LockStatus"] !== null) {
            $this->LockStatus = $param["LockStatus"];
        }

        if (array_key_exists("UKeyStatus",$param) and $param["UKeyStatus"] !== null) {
            $this->UKeyStatus = $param["UKeyStatus"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AclVersion",$param) and $param["AclVersion"] !== null) {
            $this->AclVersion = $param["AclVersion"];
        }
    }
}
