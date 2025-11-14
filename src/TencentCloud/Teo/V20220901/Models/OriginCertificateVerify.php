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
 * HTTPS 源站证书校验的模式。
 *
 * @method string getVerificationMode() 获取源站证书校验模式。取值有：<li>disable:禁用源站证书校验。</li><li>custom_ca:使用指定受信任 CA 证书校验。</li>
 * @method void setVerificationMode(string $VerificationMode) 设置源站证书校验模式。取值有：<li>disable:禁用源站证书校验。</li><li>custom_ca:使用指定受信任 CA 证书校验。</li>
 * @method array getCustomCACerts() 获取指定受信任的 CA 证书列表，源站证书需要由该 CA 签发才能校验通过。 注意：仅当 VerificationMode 为 custom_ca 时，需要传入该参数，指定受信任的CA证书信息。
OriginCertificateVerify 在 ModifyHostsCertificate 作为入参使用时，该参数传入对应证书的 CertId 即可。您可以前往 [SSL 证书列表](https://console.cloud.tencent.com/ssl) 查看 CertId。	

 * @method void setCustomCACerts(array $CustomCACerts) 设置指定受信任的 CA 证书列表，源站证书需要由该 CA 签发才能校验通过。 注意：仅当 VerificationMode 为 custom_ca 时，需要传入该参数，指定受信任的CA证书信息。
OriginCertificateVerify 在 ModifyHostsCertificate 作为入参使用时，该参数传入对应证书的 CertId 即可。您可以前往 [SSL 证书列表](https://console.cloud.tencent.com/ssl) 查看 CertId。	
 */
class OriginCertificateVerify extends AbstractModel
{
    /**
     * @var string 源站证书校验模式。取值有：<li>disable:禁用源站证书校验。</li><li>custom_ca:使用指定受信任 CA 证书校验。</li>
     */
    public $VerificationMode;

    /**
     * @var array 指定受信任的 CA 证书列表，源站证书需要由该 CA 签发才能校验通过。 注意：仅当 VerificationMode 为 custom_ca 时，需要传入该参数，指定受信任的CA证书信息。
OriginCertificateVerify 在 ModifyHostsCertificate 作为入参使用时，该参数传入对应证书的 CertId 即可。您可以前往 [SSL 证书列表](https://console.cloud.tencent.com/ssl) 查看 CertId。	

     */
    public $CustomCACerts;

    /**
     * @param string $VerificationMode 源站证书校验模式。取值有：<li>disable:禁用源站证书校验。</li><li>custom_ca:使用指定受信任 CA 证书校验。</li>
     * @param array $CustomCACerts 指定受信任的 CA 证书列表，源站证书需要由该 CA 签发才能校验通过。 注意：仅当 VerificationMode 为 custom_ca 时，需要传入该参数，指定受信任的CA证书信息。
OriginCertificateVerify 在 ModifyHostsCertificate 作为入参使用时，该参数传入对应证书的 CertId 即可。您可以前往 [SSL 证书列表](https://console.cloud.tencent.com/ssl) 查看 CertId。	
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
        if (array_key_exists("VerificationMode",$param) and $param["VerificationMode"] !== null) {
            $this->VerificationMode = $param["VerificationMode"];
        }

        if (array_key_exists("CustomCACerts",$param) and $param["CustomCACerts"] !== null) {
            $this->CustomCACerts = [];
            foreach ($param["CustomCACerts"] as $key => $value){
                $obj = new CertificateInfo();
                $obj->deserialize($value);
                array_push($this->CustomCACerts, $obj);
            }
        }
    }
}
