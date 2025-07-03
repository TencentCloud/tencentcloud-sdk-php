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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集团账号详情
 *
 * @method string getNickName() 获取成员账号名称
 * @method void setNickName(string $NickName) 设置成员账号名称
 * @method string getNodeName() 获取部门节点名称，账号所属部门
 * @method void setNodeName(string $NodeName) 设置部门节点名称，账号所属部门
 * @method string getRole() 获取Member/Admin/DelegatedAdmin/EntityAdmin; 成员/管理员/委派管理员/主体管理员
 * @method void setRole(string $Role) 设置Member/Admin/DelegatedAdmin/EntityAdmin; 成员/管理员/委派管理员/主体管理员
 * @method string getMemberId() 获取成员账号id
 * @method void setMemberId(string $MemberId) 设置成员账号id
 * @method string getJoinType() 获取账号加入方式,create/invite
 * @method void setJoinType(string $JoinType) 设置账号加入方式,create/invite
 * @method string getGroupName() 获取集团名称
 * @method void setGroupName(string $GroupName) 设置集团名称
 * @method string getAdminName() 获取管理员账号名称
 * @method void setAdminName(string $AdminName) 设置管理员账号名称
 * @method string getAdminUin() 获取管理员Uin
 * @method void setAdminUin(string $AdminUin) 设置管理员Uin
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getNodeCount() 获取部门数
 * @method void setNodeCount(integer $NodeCount) 设置部门数
 * @method integer getMemberCount() 获取成员数
 * @method void setMemberCount(integer $MemberCount) 设置成员数
 * @method integer getSubAccountCount() 获取子账号数
 * @method void setSubAccountCount(integer $SubAccountCount) 设置子账号数
 * @method integer getAbnormalSubUserCount() 获取异常子账号数量
 * @method void setAbnormalSubUserCount(integer $AbnormalSubUserCount) 设置异常子账号数量
 * @method array getGroupPermission() 获取集团关系策略权限
 * @method void setGroupPermission(array $GroupPermission) 设置集团关系策略权限
 * @method array getMemberPermission() 获取成员关系策略权限
 * @method void setMemberPermission(array $MemberPermission) 设置成员关系策略权限
 * @method integer getGroupPayMode() 获取集团付费模式；0/自付费，1/代付费
 * @method void setGroupPayMode(integer $GroupPayMode) 设置集团付费模式；0/自付费，1/代付费
 * @method integer getMemberPayMode() 获取个人付费模式；0/自付费，1/代付费
 * @method void setMemberPayMode(integer $MemberPayMode) 设置个人付费模式；0/自付费，1/代付费
 * @method string getCFWProtect() 获取空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本
 * @method void setCFWProtect(string $CFWProtect) 设置空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本
 * @method string getWAFProtect() 获取空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本
 * @method void setWAFProtect(string $WAFProtect) 设置空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本
 * @method string getCWPProtect() 获取空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本
 * @method void setCWPProtect(string $CWPProtect) 设置空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本
 * @method array getDepartments() 获取所有部门的集合数组
 * @method void setDepartments(array $Departments) 设置所有部门的集合数组
 * @method string getMemberCreateTime() 获取成员创建时间
 * @method void setMemberCreateTime(string $MemberCreateTime) 设置成员创建时间
 * @method string getCSIPProtect() 获取Advanced/Enterprise/Ultimate 
 * @method void setCSIPProtect(string $CSIPProtect) 设置Advanced/Enterprise/Ultimate 
 * @method integer getQuotaConsumer() 获取1表示配额消耗方
 * @method void setQuotaConsumer(integer $QuotaConsumer) 设置1表示配额消耗方
 * @method integer getEnableAdminCount() 获取管理员/委派管理员 已开启数量
 * @method void setEnableAdminCount(integer $EnableAdminCount) 设置管理员/委派管理员 已开启数量
 * @method array getCloudCountDesc() 获取账户多云信息统计，数组形式，具体参考CloudCountDesc描述
 * @method void setCloudCountDesc(array $CloudCountDesc) 设置账户多云信息统计，数组形式，具体参考CloudCountDesc描述
 * @method integer getAdminCount() 获取管理员/委派管理员 总数量
 * @method void setAdminCount(integer $AdminCount) 设置管理员/委派管理员 总数量
 */
