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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDefaultDistributionConfig返回参数结构体
 *
 * @method string getDomainName() 获取<p>分发配置的域名(已废弃）。</p>
 * @method void setDomainName(string $DomainName) 设置<p>分发配置的域名(已废弃）。</p>
 * @method string getDomain() 获取<p>分发配置的域名。</p>
 * @method void setDomain(string $Domain) 设置<p>分发配置的域名。</p>
 * @method string getScheme() 获取<p>分发配置的协议，为 HTTP 或 HTTPS。</p>
 * @method void setScheme(string $Scheme) 设置<p>分发配置的协议，为 HTTP 或 HTTPS。</p>
 * @method string getPlayKey() 获取<p>播放密钥，由大小写字母（a - Z）或者数字（0 - 9）组成，长度在8 - 20个字符之间。</p>
 * @method void setPlayKey(string $PlayKey) 设置<p>播放密钥，由大小写字母（a - Z）或者数字（0 - 9）组成，长度在8 - 20个字符之间。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDefaultDistributionConfigResponse extends AbstractModel
{
    /**
     * @var string <p>分发配置的域名(已废弃）。</p>
     * @deprecated
     */
    public $DomainName;

    /**
     * @var string <p>分发配置的域名。</p>
     */
    public $Domain;

    /**
     * @var string <p>分发配置的协议，为 HTTP 或 HTTPS。</p>
     */
    public $Scheme;

    /**
     * @var string <p>播放密钥，由大小写字母（a - Z）或者数字（0 - 9）组成，长度在8 - 20个字符之间。</p>
     */
    public $PlayKey;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DomainName <p>分发配置的域名(已废弃）。</p>
     * @param string $Domain <p>分发配置的域名。</p>
     * @param string $Scheme <p>分发配置的协议，为 HTTP 或 HTTPS。</p>
     * @param string $PlayKey <p>播放密钥，由大小写字母（a - Z）或者数字（0 - 9）组成，长度在8 - 20个字符之间。</p>
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Scheme",$param) and $param["Scheme"] !== null) {
            $this->Scheme = $param["Scheme"];
        }

        if (array_key_exists("PlayKey",$param) and $param["PlayKey"] !== null) {
            $this->PlayKey = $param["PlayKey"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
