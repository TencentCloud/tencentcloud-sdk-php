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
 * 集成标签
 *
 * @method string getKey() 获取key值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置key值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取标签值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置标签值
注意：此字段可能返回 null，表示取不到有效值。
 */
class IntegrationTag extends AbstractModel
{
    /**
     * @var string key值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string 标签值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param string $Key key值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 标签值
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