class OrganizationInfo extends AbstractModel
{
    /**
     * @var string 成员账号名称
     */
    public $NickName;

    /**
     * @var string 部门节点名称，账号所属部门
     */
    public $NodeName;

    /**
     * @var string Member/Admin/DelegatedAdmin/EntityAdmin; 成员/管理员/委派管理员/主体管理员
     */
    public $Role;

    /**
     * @var string 成员账号id
     */
    public $MemberId;

    /**
     * @var string 账号加入方式,create/invite
     */
    public $JoinType;

    /**
     * @var string 集团名称
     */
    public $GroupName;

    /**
     * @var string 管理员账号名称
     */
    public $AdminName;

    /**
     * @var string 管理员Uin
     */
    public $AdminUin;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 部门数
     */
    public $NodeCount;

    /**
     * @var integer 成员数
     */
    public $MemberCount;

    /**
     * @var integer 子账号数
     */
    public $SubAccountCount;

    /**
     * @var integer 异常子账号数量
     */
    public $AbnormalSubUserCount;

    /**
     * @var array 集团关系策略权限
     */
    public $GroupPermission;

    /**
     * @var array 成员关系策略权限
     */
    public $MemberPermission;

    /**
     * @var integer 集团付费模式；0/自付费，1/代付费
     */
    public $GroupPayMode;

    /**
     * @var integer 个人付费模式；0/自付费，1/代付费
     */
    public $MemberPayMode;

    /**
     * @var string 空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本
     */
    public $CFWProtect;

    /**
     * @var string 空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本
     */
    public $WAFProtect;

    /**
     * @var string 空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本
     */
    public $CWPProtect;

    /**
     * @var array 所有部门的集合数组
     */
    public $Departments;

    /**
     * @var string 成员创建时间
     */
    public $MemberCreateTime;

    /**
     * @var string Advanced/Enterprise/Ultimate 
     */
    public $CSIPProtect;

    /**
     * @var integer 1表示配额消耗方
     */
    public $QuotaConsumer;

    /**
     * @var integer 管理员/委派管理员 已开启数量
     */
    public $EnableAdminCount;

    /**
     * @var array 账户多云信息统计，数组形式，具体参考CloudCountDesc描述
     */
    public $CloudCountDesc;

    /**
     * @var integer 管理员/委派管理员 总数量
     */
    public $AdminCount;

