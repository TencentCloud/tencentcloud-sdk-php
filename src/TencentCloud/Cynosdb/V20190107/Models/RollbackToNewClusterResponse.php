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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RollbackToNewCluster返回参数结构体
 *
 * @method string getTranId() 获取冻结流水ID
 * @method void setTranId(string $TranId) 设置冻结流水ID
 * @method array getDealNames() 获取订单号
 * @method void setDealNames(array $DealNames) 设置订单号
 * @method array getResourceIds() 获取资源ID列表（该字段已不再维护，请使用dealNames字段查询接口DescribeResourcesByDealName获取资源ID）
 * @method void setResourceIds(array $ResourceIds) 设置资源ID列表（该字段已不再维护，请使用dealNames字段查询接口DescribeResourcesByDealName获取资源ID）
 * @method array getClusterIds() 获取集群ID列表（该字段已不再维护，请使用dealNames字段查询接口DescribeResourcesByDealName获取集群ID）
 * @method void setClusterIds(array $ClusterIds) 设置集群ID列表（该字段已不再维护，请使用dealNames字段查询接口DescribeResourcesByDealName获取集群ID）
 * @method array getBigDealIds() 获取大订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBigDealIds(array $BigDealIds) 设置大订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class RollbackToNewClusterResponse extends AbstractModel
{
    /**
     * @var string 冻结流水ID
     */
    public $TranId;

    /**
     * @var array 订单号
     */
    public $DealNames;

    /**
     * @var array 资源ID列表（该字段已不再维护，请使用dealNames字段查询接口DescribeResourcesByDealName获取资源ID）
     */
    public $ResourceIds;

    /**
     * @var array 集群ID列表（该字段已不再维护，请使用dealNames字段查询接口DescribeResourcesByDealName获取集群ID）
     */
    public $ClusterIds;

    /**
     * @var array 大订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BigDealIds;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TranId 冻结流水ID
     * @param array $DealNames 订单号
     * @param array $ResourceIds 资源ID列表（该字段已不再维护，请使用dealNames字段查询接口DescribeResourcesByDealName获取资源ID）
     * @param array $ClusterIds 集群ID列表（该字段已不再维护，请使用dealNames字段查询接口DescribeResourcesByDealName获取集群ID）
     * @param array $BigDealIds 大订单号
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TranId",$param) and $param["TranId"] !== null) {
            $this->TranId = $param["TranId"];
        }

        if (array_key_exists("DealNames",$param) and $param["DealNames"] !== null) {
            $this->DealNames = $param["DealNames"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("BigDealIds",$param) and $param["BigDealIds"] !== null) {
            $this->BigDealIds = $param["BigDealIds"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
