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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEdgeUnitExtra返回参数结构体
 *
 * @method string getAPIServerType() 获取APIServer类型
 * @method void setAPIServerType(string $APIServerType) 设置APIServer类型
 * @method string getAPIServerURL() 获取域名URL
 * @method void setAPIServerURL(string $APIServerURL) 设置域名URL
 * @method string getAPIServerURLPort() 获取域名URL对应的端口
 * @method void setAPIServerURLPort(string $APIServerURLPort) 设置域名URL对应的端口
 * @method string getAPIServerResolveIP() 获取域名URL对应的端口
 * @method void setAPIServerResolveIP(string $APIServerResolveIP) 设置域名URL对应的端口
 * @method string getAPIServerExposeAddress() 获取对外可访问的IP
 * @method void setAPIServerExposeAddress(string $APIServerExposeAddress) 设置对外可访问的IP
 * @method boolean getIsCreatePrometheus() 获取是否开启监控
 * @method void setIsCreatePrometheus(boolean $IsCreatePrometheus) 设置是否开启监控
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeEdgeUnitExtraResponse extends AbstractModel
{
    /**
     * @var string APIServer类型
     */
    public $APIServerType;

    /**
     * @var string 域名URL
     */
    public $APIServerURL;

    /**
     * @var string 域名URL对应的端口
     */
    public $APIServerURLPort;

    /**
     * @var string 域名URL对应的端口
     */
    public $APIServerResolveIP;

    /**
     * @var string 对外可访问的IP
     */
    public $APIServerExposeAddress;

    /**
     * @var boolean 是否开启监控
     */
    public $IsCreatePrometheus;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $APIServerType APIServer类型
     * @param string $APIServerURL 域名URL
     * @param string $APIServerURLPort 域名URL对应的端口
     * @param string $APIServerResolveIP 域名URL对应的端口
     * @param string $APIServerExposeAddress 对外可访问的IP
     * @param boolean $IsCreatePrometheus 是否开启监控
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
        if (array_key_exists("APIServerType",$param) and $param["APIServerType"] !== null) {
            $this->APIServerType = $param["APIServerType"];
        }

        if (array_key_exists("APIServerURL",$param) and $param["APIServerURL"] !== null) {
            $this->APIServerURL = $param["APIServerURL"];
        }

        if (array_key_exists("APIServerURLPort",$param) and $param["APIServerURLPort"] !== null) {
            $this->APIServerURLPort = $param["APIServerURLPort"];
        }

        if (array_key_exists("APIServerResolveIP",$param) and $param["APIServerResolveIP"] !== null) {
            $this->APIServerResolveIP = $param["APIServerResolveIP"];
        }

        if (array_key_exists("APIServerExposeAddress",$param) and $param["APIServerExposeAddress"] !== null) {
            $this->APIServerExposeAddress = $param["APIServerExposeAddress"];
        }

        if (array_key_exists("IsCreatePrometheus",$param) and $param["IsCreatePrometheus"] !== null) {
            $this->IsCreatePrometheus = $param["IsCreatePrometheus"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
