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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述实例的信息
 *
 * @method Placement getPlacement() 获取<p>实例所在的位置。</p>
 * @method void setPlacement(Placement $Placement) 设置<p>实例所在的位置。</p>
 * @method string getInstanceId() 获取<p>实例<code>ID</code>。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例<code>ID</code>。</p>
 * @method string getInstanceType() 获取<p>实例机型。</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例机型。</p>
 * @method integer getCPU() 获取<p>实例的CPU核数，单位：核。</p>
 * @method void setCPU(integer $CPU) 设置<p>实例的CPU核数，单位：核。</p>
 * @method integer getMemory() 获取<p>实例内存容量，单位：<code>GiB</code>。</p>
 * @method void setMemory(integer $Memory) 设置<p>实例内存容量，单位：<code>GiB</code>。</p>
 * @method string getRestrictState() 获取<p>实例业务状态。取值范围：<br><li>NORMAL：表示正常状态的实例</li><li>EXPIRED：表示过期的实例</li><li>PROTECTIVELY_ISOLATED：表示被安全隔离的实例。</li></p>
 * @method void setRestrictState(string $RestrictState) 设置<p>实例业务状态。取值范围：<br><li>NORMAL：表示正常状态的实例</li><li>EXPIRED：表示过期的实例</li><li>PROTECTIVELY_ISOLATED：表示被安全隔离的实例。</li></p>
 * @method string getInstanceName() 获取<p>实例名称。</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称。</p>
 * @method string getInstanceChargeType() 获取<p>实例<a href="https://cloud.tencent.com/document/product/213/2180">计费类型</a>。取值范围：<br><li>PREPAID：预付费，即包年包月</li><br><li>POSTPAID_BY_HOUR：按小时后付费</li><br><li>CDHPAID：独享子机（基于专用宿主机创建，宿主机部分的资源不收费）</li><br><li>SPOTPAID：竞价付费</li><br><li>CDCPAID：专用集群付费</li></p>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>实例<a href="https://cloud.tencent.com/document/product/213/2180">计费类型</a>。取值范围：<br><li>PREPAID：预付费，即包年包月</li><br><li>POSTPAID_BY_HOUR：按小时后付费</li><br><li>CDHPAID：独享子机（基于专用宿主机创建，宿主机部分的资源不收费）</li><br><li>SPOTPAID：竞价付费</li><br><li>CDCPAID：专用集群付费</li></p>
 * @method SystemDisk getSystemDisk() 获取<p>实例系统盘信息。</p>
 * @method void setSystemDisk(SystemDisk $SystemDisk) 设置<p>实例系统盘信息。</p>
 * @method array getDataDisks() 获取<p>实例数据盘信息。</p>
 * @method void setDataDisks(array $DataDisks) 设置<p>实例数据盘信息。</p>
 * @method array getPrivateIpAddresses() 获取<p>实例主网卡的内网<code>IP</code>列表。</p>
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) 设置<p>实例主网卡的内网<code>IP</code>列表。</p>
 * @method array getPublicIpAddresses() 获取<p>实例主网卡的公网<code>IP</code>列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicIpAddresses(array $PublicIpAddresses) 设置<p>实例主网卡的公网<code>IP</code>列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method InternetAccessible getInternetAccessible() 获取<p>实例带宽信息。</p>
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置<p>实例带宽信息。</p>
 * @method VirtualPrivateCloud getVirtualPrivateCloud() 获取<p>实例所属虚拟私有网络信息。</p>
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) 设置<p>实例所属虚拟私有网络信息。</p>
 * @method string getImageId() 获取<p>生产实例所使用的镜像<code>ID</code>。</p>
 * @method void setImageId(string $ImageId) 设置<p>生产实例所使用的镜像<code>ID</code>。</p>
 * @method string getRenewFlag() 获取<p>自动续费标识。取值范围：<br><li><code>NOTIFY_AND_MANUAL_RENEW</code>：表示通知即将过期，但不自动续费</li><li><code>NOTIFY_AND_AUTO_RENEW</code>：表示通知即将过期，而且自动续费</li><li><code>DISABLE_NOTIFY_AND_MANUAL_RENEW</code>：表示不通知即将过期，也不自动续费。</p></li><li>注意：后付费模式本项为null</li>
 * @method void setRenewFlag(string $RenewFlag) 设置<p>自动续费标识。取值范围：<br><li><code>NOTIFY_AND_MANUAL_RENEW</code>：表示通知即将过期，但不自动续费</li><li><code>NOTIFY_AND_AUTO_RENEW</code>：表示通知即将过期，而且自动续费</li><li><code>DISABLE_NOTIFY_AND_MANUAL_RENEW</code>：表示不通知即将过期，也不自动续费。</p></li><li>注意：后付费模式本项为null</li>
 * @method string getCreatedTime() 获取<p>创建时间。按照<code>ISO8601</code>标准表示，并且使用<code>UTC</code>时间。格式为：<code>YYYY-MM-DDThh:mm:ssZ</code>。</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间。按照<code>ISO8601</code>标准表示，并且使用<code>UTC</code>时间。格式为：<code>YYYY-MM-DDThh:mm:ssZ</code>。</p>
 * @method string getExpiredTime() 获取<p>到期时间。按照<code>ISO8601</code>标准表示，并且使用<code>UTC</code>时间。格式为：<code>YYYY-MM-DDThh:mm:ssZ</code>。注意：后付费模式本项为null</p>
 * @method void setExpiredTime(string $ExpiredTime) 设置<p>到期时间。按照<code>ISO8601</code>标准表示，并且使用<code>UTC</code>时间。格式为：<code>YYYY-MM-DDThh:mm:ssZ</code>。注意：后付费模式本项为null</p>
 * @method string getOsName() 获取<p>操作系统名称。</p>
 * @method void setOsName(string $OsName) 设置<p>操作系统名称。</p>
 * @method array getSecurityGroupIds() 获取<p>实例所属安全组。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的sgId字段来获取。</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>实例所属安全组。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的sgId字段来获取。</p>
 * @method LoginSettings getLoginSettings() 获取<p>实例登录设置。目前只返回实例所关联的密钥。</p>
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置<p>实例登录设置。目前只返回实例所关联的密钥。</p>
 * @method string getInstanceState() 获取<p>实例状态。状态类型详见<a href="https://cloud.tencent.com/document/api/213/15753#InstanceStatus">实例状态表</a></p>
 * @method void setInstanceState(string $InstanceState) 设置<p>实例状态。状态类型详见<a href="https://cloud.tencent.com/document/api/213/15753#InstanceStatus">实例状态表</a></p>
 * @method array getTags() 获取<p>实例关联的标签列表。</p>
 * @method void setTags(array $Tags) 设置<p>实例关联的标签列表。</p>
 * @method string getStopChargingMode() 获取<p>实例的关机计费模式。<br>取值范围：<br><li>KEEP_CHARGING：关机继续收费</li><li>STOP_CHARGING：关机停止收费</li><li>NOT_APPLICABLE：实例处于非关机状态或者不适用关机停止计费的条件</li></p>
 * @method void setStopChargingMode(string $StopChargingMode) 设置<p>实例的关机计费模式。<br>取值范围：<br><li>KEEP_CHARGING：关机继续收费</li><li>STOP_CHARGING：关机停止收费</li><li>NOT_APPLICABLE：实例处于非关机状态或者不适用关机停止计费的条件</li></p>
 * @method string getUuid() 获取<p>实例全局唯一ID</p>
 * @method void setUuid(string $Uuid) 设置<p>实例全局唯一ID</p>
 * @method string getLatestOperation() 获取<p>实例的最新操作。例：StopInstances、ResetInstance。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestOperation(string $LatestOperation) 设置<p>实例的最新操作。例：StopInstances、ResetInstance。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestOperationState() 获取<p>实例的最新操作状态。取值范围：<br><li>SUCCESS：表示操作成功</li><li>OPERATING：表示操作执行中</li><li>FAILED：表示操作失败</li></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestOperationState(string $LatestOperationState) 设置<p>实例的最新操作状态。取值范围：<br><li>SUCCESS：表示操作成功</li><li>OPERATING：表示操作执行中</li><li>FAILED：表示操作失败</li></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestOperationRequestId() 获取<p>实例最新操作的唯一请求 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestOperationRequestId(string $LatestOperationRequestId) 设置<p>实例最新操作的唯一请求 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisasterRecoverGroupId() 获取<p>分散置放群组ID。</p>
 * @method void setDisasterRecoverGroupId(string $DisasterRecoverGroupId) 设置<p>分散置放群组ID。</p>
 * @method array getIPv6Addresses() 获取<p>实例的IPv6地址。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIPv6Addresses(array $IPv6Addresses) 设置<p>实例的IPv6地址。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCamRoleName() 获取<p>CAM角色名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCamRoleName(string $CamRoleName) 设置<p>CAM角色名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHpcClusterId() 获取<p>高性能计算集群<code>ID</code>。</p>
 * @method void setHpcClusterId(string $HpcClusterId) 设置<p>高性能计算集群<code>ID</code>。</p>
 * @method array getRdmaIpAddresses() 获取<p>高性能计算集群<code>IP</code>列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRdmaIpAddresses(array $RdmaIpAddresses) 设置<p>高性能计算集群<code>IP</code>列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDedicatedClusterId() 获取<p>实例所在的专用集群<code>ID</code>。</p>
 * @method void setDedicatedClusterId(string $DedicatedClusterId) 设置<p>实例所在的专用集群<code>ID</code>。</p>
 * @method string getIsolatedSource() 获取<p>实例隔离类型。取值范围：<br><li>ARREAR：表示欠费隔离<br></li><li>EXPIRE：表示到期隔离<br></li><li>MANMADE：表示主动退还隔离<br></li><li>NOTISOLATED：表示未隔离<br></li></p>
 * @method void setIsolatedSource(string $IsolatedSource) 设置<p>实例隔离类型。取值范围：<br><li>ARREAR：表示欠费隔离<br></li><li>EXPIRE：表示到期隔离<br></li><li>MANMADE：表示主动退还隔离<br></li><li>NOTISOLATED：表示未隔离<br></li></p>
 * @method GPUInfo getGPUInfo() 获取<p>GPU信息。如果是gpu类型子机，该值会返回GPU信息，如果是其他类型子机则不返回。</p>
 * @method void setGPUInfo(GPUInfo $GPUInfo) 设置<p>GPU信息。如果是gpu类型子机，该值会返回GPU信息，如果是其他类型子机则不返回。</p>
 * @method string getLicenseType() 获取<p>实例的操作系统许可类型，默认为TencentCloud</p>
 * @method void setLicenseType(string $LicenseType) 设置<p>实例的操作系统许可类型，默认为TencentCloud</p>
 * @method boolean getDisableApiTermination() 获取<p>实例销毁保护标志，表示是否允许通过api接口删除实例。取值范围：<br><li>true：表示开启实例保护，不允许通过api接口删除实例</li><li>false：表示关闭实例保护，允许通过api接口删除实例</li><br>默认取值：false。</p>
 * @method void setDisableApiTermination(boolean $DisableApiTermination) 设置<p>实例销毁保护标志，表示是否允许通过api接口删除实例。取值范围：<br><li>true：表示开启实例保护，不允许通过api接口删除实例</li><li>false：表示关闭实例保护，允许通过api接口删除实例</li><br>默认取值：false。</p>
 * @method string getDefaultLoginUser() 获取<p>默认登录用户。</p>
 * @method void setDefaultLoginUser(string $DefaultLoginUser) 设置<p>默认登录用户。</p>
 * @method integer getDefaultLoginPort() 获取<p>默认登录端口。</p>
 * @method void setDefaultLoginPort(integer $DefaultLoginPort) 设置<p>默认登录端口。</p>
 * @method string getLatestOperationErrorMsg() 获取<p>实例的最新操作错误信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestOperationErrorMsg(string $LatestOperationErrorMsg) 设置<p>实例的最新操作错误信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Metadata getMetadata() 获取<p>自定义metadata，本参数对应创建 CVM时指定的Metadata 信息。<strong>注：内测中</strong>。</p>
 * @method void setMetadata(Metadata $Metadata) 设置<p>自定义metadata，本参数对应创建 CVM时指定的Metadata 信息。<strong>注：内测中</strong>。</p>
 * @method array getPublicIPv6Addresses() 获取<p>实例绑定的公网IPv6地址。</p>
 * @method void setPublicIPv6Addresses(array $PublicIPv6Addresses) 设置<p>实例绑定的公网IPv6地址。</p>
 * @method CpuTopology getCpuTopology() 获取<p>描述了实例CPU拓扑结构的相关信息。</p>
 * @method void setCpuTopology(CpuTopology $CpuTopology) 设置<p>描述了实例CPU拓扑结构的相关信息。</p>
 */
