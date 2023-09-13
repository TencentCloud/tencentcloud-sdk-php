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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 部门用户
 *
 * @method string getUserId() 获取用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRealName() 获取用户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealName(string $RealName) 设置用户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserType() 获取用户类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserType(string $UserType) 设置用户类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTenantId() 获取所属租户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTenantId(string $TenantId) 设置所属租户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEmail() 获取邮箱
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmail(string $Email) 设置邮箱
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhone() 获取电话
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhone(string $Phone) 设置电话
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取用户状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置用户状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateAt() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateAt(integer $CreateAt) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDepartmentId() 获取部门ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDepartmentId(string $DepartmentId) 设置部门ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDepartmentName() 获取部门名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDepartmentName(string $DepartmentName) 设置部门名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLinkFilter() 获取是否关联权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinkFilter(integer $LinkFilter) 设置是否关联权限
注意：此字段可能返回 null，表示取不到有效值。
 */
class SsoTeamUser extends AbstractModel
{
    /**
     * @var string 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string 用户名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealName;

    /**
     * @var string 用户类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserType;

    /**
     * @var string 所属租户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TenantId;

    /**
     * @var string 邮箱
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Email;

    /**
     * @var string 电话
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Phone;

    /**
     * @var integer 用户状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateAt;

    /**
     * @var string 部门ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DepartmentId;

    /**
     * @var string 部门名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DepartmentName;

    /**
     * @var integer 是否关联权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LinkFilter;

    /**
     * @param string $UserId 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealName 用户名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserType 用户类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TenantId 所属租户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Email 邮箱
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Phone 电话
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 用户状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateAt 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DepartmentId 部门ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DepartmentName 部门名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LinkFilter 是否关联权限
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("RealName",$param) and $param["RealName"] !== null) {
            $this->RealName = $param["RealName"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateAt",$param) and $param["CreateAt"] !== null) {
            $this->CreateAt = $param["CreateAt"];
        }

        if (array_key_exists("DepartmentId",$param) and $param["DepartmentId"] !== null) {
            $this->DepartmentId = $param["DepartmentId"];
        }

        if (array_key_exists("DepartmentName",$param) and $param["DepartmentName"] !== null) {
            $this->DepartmentName = $param["DepartmentName"];
        }

        if (array_key_exists("LinkFilter",$param) and $param["LinkFilter"] !== null) {
            $this->LinkFilter = $param["LinkFilter"];
        }
    }
}
