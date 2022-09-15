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
 * @method string getPhone() 获取手机号码， 大陆手机号直接填写，如果是其他国家、地区号码,按照"国家地区代码|手机号"的格式输入。如: "+852|xxxxxxxx"
 * @method void setPhone(string $Phone) 设置手机号码， 大陆手机号直接填写，如果是其他国家、地区号码,按照"国家地区代码|手机号"的格式输入。如: "+852|xxxxxxxx"
 * @method integer getId() 获取用户ID
 * @method void setId(integer $Id) 设置用户ID
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
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDepartment(Department $Department) 设置用户所属部门（用于出参）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDepartmentId() 获取用户所属部门（用于入参）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDepartmentId(string $DepartmentId) 设置用户所属部门（用于入参）
注意：此字段可能返回 null，表示取不到有效值。
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
     * @var string 手机号码， 大陆手机号直接填写，如果是其他国家、地区号码,按照"国家地区代码|手机号"的格式输入。如: "+852|xxxxxxxx"
     */
    public $Phone;

    /**
     * @var integer 用户ID
     */
    public $Id;

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
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Department;

    /**
     * @var string 用户所属部门（用于入参）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DepartmentId;

    /**
     * @param string $UserName 用户名, 3-20个字符 必须以英文字母开头，且不能包含字母、数字、.、_、-以外的字符
     * @param string $RealName 用户姓名， 最大20个字符，不能包含空白字符
     * @param string $Phone 手机号码， 大陆手机号直接填写，如果是其他国家、地区号码,按照"国家地区代码|手机号"的格式输入。如: "+852|xxxxxxxx"
     * @param integer $Id 用户ID
     * @param string $Email 电子邮件
     * @param string $ValidateFrom 用户生效时间，如:"2021-09-22T00:00:00+00:00"
生效、失效时间不填则用户长期有效
     * @param string $ValidateTo 用户失效时间，如:"2021-09-22T00:00:00+00:00"
生效、失效时间不填则用户长期有效
     * @param array $GroupSet 所属用户组列表
     * @param integer $AuthType 认证方式，0 - 本地，1 - LDAP，2 - OAuth
     * @param string $ValidateTime 访问时间段限制， 由0、1组成的字符串，长度168(7 × 24)，代表该用户在一周中允许访问的时间段。字符串中第N个字符代表在一周中的第N个小时， 0 - 代表不允许访问，1 - 代表允许访问
     * @param Department $Department 用户所属部门（用于出参）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DepartmentId 用户所属部门（用于入参）
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("RealName",$param) and $param["RealName"] !== null) {
            $this->RealName = $param["RealName"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
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
    }
}
