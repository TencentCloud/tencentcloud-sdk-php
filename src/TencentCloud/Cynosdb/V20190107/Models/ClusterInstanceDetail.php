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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群实例信息
 *
 * @method string getUin() 获取<p>用户Uin</p>
 * @method void setUin(string $Uin) 设置<p>用户Uin</p>
 * @method integer getAppId() 获取<p>用户AppId</p>
 * @method void setAppId(integer $AppId) 设置<p>用户AppId</p>
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method string getClusterName() 获取<p>集群名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getInstanceType() 获取<p>引擎类型</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>引擎类型</p>
 * @method string getInstanceStatus() 获取<p>实例状态</p>
 * @method void setInstanceStatus(string $InstanceStatus) 设置<p>实例状态</p>
 * @method string getInstanceStatusDesc() 获取<p>实例状态描述</p>
 * @method void setInstanceStatusDesc(string $InstanceStatusDesc) 设置<p>实例状态描述</p>
 * @method integer getInstanceCpu() 获取<p>cpu核数</p>
 * @method void setInstanceCpu(integer $InstanceCpu) 设置<p>cpu核数</p>
 * @method integer getCpu() 获取<p>Cpu</p><p>单位：核</p>
 * @method void setCpu(integer $Cpu) 设置<p>Cpu</p><p>单位：核</p>
 * @method float getMinCpu() 获取<p>serverless实例cpu下限</p><p>单位：核</p>
 * @method void setMinCpu(float $MinCpu) 设置<p>serverless实例cpu下限</p><p>单位：核</p>
 * @method float getMaxCpu() 获取<p>serverless实例cpu上限</p><p>单位：核</p>
 * @method void setMaxCpu(float $MaxCpu) 设置<p>serverless实例cpu上限</p><p>单位：核</p>
 * @method integer getMemory() 获取<p>内存</p><p>单位：GB</p>
 * @method void setMemory(integer $Memory) 设置<p>内存</p><p>单位：GB</p>
 * @method integer getInstanceMemory() 获取<p>内存</p>
 * @method void setInstanceMemory(integer $InstanceMemory) 设置<p>内存</p>
 * @method integer getInstanceStorage() 获取<p>硬盘</p>
 * @method void setInstanceStorage(integer $InstanceStorage) 设置<p>硬盘</p>
 * @method string getInstanceRole() 获取<p>实例角色</p>
 * @method void setInstanceRole(string $InstanceRole) 设置<p>实例角色</p>
 * @method integer getMaintainStartTime() 获取<p>执行开始时间(距离0点的秒数)</p>
 * @method void setMaintainStartTime(integer $MaintainStartTime) 设置<p>执行开始时间(距离0点的秒数)</p>
 * @method integer getMaintainDuration() 获取<p>持续的时间(单位：秒)</p>
 * @method void setMaintainDuration(integer $MaintainDuration) 设置<p>持续的时间(单位：秒)</p>
 * @method array getMaintainWeekDays() 获取<p>可以执行的时间，枚举值：[&quot;Mon&quot;,&quot;Tue&quot;,&quot;Wed&quot;,&quot;Thu&quot;,&quot;Fri&quot;, &quot;Sat&quot;, &quot;Sun&quot;]</p>
 * @method void setMaintainWeekDays(array $MaintainWeekDays) 设置<p>可以执行的时间，枚举值：[&quot;Mon&quot;,&quot;Tue&quot;,&quot;Wed&quot;,&quot;Thu&quot;,&quot;Fri&quot;, &quot;Sat&quot;, &quot;Sun&quot;]</p>
 * @method array getInstanceTasks() 获取<p>实例任务信息</p>
 * @method void setInstanceTasks(array $InstanceTasks) 设置<p>实例任务信息</p>
 * @method string getInstanceDeviceType() 获取<p>实例机器类型</p><ol><li>common，通用型。</li><li>exclusive，独享型。</li></ol>
 * @method void setInstanceDeviceType(string $InstanceDeviceType) 设置<p>实例机器类型</p><ol><li>common，通用型。</li><li>exclusive，独享型。</li></ol>
 * @method string getInstanceStorageType() 获取<p>实例存储类型<br>说明：仅当要查询的资源为 LibraDB 时，此参数才会返回值。</p>
 * @method void setInstanceStorageType(string $InstanceStorageType) 设置<p>实例存储类型<br>说明：仅当要查询的资源为 LibraDB 时，此参数才会返回值。</p>
 * @method string getDbMode() 获取<p>数据库类型</p>
 * @method void setDbMode(string $DbMode) 设置<p>数据库类型</p>
 * @method array getNodeList() 获取<p>节点列表<br>说明：仅当要查询的资源为 LibraDB 时，此参数才会返回值。</p>
 * @method void setNodeList(array $NodeList) 设置<p>节点列表<br>说明：仅当要查询的资源为 LibraDB 时，此参数才会返回值。</p>
 * @method string getServerlessStatus() 获取<p>serverless实例子状态</p>
 * @method void setServerlessStatus(string $ServerlessStatus) 设置<p>serverless实例子状态</p>
 * @method AIOptimizerStatus getAIOptimizerStatus() 获取<p>AI优化器状态</p>
 * @method void setAIOptimizerStatus(AIOptimizerStatus $AIOptimizerStatus) 设置<p>AI优化器状态</p>
 * @method integer getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID</p>
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method string getZone() 获取<p>可用区</p>
 * @method void setZone(string $Zone) 设置<p>可用区</p>
 * @method string getPhysicalZone() 获取<p>实例所在的物理可用区</p>
 * @method void setPhysicalZone(string $PhysicalZone) 设置<p>实例所在的物理可用区</p>
 * @method string getStatus() 获取<p>实例状态</p><p>枚举值：</p><ul><li>creating： 创建中</li><li>running： 运行中</li><li>isolating： 隔离中</li><li>isolated： 已隔离</li><li>activating： 恢复中</li><li>offlining： 下线中</li><li>offlined： 已下线</li></ul>
 * @method void setStatus(string $Status) 设置<p>实例状态</p><p>枚举值：</p><ul><li>creating： 创建中</li><li>running： 运行中</li><li>isolating： 隔离中</li><li>isolated： 已隔离</li><li>activating： 恢复中</li><li>offlining： 下线中</li><li>offlined： 已下线</li></ul>
 * @method string getStatusDesc() 获取<p>实例状态中文描述</p>
 * @method void setStatusDesc(string $StatusDesc) 设置<p>实例状态中文描述</p>
 * @method string getDbType() 获取<p>数据库类型</p>
 * @method void setDbType(string $DbType) 设置<p>数据库类型</p>
 * @method string getDbVersion() 获取<p>数据库版本</p>
 * @method void setDbVersion(string $DbVersion) 设置<p>数据库版本</p>
 * @method integer getStorage() 获取<p>存储量</p><p>单位：GB</p>
 * @method void setStorage(integer $Storage) 设置<p>存储量</p><p>单位：GB</p>
 * @method string getStorageId() 获取<p>预付费存储Id</p>
 * @method void setStorageId(string $StorageId) 设置<p>预付费存储Id</p>
 * @method integer getStoragePayMode() 获取<p>存储付费类型</p><p>枚举值：</p><ul><li>0： 后付费</li><li>1： 预付费</li></ul>
 * @method void setStoragePayMode(integer $StoragePayMode) 设置<p>存储付费类型</p><p>枚举值：</p><ul><li>0： 后付费</li><li>1： 预付费</li></ul>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method string getIsolateTime() 获取<p>隔离时间</p>
 * @method void setIsolateTime(string $IsolateTime) 设置<p>隔离时间</p>
 * @method string getDestroyTime() 获取<p>实例销毁时间</p>
 * @method void setDestroyTime(string $DestroyTime) 设置<p>实例销毁时间</p>
 * @method string getDestroyDeadlineText() 获取<p>销毁期限</p>
 * @method void setDestroyDeadlineText(string $DestroyDeadlineText) 设置<p>销毁期限</p>
 * @method string getPeriodEndTime() 获取<p>实例过期时间</p>
 * @method void setPeriodEndTime(string $PeriodEndTime) 设置<p>实例过期时间</p>
 * @method string getVpcId() 获取<p>VPC网络ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC网络ID</p>
 * @method string getSubnetId() 获取<p>子网ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网ID</p>
 * @method string getVip() 获取<p>实例内网IP</p>
 * @method void setVip(string $Vip) 设置<p>实例内网IP</p>
 * @method integer getVport() 获取<p>实例内网端口</p>
 * @method void setVport(integer $Vport) 设置<p>实例内网端口</p>
 * @method integer getNetType() 获取<p>网络类型</p>
 * @method void setNetType(integer $NetType) 设置<p>网络类型</p>
 * @method string getWanIP() 获取<p>外网IP</p>
 * @method void setWanIP(string $WanIP) 设置<p>外网IP</p>
 * @method integer getWanPort() 获取<p>外网端口</p>
 * @method void setWanPort(integer $WanPort) 设置<p>外网端口</p>
 * @method string getWanStatus() 获取<p>外网开启状态</p>
 * @method void setWanStatus(string $WanStatus) 设置<p>外网开启状态</p>
 * @method string getWanDomain() 获取<p>实例外网域名</p>
 * @method void setWanDomain(string $WanDomain) 设置<p>实例外网域名</p>
 * @method array getInstanceNetInfo() 获取<p>实例的网络信息</p>
 * @method void setInstanceNetInfo(array $InstanceNetInfo) 设置<p>实例的网络信息</p>
 * @method integer getPayMode() 获取<p>付费模式</p><p>枚举值：</p><ul><li>0： 后付费</li><li>1： 预付费</li></ul>
 * @method void setPayMode(integer $PayMode) 设置<p>付费模式</p><p>枚举值：</p><ul><li>0： 后付费</li><li>1： 预付费</li></ul>
 * @method string getProcessingTask() 获取<p>正在处理的任务</p>
 * @method void setProcessingTask(string $ProcessingTask) 设置<p>正在处理的任务</p>
 * @method integer getRenewFlag() 获取<p>续费标志</p>
 * @method void setRenewFlag(integer $RenewFlag) 设置<p>续费标志</p>
 * @method array getTasks() 获取<p>任务</p>
 * @method void setTasks(array $Tasks) 设置<p>任务</p>
 * @method string getIsFreeze() 获取<p>是否冻结</p>
 * @method void setIsFreeze(string $IsFreeze) 设置<p>是否冻结</p>
 * @method array getResourceTags() 获取<p>资源标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceTags(array $ResourceTags) 设置<p>资源标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method InstanceAbility getInstanceAbility() 获取<p>当前实例支持的能力</p>
 * @method void setInstanceAbility(InstanceAbility $InstanceAbility) 设置<p>当前实例支持的能力</p>
 * @method string getDeviceType() 获取<p>实例机器类型</p><p>枚举值：</p><ul><li>common： 通用型</li><li>exclusive： 独享型</li></ul>
 * @method void setDeviceType(string $DeviceType) 设置<p>实例机器类型</p><p>枚举值：</p><ul><li>common： 通用型</li><li>exclusive： 独享型</li></ul>
 * @method string getGdnId() 获取<p>全球数据库唯一标识</p>
 * @method void setGdnId(string $GdnId) 设置<p>全球数据库唯一标识</p>
 */
