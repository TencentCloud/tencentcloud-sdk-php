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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例属性返回结果对象
 *
 * @method string getInstanceId() 获取<p>ckafka集群实例Id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>ckafka集群实例Id</p>
 * @method string getInstanceName() 获取<p>ckafka集群实例Name</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>ckafka集群实例Name</p>
 * @method array getVipList() 获取<p>接入点 VIP 列表信息</p>
 * @method void setVipList(array $VipList) 设置<p>接入点 VIP 列表信息</p>
 * @method string getVip() 获取<p>虚拟IP</p>
 * @method void setVip(string $Vip) 设置<p>虚拟IP</p>
 * @method string getVport() 获取<p>虚拟端口</p>
 * @method void setVport(string $Vport) 设置<p>虚拟端口</p>
 * @method integer getStatus() 获取<p>实例的状态。0: 创建中，1: 运行中，2: 删除中,  3: 已删除,  5: 隔离中,  7: 升级中,  -1: 创建失败 </p>
 * @method void setStatus(integer $Status) 设置<p>实例的状态。0: 创建中，1: 运行中，2: 删除中,  3: 已删除,  5: 隔离中,  7: 升级中,  -1: 创建失败 </p>
 * @method integer getBandwidth() 获取<p>实例带宽，单位：Mbps</p>
 * @method void setBandwidth(integer $Bandwidth) 设置<p>实例带宽，单位：Mbps</p>
 * @method integer getDiskSize() 获取<p>实例的存储大小，单位：GB</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>实例的存储大小，单位：GB</p>
 * @method integer getZoneId() 获取<p>可用区</p>
 * @method void setZoneId(integer $ZoneId) 设置<p>可用区</p>
 * @method string getVpcId() 获取<p>VPC 的 ID，为空表示是基础网络</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC 的 ID，为空表示是基础网络</p>
 * @method string getSubnetId() 获取<p>子网 ID， 为空表示基础网络</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网 ID， 为空表示基础网络</p>
 * @method integer getHealthy() 获取<p>实例健康状态， 1：健康，2：告警，3：异常</p>
 * @method void setHealthy(integer $Healthy) 设置<p>实例健康状态， 1：健康，2：告警，3：异常</p>
 * @method string getHealthyMessage() 获取<p>实例健康信息，当前会展示磁盘利用率，最大长度为256</p>
 * @method void setHealthyMessage(string $HealthyMessage) 设置<p>实例健康信息，当前会展示磁盘利用率，最大长度为256</p>
 * @method integer getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间</p>
 * @method integer getMsgRetentionTime() 获取<p>消息保存时间,单位为分钟</p>
 * @method void setMsgRetentionTime(integer $MsgRetentionTime) 设置<p>消息保存时间,单位为分钟</p>
 * @method InstanceConfigDO getConfig() 获取<p>自动创建 Topic 配置， 若该字段为空，则表示未开启自动创建</p>
 * @method void setConfig(InstanceConfigDO $Config) 设置<p>自动创建 Topic 配置， 若该字段为空，则表示未开启自动创建</p>
 * @method integer getRemainderPartitions() 获取<p>剩余创建分区数</p>
 * @method void setRemainderPartitions(integer $RemainderPartitions) 设置<p>剩余创建分区数</p>
 * @method integer getRemainderTopics() 获取<p>剩余创建主题数</p>
 * @method void setRemainderTopics(integer $RemainderTopics) 设置<p>剩余创建主题数</p>
 * @method integer getCreatedPartitions() 获取<p>当前创建分区数</p>
 * @method void setCreatedPartitions(integer $CreatedPartitions) 设置<p>当前创建分区数</p>
 * @method integer getCreatedTopics() 获取<p>当前创建主题数</p>
 * @method void setCreatedTopics(integer $CreatedTopics) 设置<p>当前创建主题数</p>
 * @method array getTags() 获取<p>标签数组</p>
 * @method void setTags(array $Tags) 设置<p>标签数组</p>
 * @method integer getExpireTime() 获取<p>过期时间</p>
 * @method void setExpireTime(integer $ExpireTime) 设置<p>过期时间</p>
 * @method array getZoneIds() 获取<p>可用区列表</p>
 * @method void setZoneIds(array $ZoneIds) 设置<p>可用区列表</p>
 * @method string getVersion() 获取<p>ckafka集群实例版本</p>
 * @method void setVersion(string $Version) 设置<p>ckafka集群实例版本</p>
 * @method integer getMaxGroupNum() 获取<p>最大分组数</p>
 * @method void setMaxGroupNum(integer $MaxGroupNum) 设置<p>最大分组数</p>
 * @method integer getCvm() 获取<p>售卖类型,0:标准版,1:专业版</p>
 * @method void setCvm(integer $Cvm) 设置<p>售卖类型,0:标准版,1:专业版</p>
 * @method string getInstanceType() 获取<p>实例类型  枚举列表: profession  :专业版  <br />standards2  :标准版premium   :高级版serverless  :serverless版</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例类型  枚举列表: profession  :专业版  <br />standards2  :标准版premium   :高级版serverless  :serverless版</p>
 * @method array getFeatures() 获取<p>表示该实例支持的特性。FEATURE_SUBNET_ACL:表示acl策略支持设置子网。</p>
 * @method void setFeatures(array $Features) 设置<p>表示该实例支持的特性。FEATURE_SUBNET_ACL:表示acl策略支持设置子网。</p>
 * @method DynamicRetentionTime getRetentionTimeConfig() 获取<p>动态消息保留策略</p>
 * @method void setRetentionTimeConfig(DynamicRetentionTime $RetentionTimeConfig) 设置<p>动态消息保留策略</p>
 * @method integer getMaxConnection() 获取<p>最大连接数</p>
 * @method void setMaxConnection(integer $MaxConnection) 设置<p>最大连接数</p>
 * @method integer getPublicNetwork() 获取<p>公网带宽</p>
 * @method void setPublicNetwork(integer $PublicNetwork) 设置<p>公网带宽</p>
 * @method string getDeleteRouteTimestamp() 获取<p>该字段已废弃,无实际含义</p>
 * @method void setDeleteRouteTimestamp(string $DeleteRouteTimestamp) 设置<p>该字段已废弃,无实际含义</p>
 * @method integer getRemainingPartitions() 获取<p>剩余创建分区数</p>
 * @method void setRemainingPartitions(integer $RemainingPartitions) 设置<p>剩余创建分区数</p>
 * @method integer getRemainingTopics() 获取<p>剩余创建主题数</p>
 * @method void setRemainingTopics(integer $RemainingTopics) 设置<p>剩余创建主题数</p>
 * @method DynamicDiskConfig getDynamicDiskConfig() 获取<p>动态硬盘扩容策略</p>
 * @method void setDynamicDiskConfig(DynamicDiskConfig $DynamicDiskConfig) 设置<p>动态硬盘扩容策略</p>
 * @method string getSystemMaintenanceTime() 获取<p>系统维护时间</p>
 * @method void setSystemMaintenanceTime(string $SystemMaintenanceTime) 设置<p>系统维护时间</p>
 * @method integer getMaxMessageByte() 获取<p>实例级别消息最大大小</p>
 * @method void setMaxMessageByte(integer $MaxMessageByte) 设置<p>实例级别消息最大大小</p>
 * @method string getInstanceChargeType() 获取<p>实例计费类型  POSTPAID_BY_HOUR 按小时付费; PREPAID 包年包月</p>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>实例计费类型  POSTPAID_BY_HOUR 按小时付费; PREPAID 包年包月</p>
 * @method integer getElasticBandwidthSwitch() 获取<p>是否开启弹性带宽白名单 <br />1:已开启弹性带宽白名单;0:未开启弹性带宽白名单;</p>
 * @method void setElasticBandwidthSwitch(integer $ElasticBandwidthSwitch) 设置<p>是否开启弹性带宽白名单 <br />1:已开启弹性带宽白名单;0:未开启弹性带宽白名单;</p>
 * @method integer getElasticBandwidthOpenStatus() 获取<p>弹性带宽开通状态1:未开启弹性带宽;16: 开启弹性带宽中;32:开启弹性带宽成功;33:关闭弹性带宽中;34:关闭弹性带宽成功;64:开启弹性带宽失败;65:关闭弹性带宽失败;</p>
 * @method void setElasticBandwidthOpenStatus(integer $ElasticBandwidthOpenStatus) 设置<p>弹性带宽开通状态1:未开启弹性带宽;16: 开启弹性带宽中;32:开启弹性带宽成功;33:关闭弹性带宽中;34:关闭弹性带宽成功;64:开启弹性带宽失败;65:关闭弹性带宽失败;</p>
 * @method string getClusterType() 获取<p>集群类型<br />CLOUD_IDC IDC集群CLOUD_CVM_SHARE CVM共享集群CLOUD_CVM_YUNTI 云梯CVM集群CLOUD_CVM    CVM集群CLOUD_CDC CDC集群CLOUD_EKS_TSE EKS集群</p>
 * @method void setClusterType(string $ClusterType) 设置<p>集群类型<br />CLOUD_IDC IDC集群CLOUD_CVM_SHARE CVM共享集群CLOUD_CVM_YUNTI 云梯CVM集群CLOUD_CVM    CVM集群CLOUD_CDC CDC集群CLOUD_EKS_TSE EKS集群</p>
 * @method integer getFreePartitionNumber() 获取<p>免费分区数量</p>
 * @method void setFreePartitionNumber(integer $FreePartitionNumber) 设置<p>免费分区数量</p>
 * @method integer getElasticFloatBandwidth() 获取<p>弹性带宽上浮值</p>
 * @method void setElasticFloatBandwidth(integer $ElasticFloatBandwidth) 设置<p>弹性带宽上浮值</p>
 * @method string getCustomCertId() 获取<p>ssl自定义证书id  仅自定义证书实例集群返回</p>
 * @method void setCustomCertId(string $CustomCertId) 设置<p>ssl自定义证书id  仅自定义证书实例集群返回</p>
 * @method integer getUncleanLeaderElectionEnable() 获取<p>集群topic默认 unclean.leader.election.enable配置: 1 开启 0 关闭</p>
 * @method void setUncleanLeaderElectionEnable(integer $UncleanLeaderElectionEnable) 设置<p>集群topic默认 unclean.leader.election.enable配置: 1 开启 0 关闭</p>
 * @method integer getDeleteProtectionEnable() 获取<p>实例删除保护开关: 1 开启 0 关闭</p>
 * @method void setDeleteProtectionEnable(integer $DeleteProtectionEnable) 设置<p>实例删除保护开关: 1 开启 0 关闭</p>
 */
