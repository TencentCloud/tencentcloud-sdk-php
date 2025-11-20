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
 * @method string getInstanceId() 获取ckafka集群实例Id
 * @method void setInstanceId(string $InstanceId) 设置ckafka集群实例Id
 * @method string getInstanceName() 获取ckafka集群实例Name
 * @method void setInstanceName(string $InstanceName) 设置ckafka集群实例Name
 * @method array getVipList() 获取接入点 VIP 列表信息
 * @method void setVipList(array $VipList) 设置接入点 VIP 列表信息
 * @method string getVip() 获取虚拟IP
 * @method void setVip(string $Vip) 设置虚拟IP
 * @method string getVport() 获取虚拟端口
 * @method void setVport(string $Vport) 设置虚拟端口
 * @method integer getStatus() 获取实例的状态。0: 创建中，1: 运行中，2: 删除中,  3: 已删除,  5: 隔离中,  7: 升级中,  -1: 创建失败 
 * @method void setStatus(integer $Status) 设置实例的状态。0: 创建中，1: 运行中，2: 删除中,  3: 已删除,  5: 隔离中,  7: 升级中,  -1: 创建失败 
 * @method integer getBandwidth() 获取实例带宽，单位：Mbps
 * @method void setBandwidth(integer $Bandwidth) 设置实例带宽，单位：Mbps
 * @method integer getDiskSize() 获取实例的存储大小，单位：GB
 * @method void setDiskSize(integer $DiskSize) 设置实例的存储大小，单位：GB
 * @method integer getZoneId() 获取可用区
 * @method void setZoneId(integer $ZoneId) 设置可用区
 * @method string getVpcId() 获取VPC 的 ID，为空表示是基础网络
 * @method void setVpcId(string $VpcId) 设置VPC 的 ID，为空表示是基础网络
 * @method string getSubnetId() 获取子网 ID， 为空表示基础网络
 * @method void setSubnetId(string $SubnetId) 设置子网 ID， 为空表示基础网络
 * @method integer getHealthy() 获取实例健康状态， 1：健康，2：告警，3：异常
 * @method void setHealthy(integer $Healthy) 设置实例健康状态， 1：健康，2：告警，3：异常
 * @method string getHealthyMessage() 获取实例健康信息，当前会展示磁盘利用率，最大长度为256
 * @method void setHealthyMessage(string $HealthyMessage) 设置实例健康信息，当前会展示磁盘利用率，最大长度为256
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method integer getMsgRetentionTime() 获取消息保存时间,单位为分钟
 * @method void setMsgRetentionTime(integer $MsgRetentionTime) 设置消息保存时间,单位为分钟
 * @method InstanceConfigDO getConfig() 获取自动创建 Topic 配置， 若该字段为空，则表示未开启自动创建
 * @method void setConfig(InstanceConfigDO $Config) 设置自动创建 Topic 配置， 若该字段为空，则表示未开启自动创建
 * @method integer getRemainderPartitions() 获取剩余创建分区数
 * @method void setRemainderPartitions(integer $RemainderPartitions) 设置剩余创建分区数
 * @method integer getRemainderTopics() 获取剩余创建主题数
 * @method void setRemainderTopics(integer $RemainderTopics) 设置剩余创建主题数
 * @method integer getCreatedPartitions() 获取当前创建分区数
 * @method void setCreatedPartitions(integer $CreatedPartitions) 设置当前创建分区数
 * @method integer getCreatedTopics() 获取当前创建主题数
 * @method void setCreatedTopics(integer $CreatedTopics) 设置当前创建主题数
 * @method array getTags() 获取标签数组
 * @method void setTags(array $Tags) 设置标签数组
 * @method integer getExpireTime() 获取过期时间
 * @method void setExpireTime(integer $ExpireTime) 设置过期时间
 * @method array getZoneIds() 获取可用区列表
 * @method void setZoneIds(array $ZoneIds) 设置可用区列表
 * @method string getVersion() 获取ckafka集群实例版本
 * @method void setVersion(string $Version) 设置ckafka集群实例版本
 * @method integer getMaxGroupNum() 获取最大分组数
 * @method void setMaxGroupNum(integer $MaxGroupNum) 设置最大分组数
 * @method integer getCvm() 获取售卖类型,0:标准版,1:专业版
 * @method void setCvm(integer $Cvm) 设置售卖类型,0:标准版,1:专业版
 * @method string getInstanceType() 获取实例类型  枚举列表: 
profession  :专业版    
standards2  :标准版
premium   :高级版
serverless  :serverless版
 * @method void setInstanceType(string $InstanceType) 设置实例类型  枚举列表: 
