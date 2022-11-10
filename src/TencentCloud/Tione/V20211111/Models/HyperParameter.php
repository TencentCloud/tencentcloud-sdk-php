<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型专业参数
 *
 * @method string getMaxNNZ() 获取最大nnz数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxNNZ(string $MaxNNZ) 设置最大nnz数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSlotNum() 获取slot数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSlotNum(string $SlotNum) 设置slot数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCpuCachePercentage() 获取gpu cache 使用率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuCachePercentage(string $CpuCachePercentage) 设置gpu cache 使用率
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGpuCachePercentage() 获取cpu cache 使用率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpuCachePercentage(string $GpuCachePercentage) 设置cpu cache 使用率
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnableDistributed() 获取是否开启分布式模式(true/false)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableDistributed(string $EnableDistributed) 设置是否开启分布式模式(true/false)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMinBlockSizePt() 获取TORCH_SCRIPT、MMDETECTION、DETECTRON2、HUGGINGFACE格式在进行优化时切分子图的最小算子数目，一般无需进行改动，默认为3
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinBlockSizePt(string $MinBlockSizePt) 设置TORCH_SCRIPT、MMDETECTION、DETECTRON2、HUGGINGFACE格式在进行优化时切分子图的最小算子数目，一般无需进行改动，默认为3
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMinBlockSizeTf() 获取FROZEN_GRAPH、SAVED_MODEL格式在进行优化时切分子图的最小算子数目，一般无需进行改动，默认为10
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinBlockSizeTf(string $MinBlockSizeTf) 设置FROZEN_GRAPH、SAVED_MODEL格式在进行优化时切分子图的最小算子数目，一般无需进行改动，默认为10
注意：此字段可能返回 null，表示取不到有效值。
 */
class HyperParameter extends AbstractModel
{
    /**
     * @var string 最大nnz数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxNNZ;

    /**
     * @var string slot数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SlotNum;

    /**
     * @var string gpu cache 使用率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuCachePercentage;

    /**
     * @var string cpu cache 使用率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GpuCachePercentage;

    /**
     * @var string 是否开启分布式模式(true/false)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableDistributed;

    /**
     * @var string TORCH_SCRIPT、MMDETECTION、DETECTRON2、HUGGINGFACE格式在进行优化时切分子图的最小算子数目，一般无需进行改动，默认为3
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinBlockSizePt;

    /**
     * @var string FROZEN_GRAPH、SAVED_MODEL格式在进行优化时切分子图的最小算子数目，一般无需进行改动，默认为10
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinBlockSizeTf;

    /**
     * @param string $MaxNNZ 最大nnz数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SlotNum slot数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CpuCachePercentage gpu cache 使用率
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GpuCachePercentage cpu cache 使用率
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnableDistributed 是否开启分布式模式(true/false)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MinBlockSizePt TORCH_SCRIPT、MMDETECTION、DETECTRON2、HUGGINGFACE格式在进行优化时切分子图的最小算子数目，一般无需进行改动，默认为3
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MinBlockSizeTf FROZEN_GRAPH、SAVED_MODEL格式在进行优化时切分子图的最小算子数目，一般无需进行改动，默认为10
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
        if (array_key_exists("MaxNNZ",$param) and $param["MaxNNZ"] !== null) {
            $this->MaxNNZ = $param["MaxNNZ"];
        }

        if (array_key_exists("SlotNum",$param) and $param["SlotNum"] !== null) {
            $this->SlotNum = $param["SlotNum"];
        }

        if (array_key_exists("CpuCachePercentage",$param) and $param["CpuCachePercentage"] !== null) {
            $this->CpuCachePercentage = $param["CpuCachePercentage"];
        }

        if (array_key_exists("GpuCachePercentage",$param) and $param["GpuCachePercentage"] !== null) {
            $this->GpuCachePercentage = $param["GpuCachePercentage"];
        }

        if (array_key_exists("EnableDistributed",$param) and $param["EnableDistributed"] !== null) {
            $this->EnableDistributed = $param["EnableDistributed"];
        }

        if (array_key_exists("MinBlockSizePt",$param) and $param["MinBlockSizePt"] !== null) {
            $this->MinBlockSizePt = $param["MinBlockSizePt"];
        }

        if (array_key_exists("MinBlockSizeTf",$param) and $param["MinBlockSizeTf"] !== null) {
            $this->MinBlockSizeTf = $param["MinBlockSizeTf"];
        }
    }
}
