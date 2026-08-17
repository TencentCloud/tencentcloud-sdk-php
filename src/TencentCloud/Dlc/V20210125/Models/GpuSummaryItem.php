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
 * 运行中部署的 GPU 资源汇总
 *
 * @method string getGpuType() 获取<p>GPU 型号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpuType(string $GpuType) 设置<p>GPU 型号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGpuCount() 获取<p>GPU 总数（gpuNum × replicas）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpuCount(integer $GpuCount) 设置<p>GPU 总数（gpuNum × replicas）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReplicas() 获取<p>运行中的副本数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicas(integer $Replicas) 设置<p>运行中的副本数</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class GpuSummaryItem extends AbstractModel
{
    /**
     * @var string <p>GPU 型号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GpuType;

    /**
     * @var integer <p>GPU 总数（gpuNum × replicas）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GpuCount;

    /**
     * @var integer <p>运行中的副本数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Replicas;

    /**
     * @param string $GpuType <p>GPU 型号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GpuCount <p>GPU 总数（gpuNum × replicas）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Replicas <p>运行中的副本数</p>
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

        if (array_key_exists("GpuCount",$param) and $param["GpuCount"] !== null) {
            $this->GpuCount = $param["GpuCount"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }
    }
}
