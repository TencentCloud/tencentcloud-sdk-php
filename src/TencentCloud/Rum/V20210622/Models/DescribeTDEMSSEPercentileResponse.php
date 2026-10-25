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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTDEMSSEPercentile返回参数结构体
 *
 * @method integer getIntervalSec() 获取<p>时间桶宽度，单位秒，与趋势查询使用同一套分桶。</p>
 * @method void setIntervalSec(integer $IntervalSec) 设置<p>时间桶宽度，单位秒，与趋势查询使用同一套分桶。</p>
 * @method float getAverage() 获取<p>整个时间窗的算术平均。没有有效样本时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAverage(float $Average) 设置<p>整个时间窗的算术平均。没有有效样本时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getP50() 获取<p>整个时间窗的 50 分位。没有有效样本时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setP50(float $P50) 设置<p>整个时间窗的 50 分位。没有有效样本时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getP75() 获取<p>整个时间窗的 75 分位。没有有效样本时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setP75(float $P75) 设置<p>整个时间窗的 75 分位。没有有效样本时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getP95() 获取<p>整个时间窗的 95 分位。没有有效样本时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setP95(float $P95) 设置<p>整个时间窗的 95 分位。没有有效样本时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getP99() 获取<p>整个时间窗的 99 分位。没有有效样本时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setP99(float $P99) 设置<p>整个时间窗的 99 分位。没有有效样本时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPoints() 获取<p>各时间桶的平均值和分位。没有样本的桶不返回，全部没有样本时为空数组。</p>
 * @method void setPoints(array $Points) 设置<p>各时间桶的平均值和分位。没有样本的桶不返回，全部没有样本时为空数组。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTDEMSSEPercentileResponse extends AbstractModel
{
    /**
     * @var integer <p>时间桶宽度，单位秒，与趋势查询使用同一套分桶。</p>
     */
    public $IntervalSec;

    /**
     * @var float <p>整个时间窗的算术平均。没有有效样本时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Average;

    /**
     * @var float <p>整个时间窗的 50 分位。没有有效样本时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $P50;

    /**
     * @var float <p>整个时间窗的 75 分位。没有有效样本时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $P75;

    /**
     * @var float <p>整个时间窗的 95 分位。没有有效样本时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $P95;

    /**
     * @var float <p>整个时间窗的 99 分位。没有有效样本时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $P99;

    /**
     * @var array <p>各时间桶的平均值和分位。没有样本的桶不返回，全部没有样本时为空数组。</p>
     */
    public $Points;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $IntervalSec <p>时间桶宽度，单位秒，与趋势查询使用同一套分桶。</p>
     * @param float $Average <p>整个时间窗的算术平均。没有有效样本时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $P50 <p>整个时间窗的 50 分位。没有有效样本时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $P75 <p>整个时间窗的 75 分位。没有有效样本时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $P95 <p>整个时间窗的 95 分位。没有有效样本时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $P99 <p>整个时间窗的 99 分位。没有有效样本时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Points <p>各时间桶的平均值和分位。没有样本的桶不返回，全部没有样本时为空数组。</p>
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
        if (array_key_exists("IntervalSec",$param) and $param["IntervalSec"] !== null) {
            $this->IntervalSec = $param["IntervalSec"];
        }

        if (array_key_exists("Average",$param) and $param["Average"] !== null) {
            $this->Average = $param["Average"];
        }

        if (array_key_exists("P50",$param) and $param["P50"] !== null) {
            $this->P50 = $param["P50"];
        }

        if (array_key_exists("P75",$param) and $param["P75"] !== null) {
            $this->P75 = $param["P75"];
        }

        if (array_key_exists("P95",$param) and $param["P95"] !== null) {
            $this->P95 = $param["P95"];
        }

        if (array_key_exists("P99",$param) and $param["P99"] !== null) {
            $this->P99 = $param["P99"];
        }

        if (array_key_exists("Points",$param) and $param["Points"] !== null) {
            $this->Points = [];
            foreach ($param["Points"] as $key => $value){
                $obj = new TDEMSSEPercentilePoint();
                $obj->deserialize($value);
                array_push($this->Points, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
