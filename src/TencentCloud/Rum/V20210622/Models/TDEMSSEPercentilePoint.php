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
 * 大模型对话分位时间桶
 *
 * @method integer getTime() 获取<p>时间桶起点，Unix 毫秒。</p>
 * @method void setTime(integer $Time) 设置<p>时间桶起点，Unix 毫秒。</p>
 * @method float getAverage() 获取<p>该桶算术平均值。没有样本的桶不返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAverage(float $Average) 设置<p>该桶算术平均值。没有样本的桶不返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getP50() 获取<p>50 分位。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setP50(float $P50) 设置<p>50 分位。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getP75() 获取<p>75 分位。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setP75(float $P75) 设置<p>75 分位。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getP95() 获取<p>95 分位。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setP95(float $P95) 设置<p>95 分位。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getP99() 获取<p>99 分位。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setP99(float $P99) 设置<p>99 分位。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TDEMSSEPercentilePoint extends AbstractModel
{
    /**
     * @var integer <p>时间桶起点，Unix 毫秒。</p>
     */
    public $Time;

    /**
     * @var float <p>该桶算术平均值。没有样本的桶不返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Average;

    /**
     * @var float <p>50 分位。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $P50;

    /**
     * @var float <p>75 分位。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $P75;

    /**
     * @var float <p>95 分位。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $P95;

    /**
     * @var float <p>99 分位。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $P99;

    /**
     * @param integer $Time <p>时间桶起点，Unix 毫秒。</p>
     * @param float $Average <p>该桶算术平均值。没有样本的桶不返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $P50 <p>50 分位。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $P75 <p>75 分位。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $P95 <p>95 分位。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $P99 <p>99 分位。</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
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
    }
}
