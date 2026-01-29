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
 * 描述云数据库实例的详细信息。
 *
 * @method string getInstanceId() 获取<p>实例 ID，唯一标识一个 TDSQL 实例</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID，唯一标识一个 TDSQL 实例</p>
 * @method string getInstanceName() 获取<p>实例名称，用户可修改</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称，用户可修改</p>
 * @method integer getAppId() 获取<p>实例所属应用 ID</p>
 * @method void setAppId(integer $AppId) 设置<p>实例所属应用 ID</p>
 * @method integer getProjectId() 获取<p>实例所属项目 ID</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>实例所属项目 ID</p>
 * @method string getRegion() 获取<p>实例所在地域名称，如 ap-shanghai</p>
 * @method void setRegion(string $Region) 设置<p>实例所在地域名称，如 ap-shanghai</p>
 * @method string getZone() 获取<p>实例所在可用区名称，如 ap-shanghai-2</p>
 * @method void setZone(string $Zone) 设置<p>实例所在可用区名称，如 ap-shanghai-2</p>
 * @method integer getVpcId() 获取<p>私有网络 ID，基础网络时为 0</p>
 * @method void setVpcId(integer $VpcId) 设置<p>私有网络 ID，基础网络时为 0</p>
 * @method integer getSubnetId() 获取<p>子网 ID，基础网络时为 0</p>
 * @method void setSubnetId(integer $SubnetId) 设置<p>子网 ID，基础网络时为 0</p>
 * @method integer getStatus() 获取<p>实例状态：0 创建中，1 流程处理中， 2 运行中，3 实例未初始化，-1 实例已隔离，4 实例初始化中，5 实例删除中，6 实例重启中，7 数据迁移中</p>
 * @method void setStatus(integer $Status) 设置<p>实例状态：0 创建中，1 流程处理中， 2 运行中，3 实例未初始化，-1 实例已隔离，4 实例初始化中，5 实例删除中，6 实例重启中，7 数据迁移中</p>
 * @method string getVip() 获取<p>内网 IP 地址</p>
 * @method void setVip(string $Vip) 设置<p>内网 IP 地址</p>
 * @method integer getVport() 获取<p>内网端口</p>
 * @method void setVport(integer $Vport) 设置<p>内网端口</p>
 * @method string getWanDomain() 获取<p>外网访问的域名，公网可解析</p>
 * @method void setWanDomain(string $WanDomain) 设置<p>外网访问的域名，公网可解析</p>
 * @method string getWanVip() 获取<p>外网 IP 地址，公网可访问</p>
 * @method void setWanVip(string $WanVip) 设置<p>外网 IP 地址，公网可访问</p>
 * @method integer getWanPort() 获取<p>外网端口</p>
 * @method void setWanPort(integer $WanPort) 设置<p>外网端口</p>
 * @method string getCreateTime() 获取<p>实例创建时间，格式为 2006-01-02 15:04:05</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>实例创建时间，格式为 2006-01-02 15:04:05</p>
 * @method string getUpdateTime() 获取<p>实例最后更新时间，格式为 2006-01-02 15:04:05</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>实例最后更新时间，格式为 2006-01-02 15:04:05</p>
 * @method integer getAutoRenewFlag() 获取<p>自动续费标志：0 否，1 是</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>自动续费标志：0 否，1 是</p>
 * @method string getPeriodEndTime() 获取<p>实例到期时间，格式为 2006-01-02 15:04:05</p>
 * @method void setPeriodEndTime(string $PeriodEndTime) 设置<p>实例到期时间，格式为 2006-01-02 15:04:05</p>
 * @method string getUin() 获取<p>实例所属账号</p>
 * @method void setUin(string $Uin) 设置<p>实例所属账号</p>
 * @method string getTdsqlVersion() 获取<p>TDSQL 版本信息</p>
 * @method void setTdsqlVersion(string $TdsqlVersion) 设置<p>TDSQL 版本信息</p>
 * @method integer getMemory() 获取<p>实例内存大小，单位 GB</p>
 * @method void setMemory(integer $Memory) 设置<p>实例内存大小，单位 GB</p>
 * @method integer getStorage() 获取<p>实例存储大小，单位 GB</p>
 * @method void setStorage(integer $Storage) 设置<p>实例存储大小，单位 GB</p>
 * @method string getUniqueVpcId() 获取<p>字符串型的私有网络ID</p>
 * @method void setUniqueVpcId(string $UniqueVpcId) 设置<p>字符串型的私有网络ID</p>
 * @method string getUniqueSubnetId() 获取<p>字符串型的私有网络子网ID</p>
 * @method void setUniqueSubnetId(string $UniqueSubnetId) 设置<p>字符串型的私有网络子网ID</p>
 * @method string getOriginSerialId() 获取<p>原始实例ID（过时字段，请勿依赖该值）</p>
 * @method void setOriginSerialId(string $OriginSerialId) 设置<p>原始实例ID（过时字段，请勿依赖该值）</p>
 * @method integer getNodeCount() 获取<p>节点数，2为一主一从，3为一主二从</p>
 * @method void setNodeCount(integer $NodeCount) 设置<p>节点数，2为一主一从，3为一主二从</p>
 * @method integer getIsTmp() 获取<p>是否临时实例，0为否，非0为是</p>
 * @method void setIsTmp(integer $IsTmp) 设置<p>是否临时实例，0为否，非0为是</p>
 * @method string getExclusterId() 获取<p>独享集群ID，为空表示为普通实例</p>
 * @method void setExclusterId(string $ExclusterId) 设置<p>独享集群ID，为空表示为普通实例</p>
 * @method integer getId() 获取<p>数字实例ID（过时字段，请勿依赖该值）</p>
 * @method void setId(integer $Id) 设置<p>数字实例ID（过时字段，请勿依赖该值）</p>
 * @method integer getPid() 获取<p>产品类型 ID</p>
 * @method void setPid(integer $Pid) 设置<p>产品类型 ID</p>
 * @method integer getQps() 获取<p>最大 Qps 值</p>
 * @method void setQps(integer $Qps) 设置<p>最大 Qps 值</p>
 * @method string getPaymode() 获取<p>付费模式</p>
 * @method void setPaymode(string $Paymode) 设置<p>付费模式</p>
 * @method integer getLocker() 获取<p>实例处于异步任务时的异步任务流程ID</p>
 * @method void setLocker(integer $Locker) 设置<p>实例处于异步任务时的异步任务流程ID</p>
 * @method string getStatusDesc() 获取<p>实例目前运行状态描述</p>
 * @method void setStatusDesc(string $StatusDesc) 设置<p>实例目前运行状态描述</p>
 * @method integer getWanStatus() 获取<p>外网状态，0-未开通；1-已开通；2-关闭；3-开通中</p>
 * @method void setWanStatus(integer $WanStatus) 设置<p>外网状态，0-未开通；1-已开通；2-关闭；3-开通中</p>
 * @method integer getIsAuditSupported() 获取<p>该实例是否支持审计。1-支持；0-不支持</p>
 * @method void setIsAuditSupported(integer $IsAuditSupported) 设置<p>该实例是否支持审计。1-支持；0-不支持</p>
 * @method string getMachine() 获取<p>机器型号</p>
 * @method void setMachine(string $Machine) 设置<p>机器型号</p>
 * @method integer getIsEncryptSupported() 获取<p>是否支持数据加密。1-支持；0-不支持</p>
 * @method void setIsEncryptSupported(integer $IsEncryptSupported) 设置<p>是否支持数据加密。1-支持；0-不支持</p>
 * @method integer getCpu() 获取<p>实例CPU核数</p>
 * @method void setCpu(integer $Cpu) 设置<p>实例CPU核数</p>
 * @method integer getIpv6Flag() 获取<p>实例IPv6标志</p>
 * @method void setIpv6Flag(integer $Ipv6Flag) 设置<p>实例IPv6标志</p>
 * @method string getVipv6() 获取<p>内网IPv6</p>
 * @method void setVipv6(string $Vipv6) 设置<p>内网IPv6</p>
 * @method string getWanVipv6() 获取<p>外网IPv6</p>
 * @method void setWanVipv6(string $WanVipv6) 设置<p>外网IPv6</p>
 * @method integer getWanPortIpv6() 获取<p>外网IPv6端口</p>
 * @method void setWanPortIpv6(integer $WanPortIpv6) 设置<p>外网IPv6端口</p>
 * @method integer getWanStatusIpv6() 获取<p>外网IPv6状态</p>
 * @method void setWanStatusIpv6(integer $WanStatusIpv6) 设置<p>外网IPv6状态</p>
 * @method string getDbEngine() 获取<p>数据库引擎</p>
 * @method void setDbEngine(string $DbEngine) 设置<p>数据库引擎</p>
 * @method string getDbVersion() 获取<p>数据库版本</p>
 * @method void setDbVersion(string $DbVersion) 设置<p>数据库版本</p>
 * @method integer getDcnFlag() 获取<p>DCN标志，0-无，1-主实例，2-灾备实例</p>
 * @method void setDcnFlag(integer $DcnFlag) 设置<p>DCN标志，0-无，1-主实例，2-灾备实例</p>
 * @method integer getDcnStatus() 获取<p>DCN状态，0-无，1-创建中，2-同步中，3-已断开</p>
 * @method void setDcnStatus(integer $DcnStatus) 设置<p>DCN状态，0-无，1-创建中，2-同步中，3-已断开</p>
 * @method integer getDcnDstNum() 获取<p>DCN灾备实例数</p>
 * @method void setDcnDstNum(integer $DcnDstNum) 设置<p>DCN灾备实例数</p>
 * @method integer getInstanceType() 获取<p>1： 主实例（独享型）, 2: 主实例, 3： 灾备实例, 4： 灾备实例（独享型）</p>
 * @method void setInstanceType(integer $InstanceType) 设置<p>1： 主实例（独享型）, 2: 主实例, 3： 灾备实例, 4： 灾备实例（独享型）</p>
 * @method array getResourceTags() 获取<p>实例标签信息</p>
 * @method void setResourceTags(array $ResourceTags) 设置<p>实例标签信息</p>
 * @method string getDbVersionId() 获取<p>数据库版本</p>
 * @method void setDbVersionId(string $DbVersionId) 设置<p>数据库版本</p>
 * @method integer getProtectedProperty() 获取<p>实例删除保护标签，1: 已开启删除保护，0: 未开启删除保护</p>
 * @method void setProtectedProperty(integer $ProtectedProperty) 设置<p>实例删除保护标签，1: 已开启删除保护，0: 未开启删除保护</p>
 */
