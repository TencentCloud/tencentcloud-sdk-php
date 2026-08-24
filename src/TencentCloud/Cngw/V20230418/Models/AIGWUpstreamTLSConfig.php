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
 * AI网关Upstream TLS配置
 *
 * @method boolean getTLSVerify() 获取<p>是否校验上游服务端证书</p><p>默认值：false</p>
 * @method void setTLSVerify(boolean $TLSVerify) 设置<p>是否校验上游服务端证书</p><p>默认值：false</p>
 * @method string getClientCertId() 获取<p>客户端证书 ID（mTLS 用）</p>
 * @method void setClientCertId(string $ClientCertId) 设置<p>客户端证书 ID（mTLS 用）</p>
 * @method array getUpstreamCACertIds() 获取<p>信任的 CA 证书 ID 列表</p>
 * @method void setUpstreamCACertIds(array $UpstreamCACertIds) 设置<p>信任的 CA 证书 ID 列表</p>
 */
class AIGWUpstreamTLSConfig extends AbstractModel
{
    /**
     * @var boolean <p>是否校验上游服务端证书</p><p>默认值：false</p>
     */
    public $TLSVerify;

    /**
     * @var string <p>客户端证书 ID（mTLS 用）</p>
     */
    public $ClientCertId;

    /**
     * @var array <p>信任的 CA 证书 ID 列表</p>
     */
    public $UpstreamCACertIds;

    /**
     * @param boolean $TLSVerify <p>是否校验上游服务端证书</p><p>默认值：false</p>
     * @param string $ClientCertId <p>客户端证书 ID（mTLS 用）</p>
     * @param array $UpstreamCACertIds <p>信任的 CA 证书 ID 列表</p>
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
        if (array_key_exists("TLSVerify",$param) and $param["TLSVerify"] !== null) {
            $this->TLSVerify = $param["TLSVerify"];
        }

        if (array_key_exists("ClientCertId",$param) and $param["ClientCertId"] !== null) {
            $this->ClientCertId = $param["ClientCertId"];
        }

        if (array_key_exists("UpstreamCACertIds",$param) and $param["UpstreamCACertIds"] !== null) {
            $this->UpstreamCACertIds = $param["UpstreamCACertIds"];
        }
    }
}
