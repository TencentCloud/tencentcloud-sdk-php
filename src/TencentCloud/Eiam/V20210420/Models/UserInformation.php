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
 * 用户信息列表。
 *
 * @method string getUserName() 获取用户名，长度限制：32个字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置用户名，长度限制：32个字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取用户状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置用户状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisplayName() 获取昵称，长度限制：64个字符。 默认与用户名相同。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayName(string $DisplayName) 设置昵称，长度限制：64个字符。 默认与用户名相同。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取用户备注，长度限制：512个字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置用户备注，长度限制：512个字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastUpdateTime() 获取用户上次更新时间，遵循 ISO 8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdateTime(string $LastUpdateTime) 设置用户上次更新时间，遵循 ISO 8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreationTime() 获取用户创建时间，遵循 ISO 8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreationTime(string $CreationTime) 设置用户创建时间，遵循 ISO 8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrgPath() 获取用户所属主组织机构的路径ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgPath(string $OrgPath) 设置用户所属主组织机构的路径ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhone() 获取带国家号的用户手机号，例如+86-00000000000。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhone(string $Phone) 设置带国家号的用户手机号，例如+86-00000000000。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubjectGroups() 获取用户所属用户组ID列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubjectGroups(array $SubjectGroups) 设置用户所属用户组ID列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEmail() 获取用户邮箱。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmail(string $Email) 设置用户邮箱。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastLoginTime() 获取用户上次登录时间，遵循 ISO 8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastLoginTime(string $LastLoginTime) 设置用户上次登录时间，遵循 ISO 8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserId() 获取用户ID，是用户全局唯一标识，长度限制：64个字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置用户ID，是用户全局唯一标识，长度限制：64个字符。
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserInformation extends AbstractModel
{
    /**
     * @var string 用户名，长度限制：32个字符。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string 用户状态。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 昵称，长度限制：64个字符。 默认与用户名相同。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayName;

    /**
     * @var string 用户备注，长度限制：512个字符。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 用户上次更新时间，遵循 ISO 8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastUpdateTime;

    /**
     * @var string 用户创建时间，遵循 ISO 8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreationTime;

    /**
     * @var string 用户所属主组织机构的路径ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgPath;

    /**
     * @var string 带国家号的用户手机号，例如+86-00000000000。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Phone;

    /**
     * @var array 用户所属用户组ID列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubjectGroups;

    /**
     * @var string 用户邮箱。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Email;

    /**
     * @var string 用户上次登录时间，遵循 ISO 8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastLoginTime;

    /**
     * @var string 用户ID，是用户全局唯一标识，长度限制：64个字符。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @param string $UserName 用户名，长度限制：32个字符。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 用户状态。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisplayName 昵称，长度限制：64个字符。 默认与用户名相同。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 用户备注，长度限制：512个字符。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastUpdateTime 用户上次更新时间，遵循 ISO 8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreationTime 用户创建时间，遵循 ISO 8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrgPath 用户所属主组织机构的路径ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Phone 带国家号的用户手机号，例如+86-00000000000。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubjectGroups 用户所属用户组ID列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Email 用户邮箱。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastLoginTime 用户上次登录时间，遵循 ISO 8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserId 用户ID，是用户全局唯一标识，长度限制：64个字符。
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("OrgPath",$param) and $param["OrgPath"] !== null) {
            $this->OrgPath = $param["OrgPath"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("SubjectGroups",$param) and $param["SubjectGroups"] !== null) {
            $this->SubjectGroups = $param["SubjectGroups"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("LastLoginTime",$param) and $param["LastLoginTime"] !== null) {
            $this->LastLoginTime = $param["LastLoginTime"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
