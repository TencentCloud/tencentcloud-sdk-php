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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RunCommand返回参数结构体
 *
 * @method string getInvokeId() 获取<p>本次任务对应的任务ID。方便异步查询执行状态。</p>
 * @method void setInvokeId(string $InvokeId) 设置<p>本次任务对应的任务ID。方便异步查询执行状态。</p>
 * @method Invocation getDetail() 获取<p>执行详细情况。WaitUntilDone为true，在接口返回时的执行状态。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetail(Invocation $Detail) 设置<p>执行详细情况。WaitUntilDone为true，在接口返回时的执行状态。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class RunCommandResponse extends AbstractModel
{
    /**
     * @var string <p>本次任务对应的任务ID。方便异步查询执行状态。</p>
     */
    public $InvokeId;

    /**
     * @var Invocation <p>执行详细情况。WaitUntilDone为true，在接口返回时的执行状态。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Detail;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InvokeId <p>本次任务对应的任务ID。方便异步查询执行状态。</p>
     * @param Invocation $Detail <p>执行详细情况。WaitUntilDone为true，在接口返回时的执行状态。</p>
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
        if (array_key_exists("InvokeId",$param) and $param["InvokeId"] !== null) {
            $this->InvokeId = $param["InvokeId"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = new Invocation();
            $this->Detail->deserialize($param["Detail"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