class ClusterInstanceDetail extends AbstractModel
{
    /**
     * @var string <p>用户Uin</p>
     */
    public $Uin;

    /**
     * @var integer <p>用户AppId</p>
     */
    public $AppId;

    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>集群名称</p>
     */
    public $ClusterName;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>引擎类型</p>
     */
    public $InstanceType;

    /**
     * @var string <p>实例状态</p>
     */
    public $InstanceStatus;

    /**
     * @var string <p>实例状态描述</p>
     */
    public $InstanceStatusDesc;

    /**
     * @var integer <p>cpu核数</p>
     * @deprecated
     */
    public $InstanceCpu;

    /**
     * @var integer <p>Cpu</p><p>单位：核</p>
     */
    public $Cpu;

    /**
     * @var float <p>serverless实例cpu下限</p><p>单位：核</p>
     */
    public $MinCpu;

    /**
     * @var float <p>serverless实例cpu上限</p><p>单位：核</p>
     */
    public $MaxCpu;

    /**
     * @var integer <p>内存</p><p>单位：GB</p>
     */
    public $Memory;

    /**
     * @var integer <p>内存</p>
     */
    public $InstanceMemory;

    /**
     * @var integer <p>硬盘</p>
     */
    public $InstanceStorage;

    /**
     * @var string <p>实例角色</p>
     */
    public $InstanceRole;

