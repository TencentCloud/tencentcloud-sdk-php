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
 * 负载均衡详细信息
 *
 * @method AccessLogConfig getAccessLogConfig() 获取访问日志配置。
 * @method void setAccessLogConfig(AccessLogConfig $AccessLogConfig) 设置访问日志配置。
 * @method string getAddressIpVersion() 获取IP 地址版本，取值 IPv4 或 IPv6。
 * @method void setAddressIpVersion(string $AddressIpVersion) 设置IP 地址版本，取值 IPv4 或 IPv6。
 * @method string getAddressType() 获取应用型负载均衡实例的网络地址类型。取值：

- **Internet/Public**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。

- **Intranet/Internal**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。


 * @method void setAddressType(string $AddressType) 设置应用型负载均衡实例的网络地址类型。取值：

- **Internet/Public**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。

- **Intranet/Internal**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。


 * @method string getCreateTime() 获取资源创建时间，格式为`yyyy-MM-ddTHH:mm:ss±hh:mm`。
 * @method void setCreateTime(string $CreateTime) 设置资源创建时间，格式为`yyyy-MM-ddTHH:mm:ss±hh:mm`。
 * @method DeletionProtectionConfig getDeletionProtection() 获取删除保护设置信息。
 * @method void setDeletionProtection(DeletionProtectionConfig $DeletionProtection) 设置删除保护设置信息。
 * @method string getDomain() 获取DNS域名。
 * @method void setDomain(string $Domain) 设置DNS域名。
 * @method LoadBalancerBillingConfig getLoadBalancerBillingConfig() 获取负载均衡实例付计费配置信息
 * @method void setLoadBalancerBillingConfig(LoadBalancerBillingConfig $LoadBalancerBillingConfig) 设置负载均衡实例付计费配置信息
 * @method string getLoadBalancerId() 获取负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
 * @method string getLoadBalancerName() 获取实例名称。

长度为1~80个字符，可包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）。
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置实例名称。

长度为1~80个字符，可包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）。
 * @method array getLoadBalancerOperationLocks() 获取应用型负载均衡操作锁配置。
 * @method void setLoadBalancerOperationLocks(array $LoadBalancerOperationLocks) 设置应用型负载均衡操作锁配置。
 * @method string getLoadBalancerStatus() 获取应用型负载均衡实例状态。取值：

- **Provisioning**：创建中。
- **Active**: 运行中。
- **Configuring**: 变配中。
- **Deleting**：删除中。
- **ProvisionFailed**：创建失败。
- **ConfigureFailed**：变配失败。
- **DeletionFailed**：删除失败。
- **Abnormal**：异常状态，具体异常原因参见LoadBalancerOperationLocks字段。
 * @method void setLoadBalancerStatus(string $LoadBalancerStatus) 设置应用型负载均衡实例状态。取值：

- **Provisioning**：创建中。
- **Active**: 运行中。
- **Configuring**: 变配中。
- **Deleting**：删除中。
- **ProvisionFailed**：创建失败。
- **ConfigureFailed**：变配失败。
- **DeletionFailed**：删除失败。
- **Abnormal**：异常状态，具体异常原因参见LoadBalancerOperationLocks字段。
 * @method ModificationProtectionInfo getModificationProtection() 获取修改保护设置信息。
 * @method void setModificationProtection(ModificationProtectionInfo $ModificationProtection) 设置修改保护设置信息。
 * @method array getSecurityGroupIds() 获取应用型负载均衡实例绑定的安全组ID集合。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置应用型负载均衡实例绑定的安全组ID集合。
 * @method array getTags() 获取标签。
 * @method void setTags(array $Tags) 设置标签。
 * @method string getVpcId() 获取私有网络 ID。
 * @method void setVpcId(string $VpcId) 设置私有网络 ID。
 * @method array getZoneMappings() 获取可用区及子网映射列表，最多返回10个可用区。若当前地域支持2个及以上可用区，至少返回2个及以上可用区。
 * @method void setZoneMappings(array $ZoneMappings) 设置可用区及子网映射列表，最多返回10个可用区。若当前地域支持2个及以上可用区，至少返回2个及以上可用区。
 */
class LoadBalancerDetail extends AbstractModel
{
    /**
     * @var AccessLogConfig 访问日志配置。
     */
    public $AccessLogConfig;

    /**
     * @var string IP 地址版本，取值 IPv4 或 IPv6。
     */
    public $AddressIpVersion;

    /**
     * @var string 应用型负载均衡实例的网络地址类型。取值：

- **Internet/Public**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。

- **Intranet/Internal**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。


     */
    public $AddressType;

    /**
     * @var string 资源创建时间，格式为`yyyy-MM-ddTHH:mm:ss±hh:mm`。
     */
    public $CreateTime;

    /**
     * @var DeletionProtectionConfig 删除保护设置信息。
     */
    public $DeletionProtection;

    /**
     * @var string DNS域名。
     */
    public $Domain;

    /**
     * @var LoadBalancerBillingConfig 负载均衡实例付计费配置信息
     */
    public $LoadBalancerBillingConfig;

    /**
     * @var string 负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
     */
    public $LoadBalancerId;

    /**
     * @var string 实例名称。

长度为1~80个字符，可包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）。
     */
    public $LoadBalancerName;

