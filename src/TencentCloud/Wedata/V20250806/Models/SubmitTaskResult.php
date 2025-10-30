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
 * 提交数据开发任务结果
 *
 * @method string getVersionId() 获取生成的任务版本ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionId(string $VersionId) 设置生成的任务版本ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getStatus() 获取提交状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(boolean $Status) 设置提交状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class SubmitTaskResult extends AbstractModel
{
    /**
     * @var string 生成的任务版本ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionId;

    /**
     * @var boolean 提交状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param string $VersionId 生成的任务版本ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Status 提交状态
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
        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
