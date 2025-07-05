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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetTopNMonitorData返回参数结构体
 *
 * @method string getMetricName() 获取指标名	
 * @method void setMetricName(string $MetricName) 设置指标名	
 * @method integer getPeriod() 获取统计周期	
 * @method void setPeriod(integer $Period) 设置统计周期	
 * @method integer getN() 获取topN
 * @method void setN(integer $N) 设置topN
 * @method array getOrderedDataPoints() 获取排序的监控数据	
 * @method void setOrderedDataPoints(array $OrderedDataPoints) 设置排序的监控数据	
 * @method string getMsg() 获取返回信息
 * @method void setMsg(string $Msg) 设置返回信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetTopNMonitorDataResponse extends AbstractModel
{
    /**
     * @var string 指标名	
     */
    public $MetricName;

    /**
     * @var integer 统计周期	
     */
    public $Period;

    /**
     * @var integer topN
     */
    public $N;

    /**
     * @var array 排序的监控数据	
     */
    public $OrderedDataPoints;

    /**
     * @var string 返回信息
     */
    public $Msg;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $MetricName 指标名	
     * @param integer $Period 统计周期	
     * @param integer $N topN
     * @param array $OrderedDataPoints 排序的监控数据	
     * @param string $Msg 返回信息
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
        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("N",$param) and $param["N"] !== null) {
            $this->N = $param["N"];
        }

        if (array_key_exists("OrderedDataPoints",$param) and $param["OrderedDataPoints"] !== null) {
            $this->OrderedDataPoints = [];
            foreach ($param["OrderedDataPoints"] as $key => $value){
                $obj = new SingleOrderedDataPoint();
                $obj->deserialize($value);
                array_push($this->OrderedDataPoints, $obj);
            }
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