class DBInstance extends AbstractModel
{
    /**
     * @var string <p>实例 ID，唯一标识一个 TDSQL 实例</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称，用户可修改</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>实例所属应用 ID</p>
     */
    public $AppId;

    /**
     * @var integer <p>实例所属项目 ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>实例所在地域名称，如 ap-shanghai</p>
     */
    public $Region;

    /**
     * @var string <p>实例所在可用区名称，如 ap-shanghai-2</p>
     */
    public $Zone;

    /**
     * @var integer <p>私有网络 ID，基础网络时为 0</p>
     */
    public $VpcId;

    /**
     * @var integer <p>子网 ID，基础网络时为 0</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>实例状态：0 创建中，1 流程处理中， 2 运行中，3 实例未初始化，-1 实例已隔离，4 实例初始化中，5 实例删除中，6 实例重启中，7 数据迁移中</p>
     */
    public $Status;

    /**
     * @var string <p>内网 IP 地址</p>
     */
    public $Vip;

    /**
     * @var integer <p>内网端口</p>
     */
    public $Vport;

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
     * @var string <p>实例创建时间，格式为 2006-01-02 15:04:05</p>
     */
    public $CreateTime;

    /**
     * @var string <p>实例最后更新时间，格式为 2006-01-02 15:04:05</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>自动续费标志：0 否，1 是</p>
     */
    public $AutoRenewFlag;

