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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVpnGatewaySslClient返回参数结构体
 *
 * @method integer getTaskId() 获取<p>异步任务ID。</p>
 * @method void setTaskId(integer $TaskId) 设置<p>异步任务ID。</p>
 * @method string getSslVpnClientId() 获取<p>SSL VPN客户端唯一ID</p>
 * @method void setSslVpnClientId(string $SslVpnClientId) 设置<p>SSL VPN客户端唯一ID</p>
 * @method array getSslVpnClientIds() 获取<p>SSL VPN客户端唯一ID</p><p>仅批量场景返回</p>
 * @method void setSslVpnClientIds(array $SslVpnClientIds) 设置<p>SSL VPN客户端唯一ID</p><p>仅批量场景返回</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateVpnGatewaySslClientResponse extends AbstractModel
{
    /**
     * @var integer <p>异步任务ID。</p>
     */
    public $TaskId;

    /**
     * @var string <p>SSL VPN客户端唯一ID</p>
     */
    public $SslVpnClientId;

    /**
     * @var array <p>SSL VPN客户端唯一ID</p><p>仅批量场景返回</p>
     */
    public $SslVpnClientIds;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TaskId <p>异步任务ID。</p>
     * @param string $SslVpnClientId <p>SSL VPN客户端唯一ID</p>
     * @param array $SslVpnClientIds <p>SSL VPN客户端唯一ID</p><p>仅批量场景返回</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("SslVpnClientId",$param) and $param["SslVpnClientId"] !== null) {
            $this->SslVpnClientId = $param["SslVpnClientId"];
        }

        if (array_key_exists("SslVpnClientIds",$param) and $param["SslVpnClientIds"] !== null) {
            $this->SslVpnClientIds = $param["SslVpnClientIds"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
