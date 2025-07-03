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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetFlowStatisticByRegion返回参数结构体
 *
 * @method array getNetDetails() 获取流量详细信息
 * @method void setNetDetails(array $NetDetails) 设置流量详细信息
 * @method float getMaxValue() 获取查找时间段流量使用最大值（单位：byte）
 * @method void setMaxValue(float $MaxValue) 设置查找时间段流量使用最大值（单位：byte）
 * @method float getAvgValue() 获取查找时间段流量使用平均值（单位：byte）
 * @method void setAvgValue(float $AvgValue) 设置查找时间段流量使用平均值（单位：byte）
 * @method float getTotalValue() 获取查找时间段流量使用总量（单位：byte）
 * @method void setTotalValue(float $TotalValue) 设置查找时间段流量使用总量（单位：byte）
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetFlowStatisticByRegionResponse extends AbstractModel
{
    /**
     * @var array 流量详细信息
     */
    public $NetDetails;

    /**
     * @var float 查找时间段流量使用最大值（单位：byte）
     */
    public $MaxValue;

    /**
     * @var float 查找时间段流量使用平均值（单位：byte）
     */
    public $AvgValue;

    /**
     * @var float 查找时间段流量使用总量（单位：byte）
     */
    public $TotalValue;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $NetDetails 流量详细信息
     * @param float $MaxValue 查找时间段流量使用最大值（单位：byte）
     * @param float $AvgValue 查找时间段流量使用平均值（单位：byte）
     * @param float $TotalValue 查找时间段流量使用总量（单位：byte）
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
        if (array_key_exists("NetDetails",$param) and $param["NetDetails"] !== null) {
            $this->NetDetails = [];
            foreach ($param["NetDetails"] as $key => $value){
                $obj = new NetDetails();
                $obj->deserialize($value);
                array_push($this->NetDetails, $obj);
            }
        }

        if (array_key_exists("MaxValue",$param) and $param["MaxValue"] !== null) {
            $this->MaxValue = $param["MaxValue"];
        }

        if (array_key_exists("AvgValue",$param) and $param["AvgValue"] !== null) {
            $this->AvgValue = $param["AvgValue"];
        }

        if (array_key_exists("TotalValue",$param) and $param["TotalValue"] !== null) {
            $this->TotalValue = $param["TotalValue"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
