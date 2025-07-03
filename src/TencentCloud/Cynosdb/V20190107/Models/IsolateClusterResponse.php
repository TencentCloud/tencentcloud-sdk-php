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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IsolateCluster返回参数结构体
 *
 * @method integer getFlowId() 获取任务流ID(后付费或者serverless资源返回，如果需要同步任务状态，请使用DescribeFlow接口)
 * @method void setFlowId(integer $FlowId) 设置任务流ID(后付费或者serverless资源返回，如果需要同步任务状态，请使用DescribeFlow接口)
 * @method array getDealNames() 获取退款订单号(预付费资源返回，如果需要同步订单状态，请使用计费产品的DescribeDealsByCond同步订单状态)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDealNames(array $DealNames) 设置退款订单号(预付费资源返回，如果需要同步订单状态，请使用计费产品的DescribeDealsByCond同步订单状态)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class IsolateClusterResponse extends AbstractModel
{
    /**
     * @var integer 任务流ID(后付费或者serverless资源返回，如果需要同步任务状态，请使用DescribeFlow接口)
     */
    public $FlowId;

    /**
     * @var array 退款订单号(预付费资源返回，如果需要同步订单状态，请使用计费产品的DescribeDealsByCond同步订单状态)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DealNames;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $FlowId 任务流ID(后付费或者serverless资源返回，如果需要同步任务状态，请使用DescribeFlow接口)
     * @param array $DealNames 退款订单号(预付费资源返回，如果需要同步订单状态，请使用计费产品的DescribeDealsByCond同步订单状态)
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("DealNames",$param) and $param["DealNames"] !== null) {
            $this->DealNames = $param["DealNames"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
