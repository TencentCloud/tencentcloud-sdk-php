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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getLoadBalancerId() 获取负载均衡实例 ID。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID。
 * @method string getLoadBalancerName() 获取负载均衡实例的名称。
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置负载均衡实例的名称。
 * @method string getLoadBalancerType() 获取负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
 * @method integer getForward() 获取负载均衡类型标识，1：负载均衡，0：传统型负载均衡。
 * @method void setForward(integer $Forward) 设置负载均衡类型标识，1：负载均衡，0：传统型负载均衡。
 * @method string getDomain() 获取负载均衡实例的域名，仅公网传统型负载均衡实例才提供该字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置负载均衡实例的域名，仅公网传统型负载均衡实例才提供该字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLoadBalancerVips() 获取负载均衡实例的 VIP 列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerVips(array $LoadBalancerVips) 设置负载均衡实例的 VIP 列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取负载均衡实例的状态，包括
0：创建中，1：正常运行。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置负载均衡实例的状态，包括
0：创建中，1：正常运行。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取负载均衡实例的创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置负载均衡实例的创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusTime() 获取负载均衡实例的上次状态转换时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusTime(string $StatusTime) 设置负载均衡实例的上次状态转换时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProjectId() 获取负载均衡实例所属的项目 ID， 0 表示默认项目。
 * @method void setProjectId(integer $ProjectId) 设置负载均衡实例所属的项目 ID， 0 表示默认项目。
 * @method string getVpcId() 获取私有网络的 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置私有网络的 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOpenBgp() 获取高防 LB 的标识，1：高防负载均衡 0：非高防负载均衡。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenBgp(integer $OpenBgp) 设置高防 LB 的标识，1：高防负载均衡 0：非高防负载均衡。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSnat() 获取在 2016 年 12 月份之前的传统型内网负载均衡都是开启了 snat 的。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnat(boolean $Snat) 设置在 2016 年 12 月份之前的传统型内网负载均衡都是开启了 snat 的。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsolation() 获取0：表示未被隔离，1：表示被隔离。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolation(integer $Isolation) 设置0：表示未被隔离，1：表示被隔离。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLog() 获取用户开启日志的信息，日志只有公网属性创建了 HTTP 、HTTPS 监听器的负载均衡才会有日志。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLog(string $Log) 设置用户开启日志的信息，日志只有公网属性创建了 HTTP 、HTTPS 监听器的负载均衡才会有日志。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取负载均衡实例所在的子网（仅对内网VPC型LB有意义）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置负载均衡实例所在的子网（仅对内网VPC型LB有意义）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取负载均衡实例的标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置负载均衡实例的标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSecureGroups() 获取负载均衡实例的安全组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecureGroups(array $SecureGroups) 设置负载均衡实例的安全组
注意：此字段可能返回 null，表示取不到有效值。
 * @method TargetRegionInfo getTargetRegionInfo() 获取负载均衡实例绑定的后端设备的基本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetRegionInfo(TargetRegionInfo $TargetRegionInfo) 设置负载均衡实例绑定的后端设备的基本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAnycastZone() 获取anycast负载均衡的发布域，对于非anycast的负载均衡，此字段返回为空字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnycastZone(string $AnycastZone) 设置anycast负载均衡的发布域，对于非anycast的负载均衡，此字段返回为空字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddressIPVersion() 获取IP版本，ipv4 | ipv6
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddressIPVersion(string $AddressIPVersion) 设置IP版本，ipv4 | ipv6
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNumericalVpcId() 获取数值形式的私有网络 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumericalVpcId(integer $NumericalVpcId) 设置数值形式的私有网络 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVipIsp() 获取负载均衡IP地址所属的ISP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVipIsp(string $VipIsp) 设置负载均衡IP地址所属的ISP
注意：此字段可能返回 null，表示取不到有效值。
 * @method ZoneInfo getMasterZone() 获取主可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMasterZone(ZoneInfo $MasterZone) 设置主可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBackupZoneSet() 获取备可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupZoneSet(array $BackupZoneSet) 设置备可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsolatedTime() 获取负载均衡实例被隔离的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolatedTime(string $IsolatedTime) 设置负载均衡实例被隔离的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取负载均衡实例的过期时间，仅对预付费负载均衡生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置负载均衡实例的过期时间，仅对预付费负载均衡生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeType() 获取负载均衡实例的计费类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeType(string $ChargeType) 设置负载均衡实例的计费类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method InternetAccessible getNetworkAttributes() 获取负载均衡实例的网络属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkAttributes(InternetAccessible $NetworkAttributes) 设置负载均衡实例的网络属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method LBChargePrepaid getPrepaidAttributes() 获取负载均衡实例的预付费相关属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrepaidAttributes(LBChargePrepaid $PrepaidAttributes) 设置负载均衡实例的预付费相关属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogSetId() 获取负载均衡日志服务(CLS)的日志集ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogSetId(string $LogSetId) 设置负载均衡日志服务(CLS)的日志集ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogTopicId() 获取负载均衡日志服务(CLS)的日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogTopicId(string $LogTopicId) 设置负载均衡日志服务(CLS)的日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddressIPv6() 获取负载均衡实例的IPv6地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddressIPv6(string $AddressIPv6) 设置负载均衡实例的IPv6地址
