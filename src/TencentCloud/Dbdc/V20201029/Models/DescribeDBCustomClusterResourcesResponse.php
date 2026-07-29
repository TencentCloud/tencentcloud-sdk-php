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
 * DescribeDBCustomClusterResources返回参数结构体
 *
 * @method integer getNodeCount() 获取<p>参与汇总的工作节点总数（不含控制面节点）</p><p>单位：台</p>
 * @method void setNodeCount(integer $NodeCount) 设置<p>参与汇总的工作节点总数（不含控制面节点）</p><p>单位：台</p>
 * @method MetaResource getCapacity() 获取<p>集群所有节点的资源物理总容量之和</p>
 * @method void setCapacity(MetaResource $Capacity) 设置<p>集群所有节点的资源物理总容量之和</p>
 * @method MetaResource getAllocatable() 获取<p>集群所有节点的可分配容量之和（= Capacity - 系统预留）</p>
 * @method void setAllocatable(MetaResource $Allocatable) 设置<p>集群所有节点的可分配容量之和（= Capacity - 系统预留）</p>
 * @method MetaResource getRequests() 获取<p>集群所有非终态 Pod 的 requests 申请量之和（含系统 Pod）</p>
 * @method void setRequests(MetaResource $Requests) 设置<p>集群所有非终态 Pod 的 requests 申请量之和（含系统 Pod）</p>
 * @method MetaResource getLimits() 获取<p>集群所有非终态 Pod 的 limits 上限之和（含系统 Pod，Pods 字段无语义，固定为 0）</p>
 * @method void setLimits(MetaResource $Limits) 设置<p>集群所有非终态 Pod 的 limits 上限之和（含系统 Pod，Pods 字段无语义，固定为 0）</p>
 * @method MetaResource getAvailable() 获取<p>集群可再调度余量（所有节点 max(0, Allocatable - Requests) 累加求和）</p>
 * @method void setAvailable(MetaResource $Available) 设置<p>集群可再调度余量（所有节点 max(0, Allocatable - Requests) 累加求和）</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBCustomClusterResourcesResponse extends AbstractModel
{
    /**
     * @var integer <p>参与汇总的工作节点总数（不含控制面节点）</p><p>单位：台</p>
     */
    public $NodeCount;

    /**
     * @var MetaResource <p>集群所有节点的资源物理总容量之和</p>
     */
    public $Capacity;

    /**
     * @var MetaResource <p>集群所有节点的可分配容量之和（= Capacity - 系统预留）</p>
     */
    public $Allocatable;

    /**
     * @var MetaResource <p>集群所有非终态 Pod 的 requests 申请量之和（含系统 Pod）</p>
     */
    public $Requests;

    /**
     * @var MetaResource <p>集群所有非终态 Pod 的 limits 上限之和（含系统 Pod，Pods 字段无语义，固定为 0）</p>
     */
    public $Limits;

    /**
     * @var MetaResource <p>集群可再调度余量（所有节点 max(0, Allocatable - Requests) 累加求和）</p>
     */
    public $Available;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $NodeCount <p>参与汇总的工作节点总数（不含控制面节点）</p><p>单位：台</p>
     * @param MetaResource $Capacity <p>集群所有节点的资源物理总容量之和</p>
     * @param MetaResource $Allocatable <p>集群所有节点的可分配容量之和（= Capacity - 系统预留）</p>
     * @param MetaResource $Requests <p>集群所有非终态 Pod 的 requests 申请量之和（含系统 Pod）</p>
     * @param MetaResource $Limits <p>集群所有非终态 Pod 的 limits 上限之和（含系统 Pod，Pods 字段无语义，固定为 0）</p>
     * @param MetaResource $Available <p>集群可再调度余量（所有节点 max(0, Allocatable - Requests) 累加求和）</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
