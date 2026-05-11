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
 * 实例详细信息
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method string getZone() 获取<p>可用区</p>
 * @method void setZone(string $Zone) 设置<p>可用区</p>
 * @method integer getAppId() 获取<p>用户ID</p>
 * @method void setAppId(integer $AppId) 设置<p>用户ID</p>
 * @method string getUin() 获取<p>用户UIN</p>
 * @method void setUin(string $Uin) 设置<p>用户UIN</p>
 * @method string getVpcUid() 获取<p>实例所属VPC的UID</p>
 * @method void setVpcUid(string $VpcUid) 设置<p>实例所属VPC的UID</p>
 * @method string getSubnetUid() 获取<p>实例所属子网的UID</p>
 * @method void setSubnetUid(string $SubnetUid) 设置<p>实例所属子网的UID</p>
 * @method integer getStatus() 获取<p>实例状态，0:处理中,1:正常,-1:停止,-2:销毁中,-3:已销毁, -4:隔离中,2:创建集群时初始化中</p>
 * @method void setStatus(integer $Status) 设置<p>实例状态，0:处理中,1:正常,-1:停止,-2:销毁中,-3:已销毁, -4:隔离中,2:创建集群时初始化中</p>
 * @method string getRenewFlag() 获取<p>自动续费标识。取值范围：<br>RENEW_FLAG_AUTO：自动续费<br>RENEW_FLAG_MANUAL：不自动续费<br>默认取值：<br>RENEW_FLAG_DEFAULT：不自动续费<br>若该参数指定为 RENEW_FLAG_AUTO，在账户余额充足的情况下，实例到期后将按月自动续费。</p>
 * @method void setRenewFlag(string $RenewFlag) 设置<p>自动续费标识。取值范围：<br>RENEW_FLAG_AUTO：自动续费<br>RENEW_FLAG_MANUAL：不自动续费<br>默认取值：<br>RENEW_FLAG_DEFAULT：不自动续费<br>若该参数指定为 RENEW_FLAG_AUTO，在账户余额充足的情况下，实例到期后将按月自动续费。</p>
 * @method string getChargeType() 获取<p>实例计费模式。取值范围：  PREPAID：表示预付费，即包年包月  POSTPAID_BY_HOUR：表示后付费，即按量计费  CDHPAID：CDH付费，即只对CDH计费，不对CDH上的实例计费。</p>
 * @method void setChargeType(string $ChargeType) 设置<p>实例计费模式。取值范围：  PREPAID：表示预付费，即包年包月  POSTPAID_BY_HOUR：表示后付费，即按量计费  CDHPAID：CDH付费，即只对CDH计费，不对CDH上的实例计费。</p>
 * @method integer getChargePeriod() 获取<p>包年包月购买时长,单位:月</p>
 * @method void setChargePeriod(integer $ChargePeriod) 设置<p>包年包月购买时长,单位:月</p>
 * @method string getNodeType() 获取<p>节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
 * @method void setNodeType(string $NodeType) 设置<p>节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
 * @method integer getNodeNum() 获取<p>节点个数</p>
 * @method void setNodeNum(integer $NodeNum) 设置<p>节点个数</p>
 * @method integer getCpuNum() 获取<p>节点CPU核数</p>
 * @method void setCpuNum(integer $CpuNum) 设置<p>节点CPU核数</p>
 * @method integer getMemSize() 获取<p>节点内存大小，单位GB</p>
 * @method void setMemSize(integer $MemSize) 设置<p>节点内存大小，单位GB</p>
 * @method string getDiskType() 获取<p>节点磁盘类型</p>
 * @method void setDiskType(string $DiskType) 设置<p>节点磁盘类型</p>
 * @method integer getDiskSize() 获取<p>节点磁盘大小，单位GB</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>节点磁盘大小，单位GB</p>
 * @method string getEsDomain() 获取<p>ES域名</p>
 * @method void setEsDomain(string $EsDomain) 设置<p>ES域名</p>
 * @method string getEsVip() 获取<p>ES VIP</p>
 * @method void setEsVip(string $EsVip) 设置<p>ES VIP</p>
 * @method integer getEsPort() 获取<p>ES端口</p>
 * @method void setEsPort(integer $EsPort) 设置<p>ES端口</p>
 * @method string getKibanaUrl() 获取<p>Kibana访问url</p>
 * @method void setKibanaUrl(string $KibanaUrl) 设置<p>Kibana访问url</p>
 * @method string getEsVersion() 获取<p>ES版本号</p>
 * @method void setEsVersion(string $EsVersion) 设置<p>ES版本号</p>
 * @method string getEsConfig() 获取<p>ES配置项</p>
 * @method void setEsConfig(string $EsConfig) 设置<p>ES配置项</p>
 * @method EsAcl getEsAcl() 获取<p>Kibana访问控制配置</p>
 * @method void setEsAcl(EsAcl $EsAcl) 设置<p>Kibana访问控制配置</p>
 * @method string getCreateTime() 获取<p>实例创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>实例创建时间</p>
 * @method string getUpdateTime() 获取<p>实例最后修改操作时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>实例最后修改操作时间</p>
 * @method string getDeadline() 获取<p>实例到期时间</p>
 * @method void setDeadline(string $Deadline) 设置<p>实例到期时间</p>
 * @method integer getInstanceType() 获取<p>实例类型（实例类型标识，当前只有1,2两种）</p>
 * @method void setInstanceType(integer $InstanceType) 设置<p>实例类型（实例类型标识，当前只有1,2两种）</p>
 * @method EsDictionaryInfo getIkConfig() 获取<p>Ik分词器配置</p>
 * @method void setIkConfig(EsDictionaryInfo $IkConfig) 设置<p>Ik分词器配置</p>
 * @method MasterNodeInfo getMasterNodeInfo() 获取<p>专用主节点配置</p>
 * @method void setMasterNodeInfo(MasterNodeInfo $MasterNodeInfo) 设置<p>专用主节点配置</p>
 * @method CosBackup getCosBackup() 获取<p>cos自动备份配置</p>
 * @method void setCosBackup(CosBackup $CosBackup) 设置<p>cos自动备份配置</p>
 * @method boolean getAllowCosBackup() 获取<p>是否允许cos自动备份</p>
 * @method void setAllowCosBackup(boolean $AllowCosBackup) 设置<p>是否允许cos自动备份</p>
 * @method array getTagList() 获取<p>实例拥有的标签列表</p>
 * @method void setTagList(array $TagList) 设置<p>实例拥有的标签列表</p>
 * @method string getLicenseType() 获取<p>License类型<li>oss：开源版</li><li>basic：基础版</li><li>platinum：白金版</li>默认值platinum</p>
 * @method void setLicenseType(string $LicenseType) 设置<p>License类型<li>oss：开源版</li><li>basic：基础版</li><li>platinum：白金版</li>默认值platinum</p>
 * @method boolean getEnableHotWarmMode() 获取<p>是否为冷热集群<li>true: 冷热集群</li><li>false: 非冷热集群</li></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableHotWarmMode(boolean $EnableHotWarmMode) 设置<p>是否为冷热集群<li>true: 冷热集群</li><li>false: 非冷热集群</li></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWarmNodeType() 获取<p>温节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarmNodeType(string $WarmNodeType) 设置<p>温节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWarmNodeNum() 获取<p>温节点个数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarmNodeNum(integer $WarmNodeNum) 设置<p>温节点个数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWarmCpuNum() 获取<p>温节点CPU核数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarmCpuNum(integer $WarmCpuNum) 设置<p>温节点CPU核数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWarmMemSize() 获取<p>温节点内存内存大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarmMemSize(integer $WarmMemSize) 设置<p>温节点内存内存大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWarmDiskType() 获取<p>温节点磁盘类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarmDiskType(string $WarmDiskType) 设置<p>温节点磁盘类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWarmDiskSize() 获取<p>温节点磁盘大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarmDiskSize(integer $WarmDiskSize) 设置<p>温节点磁盘大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNodeInfoList() 获取<p>集群节点信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeInfoList(array $NodeInfoList) 设置<p>集群节点信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEsPublicUrl() 获取<p>Es公网地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEsPublicUrl(string $EsPublicUrl) 设置<p>Es公网地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMultiZoneInfo() 获取<p>多可用区网络信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMultiZoneInfo(array $MultiZoneInfo) 设置<p>多可用区网络信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeployMode() 获取<p>部署模式<li>0：单可用区</li><li>1：多可用区，北京、上海、上海金融、广州、南京、香港、新加坡、法兰克福（白名单控制）</li></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployMode(integer $DeployMode) 设置<p>部署模式<li>0：单可用区</li><li>1：多可用区，北京、上海、上海金融、广州、南京、香港、新加坡、法兰克福（白名单控制）</li></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicAccess() 获取<p>ES公网访问状态<li>OPEN：开启</li><li>CLOSE：关闭</li></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicAccess(string $PublicAccess) 设置<p>ES公网访问状态<li>OPEN：开启</li><li>CLOSE：关闭</li></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method EsAcl getEsPublicAcl() 获取<p>ES公网访问控制配置</p>
 * @method void setEsPublicAcl(EsAcl $EsPublicAcl) 设置<p>ES公网访问控制配置</p>
 * @method string getKibanaPrivateUrl() 获取<p>Kibana内网地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKibanaPrivateUrl(string $KibanaPrivateUrl) 设置<p>Kibana内网地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKibanaPublicAccess() 获取<p>Kibana公网访问状态<li>OPEN：开启</li><li>CLOSE：关闭</li></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKibanaPublicAccess(string $KibanaPublicAccess) 设置<p>Kibana公网访问状态<li>OPEN：开启</li><li>CLOSE：关闭</li></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKibanaPrivateAccess() 获取<p>Kibana内网访问状态<li>OPEN：开启</li><li>CLOSE：关闭</li></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKibanaPrivateAccess(string $KibanaPrivateAccess) 设置<p>Kibana内网访问状态<li>OPEN：开启</li><li>CLOSE：关闭</li></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSecurityType() 获取<p>6.8（及以上版本）基础版是否开启xpack security认证<li>1：不开启</li><li>2：开启</li></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityType(integer $SecurityType) 设置<p>6.8（及以上版本）基础版是否开启xpack security认证<li>1：不开启</li><li>2：开启</li></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSceneType() 获取<p>场景化模板类型：0、不开启；1、通用场景；2、日志场景；3、搜索场景</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSceneType(integer $SceneType) 设置<p>场景化模板类型：0、不开启；1、通用场景；2、日志场景；3、搜索场景</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKibanaConfig() 获取<p>Kibana配置项</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKibanaConfig(string $KibanaConfig) 设置<p>Kibana配置项</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method KibanaNodeInfo getKibanaNodeInfo() 获取<p>Kibana节点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKibanaNodeInfo(KibanaNodeInfo $KibanaNodeInfo) 设置<p>Kibana节点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method WebNodeTypeInfo getWebNodeTypeInfo() 获取<p>可视化节点配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebNodeTypeInfo(WebNodeTypeInfo $WebNodeTypeInfo) 设置<p>可视化节点配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJdk() 获取<p>JDK类型，oracle或kona</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJdk(string $Jdk) 设置<p>JDK类型，oracle或kona</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取<p>集群网络通讯协议</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置<p>集群网络通讯协议</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSecurityGroups() 获取<p>安全组id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityGroups(array $SecurityGroups) 设置<p>安全组id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColdNodeType() 获取<p>冷节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColdNodeType(string $ColdNodeType) 设置<p>冷节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getColdNodeNum() 获取<p>冷节点个数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColdNodeNum(integer $ColdNodeNum) 设置<p>冷节点个数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getColdCpuNum() 获取<p>冷节点CPU核数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColdCpuNum(integer $ColdCpuNum) 设置<p>冷节点CPU核数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getColdMemSize() 获取<p>冷节点内存大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColdMemSize(integer $ColdMemSize) 设置<p>冷节点内存大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColdDiskType() 获取<p>冷节点磁盘类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColdDiskType(string $ColdDiskType) 设置<p>冷节点磁盘类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getColdDiskSize() 获取<p>冷节点磁盘大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColdDiskSize(integer $ColdDiskSize) 设置<p>冷节点磁盘大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFrozenNodeType() 获取<p>冻节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrozenNodeType(string $FrozenNodeType) 设置<p>冻节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFrozenNodeNum() 获取<p>冻节点个数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrozenNodeNum(integer $FrozenNodeNum) 设置<p>冻节点个数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFrozenCpuNum() 获取<p>冻节点CPU核数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrozenCpuNum(integer $FrozenCpuNum) 设置<p>冻节点CPU核数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFrozenMemSize() 获取<p>冻节点内存大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrozenMemSize(integer $FrozenMemSize) 设置<p>冻节点内存大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFrozenDiskType() 获取<p>冻节点磁盘类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrozenDiskType(string $FrozenDiskType) 设置<p>冻节点磁盘类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFrozenDiskSize() 获取<p>冻节点磁盘大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrozenDiskSize(integer $FrozenDiskSize) 设置<p>冻节点磁盘大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHealthStatus() 获取<p>集群健康状态 -1 未知；0 Green; 1 Yellow; 2 Red</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthStatus(integer $HealthStatus) 设置<p>集群健康状态 -1 未知；0 Green; 1 Yellow; 2 Red</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEsPrivateUrl() 获取<p>https集群内网url</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEsPrivateUrl(string $EsPrivateUrl) 设置<p>https集群内网url</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEsPrivateDomain() 获取<p>https集群内网域名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEsPrivateDomain(string $EsPrivateDomain) 设置<p>https集群内网域名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEsConfigSets() 获取<p>集群的配置组信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEsConfigSets(array $EsConfigSets) 设置<p>集群的配置组信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method OperationDuration getOperationDuration() 获取<p>集群可维护时间段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperationDuration(OperationDuration $OperationDuration) 设置<p>集群可维护时间段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOptionalWebServiceInfos() 获取<p>web节点列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOptionalWebServiceInfos(array $OptionalWebServiceInfos) 设置<p>web节点列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAutoIndexEnabled() 获取<p>自治索引开关</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoIndexEnabled(boolean $AutoIndexEnabled) 设置<p>自治索引开关</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableHybridStorage() 获取<p>是否支持存储计算分离</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableHybridStorage(boolean $EnableHybridStorage) 设置<p>是否支持存储计算分离</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getProcessPercent() 获取<p>流程进度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessPercent(float $ProcessPercent) 设置<p>流程进度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKibanaAlteringPublicAccess() 获取<p>Kibana的alerting外网告警策略<li>OPEN：开启</li><li>CLOSE：关闭</li></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKibanaAlteringPublicAccess(string $KibanaAlteringPublicAccess) 设置<p>Kibana的alerting外网告警策略<li>OPEN：开启</li><li>CLOSE：关闭</li></p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHasKernelUpgrade() 获取<p>本月是否有内核可以更新：false-无，true-有</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasKernelUpgrade(boolean $HasKernelUpgrade) 设置<p>本月是否有内核可以更新：false-无，true-有</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCdcId() 获取<p>cdcId，使用cdc子网时传递</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCdcId(string $CdcId) 设置<p>cdcId，使用cdc子网时传递</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKibanaPrivateVip() 获取<p>kibana内网vip</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKibanaPrivateVip(string $KibanaPrivateVip) 设置<p>kibana内网vip</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomKibanaPrivateUrl() 获取<p>自定义kibana内网url</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomKibanaPrivateUrl(string $CustomKibanaPrivateUrl) 设置<p>自定义kibana内网url</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOutboundPublicAcls() 获取<p>节点出站访问详细信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutboundPublicAcls(array $OutboundPublicAcls) 设置<p>节点出站访问详细信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNetConnectScheme() 获取<p>网络连接方案</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetConnectScheme(string $NetConnectScheme) 设置<p>网络连接方案</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDisasterRecoverGroupAffinity() 获取<p>置放群组相关参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisasterRecoverGroupAffinity(integer $DisasterRecoverGroupAffinity) 设置<p>置放群组相关参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubProductCode() 获取<p>子产品ID枚举值： 开源版：&quot;sp_es_io2&quot;， 基础版：&quot;sp_es_basic&quot;，白金版：&quot;sp_es_platinum&quot;，企业版：&quot;sp_es_enterprise&quot;，CDC白金版：&quot;sp_es_cdc_platinum&quot;，日志增强版：&quot;sp_es_enlogging&quot;，tsearch：&quot;sp_tsearch_io2&quot;，logstash：&quot;sp_es_logstash&quot; ，可以为空，为空的时候后台取LicenseType映射该字段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubProductCode(string $SubProductCode) 设置<p>子产品ID枚举值： 开源版：&quot;sp_es_io2&quot;， 基础版：&quot;sp_es_basic&quot;，白金版：&quot;sp_es_platinum&quot;，企业版：&quot;sp_es_enterprise&quot;，CDC白金版：&quot;sp_es_cdc_platinum&quot;，日志增强版：&quot;sp_es_enlogging&quot;，tsearch：&quot;sp_tsearch_io2&quot;，logstash：&quot;sp_es_logstash&quot; ，可以为空，为空的时候后台取LicenseType映射该字段</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCosBucketStorageSize() 获取<p>存算分离cos用量，单位M</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosBucketStorageSize(integer $CosBucketStorageSize) 设置<p>存算分离cos用量，单位M</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReadWriteMode() 获取<p>读写分离模式：0-不开启，1-本地读写分离，2-远端读写分离</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReadWriteMode(integer $ReadWriteMode) 设置<p>读写分离模式：0-不开启，1-本地读写分离，2-远端读写分离</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableScheduleRecoverGroup() 获取<p>是否有置放群组异步调度任务</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableScheduleRecoverGroup(boolean $EnableScheduleRecoverGroup) 设置<p>是否有置放群组异步调度任务</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method EnableScheduleOperationDuration getEnableScheduleOperationDuration() 获取<p>异步调度任务的时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableScheduleOperationDuration(EnableScheduleOperationDuration $EnableScheduleOperationDuration) 设置<p>异步调度任务的时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnableDestroyProtection() 获取<p>开启集群保护：OPEN-开启，CLOSE-关闭</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableDestroyProtection(string $EnableDestroyProtection) 设置<p>开启集群保护：OPEN-开启，CLOSE-关闭</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShowKibanaIpPort() 获取<p>kibana内网访问地址</p>
 * @method void setShowKibanaIpPort(string $ShowKibanaIpPort) 设置<p>kibana内网访问地址</p>
 * @method boolean getIsCdzLite() 获取<p>是否为CDZLite可用区</p>
 * @method void setIsCdzLite(boolean $IsCdzLite) 设置<p>是否为CDZLite可用区</p>
 * @method string getEsPrivateTcpUrl() 获取<p>集群内网tcp地址</p>
 * @method void setEsPrivateTcpUrl(string $EsPrivateTcpUrl) 设置<p>集群内网tcp地址</p>
 * @method boolean getIsInRecycleBin() 获取<p>是否在回收站内</p><p>默认值：false</p>
 * @method void setIsInRecycleBin(boolean $IsInRecycleBin) 设置<p>是否在回收站内</p><p>默认值：false</p>
 * @method boolean getRecycleLockEnabled() 获取<p>回收站内是否锁定</p><p>默认值：false</p>
 * @method void setRecycleLockEnabled(boolean $RecycleLockEnabled) 设置<p>回收站内是否锁定</p><p>默认值：false</p>
 * @method string getMayDestroyPoint() 获取<p>预计销毁的时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setMayDestroyPoint(string $MayDestroyPoint) 设置<p>预计销毁的时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method integer getDelayDestroyInterval() 获取<p>延迟销毁的时间</p><p>单位：天</p>
 * @method void setDelayDestroyInterval(integer $DelayDestroyInterval) 设置<p>延迟销毁的时间</p><p>单位：天</p>
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var string <p>可用区</p>
     */
    public $Zone;

    /**
     * @var integer <p>用户ID</p>
     */
    public $AppId;

    /**
     * @var string <p>用户UIN</p>
     */
    public $Uin;

    /**
     * @var string <p>实例所属VPC的UID</p>
     */
    public $VpcUid;

    /**
     * @var string <p>实例所属子网的UID</p>
     */
    public $SubnetUid;

    /**
     * @var integer <p>实例状态，0:处理中,1:正常,-1:停止,-2:销毁中,-3:已销毁, -4:隔离中,2:创建集群时初始化中</p>
     */
    public $Status;

    /**
     * @var string <p>自动续费标识。取值范围：<br>RENEW_FLAG_AUTO：自动续费<br>RENEW_FLAG_MANUAL：不自动续费<br>默认取值：<br>RENEW_FLAG_DEFAULT：不自动续费<br>若该参数指定为 RENEW_FLAG_AUTO，在账户余额充足的情况下，实例到期后将按月自动续费。</p>
     */
    public $RenewFlag;

    /**
     * @var string <p>实例计费模式。取值范围：  PREPAID：表示预付费，即包年包月  POSTPAID_BY_HOUR：表示后付费，即按量计费  CDHPAID：CDH付费，即只对CDH计费，不对CDH上的实例计费。</p>
     */
    public $ChargeType;

    /**
     * @var integer <p>包年包月购买时长,单位:月</p>
     */
    public $ChargePeriod;

    /**
     * @var string <p>节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
     */
    public $NodeType;

    /**
     * @var integer <p>节点个数</p>
     */
    public $NodeNum;

    /**
     * @var integer <p>节点CPU核数</p>
     */
    public $CpuNum;

    /**
     * @var integer <p>节点内存大小，单位GB</p>
     */
    public $MemSize;

    /**
     * @var string <p>节点磁盘类型</p>
     */
    public $DiskType;

    /**
     * @var integer <p>节点磁盘大小，单位GB</p>
     */
    public $DiskSize;

    /**
     * @var string <p>ES域名</p>
     */
    public $EsDomain;

    /**
     * @var string <p>ES VIP</p>
     */
    public $EsVip;

    /**
     * @var integer <p>ES端口</p>
     */
    public $EsPort;

    /**
     * @var string <p>Kibana访问url</p>
     */
    public $KibanaUrl;

    /**
     * @var string <p>ES版本号</p>
     */
    public $EsVersion;

    /**
     * @var string <p>ES配置项</p>
     */
    public $EsConfig;

    /**
     * @var EsAcl <p>Kibana访问控制配置</p>
     */
    public $EsAcl;

    /**
     * @var string <p>实例创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>实例最后修改操作时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>实例到期时间</p>
     */
    public $Deadline;

    /**
     * @var integer <p>实例类型（实例类型标识，当前只有1,2两种）</p>
     */
    public $InstanceType;

    /**
     * @var EsDictionaryInfo <p>Ik分词器配置</p>
     */
    public $IkConfig;

    /**
     * @var MasterNodeInfo <p>专用主节点配置</p>
     */
    public $MasterNodeInfo;

    /**
     * @var CosBackup <p>cos自动备份配置</p>
     */
    public $CosBackup;

    /**
     * @var boolean <p>是否允许cos自动备份</p>
     */
    public $AllowCosBackup;

    /**
     * @var array <p>实例拥有的标签列表</p>
     */
    public $TagList;

    /**
     * @var string <p>License类型<li>oss：开源版</li><li>basic：基础版</li><li>platinum：白金版</li>默认值platinum</p>
     */
    public $LicenseType;

    /**
     * @var boolean <p>是否为冷热集群<li>true: 冷热集群</li><li>false: 非冷热集群</li></p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableHotWarmMode;

    /**
     * @var string <p>温节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarmNodeType;

    /**
     * @var integer <p>温节点个数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarmNodeNum;

    /**
     * @var integer <p>温节点CPU核数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarmCpuNum;

    /**
     * @var integer <p>温节点内存内存大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarmMemSize;

    /**
     * @var string <p>温节点磁盘类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarmDiskType;

    /**
     * @var integer <p>温节点磁盘大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarmDiskSize;

    /**
     * @var array <p>集群节点信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeInfoList;

    /**
     * @var string <p>Es公网地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EsPublicUrl;

    /**
     * @var array <p>多可用区网络信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MultiZoneInfo;

    /**
     * @var integer <p>部署模式<li>0：单可用区</li><li>1：多可用区，北京、上海、上海金融、广州、南京、香港、新加坡、法兰克福（白名单控制）</li></p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeployMode;

    /**
     * @var string <p>ES公网访问状态<li>OPEN：开启</li><li>CLOSE：关闭</li></p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicAccess;

    /**
     * @var EsAcl <p>ES公网访问控制配置</p>
     */
    public $EsPublicAcl;

    /**
     * @var string <p>Kibana内网地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KibanaPrivateUrl;

    /**
     * @var string <p>Kibana公网访问状态<li>OPEN：开启</li><li>CLOSE：关闭</li></p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KibanaPublicAccess;

    /**
     * @var string <p>Kibana内网访问状态<li>OPEN：开启</li><li>CLOSE：关闭</li></p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KibanaPrivateAccess;

    /**
     * @var integer <p>6.8（及以上版本）基础版是否开启xpack security认证<li>1：不开启</li><li>2：开启</li></p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityType;

    /**
     * @var integer <p>场景化模板类型：0、不开启；1、通用场景；2、日志场景；3、搜索场景</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SceneType;

    /**
     * @var string <p>Kibana配置项</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KibanaConfig;

    /**
     * @var KibanaNodeInfo <p>Kibana节点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KibanaNodeInfo;

    /**
     * @var WebNodeTypeInfo <p>可视化节点配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebNodeTypeInfo;

    /**
     * @var string <p>JDK类型，oracle或kona</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Jdk;

    /**
     * @var string <p>集群网络通讯协议</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var array <p>安全组id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityGroups;

    /**
     * @var string <p>冷节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColdNodeType;

    /**
     * @var integer <p>冷节点个数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColdNodeNum;

    /**
     * @var integer <p>冷节点CPU核数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColdCpuNum;

    /**
     * @var integer <p>冷节点内存大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColdMemSize;

    /**
     * @var string <p>冷节点磁盘类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColdDiskType;

    /**
     * @var integer <p>冷节点磁盘大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColdDiskSize;

    /**
     * @var string <p>冻节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrozenNodeType;

    /**
     * @var integer <p>冻节点个数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrozenNodeNum;

    /**
     * @var integer <p>冻节点CPU核数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrozenCpuNum;

    /**
     * @var integer <p>冻节点内存大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrozenMemSize;

    /**
     * @var string <p>冻节点磁盘类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrozenDiskType;

    /**
     * @var integer <p>冻节点磁盘大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrozenDiskSize;

    /**
     * @var integer <p>集群健康状态 -1 未知；0 Green; 1 Yellow; 2 Red</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthStatus;

    /**
     * @var string <p>https集群内网url</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EsPrivateUrl;

    /**
     * @var string <p>https集群内网域名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EsPrivateDomain;

    /**
     * @var array <p>集群的配置组信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EsConfigSets;

    /**
     * @var OperationDuration <p>集群可维护时间段</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperationDuration;

    /**
     * @var array <p>web节点列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OptionalWebServiceInfos;

    /**
     * @var boolean <p>自治索引开关</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoIndexEnabled;

    /**
     * @var boolean <p>是否支持存储计算分离</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableHybridStorage;

    /**
     * @var float <p>流程进度</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessPercent;

    /**
     * @var string <p>Kibana的alerting外网告警策略<li>OPEN：开启</li><li>CLOSE：关闭</li></p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KibanaAlteringPublicAccess;

    /**
     * @var boolean <p>本月是否有内核可以更新：false-无，true-有</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasKernelUpgrade;

    /**
     * @var string <p>cdcId，使用cdc子网时传递</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CdcId;

    /**
     * @var string <p>kibana内网vip</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KibanaPrivateVip;

    /**
     * @var string <p>自定义kibana内网url</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomKibanaPrivateUrl;

    /**
     * @var array <p>节点出站访问详细信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutboundPublicAcls;

    /**
     * @var string <p>网络连接方案</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetConnectScheme;

    /**
     * @var integer <p>置放群组相关参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisasterRecoverGroupAffinity;

    /**
     * @var string <p>子产品ID枚举值： 开源版：&quot;sp_es_io2&quot;， 基础版：&quot;sp_es_basic&quot;，白金版：&quot;sp_es_platinum&quot;，企业版：&quot;sp_es_enterprise&quot;，CDC白金版：&quot;sp_es_cdc_platinum&quot;，日志增强版：&quot;sp_es_enlogging&quot;，tsearch：&quot;sp_tsearch_io2&quot;，logstash：&quot;sp_es_logstash&quot; ，可以为空，为空的时候后台取LicenseType映射该字段</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubProductCode;

    /**
     * @var integer <p>存算分离cos用量，单位M</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosBucketStorageSize;

    /**
     * @var integer <p>读写分离模式：0-不开启，1-本地读写分离，2-远端读写分离</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReadWriteMode;

    /**
     * @var boolean <p>是否有置放群组异步调度任务</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableScheduleRecoverGroup;

    /**
     * @var EnableScheduleOperationDuration <p>异步调度任务的时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableScheduleOperationDuration;

    /**
     * @var string <p>开启集群保护：OPEN-开启，CLOSE-关闭</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableDestroyProtection;

    /**
     * @var string <p>kibana内网访问地址</p>
     */
    public $ShowKibanaIpPort;

    /**
     * @var boolean <p>是否为CDZLite可用区</p>
     */
    public $IsCdzLite;

    /**
     * @var string <p>集群内网tcp地址</p>
     */
    public $EsPrivateTcpUrl;

    /**
     * @var boolean <p>是否在回收站内</p><p>默认值：false</p>
     */
    public $IsInRecycleBin;

    /**
     * @var boolean <p>回收站内是否锁定</p><p>默认值：false</p>
     */
    public $RecycleLockEnabled;

    /**
     * @var string <p>预计销毁的时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $MayDestroyPoint;

    /**
     * @var integer <p>延迟销毁的时间</p><p>单位：天</p>
     */
    public $DelayDestroyInterval;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $Region <p>地域</p>
     * @param string $Zone <p>可用区</p>
     * @param integer $AppId <p>用户ID</p>
     * @param string $Uin <p>用户UIN</p>
     * @param string $VpcUid <p>实例所属VPC的UID</p>
     * @param string $SubnetUid <p>实例所属子网的UID</p>
     * @param integer $Status <p>实例状态，0:处理中,1:正常,-1:停止,-2:销毁中,-3:已销毁, -4:隔离中,2:创建集群时初始化中</p>
     * @param string $RenewFlag <p>自动续费标识。取值范围：<br>RENEW_FLAG_AUTO：自动续费<br>RENEW_FLAG_MANUAL：不自动续费<br>默认取值：<br>RENEW_FLAG_DEFAULT：不自动续费<br>若该参数指定为 RENEW_FLAG_AUTO，在账户余额充足的情况下，实例到期后将按月自动续费。</p>
     * @param string $ChargeType <p>实例计费模式。取值范围：  PREPAID：表示预付费，即包年包月  POSTPAID_BY_HOUR：表示后付费，即按量计费  CDHPAID：CDH付费，即只对CDH计费，不对CDH上的实例计费。</p>
     * @param integer $ChargePeriod <p>包年包月购买时长,单位:月</p>
     * @param string $NodeType <p>节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
     * @param integer $NodeNum <p>节点个数</p>
     * @param integer $CpuNum <p>节点CPU核数</p>
     * @param integer $MemSize <p>节点内存大小，单位GB</p>
     * @param string $DiskType <p>节点磁盘类型</p>
     * @param integer $DiskSize <p>节点磁盘大小，单位GB</p>
     * @param string $EsDomain <p>ES域名</p>
     * @param string $EsVip <p>ES VIP</p>
     * @param integer $EsPort <p>ES端口</p>
     * @param string $KibanaUrl <p>Kibana访问url</p>
     * @param string $EsVersion <p>ES版本号</p>
     * @param string $EsConfig <p>ES配置项</p>
     * @param EsAcl $EsAcl <p>Kibana访问控制配置</p>
     * @param string $CreateTime <p>实例创建时间</p>
     * @param string $UpdateTime <p>实例最后修改操作时间</p>
     * @param string $Deadline <p>实例到期时间</p>
     * @param integer $InstanceType <p>实例类型（实例类型标识，当前只有1,2两种）</p>
     * @param EsDictionaryInfo $IkConfig <p>Ik分词器配置</p>
     * @param MasterNodeInfo $MasterNodeInfo <p>专用主节点配置</p>
     * @param CosBackup $CosBackup <p>cos自动备份配置</p>
     * @param boolean $AllowCosBackup <p>是否允许cos自动备份</p>
     * @param array $TagList <p>实例拥有的标签列表</p>
     * @param string $LicenseType <p>License类型<li>oss：开源版</li><li>basic：基础版</li><li>platinum：白金版</li>默认值platinum</p>
     * @param boolean $EnableHotWarmMode <p>是否为冷热集群<li>true: 冷热集群</li><li>false: 非冷热集群</li></p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WarmNodeType <p>温节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WarmNodeNum <p>温节点个数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WarmCpuNum <p>温节点CPU核数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WarmMemSize <p>温节点内存内存大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WarmDiskType <p>温节点磁盘类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WarmDiskSize <p>温节点磁盘大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NodeInfoList <p>集群节点信息列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EsPublicUrl <p>Es公网地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MultiZoneInfo <p>多可用区网络信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeployMode <p>部署模式<li>0：单可用区</li><li>1：多可用区，北京、上海、上海金融、广州、南京、香港、新加坡、法兰克福（白名单控制）</li></p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicAccess <p>ES公网访问状态<li>OPEN：开启</li><li>CLOSE：关闭</li></p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param EsAcl $EsPublicAcl <p>ES公网访问控制配置</p>
     * @param string $KibanaPrivateUrl <p>Kibana内网地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KibanaPublicAccess <p>Kibana公网访问状态<li>OPEN：开启</li><li>CLOSE：关闭</li></p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KibanaPrivateAccess <p>Kibana内网访问状态<li>OPEN：开启</li><li>CLOSE：关闭</li></p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SecurityType <p>6.8（及以上版本）基础版是否开启xpack security认证<li>1：不开启</li><li>2：开启</li></p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SceneType <p>场景化模板类型：0、不开启；1、通用场景；2、日志场景；3、搜索场景</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KibanaConfig <p>Kibana配置项</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param KibanaNodeInfo $KibanaNodeInfo <p>Kibana节点信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param WebNodeTypeInfo $WebNodeTypeInfo <p>可视化节点配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Jdk <p>JDK类型，oracle或kona</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol <p>集群网络通讯协议</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SecurityGroups <p>安全组id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColdNodeType <p>冷节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ColdNodeNum <p>冷节点个数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ColdCpuNum <p>冷节点CPU核数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ColdMemSize <p>冷节点内存大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColdDiskType <p>冷节点磁盘类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ColdDiskSize <p>冷节点磁盘大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FrozenNodeType <p>冻节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FrozenNodeNum <p>冻节点个数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FrozenCpuNum <p>冻节点CPU核数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FrozenMemSize <p>冻节点内存大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FrozenDiskType <p>冻节点磁盘类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FrozenDiskSize <p>冻节点磁盘大小，单位GB</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HealthStatus <p>集群健康状态 -1 未知；0 Green; 1 Yellow; 2 Red</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EsPrivateUrl <p>https集群内网url</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EsPrivateDomain <p>https集群内网域名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EsConfigSets <p>集群的配置组信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param OperationDuration $OperationDuration <p>集群可维护时间段</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OptionalWebServiceInfos <p>web节点列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AutoIndexEnabled <p>自治索引开关</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableHybridStorage <p>是否支持存储计算分离</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ProcessPercent <p>流程进度</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KibanaAlteringPublicAccess <p>Kibana的alerting外网告警策略<li>OPEN：开启</li><li>CLOSE：关闭</li></p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HasKernelUpgrade <p>本月是否有内核可以更新：false-无，true-有</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CdcId <p>cdcId，使用cdc子网时传递</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KibanaPrivateVip <p>kibana内网vip</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomKibanaPrivateUrl <p>自定义kibana内网url</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OutboundPublicAcls <p>节点出站访问详细信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NetConnectScheme <p>网络连接方案</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DisasterRecoverGroupAffinity <p>置放群组相关参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubProductCode <p>子产品ID枚举值： 开源版：&quot;sp_es_io2&quot;， 基础版：&quot;sp_es_basic&quot;，白金版：&quot;sp_es_platinum&quot;，企业版：&quot;sp_es_enterprise&quot;，CDC白金版：&quot;sp_es_cdc_platinum&quot;，日志增强版：&quot;sp_es_enlogging&quot;，tsearch：&quot;sp_tsearch_io2&quot;，logstash：&quot;sp_es_logstash&quot; ，可以为空，为空的时候后台取LicenseType映射该字段</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CosBucketStorageSize <p>存算分离cos用量，单位M</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReadWriteMode <p>读写分离模式：0-不开启，1-本地读写分离，2-远端读写分离</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableScheduleRecoverGroup <p>是否有置放群组异步调度任务</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param EnableScheduleOperationDuration $EnableScheduleOperationDuration <p>异步调度任务的时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnableDestroyProtection <p>开启集群保护：OPEN-开启，CLOSE-关闭</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShowKibanaIpPort <p>kibana内网访问地址</p>
     * @param boolean $IsCdzLite <p>是否为CDZLite可用区</p>
     * @param string $EsPrivateTcpUrl <p>集群内网tcp地址</p>
     * @param boolean $IsInRecycleBin <p>是否在回收站内</p><p>默认值：false</p>
     * @param boolean $RecycleLockEnabled <p>回收站内是否锁定</p><p>默认值：false</p>
     * @param string $MayDestroyPoint <p>预计销毁的时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     * @param integer $DelayDestroyInterval <p>延迟销毁的时间</p><p>单位：天</p>
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("VpcUid",$param) and $param["VpcUid"] !== null) {
            $this->VpcUid = $param["VpcUid"];
        }

        if (array_key_exists("SubnetUid",$param) and $param["SubnetUid"] !== null) {
            $this->SubnetUid = $param["SubnetUid"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ChargePeriod",$param) and $param["ChargePeriod"] !== null) {
            $this->ChargePeriod = $param["ChargePeriod"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("CpuNum",$param) and $param["CpuNum"] !== null) {
            $this->CpuNum = $param["CpuNum"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("EsDomain",$param) and $param["EsDomain"] !== null) {
            $this->EsDomain = $param["EsDomain"];
        }

        if (array_key_exists("EsVip",$param) and $param["EsVip"] !== null) {
            $this->EsVip = $param["EsVip"];
        }

        if (array_key_exists("EsPort",$param) and $param["EsPort"] !== null) {
            $this->EsPort = $param["EsPort"];
        }

        if (array_key_exists("KibanaUrl",$param) and $param["KibanaUrl"] !== null) {
            $this->KibanaUrl = $param["KibanaUrl"];
        }

        if (array_key_exists("EsVersion",$param) and $param["EsVersion"] !== null) {
            $this->EsVersion = $param["EsVersion"];
        }

        if (array_key_exists("EsConfig",$param) and $param["EsConfig"] !== null) {
            $this->EsConfig = $param["EsConfig"];
        }

        if (array_key_exists("EsAcl",$param) and $param["EsAcl"] !== null) {
            $this->EsAcl = new EsAcl();
            $this->EsAcl->deserialize($param["EsAcl"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("IkConfig",$param) and $param["IkConfig"] !== null) {
            $this->IkConfig = new EsDictionaryInfo();
            $this->IkConfig->deserialize($param["IkConfig"]);
        }

        if (array_key_exists("MasterNodeInfo",$param) and $param["MasterNodeInfo"] !== null) {
            $this->MasterNodeInfo = new MasterNodeInfo();
            $this->MasterNodeInfo->deserialize($param["MasterNodeInfo"]);
        }

        if (array_key_exists("CosBackup",$param) and $param["CosBackup"] !== null) {
            $this->CosBackup = new CosBackup();
            $this->CosBackup->deserialize($param["CosBackup"]);
        }

        if (array_key_exists("AllowCosBackup",$param) and $param["AllowCosBackup"] !== null) {
            $this->AllowCosBackup = $param["AllowCosBackup"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("EnableHotWarmMode",$param) and $param["EnableHotWarmMode"] !== null) {
            $this->EnableHotWarmMode = $param["EnableHotWarmMode"];
        }

        if (array_key_exists("WarmNodeType",$param) and $param["WarmNodeType"] !== null) {
            $this->WarmNodeType = $param["WarmNodeType"];
        }

        if (array_key_exists("WarmNodeNum",$param) and $param["WarmNodeNum"] !== null) {
            $this->WarmNodeNum = $param["WarmNodeNum"];
        }

        if (array_key_exists("WarmCpuNum",$param) and $param["WarmCpuNum"] !== null) {
            $this->WarmCpuNum = $param["WarmCpuNum"];
        }

        if (array_key_exists("WarmMemSize",$param) and $param["WarmMemSize"] !== null) {
            $this->WarmMemSize = $param["WarmMemSize"];
        }

        if (array_key_exists("WarmDiskType",$param) and $param["WarmDiskType"] !== null) {
            $this->WarmDiskType = $param["WarmDiskType"];
        }

        if (array_key_exists("WarmDiskSize",$param) and $param["WarmDiskSize"] !== null) {
            $this->WarmDiskSize = $param["WarmDiskSize"];
        }

        if (array_key_exists("NodeInfoList",$param) and $param["NodeInfoList"] !== null) {
            $this->NodeInfoList = [];
            foreach ($param["NodeInfoList"] as $key => $value){
                $obj = new NodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeInfoList, $obj);
            }
        }

        if (array_key_exists("EsPublicUrl",$param) and $param["EsPublicUrl"] !== null) {
            $this->EsPublicUrl = $param["EsPublicUrl"];
        }

        if (array_key_exists("MultiZoneInfo",$param) and $param["MultiZoneInfo"] !== null) {
            $this->MultiZoneInfo = [];
            foreach ($param["MultiZoneInfo"] as $key => $value){
                $obj = new ZoneDetail();
                $obj->deserialize($value);
                array_push($this->MultiZoneInfo, $obj);
            }
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("PublicAccess",$param) and $param["PublicAccess"] !== null) {
            $this->PublicAccess = $param["PublicAccess"];
        }

        if (array_key_exists("EsPublicAcl",$param) and $param["EsPublicAcl"] !== null) {
            $this->EsPublicAcl = new EsAcl();
            $this->EsPublicAcl->deserialize($param["EsPublicAcl"]);
        }

        if (array_key_exists("KibanaPrivateUrl",$param) and $param["KibanaPrivateUrl"] !== null) {
            $this->KibanaPrivateUrl = $param["KibanaPrivateUrl"];
        }

        if (array_key_exists("KibanaPublicAccess",$param) and $param["KibanaPublicAccess"] !== null) {
            $this->KibanaPublicAccess = $param["KibanaPublicAccess"];
        }

        if (array_key_exists("KibanaPrivateAccess",$param) and $param["KibanaPrivateAccess"] !== null) {
            $this->KibanaPrivateAccess = $param["KibanaPrivateAccess"];
        }

        if (array_key_exists("SecurityType",$param) and $param["SecurityType"] !== null) {
            $this->SecurityType = $param["SecurityType"];
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("KibanaConfig",$param) and $param["KibanaConfig"] !== null) {
            $this->KibanaConfig = $param["KibanaConfig"];
        }

        if (array_key_exists("KibanaNodeInfo",$param) and $param["KibanaNodeInfo"] !== null) {
            $this->KibanaNodeInfo = new KibanaNodeInfo();
            $this->KibanaNodeInfo->deserialize($param["KibanaNodeInfo"]);
        }

        if (array_key_exists("WebNodeTypeInfo",$param) and $param["WebNodeTypeInfo"] !== null) {
            $this->WebNodeTypeInfo = new WebNodeTypeInfo();
            $this->WebNodeTypeInfo->deserialize($param["WebNodeTypeInfo"]);
        }

        if (array_key_exists("Jdk",$param) and $param["Jdk"] !== null) {
            $this->Jdk = $param["Jdk"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("SecurityGroups",$param) and $param["SecurityGroups"] !== null) {
            $this->SecurityGroups = $param["SecurityGroups"];
        }

        if (array_key_exists("ColdNodeType",$param) and $param["ColdNodeType"] !== null) {
            $this->ColdNodeType = $param["ColdNodeType"];
        }

        if (array_key_exists("ColdNodeNum",$param) and $param["ColdNodeNum"] !== null) {
            $this->ColdNodeNum = $param["ColdNodeNum"];
        }

        if (array_key_exists("ColdCpuNum",$param) and $param["ColdCpuNum"] !== null) {
            $this->ColdCpuNum = $param["ColdCpuNum"];
        }

        if (array_key_exists("ColdMemSize",$param) and $param["ColdMemSize"] !== null) {
            $this->ColdMemSize = $param["ColdMemSize"];
        }

        if (array_key_exists("ColdDiskType",$param) and $param["ColdDiskType"] !== null) {
            $this->ColdDiskType = $param["ColdDiskType"];
        }

        if (array_key_exists("ColdDiskSize",$param) and $param["ColdDiskSize"] !== null) {
            $this->ColdDiskSize = $param["ColdDiskSize"];
        }

        if (array_key_exists("FrozenNodeType",$param) and $param["FrozenNodeType"] !== null) {
            $this->FrozenNodeType = $param["FrozenNodeType"];
        }

        if (array_key_exists("FrozenNodeNum",$param) and $param["FrozenNodeNum"] !== null) {
            $this->FrozenNodeNum = $param["FrozenNodeNum"];
        }

        if (array_key_exists("FrozenCpuNum",$param) and $param["FrozenCpuNum"] !== null) {
            $this->FrozenCpuNum = $param["FrozenCpuNum"];
        }

        if (array_key_exists("FrozenMemSize",$param) and $param["FrozenMemSize"] !== null) {
            $this->FrozenMemSize = $param["FrozenMemSize"];
        }

        if (array_key_exists("FrozenDiskType",$param) and $param["FrozenDiskType"] !== null) {
            $this->FrozenDiskType = $param["FrozenDiskType"];
        }

        if (array_key_exists("FrozenDiskSize",$param) and $param["FrozenDiskSize"] !== null) {
            $this->FrozenDiskSize = $param["FrozenDiskSize"];
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = $param["HealthStatus"];
        }

        if (array_key_exists("EsPrivateUrl",$param) and $param["EsPrivateUrl"] !== null) {
            $this->EsPrivateUrl = $param["EsPrivateUrl"];
        }

        if (array_key_exists("EsPrivateDomain",$param) and $param["EsPrivateDomain"] !== null) {
            $this->EsPrivateDomain = $param["EsPrivateDomain"];
        }

        if (array_key_exists("EsConfigSets",$param) and $param["EsConfigSets"] !== null) {
            $this->EsConfigSets = [];
            foreach ($param["EsConfigSets"] as $key => $value){
                $obj = new EsConfigSetInfo();
                $obj->deserialize($value);
                array_push($this->EsConfigSets, $obj);
            }
        }

        if (array_key_exists("OperationDuration",$param) and $param["OperationDuration"] !== null) {
            $this->OperationDuration = new OperationDuration();
            $this->OperationDuration->deserialize($param["OperationDuration"]);
        }

        if (array_key_exists("OptionalWebServiceInfos",$param) and $param["OptionalWebServiceInfos"] !== null) {
            $this->OptionalWebServiceInfos = [];
            foreach ($param["OptionalWebServiceInfos"] as $key => $value){
                $obj = new OptionalWebServiceInfo();
                $obj->deserialize($value);
                array_push($this->OptionalWebServiceInfos, $obj);
            }
        }

        if (array_key_exists("AutoIndexEnabled",$param) and $param["AutoIndexEnabled"] !== null) {
            $this->AutoIndexEnabled = $param["AutoIndexEnabled"];
        }

        if (array_key_exists("EnableHybridStorage",$param) and $param["EnableHybridStorage"] !== null) {
            $this->EnableHybridStorage = $param["EnableHybridStorage"];
        }

        if (array_key_exists("ProcessPercent",$param) and $param["ProcessPercent"] !== null) {
            $this->ProcessPercent = $param["ProcessPercent"];
        }

        if (array_key_exists("KibanaAlteringPublicAccess",$param) and $param["KibanaAlteringPublicAccess"] !== null) {
            $this->KibanaAlteringPublicAccess = $param["KibanaAlteringPublicAccess"];
        }

        if (array_key_exists("HasKernelUpgrade",$param) and $param["HasKernelUpgrade"] !== null) {
            $this->HasKernelUpgrade = $param["HasKernelUpgrade"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("KibanaPrivateVip",$param) and $param["KibanaPrivateVip"] !== null) {
            $this->KibanaPrivateVip = $param["KibanaPrivateVip"];
        }

        if (array_key_exists("CustomKibanaPrivateUrl",$param) and $param["CustomKibanaPrivateUrl"] !== null) {
            $this->CustomKibanaPrivateUrl = $param["CustomKibanaPrivateUrl"];
        }

        if (array_key_exists("OutboundPublicAcls",$param) and $param["OutboundPublicAcls"] !== null) {
            $this->OutboundPublicAcls = [];
            foreach ($param["OutboundPublicAcls"] as $key => $value){
                $obj = new OutboundPublicAcl();
                $obj->deserialize($value);
                array_push($this->OutboundPublicAcls, $obj);
            }
        }

        if (array_key_exists("NetConnectScheme",$param) and $param["NetConnectScheme"] !== null) {
            $this->NetConnectScheme = $param["NetConnectScheme"];
        }

        if (array_key_exists("DisasterRecoverGroupAffinity",$param) and $param["DisasterRecoverGroupAffinity"] !== null) {
            $this->DisasterRecoverGroupAffinity = $param["DisasterRecoverGroupAffinity"];
        }

        if (array_key_exists("SubProductCode",$param) and $param["SubProductCode"] !== null) {
            $this->SubProductCode = $param["SubProductCode"];
        }

        if (array_key_exists("CosBucketStorageSize",$param) and $param["CosBucketStorageSize"] !== null) {
            $this->CosBucketStorageSize = $param["CosBucketStorageSize"];
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

        if (array_key_exists("ShowKibanaIpPort",$param) and $param["ShowKibanaIpPort"] !== null) {
            $this->ShowKibanaIpPort = $param["ShowKibanaIpPort"];
        }

        if (array_key_exists("IsCdzLite",$param) and $param["IsCdzLite"] !== null) {
            $this->IsCdzLite = $param["IsCdzLite"];
        }

        if (array_key_exists("EsPrivateTcpUrl",$param) and $param["EsPrivateTcpUrl"] !== null) {
            $this->EsPrivateTcpUrl = $param["EsPrivateTcpUrl"];
        }

        if (array_key_exists("IsInRecycleBin",$param) and $param["IsInRecycleBin"] !== null) {
            $this->IsInRecycleBin = $param["IsInRecycleBin"];
        }

        if (array_key_exists("RecycleLockEnabled",$param) and $param["RecycleLockEnabled"] !== null) {
            $this->RecycleLockEnabled = $param["RecycleLockEnabled"];
        }

        if (array_key_exists("MayDestroyPoint",$param) and $param["MayDestroyPoint"] !== null) {
            $this->MayDestroyPoint = $param["MayDestroyPoint"];
        }

        if (array_key_exists("DelayDestroyInterval",$param) and $param["DelayDestroyInterval"] !== null) {
            $this->DelayDestroyInterval = $param["DelayDestroyInterval"];
        }
    }
}
