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
namespace TencentCloud\Tbaas\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryFabricChaincode返回参数结构体
 *
 * @method string getTxId() 获取交易ID
 * @method void setTxId(string $TxId) 设置交易ID
 * @method string getTxStatus() 获取交易状态
 * @method void setTxStatus(string $TxStatus) 设置交易状态
 * @method string getTxResult() 获取交易结果
 * @method void setTxResult(string $TxResult) 设置交易结果
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class QueryFabricChaincodeResponse extends AbstractModel
{
    /**
     * @var string 交易ID
     */
    public $TxId;

    /**
     * @var string 交易状态
     */
    public $TxStatus;

    /**
     * @var string 交易结果
     */
    public $TxResult;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TxId 交易ID
     * @param string $TxStatus 交易状态
     * @param string $TxResult 交易结果
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
        if (array_key_exists("TxId",$param) and $param["TxId"] !== null) {
            $this->TxId = $param["TxId"];
        }

        if (array_key_exists("TxStatus",$param) and $param["TxStatus"] !== null) {
            $this->TxStatus = $param["TxStatus"];
        }

        if (array_key_exists("TxResult",$param) and $param["TxResult"] !== null) {
            $this->TxResult = $param["TxResult"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
