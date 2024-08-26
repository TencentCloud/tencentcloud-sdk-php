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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 审批列表信息
 *
 * @method string getApplicantId() 获取申请人id
 * @method void setApplicantId(string $ApplicantId) 设置申请人id
 * @method string getApplicantName() 获取申请人名称
 * @method void setApplicantName(string $ApplicantName) 设置申请人名称
 * @method string getRemark() 获取审批备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置审批备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproveClassification() 获取审批分类key
 * @method void setApproveClassification(string $ApproveClassification) 设置审批分类key
 * @method string getApproveId() 获取审批单id
 * @method void setApproveId(string $ApproveId) 设置审批单id
 * @method string getApproveType() 获取审批类型key
 * @method void setApproveType(string $ApproveType) 设置审批类型key
 * @method string getReason() 获取申请原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReason(string $Reason) 设置申请原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getApproveTime() 获取审批时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveTime(string $ApproveTime) 设置审批时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproveClassificationName() 获取审批分类名称
 * @method void setApproveClassificationName(string $ApproveClassificationName) 设置审批分类名称
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getApproveTypeName() 获取审批类型名称
 * @method void setApproveTypeName(string $ApproveTypeName) 设置审批类型名称
 * @method string getErrorMessage() 获取审批异常或者失败信息
 * @method void setErrorMessage(string $ErrorMessage) 设置审批异常或者失败信息
 * @method string getApplyName() 获取申请名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplyName(string $ApplyName) 设置申请名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproverId() 获取审批人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproverId(string $ApproverId) 设置审批人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproverName() 获取审批人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproverName(string $ApproverName) 设置审批人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproveProjectName() 获取审批所属项目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveProjectName(string $ApproveProjectName) 设置审批所属项目
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplyId() 获取审批id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplyId(string $ApplyId) 设置审批id
注意：此字段可能返回 null，表示取不到有效值。
 */
class Apply extends AbstractModel
{
    /**
     * @var string 申请人id
     */
    public $ApplicantId;

    /**
     * @var string 申请人名称
     */
    public $ApplicantName;

    /**
     * @var string 审批备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 审批分类key
     */
    public $ApproveClassification;

    /**
     * @var string 审批单id
     */
    public $ApproveId;

    /**
     * @var string 审批类型key
     */
    public $ApproveType;

    /**
     * @var string 申请原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reason;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 审批时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproveTime;

    /**
     * @var string 审批分类名称
     */
    public $ApproveClassificationName;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 审批类型名称
     */
    public $ApproveTypeName;

    /**
     * @var string 审批异常或者失败信息
     */
    public $ErrorMessage;

    /**
     * @var string 申请名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplyName;

    /**
     * @var string 审批人id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproverId;

    /**
     * @var string 审批人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproverName;

    /**
     * @var string 审批所属项目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproveProjectName;

    /**
     * @var string 审批id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplyId;

    /**
     * @param string $ApplicantId 申请人id
     * @param string $ApplicantName 申请人名称
     * @param string $Remark 审批备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproveClassification 审批分类key
     * @param string $ApproveId 审批单id
     * @param string $ApproveType 审批类型key
     * @param string $Reason 申请原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
     * @param string $ApproveTime 审批时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproveClassificationName 审批分类名称
     * @param string $Status 状态
     * @param string $ApproveTypeName 审批类型名称
     * @param string $ErrorMessage 审批异常或者失败信息
     * @param string $ApplyName 申请名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproverId 审批人id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproverName 审批人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproveProjectName 审批所属项目
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplyId 审批id
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
        if (array_key_exists("ApplicantId",$param) and $param["ApplicantId"] !== null) {
            $this->ApplicantId = $param["ApplicantId"];
        }

        if (array_key_exists("ApplicantName",$param) and $param["ApplicantName"] !== null) {
            $this->ApplicantName = $param["ApplicantName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ApproveClassification",$param) and $param["ApproveClassification"] !== null) {
            $this->ApproveClassification = $param["ApproveClassification"];
        }

        if (array_key_exists("ApproveId",$param) and $param["ApproveId"] !== null) {
            $this->ApproveId = $param["ApproveId"];
        }

        if (array_key_exists("ApproveType",$param) and $param["ApproveType"] !== null) {
            $this->ApproveType = $param["ApproveType"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ApproveTime",$param) and $param["ApproveTime"] !== null) {
            $this->ApproveTime = $param["ApproveTime"];
        }

        if (array_key_exists("ApproveClassificationName",$param) and $param["ApproveClassificationName"] !== null) {
            $this->ApproveClassificationName = $param["ApproveClassificationName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ApproveTypeName",$param) and $param["ApproveTypeName"] !== null) {
            $this->ApproveTypeName = $param["ApproveTypeName"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("ApplyName",$param) and $param["ApplyName"] !== null) {
            $this->ApplyName = $param["ApplyName"];
        }

        if (array_key_exists("ApproverId",$param) and $param["ApproverId"] !== null) {
            $this->ApproverId = $param["ApproverId"];
        }

        if (array_key_exists("ApproverName",$param) and $param["ApproverName"] !== null) {
            $this->ApproverName = $param["ApproverName"];
        }

        if (array_key_exists("ApproveProjectName",$param) and $param["ApproveProjectName"] !== null) {
            $this->ApproveProjectName = $param["ApproveProjectName"];
        }

        if (array_key_exists("ApplyId",$param) and $param["ApplyId"] !== null) {
            $this->ApplyId = $param["ApplyId"];
        }
    }
}
