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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConcurrencyUsage返回参数结构体
 *
 * @method integer getAvailableConcurrency() 获取可用并发数
 * @method void setAvailableConcurrency(integer $AvailableConcurrency) 设置可用并发数
 * @method integer getConcurrencyPeak() 获取并发峰值
 * @method void setConcurrencyPeak(integer $ConcurrencyPeak) 设置并发峰值
 * @method integer getExceedUsageTime() 获取调用超可用次数
 * @method void setExceedUsageTime(integer $ExceedUsageTime) 设置调用超可用次数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeConcurrencyUsageResponse extends AbstractModel
{
    /**
     * @var integer 可用并发数
     */
    public $AvailableConcurrency;

    /**
     * @var integer 并发峰值
     */
    public $ConcurrencyPeak;

    /**
     * @var integer 调用超可用次数
     */
    public $ExceedUsageTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AvailableConcurrency 可用并发数
     * @param integer $ConcurrencyPeak 并发峰值
     * @param integer $ExceedUsageTime 调用超可用次数
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
        if (array_key_exists("AvailableConcurrency",$param) and $param["AvailableConcurrency"] !== null) {
            $this->AvailableConcurrency = $param["AvailableConcurrency"];
        }

        if (array_key_exists("ConcurrencyPeak",$param) and $param["ConcurrencyPeak"] !== null) {
            $this->ConcurrencyPeak = $param["ConcurrencyPeak"];
        }

        if (array_key_exists("ExceedUsageTime",$param) and $param["ExceedUsageTime"] !== null) {
            $this->ExceedUsageTime = $param["ExceedUsageTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
