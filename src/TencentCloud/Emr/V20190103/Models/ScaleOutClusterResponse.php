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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScaleOutCluster返回参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID。</p>
 * @method string getClientToken() 获取<p>客户端Token。</p>
 * @method void setClientToken(string $ClientToken) 设置<p>客户端Token。</p>
 * @method integer getFlowId() 获取<p>扩容流程ID。</p>
 * @method void setFlowId(integer $FlowId) 设置<p>扩容流程ID。</p>
 * @method string getTraceId() 获取<p>查询流程状态，流程额外信息</p>
 * @method void setTraceId(string $TraceId) 设置<p>查询流程状态，流程额外信息</p>
 * @method array getDealNames() 获取<p>订单号。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDealNames(array $DealNames) 设置<p>订单号。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBillId() 获取<p>大订单号。</p>
 * @method void setBillId(string $BillId) 设置<p>大订单号。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ScaleOutClusterResponse extends AbstractModel
{
    /**
     * @var string <p>实例ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>客户端Token。</p>
     */
    public $ClientToken;

    /**
     * @var integer <p>扩容流程ID。</p>
     */
    public $FlowId;

    /**
     * @var string <p>查询流程状态，流程额外信息</p>
     */
    public $TraceId;

    /**
     * @var array <p>订单号。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DealNames;

    /**
     * @var string <p>大订单号。</p>
     */
    public $BillId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceId <p>实例ID。</p>
     * @param string $ClientToken <p>客户端Token。</p>
     * @param integer $FlowId <p>扩容流程ID。</p>
     * @param string $TraceId <p>查询流程状态，流程额外信息</p>
     * @param array $DealNames <p>订单号。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BillId <p>大订单号。</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("TraceId",$param) and $param["TraceId"] !== null) {
            $this->TraceId = $param["TraceId"];
        }

        if (array_key_exists("DealNames",$param) and $param["DealNames"] !== null) {
            $this->DealNames = $param["DealNames"];
        }

        if (array_key_exists("BillId",$param) and $param["BillId"] !== null) {
            $this->BillId = $param["BillId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
