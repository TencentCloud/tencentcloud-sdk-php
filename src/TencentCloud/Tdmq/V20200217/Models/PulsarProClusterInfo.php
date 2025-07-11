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
 * Pulsar专业版集群信息
 *
 * @method string getClusterId() 获取集群Id。
 * @method void setClusterId(string $ClusterId) 设置集群Id。
 * @method string getClusterName() 获取集群名称。
 * @method void setClusterName(string $ClusterName) 设置集群名称。
 * @method string getRemark() 获取说明信息。
 * @method void setRemark(string $Remark) 设置说明信息。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getStatus() 获取集群状态，0:创建中，1:正常，2:隔离
 * @method void setStatus(integer $Status) 设置集群状态，0:创建中，1:正常，2:隔离
 * @method string getVersion() 获取集群版本
 * @method void setVersion(string $Version) 设置集群版本
 * @method array getNodeDistribution() 获取节点分布情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeDistribution(array $NodeDistribution) 设置节点分布情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxStorage() 获取最大储存容量，单位：MB
 * @method void setMaxStorage(integer $MaxStorage) 设置最大储存容量，单位：MB
 * @method boolean getCanEditRoute() 获取是否可以修改路由
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanEditRoute(boolean $CanEditRoute) 设置是否可以修改路由
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBillingLabelVersion() 获取代表是专业版和小规格专业版的不同计费规格PULSAR.P1固定存储PULSAR.P2弹性存储
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillingLabelVersion(string $BillingLabelVersion) 设置代表是专业版和小规格专业版的不同计费规格PULSAR.P1固定存储PULSAR.P2弹性存储
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpireTime() 获取实例到期时间戳，毫秒级精度。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(integer $ExpireTime) 设置实例到期时间戳，毫秒级精度。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAutoCreateTopicStatus() 获取是否开启自动创建主题
true就是开启了，false是关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoCreateTopicStatus(boolean $AutoCreateTopicStatus) 设置是否开启自动创建主题
true就是开启了，false是关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDefaultPartitionNumber() 获取自动创建主题的默认分区数，如果没开启就是0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultPartitionNumber(integer $DefaultPartitionNumber) 设置自动创建主题的默认分区数，如果没开启就是0
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTenant() 获取用户自定义的租户别名，如果没有，会复用专业集群 ID

 * @method void setTenant(string $Tenant) 设置用户自定义的租户别名，如果没有，会复用专业集群 ID

 * @method integer getDeleteProtection() 获取删除保护开关标识
 * @method void setDeleteProtection(integer $DeleteProtection) 设置删除保护开关标识
 */
class PulsarProClusterInfo extends AbstractModel
{
    /**
     * @var string 集群Id。
     */
    public $ClusterId;

    /**
     * @var string 集群名称。
     */
    public $ClusterName;

    /**
     * @var string 说明信息。
     */
    public $Remark;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 集群状态，0:创建中，1:正常，2:隔离
     */
    public $Status;

    /**
     * @var string 集群版本
     */
    public $Version;

    /**
     * @var array 节点分布情况
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeDistribution;

    /**
     * @var integer 最大储存容量，单位：MB
     */
    public $MaxStorage;

    /**
     * @var boolean 是否可以修改路由
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanEditRoute;

    /**
     * @var string 代表是专业版和小规格专业版的不同计费规格PULSAR.P1固定存储PULSAR.P2弹性存储
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillingLabelVersion;

    /**
     * @var integer 实例到期时间戳，毫秒级精度。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var boolean 是否开启自动创建主题
true就是开启了，false是关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoCreateTopicStatus;

    /**
     * @var integer 自动创建主题的默认分区数，如果没开启就是0
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultPartitionNumber;

    /**
     * @var string 用户自定义的租户别名，如果没有，会复用专业集群 ID

     */
    public $Tenant;

    /**
     * @var integer 删除保护开关标识
     */
    public $DeleteProtection;

    /**
     * @param string $ClusterId 集群Id。
     * @param string $ClusterName 集群名称。
     * @param string $Remark 说明信息。
     * @param string $CreateTime 创建时间
     * @param integer $Status 集群状态，0:创建中，1:正常，2:隔离
     * @param string $Version 集群版本
     * @param array $NodeDistribution 节点分布情况
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxStorage 最大储存容量，单位：MB
     * @param boolean $CanEditRoute 是否可以修改路由
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BillingLabelVersion 代表是专业版和小规格专业版的不同计费规格PULSAR.P1固定存储PULSAR.P2弹性存储
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpireTime 实例到期时间戳，毫秒级精度。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AutoCreateTopicStatus 是否开启自动创建主题
true就是开启了，false是关闭
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DefaultPartitionNumber 自动创建主题的默认分区数，如果没开启就是0
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Tenant 用户自定义的租户别名，如果没有，会复用专业集群 ID

     * @param integer $DeleteProtection 删除保护开关标识
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("NodeDistribution",$param) and $param["NodeDistribution"] !== null) {
            $this->NodeDistribution = [];
            foreach ($param["NodeDistribution"] as $key => $value){
                $obj = new InstanceNodeDistribution();
                $obj->deserialize($value);
                array_push($this->NodeDistribution, $obj);
            }
        }

        if (array_key_exists("MaxStorage",$param) and $param["MaxStorage"] !== null) {
            $this->MaxStorage = $param["MaxStorage"];
        }

        if (array_key_exists("CanEditRoute",$param) and $param["CanEditRoute"] !== null) {
            $this->CanEditRoute = $param["CanEditRoute"];
        }

        if (array_key_exists("BillingLabelVersion",$param) and $param["BillingLabelVersion"] !== null) {
            $this->BillingLabelVersion = $param["BillingLabelVersion"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("AutoCreateTopicStatus",$param) and $param["AutoCreateTopicStatus"] !== null) {
            $this->AutoCreateTopicStatus = $param["AutoCreateTopicStatus"];
        }

        if (array_key_exists("DefaultPartitionNumber",$param) and $param["DefaultPartitionNumber"] !== null) {
            $this->DefaultPartitionNumber = $param["DefaultPartitionNumber"];
        }

        if (array_key_exists("Tenant",$param) and $param["Tenant"] !== null) {
            $this->Tenant = $param["Tenant"];
        }

        if (array_key_exists("DeleteProtection",$param) and $param["DeleteProtection"] !== null) {
            $this->DeleteProtection = $param["DeleteProtection"];
        }
    }
}
