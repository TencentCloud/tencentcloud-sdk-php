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
 * 单点登录企业员工信息。
 *
 * @method string getOpenId() 获取用户在idp分配的唯一值，需要保持跟在电子签应用集成->单点登录配置->端点配置中配置的。
如下图配置![image](https://qcloudimg.tencent-cloud.cn/raw/6ff22248c930b2a7684322cac9401a9c.png)。
 * @method void setOpenId(string $OpenId) 设置用户在idp分配的唯一值，需要保持跟在电子签应用集成->单点登录配置->端点配置中配置的。
如下图配置![image](https://qcloudimg.tencent-cloud.cn/raw/6ff22248c930b2a7684322cac9401a9c.png)。
 * @method string getName() 获取企业员工姓名。 员工的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。	
 * @method void setName(string $Name) 设置企业员工姓名。 员工的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。	
 * @method string getMobile() 获取用户手机号码， 支持中国大陆手机号11位数字(无需加+86前缀或其他字符)。
 * @method void setMobile(string $Mobile) 设置用户手机号码， 支持中国大陆手机号11位数字(无需加+86前缀或其他字符)。
 * @method string getUserId() 获取员工在腾讯电子签平台的唯一身份标识，为32位字符串。
注：`创建和更新场景无需填写。`
 * @method void setUserId(string $UserId) 设置员工在腾讯电子签平台的唯一身份标识，为32位字符串。
注：`创建和更新场景无需填写。`
 * @method string getEmail() 获取用户邮箱。
 * @method void setEmail(string $Email) 设置用户邮箱。
 * @method array getRoleIds() 获取员工角色信息。
此处roleId为电子签配置的 RoleId，可通过接口[查询企业角色列表](https://qian.tencent.com/developers/companyApis/roles/DescribeIntegrationRoles) 获取
 * @method void setRoleIds(array $RoleIds) 设置员工角色信息。
此处roleId为电子签配置的 RoleId，可通过接口[查询企业角色列表](https://qian.tencent.com/developers/companyApis/roles/DescribeIntegrationRoles) 获取
 * @method boolean getIsVerified() 获取员工是否实名。
 * @method void setIsVerified(boolean $IsVerified) 设置员工是否实名。
 * @method integer getCreatedOn() 获取员工创建时间戳，单位秒。
 * @method void setCreatedOn(integer $CreatedOn) 设置员工创建时间戳，单位秒。
 */
class SingleSignOnEmployees extends AbstractModel
{
    /**
     * @var string 用户在idp分配的唯一值，需要保持跟在电子签应用集成->单点登录配置->端点配置中配置的。
如下图配置![image](https://qcloudimg.tencent-cloud.cn/raw/6ff22248c930b2a7684322cac9401a9c.png)。
     */
    public $OpenId;

    /**
     * @var string 企业员工姓名。 员工的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。	
     */
    public $Name;

    /**
     * @var string 用户手机号码， 支持中国大陆手机号11位数字(无需加+86前缀或其他字符)。
     */
    public $Mobile;

    /**
     * @var string 员工在腾讯电子签平台的唯一身份标识，为32位字符串。
注：`创建和更新场景无需填写。`
     */
    public $UserId;

    /**
     * @var string 用户邮箱。
     */
    public $Email;

    /**
     * @var array 员工角色信息。
此处roleId为电子签配置的 RoleId，可通过接口[查询企业角色列表](https://qian.tencent.com/developers/companyApis/roles/DescribeIntegrationRoles) 获取
     */
    public $RoleIds;

    /**
     * @var boolean 员工是否实名。
     */
    public $IsVerified;

    /**
     * @var integer 员工创建时间戳，单位秒。
     */
    public $CreatedOn;

    /**
     * @param string $OpenId 用户在idp分配的唯一值，需要保持跟在电子签应用集成->单点登录配置->端点配置中配置的。
如下图配置![image](https://qcloudimg.tencent-cloud.cn/raw/6ff22248c930b2a7684322cac9401a9c.png)。
     * @param string $Name 企业员工姓名。 员工的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。	
     * @param string $Mobile 用户手机号码， 支持中国大陆手机号11位数字(无需加+86前缀或其他字符)。
     * @param string $UserId 员工在腾讯电子签平台的唯一身份标识，为32位字符串。
注：`创建和更新场景无需填写。`
     * @param string $Email 用户邮箱。
     * @param array $RoleIds 员工角色信息。
此处roleId为电子签配置的 RoleId，可通过接口[查询企业角色列表](https://qian.tencent.com/developers/companyApis/roles/DescribeIntegrationRoles) 获取
     * @param boolean $IsVerified 员工是否实名。
     * @param integer $CreatedOn 员工创建时间戳，单位秒。
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
        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("RoleIds",$param) and $param["RoleIds"] !== null) {
            $this->RoleIds = $param["RoleIds"];
        }

        if (array_key_exists("IsVerified",$param) and $param["IsVerified"] !== null) {
            $this->IsVerified = $param["IsVerified"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }
    }
}
