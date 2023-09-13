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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePorts返回参数结构体
 *
 * @method array getHttpPorts() 获取http端口列表
 * @method void setHttpPorts(array $HttpPorts) 设置http端口列表
 * @method array getHttpsPorts() 获取https端口列表
 * @method void setHttpsPorts(array $HttpsPorts) 设置https端口列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePortsResponse extends AbstractModel
{
    /**
     * @var array http端口列表
     */
    public $HttpPorts;

    /**
     * @var array https端口列表
     */
    public $HttpsPorts;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $HttpPorts http端口列表
     * @param array $HttpsPorts https端口列表
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
        if (array_key_exists("HttpPorts",$param) and $param["HttpPorts"] !== null) {
            $this->HttpPorts = $param["HttpPorts"];
        }

        if (array_key_exists("HttpsPorts",$param) and $param["HttpsPorts"] !== null) {
            $this->HttpsPorts = $param["HttpsPorts"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
