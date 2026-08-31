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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBProxySSLConfig返回参数结构体
 *
 * @method boolean getSSLEnabled() 获取<p>SSL 是否开启。true 表示已开启，false 表示未开启。</p>
 * @method void setSSLEnabled(boolean $SSLEnabled) 设置<p>SSL 是否开启。true 表示已开启，false 表示未开启。</p>
 * @method string getConnectAddress() 获取<p>SSL 连接的地址（VIP 或域名）。</p>
 * @method void setConnectAddress(string $ConnectAddress) 设置<p>SSL 连接的地址（VIP 或域名）。</p>
 * @method string getCAUrl() 获取<p>CA 证书下载地址。仅在 SSL 开启时有值。</p>
 * @method void setCAUrl(string $CAUrl) 设置<p>CA 证书下载地址。仅在 SSL 开启时有值。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBProxySSLConfigResponse extends AbstractModel
{
    /**
     * @var boolean <p>SSL 是否开启。true 表示已开启，false 表示未开启。</p>
     */
    public $SSLEnabled;

    /**
     * @var string <p>SSL 连接的地址（VIP 或域名）。</p>
     */
    public $ConnectAddress;

    /**
     * @var string <p>CA 证书下载地址。仅在 SSL 开启时有值。</p>
     */
    public $CAUrl;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $SSLEnabled <p>SSL 是否开启。true 表示已开启，false 表示未开启。</p>
     * @param string $ConnectAddress <p>SSL 连接的地址（VIP 或域名）。</p>
     * @param string $CAUrl <p>CA 证书下载地址。仅在 SSL 开启时有值。</p>
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
        if (array_key_exists("SSLEnabled",$param) and $param["SSLEnabled"] !== null) {
            $this->SSLEnabled = $param["SSLEnabled"];
        }

        if (array_key_exists("ConnectAddress",$param) and $param["ConnectAddress"] !== null) {
            $this->ConnectAddress = $param["ConnectAddress"];
        }

        if (array_key_exists("CAUrl",$param) and $param["CAUrl"] !== null) {
            $this->CAUrl = $param["CAUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
