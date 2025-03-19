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
 * 用户结果
 *
 * @method string getUserId() 获取用户ID
 * @method void setUserId(string $UserId) 设置用户ID
 * @method string getUserName() 获取用户昵称
 * @method void setUserName(string $UserName) 设置用户昵称
 * @method string getRealName() 获取用户名称
 * @method void setRealName(string $RealName) 设置用户名称
 * @method string getUserType() 获取用户类型，1-超级管理员；2-1号管理员；3-普通管理员；99-普通用户
 * @method void setUserType(string $UserType) 设置用户类型，1-超级管理员；2-1号管理员；3-普通管理员；99-普通用户
 * @method string getTenantId() 获取所属租户ID
 * @method void setTenantId(string $TenantId) 设置所属租户ID
 * @method string getUserGroup() 获取所属组ID
 * @method void setUserGroup(string $UserGroup) 设置所属组ID
 * @method string getEmail() 获取邮箱
 * @method void setEmail(string $Email) 设置邮箱
 * @method string getPhone() 获取电话
 * @method void setPhone(string $Phone) 设置电话
 * @method integer getStatus() 获取用户状态，0待审核，1正常启用，2禁用
 * @method void setStatus(integer $Status) 设置用户状态，0待审核，1正常启用，2禁用
 * @method integer getCreateAt() 获取创建时间
 * @method void setCreateAt(integer $CreateAt) 设置创建时间
 * @method integer getUpdateAt() 获取更新时间
 * @method void setUpdateAt(integer $UpdateAt) 设置更新时间
 * @method integer getBelongTeam() 获取是否属于团队，0不可用，1属于，2不属
 * @method void setBelongTeam(integer $BelongTeam) 设置是否属于团队，0不可用，1属于，2不属
 * @method string getDepartmentId() 获取部门ID
 * @method void setDepartmentId(string $DepartmentId) 设置部门ID
 * @method string getDepartmentName() 获取部门名称
 * @method void setDepartmentName(string $DepartmentName) 设置部门名称
 * @method integer getDepartmentUserId() 获取子账户ID
 * @method void setDepartmentUserId(integer $DepartmentUserId) 设置子账户ID
 * @method string getPassword() 获取密码
 * @method void setPassword(string $Password) 设置密码
 */
class SsoUser extends AbstractModel
{
    /**
     * @var string 用户ID
     */
    public $UserId;

    /**
     * @var string 用户昵称
     */
    public $UserName;

    /**
     * @var string 用户名称
     */
    public $RealName;

    /**
     * @var string 用户类型，1-超级管理员；2-1号管理员；3-普通管理员；99-普通用户
     */
    public $UserType;

    /**
     * @var string 所属租户ID
     */
    public $TenantId;

    /**
     * @var string 所属组ID
     */
    public $UserGroup;

    /**
     * @var string 邮箱
     */
    public $Email;

    /**
     * @var string 电话
     */
    public $Phone;

    /**
     * @var integer 用户状态，0待审核，1正常启用，2禁用
     */
    public $Status;

    /**
     * @var integer 创建时间
     */
    public $CreateAt;

    /**
     * @var integer 更新时间
     */
    public $UpdateAt;

    /**
     * @var integer 是否属于团队，0不可用，1属于，2不属
     */
    public $BelongTeam;

    /**
     * @var string 部门ID
     */
    public $DepartmentId;

    /**
     * @var string 部门名称
     */
    public $DepartmentName;

    /**
     * @var integer 子账户ID
     */
    public $DepartmentUserId;

    /**
     * @var string 密码
     */
    public $Password;

    /**
     * @param string $UserId 用户ID
     * @param string $UserName 用户昵称
     * @param string $RealName 用户名称
     * @param string $UserType 用户类型，1-超级管理员；2-1号管理员；3-普通管理员；99-普通用户
     * @param string $TenantId 所属租户ID
     * @param string $UserGroup 所属组ID
     * @param string $Email 邮箱
     * @param string $Phone 电话
     * @param integer $Status 用户状态，0待审核，1正常启用，2禁用
     * @param integer $CreateAt 创建时间
     * @param integer $UpdateAt 更新时间
     * @param integer $BelongTeam 是否属于团队，0不可用，1属于，2不属
     * @param string $DepartmentId 部门ID
     * @param string $DepartmentName 部门名称
     * @param integer $DepartmentUserId 子账户ID
     * @param string $Password 密码
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

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
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

        if (array_key_exists("UserGroup",$param) and $param["UserGroup"] !== null) {
            $this->UserGroup = $param["UserGroup"];
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

        if (array_key_exists("UpdateAt",$param) and $param["UpdateAt"] !== null) {
            $this->UpdateAt = $param["UpdateAt"];
        }

        if (array_key_exists("BelongTeam",$param) and $param["BelongTeam"] !== null) {
            $this->BelongTeam = $param["BelongTeam"];
        }

        if (array_key_exists("DepartmentId",$param) and $param["DepartmentId"] !== null) {
            $this->DepartmentId = $param["DepartmentId"];
        }

        if (array_key_exists("DepartmentName",$param) and $param["DepartmentName"] !== null) {
            $this->DepartmentName = $param["DepartmentName"];
        }

        if (array_key_exists("DepartmentUserId",$param) and $param["DepartmentUserId"] !== null) {
            $this->DepartmentUserId = $param["DepartmentUserId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
