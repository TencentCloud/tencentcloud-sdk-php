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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstanceDetail返回参数结构体
 *
 * @method string getInstanceId() 获取<p>实例Id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例Id</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method integer getStatus() 获取<p>实例状态</p>
 * @method void setStatus(integer $Status) 设置<p>实例状态</p>
 * @method string getStatusDesc() 获取<p>实例目前运行状态描述</p>
 * @method void setStatusDesc(string $StatusDesc) 设置<p>实例目前运行状态描述</p>
 * @method string getVip() 获取<p>内网 IP 地址</p>
 * @method void setVip(string $Vip) 设置<p>内网 IP 地址</p>
 * @method integer getVport() 获取<p>内网端口</p>
 * @method void setVport(integer $Vport) 设置<p>内网端口</p>
 * @method integer getIsTmp() 获取<p>是否临时实例，0为否，非0为是</p>
 * @method void setIsTmp(integer $IsTmp) 设置<p>是否临时实例，0为否，非0为是</p>
 * @method integer getNodeCount() 获取<p>节点数，2为一主一从，3为一主二从</p>
 * @method void setNodeCount(integer $NodeCount) 设置<p>节点数，2为一主一从，3为一主二从</p>
 * @method string getRegion() 获取<p>实例所在地域名称，如 ap-shanghai</p>
 * @method void setRegion(string $Region) 设置<p>实例所在地域名称，如 ap-shanghai</p>
 * @method string getZone() 获取<p>实例所在可用区名称，如 ap-shanghai-2</p>
 * @method void setZone(string $Zone) 设置<p>实例所在可用区名称，如 ap-shanghai-2</p>
 * @method string getVpcId() 获取<p>字符串型的私有网络Id</p>
 * @method void setVpcId(string $VpcId) 设置<p>字符串型的私有网络Id</p>
 * @method string getSubnetId() 获取<p>字符串型的私有网络子网Id</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>字符串型的私有网络子网Id</p>
 * @method integer getWanStatus() 获取<p>外网状态，0-未开通；1-已开通；2-关闭；3-开通中；4-关闭中</p>
 * @method void setWanStatus(integer $WanStatus) 设置<p>外网状态，0-未开通；1-已开通；2-关闭；3-开通中；4-关闭中</p>
 * @method string getWanDomain() 获取<p>外网访问的域名，公网可解析</p>
 * @method void setWanDomain(string $WanDomain) 设置<p>外网访问的域名，公网可解析</p>
 * @method string getWanVip() 获取<p>外网 IP 地址，公网可访问</p>
 * @method void setWanVip(string $WanVip) 设置<p>外网 IP 地址，公网可访问</p>
 * @method integer getWanPort() 获取<p>外网端口</p>
 * @method void setWanPort(integer $WanPort) 设置<p>外网端口</p>
 * @method integer getProjectId() 获取<p>实例所属项目 Id</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>实例所属项目 Id</p>
 * @method string getTdsqlVersion() 获取<p>TDSQL 版本信息</p>
 * @method void setTdsqlVersion(string $TdsqlVersion) 设置<p>TDSQL 版本信息</p>
 * @method integer getMemory() 获取<p>实例内存大小，单位 GB</p>
 * @method void setMemory(integer $Memory) 设置<p>实例内存大小，单位 GB</p>
 * @method integer getStorage() 获取<p>实例存储大小，单位 GB</p>
 * @method void setStorage(integer $Storage) 设置<p>实例存储大小，单位 GB</p>
 * @method string getMasterZone() 获取<p>主可用区，如 ap-shanghai-2</p>
 * @method void setMasterZone(string $MasterZone) 设置<p>主可用区，如 ap-shanghai-2</p>
 * @method array getSlaveZones() 获取<p>从可用区列表，如 [ap-shanghai-2]</p>
 * @method void setSlaveZones(array $SlaveZones) 设置<p>从可用区列表，如 [ap-shanghai-2]</p>
 * @method integer getAutoRenewFlag() 获取<p>自动续费标志：0 否，1 是</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>自动续费标志：0 否，1 是</p>
 * @method string getExclusterId() 获取<p>独享集群Id，普通实例为空</p>
 * @method void setExclusterId(string $ExclusterId) 设置<p>独享集群Id，普通实例为空</p>
 * @method string getPayMode() 获取<p>付费模式：prepaid 表示预付费</p>
 * @method void setPayMode(string $PayMode) 设置<p>付费模式：prepaid 表示预付费</p>
 * @method string getCreateTime() 获取<p>实例创建时间，格式为 2006-01-02 15:04:05</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>实例创建时间，格式为 2006-01-02 15:04:05</p>
 * @method boolean getIsAuditSupported() 获取<p>实例是否支持审计</p>
 * @method void setIsAuditSupported(boolean $IsAuditSupported) 设置<p>实例是否支持审计</p>
 * @method string getPeriodEndTime() 获取<p>实例到期时间，格式为 2006-01-02 15:04:05</p>
 * @method void setPeriodEndTime(string $PeriodEndTime) 设置<p>实例到期时间，格式为 2006-01-02 15:04:05</p>
 * @method string getMachine() 获取<p>机型信息</p>
 * @method void setMachine(string $Machine) 设置<p>机型信息</p>
 * @method string getStorageUsage() 获取<p>存储空间使用率</p>
 * @method void setStorageUsage(string $StorageUsage) 设置<p>存储空间使用率</p>
 * @method integer getLogStorage() 获取<p>日志存储空间大小，单位 GB</p>
 * @method void setLogStorage(integer $LogStorage) 设置<p>日志存储空间大小，单位 GB</p>
 * @method integer getIsEncryptSupported() 获取<p>是否支持数据加密。1-支持；0-不支持</p>
 * @method void setIsEncryptSupported(integer $IsEncryptSupported) 设置<p>是否支持数据加密。1-支持；0-不支持</p>
 * @method string getVip6() 获取<p>内网IPv6</p>
 * @method void setVip6(string $Vip6) 设置<p>内网IPv6</p>
 * @method integer getCpu() 获取<p>实例Cpu核数</p>
 * @method void setCpu(integer $Cpu) 设置<p>实例Cpu核数</p>
 * @method integer getPid() 获取<p>产品类型ID</p>
 * @method void setPid(integer $Pid) 设置<p>产品类型ID</p>
 * @method integer getQps() 获取<p>最大QPS</p>
 * @method void setQps(integer $Qps) 设置<p>最大QPS</p>
 * @method integer getIpv6Flag() 获取<p>是否支持IPv6</p>
 * @method void setIpv6Flag(integer $Ipv6Flag) 设置<p>是否支持IPv6</p>
 * @method string getWanVipv6() 获取<p>外网IPv6地址，公网可访问</p>
 * @method void setWanVipv6(string $WanVipv6) 设置<p>外网IPv6地址，公网可访问</p>
 * @method integer getWanStatusIpv6() 获取<p>外网状态，0-未开通；1-已开通；2-关闭；3-开通中；4-关闭中</p>
 * @method void setWanStatusIpv6(integer $WanStatusIpv6) 设置<p>外网状态，0-未开通；1-已开通；2-关闭；3-开通中；4-关闭中</p>
 * @method integer getWanPortIpv6() 获取<p>外网IPv6端口</p>
 * @method void setWanPortIpv6(integer $WanPortIpv6) 设置<p>外网IPv6端口</p>
 * @method string getDbEngine() 获取<p>数据库引擎</p>
 * @method void setDbEngine(string $DbEngine) 设置<p>数据库引擎</p>
 * @method string getDbVersion() 获取<p>数据库版本</p>
 * @method void setDbVersion(string $DbVersion) 设置<p>数据库版本</p>
 * @method array getResourceTags() 获取<p>标签信息</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>标签信息</p>
 * @method integer getDcnFlag() 获取<p>DCN标志，0-无，1-主实例，2-灾备实例</p>
 * @method void setDcnFlag(integer $DcnFlag) 设置<p>DCN标志，0-无，1-主实例，2-灾备实例</p>
 * @method integer getDcnStatus() 获取<p>DCN状态，0-无，1-创建中，2-同步中，3-已断开</p>
 * @method void setDcnStatus(integer $DcnStatus) 设置<p>DCN状态，0-无，1-创建中，2-同步中，3-已断开</p>
 * @method integer getDcnDstNum() 获取<p>DCN灾备实例数</p>
 * @method void setDcnDstNum(integer $DcnDstNum) 设置<p>DCN灾备实例数</p>
 * @method integer getInstanceType() 获取<p>1： 主实例（独享型）, 2: 主实例, 3： 灾备实例, 4： 灾备实例（独享型）</p>
 * @method void setInstanceType(integer $InstanceType) 设置<p>1： 主实例（独享型）, 2: 主实例, 3： 灾备实例, 4： 灾备实例（独享型）</p>
 * @method array getNodesInfo() 获取<p>实例的各个DB节点信息</p>
 * @method void setNodesInfo(array $NodesInfo) 设置<p>实例的各个DB节点信息</p>
 * @method boolean getIsMaxUserConnectionsSupported() 获取<p>实例是否支持设置用户连接数限制，内核为10.1暂不支持。</p>
 * @method void setIsMaxUserConnectionsSupported(boolean $IsMaxUserConnectionsSupported) 设置<p>实例是否支持设置用户连接数限制，内核为10.1暂不支持。</p>
 * @method string getDbVersionId() 获取<p>对外显示的数据库版本</p>
 * @method void setDbVersionId(string $DbVersionId) 设置<p>对外显示的数据库版本</p>
 * @method integer getEncryptStatus() 获取<p>加密状态, 0-未开启，1-已开启</p>
 * @method void setEncryptStatus(integer $EncryptStatus) 设置<p>加密状态, 0-未开启，1-已开启</p>
 * @method DCNReplicaConfig getReplicaConfig() 获取<p>DCN的配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicaConfig(DCNReplicaConfig $ReplicaConfig) 设置<p>DCN的配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DCNReplicaStatus getReplicaStatus() 获取<p>DCN的运行状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicaStatus(DCNReplicaStatus $ReplicaStatus) 设置<p>DCN的运行状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExclusterType() 获取<p>独享集群类型，0:公有云, 1:金融围笼, 2:CDC集群</p>
 * @method void setExclusterType(integer $ExclusterType) 设置<p>独享集群类型，0:公有云, 1:金融围笼, 2:CDC集群</p>
 * @method integer getRsAccessStrategy() 获取<p>VPC就近访问</p>
 * @method void setRsAccessStrategy(integer $RsAccessStrategy) 设置<p>VPC就近访问</p>
 * @method array getReservedNetResources() 获取<p>尚未回收的网络资源</p>
 * @method void setReservedNetResources(array $ReservedNetResources) 设置<p>尚未回收的网络资源</p>
 * @method boolean getIsPhysicalReplicationSupported() 获取<p>是否支持物理复制</p>
 * @method void setIsPhysicalReplicationSupported(boolean $IsPhysicalReplicationSupported) 设置<p>是否支持物理复制</p>
 * @method integer getIsDcnStrongSyncSupported() 获取<p>是否支持强同步DCN</p>
 * @method void setIsDcnStrongSyncSupported(integer $IsDcnStrongSyncSupported) 设置<p>是否支持强同步DCN</p>
 * @method integer getIsDcnSwitchSupported() 获取<p>是否支持DCN切换</p>
 * @method void setIsDcnSwitchSupported(integer $IsDcnSwitchSupported) 设置<p>是否支持DCN切换</p>
 * @method string getProxyVersion() 获取<p>proxy版本号</p>
 * @method void setProxyVersion(string $ProxyVersion) 设置<p>proxy版本号</p>
 * @method string getCpuType() 获取<p>Cpu类型，如：英特尔：Intel/AMD，海光：Hygon</p>
 * @method void setCpuType(string $CpuType) 设置<p>Cpu类型，如：英特尔：Intel/AMD，海光：Hygon</p>
 * @method integer getProtectedProperty() 获取<p>删除保护标记，1: 已开启删除保护，0: 未开启删除保护</p>
 * @method void setProtectedProperty(integer $ProtectedProperty) 设置<p>删除保护标记，1: 已开启删除保护，0: 未开启删除保护</p>
 * @method integer getFlowId() 获取<p>流程Id，标志实例当前所处的异步任务</p>
 * @method void setFlowId(integer $FlowId) 设置<p>流程Id，标志实例当前所处的异步任务</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBInstanceDetailResponse extends AbstractModel
{
    /**
     * @var string <p>实例Id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>实例状态</p>
     */
    public $Status;

    /**
     * @var string <p>实例目前运行状态描述</p>
     */
    public $StatusDesc;

    /**
     * @var string <p>内网 IP 地址</p>
     */
    public $Vip;

    /**
     * @var integer <p>内网端口</p>
     */
    public $Vport;

    /**
     * @var integer <p>是否临时实例，0为否，非0为是</p>
     */
    public $IsTmp;

    /**
     * @var integer <p>节点数，2为一主一从，3为一主二从</p>
     */
    public $NodeCount;

    /**
     * @var string <p>实例所在地域名称，如 ap-shanghai</p>
     */
    public $Region;

    /**
     * @var string <p>实例所在可用区名称，如 ap-shanghai-2</p>
     */
    public $Zone;

    /**
     * @var string <p>字符串型的私有网络Id</p>
     */
    public $VpcId;

    /**
     * @var string <p>字符串型的私有网络子网Id</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>外网状态，0-未开通；1-已开通；2-关闭；3-开通中；4-关闭中</p>
     */
    public $WanStatus;

    /**
     * @var string <p>外网访问的域名，公网可解析</p>
     */
    public $WanDomain;

    /**
     * @var string <p>外网 IP 地址，公网可访问</p>
     */
    public $WanVip;

    /**
     * @var integer <p>外网端口</p>
     */
    public $WanPort;

    /**
     * @var integer <p>实例所属项目 Id</p>
     */
    public $ProjectId;

    /**
     * @var string <p>TDSQL 版本信息</p>
     */
    public $TdsqlVersion;

    /**
     * @var integer <p>实例内存大小，单位 GB</p>
     */
    public $Memory;

    /**
     * @var integer <p>实例存储大小，单位 GB</p>
     */
    public $Storage;

    /**
     * @var string <p>主可用区，如 ap-shanghai-2</p>
     */
    public $MasterZone;

    /**
     * @var array <p>从可用区列表，如 [ap-shanghai-2]</p>
     */
    public $SlaveZones;

    /**
     * @var integer <p>自动续费标志：0 否，1 是</p>
     */
    public $AutoRenewFlag;

    /**
     * @var string <p>独享集群Id，普通实例为空</p>
     */
    public $ExclusterId;

    /**
     * @var string <p>付费模式：prepaid 表示预付费</p>
     */
    public $PayMode;

    /**
     * @var string <p>实例创建时间，格式为 2006-01-02 15:04:05</p>
     */
    public $CreateTime;

    /**
     * @var boolean <p>实例是否支持审计</p>
     */
    public $IsAuditSupported;

    /**
     * @var string <p>实例到期时间，格式为 2006-01-02 15:04:05</p>
     */
    public $PeriodEndTime;

    /**
     * @var string <p>机型信息</p>
     */
    public $Machine;

    /**
     * @var string <p>存储空间使用率</p>
     */
    public $StorageUsage;

    /**
     * @var integer <p>日志存储空间大小，单位 GB</p>
     */
    public $LogStorage;

    /**
     * @var integer <p>是否支持数据加密。1-支持；0-不支持</p>
     */
    public $IsEncryptSupported;

    /**
     * @var string <p>内网IPv6</p>
     */
    public $Vip6;

    /**
     * @var integer <p>实例Cpu核数</p>
     */
    public $Cpu;

    /**
     * @var integer <p>产品类型ID</p>
     */
    public $Pid;

    /**
     * @var integer <p>最大QPS</p>
     */
    public $Qps;

    /**
     * @var integer <p>是否支持IPv6</p>
     */
    public $Ipv6Flag;

    /**
     * @var string <p>外网IPv6地址，公网可访问</p>
     */
    public $WanVipv6;

    /**
     * @var integer <p>外网状态，0-未开通；1-已开通；2-关闭；3-开通中；4-关闭中</p>
     */
    public $WanStatusIpv6;

    /**
     * @var integer <p>外网IPv6端口</p>
     */
    public $WanPortIpv6;

    /**
     * @var string <p>数据库引擎</p>
     */
    public $DbEngine;

    /**
     * @var string <p>数据库版本</p>
     */
    public $DbVersion;

    /**
     * @var array <p>标签信息</p>
     */
    public $ResourceTags;

    /**
     * @var integer <p>DCN标志，0-无，1-主实例，2-灾备实例</p>
     */
    public $DcnFlag;

    /**
     * @var integer <p>DCN状态，0-无，1-创建中，2-同步中，3-已断开</p>
     */
    public $DcnStatus;

    /**
     * @var integer <p>DCN灾备实例数</p>
     */
    public $DcnDstNum;

    /**
     * @var integer <p>1： 主实例（独享型）, 2: 主实例, 3： 灾备实例, 4： 灾备实例（独享型）</p>
     */
    public $InstanceType;

    /**
     * @var array <p>实例的各个DB节点信息</p>
     */
    public $NodesInfo;

    /**
     * @var boolean <p>实例是否支持设置用户连接数限制，内核为10.1暂不支持。</p>
     */
    public $IsMaxUserConnectionsSupported;

    /**
     * @var string <p>对外显示的数据库版本</p>
     */
    public $DbVersionId;

    /**
     * @var integer <p>加密状态, 0-未开启，1-已开启</p>
     */
    public $EncryptStatus;

    /**
     * @var DCNReplicaConfig <p>DCN的配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplicaConfig;

    /**
     * @var DCNReplicaStatus <p>DCN的运行状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplicaStatus;

    /**
     * @var integer <p>独享集群类型，0:公有云, 1:金融围笼, 2:CDC集群</p>
     */
    public $ExclusterType;

    /**
     * @var integer <p>VPC就近访问</p>
     */
    public $RsAccessStrategy;

    /**
     * @var array <p>尚未回收的网络资源</p>
     */
    public $ReservedNetResources;

    /**
     * @var boolean <p>是否支持物理复制</p>
     */
    public $IsPhysicalReplicationSupported;

    /**
     * @var integer <p>是否支持强同步DCN</p>
     */
    public $IsDcnStrongSyncSupported;

    /**
     * @var integer <p>是否支持DCN切换</p>
     */
    public $IsDcnSwitchSupported;

    /**
     * @var string <p>proxy版本号</p>
     */
    public $ProxyVersion;

    /**
     * @var string <p>Cpu类型，如：英特尔：Intel/AMD，海光：Hygon</p>
     */
    public $CpuType;

    /**
     * @var integer <p>删除保护标记，1: 已开启删除保护，0: 未开启删除保护</p>
     */
    public $ProtectedProperty;

    /**
     * @var integer <p>流程Id，标志实例当前所处的异步任务</p>
     */
    public $FlowId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceId <p>实例Id</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param integer $Status <p>实例状态</p>
     * @param string $StatusDesc <p>实例目前运行状态描述</p>
     * @param string $Vip <p>内网 IP 地址</p>
     * @param integer $Vport <p>内网端口</p>
     * @param integer $IsTmp <p>是否临时实例，0为否，非0为是</p>
     * @param integer $NodeCount <p>节点数，2为一主一从，3为一主二从</p>
     * @param string $Region <p>实例所在地域名称，如 ap-shanghai</p>
     * @param string $Zone <p>实例所在可用区名称，如 ap-shanghai-2</p>
     * @param string $VpcId <p>字符串型的私有网络Id</p>
     * @param string $SubnetId <p>字符串型的私有网络子网Id</p>
     * @param integer $WanStatus <p>外网状态，0-未开通；1-已开通；2-关闭；3-开通中；4-关闭中</p>
     * @param string $WanDomain <p>外网访问的域名，公网可解析</p>
     * @param string $WanVip <p>外网 IP 地址，公网可访问</p>
     * @param integer $WanPort <p>外网端口</p>
     * @param integer $ProjectId <p>实例所属项目 Id</p>
     * @param string $TdsqlVersion <p>TDSQL 版本信息</p>
     * @param integer $Memory <p>实例内存大小，单位 GB</p>
     * @param integer $Storage <p>实例存储大小，单位 GB</p>
     * @param string $MasterZone <p>主可用区，如 ap-shanghai-2</p>
     * @param array $SlaveZones <p>从可用区列表，如 [ap-shanghai-2]</p>
     * @param integer $AutoRenewFlag <p>自动续费标志：0 否，1 是</p>
     * @param string $ExclusterId <p>独享集群Id，普通实例为空</p>
     * @param string $PayMode <p>付费模式：prepaid 表示预付费</p>
     * @param string $CreateTime <p>实例创建时间，格式为 2006-01-02 15:04:05</p>
     * @param boolean $IsAuditSupported <p>实例是否支持审计</p>
     * @param string $PeriodEndTime <p>实例到期时间，格式为 2006-01-02 15:04:05</p>
     * @param string $Machine <p>机型信息</p>
     * @param string $StorageUsage <p>存储空间使用率</p>
     * @param integer $LogStorage <p>日志存储空间大小，单位 GB</p>
     * @param integer $IsEncryptSupported <p>是否支持数据加密。1-支持；0-不支持</p>
     * @param string $Vip6 <p>内网IPv6</p>
     * @param integer $Cpu <p>实例Cpu核数</p>
     * @param integer $Pid <p>产品类型ID</p>
     * @param integer $Qps <p>最大QPS</p>
     * @param integer $Ipv6Flag <p>是否支持IPv6</p>
     * @param string $WanVipv6 <p>外网IPv6地址，公网可访问</p>
     * @param integer $WanStatusIpv6 <p>外网状态，0-未开通；1-已开通；2-关闭；3-开通中；4-关闭中</p>
     * @param integer $WanPortIpv6 <p>外网IPv6端口</p>
     * @param string $DbEngine <p>数据库引擎</p>
     * @param string $DbVersion <p>数据库版本</p>
     * @param array $ResourceTags <p>标签信息</p>
     * @param integer $DcnFlag <p>DCN标志，0-无，1-主实例，2-灾备实例</p>
     * @param integer $DcnStatus <p>DCN状态，0-无，1-创建中，2-同步中，3-已断开</p>
     * @param integer $DcnDstNum <p>DCN灾备实例数</p>
     * @param integer $InstanceType <p>1： 主实例（独享型）, 2: 主实例, 3： 灾备实例, 4： 灾备实例（独享型）</p>
     * @param array $NodesInfo <p>实例的各个DB节点信息</p>
     * @param boolean $IsMaxUserConnectionsSupported <p>实例是否支持设置用户连接数限制，内核为10.1暂不支持。</p>
     * @param string $DbVersionId <p>对外显示的数据库版本</p>
     * @param integer $EncryptStatus <p>加密状态, 0-未开启，1-已开启</p>
     * @param DCNReplicaConfig $ReplicaConfig <p>DCN的配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DCNReplicaStatus $ReplicaStatus <p>DCN的运行状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExclusterType <p>独享集群类型，0:公有云, 1:金融围笼, 2:CDC集群</p>
     * @param integer $RsAccessStrategy <p>VPC就近访问</p>
     * @param array $ReservedNetResources <p>尚未回收的网络资源</p>
     * @param boolean $IsPhysicalReplicationSupported <p>是否支持物理复制</p>
     * @param integer $IsDcnStrongSyncSupported <p>是否支持强同步DCN</p>
     * @param integer $IsDcnSwitchSupported <p>是否支持DCN切换</p>
     * @param string $ProxyVersion <p>proxy版本号</p>
     * @param string $CpuType <p>Cpu类型，如：英特尔：Intel/AMD，海光：Hygon</p>
     * @param integer $ProtectedProperty <p>删除保护标记，1: 已开启删除保护，0: 未开启删除保护</p>
     * @param integer $FlowId <p>流程Id，标志实例当前所处的异步任务</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("ReservedNetResources",$param) and $param["ReservedNetResources"] !== null) {
            $this->ReservedNetResources = [];
            foreach ($param["ReservedNetResources"] as $key => $value){
                $obj = new ReservedNetResource();
                $obj->deserialize($value);
                array_push($this->ReservedNetResources, $obj);
            }
        }

        if (array_key_exists("IsPhysicalReplicationSupported",$param) and $param["IsPhysicalReplicationSupported"] !== null) {
            $this->IsPhysicalReplicationSupported = $param["IsPhysicalReplicationSupported"];
        }

        if (array_key_exists("IsDcnStrongSyncSupported",$param) and $param["IsDcnStrongSyncSupported"] !== null) {
            $this->IsDcnStrongSyncSupported = $param["IsDcnStrongSyncSupported"];
        }

        if (array_key_exists("IsDcnSwitchSupported",$param) and $param["IsDcnSwitchSupported"] !== null) {
            $this->IsDcnSwitchSupported = $param["IsDcnSwitchSupported"];
        }

        if (array_key_exists("ProxyVersion",$param) and $param["ProxyVersion"] !== null) {
            $this->ProxyVersion = $param["ProxyVersion"];
        }

        if (array_key_exists("CpuType",$param) and $param["CpuType"] !== null) {
            $this->CpuType = $param["CpuType"];
        }

        if (array_key_exists("ProtectedProperty",$param) and $param["ProtectedProperty"] !== null) {
            $this->ProtectedProperty = $param["ProtectedProperty"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