class InstanceAttributesResponse extends AbstractModel
{
    /**
     * @var string <p>ckafka集群实例Id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>ckafka集群实例Name</p>
     */
    public $InstanceName;

    /**
     * @var array <p>接入点 VIP 列表信息</p>
     */
    public $VipList;

    /**
     * @var string <p>虚拟IP</p>
     */
    public $Vip;

    /**
     * @var string <p>虚拟端口</p>
     */
    public $Vport;

    /**
     * @var integer <p>实例的状态。0: 创建中，1: 运行中，2: 删除中,  3: 已删除,  5: 隔离中,  7: 升级中,  -1: 创建失败 </p>
     */
    public $Status;

    /**
     * @var integer <p>实例带宽，单位：Mbps</p>
     */
    public $Bandwidth;

    /**
     * @var integer <p>实例的存储大小，单位：GB</p>
     */
    public $DiskSize;

    /**
     * @var integer <p>可用区</p>
     */
    public $ZoneId;

    /**
     * @var string <p>VPC 的 ID，为空表示是基础网络</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网 ID， 为空表示基础网络</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>实例健康状态， 1：健康，2：告警，3：异常</p>
     */
    public $Healthy;

    /**
     * @var string <p>实例健康信息，当前会展示磁盘利用率，最大长度为256</p>
     */
    public $HealthyMessage;

