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
 * @method string getCreateUserUin() 获取版本创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUserUin(string $CreateUserUin) 设置版本创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionId() 获取保存版本Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionId(string $VersionId) 设置保存版本Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionRemark() 获取版本描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionRemark(string $VersionRemark) 设置版本描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproveStatus() 获取审批状态（只有提交版本有）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveStatus(string $ApproveStatus) 设置审批状态（只有提交版本有）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproveTime() 获取生产状态（只有提交版本有）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveTime(string $ApproveTime) 设置生产状态（只有提交版本有）
注意：此字段可能返回 null，表示取不到有效值。
 * @method Task getTask() 获取版本的任务详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTask(Task $Task) 设置版本的任务详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproveUserUin() 获取审批人Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveUserUin(string $ApproveUserUin) 设置审批人Id
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskVersionDetail extends AbstractModel
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
     * @var string 版本创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUserUin;

    /**
     * @var string 保存版本Id
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
    public $ApproveTime;

    /**
     * @var Task 版本的任务详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Task;

    /**
     * @var string 审批人Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproveUserUin;

    /**
     * @param string $CreateTime 保存时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionNum 版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUserUin 版本创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionId 保存版本Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionRemark 版本描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproveStatus 审批状态（只有提交版本有）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproveTime 生产状态（只有提交版本有）
注意：此字段可能返回 null，表示取不到有效值。
     * @param Task $Task 版本的任务详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproveUserUin 审批人Id
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

        if (array_key_exists("ApproveTime",$param) and $param["ApproveTime"] !== null) {
            $this->ApproveTime = $param["ApproveTime"];
        }

        if (array_key_exists("Task",$param) and $param["Task"] !== null) {
            $this->Task = new Task();
            $this->Task->deserialize($param["Task"]);
        }

        if (array_key_exists("ApproveUserUin",$param) and $param["ApproveUserUin"] !== null) {
            $this->ApproveUserUin = $param["ApproveUserUin"];
        }
    }
}