    /**
     * @var integer <p>执行开始时间(距离0点的秒数)</p>
     */
    public $MaintainStartTime;

    /**
     * @var integer <p>持续的时间(单位：秒)</p>
     */
    public $MaintainDuration;

    /**
     * @var array <p>可以执行的时间，枚举值：[&quot;Mon&quot;,&quot;Tue&quot;,&quot;Wed&quot;,&quot;Thu&quot;,&quot;Fri&quot;, &quot;Sat&quot;, &quot;Sun&quot;]</p>
     */
    public $MaintainWeekDays;

    /**
     * @var array <p>实例任务信息</p>
     */
    public $InstanceTasks;

    /**
     * @var string <p>实例机器类型</p><ol><li>common，通用型。</li><li>exclusive，独享型。</li></ol>
     */
    public $InstanceDeviceType;

    /**
     * @var string <p>实例存储类型<br>说明：仅当要查询的资源为 LibraDB 时，此参数才会返回值。</p>
     */
    public $InstanceStorageType;

    /**
     * @var string <p>数据库类型</p>
     */
    public $DbMode;

    /**
     * @var array <p>节点列表<br>说明：仅当要查询的资源为 LibraDB 时，此参数才会返回值。</p>
     */
    public $NodeList;

    /**
     * @var string <p>serverless实例子状态</p>
     */
    public $ServerlessStatus;