profession  :专业版    
standards2  :标准版
premium   :高级版
serverless  :serverless版
 * @method array getFeatures() 获取表示该实例支持的特性。FEATURE_SUBNET_ACL:表示acl策略支持设置子网。
 * @method void setFeatures(array $Features) 设置表示该实例支持的特性。FEATURE_SUBNET_ACL:表示acl策略支持设置子网。
 * @method DynamicRetentionTime getRetentionTimeConfig() 获取动态消息保留策略
 * @method void setRetentionTimeConfig(DynamicRetentionTime $RetentionTimeConfig) 设置动态消息保留策略
 * @method integer getMaxConnection() 获取最大连接数
 * @method void setMaxConnection(integer $MaxConnection) 设置最大连接数
 * @method integer getPublicNetwork() 获取公网带宽
 * @method void setPublicNetwork(integer $PublicNetwork) 设置公网带宽
 * @method string getDeleteRouteTimestamp() 获取该字段已废弃,无实际含义
 * @method void setDeleteRouteTimestamp(string $DeleteRouteTimestamp) 设置该字段已废弃,无实际含义
 * @method integer getRemainingPartitions() 获取剩余创建分区数
 * @method void setRemainingPartitions(integer $RemainingPartitions) 设置剩余创建分区数
 * @method integer getRemainingTopics() 获取剩余创建主题数
 * @method void setRemainingTopics(integer $RemainingTopics) 设置剩余创建主题数
 * @method DynamicDiskConfig getDynamicDiskConfig() 获取动态硬盘扩容策略
 * @method void setDynamicDiskConfig(DynamicDiskConfig $DynamicDiskConfig) 设置动态硬盘扩容策略
 * @method string getSystemMaintenanceTime() 获取系统维护时间
 * @method void setSystemMaintenanceTime(string $SystemMaintenanceTime) 设置系统维护时间
 * @method integer getMaxMessageByte() 获取实例级别消息最大大小
 * @method void setMaxMessageByte(integer $MaxMessageByte) 设置实例级别消息最大大小
 * @method string getInstanceChargeType() 获取实例计费类型  POSTPAID_BY_HOUR 按小时付费; PREPAID 包年包月
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置实例计费类型  POSTPAID_BY_HOUR 按小时付费; PREPAID 包年包月
 * @method integer getElasticBandwidthSwitch() 获取是否开启弹性带宽白名单   
1:已开启弹性带宽白名单;
0:未开启弹性带宽白名单;
 * @method void setElasticBandwidthSwitch(integer $ElasticBandwidthSwitch) 设置是否开启弹性带宽白名单   
1:已开启弹性带宽白名单;
0:未开启弹性带宽白名单;
 * @method integer getElasticBandwidthOpenStatus() 获取弹性带宽开通状态
1:未开启弹性带宽;
16: 开启弹性带宽中;
32:开启弹性带宽成功;
33:关闭弹性带宽中;
34:关闭弹性带宽成功;
64:开启弹性带宽失败;
65:关闭弹性带宽失败;
 * @method void setElasticBandwidthOpenStatus(integer $ElasticBandwidthOpenStatus) 设置弹性带宽开通状态
1:未开启弹性带宽;
16: 开启弹性带宽中;
32:开启弹性带宽成功;
33:关闭弹性带宽中;
34:关闭弹性带宽成功;
64:开启弹性带宽失败;
65:关闭弹性带宽失败;
 * @method string getClusterType() 获取集群类型  
CLOUD_IDC IDC集群
CLOUD_CVM_SHARE CVM共享集群
CLOUD_CVM_YUNTI 云梯CVM集群
CLOUD_CVM    CVM集群
CLOUD_CDC CDC集群
CLOUD_EKS_TSE EKS集群
 * @method void setClusterType(string $ClusterType) 设置集群类型  
CLOUD_IDC IDC集群
CLOUD_CVM_SHARE CVM共享集群
CLOUD_CVM_YUNTI 云梯CVM集群
CLOUD_CVM    CVM集群
CLOUD_CDC CDC集群
CLOUD_EKS_TSE EKS集群
 * @method integer getFreePartitionNumber() 获取免费分区数量
 * @method void setFreePartitionNumber(integer $FreePartitionNumber) 设置免费分区数量
 * @method integer getElasticFloatBandwidth() 获取弹性带宽上浮值
 * @method void setElasticFloatBandwidth(integer $ElasticFloatBandwidth) 设置弹性带宽上浮值
 * @method string getCustomCertId() 获取ssl自定义证书id  仅自定义证书实例集群返回
 * @method void setCustomCertId(string $CustomCertId) 设置ssl自定义证书id  仅自定义证书实例集群返回
 * @method integer getUncleanLeaderElectionEnable() 获取集群topic默认 unclean.leader.election.enable配置: 1 开启 0 关闭
 * @method void setUncleanLeaderElectionEnable(integer $UncleanLeaderElectionEnable) 设置集群topic默认 unclean.leader.election.enable配置: 1 开启 0 关闭
 * @method integer getDeleteProtectionEnable() 获取实例删除保护开关: 1 开启 0 关闭
 * @method void setDeleteProtectionEnable(integer $DeleteProtectionEnable) 设置实例删除保护开关: 1 开启 0 关闭
 */
