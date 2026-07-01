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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回源Header信息
 *
 * @method string getKey() 获取<p>键。</p><p>参数格式：1、字符串只包含可打印的ASCII字符 2、不能包含这些字符()&lt;&gt;@,;:\&quot;/[ ]?={ }</p><p>入参限制：长度在1-40。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置<p>键。</p><p>参数格式：1、字符串只包含可打印的ASCII字符 2、不能包含这些字符()&lt;&gt;@,;:\&quot;/[ ]?={ }</p><p>入参限制：长度在1-40。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取<p>值。</p><p>入参限制：长度不能超过128</p><p>如果字符串包含$，那仅能配置&#39;$remote_addr&#39;, &#39;$remote_port&#39;，否则不支持。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置<p>值。</p><p>入参限制：长度不能超过128</p><p>如果字符串包含$，那仅能配置&#39;$remote_addr&#39;, &#39;$remote_port&#39;，否则不支持。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class OriginHeader extends AbstractModel
{
    /**
     * @var string <p>键。</p><p>参数格式：1、字符串只包含可打印的ASCII字符 2、不能包含这些字符()&lt;&gt;@,;:\&quot;/[ ]?={ }</p><p>入参限制：长度在1-40。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string <p>值。</p><p>入参限制：长度不能超过128</p><p>如果字符串包含$，那仅能配置&#39;$remote_addr&#39;, &#39;$remote_port&#39;，否则不支持。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param string $Key <p>键。</p><p>参数格式：1、字符串只包含可打印的ASCII字符 2、不能包含这些字符()&lt;&gt;@,;:\&quot;/[ ]?={ }</p><p>入参限制：长度在1-40。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value <p>值。</p><p>入参限制：长度不能超过128</p><p>如果字符串包含$，那仅能配置&#39;$remote_addr&#39;, &#39;$remote_port&#39;，否则不支持。</p>
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
