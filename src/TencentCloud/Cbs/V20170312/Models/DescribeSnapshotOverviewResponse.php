<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSnapshotOverview返回参数结构体
 *
 * @method integer getTotalNums() 获取当前总有效快照数量
 * @method void setTotalNums(integer $TotalNums) 设置当前总有效快照数量
 * @method float getTotalSize() 获取已使用快照总容量大小，容量单位为GiB
 * @method void setTotalSize(float $TotalSize) 设置已使用快照总容量大小，容量单位为GiB
 * @method float getFreeQuota() 获取快照免费额度大小，额度单位为GiB
 * @method void setFreeQuota(float $FreeQuota) 设置快照免费额度大小，额度单位为GiB
 * @method float getRealTradeSize() 获取快照真实产生计费的总容量大小，单位为GiB
 * @method void setRealTradeSize(float $RealTradeSize) 设置快照真实产生计费的总容量大小，单位为GiB
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSnapshotOverviewResponse extends AbstractModel
{
    /**
     * @var integer 当前总有效快照数量
     */
    public $TotalNums;

    /**
     * @var float 已使用快照总容量大小，容量单位为GiB
     */
    public $TotalSize;

    /**
     * @var float 快照免费额度大小，额度单位为GiB
     */
    public $FreeQuota;

    /**
     * @var float 快照真实产生计费的总容量大小，单位为GiB
     */
    public $RealTradeSize;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalNums 当前总有效快照数量
     * @param float $TotalSize 已使用快照总容量大小，容量单位为GiB
     * @param float $FreeQuota 快照免费额度大小，额度单位为GiB
     * @param float $RealTradeSize 快照真实产生计费的总容量大小，单位为GiB
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
        if (array_key_exists("TotalNums",$param) and $param["TotalNums"] !== null) {
            $this->TotalNums = $param["TotalNums"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }

        if (array_key_exists("FreeQuota",$param) and $param["FreeQuota"] !== null) {
            $this->FreeQuota = $param["FreeQuota"];
        }

        if (array_key_exists("RealTradeSize",$param) and $param["RealTradeSize"] !== null) {
            $this->RealTradeSize = $param["RealTradeSize"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