    /**
     * @var AIOptimizerStatus <p>AI优化器状态</p>
     */
    public $AIOptimizerStatus;

    /**
     * @var integer <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var string <p>可用区</p>
     */
    public $Zone;

    /**
     * @var string <p>实例所在的物理可用区</p>
     */
    public $PhysicalZone;

    /**
     * @var string <p>实例状态</p><p>枚举值：</p><ul><li>creating： 创建中</li><li>running： 运行中</li><li>isolating： 隔离中</li><li>isolated： 已隔离</li><li>activating： 恢复中</li><li>offlining： 下线中</li><li>offlined： 已下线</li></ul>
     */
    public $Status;

    /**
     * @var string <p>实例状态中文描述</p>
     */
    public $StatusDesc;

    /**
     * @var string <p>数据库类型</p>
     */
    public $DbType;

    /**
     * @var string <p>数据库版本</p>
     */
    public $DbVersion;

    /**
     * @var integer <p>存储量</p><p>单位：GB</p>
     */
    public $Storage;

    /**
     * @var string <p>预付费存储Id</p>
     */
    public $StorageId;

    /**
     * @var integer <p>存储付费类型</p><p>枚举值：</p><ul><li>0： 后付费</li><li>1： 预付费</li></ul>
     */
    public $StoragePayMode;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>隔离时间</p>
     */
    public $IsolateTime;

    /**
     * @var string <p>实例销毁时间</p>
     */
    public $DestroyTime;

