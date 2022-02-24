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
 * DescribeUserInfo返回参数结构体
 *
 * @method string getUserName() 获取用户名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置用户名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取用户状态，取值 NORMAL （正常）、FREEZE （已冻结）、LOCKED （已锁定）或 NOT_ENABLED （未启用）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置用户状态，取值 NORMAL （正常）、FREEZE （已冻结）、LOCKED （已锁定）或 NOT_ENABLED （未启用）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisplayName() 获取昵称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayName(string $DisplayName) 设置昵称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取用户备注。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置用户备注。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUserGroupIds() 获取用户所属用户组 id 列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserGroupIds(array $UserGroupIds) 设置用户所属用户组 id 列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserId() 获取用户 id，长度限制：64个字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置用户 id，长度限制：64个字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEmail() 获取用户邮箱。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmail(string $Email) 设置用户邮箱。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhone() 获取用户手机号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhone(string $Phone) 设置用户手机号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrgNodeId() 获取用户所属的主组织机构唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgNodeId(string $OrgNodeId) 设置用户所属的主组织机构唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSource() 获取数据来源。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSource(string $DataSource) 设置数据来源。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpirationTime() 获取用户过期时间，遵循 ISO 8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpirationTime(string $ExpirationTime) 设置用户过期时间，遵循 ISO 8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActivationTime() 获取用户激活时间，遵循 ISO 8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivationTime(string $ActivationTime) 设置用户激活时间，遵循 ISO 8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPwdNeedReset() 获取当前用户的密码是否需要重置，该字段为false表示不需要重置密码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPwdNeedReset(boolean $PwdNeedReset) 设置当前用户的密码是否需要重置，该字段为false表示不需要重置密码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSecondaryOrgNodeIdList() 获取用户所属的次要组织机构ID列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecondaryOrgNodeIdList(array $SecondaryOrgNodeIdList) 设置用户所属的次要组织机构ID列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAdminFlag() 获取是否管理员标志，0为否、1为是。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdminFlag(integer $AdminFlag) 设置是否管理员标志，0为否、1为是。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUserInfoResponse extends AbstractModel
{
    /**
     * @var string 用户名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string 用户状态，取值 NORMAL （正常）、FREEZE （已冻结）、LOCKED （已锁定）或 NOT_ENABLED （未启用）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 昵称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayName;

    /**
     * @var string 用户备注。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array 用户所属用户组 id 列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserGroupIds;

    /**
     * @var string 用户 id，长度限制：64个字符。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string 用户邮箱。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Email;

    /**
     * @var string 用户手机号。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Phone;

    /**
     * @var string 用户所属的主组织机构唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgNodeId;

    /**
     * @var string 数据来源。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSource;

    /**
     * @var string 用户过期时间，遵循 ISO 8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpirationTime;

    /**
     * @var string 用户激活时间，遵循 ISO 8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivationTime;

    /**
     * @var boolean 当前用户的密码是否需要重置，该字段为false表示不需要重置密码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PwdNeedReset;

    /**
     * @var array 用户所属的次要组织机构ID列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecondaryOrgNodeIdList;

    /**
     * @var integer 是否管理员标志，0为否、1为是。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdminFlag;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $UserName 用户名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 用户状态，取值 NORMAL （正常）、FREEZE （已冻结）、LOCKED （已锁定）或 NOT_ENABLED （未启用）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisplayName 昵称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 用户备注。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UserGroupIds 用户所属用户组 id 列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserId 用户 id，长度限制：64个字符。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Email 用户邮箱。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Phone 用户手机号。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrgNodeId 用户所属的主组织机构唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSource 数据来源。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpirationTime 用户过期时间，遵循 ISO 8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActivationTime 用户激活时间，遵循 ISO 8601 标准。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $PwdNeedReset 当前用户的密码是否需要重置，该字段为false表示不需要重置密码。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SecondaryOrgNodeIdList 用户所属的次要组织机构ID列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AdminFlag 是否管理员标志，0为否、1为是。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("UserGroupIds",$param) and $param["UserGroupIds"] !== null) {
            $this->UserGroupIds = $param["UserGroupIds"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("OrgNodeId",$param) and $param["OrgNodeId"] !== null) {
            $this->OrgNodeId = $param["OrgNodeId"];
        }

        if (array_key_exists("DataSource",$param) and $param["DataSource"] !== null) {
            $this->DataSource = $param["DataSource"];
        }

        if (array_key_exists("ExpirationTime",$param) and $param["ExpirationTime"] !== null) {
            $this->ExpirationTime = $param["ExpirationTime"];
        }

        if (array_key_exists("ActivationTime",$param) and $param["ActivationTime"] !== null) {
            $this->ActivationTime = $param["ActivationTime"];
        }

        if (array_key_exists("PwdNeedReset",$param) and $param["PwdNeedReset"] !== null) {
            $this->PwdNeedReset = $param["PwdNeedReset"];
        }

        if (array_key_exists("SecondaryOrgNodeIdList",$param) and $param["SecondaryOrgNodeIdList"] !== null) {
            $this->SecondaryOrgNodeIdList = $param["SecondaryOrgNodeIdList"];
        }

        if (array_key_exists("AdminFlag",$param) and $param["AdminFlag"] !== null) {
            $this->AdminFlag = $param["AdminFlag"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
