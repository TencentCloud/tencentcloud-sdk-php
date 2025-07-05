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
 * SyncMachines返回参数结构体
 *
 * @method string getState() 获取枚举值有(大写)：NOTASK（没有同步任务），SYNCING（同步中），FINISHED（同步完成）
 * @method void setState(string $State) 设置枚举值有(大写)：NOTASK（没有同步任务），SYNCING（同步中），FINISHED（同步完成）
 * @method string getLatestStartTime() 获取最新开始同步时间
 * @method void setLatestStartTime(string $LatestStartTime) 设置最新开始同步时间
 * @method string getLatestEndTime() 获取最新同步结束时间
 * @method void setLatestEndTime(string $LatestEndTime) 设置最新同步结束时间
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class SyncMachinesResponse extends AbstractModel
{
    /**
     * @var string 枚举值有(大写)：NOTASK（没有同步任务），SYNCING（同步中），FINISHED（同步完成）
     */
    public $State;

    /**
     * @var string 最新开始同步时间
     */
    public $LatestStartTime;

    /**
     * @var string 最新同步结束时间
     */
    public $LatestEndTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $State 枚举值有(大写)：NOTASK（没有同步任务），SYNCING（同步中），FINISHED（同步完成）
     * @param string $LatestStartTime 最新开始同步时间
     * @param string $LatestEndTime 最新同步结束时间
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
        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("LatestStartTime",$param) and $param["LatestStartTime"] !== null) {
            $this->LatestStartTime = $param["LatestStartTime"];
        }

        if (array_key_exists("LatestEndTime",$param) and $param["LatestEndTime"] !== null) {
            $this->LatestEndTime = $param["LatestEndTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
