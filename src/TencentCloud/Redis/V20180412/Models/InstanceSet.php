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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例详细信息列表。
 *
 * @method string getInstanceName() 获取实例名称。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
 * @method string getInstanceId() 获取实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。
 * @method integer getAppid() 获取用户APPID。APPID是与账号ID有唯一对应关系的应用 ID，部分腾讯云产品会使用此 APPID。

 * @method void setAppid(integer $Appid) 设置用户APPID。APPID是与账号ID有唯一对应关系的应用 ID，部分腾讯云产品会使用此 APPID。

 * @method integer getProjectId() 获取项目 ID。
 * @method void setProjectId(integer $ProjectId) 设置项目 ID。
 * @method integer getRegionId() 获取地域 ID。<ul><li>1：广州。</li><li>4：上海。</li><li>5：中国香港。</li><li>7：上海金融。</li> <li>8：北京。</li> <li>9：新加坡。</li> <li>11：深圳金融。</li> <li>15：美西（硅谷）。</li><li>16：成都。</li><li>17：法兰克福。</li><li>18：首尔。</li><li>19：重庆。</li><li>22：美东（弗吉尼亚）。</li><li>23：曼谷。</li><li>25：东京。</li></ul>
 * @method void setRegionId(integer $RegionId) 设置地域 ID。<ul><li>1：广州。</li><li>4：上海。</li><li>5：中国香港。</li><li>7：上海金融。</li> <li>8：北京。</li> <li>9：新加坡。</li> <li>11：深圳金融。</li> <li>15：美西（硅谷）。</li><li>16：成都。</li><li>17：法兰克福。</li><li>18：首尔。</li><li>19：重庆。</li><li>22：美东（弗吉尼亚）。</li><li>23：曼谷。</li><li>25：东京。</li></ul>
 * @method integer getZoneId() 获取区域 ID。
 * @method void setZoneId(integer $ZoneId) 设置区域 ID。
 * @method integer getVpcId() 获取vpc网络 ID，例如75101。
 * @method void setVpcId(integer $VpcId) 设置vpc网络 ID，例如75101。
 * @method integer getSubnetId() 获取vpc网络下子网ID，如：46315。
 * @method void setSubnetId(integer $SubnetId) 设置vpc网络下子网ID，如：46315。
 * @method integer getStatus() 获取实例当前状态。<ul><li>0：待初始化。</li><li>1：实例在流程中。</li><li>2：实例运行中。</li><li>-2：实例已隔离。</li><li>-3：实例待删除。</li></ul>
 * @method void setStatus(integer $Status) 设置实例当前状态。<ul><li>0：待初始化。</li><li>1：实例在流程中。</li><li>2：实例运行中。</li><li>-2：实例已隔离。</li><li>-3：实例待删除。</li></ul>
 * @method string getWanIp() 获取实例 VIP。
 * @method void setWanIp(string $WanIp) 设置实例 VIP。
 * @method integer getPort() 获取实例端口号。
 * @method void setPort(integer $Port) 设置实例端口号。
 * @method string getCreatetime() 获取实例创建时间。格式如：2020-01-15 10:20:00。
 * @method void setCreatetime(string $Createtime) 设置实例创建时间。格式如：2020-01-15 10:20:00。
 * @method float getSize() 获取实例内存容量大小。单位：MB，1MB=1024KB。
 * @method void setSize(float $Size) 设置实例内存容量大小。单位：MB，1MB=1024KB。
 * @method float getSizeUsed() 获取该字段已废弃。请使用腾讯云可观测平台API 接口 [GetMonitorData](https://cloud.tencent.com/document/product/248/31014) 获取实例已使用的内存容量。
 * @method void setSizeUsed(float $SizeUsed) 设置该字段已废弃。请使用腾讯云可观测平台API 接口 [GetMonitorData](https://cloud.tencent.com/document/product/248/31014) 获取实例已使用的内存容量。
 * @method integer getType() 获取实例类型。
- 2：Redis 2.8 内存版（标准架构）。
- 3：CKV 3.2 内存版（标准架构）。
- 4：CKV 3.2 内存版（集群架构）。
- 5：Redis 2.8 内存版（单机）。
- 6：Redis 4.0 内存版（标准架构）。
- 7：Redis 4.0 内存版（集群架构）。
- 8：Redis 5.0 内存版（标准架构）。
- 9：Redis 5.0 内存版（集群架构）。
- 15：Redis 6.2 内存版（标准架构）。
- 16：Redis 6.2 内存版（集群架构）。
- 17：Redis 7.0 内存版（标准架构）。
- 18：Redis 7.0 内存版（集群架构）。
 * @method void setType(integer $Type) 设置实例类型。
- 2：Redis 2.8 内存版（标准架构）。
- 3：CKV 3.2 内存版（标准架构）。
- 4：CKV 3.2 内存版（集群架构）。
- 5：Redis 2.8 内存版（单机）。
- 6：Redis 4.0 内存版（标准架构）。
- 7：Redis 4.0 内存版（集群架构）。
- 8：Redis 5.0 内存版（标准架构）。
- 9：Redis 5.0 内存版（集群架构）。
- 15：Redis 6.2 内存版（标准架构）。
- 16：Redis 6.2 内存版（集群架构）。
- 17：Redis 7.0 内存版（标准架构）。
- 18：Redis 7.0 内存版（集群架构）。
 * @method integer getAutoRenewFlag() 获取实例是否设置自动续费标识。<ul><li>1：设置自动续费。</li><li>0：未设置自动续费。</li></ul>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置实例是否设置自动续费标识。<ul><li>1：设置自动续费。</li><li>0：未设置自动续费。</li></ul>
 * @method string getDeadlineTime() 获取包年包月计费实例到期的时间。
 * @method void setDeadlineTime(string $DeadlineTime) 设置包年包月计费实例到期的时间。
 * @method string getEngine() 获取引擎：社区版Redis、腾讯云CKV。
 * @method void setEngine(string $Engine) 设置引擎：社区版Redis、腾讯云CKV。
 * @method string getProductType() 获取产品类型。<ul><li>standalone：标准版。</li><li>cluster ：集群版。</li></ul>
 * @method void setProductType(string $ProductType) 设置产品类型。<ul><li>standalone：标准版。</li><li>cluster ：集群版。</li></ul>
 * @method string getUniqVpcId() 获取vpc网络id，例如vpc-fk33jsf43kgv。
 * @method void setUniqVpcId(string $UniqVpcId) 设置vpc网络id，例如vpc-fk33jsf43kgv。
 * @method string getUniqSubnetId() 获取vpc网络下子网id，例如：subnet-fd3j6l35mm0。
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置vpc网络下子网id，例如：subnet-fd3j6l35mm0。
 * @method integer getBillingMode() 获取计费模式。<ul><li>0：按量计费。</li><li>1：包年包月。</li></ul>
 * @method void setBillingMode(integer $BillingMode) 设置计费模式。<ul><li>0：按量计费。</li><li>1：包年包月。</li></ul>
 * @method string getInstanceTitle() 获取实例运行状态描述：如”实例运行中“。
 * @method void setInstanceTitle(string $InstanceTitle) 设置实例运行状态描述：如”实例运行中“。
 * @method string getOfflineTime() 获取已隔离实例默认下线时间。按量计费实例隔离后默认两小时后下线，包年包月默认7天后下线。格式如：2020-02-15 10:20:00。
 * @method void setOfflineTime(string $OfflineTime) 设置已隔离实例默认下线时间。按量计费实例隔离后默认两小时后下线，包年包月默认7天后下线。格式如：2020-02-15 10:20:00。
 * @method integer getSubStatus() 获取流程中的实例返回的子状态。
- 0：磁盘读写状态。
- 1：磁盘超限只读状态。
 * @method void setSubStatus(integer $SubStatus) 设置流程中的实例返回的子状态。
- 0：磁盘读写状态。
- 1：磁盘超限只读状态。
 * @method array getTags() 获取反亲和性标签。
 * @method void setTags(array $Tags) 设置反亲和性标签。
 * @method array getInstanceNode() 获取实例节点信息。
 * @method void setInstanceNode(array $InstanceNode) 设置实例节点信息。
 * @method integer getRedisShardSize() 获取分片大小。
 * @method void setRedisShardSize(integer $RedisShardSize) 设置分片大小。
 * @method integer getRedisShardNum() 获取分片数量。
 * @method void setRedisShardNum(integer $RedisShardNum) 设置分片数量。
 * @method integer getRedisReplicasNum() 获取副本数量。
 * @method void setRedisReplicasNum(integer $RedisReplicasNum) 设置副本数量。
 * @method integer getPriceId() 获取计费 ID。
 * @method void setPriceId(integer $PriceId) 设置计费 ID。
 * @method string getCloseTime() 获取实例隔离开始的时间。
 * @method void setCloseTime(string $CloseTime) 设置实例隔离开始的时间。
 * @method integer getSlaveReadWeight() 获取从节点读取权重。
 * @method void setSlaveReadWeight(integer $SlaveReadWeight) 设置从节点读取权重。
 * @method array getInstanceTags() 获取实例关联的标签信息。
 * @method void setInstanceTags(array $InstanceTags) 设置实例关联的标签信息。
 * @method string getProjectName() 获取项目名称。
 * @method void setProjectName(string $ProjectName) 设置项目名称。
 * @method boolean getNoAuth() 获取是否为免密实例。<ul><li>true：免密实例。</li><li>false：非免密实例。</li></ul>
 * @method void setNoAuth(boolean $NoAuth) 设置是否为免密实例。<ul><li>true：免密实例。</li><li>false：非免密实例。</li></ul>
 * @method integer getClientLimit() 获取客户端连接数。
 * @method void setClientLimit(integer $ClientLimit) 设置客户端连接数。
 * @method integer getDtsStatus() 获取DTS状态（内部参数，用户可忽略）。
 * @method void setDtsStatus(integer $DtsStatus) 设置DTS状态（内部参数，用户可忽略）。
 * @method integer getNetLimit() 获取分片带宽上限，单位MB。
 * @method void setNetLimit(integer $NetLimit) 设置分片带宽上限，单位MB。
 * @method integer getPasswordFree() 获取免密实例标识（内部参数，用户可忽略）。
 * @method void setPasswordFree(integer $PasswordFree) 设置免密实例标识（内部参数，用户可忽略）。
 * @method string getVip6() 获取该参数存在命名不规范问题，建议用参数IPv6取代。内部参数，用户可忽略。
 * @method void setVip6(string $Vip6) 设置该参数存在命名不规范问题，建议用参数IPv6取代。内部参数，用户可忽略。
 * @method string getIPv6() 获取内部参数，用户可忽略。
 * @method void setIPv6(string $IPv6) 设置内部参数，用户可忽略。
 * @method integer getReadOnly() 获取实例只读标识（内部参数，用户可忽略）。
 * @method void setReadOnly(integer $ReadOnly) 设置实例只读标识（内部参数，用户可忽略）。
 * @method string getRemainBandwidthDuration() 获取内部参数，用户可忽略。
 * @method void setRemainBandwidthDuration(string $RemainBandwidthDuration) 设置内部参数，用户可忽略。
 * @method integer getDiskSize() 获取Redis实例请忽略该参数。
 * @method void setDiskSize(integer $DiskSize) 设置Redis实例请忽略该参数。
 * @method string getMonitorVersion() 获取监控版本。<ul><li>1m：1分钟粒度监控。目前该监控粒度已下线，具体信息，请参见[云数据库 Redis 1分钟粒度下线公告](https://cloud.tencent.com/document/product/239/80653)。</li><li>5s：5秒粒度监控。</li></ul>
 * @method void setMonitorVersion(string $MonitorVersion) 设置监控版本。<ul><li>1m：1分钟粒度监控。目前该监控粒度已下线，具体信息，请参见[云数据库 Redis 1分钟粒度下线公告](https://cloud.tencent.com/document/product/239/80653)。</li><li>5s：5秒粒度监控。</li></ul>
 * @method integer getClientLimitMin() 获取客户端最大连接数可设置的最小值。
 * @method void setClientLimitMin(integer $ClientLimitMin) 设置客户端最大连接数可设置的最小值。
 * @method integer getClientLimitMax() 获取客户端最大连接数可设置的最大值。
 * @method void setClientLimitMax(integer $ClientLimitMax) 设置客户端最大连接数可设置的最大值。
 * @method array getNodeSet() 获取实例的节点详细信息。
 * @method void setNodeSet(array $NodeSet) 设置实例的节点详细信息。
 * @method string getRegion() 获取实例所在的地域信息，比如ap-guangzhou。
 * @method void setRegion(string $Region) 设置实例所在的地域信息，比如ap-guangzhou。
 * @method string getWanAddress() 获取外网地址。
 * @method void setWanAddress(string $WanAddress) 设置外网地址。
 * @method string getPolarisServer() 获取北极星服务地址，内部使用。
 * @method void setPolarisServer(string $PolarisServer) 设置北极星服务地址，内部使用。
 * @method string getRedisClusterId() 获取CDC Redis集群ID。
 * @method void setRedisClusterId(string $RedisClusterId) 设置CDC Redis集群ID。
 * @method string getDedicatedClusterId() 获取CDC 集群ID。
 * @method void setDedicatedClusterId(string $DedicatedClusterId) 设置CDC 集群ID。
 * @method string getProductVersion() 获取产品版本。<ul><li>local：本地盘。</li><li>cloud：云盘版。</li><li>cdc：CDC 集群版本。</li></ul>
 * @method void setProductVersion(string $ProductVersion) 设置产品版本。<ul><li>local：本地盘。</li><li>cloud：云盘版。</li><li>cdc：CDC 集群版本。</li></ul>
 * @method string getCurrentProxyVersion() 获取实例当前Proxy版本。
 * @method void setCurrentProxyVersion(string $CurrentProxyVersion) 设置实例当前Proxy版本。
 * @method string getCurrentRedisVersion() 获取实例当前Cache小版本。如果实例加入全球复制组，显示全球复制的内核版本。
 * @method void setCurrentRedisVersion(string $CurrentRedisVersion) 设置实例当前Cache小版本。如果实例加入全球复制组，显示全球复制的内核版本。
 * @method string getUpgradeProxyVersion() 获取实例可升级Proxy版本。
 * @method void setUpgradeProxyVersion(string $UpgradeProxyVersion) 设置实例可升级Proxy版本。
 * @method string getUpgradeRedisVersion() 获取实例可升级Cache小版本。
 * @method void setUpgradeRedisVersion(string $UpgradeRedisVersion) 设置实例可升级Cache小版本。
 * @method string getBackupMode() 获取备份模式：- SecondLevelBackup   秒级备份- NormalLevelBackup    普通备份
 * @method void setBackupMode(string $BackupMode) 设置备份模式：- SecondLevelBackup   秒级备份- NormalLevelBackup    普通备份
 */
class InstanceSet extends AbstractModel
{
    /**
     * @var string 实例名称。
     */
    public $InstanceName;

    /**
     * @var string 实例 ID。
     */
    public $InstanceId;

    /**
     * @var integer 用户APPID。APPID是与账号ID有唯一对应关系的应用 ID，部分腾讯云产品会使用此 APPID。

     */
    public $Appid;

    /**
     * @var integer 项目 ID。
     */
    public $ProjectId;

    /**
     * @var integer 地域 ID。<ul><li>1：广州。</li><li>4：上海。</li><li>5：中国香港。</li><li>7：上海金融。</li> <li>8：北京。</li> <li>9：新加坡。</li> <li>11：深圳金融。</li> <li>15：美西（硅谷）。</li><li>16：成都。</li><li>17：法兰克福。</li><li>18：首尔。</li><li>19：重庆。</li><li>22：美东（弗吉尼亚）。</li><li>23：曼谷。</li><li>25：东京。</li></ul>
     */
    public $RegionId;

    /**
     * @var integer 区域 ID。
     */
    public $ZoneId;

    /**
     * @var integer vpc网络 ID，例如75101。
     */
    public $VpcId;

    /**
     * @var integer vpc网络下子网ID，如：46315。
     */
    public $SubnetId;

    /**
     * @var integer 实例当前状态。<ul><li>0：待初始化。</li><li>1：实例在流程中。</li><li>2：实例运行中。</li><li>-2：实例已隔离。</li><li>-3：实例待删除。</li></ul>
     */
    public $Status;

    /**
     * @var string 实例 VIP。
     */
    public $WanIp;

    /**
     * @var integer 实例端口号。
     */
    public $Port;

    /**
     * @var string 实例创建时间。格式如：2020-01-15 10:20:00。
     */
    public $Createtime;

    /**
     * @var float 实例内存容量大小。单位：MB，1MB=1024KB。
     */
    public $Size;

    /**
     * @var float 该字段已废弃。请使用腾讯云可观测平台API 接口 [GetMonitorData](https://cloud.tencent.com/document/product/248/31014) 获取实例已使用的内存容量。
     * @deprecated
     */
    public $SizeUsed;

    /**
     * @var integer 实例类型。
- 2：Redis 2.8 内存版（标准架构）。
- 3：CKV 3.2 内存版（标准架构）。
- 4：CKV 3.2 内存版（集群架构）。
- 5：Redis 2.8 内存版（单机）。
- 6：Redis 4.0 内存版（标准架构）。
- 7：Redis 4.0 内存版（集群架构）。
- 8：Redis 5.0 内存版（标准架构）。
- 9：Redis 5.0 内存版（集群架构）。
- 15：Redis 6.2 内存版（标准架构）。
- 16：Redis 6.2 内存版（集群架构）。
- 17：Redis 7.0 内存版（标准架构）。
- 18：Redis 7.0 内存版（集群架构）。
     */
    public $Type;

    /**
     * @var integer 实例是否设置自动续费标识。<ul><li>1：设置自动续费。</li><li>0：未设置自动续费。</li></ul>
     */
    public $AutoRenewFlag;

    /**
     * @var string 包年包月计费实例到期的时间。
     */
    public $DeadlineTime;

    /**
     * @var string 引擎：社区版Redis、腾讯云CKV。
     */
    public $Engine;

    /**
     * @var string 产品类型。<ul><li>standalone：标准版。</li><li>cluster ：集群版。</li></ul>
     */
    public $ProductType;

    /**
     * @var string vpc网络id，例如vpc-fk33jsf43kgv。
     */
    public $UniqVpcId;

    /**
     * @var string vpc网络下子网id，例如：subnet-fd3j6l35mm0。
     */
    public $UniqSubnetId;

    /**
     * @var integer 计费模式。<ul><li>0：按量计费。</li><li>1：包年包月。</li></ul>
     */
    public $BillingMode;

    /**
     * @var string 实例运行状态描述：如”实例运行中“。
     */
    public $InstanceTitle;

    /**
     * @var string 已隔离实例默认下线时间。按量计费实例隔离后默认两小时后下线，包年包月默认7天后下线。格式如：2020-02-15 10:20:00。
     */
    public $OfflineTime;

    /**
     * @var integer 流程中的实例返回的子状态。
- 0：磁盘读写状态。
- 1：磁盘超限只读状态。
     */
    public $SubStatus;

    /**
     * @var array 反亲和性标签。
     */
    public $Tags;

    /**
     * @var array 实例节点信息。
     */
    public $InstanceNode;

    /**
     * @var integer 分片大小。
     */
    public $RedisShardSize;

    /**
     * @var integer 分片数量。
     */
    public $RedisShardNum;

    /**
     * @var integer 副本数量。
     */
    public $RedisReplicasNum;

    /**
     * @var integer 计费 ID。
     */
    public $PriceId;

    /**
     * @var string 实例隔离开始的时间。
     */
    public $CloseTime;

    /**
     * @var integer 从节点读取权重。
     */
    public $SlaveReadWeight;

    /**
     * @var array 实例关联的标签信息。
     */
    public $InstanceTags;

    /**
     * @var string 项目名称。
     */
    public $ProjectName;

    /**
     * @var boolean 是否为免密实例。<ul><li>true：免密实例。</li><li>false：非免密实例。</li></ul>
     */
    public $NoAuth;

    /**
     * @var integer 客户端连接数。
     */
    public $ClientLimit;

    /**
     * @var integer DTS状态（内部参数，用户可忽略）。
     */
    public $DtsStatus;

    /**
     * @var integer 分片带宽上限，单位MB。
     */
    public $NetLimit;

    /**
     * @var integer 免密实例标识（内部参数，用户可忽略）。
     */
    public $PasswordFree;

    /**
     * @var string 该参数存在命名不规范问题，建议用参数IPv6取代。内部参数，用户可忽略。
     */
    public $Vip6;

    /**
     * @var string 内部参数，用户可忽略。
     */
    public $IPv6;

    /**
     * @var integer 实例只读标识（内部参数，用户可忽略）。
     */
    public $ReadOnly;

    /**
     * @var string 内部参数，用户可忽略。
     */
    public $RemainBandwidthDuration;

    /**
     * @var integer Redis实例请忽略该参数。
     */
    public $DiskSize;

    /**
     * @var string 监控版本。<ul><li>1m：1分钟粒度监控。目前该监控粒度已下线，具体信息，请参见[云数据库 Redis 1分钟粒度下线公告](https://cloud.tencent.com/document/product/239/80653)。</li><li>5s：5秒粒度监控。</li></ul>
     */
    public $MonitorVersion;

    /**
     * @var integer 客户端最大连接数可设置的最小值。
     */
    public $ClientLimitMin;

    /**
     * @var integer 客户端最大连接数可设置的最大值。
     */
    public $ClientLimitMax;

    /**
     * @var array 实例的节点详细信息。
     */
    public $NodeSet;

    /**
     * @var string 实例所在的地域信息，比如ap-guangzhou。
     */
    public $Region;

    /**
     * @var string 外网地址。
     */
    public $WanAddress;

    /**
     * @var string 北极星服务地址，内部使用。
     */
    public $PolarisServer;

    /**
     * @var string CDC Redis集群ID。
     */
    public $RedisClusterId;

    /**
     * @var string CDC 集群ID。
     */
    public $DedicatedClusterId;

    /**
     * @var string 产品版本。<ul><li>local：本地盘。</li><li>cloud：云盘版。</li><li>cdc：CDC 集群版本。</li></ul>
     */
    public $ProductVersion;

    /**
     * @var string 实例当前Proxy版本。
     */
    public $CurrentProxyVersion;

    /**
     * @var string 实例当前Cache小版本。如果实例加入全球复制组，显示全球复制的内核版本。
     */
    public $CurrentRedisVersion;

    /**
     * @var string 实例可升级Proxy版本。
     */
    public $UpgradeProxyVersion;

    /**
     * @var string 实例可升级Cache小版本。
     */
    public $UpgradeRedisVersion;

    /**
     * @var string 备份模式：- SecondLevelBackup   秒级备份- NormalLevelBackup    普通备份
     */
    public $BackupMode;

    /**
     * @param string $InstanceName 实例名称。
     * @param string $InstanceId 实例 ID。
     * @param integer $Appid 用户APPID。APPID是与账号ID有唯一对应关系的应用 ID，部分腾讯云产品会使用此 APPID。

     * @param integer $ProjectId 项目 ID。
     * @param integer $RegionId 地域 ID。<ul><li>1：广州。</li><li>4：上海。</li><li>5：中国香港。</li><li>7：上海金融。</li> <li>8：北京。</li> <li>9：新加坡。</li> <li>11：深圳金融。</li> <li>15：美西（硅谷）。</li><li>16：成都。</li><li>17：法兰克福。</li><li>18：首尔。</li><li>19：重庆。</li><li>22：美东（弗吉尼亚）。</li><li>23：曼谷。</li><li>25：东京。</li></ul>
     * @param integer $ZoneId 区域 ID。
     * @param integer $VpcId vpc网络 ID，例如75101。
     * @param integer $SubnetId vpc网络下子网ID，如：46315。
     * @param integer $Status 实例当前状态。<ul><li>0：待初始化。</li><li>1：实例在流程中。</li><li>2：实例运行中。</li><li>-2：实例已隔离。</li><li>-3：实例待删除。</li></ul>
     * @param string $WanIp 实例 VIP。
     * @param integer $Port 实例端口号。
     * @param string $Createtime 实例创建时间。格式如：2020-01-15 10:20:00。
     * @param float $Size 实例内存容量大小。单位：MB，1MB=1024KB。
     * @param float $SizeUsed 该字段已废弃。请使用腾讯云可观测平台API 接口 [GetMonitorData](https://cloud.tencent.com/document/product/248/31014) 获取实例已使用的内存容量。
     * @param integer $Type 实例类型。
- 2：Redis 2.8 内存版（标准架构）。
- 3：CKV 3.2 内存版（标准架构）。
- 4：CKV 3.2 内存版（集群架构）。
- 5：Redis 2.8 内存版（单机）。
- 6：Redis 4.0 内存版（标准架构）。
- 7：Redis 4.0 内存版（集群架构）。
- 8：Redis 5.0 内存版（标准架构）。
- 9：Redis 5.0 内存版（集群架构）。
- 15：Redis 6.2 内存版（标准架构）。
- 16：Redis 6.2 内存版（集群架构）。
- 17：Redis 7.0 内存版（标准架构）。
- 18：Redis 7.0 内存版（集群架构）。
     * @param integer $AutoRenewFlag 实例是否设置自动续费标识。<ul><li>1：设置自动续费。</li><li>0：未设置自动续费。</li></ul>
     * @param string $DeadlineTime 包年包月计费实例到期的时间。
     * @param string $Engine 引擎：社区版Redis、腾讯云CKV。
     * @param string $ProductType 产品类型。<ul><li>standalone：标准版。</li><li>cluster ：集群版。</li></ul>
     * @param string $UniqVpcId vpc网络id，例如vpc-fk33jsf43kgv。
     * @param string $UniqSubnetId vpc网络下子网id，例如：subnet-fd3j6l35mm0。
     * @param integer $BillingMode 计费模式。<ul><li>0：按量计费。</li><li>1：包年包月。</li></ul>
     * @param string $InstanceTitle 实例运行状态描述：如”实例运行中“。
     * @param string $OfflineTime 已隔离实例默认下线时间。按量计费实例隔离后默认两小时后下线，包年包月默认7天后下线。格式如：2020-02-15 10:20:00。
     * @param integer $SubStatus 流程中的实例返回的子状态。
- 0：磁盘读写状态。
- 1：磁盘超限只读状态。
     * @param array $Tags 反亲和性标签。
     * @param array $InstanceNode 实例节点信息。
     * @param integer $RedisShardSize 分片大小。
     * @param integer $RedisShardNum 分片数量。
     * @param integer $RedisReplicasNum 副本数量。
     * @param integer $PriceId 计费 ID。
     * @param string $CloseTime 实例隔离开始的时间。
     * @param integer $SlaveReadWeight 从节点读取权重。
     * @param array $InstanceTags 实例关联的标签信息。
     * @param string $ProjectName 项目名称。
     * @param boolean $NoAuth 是否为免密实例。<ul><li>true：免密实例。</li><li>false：非免密实例。</li></ul>
     * @param integer $ClientLimit 客户端连接数。
     * @param integer $DtsStatus DTS状态（内部参数，用户可忽略）。
     * @param integer $NetLimit 分片带宽上限，单位MB。
     * @param integer $PasswordFree 免密实例标识（内部参数，用户可忽略）。
     * @param string $Vip6 该参数存在命名不规范问题，建议用参数IPv6取代。内部参数，用户可忽略。
     * @param string $IPv6 内部参数，用户可忽略。
     * @param integer $ReadOnly 实例只读标识（内部参数，用户可忽略）。
     * @param string $RemainBandwidthDuration 内部参数，用户可忽略。
     * @param integer $DiskSize Redis实例请忽略该参数。
     * @param string $MonitorVersion 监控版本。<ul><li>1m：1分钟粒度监控。目前该监控粒度已下线，具体信息，请参见[云数据库 Redis 1分钟粒度下线公告](https://cloud.tencent.com/document/product/239/80653)。</li><li>5s：5秒粒度监控。</li></ul>
     * @param integer $ClientLimitMin 客户端最大连接数可设置的最小值。
     * @param integer $ClientLimitMax 客户端最大连接数可设置的最大值。
     * @param array $NodeSet 实例的节点详细信息。
     * @param string $Region 实例所在的地域信息，比如ap-guangzhou。
     * @param string $WanAddress 外网地址。
     * @param string $PolarisServer 北极星服务地址，内部使用。
     * @param string $RedisClusterId CDC Redis集群ID。
     * @param string $DedicatedClusterId CDC 集群ID。
     * @param string $ProductVersion 产品版本。<ul><li>local：本地盘。</li><li>cloud：云盘版。</li><li>cdc：CDC 集群版本。</li></ul>
     * @param string $CurrentProxyVersion 实例当前Proxy版本。
     * @param string $CurrentRedisVersion 实例当前Cache小版本。如果实例加入全球复制组，显示全球复制的内核版本。
     * @param string $UpgradeProxyVersion 实例可升级Proxy版本。
     * @param string $UpgradeRedisVersion 实例可升级Cache小版本。
     * @param string $BackupMode 备份模式：- SecondLevelBackup   秒级备份- NormalLevelBackup    普通备份
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

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("SizeUsed",$param) and $param["SizeUsed"] !== null) {
            $this->SizeUsed = $param["SizeUsed"];
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

        if (array_key_exists("InstanceNode",$param) and $param["InstanceNode"] !== null) {
            $this->InstanceNode = [];
            foreach ($param["InstanceNode"] as $key => $value){
                $obj = new InstanceNode();
                $obj->deserialize($value);
                array_push($this->InstanceNode, $obj);
            }
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

        if (array_key_exists("Vip6",$param) and $param["Vip6"] !== null) {
            $this->Vip6 = $param["Vip6"];
        }

        if (array_key_exists("IPv6",$param) and $param["IPv6"] !== null) {
            $this->IPv6 = $param["IPv6"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
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
                $obj = new RedisNodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeSet, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("WanAddress",$param) and $param["WanAddress"] !== null) {
            $this->WanAddress = $param["WanAddress"];
        }

        if (array_key_exists("PolarisServer",$param) and $param["PolarisServer"] !== null) {
            $this->PolarisServer = $param["PolarisServer"];
        }

        if (array_key_exists("RedisClusterId",$param) and $param["RedisClusterId"] !== null) {
            $this->RedisClusterId = $param["RedisClusterId"];
        }

        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }

        if (array_key_exists("ProductVersion",$param) and $param["ProductVersion"] !== null) {
            $this->ProductVersion = $param["ProductVersion"];
        }

        if (array_key_exists("CurrentProxyVersion",$param) and $param["CurrentProxyVersion"] !== null) {
            $this->CurrentProxyVersion = $param["CurrentProxyVersion"];
        }

        if (array_key_exists("CurrentRedisVersion",$param) and $param["CurrentRedisVersion"] !== null) {
            $this->CurrentRedisVersion = $param["CurrentRedisVersion"];
        }

        if (array_key_exists("UpgradeProxyVersion",$param) and $param["UpgradeProxyVersion"] !== null) {
            $this->UpgradeProxyVersion = $param["UpgradeProxyVersion"];
        }

        if (array_key_exists("UpgradeRedisVersion",$param) and $param["UpgradeRedisVersion"] !== null) {
            $this->UpgradeRedisVersion = $param["UpgradeRedisVersion"];
        }

        if (array_key_exists("BackupMode",$param) and $param["BackupMode"] !== null) {
            $this->BackupMode = $param["BackupMode"];
        }
    }
}