    /**
     * @param string $NickName 成员账号名称
     * @param string $NodeName 部门节点名称，账号所属部门
     * @param string $Role Member/Admin/DelegatedAdmin/EntityAdmin; 成员/管理员/委派管理员/主体管理员
     * @param string $MemberId 成员账号id
     * @param string $JoinType 账号加入方式,create/invite
     * @param string $GroupName 集团名称
     * @param string $AdminName 管理员账号名称
     * @param string $AdminUin 管理员Uin
     * @param string $CreateTime 创建时间
     * @param integer $NodeCount 部门数
     * @param integer $MemberCount 成员数
     * @param integer $SubAccountCount 子账号数
     * @param integer $AbnormalSubUserCount 异常子账号数量
     * @param array $GroupPermission 集团关系策略权限
     * @param array $MemberPermission 成员关系策略权限
     * @param integer $GroupPayMode 集团付费模式；0/自付费，1/代付费
     * @param integer $MemberPayMode 个人付费模式；0/自付费，1/代付费
     * @param string $CFWProtect 空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本
     * @param string $WAFProtect 空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本
     * @param string $CWPProtect 空则未开启，否则不同字符串对应不同版本，common为通用，不区分版本
     * @param array $Departments 所有部门的集合数组
     * @param string $MemberCreateTime 成员创建时间
     * @param string $CSIPProtect Advanced/Enterprise/Ultimate 
     * @param integer $QuotaConsumer 1表示配额消耗方
     * @param integer $EnableAdminCount 管理员/委派管理员 已开启数量
     * @param array $CloudCountDesc 账户多云信息统计，数组形式，具体参考CloudCountDesc描述
     * @param integer $AdminCount 管理员/委派管理员 总数量
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
        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("JoinType",$param) and $param["JoinType"] !== null) {
            $this->JoinType = $param["JoinType"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("AdminName",$param) and $param["AdminName"] !== null) {
            $this->AdminName = $param["AdminName"];
        }

        if (array_key_exists("AdminUin",$param) and $param["AdminUin"] !== null) {
            $this->AdminUin = $param["AdminUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("MemberCount",$param) and $param["MemberCount"] !== null) {
            $this->MemberCount = $param["MemberCount"];
        }

        if (array_key_exists("SubAccountCount",$param) and $param["SubAccountCount"] !== null) {
            $this->SubAccountCount = $param["SubAccountCount"];
        }

        if (array_key_exists("AbnormalSubUserCount",$param) and $param["AbnormalSubUserCount"] !== null) {
            $this->AbnormalSubUserCount = $param["AbnormalSubUserCount"];
        }

        if (array_key_exists("GroupPermission",$param) and $param["GroupPermission"] !== null) {
            $this->GroupPermission = $param["GroupPermission"];
        }

        if (array_key_exists("MemberPermission",$param) and $param["MemberPermission"] !== null) {
            $this->MemberPermission = $param["MemberPermission"];
        }

        if (array_key_exists("GroupPayMode",$param) and $param["GroupPayMode"] !== null) {
            $this->GroupPayMode = $param["GroupPayMode"];
        }

        if (array_key_exists("MemberPayMode",$param) and $param["MemberPayMode"] !== null) {
            $this->MemberPayMode = $param["MemberPayMode"];
        }

        if (array_key_exists("CFWProtect",$param) and $param["CFWProtect"] !== null) {
            $this->CFWProtect = $param["CFWProtect"];
        }

        if (array_key_exists("WAFProtect",$param) and $param["WAFProtect"] !== null) {
            $this->WAFProtect = $param["WAFProtect"];
        }

        if (array_key_exists("CWPProtect",$param) and $param["CWPProtect"] !== null) {
            $this->CWPProtect = $param["CWPProtect"];
        }

        if (array_key_exists("Departments",$param) and $param["Departments"] !== null) {
            $this->Departments = $param["Departments"];
        }

        if (array_key_exists("MemberCreateTime",$param) and $param["MemberCreateTime"] !== null) {
            $this->MemberCreateTime = $param["MemberCreateTime"];
        }

        if (array_key_exists("CSIPProtect",$param) and $param["CSIPProtect"] !== null) {
            $this->CSIPProtect = $param["CSIPProtect"];
        }

        if (array_key_exists("QuotaConsumer",$param) and $param["QuotaConsumer"] !== null) {
            $this->QuotaConsumer = $param["QuotaConsumer"];
        }

        if (array_key_exists("EnableAdminCount",$param) and $param["EnableAdminCount"] !== null) {
            $this->EnableAdminCount = $param["EnableAdminCount"];
        }

        if (array_key_exists("CloudCountDesc",$param) and $param["CloudCountDesc"] !== null) {
            $this->CloudCountDesc = [];
            foreach ($param["CloudCountDesc"] as $key => $value){
                $obj = new CloudCountDesc();
                $obj->deserialize($value);
                array_push($this->CloudCountDesc, $obj);
            }
        }

        if (array_key_exists("AdminCount",$param) and $param["AdminCount"] !== null) {
            $this->AdminCount = $param["AdminCount"];
        }
    }
}
