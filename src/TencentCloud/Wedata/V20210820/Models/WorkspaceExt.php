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
 * 项目扩展信息
 *
 * @method string getProjectId() 获取2670965482618679296
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置2670965482618679296
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKey() 获取metrics
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置metrics
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取json
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置json
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkspaceExt extends AbstractModel
{
    /**
     * @var string 2670965482618679296
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string metrics
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string json
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param string $ProjectId 2670965482618679296
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Key metrics
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value json
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
