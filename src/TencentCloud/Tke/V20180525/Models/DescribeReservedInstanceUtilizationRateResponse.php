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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReservedInstanceUtilizationRate返回参数结构体
 *
 * @method array getUtilizationRateSet() 获取预留券使用率
 * @method void setUtilizationRateSet(array $UtilizationRateSet) 设置预留券使用率
 * @method integer getPodNum() 获取按量计费的 Pod 总数
 * @method void setPodNum(integer $PodNum) 设置按量计费的 Pod 总数
 * @method float getPodRate() 获取 Pod 被预留券抵扣的抵扣率
 * @method void setPodRate(float $PodRate) 设置 Pod 被预留券抵扣的抵扣率
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeReservedInstanceUtilizationRateResponse extends AbstractModel
{
    /**
     * @var array 预留券使用率
     */
    public $UtilizationRateSet;

    /**
     * @var integer 按量计费的 Pod 总数
     */
    public $PodNum;

    /**
     * @var float  Pod 被预留券抵扣的抵扣率
     */
    public $PodRate;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $UtilizationRateSet 预留券使用率
     * @param integer $PodNum 按量计费的 Pod 总数
     * @param float $PodRate  Pod 被预留券抵扣的抵扣率
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
        if (array_key_exists("UtilizationRateSet",$param) and $param["UtilizationRateSet"] !== null) {
            $this->UtilizationRateSet = [];
            foreach ($param["UtilizationRateSet"] as $key => $value){
                $obj = new ReservedInstanceUtilizationRate();
                $obj->deserialize($value);
                array_push($this->UtilizationRateSet, $obj);
            }
        }

        if (array_key_exists("PodNum",$param) and $param["PodNum"] !== null) {
            $this->PodNum = $param["PodNum"];
        }

        if (array_key_exists("PodRate",$param) and $param["PodRate"] !== null) {
            $this->PodRate = $param["PodRate"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
