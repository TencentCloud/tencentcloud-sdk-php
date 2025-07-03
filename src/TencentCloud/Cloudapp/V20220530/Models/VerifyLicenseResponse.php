<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cloudapp\V20220530\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyLicense返回参数结构体
 *
 * @method License getLicense() 获取软件的详细授权信息。
 * @method void setLicense(License $License) 设置软件的详细授权信息。
 * @method string getTimestamp() 获取当前请求服务端的时间戳，格式为RFC3339
 * @method void setTimestamp(string $Timestamp) 设置当前请求服务端的时间戳，格式为RFC3339
 * @method string getSignature() 获取对License字段对应的json数据的签名
 * @method void setSignature(string $Signature) 设置对License字段对应的json数据的签名
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class VerifyLicenseResponse extends AbstractModel
{
    /**
     * @var License 软件的详细授权信息。
     */
    public $License;

    /**
     * @var string 当前请求服务端的时间戳，格式为RFC3339
     */
    public $Timestamp;

    /**
     * @var string 对License字段对应的json数据的签名
     */
    public $Signature;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param License $License 软件的详细授权信息。
     * @param string $Timestamp 当前请求服务端的时间戳，格式为RFC3339
     * @param string $Signature 对License字段对应的json数据的签名
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
        if (array_key_exists("License",$param) and $param["License"] !== null) {
            $this->License = new License();
            $this->License->deserialize($param["License"]);
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Signature",$param) and $param["Signature"] !== null) {
            $this->Signature = $param["Signature"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
