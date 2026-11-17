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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 监控指标值（不含展示名，前端按 MetricKey 自行映射文案）
 *
 * @method string getMetricKey() 获取<p>指标键名，如 cpu_allocation、cpu_quota_total 等</p>
 * @method void setMetricKey(string $MetricKey) 设置<p>指标键名，如 cpu_allocation、cpu_quota_total 等</p>
 * @method float getValue() 获取<p>指标当前值，可能为 null（PromQL 返回空数据集时），前端按 null 视作&quot;无数据&quot;处理</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(float $Value) 设置<p>指标当前值，可能为 null（PromQL 返回空数据集时），前端按 null 视作&quot;无数据&quot;处理</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnit() 获取<p>指标单位，如 core、card、GB</p>
 * @method void setUnit(string $Unit) 设置<p>指标单位，如 core、card、GB</p>
 * @method string getResourceType() 获取<p>资源类型：cpu / gpu / memory / vram / kueue / consumption</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceType(string $ResourceType) 设置<p>资源类型：cpu / gpu / memory / vram / kueue / consumption</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MetricLabels getLabels() 获取<p>维度标签。单 series 指标（CPU / 内存 / Kueue 等）不出现此字段；多 series 指标（GPU 类按卡型拆分）每条 MetricValue 携带不同的 Labels 区分维度。前端按 (MetricKey, Labels) 二元组识别每条记录</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(MetricLabels $Labels) 设置<p>维度标签。单 series 指标（CPU / 内存 / Kueue 等）不出现此字段；多 series 指标（GPU 类按卡型拆分）每条 MetricValue 携带不同的 Labels 区分维度。前端按 (MetricKey, Labels) 二元组识别每条记录</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class MetricValue extends AbstractModel
{
    /**
     * @var string <p>指标键名，如 cpu_allocation、cpu_quota_total 等</p>
     */
    public $MetricKey;

    /**
     * @var float <p>指标当前值，可能为 null（PromQL 返回空数据集时），前端按 null 视作&quot;无数据&quot;处理</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var string <p>指标单位，如 core、card、GB</p>
     */
    public $Unit;

    /**
     * @var string <p>资源类型：cpu / gpu / memory / vram / kueue / consumption</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceType;

    /**
     * @var MetricLabels <p>维度标签。单 series 指标（CPU / 内存 / Kueue 等）不出现此字段；多 series 指标（GPU 类按卡型拆分）每条 MetricValue 携带不同的 Labels 区分维度。前端按 (MetricKey, Labels) 二元组识别每条记录</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @param string $MetricKey <p>指标键名，如 cpu_allocation、cpu_quota_total 等</p>
     * @param float $Value <p>指标当前值，可能为 null（PromQL 返回空数据集时），前端按 null 视作&quot;无数据&quot;处理</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Unit <p>指标单位，如 core、card、GB</p>
     * @param string $ResourceType <p>资源类型：cpu / gpu / memory / vram / kueue / consumption</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MetricLabels $Labels <p>维度标签。单 series 指标（CPU / 内存 / Kueue 等）不出现此字段；多 series 指标（GPU 类按卡型拆分）每条 MetricValue 携带不同的 Labels 区分维度。前端按 (MetricKey, Labels) 二元组识别每条记录</p>
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
        if (array_key_exists("MetricKey",$param) and $param["MetricKey"] !== null) {
            $this->MetricKey = $param["MetricKey"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = new MetricLabels();
            $this->Labels->deserialize($param["Labels"]);
        }
    }
}
