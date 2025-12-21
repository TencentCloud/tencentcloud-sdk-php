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
 * 实例详情
 *
 * @method string getInstanceId() 获取<p>ckafka集群实例Id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>ckafka集群实例Id</p>
 * @method string getInstanceName() 获取<p>ckafka集群实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>ckafka集群实例名称</p>
 * @method string getVip() 获取<p>访问实例的vip 信息</p>
 * @method void setVip(string $Vip) 设置<p>访问实例的vip 信息</p>
 * @method string getVport() 获取<p>访问实例的端口信息</p>
 * @method void setVport(string $Vport) 设置<p>访问实例的端口信息</p>
 * @method array getVipList() 获取<p>虚拟IP列表</p>
 * @method void setVipList(array $VipList) 设置<p>虚拟IP列表</p>
 * @method integer getStatus() 获取<p>实例的状态。0: 创建中，1: 运行中，2: 删除中,  3: 已删除,  5: 隔离中,  7: 升级中,  -1: 创建失败 </p>
 * @method void setStatus(integer $Status) 设置<p>实例的状态。0: 创建中，1: 运行中，2: 删除中,  3: 已删除,  5: 隔离中,  7: 升级中,  -1: 创建失败 </p>
 * @method integer getBandwidth() 获取<p>实例带宽，单位Mbps</p>
 * @method void setBandwidth(integer $Bandwidth) 设置<p>实例带宽，单位Mbps</p>
 * @method integer getDiskSize() 获取<p>ckafka集群实例磁盘大小，单位G</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>ckafka集群实例磁盘大小，单位G</p>
 * @method integer getZoneId() 获取<p>可用区域ID</p>
 * @method void setZoneId(integer $ZoneId) 设置<p>可用区域ID</p>
 * @method string getVpcId() 获取<p>vpcId，如果为空，说明是基础网络</p>
 * @method void setVpcId(string $VpcId) 设置<p>vpcId，如果为空，说明是基础网络</p>
 * @method string getSubnetId() 获取<p>子网id</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网id</p>
 * @method integer getRenewFlag() 获取<p>实例是否续费，int  枚举值：1表示自动续费，2表示明确不自动续费</p>
 * @method void setRenewFlag(integer $RenewFlag) 设置<p>实例是否续费，int  枚举值：1表示自动续费，2表示明确不自动续费</p>
 * @method integer getHealthy() 获取<p>实例状态 int：1表示健康，2表示告警，3 表示实例状态异常</p>
 * @method void setHealthy(integer $Healthy) 设置<p>实例状态 int：1表示健康，2表示告警，3 表示实例状态异常</p>
 * @method string getHealthyMessage() 获取<p>实例状态信息</p>
 * @method void setHealthyMessage(string $HealthyMessage) 设置<p>实例状态信息</p>
 * @method integer getCreateTime() 获取<p>实例创建时间</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>实例创建时间</p>
 * @method integer getExpireTime() 获取<p>实例过期时间</p>
 * @method void setExpireTime(integer $ExpireTime) 设置<p>实例过期时间</p>
 * @method integer getIsInternal() 获取<p>是否为内部客户。值为1 表示内部客户</p>
 * @method void setIsInternal(integer $IsInternal) 设置<p>是否为内部客户。值为1 表示内部客户</p>
 * @method integer getTopicNum() 获取<p>Topic个数</p>
 * @method void setTopicNum(integer $TopicNum) 设置<p>Topic个数</p>
 * @method array getTags() 获取<p>标识tag</p>
 * @method void setTags(array $Tags) 设置<p>标识tag</p>
 * @method string getVersion() 获取<p>kafka版本信息</p>
 * @method void setVersion(string $Version) 设置<p>kafka版本信息</p>
 * @method array getZoneIds() 获取<p>跨可用区</p>
 * @method void setZoneIds(array $ZoneIds) 设置<p>跨可用区</p>
 * @method integer getCvm() 获取<p>ckafka售卖类型</p>
 * @method void setCvm(integer $Cvm) 设置<p>ckafka售卖类型</p>
 * @method string getInstanceType() 获取<p>ckafka集群实例类型</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>ckafka集群实例类型</p>
 * @method string getDiskType() 获取<p>ckafka集群实例磁盘类型</p>
 * @method void setDiskType(string $DiskType) 设置<p>ckafka集群实例磁盘类型</p>
 * @method integer getMaxTopicNumber() 获取<p>当前规格最大Topic数</p>
 * @method void setMaxTopicNumber(integer $MaxTopicNumber) 设置<p>当前规格最大Topic数</p>
 * @method integer getMaxPartitionNumber() 获取<p>当前规格最大Partition数</p>
 * @method void setMaxPartitionNumber(integer $MaxPartitionNumber) 设置<p>当前规格最大Partition数</p>
 * @method string getRebalanceTime() 获取<p>计划升级配置时间</p>
 * @method void setRebalanceTime(string $RebalanceTime) 设置<p>计划升级配置时间</p>
 * @method integer getPartitionNumber() 获取<p>实例当前partition数量</p>
 * @method void setPartitionNumber(integer $PartitionNumber) 设置<p>实例当前partition数量</p>
 * @method string getPublicNetworkChargeType() 获取<p>ckafka集群实例公网带宽类型</p>
 * @method void setPublicNetworkChargeType(string $PublicNetworkChargeType) 设置<p>ckafka集群实例公网带宽类型</p>
 * @method integer getPublicNetwork() 获取<p>公网带宽 最小3Mbps  最大999Mbps 仅专业版支持填写</p>
 * @method void setPublicNetwork(integer $PublicNetwork) 设置<p>公网带宽 最小3Mbps  最大999Mbps 仅专业版支持填写</p>
 * @method string getClusterType() 获取<p>ckafka集群实例底层集群类型</p>
 * @method void setClusterType(string $ClusterType) 设置<p>ckafka集群实例底层集群类型</p>
 * @method array getFeatures() 获取<p>实例功能列表</p>
 * @method void setFeatures(array $Features) 设置<p>实例功能列表</p>
 */
