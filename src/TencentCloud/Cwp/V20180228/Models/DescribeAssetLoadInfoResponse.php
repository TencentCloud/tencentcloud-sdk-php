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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetLoadInfo返回参数结构体
 *
 * @method AssetLoadSummary getCpuLoad() 获取系统负载
 * @method void setCpuLoad(AssetLoadSummary $CpuLoad) 设置系统负载
 * @method AssetLoadSummary getMemLoad() 获取内存使用率
 * @method void setMemLoad(AssetLoadSummary $MemLoad) 设置内存使用率
 * @method AssetLoadSummary getDiskLoad() 获取硬盘使用率
 * @method void setDiskLoad(AssetLoadSummary $DiskLoad) 设置硬盘使用率
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetLoadInfoResponse extends AbstractModel
{
    /**
     * @var AssetLoadSummary 系统负载
     */
    public $CpuLoad;

    /**
     * @var AssetLoadSummary 内存使用率
     */
    public $MemLoad;

    /**
     * @var AssetLoadSummary 硬盘使用率
     */
    public $DiskLoad;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param AssetLoadSummary $CpuLoad 系统负载
     * @param AssetLoadSummary $MemLoad 内存使用率
     * @param AssetLoadSummary $DiskLoad 硬盘使用率
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
        if (array_key_exists("CpuLoad",$param) and $param["CpuLoad"] !== null) {
            $this->CpuLoad = new AssetLoadSummary();
            $this->CpuLoad->deserialize($param["CpuLoad"]);
        }

        if (array_key_exists("MemLoad",$param) and $param["MemLoad"] !== null) {
            $this->MemLoad = new AssetLoadSummary();
            $this->MemLoad->deserialize($param["MemLoad"]);
        }

        if (array_key_exists("DiskLoad",$param) and $param["DiskLoad"] !== null) {
            $this->DiskLoad = new AssetLoadSummary();
            $this->DiskLoad->deserialize($param["DiskLoad"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
