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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateInstance请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getInstanceName() 获取<p>实例名称（1-50 个英文、汉字、数字、连接线-或下划线_）</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称（1-50 个英文、汉字、数字、连接线-或下划线_）</p>
 * @method integer getNodeNum() 获取<p>已废弃请使用NodeInfoList<br>节点个数（2-50个）</p>
 * @method void setNodeNum(integer $NodeNum) 设置<p>已废弃请使用NodeInfoList<br>节点个数（2-50个）</p>
 * @method string getEsConfig() 获取<p>ES配置项（JSON格式字符串）</p>
 * @method void setEsConfig(string $EsConfig) 设置<p>ES配置项（JSON格式字符串）</p>
 * @method string getPassword() 获取<p>默认用户elastic的密码（8到16位，至少包括两项（[a-z,A-Z],[0-9]和[-!@#$%&amp;^*+=_:;,.?]的特殊符号）</p>
 * @method void setPassword(string $Password) 设置<p>默认用户elastic的密码（8到16位，至少包括两项（[a-z,A-Z],[0-9]和[-!@#$%&amp;^*+=_:;,.?]的特殊符号）</p>
 * @method EsAcl getEsAcl() 获取<p>可视化组件（Kibana、Cerebro）的公网访问策略</p>
 * @method void setEsAcl(EsAcl $EsAcl) 设置<p>可视化组件（Kibana、Cerebro）的公网访问策略</p>
 * @method integer getDiskSize() 获取<p>已废弃请使用NodeInfoList<br>磁盘大小（单位GB）</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>已废弃请使用NodeInfoList<br>磁盘大小（单位GB）</p>
 * @method string getNodeType() 获取<p>已废弃请使用NodeInfoList<br>节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
 * @method void setNodeType(string $NodeType) 设置<p>已废弃请使用NodeInfoList<br>节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
 * @method integer getMasterNodeNum() 获取<p>已废弃请使用NodeInfoList<br>专用主节点个数（只支持3个或5个）</p>
 * @method void setMasterNodeNum(integer $MasterNodeNum) 设置<p>已废弃请使用NodeInfoList<br>专用主节点个数（只支持3个或5个）</p>
 * @method string getMasterNodeType() 获取<p>已废弃请使用NodeInfoList<br>专用主节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
 * @method void setMasterNodeType(string $MasterNodeType) 设置<p>已废弃请使用NodeInfoList<br>专用主节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
 * @method integer getMasterNodeDiskSize() 获取<p>已废弃请使用NodeInfoList<br>专用主节点磁盘大小（单位GB系统默认配置为50GB,暂不支持自定义）</p>
 * @method void setMasterNodeDiskSize(integer $MasterNodeDiskSize) 设置<p>已废弃请使用NodeInfoList<br>专用主节点磁盘大小（单位GB系统默认配置为50GB,暂不支持自定义）</p>
 * @method boolean getForceRestart() 获取<p>更新配置时是否强制重启<li>true强制重启</li><li>false不强制重启</li>当前仅更新EsConfig时需要设置，默认值为false</p>
 * @method void setForceRestart(boolean $ForceRestart) 设置<p>更新配置时是否强制重启<li>true强制重启</li><li>false不强制重启</li>当前仅更新EsConfig时需要设置，默认值为false</p>
 * @method CosBackup getCosBackup() 获取<p>COS自动备份信息</p>
 * @method void setCosBackup(CosBackup $CosBackup) 设置<p>COS自动备份信息</p>
 * @method array getNodeInfoList() 获取<p>节点信息列表，可以只传递要更新的节点及其对应的规格信息。支持的操作包括<li>修改一种节点的个数</li><li>修改一种节点的节点规格及磁盘大小</li><li>增加一种节点类型（需要同时指定该节点的类型，个数，规格，磁盘等信息）</li>上述操作一次只能进行一种，且磁盘类型不支持修改</p>
 * @method void setNodeInfoList(array $NodeInfoList) 设置<p>节点信息列表，可以只传递要更新的节点及其对应的规格信息。支持的操作包括<li>修改一种节点的个数</li><li>修改一种节点的节点规格及磁盘大小</li><li>增加一种节点类型（需要同时指定该节点的类型，个数，规格，磁盘等信息）</li>上述操作一次只能进行一种，且磁盘类型不支持修改</p>
 * @method string getPublicAccess() 获取<p>ES集群公网访问状态<br>OPEN 开启<br>CLOSE 关闭</p>
 * @method void setPublicAccess(string $PublicAccess) 设置<p>ES集群公网访问状态<br>OPEN 开启<br>CLOSE 关闭</p>
 * @method EsPublicAcl getEsPublicAcl() 获取<p>公网访问控制列表</p>
 * @method void setEsPublicAcl(EsPublicAcl $EsPublicAcl) 设置<p>公网访问控制列表</p>
 * @method string getKibanaPublicAccess() 获取<p>Kibana公网访问状态<br>OPEN 开启<br>CLOSE 关闭</p>
 * @method void setKibanaPublicAccess(string $KibanaPublicAccess) 设置<p>Kibana公网访问状态<br>OPEN 开启<br>CLOSE 关闭</p>
 * @method string getKibanaPrivateAccess() 获取<p>Kibana内网访问状态<br>OPEN 开启<br>CLOSE 关闭</p>
 * @method void setKibanaPrivateAccess(string $KibanaPrivateAccess) 设置<p>Kibana内网访问状态<br>OPEN 开启<br>CLOSE 关闭</p>
 * @method integer getBasicSecurityType() 获取<p>ES 6.8及以上版本基础版开启或关闭用户认证</p>
 * @method void setBasicSecurityType(integer $BasicSecurityType) 设置<p>ES 6.8及以上版本基础版开启或关闭用户认证</p>
 * @method integer getKibanaPrivatePort() 获取<p>Kibana内网端口</p>
 * @method void setKibanaPrivatePort(integer $KibanaPrivatePort) 设置<p>Kibana内网端口</p>
 * @method integer getScaleType() 获取<p>0: 蓝绿变更方式扩容，集群不重启 （默认） 1: 磁盘解挂载扩容，集群滚动重启</p>
 * @method void setScaleType(integer $ScaleType) 设置<p>0: 蓝绿变更方式扩容，集群不重启 （默认） 1: 磁盘解挂载扩容，集群滚动重启</p>
 * @method array getMultiZoneInfo() 获取<p>多可用区部署</p>
 * @method void setMultiZoneInfo(array $MultiZoneInfo) 设置<p>多可用区部署</p>
 * @method integer getSceneType() 获取<p>场景化模板类型 -1：不启用 1：通用 2：日志 3：搜索</p>
 * @method void setSceneType(integer $SceneType) 设置<p>场景化模板类型 -1：不启用 1：通用 2：日志 3：搜索</p>
 * @method string getKibanaConfig() 获取<p>Kibana配置项（JSON格式字符串）</p>
 * @method void setKibanaConfig(string $KibanaConfig) 设置<p>Kibana配置项（JSON格式字符串）</p>
 * @method WebNodeTypeInfo getWebNodeTypeInfo() 获取<p>可视化节点配置</p>
 * @method void setWebNodeTypeInfo(WebNodeTypeInfo $WebNodeTypeInfo) 设置<p>可视化节点配置</p>
 * @method string getSwitchPrivateLink() 获取<p>切换到新网络架构</p>
 * @method void setSwitchPrivateLink(string $SwitchPrivateLink) 设置<p>切换到新网络架构</p>
 * @method boolean getEnableCerebro() 获取<p>启用Cerebro</p>
 * @method void setEnableCerebro(boolean $EnableCerebro) 设置<p>启用Cerebro</p>
 * @method string getCerebroPublicAccess() 获取<p>Cerebro公网访问状态<br>OPEN 开启<br>CLOSE 关闭</p>
 * @method void setCerebroPublicAccess(string $CerebroPublicAccess) 设置<p>Cerebro公网访问状态<br>OPEN 开启<br>CLOSE 关闭</p>
 * @method string getCerebroPrivateAccess() 获取<p>Cerebro内网访问状态<br>OPEN 开启<br>CLOSE 关闭</p>
 * @method void setCerebroPrivateAccess(string $CerebroPrivateAccess) 设置<p>Cerebro内网访问状态<br>OPEN 开启<br>CLOSE 关闭</p>
 * @method EsConfigSetInfo getEsConfigSet() 获取<p>新增或修改的配置组信息</p>
 * @method void setEsConfigSet(EsConfigSetInfo $EsConfigSet) 设置<p>新增或修改的配置组信息</p>
 * @method OperationDurationUpdated getOperationDuration() 获取<p>可维护时间段</p>
 * @method void setOperationDuration(OperationDurationUpdated $OperationDuration) 设置<p>可维护时间段</p>
 * @method string getKibanaAlteringPublicAccess() 获取<p>是否开启Alerting 外网告警输出：<br>OPEN 开启<br>CLOSE 关闭</p>
 * @method void setKibanaAlteringPublicAccess(string $KibanaAlteringPublicAccess) 设置<p>是否开启Alerting 外网告警输出：<br>OPEN 开启<br>CLOSE 关闭</p>
 * @method string getKibanaPrivateDomain() 获取<p>kibana内网自定义域名</p>
 * @method void setKibanaPrivateDomain(string $KibanaPrivateDomain) 设置<p>kibana内网自定义域名</p>
 * @method string getCerebroPrivateDomain() 获取<p>cerebro内网自定义域名</p>
 * @method void setCerebroPrivateDomain(string $CerebroPrivateDomain) 设置<p>cerebro内网自定义域名</p>
 * @method string getProtocol() 获取<p>变更为https集群，默认是http</p>
 * @method void setProtocol(string $Protocol) 设置<p>变更为https集群，默认是http</p>
 * @method array getOutboundPublicAcls() 获取<p>节点出站访问详细信息</p>
 * @method void setOutboundPublicAcls(array $OutboundPublicAcls) 设置<p>节点出站访问详细信息</p>
 * @method string getOutboundPublicAccess() 获取<p>节点出站访问操作<br>OPEN 开启<br>CLOSE 关闭</p>
 * @method void setOutboundPublicAccess(string $OutboundPublicAccess) 设置<p>节点出站访问操作<br>OPEN 开启<br>CLOSE 关闭</p>
 * @method integer getCvmDelayOnlineTime() 获取<p>cvm延迟上架参数</p>
 * @method void setCvmDelayOnlineTime(integer $CvmDelayOnlineTime) 设置<p>cvm延迟上架参数</p>
 * @method integer getShardAllocationConcurrents() 获取<p>分片迁移并发数</p>
 * @method void setShardAllocationConcurrents(integer $ShardAllocationConcurrents) 设置<p>分片迁移并发数</p>
 * @method integer getShardAllocationBytes() 获取<p>分片迁移并发速度</p>
 * @method void setShardAllocationBytes(integer $ShardAllocationBytes) 设置<p>分片迁移并发速度</p>
 * @method integer getReadWriteMode() 获取<p>读写分离模式：-1-不开启，1-本地读写分离，2-远端读写分离</p>
 * @method void setReadWriteMode(integer $ReadWriteMode) 设置<p>读写分离模式：-1-不开启，1-本地读写分离，2-远端读写分离</p>
 * @method boolean getEnableScheduleRecoverGroup() 获取<p>是否开启置放群组异步任务</p>
 * @method void setEnableScheduleRecoverGroup(boolean $EnableScheduleRecoverGroup) 设置<p>是否开启置放群组异步任务</p>
 * @method EnableScheduleOperationDuration getEnableScheduleOperationDuration() 获取<p>置放群组异步任务可维护时间段</p>
 * @method void setEnableScheduleOperationDuration(EnableScheduleOperationDuration $EnableScheduleOperationDuration) 设置<p>置放群组异步任务可维护时间段</p>
 * @method string getEnableDestroyProtection() 获取<p>开启集群保护：OPEN-开启，CLOSE-关闭</p>
 * @method void setEnableDestroyProtection(string $EnableDestroyProtection) 设置<p>开启集群保护：OPEN-开启，CLOSE-关闭</p>
 * @method array getAutoScaleDiskInfoList() 获取<p>自动扩盘参数</p>
 * @method void setAutoScaleDiskInfoList(array $AutoScaleDiskInfoList) 设置<p>自动扩盘参数</p>
 * @method array getAutoScaleDiskDeleteNodeTypeList() 获取<p>自动扩盘删除参数</p>
 * @method void setAutoScaleDiskDeleteNodeTypeList(array $AutoScaleDiskDeleteNodeTypeList) 设置<p>自动扩盘删除参数</p>
 * @method OtherConfig getOtherConfig() 获取<p>其他附加配置，jvm或者yml</p>
 * @method void setOtherConfig(OtherConfig $OtherConfig) 设置<p>其他附加配置，jvm或者yml</p>
 * @method string getWaitGreen() 获取<p>滚动升降配时是否等待集群恢复Green再滚动下一个节点</p>
 * @method void setWaitGreen(string $WaitGreen) 设置<p>滚动升降配时是否等待集群恢复Green再滚动下一个节点</p>
 */
class UpdateInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称（1-50 个英文、汉字、数字、连接线-或下划线_）</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>已废弃请使用NodeInfoList<br>节点个数（2-50个）</p>
     */
    public $NodeNum;

    /**
     * @var string <p>ES配置项（JSON格式字符串）</p>
     */
    public $EsConfig;

    /**
     * @var string <p>默认用户elastic的密码（8到16位，至少包括两项（[a-z,A-Z],[0-9]和[-!@#$%&amp;^*+=_:;,.?]的特殊符号）</p>
     */
    public $Password;

    /**
     * @var EsAcl <p>可视化组件（Kibana、Cerebro）的公网访问策略</p>
     */
    public $EsAcl;

    /**
     * @var integer <p>已废弃请使用NodeInfoList<br>磁盘大小（单位GB）</p>
     */
    public $DiskSize;

    /**
     * @var string <p>已废弃请使用NodeInfoList<br>节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
     */
    public $NodeType;

    /**
     * @var integer <p>已废弃请使用NodeInfoList<br>专用主节点个数（只支持3个或5个）</p>
     */
    public $MasterNodeNum;

    /**
     * @var string <p>已废弃请使用NodeInfoList<br>专用主节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
     */
    public $MasterNodeType;

    /**
     * @var integer <p>已废弃请使用NodeInfoList<br>专用主节点磁盘大小（单位GB系统默认配置为50GB,暂不支持自定义）</p>
     */
    public $MasterNodeDiskSize;

    /**
     * @var boolean <p>更新配置时是否强制重启<li>true强制重启</li><li>false不强制重启</li>当前仅更新EsConfig时需要设置，默认值为false</p>
     */
    public $ForceRestart;

    /**
     * @var CosBackup <p>COS自动备份信息</p>
     */
    public $CosBackup;

    /**
     * @var array <p>节点信息列表，可以只传递要更新的节点及其对应的规格信息。支持的操作包括<li>修改一种节点的个数</li><li>修改一种节点的节点规格及磁盘大小</li><li>增加一种节点类型（需要同时指定该节点的类型，个数，规格，磁盘等信息）</li>上述操作一次只能进行一种，且磁盘类型不支持修改</p>
     */
    public $NodeInfoList;

    /**
     * @var string <p>ES集群公网访问状态<br>OPEN 开启<br>CLOSE 关闭</p>
     */
    public $PublicAccess;

    /**
     * @var EsPublicAcl <p>公网访问控制列表</p>
     */
    public $EsPublicAcl;

    /**
     * @var string <p>Kibana公网访问状态<br>OPEN 开启<br>CLOSE 关闭</p>
     */
    public $KibanaPublicAccess;

    /**
     * @var string <p>Kibana内网访问状态<br>OPEN 开启<br>CLOSE 关闭</p>
     */
    public $KibanaPrivateAccess;

    /**
     * @var integer <p>ES 6.8及以上版本基础版开启或关闭用户认证</p>
     */
    public $BasicSecurityType;

    /**
     * @var integer <p>Kibana内网端口</p>
     */
    public $KibanaPrivatePort;

    /**
     * @var integer <p>0: 蓝绿变更方式扩容，集群不重启 （默认） 1: 磁盘解挂载扩容，集群滚动重启</p>
     */
    public $ScaleType;

    /**
     * @var array <p>多可用区部署</p>
     */
    public $MultiZoneInfo;

    /**
     * @var integer <p>场景化模板类型 -1：不启用 1：通用 2：日志 3：搜索</p>
     */
    public $SceneType;

    /**
     * @var string <p>Kibana配置项（JSON格式字符串）</p>
     */
    public $KibanaConfig;

    /**
     * @var WebNodeTypeInfo <p>可视化节点配置</p>
     */
    public $WebNodeTypeInfo;

    /**
     * @var string <p>切换到新网络架构</p>
     */
    public $SwitchPrivateLink;

    /**
     * @var boolean <p>启用Cerebro</p>
     */
    public $EnableCerebro;

    /**
     * @var string <p>Cerebro公网访问状态<br>OPEN 开启<br>CLOSE 关闭</p>
     */
    public $CerebroPublicAccess;

    /**
     * @var string <p>Cerebro内网访问状态<br>OPEN 开启<br>CLOSE 关闭</p>
     */
    public $CerebroPrivateAccess;

    /**
     * @var EsConfigSetInfo <p>新增或修改的配置组信息</p>
     */
    public $EsConfigSet;

    /**
     * @var OperationDurationUpdated <p>可维护时间段</p>
     */
    public $OperationDuration;

    /**
     * @var string <p>是否开启Alerting 外网告警输出：<br>OPEN 开启<br>CLOSE 关闭</p>
     */
    public $KibanaAlteringPublicAccess;

    /**
     * @var string <p>kibana内网自定义域名</p>
     */
    public $KibanaPrivateDomain;

    /**
     * @var string <p>cerebro内网自定义域名</p>
     */
    public $CerebroPrivateDomain;

    /**
     * @var string <p>变更为https集群，默认是http</p>
     */
    public $Protocol;

    /**
     * @var array <p>节点出站访问详细信息</p>
     */
    public $OutboundPublicAcls;

    /**
     * @var string <p>节点出站访问操作<br>OPEN 开启<br>CLOSE 关闭</p>
     */
    public $OutboundPublicAccess;

    /**
     * @var integer <p>cvm延迟上架参数</p>
     */
    public $CvmDelayOnlineTime;

    /**
     * @var integer <p>分片迁移并发数</p>
     */
    public $ShardAllocationConcurrents;

    /**
     * @var integer <p>分片迁移并发速度</p>
     */
    public $ShardAllocationBytes;

    /**
     * @var integer <p>读写分离模式：-1-不开启，1-本地读写分离，2-远端读写分离</p>
     */
    public $ReadWriteMode;

    /**
     * @var boolean <p>是否开启置放群组异步任务</p>
     */
    public $EnableScheduleRecoverGroup;

    /**
     * @var EnableScheduleOperationDuration <p>置放群组异步任务可维护时间段</p>
     */
    public $EnableScheduleOperationDuration;

    /**
     * @var string <p>开启集群保护：OPEN-开启，CLOSE-关闭</p>
     */
    public $EnableDestroyProtection;

    /**
     * @var array <p>自动扩盘参数</p>
     */
    public $AutoScaleDiskInfoList;

    /**
     * @var array <p>自动扩盘删除参数</p>
     */
    public $AutoScaleDiskDeleteNodeTypeList;

    /**
     * @var OtherConfig <p>其他附加配置，jvm或者yml</p>
     */
    public $OtherConfig;

    /**
     * @var string <p>滚动升降配时是否等待集群恢复Green再滚动下一个节点</p>
     */
    public $WaitGreen;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $InstanceName <p>实例名称（1-50 个英文、汉字、数字、连接线-或下划线_）</p>
     * @param integer $NodeNum <p>已废弃请使用NodeInfoList<br>节点个数（2-50个）</p>
     * @param string $EsConfig <p>ES配置项（JSON格式字符串）</p>
     * @param string $Password <p>默认用户elastic的密码（8到16位，至少包括两项（[a-z,A-Z],[0-9]和[-!@#$%&amp;^*+=_:;,.?]的特殊符号）</p>
     * @param EsAcl $EsAcl <p>可视化组件（Kibana、Cerebro）的公网访问策略</p>
     * @param integer $DiskSize <p>已废弃请使用NodeInfoList<br>磁盘大小（单位GB）</p>
     * @param string $NodeType <p>已废弃请使用NodeInfoList<br>节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
     * @param integer $MasterNodeNum <p>已废弃请使用NodeInfoList<br>专用主节点个数（只支持3个或5个）</p>
     * @param string $MasterNodeType <p>已废弃请使用NodeInfoList<br>专用主节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
     * @param integer $MasterNodeDiskSize <p>已废弃请使用NodeInfoList<br>专用主节点磁盘大小（单位GB系统默认配置为50GB,暂不支持自定义）</p>
     * @param boolean $ForceRestart <p>更新配置时是否强制重启<li>true强制重启</li><li>false不强制重启</li>当前仅更新EsConfig时需要设置，默认值为false</p>
     * @param CosBackup $CosBackup <p>COS自动备份信息</p>
     * @param array $NodeInfoList <p>节点信息列表，可以只传递要更新的节点及其对应的规格信息。支持的操作包括<li>修改一种节点的个数</li><li>修改一种节点的节点规格及磁盘大小</li><li>增加一种节点类型（需要同时指定该节点的类型，个数，规格，磁盘等信息）</li>上述操作一次只能进行一种，且磁盘类型不支持修改</p>
     * @param string $PublicAccess <p>ES集群公网访问状态<br>OPEN 开启<br>CLOSE 关闭</p>
     * @param EsPublicAcl $EsPublicAcl <p>公网访问控制列表</p>
     * @param string $KibanaPublicAccess <p>Kibana公网访问状态<br>OPEN 开启<br>CLOSE 关闭</p>
     * @param string $KibanaPrivateAccess <p>Kibana内网访问状态<br>OPEN 开启<br>CLOSE 关闭</p>
     * @param integer $BasicSecurityType <p>ES 6.8及以上版本基础版开启或关闭用户认证</p>
     * @param integer $KibanaPrivatePort <p>Kibana内网端口</p>
     * @param integer $ScaleType <p>0: 蓝绿变更方式扩容，集群不重启 （默认） 1: 磁盘解挂载扩容，集群滚动重启</p>
     * @param array $MultiZoneInfo <p>多可用区部署</p>
     * @param integer $SceneType <p>场景化模板类型 -1：不启用 1：通用 2：日志 3：搜索</p>
     * @param string $KibanaConfig <p>Kibana配置项（JSON格式字符串）</p>
     * @param WebNodeTypeInfo $WebNodeTypeInfo <p>可视化节点配置</p>
     * @param string $SwitchPrivateLink <p>切换到新网络架构</p>
     * @param boolean $EnableCerebro <p>启用Cerebro</p>
     * @param string $CerebroPublicAccess <p>Cerebro公网访问状态<br>OPEN 开启<br>CLOSE 关闭</p>
     * @param string $CerebroPrivateAccess <p>Cerebro内网访问状态<br>OPEN 开启<br>CLOSE 关闭</p>
     * @param EsConfigSetInfo $EsConfigSet <p>新增或修改的配置组信息</p>
     * @param OperationDurationUpdated $OperationDuration <p>可维护时间段</p>
     * @param string $KibanaAlteringPublicAccess <p>是否开启Alerting 外网告警输出：<br>OPEN 开启<br>CLOSE 关闭</p>
     * @param string $KibanaPrivateDomain <p>kibana内网自定义域名</p>
     * @param string $CerebroPrivateDomain <p>cerebro内网自定义域名</p>
     * @param string $Protocol <p>变更为https集群，默认是http</p>
     * @param array $OutboundPublicAcls <p>节点出站访问详细信息</p>
     * @param string $OutboundPublicAccess <p>节点出站访问操作<br>OPEN 开启<br>CLOSE 关闭</p>
     * @param integer $CvmDelayOnlineTime <p>cvm延迟上架参数</p>
     * @param integer $ShardAllocationConcurrents <p>分片迁移并发数</p>
     * @param integer $ShardAllocationBytes <p>分片迁移并发速度</p>
     * @param integer $ReadWriteMode <p>读写分离模式：-1-不开启，1-本地读写分离，2-远端读写分离</p>
     * @param boolean $EnableScheduleRecoverGroup <p>是否开启置放群组异步任务</p>
     * @param EnableScheduleOperationDuration $EnableScheduleOperationDuration <p>置放群组异步任务可维护时间段</p>
     * @param string $EnableDestroyProtection <p>开启集群保护：OPEN-开启，CLOSE-关闭</p>
     * @param array $AutoScaleDiskInfoList <p>自动扩盘参数</p>
     * @param array $AutoScaleDiskDeleteNodeTypeList <p>自动扩盘删除参数</p>
     * @param OtherConfig $OtherConfig <p>其他附加配置，jvm或者yml</p>
     * @param string $WaitGreen <p>滚动升降配时是否等待集群恢复Green再滚动下一个节点</p>
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

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("EsConfig",$param) and $param["EsConfig"] !== null) {
            $this->EsConfig = $param["EsConfig"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("EsAcl",$param) and $param["EsAcl"] !== null) {
            $this->EsAcl = new EsAcl();
            $this->EsAcl->deserialize($param["EsAcl"]);
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("MasterNodeNum",$param) and $param["MasterNodeNum"] !== null) {
            $this->MasterNodeNum = $param["MasterNodeNum"];
        }

        if (array_key_exists("MasterNodeType",$param) and $param["MasterNodeType"] !== null) {
            $this->MasterNodeType = $param["MasterNodeType"];
        }

        if (array_key_exists("MasterNodeDiskSize",$param) and $param["MasterNodeDiskSize"] !== null) {
            $this->MasterNodeDiskSize = $param["MasterNodeDiskSize"];
        }

        if (array_key_exists("ForceRestart",$param) and $param["ForceRestart"] !== null) {
            $this->ForceRestart = $param["ForceRestart"];
        }

        if (array_key_exists("CosBackup",$param) and $param["CosBackup"] !== null) {
            $this->CosBackup = new CosBackup();
            $this->CosBackup->deserialize($param["CosBackup"]);
        }

        if (array_key_exists("NodeInfoList",$param) and $param["NodeInfoList"] !== null) {
            $this->NodeInfoList = [];
            foreach ($param["NodeInfoList"] as $key => $value){
                $obj = new NodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeInfoList, $obj);
            }
        }

        if (array_key_exists("PublicAccess",$param) and $param["PublicAccess"] !== null) {
            $this->PublicAccess = $param["PublicAccess"];
        }

        if (array_key_exists("EsPublicAcl",$param) and $param["EsPublicAcl"] !== null) {
            $this->EsPublicAcl = new EsPublicAcl();
            $this->EsPublicAcl->deserialize($param["EsPublicAcl"]);
        }

        if (array_key_exists("KibanaPublicAccess",$param) and $param["KibanaPublicAccess"] !== null) {
            $this->KibanaPublicAccess = $param["KibanaPublicAccess"];
        }

        if (array_key_exists("KibanaPrivateAccess",$param) and $param["KibanaPrivateAccess"] !== null) {
            $this->KibanaPrivateAccess = $param["KibanaPrivateAccess"];
        }

        if (array_key_exists("BasicSecurityType",$param) and $param["BasicSecurityType"] !== null) {
            $this->BasicSecurityType = $param["BasicSecurityType"];
        }

        if (array_key_exists("KibanaPrivatePort",$param) and $param["KibanaPrivatePort"] !== null) {
            $this->KibanaPrivatePort = $param["KibanaPrivatePort"];
        }

        if (array_key_exists("ScaleType",$param) and $param["ScaleType"] !== null) {
            $this->ScaleType = $param["ScaleType"];
        }

        if (array_key_exists("MultiZoneInfo",$param) and $param["MultiZoneInfo"] !== null) {
            $this->MultiZoneInfo = [];
            foreach ($param["MultiZoneInfo"] as $key => $value){
                $obj = new ZoneDetail();
                $obj->deserialize($value);
                array_push($this->MultiZoneInfo, $obj);
            }
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("KibanaConfig",$param) and $param["KibanaConfig"] !== null) {
            $this->KibanaConfig = $param["KibanaConfig"];
        }

        if (array_key_exists("WebNodeTypeInfo",$param) and $param["WebNodeTypeInfo"] !== null) {
            $this->WebNodeTypeInfo = new WebNodeTypeInfo();
            $this->WebNodeTypeInfo->deserialize($param["WebNodeTypeInfo"]);
        }

        if (array_key_exists("SwitchPrivateLink",$param) and $param["SwitchPrivateLink"] !== null) {
            $this->SwitchPrivateLink = $param["SwitchPrivateLink"];
        }

        if (array_key_exists("EnableCerebro",$param) and $param["EnableCerebro"] !== null) {
            $this->EnableCerebro = $param["EnableCerebro"];
        }

        if (array_key_exists("CerebroPublicAccess",$param) and $param["CerebroPublicAccess"] !== null) {
            $this->CerebroPublicAccess = $param["CerebroPublicAccess"];
        }

        if (array_key_exists("CerebroPrivateAccess",$param) and $param["CerebroPrivateAccess"] !== null) {
            $this->CerebroPrivateAccess = $param["CerebroPrivateAccess"];
        }

        if (array_key_exists("EsConfigSet",$param) and $param["EsConfigSet"] !== null) {
            $this->EsConfigSet = new EsConfigSetInfo();
            $this->EsConfigSet->deserialize($param["EsConfigSet"]);
        }

        if (array_key_exists("OperationDuration",$param) and $param["OperationDuration"] !== null) {
            $this->OperationDuration = new OperationDurationUpdated();
            $this->OperationDuration->deserialize($param["OperationDuration"]);
        }

        if (array_key_exists("KibanaAlteringPublicAccess",$param) and $param["KibanaAlteringPublicAccess"] !== null) {
            $this->KibanaAlteringPublicAccess = $param["KibanaAlteringPublicAccess"];
        }

        if (array_key_exists("KibanaPrivateDomain",$param) and $param["KibanaPrivateDomain"] !== null) {
            $this->KibanaPrivateDomain = $param["KibanaPrivateDomain"];
        }

        if (array_key_exists("CerebroPrivateDomain",$param) and $param["CerebroPrivateDomain"] !== null) {
            $this->CerebroPrivateDomain = $param["CerebroPrivateDomain"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("OutboundPublicAcls",$param) and $param["OutboundPublicAcls"] !== null) {
            $this->OutboundPublicAcls = [];
            foreach ($param["OutboundPublicAcls"] as $key => $value){
                $obj = new OutboundPublicAcl();
                $obj->deserialize($value);
                array_push($this->OutboundPublicAcls, $obj);
            }
        }

        if (array_key_exists("OutboundPublicAccess",$param) and $param["OutboundPublicAccess"] !== null) {
            $this->OutboundPublicAccess = $param["OutboundPublicAccess"];
        }

        if (array_key_exists("CvmDelayOnlineTime",$param) and $param["CvmDelayOnlineTime"] !== null) {
            $this->CvmDelayOnlineTime = $param["CvmDelayOnlineTime"];
        }

        if (array_key_exists("ShardAllocationConcurrents",$param) and $param["ShardAllocationConcurrents"] !== null) {
            $this->ShardAllocationConcurrents = $param["ShardAllocationConcurrents"];
        }

        if (array_key_exists("ShardAllocationBytes",$param) and $param["ShardAllocationBytes"] !== null) {
            $this->ShardAllocationBytes = $param["ShardAllocationBytes"];
        }

        if (array_key_exists("ReadWriteMode",$param) and $param["ReadWriteMode"] !== null) {
            $this->ReadWriteMode = $param["ReadWriteMode"];
        }

        if (array_key_exists("EnableScheduleRecoverGroup",$param) and $param["EnableScheduleRecoverGroup"] !== null) {
            $this->EnableScheduleRecoverGroup = $param["EnableScheduleRecoverGroup"];
        }

        if (array_key_exists("EnableScheduleOperationDuration",$param) and $param["EnableScheduleOperationDuration"] !== null) {
            $this->EnableScheduleOperationDuration = new EnableScheduleOperationDuration();
            $this->EnableScheduleOperationDuration->deserialize($param["EnableScheduleOperationDuration"]);
        }

        if (array_key_exists("EnableDestroyProtection",$param) and $param["EnableDestroyProtection"] !== null) {
            $this->EnableDestroyProtection = $param["EnableDestroyProtection"];
        }

        if (array_key_exists("AutoScaleDiskInfoList",$param) and $param["AutoScaleDiskInfoList"] !== null) {
            $this->AutoScaleDiskInfoList = [];
            foreach ($param["AutoScaleDiskInfoList"] as $key => $value){
                $obj = new AutoScaleDiskInfo();
                $obj->deserialize($value);
                array_push($this->AutoScaleDiskInfoList, $obj);
            }
        }

        if (array_key_exists("AutoScaleDiskDeleteNodeTypeList",$param) and $param["AutoScaleDiskDeleteNodeTypeList"] !== null) {
            $this->AutoScaleDiskDeleteNodeTypeList = $param["AutoScaleDiskDeleteNodeTypeList"];
        }

        if (array_key_exists("OtherConfig",$param) and $param["OtherConfig"] !== null) {
            $this->OtherConfig = new OtherConfig();
            $this->OtherConfig->deserialize($param["OtherConfig"]);
        }

        if (array_key_exists("WaitGreen",$param) and $param["WaitGreen"] !== null) {
            $this->WaitGreen = $param["WaitGreen"];
        }
    }
}
