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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNetworkBasicInfo请求参数结构体
 *
 * @method string getGatewayId() 获取云原生API网关实例ID。
 * @method void setGatewayId(string $GatewayId) 设置云原生API网关实例ID。
 * @method string getGroupId() 获取分组id
 * @method void setGroupId(string $GroupId) 设置分组id
 * @method string getNetworkType() 获取网络类型：
- Open 公网ipv4
- Open-IPv6 公网ipv6
- Internal 内网
 * @method void setNetworkType(string $NetworkType) 设置网络类型：
- Open 公网ipv4
- Open-IPv6 公网ipv6
- Internal 内网
 * @method string getVip() 获取ip地址
 * @method void setVip(string $Vip) 设置ip地址
 * @method integer getInternetMaxBandwidthOut() 获取公网出流量带宽[1,2048]Mbps
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置公网出流量带宽[1,2048]Mbps
 * @method string getDescription() 获取负载均衡描述
 * @method void setDescription(string $Description) 设置负载均衡描述
 * @method string getSlaType() 获取负载均衡的规格类型，支持：
- 不传为共享型。
- clb.c2.medium：标准型规格
- clb.c3.small：高阶型1规格
- clb.c3.medium：高阶型2规格
- clb.c4.small：超强型1规格
- clb.c4.medium：超强型2规格
- clb.c4.large：超强型3规格
- clb.c4.xlarge：超强型4规格
 * @method void setSlaType(string $SlaType) 设置负载均衡的规格类型，支持：
- 不传为共享型。
- clb.c2.medium：标准型规格
- clb.c3.small：高阶型1规格
- clb.c3.medium：高阶型2规格
- clb.c4.small：超强型1规格
- clb.c4.medium：超强型2规格
- clb.c4.large：超强型3规格
- clb.c4.xlarge：超强型4规格
 */
class ModifyNetworkBasicInfoRequest extends AbstractModel
{
    /**
     * @var string 云原生API网关实例ID。
     */
    public $GatewayId;

    /**
     * @var string 分组id
     */
    public $GroupId;

    /**
     * @var string 网络类型：
- Open 公网ipv4
- Open-IPv6 公网ipv6
- Internal 内网
     */
    public $NetworkType;

    /**
     * @var string ip地址
     */
    public $Vip;

    /**
     * @var integer 公网出流量带宽[1,2048]Mbps
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string 负载均衡描述
     */
    public $Description;

    /**
     * @var string 负载均衡的规格类型，支持：
- 不传为共享型。
- clb.c2.medium：标准型规格
- clb.c3.small：高阶型1规格
- clb.c3.medium：高阶型2规格
- clb.c4.small：超强型1规格
- clb.c4.medium：超强型2规格
- clb.c4.large：超强型3规格
- clb.c4.xlarge：超强型4规格
     */
    public $SlaType;

    /**
     * @param string $GatewayId 云原生API网关实例ID。
     * @param string $GroupId 分组id
     * @param string $NetworkType 网络类型：
- Open 公网ipv4
- Open-IPv6 公网ipv6
- Internal 内网
     * @param string $Vip ip地址
     * @param integer $InternetMaxBandwidthOut 公网出流量带宽[1,2048]Mbps
     * @param string $Description 负载均衡描述
     * @param string $SlaType 负载均衡的规格类型，支持：
- 不传为共享型。
- clb.c2.medium：标准型规格
- clb.c3.small：高阶型1规格
- clb.c3.medium：高阶型2规格
- clb.c4.small：超强型1规格
- clb.c4.medium：超强型2规格
- clb.c4.large：超强型3规格
- clb.c4.xlarge：超强型4规格
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SlaType",$param) and $param["SlaType"] !== null) {
            $this->SlaType = $param["SlaType"];
        }
    }
}
