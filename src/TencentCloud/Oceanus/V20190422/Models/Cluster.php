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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述用户创建的集群信息
 *
 * @method string getClusterId() 获取<p>集群 ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群 ID</p>
 * @method string getName() 获取<p>集群名称</p>
 * @method void setName(string $Name) 设置<p>集群名称</p>
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method integer getAppId() 获取<p>用户 AppID</p>
 * @method void setAppId(integer $AppId) 设置<p>用户 AppID</p>
 * @method string getOwnerUin() 获取<p>主账号 UIN</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>主账号 UIN</p>
 * @method string getCreatorUin() 获取<p>创建者 UIN</p>
 * @method void setCreatorUin(string $CreatorUin) 设置<p>创建者 UIN</p>
 * @method integer getStatus() 获取<p>集群状态, 1 未初始化,3 初始化中，2 运行中</p>
 * @method void setStatus(integer $Status) 设置<p>集群状态, 1 未初始化,3 初始化中，2 运行中</p>
 * @method string getRemark() 获取<p>描述</p>
 * @method void setRemark(string $Remark) 设置<p>描述</p>
 * @method string getCreateTime() 获取<p>集群创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>集群创建时间</p>
 * @method string getUpdateTime() 获取<p>最后一次操作集群的时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>最后一次操作集群的时间</p>
 * @method integer getCuNum() 获取<p>CU 数量</p>
 * @method void setCuNum(integer $CuNum) 设置<p>CU 数量</p>
 * @method integer getCuMem() 获取<p>CU 内存规格</p>
 * @method void setCuMem(integer $CuMem) 设置<p>CU 内存规格</p>
 * @method string getZone() 获取<p>可用区</p>
 * @method void setZone(string $Zone) 设置<p>可用区</p>
 * @method string getStatusDesc() 获取<p>状态描述</p>
 * @method void setStatusDesc(string $StatusDesc) 设置<p>状态描述</p>
 * @method array getCCNs() 获取<p>网络</p>
 * @method void setCCNs(array $CCNs) 设置<p>网络</p>
 * @method integer getNetEnvironmentType() 获取<p>网络</p>
 * @method void setNetEnvironmentType(integer $NetEnvironmentType) 设置<p>网络</p>
 * @method integer getFreeCuNum() 获取<p>空闲 CU</p>
 * @method void setFreeCuNum(integer $FreeCuNum) 设置<p>空闲 CU</p>
 * @method array getTags() 获取<p>集群绑定的标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>集群绑定的标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsolatedTime() 获取<p>集群隔离时间; 没隔离时间，则为 -</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolatedTime(string $IsolatedTime) 设置<p>集群隔离时间; 没隔离时间，则为 -</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取<p>集群过期时间; 没过期概念，则为 -</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置<p>集群过期时间; 没过期概念，则为 -</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecondsUntilExpiry() 获取<p>距离过期还有多少秒; 没过期概念，则为 -</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecondsUntilExpiry(string $SecondsUntilExpiry) 设置<p>距离过期还有多少秒; 没过期概念，则为 -</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoRenewFlag() 获取<p>自动续费标记，0 表示默认状态 (用户未设置，即初始状态，用户开通了预付费不停服特权会进行自动续费)， 1 表示自动续费，2表示明确不自动续费(用户设置)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>自动续费标记，0 表示默认状态 (用户未设置，即初始状态，用户开通了预付费不停服特权会进行自动续费)， 1 表示自动续费，2表示明确不自动续费(用户设置)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDefaultCOSBucket() 获取<p>集群的默认 COS 存储桶</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultCOSBucket(string $DefaultCOSBucket) 设置<p>集群的默认 COS 存储桶</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCLSLogSet() 获取<p>集群的CLS 日志集 LogSet</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCLSLogSet(string $CLSLogSet) 设置<p>集群的CLS 日志集 LogSet</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCLSTopicId() 获取<p>集群的CLS 日志主题 TopicId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCLSTopicId(string $CLSTopicId) 设置<p>集群的CLS 日志主题 TopicId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCLSLogName() 获取<p>集群的CLS 日志集  名字</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCLSLogName(string $CLSLogName) 设置<p>集群的CLS 日志集  名字</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCLSTopicName() 获取<p>集群的CLS 日志主题  名字</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCLSTopicName(string $CLSTopicName) 设置<p>集群的CLS 日志主题  名字</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClusterVersion getVersion() 获取<p>集群的版本信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(ClusterVersion $Version) 设置<p>集群的版本信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getFreeCu() 获取<p>细粒度资源下的空闲CU</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFreeCu(float $FreeCu) 设置<p>细粒度资源下的空闲CU</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDefaultLogCollectConf() 获取<p>集群的默认日志采集配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultLogCollectConf(string $DefaultLogCollectConf) 设置<p>集群的默认日志采集配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCustomizedDNSEnabled() 获取<p>取值：0-没有设置，1-已设置，2-不允许设置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomizedDNSEnabled(integer $CustomizedDNSEnabled) 设置<p>取值：0-没有设置，1-已设置，2-不允许设置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCorrelations() 获取<p>空间信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCorrelations(array $Correlations) 设置<p>空间信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRunningCu() 获取<p>运行CU</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningCu(float $RunningCu) 设置<p>运行CU</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPayMode() 获取<p>0 后付费,1 预付费</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayMode(integer $PayMode) 设置<p>0 后付费,1 预付费</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsNeedManageNode() 获取<p>前端区分 集群是否需要2CU逻辑 因为历史集群 变配不需要, default 1  新集群都需要</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsNeedManageNode(integer $IsNeedManageNode) 设置<p>前端区分 集群是否需要2CU逻辑 因为历史集群 变配不需要, default 1  新集群都需要</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getClusterSessions() 获取<p>session集群信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterSessions(array $ClusterSessions) 设置<p>session集群信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getArchGeneration() 获取<p>V3版本 = 2</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArchGeneration(integer $ArchGeneration) 设置<p>V3版本 = 2</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getClusterType() 获取<p>0:TKE, 1:EKS</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterType(integer $ClusterType) 设置<p>0:TKE, 1:EKS</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOrders() 获取<p>订单信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrders(array $Orders) 设置<p>订单信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSqlGateways() 获取<p>Gateway信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlGateways(array $SqlGateways) 设置<p>Gateway信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWebUIType() 获取<p>0 公网访问 // 1 内网访问</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebUIType(integer $WebUIType) 设置<p>0 公网访问 // 1 内网访问</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取<p>2 独享集群</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置<p>2 独享集群</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SubEks getSubEks() 获取<p>子eks集群</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubEks(SubEks $SubEks) 设置<p>子eks集群</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAgentSerialId() 获取<p>上级集群</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentSerialId(string $AgentSerialId) 设置<p>上级集群</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResourceType() 获取<p>资源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceType(integer $ResourceType) 设置<p>资源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBillingResourceMode() 获取<p>集群类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillingResourceMode(string $BillingResourceMode) 设置<p>集群类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemRatio() 获取<p>Cu比例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemRatio(integer $MemRatio) 设置<p>Cu比例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCrossTenantEniMode() 获取<p>是否开启跨租户弹性网卡</p>
 * @method void setCrossTenantEniMode(integer $CrossTenantEniMode) 设置<p>是否开启跨租户弹性网卡</p>
 * @method float getTotalCpu() 获取<p>总的CPU</p>
 * @method void setTotalCpu(float $TotalCpu) 设置<p>总的CPU</p>
 * @method float getTotalMem() 获取<p>总的内存</p>
 * @method void setTotalMem(float $TotalMem) 设置<p>总的内存</p>
 * @method float getRunningCpu() 获取<p>运行的CPU</p>
 * @method void setRunningCpu(float $RunningCpu) 设置<p>运行的CPU</p>
 * @method float getRunningMem() 获取<p>运行的内存</p>
 * @method void setRunningMem(float $RunningMem) 设置<p>运行的内存</p>
 * @method Setats getSetats() 获取<p>setats集群</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSetats(Setats $Setats) 设置<p>setats集群</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getYarns() 获取<p>[]</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setYarns(array $Yarns) 设置<p>[]</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeploymentMode() 获取<p>0 单可用区 1多可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeploymentMode(integer $DeploymentMode) 设置<p>0 单可用区 1多可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSlaveZones() 获取<p>备可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlaveZones(array $SlaveZones) 设置<p>备可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogCOSBucket() 获取<p>集群的日志cos存储</p>
 * @method void setLogCOSBucket(string $LogCOSBucket) 设置<p>集群的日志cos存储</p>
 * @method string getCdcId() 获取<p>Cdc集群Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCdcId(string $CdcId) 设置<p>Cdc集群Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterProcessMsg() 获取<p>集群进度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterProcessMsg(string $ClusterProcessMsg) 设置<p>集群进度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxCuPerJob() 获取<p>单作业最大可配置 CU 数</p>
 * @method void setMaxCuPerJob(integer $MaxCuPerJob) 设置<p>单作业最大可配置 CU 数</p>
 */
