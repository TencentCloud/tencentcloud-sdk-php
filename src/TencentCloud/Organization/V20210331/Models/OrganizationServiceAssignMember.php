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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集团服务委派成员信息
 *
 * @method integer getServiceId() 获取集团服务ID。
 * @method void setServiceId(integer $ServiceId) 设置集团服务ID。
 * @method string getProductName() 获取集团服务产品名称。
 * @method void setProductName(string $ProductName) 设置集团服务产品名称。
 * @method integer getMemberUin() 获取委派管理员Uin。
 * @method void setMemberUin(integer $MemberUin) 设置委派管理员Uin。
 * @method string getMemberName() 获取委派管理员名称。
 * @method void setMemberName(string $MemberName) 设置委派管理员名称。
 * @method integer getUsageStatus() 获取启用状态 。取值：0-服务无启用状态  1-已启用  2-未启用
 * @method void setUsageStatus(integer $UsageStatus) 设置启用状态 。取值：0-服务无启用状态  1-已启用  2-未启用
 * @method string getCreateTime() 获取委派时间。
 * @method void setCreateTime(string $CreateTime) 设置委派时间。
 * @method integer getManagementScope() 获取委派管理员管理范围。取值: 1-全部成员  2-部分成员
 * @method void setManagementScope(integer $ManagementScope) 设置委派管理员管理范围。取值: 1-全部成员  2-部分成员
 * @method array getManagementScopeMembers() 获取管理的成员Uin列表。ManagementScope值为2时该参数有效
 * @method void setManagementScopeMembers(array $ManagementScopeMembers) 设置管理的成员Uin列表。ManagementScope值为2时该参数有效
 * @method array getManagementScopeNodes() 获取管理的部门ID列表。ManagementScope值为2时该参数有效
 * @method void setManagementScopeNodes(array $ManagementScopeNodes) 设置管理的部门ID列表。ManagementScope值为2时该参数有效
 */
class OrganizationServiceAssignMember extends AbstractModel
{
    /**
     * @var integer 集团服务ID。
     */
    public $ServiceId;

    /**
     * @var string 集团服务产品名称。
     */
    public $ProductName;

    /**
     * @var integer 委派管理员Uin。
     */
    public $MemberUin;

    /**
     * @var string 委派管理员名称。
     */
    public $MemberName;

    /**
     * @var integer 启用状态 。取值：0-服务无启用状态  1-已启用  2-未启用
     */
    public $UsageStatus;

    /**
     * @var string 委派时间。
     */
    public $CreateTime;

    /**
     * @var integer 委派管理员管理范围。取值: 1-全部成员  2-部分成员
     */
    public $ManagementScope;

    /**
     * @var array 管理的成员Uin列表。ManagementScope值为2时该参数有效
     */
    public $ManagementScopeMembers;

    /**
     * @var array 管理的部门ID列表。ManagementScope值为2时该参数有效
     */
    public $ManagementScopeNodes;

    /**
     * @param integer $ServiceId 集团服务ID。
     * @param string $ProductName 集团服务产品名称。
     * @param integer $MemberUin 委派管理员Uin。
     * @param string $MemberName 委派管理员名称。
     * @param integer $UsageStatus 启用状态 。取值：0-服务无启用状态  1-已启用  2-未启用
     * @param string $CreateTime 委派时间。
     * @param integer $ManagementScope 委派管理员管理范围。取值: 1-全部成员  2-部分成员
     * @param array $ManagementScopeMembers 管理的成员Uin列表。ManagementScope值为2时该参数有效
     * @param array $ManagementScopeNodes 管理的部门ID列表。ManagementScope值为2时该参数有效
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("MemberName",$param) and $param["MemberName"] !== null) {
            $this->MemberName = $param["MemberName"];
        }

        if (array_key_exists("UsageStatus",$param) and $param["UsageStatus"] !== null) {
            $this->UsageStatus = $param["UsageStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ManagementScope",$param) and $param["ManagementScope"] !== null) {
            $this->ManagementScope = $param["ManagementScope"];
        }

        if (array_key_exists("ManagementScopeMembers",$param) and $param["ManagementScopeMembers"] !== null) {
            $this->ManagementScopeMembers = [];
            foreach ($param["ManagementScopeMembers"] as $key => $value){
                $obj = new MemberMainInfo();
                $obj->deserialize($value);
                array_push($this->ManagementScopeMembers, $obj);
            }
        }

        if (array_key_exists("ManagementScopeNodes",$param) and $param["ManagementScopeNodes"] !== null) {
            $this->ManagementScopeNodes = [];
            foreach ($param["ManagementScopeNodes"] as $key => $value){
                $obj = new NodeMainInfo();
                $obj->deserialize($value);
                array_push($this->ManagementScopeNodes, $obj);
            }
        }
    }
}
