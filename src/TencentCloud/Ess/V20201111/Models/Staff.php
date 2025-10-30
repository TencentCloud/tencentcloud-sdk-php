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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业员工信息。
 *
 * @method string getUserId() 获取员工在腾讯电子签平台的唯一身份标识，为32位字符串。
注：`创建和更新场景无需填写。`
 * @method void setUserId(string $UserId) 设置员工在腾讯电子签平台的唯一身份标识，为32位字符串。
注：`创建和更新场景无需填写。`
 * @method string getDisplayName() 获取显示的用户名/昵称。
 * @method void setDisplayName(string $DisplayName) 设置显示的用户名/昵称。
 * @method string getMobile() 获取用户手机号码， 支持中国大陆手机号11位数字(无需加+86前缀或其他字符)。
 * @method void setMobile(string $Mobile) 设置用户手机号码， 支持中国大陆手机号11位数字(无需加+86前缀或其他字符)。
 * @method string getEmail() 获取用户邮箱。
 * @method void setEmail(string $Email) 设置用户邮箱。
 * @method string getOpenId() 获取用户在第三方平台ID。
注：`如需在此接口提醒员工实名，该参数不传。`
 * @method void setOpenId(string $OpenId) 设置用户在第三方平台ID。
注：`如需在此接口提醒员工实名，该参数不传。`
 * @method array getRoles() 获取员工角色信息。
注：`创建和更新场景无需填写。`
 * @method void setRoles(array $Roles) 设置员工角色信息。
注：`创建和更新场景无需填写。`
 * @method Department getDepartment() 获取员工部门信息。
 * @method void setDepartment(Department $Department) 设置员工部门信息。
 * @method boolean getVerified() 获取员工是否实名。
注：`创建和更新场景无需填写。`
 * @method void setVerified(boolean $Verified) 设置员工是否实名。
注：`创建和更新场景无需填写。`
 * @method integer getCreatedOn() 获取员工创建时间戳，单位秒。
注：`创建和更新场景无需填写。`
 * @method void setCreatedOn(integer $CreatedOn) 设置员工创建时间戳，单位秒。
注：`创建和更新场景无需填写。`
 * @method integer getVerifiedOn() 获取员工实名时间戳，单位秒。
注：`创建和更新场景无需填写。`
 * @method void setVerifiedOn(integer $VerifiedOn) 设置员工实名时间戳，单位秒。
注：`创建和更新场景无需填写。`
 * @method integer getQuiteJob() 获取员工是否离职：
<ul><li>**0**：未离职</li><li>**1**：离职</li></ul>
注：`创建和更新场景无需填写。`
 * @method void setQuiteJob(integer $QuiteJob) 设置员工是否离职：
<ul><li>**0**：未离职</li><li>**1**：离职</li></ul>
注：`创建和更新场景无需填写。`
 * @method string getReceiveUserId() 获取员工离职交接人用户ID。
注：`创建和更新场景无需填写。`
 * @method void setReceiveUserId(string $ReceiveUserId) 设置员工离职交接人用户ID。
注：`创建和更新场景无需填写。`
 * @method string getReceiveOpenId() 获取员工离职交接人用户OpenId。
注：`创建和更新场景无需填写。`
 * @method void setReceiveOpenId(string $ReceiveOpenId) 设置员工离职交接人用户OpenId。
注：`创建和更新场景无需填写。`
 * @method string getWeworkOpenId() 获取企业微信用户账号ID。
注：`仅企微类型的企业创建员工接口支持该字段。`
 * @method void setWeworkOpenId(string $WeworkOpenId) 设置企业微信用户账号ID。
注：`仅企微类型的企业创建员工接口支持该字段。`
 */
class Staff extends AbstractModel
{
    /**
     * @var string 员工在腾讯电子签平台的唯一身份标识，为32位字符串。
注：`创建和更新场景无需填写。`
     */
    public $UserId;

    /**
     * @var string 显示的用户名/昵称。
     */
    public $DisplayName;

    /**
     * @var string 用户手机号码， 支持中国大陆手机号11位数字(无需加+86前缀或其他字符)。
     */
    public $Mobile;

    /**
     * @var string 用户邮箱。
     */
    public $Email;

