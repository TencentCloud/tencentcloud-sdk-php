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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 运维工单
 *
 * @method integer getId() 获取<p>数据库主键</p>
 * @method void setId(integer $Id) 设置<p>数据库主键</p>
 * @method string getTicketId() 获取<p>工单ID,id-s3ed4r5e</p>
 * @method void setTicketId(string $TicketId) 设置<p>工单ID,id-s3ed4r5e</p>
 * @method integer getTicketType() 获取<p>工单类型，0-运维访问工单，1-权限工单, 2-数据库变更工单,3-自动执行命令/脚本工单</p>
 * @method void setTicketType(integer $TicketType) 设置<p>工单类型，0-运维访问工单，1-权限工单, 2-数据库变更工单,3-自动执行命令/脚本工单</p>
 * @method Acl getAcl() 获取<p>acl权限</p>
 * @method void setAcl(Acl $Acl) 设置<p>acl权限</p>
 * @method string getStartTime() 获取<p>运维开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>运维开始时间</p>
 * @method string getEndTime() 获取<p>运维结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>运维结束时间</p>
 * @method integer getStatus() 获取<p>工单状态，0待提交(草稿)，1待审批，2批准，3已执行，4驳回,5删除，6过期</p>
 * @method void setStatus(integer $Status) 设置<p>工单状态，0待提交(草稿)，1待审批，2批准，3已执行，4驳回,5删除，6过期</p>
 * @method string getApplyTime() 获取<p>申请时间</p>
 * @method void setApplyTime(string $ApplyTime) 设置<p>申请时间</p>
 * @method integer getApplyUser() 获取<p>申请人用户Id</p>
 * @method void setApplyUser(integer $ApplyUser) 设置<p>申请人用户Id</p>
 * @method string getApproveUser() 获取<p>审批人uin</p>
 * @method void setApproveUser(string $ApproveUser) 设置<p>审批人uin</p>
 * @method string getApproveDesc() 获取<p>工单审批备注</p>
 * @method void setApproveDesc(string $ApproveDesc) 设置<p>工单审批备注</p>
 * @method integer getAclId() 获取<p>acl权限Id</p>
 * @method void setAclId(integer $AclId) 设置<p>acl权限Id</p>
 * @method array getApproveUserSet() 获取<p>待审批状态下，可以审批的人</p>
 * @method void setApproveUserSet(array $ApproveUserSet) 设置<p>待审批状态下，可以审批的人</p>
 * @method array getApproveUserInfoSet() 获取<p>审批人信息</p>
 * @method void setApproveUserInfoSet(array $ApproveUserInfoSet) 设置<p>审批人信息</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method string getName() 获取<p>申请权限</p>
 * @method void setName(string $Name) 设置<p>申请权限</p>
 * @method string getApproveTime() 获取<p>审批时间</p>
 * @method void setApproveTime(string $ApproveTime) 设置<p>审批时间</p>
 * @method string getDepartmentId() 获取<p>部门ID</p>
 * @method void setDepartmentId(string $DepartmentId) 设置<p>部门ID</p>
 * @method string getDepartmentName() 获取<p>部门名称</p>
 * @method void setDepartmentName(string $DepartmentName) 设置<p>部门名称</p>
 * @method integer getDepartmentSequence() 获取<p>部门Sequence</p>
 * @method void setDepartmentSequence(integer $DepartmentSequence) 设置<p>部门Sequence</p>
 * @method string getApplyUserName() 获取<p>申请人用户名</p>
 * @method void setApplyUserName(string $ApplyUserName) 设置<p>申请人用户名</p>
 * @method string getApplyRealName() 获取<p>申请人真实姓名</p>
 * @method void setApplyRealName(string $ApplyRealName) 设置<p>申请人真实姓名</p>
 * @method integer getApplyTimeVersion() 获取<p>申请时间戳，微妙</p>
 * @method void setApplyTimeVersion(integer $ApplyTimeVersion) 设置<p>申请时间戳，微妙</p>
 */
class Ticket extends AbstractModel
{
    /**
     * @var integer <p>数据库主键</p>
     */
    public $Id;

    /**
     * @var string <p>工单ID,id-s3ed4r5e</p>
     */
    public $TicketId;

    /**
     * @var integer <p>工单类型，0-运维访问工单，1-权限工单, 2-数据库变更工单,3-自动执行命令/脚本工单</p>
     */
    public $TicketType;

    /**
     * @var Acl <p>acl权限</p>
     */
    public $Acl;

    /**
     * @var string <p>运维开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>运维结束时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>工单状态，0待提交(草稿)，1待审批，2批准，3已执行，4驳回,5删除，6过期</p>
     */
    public $Status;

    /**
     * @var string <p>申请时间</p>
     */
    public $ApplyTime;

    /**
     * @var integer <p>申请人用户Id</p>
     */
    public $ApplyUser;

    /**
     * @var string <p>审批人uin</p>
     */
    public $ApproveUser;

    /**
     * @var string <p>工单审批备注</p>
     */
    public $ApproveDesc;

    /**
     * @var integer <p>acl权限Id</p>
     */
    public $AclId;

    /**
     * @var array <p>待审批状态下，可以审批的人</p>
     */
    public $ApproveUserSet;

