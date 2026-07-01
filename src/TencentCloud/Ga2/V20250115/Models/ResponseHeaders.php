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
 * 响应Header
 *
 * @method string getKey() 获取<p>key</p><p>参数格式：1、字符串只包含可打印的ASCII字符 2、不能包含这些字符()&lt;&gt;@,;:\&quot;/[ ]?={ }</p><p>入参限制：长度在1-40。</p>
 * @method void setKey(string $Key) 设置<p>key</p><p>参数格式：1、字符串只包含可打印的ASCII字符 2、不能包含这些字符()&lt;&gt;@,;:\&quot;/[ ]?={ }</p><p>入参限制：长度在1-40。</p>
 * @method string getValue() 获取<p>value</p><p>入参限制：长度不能超过128</p><p>如果字符串包含$，那仅能配置&#39;$remote_addr&#39;, &#39;$remote_port&#39;，否则不支持。</p>
 * @method void setValue(string $Value) 设置<p>value</p><p>入参限制：长度不能超过128</p><p>如果字符串包含$，那仅能配置&#39;$remote_addr&#39;, &#39;$remote_port&#39;，否则不支持。</p>
 */
class ResponseHeaders extends AbstractModel
{
    /**
     * @var string <p>key</p><p>参数格式：1、字符串只包含可打印的ASCII字符 2、不能包含这些字符()&lt;&gt;@,;:\&quot;/[ ]?={ }</p><p>入参限制：长度在1-40。</p>
     */
    public $Key;

    /**
     * @var string <p>value</p><p>入参限制：长度不能超过128</p><p>如果字符串包含$，那仅能配置&#39;$remote_addr&#39;, &#39;$remote_port&#39;，否则不支持。</p>
     */
    public $Value;

    /**
     * @param string $Key <p>key</p><p>参数格式：1、字符串只包含可打印的ASCII字符 2、不能包含这些字符()&lt;&gt;@,;:\&quot;/[ ]?={ }</p><p>入参限制：长度在1-40。</p>
     * @param string $Value <p>value</p><p>入参限制：长度不能超过128</p><p>如果字符串包含$，那仅能配置&#39;$remote_addr&#39;, &#39;$remote_port&#39;，否则不支持。</p>
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
