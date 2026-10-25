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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateService返回参数结构体
 *
 * @method string getResourceId() 获取<p>义SSM 服务资源 ID，供调用方保存并标识该服务资源。</p><p>参数格式：一期后付费为 ssm_ 加 AppId，如 ssm_1250000000。</p><p>默认值：留空。</p><p>返回时资源可能仍在发货，不代表服务已可用。</p>
 * @method void setResourceId(string $ResourceId) 设置<p>义SSM 服务资源 ID，供调用方保存并标识该服务资源。</p><p>参数格式：一期后付费为 ssm_ 加 AppId，如 ssm_1250000000。</p><p>默认值：留空。</p><p>返回时资源可能仍在发货，不代表服务已可用。</p>
 * @method string getOrderId() 获取<p>计费交易订单号，用于核对本次开通订单</p><p>参数格式：留空；不承诺固定长度或纯数字格式。</p><p>默认值：留空。</p><p>来自计费返回的订单号；订单形成不代表发货完成。</p>
 * @method void setOrderId(string $OrderId) 设置<p>计费交易订单号，用于核对本次开通订单</p><p>参数格式：留空；不承诺固定长度或纯数字格式。</p><p>默认值：留空。</p><p>来自计费返回的订单号；订单形成不代表发货完成。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateServiceResponse extends AbstractModel
{
    /**
     * @var string <p>义SSM 服务资源 ID，供调用方保存并标识该服务资源。</p><p>参数格式：一期后付费为 ssm_ 加 AppId，如 ssm_1250000000。</p><p>默认值：留空。</p><p>返回时资源可能仍在发货，不代表服务已可用。</p>
     */
    public $ResourceId;

    /**
     * @var string <p>计费交易订单号，用于核对本次开通订单</p><p>参数格式：留空；不承诺固定长度或纯数字格式。</p><p>默认值：留空。</p><p>来自计费返回的订单号；订单形成不代表发货完成。</p>
     */
    public $OrderId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ResourceId <p>义SSM 服务资源 ID，供调用方保存并标识该服务资源。</p><p>参数格式：一期后付费为 ssm_ 加 AppId，如 ssm_1250000000。</p><p>默认值：留空。</p><p>返回时资源可能仍在发货，不代表服务已可用。</p>
     * @param string $OrderId <p>计费交易订单号，用于核对本次开通订单</p><p>参数格式：留空；不承诺固定长度或纯数字格式。</p><p>默认值：留空。</p><p>来自计费返回的订单号；订单形成不代表发货完成。</p>
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