class Instance extends AbstractModel
{
    /**
     * @var Placement <p>实例所在的位置。</p>
     */
    public $Placement;

    /**
     * @var string <p>实例<code>ID</code>。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例机型。</p>
     */
    public $InstanceType;

    /**
     * @var integer <p>实例的CPU核数，单位：核。</p>
     */
    public $CPU;

    /**
     * @var integer <p>实例内存容量，单位：<code>GiB</code>。</p>
     */
    public $Memory;

    /**
     * @var string <p>实例业务状态。取值范围：<br><li>NORMAL：表示正常状态的实例</li><li>EXPIRED：表示过期的实例</li><li>PROTECTIVELY_ISOLATED：表示被安全隔离的实例。</li></p>
     */
    public $RestrictState;

    /**
     * @var string <p>实例名称。</p>
     */
    public $InstanceName;

    /**
     * @var string <p>实例<a href="https://cloud.tencent.com/document/product/213/2180">计费类型</a>。取值范围：<br><li>PREPAID：预付费，即包年包月</li><br><li>POSTPAID_BY_HOUR：按小时后付费</li><br><li>CDHPAID：独享子机（基于专用宿主机创建，宿主机部分的资源不收费）</li><br><li>SPOTPAID：竞价付费</li><br><li>CDCPAID：专用集群付费</li></p>
     */
    public $InstanceChargeType;