    /**
     * @var string <p>实例到期时间，格式为 2006-01-02 15:04:05</p>
     */
    public $PeriodEndTime;

    /**
     * @var string <p>实例所属账号</p>
     */
    public $Uin;

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
     * @var string <p>字符串型的私有网络ID</p>
     */
    public $UniqueVpcId;

    /**
     * @var string <p>字符串型的私有网络子网ID</p>
     */
    public $UniqueSubnetId;

    /**
     * @var string <p>原始实例ID（过时字段，请勿依赖该值）</p>
     */
    public $OriginSerialId;

    /**
     * @var integer <p>节点数，2为一主一从，3为一主二从</p>
     */
    public $NodeCount;

    /**
     * @var integer <p>是否临时实例，0为否，非0为是</p>
     */
    public $IsTmp;

    /**
     * @var string <p>独享集群ID，为空表示为普通实例</p>
     */
    public $ExclusterId;

    /**
     * @var integer <p>数字实例ID（过时字段，请勿依赖该值）</p>
     */
    public $Id;

    /**
     * @var integer <p>产品类型 ID</p>
     */
    public $Pid;

    /**
     * @var integer <p>最大 Qps 值</p>
     */
    public $Qps;

    /**
     * @var string <p>付费模式</p>
     */
    public $Paymode;

    /**
     * @var integer <p>实例处于异步任务时的异步任务流程ID</p>
     */
    public $Locker;

    /**
     * @var string <p>实例目前运行状态描述</p>
     */
    public $StatusDesc;