class InstanceAttributesResponse extends AbstractModel
{
    /**
     * @var string ckafka集群实例Id
     */
    public $InstanceId;

    /**
     * @var string ckafka集群实例Name
     */
    public $InstanceName;

    /**
     * @var array 接入点 VIP 列表信息
     */
    public $VipList;

    /**
     * @var string 虚拟IP
     */
    public $Vip;

    /**
     * @var string 虚拟端口
     */
    public $Vport;

    /**
     * @var integer 实例的状态。0: 创建中，1: 运行中，2: 删除中,  3: 已删除,  5: 隔离中,  7: 升级中,  -1: 创建失败 
     */
    public $Status;

    /**
     * @var integer 实例带宽，单位：Mbps
     */
    public $Bandwidth;

    /**
     * @var integer 实例的存储大小，单位：GB
     */
    public $DiskSize;

    /**
     * @var integer 可用区
     */
    public $ZoneId;

    /**
     * @var string VPC 的 ID，为空表示是基础网络
     */
    public $VpcId;

    /**
     * @var string 子网 ID， 为空表示基础网络
     */
    public $SubnetId;

    /**
     * @var integer 实例健康状态， 1：健康，2：告警，3：异常
     */
    public $Healthy;

    /**
     * @var string 实例健康信息，当前会展示磁盘利用率，最大长度为256
     */
    public $HealthyMessage;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 消息保存时间,单位为分钟
     */
    public $MsgRetentionTime;

    /**
     * @var InstanceConfigDO 自动创建 Topic 配置， 若该字段为空，则表示未开启自动创建
     */
    public $Config;

    /**
     * @var integer 剩余创建分区数
     */
    public $RemainderPartitions;

    /**
     * @var integer 剩余创建主题数
     */
    public $RemainderTopics;

    /**
     * @var integer 当前创建分区数
     */
    public $CreatedPartitions;

    /**
     * @var integer 当前创建主题数
     */
    public $CreatedTopics;

    /**
     * @var array 标签数组
     */
    public $Tags;

    /**
     * @var integer 过期时间
     */
    public $ExpireTime;

    /**
     * @var array 可用区列表
     */
    public $ZoneIds;

    /**
     * @var string ckafka集群实例版本
     */
    public $Version;

    /**
     * @var integer 最大分组数
     */
    public $MaxGroupNum;

    /**
     * @var integer 售卖类型,0:标准版,1:专业版
     */
    public $Cvm;

    /**
     * @var string 实例类型  枚举列表: 
profession  :专业版    
standards2  :标准版
premium   :高级版
serverless  :serverless版
     */
    public $InstanceType;

    /**
     * @var array 表示该实例支持的特性。FEATURE_SUBNET_ACL:表示acl策略支持设置子网。
     */
    public $Features;

    /**
     * @var DynamicRetentionTime 动态消息保留策略
     */
    public $RetentionTimeConfig;

    /**
     * @var integer 最大连接数
     */
    public $MaxConnection;

    /**
     * @var integer 公网带宽
     */
    public $PublicNetwork;

    /**
     * @var string 该字段已废弃,无实际含义
     */
    public $DeleteRouteTimestamp;

    /**
     * @var integer 剩余创建分区数
     */
    public $RemainingPartitions;

    /**
     * @var integer 剩余创建主题数
     */
    public $RemainingTopics;

    /**
     * @var DynamicDiskConfig 动态硬盘扩容策略
     */
    public $DynamicDiskConfig;

    /**
     * @var string 系统维护时间
     */
    public $SystemMaintenanceTime;

    /**
     * @var integer 实例级别消息最大大小
     */
    public $MaxMessageByte;

    /**
     * @var string 实例计费类型  POSTPAID_BY_HOUR 按小时付费; PREPAID 包年包月
     */
    public $InstanceChargeType;

    /**
     * @var integer 是否开启弹性带宽白名单   
1:已开启弹性带宽白名单;
0:未开启弹性带宽白名单;
     */
    public $ElasticBandwidthSwitch;

    /**
     * @var integer 弹性带宽开通状态
1:未开启弹性带宽;
16: 开启弹性带宽中;
32:开启弹性带宽成功;
33:关闭弹性带宽中;
34:关闭弹性带宽成功;
64:开启弹性带宽失败;
65:关闭弹性带宽失败;
     */
    public $ElasticBandwidthOpenStatus;

    /**
     * @var string 集群类型  
CLOUD_IDC IDC集群
CLOUD_CVM_SHARE CVM共享集群
CLOUD_CVM_YUNTI 云梯CVM集群
CLOUD_CVM    CVM集群
CLOUD_CDC CDC集群
CLOUD_EKS_TSE EKS集群
     */
    public $ClusterType;

