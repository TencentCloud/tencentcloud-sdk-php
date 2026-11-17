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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 证书信息
 *
 * @method string getSSLMode() 获取<p>认证类型，取值：<code>UNIDIRECTIONAL</code>：单向认证；<code>MUTUAL</code>：双向认证。 此参数是否必填取决于调用场景： - 创建监听器或转发规则：需要通过 Certificate 配置证书时，此参数必填；复用已有域名证书的转发规则无需传入。 - 修改监听器或域名属性：通过 Certificate 更新证书时，此参数必填；不修改证书时，无需传入整个 Certificate。 - 批量替换证书（ReplaceCertForLoadBalancers）：此参数无需传入，接口仅替换证书，不修改认证类型。</p><p>枚举值：</p><ul><li>UNIDIRECTIONAL： 单向认证</li><li>MUTUAL： 双向认证</li></ul>
 * @method void setSSLMode(string $SSLMode) 设置<p>认证类型，取值：<code>UNIDIRECTIONAL</code>：单向认证；<code>MUTUAL</code>：双向认证。 此参数是否必填取决于调用场景： - 创建监听器或转发规则：需要通过 Certificate 配置证书时，此参数必填；复用已有域名证书的转发规则无需传入。 - 修改监听器或域名属性：通过 Certificate 更新证书时，此参数必填；不修改证书时，无需传入整个 Certificate。 - 批量替换证书（ReplaceCertForLoadBalancers）：此参数无需传入，接口仅替换证书，不修改认证类型。</p><p>枚举值：</p><ul><li>UNIDIRECTIONAL： 单向认证</li><li>MUTUAL： 双向认证</li></ul>
 * @method string getSSLVerifyClient() 获取<p>双向认证时，是否开启客户端认证，ON:开启，OPTIONAL:自适应，默认ON。</p>
 * @method void setSSLVerifyClient(string $SSLVerifyClient) 设置<p>双向认证时，是否开启客户端认证，ON:开启，OPTIONAL:自适应，默认ON。</p>
 * @method string getCertId() 获取<p>服务端证书的 ID，如果不填写此项则必须上传证书，包括 CertContent（服务端证书内容），CertKey（服务端证书密钥），CertName（服务端证书名称）。</p>
 * @method void setCertId(string $CertId) 设置<p>服务端证书的 ID，如果不填写此项则必须上传证书，包括 CertContent（服务端证书内容），CertKey（服务端证书密钥），CertName（服务端证书名称）。</p>
 * @method string getCertCaId() 获取<p>客户端证书的 ID，当监听器采用双向认证，即 SSLMode=MUTUAL 时，如果不填写此项则必须上传客户端证书，包括 CertCaContent，CertCaName。</p>
 * @method void setCertCaId(string $CertCaId) 设置<p>客户端证书的 ID，当监听器采用双向认证，即 SSLMode=MUTUAL 时，如果不填写此项则必须上传客户端证书，包括 CertCaContent，CertCaName。</p>
 * @method string getCertName() 获取<p>上传服务端证书的名称，如果没有 CertId，则此项必传。</p>
 * @method void setCertName(string $CertName) 设置<p>上传服务端证书的名称，如果没有 CertId，则此项必传。</p>
 * @method string getCertKey() 获取<p>上传服务端证书的 key，如果没有 CertId，则此项必传。</p>
 * @method void setCertKey(string $CertKey) 设置<p>上传服务端证书的 key，如果没有 CertId，则此项必传。</p>
 * @method string getCertContent() 获取<p>上传服务端证书的内容，如果没有 CertId，则此项必传。</p>
 * @method void setCertContent(string $CertContent) 设置<p>上传服务端证书的内容，如果没有 CertId，则此项必传。</p>
 * @method string getCertCaName() 获取<p>上传客户端 CA 证书的名称，如果 SSLMode=MUTUAL，如果没有 CertCaId，则此项必传。</p>
 * @method void setCertCaName(string $CertCaName) 设置<p>上传客户端 CA 证书的名称，如果 SSLMode=MUTUAL，如果没有 CertCaId，则此项必传。</p>
 * @method string getCertCaContent() 获取<p>上传客户端证书的内容，如果 SSLMode=MUTUAL，如果没有 CertCaId，则此项必传。</p>
 * @method void setCertCaContent(string $CertCaContent) 设置<p>上传客户端证书的内容，如果 SSLMode=MUTUAL，如果没有 CertCaId，则此项必传。</p>
 */
class CertificateInput extends AbstractModel
{
    /**
     * @var string <p>认证类型，取值：<code>UNIDIRECTIONAL</code>：单向认证；<code>MUTUAL</code>：双向认证。 此参数是否必填取决于调用场景： - 创建监听器或转发规则：需要通过 Certificate 配置证书时，此参数必填；复用已有域名证书的转发规则无需传入。 - 修改监听器或域名属性：通过 Certificate 更新证书时，此参数必填；不修改证书时，无需传入整个 Certificate。 - 批量替换证书（ReplaceCertForLoadBalancers）：此参数无需传入，接口仅替换证书，不修改认证类型。</p><p>枚举值：</p><ul><li>UNIDIRECTIONAL： 单向认证</li><li>MUTUAL： 双向认证</li></ul>
     */
    public $SSLMode;

