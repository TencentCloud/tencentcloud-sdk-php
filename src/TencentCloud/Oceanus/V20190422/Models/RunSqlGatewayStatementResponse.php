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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RunSqlGatewayStatement返回参数结构体
 *
 * @method array getErrorMessage() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(array $ErrorMessage) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionId() 获取会话id，若入参未传，则返回自动创建的会话id，若入参已经传递，则返回值与原传入值一致
 * @method void setSessionId(string $SessionId) 设置会话id，若入参未传，则返回自动创建的会话id，若入参已经传递，则返回值与原传入值一致
 * @method string getOperationHandleId() 获取返回执行id，可以根据该执行id和会话id获取执行结果
 * @method void setOperationHandleId(string $OperationHandleId) 设置返回执行id，可以根据该执行id和会话id获取执行结果
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class RunSqlGatewayStatementResponse extends AbstractModel
{
    /**
     * @var array 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @var string 会话id，若入参未传，则返回自动创建的会话id，若入参已经传递，则返回值与原传入值一致
     */
    public $SessionId;

    /**
     * @var string 返回执行id，可以根据该执行id和会话id获取执行结果
     */
    public $OperationHandleId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $ErrorMessage 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionId 会话id，若入参未传，则返回自动创建的会话id，若入参已经传递，则返回值与原传入值一致
     * @param string $OperationHandleId 返回执行id，可以根据该执行id和会话id获取执行结果
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
        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("OperationHandleId",$param) and $param["OperationHandleId"] !== null) {
            $this->OperationHandleId = $param["OperationHandleId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
