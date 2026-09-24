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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 审计日志条目。记录 Registry / Record / Version 维度的动作。
 *
 * @method string getAuditLogId() 获取<p>审计日志 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuditLogId(string $AuditLogId) 设置<p>审计日志 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegistryId() 获取<p>所属 Registry ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegistryId(string $RegistryId) 设置<p>所属 Registry ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActor() 获取<p>动作发起者（主账号 UIN 或子账号 UIN）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActor(string $Actor) 设置<p>动作发起者（主账号 UIN 或子账号 UIN）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAction() 获取<p>Action 名称，等同 X-TC-Action。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(string $Action) 设置<p>Action 名称，等同 X-TC-Action。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDetails() 获取<p>动作脱敏摘要对象；使用云 API 字段命名，字段随 Action 而变；不包含凭据、预签名 URL 或完整 Descriptor。（JSON 字符串形式）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetails(string $Details) 设置<p>动作脱敏摘要对象；使用云 API 字段命名，字段随 Action 而变；不包含凭据、预签名 URL 或完整 Descriptor。（JSON 字符串形式）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>动作发生时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>动作发生时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecordId() 获取<p>关联 Record ID；仅 Record / Version 相关动作。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordId(string $RecordId) 设置<p>关联 Record ID；仅 Record / Version 相关动作。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionId() 获取<p>关联 Version ID；仅 Version 相关动作。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionId(string $VersionId) 设置<p>关联 Version ID；仅 Version 相关动作。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudAuditLog extends AbstractModel
{
    /**
     * @var string <p>审计日志 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuditLogId;

    /**
     * @var string <p>所属 Registry ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegistryId;

    /**
     * @var string <p>动作发起者（主账号 UIN 或子账号 UIN）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Actor;

    /**
     * @var string <p>Action 名称，等同 X-TC-Action。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @var string <p>动作脱敏摘要对象；使用云 API 字段命名，字段随 Action 而变；不包含凭据、预签名 URL 或完整 Descriptor。（JSON 字符串形式）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Details;

    /**
     * @var string <p>动作发生时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>关联 Record ID；仅 Record / Version 相关动作。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordId;

    /**
     * @var string <p>关联 Version ID；仅 Version 相关动作。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionId;

    /**
     * @param string $AuditLogId <p>审计日志 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegistryId <p>所属 Registry ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Actor <p>动作发起者（主账号 UIN 或子账号 UIN）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Action <p>Action 名称，等同 X-TC-Action。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Details <p>动作脱敏摘要对象；使用云 API 字段命名，字段随 Action 而变；不包含凭据、预签名 URL 或完整 Descriptor。（JSON 字符串形式）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>动作发生时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecordId <p>关联 Record ID；仅 Record / Version 相关动作。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionId <p>关联 Version ID；仅 Version 相关动作。</p>
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
        if (array_key_exists("AuditLogId",$param) and $param["AuditLogId"] !== null) {
            $this->AuditLogId = $param["AuditLogId"];
        }

        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("Actor",$param) and $param["Actor"] !== null) {
            $this->Actor = $param["Actor"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = $param["Details"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }
    }
}
