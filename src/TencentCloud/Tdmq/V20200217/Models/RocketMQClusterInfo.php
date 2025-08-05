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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RocketMQ集群基本信息
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getRegion() 获取地域信息
 * @method void setRegion(string $Region) 设置地域信息
 * @method integer getCreateTime() 获取创建时间，毫秒为单位
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，毫秒为单位
 * @method string getRemark() 获取集群说明信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置集群说明信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicEndPoint() 获取公网接入地址
 * @method void setPublicEndPoint(string $PublicEndPoint) 设置公网接入地址
 * @method string getVpcEndPoint() 获取VPC接入地址
 * @method void setVpcEndPoint(string $VpcEndPoint) 设置VPC接入地址
 * @method boolean getSupportNamespaceEndpoint() 获取是否支持命名空间接入点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportNamespaceEndpoint(boolean $SupportNamespaceEndpoint) 设置是否支持命名空间接入点
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVpcs() 获取VPC信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcs(array $Vpcs) 设置VPC信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsVip() 获取是否为专享实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsVip(boolean $IsVip) 设置是否为专享实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getRocketMQFlag() 获取Rocketmq集群标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRocketMQFlag(boolean $RocketMQFlag) 设置Rocketmq集群标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取计费状态，1表示正常，2表示已停服，3表示已销毁
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置计费状态，1表示正常，2表示已停服，3表示已销毁
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsolateTime() 获取欠费停服时间，毫秒为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolateTime(integer $IsolateTime) 设置欠费停服时间，毫秒为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpPublicEndpoint() 获取HTTP协议公网接入地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpPublicEndpoint(string $HttpPublicEndpoint) 设置HTTP协议公网接入地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpVpcEndpoint() 获取HTTP协议VPC接入地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpVpcEndpoint(string $HttpVpcEndpoint) 设置HTTP协议VPC接入地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInternalEndpoint() 获取TCP内部接入地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternalEndpoint(string $InternalEndpoint) 设置TCP内部接入地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpInternalEndpoint() 获取HTTP协议内部接入地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpInternalEndpoint(string $HttpInternalEndpoint) 设置HTTP协议内部接入地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAclEnabled() 获取是否开启ACL鉴权，专享实例支持关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAclEnabled(boolean $AclEnabled) 设置是否开启ACL鉴权，专享实例支持关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicClbId() 获取公网CLB实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicClbId(string $PublicClbId) 设置公网CLB实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVip() 获取vip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVip(string $Vip) 设置vip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取所属VPC
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置所属VPC
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportMigration() 获取是否支持迁移
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportMigration(boolean $SupportMigration) 设置是否支持迁移
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceStatus() 获取实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败，6 - 变配中，7 - 变配失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceStatus(integer $InstanceStatus) 设置实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败，6 - 变配中，7 - 变配失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getZoneId() 获取集群所属可用区，表明集群归属的可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneId(integer $ZoneId) 设置集群所属可用区，表明集群归属的可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getZoneIds() 获取集群节点所在的可用区，若该集群为跨可用区集群，则包含该集群节点所在的多个可用区。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneIds(array $ZoneIds) 设置集群节点所在的可用区，若该集群为跨可用区集群，则包含该集群节点所在的多个可用区。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsFrozen() 获取是否已冻结
 * @method void setIsFrozen(boolean $IsFrozen) 设置是否已冻结
 * @method boolean getAutoCreateTopicEnabled() 获取是否开启自动创建主题
 * @method void setAutoCreateTopicEnabled(boolean $AutoCreateTopicEnabled) 设置是否开启自动创建主题
 * @method boolean getAdminFeatureEnabled() 获取是否开启集群Admin能力
 * @method void setAdminFeatureEnabled(boolean $AdminFeatureEnabled) 设置是否开启集群Admin能力
 * @method string getAdminAccessKey() 获取Admin AK
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdminAccessKey(string $AdminAccessKey) 设置Admin AK
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdminSecretKey() 获取Admin SK
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdminSecretKey(string $AdminSecretKey) 设置Admin SK
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableDeletionProtection() 获取是否开启删除保护
 * @method void setEnableDeletionProtection(boolean $EnableDeletionProtection) 设置是否开启删除保护
 */
