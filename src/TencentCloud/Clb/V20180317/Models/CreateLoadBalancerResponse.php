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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLoadBalancer返回参数结构体
 *
 * @method array getLoadBalancerIds() 获取由负载均衡实例唯一 ID 组成的数组。
存在某些场景，如创建出现延迟时，此字段可能返回为空；此时可以根据接口返回的RequestId或DealName参数，通过DescribeTaskStatus接口查询创建的资源ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerIds(array $LoadBalancerIds) 设置由负载均衡实例唯一 ID 组成的数组。
存在某些场景，如创建出现延迟时，此字段可能返回为空；此时可以根据接口返回的RequestId或DealName参数，通过DescribeTaskStatus接口查询创建的资源ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDealName() 获取订单号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDealName(string $DealName) 设置订单号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateLoadBalancerResponse extends AbstractModel
{
    /**
     * @var array 由负载均衡实例唯一 ID 组成的数组。
存在某些场景，如创建出现延迟时，此字段可能返回为空；此时可以根据接口返回的RequestId或DealName参数，通过DescribeTaskStatus接口查询创建的资源ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerIds;

    /**
     * @var string 订单号。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DealName;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $LoadBalancerIds 由负载均衡实例唯一 ID 组成的数组。
存在某些场景，如创建出现延迟时，此字段可能返回为空；此时可以根据接口返回的RequestId或DealName参数，通过DescribeTaskStatus接口查询创建的资源ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DealName 订单号。
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
        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }

        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
