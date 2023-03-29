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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstanceDetail返回参数结构体
 *
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method integer getStatus() 获取实例状态
 * @method void setStatus(integer $Status) 设置实例状态
 * @method string getStatusDesc() 获取实例目前运行状态描述
 * @method void setStatusDesc(string $StatusDesc) 设置实例目前运行状态描述
 * @method string getVip() 获取内网 IP 地址
 * @method void setVip(string $Vip) 设置内网 IP 地址
 * @method integer getVport() 获取内网端口
 * @method void setVport(integer $Vport) 设置内网端口
 * @method integer getIsTmp() 获取是否临时实例，0为否，非0为是
 * @method void setIsTmp(integer $IsTmp) 设置是否临时实例，0为否，非0为是
 * @method integer getNodeCount() 获取节点数，2为一主一从，3为一主二从
 * @method void setNodeCount(integer $NodeCount) 设置节点数，2为一主一从，3为一主二从
 * @method string getRegion() 获取实例所在地域名称，如 ap-shanghai
 * @method void setRegion(string $Region) 设置实例所在地域名称，如 ap-shanghai
 * @method string getZone() 获取实例所在可用区名称，如 ap-shanghai-1
 * @method void setZone(string $Zone) 设置实例所在可用区名称，如 ap-shanghai-1
 * @method string getVpcId() 获取字符串型的私有网络Id
 * @method void setVpcId(string $VpcId) 设置字符串型的私有网络Id
 * @method string getSubnetId() 获取字符串型的私有网络子网Id
 * @method void setSubnetId(string $SubnetId) 设置字符串型的私有网络子网Id
 * @method integer getWanStatus() 获取外网状态，0-未开通；1-已开通；2-关闭；3-开通中；4-关闭中
 * @method void setWanStatus(integer $WanStatus) 设置外网状态，0-未开通；1-已开通；2-关闭；3-开通中；4-关闭中
 * @method string getWanDomain() 获取外网访问的域名，公网可解析
 * @method void setWanDomain(string $WanDomain) 设置外网访问的域名，公网可解析
 * @method string getWanVip() 获取外网 IP 地址，公网可访问
 * @method void setWanVip(string $WanVip) 设置外网 IP 地址，公网可访问
 * @method integer getWanPort() 获取外网端口
 * @method void setWanPort(integer $WanPort) 设置外网端口
 * @method integer getProjectId() 获取实例所属项目 Id
 * @method void setProjectId(integer $ProjectId) 设置实例所属项目 Id
 * @method string getTdsqlVersion() 获取TDSQL 版本信息
 * @method void setTdsqlVersion(string $TdsqlVersion) 设置TDSQL 版本信息
 * @method integer getMemory() 获取实例内存大小，单位 GB
 * @method void setMemory(integer $Memory) 设置实例内存大小，单位 GB
 * @method integer getStorage() 获取实例存储大小，单位 GB
 * @method void setStorage(integer $Storage) 设置实例存储大小，单位 GB
 * @method string getMasterZone() 获取主可用区，如 ap-shanghai-1
 * @method void setMasterZone(string $MasterZone) 设置主可用区，如 ap-shanghai-1
 * @method array getSlaveZones() 获取从可用区列表，如 [ap-shanghai-2]
 * @method void setSlaveZones(array $SlaveZones) 设置从可用区列表，如 [ap-shanghai-2]
 * @method integer getAutoRenewFlag() 获取自动续费标志：0 否，1 是
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标志：0 否，1 是
 * @method string getExclusterId() 获取独享集群Id，普通实例为空
 * @method void setExclusterId(string $ExclusterId) 设置独享集群Id，普通实例为空
 * @method string getPayMode() 获取付费模式：prepaid 表示预付费
 * @method void setPayMode(string $PayMode) 设置付费模式：prepaid 表示预付费
 * @method string getCreateTime() 获取实例创建时间，格式为 2006-01-02 15:04:05
 * @method void setCreateTime(string $CreateTime) 设置实例创建时间，格式为 2006-01-02 15:04:05
 * @method boolean getIsAuditSupported() 获取实例是否支持审计
 * @method void setIsAuditSupported(boolean $IsAuditSupported) 设置实例是否支持审计
 * @method string getPeriodEndTime() 获取实例到期时间，格式为 2006-01-02 15:04:05
 * @method void setPeriodEndTime(string $PeriodEndTime) 设置实例到期时间，格式为 2006-01-02 15:04:05
 * @method string getMachine() 获取机型信息
 * @method void setMachine(string $Machine) 设置机型信息
 * @method string getStorageUsage() 获取存储空间使用率
 * @method void setStorageUsage(string $StorageUsage) 设置存储空间使用率
 * @method integer getLogStorage() 获取日志存储空间大小，单位 GB
 * @method void setLogStorage(integer $LogStorage) 设置日志存储空间大小，单位 GB
 * @method integer getIsEncryptSupported() 获取是否支持数据加密。1-支持；0-不支持
 * @method void setIsEncryptSupported(integer $IsEncryptSupported) 设置是否支持数据加密。1-支持；0-不支持
 * @method string getVip6() 获取内网IPv6
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVip6(string $Vip6) 设置内网IPv6
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpu() 获取实例Cpu核数
 * @method void setCpu(integer $Cpu) 设置实例Cpu核数
 * @method integer getPid() 获取产品类型ID
 * @method void setPid(integer $Pid) 设置产品类型ID
 * @method integer getQps() 获取最大QPS
 * @method void setQps(integer $Qps) 设置最大QPS
 * @method integer getIpv6Flag() 获取是否支持IPv6
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpv6Flag(integer $Ipv6Flag) 设置是否支持IPv6
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWanVipv6() 获取外网IPv6地址，公网可访问
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWanVipv6(string $WanVipv6) 设置外网IPv6地址，公网可访问
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWanStatusIpv6() 获取外网状态，0-未开通；1-已开通；2-关闭；3-开通中；4-关闭中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWanStatusIpv6(integer $WanStatusIpv6) 设置外网状态，0-未开通；1-已开通；2-关闭；3-开通中；4-关闭中
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWanPortIpv6() 获取外网IPv6端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWanPortIpv6(integer $WanPortIpv6) 设置外网IPv6端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDbEngine() 获取数据库引擎
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbEngine(string $DbEngine) 设置数据库引擎
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDbVersion() 获取数据库版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbVersion(string $DbVersion) 设置数据库版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceTags() 获取标签信息
 * @method void setResourceTags(array $ResourceTags) 设置标签信息
 * @method integer getDcnFlag() 获取DCN标志，0-无，1-主实例，2-灾备实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDcnFlag(integer $DcnFlag) 设置DCN标志，0-无，1-主实例，2-灾备实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDcnStatus() 获取DCN状态，0-无，1-创建中，2-同步中，3-已断开
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDcnStatus(integer $DcnStatus) 设置DCN状态，0-无，1-创建中，2-同步中，3-已断开
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDcnDstNum() 获取DCN灾备实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDcnDstNum(integer $DcnDstNum) 设置DCN灾备实例数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceType() 获取1： 主实例（独享型）, 2: 主实例, 3： 灾备实例, 4： 灾备实例（独享型）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(integer $InstanceType) 设置1： 主实例（独享型）, 2: 主实例, 3： 灾备实例, 4： 灾备实例（独享型）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNodesInfo() 获取实例的各个DB节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodesInfo(array $NodesInfo) 设置实例的各个DB节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsMaxUserConnectionsSupported() 获取实例是否支持设置用户连接数限制，内核为10.1暂不支持。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsMaxUserConnectionsSupported(boolean $IsMaxUserConnectionsSupported) 设置实例是否支持设置用户连接数限制，内核为10.1暂不支持。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDbVersionId() 获取对外显示的数据库版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbVersionId(string $DbVersionId) 设置对外显示的数据库版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEncryptStatus() 获取加密状态, 0-未开启，1-已开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncryptStatus(integer $EncryptStatus) 设置加密状态, 0-未开启，1-已开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method DCNReplicaConfig getReplicaConfig() 获取DCN的配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicaConfig(DCNReplicaConfig $ReplicaConfig) 设置DCN的配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method DCNReplicaStatus getReplicaStatus() 获取DCN的运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicaStatus(DCNReplicaStatus $ReplicaStatus) 设置DCN的运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExclusterType() 获取独享集群类型，0:公有云, 1:金融围笼, 2:CDC集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExclusterType(integer $ExclusterType) 设置独享集群类型，0:公有云, 1:金融围笼, 2:CDC集群
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRsAccessStrategy() 获取VPC就近访问
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRsAccessStrategy(integer $RsAccessStrategy) 设置VPC就近访问
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBInstanceDetailResponse extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var integer 实例状态
     */
    public $Status;

    /**
     * @var string 实例目前运行状态描述
     */
    public $StatusDesc;

    /**
     * @var string 内网 IP 地址
     */
    public $Vip;

    /**
     * @var integer 内网端口
     */
    public $Vport;

    /**
     * @var integer 是否临时实例，0为否，非0为是
     */
    public $IsTmp;

    /**
     * @var integer 节点数，2为一主一从，3为一主二从
     */
    public $NodeCount;

    /**
     * @var string 实例所在地域名称，如 ap-shanghai
     */
    public $Region;

    /**
     * @var string 实例所在可用区名称，如 ap-shanghai-1
     */
    public $Zone;

    /**
     * @var string 字符串型的私有网络Id
     */
    public $VpcId;

    /**
     * @var string 字符串型的私有网络子网Id
     */
    public $SubnetId;

    /**
     * @var integer 外网状态，0-未开通；1-已开通；2-关闭；3-开通中；4-关闭中
     */
    public $WanStatus;

    /**
     * @var string 外网访问的域名，公网可解析
     */
    public $WanDomain;

    /**
     * @var string 外网 IP 地址，公网可访问
     */
    public $WanVip;

    /**
     * @var integer 外网端口
     */
    public $WanPort;

    /**
     * @var integer 实例所属项目 Id
     */
    public $ProjectId;

    /**
     * @var string TDSQL 版本信息
     */
    public $TdsqlVersion;

    /**
     * @var integer 实例内存大小，单位 GB
     */
    public $Memory;

    /**
     * @var integer 实例存储大小，单位 GB
     */
    public $Storage;

    /**
     * @var string 主可用区，如 ap-shanghai-1
     */
    public $MasterZone;

    /**
     * @var array 从可用区列表，如 [ap-shanghai-2]
     */
    public $SlaveZones;

    /**
     * @var integer 自动续费标志：0 否，1 是
     */
    public $AutoRenewFlag;

    /**
     * @var string 独享集群Id，普通实例为空
     */
    public $ExclusterId;

    /**
     * @var string 付费模式：prepaid 表示预付费
     */
    public $PayMode;

    /**
     * @var string 实例创建时间，格式为 2006-01-02 15:04:05
     */
    public $CreateTime;

    /**
     * @var boolean 实例是否支持审计
     */
    public $IsAuditSupported;

    /**
     * @var string 实例到期时间，格式为 2006-01-02 15:04:05
     */
    public $PeriodEndTime;

    /**
     * @var string 机型信息
     */
    public $Machine;

    /**
     * @var string 存储空间使用率
     */
    public $StorageUsage;

    /**
     * @var integer 日志存储空间大小，单位 GB
     */
    public $LogStorage;

    /**
     * @var integer 是否支持数据加密。1-支持；0-不支持
     */
    public $IsEncryptSupported;

    /**
     * @var string 内网IPv6
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vip6;

    /**
     * @var integer 实例Cpu核数
     */
    public $Cpu;

    /**
     * @var integer 产品类型ID
     */
    public $Pid;

    /**
     * @var integer 最大QPS
     */
    public $Qps;

    /**
     * @var integer 是否支持IPv6
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ipv6Flag;

    /**
     * @var string 外网IPv6地址，公网可访问
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WanVipv6;

    /**
     * @var integer 外网状态，0-未开通；1-已开通；2-关闭；3-开通中；4-关闭中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WanStatusIpv6;

    /**
     * @var integer 外网IPv6端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WanPortIpv6;

    /**
     * @var string 数据库引擎
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbEngine;

    /**
     * @var string 数据库版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbVersion;

    /**
     * @var array 标签信息
     */
    public $ResourceTags;

    /**
     * @var integer DCN标志，0-无，1-主实例，2-灾备实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DcnFlag;

    /**
     * @var integer DCN状态，0-无，1-创建中，2-同步中，3-已断开
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DcnStatus;

    /**
     * @var integer DCN灾备实例数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DcnDstNum;

    /**
     * @var integer 1： 主实例（独享型）, 2: 主实例, 3： 灾备实例, 4： 灾备实例（独享型）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var array 实例的各个DB节点信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodesInfo;

    /**
     * @var boolean 实例是否支持设置用户连接数限制，内核为10.1暂不支持。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsMaxUserConnectionsSupported;

    /**
     * @var string 对外显示的数据库版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbVersionId;

    /**
     * @var integer 加密状态, 0-未开启，1-已开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EncryptStatus;

    /**
     * @var DCNReplicaConfig DCN的配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplicaConfig;

    /**
     * @var DCNReplicaStatus DCN的运行状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplicaStatus;

    /**
     * @var integer 独享集群类型，0:公有云, 1:金融围笼, 2:CDC集群
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExclusterType;

    /**
     * @var integer VPC就近访问
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RsAccessStrategy;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceId 实例Id
     * @param string $InstanceName 实例名称
     * @param integer $Status 实例状态
     * @param string $StatusDesc 实例目前运行状态描述
     * @param string $Vip 内网 IP 地址
     * @param integer $Vport 内网端口
     * @param integer $IsTmp 是否临时实例，0为否，非0为是
     * @param integer $NodeCount 节点数，2为一主一从，3为一主二从
     * @param string $Region 实例所在地域名称，如 ap-shanghai
     * @param string $Zone 实例所在可用区名称，如 ap-shanghai-1
     * @param string $VpcId 字符串型的私有网络Id
     * @param string $SubnetId 字符串型的私有网络子网Id
     * @param integer $WanStatus 外网状态，0-未开通；1-已开通；2-关闭；3-开通中；4-关闭中
     * @param string $WanDomain 外网访问的域名，公网可解析
     * @param string $WanVip 外网 IP 地址，公网可访问
     * @param integer $WanPort 外网端口
     * @param integer $ProjectId 实例所属项目 Id
     * @param string $TdsqlVersion TDSQL 版本信息
     * @param integer $Memory 实例内存大小，单位 GB
     * @param integer $Storage 实例存储大小，单位 GB
     * @param string $MasterZone 主可用区，如 ap-shanghai-1
     * @param array $SlaveZones 从可用区列表，如 [ap-shanghai-2]
     * @param integer $AutoRenewFlag 自动续费标志：0 否，1 是
     * @param string $ExclusterId 独享集群Id，普通实例为空
     * @param string $PayMode 付费模式：prepaid 表示预付费
     * @param string $CreateTime 实例创建时间，格式为 2006-01-02 15:04:05
     * @param boolean $IsAuditSupported 实例是否支持审计
     * @param string $PeriodEndTime 实例到期时间，格式为 2006-01-02 15:04:05
     * @param string $Machine 机型信息
     * @param string $StorageUsage 存储空间使用率
     * @param integer $LogStorage 日志存储空间大小，单位 GB
     * @param integer $IsEncryptSupported 是否支持数据加密。1-支持；0-不支持
     * @param string $Vip6 内网IPv6
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Cpu 实例Cpu核数
     * @param integer $Pid 产品类型ID
     * @param integer $Qps 最大QPS
     * @param integer $Ipv6Flag 是否支持IPv6
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WanVipv6 外网IPv6地址，公网可访问
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WanStatusIpv6 外网状态，0-未开通；1-已开通；2-关闭；3-开通中；4-关闭中
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WanPortIpv6 外网IPv6端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DbEngine 数据库引擎
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DbVersion 数据库版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceTags 标签信息
     * @param integer $DcnFlag DCN标志，0-无，1-主实例，2-灾备实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DcnStatus DCN状态，0-无，1-创建中，2-同步中，3-已断开
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DcnDstNum DCN灾备实例数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceType 1： 主实例（独享型）, 2: 主实例, 3： 灾备实例, 4： 灾备实例（独享型）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NodesInfo 实例的各个DB节点信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsMaxUserConnectionsSupported 实例是否支持设置用户连接数限制，内核为10.1暂不支持。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DbVersionId 对外显示的数据库版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EncryptStatus 加密状态, 0-未开启，1-已开启
注意：此字段可能返回 null，表示取不到有效值。
     * @param DCNReplicaConfig $ReplicaConfig DCN的配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param DCNReplicaStatus $ReplicaStatus DCN的运行状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExclusterType 独享集群类型，0:公有云, 1:金融围笼, 2:CDC集群
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RsAccessStrategy VPC就近访问
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("IsTmp",$param) and $param["IsTmp"] !== null) {
            $this->IsTmp = $param["IsTmp"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("WanStatus",$param) and $param["WanStatus"] !== null) {
            $this->WanStatus = $param["WanStatus"];
        }

        if (array_key_exists("WanDomain",$param) and $param["WanDomain"] !== null) {
            $this->WanDomain = $param["WanDomain"];
        }

        if (array_key_exists("WanVip",$param) and $param["WanVip"] !== null) {
            $this->WanVip = $param["WanVip"];
        }

        if (array_key_exists("WanPort",$param) and $param["WanPort"] !== null) {
            $this->WanPort = $param["WanPort"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TdsqlVersion",$param) and $param["TdsqlVersion"] !== null) {
            $this->TdsqlVersion = $param["TdsqlVersion"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("MasterZone",$param) and $param["MasterZone"] !== null) {
            $this->MasterZone = $param["MasterZone"];
        }

        if (array_key_exists("SlaveZones",$param) and $param["SlaveZones"] !== null) {
            $this->SlaveZones = $param["SlaveZones"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("ExclusterId",$param) and $param["ExclusterId"] !== null) {
            $this->ExclusterId = $param["ExclusterId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IsAuditSupported",$param) and $param["IsAuditSupported"] !== null) {
            $this->IsAuditSupported = $param["IsAuditSupported"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("Machine",$param) and $param["Machine"] !== null) {
            $this->Machine = $param["Machine"];
        }

        if (array_key_exists("StorageUsage",$param) and $param["StorageUsage"] !== null) {
            $this->StorageUsage = $param["StorageUsage"];
        }

        if (array_key_exists("LogStorage",$param) and $param["LogStorage"] !== null) {
            $this->LogStorage = $param["LogStorage"];
        }

        if (array_key_exists("IsEncryptSupported",$param) and $param["IsEncryptSupported"] !== null) {
            $this->IsEncryptSupported = $param["IsEncryptSupported"];
        }

        if (array_key_exists("Vip6",$param) and $param["Vip6"] !== null) {
            $this->Vip6 = $param["Vip6"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("Ipv6Flag",$param) and $param["Ipv6Flag"] !== null) {
            $this->Ipv6Flag = $param["Ipv6Flag"];
        }

        if (array_key_exists("WanVipv6",$param) and $param["WanVipv6"] !== null) {
            $this->WanVipv6 = $param["WanVipv6"];
        }

        if (array_key_exists("WanStatusIpv6",$param) and $param["WanStatusIpv6"] !== null) {
            $this->WanStatusIpv6 = $param["WanStatusIpv6"];
        }

        if (array_key_exists("WanPortIpv6",$param) and $param["WanPortIpv6"] !== null) {
            $this->WanPortIpv6 = $param["WanPortIpv6"];
        }

        if (array_key_exists("DbEngine",$param) and $param["DbEngine"] !== null) {
            $this->DbEngine = $param["DbEngine"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("DcnFlag",$param) and $param["DcnFlag"] !== null) {
            $this->DcnFlag = $param["DcnFlag"];
        }

        if (array_key_exists("DcnStatus",$param) and $param["DcnStatus"] !== null) {
            $this->DcnStatus = $param["DcnStatus"];
        }

        if (array_key_exists("DcnDstNum",$param) and $param["DcnDstNum"] !== null) {
            $this->DcnDstNum = $param["DcnDstNum"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("NodesInfo",$param) and $param["NodesInfo"] !== null) {
            $this->NodesInfo = [];
            foreach ($param["NodesInfo"] as $key => $value){
                $obj = new NodeInfo();
                $obj->deserialize($value);
                array_push($this->NodesInfo, $obj);
            }
        }

        if (array_key_exists("IsMaxUserConnectionsSupported",$param) and $param["IsMaxUserConnectionsSupported"] !== null) {
            $this->IsMaxUserConnectionsSupported = $param["IsMaxUserConnectionsSupported"];
        }

        if (array_key_exists("DbVersionId",$param) and $param["DbVersionId"] !== null) {
            $this->DbVersionId = $param["DbVersionId"];
        }

        if (array_key_exists("EncryptStatus",$param) and $param["EncryptStatus"] !== null) {
            $this->EncryptStatus = $param["EncryptStatus"];
        }

        if (array_key_exists("ReplicaConfig",$param) and $param["ReplicaConfig"] !== null) {
            $this->ReplicaConfig = new DCNReplicaConfig();
            $this->ReplicaConfig->deserialize($param["ReplicaConfig"]);
        }

        if (array_key_exists("ReplicaStatus",$param) and $param["ReplicaStatus"] !== null) {
            $this->ReplicaStatus = new DCNReplicaStatus();
            $this->ReplicaStatus->deserialize($param["ReplicaStatus"]);
        }

        if (array_key_exists("ExclusterType",$param) and $param["ExclusterType"] !== null) {
            $this->ExclusterType = $param["ExclusterType"];
        }

        if (array_key_exists("RsAccessStrategy",$param) and $param["RsAccessStrategy"] !== null) {
            $this->RsAccessStrategy = $param["RsAccessStrategy"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