    /**
     * @var string <p>销毁期限</p>
     */
    public $DestroyDeadlineText;

    /**
     * @var string <p>实例过期时间</p>
     */
    public $PeriodEndTime;

    /**
     * @var string <p>VPC网络ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网ID</p>
     */
    public $SubnetId;

    /**
     * @var string <p>实例内网IP</p>
     */
    public $Vip;

    /**
     * @var integer <p>实例内网端口</p>
     */
    public $Vport;

    /**
     * @var integer <p>网络类型</p>
     */
    public $NetType;

    /**
     * @var string <p>外网IP</p>
     */
    public $WanIP;

    /**
     * @var integer <p>外网端口</p>
     */
    public $WanPort;

    /**
     * @var string <p>外网开启状态</p>
     */
    public $WanStatus;

    /**
     * @var string <p>实例外网域名</p>
     */
    public $WanDomain;

    /**
     * @var array <p>实例的网络信息</p>
     */
    public $InstanceNetInfo;

    /**
     * @var integer <p>付费模式</p><p>枚举值：</p><ul><li>0： 后付费</li><li>1： 预付费</li></ul>
     */
    public $PayMode;

    /**
     * @var string <p>正在处理的任务</p>
     */
    public $ProcessingTask;

    /**
     * @var integer <p>续费标志</p>
     */
    public $RenewFlag;

    /**
     * @var array <p>任务</p>
     */
    public $Tasks;

    /**
     * @var string <p>是否冻结</p>
     */
    public $IsFreeze;

    /**
     * @var array <p>资源标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceTags;

    /**
     * @var InstanceAbility <p>当前实例支持的能力</p>
     */
    public $InstanceAbility;

    /**
     * @var string <p>实例机器类型</p><p>枚举值：</p><ul><li>common： 通用型</li><li>exclusive： 独享型</li></ul>
     */
    public $DeviceType;

    /**
     * @var string <p>全球数据库唯一标识</p>
     */
    public $GdnId;