class InstanceDetail extends AbstractModel
{
    /**
     * @var string <p>ckafka集群实例Id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>ckafka集群实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>访问实例的vip 信息</p>
     */
    public $Vip;

    /**
     * @var string <p>访问实例的端口信息</p>
     */
    public $Vport;

    /**
     * @var array <p>虚拟IP列表</p>
     */
    public $VipList;

    /**
     * @var integer <p>实例的状态。0: 创建中，1: 运行中，2: 删除中,  3: 已删除,  5: 隔离中,  7: 升级中,  -1: 创建失败 </p>
     */
    public $Status;

    /**
     * @var integer <p>实例带宽，单位Mbps</p>
     */
    public $Bandwidth;

    /**
     * @var integer <p>ckafka集群实例磁盘大小，单位G</p>
     */
    public $DiskSize;

    /**
     * @var integer <p>可用区域ID</p>
     */
    public $ZoneId;

    /**
     * @var string <p>vpcId，如果为空，说明是基础网络</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网id</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>实例是否续费，int  枚举值：1表示自动续费，2表示明确不自动续费</p>
     */
    public $RenewFlag;

    /**
     * @var integer <p>实例状态 int：1表示健康，2表示告警，3 表示实例状态异常</p>
     */
    public $Healthy;

    /**
     * @var string <p>实例状态信息</p>
     */
    public $HealthyMessage;

    /**
     * @var integer <p>实例创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>实例过期时间</p>
     */
    public $ExpireTime;

    /**
     * @var integer <p>是否为内部客户。值为1 表示内部客户</p>
     */
    public $IsInternal;

    /**
     * @var integer <p>Topic个数</p>
     */
    public $TopicNum;

    /**
     * @var array <p>标识tag</p>
     */
    public $Tags;

    /**
     * @var string <p>kafka版本信息</p>
     */
    public $Version;

    /**
     * @var array <p>跨可用区</p>
     */
    public $ZoneIds;

    /**
     * @var integer <p>ckafka售卖类型</p>
     */
    public $Cvm;

    /**
     * @var string <p>ckafka集群实例类型</p>
     */
    public $InstanceType;

    /**
     * @var string <p>ckafka集群实例磁盘类型</p>
     */
    public $DiskType;

    /**
     * @var integer <p>当前规格最大Topic数</p>
     */
    public $MaxTopicNumber;

    /**
     * @var integer <p>当前规格最大Partition数</p>
     */
    public $MaxPartitionNumber;

    /**
     * @var string <p>计划升级配置时间</p>
     */
    public $RebalanceTime;

    /**
     * @var integer <p>实例当前partition数量</p>
     */
    public $PartitionNumber;

    /**
     * @var string <p>ckafka集群实例公网带宽类型</p>
     */
    public $PublicNetworkChargeType;

    /**
     * @var integer <p>公网带宽 最小3Mbps  最大999Mbps 仅专业版支持填写</p>
     */
    public $PublicNetwork;

    /**
     * @var string <p>ckafka集群实例底层集群类型</p>
     */
    public $ClusterType;

