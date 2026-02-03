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
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称（1-50 个英文、汉字、数字、连接线-或下划线_）
 * @method void setInstanceName(string $InstanceName) 设置实例名称（1-50 个英文、汉字、数字、连接线-或下划线_）
 * @method integer getNodeNum() 获取已废弃请使用NodeInfoList
节点个数（2-50个）
 * @method void setNodeNum(integer $NodeNum) 设置已废弃请使用NodeInfoList
节点个数（2-50个）
 * @method string getEsConfig() 获取ES配置项（JSON格式字符串）
 * @method void setEsConfig(string $EsConfig) 设置ES配置项（JSON格式字符串）
 * @method string getPassword() 获取默认用户elastic的密码（8到16位，至少包括两项（[a-z,A-Z],[0-9]和[-!@#$%&^*+=_:;,.?]的特殊符号）
 * @method void setPassword(string $Password) 设置默认用户elastic的密码（8到16位，至少包括两项（[a-z,A-Z],[0-9]和[-!@#$%&^*+=_:;,.?]的特殊符号）
 * @method EsAcl getEsAcl() 获取可视化组件（Kibana、Cerebro）的公网访问策略
 * @method void setEsAcl(EsAcl $EsAcl) 设置可视化组件（Kibana、Cerebro）的公网访问策略
 * @method integer getDiskSize() 获取已废弃请使用NodeInfoList
磁盘大小（单位GB）
 * @method void setDiskSize(integer $DiskSize) 设置已废弃请使用NodeInfoList
磁盘大小（单位GB）
 * @method string getNodeType() 获取已废弃请使用NodeInfoList
节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
 * @method void setNodeType(string $NodeType) 设置已废弃请使用NodeInfoList
节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
 * @method integer getMasterNodeNum() 获取已废弃请使用NodeInfoList
专用主节点个数（只支持3个或5个）
 * @method void setMasterNodeNum(integer $MasterNodeNum) 设置已废弃请使用NodeInfoList
专用主节点个数（只支持3个或5个）
 * @method string getMasterNodeType() 获取已废弃请使用NodeInfoList
专用主节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
 * @method void setMasterNodeType(string $MasterNodeType) 设置已废弃请使用NodeInfoList
专用主节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
 * @method integer getMasterNodeDiskSize() 获取已废弃请使用NodeInfoList
专用主节点磁盘大小（单位GB系统默认配置为50GB,暂不支持自定义）
 * @method void setMasterNodeDiskSize(integer $MasterNodeDiskSize) 设置已废弃请使用NodeInfoList
专用主节点磁盘大小（单位GB系统默认配置为50GB,暂不支持自定义）
 * @method boolean getForceRestart() 获取更新配置时是否强制重启<li>true强制重启</li><li>false不强制重启</li>当前仅更新EsConfig时需要设置，默认值为false
 * @method void setForceRestart(boolean $ForceRestart) 设置更新配置时是否强制重启<li>true强制重启</li><li>false不强制重启</li>当前仅更新EsConfig时需要设置，默认值为false
 * @method CosBackup getCosBackup() 获取COS自动备份信息
 * @method void setCosBackup(CosBackup $CosBackup) 设置COS自动备份信息
 * @method array getNodeInfoList() 获取节点信息列表，可以只传递要更新的节点及其对应的规格信息。支持的操作包括<li>修改一种节点的个数</li><li>修改一种节点的节点规格及磁盘大小</li><li>增加一种节点类型（需要同时指定该节点的类型，个数，规格，磁盘等信息）</li>上述操作一次只能进行一种，且磁盘类型不支持修改
 * @method void setNodeInfoList(array $NodeInfoList) 设置节点信息列表，可以只传递要更新的节点及其对应的规格信息。支持的操作包括<li>修改一种节点的个数</li><li>修改一种节点的节点规格及磁盘大小</li><li>增加一种节点类型（需要同时指定该节点的类型，个数，规格，磁盘等信息）</li>上述操作一次只能进行一种，且磁盘类型不支持修改
 * @method string getPublicAccess() 获取ES集群公网访问状态
OPEN 开启
CLOSE 关闭
 * @method void setPublicAccess(string $PublicAccess) 设置ES集群公网访问状态
OPEN 开启
CLOSE 关闭
 * @method EsPublicAcl getEsPublicAcl() 获取公网访问控制列表
 * @method void setEsPublicAcl(EsPublicAcl $EsPublicAcl) 设置公网访问控制列表
 * @method string getKibanaPublicAccess() 获取Kibana公网访问状态
OPEN 开启
CLOSE 关闭
 * @method void setKibanaPublicAccess(string $KibanaPublicAccess) 设置Kibana公网访问状态
OPEN 开启
CLOSE 关闭
 * @method string getKibanaPrivateAccess() 获取Kibana内网访问状态
OPEN 开启
CLOSE 关闭
 * @method void setKibanaPrivateAccess(string $KibanaPrivateAccess) 设置Kibana内网访问状态
OPEN 开启
CLOSE 关闭
 * @method integer getBasicSecurityType() 获取ES 6.8及以上版本基础版开启或关闭用户认证
 * @method void setBasicSecurityType(integer $BasicSecurityType) 设置ES 6.8及以上版本基础版开启或关闭用户认证
 * @method integer getKibanaPrivatePort() 获取Kibana内网端口
 * @method void setKibanaPrivatePort(integer $KibanaPrivatePort) 设置Kibana内网端口
 * @method integer getScaleType() 获取0: 蓝绿变更方式扩容，集群不重启 （默认） 1: 磁盘解挂载扩容，集群滚动重启
 * @method void setScaleType(integer $ScaleType) 设置0: 蓝绿变更方式扩容，集群不重启 （默认） 1: 磁盘解挂载扩容，集群滚动重启
 * @method array getMultiZoneInfo() 获取多可用区部署
 * @method void setMultiZoneInfo(array $MultiZoneInfo) 设置多可用区部署
 * @method integer getSceneType() 获取场景化模板类型 -1：不启用 1：通用 2：日志 3：搜索
 * @method void setSceneType(integer $SceneType) 设置场景化模板类型 -1：不启用 1：通用 2：日志 3：搜索
 * @method string getKibanaConfig() 获取Kibana配置项（JSON格式字符串）
 * @method void setKibanaConfig(string $KibanaConfig) 设置Kibana配置项（JSON格式字符串）
 * @method WebNodeTypeInfo getWebNodeTypeInfo() 获取可视化节点配置
 * @method void setWebNodeTypeInfo(WebNodeTypeInfo $WebNodeTypeInfo) 设置可视化节点配置
 * @method string getSwitchPrivateLink() 获取切换到新网络架构
 * @method void setSwitchPrivateLink(string $SwitchPrivateLink) 设置切换到新网络架构
 * @method boolean getEnableCerebro() 获取启用Cerebro
 * @method void setEnableCerebro(boolean $EnableCerebro) 设置启用Cerebro
 * @method string getCerebroPublicAccess() 获取Cerebro公网访问状态
OPEN 开启
CLOSE 关闭
 * @method void setCerebroPublicAccess(string $CerebroPublicAccess) 设置Cerebro公网访问状态
OPEN 开启
CLOSE 关闭
 * @method string getCerebroPrivateAccess() 获取Cerebro内网访问状态
OPEN 开启
CLOSE 关闭
 * @method void setCerebroPrivateAccess(string $CerebroPrivateAccess) 设置Cerebro内网访问状态
OPEN 开启
CLOSE 关闭
 * @method EsConfigSetInfo getEsConfigSet() 获取新增或修改的配置组信息
 * @method void setEsConfigSet(EsConfigSetInfo $EsConfigSet) 设置新增或修改的配置组信息
 * @method OperationDurationUpdated getOperationDuration() 获取可维护时间段
 * @method void setOperationDuration(OperationDurationUpdated $OperationDuration) 设置可维护时间段
 * @method string getKibanaAlteringPublicAccess() 获取是否开启Alerting 外网告警输出：
OPEN 开启
CLOSE 关闭
 * @method void setKibanaAlteringPublicAccess(string $KibanaAlteringPublicAccess) 设置是否开启Alerting 外网告警输出：
OPEN 开启
CLOSE 关闭
 * @method string getKibanaPrivateDomain() 获取kibana内网自定义域名
 * @method void setKibanaPrivateDomain(string $KibanaPrivateDomain) 设置kibana内网自定义域名
 * @method string getCerebroPrivateDomain() 获取cerebro内网自定义域名
 * @method void setCerebroPrivateDomain(string $CerebroPrivateDomain) 设置cerebro内网自定义域名
 * @method string getProtocol() 获取变更为https集群，默认是http
 * @method void setProtocol(string $Protocol) 设置变更为https集群，默认是http
 * @method array getOutboundPublicAcls() 获取节点出站访问详细信息

 * @method void setOutboundPublicAcls(array $OutboundPublicAcls) 设置节点出站访问详细信息

 * @method string getOutboundPublicAccess() 获取节点出站访问操作
OPEN 开启
CLOSE 关闭
 * @method void setOutboundPublicAccess(string $OutboundPublicAccess) 设置节点出站访问操作
OPEN 开启
CLOSE 关闭
 * @method integer getCvmDelayOnlineTime() 获取cvm延迟上架参数
 * @method void setCvmDelayOnlineTime(integer $CvmDelayOnlineTime) 设置cvm延迟上架参数
 * @method integer getShardAllocationConcurrents() 获取分片迁移并发数
 * @method void setShardAllocationConcurrents(integer $ShardAllocationConcurrents) 设置分片迁移并发数
 * @method integer getShardAllocationBytes() 获取分片迁移并发速度
 * @method void setShardAllocationBytes(integer $ShardAllocationBytes) 设置分片迁移并发速度
 * @method integer getReadWriteMode() 获取读写分离模式：-1-不开启，1-本地读写分离，2-远端读写分离
 * @method void setReadWriteMode(integer $ReadWriteMode) 设置读写分离模式：-1-不开启，1-本地读写分离，2-远端读写分离
 * @method boolean getEnableScheduleRecoverGroup() 获取是否开启置放群组异步任务
 * @method void setEnableScheduleRecoverGroup(boolean $EnableScheduleRecoverGroup) 设置是否开启置放群组异步任务
 * @method EnableScheduleOperationDuration getEnableScheduleOperationDuration() 获取置放群组异步任务可维护时间段
 * @method void setEnableScheduleOperationDuration(EnableScheduleOperationDuration $EnableScheduleOperationDuration) 设置置放群组异步任务可维护时间段
 * @method string getEnableDestroyProtection() 获取开启集群保护：OPEN-开启，CLOSE-关闭
 * @method void setEnableDestroyProtection(string $EnableDestroyProtection) 设置开启集群保护：OPEN-开启，CLOSE-关闭
 * @method array getAutoScaleDiskInfoList() 获取自动扩盘参数
 * @method void setAutoScaleDiskInfoList(array $AutoScaleDiskInfoList) 设置自动扩盘参数
 * @method array getAutoScaleDiskDeleteNodeTypeList() 获取自动扩盘删除参数
 * @method void setAutoScaleDiskDeleteNodeTypeList(array $AutoScaleDiskDeleteNodeTypeList) 设置自动扩盘删除参数
 * @method OtherConfig getOtherConfig() 获取其他附加配置，jvm或者yml
 * @method void setOtherConfig(OtherConfig $OtherConfig) 设置其他附加配置，jvm或者yml
 */
class UpdateInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称（1-50 个英文、汉字、数字、连接线-或下划线_）
     */
    public $InstanceName;

    /**
     * @var integer 已废弃请使用NodeInfoList
节点个数（2-50个）
     */
    public $NodeNum;

    /**
     * @var string ES配置项（JSON格式字符串）
     */
    public $EsConfig;

    /**
     * @var string 默认用户elastic的密码（8到16位，至少包括两项（[a-z,A-Z],[0-9]和[-!@#$%&^*+=_:;,.?]的特殊符号）
     */
    public $Password;

    /**
     * @var EsAcl 可视化组件（Kibana、Cerebro）的公网访问策略
     */
    public $EsAcl;

    /**
     * @var integer 已废弃请使用NodeInfoList
磁盘大小（单位GB）
     */
    public $DiskSize;

    /**
     * @var string 已废弃请使用NodeInfoList
节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
     */
    public $NodeType;

    /**
     * @var integer 已废弃请使用NodeInfoList
专用主节点个数（只支持3个或5个）
     */
    public $MasterNodeNum;

    /**
     * @var string 已废弃请使用NodeInfoList
专用主节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
     */
    public $MasterNodeType;

    /**
     * @var integer 已废弃请使用NodeInfoList
专用主节点磁盘大小（单位GB系统默认配置为50GB,暂不支持自定义）
     */
    public $MasterNodeDiskSize;

    /**
     * @var boolean 更新配置时是否强制重启<li>true强制重启</li><li>false不强制重启</li>当前仅更新EsConfig时需要设置，默认值为false
     */
    public $ForceRestart;

    /**
     * @var CosBackup COS自动备份信息
     */
    public $CosBackup;

    /**
     * @var array 节点信息列表，可以只传递要更新的节点及其对应的规格信息。支持的操作包括<li>修改一种节点的个数</li><li>修改一种节点的节点规格及磁盘大小</li><li>增加一种节点类型（需要同时指定该节点的类型，个数，规格，磁盘等信息）</li>上述操作一次只能进行一种，且磁盘类型不支持修改
     */
    public $NodeInfoList;

    /**
     * @var string ES集群公网访问状态
OPEN 开启
CLOSE 关闭
     */
    public $PublicAccess;

    /**
     * @var EsPublicAcl 公网访问控制列表
     */
    public $EsPublicAcl;

    /**
     * @var string Kibana公网访问状态
OPEN 开启
CLOSE 关闭
     */
    public $KibanaPublicAccess;

    /**
     * @var string Kibana内网访问状态
OPEN 开启
CLOSE 关闭
     */
    public $KibanaPrivateAccess;

    /**
     * @var integer ES 6.8及以上版本基础版开启或关闭用户认证
     */
    public $BasicSecurityType;

    /**
     * @var integer Kibana内网端口
     */
    public $KibanaPrivatePort;

    /**
     * @var integer 0: 蓝绿变更方式扩容，集群不重启 （默认） 1: 磁盘解挂载扩容，集群滚动重启
     */
    public $ScaleType;

    /**
     * @var array 多可用区部署
     */
    public $MultiZoneInfo;

    /**
     * @var integer 场景化模板类型 -1：不启用 1：通用 2：日志 3：搜索
     */
    public $SceneType;

    /**
     * @var string Kibana配置项（JSON格式字符串）
     */
    public $KibanaConfig;

    /**
     * @var WebNodeTypeInfo 可视化节点配置
     */
    public $WebNodeTypeInfo;

    /**
     * @var string 切换到新网络架构
     */
    public $SwitchPrivateLink;

    /**
     * @var boolean 启用Cerebro
     */
    public $EnableCerebro;

    /**
     * @var string Cerebro公网访问状态
OPEN 开启
CLOSE 关闭
     */
    public $CerebroPublicAccess;

    /**
     * @var string Cerebro内网访问状态
OPEN 开启
CLOSE 关闭
     */
    public $CerebroPrivateAccess;

    /**
     * @var EsConfigSetInfo 新增或修改的配置组信息
     */
    public $EsConfigSet;

    /**
     * @var OperationDurationUpdated 可维护时间段
     */
    public $OperationDuration;

    /**
     * @var string 是否开启Alerting 外网告警输出：
OPEN 开启
CLOSE 关闭
     */
    public $KibanaAlteringPublicAccess;

    /**
     * @var string kibana内网自定义域名
     */
    public $KibanaPrivateDomain;

    /**
     * @var string cerebro内网自定义域名
     */
    public $CerebroPrivateDomain;

    /**
     * @var string 变更为https集群，默认是http
     */
    public $Protocol;

    /**
     * @var array 节点出站访问详细信息

     */
    public $OutboundPublicAcls;

    /**
     * @var string 节点出站访问操作
OPEN 开启
CLOSE 关闭
     */
    public $OutboundPublicAccess;

    /**
     * @var integer cvm延迟上架参数
     */
    public $CvmDelayOnlineTime;

    /**
     * @var integer 分片迁移并发数
     */
    public $ShardAllocationConcurrents;

    /**
     * @var integer 分片迁移并发速度
     */
    public $ShardAllocationBytes;

    /**
     * @var integer 读写分离模式：-1-不开启，1-本地读写分离，2-远端读写分离
     */
    public $ReadWriteMode;

    /**
     * @var boolean 是否开启置放群组异步任务
     */
    public $EnableScheduleRecoverGroup;

    /**
     * @var EnableScheduleOperationDuration 置放群组异步任务可维护时间段
     */
    public $EnableScheduleOperationDuration;

    /**
     * @var string 开启集群保护：OPEN-开启，CLOSE-关闭
     */
    public $EnableDestroyProtection;

    /**
     * @var array 自动扩盘参数
     */
    public $AutoScaleDiskInfoList;

    /**
     * @var array 自动扩盘删除参数
     */
    public $AutoScaleDiskDeleteNodeTypeList;

    /**
     * @var OtherConfig 其他附加配置，jvm或者yml
     */
    public $OtherConfig;

    /**
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称（1-50 个英文、汉字、数字、连接线-或下划线_）
     * @param integer $NodeNum 已废弃请使用NodeInfoList
节点个数（2-50个）
     * @param string $EsConfig ES配置项（JSON格式字符串）
     * @param string $Password 默认用户elastic的密码（8到16位，至少包括两项（[a-z,A-Z],[0-9]和[-!@#$%&^*+=_:;,.?]的特殊符号）
     * @param EsAcl $EsAcl 可视化组件（Kibana、Cerebro）的公网访问策略
     * @param integer $DiskSize 已废弃请使用NodeInfoList
磁盘大小（单位GB）
     * @param string $NodeType 已废弃请使用NodeInfoList
节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
     * @param integer $MasterNodeNum 已废弃请使用NodeInfoList
专用主节点个数（只支持3个或5个）
     * @param string $MasterNodeType 已废弃请使用NodeInfoList
专用主节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li>
     * @param integer $MasterNodeDiskSize 已废弃请使用NodeInfoList
专用主节点磁盘大小（单位GB系统默认配置为50GB,暂不支持自定义）
     * @param boolean $ForceRestart 更新配置时是否强制重启<li>true强制重启</li><li>false不强制重启</li>当前仅更新EsConfig时需要设置，默认值为false
     * @param CosBackup $CosBackup COS自动备份信息
     * @param array $NodeInfoList 节点信息列表，可以只传递要更新的节点及其对应的规格信息。支持的操作包括<li>修改一种节点的个数</li><li>修改一种节点的节点规格及磁盘大小</li><li>增加一种节点类型（需要同时指定该节点的类型，个数，规格，磁盘等信息）</li>上述操作一次只能进行一种，且磁盘类型不支持修改
     * @param string $PublicAccess ES集群公网访问状态
OPEN 开启
CLOSE 关闭
     * @param EsPublicAcl $EsPublicAcl 公网访问控制列表
     * @param string $KibanaPublicAccess Kibana公网访问状态
OPEN 开启
CLOSE 关闭
     * @param string $KibanaPrivateAccess Kibana内网访问状态
OPEN 开启
CLOSE 关闭
     * @param integer $BasicSecurityType ES 6.8及以上版本基础版开启或关闭用户认证
     * @param integer $KibanaPrivatePort Kibana内网端口
     * @param integer $ScaleType 0: 蓝绿变更方式扩容，集群不重启 （默认） 1: 磁盘解挂载扩容，集群滚动重启
     * @param array $MultiZoneInfo 多可用区部署
     * @param integer $SceneType 场景化模板类型 -1：不启用 1：通用 2：日志 3：搜索
     * @param string $KibanaConfig Kibana配置项（JSON格式字符串）
     * @param WebNodeTypeInfo $WebNodeTypeInfo 可视化节点配置
     * @param string $SwitchPrivateLink 切换到新网络架构
     * @param boolean $EnableCerebro 启用Cerebro
     * @param string $CerebroPublicAccess Cerebro公网访问状态
OPEN 开启
CLOSE 关闭
     * @param string $CerebroPrivateAccess Cerebro内网访问状态
OPEN 开启
CLOSE 关闭
     * @param EsConfigSetInfo $EsConfigSet 新增或修改的配置组信息
     * @param OperationDurationUpdated $OperationDuration 可维护时间段
     * @param string $KibanaAlteringPublicAccess 是否开启Alerting 外网告警输出：
OPEN 开启
CLOSE 关闭
     * @param string $KibanaPrivateDomain kibana内网自定义域名
     * @param string $CerebroPrivateDomain cerebro内网自定义域名
     * @param string $Protocol 变更为https集群，默认是http
     * @param array $OutboundPublicAcls 节点出站访问详细信息

     * @param string $OutboundPublicAccess 节点出站访问操作
OPEN 开启
CLOSE 关闭
     * @param integer $CvmDelayOnlineTime cvm延迟上架参数
     * @param integer $ShardAllocationConcurrents 分片迁移并发数
     * @param integer $ShardAllocationBytes 分片迁移并发速度
     * @param integer $ReadWriteMode 读写分离模式：-1-不开启，1-本地读写分离，2-远端读写分离
     * @param boolean $EnableScheduleRecoverGroup 是否开启置放群组异步任务
     * @param EnableScheduleOperationDuration $EnableScheduleOperationDuration 置放群组异步任务可维护时间段
     * @param string $EnableDestroyProtection 开启集群保护：OPEN-开启，CLOSE-关闭
     * @param array $AutoScaleDiskInfoList 自动扩盘参数
     * @param array $AutoScaleDiskDeleteNodeTypeList 自动扩盘删除参数
     * @param OtherConfig $OtherConfig 其他附加配置，jvm或者yml
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
    }
}