    /**
     * @var array 应用型负载均衡操作锁配置。
     */
    public $LoadBalancerOperationLocks;

    /**
     * @var string 应用型负载均衡实例状态。取值：

- **Provisioning**：创建中。
- **Active**: 运行中。
- **Configuring**: 变配中。
- **Deleting**：删除中。
- **ProvisionFailed**：创建失败。
- **ConfigureFailed**：变配失败。
- **DeletionFailed**：删除失败。
- **Abnormal**：异常状态，具体异常原因参见LoadBalancerOperationLocks字段。
     */
    public $LoadBalancerStatus;

    /**
     * @var ModificationProtectionInfo 修改保护设置信息。
     */
    public $ModificationProtection;

    /**
     * @var array 应用型负载均衡实例绑定的安全组ID集合。
     */
    public $SecurityGroupIds;

    /**
     * @var array 标签。
     */
    public $Tags;

    /**
     * @var string 私有网络 ID。
     */
    public $VpcId;

    /**
     * @var array 可用区及子网映射列表，最多返回10个可用区。若当前地域支持2个及以上可用区，至少返回2个及以上可用区。
     */
    public $ZoneMappings;

    /**
     * @param AccessLogConfig $AccessLogConfig 访问日志配置。
     * @param string $AddressIpVersion IP 地址版本，取值 IPv4 或 IPv6。
     * @param string $AddressType 应用型负载均衡实例的网络地址类型。取值：

- **Internet/Public**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。

- **Intranet/Internal**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。


     * @param string $CreateTime 资源创建时间，格式为`yyyy-MM-ddTHH:mm:ss±hh:mm`。
     * @param DeletionProtectionConfig $DeletionProtection 删除保护设置信息。
     * @param string $Domain DNS域名。
     * @param LoadBalancerBillingConfig $LoadBalancerBillingConfig 负载均衡实例付计费配置信息
     * @param string $LoadBalancerId 负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
     * @param string $LoadBalancerName 实例名称。

长度为1~80个字符，可包含中文、字母、数字、短划线（-）、正斜线（/）、半角句号（.）和下划线（_）。
     * @param array $LoadBalancerOperationLocks 应用型负载均衡操作锁配置。
     * @param string $LoadBalancerStatus 应用型负载均衡实例状态。取值：

- **Provisioning**：创建中。
- **Active**: 运行中。
- **Configuring**: 变配中。
- **Deleting**：删除中。
- **ProvisionFailed**：创建失败。
- **ConfigureFailed**：变配失败。
- **DeletionFailed**：删除失败。
- **Abnormal**：异常状态，具体异常原因参见LoadBalancerOperationLocks字段。
     * @param ModificationProtectionInfo $ModificationProtection 修改保护设置信息。
     * @param array $SecurityGroupIds 应用型负载均衡实例绑定的安全组ID集合。
     * @param array $Tags 标签。
     * @param string $VpcId 私有网络 ID。
     * @param array $ZoneMappings 可用区及子网映射列表，最多返回10个可用区。若当前地域支持2个及以上可用区，至少返回2个及以上可用区。
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
        if (array_key_exists("AccessLogConfig",$param) and $param["AccessLogConfig"] !== null) {
            $this->AccessLogConfig = new AccessLogConfig();
            $this->AccessLogConfig->deserialize($param["AccessLogConfig"]);
        }

        if (array_key_exists("AddressIpVersion",$param) and $param["AddressIpVersion"] !== null) {
            $this->AddressIpVersion = $param["AddressIpVersion"];
        }

        if (array_key_exists("AddressType",$param) and $param["AddressType"] !== null) {
            $this->AddressType = $param["AddressType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = new DeletionProtectionConfig();
            $this->DeletionProtection->deserialize($param["DeletionProtection"]);
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("LoadBalancerBillingConfig",$param) and $param["LoadBalancerBillingConfig"] !== null) {
            $this->LoadBalancerBillingConfig = new LoadBalancerBillingConfig();
            $this->LoadBalancerBillingConfig->deserialize($param["LoadBalancerBillingConfig"]);
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("LoadBalancerOperationLocks",$param) and $param["LoadBalancerOperationLocks"] !== null) {
            $this->LoadBalancerOperationLocks = [];
            foreach ($param["LoadBalancerOperationLocks"] as $key => $value){
                $obj = new LoadBalancerOperationLocksItem();
                $obj->deserialize($value);
                array_push($this->LoadBalancerOperationLocks, $obj);
            }
        }

        if (array_key_exists("LoadBalancerStatus",$param) and $param["LoadBalancerStatus"] !== null) {
            $this->LoadBalancerStatus = $param["LoadBalancerStatus"];
        }

        if (array_key_exists("ModificationProtection",$param) and $param["ModificationProtection"] !== null) {
            $this->ModificationProtection = new ModificationProtectionInfo();
            $this->ModificationProtection->deserialize($param["ModificationProtection"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ZoneMappings",$param) and $param["ZoneMappings"] !== null) {
            $this->ZoneMappings = [];
            foreach ($param["ZoneMappings"] as $key => $value){
                $obj = new ZoneMappingInfo();
                $obj->deserialize($value);
                array_push($this->ZoneMappings, $obj);
            }
        }
    }
}
