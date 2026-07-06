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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集团概览
 *
 * @method string getGroupName() 获取集团名称
 * @method void setGroupName(string $GroupName) 设置集团名称
 * @method MemberInfo getAdminInfo() 获取管理员账号信息
 * @method void setAdminInfo(MemberInfo $AdminInfo) 设置管理员账号信息
 * @method integer getAdminCount() 获取管理员/委派管理员数量
 * @method void setAdminCount(integer $AdminCount) 设置管理员/委派管理员数量
 * @method integer getJoinedMemberCount() 获取已接入成员数
 * @method void setJoinedMemberCount(integer $JoinedMemberCount) 设置已接入成员数
 * @method integer getMemberLimit() 获取接入成员上限（-1表示无上限）
 * @method void setMemberLimit(integer $MemberLimit) 设置接入成员上限（-1表示无上限）
 * @method string getMemberLimitDisplay() 获取接入成员上限显示
 * @method void setMemberLimitDisplay(string $MemberLimitDisplay) 设置接入成员上限显示
 * @method integer getCfwSharerCount() 获取规格共享者数量
 * @method void setCfwSharerCount(integer $CfwSharerCount) 设置规格共享者数量
 * @method integer getCfwUserCount() 获取规格使用者数量
 * @method void setCfwUserCount(integer $CfwUserCount) 设置规格使用者数量
 * @method array getDepartments() 获取部门名称列表
 * @method void setDepartments(array $Departments) 设置部门名称列表
 * @method integer getManagedMemberCount() 获取纳管账号数
 * @method void setManagedMemberCount(integer $ManagedMemberCount) 设置纳管账号数
 * @method integer getManagedProductCount() 获取纳管产品数
 * @method void setManagedProductCount(integer $ManagedProductCount) 设置纳管产品数
 * @method integer getCfwManageCount() 获取纳管账号数
 * @method void setCfwManageCount(integer $CfwManageCount) 设置纳管账号数
 */
class OrganSummary extends AbstractModel
{
    /**
     * @var string 集团名称
     */
    public $GroupName;

    /**
     * @var MemberInfo 管理员账号信息
     */
    public $AdminInfo;

    /**
     * @var integer 管理员/委派管理员数量
     */
    public $AdminCount;

    /**
     * @var integer 已接入成员数
     */
    public $JoinedMemberCount;

    /**
     * @var integer 接入成员上限（-1表示无上限）
     */
    public $MemberLimit;

    /**
     * @var string 接入成员上限显示
     */
    public $MemberLimitDisplay;

    /**
     * @var integer 规格共享者数量
     */
    public $CfwSharerCount;

    /**
     * @var integer 规格使用者数量
     */
    public $CfwUserCount;

    /**
     * @var array 部门名称列表
     */
    public $Departments;

    /**
     * @var integer 纳管账号数
     */
    public $ManagedMemberCount;

    /**
     * @var integer 纳管产品数
     */
    public $ManagedProductCount;

    /**
     * @var integer 纳管账号数
     */
    public $CfwManageCount;

    /**
     * @param string $GroupName 集团名称
     * @param MemberInfo $AdminInfo 管理员账号信息
     * @param integer $AdminCount 管理员/委派管理员数量
     * @param integer $JoinedMemberCount 已接入成员数
     * @param integer $MemberLimit 接入成员上限（-1表示无上限）
     * @param string $MemberLimitDisplay 接入成员上限显示
     * @param integer $CfwSharerCount 规格共享者数量
     * @param integer $CfwUserCount 规格使用者数量
     * @param array $Departments 部门名称列表
     * @param integer $ManagedMemberCount 纳管账号数
     * @param integer $ManagedProductCount 纳管产品数
     * @param integer $CfwManageCount 纳管账号数
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("AdminInfo",$param) and $param["AdminInfo"] !== null) {
            $this->AdminInfo = new MemberInfo();
            $this->AdminInfo->deserialize($param["AdminInfo"]);
        }

        if (array_key_exists("AdminCount",$param) and $param["AdminCount"] !== null) {
            $this->AdminCount = $param["AdminCount"];
        }

        if (array_key_exists("JoinedMemberCount",$param) and $param["JoinedMemberCount"] !== null) {
            $this->JoinedMemberCount = $param["JoinedMemberCount"];
        }

        if (array_key_exists("MemberLimit",$param) and $param["MemberLimit"] !== null) {
            $this->MemberLimit = $param["MemberLimit"];
        }

        if (array_key_exists("MemberLimitDisplay",$param) and $param["MemberLimitDisplay"] !== null) {
            $this->MemberLimitDisplay = $param["MemberLimitDisplay"];
        }

        if (array_key_exists("CfwSharerCount",$param) and $param["CfwSharerCount"] !== null) {
            $this->CfwSharerCount = $param["CfwSharerCount"];
        }

        if (array_key_exists("CfwUserCount",$param) and $param["CfwUserCount"] !== null) {
            $this->CfwUserCount = $param["CfwUserCount"];
        }

        if (array_key_exists("Departments",$param) and $param["Departments"] !== null) {
            $this->Departments = $param["Departments"];
        }

        if (array_key_exists("ManagedMemberCount",$param) and $param["ManagedMemberCount"] !== null) {
            $this->ManagedMemberCount = $param["ManagedMemberCount"];
        }

        if (array_key_exists("ManagedProductCount",$param) and $param["ManagedProductCount"] !== null) {
            $this->ManagedProductCount = $param["ManagedProductCount"];
        }

        if (array_key_exists("CfwManageCount",$param) and $param["CfwManageCount"] !== null) {
            $this->CfwManageCount = $param["CfwManageCount"];
        }
    }
}