    /**
     * @var SystemDisk <p>实例系统盘信息。</p>
     */
    public $SystemDisk;

    /**
     * @var array <p>实例数据盘信息。</p>
     */
    public $DataDisks;

    /**
     * @var array <p>实例主网卡的内网<code>IP</code>列表。</p>
     */
    public $PrivateIpAddresses;

    /**
     * @var array <p>实例主网卡的公网<code>IP</code>列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicIpAddresses;

    /**
     * @var InternetAccessible <p>实例带宽信息。</p>
     */
    public $InternetAccessible;

    /**
     * @var VirtualPrivateCloud <p>实例所属虚拟私有网络信息。</p>
     */
    public $VirtualPrivateCloud;

    /**
     * @var string <p>生产实例所使用的镜像<code>ID</code>。</p>
     */
    public $ImageId;

    /**
     * @var string <p>自动续费标识。取值范围：<br><li><code>NOTIFY_AND_MANUAL_RENEW</code>：表示通知即将过期，但不自动续费</li><li><code>NOTIFY_AND_AUTO_RENEW</code>：表示通知即将过期，而且自动续费</li><li><code>DISABLE_NOTIFY_AND_MANUAL_RENEW</code>：表示不通知即将过期，也不自动续费。</p></li><li>注意：后付费模式本项为null</li>
     */
    public $RenewFlag;

