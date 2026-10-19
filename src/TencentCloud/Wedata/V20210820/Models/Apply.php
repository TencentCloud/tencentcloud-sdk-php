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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 审批列表信息
 *
 * @method string getApplicantId() 获取<p>申请人id</p>
 * @method void setApplicantId(string $ApplicantId) 设置<p>申请人id</p>
 * @method string getApplicantName() 获取<p>申请人名称</p>
 * @method void setApplicantName(string $ApplicantName) 设置<p>申请人名称</p>
 * @method string getRemark() 获取<p>审批备注</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置<p>审批备注</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproveClassification() 获取<p>审批分类key</p>
 * @method void setApproveClassification(string $ApproveClassification) 设置<p>审批分类key</p>
 * @method string getApproveId() 获取<p>审批单id</p>
 * @method void setApproveId(string $ApproveId) 设置<p>审批单id</p>
 * @method string getApproveType() 获取<p>审批类型key</p>
 * @method void setApproveType(string $ApproveType) 设置<p>审批类型key</p>
 * @method string getReason() 获取<p>申请原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReason(string $Reason) 设置<p>申请原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getApproveTime() 获取<p>审批时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveTime(string $ApproveTime) 设置<p>审批时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproveClassificationName() 获取<p>审批分类名称</p>
 * @method void setApproveClassificationName(string $ApproveClassificationName) 设置<p>审批分类名称</p>
 * @method string getStatus() 获取<p>状态</p>
 * @method void setStatus(string $Status) 设置<p>状态</p>
 * @method string getApproveTypeName() 获取<p>审批类型名称</p>
 * @method void setApproveTypeName(string $ApproveTypeName) 设置<p>审批类型名称</p>
 * @method string getErrorMessage() 获取<p>审批异常或者失败信息</p>
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>审批异常或者失败信息</p>
 * @method string getApplyName() 获取<p>申请名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplyName(string $ApplyName) 设置<p>申请名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproverId() 获取<p>审批人id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproverId(string $ApproverId) 设置<p>审批人id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproverName() 获取<p>审批人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproverName(string $ApproverName) 设置<p>审批人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproveProjectName() 获取<p>审批所属项目</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveProjectName(string $ApproveProjectName) 设置<p>审批所属项目</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplyId() 获取<p>审批id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplyId(string $ApplyId) 设置<p>审批id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMetadata() 获取<p>扩展字段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetadata(string $Metadata) 设置<p>扩展字段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTimestamp() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTimestamp(integer $CreateTimestamp) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getApproveTimestamp() 获取<p>审批时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveTimestamp(integer $ApproveTimestamp) 设置<p>审批时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproveCode() 获取<p>审批扩展码</p>
 * @method void setApproveCode(string $ApproveCode) 设置<p>审批扩展码</p>
 */
class Apply extends AbstractModel
{
    /**
     * @var string <p>申请人id</p>
     */
    public $ApplicantId;

    /**
     * @var string <p>申请人名称</p>
     */
    public $ApplicantName;

    /**
     * @var string <p>审批备注</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string <p>审批分类key</p>
     */
    public $ApproveClassification;

    /**
     * @var string <p>审批单id</p>
     */
    public $ApproveId;

    /**
     * @var string <p>审批类型key</p>
     */
    public $ApproveType;

    /**
     * @var string <p>申请原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reason;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>审批时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproveTime;

    /**
     * @var string <p>审批分类名称</p>
     */
    public $ApproveClassificationName;

    /**
     * @var string <p>状态</p>
     */
    public $Status;

    /**
     * @var string <p>审批类型名称</p>
     */
    public $ApproveTypeName;

    /**
     * @var string <p>审批异常或者失败信息</p>
     */
    public $ErrorMessage;

    /**
     * @var string <p>申请名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplyName;

    /**
     * @var string <p>审批人id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproverId;

    /**
     * @var string <p>审批人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproverName;

    /**
     * @var string <p>审批所属项目</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproveProjectName;

    /**
     * @var string <p>审批id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplyId;

    /**
     * @var string <p>扩展字段</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Metadata;

    /**
     * @var integer <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTimestamp;

    /**
     * @var integer <p>审批时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproveTimestamp;

    /**
     * @var string <p>审批扩展码</p>
     */
    public $ApproveCode;

    /**
     * @param string $ApplicantId <p>申请人id</p>
     * @param string $ApplicantName <p>申请人名称</p>
     * @param string $Remark <p>审批备注</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproveClassification <p>审批分类key</p>
     * @param string $ApproveId <p>审批单id</p>
     * @param string $ApproveType <p>审批类型key</p>
     * @param string $Reason <p>申请原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
     * @param string $ApproveTime <p>审批时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproveClassificationName <p>审批分类名称</p>
     * @param string $Status <p>状态</p>
     * @param string $ApproveTypeName <p>审批类型名称</p>
     * @param string $ErrorMessage <p>审批异常或者失败信息</p>
     * @param string $ApplyName <p>申请名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproverId <p>审批人id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproverName <p>审批人名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproveProjectName <p>审批所属项目</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplyId <p>审批id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Metadata <p>扩展字段</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTimestamp <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ApproveTimestamp <p>审批时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproveCode <p>审批扩展码</p>
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

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = $param["Metadata"];
        }

        if (array_key_exists("CreateTimestamp",$param) and $param["CreateTimestamp"] !== null) {
            $this->CreateTimestamp = $param["CreateTimestamp"];
        }

        if (array_key_exists("ApproveTimestamp",$param) and $param["ApproveTimestamp"] !== null) {
            $this->ApproveTimestamp = $param["ApproveTimestamp"];
        }

        if (array_key_exists("ApproveCode",$param) and $param["ApproveCode"] !== null) {
            $this->ApproveCode = $param["ApproveCode"];
        }
    }
}
