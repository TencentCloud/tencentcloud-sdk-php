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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDigitalDataSign返回参数结构体
 *
 * @method string getSignValue() 获取加签签名值
 * @method void setSignValue(string $SignValue) 设置加签签名值
 * @method string getSignTimestamp() 获取加签时间戳
 * @method void setSignTimestamp(string $SignTimestamp) 设置加签时间戳
 * @method SignCertificate getCertificate() 获取签署证书信息
 * @method void setCertificate(SignCertificate $Certificate) 设置签署证书信息
 * @method string getSignAlgorithm() 获取签署算法
 * @method void setSignAlgorithm(string $SignAlgorithm) 设置签署算法
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateDigitalDataSignResponse extends AbstractModel
{
    /**
     * @var string 加签签名值
     */
    public $SignValue;

    /**
     * @var string 加签时间戳
     */
    public $SignTimestamp;

    /**
     * @var SignCertificate 签署证书信息
     */
    public $Certificate;

    /**
     * @var string 签署算法
     */
    public $SignAlgorithm;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SignValue 加签签名值
     * @param string $SignTimestamp 加签时间戳
     * @param SignCertificate $Certificate 签署证书信息
     * @param string $SignAlgorithm 签署算法
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
        if (array_key_exists("SignValue",$param) and $param["SignValue"] !== null) {
            $this->SignValue = $param["SignValue"];
        }

        if (array_key_exists("SignTimestamp",$param) and $param["SignTimestamp"] !== null) {
            $this->SignTimestamp = $param["SignTimestamp"];
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new SignCertificate();
            $this->Certificate->deserialize($param["Certificate"]);
        }

        if (array_key_exists("SignAlgorithm",$param) and $param["SignAlgorithm"] !== null) {
            $this->SignAlgorithm = $param["SignAlgorithm"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