    /**
     * @var string <p>创建时间。按照<code>ISO8601</code>标准表示，并且使用<code>UTC</code>时间。格式为：<code>YYYY-MM-DDThh:mm:ssZ</code>。</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>到期时间。按照<code>ISO8601</code>标准表示，并且使用<code>UTC</code>时间。格式为：<code>YYYY-MM-DDThh:mm:ssZ</code>。注意：后付费模式本项为null</p>
     */
    public $ExpiredTime;

    /**
     * @var string <p>操作系统名称。</p>
     */
    public $OsName;

    /**
     * @var array <p>实例所属安全组。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的sgId字段来获取。</p>
     */
    public $SecurityGroupIds;

    /**
     * @var LoginSettings <p>实例登录设置。目前只返回实例所关联的密钥。</p>
     */
    public $LoginSettings;

    /**
     * @var string <p>实例状态。状态类型详见<a href="https://cloud.tencent.com/document/api/213/15753#InstanceStatus">实例状态表</a></p>
     */
    public $InstanceState;

    /**
     * @var array <p>实例关联的标签列表。</p>
     */
    public $Tags;

    /**
     * @var string <p>实例的关机计费模式。<br>取值范围：<br><li>KEEP_CHARGING：关机继续收费</li><li>STOP_CHARGING：关机停止收费</li><li>NOT_APPLICABLE：实例处于非关机状态或者不适用关机停止计费的条件</li></p>
     */
    public $StopChargingMode;

