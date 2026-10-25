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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBlockingTrend返回参数结构体
 *
 * @method string getGranularity() 获取<p>使用的粒度名称，取值：SECONDS / MINUTES / FIVE_MINUTES / TEN_MINUTES / FIFTEEN_MINUTES / THIRTY_MINUTES / HOUR。时间窗口 ≤ 1 分钟时自动采用 SECONDS（1 秒）粒度。</p>
 * @method void setGranularity(string $Granularity) 设置<p>使用的粒度名称，取值：SECONDS / MINUTES / FIVE_MINUTES / TEN_MINUTES / FIFTEEN_MINUTES / THIRTY_MINUTES / HOUR。时间窗口 ≤ 1 分钟时自动采用 SECONDS（1 秒）粒度。</p>
 * @method integer getGranularityMs() 获取<p>粒度对应的毫秒值（SECONDS=1000，MINUTES=60000，... HOUR=3600000）。</p>
 * @method void setGranularityMs(integer $GranularityMs) 设置<p>粒度对应的毫秒值（SECONDS=1000，MINUTES=60000，... HOUR=3600000）。</p>
 * @method array getDataPoints() 获取<p>阻塞趋势时序点列表（按 ReportTime 升序，稠密时序：窗口内每个 bucket 都返回一个点，无数据 bucket 补零）。</p>
 * @method void setDataPoints(array $DataPoints) 设置<p>阻塞趋势时序点列表（按 ReportTime 升序，稠密时序：窗口内每个 bucket 都返回一个点，无数据 bucket 补零）。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBlockingTrendResponse extends AbstractModel
{
    /**
     * @var string <p>使用的粒度名称，取值：SECONDS / MINUTES / FIVE_MINUTES / TEN_MINUTES / FIFTEEN_MINUTES / THIRTY_MINUTES / HOUR。时间窗口 ≤ 1 分钟时自动采用 SECONDS（1 秒）粒度。</p>
     */
    public $Granularity;

    /**
     * @var integer <p>粒度对应的毫秒值（SECONDS=1000，MINUTES=60000，... HOUR=3600000）。</p>
     */
    public $GranularityMs;

    /**
     * @var array <p>阻塞趋势时序点列表（按 ReportTime 升序，稠密时序：窗口内每个 bucket 都返回一个点，无数据 bucket 补零）。</p>
     */
    public $DataPoints;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Granularity <p>使用的粒度名称，取值：SECONDS / MINUTES / FIVE_MINUTES / TEN_MINUTES / FIFTEEN_MINUTES / THIRTY_MINUTES / HOUR。时间窗口 ≤ 1 分钟时自动采用 SECONDS（1 秒）粒度。</p>
     * @param integer $GranularityMs <p>粒度对应的毫秒值（SECONDS=1000，MINUTES=60000，... HOUR=3600000）。</p>
     * @param array $DataPoints <p>阻塞趋势时序点列表（按 ReportTime 升序，稠密时序：窗口内每个 bucket 都返回一个点，无数据 bucket 补零）。</p>
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
        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }

        if (array_key_exists("GranularityMs",$param) and $param["GranularityMs"] !== null) {
            $this->GranularityMs = $param["GranularityMs"];
        }

        if (array_key_exists("DataPoints",$param) and $param["DataPoints"] !== null) {
            $this->DataPoints = [];
            foreach ($param["DataPoints"] as $key => $value){
                $obj = new BlockingTrendPoint();
                $obj->deserialize($value);
                array_push($this->DataPoints, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
