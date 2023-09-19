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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DSPA评估任务
 *
 * @method string getTaskId() 获取评估任务Id
 * @method void setTaskId(string $TaskId) 设置评估任务Id
 * @method integer getTaskUid() 获取评估任务的自增ID

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskUid(integer $TaskUid) 设置评估任务的自增ID

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取评估任务名称
 * @method void setTaskName(string $TaskName) 设置评估任务名称
 * @method string getBusinessName() 获取业务名称
 * @method void setBusinessName(string $BusinessName) 设置业务名称
 * @method string getBusinessDept() 获取业务所属部门
 * @method void setBusinessDept(string $BusinessDept) 设置业务所属部门
 * @method string getBusinessOwner() 获取业务负责人
 * @method void setBusinessOwner(string $BusinessOwner) 设置业务负责人
 * @method string getTemplateId() 获取评估模版Id
 * @method void setTemplateId(string $TemplateId) 设置评估模版Id
 * @method string getTemplateName() 获取评估模版名称
 * @method void setTemplateName(string $TemplateName) 设置评估模版名称
 * @method integer getComplianceGroupId() 获取分类分级模版Id
 * @method void setComplianceGroupId(integer $ComplianceGroupId) 设置分类分级模版Id
 * @method string getComplianceGroupName() 获取分类分级模版名称
 * @method void setComplianceGroupName(string $ComplianceGroupName) 设置分类分级模版名称
 * @method integer getControlItemCount() 获取评估项数量
 * @method void setControlItemCount(integer $ControlItemCount) 设置评估项数量
 * @method integer getRiskCount() 获取风险项数量（仅状态为finished的风险项不计入总数，其余状态均算入该数量）
 * @method void setRiskCount(integer $RiskCount) 设置风险项数量（仅状态为finished的风险项不计入总数，其余状态均算入该数量）
 * @method string getFinishedTime() 获取评估任务完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinishedTime(string $FinishedTime) 设置评估任务完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取评估任务发起时间
 * @method void setCreatedTime(string $CreatedTime) 设置评估任务发起时间
 * @method string getStatus() 获取评估状态。(waiting待评估，processing评估中, , finished已评估, failed评估失败)
 * @method void setStatus(string $Status) 设置评估状态。(waiting待评估，processing评估中, , finished已评估, failed评估失败)
 * @method array getRiskCountInfoList() 获取待处理各等级风险项信息
 * @method void setRiskCountInfoList(array $RiskCountInfoList) 设置待处理各等级风险项信息
 * @method DiscoveryCondition getDiscoveryCondition() 获取数据源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiscoveryCondition(DiscoveryCondition $DiscoveryCondition) 设置数据源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorInfo() 获取评估任务失败信息
 * @method void setErrorInfo(string $ErrorInfo) 设置评估任务失败信息
 * @method integer getTemplateUid() 获取模版主键id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateUid(integer $TemplateUid) 设置模版主键id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProgressPercent() 获取进度百分比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgressPercent(integer $ProgressPercent) 设置进度百分比
注意：此字段可能返回 null，表示取不到有效值。
 */
class AssessmentTask extends AbstractModel
{
    /**
     * @var string 评估任务Id
     */
    public $TaskId;

    /**
     * @var integer 评估任务的自增ID

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskUid;

    /**
     * @var string 评估任务名称
     */
    public $TaskName;

    /**
     * @var string 业务名称
     */
    public $BusinessName;

    /**
     * @var string 业务所属部门
     */
    public $BusinessDept;

    /**
     * @var string 业务负责人
     */
    public $BusinessOwner;

    /**
     * @var string 评估模版Id
     */
    public $TemplateId;

    /**
     * @var string 评估模版名称
     */
    public $TemplateName;

    /**
     * @var integer 分类分级模版Id
     */
    public $ComplianceGroupId;

    /**
     * @var string 分类分级模版名称
     */
    public $ComplianceGroupName;

    /**
     * @var integer 评估项数量
     */
    public $ControlItemCount;

    /**
     * @var integer 风险项数量（仅状态为finished的风险项不计入总数，其余状态均算入该数量）
     */
    public $RiskCount;