    /**
     * @var string <p>实例全局唯一ID</p>
     */
    public $Uuid;

    /**
     * @var string <p>实例的最新操作。例：StopInstances、ResetInstance。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestOperation;

    /**
     * @var string <p>实例的最新操作状态。取值范围：<br><li>SUCCESS：表示操作成功</li><li>OPERATING：表示操作执行中</li><li>FAILED：表示操作失败</li></p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestOperationState;

    /**
     * @var string <p>实例最新操作的唯一请求 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestOperationRequestId;

    /**
     * @var string <p>分散置放群组ID。</p>
     */
    public $DisasterRecoverGroupId;

    /**
     * @var array <p>实例的IPv6地址。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IPv6Addresses;

    /**
     * @var string <p>CAM角色名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CamRoleName;

    /**
     * @var string <p>高性能计算集群<code>ID</code>。</p>
     */
    public $HpcClusterId;

    /**
     * @var array <p>高性能计算集群<code>IP</code>列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RdmaIpAddresses;

    /**
     * @var string <p>实例所在的专用集群<code>ID</code>。</p>
     */
    public $DedicatedClusterId;

    /**
     * @var string <p>实例隔离类型。取值范围：<br><li>ARREAR：表示欠费隔离<br></li><li>EXPIRE：表示到期隔离<br></li><li>MANMADE：表示主动退还隔离<br></li><li>NOTISOLATED：表示未隔离<br></li></p>
     */
    public $IsolatedSource;

    /**
     * @var GPUInfo <p>GPU信息。如果是gpu类型子机，该值会返回GPU信息，如果是其他类型子机则不返回。</p>
     */
    public $GPUInfo;

    /**
     * @var string <p>实例的操作系统许可类型，默认为TencentCloud</p>
     */
    public $LicenseType;

    /**
     * @var boolean <p>实例销毁保护标志，表示是否允许通过api接口删除实例。取值范围：<br><li>true：表示开启实例保护，不允许通过api接口删除实例</li><li>false：表示关闭实例保护，允许通过api接口删除实例</li><br>默认取值：false。</p>
     */
    public $DisableApiTermination;

    /**
     * @var string <p>默认登录用户。</p>
     */
    public $DefaultLoginUser;

    /**
     * @var integer <p>默认登录端口。</p>
     */
    public $DefaultLoginPort;

    /**
     * @var string <p>实例的最新操作错误信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestOperationErrorMsg;

    /**
     * @var Metadata <p>自定义metadata，本参数对应创建 CVM时指定的Metadata 信息。<strong>注：内测中</strong>。</p>
     */
    public $Metadata;

    /**
     * @var array <p>实例绑定的公网IPv6地址。</p>
     */
    public $PublicIPv6Addresses;

    /**
     * @var CpuTopology <p>描述了实例CPU拓扑结构的相关信息。</p>
     */
    public $CpuTopology;