    /**
     * @var array <p>实例功能列表</p>
     */
    public $Features;

    /**
     * @param string $InstanceId <p>ckafka集群实例Id</p>
     * @param string $InstanceName <p>ckafka集群实例名称</p>
     * @param string $Vip <p>访问实例的vip 信息</p>
     * @param string $Vport <p>访问实例的端口信息</p>
     * @param array $VipList <p>虚拟IP列表</p>
     * @param integer $Status <p>实例的状态。0: 创建中，1: 运行中，2: 删除中,  3: 已删除,  5: 隔离中,  7: 升级中,  -1: 创建失败 </p>
     * @param integer $Bandwidth <p>实例带宽，单位Mbps</p>
     * @param integer $DiskSize <p>ckafka集群实例磁盘大小，单位G</p>
     * @param integer $ZoneId <p>可用区域ID</p>
     * @param string $VpcId <p>vpcId，如果为空，说明是基础网络</p>
     * @param string $SubnetId <p>子网id</p>
     * @param integer $RenewFlag <p>实例是否续费，int  枚举值：1表示自动续费，2表示明确不自动续费</p>
     * @param integer $Healthy <p>实例状态 int：1表示健康，2表示告警，3 表示实例状态异常</p>
     * @param string $HealthyMessage <p>实例状态信息</p>
     * @param integer $CreateTime <p>实例创建时间</p>
     * @param integer $ExpireTime <p>实例过期时间</p>
     * @param integer $IsInternal <p>是否为内部客户。值为1 表示内部客户</p>
     * @param integer $TopicNum <p>Topic个数</p>
     * @param array $Tags <p>标识tag</p>
     * @param string $Version <p>kafka版本信息</p>
     * @param array $ZoneIds <p>跨可用区</p>
     * @param integer $Cvm <p>ckafka售卖类型</p>
     * @param string $InstanceType <p>ckafka集群实例类型</p>
     * @param string $DiskType <p>ckafka集群实例磁盘类型</p>
     * @param integer $MaxTopicNumber <p>当前规格最大Topic数</p>
     * @param integer $MaxPartitionNumber <p>当前规格最大Partition数</p>
     * @param string $RebalanceTime <p>计划升级配置时间</p>
     * @param integer $PartitionNumber <p>实例当前partition数量</p>
     * @param string $PublicNetworkChargeType <p>ckafka集群实例公网带宽类型</p>
     * @param integer $PublicNetwork <p>公网带宽 最小3Mbps  最大999Mbps 仅专业版支持填写</p>
     * @param string $ClusterType <p>ckafka集群实例底层集群类型</p>
     * @param array $Features <p>实例功能列表</p>
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

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("VipList",$param) and $param["VipList"] !== null) {
            $this->VipList = [];
            foreach ($param["VipList"] as $key => $value){
                $obj = new VipEntity();
                $obj->deserialize($value);
                array_push($this->VipList, $obj);
            }
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

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
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

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("IsInternal",$param) and $param["IsInternal"] !== null) {
            $this->IsInternal = $param["IsInternal"];
        }

        if (array_key_exists("TopicNum",$param) and $param["TopicNum"] !== null) {
            $this->TopicNum = $param["TopicNum"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("Cvm",$param) and $param["Cvm"] !== null) {
            $this->Cvm = $param["Cvm"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("MaxTopicNumber",$param) and $param["MaxTopicNumber"] !== null) {
            $this->MaxTopicNumber = $param["MaxTopicNumber"];
        }

        if (array_key_exists("MaxPartitionNumber",$param) and $param["MaxPartitionNumber"] !== null) {
            $this->MaxPartitionNumber = $param["MaxPartitionNumber"];
        }

        if (array_key_exists("RebalanceTime",$param) and $param["RebalanceTime"] !== null) {
            $this->RebalanceTime = $param["RebalanceTime"];
        }

        if (array_key_exists("PartitionNumber",$param) and $param["PartitionNumber"] !== null) {
            $this->PartitionNumber = $param["PartitionNumber"];
        }

        if (array_key_exists("PublicNetworkChargeType",$param) and $param["PublicNetworkChargeType"] !== null) {
            $this->PublicNetworkChargeType = $param["PublicNetworkChargeType"];
        }

        if (array_key_exists("PublicNetwork",$param) and $param["PublicNetwork"] !== null) {
            $this->PublicNetwork = $param["PublicNetwork"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("Features",$param) and $param["Features"] !== null) {
            $this->Features = $param["Features"];
        }
    }
}