    /**
     * @var integer <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>消息保存时间,单位为分钟</p>
     */
    public $MsgRetentionTime;

    /**
     * @var InstanceConfigDO <p>自动创建 Topic 配置， 若该字段为空，则表示未开启自动创建</p>
     */
    public $Config;

    /**
     * @var integer <p>剩余创建分区数</p>
     */
    public $RemainderPartitions;

    /**
     * @var integer <p>剩余创建主题数</p>
     */
    public $RemainderTopics;

    /**
     * @var integer <p>当前创建分区数</p>
     */
    public $CreatedPartitions;

    /**
     * @var integer <p>当前创建主题数</p>
     */
    public $CreatedTopics;

    /**
     * @var array <p>标签数组</p>
     */
    public $Tags;

    /**
     * @var integer <p>过期时间</p>
     */
    public $ExpireTime;

    /**
     * @var array <p>可用区列表</p>
     */
    public $ZoneIds;

    /**
     * @var string <p>ckafka集群实例版本</p>
     */
    public $Version;

    /**
     * @var integer <p>最大分组数</p>
     */
    public $MaxGroupNum;

    /**
     * @var integer <p>售卖类型,0:标准版,1:专业版</p>
     */
    public $Cvm;

    /**
     * @var string <p>实例类型  枚举列表: profession  :专业版  <br />standards2  :标准版premium   :高级版serverless  :serverless版</p>
     */
    public $InstanceType;

