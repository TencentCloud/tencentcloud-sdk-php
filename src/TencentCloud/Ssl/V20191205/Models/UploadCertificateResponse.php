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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadCertificate返回参数结构体
 *
 * @method string getCertificateId() 获取证书 ID。
 * @method void setCertificateId(string $CertificateId) 设置证书 ID。
 * @method string getRepeatCertId() 获取当入参Repeatable为false的时候 返回的重复证书的ID，注意当用户上传相同的证书超过5000张的时候，当前接口会无视入参Repeatable，直接返回重复证书的ID。
 * @method void setRepeatCertId(string $RepeatCertId) 设置当入参Repeatable为false的时候 返回的重复证书的ID，注意当用户上传相同的证书超过5000张的时候，当前接口会无视入参Repeatable，直接返回重复证书的ID。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class UploadCertificateResponse extends AbstractModel
{
    /**
     * @var string 证书 ID。
     */
    public $CertificateId;

    /**
     * @var string 当入参Repeatable为false的时候 返回的重复证书的ID，注意当用户上传相同的证书超过5000张的时候，当前接口会无视入参Repeatable，直接返回重复证书的ID。
     */
    public $RepeatCertId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CertificateId 证书 ID。
     * @param string $RepeatCertId 当入参Repeatable为false的时候 返回的重复证书的ID，注意当用户上传相同的证书超过5000张的时候，当前接口会无视入参Repeatable，直接返回重复证书的ID。
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
        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("RepeatCertId",$param) and $param["RepeatCertId"] !== null) {
            $this->RepeatCertId = $param["RepeatCertId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
