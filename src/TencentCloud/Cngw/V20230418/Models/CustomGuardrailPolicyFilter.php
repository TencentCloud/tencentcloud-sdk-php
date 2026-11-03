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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义安全护栏策略列表过滤条件
 *
 * @method string getName() 获取<p>过滤字段：Enabled、Direction、HandleAction、BindType、SyncStatus；名称区分大小写。Direction 使用 input/output/both。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>过滤字段：Enabled、Direction、HandleAction、BindType、SyncStatus；名称区分大小写。Direction 使用 input/output/both。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValues() 获取<p>至少一个字符串值；同一过滤项内多个值为 OR，不同过滤项之间为 AND。例如 Enabled 的值为字符串 "true"，不是布尔值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValues(array $Values) 设置<p>至少一个字符串值；同一过滤项内多个值为 OR，不同过滤项之间为 AND。例如 Enabled 的值为字符串 "true"，不是布尔值。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CustomGuardrailPolicyFilter extends AbstractModel
{
    /**
     * @var string <p>过滤字段：Enabled、Direction、HandleAction、BindType、SyncStatus；名称区分大小写。Direction 使用 input/output/both。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var array <p>至少一个字符串值；同一过滤项内多个值为 OR，不同过滤项之间为 AND。例如 Enabled 的值为字符串 "true"，不是布尔值。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Values;

    /**
     * @param string $Name <p>过滤字段：Enabled、Direction、HandleAction、BindType、SyncStatus；名称区分大小写。Direction 使用 input/output/both。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Values <p>至少一个字符串值；同一过滤项内多个值为 OR，不同过滤项之间为 AND。例如 Enabled 的值为字符串 "true"，不是布尔值。</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
