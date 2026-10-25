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
 * 分析指标趋势点
 *
 * @method integer getTs() 获取<p>时间戳 Unix 毫秒</p>
 * @method void setTs(integer $Ts) 设置<p>时间戳 Unix 毫秒</p>
 * @method array getMetrics() 获取<p>该桶指标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetrics(array $Metrics) 设置<p>该桶指标</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class MetricTrendPoint extends AbstractModel
{
    /**
     * @var integer <p>时间戳 Unix 毫秒</p>
     */
    public $Ts;

    /**
     * @var array <p>该桶指标</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Metrics;

    /**
     * @param integer $Ts <p>时间戳 Unix 毫秒</p>
     * @param array $Metrics <p>该桶指标</p>
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
        if (array_key_exists("Ts",$param) and $param["Ts"] !== null) {
            $this->Ts = $param["Ts"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = [];
            foreach ($param["Metrics"] as $key => $value){
                $obj = new FloatNameValue();
                $obj->deserialize($value);
                array_push($this->Metrics, $obj);
            }
        }
    }
}
