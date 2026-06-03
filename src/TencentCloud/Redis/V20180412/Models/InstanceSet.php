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
 * @method string getInstanceName() 获取<p>实例名称。</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称。</p>
 * @method string getInstanceId() 获取<p>实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。</p>
 * @method integer getAppid() 获取<p>用户AppId。AppId是与账号ID有唯一对应关系的应用 ID，部分腾讯云产品会使用此 AppId。</p>
 * @method void setAppid(integer $Appid) 设置<p>用户AppId。AppId是与账号ID有唯一对应关系的应用 ID，部分腾讯云产品会使用此 AppId。</p>
 * @method integer getProjectId() 获取<p>项目 ID。</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目 ID。</p>
 * @method integer getRegionId() 获取<p>地域 ID。<ul><li>1：广州。</li><li>4：上海。</li><li>5：中国香港。</li><li>7：上海金融。</li> <li>8：北京。</li> <li>9：新加坡。</li> <li>11：深圳金融。</li> <li>15：美西（硅谷）。</li><li>16：成都。</li><li>17：法兰克福。</li><li>18：首尔。</li><li>19：重庆。</li><li>22：美东（弗吉尼亚）。</li><li>23：曼谷。</li><li>25：东京。</li></ul></p>
 * @method void setRegionId(integer $RegionId) 设置<p>地域 ID。<ul><li>1：广州。</li><li>4：上海。</li><li>5：中国香港。</li><li>7：上海金融。</li> <li>8：北京。</li> <li>9：新加坡。</li> <li>11：深圳金融。</li> <li>15：美西（硅谷）。</li><li>16：成都。</li><li>17：法兰克福。</li><li>18：首尔。</li><li>19：重庆。</li><li>22：美东（弗吉尼亚）。</li><li>23：曼谷。</li><li>25：东京。</li></ul></p>
 * @method integer getZoneId() 获取<p>区域 ID。</p>
 * @method void setZoneId(integer $ZoneId) 设置<p>区域 ID。</p>
 * @method integer getVpcId() 获取<p>vpc网络 ID，例如75101。</p>
 * @method void setVpcId(integer $VpcId) 设置<p>vpc网络 ID，例如75101。</p>
 * @method integer getSubnetId() 获取<p>vpc网络下子网ID，如：46315。</p>
 * @method void setSubnetId(integer $SubnetId) 设置<p>vpc网络下子网ID，如：46315。</p>
 * @method integer getStatus() 获取<p>实例当前状态。<ul><li>0：待初始化。</li><li>1：实例在流程中。</li><li>2：实例运行中。</li><li>-2：实例已隔离。</li><li>-3：实例待删除。</li></ul></p>
 * @method void setStatus(integer $Status) 设置<p>实例当前状态。<ul><li>0：待初始化。</li><li>1：实例在流程中。</li><li>2：实例运行中。</li><li>-2：实例已隔离。</li><li>-3：实例待删除。</li></ul></p>
 * @method string getWanIp() 获取<p>实例 VIP。</p>
 * @method void setWanIp(string $WanIp) 设置<p>实例 VIP。</p>
 * @method integer getPort() 获取<p>实例端口号。</p>
 * @method void setPort(integer $Port) 设置<p>实例端口号。</p>
 * @method string getCreatetime() 获取<p>实例创建时间。格式如：2020-01-15 10:20:00。</p>
 * @method void setCreatetime(string $Createtime) 设置<p>实例创建时间。格式如：2020-01-15 10:20:00。</p>
 * @method float getSize() 获取<p>实例内存容量大小。单位：MB，1MB=1024KB。</p>
 * @method void setSize(float $Size) 设置<p>实例内存容量大小。单位：MB，1MB=1024KB。</p>
 * @method float getSizeUsed() 获取<p>该字段已废弃。请使用腾讯云可观测平台API 接口 <a href="https://cloud.tencent.com/document/product/248/31014">GetMonitorData</a> 获取实例已使用的内存容量。</p>
 * @method void setSizeUsed(float $SizeUsed) 设置<p>该字段已废弃。请使用腾讯云可观测平台API 接口 <a href="https://cloud.tencent.com/document/product/248/31014">GetMonitorData</a> 获取实例已使用的内存容量。</p>
 * @method integer getType() 获取<p>实例类型。</p><p>枚举值：</p><ul><li>2： Redis 2.8 内存版（标准架构）。</li><li>3： CKV 3.2 内存版（标准架构）。</li><li>4： CKV 3.2 内存版（集群架构）。</li><li>5： Redis 2.8 内存版（单机）。</li><li>6： Redis 4.0 内存版（标准架构）。</li><li>7： Redis 4.0 内存版（集群架构）。</li><li>8： Redis 5.0 内存版（标准架构）。</li><li>9： Redis 5.0 内存版（集群架构）。</li><li>15： Redis 6.2 内存版（标准架构）。</li><li>16： Redis 6.2 内存版（集群架构）。</li><li>17： Redis 7.0 内存版（标准架构）。</li><li>18： Redis 7.0 内存版（集群架构）。</li><li>19： Valkey 8.0 内存版（标准架构）。</li><li>20： Valkey 8.0 内存版（集群架构）。</li><li>200： Memcached 1.6 内存版（集群架构）。</li></ul>
 * @method void setType(integer $Type) 设置<p>实例类型。</p><p>枚举值：</p><ul><li>2： Redis 2.8 内存版（标准架构）。</li><li>3： CKV 3.2 内存版（标准架构）。</li><li>4： CKV 3.2 内存版（集群架构）。</li><li>5： Redis 2.8 内存版（单机）。</li><li>6： Redis 4.0 内存版（标准架构）。</li><li>7： Redis 4.0 内存版（集群架构）。</li><li>8： Redis 5.0 内存版（标准架构）。</li><li>9： Redis 5.0 内存版（集群架构）。</li><li>15： Redis 6.2 内存版（标准架构）。</li><li>16： Redis 6.2 内存版（集群架构）。</li><li>17： Redis 7.0 内存版（标准架构）。</li><li>18： Redis 7.0 内存版（集群架构）。</li><li>19： Valkey 8.0 内存版（标准架构）。</li><li>20： Valkey 8.0 内存版（集群架构）。</li><li>200： Memcached 1.6 内存版（集群架构）。</li></ul>
 * @method integer getAutoRenewFlag() 获取<p>实例是否设置自动续费标识。<ul><li>1：设置自动续费。</li><li>0：未设置自动续费。</li></ul></p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>实例是否设置自动续费标识。<ul><li>1：设置自动续费。</li><li>0：未设置自动续费。</li></ul></p>
 * @method string getDeadlineTime() 获取<p>包年包月计费实例到期的时间。</p>
 * @method void setDeadlineTime(string $DeadlineTime) 设置<p>包年包月计费实例到期的时间。</p>
 * @method string getEngine() 获取<p>引擎：社区版Redis、腾讯云CKV。</p>
 * @method void setEngine(string $Engine) 设置<p>引擎：社区版Redis、腾讯云CKV。</p>
 * @method string getProductType() 获取<p>产品类型。<ul><li>standalone：标准版。</li><li>cluster ：集群版。</li></ul></p>
 * @method void setProductType(string $ProductType) 设置<p>产品类型。<ul><li>standalone：标准版。</li><li>cluster ：集群版。</li></ul></p>
 * @method string getUniqVpcId() 获取<p>vpc网络id，例如vpc-fk33jsf43kgv。</p>
 * @method void setUniqVpcId(string $UniqVpcId) 设置<p>vpc网络id，例如vpc-fk33jsf43kgv。</p>
 * @method string getUniqSubnetId() 获取<p>vpc网络下子网id，例如：subnet-fd3j6l35mm0。</p>
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置<p>vpc网络下子网id，例如：subnet-fd3j6l35mm0。</p>
 * @method integer getBillingMode() 获取<p>计费模式。<ul><li>0：按量计费。</li><li>1：包年包月。</li></ul></p>
 * @method void setBillingMode(integer $BillingMode) 设置<p>计费模式。<ul><li>0：按量计费。</li><li>1：包年包月。</li></ul></p>
 * @method string getInstanceTitle() 获取<p>实例运行状态描述：如”实例运行中“。</p>
 * @method void setInstanceTitle(string $InstanceTitle) 设置<p>实例运行状态描述：如”实例运行中“。</p>
 * @method string getOfflineTime() 获取<p>已隔离实例默认下线时间。按量计费实例隔离后默认两小时后下线，包年包月默认7天后下线。格式如：2020-02-15 10:20:00。</p>
 * @method void setOfflineTime(string $OfflineTime) 设置<p>已隔离实例默认下线时间。按量计费实例隔离后默认两小时后下线，包年包月默认7天后下线。格式如：2020-02-15 10:20:00。</p>
 * @method integer getSubStatus() 获取<p>流程中的实例返回的子状态。</p><ul><li>0：磁盘读写状态。</li><li>1：磁盘超限只读状态。</li></ul>
 * @method void setSubStatus(integer $SubStatus) 设置<p>流程中的实例返回的子状态。</p><ul><li>0：磁盘读写状态。</li><li>1：磁盘超限只读状态。</li></ul>
 * @method array getTags() 获取<p>反亲和性标签。</p>
 * @method void setTags(array $Tags) 设置<p>反亲和性标签。</p>
 * @method array getInstanceNode() 获取<p>实例节点信息。</p>
 * @method void setInstanceNode(array $InstanceNode) 设置<p>实例节点信息。</p>
 * @method integer getRedisShardSize() 获取<p>分片大小。</p>
 * @method void setRedisShardSize(integer $RedisShardSize) 设置<p>分片大小。</p>
 * @method integer getRedisShardNum() 获取<p>分片数量。</p>
 * @method void setRedisShardNum(integer $RedisShardNum) 设置<p>分片数量。</p>
 * @method integer getRedisReplicasNum() 获取<p>副本数量。</p>
 * @method void setRedisReplicasNum(integer $RedisReplicasNum) 设置<p>副本数量。</p>
 * @method integer getPriceId() 获取<p>计费 ID。</p>
 * @method void setPriceId(integer $PriceId) 设置<p>计费 ID。</p>
 * @method string getCloseTime() 获取<p>实例隔离开始的时间。</p>
 * @method void setCloseTime(string $CloseTime) 设置<p>实例隔离开始的时间。</p>
 * @method integer getSlaveReadWeight() 获取<p>从节点读取权重。</p><ul><li>0：表示关闭副本只读。</li><li>100：表示开启副本只读。</li></ul>
 * @method void setSlaveReadWeight(integer $SlaveReadWeight) 设置<p>从节点读取权重。</p><ul><li>0：表示关闭副本只读。</li><li>100：表示开启副本只读。</li></ul>
 * @method array getInstanceTags() 获取<p>实例关联的标签信息。</p>
 * @method void setInstanceTags(array $InstanceTags) 设置<p>实例关联的标签信息。</p>
 * @method string getProjectName() 获取<p>项目名称。</p>
 * @method void setProjectName(string $ProjectName) 设置<p>项目名称。</p>
 * @method boolean getNoAuth() 获取<p>是否为免密实例。<ul><li>true：免密实例。</li><li>false：非免密实例。</li></ul></p>
 * @method void setNoAuth(boolean $NoAuth) 设置<p>是否为免密实例。<ul><li>true：免密实例。</li><li>false：非免密实例。</li></ul></p>
 * @method integer getClientLimit() 获取<p>客户端连接数。</p>
 * @method void setClientLimit(integer $ClientLimit) 设置<p>客户端连接数。</p>
 * @method integer getDtsStatus() 获取<p>DTS状态（内部参数，用户可忽略）。</p>
 * @method void setDtsStatus(integer $DtsStatus) 设置<p>DTS状态（内部参数，用户可忽略）。</p>
 * @method integer getNetLimit() 获取<p>分片带宽上限，单位MB。</p>
 * @method void setNetLimit(integer $NetLimit) 设置<p>分片带宽上限，单位MB。</p>
 * @method integer getPasswordFree() 获取<p>免密实例标识（内部参数，用户可忽略）。</p>
 * @method void setPasswordFree(integer $PasswordFree) 设置<p>免密实例标识（内部参数，用户可忽略）。</p>
 * @method string getVip6() 获取<p>该参数存在命名不规范问题，建议用参数IPv6取代。内部参数，用户可忽略。</p>
 * @method void setVip6(string $Vip6) 设置<p>该参数存在命名不规范问题，建议用参数IPv6取代。内部参数，用户可忽略。</p>
 * @method string getIPv6() 获取<p>内部参数，用户可忽略。</p>
 * @method void setIPv6(string $IPv6) 设置<p>内部参数，用户可忽略。</p>
 * @method integer getReadOnly() 获取<p>实例只读标识（内部参数，用户可忽略）。</p>
 * @method void setReadOnly(integer $ReadOnly) 设置<p>实例只读标识（内部参数，用户可忽略）。</p>
 * @method string getRemainBandwidthDuration() 获取<p>内部参数，用户可忽略。</p>
 * @method void setRemainBandwidthDuration(string $RemainBandwidthDuration) 设置<p>内部参数，用户可忽略。</p>
 * @method integer getDiskSize() 获取<p>Redis实例请忽略该参数。</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>Redis实例请忽略该参数。</p>
 * @method string getMonitorVersion() 获取<p>监控版本。<ul><li>1m：1分钟粒度监控。目前该监控粒度已下线，具体信息，请参见<a href="https://cloud.tencent.com/document/product/239/80653">云数据库 Redis 1分钟粒度下线公告</a>。</li><li>5s：5秒粒度监控。</li></ul></p>
 * @method void setMonitorVersion(string $MonitorVersion) 设置<p>监控版本。<ul><li>1m：1分钟粒度监控。目前该监控粒度已下线，具体信息，请参见<a href="https://cloud.tencent.com/document/product/239/80653">云数据库 Redis 1分钟粒度下线公告</a>。</li><li>5s：5秒粒度监控。</li></ul></p>
 * @method integer getClientLimitMin() 获取<p>客户端最大连接数可设置的最小值。</p>
 * @method void setClientLimitMin(integer $ClientLimitMin) 设置<p>客户端最大连接数可设置的最小值。</p>
 * @method integer getClientLimitMax() 获取<p>客户端最大连接数可设置的最大值。</p>
 * @method void setClientLimitMax(integer $ClientLimitMax) 设置<p>客户端最大连接数可设置的最大值。</p>
 * @method array getNodeSet() 获取<p>实例的节点详细信息。<br>只有多可用区实例会返回。</p>
 * @method void setNodeSet(array $NodeSet) 设置<p>实例的节点详细信息。<br>只有多可用区实例会返回。</p>
 * @method string getRegion() 获取<p>实例所在的地域信息，比如ap-guangzhou。</p>
 * @method void setRegion(string $Region) 设置<p>实例所在的地域信息，比如ap-guangzhou。</p>
 * @method string getWanAddress() 获取<p>外网地址。</p>
 * @method void setWanAddress(string $WanAddress) 设置<p>外网地址。</p>
 * @method string getPolarisServer() 获取<p>北极星服务地址，内部使用。</p>
 * @method void setPolarisServer(string $PolarisServer) 设置<p>北极星服务地址，内部使用。</p>
 * @method string getRedisClusterId() 获取<p>CDC Redis集群ID。</p>
 * @method void setRedisClusterId(string $RedisClusterId) 设置<p>CDC Redis集群ID。</p>
 * @method string getDedicatedClusterId() 获取<p>CDC 集群ID。</p>
 * @method void setDedicatedClusterId(string $DedicatedClusterId) 设置<p>CDC 集群ID。</p>
 * @method string getProductVersion() 获取<p>产品版本。<ul><li>local：本地盘。</li><li>cloud：云盘版。</li><li>cdc：CDC 集群版本。</li></ul></p>
 * @method void setProductVersion(string $ProductVersion) 设置<p>产品版本。<ul><li>local：本地盘。</li><li>cloud：云盘版。</li><li>cdc：CDC 集群版本。</li></ul></p>
 * @method string getCurrentProxyVersion() 获取<p>实例当前Proxy版本。</p>
 * @method void setCurrentProxyVersion(string $CurrentProxyVersion) 设置<p>实例当前Proxy版本。</p>
 * @method string getCurrentRedisVersion() 获取<p>实例当前Cache小版本。如果实例加入全球复制组，显示全球复制的内核版本。</p>
 * @method void setCurrentRedisVersion(string $CurrentRedisVersion) 设置<p>实例当前Cache小版本。如果实例加入全球复制组，显示全球复制的内核版本。</p>
 * @method string getUpgradeProxyVersion() 获取<p>实例可升级Proxy版本。</p>
 * @method void setUpgradeProxyVersion(string $UpgradeProxyVersion) 设置<p>实例可升级Proxy版本。</p>
 * @method string getUpgradeRedisVersion() 获取<p>实例可升级Cache小版本。</p>
 * @method void setUpgradeRedisVersion(string $UpgradeRedisVersion) 设置<p>实例可升级Cache小版本。</p>
 * @method string getBackupMode() 获取<p>备份模式。</p><ul><li>SecondLevelBackup：秒级备份。</li><li>NormalLevelBackup：普通备份。</li></ul>
 * @method void setBackupMode(string $BackupMode) 设置<p>备份模式。</p><ul><li>SecondLevelBackup：秒级备份。</li><li>NormalLevelBackup：普通备份。</li></ul>
 * @method integer getDeleteProtectionSwitch() 获取<p>实例销毁保护开关。</p><ul><li>0：关闭。</li><li>1：开启。</li></ul>
 * @method void setDeleteProtectionSwitch(integer $DeleteProtectionSwitch) 设置<p>实例销毁保护开关。</p><ul><li>0：关闭。</li><li>1：开启。</li></ul>
 */
