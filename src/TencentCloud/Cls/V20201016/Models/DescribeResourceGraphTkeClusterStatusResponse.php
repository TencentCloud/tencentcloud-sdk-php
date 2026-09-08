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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceGraphTkeClusterStatus返回参数结构体
 *
 * @method array getConnectedClusterInfos() 获取<p>已接入的tke集群信息</p>
 * @method void setConnectedClusterInfos(array $ConnectedClusterInfos) 设置<p>已接入的tke集群信息</p>
 * @method array getUnconnectedClusterIds() 获取<p>未接入的tke集群id</p>
 * @method void setUnconnectedClusterIds(array $UnconnectedClusterIds) 设置<p>未接入的tke集群id</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeResourceGraphTkeClusterStatusResponse extends AbstractModel
{
    /**
     * @var array <p>已接入的tke集群信息</p>
     */
    public $ConnectedClusterInfos;

    /**
     * @var array <p>未接入的tke集群id</p>
     */
    public $UnconnectedClusterIds;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $ConnectedClusterInfos <p>已接入的tke集群信息</p>
     * @param array $UnconnectedClusterIds <p>未接入的tke集群id</p>
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
        if (array_key_exists("ConnectedClusterInfos",$param) and $param["ConnectedClusterInfos"] !== null) {
            $this->ConnectedClusterInfos = [];
            foreach ($param["ConnectedClusterInfos"] as $key => $value){
                $obj = new ResourceGraphTkeClusterInfo();
                $obj->deserialize($value);
                array_push($this->ConnectedClusterInfos, $obj);
            }
        }

        if (array_key_exists("UnconnectedClusterIds",$param) and $param["UnconnectedClusterIds"] !== null) {
            $this->UnconnectedClusterIds = $param["UnconnectedClusterIds"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
