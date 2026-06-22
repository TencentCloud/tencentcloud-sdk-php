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
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method string getClusterName() 获取<p>集群名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p>
 * @method string getRegion() 获取<p>地域信息</p>
 * @method void setRegion(string $Region) 设置<p>地域信息</p>
 * @method integer getCreateTime() 获取<p>创建时间，毫秒为单位</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间，毫秒为单位</p>
 * @method string getRemark() 获取<p>集群说明信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置<p>集群说明信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicEndPoint() 获取<p>公网接入地址</p>
 * @method void setPublicEndPoint(string $PublicEndPoint) 设置<p>公网接入地址</p>
 * @method string getVpcEndPoint() 获取<p>VPC接入地址</p>
 * @method void setVpcEndPoint(string $VpcEndPoint) 设置<p>VPC接入地址</p>
 * @method boolean getSupportNamespaceEndpoint() 获取<p>是否支持命名空间接入点</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportNamespaceEndpoint(boolean $SupportNamespaceEndpoint) 设置<p>是否支持命名空间接入点</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVpcs() 获取<p>VPC信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcs(array $Vpcs) 设置<p>VPC信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsVip() 获取<p>是否为专享实例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsVip(boolean $IsVip) 设置<p>是否为专享实例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getRocketMQFlag() 获取<p>Rocketmq集群标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRocketMQFlag(boolean $RocketMQFlag) 设置<p>Rocketmq集群标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>计费状态，1表示正常，2表示已停服，3表示已销毁</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置<p>计费状态，1表示正常，2表示已停服，3表示已销毁</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsolateTime() 获取<p>欠费停服时间，毫秒为单位</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolateTime(integer $IsolateTime) 设置<p>欠费停服时间，毫秒为单位</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpPublicEndpoint() 获取<p>HTTP协议公网接入地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpPublicEndpoint(string $HttpPublicEndpoint) 设置<p>HTTP协议公网接入地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpVpcEndpoint() 获取<p>HTTP协议VPC接入地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpVpcEndpoint(string $HttpVpcEndpoint) 设置<p>HTTP协议VPC接入地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInternalEndpoint() 获取<p>TCP内部接入地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternalEndpoint(string $InternalEndpoint) 设置<p>TCP内部接入地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpInternalEndpoint() 获取<p>HTTP协议内部接入地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpInternalEndpoint(string $HttpInternalEndpoint) 设置<p>HTTP协议内部接入地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAclEnabled() 获取<p>是否开启ACL鉴权，专享实例支持关闭</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAclEnabled(boolean $AclEnabled) 设置<p>是否开启ACL鉴权，专享实例支持关闭</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicClbId() 获取<p>公网CLB实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicClbId(string $PublicClbId) 设置<p>公网CLB实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVip() 获取<p>vip</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVip(string $Vip) 设置<p>vip</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取<p>所属VPC</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置<p>所属VPC</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportMigration() 获取<p>是否支持迁移</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportMigration(boolean $SupportMigration) 设置<p>是否支持迁移</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceStatus() 获取<p>实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败，6 - 变配中，7 - 变配失败</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceStatus(integer $InstanceStatus) 设置<p>实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败，6 - 变配中，7 - 变配失败</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getZoneId() 获取<p>集群所属可用区，表明集群归属的可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneId(integer $ZoneId) 设置<p>集群所属可用区，表明集群归属的可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getZoneIds() 获取<p>集群节点所在的可用区，若该集群为跨可用区集群，则包含该集群节点所在的多个可用区。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneIds(array $ZoneIds) 设置<p>集群节点所在的可用区，若该集群为跨可用区集群，则包含该集群节点所在的多个可用区。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsFrozen() 获取<p>是否已冻结</p>
 * @method void setIsFrozen(boolean $IsFrozen) 设置<p>是否已冻结</p>
 * @method boolean getAutoCreateTopicEnabled() 获取<p>是否开启自动创建主题</p>
 * @method void setAutoCreateTopicEnabled(boolean $AutoCreateTopicEnabled) 设置<p>是否开启自动创建主题</p>
 * @method boolean getAdminFeatureEnabled() 获取<p>是否开启集群Admin能力</p>
 * @method void setAdminFeatureEnabled(boolean $AdminFeatureEnabled) 设置<p>是否开启集群Admin能力</p>
 * @method string getAdminAccessKey() 获取<p>Admin AK</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdminAccessKey(string $AdminAccessKey) 设置<p>Admin AK</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdminSecretKey() 获取<p>Admin SK</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdminSecretKey(string $AdminSecretKey) 设置<p>Admin SK</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableDeletionProtection() 获取<p>是否开启删除保护</p>
 * @method void setEnableDeletionProtection(boolean $EnableDeletionProtection) 设置<p>是否开启删除保护</p>
 * @method boolean getAutoCreateConsumeGroupEnabled() 获取<p>是否开启自动创建消费组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoCreateConsumeGroupEnabled(boolean $AutoCreateConsumeGroupEnabled) 设置<p>是否开启自动创建消费组</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class RocketMQClusterInfo extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>集群名称</p>
     */
    public $ClusterName;

    /**
     * @var string <p>地域信息</p>
     */
    public $Region;

    /**
     * @var integer <p>创建时间，毫秒为单位</p>
     */
    public $CreateTime;

    /**
     * @var string <p>集群说明信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string <p>公网接入地址</p>
     */
    public $PublicEndPoint;

    /**
     * @var string <p>VPC接入地址</p>
     */
    public $VpcEndPoint;

    /**
     * @var boolean <p>是否支持命名空间接入点</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportNamespaceEndpoint;

    /**
     * @var array <p>VPC信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vpcs;

    /**
     * @var boolean <p>是否为专享实例</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsVip;

    /**
     * @var boolean <p>Rocketmq集群标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RocketMQFlag;

    /**
     * @var integer <p>计费状态，1表示正常，2表示已停服，3表示已销毁</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer <p>欠费停服时间，毫秒为单位</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolateTime;

    /**
     * @var string <p>HTTP协议公网接入地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpPublicEndpoint;

    /**
     * @var string <p>HTTP协议VPC接入地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpVpcEndpoint;

    /**
     * @var string <p>TCP内部接入地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternalEndpoint;

    /**
     * @var string <p>HTTP协议内部接入地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpInternalEndpoint;

    /**
     * @var boolean <p>是否开启ACL鉴权，专享实例支持关闭</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AclEnabled;

    /**
     * @var string <p>公网CLB实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicClbId;

    /**
     * @var string <p>vip</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vip;

    /**
     * @var string <p>所属VPC</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var boolean <p>是否支持迁移</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportMigration;

    /**
     * @var integer <p>实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败，6 - 变配中，7 - 变配失败</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceStatus;

    /**
     * @var integer <p>集群所属可用区，表明集群归属的可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneId;

    /**
     * @var array <p>集群节点所在的可用区，若该集群为跨可用区集群，则包含该集群节点所在的多个可用区。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneIds;

    /**
     * @var boolean <p>是否已冻结</p>
     */
    public $IsFrozen;

    /**
     * @var boolean <p>是否开启自动创建主题</p>
     */
    public $AutoCreateTopicEnabled;

    /**
     * @var boolean <p>是否开启集群Admin能力</p>
     */
    public $AdminFeatureEnabled;

    /**
     * @var string <p>Admin AK</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdminAccessKey;

    /**
     * @var string <p>Admin SK</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdminSecretKey;

    /**
     * @var boolean <p>是否开启删除保护</p>
     */
    public $EnableDeletionProtection;

    /**
     * @var boolean <p>是否开启自动创建消费组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoCreateConsumeGroupEnabled;

    /**
     * @param string $ClusterId <p>集群ID</p>
     * @param string $ClusterName <p>集群名称</p>
     * @param string $Region <p>地域信息</p>
     * @param integer $CreateTime <p>创建时间，毫秒为单位</p>
     * @param string $Remark <p>集群说明信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicEndPoint <p>公网接入地址</p>
     * @param string $VpcEndPoint <p>VPC接入地址</p>
     * @param boolean $SupportNamespaceEndpoint <p>是否支持命名空间接入点</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Vpcs <p>VPC信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsVip <p>是否为专享实例</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $RocketMQFlag <p>Rocketmq集群标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>计费状态，1表示正常，2表示已停服，3表示已销毁</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsolateTime <p>欠费停服时间，毫秒为单位</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpPublicEndpoint <p>HTTP协议公网接入地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpVpcEndpoint <p>HTTP协议VPC接入地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InternalEndpoint <p>TCP内部接入地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpInternalEndpoint <p>HTTP协议内部接入地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AclEnabled <p>是否开启ACL鉴权，专享实例支持关闭</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicClbId <p>公网CLB实例ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Vip <p>vip</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId <p>所属VPC</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportMigration <p>是否支持迁移</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceStatus <p>实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败，6 - 变配中，7 - 变配失败</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ZoneId <p>集群所属可用区，表明集群归属的可用区</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ZoneIds <p>集群节点所在的可用区，若该集群为跨可用区集群，则包含该集群节点所在的多个可用区。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsFrozen <p>是否已冻结</p>
     * @param boolean $AutoCreateTopicEnabled <p>是否开启自动创建主题</p>
     * @param boolean $AdminFeatureEnabled <p>是否开启集群Admin能力</p>
     * @param string $AdminAccessKey <p>Admin AK</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdminSecretKey <p>Admin SK</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableDeletionProtection <p>是否开启删除保护</p>
     * @param boolean $AutoCreateConsumeGroupEnabled <p>是否开启自动创建消费组</p>
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

        if (array_key_exists("AutoCreateConsumeGroupEnabled",$param) and $param["AutoCreateConsumeGroupEnabled"] !== null) {
            $this->AutoCreateConsumeGroupEnabled = $param["AutoCreateConsumeGroupEnabled"];
        }
    }
}
