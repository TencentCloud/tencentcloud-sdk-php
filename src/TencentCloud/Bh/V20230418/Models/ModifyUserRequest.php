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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUser请求参数结构体
 *
 * @method integer getId() 获取<p>用户ID</p>
 * @method void setId(integer $Id) 设置<p>用户ID</p>
 * @method string getRealName() 获取<p>用户姓名，最大长度20个字符，不能包含空格</p>
 * @method void setRealName(string $RealName) 设置<p>用户姓名，最大长度20个字符，不能包含空格</p>
 * @method string getPhone() 获取<p>按照&quot;国家地区代码|手机号&quot;的格式输入。如: &quot;+86|xxxxxxxx&quot;</p>
 * @method void setPhone(string $Phone) 设置<p>按照&quot;国家地区代码|手机号&quot;的格式输入。如: &quot;+86|xxxxxxxx&quot;</p>
 * @method string getEmail() 获取<p>电子邮件</p>
 * @method void setEmail(string $Email) 设置<p>电子邮件</p>
 * @method string getValidateFrom() 获取<p>用户生效时间，如:&quot;2021-09-22T00:00:00+00:00&quot;<br>生效、失效时间不填则用户长期有效</p>
 * @method void setValidateFrom(string $ValidateFrom) 设置<p>用户生效时间，如:&quot;2021-09-22T00:00:00+00:00&quot;<br>生效、失效时间不填则用户长期有效</p>
 * @method string getValidateTo() 获取<p>用户失效时间，如:&quot;2021-09-23T00:00:00+00:00&quot;<br>生效、失效时间不填则用户长期有效</p>
 * @method void setValidateTo(string $ValidateTo) 设置<p>用户失效时间，如:&quot;2021-09-23T00:00:00+00:00&quot;<br>生效、失效时间不填则用户长期有效</p>
 * @method array getGroupIdSet() 获取<p>所属用户组ID集合</p>
 * @method void setGroupIdSet(array $GroupIdSet) 设置<p>所属用户组ID集合</p>
 * @method integer getAuthType() 获取<p>认证方式，0 - 本地，1 - LDAP，2 - OAuth 不传则默认为0</p>
 * @method void setAuthType(integer $AuthType) 设置<p>认证方式，0 - 本地，1 - LDAP，2 - OAuth 不传则默认为0</p>
 * @method string getValidateTime() 获取<p>访问时间段限制， 由0、1组成的字符串，长度168(7 × 24)，代表该用户在一周中允许访问的时间段。字符串中第N个字符代表在一周中的第N个小时， 0 - 代表不允许访问，1 - 代表允许访问</p>
 * @method void setValidateTime(string $ValidateTime) 设置<p>访问时间段限制， 由0、1组成的字符串，长度168(7 × 24)，代表该用户在一周中允许访问的时间段。字符串中第N个字符代表在一周中的第N个小时， 0 - 代表不允许访问，1 - 代表允许访问</p>
 * @method string getDepartmentId() 获取<p>用户所属部门的ID，如1.2.3</p>
 * @method void setDepartmentId(string $DepartmentId) 设置<p>用户所属部门的ID，如1.2.3</p>
 */
class ModifyUserRequest extends AbstractModel
{
    /**
     * @var integer <p>用户ID</p>
     */
    public $Id;

    /**
     * @var string <p>用户姓名，最大长度20个字符，不能包含空格</p>
     */
    public $RealName;

    /**
     * @var string <p>按照&quot;国家地区代码|手机号&quot;的格式输入。如: &quot;+86|xxxxxxxx&quot;</p>
     */
    public $Phone;

    /**
     * @var string <p>电子邮件</p>
     */
    public $Email;

    /**
     * @var string <p>用户生效时间，如:&quot;2021-09-22T00:00:00+00:00&quot;<br>生效、失效时间不填则用户长期有效</p>
     */
    public $ValidateFrom;

    /**
     * @var string <p>用户失效时间，如:&quot;2021-09-23T00:00:00+00:00&quot;<br>生效、失效时间不填则用户长期有效</p>
     */
    public $ValidateTo;

    /**
     * @var array <p>所属用户组ID集合</p>
     */
    public $GroupIdSet;

    /**
     * @var integer <p>认证方式，0 - 本地，1 - LDAP，2 - OAuth 不传则默认为0</p>
     */
    public $AuthType;

    /**
     * @var string <p>访问时间段限制， 由0、1组成的字符串，长度168(7 × 24)，代表该用户在一周中允许访问的时间段。字符串中第N个字符代表在一周中的第N个小时， 0 - 代表不允许访问，1 - 代表允许访问</p>
     */
    public $ValidateTime;

    /**
     * @var string <p>用户所属部门的ID，如1.2.3</p>
     */
    public $DepartmentId;

    /**
     * @param integer $Id <p>用户ID</p>
     * @param string $RealName <p>用户姓名，最大长度20个字符，不能包含空格</p>
     * @param string $Phone <p>按照&quot;国家地区代码|手机号&quot;的格式输入。如: &quot;+86|xxxxxxxx&quot;</p>
     * @param string $Email <p>电子邮件</p>
     * @param string $ValidateFrom <p>用户生效时间，如:&quot;2021-09-22T00:00:00+00:00&quot;<br>生效、失效时间不填则用户长期有效</p>
     * @param string $ValidateTo <p>用户失效时间，如:&quot;2021-09-23T00:00:00+00:00&quot;<br>生效、失效时间不填则用户长期有效</p>
     * @param array $GroupIdSet <p>所属用户组ID集合</p>
     * @param integer $AuthType <p>认证方式，0 - 本地，1 - LDAP，2 - OAuth 不传则默认为0</p>
     * @param string $ValidateTime <p>访问时间段限制， 由0、1组成的字符串，长度168(7 × 24)，代表该用户在一周中允许访问的时间段。字符串中第N个字符代表在一周中的第N个小时， 0 - 代表不允许访问，1 - 代表允许访问</p>
     * @param string $DepartmentId <p>用户所属部门的ID，如1.2.3</p>
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
