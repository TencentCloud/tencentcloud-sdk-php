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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 超级节点上的资源统计
 *
 * @method string getNodeName() 获取节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeName(string $NodeName) 设置节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNum() 获取节点上的资源总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNum(integer $Num) 设置节点上的资源总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getCpu() 获取节点上的总核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpu(float $Cpu) 设置节点上的总核数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMemory() 获取节点上的总内存数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemory(float $Memory) 设置节点上的总内存数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getGpu() 获取节点上的总 GPU 卡数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpu(float $Gpu) 设置节点上的总 GPU 卡数
注意：此字段可能返回 null，表示取不到有效值。
 */
class SuperNodeResource extends AbstractModel
{
    /**
     * @var string 节点名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeName;

    /**
     * @var integer 节点上的资源总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Num;

    /**
     * @var float 节点上的总核数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cpu;

    /**
     * @var float 节点上的总内存数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Memory;

    /**
     * @var float 节点上的总 GPU 卡数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Gpu;

    /**
     * @param string $NodeName 节点名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Num 节点上的资源总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Cpu 节点上的总核数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Memory 节点上的总内存数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Gpu 节点上的总 GPU 卡数
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
        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Gpu",$param) and $param["Gpu"] !== null) {
            $this->Gpu = $param["Gpu"];
        }
    }
}