    /**
     * @var integer 免费分区数量
     */
    public $FreePartitionNumber;

    /**
     * @var integer 弹性带宽上浮值
     */
    public $ElasticFloatBandwidth;

    /**
     * @var string ssl自定义证书id  仅自定义证书实例集群返回
     */
    public $CustomCertId;

    /**
     * @var integer 集群topic默认 unclean.leader.election.enable配置: 1 开启 0 关闭
     */
    public $UncleanLeaderElectionEnable;

    /**
     * @var integer 实例删除保护开关: 1 开启 0 关闭
     */
    public $DeleteProtectionEnable;

    /**
     * @param string $InstanceId ckafka集群实例Id
     * @param string $InstanceName ckafka集群实例Name
     * @param array $VipList 接入点 VIP 列表信息
     * @param string $Vip 虚拟IP
     * @param string $Vport 虚拟端口
     * @param integer $Status 实例的状态。0: 创建中，1: 运行中，2: 删除中,  3: 已删除,  5: 隔离中,  7: 升级中,  -1: 创建失败 
     * @param integer $Bandwidth 实例带宽，单位：Mbps
     * @param integer $DiskSize 实例的存储大小，单位：GB
     * @param integer $ZoneId 可用区
     * @param string $VpcId VPC 的 ID，为空表示是基础网络
     * @param string $SubnetId 子网 ID， 为空表示基础网络
     * @param integer $Healthy 实例健康状态， 1：健康，2：告警，3：异常
     * @param string $HealthyMessage 实例健康信息，当前会展示磁盘利用率，最大长度为256
     * @param integer $CreateTime 创建时间
     * @param integer $MsgRetentionTime 消息保存时间,单位为分钟
     * @param InstanceConfigDO $Config 自动创建 Topic 配置， 若该字段为空，则表示未开启自动创建
     * @param integer $RemainderPartitions 剩余创建分区数
     * @param integer $RemainderTopics 剩余创建主题数
     * @param integer $CreatedPartitions 当前创建分区数
     * @param integer $CreatedTopics 当前创建主题数
     * @param array $Tags 标签数组
     * @param integer $ExpireTime 过期时间
     * @param array $ZoneIds 可用区列表
     * @param string $Version ckafka集群实例版本
     * @param integer $MaxGroupNum 最大分组数
     * @param integer $Cvm 售卖类型,0:标准版,1:专业版
     * @param string $InstanceType 实例类型  枚举列表: 
profession  :专业版    
standards2  :标准版
premium   :高级版
serverless  :serverless版
     * @param array $Features 表示该实例支持的特性。FEATURE_SUBNET_ACL:表示acl策略支持设置子网。
     * @param DynamicRetentionTime $RetentionTimeConfig 动态消息保留策略
     * @param integer $MaxConnection 最大连接数
     * @param integer $PublicNetwork 公网带宽
     * @param string $DeleteRouteTimestamp 该字段已废弃,无实际含义
     * @param integer $RemainingPartitions 剩余创建分区数
     * @param integer $RemainingTopics 剩余创建主题数
     * @param DynamicDiskConfig $DynamicDiskConfig 动态硬盘扩容策略
     * @param string $SystemMaintenanceTime 系统维护时间
     * @param integer $MaxMessageByte 实例级别消息最大大小
     * @param string $InstanceChargeType 实例计费类型  POSTPAID_BY_HOUR 按小时付费; PREPAID 包年包月
     * @param integer $ElasticBandwidthSwitch 是否开启弹性带宽白名单   
1:已开启弹性带宽白名单;
0:未开启弹性带宽白名单;
     * @param integer $ElasticBandwidthOpenStatus 弹性带宽开通状态
1:未开启弹性带宽;
16: 开启弹性带宽中;
32:开启弹性带宽成功;
33:关闭弹性带宽中;
34:关闭弹性带宽成功;
64:开启弹性带宽失败;
65:关闭弹性带宽失败;
     * @param string $ClusterType 集群类型  
CLOUD_IDC IDC集群
CLOUD_CVM_SHARE CVM共享集群
CLOUD_CVM_YUNTI 云梯CVM集群
CLOUD_CVM    CVM集群
CLOUD_CDC CDC集群
CLOUD_EKS_TSE EKS集群
     * @param integer $FreePartitionNumber 免费分区数量
     * @param integer $ElasticFloatBandwidth 弹性带宽上浮值
     * @param string $CustomCertId ssl自定义证书id  仅自定义证书实例集群返回
     * @param integer $UncleanLeaderElectionEnable 集群topic默认 unclean.leader.election.enable配置: 1 开启 0 关闭
     * @param integer $DeleteProtectionEnable 实例删除保护开关: 1 开启 0 关闭
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
