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
 * @method string getCreateTime() 获取<p>保存时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>保存时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionNum() 获取<p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionNum(string $VersionNum) 设置<p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUserUin() 获取<p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUserUin(string $CreateUserUin) 设置<p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionId() 获取<p>保存版本id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionId(string $VersionId) 设置<p>保存版本id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionRemark() 获取<p>版本描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionRemark(string $VersionRemark) 设置<p>版本描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproveStatus() 获取<p>审批状态（只有提交版本有）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveStatus(string $ApproveStatus) 设置<p>审批状态（只有提交版本有）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>生产状态（只有提交版本有）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>生产状态（只有提交版本有）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApproveUserUin() 获取<p>审批人（只有提交版本有）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApproveUserUin(string $ApproveUserUin) 设置<p>审批人（只有提交版本有）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUsedVersion() 获取<p>是否生产态使用版本，保存版本没有该字段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsedVersion(boolean $UsedVersion) 设置<p>是否生产态使用版本，保存版本没有该字段</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TriggerTaskVersion extends AbstractModel
{
    /**
     * @var string <p>保存时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionNum;

    /**
     * @var string <p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUserUin;

    /**
     * @var string <p>保存版本id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionId;

    /**
     * @var string <p>版本描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionRemark;

    /**
     * @var string <p>审批状态（只有提交版本有）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproveStatus;

    /**
     * @var string <p>生产状态（只有提交版本有）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>审批人（只有提交版本有）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApproveUserUin;

    /**
     * @var boolean <p>是否生产态使用版本，保存版本没有该字段</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsedVersion;

    /**
     * @param string $CreateTime <p>保存时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionNum <p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUserUin <p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionId <p>保存版本id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionRemark <p>版本描述信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproveStatus <p>审批状态（只有提交版本有）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>生产状态（只有提交版本有）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApproveUserUin <p>审批人（只有提交版本有）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $UsedVersion <p>是否生产态使用版本，保存版本没有该字段</p>
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

        if (array_key_exists("UsedVersion",$param) and $param["UsedVersion"] !== null) {
            $this->UsedVersion = $param["UsedVersion"];
        }
    }
}
