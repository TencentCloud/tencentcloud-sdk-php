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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMCPToken返回参数结构体
 *
 * @method string getTokenId() 获取<p>TokenId</p>
 * @method void setTokenId(string $TokenId) 设置<p>TokenId</p>
 * @method string getToken() 获取<p>MCP Token </p><p>当前值请妥善保存，后续需要使用该 Token 和 MCP Server 进行通信操作，丢失后无法再查看</p>
 * @method void setToken(string $Token) 设置<p>MCP Token </p><p>当前值请妥善保存，后续需要使用该 Token 和 MCP Server 进行通信操作，丢失后无法再查看</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateMCPTokenResponse extends AbstractModel
{
    /**
     * @var string <p>TokenId</p>
     */
    public $TokenId;

    /**
     * @var string <p>MCP Token </p><p>当前值请妥善保存，后续需要使用该 Token 和 MCP Server 进行通信操作，丢失后无法再查看</p>
     */
    public $Token;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TokenId <p>TokenId</p>
     * @param string $Token <p>MCP Token </p><p>当前值请妥善保存，后续需要使用该 Token 和 MCP Server 进行通信操作，丢失后无法再查看</p>
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
        if (array_key_exists("TokenId",$param) and $param["TokenId"] !== null) {
            $this->TokenId = $param["TokenId"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
