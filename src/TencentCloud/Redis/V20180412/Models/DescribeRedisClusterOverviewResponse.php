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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRedisClusterOverview返回参数结构体
 *
 * @method integer getTotalBundle() 获取资源包总数
 * @method void setTotalBundle(integer $TotalBundle) 设置资源包总数
 * @method integer getTotalMemory() 获取资源包总内存大小，单位：GB
 * @method void setTotalMemory(integer $TotalMemory) 设置资源包总内存大小，单位：GB
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRedisClusterOverviewResponse extends AbstractModel
{
    /**
     * @var integer 资源包总数
     */
    public $TotalBundle;

    /**
     * @var integer 资源包总内存大小，单位：GB
     */
    public $TotalMemory;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalBundle 资源包总数
     * @param integer $TotalMemory 资源包总内存大小，单位：GB
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
        if (array_key_exists("TotalBundle",$param) and $param["TotalBundle"] !== null) {
            $this->TotalBundle = $param["TotalBundle"];
        }

        if (array_key_exists("TotalMemory",$param) and $param["TotalMemory"] !== null) {
            $this->TotalMemory = $param["TotalMemory"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
