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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePushBandwidthAndFluxList返回参数结构体
 *
 * @method string getPeakBandwidthTime() 获取峰值带宽所在时间点，
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setPeakBandwidthTime(string $PeakBandwidthTime) 设置峰值带宽所在时间点，
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method float getPeakBandwidth() 获取峰值带宽，单位是 Mbps。
 * @method void setPeakBandwidth(float $PeakBandwidth) 设置峰值带宽，单位是 Mbps。
 * @method string getP95PeakBandwidthTime() 获取95峰值带宽所在时间点，
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setP95PeakBandwidthTime(string $P95PeakBandwidthTime) 设置95峰值带宽所在时间点，
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method float getP95PeakBandwidth() 获取95峰值带宽，单位是 Mbps。
 * @method void setP95PeakBandwidth(float $P95PeakBandwidth) 设置95峰值带宽，单位是 Mbps。
 * @method float getSumFlux() 获取总流量，单位是 MB。
 * @method void setSumFlux(float $SumFlux) 设置总流量，单位是 MB。
 * @method array getDataInfoList() 获取明细数据信息。
 * @method void setDataInfoList(array $DataInfoList) 设置明细数据信息。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePushBandwidthAndFluxListResponse extends AbstractModel
{
    /**
     * @var string 峰值带宽所在时间点，
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $PeakBandwidthTime;

    /**
     * @var float 峰值带宽，单位是 Mbps。
     */
    public $PeakBandwidth;

    /**
     * @var string 95峰值带宽所在时间点，
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $P95PeakBandwidthTime;

    /**
     * @var float 95峰值带宽，单位是 Mbps。
     */
    public $P95PeakBandwidth;

    /**
     * @var float 总流量，单位是 MB。
     */
    public $SumFlux;

    /**
     * @var array 明细数据信息。
     */
    public $DataInfoList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $PeakBandwidthTime 峰值带宽所在时间点，
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param float $PeakBandwidth 峰值带宽，单位是 Mbps。
     * @param string $P95PeakBandwidthTime 95峰值带宽所在时间点，
使用UTC格式时间，
例如：2019-01-08T10:00:00Z。
注意：北京时间值为 UTC 时间值 + 8 小时，格式按照 ISO 8601 标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param float $P95PeakBandwidth 95峰值带宽，单位是 Mbps。
     * @param float $SumFlux 总流量，单位是 MB。
     * @param array $DataInfoList 明细数据信息。
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
        if (array_key_exists("PeakBandwidthTime",$param) and $param["PeakBandwidthTime"] !== null) {
            $this->PeakBandwidthTime = $param["PeakBandwidthTime"];
        }

        if (array_key_exists("PeakBandwidth",$param) and $param["PeakBandwidth"] !== null) {
            $this->PeakBandwidth = $param["PeakBandwidth"];
        }

        if (array_key_exists("P95PeakBandwidthTime",$param) and $param["P95PeakBandwidthTime"] !== null) {
            $this->P95PeakBandwidthTime = $param["P95PeakBandwidthTime"];
        }

        if (array_key_exists("P95PeakBandwidth",$param) and $param["P95PeakBandwidth"] !== null) {
            $this->P95PeakBandwidth = $param["P95PeakBandwidth"];
        }

        if (array_key_exists("SumFlux",$param) and $param["SumFlux"] !== null) {
            $this->SumFlux = $param["SumFlux"];
        }

        if (array_key_exists("DataInfoList",$param) and $param["DataInfoList"] !== null) {
            $this->DataInfoList = [];
            foreach ($param["DataInfoList"] as $key => $value){
                $obj = new BillDataInfo();
                $obj->deserialize($value);
                array_push($this->DataInfoList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