class RocketMQClusterInfo extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 地域信息
     */
    public $Region;

    /**
     * @var integer 创建时间，毫秒为单位
     */
    public $CreateTime;

    /**
     * @var string 集群说明信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 公网接入地址
     */
    public $PublicEndPoint;

    /**
     * @var string VPC接入地址
     */
    public $VpcEndPoint;

    /**
     * @var boolean 是否支持命名空间接入点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportNamespaceEndpoint;

    /**
     * @var array VPC信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vpcs;

    /**
     * @var boolean 是否为专享实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsVip;

    /**
     * @var boolean Rocketmq集群标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RocketMQFlag;

    /**
     * @var integer 计费状态，1表示正常，2表示已停服，3表示已销毁
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 欠费停服时间，毫秒为单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolateTime;

    /**
     * @var string HTTP协议公网接入地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpPublicEndpoint;

    /**
     * @var string HTTP协议VPC接入地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpVpcEndpoint;

    /**
     * @var string TCP内部接入地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternalEndpoint;

    /**
     * @var string HTTP协议内部接入地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpInternalEndpoint;

    /**
     * @var boolean 是否开启ACL鉴权，专享实例支持关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AclEnabled;

    /**
     * @var string 公网CLB实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicClbId;

    /**
     * @var string vip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vip;

    /**
     * @var string 所属VPC
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var boolean 是否支持迁移
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportMigration;

    /**
     * @var integer 实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败，6 - 变配中，7 - 变配失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceStatus;

    /**
     * @var integer 集群所属可用区，表明集群归属的可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneId;

    /**
     * @var array 集群节点所在的可用区，若该集群为跨可用区集群，则包含该集群节点所在的多个可用区。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneIds;

    /**
     * @var boolean 是否已冻结
     */
    public $IsFrozen;

    /**
     * @var boolean 是否开启自动创建主题
     */
    public $AutoCreateTopicEnabled;

    /**
     * @var boolean 是否开启集群Admin能力
     */
    public $AdminFeatureEnabled;

    /**
     * @var string Admin AK
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdminAccessKey;

    /**
     * @var string Admin SK
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdminSecretKey;

    /**
     * @var boolean 是否开启删除保护
     */
    public $EnableDeletionProtection;

    /**
     * @param string $ClusterId 集群ID
     * @param string $ClusterName 集群名称
     * @param string $Region 地域信息
     * @param integer $CreateTime 创建时间，毫秒为单位
     * @param string $Remark 集群说明信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicEndPoint 公网接入地址
     * @param string $VpcEndPoint VPC接入地址
     * @param boolean $SupportNamespaceEndpoint 是否支持命名空间接入点
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Vpcs VPC信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsVip 是否为专享实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $RocketMQFlag Rocketmq集群标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 计费状态，1表示正常，2表示已停服，3表示已销毁
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsolateTime 欠费停服时间，毫秒为单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpPublicEndpoint HTTP协议公网接入地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpVpcEndpoint HTTP协议VPC接入地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InternalEndpoint TCP内部接入地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpInternalEndpoint HTTP协议内部接入地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AclEnabled 是否开启ACL鉴权，专享实例支持关闭
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicClbId 公网CLB实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Vip vip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 所属VPC
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportMigration 是否支持迁移
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceStatus 实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败，6 - 变配中，7 - 变配失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ZoneId 集群所属可用区，表明集群归属的可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ZoneIds 集群节点所在的可用区，若该集群为跨可用区集群，则包含该集群节点所在的多个可用区。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsFrozen 是否已冻结
     * @param boolean $AutoCreateTopicEnabled 是否开启自动创建主题
     * @param boolean $AdminFeatureEnabled 是否开启集群Admin能力
     * @param string $AdminAccessKey Admin AK
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdminSecretKey Admin SK
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableDeletionProtection 是否开启删除保护
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PublicEndPoint",$param) and $param["PublicEndPoint"] !== null) {
            $this->PublicEndPoint = $param["PublicEndPoint"];
        }

        if (array_key_exists("VpcEndPoint",$param) and $param["VpcEndPoint"] !== null) {
            $this->VpcEndPoint = $param["VpcEndPoint"];
        }

        if (array_key_exists("SupportNamespaceEndpoint",$param) and $param["SupportNamespaceEndpoint"] !== null) {
            $this->SupportNamespaceEndpoint = $param["SupportNamespaceEndpoint"];
        }

        if (array_key_exists("Vpcs",$param) and $param["Vpcs"] !== null) {
            $this->Vpcs = [];
            foreach ($param["Vpcs"] as $key => $value){
                $obj = new VpcConfig();
                $obj->deserialize($value);
                array_push($this->Vpcs, $obj);
            }
        }

        if (array_key_exists("IsVip",$param) and $param["IsVip"] !== null) {
            $this->IsVip = $param["IsVip"];
        }

        if (array_key_exists("RocketMQFlag",$param) and $param["RocketMQFlag"] !== null) {
            $this->RocketMQFlag = $param["RocketMQFlag"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("HttpPublicEndpoint",$param) and $param["HttpPublicEndpoint"] !== null) {
            $this->HttpPublicEndpoint = $param["HttpPublicEndpoint"];
        }

        if (array_key_exists("HttpVpcEndpoint",$param) and $param["HttpVpcEndpoint"] !== null) {
            $this->HttpVpcEndpoint = $param["HttpVpcEndpoint"];
        }

        if (array_key_exists("InternalEndpoint",$param) and $param["InternalEndpoint"] !== null) {
            $this->InternalEndpoint = $param["InternalEndpoint"];
        }

        if (array_key_exists("HttpInternalEndpoint",$param) and $param["HttpInternalEndpoint"] !== null) {
            $this->HttpInternalEndpoint = $param["HttpInternalEndpoint"];
        }

        if (array_key_exists("AclEnabled",$param) and $param["AclEnabled"] !== null) {
            $this->AclEnabled = $param["AclEnabled"];
        }

        if (array_key_exists("PublicClbId",$param) and $param["PublicClbId"] !== null) {
            $this->PublicClbId = $param["PublicClbId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SupportMigration",$param) and $param["SupportMigration"] !== null) {
            $this->SupportMigration = $param["SupportMigration"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("IsFrozen",$param) and $param["IsFrozen"] !== null) {
            $this->IsFrozen = $param["IsFrozen"];
        }

        if (array_key_exists("AutoCreateTopicEnabled",$param) and $param["AutoCreateTopicEnabled"] !== null) {
            $this->AutoCreateTopicEnabled = $param["AutoCreateTopicEnabled"];
        }

        if (array_key_exists("AdminFeatureEnabled",$param) and $param["AdminFeatureEnabled"] !== null) {
            $this->AdminFeatureEnabled = $param["AdminFeatureEnabled"];
        }

        if (array_key_exists("AdminAccessKey",$param) and $param["AdminAccessKey"] !== null) {
            $this->AdminAccessKey = $param["AdminAccessKey"];
        }

        if (array_key_exists("AdminSecretKey",$param) and $param["AdminSecretKey"] !== null) {
            $this->AdminSecretKey = $param["AdminSecretKey"];
        }

        if (array_key_exists("EnableDeletionProtection",$param) and $param["EnableDeletionProtection"] !== null) {
            $this->EnableDeletionProtection = $param["EnableDeletionProtection"];
        }
    }
}