注意：此字段可能返回 null，表示取不到有效值。
 */

/**
 *负载均衡实例的信息
 */
class LoadBalancer extends AbstractModel
{
    /**
     * @var string 负载均衡实例 ID。
     */
    public $LoadBalancerId;

    /**
     * @var string 负载均衡实例的名称。
     */
    public $LoadBalancerName;

    /**
     * @var string 负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
     */
    public $LoadBalancerType;

    /**
     * @var integer 负载均衡类型标识，1：负载均衡，0：传统型负载均衡。
     */
    public $Forward;

    /**
     * @var string 负载均衡实例的域名，仅公网传统型负载均衡实例才提供该字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var array 负载均衡实例的 VIP 列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerVips;

    /**
     * @var integer 负载均衡实例的状态，包括
0：创建中，1：正常运行。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 负载均衡实例的创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 负载均衡实例的上次状态转换时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusTime;

    /**
     * @var integer 负载均衡实例所属的项目 ID， 0 表示默认项目。
     */
    public $ProjectId;

    /**
     * @var string 私有网络的 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var integer 高防 LB 的标识，1：高防负载均衡 0：非高防负载均衡。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpenBgp;

    /**
     * @var boolean 在 2016 年 12 月份之前的传统型内网负载均衡都是开启了 snat 的。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Snat;

    /**
     * @var integer 0：表示未被隔离，1：表示被隔离。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Isolation;

    /**
     * @var string 用户开启日志的信息，日志只有公网属性创建了 HTTP 、HTTPS 监听器的负载均衡才会有日志。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Log;

    /**
     * @var string 负载均衡实例所在的子网（仅对内网VPC型LB有意义）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var array 负载均衡实例的标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var array 负载均衡实例的安全组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecureGroups;

    /**
     * @var TargetRegionInfo 负载均衡实例绑定的后端设备的基本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetRegionInfo;

    /**
     * @var string anycast负载均衡的发布域，对于非anycast的负载均衡，此字段返回为空字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnycastZone;

    /**
     * @var string IP版本，ipv4 | ipv6
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddressIPVersion;

    /**
     * @var integer 数值形式的私有网络 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NumericalVpcId;

    /**
     * @var string 负载均衡IP地址所属的ISP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VipIsp;

    /**
     * @var ZoneInfo 主可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MasterZone;

    /**
     * @var array 备可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupZoneSet;

    /**
     * @var string 负载均衡实例被隔离的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolatedTime;

    /**
     * @var string 负载均衡实例的过期时间，仅对预付费负载均衡生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string 负载均衡实例的计费类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeType;

    /**
     * @var InternetAccessible 负载均衡实例的网络属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkAttributes;

    /**
     * @var LBChargePrepaid 负载均衡实例的预付费相关属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrepaidAttributes;

    /**
     * @var string 负载均衡日志服务(CLS)的日志集ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogSetId;

    /**
     * @var string 负载均衡日志服务(CLS)的日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogTopicId;

    /**
     * @var string 负载均衡实例的IPv6地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddressIPv6;
    /**
     * @param string $LoadBalancerId 负载均衡实例 ID。
     * @param string $LoadBalancerName 负载均衡实例的名称。
     * @param string $LoadBalancerType 负载均衡实例的网络类型：
OPEN：公网属性， INTERNAL：内网属性。
     * @param integer $Forward 负载均衡类型标识，1：负载均衡，0：传统型负载均衡。
     * @param string $Domain 负载均衡实例的域名，仅公网传统型负载均衡实例才提供该字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LoadBalancerVips 负载均衡实例的 VIP 列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 负载均衡实例的状态，包括
0：创建中，1：正常运行。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 负载均衡实例的创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusTime 负载均衡实例的上次状态转换时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProjectId 负载均衡实例所属的项目 ID， 0 表示默认项目。
     * @param string $VpcId 私有网络的 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OpenBgp 高防 LB 的标识，1：高防负载均衡 0：非高防负载均衡。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Snat 在 2016 年 12 月份之前的传统型内网负载均衡都是开启了 snat 的。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Isolation 0：表示未被隔离，1：表示被隔离。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Log 用户开启日志的信息，日志只有公网属性创建了 HTTP 、HTTPS 监听器的负载均衡才会有日志。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 负载均衡实例所在的子网（仅对内网VPC型LB有意义）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 负载均衡实例的标签信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SecureGroups 负载均衡实例的安全组
注意：此字段可能返回 null，表示取不到有效值。
     * @param TargetRegionInfo $TargetRegionInfo 负载均衡实例绑定的后端设备的基本信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AnycastZone anycast负载均衡的发布域，对于非anycast的负载均衡，此字段返回为空字符串
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AddressIPVersion IP版本，ipv4 | ipv6
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NumericalVpcId 数值形式的私有网络 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VipIsp 负载均衡IP地址所属的ISP
注意：此字段可能返回 null，表示取不到有效值。
     * @param ZoneInfo $MasterZone 主可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BackupZoneSet 备可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsolatedTime 负载均衡实例被隔离的时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 负载均衡实例的过期时间，仅对预付费负载均衡生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeType 负载均衡实例的计费类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param InternetAccessible $NetworkAttributes 负载均衡实例的网络属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param LBChargePrepaid $PrepaidAttributes 负载均衡实例的预付费相关属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogSetId 负载均衡日志服务(CLS)的日志集ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogTopicId 负载均衡日志服务(CLS)的日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AddressIPv6 负载均衡实例的IPv6地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("Forward",$param) and $param["Forward"] !== null) {
            $this->Forward = $param["Forward"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("LoadBalancerVips",$param) and $param["LoadBalancerVips"] !== null) {
            $this->LoadBalancerVips = $param["LoadBalancerVips"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StatusTime",$param) and $param["StatusTime"] !== null) {
            $this->StatusTime = $param["StatusTime"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("OpenBgp",$param) and $param["OpenBgp"] !== null) {
            $this->OpenBgp = $param["OpenBgp"];
        }

        if (array_key_exists("Snat",$param) and $param["Snat"] !== null) {
            $this->Snat = $param["Snat"];
        }

        if (array_key_exists("Isolation",$param) and $param["Isolation"] !== null) {
            $this->Isolation = $param["Isolation"];
        }

        if (array_key_exists("Log",$param) and $param["Log"] !== null) {
            $this->Log = $param["Log"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SecureGroups",$param) and $param["SecureGroups"] !== null) {
            $this->SecureGroups = $param["SecureGroups"];
        }

        if (array_key_exists("TargetRegionInfo",$param) and $param["TargetRegionInfo"] !== null) {
            $this->TargetRegionInfo = new TargetRegionInfo();
            $this->TargetRegionInfo->deserialize($param["TargetRegionInfo"]);
        }

        if (array_key_exists("AnycastZone",$param) and $param["AnycastZone"] !== null) {
            $this->AnycastZone = $param["AnycastZone"];
        }

        if (array_key_exists("AddressIPVersion",$param) and $param["AddressIPVersion"] !== null) {
            $this->AddressIPVersion = $param["AddressIPVersion"];
        }

        if (array_key_exists("NumericalVpcId",$param) and $param["NumericalVpcId"] !== null) {
            $this->NumericalVpcId = $param["NumericalVpcId"];
        }

        if (array_key_exists("VipIsp",$param) and $param["VipIsp"] !== null) {
            $this->VipIsp = $param["VipIsp"];
        }

        if (array_key_exists("MasterZone",$param) and $param["MasterZone"] !== null) {
            $this->MasterZone = new ZoneInfo();
            $this->MasterZone->deserialize($param["MasterZone"]);
        }

        if (array_key_exists("BackupZoneSet",$param) and $param["BackupZoneSet"] !== null) {
            $this->BackupZoneSet = [];
            foreach ($param["BackupZoneSet"] as $key => $value){
                $obj = new ZoneInfo();
                $obj->deserialize($value);
                array_push($this->BackupZoneSet, $obj);
            }
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("NetworkAttributes",$param) and $param["NetworkAttributes"] !== null) {
            $this->NetworkAttributes = new InternetAccessible();
            $this->NetworkAttributes->deserialize($param["NetworkAttributes"]);
        }

        if (array_key_exists("PrepaidAttributes",$param) and $param["PrepaidAttributes"] !== null) {
            $this->PrepaidAttributes = new LBChargePrepaid();
            $this->PrepaidAttributes->deserialize($param["PrepaidAttributes"]);
        }

        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("LogTopicId",$param) and $param["LogTopicId"] !== null) {
            $this->LogTopicId = $param["LogTopicId"];
        }

        if (array_key_exists("AddressIPv6",$param) and $param["AddressIPv6"] !== null) {
            $this->AddressIPv6 = $param["AddressIPv6"];
        }
    }
}
