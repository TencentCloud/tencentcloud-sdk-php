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
 * ModifyUser请求参数结构体
 *
 * @method integer getId() 获取用户ID
 * @method void setId(integer $Id) 设置用户ID
 * @method string getRealName() 获取用户姓名，最大长度20个字符，不能包含空格
 * @method void setRealName(string $RealName) 设置用户姓名，最大长度20个字符，不能包含空格
 * @method string getPhone() 获取大陆手机号直接填写，如果是其他国家、地区号码,按照"国家地区代码|手机号"的格式输入。如: "+852|xxxxxxxx"
 * @method void setPhone(string $Phone) 设置大陆手机号直接填写，如果是其他国家、地区号码,按照"国家地区代码|手机号"的格式输入。如: "+852|xxxxxxxx"
 * @method string getEmail() 获取电子邮件
 * @method void setEmail(string $Email) 设置电子邮件
 * @method string getValidateFrom() 获取用户生效时间，如:"2021-09-22T00:00:00+00:00"
生效、失效时间不填则用户长期有效
 * @method void setValidateFrom(string $ValidateFrom) 设置用户生效时间，如:"2021-09-22T00:00:00+00:00"
生效、失效时间不填则用户长期有效
 * @method string getValidateTo() 获取用户失效时间，如:"2021-09-23T00:00:00+00:00"
生效、失效时间不填则用户长期有效
 * @method void setValidateTo(string $ValidateTo) 设置用户失效时间，如:"2021-09-23T00:00:00+00:00"
生效、失效时间不填则用户长期有效
 * @method array getGroupIdSet() 获取所属用户组ID集合
 * @method void setGroupIdSet(array $GroupIdSet) 设置所属用户组ID集合
 * @method integer getAuthType() 获取认证方式，0 - 本地，1 - LDAP，2 - OAuth 不传则默认为0
 * @method void setAuthType(integer $AuthType) 设置认证方式，0 - 本地，1 - LDAP，2 - OAuth 不传则默认为0
 * @method string getValidateTime() 获取访问时间段限制， 由0、1组成的字符串，长度168(7 × 24)，代表该用户在一周中允许访问的时间段。字符串中第N个字符代表在一周中的第N个小时， 0 - 代表不允许访问，1 - 代表允许访问
 * @method void setValidateTime(string $ValidateTime) 设置访问时间段限制， 由0、1组成的字符串，长度168(7 × 24)，代表该用户在一周中允许访问的时间段。字符串中第N个字符代表在一周中的第N个小时， 0 - 代表不允许访问，1 - 代表允许访问
 * @method string getDepartmentId() 获取用户所属部门的ID，如1.2.3
 * @method void setDepartmentId(string $DepartmentId) 设置用户所属部门的ID，如1.2.3
 */
class ModifyUserRequest extends AbstractModel
{
    /**
     * @var integer 用户ID
     */
    public $Id;

    /**
     * @var string 用户姓名，最大长度20个字符，不能包含空格
     */
    public $RealName;

    /**
     * @var string 大陆手机号直接填写，如果是其他国家、地区号码,按照"国家地区代码|手机号"的格式输入。如: "+852|xxxxxxxx"
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
     * @var string 用户失效时间，如:"2021-09-23T00:00:00+00:00"
生效、失效时间不填则用户长期有效
     */
    public $ValidateTo;

    /**
     * @var array 所属用户组ID集合
     */
    public $GroupIdSet;

    /**
     * @var integer 认证方式，0 - 本地，1 - LDAP，2 - OAuth 不传则默认为0
     */
    public $AuthType;

    /**
     * @var string 访问时间段限制， 由0、1组成的字符串，长度168(7 × 24)，代表该用户在一周中允许访问的时间段。字符串中第N个字符代表在一周中的第N个小时， 0 - 代表不允许访问，1 - 代表允许访问
     */
    public $ValidateTime;

    /**
     * @var string 用户所属部门的ID，如1.2.3
     */
    public $DepartmentId;

    /**
     * @param integer $Id 用户ID
     * @param string $RealName 用户姓名，最大长度20个字符，不能包含空格
     * @param string $Phone 大陆手机号直接填写，如果是其他国家、地区号码,按照"国家地区代码|手机号"的格式输入。如: "+852|xxxxxxxx"
     * @param string $Email 电子邮件
     * @param string $ValidateFrom 用户生效时间，如:"2021-09-22T00:00:00+00:00"
生效、失效时间不填则用户长期有效
     * @param string $ValidateTo 用户失效时间，如:"2021-09-23T00:00:00+00:00"
生效、失效时间不填则用户长期有效
     * @param array $GroupIdSet 所属用户组ID集合
     * @param integer $AuthType 认证方式，0 - 本地，1 - LDAP，2 - OAuth 不传则默认为0
     * @param string $ValidateTime 访问时间段限制， 由0、1组成的字符串，长度168(7 × 24)，代表该用户在一周中允许访问的时间段。字符串中第N个字符代表在一周中的第N个小时， 0 - 代表不允许访问，1 - 代表允许访问
     * @param string $DepartmentId 用户所属部门的ID，如1.2.3
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

        if (array_key_exists("DepartmentId",$param) and $param["DepartmentId"] !== null) {
            $this->DepartmentId = $param["DepartmentId"];
        }
    }
}
