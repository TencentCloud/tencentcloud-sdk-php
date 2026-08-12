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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基于会话ID的亲和配置。
 *
 * @method string getSource() 获取<p>会话 ID 参数的传递位置。不填写时默认为 Header。</p><p>枚举值：</p><ul><li>Header： 在请求头中传递参数。</li></ul><p>默认值：Header。</p>
 * @method void setSource(string $Source) 设置<p>会话 ID 参数的传递位置。不填写时默认为 Header。</p><p>枚举值：</p><ul><li>Header： 在请求头中传递参数。</li></ul><p>默认值：Header。</p>
 * @method string getHeaderName() 获取<p>传递会话 ID 的请求头名称。当 Source 为 Header 时必填。<br>不填写时默认为 EO-Infer-Session-Id。</p><p>入参限制：长度为 1-64 个字符，仅支持字母、数字、中划线。</p><p>默认值：EO-Infer-Session-Id。</p>
 * @method void setHeaderName(string $HeaderName) 设置<p>传递会话 ID 的请求头名称。当 Source 为 Header 时必填。<br>不填写时默认为 EO-Infer-Session-Id。</p><p>入参限制：长度为 1-64 个字符，仅支持字母、数字、中划线。</p><p>默认值：EO-Infer-Session-Id。</p>
 */
class SessionIdAffinityConfig extends AbstractModel
{
    /**
     * @var string <p>会话 ID 参数的传递位置。不填写时默认为 Header。</p><p>枚举值：</p><ul><li>Header： 在请求头中传递参数。</li></ul><p>默认值：Header。</p>
     */
    public $Source;

    /**
     * @var string <p>传递会话 ID 的请求头名称。当 Source 为 Header 时必填。<br>不填写时默认为 EO-Infer-Session-Id。</p><p>入参限制：长度为 1-64 个字符，仅支持字母、数字、中划线。</p><p>默认值：EO-Infer-Session-Id。</p>
     */
    public $HeaderName;

    /**
     * @param string $Source <p>会话 ID 参数的传递位置。不填写时默认为 Header。</p><p>枚举值：</p><ul><li>Header： 在请求头中传递参数。</li></ul><p>默认值：Header。</p>
     * @param string $HeaderName <p>传递会话 ID 的请求头名称。当 Source 为 Header 时必填。<br>不填写时默认为 EO-Infer-Session-Id。</p><p>入参限制：长度为 1-64 个字符，仅支持字母、数字、中划线。</p><p>默认值：EO-Infer-Session-Id。</p>
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("HeaderName",$param) and $param["HeaderName"] !== null) {
            $this->HeaderName = $param["HeaderName"];
        }
    }
}