class Cluster extends AbstractModel
{
    /**
     * @var string <p>集群 ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>集群名称</p>
     */
    public $Name;

    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var integer <p>用户 AppID</p>
     */
    public $AppId;

    /**
     * @var string <p>主账号 UIN</p>
     */
    public $OwnerUin;

    /**
     * @var string <p>创建者 UIN</p>
     */
    public $CreatorUin;

    /**
     * @var integer <p>集群状态, 1 未初始化,3 初始化中，2 运行中</p>
     */
    public $Status;

    /**
     * @var string <p>描述</p>
     */
    public $Remark;

    /**
     * @var string <p>集群创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>最后一次操作集群的时间</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>CU 数量</p>
     */
    public $CuNum;

    /**
     * @var integer <p>CU 内存规格</p>
     */
    public $CuMem;

    /**
     * @var string <p>可用区</p>
     */
    public $Zone;

    /**
     * @var string <p>状态描述</p>
     */
    public $StatusDesc;

    /**
     * @var array <p>网络</p>
     */
    public $CCNs;

    /**
     * @var integer <p>网络</p>
     */
    public $NetEnvironmentType;

    /**
     * @var integer <p>空闲 CU</p>
     */
    public $FreeCuNum;

    /**
     * @var array <p>集群绑定的标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string <p>集群隔离时间; 没隔离时间，则为 -</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolatedTime;

    /**
     * @var string <p>集群过期时间; 没过期概念，则为 -</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string <p>距离过期还有多少秒; 没过期概念，则为 -</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecondsUntilExpiry;

    /**
     * @var integer <p>自动续费标记，0 表示默认状态 (用户未设置，即初始状态，用户开通了预付费不停服特权会进行自动续费)， 1 表示自动续费，2表示明确不自动续费(用户设置)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRenewFlag;

    /**
     * @var string <p>集群的默认 COS 存储桶</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultCOSBucket;

    /**
     * @var string <p>集群的CLS 日志集 LogSet</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CLSLogSet;

    /**
     * @var string <p>集群的CLS 日志主题 TopicId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CLSTopicId;

    /**
     * @var string <p>集群的CLS 日志集  名字</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CLSLogName;

    /**
     * @var string <p>集群的CLS 日志主题  名字</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CLSTopicName;

    /**
     * @var ClusterVersion <p>集群的版本信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var float <p>细粒度资源下的空闲CU</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FreeCu;

    /**
     * @var string <p>集群的默认日志采集配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultLogCollectConf;

    /**
     * @var integer <p>取值：0-没有设置，1-已设置，2-不允许设置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomizedDNSEnabled;

    /**
     * @var array <p>空间信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Correlations;

    /**
     * @var float <p>运行CU</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningCu;

    /**
     * @var integer <p>0 后付费,1 预付费</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayMode;

    /**
     * @var integer <p>前端区分 集群是否需要2CU逻辑 因为历史集群 变配不需要, default 1  新集群都需要</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsNeedManageNode;

    /**
     * @var array <p>session集群信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterSessions;

    /**
     * @var integer <p>V3版本 = 2</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ArchGeneration;

    /**
     * @var integer <p>0:TKE, 1:EKS</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterType;

    /**
     * @var array <p>订单信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Orders;

    /**
     * @var array <p>Gateway信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlGateways;

    /**
     * @var integer <p>0 公网访问 // 1 内网访问</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebUIType;

    /**
     * @var integer <p>2 独享集群</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var SubEks <p>子eks集群</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubEks;

    /**
     * @var string <p>上级集群</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentSerialId;

    /**
     * @var integer <p>资源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceType;

    /**
     * @var string <p>集群类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillingResourceMode;

    /**
     * @var integer <p>Cu比例</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemRatio;

    /**
     * @var integer <p>是否开启跨租户弹性网卡</p>
     */
    public $CrossTenantEniMode;

