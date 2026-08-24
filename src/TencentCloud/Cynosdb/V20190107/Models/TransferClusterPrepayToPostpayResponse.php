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
 * TransferClusterPrepayToPostpay返回参数结构体
 *
 * @method array getBigDealIds() 获取<p>预付费总订单号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBigDealIds(array $BigDealIds) 设置<p>预付费总订单号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTranId() 获取<p>冻结流水</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranId(string $TranId) 设置<p>冻结流水</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDealNames() 获取<p>订单号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDealNames(array $DealNames) 设置<p>订单号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceIds() 获取<p>资源id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceIds(array $ResourceIds) 设置<p>资源id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getClusterIds() 获取<p>集群id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterIds(array $ClusterIds) 设置<p>集群id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class TransferClusterPrepayToPostpayResponse extends AbstractModel
{
    /**
     * @var array <p>预付费总订单号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BigDealIds;

    /**
     * @var string <p>冻结流水</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranId;

    /**
     * @var array <p>订单号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DealNames;

    /**
     * @var array <p>资源id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceIds;

    /**
     * @var array <p>集群id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterIds;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $BigDealIds <p>预付费总订单号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TranId <p>冻结流水</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DealNames <p>订单号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceIds <p>资源id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ClusterIds <p>集群id</p>
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
        if (array_key_exists("BigDealIds",$param) and $param["BigDealIds"] !== null) {
            $this->BigDealIds = $param["BigDealIds"];
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
