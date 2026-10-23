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
 * DescribeLogAnalysisStatistics返回参数结构体
 *
 * @method array getColumns() 获取<p>日志分析统计结果的列名，对应入参 Query 中 SQL 部分 SELECT 的字段。<br>示例：<br>入参 Query = <code>${EdgeCacheStatus} in [&#39;miss&#39;,&#39;other&#39;] | select EdgeCacheStatus as status, count(*) as cnt group by status limit 2</code><br>出参 Columns  = <code>[&quot;status&quot;,&quot;cnt&quot;]</code></p>
 * @method void setColumns(array $Columns) 设置<p>日志分析统计结果的列名，对应入参 Query 中 SQL 部分 SELECT 的字段。<br>示例：<br>入参 Query = <code>${EdgeCacheStatus} in [&#39;miss&#39;,&#39;other&#39;] | select EdgeCacheStatus as status, count(*) as cnt group by status limit 2</code><br>出参 Columns  = <code>[&quot;status&quot;,&quot;cnt&quot;]</code></p>
 * @method array getRecords() 获取<p>日志分析统计结果的数据行，每行值下标与列下标一一对应。<br>示例：<br>Columns = <code>[&quot;status&quot;,&quot;cnt&quot;]</code><br>Records = <code>[[&quot;miss&quot;,&quot;9695&quot;],[&quot;other&quot;,&quot;278&quot;]]</code></p>
 * @method void setRecords(array $Records) 设置<p>日志分析统计结果的数据行，每行值下标与列下标一一对应。<br>示例：<br>Columns = <code>[&quot;status&quot;,&quot;cnt&quot;]</code><br>Records = <code>[[&quot;miss&quot;,&quot;9695&quot;],[&quot;other&quot;,&quot;278&quot;]]</code></p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLogAnalysisStatisticsResponse extends AbstractModel
{
    /**
     * @var array <p>日志分析统计结果的列名，对应入参 Query 中 SQL 部分 SELECT 的字段。<br>示例：<br>入参 Query = <code>${EdgeCacheStatus} in [&#39;miss&#39;,&#39;other&#39;] | select EdgeCacheStatus as status, count(*) as cnt group by status limit 2</code><br>出参 Columns  = <code>[&quot;status&quot;,&quot;cnt&quot;]</code></p>
     */
    public $Columns;

    /**
     * @var array <p>日志分析统计结果的数据行，每行值下标与列下标一一对应。<br>示例：<br>Columns = <code>[&quot;status&quot;,&quot;cnt&quot;]</code><br>Records = <code>[[&quot;miss&quot;,&quot;9695&quot;],[&quot;other&quot;,&quot;278&quot;]]</code></p>
     */
    public $Records;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Columns <p>日志分析统计结果的列名，对应入参 Query 中 SQL 部分 SELECT 的字段。<br>示例：<br>入参 Query = <code>${EdgeCacheStatus} in [&#39;miss&#39;,&#39;other&#39;] | select EdgeCacheStatus as status, count(*) as cnt group by status limit 2</code><br>出参 Columns  = <code>[&quot;status&quot;,&quot;cnt&quot;]</code></p>
     * @param array $Records <p>日志分析统计结果的数据行，每行值下标与列下标一一对应。<br>示例：<br>Columns = <code>[&quot;status&quot;,&quot;cnt&quot;]</code><br>Records = <code>[[&quot;miss&quot;,&quot;9695&quot;],[&quot;other&quot;,&quot;278&quot;]]</code></p>
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
        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = $param["Columns"];
        }

        if (array_key_exists("Records",$param) and $param["Records"] !== null) {
            $this->Records = [];
            foreach ($param["Records"] as $key => $value){
                $obj = new StatisticsRecord();
                $obj->deserialize($value);
                array_push($this->Records, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