    /**
     * @var float <p>总的CPU</p>
     */
    public $TotalCpu;

    /**
     * @var float <p>总的内存</p>
     */
    public $TotalMem;

    /**
     * @var float <p>运行的CPU</p>
     */
    public $RunningCpu;

    /**
     * @var float <p>运行的内存</p>
     */
    public $RunningMem;

    /**
     * @var Setats <p>setats集群</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Setats;

    /**
     * @var array <p>[]</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Yarns;

    /**
     * @var integer <p>0 单可用区 1多可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeploymentMode;

    /**
     * @var array <p>备可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SlaveZones;

    /**
     * @var string <p>集群的日志cos存储</p>
     */
    public $LogCOSBucket;

    /**
     * @var string <p>Cdc集群Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CdcId;

    /**
     * @var string <p>集群进度</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterProcessMsg;

    /**
     * @var integer <p>单作业最大可配置 CU 数</p>
     */
    public $MaxCuPerJob;

    /**
     * @param string $ClusterId <p>集群 ID</p>
     * @param string $Name <p>集群名称</p>
     * @param string $Region <p>地域</p>
     * @param integer $AppId <p>用户 AppID</p>
     * @param string $OwnerUin <p>主账号 UIN</p>
     * @param string $CreatorUin <p>创建者 UIN</p>
     * @param integer $Status <p>集群状态, 1 未初始化,3 初始化中，2 运行中</p>
     * @param string $Remark <p>描述</p>
     * @param string $CreateTime <p>集群创建时间</p>
     * @param string $UpdateTime <p>最后一次操作集群的时间</p>
     * @param integer $CuNum <p>CU 数量</p>
     * @param integer $CuMem <p>CU 内存规格</p>
     * @param string $Zone <p>可用区</p>
     * @param string $StatusDesc <p>状态描述</p>
     * @param array $CCNs <p>网络</p>
     * @param integer $NetEnvironmentType <p>网络</p>
     * @param integer $FreeCuNum <p>空闲 CU</p>
     * @param array $Tags <p>集群绑定的标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsolatedTime <p>集群隔离时间; 没隔离时间，则为 -</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime <p>集群过期时间; 没过期概念，则为 -</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecondsUntilExpiry <p>距离过期还有多少秒; 没过期概念，则为 -</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoRenewFlag <p>自动续费标记，0 表示默认状态 (用户未设置，即初始状态，用户开通了预付费不停服特权会进行自动续费)， 1 表示自动续费，2表示明确不自动续费(用户设置)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DefaultCOSBucket <p>集群的默认 COS 存储桶</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CLSLogSet <p>集群的CLS 日志集 LogSet</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CLSTopicId <p>集群的CLS 日志主题 TopicId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CLSLogName <p>集群的CLS 日志集  名字</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CLSTopicName <p>集群的CLS 日志主题  名字</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClusterVersion $Version <p>集群的版本信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $FreeCu <p>细粒度资源下的空闲CU</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DefaultLogCollectConf <p>集群的默认日志采集配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CustomizedDNSEnabled <p>取值：0-没有设置，1-已设置，2-不允许设置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Correlations <p>空间信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RunningCu <p>运行CU</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PayMode <p>0 后付费,1 预付费</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsNeedManageNode <p>前端区分 集群是否需要2CU逻辑 因为历史集群 变配不需要, default 1  新集群都需要</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ClusterSessions <p>session集群信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ArchGeneration <p>V3版本 = 2</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ClusterType <p>0:TKE, 1:EKS</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Orders <p>订单信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SqlGateways <p>Gateway信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WebUIType <p>0 公网访问 // 1 内网访问</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type <p>2 独享集群</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SubEks $SubEks <p>子eks集群</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AgentSerialId <p>上级集群</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResourceType <p>资源类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BillingResourceMode <p>集群类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MemRatio <p>Cu比例</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CrossTenantEniMode <p>是否开启跨租户弹性网卡</p>
     * @param float $TotalCpu <p>总的CPU</p>
     * @param float $TotalMem <p>总的内存</p>
     * @param float $RunningCpu <p>运行的CPU</p>
     * @param float $RunningMem <p>运行的内存</p>
     * @param Setats $Setats <p>setats集群</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Yarns <p>[]</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeploymentMode <p>0 单可用区 1多可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SlaveZones <p>备可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogCOSBucket <p>集群的日志cos存储</p>
     * @param string $CdcId <p>Cdc集群Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterProcessMsg <p>集群进度</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxCuPerJob <p>单作业最大可配置 CU 数</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CuNum",$param) and $param["CuNum"] !== null) {
            $this->CuNum = $param["CuNum"];
        }

        if (array_key_exists("CuMem",$param) and $param["CuMem"] !== null) {
            $this->CuMem = $param["CuMem"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("CCNs",$param) and $param["CCNs"] !== null) {
            $this->CCNs = [];
            foreach ($param["CCNs"] as $key => $value){
                $obj = new CCN();
                $obj->deserialize($value);
                array_push($this->CCNs, $obj);
            }
        }

        if (array_key_exists("NetEnvironmentType",$param) and $param["NetEnvironmentType"] !== null) {
            $this->NetEnvironmentType = $param["NetEnvironmentType"];
        }

        if (array_key_exists("FreeCuNum",$param) and $param["FreeCuNum"] !== null) {
            $this->FreeCuNum = $param["FreeCuNum"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("SecondsUntilExpiry",$param) and $param["SecondsUntilExpiry"] !== null) {
            $this->SecondsUntilExpiry = $param["SecondsUntilExpiry"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("DefaultCOSBucket",$param) and $param["DefaultCOSBucket"] !== null) {
            $this->DefaultCOSBucket = $param["DefaultCOSBucket"];
        }

        if (array_key_exists("CLSLogSet",$param) and $param["CLSLogSet"] !== null) {
            $this->CLSLogSet = $param["CLSLogSet"];
        }

        if (array_key_exists("CLSTopicId",$param) and $param["CLSTopicId"] !== null) {
            $this->CLSTopicId = $param["CLSTopicId"];
        }

        if (array_key_exists("CLSLogName",$param) and $param["CLSLogName"] !== null) {
            $this->CLSLogName = $param["CLSLogName"];
        }

        if (array_key_exists("CLSTopicName",$param) and $param["CLSTopicName"] !== null) {
            $this->CLSTopicName = $param["CLSTopicName"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = new ClusterVersion();
            $this->Version->deserialize($param["Version"]);
        }

        if (array_key_exists("FreeCu",$param) and $param["FreeCu"] !== null) {
            $this->FreeCu = $param["FreeCu"];
        }

        if (array_key_exists("DefaultLogCollectConf",$param) and $param["DefaultLogCollectConf"] !== null) {
            $this->DefaultLogCollectConf = $param["DefaultLogCollectConf"];
        }

        if (array_key_exists("CustomizedDNSEnabled",$param) and $param["CustomizedDNSEnabled"] !== null) {
            $this->CustomizedDNSEnabled = $param["CustomizedDNSEnabled"];
        }

        if (array_key_exists("Correlations",$param) and $param["Correlations"] !== null) {
            $this->Correlations = [];
            foreach ($param["Correlations"] as $key => $value){
                $obj = new WorkSpaceClusterItem();
                $obj->deserialize($value);
                array_push($this->Correlations, $obj);
            }
        }

        if (array_key_exists("RunningCu",$param) and $param["RunningCu"] !== null) {
            $this->RunningCu = $param["RunningCu"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("IsNeedManageNode",$param) and $param["IsNeedManageNode"] !== null) {
            $this->IsNeedManageNode = $param["IsNeedManageNode"];
        }

        if (array_key_exists("ClusterSessions",$param) and $param["ClusterSessions"] !== null) {
            $this->ClusterSessions = [];
            foreach ($param["ClusterSessions"] as $key => $value){
                $obj = new ClusterSession();
                $obj->deserialize($value);
                array_push($this->ClusterSessions, $obj);
            }
        }

        if (array_key_exists("ArchGeneration",$param) and $param["ArchGeneration"] !== null) {
            $this->ArchGeneration = $param["ArchGeneration"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("Orders",$param) and $param["Orders"] !== null) {
            $this->Orders = [];
            foreach ($param["Orders"] as $key => $value){
                $obj = new Order();
                $obj->deserialize($value);
                array_push($this->Orders, $obj);
            }
        }

        if (array_key_exists("SqlGateways",$param) and $param["SqlGateways"] !== null) {
            $this->SqlGateways = [];
            foreach ($param["SqlGateways"] as $key => $value){
                $obj = new SqlGatewayItem();
                $obj->deserialize($value);
                array_push($this->SqlGateways, $obj);
            }
        }

        if (array_key_exists("WebUIType",$param) and $param["WebUIType"] !== null) {
            $this->WebUIType = $param["WebUIType"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SubEks",$param) and $param["SubEks"] !== null) {
            $this->SubEks = new SubEks();
            $this->SubEks->deserialize($param["SubEks"]);
        }

        if (array_key_exists("AgentSerialId",$param) and $param["AgentSerialId"] !== null) {
            $this->AgentSerialId = $param["AgentSerialId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("BillingResourceMode",$param) and $param["BillingResourceMode"] !== null) {
            $this->BillingResourceMode = $param["BillingResourceMode"];
        }

        if (array_key_exists("MemRatio",$param) and $param["MemRatio"] !== null) {
            $this->MemRatio = $param["MemRatio"];
        }

        if (array_key_exists("CrossTenantEniMode",$param) and $param["CrossTenantEniMode"] !== null) {
            $this->CrossTenantEniMode = $param["CrossTenantEniMode"];
        }

        if (array_key_exists("TotalCpu",$param) and $param["TotalCpu"] !== null) {
            $this->TotalCpu = $param["TotalCpu"];
        }

        if (array_key_exists("TotalMem",$param) and $param["TotalMem"] !== null) {
            $this->TotalMem = $param["TotalMem"];
        }

        if (array_key_exists("RunningCpu",$param) and $param["RunningCpu"] !== null) {
            $this->RunningCpu = $param["RunningCpu"];
        }

        if (array_key_exists("RunningMem",$param) and $param["RunningMem"] !== null) {
            $this->RunningMem = $param["RunningMem"];
        }

        if (array_key_exists("Setats",$param) and $param["Setats"] !== null) {
            $this->Setats = new Setats();
            $this->Setats->deserialize($param["Setats"]);
        }

        if (array_key_exists("Yarns",$param) and $param["Yarns"] !== null) {
            $this->Yarns = [];
            foreach ($param["Yarns"] as $key => $value){
                $obj = new HadoopYarnItem();
                $obj->deserialize($value);
                array_push($this->Yarns, $obj);
            }
        }

        if (array_key_exists("DeploymentMode",$param) and $param["DeploymentMode"] !== null) {
            $this->DeploymentMode = $param["DeploymentMode"];
        }

        if (array_key_exists("SlaveZones",$param) and $param["SlaveZones"] !== null) {
            $this->SlaveZones = [];
            foreach ($param["SlaveZones"] as $key => $value){
                $obj = new SlaveZone();
                $obj->deserialize($value);
                array_push($this->SlaveZones, $obj);
            }
        }

        if (array_key_exists("LogCOSBucket",$param) and $param["LogCOSBucket"] !== null) {
            $this->LogCOSBucket = $param["LogCOSBucket"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("ClusterProcessMsg",$param) and $param["ClusterProcessMsg"] !== null) {
            $this->ClusterProcessMsg = $param["ClusterProcessMsg"];
        }

        if (array_key_exists("MaxCuPerJob",$param) and $param["MaxCuPerJob"] !== null) {
            $this->MaxCuPerJob = $param["MaxCuPerJob"];
        }
    }
}
