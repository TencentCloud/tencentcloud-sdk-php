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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDefaultDistributionConfig返回参数结构体
 *
 * @method string getDomainName() 获取分发配置的域名(已废弃）。
 * @method void setDomainName(string $DomainName) 设置分发配置的域名(已废弃）。
 * @method string getDomain() 获取分发配置的域名。
 * @method void setDomain(string $Domain) 设置分发配置的域名。
 * @method string getScheme() 获取分发配置的协议，为 HTTP 或 HTTPS。
 * @method void setScheme(string $Scheme) 设置分发配置的协议，为 HTTP 或 HTTPS。
 * @method string getPlayKey() 获取播放密钥，由大小写字母（a - Z）或者数字（0 - 9）组成，长度在8 - 20个字符之间。
 * @method void setPlayKey(string $PlayKey) 设置播放密钥，由大小写字母（a - Z）或者数字（0 - 9）组成，长度在8 - 20个字符之间。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDefaultDistributionConfigResponse extends AbstractModel
{
    /**
     * @var string 分发配置的域名(已废弃）。
     * @deprecated
     */
    public $DomainName;

    /**
     * @var string 分发配置的域名。
     */
    public $Domain;

    /**
     * @var string 分发配置的协议，为 HTTP 或 HTTPS。
     */
    public $Scheme;

    /**
     * @var string 播放密钥，由大小写字母（a - Z）或者数字（0 - 9）组成，长度在8 - 20个字符之间。
     */
    public $PlayKey;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DomainName 分发配置的域名(已废弃）。
     * @param string $Domain 分发配置的域名。
     * @param string $Scheme 分发配置的协议，为 HTTP 或 HTTPS。
     * @param string $PlayKey 播放密钥，由大小写字母（a - Z）或者数字（0 - 9）组成，长度在8 - 20个字符之间。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
