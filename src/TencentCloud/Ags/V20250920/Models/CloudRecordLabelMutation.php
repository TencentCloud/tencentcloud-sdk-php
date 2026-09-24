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
 * Record Label 变更操作项。Operation=SET 时可携带 VersionId；DELETE 时禁止 VersionId。
 *
 * @method string getOperation() 获取<p>操作类型。SET：创建或移动 Label；DELETE：删除自定义 Label（stable/latest 保留 Label 禁止删除）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperation(string $Operation) 设置<p>操作类型。SET：创建或移动 Label；DELETE：删除自定义 Label（stable/latest 保留 Label 禁止删除）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>Label 名称，长度 1..63，格式 ^[a-z][a-z0-9._-]{0,62}$，按小写规范化。stable、latest 为系统保留 Label。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>Label 名称，长度 1..63，格式 ^[a-z][a-z0-9._-]{0,62}$，按小写规范化。stable、latest 为系统保留 Label。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionId() 获取<p>目标 Version ID。SET 时可选：省略表示未绑定（自定义 Label 允许，stable 禁止）；DELETE 时禁止携带。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionId(string $VersionId) 设置<p>目标 Version ID。SET 时可选：省略表示未绑定（自定义 Label 允许，stable 禁止）；DELETE 时禁止携带。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReason() 获取<p>变更原因，最大 1024 字符，可选。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReason(string $Reason) 设置<p>变更原因，最大 1024 字符，可选。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudRecordLabelMutation extends AbstractModel
{
    /**
     * @var string <p>操作类型。SET：创建或移动 Label；DELETE：删除自定义 Label（stable/latest 保留 Label 禁止删除）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operation;

    /**
     * @var string <p>Label 名称，长度 1..63，格式 ^[a-z][a-z0-9._-]{0,62}$，按小写规范化。stable、latest 为系统保留 Label。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>目标 Version ID。SET 时可选：省略表示未绑定（自定义 Label 允许，stable 禁止）；DELETE 时禁止携带。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionId;

    /**
     * @var string <p>变更原因，最大 1024 字符，可选。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reason;

    /**
     * @param string $Operation <p>操作类型。SET：创建或移动 Label；DELETE：删除自定义 Label（stable/latest 保留 Label 禁止删除）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>Label 名称，长度 1..63，格式 ^[a-z][a-z0-9._-]{0,62}$，按小写规范化。stable、latest 为系统保留 Label。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionId <p>目标 Version ID。SET 时可选：省略表示未绑定（自定义 Label 允许，stable 禁止）；DELETE 时禁止携带。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Reason <p>变更原因，最大 1024 字符，可选。</p>
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
        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
