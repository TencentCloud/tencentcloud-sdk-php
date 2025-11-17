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
 * CheckFreeCertificateVerification返回参数结构体
 *
 * @method string getCommonName() 获取免费证书申请成功时，该证书颁发给的域名。
注意：一个域名只允许申请一本免费证书， 如果已经有泛域名申请了免费证书的情况下，其子域名会匹配使用该泛域名证书。
 * @method void setCommonName(string $CommonName) 设置免费证书申请成功时，该证书颁发给的域名。
注意：一个域名只允许申请一本免费证书， 如果已经有泛域名申请了免费证书的情况下，其子域名会匹配使用该泛域名证书。
 * @method string getSignatureAlgorithm() 获取免费证书申请成功时，该证书使用的签名算法，当前仅支持 RSA 2048。
 * @method void setSignatureAlgorithm(string $SignatureAlgorithm) 设置免费证书申请成功时，该证书使用的签名算法，当前仅支持 RSA 2048。
 * @method string getExpireTime() 获取免费证书申请成功时，该证书的过期时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
 * @method void setExpireTime(string $ExpireTime) 设置免费证书申请成功时，该证书的过期时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CheckFreeCertificateVerificationResponse extends AbstractModel
{
    /**
     * @var string 免费证书申请成功时，该证书颁发给的域名。
注意：一个域名只允许申请一本免费证书， 如果已经有泛域名申请了免费证书的情况下，其子域名会匹配使用该泛域名证书。
     */
    public $CommonName;

    /**
     * @var string 免费证书申请成功时，该证书使用的签名算法，当前仅支持 RSA 2048。
     */
    public $SignatureAlgorithm;

    /**
     * @var string 免费证书申请成功时，该证书的过期时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
     */
    public $ExpireTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CommonName 免费证书申请成功时，该证书颁发给的域名。
注意：一个域名只允许申请一本免费证书， 如果已经有泛域名申请了免费证书的情况下，其子域名会匹配使用该泛域名证书。
     * @param string $SignatureAlgorithm 免费证书申请成功时，该证书使用的签名算法，当前仅支持 RSA 2048。
     * @param string $ExpireTime 免费证书申请成功时，该证书的过期时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。
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
        if (array_key_exists("CommonName",$param) and $param["CommonName"] !== null) {
            $this->CommonName = $param["CommonName"];
        }

        if (array_key_exists("SignatureAlgorithm",$param) and $param["SignatureAlgorithm"] !== null) {
            $this->SignatureAlgorithm = $param["SignatureAlgorithm"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