    /**
     * @var string 评估任务完成时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinishedTime;

    /**
     * @var string 评估任务发起时间
     */
    public $CreatedTime;

    /**
     * @var string 评估状态。(waiting待评估，processing评估中, , finished已评估, failed评估失败)
     */
    public $Status;

    /**
     * @var array 待处理各等级风险项信息
     */
    public $RiskCountInfoList;

    /**
     * @var DiscoveryCondition 数据源信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiscoveryCondition;

    /**
     * @var string 评估任务失败信息
     */
    public $ErrorInfo;

    /**
     * @var integer 模版主键id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateUid;

    /**
     * @var integer 进度百分比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProgressPercent;

    /**
     * @param string $TaskId 评估任务Id
     * @param integer $TaskUid 评估任务的自增ID

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 评估任务名称
     * @param string $BusinessName 业务名称
     * @param string $BusinessDept 业务所属部门
     * @param string $BusinessOwner 业务负责人
     * @param string $TemplateId 评估模版Id
     * @param string $TemplateName 评估模版名称
     * @param integer $ComplianceGroupId 分类分级模版Id
     * @param string $ComplianceGroupName 分类分级模版名称
     * @param integer $ControlItemCount 评估项数量
     * @param integer $RiskCount 风险项数量（仅状态为finished的风险项不计入总数，其余状态均算入该数量）
     * @param string $FinishedTime 评估任务完成时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 评估任务发起时间
     * @param string $Status 评估状态。(waiting待评估，processing评估中, , finished已评估, failed评估失败)
     * @param array $RiskCountInfoList 待处理各等级风险项信息
     * @param DiscoveryCondition $DiscoveryCondition 数据源信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorInfo 评估任务失败信息
     * @param integer $TemplateUid 模版主键id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProgressPercent 进度百分比
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskUid",$param) and $param["TaskUid"] !== null) {
            $this->TaskUid = $param["TaskUid"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("BusinessName",$param) and $param["BusinessName"] !== null) {
            $this->BusinessName = $param["BusinessName"];
        }

        if (array_key_exists("BusinessDept",$param) and $param["BusinessDept"] !== null) {
            $this->BusinessDept = $param["BusinessDept"];
        }

        if (array_key_exists("BusinessOwner",$param) and $param["BusinessOwner"] !== null) {
            $this->BusinessOwner = $param["BusinessOwner"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("ComplianceGroupId",$param) and $param["ComplianceGroupId"] !== null) {
            $this->ComplianceGroupId = $param["ComplianceGroupId"];
        }

        if (array_key_exists("ComplianceGroupName",$param) and $param["ComplianceGroupName"] !== null) {
            $this->ComplianceGroupName = $param["ComplianceGroupName"];
        }

        if (array_key_exists("ControlItemCount",$param) and $param["ControlItemCount"] !== null) {
            $this->ControlItemCount = $param["ControlItemCount"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("FinishedTime",$param) and $param["FinishedTime"] !== null) {
            $this->FinishedTime = $param["FinishedTime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RiskCountInfoList",$param) and $param["RiskCountInfoList"] !== null) {
            $this->RiskCountInfoList = [];
            foreach ($param["RiskCountInfoList"] as $key => $value){
                $obj = new RiskCountInfo();
                $obj->deserialize($value);
                array_push($this->RiskCountInfoList, $obj);
            }
        }

        if (array_key_exists("DiscoveryCondition",$param) and $param["DiscoveryCondition"] !== null) {
            $this->DiscoveryCondition = new DiscoveryCondition();
            $this->DiscoveryCondition->deserialize($param["DiscoveryCondition"]);
        }

        if (array_key_exists("ErrorInfo",$param) and $param["ErrorInfo"] !== null) {
            $this->ErrorInfo = $param["ErrorInfo"];
        }

        if (array_key_exists("TemplateUid",$param) and $param["TemplateUid"] !== null) {
            $this->TemplateUid = $param["TemplateUid"];
        }

        if (array_key_exists("ProgressPercent",$param) and $param["ProgressPercent"] !== null) {
            $this->ProgressPercent = $param["ProgressPercent"];
        }
    }
}
