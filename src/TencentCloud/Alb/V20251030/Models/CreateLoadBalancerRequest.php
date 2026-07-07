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
 * CreateLoadBalancer请求参数结构体
 *
 * @method string getAddressType() 获取应用型负载均衡的地址类型。取值：

- **Internet**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。

- **Intranet**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。
 * @method void setAddressType(string $AddressType) 设置应用型负载均衡的地址类型。取值：

- **Internet**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。

- **Intranet**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。
 * @method LoadBalancerBillingConfig getLoadBalancerBillingConfig() 获取应用型负载均衡实例计费配置。
 * @method void setLoadBalancerBillingConfig(LoadBalancerBillingConfig $LoadBalancerBillingConfig) 设置应用型负载均衡实例计费配置。
 * @method string getVpcId() 获取私有网络 ID。
 * @method void setVpcId(string $VpcId) 设置私有网络 ID。
 * @method array getZoneMappings() 获取可用区及私有网络子网映射列表，最多支持添加10个可用区。若当前地域支持2个及以上的可用区，至少需要添加2个可用区。
 * @method void setZoneMappings(array $ZoneMappings) 设置可用区及私有网络子网映射列表，最多支持添加10个可用区。若当前地域支持2个及以上的可用区，至少需要添加2个可用区。
 * @method string getAddressIpVersion() 获取IP 地址版本，取值 IPv4 或 IPv6。
 * @method void setAddressIpVersion(string $AddressIpVersion) 设置IP 地址版本，取值 IPv4 或 IPv6。
 * @method string getClientToken() 获取客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。
 * @method void setClientToken(string $ClientToken) 设置客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。
 * @method DeletionProtectionConfig getDeleteProtection() 获取删除保护配置。
 * @method void setDeleteProtection(DeletionProtectionConfig $DeleteProtection) 设置删除保护配置。
 * @method boolean getDryRun() 获取是否只预检此次请求，取值：

- **true**：发送检查请求，不会创建应用型负载均衡实例。检查项包括是否填写了必需参数、请求格式和业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。
 * @method void setDryRun(boolean $DryRun) 设置是否只预检此次请求，取值：

- **true**：发送检查请求，不会创建应用型负载均衡实例。检查项包括是否填写了必需参数、请求格式和业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。
 * @method string getInternetAddressType() 获取EIP 地址类型，可取值：
- **EIP**: 普通弹性公网 IP
- **AntiDDoSEIP**: 高防EIP
- **AnycastEIP**: 加速 EIP
- **HighQualityEIP**: 精品 IP。仅新加坡和中国香港支持精品IP。
- **ResidentialEIP**: 原生 IP

不传默认是EIP。
 * @method void setInternetAddressType(string $InternetAddressType) 设置EIP 地址类型，可取值：
- **EIP**: 普通弹性公网 IP
- **AntiDDoSEIP**: 高防EIP
- **AnycastEIP**: 加速 EIP
- **HighQualityEIP**: 精品 IP。仅新加坡和中国香港支持精品IP。
- **ResidentialEIP**: 原生 IP

不传默认是EIP。
 * @method string getLoadBalancerName() 获取应用型负载均衡实例名称。长度为1~80个字符，可包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）。
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置应用型负载均衡实例名称。长度为1~80个字符，可包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）。
 * @method array getTags() 获取标签。
 * @method void setTags(array $Tags) 设置标签。
 */
class CreateLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string 应用型负载均衡的地址类型。取值：

- **Internet**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。

