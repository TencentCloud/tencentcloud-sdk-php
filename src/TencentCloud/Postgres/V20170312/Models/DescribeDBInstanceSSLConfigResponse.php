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
 * @method boolean getSSLEnabled() 获取<p>true 代表开通 ，false 代表未开通</p>
 * @method void setSSLEnabled(boolean $SSLEnabled) 设置<p>true 代表开通 ，false 代表未开通</p>
 * @method string getCAUrl() 获取<p>云端根证书下载链接</p>
 * @method void setCAUrl(string $CAUrl) 设置<p>云端根证书下载链接</p>
 * @method string getConnectAddress() 获取<p>服务器证书中配置的内网或外网连接地址</p>
 * @method void setConnectAddress(string $ConnectAddress) 设置<p>服务器证书中配置的内网或外网连接地址</p>
 * @method string getCACert() 获取<p>CA证书公钥，仅云盘版</p>
 * @method void setCACert(string $CACert) 设置<p>CA证书公钥，仅云盘版</p>
 * @method string getCAJKS() 获取<p>JKS公钥，仅云盘版</p>
 * @method void setCAJKS(string $CAJKS) 设置<p>JKS公钥，仅云盘版</p>
 * @method string getCAP7B() 获取<p>CAP7B公钥，仅云盘版</p>
 * @method void setCAP7B(string $CAP7B) 设置<p>CAP7B公钥，仅云盘版</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBInstanceSSLConfigResponse extends AbstractModel
{
    /**
     * @var boolean <p>true 代表开通 ，false 代表未开通</p>
     */
    public $SSLEnabled;

    /**
     * @var string <p>云端根证书下载链接</p>
     */
    public $CAUrl;

    /**
     * @var string <p>服务器证书中配置的内网或外网连接地址</p>
     */
    public $ConnectAddress;

    /**
     * @var string <p>CA证书公钥，仅云盘版</p>
     */
    public $CACert;

    /**
     * @var string <p>JKS公钥，仅云盘版</p>
     */
    public $CAJKS;

    /**
     * @var string <p>CAP7B公钥，仅云盘版</p>
     */
    public $CAP7B;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $SSLEnabled <p>true 代表开通 ，false 代表未开通</p>
     * @param string $CAUrl <p>云端根证书下载链接</p>
     * @param string $ConnectAddress <p>服务器证书中配置的内网或外网连接地址</p>
     * @param string $CACert <p>CA证书公钥，仅云盘版</p>
     * @param string $CAJKS <p>JKS公钥，仅云盘版</p>
     * @param string $CAP7B <p>CAP7B公钥，仅云盘版</p>
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

        if (array_key_exists("CACert",$param) and $param["CACert"] !== null) {
            $this->CACert = $param["CACert"];
        }

        if (array_key_exists("CAJKS",$param) and $param["CAJKS"] !== null) {
            $this->CAJKS = $param["CAJKS"];
        }

        if (array_key_exists("CAP7B",$param) and $param["CAP7B"] !== null) {
            $this->CAP7B = $param["CAP7B"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
