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
 * DescribeDBInstanceSSLConfig返回参数结构体
 *
 * @method boolean getSSLEnabled() 获取true 代表开通 ，false 代表未开通
 * @method void setSSLEnabled(boolean $SSLEnabled) 设置true 代表开通 ，false 代表未开通
 * @method string getCAUrl() 获取云端根证书下载链接
 * @method void setCAUrl(string $CAUrl) 设置云端根证书下载链接
 * @method string getConnectAddress() 获取服务器证书中配置的内网或外网连接地址
 * @method void setConnectAddress(string $ConnectAddress) 设置服务器证书中配置的内网或外网连接地址
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBInstanceSSLConfigResponse extends AbstractModel
{
    /**
     * @var boolean true 代表开通 ，false 代表未开通
     */
    public $SSLEnabled;

    /**
     * @var string 云端根证书下载链接
     */
    public $CAUrl;

    /**
     * @var string 服务器证书中配置的内网或外网连接地址
     */
    public $ConnectAddress;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $SSLEnabled true 代表开通 ，false 代表未开通
     * @param string $CAUrl 云端根证书下载链接
     * @param string $ConnectAddress 服务器证书中配置的内网或外网连接地址
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

        if (array_key_exists("CAUrl",$param) and $param["CAUrl"] !== null) {
            $this->CAUrl = $param["CAUrl"];
        }

        if (array_key_exists("ConnectAddress",$param) and $param["ConnectAddress"] !== null) {
            $this->ConnectAddress = $param["ConnectAddress"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
