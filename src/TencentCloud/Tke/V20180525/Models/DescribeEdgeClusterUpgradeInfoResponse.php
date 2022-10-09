<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEdgeClusterUpgradeInfo返回参数结构体
 *
 * @method string getComponentVersion() 获取可升级的集群组件和
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComponentVersion(string $ComponentVersion) 设置可升级的集群组件和
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEdgeVersionCurrent() 获取边缘集群当前版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEdgeVersionCurrent(string $EdgeVersionCurrent) 设置边缘集群当前版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegistryPrefix() 获取边缘组件镜像仓库地址前缀，包含域名和命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegistryPrefix(string $RegistryPrefix) 设置边缘组件镜像仓库地址前缀，包含域名和命名空间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterUpgradeStatus() 获取集群升级状态，可能值：running、updating、failed
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterUpgradeStatus(string $ClusterUpgradeStatus) 设置集群升级状态，可能值：running、updating、failed
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterUpgradeStatusReason() 获取集群升级中状态或者失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterUpgradeStatusReason(string $ClusterUpgradeStatusReason) 设置集群升级中状态或者失败原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeEdgeClusterUpgradeInfoResponse extends AbstractModel
{
    /**
     * @var string 可升级的集群组件和
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComponentVersion;

    /**
     * @var string 边缘集群当前版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EdgeVersionCurrent;

    /**
     * @var string 边缘组件镜像仓库地址前缀，包含域名和命名空间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegistryPrefix;

    /**
     * @var string 集群升级状态，可能值：running、updating、failed
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterUpgradeStatus;

    /**
     * @var string 集群升级中状态或者失败原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterUpgradeStatusReason;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ComponentVersion 可升级的集群组件和
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EdgeVersionCurrent 边缘集群当前版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegistryPrefix 边缘组件镜像仓库地址前缀，包含域名和命名空间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterUpgradeStatus 集群升级状态，可能值：running、updating、failed
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterUpgradeStatusReason 集群升级中状态或者失败原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ComponentVersion",$param) and $param["ComponentVersion"] !== null) {
            $this->ComponentVersion = $param["ComponentVersion"];
        }

        if (array_key_exists("EdgeVersionCurrent",$param) and $param["EdgeVersionCurrent"] !== null) {
            $this->EdgeVersionCurrent = $param["EdgeVersionCurrent"];
        }

        if (array_key_exists("RegistryPrefix",$param) and $param["RegistryPrefix"] !== null) {
            $this->RegistryPrefix = $param["RegistryPrefix"];
        }

        if (array_key_exists("ClusterUpgradeStatus",$param) and $param["ClusterUpgradeStatus"] !== null) {
            $this->ClusterUpgradeStatus = $param["ClusterUpgradeStatus"];
        }

        if (array_key_exists("ClusterUpgradeStatusReason",$param) and $param["ClusterUpgradeStatusReason"] !== null) {
            $this->ClusterUpgradeStatusReason = $param["ClusterUpgradeStatusReason"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
