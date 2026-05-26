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
 * CreateInstance请求参数结构体
 *
 * @method string getZone() 获取<p>可用区</p>
 * @method void setZone(string $Zone) 设置<p>可用区</p>
 * @method string getEsVersion() 获取<p>实例版本（支持&quot;5.6.4&quot;、&quot;6.4.3&quot;、&quot;6.8.2&quot;、&quot;7.5.1&quot;、&quot;7.10.1&quot;）</p>
 * @method void setEsVersion(string $EsVersion) 设置<p>实例版本（支持&quot;5.6.4&quot;、&quot;6.4.3&quot;、&quot;6.8.2&quot;、&quot;7.5.1&quot;、&quot;7.10.1&quot;）</p>
 * @method string getVpcId() 获取<p>私有网络ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络ID</p>
 * @method string getSubnetId() 获取<p>子网ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网ID</p>
 * @method string getPassword() 获取<p>访问密码（密码需8到16位，至少包括两项（[a-z,A-Z],[0-9]和[-!@#$%&amp;^*+=_:;,.?]的特殊符号）</p>
 * @method void setPassword(string $Password) 设置<p>访问密码（密码需8到16位，至少包括两项（[a-z,A-Z],[0-9]和[-!@#$%&amp;^*+=_:;,.?]的特殊符号）</p>
 * @method string getInstanceName() 获取<p>实例名称（1-50 个英文、汉字、数字、连接线-或下划线_）</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称（1-50 个英文、汉字、数字、连接线-或下划线_）</p>
 * @method integer getNodeNum() 获取<p>已废弃请使用NodeInfoList<br>节点数量（2-50个）</p>
 * @method void setNodeNum(integer $NodeNum) 设置<p>已废弃请使用NodeInfoList<br>节点数量（2-50个）</p>
 * @method string getChargeType() 获取<p>计费类型<li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：按小时后付费</li>默认值POSTPAID_BY_HOUR</p>
 * @method void setChargeType(string $ChargeType) 设置<p>计费类型<li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：按小时后付费</li>默认值POSTPAID_BY_HOUR</p>
 * @method integer getChargePeriod() 获取<p>包年包月购买时长（单位由参数TimeUnit决定）</p>
 * @method void setChargePeriod(integer $ChargePeriod) 设置<p>包年包月购买时长（单位由参数TimeUnit决定）</p>
 * @method string getRenewFlag() 获取<p>自动续费标识<li>RENEW_FLAG_AUTO：自动续费</li><li>RENEW_FLAG_MANUAL：不自动续费，用户手动续费</li>ChargeType为PREPAID时需要设置，如不传递该参数，普通用户默认不自动续费，SVIP用户自动续费</p>
 * @method void setRenewFlag(string $RenewFlag) 设置<p>自动续费标识<li>RENEW_FLAG_AUTO：自动续费</li><li>RENEW_FLAG_MANUAL：不自动续费，用户手动续费</li>ChargeType为PREPAID时需要设置，如不传递该参数，普通用户默认不自动续费，SVIP用户自动续费</p>
 * @method string getNodeType() 获取<p>已废弃请使用NodeInfoList<br>节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
 * @method void setNodeType(string $NodeType) 设置<p>已废弃请使用NodeInfoList<br>节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
 * @method string getDiskType() 获取<p>已废弃请使用NodeInfoList<br>节点磁盘类型<li>CLOUD_SSD：SSD云硬盘</li><li>CLOUD_PREMIUM：高性能云硬盘</li><li> CLOUD_HSSD：增强型SSD云硬盘</li><li> CLOUD_BSSD：通用型SSD云硬盘</li>默认值CLOUD_SSD</p>
 * @method void setDiskType(string $DiskType) 设置<p>已废弃请使用NodeInfoList<br>节点磁盘类型<li>CLOUD_SSD：SSD云硬盘</li><li>CLOUD_PREMIUM：高性能云硬盘</li><li> CLOUD_HSSD：增强型SSD云硬盘</li><li> CLOUD_BSSD：通用型SSD云硬盘</li>默认值CLOUD_SSD</p>
 * @method integer getDiskSize() 获取<p>已废弃请使用NodeInfoList<br>节点磁盘容量（单位GB）</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>已废弃请使用NodeInfoList<br>节点磁盘容量（单位GB）</p>
 * @method string getTimeUnit() 获取<p>计费时长单位（ChargeType为PREPAID时需要设置，默认值为“m”，表示月，当前只支持“m”）</p>
 * @method void setTimeUnit(string $TimeUnit) 设置<p>计费时长单位（ChargeType为PREPAID时需要设置，默认值为“m”，表示月，当前只支持“m”）</p>
 * @method integer getAutoVoucher() 获取<p>是否自动使用代金券<li>0：不自动使用</li><li>1：自动使用</li>默认值0</p>
 * @method void setAutoVoucher(integer $AutoVoucher) 设置<p>是否自动使用代金券<li>0：不自动使用</li><li>1：自动使用</li>默认值0</p>
 * @method array getVoucherIds() 获取<p>代金券ID列表（目前仅支持指定一张代金券）</p>
 * @method void setVoucherIds(array $VoucherIds) 设置<p>代金券ID列表（目前仅支持指定一张代金券）</p>
 * @method boolean getEnableDedicatedMaster() 获取<p>已废弃请使用NodeInfoList<br>是否创建专用主节点<li>true：开启专用主节点</li><li>false：不开启专用主节点</li>默认值false</p>
 * @method void setEnableDedicatedMaster(boolean $EnableDedicatedMaster) 设置<p>已废弃请使用NodeInfoList<br>是否创建专用主节点<li>true：开启专用主节点</li><li>false：不开启专用主节点</li>默认值false</p>
 * @method integer getMasterNodeNum() 获取<p>已废弃请使用NodeInfoList<br>专用主节点个数（只支持3个和5个，EnableDedicatedMaster为true时该值必传）</p>
 * @method void setMasterNodeNum(integer $MasterNodeNum) 设置<p>已废弃请使用NodeInfoList<br>专用主节点个数（只支持3个和5个，EnableDedicatedMaster为true时该值必传）</p>
 * @method string getMasterNodeType() 获取<p>已废弃请使用NodeInfoList<br>专用主节点类型（EnableDedicatedMaster为true时必传）<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
 * @method void setMasterNodeType(string $MasterNodeType) 设置<p>已废弃请使用NodeInfoList<br>专用主节点类型（EnableDedicatedMaster为true时必传）<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
 * @method integer getMasterNodeDiskSize() 获取<p>已废弃请使用NodeInfoList<br>专用主节点磁盘大小（单位GB，非必传，若传递则必须为50，暂不支持自定义）</p>
 * @method void setMasterNodeDiskSize(integer $MasterNodeDiskSize) 设置<p>已废弃请使用NodeInfoList<br>专用主节点磁盘大小（单位GB，非必传，若传递则必须为50，暂不支持自定义）</p>
 * @method string getClusterNameInConf() 获取<p>集群配置文件中的ClusterName（系统默认配置为实例ID，暂不支持自定义）</p>
 * @method void setClusterNameInConf(string $ClusterNameInConf) 设置<p>集群配置文件中的ClusterName（系统默认配置为实例ID，暂不支持自定义）</p>
 * @method integer getDeployMode() 获取<p>集群部署方式<li>0：单可用区部署</li><li>1：多可用区部署，北京、上海、上海金融、广州、南京、香港、新加坡、法兰克福（白名单控制）</li>默认为0</p>
 * @method void setDeployMode(integer $DeployMode) 设置<p>集群部署方式<li>0：单可用区部署</li><li>1：多可用区部署，北京、上海、上海金融、广州、南京、香港、新加坡、法兰克福（白名单控制）</li>默认为0</p>
 * @method array getMultiZoneInfo() 获取<p>多可用区部署时可用区的详细信息(DeployMode为1时必传)</p>
 * @method void setMultiZoneInfo(array $MultiZoneInfo) 设置<p>多可用区部署时可用区的详细信息(DeployMode为1时必传)</p>
 * @method string getLicenseType() 获取<p>License类型<li>oss：开源版</li><li>basic：基础版</li><li>platinum：白金版</li>默认值platinum</p>
 * @method void setLicenseType(string $LicenseType) 设置<p>License类型<li>oss：开源版</li><li>basic：基础版</li><li>platinum：白金版</li>默认值platinum</p>
 * @method array getNodeInfoList() 获取<p>节点信息列表， 用于描述集群各类节点的规格信息如节点类型，节点个数，节点规格，磁盘类型，磁盘大小等</p>
 * @method void setNodeInfoList(array $NodeInfoList) 设置<p>节点信息列表， 用于描述集群各类节点的规格信息如节点类型，节点个数，节点规格，磁盘类型，磁盘大小等</p>
 * @method array getTagList() 获取<p>节点标签信息列表</p>
 * @method void setTagList(array $TagList) 设置<p>节点标签信息列表</p>
 * @method integer getBasicSecurityType() 获取<p>6.8（及以上版本）基础版是否开启xpack security认证<li>1：不开启</li><li>2：开启</li></p>
 * @method void setBasicSecurityType(integer $BasicSecurityType) 设置<p>6.8（及以上版本）基础版是否开启xpack security认证<li>1：不开启</li><li>2：开启</li></p>
 * @method integer getSceneType() 获取<p>场景化模板类型 0：不启用 1：通用 2：日志 3：搜索</p>
 * @method void setSceneType(integer $SceneType) 设置<p>场景化模板类型 0：不启用 1：通用 2：日志 3：搜索</p>
 * @method WebNodeTypeInfo getWebNodeTypeInfo() 获取<p>可视化节点配置</p>
 * @method void setWebNodeTypeInfo(WebNodeTypeInfo $WebNodeTypeInfo) 设置<p>可视化节点配置</p>
 * @method string getProtocol() 获取<p>创建https集群，默认是http</p>
 * @method void setProtocol(string $Protocol) 设置<p>创建https集群，默认是http</p>
 * @method OperationDuration getOperationDuration() 获取<p>可维护时间段</p>
 * @method void setOperationDuration(OperationDuration $OperationDuration) 设置<p>可维护时间段</p>
 * @method boolean getEnableHybridStorage() 获取<p>是否开启存算分离</p>
 * @method void setEnableHybridStorage(boolean $EnableHybridStorage) 设置<p>是否开启存算分离</p>
 * @method integer getDiskEnhance() 获取<p>硬盘额外性能</p>
 * @method void setDiskEnhance(integer $DiskEnhance) 设置<p>硬盘额外性能</p>
 * @method boolean getEnableDiagnose() 获取<p>是否开启智能巡检</p>
 * @method void setEnableDiagnose(boolean $EnableDiagnose) 设置<p>是否开启智能巡检</p>
 * @method string getCdcId() 获取<p>cdcId，使用cdc子网时传递</p>
 * @method void setCdcId(string $CdcId) 设置<p>cdcId，使用cdc子网时传递</p>
 * @method integer getDisasterRecoverGroupAffinity() 获取<p>置放群组亲和度，范围[0,10]，0表示不开启</p>
 * @method void setDisasterRecoverGroupAffinity(integer $DisasterRecoverGroupAffinity) 设置<p>置放群组亲和度，范围[0,10]，0表示不开启</p>
 * @method string getSubProductCode() 获取<p>子产品ID枚举值： 开源版：&quot;sp_es_io2&quot;， 基础版：&quot;sp_es_basic&quot;，白金版：&quot;sp_es_platinum&quot;，企业版：&quot;sp_es_enterprise&quot;，CDC白金版：&quot;sp_es_cdc_platinum&quot;，日志增强版：&quot;sp_es_enlogging&quot;，tsearch：&quot;sp_tsearch_io2&quot;，logstash：&quot;sp_es_logstash&quot; ，可以为空，为空的时候后台取LicenseType映射该字段</p>
 * @method void setSubProductCode(string $SubProductCode) 设置<p>子产品ID枚举值： 开源版：&quot;sp_es_io2&quot;， 基础版：&quot;sp_es_basic&quot;，白金版：&quot;sp_es_platinum&quot;，企业版：&quot;sp_es_enterprise&quot;，CDC白金版：&quot;sp_es_cdc_platinum&quot;，日志增强版：&quot;sp_es_enlogging&quot;，tsearch：&quot;sp_tsearch_io2&quot;，logstash：&quot;sp_es_logstash&quot; ，可以为空，为空的时候后台取LicenseType映射该字段</p>
 * @method integer getReadWriteMode() 获取<p>读写分离模式：0-不开启，1-本地读写分离，2-远端读写分离</p>
 * @method void setReadWriteMode(integer $ReadWriteMode) 设置<p>读写分离模式：0-不开启，1-本地读写分离，2-远端读写分离</p>
 * @method boolean getEnableScheduleRecoverGroup() 获取<p>置放群组是否开启异步任务</p>
 * @method void setEnableScheduleRecoverGroup(boolean $EnableScheduleRecoverGroup) 设置<p>置放群组是否开启异步任务</p>
 * @method EnableScheduleOperationDuration getEnableScheduleOperationDuration() 获取<p>置放群组开启异步任务的可维护时间段</p>
 * @method void setEnableScheduleOperationDuration(EnableScheduleOperationDuration $EnableScheduleOperationDuration) 设置<p>置放群组开启异步任务的可维护时间段</p>
 * @method array getAutoScaleDiskInfoList() 获取<p>自动扩盘参数列表</p>
 * @method void setAutoScaleDiskInfoList(array $AutoScaleDiskInfoList) 设置<p>自动扩盘参数列表</p>
 * @method string getEnableKibanaPublicAccess() 获取<p>是否开启kibana公网访问，不传默认开启</p>
 * @method void setEnableKibanaPublicAccess(string $EnableKibanaPublicAccess) 设置<p>是否开启kibana公网访问，不传默认开启</p>
 * @method array getAlarmPolicyIds() 获取<p>已有的云监控告警策略 ID</p>
 * @method void setAlarmPolicyIds(array $AlarmPolicyIds) 设置<p>已有的云监控告警策略 ID</p>
 */
class CreateInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>可用区</p>
     */
    public $Zone;

    /**
     * @var string <p>实例版本（支持&quot;5.6.4&quot;、&quot;6.4.3&quot;、&quot;6.8.2&quot;、&quot;7.5.1&quot;、&quot;7.10.1&quot;）</p>
     */
    public $EsVersion;

    /**
     * @var string <p>私有网络ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网ID</p>
     */
    public $SubnetId;

    /**
     * @var string <p>访问密码（密码需8到16位，至少包括两项（[a-z,A-Z],[0-9]和[-!@#$%&amp;^*+=_:;,.?]的特殊符号）</p>
     */
    public $Password;

    /**
     * @var string <p>实例名称（1-50 个英文、汉字、数字、连接线-或下划线_）</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>已废弃请使用NodeInfoList<br>节点数量（2-50个）</p>
     */
    public $NodeNum;

    /**
     * @var string <p>计费类型<li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：按小时后付费</li>默认值POSTPAID_BY_HOUR</p>
     */
    public $ChargeType;

    /**
     * @var integer <p>包年包月购买时长（单位由参数TimeUnit决定）</p>
     */
    public $ChargePeriod;

    /**
     * @var string <p>自动续费标识<li>RENEW_FLAG_AUTO：自动续费</li><li>RENEW_FLAG_MANUAL：不自动续费，用户手动续费</li>ChargeType为PREPAID时需要设置，如不传递该参数，普通用户默认不自动续费，SVIP用户自动续费</p>
     */
    public $RenewFlag;

    /**
     * @var string <p>已废弃请使用NodeInfoList<br>节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
     */
    public $NodeType;

    /**
     * @var string <p>已废弃请使用NodeInfoList<br>节点磁盘类型<li>CLOUD_SSD：SSD云硬盘</li><li>CLOUD_PREMIUM：高性能云硬盘</li><li> CLOUD_HSSD：增强型SSD云硬盘</li><li> CLOUD_BSSD：通用型SSD云硬盘</li>默认值CLOUD_SSD</p>
     */
    public $DiskType;

    /**
     * @var integer <p>已废弃请使用NodeInfoList<br>节点磁盘容量（单位GB）</p>
     */
    public $DiskSize;

    /**
     * @var string <p>计费时长单位（ChargeType为PREPAID时需要设置，默认值为“m”，表示月，当前只支持“m”）</p>
     */
    public $TimeUnit;

    /**
     * @var integer <p>是否自动使用代金券<li>0：不自动使用</li><li>1：自动使用</li>默认值0</p>
     */
    public $AutoVoucher;

    /**
     * @var array <p>代金券ID列表（目前仅支持指定一张代金券）</p>
     */
    public $VoucherIds;

    /**
     * @var boolean <p>已废弃请使用NodeInfoList<br>是否创建专用主节点<li>true：开启专用主节点</li><li>false：不开启专用主节点</li>默认值false</p>
     */
    public $EnableDedicatedMaster;

    /**
     * @var integer <p>已废弃请使用NodeInfoList<br>专用主节点个数（只支持3个和5个，EnableDedicatedMaster为true时该值必传）</p>
     */
    public $MasterNodeNum;

    /**
     * @var string <p>已废弃请使用NodeInfoList<br>专用主节点类型（EnableDedicatedMaster为true时必传）<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
     */
    public $MasterNodeType;

    /**
     * @var integer <p>已废弃请使用NodeInfoList<br>专用主节点磁盘大小（单位GB，非必传，若传递则必须为50，暂不支持自定义）</p>
     */
    public $MasterNodeDiskSize;

    /**
     * @var string <p>集群配置文件中的ClusterName（系统默认配置为实例ID，暂不支持自定义）</p>
     */
    public $ClusterNameInConf;

    /**
     * @var integer <p>集群部署方式<li>0：单可用区部署</li><li>1：多可用区部署，北京、上海、上海金融、广州、南京、香港、新加坡、法兰克福（白名单控制）</li>默认为0</p>
     */
    public $DeployMode;

    /**
     * @var array <p>多可用区部署时可用区的详细信息(DeployMode为1时必传)</p>
     */
    public $MultiZoneInfo;

    /**
     * @var string <p>License类型<li>oss：开源版</li><li>basic：基础版</li><li>platinum：白金版</li>默认值platinum</p>
     */
    public $LicenseType;

    /**
     * @var array <p>节点信息列表， 用于描述集群各类节点的规格信息如节点类型，节点个数，节点规格，磁盘类型，磁盘大小等</p>
     */
    public $NodeInfoList;

    /**
     * @var array <p>节点标签信息列表</p>
     */
    public $TagList;

    /**
     * @var integer <p>6.8（及以上版本）基础版是否开启xpack security认证<li>1：不开启</li><li>2：开启</li></p>
     */
    public $BasicSecurityType;

    /**
     * @var integer <p>场景化模板类型 0：不启用 1：通用 2：日志 3：搜索</p>
     */
    public $SceneType;

    /**
     * @var WebNodeTypeInfo <p>可视化节点配置</p>
     */
    public $WebNodeTypeInfo;

    /**
     * @var string <p>创建https集群，默认是http</p>
     */
    public $Protocol;

    /**
     * @var OperationDuration <p>可维护时间段</p>
     */
    public $OperationDuration;

    /**
     * @var boolean <p>是否开启存算分离</p>
     */
    public $EnableHybridStorage;

    /**
     * @var integer <p>硬盘额外性能</p>
     */
    public $DiskEnhance;

    /**
     * @var boolean <p>是否开启智能巡检</p>
     */
    public $EnableDiagnose;

    /**
     * @var string <p>cdcId，使用cdc子网时传递</p>
     */
    public $CdcId;

    /**
     * @var integer <p>置放群组亲和度，范围[0,10]，0表示不开启</p>
     */
    public $DisasterRecoverGroupAffinity;

    /**
     * @var string <p>子产品ID枚举值： 开源版：&quot;sp_es_io2&quot;， 基础版：&quot;sp_es_basic&quot;，白金版：&quot;sp_es_platinum&quot;，企业版：&quot;sp_es_enterprise&quot;，CDC白金版：&quot;sp_es_cdc_platinum&quot;，日志增强版：&quot;sp_es_enlogging&quot;，tsearch：&quot;sp_tsearch_io2&quot;，logstash：&quot;sp_es_logstash&quot; ，可以为空，为空的时候后台取LicenseType映射该字段</p>
     */
    public $SubProductCode;

    /**
     * @var integer <p>读写分离模式：0-不开启，1-本地读写分离，2-远端读写分离</p>
     */
    public $ReadWriteMode;

    /**
     * @var boolean <p>置放群组是否开启异步任务</p>
     */
    public $EnableScheduleRecoverGroup;

    /**
     * @var EnableScheduleOperationDuration <p>置放群组开启异步任务的可维护时间段</p>
     */
    public $EnableScheduleOperationDuration;

    /**
     * @var array <p>自动扩盘参数列表</p>
     */
    public $AutoScaleDiskInfoList;

    /**
     * @var string <p>是否开启kibana公网访问，不传默认开启</p>
     */
    public $EnableKibanaPublicAccess;

    /**
     * @var array <p>已有的云监控告警策略 ID</p>
     */
    public $AlarmPolicyIds;

    /**
     * @param string $Zone <p>可用区</p>
     * @param string $EsVersion <p>实例版本（支持&quot;5.6.4&quot;、&quot;6.4.3&quot;、&quot;6.8.2&quot;、&quot;7.5.1&quot;、&quot;7.10.1&quot;）</p>
     * @param string $VpcId <p>私有网络ID</p>
     * @param string $SubnetId <p>子网ID</p>
     * @param string $Password <p>访问密码（密码需8到16位，至少包括两项（[a-z,A-Z],[0-9]和[-!@#$%&amp;^*+=_:;,.?]的特殊符号）</p>
     * @param string $InstanceName <p>实例名称（1-50 个英文、汉字、数字、连接线-或下划线_）</p>
     * @param integer $NodeNum <p>已废弃请使用NodeInfoList<br>节点数量（2-50个）</p>
     * @param string $ChargeType <p>计费类型<li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：按小时后付费</li>默认值POSTPAID_BY_HOUR</p>
     * @param integer $ChargePeriod <p>包年包月购买时长（单位由参数TimeUnit决定）</p>
     * @param string $RenewFlag <p>自动续费标识<li>RENEW_FLAG_AUTO：自动续费</li><li>RENEW_FLAG_MANUAL：不自动续费，用户手动续费</li>ChargeType为PREPAID时需要设置，如不传递该参数，普通用户默认不自动续费，SVIP用户自动续费</p>
     * @param string $NodeType <p>已废弃请使用NodeInfoList<br>节点规格<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
     * @param string $DiskType <p>已废弃请使用NodeInfoList<br>节点磁盘类型<li>CLOUD_SSD：SSD云硬盘</li><li>CLOUD_PREMIUM：高性能云硬盘</li><li> CLOUD_HSSD：增强型SSD云硬盘</li><li> CLOUD_BSSD：通用型SSD云硬盘</li>默认值CLOUD_SSD</p>
     * @param integer $DiskSize <p>已废弃请使用NodeInfoList<br>节点磁盘容量（单位GB）</p>
     * @param string $TimeUnit <p>计费时长单位（ChargeType为PREPAID时需要设置，默认值为“m”，表示月，当前只支持“m”）</p>
     * @param integer $AutoVoucher <p>是否自动使用代金券<li>0：不自动使用</li><li>1：自动使用</li>默认值0</p>
     * @param array $VoucherIds <p>代金券ID列表（目前仅支持指定一张代金券）</p>
     * @param boolean $EnableDedicatedMaster <p>已废弃请使用NodeInfoList<br>是否创建专用主节点<li>true：开启专用主节点</li><li>false：不开启专用主节点</li>默认值false</p>
     * @param integer $MasterNodeNum <p>已废弃请使用NodeInfoList<br>专用主节点个数（只支持3个和5个，EnableDedicatedMaster为true时该值必传）</p>
     * @param string $MasterNodeType <p>已废弃请使用NodeInfoList<br>专用主节点类型（EnableDedicatedMaster为true时必传）<li>ES.S1.SMALL2：1核2G</li><li>ES.S1.MEDIUM4：2核4G</li><li>ES.S1.MEDIUM8：2核8G</li><li>ES.S1.LARGE16：4核16G</li><li>ES.S1.2XLARGE32：8核32G</li><li>ES.S1.4XLARGE32：16核32G</li><li>ES.S1.4XLARGE64：16核64G</li></p>
     * @param integer $MasterNodeDiskSize <p>已废弃请使用NodeInfoList<br>专用主节点磁盘大小（单位GB，非必传，若传递则必须为50，暂不支持自定义）</p>
     * @param string $ClusterNameInConf <p>集群配置文件中的ClusterName（系统默认配置为实例ID，暂不支持自定义）</p>
     * @param integer $DeployMode <p>集群部署方式<li>0：单可用区部署</li><li>1：多可用区部署，北京、上海、上海金融、广州、南京、香港、新加坡、法兰克福（白名单控制）</li>默认为0</p>
     * @param array $MultiZoneInfo <p>多可用区部署时可用区的详细信息(DeployMode为1时必传)</p>
     * @param string $LicenseType <p>License类型<li>oss：开源版</li><li>basic：基础版</li><li>platinum：白金版</li>默认值platinum</p>
     * @param array $NodeInfoList <p>节点信息列表， 用于描述集群各类节点的规格信息如节点类型，节点个数，节点规格，磁盘类型，磁盘大小等</p>
     * @param array $TagList <p>节点标签信息列表</p>
     * @param integer $BasicSecurityType <p>6.8（及以上版本）基础版是否开启xpack security认证<li>1：不开启</li><li>2：开启</li></p>
     * @param integer $SceneType <p>场景化模板类型 0：不启用 1：通用 2：日志 3：搜索</p>
     * @param WebNodeTypeInfo $WebNodeTypeInfo <p>可视化节点配置</p>
     * @param string $Protocol <p>创建https集群，默认是http</p>
     * @param OperationDuration $OperationDuration <p>可维护时间段</p>
     * @param boolean $EnableHybridStorage <p>是否开启存算分离</p>
     * @param integer $DiskEnhance <p>硬盘额外性能</p>
     * @param boolean $EnableDiagnose <p>是否开启智能巡检</p>
     * @param string $CdcId <p>cdcId，使用cdc子网时传递</p>
     * @param integer $DisasterRecoverGroupAffinity <p>置放群组亲和度，范围[0,10]，0表示不开启</p>
     * @param string $SubProductCode <p>子产品ID枚举值： 开源版：&quot;sp_es_io2&quot;， 基础版：&quot;sp_es_basic&quot;，白金版：&quot;sp_es_platinum&quot;，企业版：&quot;sp_es_enterprise&quot;，CDC白金版：&quot;sp_es_cdc_platinum&quot;，日志增强版：&quot;sp_es_enlogging&quot;，tsearch：&quot;sp_tsearch_io2&quot;，logstash：&quot;sp_es_logstash&quot; ，可以为空，为空的时候后台取LicenseType映射该字段</p>
     * @param integer $ReadWriteMode <p>读写分离模式：0-不开启，1-本地读写分离，2-远端读写分离</p>
     * @param boolean $EnableScheduleRecoverGroup <p>置放群组是否开启异步任务</p>
     * @param EnableScheduleOperationDuration $EnableScheduleOperationDuration <p>置放群组开启异步任务的可维护时间段</p>
     * @param array $AutoScaleDiskInfoList <p>自动扩盘参数列表</p>
     * @param string $EnableKibanaPublicAccess <p>是否开启kibana公网访问，不传默认开启</p>
     * @param array $AlarmPolicyIds <p>已有的云监控告警策略 ID</p>
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("EsVersion",$param) and $param["EsVersion"] !== null) {
            $this->EsVersion = $param["EsVersion"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("ChargePeriod",$param) and $param["ChargePeriod"] !== null) {
            $this->ChargePeriod = $param["ChargePeriod"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("EnableDedicatedMaster",$param) and $param["EnableDedicatedMaster"] !== null) {
            $this->EnableDedicatedMaster = $param["EnableDedicatedMaster"];
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

        if (array_key_exists("ClusterNameInConf",$param) and $param["ClusterNameInConf"] !== null) {
            $this->ClusterNameInConf = $param["ClusterNameInConf"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("MultiZoneInfo",$param) and $param["MultiZoneInfo"] !== null) {
            $this->MultiZoneInfo = [];
            foreach ($param["MultiZoneInfo"] as $key => $value){
                $obj = new ZoneDetail();
                $obj->deserialize($value);
                array_push($this->MultiZoneInfo, $obj);
            }
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("NodeInfoList",$param) and $param["NodeInfoList"] !== null) {
            $this->NodeInfoList = [];
            foreach ($param["NodeInfoList"] as $key => $value){
                $obj = new NodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeInfoList, $obj);
            }
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("BasicSecurityType",$param) and $param["BasicSecurityType"] !== null) {
            $this->BasicSecurityType = $param["BasicSecurityType"];
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("WebNodeTypeInfo",$param) and $param["WebNodeTypeInfo"] !== null) {
            $this->WebNodeTypeInfo = new WebNodeTypeInfo();
            $this->WebNodeTypeInfo->deserialize($param["WebNodeTypeInfo"]);
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("OperationDuration",$param) and $param["OperationDuration"] !== null) {
            $this->OperationDuration = new OperationDuration();
            $this->OperationDuration->deserialize($param["OperationDuration"]);
        }

        if (array_key_exists("EnableHybridStorage",$param) and $param["EnableHybridStorage"] !== null) {
            $this->EnableHybridStorage = $param["EnableHybridStorage"];
        }

        if (array_key_exists("DiskEnhance",$param) and $param["DiskEnhance"] !== null) {
            $this->DiskEnhance = $param["DiskEnhance"];
        }

        if (array_key_exists("EnableDiagnose",$param) and $param["EnableDiagnose"] !== null) {
            $this->EnableDiagnose = $param["EnableDiagnose"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("DisasterRecoverGroupAffinity",$param) and $param["DisasterRecoverGroupAffinity"] !== null) {
            $this->DisasterRecoverGroupAffinity = $param["DisasterRecoverGroupAffinity"];
        }

        if (array_key_exists("SubProductCode",$param) and $param["SubProductCode"] !== null) {
            $this->SubProductCode = $param["SubProductCode"];
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

        if (array_key_exists("AutoScaleDiskInfoList",$param) and $param["AutoScaleDiskInfoList"] !== null) {
            $this->AutoScaleDiskInfoList = [];
            foreach ($param["AutoScaleDiskInfoList"] as $key => $value){
                $obj = new AutoScaleDiskInfo();
                $obj->deserialize($value);
                array_push($this->AutoScaleDiskInfoList, $obj);
            }
        }

        if (array_key_exists("EnableKibanaPublicAccess",$param) and $param["EnableKibanaPublicAccess"] !== null) {
            $this->EnableKibanaPublicAccess = $param["EnableKibanaPublicAccess"];
        }

        if (array_key_exists("AlarmPolicyIds",$param) and $param["AlarmPolicyIds"] !== null) {
            $this->AlarmPolicyIds = $param["AlarmPolicyIds"];
        }
    }
}
