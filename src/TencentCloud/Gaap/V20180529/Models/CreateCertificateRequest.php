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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCertificate请求参数结构体
 *
 * @method integer getCertificateType() 获取<p>证书类型。其中：0，表示基础认证配置；1，表示客户端CA证书；2，服务器SSL证书；3，表示源站CA证书；4，表示通道SSL证书。</p>
 * @method void setCertificateType(integer $CertificateType) 设置<p>证书类型。其中：0，表示基础认证配置；1，表示客户端CA证书；2，服务器SSL证书；3，表示源站CA证书；4，表示通道SSL证书。</p>
 * @method string getCertificateContent() 获取<p>证书内容。采用url编码。其中：当证书类型为基础认证配置时，该参数填写用户名/密码对。格式：“用户名：密码”，例如：root:FSGdT。其中密码使用htpasswd或者openssl，例如：openssl passwd -crypt 123456。当证书类型为CA/SSL证书时，该参数填写证书内容，格式为pem。</p>
 * @method void setCertificateContent(string $CertificateContent) 设置<p>证书内容。采用url编码。其中：当证书类型为基础认证配置时，该参数填写用户名/密码对。格式：“用户名：密码”，例如：root:FSGdT。其中密码使用htpasswd或者openssl，例如：openssl passwd -crypt 123456。当证书类型为CA/SSL证书时，该参数填写证书内容，格式为pem。</p>
 * @method string getCertificateAlias() 获取<p>证书名称</p>
 * @method void setCertificateAlias(string $CertificateAlias) 设置<p>证书名称</p>
 * @method string getCertificateKey() 获取<p>密钥内容。采用url编码。仅当证书类型为SSL证书时，需要填写该参数。格式为pem。</p>
 * @method void setCertificateKey(string $CertificateKey) 设置<p>密钥内容。采用url编码。仅当证书类型为SSL证书时，需要填写该参数。格式为pem。</p>
 */
class CreateCertificateRequest extends AbstractModel
{
    /**
     * @var integer <p>证书类型。其中：0，表示基础认证配置；1，表示客户端CA证书；2，服务器SSL证书；3，表示源站CA证书；4，表示通道SSL证书。</p>
     */
    public $CertificateType;

    /**
     * @var string <p>证书内容。采用url编码。其中：当证书类型为基础认证配置时，该参数填写用户名/密码对。格式：“用户名：密码”，例如：root:FSGdT。其中密码使用htpasswd或者openssl，例如：openssl passwd -crypt 123456。当证书类型为CA/SSL证书时，该参数填写证书内容，格式为pem。</p>
     */
    public $CertificateContent;

    /**
     * @var string <p>证书名称</p>
     */
    public $CertificateAlias;

    /**
     * @var string <p>密钥内容。采用url编码。仅当证书类型为SSL证书时，需要填写该参数。格式为pem。</p>
     */
    public $CertificateKey;

    /**
     * @param integer $CertificateType <p>证书类型。其中：0，表示基础认证配置；1，表示客户端CA证书；2，服务器SSL证书；3，表示源站CA证书；4，表示通道SSL证书。</p>
     * @param string $CertificateContent <p>证书内容。采用url编码。其中：当证书类型为基础认证配置时，该参数填写用户名/密码对。格式：“用户名：密码”，例如：root:FSGdT。其中密码使用htpasswd或者openssl，例如：openssl passwd -crypt 123456。当证书类型为CA/SSL证书时，该参数填写证书内容，格式为pem。</p>
     * @param string $CertificateAlias <p>证书名称</p>
     * @param string $CertificateKey <p>密钥内容。采用url编码。仅当证书类型为SSL证书时，需要填写该参数。格式为pem。</p>
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
        if (array_key_exists("CertificateType",$param) and $param["CertificateType"] !== null) {
            $this->CertificateType = $param["CertificateType"];
        }

        if (array_key_exists("CertificateContent",$param) and $param["CertificateContent"] !== null) {
            $this->CertificateContent = $param["CertificateContent"];
        }

        if (array_key_exists("CertificateAlias",$param) and $param["CertificateAlias"] !== null) {
            $this->CertificateAlias = $param["CertificateAlias"];
        }

        if (array_key_exists("CertificateKey",$param) and $param["CertificateKey"] !== null) {
            $this->CertificateKey = $param["CertificateKey"];
        }
    }
}