    /**
     * @var integer <p>外网状态，0-未开通；1-已开通；2-关闭；3-开通中</p>
     */
    public $WanStatus;

    /**
     * @var integer <p>该实例是否支持审计。1-支持；0-不支持</p>
     */
    public $IsAuditSupported;

    /**
     * @var string <p>机器型号</p>
     */
    public $Machine;

    /**
     * @var integer <p>是否支持数据加密。1-支持；0-不支持</p>
     */
    public $IsEncryptSupported;

    /**
     * @var integer <p>实例CPU核数</p>
     */
    public $Cpu;

    /**
     * @var integer <p>实例IPv6标志</p>
     */
    public $Ipv6Flag;

    /**
     * @var string <p>内网IPv6</p>
     */
    public $Vipv6;

    /**
     * @var string <p>外网IPv6</p>
     */
    public $WanVipv6;

    /**
     * @var integer <p>外网IPv6端口</p>
     */
    public $WanPortIpv6;

    /**
     * @var integer <p>外网IPv6状态</p>
     */
    public $WanStatusIpv6;

    /**
     * @var string <p>数据库引擎</p>
     */
    public $DbEngine;

    /**
     * @var string <p>数据库版本</p>
     */
    public $DbVersion;

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
     * @var array <p>实例标签信息</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>数据库版本</p>
     */
    public $DbVersionId;

    /**
     * @var integer <p>实例删除保护标签，1: 已开启删除保护，0: 未开启删除保护</p>
     */
    public $ProtectedProperty;