- **Intranet**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。
     */
    public $AddressType;

    /**
     * @var LoadBalancerBillingConfig 应用型负载均衡实例计费配置。
     */
    public $LoadBalancerBillingConfig;

    /**
     * @var string 私有网络 ID。
     */
    public $VpcId;

    /**
     * @var array 可用区及私有网络子网映射列表，最多支持添加10个可用区。若当前地域支持2个及以上的可用区，至少需要添加2个可用区。
     */
    public $ZoneMappings;

    /**
     * @var string IP 地址版本，取值 IPv4 或 IPv6。
     */
    public $AddressIpVersion;

    /**
     * @var string 客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。
     */
    public $ClientToken;

    /**
     * @var DeletionProtectionConfig 删除保护配置。
     */
    public $DeleteProtection;

    /**
     * @var boolean 是否只预检此次请求，取值：

- **true**：发送检查请求，不会创建应用型负载均衡实例。检查项包括是否填写了必需参数、请求格式和业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。
     */
    public $DryRun;

    /**
     * @var string EIP 地址类型，可取值：
- **EIP**: 普通弹性公网 IP
- **AntiDDoSEIP**: 高防EIP
- **AnycastEIP**: 加速 EIP
- **HighQualityEIP**: 精品 IP。仅新加坡和中国香港支持精品IP。
- **ResidentialEIP**: 原生 IP

不传默认是EIP。
     */
    public $InternetAddressType;

    /**
     * @var string 应用型负载均衡实例名称。长度为1~80个字符，可包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）。
     */
    public $LoadBalancerName;

    /**
     * @var array 标签。
     */
    public $Tags;

    /**
     * @param string $AddressType 应用型负载均衡的地址类型。取值：

- **Internet**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。

- **Intranet**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。
     * @param LoadBalancerBillingConfig $LoadBalancerBillingConfig 应用型负载均衡实例计费配置。
     * @param string $VpcId 私有网络 ID。
     * @param array $ZoneMappings 可用区及私有网络子网映射列表，最多支持添加10个可用区。若当前地域支持2个及以上的可用区，至少需要添加2个可用区。
     * @param string $AddressIpVersion IP 地址版本，取值 IPv4 或 IPv6。
     * @param string $ClientToken 客户端Token，用于保证请求的幂等性。

从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。
     * @param DeletionProtectionConfig $DeleteProtection 删除保护配置。
     * @param boolean $DryRun 是否只预检此次请求，取值：

- **true**：发送检查请求，不会创建应用型负载均衡实例。检查项包括是否填写了必需参数、请求格式和业务限制。如果检查不通过，则返回对应错误。如果检查通过，则返回错误码`DryRunOperation`。

- **false**（默认值）：发送正常请求，通过检查后返回HTTP 2xx状态码并直接进行操作。
     * @param string $InternetAddressType EIP 地址类型，可取值：
- **EIP**: 普通弹性公网 IP
- **AntiDDoSEIP**: 高防EIP
- **AnycastEIP**: 加速 EIP
- **HighQualityEIP**: 精品 IP。仅新加坡和中国香港支持精品IP。
- **ResidentialEIP**: 原生 IP

不传默认是EIP。
     * @param string $LoadBalancerName 应用型负载均衡实例名称。长度为1~80个字符，可包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）。
     * @param array $Tags 标签。
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

        if (array_key_exists("LoadBalancerBillingConfig",$param) and $param["LoadBalancerBillingConfig"] !== null) {
            $this->LoadBalancerBillingConfig = new LoadBalancerBillingConfig();
            $this->LoadBalancerBillingConfig->deserialize($param["LoadBalancerBillingConfig"]);
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ZoneMappings",$param) and $param["ZoneMappings"] !== null) {
            $this->ZoneMappings = [];
            foreach ($param["ZoneMappings"] as $key => $value){
                $obj = new ZoneMappingsItem();
                $obj->deserialize($value);
                array_push($this->ZoneMappings, $obj);
            }
        }

        if (array_key_exists("AddressIpVersion",$param) and $param["AddressIpVersion"] !== null) {
            $this->AddressIpVersion = $param["AddressIpVersion"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("DeleteProtection",$param) and $param["DeleteProtection"] !== null) {
            $this->DeleteProtection = new DeletionProtectionConfig();
            $this->DeleteProtection->deserialize($param["DeleteProtection"]);
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("InternetAddressType",$param) and $param["InternetAddressType"] !== null) {
            $this->InternetAddressType = $param["InternetAddressType"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