    /**
     * @var string 用户在第三方平台ID。
注：`如需在此接口提醒员工实名，该参数不传。`
     */
    public $OpenId;

    /**
     * @var array 员工角色信息。
注：`创建和更新场景无需填写。`
     */
    public $Roles;

    /**
     * @var Department 员工部门信息。
     */
    public $Department;

    /**
     * @var boolean 员工是否实名。
注：`创建和更新场景无需填写。`
     */
    public $Verified;

    /**
     * @var integer 员工创建时间戳，单位秒。
注：`创建和更新场景无需填写。`
     */
    public $CreatedOn;

    /**
     * @var integer 员工实名时间戳，单位秒。
注：`创建和更新场景无需填写。`
     */
    public $VerifiedOn;

    /**
     * @var integer 员工是否离职：
<ul><li>**0**：未离职</li><li>**1**：离职</li></ul>
注：`创建和更新场景无需填写。`
     */
    public $QuiteJob;

    /**
     * @var string 员工离职交接人用户ID。
注：`创建和更新场景无需填写。`
     */
    public $ReceiveUserId;

    /**
     * @var string 员工离职交接人用户OpenId。
注：`创建和更新场景无需填写。`
     */
    public $ReceiveOpenId;

    /**
     * @var string 企业微信用户账号ID。
注：`仅企微类型的企业创建员工接口支持该字段。`
     */
    public $WeworkOpenId;

    /**
     * @param string $UserId 员工在腾讯电子签平台的唯一身份标识，为32位字符串。
注：`创建和更新场景无需填写。`
     * @param string $DisplayName 显示的用户名/昵称。
     * @param string $Mobile 用户手机号码， 支持中国大陆手机号11位数字(无需加+86前缀或其他字符)。
     * @param string $Email 用户邮箱。
     * @param string $OpenId 用户在第三方平台ID。
注：`如需在此接口提醒员工实名，该参数不传。`
     * @param array $Roles 员工角色信息。
注：`创建和更新场景无需填写。`
     * @param Department $Department 员工部门信息。
     * @param boolean $Verified 员工是否实名。
注：`创建和更新场景无需填写。`
     * @param integer $CreatedOn 员工创建时间戳，单位秒。
注：`创建和更新场景无需填写。`
     * @param integer $VerifiedOn 员工实名时间戳，单位秒。
注：`创建和更新场景无需填写。`
     * @param integer $QuiteJob 员工是否离职：
<ul><li>**0**：未离职</li><li>**1**：离职</li></ul>
注：`创建和更新场景无需填写。`
     * @param string $ReceiveUserId 员工离职交接人用户ID。
注：`创建和更新场景无需填写。`
     * @param string $ReceiveOpenId 员工离职交接人用户OpenId。
注：`创建和更新场景无需填写。`
     * @param string $WeworkOpenId 企业微信用户账号ID。
注：`仅企微类型的企业创建员工接口支持该字段。`
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

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("Roles",$param) and $param["Roles"] !== null) {
            $this->Roles = [];
            foreach ($param["Roles"] as $key => $value){
                $obj = new StaffRole();
                $obj->deserialize($value);
                array_push($this->Roles, $obj);
            }
        }

        if (array_key_exists("Department",$param) and $param["Department"] !== null) {
            $this->Department = new Department();
            $this->Department->deserialize($param["Department"]);
        }

        if (array_key_exists("Verified",$param) and $param["Verified"] !== null) {
            $this->Verified = $param["Verified"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("VerifiedOn",$param) and $param["VerifiedOn"] !== null) {
            $this->VerifiedOn = $param["VerifiedOn"];
        }

        if (array_key_exists("QuiteJob",$param) and $param["QuiteJob"] !== null) {
            $this->QuiteJob = $param["QuiteJob"];
        }

        if (array_key_exists("ReceiveUserId",$param) and $param["ReceiveUserId"] !== null) {
            $this->ReceiveUserId = $param["ReceiveUserId"];
        }

        if (array_key_exists("ReceiveOpenId",$param) and $param["ReceiveOpenId"] !== null) {
            $this->ReceiveOpenId = $param["ReceiveOpenId"];
        }

        if (array_key_exists("WeworkOpenId",$param) and $param["WeworkOpenId"] !== null) {
            $this->WeworkOpenId = $param["WeworkOpenId"];
        }
    }
}
