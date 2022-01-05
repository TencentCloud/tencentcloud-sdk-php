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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUserInfo请求参数结构体
 *
 * @method string getUserName() 获取用户名，长度限制：32个字符。 Username 和 UserId 需选择一个作为搜索条件；如两个条件同时使用则默认使用Username作为搜索条件。
 * @method void setUserName(string $UserName) 设置用户名，长度限制：32个字符。 Username 和 UserId 需选择一个作为搜索条件；如两个条件同时使用则默认使用Username作为搜索条件。
 * @method string getDisplayName() 获取昵称，长度限制：64个字符。 默认与用户名相同。
 * @method void setDisplayName(string $DisplayName) 设置昵称，长度限制：64个字符。 默认与用户名相同。
 * @method string getDescription() 获取用户备注，长度限制：512个字符。
 * @method void setDescription(string $Description) 设置用户备注，长度限制：512个字符。
 * @method array getUserGroupIds() 获取用户所属用户组ID列表。
 * @method void setUserGroupIds(array $UserGroupIds) 设置用户所属用户组ID列表。
 * @method string getUserId() 获取用户 id。 Username 和 UserId 需选择一个作为搜索条件；如两个条件同时使用则默认使用Username作为搜索条件。
 * @method void setUserId(string $UserId) 设置用户 id。 Username 和 UserId 需选择一个作为搜索条件；如两个条件同时使用则默认使用Username作为搜索条件。
 * @method string getPhone() 获取用户手机号。
 * @method void setPhone(string $Phone) 设置用户手机号。
 * @method string getExpirationTime() 获取用户过期时间，遵循 ISO 8601 标准。
 * @method void setExpirationTime(string $ExpirationTime) 设置用户过期时间，遵循 ISO 8601 标准。
 * @method string getPassword() 获取用户密码， 需要符合密码策略的配置。
 * @method void setPassword(string $Password) 设置用户密码， 需要符合密码策略的配置。
 * @method string getEmail() 获取用户邮箱。
 * @method void setEmail(string $Email) 设置用户邮箱。
 * @method boolean getPwdNeedReset() 获取密码是否需要重置，为空默认为false不需要重置密码。
 * @method void setPwdNeedReset(boolean $PwdNeedReset) 设置密码是否需要重置，为空默认为false不需要重置密码。
 * @method string getOrgNodeId() 获取用户所属的主组织机构唯一ID。如果为空，默认为在根节点下创建用户。
 * @method void setOrgNodeId(string $OrgNodeId) 设置用户所属的主组织机构唯一ID。如果为空，默认为在根节点下创建用户。
 * @method array getSecondaryOrgNodeIdList() 获取用户所属的次要组织机构ID列表。
 * @method void setSecondaryOrgNodeIdList(array $SecondaryOrgNodeIdList) 设置用户所属的次要组织机构ID列表。
 */
class ModifyUserInfoRequest extends AbstractModel
{
    /**
     * @var string 用户名，长度限制：32个字符。 Username 和 UserId 需选择一个作为搜索条件；如两个条件同时使用则默认使用Username作为搜索条件。
     */
    public $UserName;

    /**
     * @var string 昵称，长度限制：64个字符。 默认与用户名相同。
     */
    public $DisplayName;

    /**
     * @var string 用户备注，长度限制：512个字符。
     */
    public $Description;

    /**
     * @var array 用户所属用户组ID列表。
     */
    public $UserGroupIds;

    /**
     * @var string 用户 id。 Username 和 UserId 需选择一个作为搜索条件；如两个条件同时使用则默认使用Username作为搜索条件。
     */
    public $UserId;

    /**
     * @var string 用户手机号。
     */
    public $Phone;

    /**
     * @var string 用户过期时间，遵循 ISO 8601 标准。
     */
    public $ExpirationTime;

    /**
     * @var string 用户密码， 需要符合密码策略的配置。
     */
    public $Password;

    /**
     * @var string 用户邮箱。
     */
    public $Email;

    /**
     * @var boolean 密码是否需要重置，为空默认为false不需要重置密码。
     */
    public $PwdNeedReset;

    /**
     * @var string 用户所属的主组织机构唯一ID。如果为空，默认为在根节点下创建用户。
     */
    public $OrgNodeId;

    /**
     * @var array 用户所属的次要组织机构ID列表。
     */
    public $SecondaryOrgNodeIdList;

    /**
     * @param string $UserName 用户名，长度限制：32个字符。 Username 和 UserId 需选择一个作为搜索条件；如两个条件同时使用则默认使用Username作为搜索条件。
     * @param string $DisplayName 昵称，长度限制：64个字符。 默认与用户名相同。
     * @param string $Description 用户备注，长度限制：512个字符。
     * @param array $UserGroupIds 用户所属用户组ID列表。
     * @param string $UserId 用户 id。 Username 和 UserId 需选择一个作为搜索条件；如两个条件同时使用则默认使用Username作为搜索条件。
     * @param string $Phone 用户手机号。
     * @param string $ExpirationTime 用户过期时间，遵循 ISO 8601 标准。
     * @param string $Password 用户密码， 需要符合密码策略的配置。
     * @param string $Email 用户邮箱。
     * @param boolean $PwdNeedReset 密码是否需要重置，为空默认为false不需要重置密码。
     * @param string $OrgNodeId 用户所属的主组织机构唯一ID。如果为空，默认为在根节点下创建用户。
     * @param array $SecondaryOrgNodeIdList 用户所属的次要组织机构ID列表。
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

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("UserGroupIds",$param) and $param["UserGroupIds"] !== null) {
            $this->UserGroupIds = $param["UserGroupIds"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("ExpirationTime",$param) and $param["ExpirationTime"] !== null) {
            $this->ExpirationTime = $param["ExpirationTime"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("PwdNeedReset",$param) and $param["PwdNeedReset"] !== null) {
            $this->PwdNeedReset = $param["PwdNeedReset"];
        }

        if (array_key_exists("OrgNodeId",$param) and $param["OrgNodeId"] !== null) {
            $this->OrgNodeId = $param["OrgNodeId"];
        }

        if (array_key_exists("SecondaryOrgNodeIdList",$param) and $param["SecondaryOrgNodeIdList"] !== null) {
            $this->SecondaryOrgNodeIdList = $param["SecondaryOrgNodeIdList"];
        }
    }
}
