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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAvailableTKEEdgeVersion返回参数结构体
 *
 * @method array getVersions() 获取版本列表
 * @method void setVersions(array $Versions) 设置版本列表
 * @method string getEdgeVersionLatest() 获取边缘集群最新版本
 * @method void setEdgeVersionLatest(string $EdgeVersionLatest) 设置边缘集群最新版本
 * @method string getEdgeVersionCurrent() 获取边缘集群当前版本
 * @method void setEdgeVersionCurrent(string $EdgeVersionCurrent) 设置边缘集群当前版本
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAvailableTKEEdgeVersionResponse extends AbstractModel
{
    /**
     * @var array 版本列表
     */
    public $Versions;

    /**
     * @var string 边缘集群最新版本
     */
    public $EdgeVersionLatest;

    /**
     * @var string 边缘集群当前版本
     */
    public $EdgeVersionCurrent;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Versions 版本列表
     * @param string $EdgeVersionLatest 边缘集群最新版本
     * @param string $EdgeVersionCurrent 边缘集群当前版本
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
        if (array_key_exists("Versions",$param) and $param["Versions"] !== null) {
            $this->Versions = $param["Versions"];
        }

        if (array_key_exists("EdgeVersionLatest",$param) and $param["EdgeVersionLatest"] !== null) {
            $this->EdgeVersionLatest = $param["EdgeVersionLatest"];
        }

        if (array_key_exists("EdgeVersionCurrent",$param) and $param["EdgeVersionCurrent"] !== null) {
            $this->EdgeVersionCurrent = $param["EdgeVersionCurrent"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