    /**
     * @var array <p>审批人信息</p>
     */
    public $ApproveUserInfoSet;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>申请权限</p>
     */
    public $Name;

    /**
     * @var string <p>审批时间</p>
     */
    public $ApproveTime;

    /**
     * @var string <p>部门ID</p>
     */
    public $DepartmentId;

    /**
     * @var string <p>部门名称</p>
     */
    public $DepartmentName;

    /**
     * @var integer <p>部门Sequence</p>
     */
    public $DepartmentSequence;

    /**
     * @var string <p>申请人用户名</p>
     */
    public $ApplyUserName;

    /**
     * @var string <p>申请人真实姓名</p>
     */
    public $ApplyRealName;

    /**
     * @var integer <p>申请时间戳，微妙</p>
     */
    public $ApplyTimeVersion;

    /**
     * @param integer $Id <p>数据库主键</p>
     * @param string $TicketId <p>工单ID,id-s3ed4r5e</p>
     * @param integer $TicketType <p>工单类型，0-运维访问工单，1-权限工单, 2-数据库变更工单,3-自动执行命令/脚本工单</p>
     * @param Acl $Acl <p>acl权限</p>
     * @param string $StartTime <p>运维开始时间</p>
     * @param string $EndTime <p>运维结束时间</p>
     * @param integer $Status <p>工单状态，0待提交(草稿)，1待审批，2批准，3已执行，4驳回,5删除，6过期</p>
     * @param string $ApplyTime <p>申请时间</p>
     * @param integer $ApplyUser <p>申请人用户Id</p>
     * @param string $ApproveUser <p>审批人uin</p>
     * @param string $ApproveDesc <p>工单审批备注</p>
     * @param integer $AclId <p>acl权限Id</p>
     * @param array $ApproveUserSet <p>待审批状态下，可以审批的人</p>
     * @param array $ApproveUserInfoSet <p>审批人信息</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param string $Name <p>申请权限</p>
     * @param string $ApproveTime <p>审批时间</p>
     * @param string $DepartmentId <p>部门ID</p>
     * @param string $DepartmentName <p>部门名称</p>
     * @param integer $DepartmentSequence <p>部门Sequence</p>
     * @param string $ApplyUserName <p>申请人用户名</p>
     * @param string $ApplyRealName <p>申请人真实姓名</p>
     * @param integer $ApplyTimeVersion <p>申请时间戳，微妙</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TicketId",$param) and $param["TicketId"] !== null) {
            $this->TicketId = $param["TicketId"];
        }

        if (array_key_exists("TicketType",$param) and $param["TicketType"] !== null) {
            $this->TicketType = $param["TicketType"];
        }

        if (array_key_exists("Acl",$param) and $param["Acl"] !== null) {
            $this->Acl = new Acl();
            $this->Acl->deserialize($param["Acl"]);
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ApplyTime",$param) and $param["ApplyTime"] !== null) {
            $this->ApplyTime = $param["ApplyTime"];
        }

        if (array_key_exists("ApplyUser",$param) and $param["ApplyUser"] !== null) {
            $this->ApplyUser = $param["ApplyUser"];
        }

        if (array_key_exists("ApproveUser",$param) and $param["ApproveUser"] !== null) {
            $this->ApproveUser = $param["ApproveUser"];
        }

        if (array_key_exists("ApproveDesc",$param) and $param["ApproveDesc"] !== null) {
            $this->ApproveDesc = $param["ApproveDesc"];
        }

        if (array_key_exists("AclId",$param) and $param["AclId"] !== null) {
            $this->AclId = $param["AclId"];
        }

        if (array_key_exists("ApproveUserSet",$param) and $param["ApproveUserSet"] !== null) {
            $this->ApproveUserSet = $param["ApproveUserSet"];
        }

        if (array_key_exists("ApproveUserInfoSet",$param) and $param["ApproveUserInfoSet"] !== null) {
            $this->ApproveUserInfoSet = [];
            foreach ($param["ApproveUserInfoSet"] as $key => $value){
                $obj = new DepartmentManagerUser();
                $obj->deserialize($value);
                array_push($this->ApproveUserInfoSet, $obj);
            }
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ApproveTime",$param) and $param["ApproveTime"] !== null) {
            $this->ApproveTime = $param["ApproveTime"];
        }

        if (array_key_exists("DepartmentId",$param) and $param["DepartmentId"] !== null) {
            $this->DepartmentId = $param["DepartmentId"];
        }

        if (array_key_exists("DepartmentName",$param) and $param["DepartmentName"] !== null) {
            $this->DepartmentName = $param["DepartmentName"];
        }

        if (array_key_exists("DepartmentSequence",$param) and $param["DepartmentSequence"] !== null) {
            $this->DepartmentSequence = $param["DepartmentSequence"];
        }

        if (array_key_exists("ApplyUserName",$param) and $param["ApplyUserName"] !== null) {
            $this->ApplyUserName = $param["ApplyUserName"];
        }

        if (array_key_exists("ApplyRealName",$param) and $param["ApplyRealName"] !== null) {
            $this->ApplyRealName = $param["ApplyRealName"];
        }

        if (array_key_exists("ApplyTimeVersion",$param) and $param["ApplyTimeVersion"] !== null) {
            $this->ApplyTimeVersion = $param["ApplyTimeVersion"];
        }
    }
}