    /**
     * @var string <p>双向认证时，是否开启客户端认证，ON:开启，OPTIONAL:自适应，默认ON。</p>
     */
    public $SSLVerifyClient;

    /**
     * @var string <p>服务端证书的 ID，如果不填写此项则必须上传证书，包括 CertContent（服务端证书内容），CertKey（服务端证书密钥），CertName（服务端证书名称）。</p>
     */
    public $CertId;

    /**
     * @var string <p>客户端证书的 ID，当监听器采用双向认证，即 SSLMode=MUTUAL 时，如果不填写此项则必须上传客户端证书，包括 CertCaContent，CertCaName。</p>
     */
    public $CertCaId;

    /**
     * @var string <p>上传服务端证书的名称，如果没有 CertId，则此项必传。</p>
     */
    public $CertName;

    /**
     * @var string <p>上传服务端证书的 key，如果没有 CertId，则此项必传。</p>
     */
    public $CertKey;

    /**
     * @var string <p>上传服务端证书的内容，如果没有 CertId，则此项必传。</p>
     */
    public $CertContent;

    /**
     * @var string <p>上传客户端 CA 证书的名称，如果 SSLMode=MUTUAL，如果没有 CertCaId，则此项必传。</p>
     */
    public $CertCaName;

    /**
     * @var string <p>上传客户端证书的内容，如果 SSLMode=MUTUAL，如果没有 CertCaId，则此项必传。</p>
     */
    public $CertCaContent;

    /**
     * @param string $SSLMode <p>认证类型，取值：<code>UNIDIRECTIONAL</code>：单向认证；<code>MUTUAL</code>：双向认证。 此参数是否必填取决于调用场景： - 创建监听器或转发规则：需要通过 Certificate 配置证书时，此参数必填；复用已有域名证书的转发规则无需传入。 - 修改监听器或域名属性：通过 Certificate 更新证书时，此参数必填；不修改证书时，无需传入整个 Certificate。 - 批量替换证书（ReplaceCertForLoadBalancers）：此参数无需传入，接口仅替换证书，不修改认证类型。</p><p>枚举值：</p><ul><li>UNIDIRECTIONAL： 单向认证</li><li>MUTUAL： 双向认证</li></ul>
     * @param string $SSLVerifyClient <p>双向认证时，是否开启客户端认证，ON:开启，OPTIONAL:自适应，默认ON。</p>
     * @param string $CertId <p>服务端证书的 ID，如果不填写此项则必须上传证书，包括 CertContent（服务端证书内容），CertKey（服务端证书密钥），CertName（服务端证书名称）。</p>
     * @param string $CertCaId <p>客户端证书的 ID，当监听器采用双向认证，即 SSLMode=MUTUAL 时，如果不填写此项则必须上传客户端证书，包括 CertCaContent，CertCaName。</p>
     * @param string $CertName <p>上传服务端证书的名称，如果没有 CertId，则此项必传。</p>
     * @param string $CertKey <p>上传服务端证书的 key，如果没有 CertId，则此项必传。</p>
     * @param string $CertContent <p>上传服务端证书的内容，如果没有 CertId，则此项必传。</p>
     * @param string $CertCaName <p>上传客户端 CA 证书的名称，如果 SSLMode=MUTUAL，如果没有 CertCaId，则此项必传。</p>
     * @param string $CertCaContent <p>上传客户端证书的内容，如果 SSLMode=MUTUAL，如果没有 CertCaId，则此项必传。</p>
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
        if (array_key_exists("SSLMode",$param) and $param["SSLMode"] !== null) {
            $this->SSLMode = $param["SSLMode"];
        }

        if (array_key_exists("SSLVerifyClient",$param) and $param["SSLVerifyClient"] !== null) {
            $this->SSLVerifyClient = $param["SSLVerifyClient"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("CertCaId",$param) and $param["CertCaId"] !== null) {
            $this->CertCaId = $param["CertCaId"];
        }

        if (array_key_exists("CertName",$param) and $param["CertName"] !== null) {
            $this->CertName = $param["CertName"];
        }

        if (array_key_exists("CertKey",$param) and $param["CertKey"] !== null) {
            $this->CertKey = $param["CertKey"];
        }

        if (array_key_exists("CertContent",$param) and $param["CertContent"] !== null) {
            $this->CertContent = $param["CertContent"];
        }

        if (array_key_exists("CertCaName",$param) and $param["CertCaName"] !== null) {
            $this->CertCaName = $param["CertCaName"];
        }

        if (array_key_exists("CertCaContent",$param) and $param["CertCaContent"] !== null) {
            $this->CertCaContent = $param["CertCaContent"];
        }
    }
}
