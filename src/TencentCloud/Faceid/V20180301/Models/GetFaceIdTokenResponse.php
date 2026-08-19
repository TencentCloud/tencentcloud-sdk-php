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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetFaceIdToken返回参数结构体
 *
 * @method string getFaceIdToken() 获取<p>token值。- 有效期 10分钟。- 只能完成1次核身。</p>
 * @method void setFaceIdToken(string $FaceIdToken) 设置<p>token值。- 有效期 10分钟。- 只能完成1次核身。</p>
 * @method string getClientConfig() 获取<p>客户端配置信息，SDK将使用该配置进行后续操作。请将返回值原样传递给客户端SDK。</p>
 * @method void setClientConfig(string $ClientConfig) 设置<p>客户端配置信息，SDK将使用该配置进行后续操作。请将返回值原样传递给客户端SDK。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetFaceIdTokenResponse extends AbstractModel
{
    /**
     * @var string <p>token值。- 有效期 10分钟。- 只能完成1次核身。</p>
     */
    public $FaceIdToken;

    /**
     * @var string <p>客户端配置信息，SDK将使用该配置进行后续操作。请将返回值原样传递给客户端SDK。</p>
     */
    public $ClientConfig;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $FaceIdToken <p>token值。- 有效期 10分钟。- 只能完成1次核身。</p>
     * @param string $ClientConfig <p>客户端配置信息，SDK将使用该配置进行后续操作。请将返回值原样传递给客户端SDK。</p>
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
        if (array_key_exists("FaceIdToken",$param) and $param["FaceIdToken"] !== null) {
            $this->FaceIdToken = $param["FaceIdToken"];
        }

        if (array_key_exists("ClientConfig",$param) and $param["ClientConfig"] !== null) {
            $this->ClientConfig = $param["ClientConfig"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
