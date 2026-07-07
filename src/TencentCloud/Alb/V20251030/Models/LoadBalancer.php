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
 * 列表展示的应用型负载均衡实例结构。
 *
 * @method AccessLogConfig getAccessLogConfig() 获取访问日志配置结构。
 * @method void setAccessLogConfig(AccessLogConfig $AccessLogConfig) 设置访问日志配置结构。
 * @method string getAddressIpVersion() 获取IP 地址版本，取值 IPv4 或 IPv6。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddressIpVersion(string $AddressIpVersion) 设置IP 地址版本，取值 IPv4 或 IPv6。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddressType() 获取负载均衡的地址类型。取值：

- **Internet**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。

- **Intranet**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddressType(string $AddressType) 设置负载均衡的地址类型。取值：

- **Internet**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。

- **Intranet**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取资源创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置资源创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DeletionProtectionConfig getDeletionProtection() 获取删除保护设置信息。
 * @method void setDeletionProtection(DeletionProtectionConfig $DeletionProtection) 设置删除保护设置信息。
 * @method string getDomain() 获取DNS域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置DNS域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method LoadBalancerBillingConfig getLoadBalancerBillingConfig() 获取负载均衡实例计费配置。
 * @method void setLoadBalancerBillingConfig(LoadBalancerBillingConfig $LoadBalancerBillingConfig) 设置负载均衡实例计费配置。
 * @method string getLoadBalancerId() 获取负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLoadBalancerName() 获取负载均衡实例名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置负载均衡实例名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLoadBalancerOperationLocks() 获取负载均衡操作锁配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerOperationLocks(array $LoadBalancerOperationLocks) 设置负载均衡操作锁配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLoadBalancerStatus() 获取应用型负载均衡实例状态。取值：

- **Provisioning**：创建中。
- **Active**: 运行中。
- **Configuring**: 变配中。
- **Deleting**：删除中。
- **ProvisionFailed**：创建失败。
- **ConfigureFailed**：变配失败。
- **DeletionFailed**：删除失败。
- **Abnormal**：异常状态，具体异常原因参见LoadBalancerOperationLocks字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerStatus(string $LoadBalancerStatus) 设置应用型负载均衡实例状态。取值：

- **Provisioning**：创建中。
- **Active**: 运行中。
- **Configuring**: 变配中。
- **Deleting**：删除中。
- **ProvisionFailed**：创建失败。
- **ConfigureFailed**：变配失败。
- **DeletionFailed**：删除失败。
- **Abnormal**：异常状态，具体异常原因参见LoadBalancerOperationLocks字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ModificationProtectionInfo getModificationProtection() 获取修改保护设置信息。
 * @method void setModificationProtection(ModificationProtectionInfo $ModificationProtection) 设置修改保护设置信息。
 * @method array getTags() 获取标签列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取私有网络 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置私有网络 ID。
注意：此字段可能返回 null，表示取不到有效值。
 */
class LoadBalancer extends AbstractModel
{
    /**
     * @var AccessLogConfig 访问日志配置结构。
     */
    public $AccessLogConfig;

    /**
     * @var string IP 地址版本，取值 IPv4 或 IPv6。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddressIpVersion;

    /**
     * @var string 负载均衡的地址类型。取值：

- **Internet**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。

- **Intranet**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddressType;

    /**
     * @var string 资源创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var DeletionProtectionConfig 删除保护设置信息。
     */
    public $DeletionProtection;

    /**
     * @var string DNS域名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var LoadBalancerBillingConfig 负载均衡实例计费配置。
     */
    public $LoadBalancerBillingConfig;

    /**
     * @var string 负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerId;

    /**
     * @var string 负载均衡实例名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerName;

    /**
     * @var array 负载均衡操作锁配置。
注意：此字段可能返回 null，表示取不到有效值。
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
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerStatus;

    /**
     * @var ModificationProtectionInfo 修改保护设置信息。
     */
    public $ModificationProtection;

    /**
     * @var array 标签列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 私有网络 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @param AccessLogConfig $AccessLogConfig 访问日志配置结构。
     * @param string $AddressIpVersion IP 地址版本，取值 IPv4 或 IPv6。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AddressType 负载均衡的地址类型。取值：

- **Internet**：负载均衡具有公网IP地址，DNS域名被解析到公网IP，因此可以在公网环境访问。

- **Intranet**：负载均衡只有私网IP地址，DNS域名被解析到私网IP，因此只能被负载均衡所在VPC的内网环境访问。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 资源创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DeletionProtectionConfig $DeletionProtection 删除保护设置信息。
     * @param string $Domain DNS域名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param LoadBalancerBillingConfig $LoadBalancerBillingConfig 负载均衡实例计费配置。
     * @param string $LoadBalancerId 负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LoadBalancerName 负载均衡实例名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LoadBalancerOperationLocks 负载均衡操作锁配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LoadBalancerStatus 应用型负载均衡实例状态。取值：

- **Provisioning**：创建中。
- **Active**: 运行中。
- **Configuring**: 变配中。
- **Deleting**：删除中。
- **ProvisionFailed**：创建失败。
- **ConfigureFailed**：变配失败。
- **DeletionFailed**：删除失败。
- **Abnormal**：异常状态，具体异常原因参见LoadBalancerOperationLocks字段。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ModificationProtectionInfo $ModificationProtection 修改保护设置信息。
     * @param array $Tags 标签列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 私有网络 ID。
注意：此字段可能返回 null，表示取不到有效值。
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
    }
}
