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
 * @method string getClusterId() 获取<p>集群Id。</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群Id。</p>
 * @method string getClusterName() 获取<p>集群名称。</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称。</p>
 * @method string getRemark() 获取<p>说明信息。</p>
 * @method void setRemark(string $Remark) 设置<p>说明信息。</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method integer getStatus() 获取<p>集群状态，0:创建中，1:正常，2:隔离</p>
 * @method void setStatus(integer $Status) 设置<p>集群状态，0:创建中，1:正常，2:隔离</p>
 * @method string getVersion() 获取<p>集群版本</p>
 * @method void setVersion(string $Version) 设置<p>集群版本</p>
 * @method array getNodeDistribution() 获取<p>节点分布情况</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeDistribution(array $NodeDistribution) 设置<p>节点分布情况</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxStorage() 获取<p>最大储存容量，单位：MB</p>
 * @method void setMaxStorage(integer $MaxStorage) 设置<p>最大储存容量，单位：MB</p>
 * @method boolean getCanEditRoute() 获取<p>是否可以修改路由</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanEditRoute(boolean $CanEditRoute) 设置<p>是否可以修改路由</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBillingLabelVersion() 获取<p>代表是专业版和小规格专业版的不同计费规格PULSAR.P1固定存储PULSAR.P2弹性存储</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillingLabelVersion(string $BillingLabelVersion) 设置<p>代表是专业版和小规格专业版的不同计费规格PULSAR.P1固定存储PULSAR.P2弹性存储</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpireTime() 获取<p>实例到期时间戳，毫秒级精度。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(integer $ExpireTime) 设置<p>实例到期时间戳，毫秒级精度。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAutoCreateTopicStatus() 获取<p>是否开启自动创建主题<br>true就是开启了，false是关闭</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoCreateTopicStatus(boolean $AutoCreateTopicStatus) 设置<p>是否开启自动创建主题<br>true就是开启了，false是关闭</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDefaultPartitionNumber() 获取<p>自动创建主题的默认分区数，如果没开启就是0</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultPartitionNumber(integer $DefaultPartitionNumber) 设置<p>自动创建主题的默认分区数，如果没开启就是0</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTenant() 获取<p>用户自定义的租户别名，如果没有，会复用专业集群 ID</p>
 * @method void setTenant(string $Tenant) 设置<p>用户自定义的租户别名，如果没有，会复用专业集群 ID</p>
 * @method integer getDeleteProtection() 获取<p>删除保护开关标识</p>
 * @method void setDeleteProtection(integer $DeleteProtection) 设置<p>删除保护开关标识</p>
 * @method integer getElasticTpsEnabled() 获取<p>是否开启弹性tps</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul>
 * @method void setElasticTpsEnabled(integer $ElasticTpsEnabled) 设置<p>是否开启弹性tps</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul>
 * @method integer getEncryptionStatus() 获取<p>是否开启数据加密</p><p>枚举值：</p><ul><li>0： 关闭数据加密</li><li>1： 开启数据加密</li></ul>
 * @method void setEncryptionStatus(integer $EncryptionStatus) 设置<p>是否开启数据加密</p><p>枚举值：</p><ul><li>0： 关闭数据加密</li><li>1： 开启数据加密</li></ul>
 */
class PulsarProClusterInfo extends AbstractModel
{
    /**
     * @var string <p>集群Id。</p>
     */
    public $ClusterId;

    /**
     * @var string <p>集群名称。</p>
     */
    public $ClusterName;

    /**
     * @var string <p>说明信息。</p>
     */
    public $Remark;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>集群状态，0:创建中，1:正常，2:隔离</p>
     */
    public $Status;

    /**
     * @var string <p>集群版本</p>
     */
    public $Version;

    /**
     * @var array <p>节点分布情况</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeDistribution;

    /**
     * @var integer <p>最大储存容量，单位：MB</p>
     */
    public $MaxStorage;

    /**
     * @var boolean <p>是否可以修改路由</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanEditRoute;

    /**
     * @var string <p>代表是专业版和小规格专业版的不同计费规格PULSAR.P1固定存储PULSAR.P2弹性存储</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillingLabelVersion;

    /**
     * @var integer <p>实例到期时间戳，毫秒级精度。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var boolean <p>是否开启自动创建主题<br>true就是开启了，false是关闭</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoCreateTopicStatus;

    /**
     * @var integer <p>自动创建主题的默认分区数，如果没开启就是0</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultPartitionNumber;

    /**
     * @var string <p>用户自定义的租户别名，如果没有，会复用专业集群 ID</p>
     */
    public $Tenant;

    /**
     * @var integer <p>删除保护开关标识</p>
     */
    public $DeleteProtection;

    /**
     * @var integer <p>是否开启弹性tps</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul>
     */
    public $ElasticTpsEnabled;

    /**
     * @var integer <p>是否开启数据加密</p><p>枚举值：</p><ul><li>0： 关闭数据加密</li><li>1： 开启数据加密</li></ul>
     */
    public $EncryptionStatus;

    /**
     * @param string $ClusterId <p>集群Id。</p>
     * @param string $ClusterName <p>集群名称。</p>
     * @param string $Remark <p>说明信息。</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param integer $Status <p>集群状态，0:创建中，1:正常，2:隔离</p>
     * @param string $Version <p>集群版本</p>
     * @param array $NodeDistribution <p>节点分布情况</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxStorage <p>最大储存容量，单位：MB</p>
     * @param boolean $CanEditRoute <p>是否可以修改路由</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BillingLabelVersion <p>代表是专业版和小规格专业版的不同计费规格PULSAR.P1固定存储PULSAR.P2弹性存储</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpireTime <p>实例到期时间戳，毫秒级精度。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AutoCreateTopicStatus <p>是否开启自动创建主题<br>true就是开启了，false是关闭</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DefaultPartitionNumber <p>自动创建主题的默认分区数，如果没开启就是0</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Tenant <p>用户自定义的租户别名，如果没有，会复用专业集群 ID</p>
     * @param integer $DeleteProtection <p>删除保护开关标识</p>
     * @param integer $ElasticTpsEnabled <p>是否开启弹性tps</p><p>枚举值：</p><ul><li>0： 关闭</li><li>1： 开启</li></ul>
     * @param integer $EncryptionStatus <p>是否开启数据加密</p><p>枚举值：</p><ul><li>0： 关闭数据加密</li><li>1： 开启数据加密</li></ul>
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

        if (array_key_exists("ElasticTpsEnabled",$param) and $param["ElasticTpsEnabled"] !== null) {
            $this->ElasticTpsEnabled = $param["ElasticTpsEnabled"];
        }

        if (array_key_exists("EncryptionStatus",$param) and $param["EncryptionStatus"] !== null) {
            $this->EncryptionStatus = $param["EncryptionStatus"];
        }
    }
}
