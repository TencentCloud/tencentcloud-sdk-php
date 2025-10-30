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
 * EnableVpcEndPointConnect请求参数结构体
 *
 * @method string getEndPointServiceId() 获取终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
 * @method void setEndPointServiceId(string $EndPointServiceId) 设置终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
 * @method array getEndPointId() 获取终端节点ID。可通过[DescribeVpcEndPoint](https://cloud.tencent.com/document/product/215/54679) 获取。
 * @method void setEndPointId(array $EndPointId) 设置终端节点ID。可通过[DescribeVpcEndPoint](https://cloud.tencent.com/document/product/215/54679) 获取。
 * @method boolean getAcceptFlag() 获取是否接受终端节点连接请求。
<li> true：自动接受。</li> <li> false：不自动接受。</li>
 * @method void setAcceptFlag(boolean $AcceptFlag) 设置是否接受终端节点连接请求。
<li> true：自动接受。</li> <li> false：不自动接受。</li>
 * @method string getIpAddressType() 获取协议类型，支持 Ipv4，Ipv6，默认 Ipv4。
 * @method void setIpAddressType(string $IpAddressType) 设置协议类型，支持 Ipv4，Ipv6，默认 Ipv4。
 */
class EnableVpcEndPointConnectRequest extends AbstractModel
{
    /**
     * @var string 终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
     */
    public $EndPointServiceId;

    /**
     * @var array 终端节点ID。可通过[DescribeVpcEndPoint](https://cloud.tencent.com/document/product/215/54679) 获取。
     */
    public $EndPointId;

    /**
     * @var boolean 是否接受终端节点连接请求。
<li> true：自动接受。</li> <li> false：不自动接受。</li>
     */
    public $AcceptFlag;

    /**
     * @var string 协议类型，支持 Ipv4，Ipv6，默认 Ipv4。
     */
    public $IpAddressType;

    /**
     * @param string $EndPointServiceId 终端节点服务ID。可通过[DescribeVpcEndPointService](https://cloud.tencent.com/document/product/215/54678)接口获取。
     * @param array $EndPointId 终端节点ID。可通过[DescribeVpcEndPoint](https://cloud.tencent.com/document/product/215/54679) 获取。
     * @param boolean $AcceptFlag 是否接受终端节点连接请求。
<li> true：自动接受。</li> <li> false：不自动接受。</li>
     * @param string $IpAddressType 协议类型，支持 Ipv4，Ipv6，默认 Ipv4。
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
        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }

        if (array_key_exists("EndPointId",$param) and $param["EndPointId"] !== null) {
            $this->EndPointId = $param["EndPointId"];
        }

        if (array_key_exists("AcceptFlag",$param) and $param["AcceptFlag"] !== null) {
            $this->AcceptFlag = $param["AcceptFlag"];
        }

        if (array_key_exists("IpAddressType",$param) and $param["IpAddressType"] !== null) {
            $this->IpAddressType = $param["IpAddressType"];
        }
    }
}