    /**
     * @var array <p>表示该实例支持的特性。FEATURE_SUBNET_ACL:表示acl策略支持设置子网。</p>
     */
    public $Features;

    /**
     * @var DynamicRetentionTime <p>动态消息保留策略</p>
     */
    public $RetentionTimeConfig;

    /**
     * @var integer <p>最大连接数</p>
     */
    public $MaxConnection;

    /**
     * @var integer <p>公网带宽</p>
     */
    public $PublicNetwork;

    /**
     * @var string <p>该字段已废弃,无实际含义</p>
     */
    public $DeleteRouteTimestamp;

    /**
     * @var integer <p>剩余创建分区数</p>
     */
    public $RemainingPartitions;

    /**
     * @var integer <p>剩余创建主题数</p>
     */
    public $RemainingTopics;

    /**
     * @var DynamicDiskConfig <p>动态硬盘扩容策略</p>
     */
    public $DynamicDiskConfig;

    /**
     * @var string <p>系统维护时间</p>
     */
    public $SystemMaintenanceTime;

    /**
     * @var integer <p>实例级别消息最大大小</p>
     */
    public $MaxMessageByte;

    /**
     * @var string <p>实例计费类型  POSTPAID_BY_HOUR 按小时付费; PREPAID 包年包月</p>
     */
    public $InstanceChargeType;

    /**
     * @var integer <p>是否开启弹性带宽白名单 <br />1:已开启弹性带宽白名单;0:未开启弹性带宽白名单;</p>
     */
    public $ElasticBandwidthSwitch;

    /**
     * @var integer <p>弹性带宽开通状态1:未开启弹性带宽;16: 开启弹性带宽中;32:开启弹性带宽成功;33:关闭弹性带宽中;34:关闭弹性带宽成功;64:开启弹性带宽失败;65:关闭弹性带宽失败;</p>
     */
    public $ElasticBandwidthOpenStatus;

    /**
     * @var string <p>集群类型<br />CLOUD_IDC IDC集群CLOUD_CVM_SHARE CVM共享集群CLOUD_CVM_YUNTI 云梯CVM集群CLOUD_CVM    CVM集群CLOUD_CDC CDC集群CLOUD_EKS_TSE EKS集群</p>
     */
    public $ClusterType;

    /**
     * @var integer <p>免费分区数量</p>
     */
    public $FreePartitionNumber;

    /**
     * @var integer <p>弹性带宽上浮值</p>
     */
    public $ElasticFloatBandwidth;

    /**
     * @var string <p>ssl自定义证书id  仅自定义证书实例集群返回</p>
     */
    public $CustomCertId;

    /**
     * @var integer <p>集群topic默认 unclean.leader.election.enable配置: 1 开启 0 关闭</p>
     */
    public $UncleanLeaderElectionEnable;

    /**
     * @var integer <p>实例删除保护开关: 1 开启 0 关闭</p>
     */
    public $DeleteProtectionEnable;

