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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAndroidInstanceWebShell返回参数结构体
 *
 * @method string getKey() 获取鉴权密钥
 * @method void setKey(string $Key) 设置鉴权密钥
 * @method string getAddress() 获取连接地址
 * @method void setAddress(string $Address) 设置连接地址
 * @method string getZone() 获取连接区域
 * @method void setZone(string $Zone) 设置连接区域
 * @method string getConnectUrl() 获取访问链接，可以直接使用此链接访问 WebShell
 * @method void setConnectUrl(string $ConnectUrl) 设置访问链接，可以直接使用此链接访问 WebShell
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateAndroidInstanceWebShellResponse extends AbstractModel
{
    /**
     * @var string 鉴权密钥
     */
    public $Key;

    /**
     * @var string 连接地址
     */
    public $Address;

    /**
     * @var string 连接区域
     */
    public $Zone;

    /**
     * @var string 访问链接，可以直接使用此链接访问 WebShell
     */
    public $ConnectUrl;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Key 鉴权密钥
     * @param string $Address 连接地址
     * @param string $Zone 连接区域
     * @param string $ConnectUrl 访问链接，可以直接使用此链接访问 WebShell
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ConnectUrl",$param) and $param["ConnectUrl"] !== null) {
            $this->ConnectUrl = $param["ConnectUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
