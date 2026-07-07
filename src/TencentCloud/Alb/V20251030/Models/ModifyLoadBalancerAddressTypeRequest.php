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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLoadBalancerAddressType请求参数结构体
 *
 * @method string getAddressType() 获取目标网络类型。取值：
- **Internet**（公网型）
负载均衡实例分配公网 IP 地址，域名（DNS）解析至公网 IP，可在公网环境中直接访问，适用于对外提供服务的业务场景。
- **Intranet**（内网型）
负载均衡实例仅分配私网 IP 地址，域名（DNS）解析至私网 IP，仅支持在负载均衡实例所属 VPC 内的内网环境访问，适用于内部业务或对安全性要求较高的场景。
 * @method void setAddressType(string $AddressType) 设置目标网络类型。取值：
- **Internet**（公网型）
负载均衡实例分配公网 IP 地址，域名（DNS）解析至公网 IP，可在公网环境中直接访问，适用于对外提供服务的业务场景。
- **Intranet**（内网型）
负载均衡实例仅分配私网 IP 地址，域名（DNS）解析至私网 IP，仅支持在负载均衡实例所属 VPC 内的内网环境访问，适用于内部业务或对安全性要求较高的场景。
 * @method string getLoadBalancerId() 获取负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
 * @method string getBandwidthPackageId() 获取共享带宽包 ID。
 * @method void setBandwidthPackageId(string $BandwidthPackageId) 设置共享带宽包 ID。
 * @method boolean getDryRun() 获取是否只预检此次请求。取值：
- **true**：发送检查请求，不会更新实例的网络类型。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码DryRunOperation。
- **false**（默认值）：发送正常请求，通过检查后返回 HTTP 2xx 状态码并直接进行操作。
 * @method void setDryRun(boolean $DryRun) 设置是否只预检此次请求。取值：
- **true**：发送检查请求，不会更新实例的网络类型。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码DryRunOperation。
- **false**（默认值）：发送正常请求，通过检查后返回 HTTP 2xx 状态码并直接进行操作。
 * @method array getZoneMappings() 获取可用区及子网映射结构体。
若当前地域支持 2 个及以上的可用区，至少需要添加 2 个可用区。
 * @method void setZoneMappings(array $ZoneMappings) 设置可用区及子网映射结构体。
若当前地域支持 2 个及以上的可用区，至少需要添加 2 个可用区。
 */
class ModifyLoadBalancerAddressTypeRequest extends AbstractModel
{
    /**
     * @var string 目标网络类型。取值：
- **Internet**（公网型）
负载均衡实例分配公网 IP 地址，域名（DNS）解析至公网 IP，可在公网环境中直接访问，适用于对外提供服务的业务场景。
- **Intranet**（内网型）
负载均衡实例仅分配私网 IP 地址，域名（DNS）解析至私网 IP，仅支持在负载均衡实例所属 VPC 内的内网环境访问，适用于内部业务或对安全性要求较高的场景。
     */
    public $AddressType;

    /**
     * @var string 负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
     */
    public $LoadBalancerId;

    /**
     * @var string 共享带宽包 ID。
     */
    public $BandwidthPackageId;

    /**
     * @var boolean 是否只预检此次请求。取值：
- **true**：发送检查请求，不会更新实例的网络类型。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码DryRunOperation。
- **false**（默认值）：发送正常请求，通过检查后返回 HTTP 2xx 状态码并直接进行操作。
     */
    public $DryRun;

    /**
     * @var array 可用区及子网映射结构体。
若当前地域支持 2 个及以上的可用区，至少需要添加 2 个可用区。
     */
    public $ZoneMappings;

    /**
     * @param string $AddressType 目标网络类型。取值：
- **Internet**（公网型）
负载均衡实例分配公网 IP 地址，域名（DNS）解析至公网 IP，可在公网环境中直接访问，适用于对外提供服务的业务场景。
- **Intranet**（内网型）
负载均衡实例仅分配私网 IP 地址，域名（DNS）解析至私网 IP，仅支持在负载均衡实例所属 VPC 内的内网环境访问，适用于内部业务或对安全性要求较高的场景。
     * @param string $LoadBalancerId 负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
     * @param string $BandwidthPackageId 共享带宽包 ID。
     * @param boolean $DryRun 是否只预检此次请求。取值：
- **true**：发送检查请求，不会更新实例的网络类型。检查项包括是否填写了必需参数、请求格式、业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码DryRunOperation。
- **false**（默认值）：发送正常请求，通过检查后返回 HTTP 2xx 状态码并直接进行操作。
     * @param array $ZoneMappings 可用区及子网映射结构体。
若当前地域支持 2 个及以上的可用区，至少需要添加 2 个可用区。
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
        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("ZoneMappings",$param) and $param["ZoneMappings"] !== null) {
            $this->ZoneMappings = [];
            foreach ($param["ZoneMappings"] as $key => $value){
                $obj = new ZoneMappingsItem();
                $obj->deserialize($value);
                array_push($this->ZoneMappings, $obj);
            }
        }
    }
}