class InstanceSet extends AbstractModel
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
     * @var integer <p>用户AppId。AppId是与账号ID有唯一对应关系的应用 ID，部分腾讯云产品会使用此 AppId。</p>
     */
    public $Appid;

    /**
     * @var integer <p>项目 ID。</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>地域 ID。<ul><li>1：广州。</li><li>4：上海。</li><li>5：中国香港。</li><li>7：上海金融。</li> <li>8：北京。</li> <li>9：新加坡。</li> <li>11：深圳金融。</li> <li>15：美西（硅谷）。</li><li>16：成都。</li><li>17：法兰克福。</li><li>18：首尔。</li><li>19：重庆。</li><li>22：美东（弗吉尼亚）。</li><li>23：曼谷。</li><li>25：东京。</li></ul></p>
     */
    public $RegionId;

    /**
     * @var integer <p>区域 ID。</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>vpc网络 ID，例如75101。</p>
     */
    public $VpcId;

    /**
     * @var integer <p>vpc网络下子网ID，如：46315。</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>实例当前状态。<ul><li>0：待初始化。</li><li>1：实例在流程中。</li><li>2：实例运行中。</li><li>-2：实例已隔离。</li><li>-3：实例待删除。</li></ul></p>
     */
    public $Status;

    /**
     * @var string <p>实例 VIP。</p>
     */
    public $WanIp;

    /**
     * @var integer <p>实例端口号。</p>
     */
    public $Port;

    /**
     * @var string <p>实例创建时间。格式如：2020-01-15 10:20:00。</p>
     */
    public $Createtime;

    /**
     * @var float <p>实例内存容量大小。单位：MB，1MB=1024KB。</p>
     */
    public $Size;

    /**
     * @var float <p>该字段已废弃。请使用腾讯云可观测平台API 接口 <a href="https://cloud.tencent.com/document/product/248/31014">GetMonitorData</a> 获取实例已使用的内存容量。</p>
     * @deprecated
     */
    public $SizeUsed;

    /**
     * @var integer <p>实例类型。</p><p>枚举值：</p><ul><li>2： Redis 2.8 内存版（标准架构）。</li><li>3： CKV 3.2 内存版（标准架构）。</li><li>4： CKV 3.2 内存版（集群架构）。</li><li>5： Redis 2.8 内存版（单机）。</li><li>6： Redis 4.0 内存版（标准架构）。</li><li>7： Redis 4.0 内存版（集群架构）。</li><li>8： Redis 5.0 内存版（标准架构）。</li><li>9： Redis 5.0 内存版（集群架构）。</li><li>15： Redis 6.2 内存版（标准架构）。</li><li>16： Redis 6.2 内存版（集群架构）。</li><li>17： Redis 7.0 内存版（标准架构）。</li><li>18： Redis 7.0 内存版（集群架构）。</li><li>19： Valkey 8.0 内存版（标准架构）。</li><li>20： Valkey 8.0 内存版（集群架构）。</li><li>200： Memcached 1.6 内存版（集群架构）。</li></ul>
     */
    public $Type;

    /**
     * @var integer <p>实例是否设置自动续费标识。<ul><li>1：设置自动续费。</li><li>0：未设置自动续费。</li></ul></p>
     */
    public $AutoRenewFlag;

    /**
     * @var string <p>包年包月计费实例到期的时间。</p>
     */
    public $DeadlineTime;

    /**
     * @var string <p>引擎：社区版Redis、腾讯云CKV。</p>
     */
    public $Engine;

    /**
     * @var string <p>产品类型。<ul><li>standalone：标准版。</li><li>cluster ：集群版。</li></ul></p>
     */
    public $ProductType;

    /**
     * @var string <p>vpc网络id，例如vpc-fk33jsf43kgv。</p>
     */
    public $UniqVpcId;

    /**
     * @var string <p>vpc网络下子网id，例如：subnet-fd3j6l35mm0。</p>
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
     * @var string <p>已隔离实例默认下线时间。按量计费实例隔离后默认两小时后下线，包年包月默认7天后下线。格式如：2020-02-15 10:20:00。</p>
     */
    public $OfflineTime;

    /**
     * @var integer <p>流程中的实例返回的子状态。</p><ul><li>0：磁盘读写状态。</li><li>1：磁盘超限只读状态。</li></ul>
     */
    public $SubStatus;

    /**
     * @var array <p>反亲和性标签。</p>
     */
    public $Tags;

    /**
     * @var array <p>实例节点信息。</p>
     */
    public $InstanceNode;

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
     * @var string <p>实例隔离开始的时间。</p>
     */
    public $CloseTime;

    /**
     * @var integer <p>从节点读取权重。</p><ul><li>0：表示关闭副本只读。</li><li>100：表示开启副本只读。</li></ul>
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
     * @var boolean <p>是否为免密实例。<ul><li>true：免密实例。</li><li>false：非免密实例。</li></ul></p>
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
     * @var integer <p>分片带宽上限，单位MB。</p>
     */
    public $NetLimit;

    /**
     * @var integer <p>免密实例标识（内部参数，用户可忽略）。</p>
     */
    public $PasswordFree;

    /**
     * @var string <p>该参数存在命名不规范问题，建议用参数IPv6取代。内部参数，用户可忽略。</p>
     */
    public $Vip6;

    /**
     * @var string <p>内部参数，用户可忽略。</p>
     */
    public $IPv6;

    /**
     * @var integer <p>实例只读标识（内部参数，用户可忽略）。</p>
     */
    public $ReadOnly;

    /**
     * @var string <p>内部参数，用户可忽略。</p>
     */
    public $RemainBandwidthDuration;

    /**
     * @var integer <p>Redis实例请忽略该参数。</p>
     */
    public $DiskSize;

    /**
     * @var string <p>监控版本。<ul><li>1m：1分钟粒度监控。目前该监控粒度已下线，具体信息，请参见<a href="https://cloud.tencent.com/document/product/239/80653">云数据库 Redis 1分钟粒度下线公告</a>。</li><li>5s：5秒粒度监控。</li></ul></p>
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
     * @var array <p>实例的节点详细信息。<br>只有多可用区实例会返回。</p>
     */
    public $NodeSet;

    /**
     * @var string <p>实例所在的地域信息，比如ap-guangzhou。</p>
     */
    public $Region;

    /**
     * @var string <p>外网地址。</p>
     */
    public $WanAddress;

    /**
     * @var string <p>北极星服务地址，内部使用。</p>
     */
    public $PolarisServer;

    /**
     * @var string <p>CDC Redis集群ID。</p>
     */
    public $RedisClusterId;

    /**
     * @var string <p>CDC 集群ID。</p>
     */
    public $DedicatedClusterId;

    /**
     * @var string <p>产品版本。<ul><li>local：本地盘。</li><li>cloud：云盘版。</li><li>cdc：CDC 集群版本。</li></ul></p>
     */
    public $ProductVersion;

    /**
     * @var string <p>实例当前Proxy版本。</p>
     */
    public $CurrentProxyVersion;

    /**
     * @var string <p>实例当前Cache小版本。如果实例加入全球复制组，显示全球复制的内核版本。</p>
     */
    public $CurrentRedisVersion;

    /**
     * @var string <p>实例可升级Proxy版本。</p>
     */
    public $UpgradeProxyVersion;

    /**
     * @var string <p>实例可升级Cache小版本。</p>
     */
    public $UpgradeRedisVersion;

    /**
     * @var string <p>备份模式。</p><ul><li>SecondLevelBackup：秒级备份。</li><li>NormalLevelBackup：普通备份。</li></ul>
     */
    public $BackupMode;

    /**
     * @var integer <p>实例销毁保护开关。</p><ul><li>0：关闭。</li><li>1：开启。</li></ul>
     */
    public $DeleteProtectionSwitch;

    /**
     * @param string $InstanceName <p>实例名称。</p>
     * @param string $InstanceId <p>实例 ID。</p>
     * @param integer $Appid <p>用户AppId。AppId是与账号ID有唯一对应关系的应用 ID，部分腾讯云产品会使用此 AppId。</p>
     * @param integer $ProjectId <p>项目 ID。</p>
     * @param integer $RegionId <p>地域 ID。<ul><li>1：广州。</li><li>4：上海。</li><li>5：中国香港。</li><li>7：上海金融。</li> <li>8：北京。</li> <li>9：新加坡。</li> <li>11：深圳金融。</li> <li>15：美西（硅谷）。</li><li>16：成都。</li><li>17：法兰克福。</li><li>18：首尔。</li><li>19：重庆。</li><li>22：美东（弗吉尼亚）。</li><li>23：曼谷。</li><li>25：东京。</li></ul></p>
     * @param integer $ZoneId <p>区域 ID。</p>
     * @param integer $VpcId <p>vpc网络 ID，例如75101。</p>
     * @param integer $SubnetId <p>vpc网络下子网ID，如：46315。</p>
     * @param integer $Status <p>实例当前状态。<ul><li>0：待初始化。</li><li>1：实例在流程中。</li><li>2：实例运行中。</li><li>-2：实例已隔离。</li><li>-3：实例待删除。</li></ul></p>
     * @param string $WanIp <p>实例 VIP。</p>
     * @param integer $Port <p>实例端口号。</p>
     * @param string $Createtime <p>实例创建时间。格式如：2020-01-15 10:20:00。</p>
     * @param float $Size <p>实例内存容量大小。单位：MB，1MB=1024KB。</p>
     * @param float $SizeUsed <p>该字段已废弃。请使用腾讯云可观测平台API 接口 <a href="https://cloud.tencent.com/document/product/248/31014">GetMonitorData</a> 获取实例已使用的内存容量。</p>
     * @param integer $Type <p>实例类型。</p><p>枚举值：</p><ul><li>2： Redis 2.8 内存版（标准架构）。</li><li>3： CKV 3.2 内存版（标准架构）。</li><li>4： CKV 3.2 内存版（集群架构）。</li><li>5： Redis 2.8 内存版（单机）。</li><li>6： Redis 4.0 内存版（标准架构）。</li><li>7： Redis 4.0 内存版（集群架构）。</li><li>8： Redis 5.0 内存版（标准架构）。</li><li>9： Redis 5.0 内存版（集群架构）。</li><li>15： Redis 6.2 内存版（标准架构）。</li><li>16： Redis 6.2 内存版（集群架构）。</li><li>17： Redis 7.0 内存版（标准架构）。</li><li>18： Redis 7.0 内存版（集群架构）。</li><li>19： Valkey 8.0 内存版（标准架构）。</li><li>20： Valkey 8.0 内存版（集群架构）。</li><li>200： Memcached 1.6 内存版（集群架构）。</li></ul>
     * @param integer $AutoRenewFlag <p>实例是否设置自动续费标识。<ul><li>1：设置自动续费。</li><li>0：未设置自动续费。</li></ul></p>
     * @param string $DeadlineTime <p>包年包月计费实例到期的时间。</p>
     * @param string $Engine <p>引擎：社区版Redis、腾讯云CKV。</p>
     * @param string $ProductType <p>产品类型。<ul><li>standalone：标准版。</li><li>cluster ：集群版。</li></ul></p>
     * @param string $UniqVpcId <p>vpc网络id，例如vpc-fk33jsf43kgv。</p>
     * @param string $UniqSubnetId <p>vpc网络下子网id，例如：subnet-fd3j6l35mm0。</p>
     * @param integer $BillingMode <p>计费模式。<ul><li>0：按量计费。</li><li>1：包年包月。</li></ul></p>
     * @param string $InstanceTitle <p>实例运行状态描述：如”实例运行中“。</p>
     * @param string $OfflineTime <p>已隔离实例默认下线时间。按量计费实例隔离后默认两小时后下线，包年包月默认7天后下线。格式如：2020-02-15 10:20:00。</p>
     * @param integer $SubStatus <p>流程中的实例返回的子状态。</p><ul><li>0：磁盘读写状态。</li><li>1：磁盘超限只读状态。</li></ul>
     * @param array $Tags <p>反亲和性标签。</p>
     * @param array $InstanceNode <p>实例节点信息。</p>
     * @param integer $RedisShardSize <p>分片大小。</p>
     * @param integer $RedisShardNum <p>分片数量。</p>
     * @param integer $RedisReplicasNum <p>副本数量。</p>
     * @param integer $PriceId <p>计费 ID。</p>
     * @param string $CloseTime <p>实例隔离开始的时间。</p>
     * @param integer $SlaveReadWeight <p>从节点读取权重。</p><ul><li>0：表示关闭副本只读。</li><li>100：表示开启副本只读。</li></ul>
     * @param array $InstanceTags <p>实例关联的标签信息。</p>
     * @param string $ProjectName <p>项目名称。</p>
     * @param boolean $NoAuth <p>是否为免密实例。<ul><li>true：免密实例。</li><li>false：非免密实例。</li></ul></p>
     * @param integer $ClientLimit <p>客户端连接数。</p>
     * @param integer $DtsStatus <p>DTS状态（内部参数，用户可忽略）。</p>
     * @param integer $NetLimit <p>分片带宽上限，单位MB。</p>
     * @param integer $PasswordFree <p>免密实例标识（内部参数，用户可忽略）。</p>
     * @param string $Vip6 <p>该参数存在命名不规范问题，建议用参数IPv6取代。内部参数，用户可忽略。</p>
     * @param string $IPv6 <p>内部参数，用户可忽略。</p>
     * @param integer $ReadOnly <p>实例只读标识（内部参数，用户可忽略）。</p>
     * @param string $RemainBandwidthDuration <p>内部参数，用户可忽略。</p>
     * @param integer $DiskSize <p>Redis实例请忽略该参数。</p>
     * @param string $MonitorVersion <p>监控版本。<ul><li>1m：1分钟粒度监控。目前该监控粒度已下线，具体信息，请参见<a href="https://cloud.tencent.com/document/product/239/80653">云数据库 Redis 1分钟粒度下线公告</a>。</li><li>5s：5秒粒度监控。</li></ul></p>
     * @param integer $ClientLimitMin <p>客户端最大连接数可设置的最小值。</p>
     * @param integer $ClientLimitMax <p>客户端最大连接数可设置的最大值。</p>
     * @param array $NodeSet <p>实例的节点详细信息。<br>只有多可用区实例会返回。</p>
     * @param string $Region <p>实例所在的地域信息，比如ap-guangzhou。</p>
     * @param string $WanAddress <p>外网地址。</p>
     * @param string $PolarisServer <p>北极星服务地址，内部使用。</p>
     * @param string $RedisClusterId <p>CDC Redis集群ID。</p>
     * @param string $DedicatedClusterId <p>CDC 集群ID。</p>
     * @param string $ProductVersion <p>产品版本。<ul><li>local：本地盘。</li><li>cloud：云盘版。</li><li>cdc：CDC 集群版本。</li></ul></p>
     * @param string $CurrentProxyVersion <p>实例当前Proxy版本。</p>
     * @param string $CurrentRedisVersion <p>实例当前Cache小版本。如果实例加入全球复制组，显示全球复制的内核版本。</p>
     * @param string $UpgradeProxyVersion <p>实例可升级Proxy版本。</p>
     * @param string $UpgradeRedisVersion <p>实例可升级Cache小版本。</p>
     * @param string $BackupMode <p>备份模式。</p><ul><li>SecondLevelBackup：秒级备份。</li><li>NormalLevelBackup：普通备份。</li></ul>
     * @param integer $DeleteProtectionSwitch <p>实例销毁保护开关。</p><ul><li>0：关闭。</li><li>1：开启。</li></ul>
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

        if (array_key_exists("DeleteProtectionSwitch",$param) and $param["DeleteProtectionSwitch"] !== null) {
            $this->DeleteProtectionSwitch = $param["DeleteProtectionSwitch"];
        }
    }
}
