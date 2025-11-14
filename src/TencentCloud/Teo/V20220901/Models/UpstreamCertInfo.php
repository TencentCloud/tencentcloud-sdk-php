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
 * 用于分别开启/关闭回源双向认证和源站证书校验。回源双向认证的证书用于 EO 回源时携带，源站可选择校验该证书用于确保请求来源于受信任的 EO 节点。源站证书校验开启时，证书配置用于 EO 节点校验源站证书是否可信。
 *
 * @method MutualTLS getUpstreamMutualTLS() 获取在回源双向认证场景下，该字段为 EO 节点回源时携带的证书（包含公钥、私钥即可），部署在 EO 节点，用于源站对 EO 节点进行认证。在作为入参使用时，不填写表示保持原有配置。
 * @method void setUpstreamMutualTLS(MutualTLS $UpstreamMutualTLS) 设置在回源双向认证场景下，该字段为 EO 节点回源时携带的证书（包含公钥、私钥即可），部署在 EO 节点，用于源站对 EO 节点进行认证。在作为入参使用时，不填写表示保持原有配置。
 * @method OriginCertificateVerify getUpstreamCertificateVerify() 获取在源站证书校验场景下，该字段为 EO 节点回源时用于验证的 CA 证书，部署在 EO 节点，用于 EO 节点对服务端证书进行认证。在作为入参使用时，不填写表示保持原有配置。
 * @method void setUpstreamCertificateVerify(OriginCertificateVerify $UpstreamCertificateVerify) 设置在源站证书校验场景下，该字段为 EO 节点回源时用于验证的 CA 证书，部署在 EO 节点，用于 EO 节点对服务端证书进行认证。在作为入参使用时，不填写表示保持原有配置。
 */
class UpstreamCertInfo extends AbstractModel
{
    /**
     * @var MutualTLS 在回源双向认证场景下，该字段为 EO 节点回源时携带的证书（包含公钥、私钥即可），部署在 EO 节点，用于源站对 EO 节点进行认证。在作为入参使用时，不填写表示保持原有配置。
     */
    public $UpstreamMutualTLS;

    /**
     * @var OriginCertificateVerify 在源站证书校验场景下，该字段为 EO 节点回源时用于验证的 CA 证书，部署在 EO 节点，用于 EO 节点对服务端证书进行认证。在作为入参使用时，不填写表示保持原有配置。
     */
    public $UpstreamCertificateVerify;

    /**
     * @param MutualTLS $UpstreamMutualTLS 在回源双向认证场景下，该字段为 EO 节点回源时携带的证书（包含公钥、私钥即可），部署在 EO 节点，用于源站对 EO 节点进行认证。在作为入参使用时，不填写表示保持原有配置。
     * @param OriginCertificateVerify $UpstreamCertificateVerify 在源站证书校验场景下，该字段为 EO 节点回源时用于验证的 CA 证书，部署在 EO 节点，用于 EO 节点对服务端证书进行认证。在作为入参使用时，不填写表示保持原有配置。
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
        if (array_key_exists("UpstreamMutualTLS",$param) and $param["UpstreamMutualTLS"] !== null) {
            $this->UpstreamMutualTLS = new MutualTLS();
            $this->UpstreamMutualTLS->deserialize($param["UpstreamMutualTLS"]);
        }

        if (array_key_exists("UpstreamCertificateVerify",$param) and $param["UpstreamCertificateVerify"] !== null) {
            $this->UpstreamCertificateVerify = new OriginCertificateVerify();
            $this->UpstreamCertificateVerify->deserialize($param["UpstreamCertificateVerify"]);
        }
    }
}
