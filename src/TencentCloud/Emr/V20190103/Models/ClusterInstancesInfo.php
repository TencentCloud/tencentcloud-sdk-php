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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群实例信息
 *
 * @method integer getId() 获取<p>ID号</p>
 * @method void setId(integer $Id) 设置<p>ID号</p>
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method string getFtitle() 获取<p>标题</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFtitle(string $Ftitle) 设置<p>标题</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取<p>集群名</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名</p>
 * @method integer getRegionId() 获取<p>地域ID</p>
 * @method void setRegionId(integer $RegionId) 设置<p>地域ID</p>
 * @method integer getZoneId() 获取<p>地区ID</p>
 * @method void setZoneId(integer $ZoneId) 设置<p>地区ID</p>
 * @method integer getAppId() 获取<p>用户APPID</p>
 * @method void setAppId(integer $AppId) 设置<p>用户APPID</p>
 * @method string getUin() 获取<p>用户UIN</p>
 * @method void setUin(string $Uin) 设置<p>用户UIN</p>
 * @method integer getProjectId() 获取<p>项目Id</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目Id</p>
 * @method integer getVpcId() 获取<p>集群VPCID</p>
 * @method void setVpcId(integer $VpcId) 设置<p>集群VPCID</p>
 * @method integer getSubnetId() 获取<p>子网ID</p>
 * @method void setSubnetId(integer $SubnetId) 设置<p>子网ID</p>
 * @method integer getStatus() 获取<p>实例的状态码。取值范围：</p><li>2：表示集群运行中。</li><li>3：表示集群创建中。</li><li>4：表示集群扩容中。</li><li>5：表示集群增加router节点中。</li><li>6：表示集群安装组件中。</li><li>7：表示集群执行命令中。</li><li>8：表示重启服务中。</li><li>9：表示进入维护中。</li><li>10：表示服务暂停中。</li><li>11：表示退出维护中。</li><li>12：表示退出暂停中。</li><li>13：表示配置下发中。</li><li>14：表示销毁集群中。</li><li>15：表示销毁core节点中。</li><li>16：销毁task节点中。</li><li>17：表示销毁router节点中。</li><li>18：表示更改webproxy密码中。</li><li>19：表示集群隔离中。</li><li>20：表示集群冲正中。</li><li>21：表示集群回收中。</li><li>22：表示变配等待中。</li><li>23：表示集群已隔离。</li><li>24：表示缩容节点中。</li><li>33：表示集群等待退费中。</li><li>34：表示集群已退费。</li><li>301：表示创建失败。</li><li>302：表示扩容失败。</li>
 * @method void setStatus(integer $Status) 设置<p>实例的状态码。取值范围：</p><li>2：表示集群运行中。</li><li>3：表示集群创建中。</li><li>4：表示集群扩容中。</li><li>5：表示集群增加router节点中。</li><li>6：表示集群安装组件中。</li><li>7：表示集群执行命令中。</li><li>8：表示重启服务中。</li><li>9：表示进入维护中。</li><li>10：表示服务暂停中。</li><li>11：表示退出维护中。</li><li>12：表示退出暂停中。</li><li>13：表示配置下发中。</li><li>14：表示销毁集群中。</li><li>15：表示销毁core节点中。</li><li>16：销毁task节点中。</li><li>17：表示销毁router节点中。</li><li>18：表示更改webproxy密码中。</li><li>19：表示集群隔离中。</li><li>20：表示集群冲正中。</li><li>21：表示集群回收中。</li><li>22：表示变配等待中。</li><li>23：表示集群已隔离。</li><li>24：表示缩容节点中。</li><li>33：表示集群等待退费中。</li><li>34：表示集群已退费。</li><li>301：表示创建失败。</li><li>302：表示扩容失败。</li>
 * @method string getAddTime() 获取<p>添加时间</p>
 * @method void setAddTime(string $AddTime) 设置<p>添加时间</p>
 * @method string getRunTime() 获取<p>已经运行时间</p>
 * @method void setRunTime(string $RunTime) 设置<p>已经运行时间</p>
 * @method EmrProductConfigOutter getConfig() 获取<p>集群产品配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfig(EmrProductConfigOutter $Config) 设置<p>集群产品配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMasterIp() 获取<p>主节点外网IP</p>
 * @method void setMasterIp(string $MasterIp) 设置<p>主节点外网IP</p>
 * @method string getEmrVersion() 获取<p>EMR版本</p>
 * @method void setEmrVersion(string $EmrVersion) 设置<p>EMR版本</p>
 * @method integer getChargeType() 获取<p>收费类型</p>
 * @method void setChargeType(integer $ChargeType) 设置<p>收费类型</p>
 * @method integer getTradeVersion() 获取<p>交易版本</p>
 * @method void setTradeVersion(integer $TradeVersion) 设置<p>交易版本</p>
 * @method integer getResourceOrderId() 获取<p>资源订单ID</p>
 * @method void setResourceOrderId(integer $ResourceOrderId) 设置<p>资源订单ID</p>
 * @method integer getIsTradeCluster() 获取<p>是否计费集群</p>
 * @method void setIsTradeCluster(integer $IsTradeCluster) 设置<p>是否计费集群</p>
 * @method string getAlarmInfo() 获取<p>集群错误状态告警信息</p>
 * @method void setAlarmInfo(string $AlarmInfo) 设置<p>集群错误状态告警信息</p>
 * @method integer getIsWoodpeckerCluster() 获取<p>是否采用新架构</p>
 * @method void setIsWoodpeckerCluster(integer $IsWoodpeckerCluster) 设置<p>是否采用新架构</p>
 * @method string getMetaDb() 获取<p>元数据库信息</p>
 * @method void setMetaDb(string $MetaDb) 设置<p>元数据库信息</p>
 * @method array getTags() 获取<p>标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHiveMetaDb() 获取<p>Hive元数据信息</p>
 * @method void setHiveMetaDb(string $HiveMetaDb) 设置<p>Hive元数据信息</p>
 * @method string getServiceClass() 获取<p>集群类型:EMR,CLICKHOUSE,DRUID</p>
 * @method void setServiceClass(string $ServiceClass) 设置<p>集群类型:EMR,CLICKHOUSE,DRUID</p>
 * @method string getAliasInfo() 获取<p>集群所有节点的别名序列化</p>
 * @method void setAliasInfo(string $AliasInfo) 设置<p>集群所有节点的别名序列化</p>
 * @method integer getProductId() 获取<p>集群版本Id</p>
 * @method void setProductId(integer $ProductId) 设置<p>集群版本Id</p>
 * @method string getZone() 获取<p>地区ID</p>
 * @method void setZone(string $Zone) 设置<p>地区ID</p>
 * @method string getSceneName() 获取<p>场景名称</p>
 * @method void setSceneName(string $SceneName) 设置<p>场景名称</p>
 * @method string getSceneServiceClass() 获取<p>场景化集群类型</p>
 * @method void setSceneServiceClass(string $SceneServiceClass) 设置<p>场景化集群类型</p>
 * @method string getSceneEmrVersion() 获取<p>场景化EMR版本</p>
 * @method void setSceneEmrVersion(string $SceneEmrVersion) 设置<p>场景化EMR版本</p>
 * @method string getDisplayName() 获取<p>场景化集群类型</p>
 * @method void setDisplayName(string $DisplayName) 设置<p>场景化集群类型</p>
 * @method string getVpcName() 获取<p>vpc name</p>
 * @method void setVpcName(string $VpcName) 设置<p>vpc name</p>
 * @method string getSubnetName() 获取<p>subnet name</p>
 * @method void setSubnetName(string $SubnetName) 设置<p>subnet name</p>
 * @method array getClusterExternalServiceInfo() 获取<p>集群依赖关系</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterExternalServiceInfo(array $ClusterExternalServiceInfo) 设置<p>集群依赖关系</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUniqVpcId() 获取<p>集群vpcid 字符串类型</p>
 * @method void setUniqVpcId(string $UniqVpcId) 设置<p>集群vpcid 字符串类型</p>
 * @method string getUniqSubnetId() 获取<p>子网id 字符串类型</p>
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置<p>子网id 字符串类型</p>
 * @method array getTopologyInfoList() 获取<p>节点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopologyInfoList(array $TopologyInfoList) 设置<p>节点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsMultiZoneCluster() 获取<p>是否是跨AZ集群</p>
 * @method void setIsMultiZoneCluster(boolean $IsMultiZoneCluster) 设置<p>是否是跨AZ集群</p>
 * @method boolean getIsCvmReplace() 获取<p>是否开通异常节点自动补偿</p>
 * @method void setIsCvmReplace(boolean $IsCvmReplace) 设置<p>是否开通异常节点自动补偿</p>
 * @method string getClusterTitle() 获取<p>标题</p>
 * @method void setClusterTitle(string $ClusterTitle) 设置<p>标题</p>
 * @method EmrProductConfigDetail getConfigDetail() 获取<p>集群产品配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigDetail(EmrProductConfigDetail $ConfigDetail) 设置<p>集群产品配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBindFileSystemNum() 获取<p>集群绑定的文件系统数</p>
 * @method void setBindFileSystemNum(integer $BindFileSystemNum) 设置<p>集群绑定的文件系统数</p>
 * @method array getClusterRelationInfoList() 获取<p>rss集群的绑定列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterRelationInfoList(array $ClusterRelationInfoList) 设置<p>rss集群的绑定列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRedisId() 获取<p>Redis信息</p>
 * @method void setRedisId(string $RedisId) 设置<p>Redis信息</p>
 * @method boolean getIsIOHungSelfRecovery() 获取<p>是否开启IO故障自愈</p>
 * @method void setIsIOHungSelfRecovery(boolean $IsIOHungSelfRecovery) 设置<p>是否开启IO故障自愈</p>
 * @method array getMetaDBGroupInfo() 获取<p>元数据信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaDBGroupInfo(array $MetaDBGroupInfo) 设置<p>元数据信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClusterInstancesInfo extends AbstractModel
{
    /**
     * @var integer <p>ID号</p>
     */
    public $Id;

    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>标题</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $Ftitle;

    /**
     * @var string <p>集群名</p>
     */
    public $ClusterName;

    /**
     * @var integer <p>地域ID</p>
     */
    public $RegionId;

    /**
     * @var integer <p>地区ID</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>用户APPID</p>
     */
    public $AppId;

    /**
     * @var string <p>用户UIN</p>
     */
    public $Uin;

    /**
     * @var integer <p>项目Id</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>集群VPCID</p>
     */
    public $VpcId;

    /**
     * @var integer <p>子网ID</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>实例的状态码。取值范围：</p><li>2：表示集群运行中。</li><li>3：表示集群创建中。</li><li>4：表示集群扩容中。</li><li>5：表示集群增加router节点中。</li><li>6：表示集群安装组件中。</li><li>7：表示集群执行命令中。</li><li>8：表示重启服务中。</li><li>9：表示进入维护中。</li><li>10：表示服务暂停中。</li><li>11：表示退出维护中。</li><li>12：表示退出暂停中。</li><li>13：表示配置下发中。</li><li>14：表示销毁集群中。</li><li>15：表示销毁core节点中。</li><li>16：销毁task节点中。</li><li>17：表示销毁router节点中。</li><li>18：表示更改webproxy密码中。</li><li>19：表示集群隔离中。</li><li>20：表示集群冲正中。</li><li>21：表示集群回收中。</li><li>22：表示变配等待中。</li><li>23：表示集群已隔离。</li><li>24：表示缩容节点中。</li><li>33：表示集群等待退费中。</li><li>34：表示集群已退费。</li><li>301：表示创建失败。</li><li>302：表示扩容失败。</li>
     */
    public $Status;

    /**
     * @var string <p>添加时间</p>
     */
    public $AddTime;

    /**
     * @var string <p>已经运行时间</p>
     */
    public $RunTime;

    /**
     * @var EmrProductConfigOutter <p>集群产品配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $Config;

    /**
     * @var string <p>主节点外网IP</p>
     */
    public $MasterIp;

    /**
     * @var string <p>EMR版本</p>
     */
    public $EmrVersion;

    /**
     * @var integer <p>收费类型</p>
     */
    public $ChargeType;

    /**
     * @var integer <p>交易版本</p>
     */
    public $TradeVersion;

    /**
     * @var integer <p>资源订单ID</p>
     */
    public $ResourceOrderId;

    /**
     * @var integer <p>是否计费集群</p>
     */
    public $IsTradeCluster;

    /**
     * @var string <p>集群错误状态告警信息</p>
     */
    public $AlarmInfo;

    /**
     * @var integer <p>是否采用新架构</p>
     */
    public $IsWoodpeckerCluster;

    /**
     * @var string <p>元数据库信息</p>
     */
    public $MetaDb;

    /**
     * @var array <p>标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string <p>Hive元数据信息</p>
     */
    public $HiveMetaDb;

    /**
     * @var string <p>集群类型:EMR,CLICKHOUSE,DRUID</p>
     */
    public $ServiceClass;

    /**
     * @var string <p>集群所有节点的别名序列化</p>
     */
    public $AliasInfo;

    /**
     * @var integer <p>集群版本Id</p>
     */
    public $ProductId;

    /**
     * @var string <p>地区ID</p>
     */
    public $Zone;

    /**
     * @var string <p>场景名称</p>
     */
    public $SceneName;

    /**
     * @var string <p>场景化集群类型</p>
     */
    public $SceneServiceClass;

    /**
     * @var string <p>场景化EMR版本</p>
     */
    public $SceneEmrVersion;

    /**
     * @var string <p>场景化集群类型</p>
     */
    public $DisplayName;

    /**
     * @var string <p>vpc name</p>
     */
    public $VpcName;

    /**
     * @var string <p>subnet name</p>
     */
    public $SubnetName;

    /**
     * @var array <p>集群依赖关系</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterExternalServiceInfo;

    /**
     * @var string <p>集群vpcid 字符串类型</p>
     */
    public $UniqVpcId;

    /**
     * @var string <p>子网id 字符串类型</p>
     */
    public $UniqSubnetId;

    /**
     * @var array <p>节点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopologyInfoList;

    /**
     * @var boolean <p>是否是跨AZ集群</p>
     */
    public $IsMultiZoneCluster;

    /**
     * @var boolean <p>是否开通异常节点自动补偿</p>
     */
    public $IsCvmReplace;

    /**
     * @var string <p>标题</p>
     */
    public $ClusterTitle;

    /**
     * @var EmrProductConfigDetail <p>集群产品配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigDetail;

    /**
     * @var integer <p>集群绑定的文件系统数</p>
     */
    public $BindFileSystemNum;

    /**
     * @var array <p>rss集群的绑定列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterRelationInfoList;

    /**
     * @var string <p>Redis信息</p>
     */
    public $RedisId;

    /**
     * @var boolean <p>是否开启IO故障自愈</p>
     */
    public $IsIOHungSelfRecovery;

    /**
     * @var array <p>元数据信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaDBGroupInfo;

    /**
     * @param integer $Id <p>ID号</p>
     * @param string $ClusterId <p>集群ID</p>
     * @param string $Ftitle <p>标题</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName <p>集群名</p>
     * @param integer $RegionId <p>地域ID</p>
     * @param integer $ZoneId <p>地区ID</p>
     * @param integer $AppId <p>用户APPID</p>
     * @param string $Uin <p>用户UIN</p>
     * @param integer $ProjectId <p>项目Id</p>
     * @param integer $VpcId <p>集群VPCID</p>
     * @param integer $SubnetId <p>子网ID</p>
     * @param integer $Status <p>实例的状态码。取值范围：</p><li>2：表示集群运行中。</li><li>3：表示集群创建中。</li><li>4：表示集群扩容中。</li><li>5：表示集群增加router节点中。</li><li>6：表示集群安装组件中。</li><li>7：表示集群执行命令中。</li><li>8：表示重启服务中。</li><li>9：表示进入维护中。</li><li>10：表示服务暂停中。</li><li>11：表示退出维护中。</li><li>12：表示退出暂停中。</li><li>13：表示配置下发中。</li><li>14：表示销毁集群中。</li><li>15：表示销毁core节点中。</li><li>16：销毁task节点中。</li><li>17：表示销毁router节点中。</li><li>18：表示更改webproxy密码中。</li><li>19：表示集群隔离中。</li><li>20：表示集群冲正中。</li><li>21：表示集群回收中。</li><li>22：表示变配等待中。</li><li>23：表示集群已隔离。</li><li>24：表示缩容节点中。</li><li>33：表示集群等待退费中。</li><li>34：表示集群已退费。</li><li>301：表示创建失败。</li><li>302：表示扩容失败。</li>
     * @param string $AddTime <p>添加时间</p>
     * @param string $RunTime <p>已经运行时间</p>
     * @param EmrProductConfigOutter $Config <p>集群产品配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MasterIp <p>主节点外网IP</p>
     * @param string $EmrVersion <p>EMR版本</p>
     * @param integer $ChargeType <p>收费类型</p>
     * @param integer $TradeVersion <p>交易版本</p>
     * @param integer $ResourceOrderId <p>资源订单ID</p>
     * @param integer $IsTradeCluster <p>是否计费集群</p>
     * @param string $AlarmInfo <p>集群错误状态告警信息</p>
     * @param integer $IsWoodpeckerCluster <p>是否采用新架构</p>
     * @param string $MetaDb <p>元数据库信息</p>
     * @param array $Tags <p>标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HiveMetaDb <p>Hive元数据信息</p>
     * @param string $ServiceClass <p>集群类型:EMR,CLICKHOUSE,DRUID</p>
     * @param string $AliasInfo <p>集群所有节点的别名序列化</p>
     * @param integer $ProductId <p>集群版本Id</p>
     * @param string $Zone <p>地区ID</p>
     * @param string $SceneName <p>场景名称</p>
     * @param string $SceneServiceClass <p>场景化集群类型</p>
     * @param string $SceneEmrVersion <p>场景化EMR版本</p>
     * @param string $DisplayName <p>场景化集群类型</p>
     * @param string $VpcName <p>vpc name</p>
     * @param string $SubnetName <p>subnet name</p>
     * @param array $ClusterExternalServiceInfo <p>集群依赖关系</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UniqVpcId <p>集群vpcid 字符串类型</p>
     * @param string $UniqSubnetId <p>子网id 字符串类型</p>
     * @param array $TopologyInfoList <p>节点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsMultiZoneCluster <p>是否是跨AZ集群</p>
     * @param boolean $IsCvmReplace <p>是否开通异常节点自动补偿</p>
     * @param string $ClusterTitle <p>标题</p>
     * @param EmrProductConfigDetail $ConfigDetail <p>集群产品配置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BindFileSystemNum <p>集群绑定的文件系统数</p>
     * @param array $ClusterRelationInfoList <p>rss集群的绑定列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RedisId <p>Redis信息</p>
     * @param boolean $IsIOHungSelfRecovery <p>是否开启IO故障自愈</p>
     * @param array $MetaDBGroupInfo <p>元数据信息</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Ftitle",$param) and $param["Ftitle"] !== null) {
            $this->Ftitle = $param["Ftitle"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
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

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("RunTime",$param) and $param["RunTime"] !== null) {
            $this->RunTime = $param["RunTime"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new EmrProductConfigOutter();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("MasterIp",$param) and $param["MasterIp"] !== null) {
            $this->MasterIp = $param["MasterIp"];
        }

        if (array_key_exists("EmrVersion",$param) and $param["EmrVersion"] !== null) {
            $this->EmrVersion = $param["EmrVersion"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("TradeVersion",$param) and $param["TradeVersion"] !== null) {
            $this->TradeVersion = $param["TradeVersion"];
        }

        if (array_key_exists("ResourceOrderId",$param) and $param["ResourceOrderId"] !== null) {
            $this->ResourceOrderId = $param["ResourceOrderId"];
        }

        if (array_key_exists("IsTradeCluster",$param) and $param["IsTradeCluster"] !== null) {
            $this->IsTradeCluster = $param["IsTradeCluster"];
        }

        if (array_key_exists("AlarmInfo",$param) and $param["AlarmInfo"] !== null) {
            $this->AlarmInfo = $param["AlarmInfo"];
        }

        if (array_key_exists("IsWoodpeckerCluster",$param) and $param["IsWoodpeckerCluster"] !== null) {
            $this->IsWoodpeckerCluster = $param["IsWoodpeckerCluster"];
        }

        if (array_key_exists("MetaDb",$param) and $param["MetaDb"] !== null) {
            $this->MetaDb = $param["MetaDb"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("HiveMetaDb",$param) and $param["HiveMetaDb"] !== null) {
            $this->HiveMetaDb = $param["HiveMetaDb"];
        }

        if (array_key_exists("ServiceClass",$param) and $param["ServiceClass"] !== null) {
            $this->ServiceClass = $param["ServiceClass"];
        }

        if (array_key_exists("AliasInfo",$param) and $param["AliasInfo"] !== null) {
            $this->AliasInfo = $param["AliasInfo"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SceneName",$param) and $param["SceneName"] !== null) {
            $this->SceneName = $param["SceneName"];
        }

        if (array_key_exists("SceneServiceClass",$param) and $param["SceneServiceClass"] !== null) {
            $this->SceneServiceClass = $param["SceneServiceClass"];
        }

        if (array_key_exists("SceneEmrVersion",$param) and $param["SceneEmrVersion"] !== null) {
            $this->SceneEmrVersion = $param["SceneEmrVersion"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("ClusterExternalServiceInfo",$param) and $param["ClusterExternalServiceInfo"] !== null) {
            $this->ClusterExternalServiceInfo = [];
            foreach ($param["ClusterExternalServiceInfo"] as $key => $value){
                $obj = new ClusterExternalServiceInfo();
                $obj->deserialize($value);
                array_push($this->ClusterExternalServiceInfo, $obj);
            }
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("TopologyInfoList",$param) and $param["TopologyInfoList"] !== null) {
            $this->TopologyInfoList = [];
            foreach ($param["TopologyInfoList"] as $key => $value){
                $obj = new TopologyInfo();
                $obj->deserialize($value);
                array_push($this->TopologyInfoList, $obj);
            }
        }

        if (array_key_exists("IsMultiZoneCluster",$param) and $param["IsMultiZoneCluster"] !== null) {
            $this->IsMultiZoneCluster = $param["IsMultiZoneCluster"];
        }

        if (array_key_exists("IsCvmReplace",$param) and $param["IsCvmReplace"] !== null) {
            $this->IsCvmReplace = $param["IsCvmReplace"];
        }

        if (array_key_exists("ClusterTitle",$param) and $param["ClusterTitle"] !== null) {
            $this->ClusterTitle = $param["ClusterTitle"];
        }

        if (array_key_exists("ConfigDetail",$param) and $param["ConfigDetail"] !== null) {
            $this->ConfigDetail = new EmrProductConfigDetail();
            $this->ConfigDetail->deserialize($param["ConfigDetail"]);
        }

        if (array_key_exists("BindFileSystemNum",$param) and $param["BindFileSystemNum"] !== null) {
            $this->BindFileSystemNum = $param["BindFileSystemNum"];
        }

        if (array_key_exists("ClusterRelationInfoList",$param) and $param["ClusterRelationInfoList"] !== null) {
            $this->ClusterRelationInfoList = [];
            foreach ($param["ClusterRelationInfoList"] as $key => $value){
                $obj = new ClusterRelationMeta();
                $obj->deserialize($value);
                array_push($this->ClusterRelationInfoList, $obj);
            }
        }

        if (array_key_exists("RedisId",$param) and $param["RedisId"] !== null) {
            $this->RedisId = $param["RedisId"];
        }

        if (array_key_exists("IsIOHungSelfRecovery",$param) and $param["IsIOHungSelfRecovery"] !== null) {
            $this->IsIOHungSelfRecovery = $param["IsIOHungSelfRecovery"];
        }

        if (array_key_exists("MetaDBGroupInfo",$param) and $param["MetaDBGroupInfo"] !== null) {
            $this->MetaDBGroupInfo = [];
            foreach ($param["MetaDBGroupInfo"] as $key => $value){
                $obj = new CustomMetaDBInfo();
                $obj->deserialize($value);
                array_push($this->MetaDBGroupInfo, $obj);
            }
        }
    }
}
