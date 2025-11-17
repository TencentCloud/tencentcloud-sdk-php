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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群信息结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getClusterDescription() 获取集群描述
 * @method void setClusterDescription(string $ClusterDescription) 设置集群描述
 * @method string getClusterVersion() 获取集群版本（默认值为1.10.5）
 * @method void setClusterVersion(string $ClusterVersion) 设置集群版本（默认值为1.10.5）
 * @method string getClusterType() 获取集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。
 * @method void setClusterType(string $ClusterType) 设置集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。
 * @method array getTagSpecification() 获取标签描述列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagSpecification(array $TagSpecification) 设置标签描述列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterStatus() 获取集群状态 (Trading 集群开通中,Creating 创建中,Running 运行中,Deleting 删除中,Idling 闲置中,Recovering 唤醒中,Upgrading 升级中,NodeUpgrading 节点升级中,RuntimeUpgrading 节点运行时升级中,MasterScaling Master扩缩容中,ClusterLevelUpgrading 调整规格中,ResourceIsolate 欠费隔离中,ResourceIsolated 欠费已隔离,ResourceReverse 冲正恢复中,Abnormal 异常)
 * @method void setClusterStatus(string $ClusterStatus) 设置集群状态 (Trading 集群开通中,Creating 创建中,Running 运行中,Deleting 删除中,Idling 闲置中,Recovering 唤醒中,Upgrading 升级中,NodeUpgrading 节点升级中,RuntimeUpgrading 节点运行时升级中,MasterScaling Master扩缩容中,ClusterLevelUpgrading 调整规格中,ResourceIsolate 欠费隔离中,ResourceIsolated 欠费已隔离,ResourceReverse 冲正恢复中,Abnormal 异常)
 * @method string getCreatedTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterLevel() 获取集群等级，针对托管集群生效
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterLevel(string $ClusterLevel) 设置集群等级，针对托管集群生效
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取集群所在vpc的id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置集群所在vpc的id
注意：此字段可能返回 null，表示取不到有效值。
 */
class Cluster extends AbstractModel
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
     * @var string 集群描述
     */
    public $ClusterDescription;

    /**
     * @var string 集群版本（默认值为1.10.5）
     */
    public $ClusterVersion;

    /**
     * @var string 集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。
     */
    public $ClusterType;

    /**
     * @var array 标签描述列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagSpecification;

    /**
     * @var string 集群状态 (Trading 集群开通中,Creating 创建中,Running 运行中,Deleting 删除中,Idling 闲置中,Recovering 唤醒中,Upgrading 升级中,NodeUpgrading 节点升级中,RuntimeUpgrading 节点运行时升级中,MasterScaling Master扩缩容中,ClusterLevelUpgrading 调整规格中,ResourceIsolate 欠费隔离中,ResourceIsolated 欠费已隔离,ResourceReverse 冲正恢复中,Abnormal 异常)
     */
    public $ClusterStatus;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 集群等级，针对托管集群生效
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterLevel;

    /**
     * @var string 集群所在vpc的id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @param string $ClusterId 集群ID
     * @param string $ClusterName 集群名称
     * @param string $ClusterDescription 集群描述
     * @param string $ClusterVersion 集群版本（默认值为1.10.5）
     * @param string $ClusterType 集群类型，托管集群：MANAGED_CLUSTER，独立集群：INDEPENDENT_CLUSTER。
     * @param array $TagSpecification 标签描述列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterStatus 集群状态 (Trading 集群开通中,Creating 创建中,Running 运行中,Deleting 删除中,Idling 闲置中,Recovering 唤醒中,Upgrading 升级中,NodeUpgrading 节点升级中,RuntimeUpgrading 节点运行时升级中,MasterScaling Master扩缩容中,ClusterLevelUpgrading 调整规格中,ResourceIsolate 欠费隔离中,ResourceIsolated 欠费已隔离,ResourceReverse 冲正恢复中,Abnormal 异常)
     * @param string $CreatedTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterLevel 集群等级，针对托管集群生效
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 集群所在vpc的id
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

        if (array_key_exists("ClusterDescription",$param) and $param["ClusterDescription"] !== null) {
            $this->ClusterDescription = $param["ClusterDescription"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ClusterLevel",$param) and $param["ClusterLevel"] !== null) {
            $this->ClusterLevel = $param["ClusterLevel"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }
    }
}
