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
 * ApplyFreeCertificate返回参数结构体
 *
 * @method DnsVerification getDnsVerification() 获取当 VerificationMethod 为 dns_challenge 时，域名申请免费证书的相关验证信息。
 * @method void setDnsVerification(DnsVerification $DnsVerification) 设置当 VerificationMethod 为 dns_challenge 时，域名申请免费证书的相关验证信息。
 * @method FileVerification getFileVerification() 获取当 VerificationMethod 为 http_challenge 时，域名申请免费证书的相关验证信息。
 * @method void setFileVerification(FileVerification $FileVerification) 设置当 VerificationMethod 为 http_challenge 时，域名申请免费证书的相关验证信息。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ApplyFreeCertificateResponse extends AbstractModel
{
    /**
     * @var DnsVerification 当 VerificationMethod 为 dns_challenge 时，域名申请免费证书的相关验证信息。
     */
    public $DnsVerification;

    /**
     * @var FileVerification 当 VerificationMethod 为 http_challenge 时，域名申请免费证书的相关验证信息。
     */
    public $FileVerification;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param DnsVerification $DnsVerification 当 VerificationMethod 为 dns_challenge 时，域名申请免费证书的相关验证信息。
     * @param FileVerification $FileVerification 当 VerificationMethod 为 http_challenge 时，域名申请免费证书的相关验证信息。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("DnsVerification",$param) and $param["DnsVerification"] !== null) {
            $this->DnsVerification = new DnsVerification();
            $this->DnsVerification->deserialize($param["DnsVerification"]);
        }

        if (array_key_exists("FileVerification",$param) and $param["FileVerification"] !== null) {
            $this->FileVerification = new FileVerification();
            $this->FileVerification->deserialize($param["FileVerification"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
