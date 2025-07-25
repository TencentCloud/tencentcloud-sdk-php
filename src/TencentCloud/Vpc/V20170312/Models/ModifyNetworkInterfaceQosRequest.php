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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNetworkInterfaceQos请求参数结构体
 *
 * @method array getNetworkInterfaceIds() 获取弹性网卡ID，支持批量修改。可通过[DescribeNetworkInterfaces](https://cloud.tencent.com/document/product/215/15817)接口获取。

 * @method void setNetworkInterfaceIds(array $NetworkInterfaceIds) 设置弹性网卡ID，支持批量修改。可通过[DescribeNetworkInterfaces](https://cloud.tencent.com/document/product/215/15817)接口获取。

 * @method string getQosLevel() 获取服务质量，可选值：PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。
 * @method void setQosLevel(string $QosLevel) 设置服务质量，可选值：PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。
 * @method integer getDirectSendMaxPort() 获取DirectSend端口范围最大值。最大值: 65535。
 * @method void setDirectSendMaxPort(integer $DirectSendMaxPort) 设置DirectSend端口范围最大值。最大值: 65535。
 */
class ModifyNetworkInterfaceQosRequest extends AbstractModel
{
    /**
     * @var array 弹性网卡ID，支持批量修改。可通过[DescribeNetworkInterfaces](https://cloud.tencent.com/document/product/215/15817)接口获取。

     */
    public $NetworkInterfaceIds;

    /**
     * @var string 服务质量，可选值：PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。
     */
    public $QosLevel;

    /**
     * @var integer DirectSend端口范围最大值。最大值: 65535。
     */
    public $DirectSendMaxPort;

    /**
     * @param array $NetworkInterfaceIds 弹性网卡ID，支持批量修改。可通过[DescribeNetworkInterfaces](https://cloud.tencent.com/document/product/215/15817)接口获取。

     * @param string $QosLevel 服务质量，可选值：PT（云金）、AU（云银）、AG(云铜）、DEFAULT（默认）。
     * @param integer $DirectSendMaxPort DirectSend端口范围最大值。最大值: 65535。
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
        if (array_key_exists("NetworkInterfaceIds",$param) and $param["NetworkInterfaceIds"] !== null) {
            $this->NetworkInterfaceIds = $param["NetworkInterfaceIds"];
        }

        if (array_key_exists("QosLevel",$param) and $param["QosLevel"] !== null) {
            $this->QosLevel = $param["QosLevel"];
        }

        if (array_key_exists("DirectSendMaxPort",$param) and $param["DirectSendMaxPort"] !== null) {
            $this->DirectSendMaxPort = $param["DirectSendMaxPort"];
        }
    }
}