    /**
     * @param string $InstanceId <p>实例 ID，唯一标识一个 TDSQL 实例</p>
     * @param string $InstanceName <p>实例名称，用户可修改</p>
     * @param integer $AppId <p>实例所属应用 ID</p>
     * @param integer $ProjectId <p>实例所属项目 ID</p>
     * @param string $Region <p>实例所在地域名称，如 ap-shanghai</p>
     * @param string $Zone <p>实例所在可用区名称，如 ap-shanghai-2</p>
     * @param integer $VpcId <p>私有网络 ID，基础网络时为 0</p>
     * @param integer $SubnetId <p>子网 ID，基础网络时为 0</p>
     * @param integer $Status <p>实例状态：0 创建中，1 流程处理中， 2 运行中，3 实例未初始化，-1 实例已隔离，4 实例初始化中，5 实例删除中，6 实例重启中，7 数据迁移中</p>
     * @param string $Vip <p>内网 IP 地址</p>
     * @param integer $Vport <p>内网端口</p>
     * @param string $WanDomain <p>外网访问的域名，公网可解析</p>
     * @param string $WanVip <p>外网 IP 地址，公网可访问</p>
     * @param integer $WanPort <p>外网端口</p>
     * @param string $CreateTime <p>实例创建时间，格式为 2006-01-02 15:04:05</p>
     * @param string $UpdateTime <p>实例最后更新时间，格式为 2006-01-02 15:04:05</p>
     * @param integer $AutoRenewFlag <p>自动续费标志：0 否，1 是</p>
     * @param string $PeriodEndTime <p>实例到期时间，格式为 2006-01-02 15:04:05</p>
     * @param string $Uin <p>实例所属账号</p>
     * @param string $TdsqlVersion <p>TDSQL 版本信息</p>
     * @param integer $Memory <p>实例内存大小，单位 GB</p>
     * @param integer $Storage <p>实例存储大小，单位 GB</p>
     * @param string $UniqueVpcId <p>字符串型的私有网络ID</p>
     * @param string $UniqueSubnetId <p>字符串型的私有网络子网ID</p>
     * @param string $OriginSerialId <p>原始实例ID（过时字段，请勿依赖该值）</p>
     * @param integer $NodeCount <p>节点数，2为一主一从，3为一主二从</p>
     * @param integer $IsTmp <p>是否临时实例，0为否，非0为是</p>
     * @param string $ExclusterId <p>独享集群ID，为空表示为普通实例</p>
     * @param integer $Id <p>数字实例ID（过时字段，请勿依赖该值）</p>
     * @param integer $Pid <p>产品类型 ID</p>
     * @param integer $Qps <p>最大 Qps 值</p>
     * @param string $Paymode <p>付费模式</p>
     * @param integer $Locker <p>实例处于异步任务时的异步任务流程ID</p>
     * @param string $StatusDesc <p>实例目前运行状态描述</p>
     * @param integer $WanStatus <p>外网状态，0-未开通；1-已开通；2-关闭；3-开通中</p>
     * @param integer $IsAuditSupported <p>该实例是否支持审计。1-支持；0-不支持</p>
     * @param string $Machine <p>机器型号</p>
     * @param integer $IsEncryptSupported <p>是否支持数据加密。1-支持；0-不支持</p>
     * @param integer $Cpu <p>实例CPU核数</p>
     * @param integer $Ipv6Flag <p>实例IPv6标志</p>
     * @param string $Vipv6 <p>内网IPv6</p>
     * @param string $WanVipv6 <p>外网IPv6</p>
     * @param integer $WanPortIpv6 <p>外网IPv6端口</p>
     * @param integer $WanStatusIpv6 <p>外网IPv6状态</p>
     * @param string $DbEngine <p>数据库引擎</p>
     * @param string $DbVersion <p>数据库版本</p>
     * @param integer $DcnFlag <p>DCN标志，0-无，1-主实例，2-灾备实例</p>
     * @param integer $DcnStatus <p>DCN状态，0-无，1-创建中，2-同步中，3-已断开</p>
     * @param integer $DcnDstNum <p>DCN灾备实例数</p>
     * @param integer $InstanceType <p>1： 主实例（独享型）, 2: 主实例, 3： 灾备实例, 4： 灾备实例（独享型）</p>
     * @param array $ResourceTags <p>实例标签信息</p>
     * @param string $DbVersionId <p>数据库版本</p>
     * @param integer $ProtectedProperty <p>实例删除保护标签，1: 已开启删除保护，0: 未开启删除保护</p>
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

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
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

        if (array_key_exists("UniqueVpcId",$param) and $param["UniqueVpcId"] !== null) {
            $this->UniqueVpcId = $param["UniqueVpcId"];
        }

        if (array_key_exists("UniqueSubnetId",$param) and $param["UniqueSubnetId"] !== null) {
            $this->UniqueSubnetId = $param["UniqueSubnetId"];
        }

        if (array_key_exists("OriginSerialId",$param) and $param["OriginSerialId"] !== null) {
            $this->OriginSerialId = $param["OriginSerialId"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("IsTmp",$param) and $param["IsTmp"] !== null) {
            $this->IsTmp = $param["IsTmp"];
        }

        if (array_key_exists("ExclusterId",$param) and $param["ExclusterId"] !== null) {
            $this->ExclusterId = $param["ExclusterId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("Paymode",$param) and $param["Paymode"] !== null) {
            $this->Paymode = $param["Paymode"];
        }

        if (array_key_exists("Locker",$param) and $param["Locker"] !== null) {
            $this->Locker = $param["Locker"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("WanStatus",$param) and $param["WanStatus"] !== null) {
            $this->WanStatus = $param["WanStatus"];
        }

        if (array_key_exists("IsAuditSupported",$param) and $param["IsAuditSupported"] !== null) {
            $this->IsAuditSupported = $param["IsAuditSupported"];
        }

        if (array_key_exists("Machine",$param) and $param["Machine"] !== null) {
            $this->Machine = $param["Machine"];
        }

        if (array_key_exists("IsEncryptSupported",$param) and $param["IsEncryptSupported"] !== null) {
            $this->IsEncryptSupported = $param["IsEncryptSupported"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Ipv6Flag",$param) and $param["Ipv6Flag"] !== null) {
            $this->Ipv6Flag = $param["Ipv6Flag"];
        }

        if (array_key_exists("Vipv6",$param) and $param["Vipv6"] !== null) {
            $this->Vipv6 = $param["Vipv6"];
        }

        if (array_key_exists("WanVipv6",$param) and $param["WanVipv6"] !== null) {
            $this->WanVipv6 = $param["WanVipv6"];
        }

        if (array_key_exists("WanPortIpv6",$param) and $param["WanPortIpv6"] !== null) {
            $this->WanPortIpv6 = $param["WanPortIpv6"];
        }

        if (array_key_exists("WanStatusIpv6",$param) and $param["WanStatusIpv6"] !== null) {
            $this->WanStatusIpv6 = $param["WanStatusIpv6"];
        }

        if (array_key_exists("DbEngine",$param) and $param["DbEngine"] !== null) {
            $this->DbEngine = $param["DbEngine"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
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

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("DbVersionId",$param) and $param["DbVersionId"] !== null) {
            $this->DbVersionId = $param["DbVersionId"];
        }

        if (array_key_exists("ProtectedProperty",$param) and $param["ProtectedProperty"] !== null) {
            $this->ProtectedProperty = $param["ProtectedProperty"];
        }
    }
}
