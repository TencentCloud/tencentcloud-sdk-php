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
 * 维度标签集合。当前已知 key：QueueName（多队列时序）、QueueAlias（队列展示别名，前端图例展示用，alias 缺省时回落为队列 code）、GpuType（GPU 类指标按卡型拆分时携带）、ResourceType（预留，时序路径当前不输出）。未来扩展新维度（如 Region / Zone）时，以 optional 属性形式追加到本 schema
 *
 * @method string getGpuType() 获取<p>GPU 卡型简称，取值如 T4 / A10 / V100 / L20 / H20。来自 TKE GPU Exporter 暴露的 gpu_info.name，由查询层归一（name=&quot;Tesla T4&quot; → GpuType=&quot;T4&quot;）；未识别的卡型保留原始 name 值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpuType(string $GpuType) 设置<p>GPU 卡型简称，取值如 T4 / A10 / V100 / L20 / H20。来自 TKE GPU Exporter 暴露的 gpu_info.name，由查询层归一（name=&quot;Tesla T4&quot; → GpuType=&quot;T4&quot;）；未识别的卡型保留原始 name 值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueueName() 获取<p>队列编码 code（多队列时序查询时，每个 series 携带所属队列 code，与 GpuType 组合区分曲线；展示别名见 QueueAlias）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueueName(string $QueueName) 设置<p>队列编码 code（多队列时序查询时，每个 series 携带所属队列 code，与 GpuType 组合区分曲线；展示别名见 QueueAlias）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueueAlias() 获取<p>队列展示别名（多队列时序查询时每个 series 携带，前端图例展示用；队列不存在或 alias 为空时回落为队列 code）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueueAlias(string $QueueAlias) 设置<p>队列展示别名（多队列时序查询时每个 series 携带，前端图例展示用；队列不存在或 alias 为空时回落为队列 code）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceType() 获取<p>计费项资源类型（CPU / HM_CPU）。Overview 路径的 CPU / 内存类指标按计费项资源类型拆分 series 时携带；时序路径当前不输出该字段（预留对齐 MetricLabels 定义）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceType(string $ResourceType) 设置<p>计费项资源类型（CPU / HM_CPU）。Overview 路径的 CPU / 内存类指标按计费项资源类型拆分 series 时携带；时序路径当前不输出该字段（预留对齐 MetricLabels 定义）</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class MetricLabels extends AbstractModel
{
    /**
     * @var string <p>GPU 卡型简称，取值如 T4 / A10 / V100 / L20 / H20。来自 TKE GPU Exporter 暴露的 gpu_info.name，由查询层归一（name=&quot;Tesla T4&quot; → GpuType=&quot;T4&quot;）；未识别的卡型保留原始 name 值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GpuType;

    /**
     * @var string <p>队列编码 code（多队列时序查询时，每个 series 携带所属队列 code，与 GpuType 组合区分曲线；展示别名见 QueueAlias）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueueName;

    /**
     * @var string <p>队列展示别名（多队列时序查询时每个 series 携带，前端图例展示用；队列不存在或 alias 为空时回落为队列 code）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueueAlias;

    /**
     * @var string <p>计费项资源类型（CPU / HM_CPU）。Overview 路径的 CPU / 内存类指标按计费项资源类型拆分 series 时携带；时序路径当前不输出该字段（预留对齐 MetricLabels 定义）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceType;

    /**
     * @param string $GpuType <p>GPU 卡型简称，取值如 T4 / A10 / V100 / L20 / H20。来自 TKE GPU Exporter 暴露的 gpu_info.name，由查询层归一（name=&quot;Tesla T4&quot; → GpuType=&quot;T4&quot;）；未识别的卡型保留原始 name 值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QueueName <p>队列编码 code（多队列时序查询时，每个 series 携带所属队列 code，与 GpuType 组合区分曲线；展示别名见 QueueAlias）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QueueAlias <p>队列展示别名（多队列时序查询时每个 series 携带，前端图例展示用；队列不存在或 alias 为空时回落为队列 code）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceType <p>计费项资源类型（CPU / HM_CPU）。Overview 路径的 CPU / 内存类指标按计费项资源类型拆分 series 时携带；时序路径当前不输出该字段（预留对齐 MetricLabels 定义）</p>
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
        if (array_key_exists("GpuType",$param) and $param["GpuType"] !== null) {
            $this->GpuType = $param["GpuType"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("QueueAlias",$param) and $param["QueueAlias"] !== null) {
            $this->QueueAlias = $param["QueueAlias"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }
    }
}
