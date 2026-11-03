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
 * 自定义安全护栏鉴权配置；不返回 API Key 明文
 *
 * @method string getAuthType() 获取<p>网关访问审核引擎的鉴权方式：none 无鉴权（创建默认值）；api_key 在指定 HTTP Header 中发送凭据。与客户端访问 AI 网关时使用的鉴权相互独立。none 模式不应携带 HeaderName 或 ApiKey。</p>
 * @method void setAuthType(string $AuthType) 设置<p>网关访问审核引擎的鉴权方式：none 无鉴权（创建默认值）；api_key 在指定 HTTP Header 中发送凭据。与客户端访问 AI 网关时使用的鉴权相互独立。none 模式不应携带 HeaderName 或 ApiKey。</p>
 * @method string getHeaderName() 获取<p>api_key 模式的鉴权 Header 名，例如 X-Audit-Key 或 Authorization。需为有效 Header 名；不能使用 Content-Type、Accept 或 x-cngw-audit- 前缀的保留名称。不建议使用 Host、Content-Length 等会影响 HTTP 协议语义的头。</p>
 * @method void setHeaderName(string $HeaderName) 设置<p>api_key 模式的鉴权 Header 名，例如 X-Audit-Key 或 Authorization。需为有效 Header 名；不能使用 Content-Type、Accept 或 x-cngw-audit- 前缀的保留名称。不建议使用 Host、Content-Length 等会影响 HTTP 协议语义的头。</p>
 * @method boolean getHasApiKey() 获取<p>只读：是否已保存审核引擎鉴权密钥。不会返回密钥本身；修改时无需回传此字段。</p>
 * @method void setHasApiKey(boolean $HasApiKey) 设置<p>只读：是否已保存审核引擎鉴权密钥。不会返回密钥本身；修改时无需回传此字段。</p>
 */
class CustomGuardrailAuthConfig extends AbstractModel
{
    /**
     * @var string <p>网关访问审核引擎的鉴权方式：none 无鉴权（创建默认值）；api_key 在指定 HTTP Header 中发送凭据。与客户端访问 AI 网关时使用的鉴权相互独立。none 模式不应携带 HeaderName 或 ApiKey。</p>
     */
    public $AuthType;

    /**
     * @var string <p>api_key 模式的鉴权 Header 名，例如 X-Audit-Key 或 Authorization。需为有效 Header 名；不能使用 Content-Type、Accept 或 x-cngw-audit- 前缀的保留名称。不建议使用 Host、Content-Length 等会影响 HTTP 协议语义的头。</p>
     */
    public $HeaderName;

    /**
     * @var boolean <p>只读：是否已保存审核引擎鉴权密钥。不会返回密钥本身；修改时无需回传此字段。</p>
     */
    public $HasApiKey;

    /**
     * @param string $AuthType <p>网关访问审核引擎的鉴权方式：none 无鉴权（创建默认值）；api_key 在指定 HTTP Header 中发送凭据。与客户端访问 AI 网关时使用的鉴权相互独立。none 模式不应携带 HeaderName 或 ApiKey。</p>
     * @param string $HeaderName <p>api_key 模式的鉴权 Header 名，例如 X-Audit-Key 或 Authorization。需为有效 Header 名；不能使用 Content-Type、Accept 或 x-cngw-audit- 前缀的保留名称。不建议使用 Host、Content-Length 等会影响 HTTP 协议语义的头。</p>
     * @param boolean $HasApiKey <p>只读：是否已保存审核引擎鉴权密钥。不会返回密钥本身；修改时无需回传此字段。</p>
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
        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("HeaderName",$param) and $param["HeaderName"] !== null) {
            $this->HeaderName = $param["HeaderName"];
        }

        if (array_key_exists("HasApiKey",$param) and $param["HasApiKey"] !== null) {
            $this->HasApiKey = $param["HasApiKey"];
        }
    }
}
