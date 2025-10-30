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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务版本列表信息
 *
 * @method string getCreateTime() 获取保存时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置保存时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionNum() 获取版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionNum(string $VersionNum) 设置版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUserUin() 获取创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUserUin(string $CreateUserUin) 设置创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionId() 获取保存版本id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionId(string $VersionId) 设置保存版本id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionRemark() 获取版本描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionRemark(string $VersionRemark) 设置版本描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproveStatus() 获取审批状态（只有提交版本有）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveStatus(string $ApproveStatus) 设置审批状态（只有提交版本有）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取生产状态（只有提交版本有）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置生产状态（只有提交版本有）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproveUserUin() 获取审批人（只有提交版本有）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveUserUin(string $ApproveUserUin) 设置审批人（只有提交版本有）
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskVersion extends AbstractModel
{
    /**
     * @var string 保存时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionNum;

    /**
     * @var string 创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUserUin;

    /**
     * @var string 保存版本id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionId;

    /**
     * @var string 版本描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionRemark;

    /**
     * @var string 审批状态（只有提交版本有）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproveStatus;

    /**
     * @var string 生产状态（只有提交版本有）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 审批人（只有提交版本有）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproveUserUin;

    /**
     * @param string $CreateTime 保存时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionNum 版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUserUin 创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionId 保存版本id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionRemark 版本描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproveStatus 审批状态（只有提交版本有）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 生产状态（只有提交版本有）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproveUserUin 审批人（只有提交版本有）
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("VersionNum",$param) and $param["VersionNum"] !== null) {
            $this->VersionNum = $param["VersionNum"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("VersionRemark",$param) and $param["VersionRemark"] !== null) {
            $this->VersionRemark = $param["VersionRemark"];
        }

        if (array_key_exists("ApproveStatus",$param) and $param["ApproveStatus"] !== null) {
            $this->ApproveStatus = $param["ApproveStatus"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ApproveUserUin",$param) and $param["ApproveUserUin"] !== null) {
            $this->ApproveUserUin = $param["ApproveUserUin"];
        }
    }
}
