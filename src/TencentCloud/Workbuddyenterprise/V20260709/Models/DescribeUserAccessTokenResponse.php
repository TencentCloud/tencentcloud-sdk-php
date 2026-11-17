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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserAccessToken返回参数结构体
 *
 * @method string getAccessToken() 获取<p>OneID 颁发的用户级访问凭证</p>
 * @method void setAccessToken(string $AccessToken) 设置<p>OneID 颁发的用户级访问凭证</p>
 * @method string getTokenType() 获取<p>凭证类型，目前固定 Bearer</p>
 * @method void setTokenType(string $TokenType) 设置<p>凭证类型，目前固定 Bearer</p>
 * @method integer getExpiresIn() 获取<p>凭证有效期，单位：秒</p>
 * @method void setExpiresIn(integer $ExpiresIn) 设置<p>凭证有效期，单位：秒</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUserAccessTokenResponse extends AbstractModel
{
    /**
     * @var string <p>OneID 颁发的用户级访问凭证</p>
     */
    public $AccessToken;

    /**
     * @var string <p>凭证类型，目前固定 Bearer</p>
     */
    public $TokenType;

    /**
     * @var integer <p>凭证有效期，单位：秒</p>
     */
    public $ExpiresIn;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AccessToken <p>OneID 颁发的用户级访问凭证</p>
     * @param string $TokenType <p>凭证类型，目前固定 Bearer</p>
     * @param integer $ExpiresIn <p>凭证有效期，单位：秒</p>
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
        if (array_key_exists("AccessToken",$param) and $param["AccessToken"] !== null) {
            $this->AccessToken = $param["AccessToken"];
        }

        if (array_key_exists("TokenType",$param) and $param["TokenType"] !== null) {
            $this->TokenType = $param["TokenType"];
        }

        if (array_key_exists("ExpiresIn",$param) and $param["ExpiresIn"] !== null) {
            $this->ExpiresIn = $param["ExpiresIn"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
