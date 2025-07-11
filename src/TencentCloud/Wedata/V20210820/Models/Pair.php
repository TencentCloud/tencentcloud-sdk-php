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
 * 键值对
 *
 * @method string getKey() 获取键名
 * @method void setKey(string $Key) 设置键名
 * @method string getValue() 获取值
 * @method void setValue(string $Value) 设置值
 * @method string getId() 获取 唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置 唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 */
class Pair extends AbstractModel
{
    /**
     * @var string 键名
     */
    public $Key;

    /**
     * @var string 值
     */
    public $Value;

    /**
     * @var string  唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @param string $Key 键名
     * @param string $Value 值
     * @param string $Id  唯一标识
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