    /**
     * @param string $InstanceId <p>ckafka集群实例Id</p>
     * @param string $InstanceName <p>ckafka集群实例Name</p>
     * @param array $VipList <p>接入点 VIP 列表信息</p>
     * @param string $Vip <p>虚拟IP</p>
     * @param string $Vport <p>虚拟端口</p>
     * @param integer $Status <p>实例的状态。0: 创建中，1: 运行中，2: 删除中,  3: 已删除,  5: 隔离中,  7: 升级中,  -1: 创建失败 </p>
     * @param integer $Bandwidth <p>实例带宽，单位：Mbps</p>
     * @param integer $DiskSize <p>实例的存储大小，单位：GB</p>
     * @param integer $ZoneId <p>可用区</p>
     * @param string $VpcId <p>VPC 的 ID，为空表示是基础网络</p>
     * @param string $SubnetId <p>子网 ID， 为空表示基础网络</p>
     * @param integer $Healthy <p>实例健康状态， 1：健康，2：告警，3：异常</p>
     * @param string $HealthyMessage <p>实例健康信息，当前会展示磁盘利用率，最大长度为256</p>
     * @param integer $CreateTime <p>创建时间</p>
     * @param integer $MsgRetentionTime <p>消息保存时间,单位为分钟</p>
     * @param InstanceConfigDO $Config <p>自动创建 Topic 配置， 若该字段为空，则表示未开启自动创建</p>
     * @param integer $RemainderPartitions <p>剩余创建分区数</p>
     * @param integer $RemainderTopics <p>剩余创建主题数</p>
     * @param integer $CreatedPartitions <p>当前创建分区数</p>
     * @param integer $CreatedTopics <p>当前创建主题数</p>
     * @param array $Tags <p>标签数组</p>
     * @param integer $ExpireTime <p>过期时间</p>
     * @param array $ZoneIds <p>可用区列表</p>
     * @param string $Version <p>ckafka集群实例版本</p>
     * @param integer $MaxGroupNum <p>最大分组数</p>
     * @param integer $Cvm <p>售卖类型,0:标准版,1:专业版</p>
     * @param string $InstanceType <p>实例类型  枚举列表: profession  :专业版  <br />standards2  :标准版premium   :高级版serverless  :serverless版</p>
     * @param array $Features <p>表示该实例支持的特性。FEATURE_SUBNET_ACL:表示acl策略支持设置子网。</p>
     * @param DynamicRetentionTime $RetentionTimeConfig <p>动态消息保留策略</p>
     * @param integer $MaxConnection <p>最大连接数</p>
     * @param integer $PublicNetwork <p>公网带宽</p>
     * @param string $DeleteRouteTimestamp <p>该字段已废弃,无实际含义</p>
     * @param integer $RemainingPartitions <p>剩余创建分区数</p>
     * @param integer $RemainingTopics <p>剩余创建主题数</p>
     * @param DynamicDiskConfig $DynamicDiskConfig <p>动态硬盘扩容策略</p>
     * @param string $SystemMaintenanceTime <p>系统维护时间</p>
     * @param integer $MaxMessageByte <p>实例级别消息最大大小</p>
     * @param string $InstanceChargeType <p>实例计费类型  POSTPAID_BY_HOUR 按小时付费; PREPAID 包年包月</p>
     * @param integer $ElasticBandwidthSwitch <p>是否开启弹性带宽白名单 <br />1:已开启弹性带宽白名单;0:未开启弹性带宽白名单;</p>
     * @param integer $ElasticBandwidthOpenStatus <p>弹性带宽开通状态1:未开启弹性带宽;16: 开启弹性带宽中;32:开启弹性带宽成功;33:关闭弹性带宽中;34:关闭弹性带宽成功;64:开启弹性带宽失败;65:关闭弹性带宽失败;</p>
     * @param string $ClusterType <p>集群类型<br />CLOUD_IDC IDC集群CLOUD_CVM_SHARE CVM共享集群CLOUD_CVM_YUNTI 云梯CVM集群CLOUD_CVM    CVM集群CLOUD_CDC CDC集群CLOUD_EKS_TSE EKS集群</p>
     * @param integer $FreePartitionNumber <p>免费分区数量</p>
     * @param integer $ElasticFloatBandwidth <p>弹性带宽上浮值</p>
     * @param string $CustomCertId <p>ssl自定义证书id  仅自定义证书实例集群返回</p>
     * @param integer $UncleanLeaderElectionEnable <p>集群topic默认 unclean.leader.election.enable配置: 1 开启 0 关闭</p>
     * @param integer $DeleteProtectionEnable <p>实例删除保护开关: 1 开启 0 关闭</p>
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

        if (array_key_exists("VipList",$param) and $param["VipList"] !== null) {
            $this->VipList = [];
            foreach ($param["VipList"] as $key => $value){
                $obj = new VipEntity();
                $obj->deserialize($value);
                array_push($this->VipList, $obj);
            }
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
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

        if (array_key_exists("Healthy",$param) and $param["Healthy"] !== null) {
            $this->Healthy = $param["Healthy"];
        }

        if (array_key_exists("HealthyMessage",$param) and $param["HealthyMessage"] !== null) {
            $this->HealthyMessage = $param["HealthyMessage"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MsgRetentionTime",$param) and $param["MsgRetentionTime"] !== null) {
            $this->MsgRetentionTime = $param["MsgRetentionTime"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new InstanceConfigDO();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("RemainderPartitions",$param) and $param["RemainderPartitions"] !== null) {
            $this->RemainderPartitions = $param["RemainderPartitions"];
        }

        if (array_key_exists("RemainderTopics",$param) and $param["RemainderTopics"] !== null) {
            $this->RemainderTopics = $param["RemainderTopics"];
        }

        if (array_key_exists("CreatedPartitions",$param) and $param["CreatedPartitions"] !== null) {
            $this->CreatedPartitions = $param["CreatedPartitions"];
        }

        if (array_key_exists("CreatedTopics",$param) and $param["CreatedTopics"] !== null) {
            $this->CreatedTopics = $param["CreatedTopics"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("MaxGroupNum",$param) and $param["MaxGroupNum"] !== null) {
            $this->MaxGroupNum = $param["MaxGroupNum"];
        }

        if (array_key_exists("Cvm",$param) and $param["Cvm"] !== null) {
            $this->Cvm = $param["Cvm"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Features",$param) and $param["Features"] !== null) {
            $this->Features = $param["Features"];
        }

        if (array_key_exists("RetentionTimeConfig",$param) and $param["RetentionTimeConfig"] !== null) {
            $this->RetentionTimeConfig = new DynamicRetentionTime();
            $this->RetentionTimeConfig->deserialize($param["RetentionTimeConfig"]);
        }

        if (array_key_exists("MaxConnection",$param) and $param["MaxConnection"] !== null) {
            $this->MaxConnection = $param["MaxConnection"];
        }

        if (array_key_exists("PublicNetwork",$param) and $param["PublicNetwork"] !== null) {
            $this->PublicNetwork = $param["PublicNetwork"];
        }

        if (array_key_exists("DeleteRouteTimestamp",$param) and $param["DeleteRouteTimestamp"] !== null) {
            $this->DeleteRouteTimestamp = $param["DeleteRouteTimestamp"];
        }

        if (array_key_exists("RemainingPartitions",$param) and $param["RemainingPartitions"] !== null) {
            $this->RemainingPartitions = $param["RemainingPartitions"];
        }

        if (array_key_exists("RemainingTopics",$param) and $param["RemainingTopics"] !== null) {
            $this->RemainingTopics = $param["RemainingTopics"];
        }

        if (array_key_exists("DynamicDiskConfig",$param) and $param["DynamicDiskConfig"] !== null) {
            $this->DynamicDiskConfig = new DynamicDiskConfig();
            $this->DynamicDiskConfig->deserialize($param["DynamicDiskConfig"]);
        }

        if (array_key_exists("SystemMaintenanceTime",$param) and $param["SystemMaintenanceTime"] !== null) {
            $this->SystemMaintenanceTime = $param["SystemMaintenanceTime"];
        }

        if (array_key_exists("MaxMessageByte",$param) and $param["MaxMessageByte"] !== null) {
            $this->MaxMessageByte = $param["MaxMessageByte"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("ElasticBandwidthSwitch",$param) and $param["ElasticBandwidthSwitch"] !== null) {
            $this->ElasticBandwidthSwitch = $param["ElasticBandwidthSwitch"];
        }

        if (array_key_exists("ElasticBandwidthOpenStatus",$param) and $param["ElasticBandwidthOpenStatus"] !== null) {
            $this->ElasticBandwidthOpenStatus = $param["ElasticBandwidthOpenStatus"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("FreePartitionNumber",$param) and $param["FreePartitionNumber"] !== null) {
            $this->FreePartitionNumber = $param["FreePartitionNumber"];
        }

        if (array_key_exists("ElasticFloatBandwidth",$param) and $param["ElasticFloatBandwidth"] !== null) {
            $this->ElasticFloatBandwidth = $param["ElasticFloatBandwidth"];
        }

        if (array_key_exists("CustomCertId",$param) and $param["CustomCertId"] !== null) {
            $this->CustomCertId = $param["CustomCertId"];
        }

        if (array_key_exists("UncleanLeaderElectionEnable",$param) and $param["UncleanLeaderElectionEnable"] !== null) {
            $this->UncleanLeaderElectionEnable = $param["UncleanLeaderElectionEnable"];
        }

        if (array_key_exists("DeleteProtectionEnable",$param) and $param["DeleteProtectionEnable"] !== null) {
            $this->DeleteProtectionEnable = $param["DeleteProtectionEnable"];
        }
    }
}