    /**
     * @param string $Uin <p>用户Uin</p>
     * @param integer $AppId <p>用户AppId</p>
     * @param string $ClusterId <p>集群ID</p>
     * @param string $ClusterName <p>集群名称</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $InstanceType <p>引擎类型</p>
     * @param string $InstanceStatus <p>实例状态</p>
     * @param string $InstanceStatusDesc <p>实例状态描述</p>
     * @param integer $InstanceCpu <p>cpu核数</p>
     * @param integer $Cpu <p>Cpu</p><p>单位：核</p>
     * @param float $MinCpu <p>serverless实例cpu下限</p><p>单位：核</p>
     * @param float $MaxCpu <p>serverless实例cpu上限</p><p>单位：核</p>
     * @param integer $Memory <p>内存</p><p>单位：GB</p>
     * @param integer $InstanceMemory <p>内存</p>
     * @param integer $InstanceStorage <p>硬盘</p>
     * @param string $InstanceRole <p>实例角色</p>
     * @param integer $MaintainStartTime <p>执行开始时间(距离0点的秒数)</p>
     * @param integer $MaintainDuration <p>持续的时间(单位：秒)</p>
     * @param array $MaintainWeekDays <p>可以执行的时间，枚举值：[&quot;Mon&quot;,&quot;Tue&quot;,&quot;Wed&quot;,&quot;Thu&quot;,&quot;Fri&quot;, &quot;Sat&quot;, &quot;Sun&quot;]</p>
     * @param array $InstanceTasks <p>实例任务信息</p>
     * @param string $InstanceDeviceType <p>实例机器类型</p><ol><li>common，通用型。</li><li>exclusive，独享型。</li></ol>
     * @param string $InstanceStorageType <p>实例存储类型<br>说明：仅当要查询的资源为 LibraDB 时，此参数才会返回值。</p>
     * @param string $DbMode <p>数据库类型</p>
     * @param array $NodeList <p>节点列表<br>说明：仅当要查询的资源为 LibraDB 时，此参数才会返回值。</p>
     * @param string $ServerlessStatus <p>serverless实例子状态</p>
     * @param AIOptimizerStatus $AIOptimizerStatus <p>AI优化器状态</p>
     * @param integer $ProjectId <p>项目ID</p>
     * @param string $Region <p>地域</p>
     * @param string $Zone <p>可用区</p>
     * @param string $PhysicalZone <p>实例所在的物理可用区</p>
     * @param string $Status <p>实例状态</p><p>枚举值：</p><ul><li>creating： 创建中</li><li>running： 运行中</li><li>isolating： 隔离中</li><li>isolated： 已隔离</li><li>activating： 恢复中</li><li>offlining： 下线中</li><li>offlined： 已下线</li></ul>
     * @param string $StatusDesc <p>实例状态中文描述</p>
     * @param string $DbType <p>数据库类型</p>
     * @param string $DbVersion <p>数据库版本</p>
     * @param integer $Storage <p>存储量</p><p>单位：GB</p>
     * @param string $StorageId <p>预付费存储Id</p>
     * @param integer $StoragePayMode <p>存储付费类型</p><p>枚举值：</p><ul><li>0： 后付费</li><li>1： 预付费</li></ul>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param string $IsolateTime <p>隔离时间</p>
     * @param string $DestroyTime <p>实例销毁时间</p>
     * @param string $DestroyDeadlineText <p>销毁期限</p>
     * @param string $PeriodEndTime <p>实例过期时间</p>
     * @param string $VpcId <p>VPC网络ID</p>
     * @param string $SubnetId <p>子网ID</p>
     * @param string $Vip <p>实例内网IP</p>
     * @param integer $Vport <p>实例内网端口</p>
     * @param integer $NetType <p>网络类型</p>
     * @param string $WanIP <p>外网IP</p>
     * @param integer $WanPort <p>外网端口</p>
     * @param string $WanStatus <p>外网开启状态</p>
     * @param string $WanDomain <p>实例外网域名</p>
     * @param array $InstanceNetInfo <p>实例的网络信息</p>
     * @param integer $PayMode <p>付费模式</p><p>枚举值：</p><ul><li>0： 后付费</li><li>1： 预付费</li></ul>
     * @param string $ProcessingTask <p>正在处理的任务</p>
     * @param integer $RenewFlag <p>续费标志</p>
     * @param array $Tasks <p>任务</p>
     * @param string $IsFreeze <p>是否冻结</p>
     * @param array $ResourceTags <p>资源标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param InstanceAbility $InstanceAbility <p>当前实例支持的能力</p>
     * @param string $DeviceType <p>实例机器类型</p><p>枚举值：</p><ul><li>common： 通用型</li><li>exclusive： 独享型</li></ul>
     * @param string $GdnId <p>全球数据库唯一标识</p>
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("InstanceStatusDesc",$param) and $param["InstanceStatusDesc"] !== null) {
            $this->InstanceStatusDesc = $param["InstanceStatusDesc"];
        }

        if (array_key_exists("InstanceCpu",$param) and $param["InstanceCpu"] !== null) {
            $this->InstanceCpu = $param["InstanceCpu"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("MinCpu",$param) and $param["MinCpu"] !== null) {
            $this->MinCpu = $param["MinCpu"];
        }

        if (array_key_exists("MaxCpu",$param) and $param["MaxCpu"] !== null) {
            $this->MaxCpu = $param["MaxCpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("InstanceMemory",$param) and $param["InstanceMemory"] !== null) {
            $this->InstanceMemory = $param["InstanceMemory"];
        }

        if (array_key_exists("InstanceStorage",$param) and $param["InstanceStorage"] !== null) {
            $this->InstanceStorage = $param["InstanceStorage"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("MaintainStartTime",$param) and $param["MaintainStartTime"] !== null) {
            $this->MaintainStartTime = $param["MaintainStartTime"];
        }

        if (array_key_exists("MaintainDuration",$param) and $param["MaintainDuration"] !== null) {
            $this->MaintainDuration = $param["MaintainDuration"];
        }

        if (array_key_exists("MaintainWeekDays",$param) and $param["MaintainWeekDays"] !== null) {
            $this->MaintainWeekDays = $param["MaintainWeekDays"];
        }

        if (array_key_exists("InstanceTasks",$param) and $param["InstanceTasks"] !== null) {
            $this->InstanceTasks = [];
            foreach ($param["InstanceTasks"] as $key => $value){
                $obj = new ObjectTask();
                $obj->deserialize($value);
                array_push($this->InstanceTasks, $obj);
            }
        }

        if (array_key_exists("InstanceDeviceType",$param) and $param["InstanceDeviceType"] !== null) {
            $this->InstanceDeviceType = $param["InstanceDeviceType"];
        }

        if (array_key_exists("InstanceStorageType",$param) and $param["InstanceStorageType"] !== null) {
            $this->InstanceStorageType = $param["InstanceStorageType"];
        }

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("NodeList",$param) and $param["NodeList"] !== null) {
            $this->NodeList = $param["NodeList"];
        }

        if (array_key_exists("ServerlessStatus",$param) and $param["ServerlessStatus"] !== null) {
            $this->ServerlessStatus = $param["ServerlessStatus"];
        }

        if (array_key_exists("AIOptimizerStatus",$param) and $param["AIOptimizerStatus"] !== null) {
            $this->AIOptimizerStatus = new AIOptimizerStatus();
            $this->AIOptimizerStatus->deserialize($param["AIOptimizerStatus"]);
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

        if (array_key_exists("PhysicalZone",$param) and $param["PhysicalZone"] !== null) {
            $this->PhysicalZone = $param["PhysicalZone"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("StorageId",$param) and $param["StorageId"] !== null) {
            $this->StorageId = $param["StorageId"];
        }

        if (array_key_exists("StoragePayMode",$param) and $param["StoragePayMode"] !== null) {
            $this->StoragePayMode = $param["StoragePayMode"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("DestroyTime",$param) and $param["DestroyTime"] !== null) {
            $this->DestroyTime = $param["DestroyTime"];
        }

        if (array_key_exists("DestroyDeadlineText",$param) and $param["DestroyDeadlineText"] !== null) {
            $this->DestroyDeadlineText = $param["DestroyDeadlineText"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("WanIP",$param) and $param["WanIP"] !== null) {
            $this->WanIP = $param["WanIP"];
        }

        if (array_key_exists("WanPort",$param) and $param["WanPort"] !== null) {
            $this->WanPort = $param["WanPort"];
        }

        if (array_key_exists("WanStatus",$param) and $param["WanStatus"] !== null) {
            $this->WanStatus = $param["WanStatus"];
        }

        if (array_key_exists("WanDomain",$param) and $param["WanDomain"] !== null) {
            $this->WanDomain = $param["WanDomain"];
        }

        if (array_key_exists("InstanceNetInfo",$param) and $param["InstanceNetInfo"] !== null) {
            $this->InstanceNetInfo = [];
            foreach ($param["InstanceNetInfo"] as $key => $value){
                $obj = new InstanceNetInfo();
                $obj->deserialize($value);
                array_push($this->InstanceNetInfo, $obj);
            }
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ProcessingTask",$param) and $param["ProcessingTask"] !== null) {
            $this->ProcessingTask = $param["ProcessingTask"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new ObjectTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("IsFreeze",$param) and $param["IsFreeze"] !== null) {
            $this->IsFreeze = $param["IsFreeze"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("InstanceAbility",$param) and $param["InstanceAbility"] !== null) {
            $this->InstanceAbility = new InstanceAbility();
            $this->InstanceAbility->deserialize($param["InstanceAbility"]);
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("GdnId",$param) and $param["GdnId"] !== null) {
            $this->GdnId = $param["GdnId"];
        }
    }
}
