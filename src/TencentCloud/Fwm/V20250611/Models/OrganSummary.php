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
 * @method string getGroupName() 获取<p>集团名称</p>
 * @method void setGroupName(string $GroupName) 设置<p>集团名称</p>
 * @method MemberInfo getAdminInfo() 获取<p>管理员账号信息</p>
 * @method void setAdminInfo(MemberInfo $AdminInfo) 设置<p>管理员账号信息</p>
 * @method integer getAdminCount() 获取<p>管理员/委派管理员数量</p>
 * @method void setAdminCount(integer $AdminCount) 设置<p>管理员/委派管理员数量</p>
 * @method integer getJoinedMemberCount() 获取<p>已接入成员数</p>
 * @method void setJoinedMemberCount(integer $JoinedMemberCount) 设置<p>已接入成员数</p>
 * @method integer getMemberLimit() 获取<p>接入成员上限（-1表示无上限）</p>
 * @method void setMemberLimit(integer $MemberLimit) 设置<p>接入成员上限（-1表示无上限）</p>
 * @method string getMemberLimitDisplay() 获取<p>接入成员上限显示</p>
 * @method void setMemberLimitDisplay(string $MemberLimitDisplay) 设置<p>接入成员上限显示</p>
 * @method integer getCfwSharerCount() 获取<p>规格共享者数量</p>
 * @method void setCfwSharerCount(integer $CfwSharerCount) 设置<p>规格共享者数量</p>
 * @method integer getCfwUserCount() 获取<p>规格使用者数量</p>
 * @method void setCfwUserCount(integer $CfwUserCount) 设置<p>规格使用者数量</p>
 * @method array getDepartments() 获取<p>部门名称列表</p>
 * @method void setDepartments(array $Departments) 设置<p>部门名称列表</p>
 * @method integer getManagedMemberCount() 获取<p>纳管账号数</p>
 * @method void setManagedMemberCount(integer $ManagedMemberCount) 设置<p>纳管账号数</p>
 * @method integer getManagedProductCount() 获取<p>纳管产品数</p>
 * @method void setManagedProductCount(integer $ManagedProductCount) 设置<p>纳管产品数</p>
 * @method integer getCfwManageCount() 获取<p>纳管账号数</p>
 * @method void setCfwManageCount(integer $CfwManageCount) 设置<p>纳管账号数</p>
 * @method integer getFwmShareUserQuota() 获取<p>规格共享总配额</p>
 * @method void setFwmShareUserQuota(integer $FwmShareUserQuota) 设置<p>规格共享总配额</p>
 */
class OrganSummary extends AbstractModel
{
    /**
     * @var string <p>集团名称</p>
     */
    public $GroupName;

    /**
     * @var MemberInfo <p>管理员账号信息</p>
     */
    public $AdminInfo;

    /**
     * @var integer <p>管理员/委派管理员数量</p>
     */
    public $AdminCount;

    /**
     * @var integer <p>已接入成员数</p>
     */
    public $JoinedMemberCount;

    /**
     * @var integer <p>接入成员上限（-1表示无上限）</p>
     */
    public $MemberLimit;

    /**
     * @var string <p>接入成员上限显示</p>
     */
    public $MemberLimitDisplay;

    /**
     * @var integer <p>规格共享者数量</p>
     */
    public $CfwSharerCount;

    /**
     * @var integer <p>规格使用者数量</p>
     */
    public $CfwUserCount;

    /**
     * @var array <p>部门名称列表</p>
     */
    public $Departments;

    /**
     * @var integer <p>纳管账号数</p>
     */
    public $ManagedMemberCount;

    /**
     * @var integer <p>纳管产品数</p>
     */
    public $ManagedProductCount;

    /**
     * @var integer <p>纳管账号数</p>
     */
    public $CfwManageCount;

    /**
     * @var integer <p>规格共享总配额</p>
     */
    public $FwmShareUserQuota;

    /**
     * @param string $GroupName <p>集团名称</p>
     * @param MemberInfo $AdminInfo <p>管理员账号信息</p>
     * @param integer $AdminCount <p>管理员/委派管理员数量</p>
     * @param integer $JoinedMemberCount <p>已接入成员数</p>
     * @param integer $MemberLimit <p>接入成员上限（-1表示无上限）</p>
     * @param string $MemberLimitDisplay <p>接入成员上限显示</p>
     * @param integer $CfwSharerCount <p>规格共享者数量</p>
     * @param integer $CfwUserCount <p>规格使用者数量</p>
     * @param array $Departments <p>部门名称列表</p>
     * @param integer $ManagedMemberCount <p>纳管账号数</p>
     * @param integer $ManagedProductCount <p>纳管产品数</p>
     * @param integer $CfwManageCount <p>纳管账号数</p>
     * @param integer $FwmShareUserQuota <p>规格共享总配额</p>
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

        if (array_key_exists("FwmShareUserQuota",$param) and $param["FwmShareUserQuota"] !== null) {
            $this->FwmShareUserQuota = $param["FwmShareUserQuota"];
        }
    }
}
