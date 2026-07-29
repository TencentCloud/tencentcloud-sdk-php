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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DB Custom 集群内节点资源信息。
 *
 * @method string getNodeId() 获取<p>节点ID</p>
 * @method void setNodeId(string $NodeId) 设置<p>节点ID</p>
 * @method MetaResource getCapacity() 获取<p>节点物理资源总容量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCapacity(MetaResource $Capacity) 设置<p>节点物理资源总容量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MetaResource getAllocatable() 获取<p>节点可分配容量= Capacity - 系统预留</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllocatable(MetaResource $Allocatable) 设置<p>节点可分配容量= Capacity - 系统预留</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MetaResource getRequests() 获取<p>节点上所有非终态 Pod 的 requests 申请量之和（含系统 Pod）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequests(MetaResource $Requests) 设置<p>节点上所有非终态 Pod 的 requests 申请量之和（含系统 Pod）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MetaResource getLimits() 获取<p>节点上所有非终态 Pod 的 limits 上限之和（含系统 Pod）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLimits(MetaResource $Limits) 设置<p>节点上所有非终态 Pod 的 limits 上限之和（含系统 Pod）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MetaResource getAvailable() 获取<p>节点可再调度余量 = max(0, Allocatable - Requests)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailable(MetaResource $Available) 设置<p>节点可再调度余量 = max(0, Allocatable - Requests)</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DBCustomClusterNodeResource extends AbstractModel
{
    /**
     * @var string <p>节点ID</p>
     */
    public $NodeId;

    /**
     * @var MetaResource <p>节点物理资源总容量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Capacity;

    /**
     * @var MetaResource <p>节点可分配容量= Capacity - 系统预留</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Allocatable;

    /**
     * @var MetaResource <p>节点上所有非终态 Pod 的 requests 申请量之和（含系统 Pod）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Requests;

    /**
     * @var MetaResource <p>节点上所有非终态 Pod 的 limits 上限之和（含系统 Pod）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Limits;

    /**
     * @var MetaResource <p>节点可再调度余量 = max(0, Allocatable - Requests)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Available;

    /**
     * @param string $NodeId <p>节点ID</p>
     * @param MetaResource $Capacity <p>节点物理资源总容量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MetaResource $Allocatable <p>节点可分配容量= Capacity - 系统预留</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MetaResource $Requests <p>节点上所有非终态 Pod 的 requests 申请量之和（含系统 Pod）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MetaResource $Limits <p>节点上所有非终态 Pod 的 limits 上限之和（含系统 Pod）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MetaResource $Available <p>节点可再调度余量 = max(0, Allocatable - Requests)</p>
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("Capacity",$param) and $param["Capacity"] !== null) {
            $this->Capacity = new MetaResource();
            $this->Capacity->deserialize($param["Capacity"]);
        }

        if (array_key_exists("Allocatable",$param) and $param["Allocatable"] !== null) {
            $this->Allocatable = new MetaResource();
            $this->Allocatable->deserialize($param["Allocatable"]);
        }

        if (array_key_exists("Requests",$param) and $param["Requests"] !== null) {
            $this->Requests = new MetaResource();
            $this->Requests->deserialize($param["Requests"]);
        }

        if (array_key_exists("Limits",$param) and $param["Limits"] !== null) {
            $this->Limits = new MetaResource();
            $this->Limits->deserialize($param["Limits"]);
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = new MetaResource();
            $this->Available->deserialize($param["Available"]);
        }
    }
}
