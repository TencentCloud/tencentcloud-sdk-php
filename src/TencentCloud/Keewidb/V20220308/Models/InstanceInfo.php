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
namespace TencentCloud\Keewidb\V20220308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例详细信息
 *
 * @method string getInstanceName() 获取<p>实例名称。</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称。</p>
 * @method string getInstanceId() 获取<p>实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。</p>
 * @method integer getAppid() 获取<p>用户的Appid。</p>
 * @method void setAppid(integer $Appid) 设置<p>用户的Appid。</p>
 * @method integer getProjectId() 获取<p>项目 ID。</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目 ID。</p>
 * @method integer getRegionId() 获取<p>地域ID。<ul><li>1：广州。</li><li>4：上海。</li><li>8：北京。</li></ul></p>
 * @method void setRegionId(integer $RegionId) 设置<p>地域ID。<ul><li>1：广州。</li><li>4：上海。</li><li>8：北京。</li></ul></p>
 * @method integer getZoneId() 获取<p>可用区 ID。</p>
 * @method void setZoneId(integer $ZoneId) 设置<p>可用区 ID。</p>
 * @method integer getVpcId() 获取<p>VPC 网络 ID， 如：75101。该参数当前暂保留，可忽略。</p>
 * @method void setVpcId(integer $VpcId) 设置<p>VPC 网络 ID， 如：75101。该参数当前暂保留，可忽略。</p>
 * @method integer getStatus() 获取<p>实例当前状态。<ul><li>0：待初始化。</li><li>1：实例在流程中。</li><li>2：实例运行中。</li><li>-2：实例已隔离。</li><li>-3：实例待删除。</li></ul></p>
 * @method void setStatus(integer $Status) 设置<p>实例当前状态。<ul><li>0：待初始化。</li><li>1：实例在流程中。</li><li>2：实例运行中。</li><li>-2：实例已隔离。</li><li>-3：实例待删除。</li></ul></p>
 * @method integer getSubnetId() 获取<p>VPC 网络下子网 ID， 如：46315。该参数当前暂保留，可忽略。</p>
 * @method void setSubnetId(integer $SubnetId) 设置<p>VPC 网络下子网 ID， 如：46315。该参数当前暂保留，可忽略。</p>
 * @method string getWanIp() 获取<p>实例 VIP。</p>
 * @method void setWanIp(string $WanIp) 设置<p>实例 VIP。</p>
 * @method integer getPort() 获取<p>实例端口号。</p>
 * @method void setPort(integer $Port) 设置<p>实例端口号。</p>
 * @method string getCreatetime() 获取<p>实例创建时间。</p>
 * @method void setCreatetime(string $Createtime) 设置<p>实例创建时间。</p>
 * @method float getSize() 获取<p>实例持久内存总容量大小，单位：MB。</p>
 * @method void setSize(float $Size) 设置<p>实例持久内存总容量大小，单位：MB。</p>
 * @method integer getType() 获取<p>实例类型。</p><p>枚举值：</p><ul><li>11： 存储版标准架构。</li><li>12： 存储版集群架构。</li><li>13： 极速版标准架构。</li><li>14： 极速版集群架构。</li></ul>
 * @method void setType(integer $Type) 设置<p>实例类型。</p><p>枚举值：</p><ul><li>11： 存储版标准架构。</li><li>12： 存储版集群架构。</li><li>13： 极速版标准架构。</li><li>14： 极速版集群架构。</li></ul>
 * @method integer getAutoRenewFlag() 获取<p>实例是否设置自动续费标识。<ul><li>1：设置自动续费。</li><li>0：未设置自动续费。</li></ul></p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>实例是否设置自动续费标识。<ul><li>1：设置自动续费。</li><li>0：未设置自动续费。</li></ul></p>
 * @method string getDeadlineTime() 获取<p>实例到期时间。</p>
 * @method void setDeadlineTime(string $DeadlineTime) 设置<p>实例到期时间。</p>
 * @method string getEngine() 获取<p>存储引擎。</p>
 * @method void setEngine(string $Engine) 设置<p>存储引擎。</p>
 * @method string getProductType() 获取<p>产品类型。<ul><li>standalone ：标准版。</li><li>cluster ：集群版。</li></ul></p>
 * @method void setProductType(string $ProductType) 设置<p>产品类型。<ul><li>standalone ：标准版。</li><li>cluster ：集群版。</li></ul></p>
 * @method string getUniqVpcId() 获取<p>VPC 网络 ID， 如：vpc-fk33jsf4****。</p>
 * @method void setUniqVpcId(string $UniqVpcId) 设置<p>VPC 网络 ID， 如：vpc-fk33jsf4****。</p>
 * @method string getUniqSubnetId() 获取<p>VPC 网络下子网 ID，如：subnet-fd3j6l3****。</p>
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置<p>VPC 网络下子网 ID，如：subnet-fd3j6l3****。</p>
 * @method integer getBillingMode() 获取<p>计费模式。<ul><li>0：按量计费。</li><li>1：包年包月。</li></ul></p>
 * @method void setBillingMode(integer $BillingMode) 设置<p>计费模式。<ul><li>0：按量计费。</li><li>1：包年包月。</li></ul></p>
 * @method string getInstanceTitle() 获取<p>实例运行状态描述：如”实例运行中“。</p>
 * @method void setInstanceTitle(string $InstanceTitle) 设置<p>实例运行状态描述：如”实例运行中“。</p>
 * @method string getOfflineTime() 获取<p>计划下线时间。</p>
 * @method void setOfflineTime(string $OfflineTime) 设置<p>计划下线时间。</p>
 * @method integer getSubStatus() 获取<p>流程中的实例，返回子状态。</p>
 * @method void setSubStatus(integer $SubStatus) 设置<p>流程中的实例，返回子状态。</p>
 * @method array getTags() 获取<p>反亲和性标签</p>
 * @method void setTags(array $Tags) 设置<p>反亲和性标签</p>
 * @method integer getRedisShardSize() 获取<p>分片大小。</p>
 * @method void setRedisShardSize(integer $RedisShardSize) 设置<p>分片大小。</p>
 * @method integer getRedisShardNum() 获取<p>分片数量。</p>
 * @method void setRedisShardNum(integer $RedisShardNum) 设置<p>分片数量。</p>
 * @method integer getRedisReplicasNum() 获取<p>副本数量。</p>
 * @method void setRedisReplicasNum(integer $RedisReplicasNum) 设置<p>副本数量。</p>
 * @method integer getPriceId() 获取<p>计费 ID。</p>
 * @method void setPriceId(integer $PriceId) 设置<p>计费 ID。</p>
 * @method string getCloseTime() 获取<p>隔离时间。</p>
 * @method void setCloseTime(string $CloseTime) 设置<p>隔离时间。</p>
 * @method integer getSlaveReadWeight() 获取<p>从节点读取权重。</p>
 * @method void setSlaveReadWeight(integer $SlaveReadWeight) 设置<p>从节点读取权重。</p>
 * @method array getInstanceTags() 获取<p>实例关联的标签信息。</p>
 * @method void setInstanceTags(array $InstanceTags) 设置<p>实例关联的标签信息。</p>
 * @method string getProjectName() 获取<p>项目名称。</p>
 * @method void setProjectName(string $ProjectName) 设置<p>项目名称。</p>
 * @method boolean getNoAuth() 获取<p>是否为免密实例；<ul><li>true：免密实例。</li><li>false：非免密实例。</li></ul></p>
 * @method void setNoAuth(boolean $NoAuth) 设置<p>是否为免密实例；<ul><li>true：免密实例。</li><li>false：非免密实例。</li></ul></p>
 * @method integer getClientLimit() 获取<p>客户端连接数。</p>
 * @method void setClientLimit(integer $ClientLimit) 设置<p>客户端连接数。</p>
 * @method integer getDtsStatus() 获取<p>DTS状态（内部参数，用户可忽略）。</p>
 * @method void setDtsStatus(integer $DtsStatus) 设置<p>DTS状态（内部参数，用户可忽略）。</p>
 * @method integer getNetLimit() 获取<p>分片带宽上限，单位 MB。</p>
 * @method void setNetLimit(integer $NetLimit) 设置<p>分片带宽上限，单位 MB。</p>
 * @method integer getPasswordFree() 获取<p>免密实例标识（内部参数，用户可忽略）。</p>
 * @method void setPasswordFree(integer $PasswordFree) 设置<p>免密实例标识（内部参数，用户可忽略）。</p>
 * @method integer getReadOnly() 获取<p>实例只读标识（内部参数，用户可忽略）。</p>
 * @method void setReadOnly(integer $ReadOnly) 设置<p>实例只读标识（内部参数，用户可忽略）。</p>
 * @method string getVip6() 获取<p>内部参数，用户可忽略。</p>
 * @method void setVip6(string $Vip6) 设置<p>内部参数，用户可忽略。</p>
 * @method string getRemainBandwidthDuration() 获取<p>内部参数，用户可忽略。</p>
 * @method void setRemainBandwidthDuration(string $RemainBandwidthDuration) 设置<p>内部参数，用户可忽略。</p>
 * @method integer getDiskSize() 获取<p>实例的磁盘容量大小。</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>实例的磁盘容量大小。</p>
 * @method string getMonitorVersion() 获取<p>监控版本。<ul><li>1m：分钟粒度监控。</li><li>5s：5秒粒度监控。</li></ul></p>
 * @method void setMonitorVersion(string $MonitorVersion) 设置<p>监控版本。<ul><li>1m：分钟粒度监控。</li><li>5s：5秒粒度监控。</li></ul></p>
 * @method integer getClientLimitMin() 获取<p>客户端最大连接数可设置的最小值。</p>
 * @method void setClientLimitMin(integer $ClientLimitMin) 设置<p>客户端最大连接数可设置的最小值。</p>
 * @method integer getClientLimitMax() 获取<p>客户端最大连接数可设置的最大值。</p>
 * @method void setClientLimitMax(integer $ClientLimitMax) 设置<p>客户端最大连接数可设置的最大值。</p>
 * @method array getNodeSet() 获取<p>实例的节点详细信息。</p>
 * @method void setNodeSet(array $NodeSet) 设置<p>实例的节点详细信息。</p>
 * @method string getRegion() 获取<p>实例所在的地域信息，比如ap-guangzhou。</p>
 * @method void setRegion(string $Region) 设置<p>实例所在的地域信息，比如ap-guangzhou。</p>
 * @method integer getMachineMemory() 获取<p>实例内存容量，单位：GB。KeeWiDB 内存容量</p>
 * @method void setMachineMemory(integer $MachineMemory) 设置<p>实例内存容量，单位：GB。KeeWiDB 内存容量</p>
 * @method integer getDiskShardSize() 获取<p>单分片磁盘大小，单位：MB</p>
 * @method void setDiskShardSize(integer $DiskShardSize) 设置<p>单分片磁盘大小，单位：MB</p>
 * @method integer getDiskShardNum() 获取<p>分片数量</p>
 * @method void setDiskShardNum(integer $DiskShardNum) 设置<p>分片数量</p>
 * @method integer getDiskReplicasNum() 获取<p>副本数量</p>
 * @method void setDiskReplicasNum(integer $DiskReplicasNum) 设置<p>副本数量</p>
 * @method string getCompression() 获取<p>数据压缩开关。<ul><li>ON：开启。</li><li>OFF：关闭。</li></ul></p>
 * @method void setCompression(string $Compression) 设置<p>数据压缩开关。<ul><li>ON：开启。</li><li>OFF：关闭。</li></ul></p>
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var string <p>实例名称。</p>
     */
    public $InstanceName;

    /**
     * @var string <p>实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>用户的Appid。</p>
     */
    public $Appid;

    /**
     * @var integer <p>项目 ID。</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>地域ID。<ul><li>1：广州。</li><li>4：上海。</li><li>8：北京。</li></ul></p>
     */
    public $RegionId;

    /**
     * @var integer <p>可用区 ID。</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>VPC 网络 ID， 如：75101。该参数当前暂保留，可忽略。</p>
     */
    public $VpcId;

    /**
     * @var integer <p>实例当前状态。<ul><li>0：待初始化。</li><li>1：实例在流程中。</li><li>2：实例运行中。</li><li>-2：实例已隔离。</li><li>-3：实例待删除。</li></ul></p>
     */
    public $Status;

    /**
     * @var integer <p>VPC 网络下子网 ID， 如：46315。该参数当前暂保留，可忽略。</p>
     */
    public $SubnetId;

    /**
     * @var string <p>实例 VIP。</p>
     */
    public $WanIp;

    /**
     * @var integer <p>实例端口号。</p>
     */
    public $Port;

    /**
     * @var string <p>实例创建时间。</p>
     */
    public $Createtime;

    /**
     * @var float <p>实例持久内存总容量大小，单位：MB。</p>
     */
    public $Size;

    /**
     * @var integer <p>实例类型。</p><p>枚举值：</p><ul><li>11： 存储版标准架构。</li><li>12： 存储版集群架构。</li><li>13： 极速版标准架构。</li><li>14： 极速版集群架构。</li></ul>
     */
    public $Type;

    /**
     * @var integer <p>实例是否设置自动续费标识。<ul><li>1：设置自动续费。</li><li>0：未设置自动续费。</li></ul></p>
     */
    public $AutoRenewFlag;

    /**
     * @var string <p>实例到期时间。</p>
     */
    public $DeadlineTime;

    /**
     * @var string <p>存储引擎。</p>
     */
    public $Engine;

    /**
     * @var string <p>产品类型。<ul><li>standalone ：标准版。</li><li>cluster ：集群版。</li></ul></p>
     */
    public $ProductType;

    /**
     * @var string <p>VPC 网络 ID， 如：vpc-fk33jsf4****。</p>
     */
    public $UniqVpcId;

    /**
     * @var string <p>VPC 网络下子网 ID，如：subnet-fd3j6l3****。</p>
     */
    public $UniqSubnetId;

    /**
     * @var integer <p>计费模式。<ul><li>0：按量计费。</li><li>1：包年包月。</li></ul></p>
     */
    public $BillingMode;

    /**
     * @var string <p>实例运行状态描述：如”实例运行中“。</p>
     */
    public $InstanceTitle;

    /**
     * @var string <p>计划下线时间。</p>
     */
    public $OfflineTime;

    /**
     * @var integer <p>流程中的实例，返回子状态。</p>
     */
    public $SubStatus;

    /**
     * @var array <p>反亲和性标签</p>
     */
    public $Tags;

    /**
     * @var integer <p>分片大小。</p>
     */
    public $RedisShardSize;

    /**
     * @var integer <p>分片数量。</p>
     */
    public $RedisShardNum;

    /**
     * @var integer <p>副本数量。</p>
     */
    public $RedisReplicasNum;

    /**
     * @var integer <p>计费 ID。</p>
     */
    public $PriceId;

    /**
     * @var string <p>隔离时间。</p>
     */
    public $CloseTime;

    /**
     * @var integer <p>从节点读取权重。</p>
     */
    public $SlaveReadWeight;

    /**
     * @var array <p>实例关联的标签信息。</p>
     */
    public $InstanceTags;

    /**
     * @var string <p>项目名称。</p>
     */
    public $ProjectName;

    /**
     * @var boolean <p>是否为免密实例；<ul><li>true：免密实例。</li><li>false：非免密实例。</li></ul></p>
     */
    public $NoAuth;

    /**
     * @var integer <p>客户端连接数。</p>
     */
    public $ClientLimit;

    /**
     * @var integer <p>DTS状态（内部参数，用户可忽略）。</p>
     */
    public $DtsStatus;

    /**
     * @var integer <p>分片带宽上限，单位 MB。</p>
     */
    public $NetLimit;

    /**
     * @var integer <p>免密实例标识（内部参数，用户可忽略）。</p>
     */
    public $PasswordFree;

    /**
     * @var integer <p>实例只读标识（内部参数，用户可忽略）。</p>
     */
    public $ReadOnly;

    /**
     * @var string <p>内部参数，用户可忽略。</p>
     */
    public $Vip6;

    /**
     * @var string <p>内部参数，用户可忽略。</p>
     */
    public $RemainBandwidthDuration;

    /**
     * @var integer <p>实例的磁盘容量大小。</p>
     */
    public $DiskSize;

    /**
     * @var string <p>监控版本。<ul><li>1m：分钟粒度监控。</li><li>5s：5秒粒度监控。</li></ul></p>
     */
    public $MonitorVersion;

    /**
     * @var integer <p>客户端最大连接数可设置的最小值。</p>
     */
    public $ClientLimitMin;

    /**
     * @var integer <p>客户端最大连接数可设置的最大值。</p>
     */
    public $ClientLimitMax;

    /**
     * @var array <p>实例的节点详细信息。</p>
     */
    public $NodeSet;

    /**
     * @var string <p>实例所在的地域信息，比如ap-guangzhou。</p>
     */
    public $Region;

    /**
     * @var integer <p>实例内存容量，单位：GB。KeeWiDB 内存容量</p>
     */
    public $MachineMemory;

    /**
     * @var integer <p>单分片磁盘大小，单位：MB</p>
     */
    public $DiskShardSize;

    /**
     * @var integer <p>分片数量</p>
     */
    public $DiskShardNum;

    /**
     * @var integer <p>副本数量</p>
     */
    public $DiskReplicasNum;

    /**
     * @var string <p>数据压缩开关。<ul><li>ON：开启。</li><li>OFF：关闭。</li></ul></p>
     */
    public $Compression;

    /**
     * @param string $InstanceName <p>实例名称。</p>
     * @param string $InstanceId <p>实例 ID。</p>
     * @param integer $Appid <p>用户的Appid。</p>
     * @param integer $ProjectId <p>项目 ID。</p>
     * @param integer $RegionId <p>地域ID。<ul><li>1：广州。</li><li>4：上海。</li><li>8：北京。</li></ul></p>
     * @param integer $ZoneId <p>可用区 ID。</p>
     * @param integer $VpcId <p>VPC 网络 ID， 如：75101。该参数当前暂保留，可忽略。</p>
     * @param integer $Status <p>实例当前状态。<ul><li>0：待初始化。</li><li>1：实例在流程中。</li><li>2：实例运行中。</li><li>-2：实例已隔离。</li><li>-3：实例待删除。</li></ul></p>
     * @param integer $SubnetId <p>VPC 网络下子网 ID， 如：46315。该参数当前暂保留，可忽略。</p>
     * @param string $WanIp <p>实例 VIP。</p>
     * @param integer $Port <p>实例端口号。</p>
     * @param string $Createtime <p>实例创建时间。</p>
     * @param float $Size <p>实例持久内存总容量大小，单位：MB。</p>
     * @param integer $Type <p>实例类型。</p><p>枚举值：</p><ul><li>11： 存储版标准架构。</li><li>12： 存储版集群架构。</li><li>13： 极速版标准架构。</li><li>14： 极速版集群架构。</li></ul>
     * @param integer $AutoRenewFlag <p>实例是否设置自动续费标识。<ul><li>1：设置自动续费。</li><li>0：未设置自动续费。</li></ul></p>
     * @param string $DeadlineTime <p>实例到期时间。</p>
     * @param string $Engine <p>存储引擎。</p>
     * @param string $ProductType <p>产品类型。<ul><li>standalone ：标准版。</li><li>cluster ：集群版。</li></ul></p>
     * @param string $UniqVpcId <p>VPC 网络 ID， 如：vpc-fk33jsf4****。</p>
     * @param string $UniqSubnetId <p>VPC 网络下子网 ID，如：subnet-fd3j6l3****。</p>
     * @param integer $BillingMode <p>计费模式。<ul><li>0：按量计费。</li><li>1：包年包月。</li></ul></p>
     * @param string $InstanceTitle <p>实例运行状态描述：如”实例运行中“。</p>
     * @param string $OfflineTime <p>计划下线时间。</p>
     * @param integer $SubStatus <p>流程中的实例，返回子状态。</p>
     * @param array $Tags <p>反亲和性标签</p>
     * @param integer $RedisShardSize <p>分片大小。</p>
     * @param integer $RedisShardNum <p>分片数量。</p>
     * @param integer $RedisReplicasNum <p>副本数量。</p>
     * @param integer $PriceId <p>计费 ID。</p>
     * @param string $CloseTime <p>隔离时间。</p>
     * @param integer $SlaveReadWeight <p>从节点读取权重。</p>
     * @param array $InstanceTags <p>实例关联的标签信息。</p>
     * @param string $ProjectName <p>项目名称。</p>
     * @param boolean $NoAuth <p>是否为免密实例；<ul><li>true：免密实例。</li><li>false：非免密实例。</li></ul></p>
     * @param integer $ClientLimit <p>客户端连接数。</p>
     * @param integer $DtsStatus <p>DTS状态（内部参数，用户可忽略）。</p>
     * @param integer $NetLimit <p>分片带宽上限，单位 MB。</p>
     * @param integer $PasswordFree <p>免密实例标识（内部参数，用户可忽略）。</p>
     * @param integer $ReadOnly <p>实例只读标识（内部参数，用户可忽略）。</p>
     * @param string $Vip6 <p>内部参数，用户可忽略。</p>
     * @param string $RemainBandwidthDuration <p>内部参数，用户可忽略。</p>
     * @param integer $DiskSize <p>实例的磁盘容量大小。</p>
     * @param string $MonitorVersion <p>监控版本。<ul><li>1m：分钟粒度监控。</li><li>5s：5秒粒度监控。</li></ul></p>
     * @param integer $ClientLimitMin <p>客户端最大连接数可设置的最小值。</p>
     * @param integer $ClientLimitMax <p>客户端最大连接数可设置的最大值。</p>
     * @param array $NodeSet <p>实例的节点详细信息。</p>
     * @param string $Region <p>实例所在的地域信息，比如ap-guangzhou。</p>
     * @param integer $MachineMemory <p>实例内存容量，单位：GB。KeeWiDB 内存容量</p>
     * @param integer $DiskShardSize <p>单分片磁盘大小，单位：MB</p>
     * @param integer $DiskShardNum <p>分片数量</p>
     * @param integer $DiskReplicasNum <p>副本数量</p>
     * @param string $Compression <p>数据压缩开关。<ul><li>ON：开启。</li><li>OFF：关闭。</li></ul></p>
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Createtime",$param) and $param["Createtime"] !== null) {
            $this->Createtime = $param["Createtime"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("BillingMode",$param) and $param["BillingMode"] !== null) {
            $this->BillingMode = $param["BillingMode"];
        }

        if (array_key_exists("InstanceTitle",$param) and $param["InstanceTitle"] !== null) {
            $this->InstanceTitle = $param["InstanceTitle"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }

        if (array_key_exists("SubStatus",$param) and $param["SubStatus"] !== null) {
            $this->SubStatus = $param["SubStatus"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("RedisShardSize",$param) and $param["RedisShardSize"] !== null) {
            $this->RedisShardSize = $param["RedisShardSize"];
        }

        if (array_key_exists("RedisShardNum",$param) and $param["RedisShardNum"] !== null) {
            $this->RedisShardNum = $param["RedisShardNum"];
        }

        if (array_key_exists("RedisReplicasNum",$param) and $param["RedisReplicasNum"] !== null) {
            $this->RedisReplicasNum = $param["RedisReplicasNum"];
        }

        if (array_key_exists("PriceId",$param) and $param["PriceId"] !== null) {
            $this->PriceId = $param["PriceId"];
        }

        if (array_key_exists("CloseTime",$param) and $param["CloseTime"] !== null) {
            $this->CloseTime = $param["CloseTime"];
        }

        if (array_key_exists("SlaveReadWeight",$param) and $param["SlaveReadWeight"] !== null) {
            $this->SlaveReadWeight = $param["SlaveReadWeight"];
        }

        if (array_key_exists("InstanceTags",$param) and $param["InstanceTags"] !== null) {
            $this->InstanceTags = [];
            foreach ($param["InstanceTags"] as $key => $value){
                $obj = new InstanceTagInfo();
                $obj->deserialize($value);
                array_push($this->InstanceTags, $obj);
            }
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("NoAuth",$param) and $param["NoAuth"] !== null) {
            $this->NoAuth = $param["NoAuth"];
        }

        if (array_key_exists("ClientLimit",$param) and $param["ClientLimit"] !== null) {
            $this->ClientLimit = $param["ClientLimit"];
        }

        if (array_key_exists("DtsStatus",$param) and $param["DtsStatus"] !== null) {
            $this->DtsStatus = $param["DtsStatus"];
        }

        if (array_key_exists("NetLimit",$param) and $param["NetLimit"] !== null) {
            $this->NetLimit = $param["NetLimit"];
        }

        if (array_key_exists("PasswordFree",$param) and $param["PasswordFree"] !== null) {
            $this->PasswordFree = $param["PasswordFree"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }

        if (array_key_exists("Vip6",$param) and $param["Vip6"] !== null) {
            $this->Vip6 = $param["Vip6"];
        }

        if (array_key_exists("RemainBandwidthDuration",$param) and $param["RemainBandwidthDuration"] !== null) {
            $this->RemainBandwidthDuration = $param["RemainBandwidthDuration"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("MonitorVersion",$param) and $param["MonitorVersion"] !== null) {
            $this->MonitorVersion = $param["MonitorVersion"];
        }

        if (array_key_exists("ClientLimitMin",$param) and $param["ClientLimitMin"] !== null) {
            $this->ClientLimitMin = $param["ClientLimitMin"];
        }

        if (array_key_exists("ClientLimitMax",$param) and $param["ClientLimitMax"] !== null) {
            $this->ClientLimitMax = $param["ClientLimitMax"];
        }

        if (array_key_exists("NodeSet",$param) and $param["NodeSet"] !== null) {
            $this->NodeSet = [];
            foreach ($param["NodeSet"] as $key => $value){
                $obj = new NodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeSet, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("MachineMemory",$param) and $param["MachineMemory"] !== null) {
            $this->MachineMemory = $param["MachineMemory"];
        }

        if (array_key_exists("DiskShardSize",$param) and $param["DiskShardSize"] !== null) {
            $this->DiskShardSize = $param["DiskShardSize"];
        }

        if (array_key_exists("DiskShardNum",$param) and $param["DiskShardNum"] !== null) {
            $this->DiskShardNum = $param["DiskShardNum"];
        }

        if (array_key_exists("DiskReplicasNum",$param) and $param["DiskReplicasNum"] !== null) {
            $this->DiskReplicasNum = $param["DiskReplicasNum"];
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = $param["Compression"];
        }
    }
}
