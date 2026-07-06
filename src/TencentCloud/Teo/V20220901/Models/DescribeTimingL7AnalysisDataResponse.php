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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTimingL7AnalysisData返回参数结构体
 *
 * @method integer getTotalCount() 获取<p>查询结果的总条数。</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>查询结果的总条数。</p>
 * @method array getData() 获取<p>七层时序流量数据列表。<br>对于不同的查询指标，根据指标值类型的不同，会从不同的参数返回时序数据。<br>目前存在的值类型有以下两种：</p><ul>  <li><strong>Integer</strong>：<code>Integer</code> 值类型的指标将从 <code>Data.N.TypeValue</code> 返回对应时序数据。<br>对应的查询指标 <code>MetricName</code> 有：    <ul>      <li><code>l7Flow_outFlux</code>：L7 EdgeOne 响应流量，单位：Byte；</li>      <li><code>l7Flow_inFlux</code>：L7 客户端请求流量，单位：Byte；</li>      <li><code>l7Flow_flux</code>：L7 访问总流量（EdgeOne 响应+客户端请求），单位：Byte；</li>      <li><code>l7Flow_outBandwidth</code>：L7 EdgeOne 响应带宽，单位：bps；</li>      <li><code>l7Flow_inBandwidth</code>：L7 客户端请求带宽，单位：bps；</li>      <li><code>l7Flow_bandwidth</code>：L7 访问总带宽（EdgeOne 响应+客户端请求），单位：bps；</li>      <li><code>l7Flow_request</code>：L7 访问请求数，单位：次；</li>      <li><code>l7Flow_avgResponseTime</code>：L7 访问平均响应耗时，单位：ms；</li>      <li><code>l7Flow_avgFirstByteResponseTime</code>：L7 访问平均首字节响应耗时，单位：ms。</li>    </ul>  </li>  <li><strong>Float</strong>：<code>Float</code> 值类型的指标将从 <code>Data.N.FloatTypeValue</code> 返回对应时序数据。<br>对应的查询指标 <code>MetricName</code> 有：    <ul>      <li><code>l7Flow_requestRate</code>：L7 访问请求速率，单位：qps。</li>    </ul>  </li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(array $Data) 设置<p>七层时序流量数据列表。<br>对于不同的查询指标，根据指标值类型的不同，会从不同的参数返回时序数据。<br>目前存在的值类型有以下两种：</p><ul>  <li><strong>Integer</strong>：<code>Integer</code> 值类型的指标将从 <code>Data.N.TypeValue</code> 返回对应时序数据。<br>对应的查询指标 <code>MetricName</code> 有：    <ul>      <li><code>l7Flow_outFlux</code>：L7 EdgeOne 响应流量，单位：Byte；</li>      <li><code>l7Flow_inFlux</code>：L7 客户端请求流量，单位：Byte；</li>      <li><code>l7Flow_flux</code>：L7 访问总流量（EdgeOne 响应+客户端请求），单位：Byte；</li>      <li><code>l7Flow_outBandwidth</code>：L7 EdgeOne 响应带宽，单位：bps；</li>      <li><code>l7Flow_inBandwidth</code>：L7 客户端请求带宽，单位：bps；</li>      <li><code>l7Flow_bandwidth</code>：L7 访问总带宽（EdgeOne 响应+客户端请求），单位：bps；</li>      <li><code>l7Flow_request</code>：L7 访问请求数，单位：次；</li>      <li><code>l7Flow_avgResponseTime</code>：L7 访问平均响应耗时，单位：ms；</li>      <li><code>l7Flow_avgFirstByteResponseTime</code>：L7 访问平均首字节响应耗时，单位：ms。</li>    </ul>  </li>  <li><strong>Float</strong>：<code>Float</code> 值类型的指标将从 <code>Data.N.FloatTypeValue</code> 返回对应时序数据。<br>对应的查询指标 <code>MetricName</code> 有：    <ul>      <li><code>l7Flow_requestRate</code>：L7 访问请求速率，单位：qps。</li>    </ul>  </li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTimingL7AnalysisDataResponse extends AbstractModel
{
    /**
     * @var integer <p>查询结果的总条数。</p>
     */
    public $TotalCount;

    /**
     * @var array <p>七层时序流量数据列表。<br>对于不同的查询指标，根据指标值类型的不同，会从不同的参数返回时序数据。<br>目前存在的值类型有以下两种：</p><ul>  <li><strong>Integer</strong>：<code>Integer</code> 值类型的指标将从 <code>Data.N.TypeValue</code> 返回对应时序数据。<br>对应的查询指标 <code>MetricName</code> 有：    <ul>      <li><code>l7Flow_outFlux</code>：L7 EdgeOne 响应流量，单位：Byte；</li>      <li><code>l7Flow_inFlux</code>：L7 客户端请求流量，单位：Byte；</li>      <li><code>l7Flow_flux</code>：L7 访问总流量（EdgeOne 响应+客户端请求），单位：Byte；</li>      <li><code>l7Flow_outBandwidth</code>：L7 EdgeOne 响应带宽，单位：bps；</li>      <li><code>l7Flow_inBandwidth</code>：L7 客户端请求带宽，单位：bps；</li>      <li><code>l7Flow_bandwidth</code>：L7 访问总带宽（EdgeOne 响应+客户端请求），单位：bps；</li>      <li><code>l7Flow_request</code>：L7 访问请求数，单位：次；</li>      <li><code>l7Flow_avgResponseTime</code>：L7 访问平均响应耗时，单位：ms；</li>      <li><code>l7Flow_avgFirstByteResponseTime</code>：L7 访问平均首字节响应耗时，单位：ms。</li>    </ul>  </li>  <li><strong>Float</strong>：<code>Float</code> 值类型的指标将从 <code>Data.N.FloatTypeValue</code> 返回对应时序数据。<br>对应的查询指标 <code>MetricName</code> 有：    <ul>      <li><code>l7Flow_requestRate</code>：L7 访问请求速率，单位：qps。</li>    </ul>  </li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount <p>查询结果的总条数。</p>
     * @param array $Data <p>七层时序流量数据列表。<br>对于不同的查询指标，根据指标值类型的不同，会从不同的参数返回时序数据。<br>目前存在的值类型有以下两种：</p><ul>  <li><strong>Integer</strong>：<code>Integer</code> 值类型的指标将从 <code>Data.N.TypeValue</code> 返回对应时序数据。<br>对应的查询指标 <code>MetricName</code> 有：    <ul>      <li><code>l7Flow_outFlux</code>：L7 EdgeOne 响应流量，单位：Byte；</li>      <li><code>l7Flow_inFlux</code>：L7 客户端请求流量，单位：Byte；</li>      <li><code>l7Flow_flux</code>：L7 访问总流量（EdgeOne 响应+客户端请求），单位：Byte；</li>      <li><code>l7Flow_outBandwidth</code>：L7 EdgeOne 响应带宽，单位：bps；</li>      <li><code>l7Flow_inBandwidth</code>：L7 客户端请求带宽，单位：bps；</li>      <li><code>l7Flow_bandwidth</code>：L7 访问总带宽（EdgeOne 响应+客户端请求），单位：bps；</li>      <li><code>l7Flow_request</code>：L7 访问请求数，单位：次；</li>      <li><code>l7Flow_avgResponseTime</code>：L7 访问平均响应耗时，单位：ms；</li>      <li><code>l7Flow_avgFirstByteResponseTime</code>：L7 访问平均首字节响应耗时，单位：ms。</li>    </ul>  </li>  <li><strong>Float</strong>：<code>Float</code> 值类型的指标将从 <code>Data.N.FloatTypeValue</code> 返回对应时序数据。<br>对应的查询指标 <code>MetricName</code> 有：    <ul>      <li><code>l7Flow_requestRate</code>：L7 访问请求速率，单位：qps。</li>    </ul>  </li></ul>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new TimingDataRecord();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