    /**
     * @param Placement $Placement <p>实例所在的位置。</p>
     * @param string $InstanceId <p>实例<code>ID</code>。</p>
     * @param string $InstanceType <p>实例机型。</p>
     * @param integer $CPU <p>实例的CPU核数，单位：核。</p>
     * @param integer $Memory <p>实例内存容量，单位：<code>GiB</code>。</p>
     * @param string $RestrictState <p>实例业务状态。取值范围：<br><li>NORMAL：表示正常状态的实例</li><li>EXPIRED：表示过期的实例</li><li>PROTECTIVELY_ISOLATED：表示被安全隔离的实例。</li></p>
     * @param string $InstanceName <p>实例名称。</p>
     * @param string $InstanceChargeType <p>实例<a href="https://cloud.tencent.com/document/product/213/2180">计费类型</a>。取值范围：<br><li>PREPAID：预付费，即包年包月</li><br><li>POSTPAID_BY_HOUR：按小时后付费</li><br><li>CDHPAID：独享子机（基于专用宿主机创建，宿主机部分的资源不收费）</li><br><li>SPOTPAID：竞价付费</li><br><li>CDCPAID：专用集群付费</li></p>
     * @param SystemDisk $SystemDisk <p>实例系统盘信息。</p>
     * @param array $DataDisks <p>实例数据盘信息。</p>
     * @param array $PrivateIpAddresses <p>实例主网卡的内网<code>IP</code>列表。</p>
     * @param array $PublicIpAddresses <p>实例主网卡的公网<code>IP</code>列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param InternetAccessible $InternetAccessible <p>实例带宽信息。</p>
     * @param VirtualPrivateCloud $VirtualPrivateCloud <p>实例所属虚拟私有网络信息。</p>
     * @param string $ImageId <p>生产实例所使用的镜像<code>ID</code>。</p>
     * @param string $RenewFlag <p>自动续费标识。取值范围：<br><li><code>NOTIFY_AND_MANUAL_RENEW</code>：表示通知即将过期，但不自动续费</li><li><code>NOTIFY_AND_AUTO_RENEW</code>：表示通知即将过期，而且自动续费</li><li><code>DISABLE_NOTIFY_AND_MANUAL_RENEW</code>：表示不通知即将过期，也不自动续费。</p></li><li>注意：后付费模式本项为null</li>
     * @param string $CreatedTime <p>创建时间。按照<code>ISO8601</code>标准表示，并且使用<code>UTC</code>时间。格式为：<code>YYYY-MM-DDThh:mm:ssZ</code>。</p>
     * @param string $ExpiredTime <p>到期时间。按照<code>ISO8601</code>标准表示，并且使用<code>UTC</code>时间。格式为：<code>YYYY-MM-DDThh:mm:ssZ</code>。注意：后付费模式本项为null</p>
     * @param string $OsName <p>操作系统名称。</p>
     * @param array $SecurityGroupIds <p>实例所属安全组。该参数可以通过调用 <a href="https://cloud.tencent.com/document/api/215/15808">DescribeSecurityGroups</a> 的返回值中的sgId字段来获取。</p>
     * @param LoginSettings $LoginSettings <p>实例登录设置。目前只返回实例所关联的密钥。</p>
     * @param string $InstanceState <p>实例状态。状态类型详见<a href="https://cloud.tencent.com/document/api/213/15753#InstanceStatus">实例状态表</a></p>
     * @param array $Tags <p>实例关联的标签列表。</p>
     * @param string $StopChargingMode <p>实例的关机计费模式。<br>取值范围：<br><li>KEEP_CHARGING：关机继续收费</li><li>STOP_CHARGING：关机停止收费</li><li>NOT_APPLICABLE：实例处于非关机状态或者不适用关机停止计费的条件</li></p>
     * @param string $Uuid <p>实例全局唯一ID</p>
     * @param string $LatestOperation <p>实例的最新操作。例：StopInstances、ResetInstance。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestOperationState <p>实例的最新操作状态。取值范围：<br><li>SUCCESS：表示操作成功</li><li>OPERATING：表示操作执行中</li><li>FAILED：表示操作失败</li></p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestOperationRequestId <p>实例最新操作的唯一请求 ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisasterRecoverGroupId <p>分散置放群组ID。</p>
     * @param array $IPv6Addresses <p>实例的IPv6地址。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CamRoleName <p>CAM角色名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HpcClusterId <p>高性能计算集群<code>ID</code>。</p>
     * @param array $RdmaIpAddresses <p>高性能计算集群<code>IP</code>列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DedicatedClusterId <p>实例所在的专用集群<code>ID</code>。</p>
     * @param string $IsolatedSource <p>实例隔离类型。取值范围：<br><li>ARREAR：表示欠费隔离<br></li><li>EXPIRE：表示到期隔离<br></li><li>MANMADE：表示主动退还隔离<br></li><li>NOTISOLATED：表示未隔离<br></li></p>
     * @param GPUInfo $GPUInfo <p>GPU信息。如果是gpu类型子机，该值会返回GPU信息，如果是其他类型子机则不返回。</p>
     * @param string $LicenseType <p>实例的操作系统许可类型，默认为TencentCloud</p>
     * @param boolean $DisableApiTermination <p>实例销毁保护标志，表示是否允许通过api接口删除实例。取值范围：<br><li>true：表示开启实例保护，不允许通过api接口删除实例</li><li>false：表示关闭实例保护，允许通过api接口删除实例</li><br>默认取值：false。</p>
     * @param string $DefaultLoginUser <p>默认登录用户。</p>
     * @param integer $DefaultLoginPort <p>默认登录端口。</p>
     * @param string $LatestOperationErrorMsg <p>实例的最新操作错误信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Metadata $Metadata <p>自定义metadata，本参数对应创建 CVM时指定的Metadata 信息。<strong>注：内测中</strong>。</p>
     * @param array $PublicIPv6Addresses <p>实例绑定的公网IPv6地址。</p>
     * @param CpuTopology $CpuTopology <p>描述了实例CPU拓扑结构的相关信息。</p>
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
        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("RestrictState",$param) and $param["RestrictState"] !== null) {
            $this->RestrictState = $param["RestrictState"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("VirtualPrivateCloud",$param) and $param["VirtualPrivateCloud"] !== null) {
            $this->VirtualPrivateCloud = new VirtualPrivateCloud();
            $this->VirtualPrivateCloud->deserialize($param["VirtualPrivateCloud"]);
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("StopChargingMode",$param) and $param["StopChargingMode"] !== null) {
            $this->StopChargingMode = $param["StopChargingMode"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("LatestOperation",$param) and $param["LatestOperation"] !== null) {
            $this->LatestOperation = $param["LatestOperation"];
        }

        if (array_key_exists("LatestOperationState",$param) and $param["LatestOperationState"] !== null) {
            $this->LatestOperationState = $param["LatestOperationState"];
        }

        if (array_key_exists("LatestOperationRequestId",$param) and $param["LatestOperationRequestId"] !== null) {
            $this->LatestOperationRequestId = $param["LatestOperationRequestId"];
        }

        if (array_key_exists("DisasterRecoverGroupId",$param) and $param["DisasterRecoverGroupId"] !== null) {
            $this->DisasterRecoverGroupId = $param["DisasterRecoverGroupId"];
        }

        if (array_key_exists("IPv6Addresses",$param) and $param["IPv6Addresses"] !== null) {
            $this->IPv6Addresses = $param["IPv6Addresses"];
        }

        if (array_key_exists("CamRoleName",$param) and $param["CamRoleName"] !== null) {
            $this->CamRoleName = $param["CamRoleName"];
        }

        if (array_key_exists("HpcClusterId",$param) and $param["HpcClusterId"] !== null) {
            $this->HpcClusterId = $param["HpcClusterId"];
        }

        if (array_key_exists("RdmaIpAddresses",$param) and $param["RdmaIpAddresses"] !== null) {
            $this->RdmaIpAddresses = $param["RdmaIpAddresses"];
        }

        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }

        if (array_key_exists("IsolatedSource",$param) and $param["IsolatedSource"] !== null) {
            $this->IsolatedSource = $param["IsolatedSource"];
        }

        if (array_key_exists("GPUInfo",$param) and $param["GPUInfo"] !== null) {
            $this->GPUInfo = new GPUInfo();
            $this->GPUInfo->deserialize($param["GPUInfo"]);
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("DisableApiTermination",$param) and $param["DisableApiTermination"] !== null) {
            $this->DisableApiTermination = $param["DisableApiTermination"];
        }

        if (array_key_exists("DefaultLoginUser",$param) and $param["DefaultLoginUser"] !== null) {
            $this->DefaultLoginUser = $param["DefaultLoginUser"];
        }

        if (array_key_exists("DefaultLoginPort",$param) and $param["DefaultLoginPort"] !== null) {
            $this->DefaultLoginPort = $param["DefaultLoginPort"];
        }

        if (array_key_exists("LatestOperationErrorMsg",$param) and $param["LatestOperationErrorMsg"] !== null) {
            $this->LatestOperationErrorMsg = $param["LatestOperationErrorMsg"];
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = new Metadata();
            $this->Metadata->deserialize($param["Metadata"]);
        }

        if (array_key_exists("PublicIPv6Addresses",$param) and $param["PublicIPv6Addresses"] !== null) {
            $this->PublicIPv6Addresses = $param["PublicIPv6Addresses"];
        }

        if (array_key_exists("CpuTopology",$param) and $param["CpuTopology"] !== null) {
            $this->CpuTopology = new CpuTopology();
            $this->CpuTopology->deserialize($param["CpuTopology"]);
        }
    }
}
